<?php

/* install-step4.twig */
class __TwigTemplate_f7e97effaf3e7dbd70d6d06b71413d9b87f47cd3ae6cb3871045b2c567c6bdc6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base-install.twig", "install-step4.twig", 1);
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
        $context["forms"] = $this->loadTemplate("forms.twig", "install-step4.twig", 2);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("install", array("step" => 5)), "html", null, true);
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
        echo __("Admin Username");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 15
        echo "                ";
        ob_start();
        echo __("Please enter a user name for the first administrator account.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 16
        echo "                ";
        echo $context["forms"]->getinput("admin_username", (isset($context["title"]) ? $context["title"] : null), "", (isset($context["helpText"]) ? $context["helpText"] : null));
        echo "

                ";
        // line 18
        ob_start();
        echo __("Admin Password");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 19
        echo "                ";
        ob_start();
        echo __("Please enter a password for this user. This user will have full access to the system");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 20
        echo "                ";
        echo $context["forms"]->getpassword("admin_password", (isset($context["title"]) ? $context["title"] : null), $this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "db_admin_pass", array()), (isset($context["helpText"]) ? $context["helpText"] : null));
        echo "

                ";
        // line 22
        ob_start();
        echo __("Next");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 23
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
        return "install-step4.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 23,  88 => 22,  82 => 20,  77 => 19,  73 => 18,  67 => 16,  62 => 15,  58 => 14,  52 => 12,  48 => 11,  43 => 9,  40 => 8,  38 => 7,  34 => 5,  31 => 4,  27 => 1,  25 => 2,  11 => 1,);
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

            <form action=\"{{ urlFor(\"install\", {step: 5}) }}\" class=\"form-horizontal\" method=\"post\">

                {% set message %}{% trans %}{{ themeName }} needs an administrator user account to be the first user account that has access to the CMS. Please enter your chosen details below.{% endtrans %}{% endset %}
                {{ forms.message(message) }}

                {% set title %}{% trans \"Admin Username\" %}{% endset %}
                {% set helpText %}{% trans \"Please enter a user name for the first administrator account.\" %}{% endset %}
                {{ forms.input(\"admin_username\",  title, \"\", helpText) }}

                {% set title %}{% trans \"Admin Password\" %}{% endset %}
                {% set helpText %}{% trans \"Please enter a password for this user. This user will have full access to the system\" %}{% endset %}
                {{ forms.password(\"admin_password\",  title, flash.db_admin_pass, helpText) }}

                {% set title %}{% trans \"Next\" %}{% endset %}
                {{ forms.button(title, \"submit\") }}
            </form>
        </div>
    </div>
{% endblock %}", "install-step4.twig", "/var/www/web/views/install-step4.twig");
    }
}
