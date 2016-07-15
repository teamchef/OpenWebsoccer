<?php

/* partials/taxonomylist.html.twig */
class __TwigTemplate_572479a7d91c095a4fdfc02b7c1d3212eb95f7ec2a2598c0b86409f50b9e3b50 extends Twig_Template
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
        $context["taxlist"] = $this->getAttribute((isset($context["taxonomylist"]) ? $context["taxonomylist"] : null), "get", array(), "method");
        // line 2
        echo "
";
        // line 3
        if ((isset($context["taxlist"]) ? $context["taxlist"] : null)) {
            // line 4
            echo "<span class=\"tags\">
    ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["taxlist"]) ? $context["taxlist"] : null), (isset($context["taxonomy"]) ? $context["taxonomy"] : null), array(), "array"));
            foreach ($context['_seq'] as $context["tax"] => $context["value"]) {
                // line 6
                echo "        ";
                $context["active"] = ((($this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "param", array(0 => (isset($context["taxonomy"]) ? $context["taxonomy"] : null)), "method") == $context["tax"])) ? ("active") : (""));
                // line 7
                echo "        <a class=\"";
                echo (isset($context["active"]) ? $context["active"] : null);
                echo "\" href=\"";
                echo (isset($context["base_url"]) ? $context["base_url"] : null);
                echo "/";
                echo (isset($context["taxonomy"]) ? $context["taxonomy"] : null);
                echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
                echo $context["tax"];
                echo "\">";
                echo $context["tax"];
                echo "</a>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['tax'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "</span>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/taxonomylist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 9,  36 => 7,  33 => 6,  29 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set taxlist = taxonomylist.get() %}*/
/* */
/* {% if taxlist %}*/
/* <span class="tags">*/
/*     {% for tax,value in taxlist[taxonomy] %}*/
/*         {% set active = uri.param(taxonomy) == tax ? 'active' : '' %}*/
/*         <a class="{{ active }}" href="{{ base_url }}/{{ taxonomy }}{{ config.system.param_sep }}{{ tax }}">{{ tax }}</a>*/
/*     {% endfor %}*/
/* </span>*/
/* {% endif %}*/
/* */
