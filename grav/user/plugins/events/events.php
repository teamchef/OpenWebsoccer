<?php
/**
 * Grav Events Plugin
 *
 * The Events Plugin provides Event Listings and Calendars to Grav CMS using
 * event frontmatter. The event: frontmatter is converted to taxonomy so that
 * colletions can be specified in page headers.
 *
 * PHP version 5.6+
 *
 * @package    Events
 * @author     Kaleb Heitzman <kalebheitzman@gmail.com>
 * @copyright  2016 Kaleb Heitzman
 * @license    https://opensource.org/licenses/MIT MIT
 * @version    1.0.8
 * @link       https://github.com/kalebheitzman/grav-plugin-events
 * @since      1.0.0 Initial Release
 */

namespace Grav\Plugin;

// import classes
require_once __DIR__.'/vendor/autoload.php';
require_once __DIR__.'/classes/calendar.php';
require_once __DIR__.'/classes/events.php';

use Grav\Common\Plugin;
use Grav\Common\Grav;
use Grav\Common\Page\Collection;
use Grav\Common\Page\Page;
use Grav\Common\Page\Pages;
use Grav\Common\Taxonomy;
use RocketTheme\Toolbox\Event\Event;

use Carbon\Carbon;

use Events\Calendar;
use Events\Events;

/**
 * Events Plugin Class
 *
 * The Events Plugin provides Event Listings and Calendars for your Grav
 * powered website. This plugin searches each page for `event:` front matter
 * and then sets a custom taxonomy named *type* to *event*. It also sets
 * a repeating and frequency taxonomy to build more intricate collections.
 * The `event_repeat` taxonomy will take a string in the format `MTWRFSU` and
 * the `event_freq` taxonomy will take `daily, weekly, monthly, or yearly`.
 * These taxonomies are automatically added by the plugin so you don't need to
 * add them to your configuration unless you just want to or need to build on
 * top of them.
 *
 * Below is a sample of what an `event:` front matter section would look like.
 *
 * ```
 * event:
 *  	start: 01/01/2015 6:00pm
 *   	end: 01/01/2015 7:00pm
 *    	repeat: MTWRFSU
 *    	freq: weekly
 *    	until: 01/01/2020
 * ```
 *
 * @package     Events
 * @author      Kaleb Heitzman <kalebheitzman@gmail.com>
 * @version 	1.0.8
 * @since 		1.0.0 Initial Release
 * @todo 		Implement Localization
 * @todo 		Implement Date Formats
 * @todo 		Implement ICS Feeds
 * @todo 		Implement All Day Option
 */
class EventsPlugin extends Plugin
{
	/**
	 * Current Carbon DateTime
	 *
	 * @since  1.0.0 Initial Release
	 * @var object
	 */
	protected $now;

	/**
	 * Events Events Class
	 *
	 * @since  1.0.0 Initial Release
	 * @var object
	 */
	protected $events;

	/**
	 * Events Calendar Class
	 *
	 * @since  1.0.0 Initial Release
	 * @var object
	 */
	protected $calendar;

	/**
	 * Date Range
	 *
	 * @since  1.0.0 Initial Release
	 * @var array
	 */
	protected $dateRange;

	/**
	 * Get Subscribed Events
	 *
	 * @since  1.0.0 Initial Release
	 *
	 * @return array
	 */
	public static function getSubscribedEvents()
	{
		return [
			'onPluginsInitialized' => ['onPluginsInitialized', 0],
		];
	}

	/**
	 * Initialize plugin configuration
	 *
	 * From here we determine if the pluing should run and set the custom
	 * taxonomies to store event information in. We also initialize the Events
	 * and Calendar class that this plugin utilizes and then we start
	 * intercepting Grav hooks to build our events list and insert any vars
	 * we need into the system.
	 *
	 * @since  1.0.0 Initial Release
	 *
	 * @return  void
	 */
	public function onPluginsInitialized()
	{
		// Nothing else is needed for admin so close it out
		if ( $this->isAdmin() ) {
			$this->active = false;
			return;
		}

		// Add these to taxonomy for events management
		$event_taxonomies = array('type', 'event_freq', 'event_repeat');
		$taxonomy_config = array_merge((array)$this->config->get('site.taxonomies'), $event_taxonomies);
		$this->config->set('site.taxonomies', $taxonomy_config);

		// get the current datetime with c
		$this->now = Carbon::now();

		// set the calendar accessor
		$this->calendar = new Calendar();

		// set the events accessor
		$this->events = new Events($this->grav, $this->config);

		$this->enable([
			'onTwigTemplatePaths' => ['onTwigTemplatePaths', 0],
			'onPagesInitialized' => ['onPagesInitialized', 0],
			'onPageInitialized' => ['onPageInitialized', 0],
			'onTwigSiteVariables' => ['onTwigSiteVariables', 0],
		]);
	}

	/**
	 * Add current directory to twig lookup paths.
	 *
	 * Add the templates directory to the twig directory look up path so we
	 * can load our page templates. These are overridable by the theme and
	 * are only meant as a starting point.
	 *
	 * @since  1.0.0 Initial Release
	 *
	 * @return void
	 */
	public function onTwigTemplatePaths()
	{
		// add templates to twig path
		$this->grav['twig']->twig_paths[] = __DIR__ . '/templates';
	}

	/**
	 * Check for repeating entries and add them to the page collection
	 *
	 * We initialze the `repeat` and `freq` based events alongside other
	 * events into an array that contains a token and the appropriate date
	 * and time information. This allows us to filter events later and insert
	 * them into Grav's page stack where needed
	 *
	 * @since  1.0.0 Initial Release
	 *
	 * @return  void
	 */
	public function onPagesInitialized()
	{
		// get instances of all events
		$pages = $this->events->instances();
	}

	/**
	 * On Page Initialized
	 *
	 * Adds correct event header information to individual events based on the
	 * events array and token generated. A single dynamic page has an a token
	 * associated with in the url as evt:123456. We use this to pull the correct
	 * information and update the header.
	 *
	 * @since 1.0.6 Templates Update
	 *
	 * @return void
	 */
	public function onPageInitialized()
	{
		// setup
		$page = $this->grav['page'];

		/**
		 * Use the evt: param to serve up event date times.
		 */
		if ( $page->template() == 'event' && $this->grav['uri']->param('evt') !== false )
		{
			$evt = $this->grav['uri']->param('evt');
			$event = $this->events->getEventByToken( $evt );

			$newHeader = $page->header();
			$newHeader->event['start'] = $event['startDate']->toDateTimeString();
			$newHeader->event['end'] = $event['endDate']->toDateTimeString();

			// set any other event frontmatter
			if ( isset($event['repeat']) && $event['repeat'] !== false ) {
				$newHeader->event['repeat'] = $event['repeat'];
				$newHeader->event['repeatDisplay'] = $this->events->getRepeatDisplay( $event['repeat'] );
			}
			if ( isset($event['freq']) && $event['freq'] !== false ) {
				$newHeader->event['freq'] = $event['freq'];
			}
			if ( isset($event['until']) && $event['until'] !== false ) {
				$newHeader->event['until'] = $event['until'];
			}

			$page->header( $newHeader );
		}
	}

	/**
	 * Add Events blueprints to admin
	 *
	 * This is currently not operational. In the future we'd like to add
	 * blueprints associated with page templates through this plugin hook.
	 *
	 * @since  1.0.0 Initial Release
	 *
	 * @return void
	 */
	public function onBlueprintCreated()
	{
		// todo: add events event blueprint to admin
		// $this->grav['blueprints'];
	}

	/**
	 * Set needed variables to display events
	 *
	 * We set various twig variables on the calendar and single event pages.
	 *
	 * Our most signicant variable is the `evt:` param found in a single
	 * event's URI. This var is used to refernece the main events listing via
	 * an event token that is a 6 digit alphanumeric string. This gives us the
	 * date and time information that we need to display for a single event
	 * page.
	 *
	 * For the calendar page, we load the appropriate js and css to make the
	 * calendar work smoothly as well as add the appropriate calendar twig
	 * variables.
	 *
	 * @since  1.0.0 Initial Release
	 *
	 * @return  void
	 */
	public function onTwigSiteVariables()
	{
		// setup
		$page = $this->grav['page'];
		$collection = $page->collection();
		$twig = $this->grav['twig'];

		// only load the vars if calendar page
		if ($page->template() == 'calendar')
		{

			$yearParam = $this->grav['uri']->param('year');
			$monthParam = $this->grav['uri']->param('month');

			$twigVars = $this->calendar->twigVars($yearParam, $monthParam);
			$calVars = $this->calendar->calendarVars($collection);

			// add calendar to twig as calendar
			$twigVars['calendar']['events'] = $calVars;
			$twig->twig_vars['calendar'] = array_shift($twigVars);
		}

		$templates = array( 'calendar', 'events', 'event' );
		if ( in_array( $page->template(), $templates ) )
		{
			// styles
			$css = 'plugin://events/css-compiled/events.css';
			$js = 'plugin://events/js/events.js';
			$assets = $this->grav['assets'];
			$assets->addCss($css);
			$assets->add('jquery');
			$assets->addJs($js);
		}

	}

}
