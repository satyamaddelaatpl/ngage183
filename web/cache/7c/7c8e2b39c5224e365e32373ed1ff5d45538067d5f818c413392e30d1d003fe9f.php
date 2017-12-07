<?php

/* usergroup-page.twig */
class __TwigTemplate_93a6e3b55dfd8269c3d17a44878d334a81ed1087f9415feecefb23c7d58b58ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 9
        $this->parent = $this->loadTemplate("authed.twig", "usergroup-page.twig", 9);
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
        $context["inline"] = $this->loadTemplate("inline.twig", "usergroup-page.twig", 10);
        // line 9
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_actionMenu($context, array $blocks = array())
    {
        // line 13
        echo "    <ul class=\"nav nav-pills pull-right\">
        ";
        // line 14
        if ($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "isSuperAdmin", array(), "method")) {
            // line 15
            echo "        <li class=\"btn btn-success btn-xs\"><a class=\"XiboFormButton btns\" title=\"";
            echo __("Add a new User Group");
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("group.add.form"), "html", null, true);
            echo "\"> <i class=\"fa fa-users\" aria-hidden=\"true\"></i> ";
            echo __("Add User Group");
            echo "</a></li>
        ";
        }
        // line 17
        echo "    </ul>
";
    }

    // line 21
    public function block_pageContent($context, array $blocks = array())
    {
        // line 22
        echo "    <div class=\"widget\">
        <div class=\"widget-title\">";
        // line 23
        echo __("User Groups");
        echo "</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\" data-grid-name=\"userGroupView\">
                <div class=\"XiboFilter well\">
                    <div class=\"FilterDiv\" id=\"Filter\">
                        <form class=\"form-inline\">
                            ";
        // line 29
        echo $context["inline"]->getinput("userGroup", "Name");
        echo "
                        </form>
                    </div>
                </div>
                <div class=\"XiboData\">
                    <table id=\"userGroups\" class=\"table table-striped\">
                        <thead>
                            <tr>
                                <th>";
        // line 37
        echo __("User Group");
        echo "</th>
                                <th>";
        // line 38
        echo __("Library Quota");
        echo "</th>
                                <th>";
        // line 39
        echo __("Receive System Notifications?");
        echo "</th>
                                <th>";
        // line 40
        echo __("Receive Display Notifications?");
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
            var table = \$(\"#userGroups\").DataTable({
                \"language\": dataTablesLanguage,
                serverSide: true, stateSave: true,
                searchDelay: 3000,
                filter: false,
                \"order\": [[0, \"asc\"]],
                ajax: {
                    url: \"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("group.search"), "html", null, true);
        echo "\",
                    \"data\": function (d) {
                        \$.extend(d, \$(\"#userGroups\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                    }
                },
                \"columns\": [
                    {\"data\": \"group\", \"render\": dataTableSpacingPreformatted },
                    {
                        \"name\": \"libraryQuota\",
                        \"data\": null,
                        \"render\": {\"_\": \"libraryQuota\", \"display\": \"libraryQuotaFormatted\", \"sort\": \"libraryQuota\"}
                    },
                    {
                        \"data\": \"isSystemNotification\",
                        \"render\": dataTableTickCrossColumn
                    },
                    {
                        \"data\": \"isDisplayNotification\",
                        \"render\": dataTableTickCrossColumn
                    },
                    {
                        \"orderable\": false,
                        \"data\": dataTableButtonsColumn
                    }
                ]
            });

            table.on('draw', dataTableDraw);
            table.on('processing.dt', dataTableProcessing);
        });

        function userGroupFormOpen() {
            // Bind to the add form submit
            \$(\".UserGroupForm\").validate({
                submitHandler: function (form) {
                    // Grab and alter the value in the library quota field
                    var libraryQuotaField = \$(form).find(\"input[name=libraryQuota]\");
                    var libraryQuotaUnitsField = \$(form).find(\"select[name=libraryQuotaUnits]\");
                    var libraryQuota = libraryQuotaField.val();

                    if (libraryQuotaUnitsField.val() == 'mb') {
                        libraryQuota = libraryQuota * 1024;
                    } else if (libraryQuotaUnitsField.val() == 'gb') {
                        libraryQuota = libraryQuota * 1024 * 1024;
                    }

                    // Set the field
                    libraryQuotaField.prop('value', libraryQuota);

                    XiboFormSubmit(form);
                },
                errorElement: \"span\",
                highlight: function(element) {
                    \$(element).closest('.form-group').removeClass('has-success').addClass('has-error');
                },
                success: function(element) {
                    \$(element).closest('.form-group').removeClass('has-error').addClass('has-success');
                },
                invalidHandler: function() {
                    // Remove the spinner
                    \$(this).closest(\".modal-dialog\").find(\".saving\").remove();
                }
            });
        }
    </script>
";
    }

    public function getTemplateName()
    {
        return "usergroup-page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 64,  117 => 55,  114 => 54,  97 => 40,  93 => 39,  89 => 38,  85 => 37,  74 => 29,  67 => 25,  62 => 23,  59 => 22,  56 => 21,  51 => 17,  41 => 15,  39 => 14,  36 => 13,  33 => 12,  29 => 9,  27 => 10,  11 => 9,);
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
        {% if currentUser.isSuperAdmin() %}
        <li class=\"btn btn-success btn-xs\"><a class=\"XiboFormButton btns\" title=\"{% trans \"Add a new User Group\" %}\" href=\"{{ urlFor(\"group.add.form\") }}\"> <i class=\"fa fa-users\" aria-hidden=\"true\"></i> {% trans \"Add User Group\" %}</a></li>
        {% endif %}
    </ul>
{% endblock %}


{% block pageContent %}
    <div class=\"widget\">
        <div class=\"widget-title\">{% trans \"User Groups\" %}</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"{{ random() }}\" data-grid-name=\"userGroupView\">
                <div class=\"XiboFilter well\">
                    <div class=\"FilterDiv\" id=\"Filter\">
                        <form class=\"form-inline\">
                            {{ inline.input(\"userGroup\", \"Name\") }}
                        </form>
                    </div>
                </div>
                <div class=\"XiboData\">
                    <table id=\"userGroups\" class=\"table table-striped\">
                        <thead>
                            <tr>
                                <th>{% trans \"User Group\" %}</th>
                                <th>{% trans \"Library Quota\" %}</th>
                                <th>{% trans \"Receive System Notifications?\" %}</th>
                                <th>{% trans \"Receive Display Notifications?\" %}</th>
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
            var table = \$(\"#userGroups\").DataTable({
                \"language\": dataTablesLanguage,
                serverSide: true, stateSave: true,
                searchDelay: 3000,
                filter: false,
                \"order\": [[0, \"asc\"]],
                ajax: {
                    url: \"{{ urlFor(\"group.search\") }}\",
                    \"data\": function (d) {
                        \$.extend(d, \$(\"#userGroups\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                    }
                },
                \"columns\": [
                    {\"data\": \"group\", \"render\": dataTableSpacingPreformatted },
                    {
                        \"name\": \"libraryQuota\",
                        \"data\": null,
                        \"render\": {\"_\": \"libraryQuota\", \"display\": \"libraryQuotaFormatted\", \"sort\": \"libraryQuota\"}
                    },
                    {
                        \"data\": \"isSystemNotification\",
                        \"render\": dataTableTickCrossColumn
                    },
                    {
                        \"data\": \"isDisplayNotification\",
                        \"render\": dataTableTickCrossColumn
                    },
                    {
                        \"orderable\": false,
                        \"data\": dataTableButtonsColumn
                    }
                ]
            });

            table.on('draw', dataTableDraw);
            table.on('processing.dt', dataTableProcessing);
        });

        function userGroupFormOpen() {
            // Bind to the add form submit
            \$(\".UserGroupForm\").validate({
                submitHandler: function (form) {
                    // Grab and alter the value in the library quota field
                    var libraryQuotaField = \$(form).find(\"input[name=libraryQuota]\");
                    var libraryQuotaUnitsField = \$(form).find(\"select[name=libraryQuotaUnits]\");
                    var libraryQuota = libraryQuotaField.val();

                    if (libraryQuotaUnitsField.val() == 'mb') {
                        libraryQuota = libraryQuota * 1024;
                    } else if (libraryQuotaUnitsField.val() == 'gb') {
                        libraryQuota = libraryQuota * 1024 * 1024;
                    }

                    // Set the field
                    libraryQuotaField.prop('value', libraryQuota);

                    XiboFormSubmit(form);
                },
                errorElement: \"span\",
                highlight: function(element) {
                    \$(element).closest('.form-group').removeClass('has-success').addClass('has-error');
                },
                success: function(element) {
                    \$(element).closest('.form-group').removeClass('has-error').addClass('has-success');
                },
                invalidHandler: function() {
                    // Remove the spinner
                    \$(this).closest(\".modal-dialog\").find(\".saving\").remove();
                }
            });
        }
    </script>
{% endblock %}", "usergroup-page.twig", "/var/www/web/views/usergroup-page.twig");
    }
}
