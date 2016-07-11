<?php

/* navigationbar.twig */
class __TwigTemplate_0a33a2828feac07b3ba97d2e69ca1ca3b76aa4ed5ee8e023e4a271e3c88769ac extends Twig_Template
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
        // line 32
        $context["navitemTemplate"] = $this;
        // line 33
        echo "<navbar>
\t<div id=\"navbar\">
\t\t<div class=\"navbar navbar-fixed-top\">
\t\t\t<div class=\"container\">
\t\t\t\t<a data-toggle=\"collapse\" data-target=\".nav-collapse\">
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t</a>
\t\t\t\t<div class=\"nav-collapse collapse\">
\t\t\t\t\t<ul class=\"nav\" role=\"menu\">
\t\t\t\t\t\t";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["navItems"]) ? $context["navItems"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["navItem"]) {
            // line 45
            echo "\t\t\t\t\t\t\t";
            if ((twig_length_filter($this->env, $this->getAttribute($context["navItem"], "children", array())) > 0)) {
                // line 46
                echo "\t\t\t\t\t\t\t\t<li role=\"menuitem\" class=\"dropdown";
                if ($this->getAttribute($context["navItem"], "isActive", array())) {
                    echo "  active";
                }
                echo "\">
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-toggle\" id=\"label";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($context["navItem"], "pageId", array()), "html", null, true);
                echo "\" role=\"button\"\tdata-toggle=\"dropdown\" href=\"#\">
\t\t\t\t\t\t\t\t   \t\t";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($context["navItem"], "label", array()), "html", null, true);
                echo " <b class=\"caret\"></b>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"label";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($context["navItem"], "pageId", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t";
                // line 51
                echo $context["navitemTemplate"]->getitem($this->getAttribute($context["navItem"], "pageId", array()), $this->getAttribute($context["navItem"], "label", array()), false);
                echo "
\t\t\t\t\t\t\t\t\t\t";
                // line 52
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["navItem"], "children", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["navChild"]) {
                    // line 53
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    echo $context["navitemTemplate"]->getitem($this->getAttribute($context["navChild"], "pageId", array()), $this->getAttribute($context["navChild"], "label", array()), $this->getAttribute($context["navChild"], "isActive", array()));
                    echo "
\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['navChild'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 55
                echo "\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            } else {
                // line 58
                echo "\t\t\t\t\t\t\t\t\t";
                echo $context["navitemTemplate"]->getitem($this->getAttribute($context["navItem"], "pageId", array()), $this->getAttribute($context["navItem"], "label", array()), $this->getAttribute($context["navItem"], "isActive", array()));
                echo "
\t\t\t\t\t\t\t\t";
            }
            // line 60
            echo "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['navItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "\t\t\t\t\t\t<li role=\"menuitem\"><a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "context_root"), "method"), "html", null, true);
        echo "?page=login&action=logout\">Logout</a>
\t\t\t\t\t\t<li role=\"menuitem\"><a href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "externlink1"), "method"), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "externlink1txt"), "method"), "html", null, true);
        echo "</a>
\t\t\t\t\t\t<li role=\"menuitem\"><a href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "externlink2"), "method"), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "externlink2txt"), "method"), "html", null, true);
        echo "</a>
\t\t\t\t\t\t<li role=\"menuitem\"><a href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "externlink3"), "method"), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "externlink3txt"), "method"), "html", null, true);
        echo "</a>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</navbar>";
    }

    // line 29
    public function getitem($__pageId__ = null, $__label__ = null, $__isActive__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "pageId" => $__pageId__,
            "label" => $__label__,
            "isActive" => $__isActive__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 30
            echo "\t<li role=\"menuitem\"";
            if ((isset($context["isActive"]) ? $context["isActive"] : null)) {
                echo " class=\"active\"";
            }
            echo "><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => (isset($context["pageId"]) ? $context["pageId"] : null)), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
            echo "</a></li>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "navigationbar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 30,  125 => 29,  112 => 64,  106 => 63,  100 => 62,  95 => 61,  89 => 60,  83 => 58,  78 => 55,  69 => 53,  65 => 52,  61 => 51,  57 => 50,  52 => 48,  48 => 47,  41 => 46,  38 => 45,  34 => 44,  21 => 33,  19 => 32,);
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
/* {% macro item(pageId, label, isActive) %}*/
/* 	<li role="menuitem"{% if isActive %} class="active"{% endif %}><a href="{{ env.getInternalUrl(pageId) }}">{{ label }}</a></li>*/
/* {% endmacro %}*/
/* {% import _self as navitemTemplate %}*/
/* <navbar>*/
/* 	<div id="navbar">*/
/* 		<div class="navbar navbar-fixed-top">*/
/* 			<div class="container">*/
/* 				<a data-toggle="collapse" data-target=".nav-collapse">*/
/* 						<span class="icon-bar"></span>*/
/* 						<span class="icon-bar"></span>*/
/* 						<span class="icon-bar"></span>*/
/* 				</a>*/
/* 				<div class="nav-collapse collapse">*/
/* 					<ul class="nav" role="menu">*/
/* 						{% for navItem in navItems %}*/
/* 							{% if navItem.children|length > 0 %}*/
/* 								<li role="menuitem" class="dropdown{% if navItem.isActive %}  active{% endif %}">*/
/* 									<a class="dropdown-toggle" id="label{{ navItem.pageId }}" role="button"	data-toggle="dropdown" href="#">*/
/* 								   		{{ navItem.label }} <b class="caret"></b>*/
/* 									</a>*/
/* 									<ul class="dropdown-menu" role="menu" aria-labelledby="label{{ navItem.pageId }}">*/
/* 										{{ navitemTemplate.item(navItem.pageId, navItem.label, false) }}*/
/* 										{% for navChild in navItem.children %}*/
/* 											{{ navitemTemplate.item(navChild.pageId, navChild.label, navChild.isActive) }}*/
/* 										{% endfor %}*/
/* 									</ul>*/
/* 								</li>*/
/* 								{% else %}*/
/* 									{{ navitemTemplate.item(navItem.pageId, navItem.label, navItem.isActive) }}*/
/* 								{% endif %}*/
/* 						{% endfor %}*/
/* 						<li role="menuitem"><a href="{{ env.getConfig("context_root") }}?page=login&action=logout">Logout</a>*/
/* 						<li role="menuitem"><a href="{{ env.getConfig("externlink1") }}" target="_blank">{{ env.getConfig("externlink1txt") }}</a>*/
/* 						<li role="menuitem"><a href="{{ env.getConfig("externlink2") }}" target="_blank">{{ env.getConfig("externlink2txt") }}</a>*/
/* 						<li role="menuitem"><a href="{{ env.getConfig("externlink3") }}" target="_blank">{{ env.getConfig("externlink3txt") }}</a>*/
/* 					</ul>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </navbar>*/
