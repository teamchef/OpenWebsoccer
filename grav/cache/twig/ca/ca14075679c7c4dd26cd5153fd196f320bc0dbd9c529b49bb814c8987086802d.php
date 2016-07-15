<?php

/* partials/langswitcher.html.twig */
class __TwigTemplate_37ac75335cea92e58d7884aa22bfbcf96a13c3d2a8a9d1f1be6fe2a3baa4686c extends Twig_Template
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
        echo "<ul class=\"langswitcher\">
";
        // line 2
        $context["langobj"] = $this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array(), "array");
        // line 3
        echo "
";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["langswitcher"]) ? $context["langswitcher"] : null), "languages", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 5
            echo "
    ";
            // line 6
            if (($context["key"] == $this->getAttribute((isset($context["langswitcher"]) ? $context["langswitcher"] : null), "current", array()))) {
                // line 7
                echo "        ";
                $context["lang_url"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
                // line 8
                echo "        ";
                $context["active_class"] = " active";
                // line 9
                echo "    ";
            } else {
                // line 10
                echo "        ";
                $context["lang_url"] = (((((isset($context["base_url_simple"]) ? $context["base_url_simple"] : null) . $this->getAttribute((isset($context["langobj"]) ? $context["langobj"] : null), "getLanguageURLPrefix", array(0 => $context["key"]), "method")) . $this->getAttribute((isset($context["langswitcher"]) ? $context["langswitcher"] : null), "page_route", array()))) ? ((((isset($context["base_url_simple"]) ? $context["base_url_simple"] : null) . $this->getAttribute((isset($context["langobj"]) ? $context["langobj"] : null), "getLanguageURLPrefix", array(0 => $context["key"]), "method")) . $this->getAttribute((isset($context["langswitcher"]) ? $context["langswitcher"] : null), "page_route", array()))) : ("/"));
                // line 11
                echo "        ";
                $context["active_class"] = "";
                // line 12
                echo "    ";
            }
            // line 13
            echo "
    <li><a href=\"";
            // line 14
            echo ((isset($context["lang_url"]) ? $context["lang_url"] : null) . $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "params", array()));
            echo "\" class=\"external";
            echo (isset($context["active_class"]) ? $context["active_class"] : null);
            echo "\">";
            echo twig_capitalize_string_filter($this->env, call_user_func_array($this->env->getFunction('native_name')->getCallable(), array($context["key"])));
            echo "</a></li>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "partials/langswitcher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 17,  57 => 14,  54 => 13,  51 => 12,  48 => 11,  45 => 10,  42 => 9,  39 => 8,  36 => 7,  34 => 6,  31 => 5,  27 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* <ul class="langswitcher">*/
/* {% set langobj = grav['language'] %}*/
/* */
/* {% for key in langswitcher.languages %}*/
/* */
/*     {% if key == langswitcher.current %}*/
/*         {% set lang_url = page.url %}*/
/*         {% set active_class = ' active' %}*/
/*     {% else %}*/
/*         {% set lang_url = base_url_simple ~ langobj.getLanguageURLPrefix(key)~langswitcher.page_route ?: '/' %}*/
/*         {% set active_class = '' %}*/
/*     {% endif %}*/
/* */
/*     <li><a href="{{ lang_url ~ uri.params }}" class="external{{ active_class }}">{{  native_name(key)|capitalize }}</a></li>*/
/* */
/* {% endfor %}*/
/* </ul>*/
/* */
