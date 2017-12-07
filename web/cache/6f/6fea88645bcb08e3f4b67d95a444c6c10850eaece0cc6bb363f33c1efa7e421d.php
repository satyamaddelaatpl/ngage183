<?php

/* region-form-timeline.twig */
class __TwigTemplate_3a1a86fb1860b4ac64260741ad3cfc15564c3f6bcc384f353a08ae3016f83f8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 10
        $this->parent = $this->loadTemplate("form-base.twig", "region-form-timeline.twig", 10);
        $this->blocks = array(
            'formTitle' => array($this, 'block_formTitle'),
            'formButtons' => array($this, 'block_formButtons'),
            'callBack' => array($this, 'block_callBack'),
            'formHtml' => array($this, 'block_formHtml'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form-base.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        $context["forms"] = $this->loadTemplate("forms.twig", "region-form-timeline.twig", 11);
        // line 10
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_formTitle($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        echo __("Region Timeline");
    }

    // line 17
    public function block_formButtons($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        echo __("Help");
        echo ", XiboHelpRender(\"";
        echo twig_escape_filter($this->env, (isset($context["help"]) ? $context["help"] : null), "html", null, true);
        echo "\")
    ";
        // line 19
        echo __("Close");
        echo ", XiboDialogClose()
    ";
        // line 20
        echo __("Switch to Grid");
        echo ", XiboSwapDialog(\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("region.timeline.form", array("id" => $this->getAttribute((isset($context["region"]) ? $context["region"] : null), "regionId", array()))), "html", null, true);
        echo "?view=grid\")
    ";
        // line 21
        echo __("Save Order");
        echo ", XiboTimelineSaveOrder(\"timelineControl\")
";
    }

    // line 24
    public function block_callBack($context, array $blocks = array())
    {
        echo "loadTimeLineCallback";
    }

    // line 26
    public function block_formHtml($context, array $blocks = array())
    {
        // line 27
        echo "    ";
        // line 28
        echo "    ";
        $context["playlist"] = $this->getAttribute($this->getAttribute((isset($context["region"]) ? $context["region"] : null), "playlists", array()), 0, array(), "array");
        // line 29
        echo "    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-2\">
                <div class=\"well\">
                    <ul class=\"nav nav-list\">
                        <li class=\"nav-header\">";
        // line 34
        echo __("Add Media");
        echo "</li>
                        <li class=\"XiboFormButton\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("playlist.library.assign.form", array("id" => $this->getAttribute((isset($context["playlist"]) ? $context["playlist"] : null), "playlistId", array()))), "html", null, true);
        echo "\"><a tabindex=\"-1\" href=\"#\">";
        echo __("Library");
        echo "</a></li>
                        ";
        // line 36
        $context["isAudioEnabled"] = 0;
        // line 37
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["modules"]) ? $context["modules"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 38
            echo "                            ";
            if ($this->getAttribute($context["module"], "regionSpecific", array())) {
                // line 39
                echo "                                <li class=\"XiboFormButton\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("module.widget.add.form", array("type" => $this->getAttribute($context["module"], "type", array()), "id" => $this->getAttribute((isset($context["playlist"]) ? $context["playlist"] : null), "playlistId", array()))), "html", null, true);
                echo "\"><a tabindex=\"-1\" href=\"#\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "name", array()), "html", null, true);
                echo "</a></li>
                            ";
            } else {
                // line 41
                echo "                                <li class=\"libraryUploadForm\" href=\"#\" data-playlist-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["playlist"]) ? $context["playlist"] : null), "playlistId", array()), "html", null, true);
                echo "\" data-valid-ext=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "validExtensions", array()), "html", null, true);
                echo "\"><a tabindex=\"-1\" href=\"#\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "name", array()), "html", null, true);
                echo "</a></li>
                            ";
            }
            // line 43
            echo "
                            ";
            // line 44
            if (($this->getAttribute($context["module"], "type", array()) == "audio")) {
                // line 45
                echo "                                ";
                $context["isAudioEnabled"] = 1;
                // line 46
                echo "                            ";
            }
            // line 47
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                    </ul>
                </div>
            </div>
            <div class=\"col-md-10\">
                <div id=\"timelineControl\" class=\"timelineColumn\" layoutid=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["region"]) ? $context["region"] : null), "layoutId", array()), "html", null, true);
        echo "\" regionid=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["region"]) ? $context["region"] : null), "regionId", array()), "html", null, true);
        echo "\" data-order-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("playlist.order", array("id" => $this->getAttribute((isset($context["playlist"]) ? $context["playlist"] : null), "playlistId", array()))), "html", null, true);
        echo "\">
                    <div class=\"timelineMediaVerticalList\">
                        <ul id=\"";
        // line 54
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\" class=\"timelineSortableListOfMedia\">
                            ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["playlist"]) ? $context["playlist"] : null), "widgets", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
            // line 56
            echo "                                ";
            $context["name"] = $this->getAttribute($this->getAttribute($context["widget"], "module", array()), "getName", array(), "method");
            // line 57
            echo "                                ";
            $context["duration"] = $this->getAttribute($context["widget"], "duration", array());
            // line 58
            echo "                                ";
            if (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "REGION_OPTIONS_COLOURING", array()) == "Permissions")) {
                // line 59
                echo "                                    ";
                if ($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "checkEditable", array(0 => $context["widget"]), "method")) {
                    // line 60
                    echo "                                        ";
                    $context["coloring"] = "timelineMediaItemColouring_enabled";
                    // line 61
                    echo "                                    ";
                } else {
                    // line 62
                    echo "                                        ";
                    $context["coloring"] = "timelineMediaItemColouring_disabled";
                    // line 63
                    echo "                                    ";
                }
                // line 64
                echo "                                ";
            } else {
                // line 65
                echo "                                    ";
                ob_start();
                echo "timelineMediaItemColouringDefault timelineMediaItemColouring_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["widget"], "type", array()), "html", null, true);
                $context["coloring"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 66
                echo "                                ";
            }
            // line 67
            echo "                                <li class=\"timelineMediaListItem\" widgetid=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["widget"], "widgetId", array()), "html", null, true);
            echo "\">
                                    <div class=\"timelineMediaInTransition\">
                                        ";
            // line 69
            if (($this->getAttribute($this->getAttribute($context["widget"], "module", array()), "getTransition", array(0 => "in"), "method") != "None")) {
                // line 70
                echo "                                            <span>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["widget"], "module", array()), "getTransition", array(0 => "in"), "method"), "html", null, true);
                echo "</span>
                                        ";
            }
            // line 72
            echo "                                    </div>
                                    <div class=\"timelineMediaItem\">
                                        <ul class=\"timelineMediaItemLinks\">
                                            ";
            // line 75
            if ($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "checkEditable", array(0 => $context["widget"]), "method")) {
                // line 76
                echo "                                                <li><a class=\"XiboFormButton timelineMediaBarLink\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("module.widget.edit.form", array("id" => $this->getAttribute($context["widget"], "widgetId", array()))), "html", null, true);
                echo "\" title=\"";
                echo __("Click to edit this widget");
                echo "\">";
                echo __("Edit");
                echo "</a></li>
                                            ";
            }
            // line 78
            echo "                                            ";
            if ($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "checkDeleteable", array(0 => $context["widget"]), "method")) {
                // line 79
                echo "                                                <li><a class=\"XiboFormButton timelineMediaBarLink\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("module.widget.delete.form", array("id" => $this->getAttribute($context["widget"], "widgetId", array()))), "html", null, true);
                echo "\" title=\"";
                echo __("Click to delete this widget");
                echo "\">";
                echo __("Delete");
                echo "</a></li>
                                            ";
            }
            // line 81
            echo "                                            ";
            if ($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "checkPermissionsModifyable", array(0 => $context["widget"]), "method")) {
                // line 82
                echo "                                                <li><a class=\"XiboFormButton timelineMediaBarLink\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("user.permissions.form", array("entity" => "Widget", "id" => $this->getAttribute($context["widget"], "widgetId", array()))), "html", null, true);
                echo "\" title=\"";
                echo __("Click to change permissions for this widget");
                echo "\">";
                echo __("Permissions");
                echo "</a></li>
                                            ";
            }
            // line 84
            echo "                                            ";
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["transitions"]) ? $context["transitions"] : null), "in", array())) > 0)) {
                // line 85
                echo "                                                <li><a class=\"XiboFormButton timelineMediaBarLink\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("module.widget.transition.edit.form", array("type" => "in", "id" => $this->getAttribute($context["widget"], "widgetId", array()))), "html", null, true);
                echo "\" title=\"";
                echo __("Click to edit this transition");
                echo "\">";
                echo __("In Transition");
                echo "</a></li>
                                            ";
            }
            // line 87
            echo "                                            ";
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["transitions"]) ? $context["transitions"] : null), "out", array())) > 0)) {
                // line 88
                echo "                                                <li><a class=\"XiboFormButton timelineMediaBarLink\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("module.widget.transition.edit.form", array("type" => "out", "id" => $this->getAttribute($context["widget"], "widgetId", array()))), "html", null, true);
                echo "\" title=\"";
                echo __("Click to edit this transition");
                echo "\">";
                echo __("Out Transition");
                echo "</a></li>
                                            ";
            }
            // line 90
            echo "                                            ";
            if ((((isset($context["isAudioEnabled"]) ? $context["isAudioEnabled"] : null) && ($this->getAttribute($context["widget"], "type", array()) != "audio")) && $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "checkEditable", array(0 => $context["widget"]), "method"))) {
                // line 91
                echo "                                                <li>
                                                    <a class=\"XiboFormButton timelineMediaBarLink\" href=\"";
                // line 92
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("module.widget.audio.form", array("type" => "out", "id" => $this->getAttribute($context["widget"], "widgetId", array()))), "html", null, true);
                echo "\" title=\"";
                echo __("Click to assign audio to this widget");
                echo "\">
                                                        <span class=\"fa-stack\">
                                                            ";
                // line 95
                echo "                                                            ";
                if (($this->getAttribute($context["widget"], "countAudio", array()) <= 0)) {
                    // line 96
                    echo "                                                                <i class=\"fa fa-volume-off fa-stack-2x\" style=\"color:#bebebe\"></i>
                                                                <i class=\"fa fa-plus-square fa-badge\" style=\"color:#ffffff\"></i>
                                                            ";
                } else {
                    // line 99
                    echo "                                                                <i class=\"fa fa-volume-up fa-stack-2x\"></i>
                                                            ";
                }
                // line 101
                echo "                                                        </span>
                                                    </a>
                                                </li>
                                            ";
            }
            // line 105
            echo "                                        </ul>
                                        <div class=\"timelineMediaDetails ";
            // line 106
            echo twig_escape_filter($this->env, (isset($context["coloring"]) ? $context["coloring"] : null), "html", null, true);
            echo "\">
                                            ";
            // line 107
            if ($this->getAttribute($context["widget"], "useDuration", array())) {
                // line 108
                echo "                                            <h3>";
                /* xgettext:no-php-format */                echo strtr(__("%name% (%duration% seconds)"), array("%name%" => (isset($context["name"]) ? $context["name"] : null), "%duration%" => (isset($context["duration"]) ? $context["duration"] : null), ));
                echo "</h3>
                                            ";
            } else {
                // line 110
                echo "                                            <h3>";
                echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
                echo "</h3>
                                            ";
            }
            // line 112
            echo "                                        </div>
                                        <div class=\"timelineMediaPreview\">
                                            ";
            // line 114
            echo $this->getAttribute($this->getAttribute($context["widget"], "module", array()), "hoverPreview", array(), "method");
            echo "
                                        </div>
                                        <div class=\"timelineMediaOutTransition\">
                                            ";
            // line 117
            if (($this->getAttribute($this->getAttribute($context["widget"], "module", array()), "getTransition", array(0 => "out"), "method") != "None")) {
                // line 118
                echo "                                            <span>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["widget"], "module", array()), "getTransition", array(0 => "out"), "method"), "html", null, true);
                echo "</span>
                                            ";
            }
            // line 120
            echo "                                        </div>
                                    </div>
                                </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo "                        </ul>
                    </div>
                    <div id=\"timelinePreview\"></div>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "region-form-timeline.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  365 => 124,  356 => 120,  350 => 118,  348 => 117,  342 => 114,  338 => 112,  332 => 110,  326 => 108,  324 => 107,  320 => 106,  317 => 105,  311 => 101,  307 => 99,  302 => 96,  299 => 95,  292 => 92,  289 => 91,  286 => 90,  276 => 88,  273 => 87,  263 => 85,  260 => 84,  250 => 82,  247 => 81,  237 => 79,  234 => 78,  224 => 76,  222 => 75,  217 => 72,  211 => 70,  209 => 69,  203 => 67,  200 => 66,  194 => 65,  191 => 64,  188 => 63,  185 => 62,  182 => 61,  179 => 60,  176 => 59,  173 => 58,  170 => 57,  167 => 56,  163 => 55,  159 => 54,  150 => 52,  144 => 48,  138 => 47,  135 => 46,  132 => 45,  130 => 44,  127 => 43,  117 => 41,  109 => 39,  106 => 38,  101 => 37,  99 => 36,  93 => 35,  89 => 34,  82 => 29,  79 => 28,  77 => 27,  74 => 26,  68 => 24,  62 => 21,  56 => 20,  52 => 19,  45 => 18,  42 => 17,  37 => 14,  34 => 13,  30 => 10,  28 => 11,  11 => 10,);
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
    {% trans \"Region Timeline\" %}
{% endblock %}

{% block formButtons %}
    {% trans \"Help\" %}, XiboHelpRender(\"{{ help }}\")
    {% trans \"Close\" %}, XiboDialogClose()
    {% trans \"Switch to Grid\" %}, XiboSwapDialog(\"{{ urlFor(\"region.timeline.form\", {id: region.regionId}) }}?view=grid\")
    {% trans \"Save Order\" %}, XiboTimelineSaveOrder(\"timelineControl\")
{% endblock %}

{% block callBack %}loadTimeLineCallback{% endblock %}

{% block formHtml %}
    {# TODO: We will need to design a playlist selector #}
    {% set playlist = region.playlists[0] %}
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-2\">
                <div class=\"well\">
                    <ul class=\"nav nav-list\">
                        <li class=\"nav-header\">{% trans \"Add Media\" %}</li>
                        <li class=\"XiboFormButton\" href=\"{{ urlFor(\"playlist.library.assign.form\", {id: playlist.playlistId}) }}\"><a tabindex=\"-1\" href=\"#\">{% trans \"Library\" %}</a></li>
                        {% set isAudioEnabled = 0 %}
                        {% for module in modules %}
                            {% if module.regionSpecific %}
                                <li class=\"XiboFormButton\" href=\"{{ urlFor(\"module.widget.add.form\", {type: module.type, id: playlist.playlistId}) }}\"><a tabindex=\"-1\" href=\"#\">{{ module.name }}</a></li>
                            {% else %}
                                <li class=\"libraryUploadForm\" href=\"#\" data-playlist-id=\"{{ playlist.playlistId }}\" data-valid-ext=\"{{ module.validExtensions }}\"><a tabindex=\"-1\" href=\"#\">{{ module.name }}</a></li>
                            {% endif %}

                            {% if module.type == \"audio\" %}
                                {% set isAudioEnabled = 1 %}
                            {% endif %}
                        {% endfor %}
                    </ul>
                </div>
            </div>
            <div class=\"col-md-10\">
                <div id=\"timelineControl\" class=\"timelineColumn\" layoutid=\"{{ region.layoutId }}\" regionid=\"{{ region.regionId }}\" data-order-url=\"{{ urlFor(\"playlist.order\", {id: playlist.playlistId}) }}\">
                    <div class=\"timelineMediaVerticalList\">
                        <ul id=\"{{ random() }}\" class=\"timelineSortableListOfMedia\">
                            {% for widget in playlist.widgets %}
                                {% set name = widget.module.getName() %}
                                {% set duration = widget.duration %}
                                {% if options.REGION_OPTIONS_COLOURING == \"Permissions\" %}
                                    {% if currentUser.checkEditable(widget) %}
                                        {% set coloring = \"timelineMediaItemColouring_enabled\" %}
                                    {% else %}
                                        {% set coloring = \"timelineMediaItemColouring_disabled\" %}
                                    {% endif %}
                                {% else %}
                                    {% set coloring %}timelineMediaItemColouringDefault timelineMediaItemColouring_{{ widget.type }}{% endset %}
                                {% endif %}
                                <li class=\"timelineMediaListItem\" widgetid=\"{{ widget.widgetId }}\">
                                    <div class=\"timelineMediaInTransition\">
                                        {% if widget.module.getTransition(\"in\") != \"None\" %}
                                            <span>{{ widget.module.getTransition(\"in\") }}</span>
                                        {% endif %}
                                    </div>
                                    <div class=\"timelineMediaItem\">
                                        <ul class=\"timelineMediaItemLinks\">
                                            {% if currentUser.checkEditable(widget) %}
                                                <li><a class=\"XiboFormButton timelineMediaBarLink\" href=\"{{ urlFor(\"module.widget.edit.form\", {id: widget.widgetId}) }}\" title=\"{% trans \"Click to edit this widget\" %}\">{% trans \"Edit\" %}</a></li>
                                            {% endif %}
                                            {% if currentUser.checkDeleteable(widget) %}
                                                <li><a class=\"XiboFormButton timelineMediaBarLink\" href=\"{{ urlFor(\"module.widget.delete.form\", {id: widget.widgetId}) }}\" title=\"{% trans \"Click to delete this widget\" %}\">{% trans \"Delete\" %}</a></li>
                                            {% endif %}
                                            {% if currentUser.checkPermissionsModifyable(widget) %}
                                                <li><a class=\"XiboFormButton timelineMediaBarLink\" href=\"{{ urlFor(\"user.permissions.form\", {entity: \"Widget\", id: widget.widgetId}) }}\" title=\"{% trans \"Click to change permissions for this widget\" %}\">{% trans \"Permissions\" %}</a></li>
                                            {% endif %}
                                            {% if transitions.in|length > 0 %}
                                                <li><a class=\"XiboFormButton timelineMediaBarLink\" href=\"{{ urlFor(\"module.widget.transition.edit.form\", {type: \"in\", id: widget.widgetId}) }}\" title=\"{% trans \"Click to edit this transition\" %}\">{% trans \"In Transition\" %}</a></li>
                                            {% endif %}
                                            {% if transitions.out|length > 0 %}
                                                <li><a class=\"XiboFormButton timelineMediaBarLink\" href=\"{{ urlFor(\"module.widget.transition.edit.form\", {type: \"out\", id: widget.widgetId}) }}\" title=\"{% trans \"Click to edit this transition\" %}\">{% trans \"Out Transition\" %}</a></li>
                                            {% endif %}
                                            {% if isAudioEnabled and widget.type != \"audio\" and currentUser.checkEditable(widget) %}
                                                <li>
                                                    <a class=\"XiboFormButton timelineMediaBarLink\" href=\"{{ urlFor(\"module.widget.audio.form\", {type: \"out\", id: widget.widgetId}) }}\" title=\"{% trans \"Click to assign audio to this widget\" %}\">
                                                        <span class=\"fa-stack\">
                                                            {# Do we have audio already assigned? #}
                                                            {% if widget.countAudio <= 0  %}
                                                                <i class=\"fa fa-volume-off fa-stack-2x\" style=\"color:#bebebe\"></i>
                                                                <i class=\"fa fa-plus-square fa-badge\" style=\"color:#ffffff\"></i>
                                                            {% else %}
                                                                <i class=\"fa fa-volume-up fa-stack-2x\"></i>
                                                            {% endif %}
                                                        </span>
                                                    </a>
                                                </li>
                                            {% endif %}
                                        </ul>
                                        <div class=\"timelineMediaDetails {{ coloring }}\">
                                            {% if widget.useDuration %}
                                            <h3>{% trans %}{{ name }} ({{ duration }} seconds){% endtrans %}</h3>
                                            {% else %}
                                            <h3>{{ name }}</h3>
                                            {% endif %}
                                        </div>
                                        <div class=\"timelineMediaPreview\">
                                            {{ widget.module.hoverPreview()|raw }}
                                        </div>
                                        <div class=\"timelineMediaOutTransition\">
                                            {% if widget.module.getTransition(\"out\") != \"None\" %}
                                            <span>{{ widget.module.getTransition(\"out\") }}</span>
                                            {% endif %}
                                        </div>
                                    </div>
                                </li>
                            {% endfor %}
                        </ul>
                    </div>
                    <div id=\"timelinePreview\"></div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "region-form-timeline.twig", "/var/www/web/views/region-form-timeline.twig");
    }
}
