<?php

/* macro.twig */
class __TwigTemplate_dd4bf889fbf19611acd93f9a7043108467a9870cae1bf2805d2f9eaf15e60f4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 29
        echo "
";
        // line 33
        echo "
";
        // line 55
        echo "
";
        // line 77
        echo "
";
        // line 87
        echo "
";
        // line 107
        echo "
";
        // line 118
        echo "
";
        // line 128
        echo "
";
        // line 148
        echo "
";
        // line 155
        echo "
";
        // line 181
        echo "
";
        // line 196
        echo "
";
        // line 202
        echo "
";
        // line 230
        echo "
";
        // line 287
        echo "
";
        // line 391
        echo "
";
        // line 404
        echo "
";
        // line 418
        echo "
";
    }

    // line 204
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 205
        echo "\t\t<style type=\"text/css\">
\t\t\t.inforow {
\t\t\t\tmargin-top: 10px;
\t\t\t}
\t\t\t.infolabel {
\t\t\t\tfont-weight: bold;
\t\t\t\tbackground: url(";
        // line 211
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "bild_hintergrund"), "method"), "html", null, true);
        echo ");
\t\t\t\tpadding: 8px;
\t\t\t\tborder-radius: 4px;
\t\t\t}
\t\t\t.infovalue {
\t\t\t\tpadding: 8px;
\t\t\t}
\t\t\t.alert-info {
\t\t\t\tbackground-color: rgb(255, 0, 0);
\t\t\t\tborder-color: #ff0000;
\t\t\t\tcolor: #ffffff;
\t\t\t}
\t\t</style>
\t";
    }

    // line 30
    public function getvar($__variables__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "variables" => $__variables__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 31
            echo "\t";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["variables"]) ? $context["variables"] : null), "var", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["variables"]) ? $context["variables"] : null), "var", array()), "Variableninhalt nicht ermittelbar !")) : ("Variableninhalt nicht ermittelbar !")), "html", null, true);
            echo "
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

    // line 34
    public function gettextfield($__fieldId__ = null, $__label__ = null, $__value__ = null, $__required__ = false, $__errormsg__ = null, $__type__ = "text", $__helptext__ = null, $__disabled__ = false, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "fieldId" => $__fieldId__,
            "label" => $__label__,
            "value" => $__value__,
            "required" => $__required__,
            "errormsg" => $__errormsg__,
            "type" => $__type__,
            "helptext" => $__helptext__,
            "disabled" => $__disabled__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 35
            echo "\t";
            if ($this->getAttribute((isset($context["errormsg"]) ? $context["errormsg"] : null), (isset($context["fieldId"]) ? $context["fieldId"] : null), array(), "array", true, true)) {
                // line 36
                echo "\t\t";
                $context["error"] = $this->getAttribute((isset($context["errormsg"]) ? $context["errormsg"] : null), (isset($context["fieldId"]) ? $context["fieldId"] : null), array(), "array");
                // line 37
                echo "\t";
            } else {
                // line 38
                echo "\t\t";
                $context["error"] = "";
                // line 39
                echo "\t";
            }
            // line 40
            echo "\t<div class=\"control-group";
            if ((twig_length_filter($this->env, (isset($context["error"]) ? $context["error"] : null)) > 0)) {
                echo " error";
            }
            echo "\">
\t\t<label class=\"control-label\" for=\"";
            // line 41
            echo twig_escape_filter($this->env, (isset($context["fieldId"]) ? $context["fieldId"] : null), "html", null, true);
            echo "\">
\t\t";
            // line 42
            if ((isset($context["required"]) ? $context["required"] : null)) {
                // line 43
                echo "\t\t\t<strong>";
                echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
                echo "</strong>
\t\t";
            } else {
                // line 45
                echo "\t\t\t";
                echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
                echo "
\t\t";
            }
            // line 47
            echo "\t\t</label>
\t\t<div class=\"controls\">
\t\t\t<input type=\"";
            // line 49
            echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
            echo "\"";
            if (((isset($context["type"]) ? $context["type"] : null) == "number")) {
                echo " class=\"input-small\"";
            }
            echo " id=\"";
            echo twig_escape_filter($this->env, (isset($context["fieldId"]) ? $context["fieldId"] : null), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["fieldId"]) ? $context["fieldId"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
            echo "\"";
            if ((isset($context["required"]) ? $context["required"] : null)) {
                echo " required";
            }
            if ((isset($context["disabled"]) ? $context["disabled"] : null)) {
                echo " disabled";
            }
            echo ">
\t\t\t";
            // line 50
            if ((twig_length_filter($this->env, (isset($context["error"]) ? $context["error"] : null)) > 0)) {
                echo "<span class=\"help-inline\">";
                echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : null), "html", null, true);
                echo "</span>";
            }
            // line 51
            echo "\t\t\t";
            if ((twig_length_filter($this->env, (isset($context["helptext"]) ? $context["helptext"] : null)) > 0)) {
                echo "<span class=\"help-inline\">";
                echo twig_escape_filter($this->env, (isset($context["helptext"]) ? $context["helptext"] : null), "html", null, true);
                echo "</span>";
            }
            // line 52
            echo "\t\t</div>
\t</div>
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

    // line 56
    public function getautocomplete($__fieldId__ = null, $__label__ = null, $__value__ = null, $__required__ = false, $__errormsg__ = null, $__ajaxblock__ = null, $__helptext__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "fieldId" => $__fieldId__,
            "label" => $__label__,
            "value" => $__value__,
            "required" => $__required__,
            "errormsg" => $__errormsg__,
            "ajaxblock" => $__ajaxblock__,
            "helptext" => $__helptext__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 57
            echo "\t";
            if ($this->getAttribute((isset($context["errormsg"]) ? $context["errormsg"] : null), (isset($context["fieldId"]) ? $context["fieldId"] : null), array(), "array", true, true)) {
                // line 58
                echo "\t\t";
                $context["error"] = $this->getAttribute((isset($context["errormsg"]) ? $context["errormsg"] : null), (isset($context["fieldId"]) ? $context["fieldId"] : null), array(), "array");
                // line 59
                echo "\t";
            } else {
                // line 60
                echo "\t\t";
                $context["error"] = "";
                // line 61
                echo "\t";
            }
            // line 62
            echo "\t<div class=\"control-group";
            if ((twig_length_filter($this->env, (isset($context["error"]) ? $context["error"] : null)) > 0)) {
                echo " error";
            }
            echo "\">
\t\t<label class=\"control-label\" for=\"";
            // line 63
            echo twig_escape_filter($this->env, (isset($context["fieldId"]) ? $context["fieldId"] : null), "html", null, true);
            echo "\">
\t\t\t";
            // line 64
            if ((isset($context["required"]) ? $context["required"] : null)) {
                // line 65
                echo "\t\t\t\t<strong>";
                echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
                echo "</strong>
\t\t\t";
            } else {
                // line 67
                echo "\t\t\t\t";
                echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
                echo "
\t\t\t";
            }
            // line 69
            echo "\t\t</label>
\t\t<div class=\"controls\">
\t\t\t<input type=\"text\" id=\"";
            // line 71
            echo twig_escape_filter($this->env, (isset($context["fieldId"]) ? $context["fieldId"] : null), "html", null, true);
            echo "\" class=\"autocomplete\" autocomplete=\"off\" data-provide=\"typeahead\" data-ajaxblock=\"";
            echo twig_escape_filter($this->env, (isset($context["ajaxblock"]) ? $context["ajaxblock"] : null), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["fieldId"]) ? $context["fieldId"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
            echo "\"";
            if ((isset($context["required"]) ? $context["required"] : null)) {
                echo " required";
            }
            echo ">
\t\t\t";
            // line 72
            if ((twig_length_filter($this->env, (isset($context["error"]) ? $context["error"] : null)) > 0)) {
                echo "<span class=\"help-inline\">";
                echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : null), "html", null, true);
                echo "</span>";
            }
            // line 73
            echo "\t\t\t";
            if ((twig_length_filter($this->env, (isset($context["helptext"]) ? $context["helptext"] : null)) > 0)) {
                echo "<span class=\"help-inline\">";
                echo twig_escape_filter($this->env, (isset($context["helptext"]) ? $context["helptext"] : null), "html", null, true);
                echo "</span>";
            }
            // line 74
            echo "\t\t</div>
\t</div>
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

    // line 78
    public function getcheckbox($__fieldId__ = null, $__label__ = null, $__value__ = null, $__colspan__ = false, $__errormsg__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "fieldId" => $__fieldId__,
            "label" => $__label__,
            "value" => $__value__,
            "colspan" => $__colspan__,
            "errormsg" => $__errormsg__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 79
            echo "\t<div class=\"control-group";
            if ((twig_length_filter($this->env, (isset($context["errormsg"]) ? $context["errormsg"] : null)) > 0)) {
                echo " error";
            }
            echo "\"\">
\t\t";
            // line 80
            if (((isset($context["colspan"]) ? $context["colspan"] : null) == false)) {
                echo "<div class=\"controls\">";
            }
            // line 81
            echo "\t\t<label class=\"checkbox\">
\t\t\t<input type=\"checkbox\" id=\"";
            // line 82
            echo twig_escape_filter($this->env, (isset($context["fieldId"]) ? $context["fieldId"] : null), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["fieldId"]) ? $context["fieldId"] : null), "html", null, true);
            echo "\" value=\"1\"";
            if (((isset($context["value"]) ? $context["value"] : null) == 1)) {
                echo " checked";
            }
            echo "> ";
            echo (isset($context["label"]) ? $context["label"] : null);
            echo "
\t\t</label>
\t\t";
            // line 84
            if (((isset($context["colspan"]) ? $context["colspan"] : null) == false)) {
                echo "</div>";
            }
            // line 85
            echo "\t</div>
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

    // line 88
    public function gettextarea($__fieldId__ = null, $__label__ = null, $__value__ = null, $__required__ = false, $__errormsg__ = null, $__helptext__ = null, $__rows__ = 10, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "fieldId" => $__fieldId__,
            "label" => $__label__,
            "value" => $__value__,
            "required" => $__required__,
            "errormsg" => $__errormsg__,
            "helptext" => $__helptext__,
            "rows" => $__rows__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 89
            echo "\t";
            if ($this->getAttribute((isset($context["errormsg"]) ? $context["errormsg"] : null), (isset($context["fieldId"]) ? $context["fieldId"] : null), array(), "array", true, true)) {
                // line 90
                echo "\t\t";
                $context["error"] = $this->getAttribute((isset($context["errormsg"]) ? $context["errormsg"] : null), (isset($context["fieldId"]) ? $context["fieldId"] : null), array(), "array");
                // line 91
                echo "\t";
            } else {
                // line 92
                echo "\t\t";
                $context["error"] = "";
                // line 93
                echo "\t";
            }
            // line 94
            echo "\t<div class=\"control-group";
            if ((twig_length_filter($this->env, (isset($context["error"]) ? $context["error"] : null)) > 0)) {
                echo " error";
            }
            echo "\">
\t\t<label for=\"";
            // line 95
            echo twig_escape_filter($this->env, (isset($context["fieldId"]) ? $context["fieldId"] : null), "html", null, true);
            echo "\">
\t\t\t";
            // line 96
            if ((isset($context["required"]) ? $context["required"] : null)) {
                // line 97
                echo "\t\t\t\t<strong>";
                echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
                echo "</strong>
\t\t\t";
            } else {
                // line 99
                echo "\t\t\t\t";
                echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
                echo "
\t\t\t";
            }
            // line 101
            echo "\t\t</label>
\t\t<textarea id=\"";
            // line 102
            echo twig_escape_filter($this->env, (isset($context["fieldId"]) ? $context["fieldId"] : null), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["fieldId"]) ? $context["fieldId"] : null), "html", null, true);
            echo "\" rows=\"";
            echo twig_escape_filter($this->env, (isset($context["rows"]) ? $context["rows"] : null), "html", null, true);
            echo "\" class=\"span5\">";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "</textarea>
\t\t";
            // line 103
            if ((twig_length_filter($this->env, (isset($context["error"]) ? $context["error"] : null)) > 0)) {
                echo "<span class=\"help-inline\">";
                echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : null), "html", null, true);
                echo "</span>";
            }
            // line 104
            echo "\t\t";
            if ((twig_length_filter($this->env, (isset($context["helptext"]) ? $context["helptext"] : null)) > 0)) {
                echo "<span class=\"help-inline\">";
                echo twig_escape_filter($this->env, (isset($context["helptext"]) ? $context["helptext"] : null), "html", null, true);
                echo "</span>";
            }
            // line 105
            echo "\t</div>
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

    // line 108
    public function getreadonly($__label__ = null, $__value__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "value" => $__value__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 109
            echo "\t<div class=\"control-group\">
\t\t<label class=\"control-label\">
\t\t\t";
            // line 111
            echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
            echo "
\t\t</label>
\t\t<div class=\"controls\">
\t\t\t<span class=\"input-large uneditable-input\">";
            // line 114
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "</span>
\t\t</div>
\t</div>
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

    // line 119
    public function getslider($__fieldId__ = null, $__value__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "fieldId" => $__fieldId__,
            "value" => $__value__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 120
            echo "\t<input type=\"text\" id=\"";
            echo twig_escape_filter($this->env, (isset($context["fieldId"]) ? $context["fieldId"] : null), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["fieldId"]) ? $context["fieldId"] : null), "html", null, true);
            echo "\" class=\"span6 slider\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\"
\t\tdata-slider-min=\"1\" data-slider-max=\"100\"
\t\tdata-slider-step=\"1\"
\t\tdata-slider-value=\"";
            // line 123
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\"
\t\tdata-slider-orientation=\"horizontal\"
\t\tdata-slider-selection=\"before\" />
\t<span>";
            // line 126
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "unit_percent"), "method"), "html", null, true);
            echo "</span>
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

    // line 129
    public function getteamPlayerSelection($__fieldId__ = null, $__label__ = null, $__selectedPlayer__ = null, $__positionsAndPlayers__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "fieldId" => $__fieldId__,
            "label" => $__label__,
            "selectedPlayer" => $__selectedPlayer__,
            "positionsAndPlayers" => $__positionsAndPlayers__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 130
            echo "\t<div class=\"control-group\">
\t\t<label class=\"control-label\" for=\"";
            // line 131
            echo twig_escape_filter($this->env, (isset($context["fieldId"]) ? $context["fieldId"] : null), "html", null, true);
            echo "\">
\t\t\t";
            // line 132
            echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
            echo "
\t\t</label>
\t\t<div class=\"controls\">
\t\t\t<select name=\"";
            // line 135
            echo twig_escape_filter($this->env, (isset($context["fieldId"]) ? $context["fieldId"] : null), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, (isset($context["fieldId"]) ? $context["fieldId"] : null), "html", null, true);
            echo "\">
\t\t\t\t<option></option>
\t\t\t\t";
            // line 137
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["positionsAndPlayers"]) ? $context["positionsAndPlayers"] : null));
            foreach ($context['_seq'] as $context["position"] => $context["players"]) {
                // line 138
                echo "\t\t\t\t\t<optgroup label=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => ("player_position_" . $context["position"])), "method"), "html", null, true);
                echo "\">
\t\t\t\t\t\t";
                // line 139
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["players"]);
                foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
                    if (($this->getAttribute($context["player"], "transfermarket", array()) != "1")) {
                        // line 140
                        echo "\t\t\t\t\t\t\t<option value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["player"], "id", array()), "html", null, true);
                        echo "\" ";
                        if (((isset($context["selectedPlayer"]) ? $context["selectedPlayer"] : null) == $this->getAttribute($context["player"], "id", array()))) {
                            echo " selected";
                        }
                        echo ">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["player"], "firstname", array()), "html", null, true);
                        echo " ";
                        if ((twig_length_filter($this->env, $this->getAttribute($context["player"], "pseudonym", array())) > 0)) {
                            echo "&quot;";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["player"], "pseudonym", array()), "html", null, true);
                            echo "&quot; ";
                        }
                        echo twig_escape_filter($this->env, $this->getAttribute($context["player"], "lastname", array()), "html", null, true);
                        if ((twig_length_filter($this->env, $this->getAttribute($context["player"], "position_main", array())) > 0)) {
                            echo " (";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => ("player_mainposition_" . $this->getAttribute($context["player"], "position_main", array()))), "method"), "html", null, true);
                            echo ")";
                        }
                        echo "</option>
\t\t\t\t\t\t";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 142
                echo "\t\t\t\t\t</optgroup>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['position'], $context['players'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 144
            echo "\t\t\t</select>
\t\t</div>
\t</div>
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

    // line 149
    public function getbox($__title__ = null, $__message__ = null, $__type__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "title" => $__title__,
            "message" => $__message__,
            "type" => $__type__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 150
            echo "\t<div class=\"alert alert-block alert-";
            echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "error")) : ("error")), "html", null, true);
            echo "\">
\t\t<h4>";
            // line 151
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "</h4>
\t\t";
            // line 152
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
            echo "
\t</div>
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

    // line 156
    public function getpaginator($__paginatorModel__ = null, $__ajaxTarget__ = "pagecontent", ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "paginatorModel" => $__paginatorModel__,
            "ajaxTarget" => $__ajaxTarget__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 157
            echo "\t";
            if (($this->getAttribute((isset($context["paginatorModel"]) ? $context["paginatorModel"] : null), "pages", array()) > 1)) {
                // line 158
                echo "\t\t<div class=\"pagination\">
\t\t\t<ul>
\t\t\t\t";
                // line 160
                if (($this->getAttribute((isset($context["paginatorModel"]) ? $context["paginatorModel"] : null), "pageNo", array()) > 1)) {
                    // line 161
                    echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#p";
                    // line 162
                    echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["paginatorModel"]) ? $context["paginatorModel"] : null), "pageNo", array()) - 1), "html", null, true);
                    echo "\" class=\"ajaxLink\" data-ajaxtarget=\"";
                    echo twig_escape_filter($this->env, (isset($context["ajaxTarget"]) ? $context["ajaxTarget"] : null), "html", null, true);
                    echo "\" data-ajaxquerystr=\"page=";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getPageId", array(), "method"), "html", null, true);
                    echo "&";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paginatorModel"]) ? $context["paginatorModel"] : null), "getQueryString", array(), "method"), "html", null, true);
                    echo "&pageno=";
                    echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["paginatorModel"]) ? $context["paginatorModel"] : null), "pageNo", array()) - 1), "html", null, true);
                    echo "\">&laquo;</a>
\t\t\t\t\t</li>
\t\t\t\t";
                }
                // line 165
                echo "\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute((isset($context["paginatorModel"]) ? $context["paginatorModel"] : null), "pages", array())));
                foreach ($context['_seq'] as $context["_key"] => $context["pageNo"]) {
                    // line 166
                    echo "\t\t\t\t\t";
                    if ((($context["pageNo"] == ($this->getAttribute((isset($context["paginatorModel"]) ? $context["paginatorModel"] : null), "pageNo", array()) - 5)) || ($context["pageNo"] == ($this->getAttribute((isset($context["paginatorModel"]) ? $context["paginatorModel"] : null), "pageNo", array()) + 5)))) {
                        // line 167
                        echo "\t\t\t\t\t\t<li class=\"disabled\"><a>...</a></li>
\t\t\t\t\t";
                    } elseif ((((                    // line 168
$context["pageNo"] == 1) || ($context["pageNo"] == $this->getAttribute((isset($context["paginatorModel"]) ? $context["paginatorModel"] : null), "pages", array()))) || (($context["pageNo"] > ($this->getAttribute((isset($context["paginatorModel"]) ? $context["paginatorModel"] : null), "pageNo", array()) - 5)) && ($context["pageNo"] < ($this->getAttribute((isset($context["paginatorModel"]) ? $context["paginatorModel"] : null), "pageNo", array()) + 5))))) {
                        // line 169
                        echo "\t\t\t\t\t\t<li";
                        if (($context["pageNo"] == $this->getAttribute((isset($context["paginatorModel"]) ? $context["paginatorModel"] : null), "pageNo", array()))) {
                            echo " class=\"active\"";
                        }
                        echo "><a href=\"#p";
                        echo twig_escape_filter($this->env, $context["pageNo"], "html", null, true);
                        echo "\"
\t\t\t\t\t\tclass=\"ajaxLink\" data-ajaxtarget=\"";
                        // line 170
                        echo twig_escape_filter($this->env, (isset($context["ajaxTarget"]) ? $context["ajaxTarget"] : null), "html", null, true);
                        echo "\" data-ajaxquerystr=\"page=";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getPageId", array(), "method"), "html", null, true);
                        echo "&";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paginatorModel"]) ? $context["paginatorModel"] : null), "getQueryString", array(), "method"), "html", null, true);
                        echo "&pageno=";
                        echo twig_escape_filter($this->env, $context["pageNo"], "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $context["pageNo"], "html", null, true);
                        echo "</a></li>
\t\t\t\t\t";
                    }
                    // line 172
                    echo "\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pageNo'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 173
                echo "\t\t\t\t";
                if (($this->getAttribute((isset($context["paginatorModel"]) ? $context["paginatorModel"] : null), "pageNo", array()) < $this->getAttribute((isset($context["paginatorModel"]) ? $context["paginatorModel"] : null), "pages", array()))) {
                    // line 174
                    echo "\t\t\t\t\t<li><a href=\"#";
                    echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["paginatorModel"]) ? $context["paginatorModel"] : null), "pageNo", array()) + 1), "html", null, true);
                    echo "\"
\t\t\t\t\tclass=\"ajaxLink\" data-ajaxtarget=\"";
                    // line 175
                    echo twig_escape_filter($this->env, (isset($context["ajaxTarget"]) ? $context["ajaxTarget"] : null), "html", null, true);
                    echo "\" data-ajaxquerystr=\"page=";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getPageId", array(), "method"), "html", null, true);
                    echo "&";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paginatorModel"]) ? $context["paginatorModel"] : null), "getQueryString", array(), "method"), "html", null, true);
                    echo "&pageno=";
                    echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["paginatorModel"]) ? $context["paginatorModel"] : null), "pageNo", array()) + 1), "html", null, true);
                    echo "\">&raquo;</a></li>
\t\t\t\t";
                }
                // line 177
                echo "\t\t\t</ul>
\t\t</div>
\t";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 182
    public function getprogressbar($__percentvalue__ = 0, $__cssClass__ = "", ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "percentvalue" => $__percentvalue__,
            "cssClass" => $__cssClass__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 183
            echo "\t";
            if (((isset($context["percentvalue"]) ? $context["percentvalue"] : null) > 80)) {
                // line 184
                echo "\t\t";
                $context["progress_status"] = "success";
                // line 185
                echo "\t";
            } elseif (((isset($context["percentvalue"]) ? $context["percentvalue"] : null) > 50)) {
                // line 186
                echo "\t\t";
                $context["progress_status"] = "info";
                // line 187
                echo "\t";
            } elseif (((isset($context["percentvalue"]) ? $context["percentvalue"] : null) > 30)) {
                // line 188
                echo "\t\t";
                $context["progress_status"] = "warning";
                // line 189
                echo "\t";
            } else {
                // line 190
                echo "\t\t";
                $context["progress_status"] = "danger";
                // line 191
                echo "\t";
            }
            // line 192
            echo "\t<div class=\"progress progress-";
            echo twig_escape_filter($this->env, (isset($context["progress_status"]) ? $context["progress_status"] : null), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["cssClass"]) ? $context["cssClass"] : null), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, (isset($context["percentvalue"]) ? $context["percentvalue"] : null), "html", null, true);
            echo "%\">
\t\t<div class=\"bar\" style=\"width: ";
            // line 193
            echo twig_escape_filter($this->env, (isset($context["percentvalue"]) ? $context["percentvalue"] : null), "html", null, true);
            echo "%\">";
            echo twig_escape_filter($this->env, (isset($context["percentvalue"]) ? $context["percentvalue"] : null), "html", null, true);
            echo "%</div>
\t</div>
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

    // line 197
    public function getpiechart($__label1__ = null, $__percentvalue1__ = null, $__label2__ = null, $__percentvalue2__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "label1" => $__label1__,
            "percentvalue1" => $__percentvalue1__,
            "label2" => $__label2__,
            "percentvalue2" => $__percentvalue2__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 198
            echo "\t<div class=\"pieChart\" style=\"width:250px;height:250px\" data-series='[{\"label\": \"";
            echo twig_escape_filter($this->env, trim((isset($context["label2"]) ? $context["label2"] : null)), "html", null, true);
            echo "\",  \"data\": \"";
            echo twig_escape_filter($this->env, (isset($context["percentvalue2"]) ? $context["percentvalue2"] : null), "html", null, true);
            echo "\", \"color\": \"#FF6600\"}, { \"label\": \"";
            echo twig_escape_filter($this->env, trim((isset($context["label1"]) ? $context["label1"] : null)), "html", null, true);
            echo "\",  \"data\": \"";
            echo twig_escape_filter($this->env, (isset($context["percentvalue1"]) ? $context["percentvalue1"] : null), "html", null, true);
            echo "\", \"color\": \"#006699\"}]'>
\t</div>
\t<div class=\"pieChartLabel\"></div>
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

    // line 203
    public function getinfofield($__label__ = null, $__value__ = null, $__doNotEscape__ = false, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "value" => $__value__,
            "doNotEscape" => $__doNotEscape__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 204
            echo "\t";
            $this->displayBlock('stylesheets', $context, $blocks);
            // line 225
            echo "\t<div class=\"row-fluid inforow\">
\t\t<div class=\"span6 infolabel\">";
            // line 226
            if ((isset($context["doNotEscape"]) ? $context["doNotEscape"] : null)) {
                echo (isset($context["label"]) ? $context["label"] : null);
            } else {
                echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
            }
            echo "</div>
\t\t<div class=\"span6 infovalue\">";
            // line 227
            if ((isset($context["doNotEscape"]) ? $context["doNotEscape"] : null)) {
                echo (isset($context["value"]) ? $context["value"] : null);
            } else {
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            }
            echo "</div>
\t</div>
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

    // line 231
    public function getteamlistItem($__player__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "player" => $__player__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 232
            echo "\t";
            $context["playerlists"] = $this;
            // line 233
            echo "\t\t\t<tr>
\t\t\t\t<td>
\t\t\t\t\t";
            // line 235
            if ($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "cdn_root_set"), "method")) {
                // line 236
                echo "\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "cdn_root"), "method"), "html", null, true);
                echo "/img/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => ("player_position_" . $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "position", array()))), "method"), "html", null, true);
                echo ".png\"\talt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => ("player_position_" . $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "position", array()))), "method"), "html", null, true);
                echo "\"
\t\t\t\t\t\ttitle=\"";
                // line 237
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => ("player_position_" . $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "position", array()))), "method"), "html", null, true);
                echo "\" />
\t\t\t\t\t";
            } else {
                // line 239
                echo "\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "context_root"), "method"), "html", null, true);
                echo "/img/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => ("player_position_" . $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "position", array()))), "method"), "html", null, true);
                echo ".png\"\talt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => ("player_position_" . $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "position", array()))), "method"), "html", null, true);
                echo "\"
\t\t\t\t\t\ttitle=\"";
                // line 240
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => ("player_position_" . $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "position", array()))), "method"), "html", null, true);
                echo "\" />
\t\t\t\t\t";
            }
            // line 242
            echo "\t\t\t\t\t";
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "position_main", array())) > 0)) {
                echo "<abbr title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => ("option_" . $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "position_main", array()))), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => ("player_mainposition_" . $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "position_main", array()))), "method"), "html", null, true);
                echo "</abbr>";
            }
            // line 243
            echo "\t\t\t\t\t";
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "position_second", array())) > 0)) {
                echo "/ <abbr title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => ("option_" . $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "position_second", array()))), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => ("player_mainposition_" . $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "position_second", array()))), "method"), "html", null, true);
                echo "</abbr>";
            }
            // line 244
            echo "\t\t\t\t</td>
\t\t\t\t<td><a href=\"";
            // line 245
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "player", 1 => ("id=" . $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "id", array()))), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "firstname", array()), "html", null, true);
            echo " ";
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "pseudonym", array())) > 0)) {
                echo "\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "pseudonym", array()), "html", null, true);
                echo "\" ";
            }
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "lastname", array()), "html", null, true);
            echo "</a>
\t\t\t\t\t";
            // line 246
            if (($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getRequestParameter", array(0 => "captain"), "method") == $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "id", array()))) {
                // line 247
                echo "\t\t\t\t\t\t<i class=\"icon-group wstooltip\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "myteam_captain_tooltip"), "method"), "html", null, true);
                echo "\"></i>
\t\t\t\t\t";
            }
            // line 249
            echo "\t\t\t\t\t";
            if ($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "unsellable", array())) {
                // line 250
                echo "\t\t\t\t\t\t<i class=\"icon-eye-close\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_player_unsellable"), "method"), "html", null, true);
                echo "\"></i>
\t\t\t\t\t";
            }
            // line 252
            echo "\t\t\t\t\t";
            if (($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "lending_owner_id", array()) > 0)) {
                // line 253
                echo "\t\t\t\t\t\t<i class=\"icon-star-empty\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "lending_player_marker_tooltip"), "method"), "html", null, true);
                echo "\"></i>
\t\t\t\t\t";
            } elseif ((($this->getAttribute(            // line 254
(isset($context["player"]) ? $context["player"] : null), "lending_fee", array()) > 0) && $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "lending_enabled"), "method"))) {
                // line 255
                echo "\t\t\t\t\t\t<i class=\"icon-share-alt\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "lending_player_marker_lendable"), "method"), "html", null, true);
                echo "\"></i>
\t\t\t\t\t";
            }
            // line 257
            echo "\t\t\t\t</td>
<td>
\t\t\t\t  ";
            // line 259
            if ($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "cdn_root_set"), "method")) {
                // line 260
                echo "\t\t\t\t  \t&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "cdn_root"), "method"), "html", null, true);
                echo "/img/flags/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "player_nationality", array()), "html", null, true);
                echo ".png\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "player_nationality", array()), "html", null, true);
                echo "\" style=\"width: 15px; height: 10px; vertical-align: baseline\"/>
\t\t\t\t  ";
            } else {
                // line 262
                echo "\t\t\t\t  \t&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "context_root"), "method"), "html", null, true);
                echo "/img/flags/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "player_nationality", array()), "html", null, true);
                echo ".png\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "player_nationality", array()), "html", null, true);
                echo "\" style=\"width: 15px; height: 10px; vertical-align: baseline\"/>
\t\t\t\t  ";
            }
            // line 264
            echo "</td>
\t\t\t\t";
            // line 265
            if (($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "hide_strength_attributes"), "method") != "1")) {
                // line 266
                echo "\t\t\t\t\t<td ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "strengthClass", array(0 => $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "strength", array())), "method"), "html", null, true);
                echo " title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "playertable_head_strength"), "method"), "html", null, true);
                echo "\"><strong>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "strength", array()), "html", null, true);
                echo "</strong></td>
\t\t\t\t\t<td ";
                // line 267
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "strengthClass", array(0 => $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "strength_technic", array())), "method"), "html", null, true);
                echo " title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "playertable_head_strength_technic"), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "strength_technic", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t<td ";
                // line 268
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "strengthClass", array(0 => $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "strength_stamina", array())), "method"), "html", null, true);
                echo " title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "playertable_head_strength_stamina"), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "strength_stamina", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t<td ";
                // line 269
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "strengthClass", array(0 => $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "strength_freshness", array())), "method"), "html", null, true);
                echo " title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "playertable_head_strength_freshness"), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "strength_freshness", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t<td ";
                // line 270
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "strengthClass", array(0 => $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "strength_satisfaction", array())), "method"), "html", null, true);
                echo " title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "playertable_head_strength_satisfaction"), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "strength_satisfaction", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t";
                // line 271
                $this->loadTemplate("marktwert.twig", "macro.twig", 271)->display($context);
                // line 272
                echo "\t\t\t\t";
            }
            // line 273
            echo "\t\t\t\t<td>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "age", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td>
\t\t\t\t\t";
            // line 275
            if (($this->getAttribute((isset($context["player"]) ? $context["player"] : null), "matches_injured", array()) > 0)) {
                // line 276
                echo "\t\t\t\t\t\t<i class=\"icon-medkit\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_injured"), "method"), "html", null, true);
                echo "\"></i> ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "matches_injured", array()), "html", null, true);
                echo "
\t\t\t\t\t";
            } elseif (($this->getAttribute(            // line 277
(isset($context["player"]) ? $context["player"] : null), "matches_blocked", array()) > 0)) {
                // line 278
                echo "\t\t\t\t\t\t";
                if ($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "cdn_root_set"), "method")) {
                    // line 279
                    echo "\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "cdn_root"), "method"), "html", null, true);
                    echo "/img/blocked_cards.png\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "formation_team_blocked_cards"), "method"), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "formation_team_blocked_cards"), "method"), "html", null, true);
                    echo "\" /> ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "matches_blocked", array()), "html", null, true);
                    echo "
\t\t\t\t\t\t";
                } else {
                    // line 281
                    echo "\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "context_root"), "method"), "html", null, true);
                    echo "/img/blocked_cards.png\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "formation_team_blocked_cards"), "method"), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "formation_team_blocked_cards"), "method"), "html", null, true);
                    echo "\" /> ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : null), "matches_blocked", array()), "html", null, true);
                    echo "
\t\t\t\t\t\t";
                }
                // line 283
                echo "\t\t\t\t\t";
            }
            // line 284
            echo "\t\t\t\t</td>
\t\t\t</tr>
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

    // line 288
    public function getmatchResultPlayers($__match__ = null, $__players__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "match" => $__match__,
            "players" => $__players__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 289
            echo "\t";
            if ((array_key_exists("players", $context) && (twig_length_filter($this->env, (isset($context["players"]) ? $context["players"] : null)) > 0))) {
                // line 290
                echo "\t\t";
                $context["ageSum"] = 0;
                // line 291
                echo "\t\t";
                $context["strengthSum"] = 0;
                // line 292
                echo "\t\t";
                $context["gradeSum"] = 0;
                // line 293
                echo "\t\t<table class=\"table table-striped table-condensed\">
\t\t\t<colgroup>
\t\t\t\t<col style=\"width: 40px\" />
\t\t\t\t<col />
\t\t\t\t<col style=\"width: 70px\" />
\t\t\t</colgroup>
\t\t\t<thead>
\t\t\t\t<th><abbr title=\"";
                // line 300
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "playertable_head_position"), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "playertable_head_position_abbr"), "method"), "html", null, true);
                echo "</abbr></th>
\t\t\t\t<th>";
                // line 301
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "match_details_players_name"), "method"), "html", null, true);
                echo "</th>
\t\t\t\t<th>";
                // line 302
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "match_details_players_grade"), "method"), "html", null, true);
                echo " <i class=\"icon-question-sign wstooltip\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "match_details_players_grade_helptext"), "method"), "html", null, true);
                echo "\"></i></th>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t";
                // line 305
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["players"]) ? $context["players"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
                    // line 306
                    echo "\t\t\t\t";
                    $context["ageSum"] = ((isset($context["ageSum"]) ? $context["ageSum"] : null) + $this->getAttribute($context["player"], "age", array()));
                    // line 307
                    echo "\t\t\t\t";
                    $context["strengthSum"] = ((isset($context["strengthSum"]) ? $context["strengthSum"] : null) + $this->getAttribute($context["player"], "strength", array()));
                    // line 308
                    echo "\t\t\t\t";
                    $context["gradeSum"] = ((isset($context["gradeSum"]) ? $context["gradeSum"] : null) + $this->getAttribute($context["player"], "grade", array()));
                    // line 309
                    echo "\t\t\t\t<tr>
\t\t\t\t\t";
                    // line 310
                    if ( !twig_test_empty($this->getAttribute($context["player"], "position_main", array()))) {
                        // line 311
                        echo "\t\t\t\t\t<td title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => ("option_" . $this->getAttribute($context["player"], "position_main", array()))), "method"), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => ("player_mainposition_" . $this->getAttribute($context["player"], "position_main", array()))), "method"), "html", null, true);
                        echo "</td>
\t\t\t\t\t";
                    } else {
                        // line 313
                        echo "\t\t\t\t\t<td title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => ("option_" . $this->getAttribute($context["player"], "position", array()))), "method"), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_slice($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => ("option_" . $this->getAttribute($context["player"], "position", array()))), "method"), 0, 2)), "html", null, true);
                        echo "</td>
\t\t\t\t\t";
                    }
                    // line 315
                    echo "\t\t\t\t\t<td><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "player", 1 => ("id=" . $this->getAttribute($context["player"], "id", array()))), "method"), "html", null, true);
                    echo "\">";
                    if ((twig_length_filter($this->env, $this->getAttribute($context["player"], "pseudonym", array())) > 0)) {
                        echo twig_escape_filter($this->env, $this->getAttribute($context["player"], "pseudonym", array()), "html", null, true);
                    } else {
                        echo twig_escape_filter($this->env, $this->getAttribute($context["player"], "firstName", array()), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["player"], "lastName", array()), "html", null, true);
                    }
                    echo "</a>
\t\t\t\t\t";
                    // line 316
                    if (($this->getAttribute($context["player"], "yellowCards", array()) > 0)) {
                        // line 317
                        echo "\t\t\t\t\t\t";
                        if ($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "cdn_root_set"), "method")) {
                            // line 318
                            echo "\t\t\t\t\t\t\t\t<img src=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "cdn_root"), "method"), "html", null, true);
                            echo "./img/card_yellow.png\" style=\"width:=16px height:16px\" alt=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_yellowcard"), "method"), "html", null, true);
                            echo "\" title=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_yellowcard"), "method"), "html", null, true);
                            echo "\" />
\t\t\t\t\t\t\t";
                        } else {
                            // line 320
                            echo "\t\t\t\t\t\t\t\t<img src=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "context_root"), "method"), "html", null, true);
                            echo "/img/card_yellow.png\" style=\"width:=16px height:16px\" alt=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_yellowcard"), "method"), "html", null, true);
                            echo "\" title=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_yellowcard"), "method"), "html", null, true);
                            echo "\" />
\t\t\t\t\t\t";
                        }
                        // line 322
                        echo "\t\t\t\t\t\t";
                        if (($this->getAttribute($context["player"], "yellowCards", array()) > 1)) {
                            // line 323
                            echo "\t\t\t\t\t\t\t";
                            if ($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "cdn_root_set"), "method")) {
                                // line 324
                                echo "\t\t\t\t\t\t\t\t<img src=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "cdn_root"), "method"), "html", null, true);
                                echo "./img/card_red.png\" style=\"width:=16px height:16px\" alt=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_yellowredcard"), "method"), "html", null, true);
                                echo "\" title=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_yellowredcard"), "method"), "html", null, true);
                                echo "\" />
\t\t\t\t\t\t\t";
                            } else {
                                // line 326
                                echo "\t\t\t\t\t\t\t\t<img src=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "context_root"), "method"), "html", null, true);
                                echo "/img/card_red.png\" style=\"width:=16px height:16px\" alt=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_yellowredcard"), "method"), "html", null, true);
                                echo "\" title=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_yellowredcard"), "method"), "html", null, true);
                                echo "\" />
\t\t\t\t\t\t\t";
                            }
                            // line 328
                            echo "\t\t\t\t\t\t";
                        }
                        // line 329
                        echo "\t\t\t\t\t";
                    }
                    // line 330
                    echo "\t\t\t\t\t";
                    if (($this->getAttribute($context["player"], "redCard", array()) > 0)) {
                        // line 331
                        echo "\t\t\t\t\t\t";
                        if ($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "cdn_root_set"), "method")) {
                            // line 332
                            echo "\t\t\t\t\t\t\t<img src=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "cdn_root"), "method"), "html", null, true);
                            echo "./img/card_red.png\" style=\"width:=16px height:16px\" alt=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_redcard"), "method"), "html", null, true);
                            echo "\" title=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_redcard"), "method"), "html", null, true);
                            echo "\" />
\t\t\t\t\t\t";
                        } else {
                            // line 334
                            echo "\t\t\t\t\t\t\t<img src=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "context_root"), "method"), "html", null, true);
                            echo "/img/card_red.png\" style=\"width:=16px height:16px\" alt=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_redcard"), "method"), "html", null, true);
                            echo "\" title=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_redcard"), "method"), "html", null, true);
                            echo "\" />
\t\t\t\t\t\t";
                        }
                        // line 336
                        echo "\t\t\t\t\t";
                    }
                    // line 337
                    echo "\t\t\t\t\t";
                    if (($this->getAttribute($context["player"], "goals", array()) > 0)) {
                        // line 338
                        echo "\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute($context["player"], "goals", array())));
                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                            // line 339
                            echo "\t\t\t\t\t\t";
                            if ($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "cdn_root_set"), "method")) {
                                // line 340
                                echo "\t\t\t\t\t\t\t<img src=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "cdn_root"), "method"), "html", null, true);
                                echo "./img/goal_scorer.png\" style=\"width: 16px; height: 15px\" alt=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_goalscorer"), "method"), "html", null, true);
                                echo "\" title=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_goalscorer"), "method"), "html", null, true);
                                echo "\"/>
\t\t\t\t\t\t";
                            } else {
                                // line 342
                                echo "\t\t\t\t\t\t\t<img src=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "context_root"), "method"), "html", null, true);
                                echo "/img/goal_scorer.png\" style=\"width: 16px; height: 15px\" alt=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_goalscorer"), "method"), "html", null, true);
                                echo "\" title=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_goalscorer"), "method"), "html", null, true);
                                echo "\" />
\t\t\t\t\t\t";
                            }
                            // line 344
                            echo "\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 345
                        echo "\t\t\t\t\t";
                    }
                    // line 346
                    echo "\t\t\t\t\t";
                    if ($this->getAttribute($context["player"], "assists", array())) {
                        // line 347
                        echo "\t\t\t\t\t<span title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_assists"), "method"), "html", null, true);
                        echo "\">
\t\t\t\t\t\t";
                        // line 348
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute($context["player"], "assists", array())));
                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                            // line 349
                            echo "\t\t\t\t\t\t<i class=\"icon-star\"></i>
\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 351
                        echo "\t\t\t\t\t</span>
\t\t\t\t\t";
                    }
                    // line 353
                    echo "\t\t\t\t\t";
                    if (($this->getAttribute($context["player"], "injured", array()) > 0)) {
                        // line 354
                        echo "\t\t\t\t\t\t<i class=\"icon-medkit\" title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_injured"), "method"), "html", null, true);
                        echo "\"></i>
\t\t\t\t\t";
                    }
                    // line 356
                    echo "\t\t\t\t\t";
                    if (($this->getAttribute($context["player"], "playstatus", array()) == "Ausgewechselt")) {
                        // line 357
                        echo "\t\t\t\t\t<span class=\"minutesPlayed\" title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_substitute_out"), "method"), "html", null, true);
                        echo "\"><i class=\"icon-arrow-down\"></i>";
                        echo twig_escape_filter($this->env, ($this->getAttribute($context["player"], "minutesPlayed", array()) + 1), "html", null, true);
                        echo "'</span>
\t\t\t\t\t";
                    } elseif (($this->getAttribute(                    // line 358
$context["player"], "minutesPlayed", array()) < $this->getAttribute((isset($context["match"]) ? $context["match"] : null), "match_minutes", array()))) {
                        // line 359
                        echo "\t\t\t\t\t<span class=\"minutesPlayed\" title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "player_substitute_in"), "method"), "html", null, true);
                        echo "\"><i class=\"icon-arrow-up\"></i>";
                        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["match"]) ? $context["match"] : null), "match_minutes", array()) - $this->getAttribute($context["player"], "minutesPlayed", array())) + 1), "html", null, true);
                        echo "'</span>
\t\t\t\t\t";
                    }
                    // line 361
                    echo "\t\t\t\t\t";
                    if (($this->getAttribute($context["player"], "is_best_player_of_day", array(), "any", true, true) && $this->getAttribute($context["player"], "is_best_player_of_day", array()))) {
                        // line 362
                        echo "\t\t\t\t\t\t<a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "teamoftheday", 1 => ((((("leagueid=" . $this->getAttribute((isset($context["match"]) ? $context["match"] : null), "match_league_id", array())) . "&seasonid=") . $this->getAttribute((isset($context["match"]) ? $context["match"] : null), "match_season_id", array())) . "&matchday=") . $this->getAttribute((isset($context["match"]) ? $context["match"] : null), "match_matchday", array()))), "method"), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "teamoftheday_matchreport_tooltip"), "method"), "html", null, true);
                        echo "\"><i class=\"icon-heart-empty darkIcon\"></i></a>
\t\t\t\t\t";
                    }
                    // line 364
                    echo "\t\t\t\t\t<div id=\"playerstatistics";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["player"], "id", array()), "html", null, true);
                    echo "\" class=\"collapse\">
\t\t\t\t\t\t<dl>
\t\t\t\t\t\t\t<dt>";
                    // line 366
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "match_details_statistic_shoots"), "method"), "html", null, true);
                    echo "</dt>
\t\t\t\t\t\t\t<dd>";
                    // line 367
                    echo twig_escape_filter($this->env, $this->getAttribute($context["player"], "shoots", array()), "html", null, true);
                    echo "</dd>
\t\t\t\t\t\t\t<dt>";
                    // line 368
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "match_details_statistic_ballcontacts_player"), "method"), "html", null, true);
                    echo "</dt>
\t\t\t\t\t\t\t<dd>";
                    // line 369
                    echo twig_escape_filter($this->env, $this->getAttribute($context["player"], "ballcontacts", array()), "html", null, true);
                    echo "</dd>
\t\t\t\t\t\t\t<dt>";
                    // line 370
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "match_details_statistic_successfulpasses"), "method"), "html", null, true);
                    echo "</dt>
\t\t\t\t\t\t\t<dd>";
                    // line 371
                    echo twig_escape_filter($this->env, $this->getAttribute($context["player"], "passes_successed", array()), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, ($this->getAttribute($context["player"], "passes_successed", array()) + $this->getAttribute($context["player"], "passes_failed", array())), "html", null, true);
                    echo "</dd>
\t\t\t\t\t\t\t<dt>";
                    // line 372
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "match_details_statistic_tackles_player"), "method"), "html", null, true);
                    echo "</dt>
\t\t\t\t\t\t\t<dd>";
                    // line 373
                    echo twig_escape_filter($this->env, $this->getAttribute($context["player"], "wontackles", array()), "html", null, true);
                    if (twig_length_filter($this->env, $this->getAttribute($context["player"], "losttackles", array()))) {
                        echo "/";
                        echo twig_escape_filter($this->env, ($this->getAttribute($context["player"], "losttackles", array()) + $this->getAttribute($context["player"], "wontackles", array())), "html", null, true);
                    }
                    echo "</dd>
\t\t\t\t\t\t</dl>
\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t\t<td><a href=\"#playerstatistics";
                    // line 377
                    echo twig_escape_filter($this->env, $this->getAttribute($context["player"], "id", array()), "html", null, true);
                    echo "\" data-toggle=\"collapse\"><i class=\"icon-zoom-in darkIcon\"></i></a> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["player"], "grade", array()), "html", null, true);
                    echo "</td>
\t\t\t\t</tr>
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 380
                echo "\t\t\t</tbody>
\t\t</table>
\t\t<p><strong>&#216; ";
                // line 382
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "match_details_players_grade"), "method"), "html", null, true);
                echo ":</strong> ";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["gradeSum"]) ? $context["gradeSum"] : null) / twig_length_filter($this->env, (isset($context["players"]) ? $context["players"] : null))), 2), "html", null, true);
                echo "</p>
\t\t<p><strong>&#216; ";
                // line 383
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "match_details_players_age"), "method"), "html", null, true);
                echo ":</strong> ";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["ageSum"]) ? $context["ageSum"] : null) / twig_length_filter($this->env, (isset($context["players"]) ? $context["players"] : null))), 2), "html", null, true);
                echo "</p>
\t\t";
                // line 384
                if (($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "hide_strength_attributes"), "method") != "1")) {
                    // line 385
                    echo "\t\t<p><strong>&#216; ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "entity_player_w_staerke"), "method"), "html", null, true);
                    echo ":</strong> ";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["strengthSum"]) ? $context["strengthSum"] : null) / twig_length_filter($this->env, (isset($context["players"]) ? $context["players"] : null))), 0), "html", null, true);
                    echo "%</p>
\t\t";
                }
                // line 387
                echo "\t";
            } else {
                // line 388
                echo "\t<p>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "match_details_noplayersset"), "method"), "html", null, true);
                echo "</p>
\t";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 392
    public function getstrengthClass($__strengthValue__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "strengthValue" => $__strengthValue__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 393
            if (((isset($context["strengthValue"]) ? $context["strengthValue"] : null) > 80)) {
                // line 394
                echo "\t";
                $context["strength_status"] = "success";
            } elseif ((            // line 395
(isset($context["strengthValue"]) ? $context["strengthValue"] : null) > 50)) {
                // line 396
                echo "\t";
                $context["strength_status"] = "info";
            } elseif ((            // line 397
(isset($context["strengthValue"]) ? $context["strengthValue"] : null) > 30)) {
                // line 398
                echo "\t";
                $context["strength_status"] = "warning";
            } else {
                // line 400
                echo "\t";
                $context["strength_status"] = "danger";
            }
            // line 402
            echo " class=\"strength_";
            echo twig_escape_filter($this->env, (isset($context["strength_status"]) ? $context["strength_status"] : null), "html", null, true);
            echo "\"
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

    // line 405
    public function getbadge($__label__ = null, $__level__ = null, $__date__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "level" => $__level__,
            "date" => $__date__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 406
            echo "\t";
            if ($this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "hasMessage", array(0 => (isset($context["label"]) ? $context["label"] : null)), "method")) {
                // line 407
                echo "\t\t";
                $context["label"] = $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => (isset($context["label"]) ? $context["label"] : null)), "method");
                // line 408
                echo "\t";
            }
            // line 409
            echo "\t";
            if (((isset($context["level"]) ? $context["level"] : null) == "bronze")) {
                // line 410
                echo "\t\t";
                $context["color"] = "#B8860B";
                // line 411
                echo "\t";
            } elseif (((isset($context["level"]) ? $context["level"] : null) == "silver")) {
                // line 412
                echo "\t\t";
                $context["color"] = "#C0C0C0";
                // line 413
                echo "\t";
            } else {
                // line 414
                echo "\t\t";
                $context["color"] = "#FFD700";
                // line 415
                echo "\t";
            }
            // line 416
            echo "\t<a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getInternalUrl", array(0 => "badges"), "method"), "html", null, true);
            echo "\"><span class=\"badge wstooltip\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => ("badge_level_" . (isset($context["level"]) ? $context["level"] : null))), "method"), "html", null, true);
            if (((isset($context["date"]) ? $context["date"] : null) != null)) {
                echo " (";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getFormattedDate", array(0 => (isset($context["date"]) ? $context["date"] : null), 1 => (isset($context["i18n"]) ? $context["i18n"] : null)), "method"), "html", null, true);
                echo ")";
            }
            echo "\" style=\"background-color: ";
            echo twig_escape_filter($this->env, (isset($context["color"]) ? $context["color"] : null), "html", null, true);
            echo ";\">";
            echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
            echo "</span></a>
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

    // line 419
    public function getpremiumbadge($__fee__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "fee" => $__fee__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 420
            echo "\t<span class=\"badge badge-important wstooltip\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18n"]) ? $context["i18n"] : null), "getMessage", array(0 => "premium_fature_fee_tooltip"), "method"), "html", null, true);
            echo "\" style=\"cursor: default;\"><i class=\"icon-key\"></i> ";
            echo twig_escape_filter($this->env, (isset($context["fee"]) ? $context["fee"] : null), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "getConfig", array(0 => "premium_credit_unit"), "method"), "html", null, true);
            echo "</span>
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
        return "macro.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1817 => 420,  1805 => 419,  1776 => 416,  1773 => 415,  1770 => 414,  1767 => 413,  1764 => 412,  1761 => 411,  1758 => 410,  1755 => 409,  1752 => 408,  1749 => 407,  1746 => 406,  1732 => 405,  1714 => 402,  1710 => 400,  1706 => 398,  1704 => 397,  1701 => 396,  1699 => 395,  1696 => 394,  1694 => 393,  1682 => 392,  1663 => 388,  1660 => 387,  1652 => 385,  1650 => 384,  1644 => 383,  1638 => 382,  1634 => 380,  1623 => 377,  1612 => 373,  1608 => 372,  1602 => 371,  1598 => 370,  1594 => 369,  1590 => 368,  1586 => 367,  1582 => 366,  1576 => 364,  1568 => 362,  1565 => 361,  1557 => 359,  1555 => 358,  1548 => 357,  1545 => 356,  1539 => 354,  1536 => 353,  1532 => 351,  1525 => 349,  1521 => 348,  1516 => 347,  1513 => 346,  1510 => 345,  1504 => 344,  1494 => 342,  1484 => 340,  1481 => 339,  1476 => 338,  1473 => 337,  1470 => 336,  1460 => 334,  1450 => 332,  1447 => 331,  1444 => 330,  1441 => 329,  1438 => 328,  1428 => 326,  1418 => 324,  1415 => 323,  1412 => 322,  1402 => 320,  1392 => 318,  1389 => 317,  1387 => 316,  1374 => 315,  1366 => 313,  1358 => 311,  1356 => 310,  1353 => 309,  1350 => 308,  1347 => 307,  1344 => 306,  1340 => 305,  1332 => 302,  1328 => 301,  1322 => 300,  1313 => 293,  1310 => 292,  1307 => 291,  1304 => 290,  1301 => 289,  1288 => 288,  1271 => 284,  1268 => 283,  1256 => 281,  1244 => 279,  1241 => 278,  1239 => 277,  1232 => 276,  1230 => 275,  1224 => 273,  1221 => 272,  1219 => 271,  1211 => 270,  1203 => 269,  1195 => 268,  1187 => 267,  1178 => 266,  1176 => 265,  1173 => 264,  1163 => 262,  1153 => 260,  1151 => 259,  1147 => 257,  1141 => 255,  1139 => 254,  1134 => 253,  1131 => 252,  1125 => 250,  1122 => 249,  1116 => 247,  1114 => 246,  1101 => 245,  1098 => 244,  1089 => 243,  1080 => 242,  1075 => 240,  1066 => 239,  1061 => 237,  1052 => 236,  1050 => 235,  1046 => 233,  1043 => 232,  1031 => 231,  1009 => 227,  1001 => 226,  998 => 225,  995 => 204,  981 => 203,  955 => 198,  940 => 197,  920 => 193,  911 => 192,  908 => 191,  905 => 190,  902 => 189,  899 => 188,  896 => 187,  893 => 186,  890 => 185,  887 => 184,  884 => 183,  871 => 182,  853 => 177,  842 => 175,  837 => 174,  834 => 173,  828 => 172,  815 => 170,  806 => 169,  804 => 168,  801 => 167,  798 => 166,  793 => 165,  779 => 162,  776 => 161,  774 => 160,  770 => 158,  767 => 157,  754 => 156,  736 => 152,  732 => 151,  727 => 150,  713 => 149,  695 => 144,  688 => 142,  660 => 140,  655 => 139,  650 => 138,  646 => 137,  639 => 135,  633 => 132,  629 => 131,  626 => 130,  611 => 129,  594 => 126,  588 => 123,  577 => 120,  564 => 119,  545 => 114,  539 => 111,  535 => 109,  522 => 108,  506 => 105,  499 => 104,  493 => 103,  483 => 102,  480 => 101,  474 => 99,  468 => 97,  466 => 96,  462 => 95,  455 => 94,  452 => 93,  449 => 92,  446 => 91,  443 => 90,  440 => 89,  422 => 88,  406 => 85,  402 => 84,  389 => 82,  386 => 81,  382 => 80,  375 => 79,  359 => 78,  342 => 74,  335 => 73,  329 => 72,  313 => 71,  309 => 69,  303 => 67,  297 => 65,  295 => 64,  291 => 63,  284 => 62,  281 => 61,  278 => 60,  275 => 59,  272 => 58,  269 => 57,  251 => 56,  234 => 52,  227 => 51,  221 => 50,  198 => 49,  194 => 47,  188 => 45,  182 => 43,  180 => 42,  176 => 41,  169 => 40,  166 => 39,  163 => 38,  160 => 37,  157 => 36,  154 => 35,  135 => 34,  117 => 31,  105 => 30,  87 => 211,  79 => 205,  76 => 204,  71 => 418,  68 => 404,  65 => 391,  62 => 287,  59 => 230,  56 => 202,  53 => 196,  50 => 181,  47 => 155,  44 => 148,  41 => 128,  38 => 118,  35 => 107,  32 => 87,  29 => 77,  26 => 55,  23 => 33,  20 => 29,);
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
/* */
/* {% macro var(variables) %}*/
/* 	{{ variables.var | default('Variableninhalt nicht ermittelbar !') }}*/
/* {% endmacro %}*/
/* */
/* {% macro textfield(fieldId, label, value, required = false, errormsg = null, type = 'text', helptext = null, disabled = false) %}*/
/* 	{% if errormsg[fieldId] is defined %}*/
/* 		{% set error = errormsg[fieldId] %}*/
/* 	{% else %}*/
/* 		{% set error = '' %}*/
/* 	{% endif %}*/
/* 	<div class="control-group{% if error|length > 0 %} error{% endif %}">*/
/* 		<label class="control-label" for="{{ fieldId }}">*/
/* 		{% if required %}*/
/* 			<strong>{{ label }}</strong>*/
/* 		{% else %}*/
/* 			{{ label }}*/
/* 		{% endif %}*/
/* 		</label>*/
/* 		<div class="controls">*/
/* 			<input type="{{ type }}"{% if type == "number" %} class="input-small"{% endif %} id="{{ fieldId }}" name="{{ fieldId }}" value="{{ value }}" placeholder="{{ label }}"{% if required %} required{% endif %}{% if disabled %} disabled{% endif %}>*/
/* 			{% if error|length > 0 %}<span class="help-inline">{{ error }}</span>{% endif %}*/
/* 			{% if helptext|length > 0 %}<span class="help-inline">{{ helptext }}</span>{% endif %}*/
/* 		</div>*/
/* 	</div>*/
/* {% endmacro %}*/
/* */
/* {% macro autocomplete(fieldId, label, value, required = false, errormsg = null, ajaxblock, helptext = null) %}*/
/* 	{% if errormsg[fieldId] is defined %}*/
/* 		{% set error = errormsg[fieldId] %}*/
/* 	{% else %}*/
/* 		{% set error = '' %}*/
/* 	{% endif %}*/
/* 	<div class="control-group{% if error|length > 0 %} error{% endif %}">*/
/* 		<label class="control-label" for="{{ fieldId }}">*/
/* 			{% if required %}*/
/* 				<strong>{{ label }}</strong>*/
/* 			{% else %}*/
/* 				{{ label }}*/
/* 			{% endif %}*/
/* 		</label>*/
/* 		<div class="controls">*/
/* 			<input type="text" id="{{ fieldId }}" class="autocomplete" autocomplete="off" data-provide="typeahead" data-ajaxblock="{{ ajaxblock }}" name="{{ fieldId }}" value="{{ value }}" placeholder="{{ label }}"{% if required %} required{% endif %}>*/
/* 			{% if error|length > 0 %}<span class="help-inline">{{ error }}</span>{% endif %}*/
/* 			{% if helptext|length > 0 %}<span class="help-inline">{{ helptext }}</span>{% endif %}*/
/* 		</div>*/
/* 	</div>*/
/* {% endmacro %}*/
/* */
/* {% macro checkbox(fieldId, label, value, colspan=false, errormsg = null) %}*/
/* 	<div class="control-group{% if errormsg|length > 0 %} error{% endif %}"">*/
/* 		{% if colspan == false %}<div class="controls">{% endif %}*/
/* 		<label class="checkbox">*/
/* 			<input type="checkbox" id="{{ fieldId }}" name="{{ fieldId }}" value="1"{% if value == 1 %} checked{% endif %}> {{ label|raw }}*/
/* 		</label>*/
/* 		{% if colspan == false %}</div>{% endif %}*/
/* 	</div>*/
/* {% endmacro %}*/
/* */
/* {% macro textarea(fieldId, label, value, required = false, errormsg = null, helptext = null, rows = 10) %}*/
/* 	{% if errormsg[fieldId] is defined %}*/
/* 		{% set error = errormsg[fieldId] %}*/
/* 	{% else %}*/
/* 		{% set error = '' %}*/
/* 	{% endif %}*/
/* 	<div class="control-group{% if error|length > 0 %} error{% endif %}">*/
/* 		<label for="{{ fieldId }}">*/
/* 			{% if required %}*/
/* 				<strong>{{ label }}</strong>*/
/* 			{% else %}*/
/* 				{{ label }}*/
/* 			{% endif %}*/
/* 		</label>*/
/* 		<textarea id="{{ fieldId }}" name="{{ fieldId }}" rows="{{ rows }}" class="span5">{{ value }}</textarea>*/
/* 		{% if error|length > 0 %}<span class="help-inline">{{ error }}</span>{% endif %}*/
/* 		{% if helptext|length > 0 %}<span class="help-inline">{{ helptext }}</span>{% endif %}*/
/* 	</div>*/
/* {% endmacro %}*/
/* */
/* {% macro readonly(label, value) %}*/
/* 	<div class="control-group">*/
/* 		<label class="control-label">*/
/* 			{{ label }}*/
/* 		</label>*/
/* 		<div class="controls">*/
/* 			<span class="input-large uneditable-input">{{ value }}</span>*/
/* 		</div>*/
/* 	</div>*/
/* {% endmacro %}*/
/* */
/* {% macro slider(fieldId, value) %}*/
/* 	<input type="text" id="{{ fieldId }}" name="{{ fieldId }}" class="span6 slider" value="{{ value }}"*/
/* 		data-slider-min="1" data-slider-max="100"*/
/* 		data-slider-step="1"*/
/* 		data-slider-value="{{ value }}"*/
/* 		data-slider-orientation="horizontal"*/
/* 		data-slider-selection="before" />*/
/* 	<span>{{ i18n.getMessage("unit_percent") }}</span>*/
/* {% endmacro %}*/
/* */
/* {% macro teamPlayerSelection(fieldId, label, selectedPlayer = null, positionsAndPlayers) %}*/
/* 	<div class="control-group">*/
/* 		<label class="control-label" for="{{ fieldId }}">*/
/* 			{{ label }}*/
/* 		</label>*/
/* 		<div class="controls">*/
/* 			<select name="{{ fieldId }}" id="{{ fieldId }}">*/
/* 				<option></option>*/
/* 				{% for position,players in positionsAndPlayers %}*/
/* 					<optgroup label="{{ i18n.getMessage("player_position_" ~ position) }}">*/
/* 						{% for player in players if player.transfermarket != "1" %}*/
/* 							<option value="{{ player.id }}" {% if selectedPlayer == player.id  %} selected{% endif %}>{{ player.firstname }} {% if player.pseudonym|length > 0 %}&quot;{{ player.pseudonym }}&quot; {% endif %}{{ player.lastname }}{% if player.position_main|length > 0 %} ({{ i18n.getMessage("player_mainposition_" ~ player.position_main) }}){% endif %}</option>*/
/* 						{% endfor %}*/
/* 					</optgroup>*/
/* 				{% endfor %}*/
/* 			</select>*/
/* 		</div>*/
/* 	</div>*/
/* {% endmacro %}*/
/* */
/* {% macro box(title, message, type) %}*/
/* 	<div class="alert alert-block alert-{{ type|default('error') }}">*/
/* 		<h4>{{ title }}</h4>*/
/* 		{{ message }}*/
/* 	</div>*/
/* {% endmacro %}*/
/* */
/* {% macro paginator(paginatorModel, ajaxTarget = "pagecontent") %}*/
/* 	{% if paginatorModel.pages > 1 %}*/
/* 		<div class="pagination">*/
/* 			<ul>*/
/* 				{% if paginatorModel.pageNo > 1 %}*/
/* 					<li>*/
/* 						<a href="#p{{ paginatorModel.pageNo - 1 }}" class="ajaxLink" data-ajaxtarget="{{ ajaxTarget }}" data-ajaxquerystr="page={{ env.getPageId() }}&{{ paginatorModel.getQueryString() }}&pageno={{ paginatorModel.pageNo - 1 }}">&laquo;</a>*/
/* 					</li>*/
/* 				{% endif %}*/
/* 				{% for pageNo in 1..paginatorModel.pages %}*/
/* 					{% if pageNo == paginatorModel.pageNo - 5 or pageNo == paginatorModel.pageNo + 5  %}*/
/* 						<li class="disabled"><a>...</a></li>*/
/* 					{% elseif pageNo == 1 or pageNo == paginatorModel.pages or pageNo > paginatorModel.pageNo - 5 and pageNo < paginatorModel.pageNo + 5 %}*/
/* 						<li{% if pageNo == paginatorModel.pageNo %} class="active"{% endif %}><a href="#p{{ pageNo }}"*/
/* 						class="ajaxLink" data-ajaxtarget="{{ ajaxTarget }}" data-ajaxquerystr="page={{ env.getPageId() }}&{{ paginatorModel.getQueryString() }}&pageno={{ pageNo }}">{{ pageNo }}</a></li>*/
/* 					{% endif %}*/
/* 				{% endfor %}*/
/* 				{% if paginatorModel.pageNo < paginatorModel.pages %}*/
/* 					<li><a href="#{{ paginatorModel.pageNo + 1 }}"*/
/* 					class="ajaxLink" data-ajaxtarget="{{ ajaxTarget }}" data-ajaxquerystr="page={{ env.getPageId() }}&{{ paginatorModel.getQueryString() }}&pageno={{ paginatorModel.pageNo + 1 }}">&raquo;</a></li>*/
/* 				{% endif %}*/
/* 			</ul>*/
/* 		</div>*/
/* 	{% endif %}*/
/* {% endmacro %}*/
/* */
/* {% macro progressbar(percentvalue = 0, cssClass = "") %}*/
/* 	{% if percentvalue > 80 %}*/
/* 		{% set progress_status = 'success' %}*/
/* 	{% elseif percentvalue > 50 %}*/
/* 		{% set progress_status = 'info' %}*/
/* 	{% elseif percentvalue > 30 %}*/
/* 		{% set progress_status = 'warning' %}*/
/* 	{% else %}*/
/* 		{% set progress_status = 'danger' %}*/
/* 	{% endif %}*/
/* 	<div class="progress progress-{{ progress_status }} {{ cssClass }}" title="{{ percentvalue }}%">*/
/* 		<div class="bar" style="width: {{ percentvalue }}%">{{ percentvalue }}%</div>*/
/* 	</div>*/
/* {% endmacro %}*/
/* */
/* {% macro piechart(label1, percentvalue1, label2, percentvalue2) %}*/
/* 	<div class="pieChart" style="width:250px;height:250px" data-series='[{"label": "{{ label2|trim }}",  "data": "{{ percentvalue2 }}", "color": "#FF6600"}, { "label": "{{ label1|trim }}",  "data": "{{ percentvalue1 }}", "color": "#006699"}]'>*/
/* 	</div>*/
/* 	<div class="pieChartLabel"></div>*/
/* {% endmacro %}*/
/* */
/* {% macro infofield(label, value, doNotEscape = false) %}*/
/* 	{% block stylesheets %}*/
/* 		<style type="text/css">*/
/* 			.inforow {*/
/* 				margin-top: 10px;*/
/* 			}*/
/* 			.infolabel {*/
/* 				font-weight: bold;*/
/* 				background: url({{env.getConfig("bild_hintergrund")}});*/
/* 				padding: 8px;*/
/* 				border-radius: 4px;*/
/* 			}*/
/* 			.infovalue {*/
/* 				padding: 8px;*/
/* 			}*/
/* 			.alert-info {*/
/* 				background-color: rgb(255, 0, 0);*/
/* 				border-color: #ff0000;*/
/* 				color: #ffffff;*/
/* 			}*/
/* 		</style>*/
/* 	{% endblock %}*/
/* 	<div class="row-fluid inforow">*/
/* 		<div class="span6 infolabel">{% if doNotEscape %}{{ label|raw }}{% else %}{{ label }}{% endif %}</div>*/
/* 		<div class="span6 infovalue">{% if doNotEscape %}{{ value|raw }}{% else %}{{ value }}{% endif %}</div>*/
/* 	</div>*/
/* {% endmacro %}*/
/* */
/* {% macro teamlistItem(player) %}*/
/* 	{% import _self as playerlists %}*/
/* 			<tr>*/
/* 				<td>*/
/* 					{% if env.getConfig("cdn_root_set") %}*/
/* 						<img src="{{ env.getConfig("cdn_root") }}/img/{{ i18n.getMessage("player_position_" ~ player.position) }}.png"	alt="{{ i18n.getMessage("player_position_" ~ player.position) }}"*/
/* 						title="{{ i18n.getMessage("player_position_" ~ player.position) }}" />*/
/* 					{% else %}*/
/* 						<img src="{{ env.getConfig("context_root") }}/img/{{ i18n.getMessage("player_position_" ~ player.position) }}.png"	alt="{{ i18n.getMessage("player_position_" ~ player.position) }}"*/
/* 						title="{{ i18n.getMessage("player_position_" ~ player.position) }}" />*/
/* 					{% endif %}*/
/* 					{% if player.position_main|length > 0 %}<abbr title="{{ i18n.getMessage("option_" ~ player.position_main) }}">{{ i18n.getMessage("player_mainposition_" ~ player.position_main) }}</abbr>{% endif %}*/
/* 					{% if player.position_second|length > 0 %}/ <abbr title="{{ i18n.getMessage("option_" ~ player.position_second) }}">{{ i18n.getMessage("player_mainposition_" ~ player.position_second) }}</abbr>{% endif %}*/
/* 				</td>*/
/* 				<td><a href="{{ env.getInternalUrl("player", "id=" ~ player.id) }}">{{ player.firstname }} {% if player.pseudonym|length > 0 %}"{{ player.pseudonym }}" {% endif %}{{ player.lastname }}</a>*/
/* 					{% if env.getRequestParameter("captain") == player.id %}*/
/* 						<i class="icon-group wstooltip" title="{{ i18n.getMessage("myteam_captain_tooltip") }}"></i>*/
/* 					{% endif %}*/
/* 					{% if player.unsellable %}*/
/* 						<i class="icon-eye-close" title="{{ i18n.getMessage("entity_player_unsellable") }}"></i>*/
/* 					{% endif %}*/
/* 					{% if player.lending_owner_id > 0 %}*/
/* 						<i class="icon-star-empty" title="{{ i18n.getMessage("lending_player_marker_tooltip") }}"></i>*/
/* 					{% elseif player.lending_fee > 0 and env.getConfig("lending_enabled") %}*/
/* 						<i class="icon-share-alt" title="{{ i18n.getMessage("lending_player_marker_lendable") }}"></i>*/
/* 					{% endif %}*/
/* 				</td>*/
/* <td>*/
/* 				  {% if env.getConfig("cdn_root_set") %}*/
/* 				  	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="{{ env.getConfig("cdn_root") }}/img/flags/{{ player.player_nationality }}.png" alt="{{ player.player_nationality }}" style="width: 15px; height: 10px; vertical-align: baseline"/>*/
/* 				  {% else %}*/
/* 				  	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="{{ env.getConfig("context_root") }}/img/flags/{{ player.player_nationality }}.png" alt="{{ player.player_nationality }}" style="width: 15px; height: 10px; vertical-align: baseline"/>*/
/* 				  {% endif %}*/
/* </td>*/
/* 				{% if env.getConfig("hide_strength_attributes") != "1" %}*/
/* 					<td {{ macro.strengthClass(player.strength) }} title="{{ i18n.getMessage("playertable_head_strength") }}"><strong>{{ player.strength }}</strong></td>*/
/* 					<td {{ macro.strengthClass(player.strength_technic) }} title="{{ i18n.getMessage("playertable_head_strength_technic") }}">{{ player.strength_technic }}</td>*/
/* 					<td {{ macro.strengthClass(player.strength_stamina) }} title="{{ i18n.getMessage("playertable_head_strength_stamina") }}">{{ player.strength_stamina }}</td>*/
/* 					<td {{ macro.strengthClass(player.strength_freshness) }} title="{{ i18n.getMessage("playertable_head_strength_freshness") }}">{{ player.strength_freshness }}</td>*/
/* 					<td {{ macro.strengthClass(player.strength_satisfaction) }} title="{{ i18n.getMessage("playertable_head_strength_satisfaction") }}">{{ player.strength_satisfaction }}</td>*/
/* 					{% include 'marktwert.twig' %}*/
/* 				{% endif %}*/
/* 				<td>{{ player.age }}</td>*/
/* 				<td>*/
/* 					{% if player.matches_injured > 0 %}*/
/* 						<i class="icon-medkit" title="{{ i18n.getMessage("player_injured") }}"></i> {{ player.matches_injured }}*/
/* 					{% elseif player.matches_blocked > 0 %}*/
/* 						{% if env.getConfig("cdn_root_set") %}*/
/* 							<img src="{{ env.getConfig("cdn_root") }}/img/blocked_cards.png" alt="{{ i18n.getMessage("formation_team_blocked_cards") }}" title="{{ i18n.getMessage("formation_team_blocked_cards") }}" /> {{ player.matches_blocked }}*/
/* 						{% else %}*/
/* 							<img src="{{ env.getConfig("context_root") }}/img/blocked_cards.png" alt="{{ i18n.getMessage("formation_team_blocked_cards") }}" title="{{ i18n.getMessage("formation_team_blocked_cards") }}" /> {{ player.matches_blocked }}*/
/* 						{% endif %}*/
/* 					{% endif %}*/
/* 				</td>*/
/* 			</tr>*/
/* {% endmacro %}*/
/* */
/* {% macro matchResultPlayers(match, players) %}*/
/* 	{% if players is defined and players|length > 0 %}*/
/* 		{% set ageSum = 0 %}*/
/* 		{% set strengthSum = 0 %}*/
/* 		{% set gradeSum = 0 %}*/
/* 		<table class="table table-striped table-condensed">*/
/* 			<colgroup>*/
/* 				<col style="width: 40px" />*/
/* 				<col />*/
/* 				<col style="width: 70px" />*/
/* 			</colgroup>*/
/* 			<thead>*/
/* 				<th><abbr title="{{ i18n.getMessage("playertable_head_position") }}">{{ i18n.getMessage("playertable_head_position_abbr") }}</abbr></th>*/
/* 				<th>{{ i18n.getMessage("match_details_players_name") }}</th>*/
/* 				<th>{{ i18n.getMessage("match_details_players_grade") }} <i class="icon-question-sign wstooltip" title="{{ i18n.getMessage("match_details_players_grade_helptext") }}"></i></th>*/
/* 			</thead>*/
/* 			<tbody>*/
/* 			{% for player in players %}*/
/* 				{% set ageSum = ageSum + player.age %}*/
/* 				{% set strengthSum = strengthSum + player.strength %}*/
/* 				{% set gradeSum = gradeSum + player.grade %}*/
/* 				<tr>*/
/* 					{% if player.position_main is not empty %}*/
/* 					<td title="{{ i18n.getMessage("option_" ~ player.position_main) }}">{{ i18n.getMessage("player_mainposition_" ~ player.position_main) }}</td>*/
/* 					{% else %}*/
/* 					<td title="{{ i18n.getMessage("option_" ~ player.position) }}">{{ i18n.getMessage("option_" ~ player.position)|slice(0, 2)|upper }}</td>*/
/* 					{% endif %}*/
/* 					<td><a href="{{ env.getInternalUrl("player", "id=" ~ player.id) }}">{% if player.pseudonym|length > 0 %}{{ player.pseudonym }}{% else %}{{ player.firstName }} {{ player.lastName }}{% endif %}</a>*/
/* 					{% if player.yellowCards > 0 %}*/
/* 						{% if env.getConfig("cdn_root_set") %}*/
/* 								<img src="{{env.getConfig("cdn_root")}}./img/card_yellow.png" style="width:=16px height:16px" alt="{{ i18n.getMessage("player_yellowcard") }}" title="{{ i18n.getMessage("player_yellowcard") }}" />*/
/* 							{% else %}*/
/* 								<img src="{{env.getConfig("context_root")}}/img/card_yellow.png" style="width:=16px height:16px" alt="{{ i18n.getMessage("player_yellowcard") }}" title="{{ i18n.getMessage("player_yellowcard") }}" />*/
/* 						{% endif %}*/
/* 						{% if player.yellowCards > 1 %}*/
/* 							{% if env.getConfig("cdn_root_set") %}*/
/* 								<img src="{{env.getConfig("cdn_root")}}./img/card_red.png" style="width:=16px height:16px" alt="{{ i18n.getMessage("player_yellowredcard") }}" title="{{ i18n.getMessage("player_yellowredcard") }}" />*/
/* 							{% else %}*/
/* 								<img src="{{env.getConfig("context_root")}}/img/card_red.png" style="width:=16px height:16px" alt="{{ i18n.getMessage("player_yellowredcard") }}" title="{{ i18n.getMessage("player_yellowredcard") }}" />*/
/* 							{% endif %}*/
/* 						{% endif %}*/
/* 					{% endif %}*/
/* 					{% if player.redCard > 0 %}*/
/* 						{% if env.getConfig("cdn_root_set") %}*/
/* 							<img src="{{env.getConfig("cdn_root")}}./img/card_red.png" style="width:=16px height:16px" alt="{{ i18n.getMessage("player_redcard") }}" title="{{ i18n.getMessage("player_redcard") }}" />*/
/* 						{% else %}*/
/* 							<img src="{{env.getConfig("context_root")}}/img/card_red.png" style="width:=16px height:16px" alt="{{ i18n.getMessage("player_redcard") }}" title="{{ i18n.getMessage("player_redcard") }}" />*/
/* 						{% endif %}*/
/* 					{% endif %}*/
/* 					{% if player.goals > 0 %}*/
/* 					{% for i in 1..player.goals %}*/
/* 						{% if env.getConfig("cdn_root_set") %}*/
/* 							<img src="{{env.getConfig("cdn_root")}}./img/goal_scorer.png" style="width: 16px; height: 15px" alt="{{ i18n.getMessage("player_goalscorer") }}" title="{{ i18n.getMessage("player_goalscorer") }}"/>*/
/* 						{% else %}*/
/* 							<img src="{{env.getConfig("context_root")}}/img/goal_scorer.png" style="width: 16px; height: 15px" alt="{{ i18n.getMessage("player_goalscorer") }}" title="{{ i18n.getMessage("player_goalscorer") }}" />*/
/* 						{% endif %}*/
/* 					{% endfor %}*/
/* 					{% endif %}*/
/* 					{% if player.assists %}*/
/* 					<span title="{{ i18n.getMessage("player_assists") }}">*/
/* 						{% for i in 1..player.assists %}*/
/* 						<i class="icon-star"></i>*/
/* 						{% endfor %}*/
/* 					</span>*/
/* 					{% endif %}*/
/* 					{% if player.injured > 0 %}*/
/* 						<i class="icon-medkit" title="{{ i18n.getMessage("player_injured") }}"></i>*/
/* 					{% endif %}*/
/* 					{% if player.playstatus == 'Ausgewechselt' %}*/
/* 					<span class="minutesPlayed" title="{{ i18n.getMessage("player_substitute_out") }}"><i class="icon-arrow-down"></i>{{ player.minutesPlayed + 1 }}'</span>*/
/* 					{% elseif player.minutesPlayed < match.match_minutes %}*/
/* 					<span class="minutesPlayed" title="{{ i18n.getMessage("player_substitute_in") }}"><i class="icon-arrow-up"></i>{{ match.match_minutes - player.minutesPlayed + 1 }}'</span>*/
/* 					{% endif %}*/
/* 					{% if player.is_best_player_of_day is defined and player.is_best_player_of_day %}*/
/* 						<a href="{{ env.getInternalUrl("teamoftheday", "leagueid=" ~ match.match_league_id ~ "&seasonid=" ~ match.match_season_id ~ "&matchday=" ~ match.match_matchday) }}" title="{{ i18n.getMessage("teamoftheday_matchreport_tooltip") }}"><i class="icon-heart-empty darkIcon"></i></a>*/
/* 					{% endif %}*/
/* 					<div id="playerstatistics{{ player.id }}" class="collapse">*/
/* 						<dl>*/
/* 							<dt>{{ i18n.getMessage("match_details_statistic_shoots") }}</dt>*/
/* 							<dd>{{ player.shoots }}</dd>*/
/* 							<dt>{{ i18n.getMessage("match_details_statistic_ballcontacts_player") }}</dt>*/
/* 							<dd>{{ player.ballcontacts }}</dd>*/
/* 							<dt>{{ i18n.getMessage("match_details_statistic_successfulpasses") }}</dt>*/
/* 							<dd>{{  player.passes_successed }}/{{ (player.passes_successed + player.passes_failed) }}</dd>*/
/* 							<dt>{{ i18n.getMessage("match_details_statistic_tackles_player") }}</dt>*/
/* 							<dd>{{ player.wontackles }}{% if player.losttackles|length %}/{{ (player.losttackles + player.wontackles) }}{% endif %}</dd>*/
/* 						</dl>*/
/* 					</div>*/
/* 					</td>*/
/* 					<td><a href="#playerstatistics{{ player.id }}" data-toggle="collapse"><i class="icon-zoom-in darkIcon"></i></a> {{ player.grade }}</td>*/
/* 				</tr>*/
/* 			{% endfor %}*/
/* 			</tbody>*/
/* 		</table>*/
/* 		<p><strong>&#216; {{ i18n.getMessage("match_details_players_grade") }}:</strong> {{ (gradeSum/players|length)|number_format(2) }}</p>*/
/* 		<p><strong>&#216; {{ i18n.getMessage("match_details_players_age") }}:</strong> {{ (ageSum/players|length)|number_format(2) }}</p>*/
/* 		{% if env.getConfig("hide_strength_attributes") != "1" %}*/
/* 		<p><strong>&#216; {{ i18n.getMessage("entity_player_w_staerke") }}:</strong> {{ (strengthSum/players|length)|number_format(0) }}%</p>*/
/* 		{% endif %}*/
/* 	{% else %}*/
/* 	<p>{{ i18n.getMessage("match_details_noplayersset") }}</p>*/
/* 	{% endif %}*/
/* {% endmacro %}*/
/* */
/* {% macro strengthClass(strengthValue) %}*/
/* {% if strengthValue > 80 %}*/
/* 	{% set strength_status = 'success' %}*/
/* {% elseif strengthValue > 50 %}*/
/* 	{% set strength_status = 'info' %}*/
/* {% elseif strengthValue > 30 %}*/
/* 	{% set strength_status = 'warning' %}*/
/* {% else %}*/
/* 	{% set strength_status = 'danger' %}*/
/* {% endif %}*/
/*  class="strength_{{ strength_status }}"*/
/* {% endmacro %}*/
/* */
/* {% macro badge(label, level, date = null) %}*/
/* 	{% if i18n.hasMessage(label) %}*/
/* 		{% set label = i18n.getMessage(label) %}*/
/* 	{% endif %}*/
/* 	{% if level == 'bronze' %}*/
/* 		{% set color = '#B8860B' %}*/
/* 	{% elseif level == 'silver' %}*/
/* 		{% set color = '#C0C0C0' %}*/
/* 	{% else %}*/
/* 		{% set color = '#FFD700' %}*/
/* 	{% endif %}*/
/* 	<a href="{{ env.getInternalUrl("badges") }}"><span class="badge wstooltip" title="{{ i18n.getMessage("badge_level_" ~ level) }}{% if date != null %} ({{ env.getFormattedDate(date, i18n) }}){% endif %}" style="background-color: {{ color }};">{{ label }}</span></a>*/
/* {% endmacro %}*/
/* */
/* {% macro premiumbadge(fee) %}*/
/* 	<span class="badge badge-important wstooltip" title="{{ i18n.getMessage("premium_fature_fee_tooltip") }}" style="cursor: default;"><i class="icon-key"></i> {{ fee }} {{ env.getConfig("premium_credit_unit") }}</span>*/
/* {% endmacro %}*/
