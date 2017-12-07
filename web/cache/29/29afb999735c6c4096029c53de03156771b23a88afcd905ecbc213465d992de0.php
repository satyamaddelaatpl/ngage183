<?php

/* install-step2.twig */
class __TwigTemplate_eaca86e98cb7356e6c554fdc9f0b0deca8eb5f2389bbe539de3a78453d998e4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base-install.twig", "install-step2.twig", 1);
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
        $context["forms"] = $this->loadTemplate("forms.twig", "install-step2.twig", 2);
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
        echo "            <ul class=\"nav nav-tabs\" role=\"tablist\">
                <li class=\"active\"><a href=\"#new\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 9
        echo __("New");
        echo "</span></a></li>
                <li><a href=\"#existing\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 10
        echo __("Existing");
        echo "</span></a></li>
            </ul>
            <form action=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("install", array("step" => 3)), "html", null, true);
        echo "\" class=\"form-horizontal\" method=\"post\">
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"new\">
                        ";
        // line 15
        ob_start();
        /* xgettext:no-php-format */        echo strtr(__("%themeName% needs to set-up a connection to your MySQL database."), array("%themeName%" => (isset($context["themeName"]) ? $context["themeName"] : null), ));
        $context["message"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 16
        echo "                        ";
        echo $context["forms"]->getmessage((isset($context["message"]) ? $context["message"] : null));
        echo "

                        ";
        // line 18
        ob_start();
        echo __("If you have not yet created an empty database and database user for Xibo to use, and know the user name / password of a MySQL administrator stay on this tab, otherwise click \"Use Existing\".");
        $context["message"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 19
        echo "                        ";
        echo $context["forms"]->getmessage((isset($context["message"]) ? $context["message"] : null));
        echo "

                        ";
        // line 21
        ob_start();
        echo __("Create a new database");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 22
        echo "                        ";
        ob_start();
        echo __("Select to create a new database");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 23
        echo "                        ";
        echo $context["forms"]->getradio("db_create", "db_create1", (isset($context["title"]) ? $context["title"] : null), $this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "db_create", array()), (isset($context["helpText"]) ? $context["helpText"] : null), "", "", 1);
        echo "

                        ";
        // line 25
        ob_start();
        echo __("Host");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 26
        echo "                        ";
        ob_start();
        echo __("Please enter the hostname for the MySQL server. This is usually localhost.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 27
        echo "                        ";
        echo $context["forms"]->getinput("host", (isset($context["title"]) ? $context["title"] : null), $this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "new_db_host", array()), (isset($context["helpText"]) ? $context["helpText"] : null));
        echo "

                        ";
        // line 29
        ob_start();
        echo __("Admin Username");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 30
        echo "                        ";
        ob_start();
        echo __("Please enter the user name of an account that has administrator privileges on the MySQL server.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 31
        echo "                        ";
        echo $context["forms"]->getinput("admin_username", (isset($context["title"]) ? $context["title"] : null), $this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "db_admin_user", array()), (isset($context["helpText"]) ? $context["helpText"] : null));
        echo "

                        ";
        // line 33
        ob_start();
        echo __("Admin Password");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 34
        echo "                        ";
        ob_start();
        echo __("Please enter password for the Admin account.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 35
        echo "                        ";
        echo $context["forms"]->getpassword("admin_password", (isset($context["title"]) ? $context["title"] : null), $this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "db_admin_pass", array()), (isset($context["helpText"]) ? $context["helpText"] : null));
        echo "

                        ";
        // line 37
        ob_start();
        echo __("Database Name");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 38
        echo "                        ";
        ob_start();
        echo __("Please enter the name of the database that should be created.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 39
        echo "                        ";
        echo $context["forms"]->getinput("db_name", (isset($context["title"]) ? $context["title"] : null), $this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "new_db_name", array()), (isset($context["helpText"]) ? $context["helpText"] : null));
        echo "

                        ";
        // line 41
        ob_start();
        echo __("Database Username");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 42
        echo "                        ";
        ob_start();
        echo __("Please enter the name of the database user that should be created.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 43
        echo "                        ";
        echo $context["forms"]->getinput("db_username", (isset($context["title"]) ? $context["title"] : null), $this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "new_db_user", array()), (isset($context["helpText"]) ? $context["helpText"] : null));
        echo "

                        ";
        // line 45
        ob_start();
        echo __("Database Password");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 46
        echo "                        ";
        ob_start();
        echo __("Please enter a password for this user.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 47
        echo "                        ";
        echo $context["forms"]->getpassword("db_password", (isset($context["title"]) ? $context["title"] : null), $this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "new_db_pass", array()), (isset($context["helpText"]) ? $context["helpText"] : null));
        echo "
                    </div>
                    <div class=\"tab-pane\" id=\"existing\">
                        ";
        // line 50
        ob_start();
        echo __("Use an existing database");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 51
        echo "                        ";
        ob_start();
        echo __("Select to use an existing database. Please note that when you use an existing database it must be empty of all other contents.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 52
        echo "                        ";
        echo $context["forms"]->getradio("db_create", "db_create2", (isset($context["title"]) ? $context["title"] : null), $this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "db_create", array()), (isset($context["helpText"]) ? $context["helpText"] : null), "", "", 2);
        echo "

                        ";
        // line 54
        ob_start();
        echo __("Host");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 55
        echo "                        ";
        ob_start();
        echo __("Please enter the hostname for the MySQL server. This is usually localhost.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 56
        echo "                        ";
        echo $context["forms"]->getinput("existing_host", (isset($context["title"]) ? $context["title"] : null), $this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "existing_db_host", array()), (isset($context["helpText"]) ? $context["helpText"] : null));
        echo "

                        ";
        // line 58
        ob_start();
        echo __("Database Name");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 59
        echo "                        ";
        ob_start();
        echo __("Please enter the name of the database that should be used.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 60
        echo "                        ";
        echo $context["forms"]->getinput("existing_db_name", (isset($context["title"]) ? $context["title"] : null), $this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "existing_db_name", array()), (isset($context["helpText"]) ? $context["helpText"] : null));
        echo "

                        ";
        // line 62
        ob_start();
        echo __("Database Username");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 63
        echo "                        ";
        ob_start();
        echo __("Please enter the name of the database user that should be used.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 64
        echo "                        ";
        echo $context["forms"]->getinput("existing_db_username", (isset($context["title"]) ? $context["title"] : null), $this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "existing_db_user", array()), (isset($context["helpText"]) ? $context["helpText"] : null));
        echo "

                        ";
        // line 66
        ob_start();
        echo __("Database Password");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 67
        echo "                        ";
        ob_start();
        echo __("Please enter a password for this user.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 68
        echo "                        ";
        echo $context["forms"]->getpassword("existing_db_password", (isset($context["title"]) ? $context["title"] : null), $this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "existing_db_pass", array()), (isset($context["helpText"]) ? $context["helpText"] : null));
        echo "
                    </div>
                </div>

                ";
        // line 72
        ob_start();
        echo __("Next");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 73
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
        return "install-step2.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 73,  261 => 72,  253 => 68,  248 => 67,  244 => 66,  238 => 64,  233 => 63,  229 => 62,  223 => 60,  218 => 59,  214 => 58,  208 => 56,  203 => 55,  199 => 54,  193 => 52,  188 => 51,  184 => 50,  177 => 47,  172 => 46,  168 => 45,  162 => 43,  157 => 42,  153 => 41,  147 => 39,  142 => 38,  138 => 37,  132 => 35,  127 => 34,  123 => 33,  117 => 31,  112 => 30,  108 => 29,  102 => 27,  97 => 26,  93 => 25,  87 => 23,  82 => 22,  78 => 21,  72 => 19,  68 => 18,  62 => 16,  58 => 15,  52 => 12,  47 => 10,  43 => 9,  40 => 8,  38 => 7,  34 => 5,  31 => 4,  27 => 1,  25 => 2,  11 => 1,);
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
            <ul class=\"nav nav-tabs\" role=\"tablist\">
                <li class=\"active\"><a href=\"#new\" role=\"tab\" data-toggle=\"tab\"><span>{% trans \"New\" %}</span></a></li>
                <li><a href=\"#existing\" role=\"tab\" data-toggle=\"tab\"><span>{% trans \"Existing\" %}</span></a></li>
            </ul>
            <form action=\"{{ urlFor(\"install\", {step: 3}) }}\" class=\"form-horizontal\" method=\"post\">
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"new\">
                        {% set message %}{% trans %}{{ themeName }} needs to set-up a connection to your MySQL database.{% endtrans %}{% endset %}
                        {{ forms.message(message) }}

                        {% set message %}{% trans \"If you have not yet created an empty database and database user for Xibo to use, and know the user name / password of a MySQL administrator stay on this tab, otherwise click \\\"Use Existing\\\".\" %}{% endset %}
                        {{ forms.message(message) }}

                        {% set title %}{% trans \"Create a new database\" %}{% endset %}
                        {% set helpText %}{% trans \"Select to create a new database\" %}{% endset %}
                        {{ forms.radio(\"db_create\", \"db_create1\", title, flash.db_create, helpText, \"\", \"\", 1) }}

                        {% set title %}{% trans \"Host\" %}{% endset %}
                        {% set helpText %}{% trans \"Please enter the hostname for the MySQL server. This is usually localhost.\" %}{% endset %}
                        {{ forms.input(\"host\",  title, flash.new_db_host, helpText) }}

                        {% set title %}{% trans \"Admin Username\" %}{% endset %}
                        {% set helpText %}{% trans \"Please enter the user name of an account that has administrator privileges on the MySQL server.\" %}{% endset %}
                        {{ forms.input(\"admin_username\",  title, flash.db_admin_user, helpText) }}

                        {% set title %}{% trans \"Admin Password\" %}{% endset %}
                        {% set helpText %}{% trans \"Please enter password for the Admin account.\" %}{% endset %}
                        {{ forms.password(\"admin_password\",  title, flash.db_admin_pass, helpText) }}

                        {% set title %}{% trans \"Database Name\" %}{% endset %}
                        {% set helpText %}{% trans \"Please enter the name of the database that should be created.\" %}{% endset %}
                        {{ forms.input(\"db_name\",  title, flash.new_db_name, helpText) }}

                        {% set title %}{% trans \"Database Username\" %}{% endset %}
                        {% set helpText %}{% trans \"Please enter the name of the database user that should be created.\" %}{% endset %}
                        {{ forms.input(\"db_username\",  title, flash.new_db_user, helpText) }}

                        {% set title %}{% trans \"Database Password\" %}{% endset %}
                        {% set helpText %}{% trans \"Please enter a password for this user.\" %}{% endset %}
                        {{ forms.password(\"db_password\",  title, flash.new_db_pass, helpText) }}
                    </div>
                    <div class=\"tab-pane\" id=\"existing\">
                        {% set title %}{% trans \"Use an existing database\" %}{% endset %}
                        {% set helpText %}{% trans \"Select to use an existing database. Please note that when you use an existing database it must be empty of all other contents.\" %}{% endset %}
                        {{ forms.radio(\"db_create\", \"db_create2\", title, flash.db_create, helpText, \"\", \"\", 2) }}

                        {% set title %}{% trans \"Host\" %}{% endset %}
                        {% set helpText %}{% trans \"Please enter the hostname for the MySQL server. This is usually localhost.\" %}{% endset %}
                        {{ forms.input(\"existing_host\",  title, flash.existing_db_host, helpText) }}

                        {% set title %}{% trans \"Database Name\" %}{% endset %}
                        {% set helpText %}{% trans \"Please enter the name of the database that should be used.\" %}{% endset %}
                        {{ forms.input(\"existing_db_name\",  title, flash.existing_db_name, helpText) }}

                        {% set title %}{% trans \"Database Username\" %}{% endset %}
                        {% set helpText %}{% trans \"Please enter the name of the database user that should be used.\" %}{% endset %}
                        {{ forms.input(\"existing_db_username\",  title, flash.existing_db_user, helpText) }}

                        {% set title %}{% trans \"Database Password\" %}{% endset %}
                        {% set helpText %}{% trans \"Please enter a password for this user.\" %}{% endset %}
                        {{ forms.password(\"existing_db_password\",  title, flash.existing_db_pass, helpText) }}
                    </div>
                </div>

                {% set title %}{% trans \"Next\" %}{% endset %}
                {{ forms.button(title, \"submit\") }}
            </form>
        </div>
    </div>
{% endblock %}", "install-step2.twig", "/var/www/web/views/install-step2.twig");
    }
}
