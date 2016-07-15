<?php

/* @Page:C:/_/12_4_2/www/grav/user/pages/02.home/09.step-105-realease */
class __TwigTemplate_9243cc461779d8a2cae21417a8998f2f313fc47690be2057048c59ca7e5ebd0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<p><span class=\"dropcaps dropcaps-d\">D</span>er Focus liegt weiterhin im Unterbau des OpenWebsoccers. PHP 7 bietet neue Möglichkeiten der Programmierung. PHP 5 wird nicht mehr unterstützt, da der Code clean sein soll, also ohne Overhead für die alte PHP Version, wo die Entwicklung im August 2016 eingestellt werden soll.</p>
<p>Es gibt Funktionen die schon in PHP 5 als deprecated gekennzeichnet wurden und in PHP 7 fehlen. Andere  Funktionen verhalten sich nun anders als in der anderen PHP Version. Daher generiert Twig für die jeweils eingesetzte PHP Version einen entsprechenden Code.</p>
<p>Im OpenWebsoccer ist die Logik in den PHP-Dateien und somit sind diese auf PHP 7 ausgelegt. Inwieweit durch die Integrierung von nativen PHP-Funktionen es auch Twig-Datein für die Logik geben wird muss man sehen. Auf jedenfall hat man nun die Möglichkeit native PHP-Funktionen wie folgt aufzurufen:</p>
";
        // line 4
        echo phpinfo();
        echo "
<p>Die Einbettung in einer Twig page oder box wird dort die Anzeige der PHP-Informationen anzeigen. So kann man mit ";
        // line 5
        echo (((isset($context["PHP"]) ? $context["PHP"] : null) - (isset($context["Funktions"]) ? $context["Funktions"] : null)) - (isset($context["Aufruf"]) ? $context["Aufruf"] : null));
        echo " viele PHP-Funktionen in Twig einbinden, welche sonst als Übergabe erst über eine Controll-Class oder Model-Class für Twig bereit gestellt werden müssten.</p>";
    }

    public function getTemplateName()
    {
        return "@Page:C:/_/12_4_2/www/grav/user/pages/02.home/09.step-105-realease";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 5,  24 => 4,  19 => 1,);
    }
}
/* <p><span class="dropcaps dropcaps-d">D</span>er Focus liegt weiterhin im Unterbau des OpenWebsoccers. PHP 7 bietet neue Möglichkeiten der Programmierung. PHP 5 wird nicht mehr unterstützt, da der Code clean sein soll, also ohne Overhead für die alte PHP Version, wo die Entwicklung im August 2016 eingestellt werden soll.</p>*/
/* <p>Es gibt Funktionen die schon in PHP 5 als deprecated gekennzeichnet wurden und in PHP 7 fehlen. Andere  Funktionen verhalten sich nun anders als in der anderen PHP Version. Daher generiert Twig für die jeweils eingesetzte PHP Version einen entsprechenden Code.</p>*/
/* <p>Im OpenWebsoccer ist die Logik in den PHP-Dateien und somit sind diese auf PHP 7 ausgelegt. Inwieweit durch die Integrierung von nativen PHP-Funktionen es auch Twig-Datein für die Logik geben wird muss man sehen. Auf jedenfall hat man nun die Möglichkeit native PHP-Funktionen wie folgt aufzurufen:</p>*/
/* {{ phpinfo() }}*/
/* <p>Die Einbettung in einer Twig page oder box wird dort die Anzeige der PHP-Informationen anzeigen. So kann man mit {{ PHP-Funktions-Aufruf }} viele PHP-Funktionen in Twig einbinden, welche sonst als Übergabe erst über eine Controll-Class oder Model-Class für Twig bereit gestellt werden müssten.</p>*/
