<?php

/* image-form-edit.twig */
class __TwigTemplate_2da02102685646186f6ec92011491774e9ed714bc432122e158bf891171428a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 9
        $this->parent = $this->loadTemplate("form-base.twig", "image-form-edit.twig", 9);
        $this->blocks = array(
            'formTitle' => array($this, 'block_formTitle'),
            'formButtons' => array($this, 'block_formButtons'),
            'formFieldActions' => array($this, 'block_formFieldActions'),
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
        $context["forms"] = $this->loadTemplate("forms.twig", "image-form-edit.twig", 10);
        // line 9
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_formTitle($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        echo __("Edit Image");
    }

    // line 16
    public function block_formButtons($context, array $blocks = array())
    {
        // line 17
        echo "    ";
        echo __("Cancel");
        echo ", XiboDialogClose()
    ";
        // line 18
        echo __("Save");
        echo ", \$(\"#imageEditForm\").submit()
";
    }

    // line 21
    public function block_formFieldActions($context, array $blocks = array())
    {
        // line 22
        echo "    [{
    \"field\": \"scaleTypeId\",
    \"trigger\": \"init\",
    \"value\": \"center\",
    \"operation\": \"equals\",
    \"actions\": {
    \".align-fields\": { \"display\": \"block\" }
    }
    },{
    \"field\": \"scaleTypeId\",
    \"trigger\": \"change\",
    \"value\": \"center\",
    \"operation\": \"equals\",
    \"actions\": {
    \".align-fields\": { \"display\": \"block\" }
    }
    },{
    \"field\": \"scaleTypeId\",
    \"trigger\": \"init\",
    \"value\": \"center\",
    \"operation\": \"not\",
    \"actions\": {
    \".align-fields\": { \"display\": \"none\" }
    }
    },{
    \"field\": \"scaleTypeId\",
    \"trigger\": \"change\",
    \"value\": \"center\",
    \"operation\": \"not\",
    \"actions\": {
    \".align-fields\": { \"display\": \"none\" }
    }
    },{
    \"field\": \"useDuration\",
    \"trigger\": \"init\",
    \"value\": false,
    \"operation\": \"is:checked\",
    \"actions\": {
    \".duration-fields\": { \"display\": \"none\" }
    }
    },{
    \"field\": \"useDuration\",
    \"trigger\": \"change\",
    \"value\": false,
    \"operation\": \"is:checked\",
    \"actions\": {
    \".duration-fields\": { \"display\": \"none\" }
    }
    },{
    \"field\": \"useDuration\",
    \"trigger\": \"init\",
    \"value\": true,
    \"operation\": \"is:checked\",
    \"actions\": {
    \".duration-fields\": { \"display\": \"block\" }
    }
    },{
    \"field\": \"useDuration\",
    \"trigger\": \"change\",
    \"value\": true,
    \"operation\": \"is:checked\",
    \"actions\": {
    \".duration-fields\": { \"display\": \"block\" }
    }
    }]
";
    }

    // line 89
    public function block_callBack($context, array $blocks = array())
    {
        echo "mediaEditFormOpen";
    }

    // line 91
    public function block_formHtml($context, array $blocks = array())
    {
        // line 92
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <form id=\"imageEditForm\" class=\"XiboForm form-horizontal\" method=\"put\" action=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("module.widget.edit", array("id" => $this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "widget", array()), "widgetId", array()))), "html", null, true);
        echo "\" data-widget-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "widget", array()), "widgetId", array()), "html", null, true);
        echo "\" data-media-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "getMediaId", array(), "method"), "html", null, true);
        echo "\" data-media-editable=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "checkEditable", array(0 => $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "getMedia", array(), "method")), "method"), "html", null, true);
        echo "\" data-valid-extensions=\"";
        echo twig_escape_filter($this->env, (isset($context["validExtensions"]) ? $context["validExtensions"] : null), "html", null, true);
        echo "\">
                ";
        // line 95
        ob_start();
        echo __("Name");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 96
        echo "                ";
        ob_start();
        echo __("An optional name for this widget");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 97
        echo "                ";
        echo $context["forms"]->getinput("name", (isset($context["title"]) ? $context["title"] : null), $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "getOption", array(0 => "name"), "method"), (isset($context["helpText"]) ? $context["helpText"] : null));
        echo "

                ";
        // line 99
        ob_start();
        echo __("Set a duration?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 100
        echo "                ";
        ob_start();
        echo __("Select to provide a specific duration for this Widget");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 101
        echo "                ";
        echo $context["forms"]->getcheckbox("useDuration", (isset($context["title"]) ? $context["title"] : null), $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "getUseDuration", array(), "method"), (isset($context["helpText"]) ? $context["helpText"] : null));
        echo "

                ";
        // line 103
        ob_start();
        echo __("Duration");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 104
        echo "                ";
        ob_start();
        echo __("The duration in seconds this should be displayed");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 105
        echo "                ";
        echo $context["forms"]->getnumber("duration", (isset($context["title"]) ? $context["title"] : null), $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "getDuration", array(), "method"), (isset($context["helpText"]) ? $context["helpText"] : null), "duration-fields", "required");
        echo "

                ";
        // line 107
        ob_start();
        echo __("Scale type");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 108
        echo "                ";
        ob_start();
        echo __("How should this image be scaled?");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 109
        echo "                ";
        ob_start();
        echo __("Centre");
        $context["center"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 110
        echo "                ";
        ob_start();
        echo __("Stretch");
        $context["stretch"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 111
        echo "                ";
        $context["options"] = array(0 => array("scaleTypeId" => "center", "scaleType" =>         // line 112
(isset($context["center"]) ? $context["center"] : null)), 1 => array("scaleTypeId" => "stretch", "scaleType" =>         // line 113
(isset($context["stretch"]) ? $context["stretch"] : null)));
        // line 115
        echo "                ";
        echo $context["forms"]->getdropdown("scaleTypeId", "single", (isset($context["title"]) ? $context["title"] : null), $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "getOption", array(0 => "scaleType"), "method"), (isset($context["options"]) ? $context["options"] : null), "scaleTypeId", "scaleType", (isset($context["helpText"]) ? $context["helpText"] : null));
        echo "

                ";
        // line 117
        ob_start();
        echo __("Horizontal Align");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 118
        echo "                ";
        ob_start();
        echo __("How should this image be aligned?");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 119
        echo "                ";
        ob_start();
        echo __("Left");
        $context["left"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 120
        echo "                ";
        ob_start();
        echo __("Centre");
        $context["center"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 121
        echo "                ";
        ob_start();
        echo __("Right");
        $context["right"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 122
        echo "                ";
        $context["options"] = array(0 => array("alignId" => "left", "align" =>         // line 123
(isset($context["left"]) ? $context["left"] : null)), 1 => array("alignId" => "center", "align" =>         // line 124
(isset($context["center"]) ? $context["center"] : null)), 2 => array("alignId" => "right", "align" =>         // line 125
(isset($context["right"]) ? $context["right"] : null)));
        // line 127
        echo "                ";
        echo $context["forms"]->getdropdown("alignId", "single", (isset($context["title"]) ? $context["title"] : null), $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "getOption", array(0 => "align", 1 => "center"), "method"), (isset($context["options"]) ? $context["options"] : null), "alignId", "align", (isset($context["helpText"]) ? $context["helpText"] : null), "align-fields");
        echo "

                ";
        // line 129
        ob_start();
        echo __("Vertical Align");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 130
        echo "                ";
        ob_start();
        echo __("How should this image be vertically aligned?");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 131
        echo "                ";
        ob_start();
        echo __("Top");
        $context["top"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 132
        echo "                ";
        ob_start();
        echo __("Middle");
        $context["middle"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 133
        echo "                ";
        ob_start();
        echo __("Bottom");
        $context["bottom"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 134
        echo "                ";
        $context["options"] = array(0 => array("valignId" => "top", "valign" =>         // line 135
(isset($context["top"]) ? $context["top"] : null)), 1 => array("valignId" => "middle", "valign" =>         // line 136
(isset($context["middle"]) ? $context["middle"] : null)), 2 => array("valignId" => "bottom", "valign" =>         // line 137
(isset($context["bottom"]) ? $context["bottom"] : null)));
        // line 139
        echo "                ";
        echo $context["forms"]->getdropdown("valignId", "single", (isset($context["title"]) ? $context["title"] : null), $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "getoption", array(0 => "valign", 1 => "middle"), "method"), (isset($context["options"]) ? $context["options"] : null), "valignId", "valign", (isset($context["helpText"]) ? $context["helpText"] : null), "align-fields");
        echo "
            </form>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "image-form-edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  295 => 139,  293 => 137,  292 => 136,  291 => 135,  289 => 134,  284 => 133,  279 => 132,  274 => 131,  269 => 130,  265 => 129,  259 => 127,  257 => 125,  256 => 124,  255 => 123,  253 => 122,  248 => 121,  243 => 120,  238 => 119,  233 => 118,  229 => 117,  223 => 115,  221 => 113,  220 => 112,  218 => 111,  213 => 110,  208 => 109,  203 => 108,  199 => 107,  193 => 105,  188 => 104,  184 => 103,  178 => 101,  173 => 100,  169 => 99,  163 => 97,  158 => 96,  154 => 95,  142 => 94,  138 => 92,  135 => 91,  129 => 89,  60 => 22,  57 => 21,  51 => 18,  46 => 17,  43 => 16,  38 => 13,  35 => 12,  31 => 9,  29 => 10,  11 => 9,);
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
    {% trans \"Edit Image\" %}
{% endblock %}

{% block formButtons %}
    {% trans \"Cancel\" %}, XiboDialogClose()
    {% trans \"Save\" %}, \$(\"#imageEditForm\").submit()
{% endblock %}

{% block formFieldActions %}
    [{
    \"field\": \"scaleTypeId\",
    \"trigger\": \"init\",
    \"value\": \"center\",
    \"operation\": \"equals\",
    \"actions\": {
    \".align-fields\": { \"display\": \"block\" }
    }
    },{
    \"field\": \"scaleTypeId\",
    \"trigger\": \"change\",
    \"value\": \"center\",
    \"operation\": \"equals\",
    \"actions\": {
    \".align-fields\": { \"display\": \"block\" }
    }
    },{
    \"field\": \"scaleTypeId\",
    \"trigger\": \"init\",
    \"value\": \"center\",
    \"operation\": \"not\",
    \"actions\": {
    \".align-fields\": { \"display\": \"none\" }
    }
    },{
    \"field\": \"scaleTypeId\",
    \"trigger\": \"change\",
    \"value\": \"center\",
    \"operation\": \"not\",
    \"actions\": {
    \".align-fields\": { \"display\": \"none\" }
    }
    },{
    \"field\": \"useDuration\",
    \"trigger\": \"init\",
    \"value\": false,
    \"operation\": \"is:checked\",
    \"actions\": {
    \".duration-fields\": { \"display\": \"none\" }
    }
    },{
    \"field\": \"useDuration\",
    \"trigger\": \"change\",
    \"value\": false,
    \"operation\": \"is:checked\",
    \"actions\": {
    \".duration-fields\": { \"display\": \"none\" }
    }
    },{
    \"field\": \"useDuration\",
    \"trigger\": \"init\",
    \"value\": true,
    \"operation\": \"is:checked\",
    \"actions\": {
    \".duration-fields\": { \"display\": \"block\" }
    }
    },{
    \"field\": \"useDuration\",
    \"trigger\": \"change\",
    \"value\": true,
    \"operation\": \"is:checked\",
    \"actions\": {
    \".duration-fields\": { \"display\": \"block\" }
    }
    }]
{% endblock %}

{% block callBack %}mediaEditFormOpen{% endblock %}

{% block formHtml %}
    <div class=\"row\">
        <div class=\"col-md-12\">
            <form id=\"imageEditForm\" class=\"XiboForm form-horizontal\" method=\"put\" action=\"{{ urlFor(\"module.widget.edit\", {id: module.widget.widgetId}) }}\" data-widget-id=\"{{ module.widget.widgetId }}\" data-media-id=\"{{ module.getMediaId() }}\" data-media-editable=\"{{ currentUser.checkEditable(module.getMedia()) }}\" data-valid-extensions=\"{{ validExtensions }}\">
                {% set title %}{% trans \"Name\" %}{% endset %}
                {% set helpText %}{% trans \"An optional name for this widget\" %}{% endset %}
                {{ forms.input(\"name\", title, module.getOption(\"name\"), helpText) }}

                {% set title %}{% trans \"Set a duration?\" %}{% endset %}
                {% set helpText %}{% trans \"Select to provide a specific duration for this Widget\" %}{% endset %}
                {{ forms.checkbox(\"useDuration\", title, module.getUseDuration(), helpText) }}

                {% set title %}{% trans \"Duration\" %}{% endset %}
                {% set helpText %}{% trans \"The duration in seconds this should be displayed\" %}{% endset %}
                {{ forms.number(\"duration\", title, module.getDuration(), helpText, \"duration-fields\", \"required\") }}

                {% set title %}{% trans \"Scale type\" %}{% endset %}
                {% set helpText %}{% trans \"How should this image be scaled?\" %}{% endset %}
                {% set center %}{% trans \"Centre\" %}{% endset %}
                {% set stretch %}{% trans \"Stretch\" %}{% endset %}
                {% set options = [
                { scaleTypeId: \"center\", scaleType: center },
                { scaleTypeId: \"stretch\", scaleType: stretch }
                ] %}
                {{ forms.dropdown(\"scaleTypeId\", \"single\", title, module.getOption(\"scaleType\"), options, \"scaleTypeId\", \"scaleType\", helpText) }}

                {% set title %}{% trans \"Horizontal Align\" %}{% endset %}
                {% set helpText %}{% trans \"How should this image be aligned?\" %}{% endset %}
                {% set left %}{% trans \"Left\" %}{% endset %}
                {% set center %}{% trans \"Centre\" %}{% endset %}
                {% set right %}{% trans \"Right\" %}{% endset %}
                {% set options = [
                { alignId: \"left\", align: left },
                { alignId: \"center\", align: center },
                { alignId: \"right\", align: right }
                ] %}
                {{ forms.dropdown(\"alignId\", \"single\", title, module.getOption(\"align\",\"center\"), options, \"alignId\", \"align\", helpText, \"align-fields\") }}

                {% set title %}{% trans \"Vertical Align\" %}{% endset %}
                {% set helpText %}{% trans \"How should this image be vertically aligned?\" %}{% endset %}
                {% set top %}{% trans \"Top\" %}{% endset %}
                {% set middle %}{% trans \"Middle\" %}{% endset %}
                {% set bottom %}{% trans \"Bottom\" %}{% endset %}
                {% set options = [
                { valignId: \"top\", valign: top },
                { valignId: \"middle\", valign: middle },
                { valignId: \"bottom\", valign: bottom }
                ] %}
                {{ forms.dropdown(\"valignId\", \"single\", title, module.getoption(\"valign\", \"middle\"), options, \"valignId\", \"valign\", helpText, \"align-fields\") }}
            </form>
        </div>
    </div>
{% endblock %}", "image-form-edit.twig", "/var/www/web/modules/image-form-edit.twig");
    }
}
