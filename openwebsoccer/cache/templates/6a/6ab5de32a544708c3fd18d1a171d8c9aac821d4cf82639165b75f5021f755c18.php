<?php

/* css.twig */
class __TwigTemplate_75281da78abc0a716faed5a0a121b8f661c630923d38aeb9484d80427872a858 extends Twig_Template
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
        if ($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "cdn_root_set"), "method")) {
            // line 30
            echo "\t#ajaxLoaderPage \t\t\t\t\t{display: none;background:url('";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "cdn_root"), "method"), "html", null, true);
            echo "/img/ajaxloaderbar.gif') no-repeat center center;height: 15px;width:100%;position:fixed;bottom:10px;}
\t#stadium \t\t\t\t\t\t\t{background: url('";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "cdn_root"), "method"), "html", null, true);
            echo "/img/pitch_bg.png') no-repeat 110px 90px;}
";
        } else {
            // line 33
            echo "\t#ajaxLoaderPage \t\t\t\t\t{display: none;background:url('";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "context_root"), "method"), "html", null, true);
            echo "/img/ajaxloaderbar.gif') no-repeat center center;height: 15px;width:100%;position:fixed;bottom:10px;}
\t#stadium \t\t\t\t\t\t\t{background: url('";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "context_root"), "method"), "html", null, true);
            echo "/img/pitch_bg.png') no-repeat 110px 90px;}
";
        }
        // line 36
        echo "\tbody \t\t\t\t\t\t\t\t{background-image:url(";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "bild_hintergrund"), "method"), "html", null, true);
        echo ");background-repeat:no-repeat;background-size:cover;padding-top:60px;margin-right: auto;margin-left: auto;}
\t#navbar \t\t\t\t\t\t\t{background-image:url(";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "bild_navbar"), "method"), "html", null, true);
        echo ");background-repeat:no-repeat;position:fixed;top:0px;left:0px;right:0px;z-index:2;}
\t.navbar-fixed-top\t\t\t\t\t{background-color:";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "color_navbar"), "method"), "html", null, true);
        echo ";}
\t.container\t\t\t\t\t\t\t{background-color:";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "color_container"), "method"), "html", null, true);
        echo ";}
\t.top_spoiler \t\t\t\t\t\t{background-color:";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "color_spoiler"), "method"), "html", null, true);
        echo ";background-image:url(";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "bild_spoiler"), "method"), "html", null, true);
        echo ");background-repeat:no-repeat;
\t\t\t\t\t\t\t\t\t\tpadding-right:60px;padding-left:60px;font-size:16px;font-weight:200;line-height:20px;color:inherit;}
\t#footer \t\t\t\t\t\t\t{background-color:";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "color_footer"), "method"), "html", null, true);
        echo ";background-image:url(";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "bild_footer"), "method"), "html", null, true);
        echo ");background-repeat:no-repeat;position:fixed;bottom:0px; left:0px; right:0px;
\t\t\t\t\t\t\t\t\t\ttext-align:center;padding:0px;padding-top:30px;}
\t.span12\t\t\t\t\t\t\t\t{position: relative;}
\t.span7\t\t\t\t\t\t\t\t{min-width: 785px; max-width: 785px;}
\t.span5\t\t\t\t\t\t\t\t{min-width: 540px; max-width: 540px;}
\t.span4\t\t\t\t\t\t\t\t{min-width: 290px; max-width: 290px;}
\t.span3\t\t\t\t\t\t\t\t{min-width: 280px; max-width: 280px;}
\t.sidebar-nav \t\t\t\t\t\t{padding:9px 0;}
\t.box \t\t\t\t\t\t\t\t{padding:9px 9px;background-color:";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "box_background_color"), "method"), "html", null, true);
        echo ";
\t\t\t\t\t\t\t\t\t\tbackground-image:url(";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "box_background_image"), "method"), "html", null, true);
        echo ");background-repeat:no-repeat;border:1px solid #eeeeee;
\t\t\t\t\t\t \t\t\t\tborder-bottom:3px solid #eee;
\t\t\t\t\t\t \t\t\t\tborder-radius:6px;margin-top:10px;margin-bottom:30px;margin-left:auto;margin-right:auto;border-width:";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "box_border"), "method"), "html", null, true);
        echo "px;border-color:";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "box_border_color"), "method"), "html", null, true);
        echo "}
\t.box table\t\t\t\t\t\t\t{margin-bottom:10px;}
\t.box > h4 \t\t\t\t\t\t\t{border-bottom:1px solid #eeeeee;padding-bottom: 7px;}
\t.darkIcon \t\t\t\t\t\t\t{color:black;}
\t.collapse \t\t\t\t\t\t\t{overflow:hidden;}
\t.dl-horizontal dt \t\t\t\t\t{white-space:normal;}
\t.tab-content \t\t\t\t\t\t{overflow:visible;}
\t.incell-strength-label \t\t\t\t{width:30px;display:inline-block;}
\t#report_result \t\t\t\t\t\t{border-top:1px solid black;border-bottom:1px solid black;text-align:center;}
\t.navbar .nav>li>a\t\t\t\t\t{float:none;padding:15px 10px 10px;color:";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "navbar_text_color"), "method"), "html", null, true);
        echo ";text-decoration:none;text-shadow:0 1px 0 ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "navbar_text_color_shadow"), "method"), "html", null, true);
        echo ";}
\t.navbar .brand\t\t\t\t\t\t{float:left;display:block;margin-top:5px;margin-left:25px;margin-right:10px;font-size:20px;font-weight:200;color:";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "navbar_brand_color"), "method"), "html", null, true);
        echo ";
\t\t\t\t\t\t \t\t\t\ttext-shadow:0 1px 0 ";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "navbar_brand_color_shadow"), "method"), "html", null, true);
        echo ";}.navbar .brand:hover,.navbar .brand:focus{text-decoration:none;}
\ta:link, a:visited \t\t\t\t\t{color: ";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "link_text_color"), "method"), "html", null, true);
        echo "; }
\th1.colour, h2.colour, h3.colour, h4.colour, h5.colour, h6.colour {color: ";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "header_text_color"), "method"), "html", null, true);
        echo ";}";
    }

    public function getTemplateName()
    {
        return "css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 66,  115 => 65,  111 => 64,  107 => 63,  101 => 62,  87 => 53,  82 => 51,  78 => 50,  65 => 42,  58 => 40,  54 => 39,  50 => 38,  46 => 37,  41 => 36,  36 => 34,  31 => 33,  26 => 31,  21 => 30,  19 => 29,);
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
/* {% if env.getConfig("cdn_root_set") %}*/
/* 	#ajaxLoaderPage 					{display: none;background:url('{{env.getConfig("cdn_root")}}/img/ajaxloaderbar.gif') no-repeat center center;height: 15px;width:100%;position:fixed;bottom:10px;}*/
/* 	#stadium 							{background: url('{{env.getConfig("cdn_root")}}/img/pitch_bg.png') no-repeat 110px 90px;}*/
/* {% else %}*/
/* 	#ajaxLoaderPage 					{display: none;background:url('{{env.getConfig("context_root")}}/img/ajaxloaderbar.gif') no-repeat center center;height: 15px;width:100%;position:fixed;bottom:10px;}*/
/* 	#stadium 							{background: url('{{env.getConfig("context_root")}}/img/pitch_bg.png') no-repeat 110px 90px;}*/
/* {% endif %}*/
/* 	body 								{background-image:url({{env.getConfig("bild_hintergrund")}});background-repeat:no-repeat;background-size:cover;padding-top:60px;margin-right: auto;margin-left: auto;}*/
/* 	#navbar 							{background-image:url({{env.getConfig("bild_navbar")}});background-repeat:no-repeat;position:fixed;top:0px;left:0px;right:0px;z-index:2;}*/
/* 	.navbar-fixed-top					{background-color:{{env.getConfig("color_navbar")}};}*/
/* 	.container							{background-color:{{env.getConfig("color_container")}};}*/
/* 	.top_spoiler 						{background-color:{{env.getConfig("color_spoiler")}};background-image:url({{env.getConfig("bild_spoiler")}});background-repeat:no-repeat;*/
/* 										padding-right:60px;padding-left:60px;font-size:16px;font-weight:200;line-height:20px;color:inherit;}*/
/* 	#footer 							{background-color:{{env.getConfig("color_footer")}};background-image:url({{env.getConfig("bild_footer")}});background-repeat:no-repeat;position:fixed;bottom:0px; left:0px; right:0px;*/
/* 										text-align:center;padding:0px;padding-top:30px;}*/
/* 	.span12								{position: relative;}*/
/* 	.span7								{min-width: 785px; max-width: 785px;}*/
/* 	.span5								{min-width: 540px; max-width: 540px;}*/
/* 	.span4								{min-width: 290px; max-width: 290px;}*/
/* 	.span3								{min-width: 280px; max-width: 280px;}*/
/* 	.sidebar-nav 						{padding:9px 0;}*/
/* 	.box 								{padding:9px 9px;background-color:{{env.getConfig("box_background_color")}};*/
/* 										background-image:url({{env.getConfig("box_background_image")}});background-repeat:no-repeat;border:1px solid #eeeeee;*/
/* 						 				border-bottom:3px solid #eee;*/
/* 						 				border-radius:6px;margin-top:10px;margin-bottom:30px;margin-left:auto;margin-right:auto;border-width:{{env.getConfig("box_border")}}px;border-color:{{env.getConfig("box_border_color")}}}*/
/* 	.box table							{margin-bottom:10px;}*/
/* 	.box > h4 							{border-bottom:1px solid #eeeeee;padding-bottom: 7px;}*/
/* 	.darkIcon 							{color:black;}*/
/* 	.collapse 							{overflow:hidden;}*/
/* 	.dl-horizontal dt 					{white-space:normal;}*/
/* 	.tab-content 						{overflow:visible;}*/
/* 	.incell-strength-label 				{width:30px;display:inline-block;}*/
/* 	#report_result 						{border-top:1px solid black;border-bottom:1px solid black;text-align:center;}*/
/* 	.navbar .nav>li>a					{float:none;padding:15px 10px 10px;color:{{env.getConfig("navbar_text_color")}};text-decoration:none;text-shadow:0 1px 0 {{env.getConfig("navbar_text_color_shadow")}};}*/
/* 	.navbar .brand						{float:left;display:block;margin-top:5px;margin-left:25px;margin-right:10px;font-size:20px;font-weight:200;color:{{env.getConfig("navbar_brand_color")}};*/
/* 						 				text-shadow:0 1px 0 {{env.getConfig("navbar_brand_color_shadow")}};}.navbar .brand:hover,.navbar .brand:focus{text-decoration:none;}*/
/* 	a:link, a:visited 					{color: {{env.getConfig("link_text_color")}}; }*/
/* 	h1.colour, h2.colour, h3.colour, h4.colour, h5.colour, h6.colour {color: {{env.getConfig("header_text_color")}};}*/
