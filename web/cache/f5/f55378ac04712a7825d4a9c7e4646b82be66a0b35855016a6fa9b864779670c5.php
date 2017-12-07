<?php

/* layout-form-add.twig */
class __TwigTemplate_2a4629e73e7e46ac5f99a138c22c6f93c725f7bcfd5bfecf496ee4854d12cda3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 9
        $this->parent = $this->loadTemplate("form-base.twig", "layout-form-add.twig", 9);
        $this->blocks = array(
            'formTitle' => array($this, 'block_formTitle'),
            'formButtons' => array($this, 'block_formButtons'),
            'callBack' => array($this, 'block_callBack'),
            'formFieldActions' => array($this, 'block_formFieldActions'),
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
        $context["forms"] = $this->loadTemplate("forms.twig", "layout-form-add.twig", 10);
        // line 9
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_formTitle($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        echo __("Add Layout");
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
        echo ", \$(\"#layoutAddForm\").submit()
";
    }

    // line 22
    public function block_callBack($context, array $blocks = array())
    {
        echo "layoutAddFormOpen";
    }

    // line 24
    public function block_formFieldActions($context, array $blocks = array())
    {
        // line 25
        echo "    [{
    \"field\": \"layoutId\",
    \"trigger\": \"change\",
    \"value\": 0,
    \"operation\": \"equals\",
    \"actions\": {
        \".resolution-group\": { \"display\": \"block\" }
    }
    },{
    \"field\": \"layoutId\",
    \"trigger\": \"change\",
    \"value\": 0,
    \"operation\": \"not\",
    \"actions\": {
        \".resolution-group\": { \"display\": \"none\" }
    }
    }]
";
    }

    // line 44
    public function block_formHtml($context, array $blocks = array())
    {
        // line 45
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <ul class=\"nav nav-tabs\" role=\"tablist\">
                <li class=\"active\"><a href=\"#general\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 48
        echo __("General");
        echo "</span></a></li>
                <li><a href=\"#description\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 49
        echo __("Description");
        echo "</span></a></li>
            </ul>
            <form id=\"layoutAddForm\" class=\"form-horizontal\" method=\"post\" action=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("layout.add"), "html", null, true);
        echo "\" data-redirect=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("layout.designer"), "html", null, true);
        echo "\">
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"general\">
                        ";
        // line 54
        ob_start();
        echo __("Name");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 55
        echo "                        ";
        ob_start();
        echo __("The Name of the Layout - (1 - 50 characters)");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 56
        echo "                        ";
        echo $context["forms"]->getinput("name", (isset($context["title"]) ? $context["title"] : null), "", (isset($context["helpText"]) ? $context["helpText"] : null));
        echo "

                        ";
        // line 58
        ob_start();
        echo __("Tags");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 59
        echo "                        ";
        ob_start();
        echo __("Tags for this layout - used when searching for it. Comma delimited. (1 - 250 characters)");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 60
        echo "                        ";
        echo $context["forms"]->getinputWithTags("tags", (isset($context["title"]) ? $context["title"] : null), "", (isset($context["helpText"]) ? $context["helpText"] : null));
        echo "

                        ";
        // line 62
        ob_start();
        echo __("Template");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 63
        echo "                        ";
        ob_start();
        echo __("Optionally choose a template you have saved before.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 64
        echo "                        ";
        $context["layouts"] = twig_array_merge(array(0 => array("layoutId" => null, "layout" => "")), (isset($context["layouts"]) ? $context["layouts"] : null));
        // line 65
        echo "                        ";
        echo $context["forms"]->getdropdown("layoutId", "single", (isset($context["title"]) ? $context["title"] : null), "", (isset($context["layouts"]) ? $context["layouts"] : null), "layoutId", "layout", (isset($context["helpText"]) ? $context["helpText"] : null));
        echo "

                        ";
        // line 67
        ob_start();
        echo __("Resolution");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 68
        echo "                        ";
        ob_start();
        echo __("Choose the resolution this Layout should be designed for.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 69
        echo "                        ";
        echo $context["forms"]->getdropdown("resolutionId", "single", (isset($context["title"]) ? $context["title"] : null), "", (isset($context["resolutions"]) ? $context["resolutions"] : null), "resolutionId", "resolution", (isset($context["helpText"]) ? $context["helpText"] : null), "resolution-group");
        echo "
                    </div>
                    <div class=\"tab-pane\" id=\"description\">
                        ";
        // line 72
        ob_start();
        echo __("Description");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 73
        echo "                        ";
        ob_start();
        echo __("An optional description of the Layout. (1 - 250 characters)");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 74
        echo "                        ";
        echo $context["forms"]->gettextarea("description", (isset($context["title"]) ? $context["title"] : null), "", (isset($context["helpText"]) ? $context["helpText"] : null));
        echo "
                    </div>
                </div>
            </form>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "layout-form-add.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 74,  186 => 73,  182 => 72,  175 => 69,  170 => 68,  166 => 67,  160 => 65,  157 => 64,  152 => 63,  148 => 62,  142 => 60,  137 => 59,  133 => 58,  127 => 56,  122 => 55,  118 => 54,  110 => 51,  105 => 49,  101 => 48,  96 => 45,  93 => 44,  72 => 25,  69 => 24,  63 => 22,  57 => 19,  53 => 18,  46 => 17,  43 => 16,  38 => 13,  35 => 12,  31 => 9,  29 => 10,  11 => 9,);
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
    {% trans \"Add Layout\" %}
{% endblock %}

{% block formButtons %}
    {% trans \"Help\" %}, XiboHelpRender(\"{{ help }}\")
    {% trans \"Cancel\" %}, XiboDialogClose()
    {% trans \"Save\" %}, \$(\"#layoutAddForm\").submit()
{% endblock %}

{% block callBack %}layoutAddFormOpen{% endblock %}

{% block formFieldActions %}
    [{
    \"field\": \"layoutId\",
    \"trigger\": \"change\",
    \"value\": 0,
    \"operation\": \"equals\",
    \"actions\": {
        \".resolution-group\": { \"display\": \"block\" }
    }
    },{
    \"field\": \"layoutId\",
    \"trigger\": \"change\",
    \"value\": 0,
    \"operation\": \"not\",
    \"actions\": {
        \".resolution-group\": { \"display\": \"none\" }
    }
    }]
{% endblock %}

{% block formHtml %}
    <div class=\"row\">
        <div class=\"col-md-12\">
            <ul class=\"nav nav-tabs\" role=\"tablist\">
                <li class=\"active\"><a href=\"#general\" role=\"tab\" data-toggle=\"tab\"><span>{% trans \"General\" %}</span></a></li>
                <li><a href=\"#description\" role=\"tab\" data-toggle=\"tab\"><span>{% trans \"Description\" %}</span></a></li>
            </ul>
            <form id=\"layoutAddForm\" class=\"form-horizontal\" method=\"post\" action=\"{{ urlFor(\"layout.add\") }}\" data-redirect=\"{{ urlFor(\"layout.designer\") }}\">
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"general\">
                        {% set title %}{% trans \"Name\" %}{% endset %}
                        {% set helpText %}{% trans \"The Name of the Layout - (1 - 50 characters)\" %}{% endset %}
                        {{ forms.input(\"name\", title, \"\", helpText) }}

                        {% set title %}{% trans \"Tags\" %}{% endset %}
                        {% set helpText %}{% trans \"Tags for this layout - used when searching for it. Comma delimited. (1 - 250 characters)\" %}{% endset %}
                        {{ forms.inputWithTags(\"tags\", title, \"\", helpText) }}

                        {% set title %}{% trans \"Template\" %}{% endset %}
                        {% set helpText %}{% trans \"Optionally choose a template you have saved before.\" %}{% endset %}
                        {% set layouts = [{layoutId: null, layout: \"\"}]|merge(layouts) %}
                        {{ forms.dropdown(\"layoutId\", \"single\", title, \"\", layouts, \"layoutId\", \"layout\", helpText) }}

                        {% set title %}{% trans \"Resolution\" %}{% endset %}
                        {% set helpText %}{% trans \"Choose the resolution this Layout should be designed for.\" %}{% endset %}
                        {{ forms.dropdown(\"resolutionId\", \"single\", title, \"\", resolutions, \"resolutionId\", \"resolution\", helpText, \"resolution-group\") }}
                    </div>
                    <div class=\"tab-pane\" id=\"description\">
                        {% set title %}{% trans \"Description\" %}{% endset %}
                        {% set helpText %}{% trans \"An optional description of the Layout. (1 - 250 characters)\" %}{% endset %}
                        {{ forms.textarea(\"description\", title, \"\", helpText) }}
                    </div>
                </div>
            </form>
        </div>
    </div>
{% endblock %}", "layout-form-add.twig", "/var/www/web/views/layout-form-add.twig");
    }
}
