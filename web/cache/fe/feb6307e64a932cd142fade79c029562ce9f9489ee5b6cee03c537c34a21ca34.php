<?php

/* install-step1.twig */
class __TwigTemplate_521905d5878199f7e54cf529f0fe776636d9418cf41623311532774cf32c833e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base-install.twig", "install-step1.twig", 1);
        $this->blocks = array(
            'jumboTron' => array($this, 'block_jumboTron'),
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
        $context["forms"] = $this->loadTemplate("forms.twig", "install-step1.twig", 2);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_jumboTron($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"jumbotron\">
        <div class=\"container\">
            ";
        // line 7
        $context["themeName"] = $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "getThemeConfig", array(0 => "app_name"), "method");
        // line 8
        echo "            ";
        ob_start();
        /* xgettext:no-php-format */        echo strtr(__("Welcome to the %themeName% Installation"), array("%themeName%" => (isset($context["themeName"]) ? $context["themeName"] : null), ));
        $context["header"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 9
        echo "            <h1>";
        echo twig_escape_filter($this->env, (isset($context["header"]) ? $context["header"] : null), "html", null, true);
        echo "</h1>
            <p>";
        // line 10
        /* xgettext:no-php-format */        echo strtr(__("Thank you for choosing %themeName%. This installation wizard will take you through
                setting up %themeName% one step at a time. There are 6 steps in total, the first one is below."), array("%themeName%" => (isset($context["themeName"]) ? $context["themeName"] : null), "%themeName%" =>         // line 11
(isset($context["themeName"]) ? $context["themeName"] : null), ));
        // line 12
        echo "            </p>
            <p><a class=\"btn btn-primary btn-lg\" role=\"button\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "getThemeConfig", array(0 => "cms_install_url"), "method"), "html", null, true);
        echo "\" target=\"_blank\">";
        echo __("Installation guide");
        echo " &raquo;</a></p>
        </div>
    </div>
";
    }

    // line 18
    public function block_stepContent($context, array $blocks = array())
    {
        // line 19
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            ";
        // line 21
        $context["themeName"] = $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "getThemeConfig", array(0 => "app_name"), "method");
        // line 22
        echo "            <p>";
        /* xgettext:no-php-format */        echo strtr(__("First we need to check if your server meets %themeName%'s requirements."), array("%themeName%" => (isset($context["themeName"]) ? $context["themeName"] : null), ));
        echo "</p>
            <table id=\"sessions\" class=\"table table-striped\">
                <thead>
                <tr>
                    <th>";
        // line 26
        echo __("Item");
        echo "</th>
                    <th>";
        // line 27
        echo __("Status");
        echo "</th>
                    <th>";
        // line 28
        echo __("Advice");
        echo "</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "CheckEnvironment", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["check"]) {
            // line 33
            echo "                    <tr>
                        <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["check"], "item", array()), "html", null, true);
            echo "</td>
                        <td>
                            ";
            // line 36
            if (($this->getAttribute($context["check"], "status", array()) == 0)) {
                // line 37
                echo "                                <span class=\"fa fa-times\"></span>
                            ";
            } elseif (($this->getAttribute(            // line 38
$context["check"], "status", array()) == 1)) {
                // line 39
                echo "                                <span class=\"fa fa-check\"></span>
                            ";
            } else {
                // line 41
                echo "                                <span class=\"fa fa-exclamation\"></span>
                            ";
            }
            // line 43
            echo "                        </td>
                        <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["check"], "advice", array()), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['check'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                </tbody>
            </table>
            ";
        // line 49
        if ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "EnvironmentFault", array(), "method")) {
            // line 50
            echo "                <form action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("install", array("step" => 1)), "html", null, true);
            echo "\" class=\"form-inline\">
                    ";
            // line 51
            ob_start();
            echo __("Retest");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 52
            echo "                    ";
            echo $context["forms"]->getbutton((isset($context["title"]) ? $context["title"] : null), "submit");
            echo "
                </form>
            ";
        } elseif ($this->getAttribute(        // line 54
(isset($context["config"]) ? $context["config"] : null), "EnvironmentWarning", array(), "method")) {
            // line 55
            echo "                <form action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("install", array("step" => 2)), "html", null, true);
            echo "\" class=\"form-inline\">
                    ";
            // line 56
            ob_start();
            echo __("Retest");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 57
            echo "                    ";
            $context["link"] = $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("install", array("step" => 1));
            // line 58
            echo "                    ";
            echo $context["forms"]->getbutton((isset($context["title"]) ? $context["title"] : null), "link", (isset($context["link"]) ? $context["link"] : null));
            echo "

                    ";
            // line 60
            ob_start();
            echo __("Next");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 61
            echo "                    ";
            echo $context["forms"]->getbutton((isset($context["title"]) ? $context["title"] : null), "submit", (isset($context["link"]) ? $context["link"] : null));
            echo "
                </form>
            ";
        } else {
            // line 64
            echo "                <form action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("install", array("step" => 2)), "html", null, true);
            echo "\" class=\"form-inline\">
                    ";
            // line 65
            ob_start();
            echo __("Next");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 66
            echo "                    ";
            echo $context["forms"]->getbutton((isset($context["title"]) ? $context["title"] : null), "submit");
            echo "
                </form>
            ";
        }
        // line 69
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "install-step1.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 69,  200 => 66,  196 => 65,  191 => 64,  184 => 61,  180 => 60,  174 => 58,  171 => 57,  167 => 56,  162 => 55,  160 => 54,  154 => 52,  150 => 51,  145 => 50,  143 => 49,  139 => 47,  130 => 44,  127 => 43,  123 => 41,  119 => 39,  117 => 38,  114 => 37,  112 => 36,  107 => 34,  104 => 33,  100 => 32,  93 => 28,  89 => 27,  85 => 26,  77 => 22,  75 => 21,  71 => 19,  68 => 18,  58 => 13,  55 => 12,  53 => 11,  51 => 10,  46 => 9,  41 => 8,  39 => 7,  35 => 5,  32 => 4,  28 => 1,  26 => 2,  11 => 1,);
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

{% block jumboTron %}
    <div class=\"jumbotron\">
        <div class=\"container\">
            {% set themeName = theme.getThemeConfig(\"app_name\") %}
            {% set header %}{% trans %}Welcome to the {{ themeName }} Installation{% endtrans %}{% endset %}
            <h1>{{ header }}</h1>
            <p>{% trans %}Thank you for choosing {{ themeName }}. This installation wizard will take you through
                setting up {{ themeName }} one step at a time. There are 6 steps in total, the first one is below.{% endtrans %}
            </p>
            <p><a class=\"btn btn-primary btn-lg\" role=\"button\" href=\"{{ theme.getThemeConfig(\"cms_install_url\") }}\" target=\"_blank\">{% trans \"Installation guide\" %} &raquo;</a></p>
        </div>
    </div>
{% endblock %}

{% block stepContent %}
    <div class=\"row\">
        <div class=\"col-md-12\">
            {% set themeName = theme.getThemeConfig(\"app_name\") %}
            <p>{% trans %}First we need to check if your server meets {{ themeName }}'s requirements.{% endtrans %}</p>
            <table id=\"sessions\" class=\"table table-striped\">
                <thead>
                <tr>
                    <th>{% trans \"Item\" %}</th>
                    <th>{% trans \"Status\" %}</th>
                    <th>{% trans \"Advice\" %}</th>
                </tr>
                </thead>
                <tbody>
                {% for check in config.CheckEnvironment() %}
                    <tr>
                        <td>{{ check.item }}</td>
                        <td>
                            {% if check.status == 0 %}
                                <span class=\"fa fa-times\"></span>
                            {% elseif check.status == 1 %}
                                <span class=\"fa fa-check\"></span>
                            {% else %}
                                <span class=\"fa fa-exclamation\"></span>
                            {% endif %}
                        </td>
                        <td>{{ check.advice }}</td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
            {% if config.EnvironmentFault() %}
                <form action=\"{{ urlFor(\"install\", {step: 1}) }}\" class=\"form-inline\">
                    {% set title %}{% trans \"Retest\" %}{% endset %}
                    {{ forms.button(title, \"submit\") }}
                </form>
            {% elseif config.EnvironmentWarning() %}
                <form action=\"{{ urlFor(\"install\", {step: 2}) }}\" class=\"form-inline\">
                    {% set title %}{% trans \"Retest\" %}{% endset %}
                    {% set link = urlFor(\"install\", {step: 1}) %}
                    {{ forms.button(title, \"link\", link) }}

                    {% set title %}{% trans \"Next\" %}{% endset %}
                    {{ forms.button(title, \"submit\", link) }}
                </form>
            {% else %}
                <form action=\"{{ urlFor(\"install\", {step: 2}) }}\" class=\"form-inline\">
                    {% set title %}{% trans \"Next\" %}{% endset %}
                    {{ forms.button(title, \"submit\") }}
                </form>
            {% endif %}
        </div>
    </div>
{% endblock %}", "install-step1.twig", "/var/www/web/views/install-step1.twig");
    }
}
