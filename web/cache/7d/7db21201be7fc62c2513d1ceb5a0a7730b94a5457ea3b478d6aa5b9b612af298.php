<?php

/* install-step6.twig */
class __TwigTemplate_c9f6848f34ecfbfd3082e509ce1387889917eaa1f1cb7f9e8b40e6c677a3b44a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base-install.twig", "install-step6.twig", 1);
        $this->blocks = array(
            'stepContent' => array($this, 'block_stepContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base-install.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["forms"] = $this->loadTemplate("forms.twig", "install-step6.twig", 2);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_stepContent($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            ";
        // line 7
        $context["themeName"] = $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "getThemeConfig", array(0 => "app_name"), "method");
        // line 8
        echo "
            <form action=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("install", array("step" => 7)), "html", null, true);
        echo "\" class=\"form-horizontal\" method=\"post\">

                ";
        // line 11
        ob_start();
        /* xgettext:no-php-format */        echo strtr(__("%themeName% needs an administrator user account to be the first user account that has access to the CMS. Please enter your chosen details below."), array("%themeName%" => (isset($context["themeName"]) ? $context["themeName"] : null), ));
        $context["message"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 12
        echo "                ";
        echo $context["forms"]->getmessage((isset($context["message"]) ? $context["message"] : null));
        echo "

                ";
        // line 14
        ob_start();
        echo __("Library Location");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 15
        echo "                ";
        ob_start();
        /* xgettext:no-php-format */        echo strtr(__("%themeName% needs somewhere to store the things you upload to be shown. Ideally, this should be somewhere outside the root of your web server - that is such that is not accessible by a web browser. Please input the full path to this folder. If the folder does not already exist, we will attempt to create it for you."), array("%themeName%" => (isset($context["themeName"]) ? $context["themeName"] : null), ));
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 16
        echo "                ";
        echo $context["forms"]->getinput("library_location", (isset($context["title"]) ? $context["title"] : null), "", (isset($context["helpText"]) ? $context["helpText"] : null));
        echo "

                ";
        // line 18
        ob_start();
        echo __("Server Key");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 19
        echo "                ";
        ob_start();
        /* xgettext:no-php-format */        echo strtr(__("%themeName% needs you to choose a \"key\". This will be required each time you set-up a new client. It should be complicated, and hard to remember. It is visible in the CMS interface, so it need not be written down separately."), array("%themeName%" => (isset($context["themeName"]) ? $context["themeName"] : null), ));
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 20
        echo "                ";
        echo $context["forms"]->getinput("server_key", (isset($context["title"]) ? $context["title"] : null), (isset($context["serverKey"]) ? $context["serverKey"] : null), (isset($context["helpText"]) ? $context["helpText"] : null));
        echo "

                ";
        // line 22
        ob_start();
        echo __("Statistics");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 23
        echo "                ";
        ob_start();
        /* xgettext:no-php-format */        echo strtr(__("We'd love to know you're running %theme_name%. If you're happy for us to collect anonymous statistics (version number, number of displays) then please leave the box ticked. Please un tick the box if your server does not have direct access to the internet."), array("%theme_name%" => (isset($context["theme_name"]) ? $context["theme_name"] : null), ));
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 24
        echo "                ";
        echo $context["forms"]->getcheckbox("stats", (isset($context["title"]) ? $context["title"] : null), 1, (isset($context["helpText"]) ? $context["helpText"] : null));
        echo "

                ";
        // line 26
        ob_start();
        echo __("Next");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 27
        echo "                ";
        echo $context["forms"]->getbutton((isset($context["title"]) ? $context["title"] : null), "submit");
        echo "
            </form>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "install-step6.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 27,  103 => 26,  97 => 24,  92 => 23,  88 => 22,  82 => 20,  77 => 19,  73 => 18,  67 => 16,  62 => 15,  58 => 14,  52 => 12,  48 => 11,  43 => 9,  40 => 8,  38 => 7,  34 => 5,  31 => 4,  27 => 1,  25 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base-install.twig\" %}
{% import \"forms.twig\" as forms %}

{% block stepContent %}
    <div class=\"row\">
        <div class=\"col-md-12\">
            {% set themeName = theme.getThemeConfig(\"app_name\") %}

            <form action=\"{{ urlFor(\"install\", {step: 7}) }}\" class=\"form-horizontal\" method=\"post\">

                {% set message %}{% trans %}{{ themeName }} needs an administrator user account to be the first user account that has access to the CMS. Please enter your chosen details below.{% endtrans %}{% endset %}
                {{ forms.message(message) }}

                {% set title %}{% trans \"Library Location\" %}{% endset %}
                {% set helpText %}{% trans %}{{ themeName }} needs somewhere to store the things you upload to be shown. Ideally, this should be somewhere outside the root of your web server - that is such that is not accessible by a web browser. Please input the full path to this folder. If the folder does not already exist, we will attempt to create it for you.{% endtrans %}{% endset %}
                {{ forms.input(\"library_location\",  title, \"\", helpText) }}

                {% set title %}{% trans \"Server Key\" %}{% endset %}
                {% set helpText %}{% trans %}{{ themeName }} needs you to choose a \"key\". This will be required each time you set-up a new client. It should be complicated, and hard to remember. It is visible in the CMS interface, so it need not be written down separately.{% endtrans %}{% endset %}
                {{ forms.input(\"server_key\",  title, serverKey, helpText) }}

                {% set title %}{% trans \"Statistics\" %}{% endset %}
                {% set helpText %}{% trans %}We'd love to know you're running {{ theme_name }}. If you're happy for us to collect anonymous statistics (version number, number of displays) then please leave the box ticked. Please un tick the box if your server does not have direct access to the internet.{% endtrans %}{% endset %}
                {{ forms.checkbox(\"stats\",  title, 1, helpText) }}

                {% set title %}{% trans \"Next\" %}{% endset %}
                {{ forms.button(title, \"submit\") }}
            </form>
        </div>
    </div>
{% endblock %}", "install-step6.twig", "/var/www/web/views/install-step6.twig");
    }
}
