<?php

/* breadcrumb.twig */
class __TwigTemplate_aeaa027e5ebbfa1595b1a8c6fdec8538822d3058494722fea247f62c3d79a342 extends Twig_Template
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
        if (array_key_exists("breadcrumbItems", $context)) {
            // line 30
            echo "\t<ul class=\"breadcrumb\">
\t\t";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbItems"]) ? $context["breadcrumbItems"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["breadcrumbItemKey"] => $context["breadcrumbItemLabel"]) {
                // line 32
                echo "\t\t\t";
                if ($this->getAttribute($context["loop"], "last", array())) {
                    // line 33
                    echo "\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "projectname"), "method"), "html", null, true);
                    echo " | <li class=\"active\">";
                    echo twig_escape_filter($this->env, $context["breadcrumbItemLabel"], "html", null, true);
                    echo "</li>
\t\t\t";
                } else {
                    // line 35
                    echo "\t\t\t<li>
\t\t\t\t<a href=\"";
                    // line 36
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => $context["breadcrumbItemKey"]), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["breadcrumbItemLabel"], "html", null, true);
                    echo "</a>
\t\t\t\t<span class=\"divider\">/</span>
\t\t\t</li>
\t\t\t";
                }
                // line 40
                echo "\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['breadcrumbItemKey'], $context['breadcrumbItemLabel'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "\t</ul>
";
        }
    }

    public function getTemplateName()
    {
        return "breadcrumb.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 41,  64 => 40,  55 => 36,  52 => 35,  44 => 33,  41 => 32,  24 => 31,  21 => 30,  19 => 29,);
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
/* {% if breadcrumbItems is defined %}*/
/* 	<ul class="breadcrumb">*/
/* 		{% for breadcrumbItemKey,breadcrumbItemLabel in breadcrumbItems %}*/
/* 			{% if loop.last %}*/
/* 				{{ env.getConfig("projectname") }} | <li class="active">{{ breadcrumbItemLabel }}</li>*/
/* 			{% else %}*/
/* 			<li>*/
/* 				<a href="{{ env.getInternalUrl(breadcrumbItemKey) }}">{{ breadcrumbItemLabel }}</a>*/
/* 				<span class="divider">/</span>*/
/* 			</li>*/
/* 			{% endif %}*/
/* 		{% endfor %}*/
/* 	</ul>*/
/* {% endif %}*/
