<?php

/* layout.twig */
class __TwigTemplate_051fe22d7ece7369c4d49da1fabbc244d628eb11cd05ee94b9ad428662ffb028 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'browser_title' => array($this, 'block_browser_title'),
            'navigation' => array($this, 'block_navigation'),
            'page_header' => array($this, 'block_page_header'),
            'page_columns' => array($this, 'block_page_columns'),
            'messages_block' => array($this, 'block_messages_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 29
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<style>
\t\t\t";
        // line 33
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 36
        echo "\t\t</style>
\t\t<title>";
        // line 37
        $this->displayBlock('browser_title', $context, $blocks);
        echo "</title>
\t\t<meta charset=\"utf-8\" />
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
\t\t";
        // line 40
        if (($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getRequestParameter", array(0 => "id"), "method") != null)) {
            // line 41
            echo "\t\t\t";
            $context["url"] = $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => null, 1 => ("id=" . $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getRequestParameter", array(0 => "id"), "method")), 2 => true), "method");
            // line 42
            echo "\t\t";
        } else {
            // line 43
            echo "\t\t\t";
            $context["url"] = $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => null, 1 => null, 2 => true), "method");
            // line 44
            echo "\t\t";
        }
        // line 45
        echo "\t\t<link rel=\"canonical\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "\"/>
\t\t";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["skin"]) ? $context["skin"] : null), "getCssSources", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["cssSource"]) {
            // line 47
            echo "\t\t<link href=\"";
            echo twig_escape_filter($this->env, $context["cssSource"], "html", null, true);
            echo "\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cssSource'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "\t\t";
        if (array_key_exists("cssReferences", $context)) {
            // line 50
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cssReferences"]) ? $context["cssReferences"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["cssSource"]) {
                // line 51
                echo "\t\t\t\t";
                if ($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "cdn_root_set"), "method")) {
                    // line 52
                    echo "\t\t\t\t\t<link href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "cdn_root"), "method"), "html", null, true);
                    echo "/css/";
                    echo twig_escape_filter($this->env, $context["cssSource"], "html", null, true);
                    echo "\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
\t\t\t\t";
                } else {
                    // line 54
                    echo "\t\t\t\t\t<link href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "context_root"), "method"), "html", null, true);
                    echo "/css/";
                    echo twig_escape_filter($this->env, $context["cssSource"], "html", null, true);
                    echo "\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
\t\t\t\t";
                }
                // line 56
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cssSource'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "\t\t";
        }
        // line 58
        echo "\t\t";
        if ($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "cdn_root_set"), "method")) {
            // line 59
            echo "\t\t\t<link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "cdn_root"), "method"), "html", null, true);
            echo "/favicon.ico\" />
\t\t";
        } else {
            // line 61
            echo "\t\t\t<link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "context_root"), "method"), "html", null, true);
            echo "/favicon.ico\" />
\t\t";
        }
        // line 63
        echo "\t\t";
        if ($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "facebook_on"), "method")) {
            // line 64
            echo "\t\t\t";
            if ($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "facebook_appid"), "method")) {
                // line 65
                echo "\t\t\t\t<meta property=\"fb:app_id\" content=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "facebook_appid"), "method"), "html", null, true);
                echo "\"/>
\t\t\t";
            }
            // line 67
            echo "\t\t";
        }
        // line 68
        echo "\t\t";
        echo $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "head_code"), "method");
        echo "
\t</head>
\t<body>
\t\t";
        // line 71
        $this->displayBlock('navigation', $context, $blocks);
        // line 74
        echo "\t\t<div class=\"container\">
\t\t\t";
        // line 75
        $this->displayBlock('page_header', $context, $blocks);
        // line 77
        echo "\t\t\t";
        $this->displayBlock('page_columns', $context, $blocks);
        // line 126
        echo "\t\t\t<br><br>
\t\t\t<footer>
\t\t\t\t<div id=\"footer\">
\t\t\t\t\t<small>
\t\t\t\t\t\t";
        // line 130
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "footerlinkoben1"), "method")) > 0)) {
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "footerlinkoben1"), "method"), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "footerlinkoben1txt"), "method"), "html", null, true);
            echo "</a>";
        }
        // line 131
        echo "\t\t\t\t\t\t";
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "footerlinkoben2"), "method")) > 0)) {
            echo " | <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "footerlinkoben2"), "method"), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "footerlinkoben2txt"), "method"), "html", null, true);
            echo "</a>";
        }
        // line 132
        echo "\t\t\t\t\t\t";
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "footerlinkoben3"), "method")) > 0)) {
            echo " | <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "footerlinkoben3"), "method"), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "footerlinkoben3txt"), "method"), "html", null, true);
            echo "</a>";
        }
        echo "<br>
\t\t\t\t\t\t<a href=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "termsandconditions"), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "termsandconditions_navlabel"), "method"), "html", null, true);
        echo "</a>
\t\t\t\t\t\t";
        // line 134
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "privacypolicy_url"), "method")) > 0)) {
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "privacypolicy_url"), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "privacypolicy_navlabel"), "method"), "html", null, true);
            echo "</a>";
        }
        // line 135
        echo "\t\t\t\t\t\t| <a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "imprint"), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "imprint_navlabel"), "method"), "html", null, true);
        echo "</a>
\t\t\t\t\t\t<a href=\"https://github.com/rolfjoseph/OpenWebsoccer\" target=\"_blank\"><b>OpenWebsoccer ";
        // line 136
        echo twig_escape_filter($this->env, twig_constant("OWSVERSION"), "html", null, true);
        echo "</b> by Rolf Joseph/ErdemCan</a> ( <a href=\"https://github.com/ihofmann/open-websoccer\" target=\"_blank\">Base by Ingo Hofmann )</a> |
\t\t\t\t\t\t";
        // line 137
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "footerlinkrechts"), "method")) > 0)) {
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "footerlinkrechts"), "method"), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "footerlinkrechtstxt"), "method"), "html", null, true);
            echo "</a>";
        }
        echo "<br>
\t\t\t\t\t\t";
        // line 138
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "footerlinkunten1"), "method")) > 0)) {
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "footerlinkunten1"), "method"), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "footerlinkunten1txt"), "method"), "html", null, true);
            echo "</a>";
        }
        // line 139
        echo "\t\t\t\t\t\t";
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "footerlinkunten2"), "method")) > 0)) {
            echo " | <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "footerlinkunten2"), "method"), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "footerlinkunten2txt"), "method"), "html", null, true);
            echo "</a>";
        }
        // line 140
        echo "\t\t\t\t\t\t";
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "footerlinkunten3"), "method")) > 0)) {
            echo " | <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "footerlinkunten3"), "method"), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "footerlinkunten3txt"), "method"), "html", null, true);
            echo "</a>";
        }
        // line 141
        echo "\t\t\t\t\t </small>
\t\t\t\t</div>
\t\t\t</footer>
\t\t</div>
\t\t<div id=\"ajaxLoaderPage\"></div>
\t\t";
        // line 146
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["skin"]) ? $context["skin"] : null), "getJavaScriptSources", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["jsSource"]) {
            // line 147
            echo "\t\t\t<script src=\"";
            echo twig_escape_filter($this->env, $context["jsSource"], "html", null, true);
            echo "\" ></script>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jsSource'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
        echo "\t\t";
        if (array_key_exists("scriptReferences", $context)) {
            // line 150
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["scriptReferences"]) ? $context["scriptReferences"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["jsSource"]) {
                // line 151
                echo "\t\t\t";
                if ($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "cdn_root_set"), "method")) {
                    // line 152
                    echo "\t\t\t\t<script src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "cdn_root"), "method"), "html", null, true);
                    echo "/js/";
                    echo twig_escape_filter($this->env, $context["jsSource"], "html", null, true);
                    echo "\" ></script>
\t\t\t";
                } else {
                    // line 154
                    echo "\t\t\t\t<script src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "context_root"), "method"), "html", null, true);
                    echo "/js/";
                    echo twig_escape_filter($this->env, $context["jsSource"], "html", null, true);
                    echo "\" ></script>
\t\t\t";
                }
                // line 156
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jsSource'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 157
            echo "\t\t";
        }
        // line 158
        echo "\t</body>
</html>";
    }

    // line 33
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 34
        echo "\t\t\t\t";
        $this->loadTemplate("css.twig", "layout.twig", 34)->display($context);
        // line 35
        echo "\t\t\t";
    }

    // line 37
    public function block_browser_title($context, array $blocks = array())
    {
        $this->displayBlock("page_title", $context, $blocks);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "projectname"), "method"), "html", null, true);
    }

    // line 71
    public function block_navigation($context, array $blocks = array())
    {
        // line 72
        echo "\t\t";
        $this->loadTemplate("navigationbar.twig", "layout.twig", 72)->display($context);
        // line 73
        echo "\t\t";
    }

    // line 75
    public function block_page_header($context, array $blocks = array())
    {
        // line 76
        echo "\t\t\t";
    }

    // line 77
    public function block_page_columns($context, array $blocks = array())
    {
        // line 78
        echo "\t\t\t<div class=\"row\"\">
\t\t\t\t<div class=\"span7\" id=\"contentArea\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t";
        // line 81
        $this->loadTemplate("breadcrumb.twig", "layout.twig", 81)->display($context);
        // line 82
        echo "\t\t\t\t\t\t<div class=\"page-header\">
\t\t\t\t\t\t<h1>";
        // line 83
        $this->displayBlock("page_title", $context, $blocks);
        echo "</h1>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"messages\">
\t\t\t\t\t\t";
        // line 86
        $this->displayBlock('messages_block', $context, $blocks);
        // line 89
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"pagecontent\">
\t\t\t\t\t\t";
        // line 91
        if ($this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : null), "content_top", array(), "any", true, true)) {
            // line 92
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : null), "content_top", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["uiBlock"]) {
                // line 93
                echo "\t\t\t\t\t\t\t\t<div id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["uiBlock"], "id", array()), "html", null, true);
                echo "_block\">
\t\t\t\t\t\t\t\t";
                // line 94
                echo $this->getAttribute((isset($context["viewHandler"]) ? $context["viewHandler"] : null), "renderBlock", array(0 => $this->getAttribute($context["uiBlock"], "id", array()), 1 => $context["uiBlock"]), "method");
                echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['uiBlock'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo "\t\t\t\t\t\t";
        }
        // line 98
        echo "\t\t\t\t\t\t";
        $this->displayBlock("page_content", $context, $blocks);
        echo "
\t\t\t\t\t\t";
        // line 99
        if ($this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : null), "content_bottom", array(), "any", true, true)) {
            // line 100
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : null), "content_bottom", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["uiBlock"]) {
                // line 101
                echo "\t\t\t\t\t\t\t\t<div id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["uiBlock"], "id", array()), "html", null, true);
                echo "_block\">
\t\t\t\t\t\t\t\t";
                // line 102
                echo $this->getAttribute((isset($context["viewHandler"]) ? $context["viewHandler"] : null), "renderBlock", array(0 => $this->getAttribute($context["uiBlock"], "id", array()), 1 => $context["uiBlock"]), "method");
                echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['uiBlock'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 105
            echo "\t\t\t\t\t\t";
        }
        // line 106
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"span4\">
\t\t\t\t\t<div id=\"profile\">
\t\t\t\t\t\t";
        // line 111
        if ($this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : null), "sidebar", array(), "any", true, true)) {
            // line 112
            echo "\t\t\t\t\t\t";
        }
        // line 113
        echo "\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 114
        if ($this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : null), "sidebar", array(), "any", true, true)) {
            // line 115
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : null), "sidebar", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["uiBlock"]) {
                // line 116
                echo "\t\t\t\t\t\t";
                if ( !$this->renderBlock("userprofile_block", $context, $blocks)) {
                    // line 117
                    echo "\t\t\t\t\t\t\t<div id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["uiBlock"], "id", array()), "html", null, true);
                    echo "_block\">
\t\t\t\t\t\t\t";
                    // line 118
                    echo $this->getAttribute((isset($context["viewHandler"]) ? $context["viewHandler"] : null), "renderBlock", array(0 => $this->getAttribute($context["uiBlock"], "id", array()), 1 => $context["uiBlock"]), "method");
                    echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                // line 121
                echo "\t\t\t\t\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['uiBlock'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 122
            echo "\t\t\t\t\t";
        }
        // line 123
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
    }

    // line 86
    public function block_messages_block($context, array $blocks = array())
    {
        // line 87
        echo "\t\t\t\t\t\t";
        echo $this->getAttribute((isset($context["viewHandler"]) ? $context["viewHandler"] : null), "renderBlock", array(0 => "messagesblock"), "method");
        echo "
\t\t\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  501 => 87,  498 => 86,  492 => 123,  489 => 122,  475 => 121,  469 => 118,  464 => 117,  461 => 116,  443 => 115,  441 => 114,  438 => 113,  435 => 112,  433 => 111,  426 => 106,  423 => 105,  414 => 102,  409 => 101,  404 => 100,  402 => 99,  397 => 98,  394 => 97,  385 => 94,  380 => 93,  375 => 92,  373 => 91,  369 => 89,  367 => 86,  361 => 83,  358 => 82,  356 => 81,  351 => 78,  348 => 77,  344 => 76,  341 => 75,  337 => 73,  334 => 72,  331 => 71,  323 => 37,  319 => 35,  316 => 34,  313 => 33,  308 => 158,  305 => 157,  299 => 156,  291 => 154,  283 => 152,  280 => 151,  275 => 150,  272 => 149,  263 => 147,  259 => 146,  252 => 141,  243 => 140,  234 => 139,  226 => 138,  216 => 137,  212 => 136,  205 => 135,  197 => 134,  191 => 133,  180 => 132,  171 => 131,  163 => 130,  157 => 126,  154 => 77,  152 => 75,  149 => 74,  147 => 71,  140 => 68,  137 => 67,  131 => 65,  128 => 64,  125 => 63,  119 => 61,  113 => 59,  110 => 58,  107 => 57,  101 => 56,  93 => 54,  85 => 52,  82 => 51,  77 => 50,  74 => 49,  65 => 47,  61 => 46,  56 => 45,  53 => 44,  50 => 43,  47 => 42,  44 => 41,  42 => 40,  36 => 37,  33 => 36,  31 => 33,  25 => 29,);
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
/* <!DOCTYPE html>*/
/* <html>*/
/* 	<head>*/
/* 		<style>*/
/* 			{% block stylesheets %}*/
/* 				{% include 'css.twig' %}*/
/* 			{% endblock %}*/
/* 		</style>*/
/* 		<title>{% block browser_title %}{{ block("page_title") }} - {{ env.getConfig("projectname") }}{% endblock %}</title>*/
/* 		<meta charset="utf-8" />*/
/* 		<meta name="viewport" content="width=device-width, initial-scale=1.0" />*/
/* 		{% if env.getRequestParameter("id") != null %}*/
/* 			{% set url = env.getInternalUrl(null, "id=" ~ env.getRequestParameter("id"), TRUE) %}*/
/* 		{% else %}*/
/* 			{% set url = env.getInternalUrl(null, null, TRUE) %}*/
/* 		{% endif %}*/
/* 		<link rel="canonical" href="{{ url }}"/>*/
/* 		{% for cssSource in skin.getCssSources() %}*/
/* 		<link href="{{ cssSource }}" media="all" rel="stylesheet" type="text/css" />*/
/* 		{% endfor %}*/
/* 		{% if cssReferences is defined %}*/
/* 			{% for cssSource in cssReferences %}*/
/* 				{% if env.getConfig("cdn_root_set") %}*/
/* 					<link href="{{ env.getConfig("cdn_root") }}/css/{{ cssSource }}" media="all" rel="stylesheet" type="text/css" />*/
/* 				{% else %}*/
/* 					<link href="{{ env.getConfig("context_root") }}/css/{{ cssSource }}" media="all" rel="stylesheet" type="text/css" />*/
/* 				{% endif %}*/
/* 			{% endfor %}*/
/* 		{% endif %}*/
/* 		{% if env.getConfig("cdn_root_set") %}*/
/* 			<link rel="shortcut icon" type="image/x-icon" href="{{ env.getConfig("cdn_root") }}/favicon.ico" />*/
/* 		{% else %}*/
/* 			<link rel="shortcut icon" type="image/x-icon" href="{{ env.getConfig("context_root") }}/favicon.ico" />*/
/* 		{% endif %}*/
/* 		{% if env.getConfig("facebook_on") %}*/
/* 			{% if env.getConfig("facebook_appid") %}*/
/* 				<meta property="fb:app_id" content="{{ env.getConfig("facebook_appid") }}"/>*/
/* 			{% endif %}*/
/* 		{% endif %}*/
/* 		{{ env.getConfig("head_code")|raw }}*/
/* 	</head>*/
/* 	<body>*/
/* 		{% block navigation %}*/
/* 		{% include 'navigationbar.twig' %}*/
/* 		{% endblock %}*/
/* 		<div class="container">*/
/* 			{% block page_header %}*/
/* 			{% endblock %}*/
/* 			{% block page_columns %}*/
/* 			<div class="row"">*/
/* 				<div class="span7" id="contentArea">*/
/* 					<div class="box">*/
/* 						{% include 'breadcrumb.twig' %}*/
/* 						<div class="page-header">*/
/* 						<h1>{{ block("page_title") }}</h1>*/
/* 						</div>*/
/* 						<div id="messages">*/
/* 						{% block messages_block %}*/
/* 						{{ viewHandler.renderBlock("messagesblock")|raw }}*/
/* 						{% endblock %}*/
/* 						</div>*/
/* 						<div id="pagecontent">*/
/* 						{% if blocks.content_top is defined %}*/
/* 							{% for uiBlock in blocks.content_top %}*/
/* 								<div id="{{ uiBlock.id }}_block">*/
/* 								{{ viewHandler.renderBlock(uiBlock.id, uiBlock)|raw }}*/
/* 								</div>*/
/* 							{% endfor %}*/
/* 						{% endif %}*/
/* 						{{ block("page_content") }}*/
/* 						{% if blocks.content_bottom is defined %}*/
/* 							{% for uiBlock in blocks.content_bottom %}*/
/* 								<div id="{{ uiBlock.id }}_block">*/
/* 								{{ viewHandler.renderBlock(uiBlock.id, uiBlock)|raw }}*/
/* 								</div>*/
/* 							{% endfor %}*/
/* 						{% endif %}*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="span4">*/
/* 					<div id="profile">*/
/* 						{% if blocks.sidebar is defined %}*/
/* 						{% endif %}*/
/* 					</div>*/
/* 					{% if blocks.sidebar is defined %}*/
/* 						{% for uiBlock in blocks.sidebar %}*/
/* 						{% if not block('userprofile_block') %}*/
/* 							<div id="{{ uiBlock.id }}_block">*/
/* 							{{ viewHandler.renderBlock(uiBlock.id, uiBlock)|raw }}*/
/* 							</div>*/
/* 							{% endif %}*/
/* 						{% endfor %}*/
/* 					{% endif %}*/
/* 				</div>*/
/* 			</div>*/
/* 			{% endblock %}*/
/* 			<br><br>*/
/* 			<footer>*/
/* 				<div id="footer">*/
/* 					<small>*/
/* 						{% if env.getConfig("footerlinkoben1")|length > 0 %}<a href="{{ env.getConfig("footerlinkoben1") }}" target="_blank">{{ env.getConfig("footerlinkoben1txt") }}</a>{% endif %}*/
/* 						{% if env.getConfig("footerlinkoben2")|length > 0 %} | <a href="{{ env.getConfig("footerlinkoben2") }}" target="_blank">{{ env.getConfig("footerlinkoben2txt") }}</a>{% endif %}*/
/* 						{% if env.getConfig("footerlinkoben3")|length > 0 %} | <a href="{{ env.getConfig("footerlinkoben3") }}" target="_blank">{{ env.getConfig("footerlinkoben3txt") }}</a>{% endif %}<br>*/
/* 						<a href="{{ env.getInternalUrl("termsandconditions") }}">{{ i18n.getMessage("termsandconditions_navlabel") }}</a>*/
/* 						{% if env.getConfig("privacypolicy_url")|length > 0 %}<a href="{{ env.getConfig("privacypolicy_url") }}">{{ i18n.getMessage("privacypolicy_navlabel") }}</a>{% endif %}*/
/* 						| <a href="{{ env.getInternalUrl("imprint") }}">{{ i18n.getMessage("imprint_navlabel") }}</a>*/
/* 						<a href="https://github.com/rolfjoseph/OpenWebsoccer" target="_blank"><b>OpenWebsoccer {{ constant('OWSVERSION') }}</b> by Rolf Joseph/ErdemCan</a> ( <a href="https://github.com/ihofmann/open-websoccer" target="_blank">Base by Ingo Hofmann )</a> |*/
/* 						{% if env.getConfig("footerlinkrechts")|length > 0 %}<a href="{{ env.getConfig("footerlinkrechts") }}" target="_blank">{{ env.getConfig("footerlinkrechtstxt") }}</a>{% endif %}<br>*/
/* 						{% if env.getConfig("footerlinkunten1")|length > 0 %}<a href="{{ env.getConfig("footerlinkunten1") }}" target="_blank">{{ env.getConfig("footerlinkunten1txt") }}</a>{% endif %}*/
/* 						{% if env.getConfig("footerlinkunten2")|length > 0 %} | <a href="{{ env.getConfig("footerlinkunten2") }}" target="_blank">{{ env.getConfig("footerlinkunten2txt") }}</a>{% endif %}*/
/* 						{% if env.getConfig("footerlinkunten3")|length > 0 %} | <a href="{{ env.getConfig("footerlinkunten3") }}" target="_blank">{{ env.getConfig("footerlinkunten3txt") }}</a>{% endif %}*/
/* 					 </small>*/
/* 				</div>*/
/* 			</footer>*/
/* 		</div>*/
/* 		<div id="ajaxLoaderPage"></div>*/
/* 		{% for jsSource in skin.getJavaScriptSources() %}*/
/* 			<script src="{{ jsSource }}" ></script>*/
/* 		{% endfor %}*/
/* 		{% if scriptReferences is defined %}*/
/* 			{% for jsSource in scriptReferences %}*/
/* 			{% if env.getConfig("cdn_root_set") %}*/
/* 				<script src="{{ env.getConfig("cdn_root") }}/js/{{ jsSource }}" ></script>*/
/* 			{% else %}*/
/* 				<script src="{{ env.getConfig("context_root") }}/js/{{ jsSource }}" ></script>*/
/* 			{% endif %}*/
/* 			{% endfor %}*/
/* 		{% endif %}*/
/* 	</body>*/
/* </html>*/
