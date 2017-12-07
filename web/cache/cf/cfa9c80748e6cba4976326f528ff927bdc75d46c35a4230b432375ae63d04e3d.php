<?php

/* user-welcome-page.twig */
class __TwigTemplate_1116c308c7625bf7ce476ca4f87a65f2574df4c2ce35990002cf6760ebbce7e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("authed.twig", "user-welcome-page.twig", 1);
        $this->blocks = array(
            'pageContent' => array($this, 'block_pageContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "authed.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_pageContent($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"jumbotron\">
        <div class=\"container\">
            ";
        // line 6
        $context["appName"] = $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "getThemeConfig", array(0 => "app_name"), "method");
        // line 7
        echo "            <h1>";
        /* xgettext:no-php-format */        echo strtr(__("Welcome to the %appName% CMS!"), array("%appName%" => (isset($context["appName"]) ? $context["appName"] : null), ));
        echo "</h1>
            <p>";
        // line 8
        echo __("Digital Signage for Everyone");
        echo "</p>
            <p>";
        // line 9
        /* xgettext:no-php-format */        echo strtr(__("We hope you like %appName% and have given you some suggestions below to get you started."), array("%appName%" => (isset($context["appName"]) ? $context["appName"] : null), ));
        echo "</p>
            <a class=\"btn btn-primary btn-lg\" role=\"button\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["help"]) ? $context["help"] : null), "dashboard", array()), "html", null, true);
        echo "\" target=\"_blank\">";
        echo __("Getting Started Guide");
        echo "</a>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-sm-offset-1 col-sm-10\">
            <div id=\"new-user-welcome-carousel\" class=\"carousel slide\" data-ride=\"carousel\">
                <!-- Indicators -->
                <ol class=\"carousel-indicators\">
                    <li data-target=\"#new-user-welcome-carousel\" data-slide-to=\"0\" class=\"active\"></li>
                    <li data-target=\"#new-user-welcome-carousel\" data-slide-to=\"1\"></li>
                    <li data-target=\"#new-user-welcome-carousel\" data-slide-to=\"2\"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class=\"carousel-inner\">
                    <div class=\"item active\">
                        <img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "img/screenshots/display_add_screenshot.png"), "method"), "html", null, true);
        echo "\" alt=\"Slide 1\">
                        <div class=\"carousel-caption\">
                            <h3>";
        // line 28
        echo __("Display");
        echo "</h3>
                            <p>";
        // line 29
        echo __("Displays are your physical hardware players connected to your TV/Projector. Connect your first display to get started.");
        echo "</p>
                            <div class=\"btn-group\">
                                <a class=\"btn btn-primary btn-lg\" role=\"button\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["help"]) ? $context["help"] : null), "display", array()), "html", null, true);
        echo "\">";
        echo __("Manage Displays");
        echo "</a>
                                <a class=\"btn btn-default btn-lg\" role=\"button\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["help"]) ? $context["help"] : null), "windows", array()), "html", null, true);
        echo "\" target=\"_blank\">";
        echo __("Windows");
        echo "</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"item\">
                        <img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "img/screenshots/layout_design_screenshot.png"), "method"), "html", null, true);
        echo "\" alt=\"Slide 2\">
                        <div class=\"carousel-caption\">
                            <h3>";
        // line 39
        echo __("Layout");
        echo "</h3>
                            <p>";
        // line 40
        echo __("Screen design and presentation is managed on a Layout. You can have as many layouts as you want and design them in the CMS.");
        echo "</p>
                            <div class=\"btn-group\">
                                <a class=\"btn btn-primary btn-lg\" role=\"button\" href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("layout.view"), "html", null, true);
        echo "\">";
        echo __("Design a Layout");
        echo "</a>
                                <a class=\"btn btn-default btn-lg\" role=\"button\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["help"]) ? $context["help"] : null), "layout", array()), "html", null, true);
        echo "\" target=\"_blank\">";
        echo __("Read more");
        echo "</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"item\">
                        <img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "img/screenshots/calendar_screenshot.png"), "method"), "html", null, true);
        echo "\" alt=\"Slide 3\">
                        <div class=\"carousel-caption\">
                            <h3>";
        // line 50
        echo __("Schedule");
        echo "</h3>
                            <p>";
        // line 51
        echo __("Send something down to your display and watch it come alive! Create events on Displays / Groups for Layouts / Campaigns, create repeat events and much more.");
        echo "</p>
                            <div class=\"btn-group\">
                                <a class=\"btn btn-primary btn-lg\" role=\"button\" href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("schedule.view"), "html", null, true);
        echo "\">";
        echo __("Schedule Event");
        echo "</a>
                                <a class=\"btn btn-default btn-lg\" role=\"button\" href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["help"]) ? $context["help"] : null), "schedule", array()), "html", null, true);
        echo "\" target=\"_blank\">";
        echo __("Read more");
        echo "</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Controls -->
                <a class=\"left carousel-control\" href=\"#new-user-welcome-carousel\" role=\"button\" data-slide=\"prev\">
                    <span class=\"glyphicon glyphicon-chevron-left\"></span>
                </a>
                <a class=\"right carousel-control\" href=\"#new-user-welcome-carousel\" role=\"button\" data-slide=\"next\">
                    <span class=\"glyphicon glyphicon-chevron-right\"></span>
                </a>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "user-welcome-page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 54,  145 => 53,  140 => 51,  136 => 50,  131 => 48,  121 => 43,  115 => 42,  110 => 40,  106 => 39,  101 => 37,  91 => 32,  85 => 31,  80 => 29,  76 => 28,  71 => 26,  50 => 10,  46 => 9,  42 => 8,  37 => 7,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"authed.twig\" %}

{% block pageContent %}
    <div class=\"jumbotron\">
        <div class=\"container\">
            {% set appName = theme.getThemeConfig(\"app_name\") %}
            <h1>{% trans %}Welcome to the {{ appName }} CMS!{% endtrans %}</h1>
            <p>{% trans \"Digital Signage for Everyone\" %}</p>
            <p>{% trans %}We hope you like {{ appName }} and have given you some suggestions below to get you started.{% endtrans %}</p>
            <a class=\"btn btn-primary btn-lg\" role=\"button\" href=\"{{ help.dashboard }}\" target=\"_blank\">{% trans \"Getting Started Guide\" %}</a>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-sm-offset-1 col-sm-10\">
            <div id=\"new-user-welcome-carousel\" class=\"carousel slide\" data-ride=\"carousel\">
                <!-- Indicators -->
                <ol class=\"carousel-indicators\">
                    <li data-target=\"#new-user-welcome-carousel\" data-slide-to=\"0\" class=\"active\"></li>
                    <li data-target=\"#new-user-welcome-carousel\" data-slide-to=\"1\"></li>
                    <li data-target=\"#new-user-welcome-carousel\" data-slide-to=\"2\"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class=\"carousel-inner\">
                    <div class=\"item active\">
                        <img src=\"{{ theme.uri('img/screenshots/display_add_screenshot.png') }}\" alt=\"Slide 1\">
                        <div class=\"carousel-caption\">
                            <h3>{% trans \"Display\" %}</h3>
                            <p>{% trans \"Displays are your physical hardware players connected to your TV/Projector. Connect your first display to get started.\" %}</p>
                            <div class=\"btn-group\">
                                <a class=\"btn btn-primary btn-lg\" role=\"button\" href=\"{{ help.display }}\">{% trans \"Manage Displays\" %}</a>
                                <a class=\"btn btn-default btn-lg\" role=\"button\" href=\"{{ help.windows }}\" target=\"_blank\">{% trans \"Windows\" %}</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"item\">
                        <img src=\"{{ theme.uri('img/screenshots/layout_design_screenshot.png') }}\" alt=\"Slide 2\">
                        <div class=\"carousel-caption\">
                            <h3>{% trans \"Layout\" %}</h3>
                            <p>{% trans \"Screen design and presentation is managed on a Layout. You can have as many layouts as you want and design them in the CMS.\" %}</p>
                            <div class=\"btn-group\">
                                <a class=\"btn btn-primary btn-lg\" role=\"button\" href=\"{{ urlFor(\"layout.view\") }}\">{% trans \"Design a Layout\" %}</a>
                                <a class=\"btn btn-default btn-lg\" role=\"button\" href=\"{{ help.layout }}\" target=\"_blank\">{% trans \"Read more\" %}</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"item\">
                        <img src=\"{{ theme.uri('img/screenshots/calendar_screenshot.png') }}\" alt=\"Slide 3\">
                        <div class=\"carousel-caption\">
                            <h3>{% trans \"Schedule\" %}</h3>
                            <p>{% trans \"Send something down to your display and watch it come alive! Create events on Displays / Groups for Layouts / Campaigns, create repeat events and much more.\" %}</p>
                            <div class=\"btn-group\">
                                <a class=\"btn btn-primary btn-lg\" role=\"button\" href=\"{{ urlFor(\"schedule.view\") }}\">{% trans \"Schedule Event\" %}</a>
                                <a class=\"btn btn-default btn-lg\" role=\"button\" href=\"{{ help.schedule }}\" target=\"_blank\">{% trans \"Read more\" %}</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Controls -->
                <a class=\"left carousel-control\" href=\"#new-user-welcome-carousel\" role=\"button\" data-slide=\"prev\">
                    <span class=\"glyphicon glyphicon-chevron-left\"></span>
                </a>
                <a class=\"right carousel-control\" href=\"#new-user-welcome-carousel\" role=\"button\" data-slide=\"next\">
                    <span class=\"glyphicon glyphicon-chevron-right\"></span>
                </a>
            </div>
        </div>
    </div>
{% endblock %}", "user-welcome-page.twig", "/var/www/web/views/user-welcome-page.twig");
    }
}
