<?php
/******************************************************

  This file is part of OpenWebSoccer-Sim.

  OpenWebSoccer-Sim is free software: you can redistribute it
  and/or modify it under the terms of the
  GNU Lesser General Public License
  as published by the Free Software Foundation, either version 3 of
  the License, or any later version.

  OpenWebSoccer-Sim is distributed in the hope that it will be
  useful, but WITHOUT ANY WARRANTY; without even the implied
  warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
  See the GNU Lesser General Public License for more details.

  You should have received a copy of the GNU Lesser General Public
  License along with OpenWebSoccer-Sim.
  If not, see <http://www.gnu.org/licenses/>.

******************************************************/
define('TEMPLATE_SUBDIR_DEFAULT', 'default');
define('I18N_GLOBAL_NAME', 'i18n');
define('ENVIRONMENT_GLOBAL_NAME', 'env');
define('SKIN_GLOBAL_NAME', 'skin');
define('VIEWHANDLER_GLOBAL_NAME', 'viewHandler');
define('CACHE_FOLDER', BASE_FOLDER . '/cache/templates');

// Start - zusätzliche Definition des Grundpfad zum Hauptmodulordner

define('TEMPLATE_MODUL_FOLDER', BASE_FOLDER . '/modules');

// End - Definition des Grundpfad zum Hauptmodulordner - by Rolf Joseph / ErdemCan

/**
 * Enables skin dependent HTML templating.
 *
 * The underlying engine is <a href='http://twig.sensiolabs.org'>Twig</a>.
 *
 * @author Ingo Hofmann
 */
class TemplateEngine {

	private $_environment;
	private $_skin;

	/**
	 * Initializes the underlying template engine.
	 */
	function __construct(WebSoccer $env, I18n $i18n, ViewHandler $viewHandler = null) {

		$this->_skin = $env->getSkin();

		$this->_initTwig();
		$this->_environment->addGlobal(I18N_GLOBAL_NAME, $i18n);
		$this->_environment->addGlobal(ENVIRONMENT_GLOBAL_NAME, $env);
		$this->_environment->addGlobal(SKIN_GLOBAL_NAME, $this->_skin);
		$this->_environment->addGlobal(VIEWHANDLER_GLOBAL_NAME, $viewHandler);
	}

	/**
	 * Loads the specified template.
	 *
	 * @param string $templateName template name (NOT template file name, i.e. no file extension!).
	 * @return Twig_TemplateInterface template instance.
	 */
	public function loadTemplate($templateName) {
		return $this->_environment->loadTemplate($this->_skin->getTemplate($templateName));
	}

	/**
	 * deletes all cached templates.
	 */
	public function clearCache() {
		if (file_exists(CACHE_FOLDER)) {
			$this->_environment->clearCacheFiles();
		}
	}

	/**
	 * Provides the internal Twig environment in order to register extensions, etc.
	 *
	 * @return Twig_Environment Twig environment instance.
	 * @since 5.0.0
	 */
	public function getEnvironment() {
		return $this->_environment;
	}

	private function _initTwig() {
		require_once(BASE_FOLDER . '/lib/Twig/Autoloader.php');
		Twig_Autoloader::register();

// Start - alternative Template-Loader-Structur
// Die Templates werden nicht nur in den ursprünglich gesetzten Pfaden gesucht, sondern zusätzlich in den Modulordnern, um bei Bedarf geladen zu werden.
// Dies ist der 2. Teil, um alle nötigen Dateien eines Moduls im Modulordner packen zu können, was nicht nur die Übersicht erhöht, sondern auch einfacher entwickelt und gepflegt werden kann.


// Das Array gibt die zu druchsuchenden Pfade vor, in dem die benötigten Templates stehen und bei Bedarf geladen werden.
// Das System des Ordners templates mit seinen Subordnern, wurde durch die zugehörige Verteilung der Templates zu den Mmodulen abgelöst.
// Module können ganz einfach durch das Umbenennen der Datei module.xml in z.B. module_.xml deaktiviert werden.


// Definierung der Suchpfade in einem Array

	// einbinden der ursprünglichen Pfade

		$loader = new Twig_Loader_Filesystem(array(
		TEMPLATES_FOLDER ."/". 'default',
		TEMPLATES_FOLDER ."/". 'default/blocks',
		TEMPLATES_FOLDER ."/". 'default/emails',
		TEMPLATES_FOLDER ."/". 'default/macros',
		TEMPLATES_FOLDER ."/". 'default/views',

	// einbinden der Modulpfade

		TEMPLATE_MODUL_FOLDER . "/" . 'actionlogs',
		TEMPLATE_MODUL_FOLDER . "/" . 'alltimetable',
		TEMPLATE_MODUL_FOLDER . "/" . 'cancellation',
		TEMPLATE_MODUL_FOLDER . "/" . 'clubs',
		TEMPLATE_MODUL_FOLDER . "/" . 'clubslogo',
		TEMPLATE_MODUL_FOLDER . "/" . 'clubsrename',
		TEMPLATE_MODUL_FOLDER . "/" . 'core',
		TEMPLATE_MODUL_FOLDER . "/" . 'cups',
		TEMPLATE_MODUL_FOLDER . "/" . 'facebook',
		TEMPLATE_MODUL_FOLDER . "/" . 'firemanagers',
		TEMPLATE_MODUL_FOLDER . "/" . 'fireplayer',
		TEMPLATE_MODUL_FOLDER . "/" . 'formation',
		TEMPLATE_MODUL_FOLDER . "/" . 'formauthentication',
		TEMPLATE_MODUL_FOLDER . "/" . 'freeclubs',
		TEMPLATE_MODUL_FOLDER . "/" . 'frontend',
		TEMPLATE_MODUL_FOLDER . "/" . 'frontendads',
		TEMPLATE_MODUL_FOLDER . "/" . 'generator',
		TEMPLATE_MODUL_FOLDER . "/" . 'googleplus',
		TEMPLATE_MODUL_FOLDER . "/" . 'gravatar',
		TEMPLATE_MODUL_FOLDER . "/" . 'halloffame',
		TEMPLATE_MODUL_FOLDER . "/" . 'help',
		TEMPLATE_MODUL_FOLDER . "/" . 'joomlalogin',
		TEMPLATE_MODUL_FOLDER . "/" . 'languageswitcher',
		TEMPLATE_MODUL_FOLDER . "/" . 'leagues',
		TEMPLATE_MODUL_FOLDER . "/" . 'lending',
		TEMPLATE_MODUL_FOLDER . "/" . 'matches',
		TEMPLATE_MODUL_FOLDER . "/" . 'messages',
		TEMPLATE_MODUL_FOLDER . "/" . 'moneytransactions',
		TEMPLATE_MODUL_FOLDER . "/" . 'nationalteams',
		TEMPLATE_MODUL_FOLDER . "/" . 'news',
		TEMPLATE_MODUL_FOLDER . "/" . 'notifications',
		TEMPLATE_MODUL_FOLDER . "/" . 'office',
		TEMPLATE_MODUL_FOLDER . "/" . 'players',
		TEMPLATE_MODUL_FOLDER . "/" . 'playerssearch',
		TEMPLATE_MODUL_FOLDER . "/" . 'premium',
		TEMPLATE_MODUL_FOLDER . "/" . 'premiummicropayment',
		TEMPLATE_MODUL_FOLDER . "/" . 'premiumpaypal',
		TEMPLATE_MODUL_FOLDER . "/" . 'premiumsofortcom',
		TEMPLATE_MODUL_FOLDER . "/" . 'profile',
		TEMPLATE_MODUL_FOLDER . "/" . 'randomevents',
		TEMPLATE_MODUL_FOLDER . "/" . 'rss',
		TEMPLATE_MODUL_FOLDER . "/" . 'season',
		TEMPLATE_MODUL_FOLDER . "/" . 'shoutbox',
		TEMPLATE_MODUL_FOLDER . "/" . 'simulation',
		TEMPLATE_MODUL_FOLDER . "/" . 'socialrecommendations',
		TEMPLATE_MODUL_FOLDER . "/" . 'sponsor',
		TEMPLATE_MODUL_FOLDER . "/" . 'stadium',
		TEMPLATE_MODUL_FOLDER . "/" . 'stadiumenvironment',
		TEMPLATE_MODUL_FOLDER . "/" . 'statistics',
		TEMPLATE_MODUL_FOLDER . "/" . 'tables',
		TEMPLATE_MODUL_FOLDER . "/" . 'teamofday',
		TEMPLATE_MODUL_FOLDER . "/" . 'termsandconditions',
		TEMPLATE_MODUL_FOLDER . "/" . 'training',
		TEMPLATE_MODUL_FOLDER . "/" . 'trainingcamp',
		TEMPLATE_MODUL_FOLDER . "/" . 'transfermarket',
		TEMPLATE_MODUL_FOLDER . "/" . 'transferoffers',
		TEMPLATE_MODUL_FOLDER . "/" . 'transfers',
		TEMPLATE_MODUL_FOLDER . "/" . 'userabsence',
		TEMPLATE_MODUL_FOLDER . "/" . 'userauthentication',
		TEMPLATE_MODUL_FOLDER . "/" . 'userbadges',
		TEMPLATE_MODUL_FOLDER . "/" . 'userregistration',
		TEMPLATE_MODUL_FOLDER . "/" . 'users',
		TEMPLATE_MODUL_FOLDER . "/" . 'usersonline',
		TEMPLATE_MODUL_FOLDER . "/" . 'webjobexecution',
		TEMPLATE_MODUL_FOLDER . "/" . 'youth'
		 )
		);

// End - altrtnative Template-Loader-Structur - by Rolf Joseph / ErdemCan

		// environment config
		$twigConfig = array(
				'cache' => CACHE_FOLDER,
		);
		if (DEBUG) {
			$twigConfig['auto_reload'] = TRUE;
			$twigConfig['strict_variables'] = TRUE;
		}

		// init
		$this->_environment = new Twig_Environment($loader, $twigConfig);
	}

	private function _addSettingsSupport() {
		$function = new Twig_SimpleFunction(CONFIG_FUNCTION_NAME, function ($key) {
			global $i18n;
			return $i18n->getMessage($key);
		});
		$this->_environment->addFunction($function);
	}

}
?>
