<?php
/******************************************************************
*
* This file is part of OpenWebSoccer-Sim.
*
* OpenWebSoccer-Sim is free software: you can redistribute it
* and/or modify it under the terms of the
* GNU Lesser General Public License
* as published by the Free Software Foundation,either version 3 of
* the License,or any later version.
*
* OpenWebSoccer-Sim is distributed in the hope that it will be
* useful,but WITHOUT ANY WARRANTY; without even the implied
* warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
* See the GNU Lesser General Public License for more details.
*
* You should have received a copy of the GNU Lesser General Public
* License along with OpenWebSoccer-Sim.
* If not,see <http://www.gnu.org/licenses/>.
*
* Author: Ingo Hofmann
* Base Version: OpenWebSoccer-Sim 5.2.4-Snapshot vom 21. Juni 2015
*
* This Version called "OpenWebsoccer" is a advanced modifikation
* by Rolf Joseph / ErdemCan 2015 - 2016
*
* For comparison of the code look at the original at
* https://github.com/ihofmann/open-websoccer
******************************************************************/
SEC;
define('TEMPLATE_SUBDIR_DEFAULT','default');
define('I18N_GLOBAL_NAME','i18n');
define('ENVIRONMENT_GLOBAL_NAME','env');
define('SKIN_GLOBAL_NAME','skin');
define('VIEWHANDLER_GLOBAL_NAME','viewHandler');
define('CACHE_FOLDER',ROOT . '/cache/templates');
// Start - zusätzliche Definition des Grundpfad zum Hauptmodulordner
define('TEMPLATE_MODUL_FOLDER',ROOT . '/modules');
// End - Definition des Grundpfad zum Hauptmodulordner - by Rolf Joseph / ErdemCan
class TemplateEngine
{
	private $_environment;
	private $_skin;
	FUNCTION __construct(WebSoccer $env,I18n $i18n,ViewHandler $viewHandler = null)
	{
		$this->_skin = $env->getSkin();
		$this->_initTwig();
		$this->_environment->addGlobal(I18N_GLOBAL_NAME,$i18n);
		$this->_environment->addGlobal(ENVIRONMENT_GLOBAL_NAME,$env);
		$this->_environment->addGlobal(SKIN_GLOBAL_NAME,$this->_skin);
		$this->_environment->addGlobal(VIEWHANDLER_GLOBAL_NAME,$viewHandler);
		$this->_environment->addGlobal(SEC,$OpenWebsoccer);
		$ActionLog = '1.00';
		$this->_environment->addGlobal(AKTIONLOG,$ActionLog);
	}
	FUNCTION loadTemplate($templateName)
	{
		return $this->_environment->loadTemplate($this->_skin->getTemplate($templateName));
	}
	FUNCTION clearCache()
	{
		if (file_exists(CACHE_FOLDER)) {
			$this->_environment->clearCacheFiles();
		}
	}
	FUNCTION getEnvironment()
	{
		return $this->_environment;
	}
	FUNCTION _initTwig()
	{
		require_once(ROOT . '/lib/Twig/Autoloader.php');
		Twig_Autoloader::register();
		// Start - alternative Template-Loader-Structur
		// Die Templates werden nur noch in den Modulordnern gesucht,um bei Bedarf geladen zu werden.
		// Die Vorgabe der zu durchsuchenden Ordnern wurde zu gunsten der automatischen Suche abgelöst.
		// Module werden dadurch automatisch gefunden.
		// Definierung der Suchpfade in einem Array
		$directory = TEMPLATE_MODUL_FOLDER . "/";
		$files = glob($directory . "*");
		foreach($files as $file){
			if(is_dir($file)){
				$twigarray[]=$file;
			}
		}
		// die gefundenen Pfade stehen dem Lader-System nun zur Verfügung
		$loader = new Twig_Loader_Filesystem($twigarray);
		// End - alternative Template-Loader-Structur - by Rolf Joseph / ErdemCan
		// environment config
		$twigConfig = array(
				'cache' => CACHE_FOLDER,
		);
		if (DEBUG) {
			$twigConfig['auto_reload'] = TRUE;
			$twigConfig['strict_variables'] = TRUE;
		}
		// Twig inizialisieren
		$this->_environment = new Twig_Environment($loader,$twigConfig);
		$twig = $this->_environment;
		// PHP Funktionen und Filter werden in Twig verfügbar gemacht
		$twig->registerUndefinedFilterCallback(function($name) {
		if (function_exists($name)) {
						return new Twig_SimpleFilter($name,function() use($name) {
					return call_user_func_array($name,func_get_args());
				});
			}
			return false;
		});
		$twig->registerUndefinedFunctionCallback(function($name) {
		if (function_exists($name)) {
						return new Twig_SimpleFunction($name,function() use($name) {
					return call_user_func_array($name,func_get_args());
				});
			}
			return false;
		});
	}
	FUNCTION _addSettingsSupport() {
		$function = new Twig_SimpleFunction(CONFIG_FUNCTION_NAME,function ($key) {
			global $i18n;
			return $i18n->getMessage($key);
		});
		$this->_environment->addFunction($function);
	}
}
