<?php

/* statistics-page.twig */
class __TwigTemplate_115043098f0b4f9feda2af4abe2424ae7ebed0a338d95bf566a5d854c689e49b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 9
        $this->parent = $this->loadTemplate("authed.twig", "statistics-page.twig", 9);
        $this->blocks = array(
            'pageContent' => array($this, 'block_pageContent'),
            'javaScript' => array($this, 'block_javaScript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "authed.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 10
        $context["inline"] = $this->loadTemplate("inline.twig", "statistics-page.twig", 10);
        // line 9
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_pageContent($context, array $blocks = array())
    {
        // line 13
        echo "
    ";
        // line 14
        $context["displayFilterOptions"] = twig_array_merge(array(0 => array("displayId" => null, "display" => "")), (isset($context["displays"]) ? $context["displays"] : null));
        // line 15
        echo "
    <div class=\"widget\">
        <div class=\"widget-title\">";
        // line 17
        echo __("Bandwidth");
        echo "</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\">
                <div class=\"XiboFilter\">
                    <div class=\"FilterDiv\" id=\"bandwidthFilter\">
                        <form class=\"form-inline\">
                            ";
        // line 23
        echo $context["inline"]->getdateMonth("bandwidthFromDt", "From Date", $this->getAttribute((isset($context["defaults"]) ? $context["defaults"] : null), "fromDate", array()), "", "", "", "");
        echo "
                            ";
        // line 24
        echo $context["inline"]->getdateMonth("bandwidthToDt", "To Date", $this->getAttribute((isset($context["defaults"]) ? $context["defaults"] : null), "toDate", array()), "", "", "", "");
        echo "
                            ";
        // line 25
        echo $context["inline"]->getdropdown("displayId", "single", "Display", "", (isset($context["displayFilterOptions"]) ? $context["displayFilterOptions"] : null), "displayId", "display");
        echo "
                        </form>
                    </div>
                </div>
                <div class=\"XiboData\">
                    <canvas id=\"bandwidthChart\" style=\"clear:both; margin-top:25px;\" height=\"330\"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class=\"widget\">
        <div class=\"widget-title\">";
        // line 36
        echo __("Time Disconnected");
        echo "</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"";
        // line 38
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\">
                <div class=\"XiboFilter\">
                    <div class=\"FilterDiv\" id=\"availabilityFilter\">
                        <form class=\"form-inline\">
                            ";
        // line 42
        ob_start();
        echo __("From Date");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 43
        echo "                            ";
        echo $context["inline"]->getdate("availabilityFromDt", (isset($context["title"]) ? $context["title"] : null), $this->getAttribute((isset($context["defaults"]) ? $context["defaults"] : null), "fromDate", array()), "", "", "", "");
        echo "

                            ";
        // line 45
        ob_start();
        echo __("To Date");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 46
        echo "                            ";
        echo $context["inline"]->getdate("availabilityToDt", (isset($context["title"]) ? $context["title"] : null), $this->getAttribute((isset($context["defaults"]) ? $context["defaults"] : null), "toDate", array()), "", "", "", "");
        echo "

                            ";
        // line 48
        ob_start();
        echo __("Display");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 49
        echo "                            ";
        echo $context["inline"]->getdropdown("displayId", "single", (isset($context["title"]) ? $context["title"] : null), "", (isset($context["displayFilterOptions"]) ? $context["displayFilterOptions"] : null), "displayId", "display");
        echo "

                            ";
        // line 51
        ob_start();
        echo __("Only show currently logged in?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 52
        echo "                            ";
        echo $context["inline"]->getcheckbox("onlyLoggedIn", (isset($context["title"]) ? $context["title"] : null));
        echo "
                        </form>
                    </div>
                </div>
                <div class=\"XiboData\" style=\"margin-top: 25px;\">
                    <canvas id=\"availabilityChart\" style=\"clear:both; margin-top:25px;\" height=\"330\"></canvas>
                </div>
            </div>
        </div>
    </div>

";
    }

    // line 65
    public function block_javaScript($context, array $blocks = array())
    {
        // line 66
        echo "    <script type=\"text/javascript\">

        var bandwidthChart = null;

        function setBandwidthChart() {
            \$.ajax({
                type: \"get\",
                url: \"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("stats.bandwidth.data"), "html", null, true);
        echo "\",
                cache: false,
                dataType: \"json\",
                data: \$(\"#bandwidthFilter\").find(\"form\").serialize(),
                success: function(response) {

                    if (bandwidthChart !== undefined && bandwidthChart !== null) {
                        console.log('Destroying Chart');
                        bandwidthChart.destroy();
                    }

                    if (response.extra.data.length <= 0) {
                        return;
                    }

                    // Create our chart
                    bandwidthChart = new Chart(\$(\"#bandwidthChart\"), {
                        type: \"bar\",
                        data: {
                            labels: response.extra.labels,
                            datasets: [{
                                label: \"";
        // line 94
        echo __("Bandwidth");
        echo "\",
                                backgroundColor: \"rgb(11, 98, 164)\",
                                data: response.extra.data
                            }]
                        },
                        options: {
                            scales: {
                                yAxes: [{
                                    scaleLabel: {
                                        display: true,
                                        labelString: response.extra.postUnits,
                                    }
                                }]
                            },
                            legend: {
                                display: false
                            },
                            maintainAspectRatio: false,
                        }
                    });
                }
            });
        }

        \$(document).ready(function() {
            setBandwidthChart();

            // Bind to form change
            \$(\"#bandwidthFilter input, #bandwidthFilter select\").change(function() {
                setBandwidthChart();
            });
        });

        var availabilityChart = null;

        function setAvailabilityChart() {

            \$.ajax({
                type: \"get\",
                url: \"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("stats.availability.data"), "html", null, true);
        echo "\",
                cache: false,
                dataType: \"json\",
                data: \$(\"#availabilityFilter\").find(\"form\").serialize(),
                success: function(response) {
                    if (availabilityChart !== undefined && availabilityChart !== null) {
                        console.log('Destroying Chart');
                        availabilityChart.destroy();
                    }

                    if (response.extra.data.length <= 0) {
                        return;
                    }

                    // Create our chart
                    availabilityChart = new Chart(\$(\"#availabilityChart\"), {
                        type: \"bar\",
                        data: {
                            labels: response.extra.labels,
                            datasets: [{
                                label: \"";
        // line 153
        echo __("Downtime");
        echo "\",
                                backgroundColor: \"rgb(11, 98, 164)\",
                                data: response.extra.data
                            }]
                        },
                        options: {
                            scales: {
                                yAxes: [{
                                    scaleLabel: {
                                        display: true,
                                        labelString: response.extra.postUnits,
                                    }
                                }]
                            },
                            legend: {
                                display: false
                            },
                            maintainAspectRatio: false,
                        }
                    });
                }
            });
        }

        \$(document).ready(function() {
            setAvailabilityChart();

            // Bind to form change
            \$(\"#availabilityFilter input, #availabilityFilter select\").change(function() {
                setAvailabilityChart();
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "statistics-page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 153,  219 => 133,  177 => 94,  153 => 73,  144 => 66,  141 => 65,  124 => 52,  120 => 51,  114 => 49,  110 => 48,  104 => 46,  100 => 45,  94 => 43,  90 => 42,  83 => 38,  78 => 36,  64 => 25,  60 => 24,  56 => 23,  49 => 19,  44 => 17,  40 => 15,  38 => 14,  35 => 13,  32 => 12,  28 => 9,  26 => 10,  11 => 9,);
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
 * Copyright (C) 2016 Spring Signage Ltd
 * (statistics-page.twig)
 */

#}
{% extends \"authed.twig\" %}
{% import \"inline.twig\" as inline %}

{% block pageContent %}

    {% set displayFilterOptions = [{displayId: null, display: \"\"}]|merge(displays) %}

    <div class=\"widget\">
        <div class=\"widget-title\">{% trans \"Bandwidth\" %}</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"{{ random() }}\">
                <div class=\"XiboFilter\">
                    <div class=\"FilterDiv\" id=\"bandwidthFilter\">
                        <form class=\"form-inline\">
                            {{ inline.dateMonth(\"bandwidthFromDt\", \"From Date\", defaults.fromDate, \"\", \"\", \"\", \"\") }}
                            {{ inline.dateMonth(\"bandwidthToDt\", \"To Date\", defaults.toDate, \"\", \"\", \"\", \"\") }}
                            {{ inline.dropdown(\"displayId\", \"single\", \"Display\", \"\", displayFilterOptions, \"displayId\", \"display\") }}
                        </form>
                    </div>
                </div>
                <div class=\"XiboData\">
                    <canvas id=\"bandwidthChart\" style=\"clear:both; margin-top:25px;\" height=\"330\"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class=\"widget\">
        <div class=\"widget-title\">{% trans \"Time Disconnected\" %}</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"{{ random() }}\">
                <div class=\"XiboFilter\">
                    <div class=\"FilterDiv\" id=\"availabilityFilter\">
                        <form class=\"form-inline\">
                            {% set title %}{% trans \"From Date\" %}{% endset %}
                            {{ inline.date(\"availabilityFromDt\", title, defaults.fromDate, \"\", \"\", \"\", \"\") }}

                            {% set title %}{% trans \"To Date\" %}{% endset %}
                            {{ inline.date(\"availabilityToDt\", title, defaults.toDate, \"\", \"\", \"\", \"\") }}

                            {% set title %}{% trans \"Display\" %}{% endset %}
                            {{ inline.dropdown(\"displayId\", \"single\", title, \"\", displayFilterOptions, \"displayId\", \"display\") }}

                            {% set title %}{% trans \"Only show currently logged in?\" %}{% endset %}
                            {{ inline.checkbox(\"onlyLoggedIn\", title) }}
                        </form>
                    </div>
                </div>
                <div class=\"XiboData\" style=\"margin-top: 25px;\">
                    <canvas id=\"availabilityChart\" style=\"clear:both; margin-top:25px;\" height=\"330\"></canvas>
                </div>
            </div>
        </div>
    </div>

{% endblock %}

{% block javaScript %}
    <script type=\"text/javascript\">

        var bandwidthChart = null;

        function setBandwidthChart() {
            \$.ajax({
                type: \"get\",
                url: \"{{ urlFor(\"stats.bandwidth.data\") }}\",
                cache: false,
                dataType: \"json\",
                data: \$(\"#bandwidthFilter\").find(\"form\").serialize(),
                success: function(response) {

                    if (bandwidthChart !== undefined && bandwidthChart !== null) {
                        console.log('Destroying Chart');
                        bandwidthChart.destroy();
                    }

                    if (response.extra.data.length <= 0) {
                        return;
                    }

                    // Create our chart
                    bandwidthChart = new Chart(\$(\"#bandwidthChart\"), {
                        type: \"bar\",
                        data: {
                            labels: response.extra.labels,
                            datasets: [{
                                label: \"{% trans \"Bandwidth\" %}\",
                                backgroundColor: \"rgb(11, 98, 164)\",
                                data: response.extra.data
                            }]
                        },
                        options: {
                            scales: {
                                yAxes: [{
                                    scaleLabel: {
                                        display: true,
                                        labelString: response.extra.postUnits,
                                    }
                                }]
                            },
                            legend: {
                                display: false
                            },
                            maintainAspectRatio: false,
                        }
                    });
                }
            });
        }

        \$(document).ready(function() {
            setBandwidthChart();

            // Bind to form change
            \$(\"#bandwidthFilter input, #bandwidthFilter select\").change(function() {
                setBandwidthChart();
            });
        });

        var availabilityChart = null;

        function setAvailabilityChart() {

            \$.ajax({
                type: \"get\",
                url: \"{{ urlFor(\"stats.availability.data\") }}\",
                cache: false,
                dataType: \"json\",
                data: \$(\"#availabilityFilter\").find(\"form\").serialize(),
                success: function(response) {
                    if (availabilityChart !== undefined && availabilityChart !== null) {
                        console.log('Destroying Chart');
                        availabilityChart.destroy();
                    }

                    if (response.extra.data.length <= 0) {
                        return;
                    }

                    // Create our chart
                    availabilityChart = new Chart(\$(\"#availabilityChart\"), {
                        type: \"bar\",
                        data: {
                            labels: response.extra.labels,
                            datasets: [{
                                label: \"{% trans \"Downtime\" %}\",
                                backgroundColor: \"rgb(11, 98, 164)\",
                                data: response.extra.data
                            }]
                        },
                        options: {
                            scales: {
                                yAxes: [{
                                    scaleLabel: {
                                        display: true,
                                        labelString: response.extra.postUnits,
                                    }
                                }]
                            },
                            legend: {
                                display: false
                            },
                            maintainAspectRatio: false,
                        }
                    });
                }
            });
        }

        \$(document).ready(function() {
            setAvailabilityChart();

            // Bind to form change
            \$(\"#availabilityFilter input, #availabilityFilter select\").change(function() {
                setAvailabilityChart();
            });
        });
    </script>
{% endblock %}", "statistics-page.twig", "/var/www/web/views/statistics-page.twig");
    }
}
