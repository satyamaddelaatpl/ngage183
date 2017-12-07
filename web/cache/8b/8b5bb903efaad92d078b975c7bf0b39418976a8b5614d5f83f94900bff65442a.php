<?php

/* base-install.twig */
class __TwigTemplate_622d6718dd7721de1849bf94b249740ab6b9baa23eb579464bf66c97a028ef45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'jumboTron' => array($this, 'block_jumboTron'),
            'stepContent' => array($this, 'block_stepContent'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <title>";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "getThemeConfig", array(0 => "theme_title"), "method"), "html", null, true);
        echo "</title>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"token\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["csrfToken"]) ? $context["csrfToken"] : null), "html", null, true);
        echo "\"/>
        <link rel=\"shortcut icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "img/favicon.ico"), "method"), "html", null, true);
        echo "\" />

        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "libraries/bootstrap/css/bootstrap.min.css"), "method"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "libraries/bootstrap/css/bootstrap-theme.min.css"), "method"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "libraries/font-awesome/css/font-awesome.min.css"), "method"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "css/install.css"), "method"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
    </head>

    <body>
        <!-- Copyright 2006-2015 Daniel Garner. Part of the Xibo Open Source Digital Signage Solution. Released under the AGPLv3 or later. -->

        <div class=\"navbar navbar-inverse navbar-fixed-top\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    ";
        // line 23
        $context["themeName"] = $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "getThemeConfig", array(0 => "app_name"), "method");
        // line 24
        echo "                    ";
        ob_start();
        /* xgettext:no-php-format */        echo strtr(__("%themeName% Installation"), array("%themeName%" => (isset($context["themeName"]) ? $context["themeName"] : null), ));
        $context["header"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 25
        echo "                    <a class=\"navbar-brand\" href=\"#\">";
        echo twig_escape_filter($this->env, (isset($context["header"]) ? $context["header"] : null), "html", null, true);
        echo "</a>
                </div>
            </div>
        </div>

        ";
        // line 30
        $this->displayBlock('jumboTron', $context, $blocks);
        // line 33
        echo "
        <div class=\"container main-container\">
            ";
        // line 35
        if ($this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "error", array())) {
            // line 36
            echo "                <div class=\"alert alert-danger\">
                    ";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "error", array()), "html", null, true);
            echo "
                </div>
            ";
        }
        // line 40
        echo "
            ";
        // line 41
        $this->displayBlock('stepContent', $context, $blocks);
        // line 44
        echo "        </div>

        <div class=\"footer\">
            <div class=\"container text-center\">
                <img class=\"logo\" src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "img/xibologo.png"), "method"), "html", null, true);
        echo "\">
            </div>
        </div>

        <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "libraries/jquery/jquery-1.11.1.min.js"), "method"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "libraries/jquery/jquery.validate.min.js"), "method"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "libraries/bootstrap/js/bootstrap.min.js"), "method"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "js/install.js"), "method"), "html", null, true);
        echo "\"></script>
    </body>
</html>";
    }

    // line 30
    public function block_jumboTron($context, array $blocks = array())
    {
        // line 31
        echo "
        ";
    }

    // line 41
    public function block_stepContent($context, array $blocks = array())
    {
        // line 42
        echo "
            ";
    }

    public function getTemplateName()
    {
        return "base-install.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 42,  144 => 41,  139 => 31,  136 => 30,  129 => 55,  125 => 54,  121 => 53,  117 => 52,  110 => 48,  104 => 44,  102 => 41,  99 => 40,  93 => 37,  90 => 36,  88 => 35,  84 => 33,  82 => 30,  73 => 25,  68 => 24,  66 => 23,  54 => 14,  50 => 13,  46 => 12,  42 => 11,  37 => 9,  33 => 8,  26 => 4,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <title>{{ theme.getThemeConfig(\"theme_title\") }}</title>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"token\" content=\"{{ csrfToken }}\"/>
        <link rel=\"shortcut icon\" href=\"{{ theme.uri(\"img/favicon.ico\") }}\" />

        <link href=\"{{ theme.uri(\"libraries/bootstrap/css/bootstrap.min.css\") }}\" rel=\"stylesheet\" media=\"screen\">
        <link href=\"{{ theme.uri(\"libraries/bootstrap/css/bootstrap-theme.min.css\") }}\" rel=\"stylesheet\" media=\"screen\">
        <link href=\"{{ theme.uri(\"libraries/font-awesome/css/font-awesome.min.css\") }}\" rel=\"stylesheet\">
        <link href=\"{{ theme.uri(\"css/install.css\") }}\" rel=\"stylesheet\" media=\"screen\">
    </head>

    <body>
        <!-- Copyright 2006-2015 Daniel Garner. Part of the Xibo Open Source Digital Signage Solution. Released under the AGPLv3 or later. -->

        <div class=\"navbar navbar-inverse navbar-fixed-top\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    {% set themeName = theme.getThemeConfig(\"app_name\") %}
                    {% set header %}{% trans %}{{ themeName }} Installation{% endtrans %}{% endset %}
                    <a class=\"navbar-brand\" href=\"#\">{{ header }}</a>
                </div>
            </div>
        </div>

        {% block jumboTron %}

        {% endblock %}

        <div class=\"container main-container\">
            {% if flash.error %}
                <div class=\"alert alert-danger\">
                    {{ flash.error }}
                </div>
            {% endif %}

            {% block stepContent %}

            {% endblock %}
        </div>

        <div class=\"footer\">
            <div class=\"container text-center\">
                <img class=\"logo\" src=\"{{ theme.uri(\"img/xibologo.png\") }}\">
            </div>
        </div>

        <script src=\"{{ theme.uri(\"libraries/jquery/jquery-1.11.1.min.js\") }}\"></script>
        <script src=\"{{ theme.uri(\"libraries/jquery/jquery.validate.min.js\") }}\"></script>
        <script src=\"{{ theme.uri(\"libraries/bootstrap/js/bootstrap.min.js\") }}\"></script>
        <script src=\"{{ theme.uri(\"js/install.js\") }}\"></script>
    </body>
</html>", "base-install.twig", "/var/www/web/views/base-install.twig");
    }
}
