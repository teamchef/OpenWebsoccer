<?php

/* views/login.twig */
class __TwigTemplate_8ea3dbea4be5f2319e74458ffcd1eab34e3ff2457b8deae99833c84570575c58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 29
        $this->parent = $this->loadTemplate("base.twig", "views/login.twig", 29);
        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 30
    public function block_page_title($context, array $blocks = array())
    {
        // line 31
        echo "\t";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "login_title"), "method"), "html", null, true);
        echo "
";
    }

    // line 33
    public function block_page_content($context, array $blocks = array())
    {
        // line 34
        echo "\t<form class=\"form-horizontal\" method=\"post\">
\t\t";
        // line 35
        if (($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "login_type"), "method") == "email")) {
            // line 36
            echo "\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "textfield", array(0 => "loginstr", 1 => $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_users_email"), "method"), 2 => $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getRequestParameter", array(0 => "loginstr"), "method"), 3 => true, 4 => (isset($context["validationMsg"]) ? $context["validationMsg"] : null), 5 => "email"), "method"), "html", null, true);
            echo "
 \t\t";
        } else {
            // line 38
            echo " \t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "textfield", array(0 => "loginstr", 1 => $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_users_nick"), "method"), 2 => $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getRequestParameter", array(0 => "loginstr"), "method"), 3 => true, 4 => (isset($context["validationMsg"]) ? $context["validationMsg"] : null)), "method"), "html", null, true);
            echo "
 \t\t";
        }
        // line 40
        echo "\t\t";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "textfield", array(0 => "loginpassword", 1 => $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_users_passwort"), "method"), 2 => "", 3 => true, 4 => (isset($context["validationMsg"]) ? $context["validationMsg"] : null), 5 => "password"), "method"), "html", null, true);
        echo "
\t\t";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "checkbox", array(0 => "rememberme", 1 => $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "formlogin_option_rememberme"), "method"), 2 => $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getRequestParameter", array(0 => "rememberme"), "method")), "method"), "html", null, true);
        echo "
\t\t<div class=\"form-actions\">
\t\t\t<button type=\"submit\" class=\"btn btn-primary\">";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "formlogin_submit_button"), "method"), "html", null, true);
        echo "</button>
\t\t</div>
\t\t<input style=\"width: auto;\" type=\"hidden\" name=\"page\" value=\"login\"/>
\t\t<input style=\"width: auto;\" type=\"hidden\" name=\"action\" value=\"login\"/>
\t</form>
\t";
        // line 48
        if ($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "allow_userregistration"), "method")) {
            // line 49
            echo "\t\t<p><i class=\"icon-arrow-right\"></i> <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "register"), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "formlogin_link_register"), "method"), "html", null, true);
            echo "</a></p>
\t";
        }
        // line 51
        echo "\t";
        if ($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "login_allow_sendingpassword"), "method")) {
            // line 52
            echo "\t\t<p><i class=\"icon-arrow-right\"></i> <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "forgot-password"), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "formlogin_link_forgot_password"), "method"), "html", null, true);
            echo "</a></p>
\t";
        }
    }

    public function getTemplateName()
    {
        return "views/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 52,  87 => 51,  79 => 49,  77 => 48,  69 => 43,  64 => 41,  59 => 40,  53 => 38,  47 => 36,  45 => 35,  42 => 34,  39 => 33,  32 => 31,  29 => 30,  11 => 29,);
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
/* {% extends "base.twig" %}*/
/* {% block page_title %}*/
/* 	{{ i18n.getMessage("login_title") }}*/
/* {% endblock %}*/
/* {% block page_content %}*/
/* 	<form class="form-horizontal" method="post">*/
/* 		{%  if env.getConfig("login_type") == "email" %}*/
/* 			{{ macro.textfield('loginstr', i18n.getMessage('entity_users_email'), env.getRequestParameter('loginstr'), true, validationMsg, 'email') }}*/
/*  		{% else %}*/
/*  			{{ macro.textfield('loginstr', i18n.getMessage('entity_users_nick'), env.getRequestParameter('loginstr'), true, validationMsg) }}*/
/*  		{% endif %}*/
/* 		{{ macro.textfield('loginpassword', i18n.getMessage('entity_users_passwort'), '', true, validationMsg, 'password') }}*/
/* 		{{ macro.checkbox('rememberme', i18n.getMessage('formlogin_option_rememberme'), env.getRequestParameter('rememberme')) }}*/
/* 		<div class="form-actions">*/
/* 			<button type="submit" class="btn btn-primary">{{ i18n.getMessage('formlogin_submit_button') }}</button>*/
/* 		</div>*/
/* 		<input style="width: auto;" type="hidden" name="page" value="login"/>*/
/* 		<input style="width: auto;" type="hidden" name="action" value="login"/>*/
/* 	</form>*/
/* 	{% if env.getConfig("allow_userregistration") %}*/
/* 		<p><i class="icon-arrow-right"></i> <a href="{{ env.getInternalUrl("register") }}">{{ i18n.getMessage('formlogin_link_register') }}</a></p>*/
/* 	{% endif %}*/
/* 	{% if env.getConfig("login_allow_sendingpassword") %}*/
/* 		<p><i class="icon-arrow-right"></i> <a href="{{ env.getInternalUrl("forgot-password") }}">{{ i18n.getMessage('formlogin_link_forgot_password') }}</a></p>*/
/* 	{% endif %}*/
/* {% endblock %}*/
