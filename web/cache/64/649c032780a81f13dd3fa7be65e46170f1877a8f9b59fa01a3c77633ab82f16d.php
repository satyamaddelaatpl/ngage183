<?php

/* schedule-form-now.twig */
class __TwigTemplate_ead903e62940a9df76ae19606e065a757fee9feb0912d6a2aed3e28b23b6115a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 9
        $this->parent = $this->loadTemplate("form-base.twig", "schedule-form-now.twig", 9);
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
        // line 10
        $context["forms"] = $this->loadTemplate("forms.twig", "schedule-form-now.twig", 10);
        // line 9
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_formTitle($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        echo __("Schedule Now");
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
        echo ", scheduleNowFormSubmit(\$(\"#scheduleNowForm\"))
";
    }

    // line 22
    public function block_callBack($context, array $blocks = array())
    {
        echo "setupScheduleNowForm";
    }

    // line 24
    public function block_formHtml($context, array $blocks = array())
    {
        // line 25
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <form id=\"scheduleNowForm\" class=\"XiboForm form-horizontal\" method=\"post\" action=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("schedule.add"), "html", null, true);
        echo "\">
                ";
        // line 28
        echo $context["forms"]->gethidden("eventTypeId", "1");
        echo "
                ";
        // line 29
        echo $context["forms"]->gethidden("dayPartId", "0");
        echo "
                ";
        // line 30
        echo $context["forms"]->gethidden("fromDt", "");
        echo "
                ";
        // line 31
        echo $context["forms"]->gethidden("toDt", "");
        echo "
                ";
        // line 32
        echo $context["forms"]->gethidden("syncTimezone", "1");
        echo "

                ";
        // line 35
        echo "                ";
        $context["layoutOptions"] = array();
        // line 36
        echo "                ";
        $context["campaignOptions"] = array();
        // line 37
        echo "
                ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["campaigns"]) ? $context["campaigns"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 39
            echo "                    ";
            if (($this->getAttribute($context["item"], "isLayoutSpecific", array()) == 1)) {
                // line 40
                echo "                        ";
                $context["layoutOptions"] = twig_array_merge(array(0 => array("id" => $this->getAttribute($context["item"], "campaignId", array()), "value" => $this->getAttribute($context["item"], "campaign", array()))), (isset($context["layoutOptions"]) ? $context["layoutOptions"] : null));
                // line 41
                echo "                    ";
            } else {
                // line 42
                echo "                        ";
                $context["campaignOptions"] = twig_array_merge(array(0 => array("id" => $this->getAttribute($context["item"], "campaignId", array()), "value" => $this->getAttribute($context["item"], "campaign", array()))), (isset($context["campaignOptions"]) ? $context["campaignOptions"] : null));
                // line 43
                echo "                    ";
            }
            // line 44
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "
                ";
        // line 46
        ob_start();
        echo __("Campaigns");
        $context["campaigns"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 47
        echo "                ";
        ob_start();
        echo __("Layouts");
        $context["layouts"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 48
        echo "                ";
        $context["optionGroups"] = array(0 => array("id" => "campaign", "label" =>         // line 49
(isset($context["campaigns"]) ? $context["campaigns"] : null)), 1 => array("id" => "layout", "label" =>         // line 50
(isset($context["layouts"]) ? $context["layouts"] : null)));
        // line 52
        echo "                ";
        ob_start();
        echo __("Layout / Campaign");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 53
        echo "                ";
        ob_start();
        echo __("Please select a Layout or Campaign for this Event to show");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 54
        echo "                ";
        echo $context["forms"]->getdropdown("campaignId", "single", (isset($context["title"]) ? $context["title"] : null), (isset($context["campaignId"]) ? $context["campaignId"] : null), array("campaign" => (isset($context["campaignOptions"]) ? $context["campaignOptions"] : null), "layout" => (isset($context["layoutOptions"]) ? $context["layoutOptions"] : null)), "id", "value", (isset($context["helpText"]) ? $context["helpText"] : null), "", "", "", "", "", (isset($context["optionGroups"]) ? $context["optionGroups"] : null));
        echo "

                ";
        // line 56
        ob_start();
        echo __("Always?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 57
        echo "                ";
        ob_start();
        echo __("Run this event from now and dont stop.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 58
        echo "                ";
        echo $context["forms"]->getcheckbox("always", (isset($context["title"]) ? $context["title"] : null), "", (isset($context["helpText"]) ? $context["helpText"] : null));
        echo "

                ";
        // line 60
        ob_start();
        echo __("Hours");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 61
        echo "                ";
        ob_start();
        echo __("Hours this event should be scheduled for");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 62
        echo "                ";
        echo $context["forms"]->getnumber("hours", (isset($context["title"]) ? $context["title"] : null), "", (isset($context["helpText"]) ? $context["helpText"] : null), "duration-part");
        echo "
                
                ";
        // line 64
        ob_start();
        echo __("Minutes");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 65
        echo "                ";
        ob_start();
        echo __("Minutes this event should be scheduled for");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 66
        echo "                ";
        echo $context["forms"]->getnumber("minutes", (isset($context["title"]) ? $context["title"] : null), "", (isset($context["helpText"]) ? $context["helpText"] : null), "duration-part");
        echo "
                
                ";
        // line 68
        ob_start();
        echo __("Seconds");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 69
        echo "                ";
        ob_start();
        echo __("Seconds this event should be scheduled for");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 70
        echo "                ";
        echo $context["forms"]->getnumber("seconds", (isset($context["title"]) ? $context["title"] : null), "", (isset($context["helpText"]) ? $context["helpText"] : null), "schedule-now-seconds-field duration-part");
        echo "

                ";
        // line 72
        ob_start();
        echo __("Your event will be scheduled from [fromDt] to [toDt] in the CMS timezone, please check this covers each of your Displays in their respective timezones.");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 73
        echo "                <div class=\"alert alert-info scheduleNowMessage hidden\" data-template=\"";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "\"></div>

                ";
        // line 75
        ob_start();
        echo __("Display");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 76
        echo "                ";
        ob_start();
        echo __("Please select one or more displays / groups for this event to be shown on.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 77
        echo "                ";
        $context["attributes"] = array(0 => array("name" => "data-live-search", "value" => "true"), 1 => array("name" => "data-selected-text-format", "value" => "count > 4"));
        // line 81
        echo "                ";
        ob_start();
        echo __("Groups");
        $context["transGroups"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 82
        echo "                ";
        ob_start();
        echo __("Display");
        $context["transDisplays"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 83
        echo "                ";
        $context["optionGroups"] = array(0 => array("id" => "group", "label" =>         // line 84
(isset($context["transGroups"]) ? $context["transGroups"] : null)), 1 => array("id" => "display", "label" =>         // line 85
(isset($context["transDisplays"]) ? $context["transDisplays"] : null)));
        // line 87
        echo "                ";
        echo $context["forms"]->getdropdown("displayGroupIds[]", "dropdownmulti", (isset($context["title"]) ? $context["title"] : null), array(0 => (isset($context["displayGroupId"]) ? $context["displayGroupId"] : null)), array("group" => (isset($context["displayGroups"]) ? $context["displayGroups"] : null), "display" => (isset($context["displays"]) ? $context["displays"] : null)), "displayGroupId", "displayGroup", (isset($context["helpText"]) ? $context["helpText"] : null), "", "", "", "", (isset($context["attributes"]) ? $context["attributes"] : null), (isset($context["optionGroups"]) ? $context["optionGroups"] : null));
        echo "

                ";
        // line 89
        ob_start();
        echo __("Display Order");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 90
        echo "                ";
        ob_start();
        echo __("Should this event have an order?");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 91
        echo "                ";
        echo $context["forms"]->getnumber("displayOrder", (isset($context["title"]) ? $context["title"] : null), (isset($context["displayOrder"]) ? $context["displayOrder"] : null), (isset($context["helpText"]) ? $context["helpText"] : null));
        echo "
                
                ";
        // line 93
        ob_start();
        echo __("Priority");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 94
        echo "                ";
        ob_start();
        echo __("Sets the event priority - events with the highest priority play in preference to lower priority events.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 95
        echo "                ";
        echo $context["forms"]->getnumber("isPriority", (isset($context["title"]) ? $context["title"] : null), (isset($context["isPriority"]) ? $context["isPriority"] : null), (isset($context["helpText"]) ? $context["helpText"] : null));
        echo "

            </form>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "schedule-form-now.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  294 => 95,  289 => 94,  285 => 93,  279 => 91,  274 => 90,  270 => 89,  264 => 87,  262 => 85,  261 => 84,  259 => 83,  254 => 82,  249 => 81,  246 => 77,  241 => 76,  237 => 75,  231 => 73,  227 => 72,  221 => 70,  216 => 69,  212 => 68,  206 => 66,  201 => 65,  197 => 64,  191 => 62,  186 => 61,  182 => 60,  176 => 58,  171 => 57,  167 => 56,  161 => 54,  156 => 53,  151 => 52,  149 => 50,  148 => 49,  146 => 48,  141 => 47,  137 => 46,  134 => 45,  128 => 44,  125 => 43,  122 => 42,  119 => 41,  116 => 40,  113 => 39,  109 => 38,  106 => 37,  103 => 36,  100 => 35,  95 => 32,  91 => 31,  87 => 30,  83 => 29,  79 => 28,  75 => 27,  71 => 25,  68 => 24,  62 => 22,  56 => 19,  52 => 18,  45 => 17,  42 => 16,  37 => 13,  34 => 12,  30 => 9,  28 => 10,  11 => 9,);
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
    {% trans \"Schedule Now\" %}
{% endblock %}

{% block formButtons %}
    {% trans \"Help\" %}, XiboHelpRender(\"{{ help }}\")
    {% trans \"Cancel\" %}, XiboDialogClose()
    {% trans \"Save\" %}, scheduleNowFormSubmit(\$(\"#scheduleNowForm\"))
{% endblock %}

{% block callBack %}setupScheduleNowForm{% endblock %}

{% block formHtml %}
    <div class=\"row\">
        <div class=\"col-md-12\">
            <form id=\"scheduleNowForm\" class=\"XiboForm form-horizontal\" method=\"post\" action=\"{{ urlFor(\"schedule.add\") }}\">
                {{ forms.hidden(\"eventTypeId\", \"1\") }}
                {{ forms.hidden(\"dayPartId\", \"0\") }}
                {{ forms.hidden(\"fromDt\", \"\") }}
                {{ forms.hidden(\"toDt\", \"\") }}
                {{ forms.hidden(\"syncTimezone\", \"1\") }}

                {# Campaign / Layout list. We want to build two arrays for us to use. #}
                {% set layoutOptions = [] %}
                {% set campaignOptions = [] %}

                {% for item in campaigns %}
                    {% if item.isLayoutSpecific == 1 %}
                        {% set layoutOptions = [{id: item.campaignId, value: item.campaign}]|merge(layoutOptions) %}
                    {% else %}
                        {% set campaignOptions = [{id: item.campaignId, value: item.campaign}]|merge(campaignOptions) %}
                    {% endif %}
                {% endfor %}

                {% set campaigns %}{% trans \"Campaigns\" %}{% endset %}
                {% set layouts %}{% trans \"Layouts\" %}{% endset %}
                {% set optionGroups = [
                {id: \"campaign\", label: campaigns},
                {id: \"layout\", label: layouts}
                ] %}
                {% set title %}{% trans \"Layout / Campaign\" %}{% endset %}
                {% set helpText %}{% trans \"Please select a Layout or Campaign for this Event to show\" %}{% endset %}
                {{ forms.dropdown(\"campaignId\", \"single\", title, campaignId, {campaign: campaignOptions, layout: layoutOptions}, \"id\", \"value\", helpText, \"\", \"\", \"\", \"\", \"\", optionGroups) }}

                {% set title %}{% trans \"Always?\" %}{% endset %}
                {% set helpText %}{% trans \"Run this event from now and dont stop.\" %}{% endset %}
                {{ forms.checkbox(\"always\", title, \"\", helpText) }}

                {% set title %}{% trans \"Hours\" %}{% endset %}
                {% set helpText %}{% trans \"Hours this event should be scheduled for\" %}{% endset %}
                {{ forms.number(\"hours\", title, \"\", helpText, \"duration-part\") }}
                
                {% set title %}{% trans \"Minutes\" %}{% endset %}
                {% set helpText %}{% trans \"Minutes this event should be scheduled for\" %}{% endset %}
                {{ forms.number(\"minutes\", title, \"\", helpText, \"duration-part\") }}
                
                {% set title %}{% trans \"Seconds\" %}{% endset %}
                {% set helpText %}{% trans \"Seconds this event should be scheduled for\" %}{% endset %}
                {{ forms.number(\"seconds\", title, \"\", helpText, \"schedule-now-seconds-field duration-part\") }}

                {% set title %}{% trans %}Your event will be scheduled from [fromDt] to [toDt] in the CMS timezone, please check this covers each of your Displays in their respective timezones.{% endtrans %}{% endset %}
                <div class=\"alert alert-info scheduleNowMessage hidden\" data-template=\"{{ title }}\"></div>

                {% set title %}{% trans \"Display\" %}{% endset %}
                {% set helpText %}{% trans \"Please select one or more displays / groups for this event to be shown on.\" %}{% endset %}
                {% set attributes = [
                { name: \"data-live-search\", value: \"true\" },
                { name: \"data-selected-text-format\", value: \"count > 4\" }
                ] %}
                {% set transGroups %}{% trans \"Groups\" %}{% endset %}
                {% set transDisplays %}{% trans \"Display\" %}{% endset %}
                {% set optionGroups = [
                {id: \"group\", label: transGroups},
                {id: \"display\", label: transDisplays}
                ] %}
                {{ forms.dropdown(\"displayGroupIds[]\", \"dropdownmulti\", title, [displayGroupId], {group: displayGroups, display: displays}, \"displayGroupId\", \"displayGroup\", helpText, \"\", \"\", \"\", \"\", attributes, optionGroups) }}

                {% set title %}{% trans \"Display Order\" %}{% endset %}
                {% set helpText %}{% trans \"Should this event have an order?\" %}{% endset %}
                {{ forms.number(\"displayOrder\", title, displayOrder, helpText) }}
                
                {% set title %}{% trans \"Priority\" %}{% endset %}
                {% set helpText %}{% trans \"Sets the event priority - events with the highest priority play in preference to lower priority events.\" %}{% endset %}
                {{ forms.number(\"isPriority\", title, isPriority, helpText) }}

            </form>
        </div>
    </div>
{% endblock %}", "schedule-form-now.twig", "/var/www/web/views/schedule-form-now.twig");
    }
}
