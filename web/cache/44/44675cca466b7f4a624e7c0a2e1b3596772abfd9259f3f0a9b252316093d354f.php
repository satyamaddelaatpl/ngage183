<?php

/* daypart-page.twig */
class __TwigTemplate_5bb53d6bae9fb3b16cb4cdbe293c523451e36a4f03a3bd96aaf1644b90123957 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 24
        $this->parent = $this->loadTemplate("authed.twig", "daypart-page.twig", 24);
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
        // line 25
        $context["inline"] = $this->loadTemplate("inline.twig", "daypart-page.twig", 25);
        // line 24
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_actionMenu($context, array $blocks = array())
    {
        // line 28
        echo "    <ul class=\"nav nav-pills pull-right\">
        <li class=\"btn btn-success btn-xs\"><a class=\"XiboFormButton btns\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("daypart.add.form"), "html", null, true);
        echo "\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> ";
        echo __("Add Daypart");
        echo "</a></li>
    </ul>
";
    }

    // line 33
    public function block_pageContent($context, array $blocks = array())
    {
        // line 34
        echo "    <div class=\"widget\">
        <div class=\"widget-title\">";
        // line 35
        echo __("Dayparting");
        echo "</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"";
        // line 37
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\">
                <div class=\"XiboFilter\">
                    <div class=\"FilterDiv\" id=\"Filter\">
                        <form class=\"form-inline\">

                        </form>
                    </div>
                </div>
                <div class=\"XiboData\">
                    <table id=\"dayparts\" class=\"table table-striped\">
                        <thead>
                            <tr>
                                <th>";
        // line 49
        echo __("Name");
        echo "</th>
                                <th>";
        // line 50
        echo __("Description");
        echo "</th>
                                <th>";
        // line 51
        echo __("Start Time");
        echo "</th>
                                <th>";
        // line 52
        echo __("End Time");
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

    // line 66
    public function block_javaScript($context, array $blocks = array())
    {
        // line 67
        echo "    <script type=\"text/javascript\">
        Handlebars.registerHelper('if_eq', function(a, b, opts) {
            if(a == b) // Or === depending on your needs
                return opts.fn(this);
            else
                return opts.inverse(this);
        });

        var table = \$(\"#dayparts\").DataTable({ \"language\": dataTablesLanguage,
            serverSide: true, stateSave: true,
            filter: false,
            searchDelay: 3000,
            \"order\": [[ 1, \"asc\"]],
            ajax: {
                \"url\": \"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("daypart.search"), "html", null, true);
        echo "\",
                \"data\": function(d) {
                    \$.extend(d, \$(\"#dayparts\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                }
            },
            \"columns\": [
                { \"data\": \"name\", \"render\": dataTableSpacingPreformatted },
                { \"data\": \"description\" },
                { \"data\": \"startTime\" },
                { \"data\": \"endTime\" },
                {
                    \"orderable\": false,
                    \"data\": dataTableButtonsColumn
                }
            ]
        });

        table.on('draw', dataTableDraw);
        table.on('processing.dt', dataTableProcessing);

        function dayPartFormOpen(dialog) {
            // Render a set of exceptions
            \$exceptions = \$(dialog).find(\"#dayPartExceptions\");

            // Days of the week translations
            var daysOfTheWeek = [
                { day: \"Mon\", title: \"";
        // line 107
        echo __("Monday");
        echo "\" },
                { day: \"Tue\", title: \"";
        // line 108
        echo __("Tuesday");
        echo "\" },
                { day: \"Wed\", title: \"";
        // line 109
        echo __("Wednesday");
        echo "\" },
                { day: \"Thu\", title: \"";
        // line 110
        echo __("Thursday");
        echo "\" },
                { day: \"Fri\", title: \"";
        // line 111
        echo __("Friday");
        echo "\" },
                { day: \"Sat\", title: \"";
        // line 112
        echo __("Saturday");
        echo "\" },
                { day: \"Sun\", title: \"";
        // line 113
        echo __("Sunday");
        echo "\" }
            ];

            // Compile the handlebars template
            var exceptionsTemplate = Handlebars.compile(\$(\"#dayPartExceptionsTemplate\").html());

            if (dialog.data().extra.exceptions.length == 0) {
                // Contexts for template
                var context = {
                    daysOfWeek: daysOfTheWeek,
                    buttonGlyph: \"fa-plus\",
                    exceptionDay: \"\",
                    exceptionStart: \"\",
                    exceptionEnd: \"\",
                    fieldId: 0
                };

                // Append
                \$exceptions.append(exceptionsTemplate(context));
                
                XiboInitialise(\"#\" + \$exceptions.prop(\"id\"));
            } else {
                // For each of the existing exceptions, create form components
                var i = 0;
                \$.each(dialog.data().extra.exceptions, function (index, field) {
                    i++;
                    // call the template
                    var context = {
                        daysOfWeek: daysOfTheWeek,
                        buttonGlyph: ((i == 1) ? \"fa-plus\" : \"fa-minus\"),
                        exceptionDay: field.day,
                        exceptionStart: field.start,
                        exceptionEnd: field.end,
                        fieldId: i
                    };

                    \$exceptions.append(exceptionsTemplate(context));
                    
                    XiboInitialise(\"#\" + \$exceptions.prop(\"id\"));
                });
            }

            // Nabble the resulting buttons
            \$exceptions.on(\"click\", \"button\", function (e) {
                e.preventDefault();

                // find the gylph
                if (\$(this).find(\"i\").hasClass(\"fa-plus\")) {
                    var context = {
                        daysOfWeek: daysOfTheWeek,
                        buttonGlyph: \"fa-minus\",
                        exceptionDay: \"\",
                        exceptionStart: \"\",
                        exceptionEnd: \"\",
                        fieldId: \$exceptions.find('.form-group').length + 1
                    };

                    \$exceptions.append(exceptionsTemplate(context));

                    XiboInitialise(\"#\" + \$exceptions.prop(\"id\"));
                } else {
                    // Remove this row
                    \$(this).closest(\".form-group\").remove();
                }
            });
        }
    </script>
    ";
        // line 204
        echo "
    <script type=\"text/x-handlebars-template\" id=\"dayPartExceptionsTemplate\">
        <div class=\"form-group\">
            <div class=\"col-sm-3\">
                <select class=\"form-control\" name=\"exceptionDay[]\">
                    <option value=\"\"></option>
                    {{#each daysOfWeek}}
                    <option value=\"{{ day }}\" {{#if_eq day ../exceptionDay}}selected{{/if_eq}}>{{ title }}</option>
                    {{/each}}
                </select>
            </div>
            <div class=\"col-sm-3\">
                <input type=\"hidden\" name=\"exceptionStartTimes[]\" id=\"exceptionStartTimes_{{ fieldId }}\" value=\"{{ exceptionStart }}\" />
                <input class=\"form-control timePicker dateControl\" name=\"exceptionStartTimesLink_{{ fieldId }}\" type=\"text\" id=\"exceptionStartTimesLink_{{ fieldId }}\" data-link-field=\"exceptionStartTimes_{{ fieldId }}\" data-link-format=\"hh:ii\"/>
            </div>
            <div class=\"col-sm-3\">
                <input type=\"hidden\" name=\"exceptionEndTimes[]\" id=\"exceptionEndTimes_{{ fieldId }}\" value=\"{{ exceptionEnd }}\" />
                <input class=\"form-control timePicker dateControl\" name=\"exceptionEndTimesLink_{{ fieldId }}\" type=\"text\" id=\"exceptionEndTimesLink_{{ fieldId }}\" data-link-field=\"exceptionEndTimes_{{ fieldId }}\" data-link-format=\"hh:ii\"/>
            </div>
            <div class=\"col-sm-1\">
                <button class=\"btn btn-default btn-sm\"><i class=\"fa {{ buttonGlyph }}\"></i></button>
            </div>
        </div>
    </script>
    ";
        echo "
";
    }

    public function getTemplateName()
    {
        return "daypart-page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 204,  175 => 113,  171 => 112,  167 => 111,  163 => 110,  159 => 109,  155 => 108,  151 => 107,  122 => 81,  106 => 67,  103 => 66,  86 => 52,  82 => 51,  78 => 50,  74 => 49,  59 => 37,  54 => 35,  51 => 34,  48 => 33,  39 => 29,  36 => 28,  33 => 27,  29 => 24,  27 => 25,  11 => 24,);
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
 * Xibo - Digital Signage - http://www.xibo.org.uk
 * Copyright (C) 2012-2016 Spring Signage Ltd - http://www.springsignage.com
 *
 * This file is part of Xibo.
 *
 * Xibo is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * any later version.
 *
 * Xibo is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with Xibo.  If not, see <http://www.gnu.org/licenses/>.
 *
 * (daypart-page.twig)
 */
#}
{% extends \"authed.twig\" %}
{% import \"inline.twig\" as inline %}

{% block actionMenu %}
    <ul class=\"nav nav-pills pull-right\">
        <li class=\"btn btn-success btn-xs\"><a class=\"XiboFormButton btns\" href=\"{{ urlFor(\"daypart.add.form\") }}\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> {% trans \"Add Daypart\" %}</a></li>
    </ul>
{% endblock %}

{% block pageContent %}
    <div class=\"widget\">
        <div class=\"widget-title\">{% trans \"Dayparting\" %}</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"{{ random() }}\">
                <div class=\"XiboFilter\">
                    <div class=\"FilterDiv\" id=\"Filter\">
                        <form class=\"form-inline\">

                        </form>
                    </div>
                </div>
                <div class=\"XiboData\">
                    <table id=\"dayparts\" class=\"table table-striped\">
                        <thead>
                            <tr>
                                <th>{% trans \"Name\" %}</th>
                                <th>{% trans \"Description\" %}</th>
                                <th>{% trans \"Start Time\" %}</th>
                                <th>{% trans \"End Time\" %}</th>
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
        Handlebars.registerHelper('if_eq', function(a, b, opts) {
            if(a == b) // Or === depending on your needs
                return opts.fn(this);
            else
                return opts.inverse(this);
        });

        var table = \$(\"#dayparts\").DataTable({ \"language\": dataTablesLanguage,
            serverSide: true, stateSave: true,
            filter: false,
            searchDelay: 3000,
            \"order\": [[ 1, \"asc\"]],
            ajax: {
                \"url\": \"{{ urlFor(\"daypart.search\") }}\",
                \"data\": function(d) {
                    \$.extend(d, \$(\"#dayparts\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                }
            },
            \"columns\": [
                { \"data\": \"name\", \"render\": dataTableSpacingPreformatted },
                { \"data\": \"description\" },
                { \"data\": \"startTime\" },
                { \"data\": \"endTime\" },
                {
                    \"orderable\": false,
                    \"data\": dataTableButtonsColumn
                }
            ]
        });

        table.on('draw', dataTableDraw);
        table.on('processing.dt', dataTableProcessing);

        function dayPartFormOpen(dialog) {
            // Render a set of exceptions
            \$exceptions = \$(dialog).find(\"#dayPartExceptions\");

            // Days of the week translations
            var daysOfTheWeek = [
                { day: \"Mon\", title: \"{% trans \"Monday\" %}\" },
                { day: \"Tue\", title: \"{% trans \"Tuesday\" %}\" },
                { day: \"Wed\", title: \"{% trans \"Wednesday\" %}\" },
                { day: \"Thu\", title: \"{% trans \"Thursday\" %}\" },
                { day: \"Fri\", title: \"{% trans \"Friday\" %}\" },
                { day: \"Sat\", title: \"{% trans \"Saturday\" %}\" },
                { day: \"Sun\", title: \"{% trans \"Sunday\" %}\" }
            ];

            // Compile the handlebars template
            var exceptionsTemplate = Handlebars.compile(\$(\"#dayPartExceptionsTemplate\").html());

            if (dialog.data().extra.exceptions.length == 0) {
                // Contexts for template
                var context = {
                    daysOfWeek: daysOfTheWeek,
                    buttonGlyph: \"fa-plus\",
                    exceptionDay: \"\",
                    exceptionStart: \"\",
                    exceptionEnd: \"\",
                    fieldId: 0
                };

                // Append
                \$exceptions.append(exceptionsTemplate(context));
                
                XiboInitialise(\"#\" + \$exceptions.prop(\"id\"));
            } else {
                // For each of the existing exceptions, create form components
                var i = 0;
                \$.each(dialog.data().extra.exceptions, function (index, field) {
                    i++;
                    // call the template
                    var context = {
                        daysOfWeek: daysOfTheWeek,
                        buttonGlyph: ((i == 1) ? \"fa-plus\" : \"fa-minus\"),
                        exceptionDay: field.day,
                        exceptionStart: field.start,
                        exceptionEnd: field.end,
                        fieldId: i
                    };

                    \$exceptions.append(exceptionsTemplate(context));
                    
                    XiboInitialise(\"#\" + \$exceptions.prop(\"id\"));
                });
            }

            // Nabble the resulting buttons
            \$exceptions.on(\"click\", \"button\", function (e) {
                e.preventDefault();

                // find the gylph
                if (\$(this).find(\"i\").hasClass(\"fa-plus\")) {
                    var context = {
                        daysOfWeek: daysOfTheWeek,
                        buttonGlyph: \"fa-minus\",
                        exceptionDay: \"\",
                        exceptionStart: \"\",
                        exceptionEnd: \"\",
                        fieldId: \$exceptions.find('.form-group').length + 1
                    };

                    \$exceptions.append(exceptionsTemplate(context));

                    XiboInitialise(\"#\" + \$exceptions.prop(\"id\"));
                } else {
                    // Remove this row
                    \$(this).closest(\".form-group\").remove();
                }
            });
        }
    </script>
    {% raw %}
    <script type=\"text/x-handlebars-template\" id=\"dayPartExceptionsTemplate\">
        <div class=\"form-group\">
            <div class=\"col-sm-3\">
                <select class=\"form-control\" name=\"exceptionDay[]\">
                    <option value=\"\"></option>
                    {{#each daysOfWeek}}
                    <option value=\"{{ day }}\" {{#if_eq day ../exceptionDay}}selected{{/if_eq}}>{{ title }}</option>
                    {{/each}}
                </select>
            </div>
            <div class=\"col-sm-3\">
                <input type=\"hidden\" name=\"exceptionStartTimes[]\" id=\"exceptionStartTimes_{{ fieldId }}\" value=\"{{ exceptionStart }}\" />
                <input class=\"form-control timePicker dateControl\" name=\"exceptionStartTimesLink_{{ fieldId }}\" type=\"text\" id=\"exceptionStartTimesLink_{{ fieldId }}\" data-link-field=\"exceptionStartTimes_{{ fieldId }}\" data-link-format=\"hh:ii\"/>
            </div>
            <div class=\"col-sm-3\">
                <input type=\"hidden\" name=\"exceptionEndTimes[]\" id=\"exceptionEndTimes_{{ fieldId }}\" value=\"{{ exceptionEnd }}\" />
                <input class=\"form-control timePicker dateControl\" name=\"exceptionEndTimesLink_{{ fieldId }}\" type=\"text\" id=\"exceptionEndTimesLink_{{ fieldId }}\" data-link-field=\"exceptionEndTimes_{{ fieldId }}\" data-link-format=\"hh:ii\"/>
            </div>
            <div class=\"col-sm-1\">
                <button class=\"btn btn-default btn-sm\"><i class=\"fa {{ buttonGlyph }}\"></i></button>
            </div>
        </div>
    </script>
    {% endraw %}
{% endblock %}", "daypart-page.twig", "/var/www/web/views/daypart-page.twig");
    }
}
