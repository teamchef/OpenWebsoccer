<?php

/* blocks/messagesblock.twig */
class __TwigTemplate_ecdce886ec2a20c7741a638517d801713eb86de9cc684b827ed3518b2b4133ff extends Twig_Template
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
        // line 29
        $context["macro"] = $this->loadTemplate("macro.twig", "blocks/messagesblock.twig", 29);
        // line 30
        if (array_key_exists("frontMessages", $context)) {
            // line 31
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["frontMessages"]) ? $context["frontMessages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 32
                echo "\t\t";
                echo $context["macro"]->getbox($this->getAttribute($context["message"], "title", array()), $this->getAttribute($context["message"], "message", array()), $this->getAttribute($context["message"], "type", array()));
                echo "
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "blocks/messagesblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 32,  23 => 31,  21 => 30,  19 => 29,);
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
/* {% import "macro.twig" as macro %}*/
/* {% if frontMessages is defined %}*/
/* 	{% for message in frontMessages %}*/
/* 		{{ macro.box(message.title, message.message, message.type) }}*/
/* 	{% endfor %}*/
/* {% endif %}*/
