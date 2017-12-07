<?php

/* stats-proofofplay-page.twig */
class __TwigTemplate_b2af25d8147e0832c3151b40663dd9c55c75d287739dc3812162e82387a74729 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 9
        $this->parent = $this->loadTemplate("authed.twig", "stats-proofofplay-page.twig", 9);
        $this->blocks = array(
            'actionMenu' => array($this, 'block_actionMenu'),
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
        $context["inline"] = $this->loadTemplate("inline.twig", "stats-proofofplay-page.twig", 10);
        // line 9
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_actionMenu($context, array $blocks = array())
    {
        // line 13
        echo "    <ul class=\"nav nav-pills pull-right\">
        <li class=\"btn btn-primary btn-xs\"><a class=\"XiboFormButton btns\" title=\"";
        // line 14
        echo __("Export raw data to CSV");
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("stats.export.form"), "html", null, true);
        echo "\"> <i class=\"fa fa-cloud-download\" aria-hidden=\"true\"></i> ";
        echo __("Export");
        echo "</a></li>
        <li class=\"btn btn-warning btn-xs\"><a class=\"btns\" id=\"refreshGrid\" title=\"";
        // line 15
        echo __("Refresh");
        echo "\" href=\"#\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i></a></li>
    </ul>
";
    }

    // line 20
    public function block_pageContent($context, array $blocks = array())
    {
        // line 21
        echo "    ";
        $context["displayFilterOptions"] = twig_array_merge(array(0 => array("displayId" => null, "display" => "")), (isset($context["displays"]) ? $context["displays"] : null));
        // line 22
        echo "
    <div class=\"widget\">
        <div class=\"widget-title\">";
        // line 24
        echo __("Proof of Play");
        echo "</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\" data-grid-name=\"statsView\">
                <div class=\"XiboFilter well\">
                    <div class=\"FilterDiv\" id=\"Filter\">
                        <form class=\"form-inline\">
                            ";
        // line 30
        ob_start();
        echo __("From Date");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 31
        echo "                            ";
        echo $context["inline"]->getdate("statsFromDt", (isset($context["title"]) ? $context["title"] : null), $this->getAttribute((isset($context["defaults"]) ? $context["defaults"] : null), "fromDateOneDay", array()), "", "", "", "");
        echo "

                            ";
        // line 33
        ob_start();
        echo __("To Date");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 34
        echo "                            ";
        echo $context["inline"]->getdate("statsToDt", (isset($context["title"]) ? $context["title"] : null), $this->getAttribute((isset($context["defaults"]) ? $context["defaults"] : null), "toDate", array()), "", "", "", "");
        echo "

                            ";
        // line 36
        ob_start();
        echo __("Display");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 37
        echo "                            ";
        echo $context["inline"]->getdropdown("displayId", "single", (isset($context["title"]) ? $context["title"] : null), "", (isset($context["displayFilterOptions"]) ? $context["displayFilterOptions"] : null), "displayId", "display");
        echo "

                            ";
        // line 39
        ob_start();
        echo __("Layout");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 40
        echo "                            ";
        $context["layoutFilterOptions"] = twig_array_merge(array(0 => array("layoutId" => null, "layout" => "")), (isset($context["layouts"]) ? $context["layouts"] : null));
        // line 41
        echo "                            ";
        echo $context["inline"]->getdropdown("layoutId[]", "dropdownmulti", (isset($context["title"]) ? $context["title"] : null), "", (isset($context["layoutFilterOptions"]) ? $context["layoutFilterOptions"] : null), "layoutId", "layout", "", "selectPicker", "", "m", "", array(0 => array("name" => "data-live-search", "value" => "true"), 1 => array("name" => "data-selected-text-format", "value" => "count > 3")));
        echo "

                            ";
        // line 43
        ob_start();
        echo __("Media");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 44
        echo "                            ";
        $context["mediaFilterOptions"] = twig_array_merge(array(0 => array("mediaId" => null, "name" => "")), (isset($context["media"]) ? $context["media"] : null));
        // line 45
        echo "                            ";
        echo $context["inline"]->getdropdown("mediaId[]", "dropdownmulti", (isset($context["title"]) ? $context["title"] : null), "", (isset($context["mediaFilterOptions"]) ? $context["mediaFilterOptions"] : null), "mediaId", "name", "", "selectPicker", "", "m", "", array(0 => array("name" => "data-live-search", "value" => "true"), 1 => array("name" => "data-selected-text-format", "value" => "count > 3")));
        echo "
                        </form>
                    </div>
                </div>
                <div class=\"XiboData\">
                    <table id=\"stats\" class=\"table table-striped\">
                        <thead>
                        <tr>
                            <th>";
        // line 53
        echo __("Type");
        echo "</th>
                            <th>";
        // line 54
        echo __("Display");
        echo "</th>
                            <th>";
        // line 55
        echo __("Layout ID");
        echo "</th>
                            <th>";
        // line 56
        echo __("Layout");
        echo "</th>
                            <th>";
        // line 57
        echo __("Widget ID");
        echo "</th>
                            <th>";
        // line 58
        echo __("Media");
        echo "</th>
                            <th>";
        // line 59
        echo __("Number of Plays");
        echo "</th>
                            <th>";
        // line 60
        echo __("Total Duration");
        echo "</th>
                            <th>";
        // line 61
        echo __("Total Duration (s)");
        echo "</th>
                            <th>";
        // line 62
        echo __("First Shown");
        echo "</th>
                            <th>";
        // line 63
        echo __("Last Shown");
        echo "</th>
                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
";
    }

    // line 76
    public function block_javaScript($context, array $blocks = array())
    {
        // line 77
        echo "    <script type=\"text/javascript\">
        \$(document).ready(function() {
            var table = \$(\"#stats\").DataTable({
                \"language\": dataTablesLanguage,
                serverSide: true,
                stateSave: true,
                filter: false,
                searchDelay: 3000,
                \"order\": [[1, \"asc\"]],
                ajax: {
                    \"url\": \"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("stats.search"), "html", null, true);
        echo "\",
                    \"data\": function (d) {
                        \$.extend(d, \$(\"#stats\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                    }
                },
                \"columns\": [
                    {\"data\": \"type\"},
                    {\"data\": \"display\"},
                    {\"data\": \"layoutId\"},
                    {\"data\": \"layout\"},
                    {\"data\": \"widgetId\"},
                    {\"data\": \"media\"},
                    {\"data\": \"numberPlays\"},
                    {
                        \"data\": \"duration\",
                        \"render\": function (data, type, row, meta) {
                            if (type != \"display\")
                                return \"\";

                            return moment().startOf(\"day\").seconds(data).format(\"H:mm:ss\")
                        }
                    },
                    {\"data\": \"duration\"},
                    {\"data\": \"minStart\"},
                    {\"data\": \"maxEnd\"}
                ]
            });

            table.on('draw', dataTableDraw);
            table.on('processing.dt', dataTableProcessing);

            \$(\"#refreshGrid\").click(function () {
                table.ajax.reload();
            });
        });

        function statsExportFormSubmit() {
            \$(\"#statisticsExportForm\").submit();
            XiboDialogClose();
        }
    </script>
";
    }

    public function getTemplateName()
    {
        return "stats-proofofplay-page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 87,  197 => 77,  194 => 76,  178 => 63,  174 => 62,  170 => 61,  166 => 60,  162 => 59,  158 => 58,  154 => 57,  150 => 56,  146 => 55,  142 => 54,  138 => 53,  126 => 45,  123 => 44,  119 => 43,  113 => 41,  110 => 40,  106 => 39,  100 => 37,  96 => 36,  90 => 34,  86 => 33,  80 => 31,  76 => 30,  69 => 26,  64 => 24,  60 => 22,  57 => 21,  54 => 20,  47 => 15,  39 => 14,  36 => 13,  33 => 12,  29 => 9,  27 => 10,  11 => 9,);
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
 * Copyright (C) 2017 Spring Signage Ltd
 * (stats-proofofplay-page.twig)
 */

#}
{% extends \"authed.twig\" %}
{% import \"inline.twig\" as inline %}

{% block actionMenu %}
    <ul class=\"nav nav-pills pull-right\">
        <li class=\"btn btn-primary btn-xs\"><a class=\"XiboFormButton btns\" title=\"{% trans \"Export raw data to CSV\" %}\" href=\"{{ urlFor(\"stats.export.form\") }}\"> <i class=\"fa fa-cloud-download\" aria-hidden=\"true\"></i> {% trans \"Export\" %}</a></li>
        <li class=\"btn btn-warning btn-xs\"><a class=\"btns\" id=\"refreshGrid\" title=\"{% trans \"Refresh\" %}\" href=\"#\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i></a></li>
    </ul>
{% endblock %}


{% block pageContent %}
    {% set displayFilterOptions = [{displayId: null, display: \"\"}]|merge(displays) %}

    <div class=\"widget\">
        <div class=\"widget-title\">{% trans \"Proof of Play\" %}</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"{{ random() }}\" data-grid-name=\"statsView\">
                <div class=\"XiboFilter well\">
                    <div class=\"FilterDiv\" id=\"Filter\">
                        <form class=\"form-inline\">
                            {% set title %}{% trans \"From Date\" %}{% endset %}
                            {{ inline.date(\"statsFromDt\", title, defaults.fromDateOneDay, \"\", \"\", \"\", \"\") }}

                            {% set title %}{% trans \"To Date\" %}{% endset %}
                            {{ inline.date(\"statsToDt\", title, defaults.toDate, \"\", \"\", \"\", \"\") }}

                            {% set title %}{% trans \"Display\" %}{% endset %}
                            {{ inline.dropdown(\"displayId\", \"single\", title, \"\", displayFilterOptions, \"displayId\", \"display\") }}

                            {% set title %}{% trans \"Layout\" %}{% endset %}
                            {% set layoutFilterOptions = [{layoutId: null, layout: \"\"}]|merge(layouts) %}
                            {{ inline.dropdown(\"layoutId[]\", \"dropdownmulti\", title, \"\", layoutFilterOptions, \"layoutId\", \"layout\", \"\", \"selectPicker\", \"\", \"m\", \"\", [{name: \"data-live-search\", value:\"true\"}, {name: \"data-selected-text-format\", value: \"count > 3\"}]) }}

                            {% set title %}{% trans \"Media\" %}{% endset %}
                            {% set mediaFilterOptions = [{mediaId: null, name: \"\"}]|merge(media) %}
                            {{ inline.dropdown(\"mediaId[]\", \"dropdownmulti\", title, \"\", mediaFilterOptions, \"mediaId\", \"name\", \"\", \"selectPicker\", \"\", \"m\", \"\", [{name: \"data-live-search\", value:\"true\"}, {name: \"data-selected-text-format\", value: \"count > 3\"}]) }}
                        </form>
                    </div>
                </div>
                <div class=\"XiboData\">
                    <table id=\"stats\" class=\"table table-striped\">
                        <thead>
                        <tr>
                            <th>{% trans \"Type\" %}</th>
                            <th>{% trans \"Display\" %}</th>
                            <th>{% trans \"Layout ID\" %}</th>
                            <th>{% trans \"Layout\" %}</th>
                            <th>{% trans \"Widget ID\" %}</th>
                            <th>{% trans \"Media\" %}</th>
                            <th>{% trans \"Number of Plays\" %}</th>
                            <th>{% trans \"Total Duration\" %}</th>
                            <th>{% trans \"Total Duration (s)\" %}</th>
                            <th>{% trans \"First Shown\" %}</th>
                            <th>{% trans \"Last Shown\" %}</th>
                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block javaScript %}
    <script type=\"text/javascript\">
        \$(document).ready(function() {
            var table = \$(\"#stats\").DataTable({
                \"language\": dataTablesLanguage,
                serverSide: true,
                stateSave: true,
                filter: false,
                searchDelay: 3000,
                \"order\": [[1, \"asc\"]],
                ajax: {
                    \"url\": \"{{ urlFor(\"stats.search\") }}\",
                    \"data\": function (d) {
                        \$.extend(d, \$(\"#stats\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                    }
                },
                \"columns\": [
                    {\"data\": \"type\"},
                    {\"data\": \"display\"},
                    {\"data\": \"layoutId\"},
                    {\"data\": \"layout\"},
                    {\"data\": \"widgetId\"},
                    {\"data\": \"media\"},
                    {\"data\": \"numberPlays\"},
                    {
                        \"data\": \"duration\",
                        \"render\": function (data, type, row, meta) {
                            if (type != \"display\")
                                return \"\";

                            return moment().startOf(\"day\").seconds(data).format(\"H:mm:ss\")
                        }
                    },
                    {\"data\": \"duration\"},
                    {\"data\": \"minStart\"},
                    {\"data\": \"maxEnd\"}
                ]
            });

            table.on('draw', dataTableDraw);
            table.on('processing.dt', dataTableProcessing);

            \$(\"#refreshGrid\").click(function () {
                table.ajax.reload();
            });
        });

        function statsExportFormSubmit() {
            \$(\"#statisticsExportForm\").submit();
            XiboDialogClose();
        }
    </script>
{% endblock %}", "stats-proofofplay-page.twig", "/var/www/web/views/stats-proofofplay-page.twig");
    }
}
