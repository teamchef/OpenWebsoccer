<?php

/* base.twig */
class __TwigTemplate_e518d7bf5080e4bf48b0228d0dab75657e1771d34568c87e8d07f748e0911848 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 29
        return $this->loadTemplate((((array_key_exists("ajaxRequest", $context) && (isset($context["ajaxRequest"]) ? $context["ajaxRequest"] : null))) ? ("ajax.twig") : ("layout.twig")), "base.twig", 29);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 30
        $context["macro"] = $this->loadTemplate("macro.twig", "base.twig", 30);
        // line 31
        $context["cdn"] = "{{ env.getConfig(\"cdn_root\") }}";
        // line 32
        $context["root"] = "{{ env.getConfig(\"context_root\") }}";
        // line 29
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "base.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 29,  19 => 32,  17 => 31,  15 => 30,  9 => 29,);
    }
}
/* {#*/
/* **/
/* * This file is part of OpenWebSoccer-Sim.*/
/* **/
/* * OpenWebSoccer-Sim is free software: you can redistribute it*/
/* * and/or modify it under the terms of the*/
/* * GNU Lesser General Public License*/
/* * as published by the Free Software Foundation, either version 3 of*/
/* * the License, or any later version.*/
/* **/
/* * OpenWebSoccer-Sim is distributed in the hope that it will be*/
/* * useful, but WITHOUT ANY WARRANTY; without even the implied*/
/* * warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.*/
/* * See the GNU Lesser General Public License for more details.*/
/* **/
/* * You should have received a copy of the GNU Lesser General Public*/
/* * License along with OpenWebSoccer-Sim.*/
/* * If not, see <http://www.gnu.org/licenses/>.*/
/* **/
/* * Author: Ingo Hofmann*/
/* * Base Version: OpenWebSoccer-Sim 5.2.4-Snapshot vom 21. Juni 2015*/
/* **/
/* * This Version called "OpenWebsoccer" is a advanced modifikation*/
/* * by Rolf Joseph / ErdemCan 2015 - 2016*/
/* **/
/* * For comparison of the code look at the original at*/
/* * https://github.com/ihofmann/open-websoccer*/
/* #}*/
/* {% extends ajaxRequest is defined and ajaxRequest ? "ajax.twig" : "layout.twig" %}*/
/* {% import "macro.twig" as macro %}*/
/* {% set cdn = '{{ env.getConfig("cdn_root") }}' %}*/
/* {% set root = '{{ env.getConfig("context_root") }}' %}*/
