<?php

/* resolution-page.twig */
class __TwigTemplate_0ab524073e5fa8487f649baf1ca5eb01e46c64aa0f622947bb1006df7791d7ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 9
        $this->parent = $this->loadTemplate("authed.twig", "resolution-page.twig", 9);
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
        $context["inline"] = $this->loadTemplate("inline.twig", "resolution-page.twig", 10);
        // line 9
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_actionMenu($context, array $blocks = array())
    {
        // line 13
        echo "    <ul class=\"nav nav-pills pull-right\">
        <li class=\"btn btn-success btn-xs\"><a class=\"XiboFormButton btns\" title=\"";
        // line 14
        echo __("Add a new resolution for use on layouts");
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("resolution.add.form"), "html", null, true);
        echo "\"><span class=\"glyphicon glyphicon-plus-sign\"></span> ";
        echo __("Add Resolution");
        echo "</a></li>
    </ul>
";
    }

    // line 19
    public function block_pageContent($context, array $blocks = array())
    {
        // line 20
        echo "    <div class=\"widget\">
        <div class=\"widget-title\">";
        // line 21
        echo __("Resolution");
        echo "</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"";
        // line 23
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\" data-grid-name=\"resolutionView\">
                <div class=\"XiboFilter well\">
                    <div class=\"FilterDiv\" id=\"Filter\">
                        <form class=\"form-inline\">
                            ";
        // line 27
        $context["values"] = array(0 => array("id" => 1, "value" => "Yes"), 1 => array("id" => 0, "value" => "No"));
        // line 28
        echo "                            ";
        echo $context["inline"]->getdropdown("enabled", "single", "Enabled", 1, (isset($context["values"]) ? $context["values"] : null), "id", "value");
        echo "
                        </form>
                    </div>
                </div>
                <div class=\"XiboData\">
                    <table id=\"resolutions\" class=\"table table-striped\">
                        <thead>
                            <tr>
                                <th>";
        // line 36
        echo __("ID");
        echo "</th>
                                <th>";
        // line 37
        echo __("Resolution");
        echo "</th>
                                <th>";
        // line 38
        echo __("Width");
        echo "</th>
                                <th>";
        // line 39
        echo __("Height");
        echo "</th>
                                <th>";
        // line 40
        echo __("Enabled?");
        echo "</th>
                                <th></th>
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

    // line 54
    public function block_javaScript($context, array $blocks = array())
    {
        // line 55
        echo "    <script type=\"text/javascript\">
        \$(document).ready(function() {
            var table = \$(\"#resolutions\").DataTable({
                \"language\": dataTablesLanguage,
                serverSide: true, stateSave: true,
                filter: false,
                searchDelay: 3000,
                \"order\": [[1, \"asc\"]],
                ajax: {
                    url: \"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("resolution.search"), "html", null, true);
        echo "\",
                    data: function (d) {
                        \$.extend(d, \$(\"#resolutions\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                    }
                },
                \"columns\": [
                    {\"data\": \"resolutionId\"},
                    {\"data\": \"resolution\"},
                    {\"data\": \"width\"},
                    {\"data\": \"height\"},
                    {\"data\": \"enabled\"},
                    {
                        \"orderable\": false,
                        \"data\": dataTableButtonsColumn
                    }
                ]
            });

            table.on('draw', dataTableDraw);
            table.on('processing.dt', dataTableProcessing);
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "resolution-page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 64,  118 => 55,  115 => 54,  98 => 40,  94 => 39,  90 => 38,  86 => 37,  82 => 36,  70 => 28,  68 => 27,  61 => 23,  56 => 21,  53 => 20,  50 => 19,  39 => 14,  36 => 13,  33 => 12,  29 => 9,  27 => 10,  11 => 9,);
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
 * (resolution-page.twig)
 */

#}
{% extends \"authed.twig\" %}
{% import \"inline.twig\" as inline %}

{% block actionMenu %}
    <ul class=\"nav nav-pills pull-right\">
        <li class=\"btn btn-success btn-xs\"><a class=\"XiboFormButton btns\" title=\"{% trans \"Add a new resolution for use on layouts\" %}\" href=\"{{ urlFor(\"resolution.add.form\") }}\"><span class=\"glyphicon glyphicon-plus-sign\"></span> {% trans \"Add Resolution\" %}</a></li>
    </ul>
{% endblock %}


{% block pageContent %}
    <div class=\"widget\">
        <div class=\"widget-title\">{% trans \"Resolution\" %}</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"{{ random() }}\" data-grid-name=\"resolutionView\">
                <div class=\"XiboFilter well\">
                    <div class=\"FilterDiv\" id=\"Filter\">
                        <form class=\"form-inline\">
                            {% set values = [{id: 1, value: \"Yes\"}, {id: 0, value: \"No\"}] %}
                            {{ inline.dropdown(\"enabled\", \"single\", \"Enabled\", 1, values, \"id\", \"value\") }}
                        </form>
                    </div>
                </div>
                <div class=\"XiboData\">
                    <table id=\"resolutions\" class=\"table table-striped\">
                        <thead>
                            <tr>
                                <th>{% trans \"ID\" %}</th>
                                <th>{% trans \"Resolution\" %}</th>
                                <th>{% trans \"Width\" %}</th>
                                <th>{% trans \"Height\" %}</th>
                                <th>{% trans \"Enabled?\" %}</th>
                                <th></th>
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
            var table = \$(\"#resolutions\").DataTable({
                \"language\": dataTablesLanguage,
                serverSide: true, stateSave: true,
                filter: false,
                searchDelay: 3000,
                \"order\": [[1, \"asc\"]],
                ajax: {
                    url: \"{{ urlFor(\"resolution.search\") }}\",
                    data: function (d) {
                        \$.extend(d, \$(\"#resolutions\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                    }
                },
                \"columns\": [
                    {\"data\": \"resolutionId\"},
                    {\"data\": \"resolution\"},
                    {\"data\": \"width\"},
                    {\"data\": \"height\"},
                    {\"data\": \"enabled\"},
                    {
                        \"orderable\": false,
                        \"data\": dataTableButtonsColumn
                    }
                ]
            });

            table.on('draw', dataTableDraw);
            table.on('processing.dt', dataTableProcessing);
        });
    </script>
{% endblock %}", "resolution-page.twig", "/var/www/web/views/resolution-page.twig");
    }
}
