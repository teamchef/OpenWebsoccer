<?php
/******************************************************************
*
* Eigen-Modul:	OpenWebsoccer Twig-Funktions-Library
*
* Author:		Rolf Joseph
*
* Core für eingene Funktionen, die in Twig zur Verfügung stehen.
* Diese Datei muss im Ordner Twig/Extension vorhanden sein.
* Die Registrierung erfolgt in der Datei Twig/Environment.php
* mittels $this->addExtension(new Twig_Extension_Lib());
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
******************************************************************/
class Twig_Extension_Lib extends Twig_Extension
{
	public function getName()
    {
    	return 'OpenWebsoccer Twig-Functions-Library';
    }
    // weitere Operatorn wie in PHP
    public function getOperators()
    {
        return array(
        	array(
            	'!'		=> array('precedence' => 50,'class' => 'Twig_Node_Expression_Unary_Not'),
			),
            array(
                '||' 	=> array('precedence' => 10, 'class' => 'Twig_Node_Expression_Binary_Or', 			'associativity' => Twig_ExpressionParser::OPERATOR_LEFT),
                '&&' 	=> array('precedence' => 15, 'class' => 'Twig_Node_Expression_Binary_And', 			'associativity' => Twig_ExpressionParser::OPERATOR_LEFT),
                '::'  	=> array('precedence' => 25, 'class' => 'Twig_Node_Expression_Constant', 			'associativity' => Twig_ExpressionParser::OPERATOR_LEFT),
            ),
        );
    }
    public function getFunctions()
    {
        return array(
        	new \Twig_SimpleFunction('Lib', 				function () 							{ return "OWS Library 2016.8.4";}),
        	new \Twig_SimpleFunction('function',			function ($str) 						{ return eval($str);}),
        );
    }
    public function getFilters()
    {
        return array(
        	new \Twig_SimpleFilter('filter',				function ($str, $fn)					{ $args = array_merge(array($str), array_slice(func_get_args(), 2)); return call_user_func_array($fn, $args);}),
        	new \Twig_SimpleFilter('phpExtensions', 		array($this, 'phpExtensions')),
            new \Twig_SimpleFilter('phpFunktionen', 		array($this, 'phpFunktionen')),
            new \Twig_SimpleFilter('definierteVariablen', 	array($this, 'definierteVariablen')),
            new \Twig_SimpleFilter('definierteKonstanten', 	array($this, 'definierteKonstanten')),
        );
    }
    public function phpFunktionen()
    {
    	echo'<pre>';
		foreach(func_get_args()as $arg){}
		echo '<br>';
        return get_defined_functions();
    }
	public function definierteVariablen()
    {
		echo '<br>';
        return get_defined_vars();
    }
    public function definierteKonstanten()
    {
		echo '<br>';
        return get_defined_constants();
    }
        public function phpExtensions()
    {
        return get_loaded_extensions();
    }
}