<?php

/* template-page.twig */
class __TwigTemplate_afdd750eaddf64574d1e5c4df1fa1c83a0431c0d88dcbf92de25d8b3593ce5ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 9
        $this->parent = $this->loadTemplate("authed.twig", "template-page.twig", 9);
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
        $context["inline"] = $this->loadTemplate("inline.twig", "template-page.twig", 10);
        // line 9
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_pageContent($context, array $blocks = array())
    {
        // line 13
        echo "    <div class=\"widget\">
        <div class=\"widget-title\">";
        // line 14
        echo __("Templates");
        echo "</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\" data-grid-name=\"templateView\">
                <div class=\"XiboFilter well\">
                    <div class=\"FilterDiv\" id=\"Filter\">
                        <form class=\"form-inline\">
                            ";
        // line 20
        echo $context["inline"]->getinput("template", "Name");
        echo "
                            ";
        // line 21
        echo $context["inline"]->getinput("tags", "Tags");
        echo "
                        </form>
                    </div>
                </div>
                <div class=\"XiboData\">
                    <table id=\"templates\" class=\"table table-striped\">
                        <thead>
                            <tr>
                                <th>";
        // line 29
        echo __("Name");
        echo "</th>
                                <th>";
        // line 30
        echo __("Owner");
        echo "</th>
                                <th>";
        // line 31
        echo __("Description");
        echo "</th>
                                <th>";
        // line 32
        echo __("Tags");
        echo "</th>
                                <th>";
        // line 33
        echo __("Thumbnail");
        echo "</th>
                                <th>";
        // line 34
        echo __("Permissions");
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

    // line 48
    public function block_javaScript($context, array $blocks = array())
    {
        // line 49
        echo "    <script type=\"text/javascript\">
        var table = \$(\"#templates\").DataTable({ \"language\": dataTablesLanguage,
            serverSide: true, stateSave: true,
            filter: false,
            searchDelay: 3000,
            \"order\": [[ 1, \"asc\"]],
            ajax: {
                \"url\": \"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("template.search"), "html", null, true);
        echo "\",
                \"data\": function(d) {
                    \$.extend(d, \$(\"#templates\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                }
            },
            \"columns\": [
                { \"data\": \"layout\"},
                { \"data\": \"owner\"},
                { \"data\": \"descriptionWithMarkup\"},
                { \"data\": \"tags\", \"visible\": false },
                { \"data\": \"thumbnail\"},
                { \"data\": \"permissions\"},
                {
                    \"orderable\": false,
                    \"data\": dataTableButtonsColumn
                }
            ]
        });

        table.on('draw', dataTableDraw);
        table.on('processing.dt', dataTableProcessing);
        dataTableAddButtons(table, \$('#templates_wrapper').find('.col-sm-6').eq(1));
    </script>
";
    }

    public function getTemplateName()
    {
        return "template-page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 56,  105 => 49,  102 => 48,  85 => 34,  81 => 33,  77 => 32,  73 => 31,  69 => 30,  65 => 29,  54 => 21,  50 => 20,  43 => 16,  38 => 14,  35 => 13,  32 => 12,  28 => 9,  26 => 10,  11 => 9,);
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
 * (template-page.twig)
 */

#}
{% extends \"authed.twig\" %}
{% import \"inline.twig\" as inline %}

{% block pageContent %}
    <div class=\"widget\">
        <div class=\"widget-title\">{% trans \"Templates\" %}</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"{{ random() }}\" data-grid-name=\"templateView\">
                <div class=\"XiboFilter well\">
                    <div class=\"FilterDiv\" id=\"Filter\">
                        <form class=\"form-inline\">
                            {{ inline.input(\"template\", \"Name\") }}
                            {{ inline.input(\"tags\", \"Tags\") }}
                        </form>
                    </div>
                </div>
                <div class=\"XiboData\">
                    <table id=\"templates\" class=\"table table-striped\">
                        <thead>
                            <tr>
                                <th>{% trans \"Name\" %}</th>
                                <th>{% trans \"Owner\" %}</th>
                                <th>{% trans \"Description\" %}</th>
                                <th>{% trans \"Tags\" %}</th>
                                <th>{% trans \"Thumbnail\" %}</th>
                                <th>{% trans \"Permissions\" %}</th>
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
        var table = \$(\"#templates\").DataTable({ \"language\": dataTablesLanguage,
            serverSide: true, stateSave: true,
            filter: false,
            searchDelay: 3000,
            \"order\": [[ 1, \"asc\"]],
            ajax: {
                \"url\": \"{{ urlFor(\"template.search\") }}\",
                \"data\": function(d) {
                    \$.extend(d, \$(\"#templates\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                }
            },
            \"columns\": [
                { \"data\": \"layout\"},
                { \"data\": \"owner\"},
                { \"data\": \"descriptionWithMarkup\"},
                { \"data\": \"tags\", \"visible\": false },
                { \"data\": \"thumbnail\"},
                { \"data\": \"permissions\"},
                {
                    \"orderable\": false,
                    \"data\": dataTableButtonsColumn
                }
            ]
        });

        table.on('draw', dataTableDraw);
        table.on('processing.dt', dataTableProcessing);
        dataTableAddButtons(table, \$('#templates_wrapper').find('.col-sm-6').eq(1));
    </script>
{% endblock %}", "template-page.twig", "/var/www/web/views/template-page.twig");
    }
}
