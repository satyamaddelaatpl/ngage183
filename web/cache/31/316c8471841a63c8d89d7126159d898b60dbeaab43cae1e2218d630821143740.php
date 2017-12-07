<?php

/* displayprofile-form-edit.twig */
class __TwigTemplate_63d3a9270737d7e6cee2af08d18b95fd9ced344ff34355c9a6e76c6ff02de49a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 9
        $this->parent = $this->loadTemplate("form-base.twig", "displayprofile-form-edit.twig", 9);
        $this->blocks = array(
            'formTitle' => array($this, 'block_formTitle'),
            'formButtons' => array($this, 'block_formButtons'),
            'formHtml' => array($this, 'block_formHtml'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form-base.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 10
        $context["forms"] = $this->loadTemplate("forms.twig", "displayprofile-form-edit.twig", 10);
        // line 9
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_formTitle($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        echo __("Edit Profile");
    }

    // line 16
    public function block_formButtons($context, array $blocks = array())
    {
        // line 17
        echo "    ";
        echo __("Help");
        echo ", XiboHelpRender(\"";
        echo twig_escape_filter($this->env, (isset($context["help"]) ? $context["help"] : null), "html", null, true);
        echo "\")
    ";
        // line 18
        echo __("Cancel");
        echo ", XiboDialogClose()
    ";
        // line 19
        echo __("Save");
        echo ", \$(\"#displayProfileForm\").submit()
";
    }

    // line 22
    public function block_formHtml($context, array $blocks = array())
    {
        // line 23
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <ul class=\"nav nav-tabs\" role=\"tablist\">
                ";
        // line 26
        $context["first"] = true;
        // line 27
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["displayProfile"]) ? $context["displayProfile"] : null), "configTabs", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 28
            echo "                    <li";
            if ((isset($context["first"]) ? $context["first"] : null)) {
                echo " class=\"active\"";
            }
            echo "><a href=\"#";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tab"], "id", array()), "html", null, true);
            echo "\" role=\"tab\" data-toggle=\"tab\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tab"], "name", array()), "html", null, true);
            echo "</a></li>
                    ";
            // line 29
            $context["first"] = false;
            // line 30
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "                ";
        if ((twig_length_filter($this->env, (isset($context["commands"]) ? $context["commands"] : null)) > 0)) {
            // line 32
            echo "                    <li><a href=\"#commands\" role=\"tab\" data-toggle=\"tab\">";
            echo __("Commands");
            echo "</a></li>
                ";
        }
        // line 34
        echo "            </ul>
            <form id=\"displayProfileForm\" class=\"XiboForm form-horizontal\" method=\"put\" action=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("displayProfile.edit", array("id" => $this->getAttribute((isset($context["displayProfile"]) ? $context["displayProfile"] : null), "displayProfileId", array()))), "html", null, true);
        echo "\">
                <div class=\"tab-content\">
                ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["displayProfile"]) ? $context["displayProfile"] : null), "configDefault", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 38
            echo "                    ";
            if (((isset($context["currentCat"]) ? $context["currentCat"] : null) != $this->getAttribute($context["field"], "tabId", array()))) {
                // line 39
                echo "                        ";
                if (((isset($context["currentCat"]) ? $context["currentCat"] : null) != "")) {
                    // line 40
                    echo "                            </div>
                        ";
                }
                // line 42
                echo "                        <div class=\"tab-pane";
                if (((isset($context["currentCat"]) ? $context["currentCat"] : null) == "")) {
                    echo " active";
                }
                echo "\" id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "tabId", array()), "html", null, true);
                echo "\">
                            ";
                // line 43
                if (($this->getAttribute($context["field"], "tabId", array()) == "general")) {
                    // line 44
                    echo "                                ";
                    ob_start();
                    echo __("Name");
                    $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                    // line 45
                    echo "                                ";
                    ob_start();
                    echo __("The Name of the Profile - (1 - 50 characters)");
                    $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                    // line 46
                    echo "                                ";
                    echo $context["forms"]->getinput("name", (isset($context["title"]) ? $context["title"] : null), $this->getAttribute((isset($context["displayProfile"]) ? $context["displayProfile"] : null), "name", array()), (isset($context["helpText"]) ? $context["helpText"] : null));
                    echo "

                                ";
                    // line 48
                    ob_start();
                    echo __("Default Profile?");
                    $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                    // line 49
                    echo "                                ";
                    ob_start();
                    echo __("Is this the default profile for all Displays of this type? Only 1 profile can be the default.");
                    $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                    // line 50
                    echo "                                ";
                    echo $context["forms"]->getcheckbox("isDefault", (isset($context["title"]) ? $context["title"] : null), $this->getAttribute((isset($context["displayProfile"]) ? $context["displayProfile"] : null), "isDefault", array()), (isset($context["helpText"]) ? $context["helpText"] : null));
                    echo "
                            ";
                }
                // line 52
                echo "
                        ";
                // line 53
                $context["currentCat"] = $this->getAttribute($context["field"], "tabId", array());
                // line 54
                echo "                    ";
            }
            // line 55
            echo "                    ";
            // line 56
            echo "                    ";
            if (($this->getAttribute($context["field"], "enabled", array()) != 1)) {
                // line 57
                echo "                        ";
                echo $context["forms"]->getdisabled($this->getAttribute($context["field"], "name", array()), $this->getAttribute($context["field"], "title", array()), $this->getAttribute($context["field"], "value", array()), $this->getAttribute($context["field"], "helpText", array()));
                echo "
                    ";
            } elseif (($this->getAttribute(            // line 58
$context["field"], "fieldType", array()) == "text")) {
                // line 59
                echo "                        ";
                echo $context["forms"]->getinput($this->getAttribute($context["field"], "name", array()), $this->getAttribute($context["field"], "title", array()), $this->getAttribute($context["field"], "value", array()), $this->getAttribute($context["field"], "helpText", array()));
                echo "
                    ";
            } elseif (($this->getAttribute(            // line 60
$context["field"], "fieldType", array()) == "number")) {
                // line 61
                echo "                        ";
                echo $context["forms"]->getnumber($this->getAttribute($context["field"], "name", array()), $this->getAttribute($context["field"], "title", array()), $this->getAttribute($context["field"], "value", array()), $this->getAttribute($context["field"], "helpText", array()));
                echo "
                    ";
            } elseif (($this->getAttribute(            // line 62
$context["field"], "fieldType", array()) == "email")) {
                // line 63
                echo "                        ";
                echo $context["forms"]->getemail($this->getAttribute($context["field"], "name", array()), $this->getAttribute($context["field"], "title", array()), $this->getAttribute($context["field"], "value", array()), $this->getAttribute($context["field"], "helpText", array()));
                echo "
                    ";
            } elseif (($this->getAttribute(            // line 64
$context["field"], "fieldType", array()) == "checkbox")) {
                // line 65
                echo "                        ";
                echo $context["forms"]->getcheckbox($this->getAttribute($context["field"], "name", array()), $this->getAttribute($context["field"], "title", array()), $this->getAttribute($context["field"], "value", array()), $this->getAttribute($context["field"], "helpText", array()));
                echo "
                    ";
            } elseif (($this->getAttribute(            // line 66
$context["field"], "fieldType", array()) == "timePicker")) {
                // line 67
                echo "                        ";
                echo $context["forms"]->gettime($this->getAttribute($context["field"], "name", array()), $this->getAttribute($context["field"], "title", array()), $this->getAttribute($context["field"], "value", array()), $this->getAttribute($context["field"], "helpText", array()));
                echo "
                    ";
            } elseif (($this->getAttribute(            // line 68
$context["field"], "fieldType", array()) == "dropdown")) {
                // line 69
                echo "                        ";
                echo $context["forms"]->getdropdown($this->getAttribute($context["field"], "name", array()), "single", $this->getAttribute($context["field"], "title", array()), $this->getAttribute($context["field"], "value", array()), $this->getAttribute($context["field"], "options", array()), "id", "value", $this->getAttribute($context["field"], "helpText", array()));
                echo "
                    ";
            }
            // line 71
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "                </div>
                ";
        // line 73
        if ((twig_length_filter($this->env, (isset($context["commands"]) ? $context["commands"] : null)) > 0)) {
            // line 74
            echo "                    <div class=\"tab-pane\" id=\"commands\">
                        ";
            // line 75
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["commands"]) ? $context["commands"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 76
                echo "                            ";
                ob_start();
                echo __("Name");
                $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 77
                echo "                            ";
                echo $context["forms"]->getdisabled("command", (isset($context["title"]) ? $context["title"] : null), $this->getAttribute($context["field"], "command", array()), $this->getAttribute($context["field"], "description", array()));
                echo "

                            ";
                // line 79
                $context["fieldId"] = ("commandString_" . $this->getAttribute($context["field"], "commandId", array()));
                // line 80
                echo "                            ";
                ob_start();
                echo __("Command");
                $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 81
                echo "                            ";
                ob_start();
                echo __("The Command String for this Command on this display");
                $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 82
                echo "                            ";
                echo $context["forms"]->getinput((isset($context["fieldId"]) ? $context["fieldId"] : null), (isset($context["title"]) ? $context["title"] : null), $this->getAttribute($context["field"], "commandString", array()), (isset($context["helpText"]) ? $context["helpText"] : null));
                echo "

                            ";
                // line 84
                $context["fieldId"] = ("validationString_" . $this->getAttribute($context["field"], "commandId", array()));
                // line 85
                echo "                            ";
                ob_start();
                echo __("Validation");
                $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 86
                echo "                            ";
                ob_start();
                echo __("The Validation String for this Command on this display");
                $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 87
                echo "                            ";
                echo $context["forms"]->getinput((isset($context["fieldId"]) ? $context["fieldId"] : null), (isset($context["title"]) ? $context["title"] : null), $this->getAttribute($context["field"], "validationString", array()), (isset($context["helpText"]) ? $context["helpText"] : null));
                echo "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 89
            echo "                    </div>
                ";
        }
        // line 91
        echo "                </div>
            </form>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "displayprofile-form-edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  301 => 91,  297 => 89,  288 => 87,  283 => 86,  278 => 85,  276 => 84,  270 => 82,  265 => 81,  260 => 80,  258 => 79,  252 => 77,  247 => 76,  243 => 75,  240 => 74,  238 => 73,  235 => 72,  229 => 71,  223 => 69,  221 => 68,  216 => 67,  214 => 66,  209 => 65,  207 => 64,  202 => 63,  200 => 62,  195 => 61,  193 => 60,  188 => 59,  186 => 58,  181 => 57,  178 => 56,  176 => 55,  173 => 54,  171 => 53,  168 => 52,  162 => 50,  157 => 49,  153 => 48,  147 => 46,  142 => 45,  137 => 44,  135 => 43,  126 => 42,  122 => 40,  119 => 39,  116 => 38,  112 => 37,  107 => 35,  104 => 34,  98 => 32,  95 => 31,  89 => 30,  87 => 29,  76 => 28,  71 => 27,  69 => 26,  64 => 23,  61 => 22,  55 => 19,  51 => 18,  44 => 17,  41 => 16,  36 => 13,  33 => 12,  29 => 9,  27 => 10,  11 => 9,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
/*
 * Spring Signage Ltd - http://www.springsignage.com
 * Copyright (C) 2015 Spring Signage Ltd
 * (\${FILE_NAME})
 */
#}

{% extends \"form-base.twig\" %}
{% import \"forms.twig\" as forms %}

{% block formTitle %}
    {% trans \"Edit Profile\" %}
{% endblock %}

{% block formButtons %}
    {% trans \"Help\" %}, XiboHelpRender(\"{{ help }}\")
    {% trans \"Cancel\" %}, XiboDialogClose()
    {% trans \"Save\" %}, \$(\"#displayProfileForm\").submit()
{% endblock %}

{% block formHtml %}
    <div class=\"row\">
        <div class=\"col-md-12\">
            <ul class=\"nav nav-tabs\" role=\"tablist\">
                {% set first = true %}
                {% for tab in displayProfile.configTabs %}
                    <li{% if first %} class=\"active\"{% endif %}><a href=\"#{{ tab.id }}\" role=\"tab\" data-toggle=\"tab\">{{ tab.name }}</a></li>
                    {% set first = false %}
                {% endfor %}
                {% if commands|length > 0 %}
                    <li><a href=\"#commands\" role=\"tab\" data-toggle=\"tab\">{% trans \"Commands\" %}</a></li>
                {% endif %}
            </ul>
            <form id=\"displayProfileForm\" class=\"XiboForm form-horizontal\" method=\"put\" action=\"{{ urlFor(\"displayProfile.edit\", {id: displayProfile.displayProfileId}) }}\">
                <div class=\"tab-content\">
                {% for field in displayProfile.configDefault %}
                    {% if currentCat != field.tabId %}
                        {% if currentCat != \"\" %}
                            </div>
                        {% endif %}
                        <div class=\"tab-pane{% if currentCat == \"\" %} active{% endif %}\" id=\"{{ field.tabId }}\">
                            {% if field.tabId == \"general\" %}
                                {% set title %}{% trans \"Name\" %}{% endset %}
                                {% set helpText %}{% trans \"The Name of the Profile - (1 - 50 characters)\" %}{% endset %}
                                {{ forms.input(\"name\", title, displayProfile.name, helpText) }}

                                {% set title %}{% trans \"Default Profile?\" %}{% endset %}
                                {% set helpText %}{% trans \"Is this the default profile for all Displays of this type? Only 1 profile can be the default.\" %}{% endset %}
                                {{ forms.checkbox(\"isDefault\", title, displayProfile.isDefault, helpText) }}
                            {% endif %}

                        {% set currentCat = field.tabId %}
                    {% endif %}
                    {# Now we have to output the relevant form field #}
                    {% if field.enabled != 1 %}
                        {{ forms.disabled(field.name, field.title, field.value, field.helpText) }}
                    {% elseif field.fieldType == \"text\" %}
                        {{ forms.input(field.name, field.title, field.value, field.helpText) }}
                    {% elseif field.fieldType == \"number\" %}
                        {{ forms.number(field.name, field.title, field.value, field.helpText) }}
                    {% elseif field.fieldType == \"email\" %}
                        {{ forms.email(field.name, field.title, field.value, field.helpText) }}
                    {% elseif field.fieldType == \"checkbox\" %}
                        {{ forms.checkbox(field.name, field.title, field.value, field.helpText) }}
                    {% elseif field.fieldType == \"timePicker\" %}
                        {{ forms.time(field.name, field.title, field.value, field.helpText) }}
                    {% elseif field.fieldType == \"dropdown\" %}
                        {{ forms.dropdown(field.name, \"single\", field.title, field.value, field.options, \"id\", \"value\", field.helpText) }}
                    {% endif %}
                {% endfor %}
                </div>
                {% if commands|length > 0 %}
                    <div class=\"tab-pane\" id=\"commands\">
                        {% for field in commands %}
                            {% set title %}{% trans \"Name\" %}{% endset %}
                            {{ forms.disabled(\"command\", title, field.command, field.description) }}

                            {% set fieldId = \"commandString_\" ~ field.commandId %}
                            {% set title %}{% trans \"Command\" %}{% endset %}
                            {% set helpText %}{% trans \"The Command String for this Command on this display\" %}{% endset %}
                            {{ forms.input(fieldId, title, field.commandString, helpText) }}

                            {% set fieldId = \"validationString_\" ~ field.commandId %}
                            {% set title %}{% trans \"Validation\" %}{% endset %}
                            {% set helpText %}{% trans \"The Validation String for this Command on this display\" %}{% endset %}
                            {{ forms.input(fieldId, title, field.validationString, helpText) }}
                        {% endfor %}
                    </div>
                {% endif %}
                </div>
            </form>
        </div>
    </div>
{% endblock %}", "displayprofile-form-edit.twig", "/var/www/web/views/displayprofile-form-edit.twig");
    }
}
