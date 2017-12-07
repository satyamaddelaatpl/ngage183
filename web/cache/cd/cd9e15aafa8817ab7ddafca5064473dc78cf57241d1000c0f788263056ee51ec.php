<?php

/* displayprofile-page.twig */
class __TwigTemplate_ba4ba7a22a7983a61f92e70997e1ad2ff52f3dcc920ed341ce0b44a12bb42d16 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 9
        $this->parent = $this->loadTemplate("authed.twig", "displayprofile-page.twig", 9);
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
        $context["inline"] = $this->loadTemplate("inline.twig", "displayprofile-page.twig", 10);
        // line 9
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_actionMenu($context, array $blocks = array())
    {
        // line 13
        echo "    <ul class=\"nav nav-pills pull-right\">
        <li class=\"btn btn-info btn-xs\"><a class=\"XiboFormButton btns\" title=\"";
        // line 14
        echo __("Add a new Display Settings Profile");
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("displayProfile.add.form"), "html", null, true);
        echo "\"> <i class=\"fa fa-cogs\" aria-hidden=\"true\"></i> ";
        echo __("Add Profile");
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
        echo __("Display Setting Profiles");
        echo "</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"";
        // line 23
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\">
                <div class=\"XiboFilter\">
                    <div class=\"FilterDiv\" id=\"Filter\">
                        <form class=\"form-inline\">

                        </form>
                    </div>
                </div>
                <div class=\"XiboData\">
                    <table id=\"displayProfiles\" class=\"table table-striped\">
                        <thead>
                            <tr>
                                <th>";
        // line 35
        echo __("Name");
        echo "</th>
                                <th>";
        // line 36
        echo __("Type");
        echo "</th>
                                <th>";
        // line 37
        echo __("Default");
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

    // line 51
    public function block_javaScript($context, array $blocks = array())
    {
        // line 52
        echo "    <script type=\"text/javascript\">
        var table = \$(\"#displayProfiles\").DataTable({ \"language\": dataTablesLanguage,
            serverSide: true, stateSave: true,
            filter: false,
            searchDelay: 3000,
            \"order\": [[ 1, \"asc\"]],
            ajax: {
                \"url\": \"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("displayProfile.search"), "html", null, true);
        echo "\",
                \"data\": function(d) {
                    \$.extend(d, \$(\"#displayProfiles\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                }
            },
            \"columns\": [
                { \"data\": \"name\", \"render\": dataTableSpacingPreformatted },
                { \"data\": \"type\" },
                { \"data\": \"isDefault\", \"render\": dataTableTickCrossColumn },
                {
                    \"orderable\": false,
                    \"data\": dataTableButtonsColumn
                }
            ]
        });

        table.on('draw', dataTableDraw);
        table.on('processing.dt', dataTableProcessing);
    </script>
";
    }

    public function getTemplateName()
    {
        return "displayprofile-page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 59,  104 => 52,  101 => 51,  84 => 37,  80 => 36,  76 => 35,  61 => 23,  56 => 21,  53 => 20,  50 => 19,  39 => 14,  36 => 13,  33 => 12,  29 => 9,  27 => 10,  11 => 9,);
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
{% extends \"authed.twig\" %}
{% import \"inline.twig\" as inline %}

{% block actionMenu %}
    <ul class=\"nav nav-pills pull-right\">
        <li class=\"btn btn-info btn-xs\"><a class=\"XiboFormButton btns\" title=\"{% trans \"Add a new Display Settings Profile\" %}\" href=\"{{ urlFor(\"displayProfile.add.form\") }}\"> <i class=\"fa fa-cogs\" aria-hidden=\"true\"></i> {% trans \"Add Profile\" %}</a></li>
    </ul>
{% endblock %}


{% block pageContent %}
    <div class=\"widget\">
        <div class=\"widget-title\">{% trans \"Display Setting Profiles\" %}</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"{{ random() }}\">
                <div class=\"XiboFilter\">
                    <div class=\"FilterDiv\" id=\"Filter\">
                        <form class=\"form-inline\">

                        </form>
                    </div>
                </div>
                <div class=\"XiboData\">
                    <table id=\"displayProfiles\" class=\"table table-striped\">
                        <thead>
                            <tr>
                                <th>{% trans \"Name\" %}</th>
                                <th>{% trans \"Type\" %}</th>
                                <th>{% trans \"Default\" %}</th>
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
        var table = \$(\"#displayProfiles\").DataTable({ \"language\": dataTablesLanguage,
            serverSide: true, stateSave: true,
            filter: false,
            searchDelay: 3000,
            \"order\": [[ 1, \"asc\"]],
            ajax: {
                \"url\": \"{{ urlFor(\"displayProfile.search\") }}\",
                \"data\": function(d) {
                    \$.extend(d, \$(\"#displayProfiles\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                }
            },
            \"columns\": [
                { \"data\": \"name\", \"render\": dataTableSpacingPreformatted },
                { \"data\": \"type\" },
                { \"data\": \"isDefault\", \"render\": dataTableTickCrossColumn },
                {
                    \"orderable\": false,
                    \"data\": dataTableButtonsColumn
                }
            ]
        });

        table.on('draw', dataTableDraw);
        table.on('processing.dt', dataTableProcessing);
    </script>
{% endblock %}", "displayprofile-page.twig", "/var/www/web/views/displayprofile-page.twig");
    }
}
