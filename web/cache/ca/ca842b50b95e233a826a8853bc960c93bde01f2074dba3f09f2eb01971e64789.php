<?php

/* display-page.twig */
class __TwigTemplate_d0d02146d4e85b57bd205e3e36c4a6dcafd234cf148dbdbe4e6dec10051686f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 9
        $this->parent = $this->loadTemplate("authed.twig", "display-page.twig", 9);
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
        $context["inline"] = $this->loadTemplate("inline.twig", "display-page.twig", 10);
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
        echo __("Displays");
        echo "</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\" data-grid-name=\"displayView\">
                <div class=\"XiboFilter well\">
                    <div class=\"FilterDiv\" id=\"Filter\">
                        <form class=\"form-inline\">

                            ";
        // line 21
        ob_start();
        echo __("Name");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 22
        echo "                            ";
        echo $context["inline"]->getinput("display", (isset($context["title"]) ? $context["title"] : null));
        echo "

                            ";
        // line 24
        ob_start();
        echo __("Mac Address");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 25
        echo "                            ";
        echo $context["inline"]->getinput("macAddress", (isset($context["title"]) ? $context["title"] : null));
        echo "

                            ";
        // line 27
        ob_start();
        echo __("Display Group");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 28
        echo "                            ";
        echo $context["inline"]->getdropdown("displayGroupId", "single", (isset($context["title"]) ? $context["title"] : null), "", twig_array_merge(array(0 => array("displayGroupId" => null, "displayGroup" => "")), (isset($context["displayGroups"]) ? $context["displayGroups"] : null)), "displayGroupId", "displayGroup");
        echo "

                            ";
        // line 30
        ob_start();
        echo __("Display Profile");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 31
        echo "                            ";
        echo $context["inline"]->getdropdown("displayProfileId", "single", (isset($context["title"]) ? $context["title"] : null), "", twig_array_merge(array(0 => array("displayProfileId" => null, "name" => "")), (isset($context["displayProfiles"]) ? $context["displayProfiles"] : null)), "displayProfileId", "name");
        echo "

                            ";
        // line 33
        ob_start();
        echo __("Authorised?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 34
        echo "                            ";
        ob_start();
        echo __("Yes");
        $context["yesOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 35
        echo "                            ";
        ob_start();
        echo __("No");
        $context["noOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 36
        echo "                            ";
        $context["options"] = array(0 => array("optionid" => "", "option" => ""), 1 => array("optionid" => "1", "option" =>         // line 38
(isset($context["yesOption"]) ? $context["yesOption"] : null)), 2 => array("optionid" => "0", "option" =>         // line 39
(isset($context["noOption"]) ? $context["noOption"] : null)));
        // line 41
        echo "                            ";
        echo $context["inline"]->getdropdown("authorised", "single", (isset($context["title"]) ? $context["title"] : null), "", (isset($context["options"]) ? $context["options"] : null), "optionid", "option");
        echo "

                            ";
        // line 43
        ob_start();
        echo __("Tags");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 44
        echo "                            ";
        ob_start();
        echo __("A comma separated list of tags to filter by. Enter --no-tag to see items without tags.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 45
        echo "                            ";
        echo $context["inline"]->getinputWithTags("tags", (isset($context["title"]) ? $context["title"] : null), null, (isset($context["helpText"]) ? $context["helpText"] : null));
        echo "
                        </form>
                    </div>
                </div>
                <div class=\"XiboData\">
                    <table id=\"displays\" class=\"table table-striped\">
                        <thead>
                            <tr>
                                <th>";
        // line 53
        echo __("ID");
        echo "</th>
                                <th>";
        // line 54
        echo __("Display");
        echo "</th>
                                <th>";
        // line 55
        echo __("Status");
        echo "</th>
                                <th>";
        // line 56
        echo __("Authorised?");
        echo "</th>
                                <th>";
        // line 57
        echo __("Current Layout");
        echo "</th>
                                <th>";
        // line 58
        echo __("Storage Available");
        echo "</th>
                                <th>";
        // line 59
        echo __("Storage Total");
        echo "</th>
                                <th>";
        // line 60
        echo __("Storage Free %");
        echo "</th>
                                <th>";
        // line 61
        echo __("Description");
        echo "</th>
                                <th>";
        // line 62
        echo __("Tags");
        echo "</th>
                                <th>";
        // line 63
        echo __("Default Layout");
        echo "</th>
                                <th>";
        // line 64
        echo __("Interleave Default");
        echo "</th>
                                <th>";
        // line 65
        echo __("Email Alert");
        echo "</th>
                                <th>";
        // line 66
        echo __("Logged In");
        echo "</th>
                                <th>";
        // line 67
        echo __("Last Accessed");
        echo "</th>
                                <th>";
        // line 68
        echo __("Display Profile");
        echo "</th>
                                <th>";
        // line 69
        echo __("Version");
        echo "</th>
                                <th>";
        // line 70
        echo __("Device Name");
        echo "</th>
                                <th>";
        // line 71
        echo __("IP Address");
        echo "</th>
                                <th>";
        // line 72
        echo __("Mac Address");
        echo "</th>
                                <th>";
        // line 73
        echo __("Timezone");
        echo "</th>
                                <th>";
        // line 74
        echo __("Screen shot?");
        echo "</th>
                                <th>";
        // line 75
        echo __("Thumbnail");
        echo "</th>
                                <th>";
        // line 76
        echo __("Last Command");
        echo "</th>
                                <th>";
        // line 77
        echo __("XMR Registered");
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

    // line 91
    public function block_javaScript($context, array $blocks = array())
    {
        // line 92
        echo "    <script type=\"text/javascript\">
        \$(document).ready(function() {
            var table = \$(\"#displays\").DataTable({
                \"language\": dataTablesLanguage,
                serverSide: true, stateSave: true,
                filter: false,
                searchDelay: 3000,
                \"order\": [[1, \"asc\"]],
                ajax: {
                    \"url\": \"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("display.search"), "html", null, true);
        echo "\",
                    \"data\": function (dataToSend) {
                        //make a new object so as not to destroy the input.
                        var data = {};
                        data.draw = dataToSend.draw;
                        data.length = dataToSend.length;
                        data.start = dataToSend.start;
                        data.order = dataToSend.order;
                        data.columns = [];

                        \$.each(dataToSend.columns, function (index, e) {
                            var col = {};
                            col.data = e.data;
                            if (e.name != null && e.name != \"\")
                                col.name = e.name;
                            data.columns.push(col);
                        });

                        \$.extend(data, \$(\"#displays\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());

                        return data;
                    }
                },
                \"columns\": [
                    {\"data\": \"displayId\"},
                    {
                        \"name\": \"display\",
                        \"data\": function (data, type) {
                            if (type != \"display\")
                                return data.display;

                            if (\"";
        // line 132
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "SHOW_DISPLAY_AS_VNCLINK", array()), "html", null, true);
        echo "\" != \"\" && data.clientAddress != null && data.clientAddress != \"\") {
                                var link = \"";
        // line 133
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "SHOW_DISPLAY_AS_VNCLINK", array()), "html", null, true);
        echo "\".replace('%s', data.clientAddress);
                                return '<a href=\"' + link + '\" title=\"";
        // line 134
        echo __("VNC to this Display");
        echo "\" target=\"' + data.clientAddress + '\">' + data.display + '</a>';
                            }
                            else {
                                return data.display;
                            }
                        }
                    },
                    {
                        \"data\": \"mediaInventoryStatus\",
                        \"render\": function (data, type, row) {
                            if (type != \"display\")
                                return data;

                            var icon = \"\";
                            if (data == 1)
                                icon = \"fa-check\";
                            else if (data == 2)
                                icon = \"fa-times\";
                            else
                                icon = \"fa-cloud-download\";

                            return \"<span class='fa \" + icon + \"'></span>\";
                        }
                    },
                    {\"data\": \"licensed\", \"render\": dataTableTickCrossColumn},
                    {\"data\": \"currentLayout\", \"visible\": false},
                    {
                        \"data\": \"storageAvailableSpace\",
                        \"visible\": false,
                        \"render\": function (data, type, row) {
                            if (type != \"display\")
                                return data;

                            return row.storageAvailableSpaceFormatted;
                        }
                    },
                    {
                        \"data\": \"storageTotalSpace\",
                        \"visible\": false,
                        \"render\": function (data, type, row) {
                            if (type != \"display\")
                                return data;

                            return row.storageTotalSpaceFormatted;
                        }
                    },
                    {\"data\": \"storagePercentage\", \"visible\": false},
                    {\"data\": \"description\", \"visible\": false},
                    {
                        \"name\": \"tags\",
                        \"sortable\": false,
                        \"visible\": false,
                        \"data\": dataTableCreateTags
                    },
                    {\"data\": \"defaultLayout\", \"visible\": false},
                    {\"data\": \"incSchedule\", \"render\": dataTableTickCrossColumn, \"visible\": false},
                    {\"data\": \"emailAlert\", \"render\": dataTableTickCrossColumn, \"visible\": false},
                    {\"data\": \"loggedIn\", \"render\": dataTableTickCrossColumn},
                    {\"data\": \"lastAccessed\", \"render\": dataTableDateFromUnix},
                    {
                        \"name\": \"displayProfileId\",
                        \"data\": function (data, type) {
                            return data.displayProfile;
                        },
                        \"visible\": false
                    },
                    {
                        \"name\": \"clientVersion\",
                        \"data\": function (data, type) {
                            if (type != \"display\")
                                return data.clientVersion;

                            return data.clientType + ' ' + data.clientVersion + '-' + data.clientCode;
                        },
                        \"visible\": false
                    },
                    {\"data\": \"deviceName\", \"visible\": false},
                    {\"data\": \"clientAddress\", \"visible\": false},
                    {\"data\": \"macAddress\"},
                    {\"data\": \"timeZone\", \"visible\": false},
                    {\"data\": \"screenShotRequested\", \"render\": dataTableTickCrossColumn, \"visible\": false},
                    {
                        \"orderable\": false,
                        \"data\": function (data, type) {
                            if (type != \"display\")
                                return data.thumbnail;

                            if (data.thumbnail != \"\") {
                                return '<a data-toggle=\"lightbox\" data-type=\"image\" href=\"' + data.thumbnail + '\"><img class=\"display-screenshot\" src=\"' + data.thumbnail + '\" /></a>';
                            }
                            else {
                                return \"\";
                            }
                        },
                        \"visible\": false
                    },
                    {
                        \"data\": \"lastCommandSuccess\",
                        \"render\": function (data, type, row) {
                            if (type != \"display\")
                                return data;

                            var icon = \"\";
                            if (data == 1)
                                icon = \"fa-check\";
                            else if (data == 0)
                                icon = \"fa-times\";
                            else
                                icon = \"fa-question\";

                            return \"<span class='fa \" + icon + \"'></span>\";
                        },
                        \"visible\": false
                    },
                    {
                        \"data\": \"xmrChannel\",
                        \"render\": function (data, type, row) {
                            if (type === \"export\") {
                                return (data !== null && data !== \"\") ? 1 : 0;
                            }

                            if (type != \"display\")
                                return data;

                            var icon = \"\";
                            if (data != null && data != \"\")
                                icon = \"fa-check\";
                            else
                                icon = \"fa-times\";

                            return \"<span class='fa \" + icon + \"'></span>\";
                        },
                        \"visible\": false
                    },
                    {
                        \"orderable\": false,
                        \"data\": dataTableButtonsColumn
                    }
                ]
            });

            table.on('draw', dataTableDraw);
            table.on('draw', { form: \$(\"#displays\").closest(\".XiboGrid\").find(\".FilterDiv form\") }, dataTableCreateTagEvents);
            table.on('processing.dt', dataTableProcessing);
            dataTableAddButtons(table, \$('#displays_wrapper').find('.col-sm-6').eq(1));
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "display-page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  306 => 134,  302 => 133,  298 => 132,  264 => 101,  253 => 92,  250 => 91,  233 => 77,  229 => 76,  225 => 75,  221 => 74,  217 => 73,  213 => 72,  209 => 71,  205 => 70,  201 => 69,  197 => 68,  193 => 67,  189 => 66,  185 => 65,  181 => 64,  177 => 63,  173 => 62,  169 => 61,  165 => 60,  161 => 59,  157 => 58,  153 => 57,  149 => 56,  145 => 55,  141 => 54,  137 => 53,  125 => 45,  120 => 44,  116 => 43,  110 => 41,  108 => 39,  107 => 38,  105 => 36,  100 => 35,  95 => 34,  91 => 33,  85 => 31,  81 => 30,  75 => 28,  71 => 27,  65 => 25,  61 => 24,  55 => 22,  51 => 21,  43 => 16,  38 => 14,  35 => 13,  32 => 12,  28 => 9,  26 => 10,  11 => 9,);
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

{% block pageContent %}
    <div class=\"widget\">
        <div class=\"widget-title\">{% trans \"Displays\" %}</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"{{ random() }}\" data-grid-name=\"displayView\">
                <div class=\"XiboFilter well\">
                    <div class=\"FilterDiv\" id=\"Filter\">
                        <form class=\"form-inline\">

                            {% set title %}{% trans \"Name\" %}{% endset %}
                            {{ inline.input(\"display\", title) }}

                            {% set title %}{% trans \"Mac Address\" %}{% endset %}
                            {{ inline.input(\"macAddress\", title) }}

                            {% set title %}{% trans \"Display Group\" %}{% endset %}
                            {{ inline.dropdown(\"displayGroupId\", \"single\", title, \"\", [{displayGroupId:null, displayGroup:\"\"}]|merge(displayGroups), \"displayGroupId\", \"displayGroup\") }}

                            {% set title %}{% trans \"Display Profile\" %}{% endset %}
                            {{ inline.dropdown(\"displayProfileId\", \"single\", title, \"\", [{displayProfileId:null, name:\"\"}]|merge(displayProfiles), \"displayProfileId\", \"name\") }}

                            {% set title %}{% trans \"Authorised?\" %}{% endset %}
                            {% set yesOption %}{% trans \"Yes\" %}{% endset %}
                            {% set noOption %}{% trans \"No\" %}{% endset %}
                            {% set options = [
                            { optionid: \"\", option: \"\" },
                            { optionid: \"1\", option: yesOption },
                            { optionid: \"0\", option: noOption},
                            ] %}
                            {{ inline.dropdown(\"authorised\", \"single\", title, \"\", options, \"optionid\", \"option\") }}

                            {% set title %}{% trans \"Tags\" %}{% endset %}
                            {% set helpText %}{% trans \"A comma separated list of tags to filter by. Enter --no-tag to see items without tags.\" %}{% endset %}
                            {{ inline.inputWithTags(\"tags\", title, null, helpText) }}
                        </form>
                    </div>
                </div>
                <div class=\"XiboData\">
                    <table id=\"displays\" class=\"table table-striped\">
                        <thead>
                            <tr>
                                <th>{% trans \"ID\" %}</th>
                                <th>{% trans \"Display\" %}</th>
                                <th>{% trans \"Status\" %}</th>
                                <th>{% trans \"Authorised?\" %}</th>
                                <th>{% trans \"Current Layout\" %}</th>
                                <th>{% trans \"Storage Available\" %}</th>
                                <th>{% trans \"Storage Total\" %}</th>
                                <th>{% trans \"Storage Free %\" %}</th>
                                <th>{% trans \"Description\" %}</th>
                                <th>{% trans \"Tags\" %}</th>
                                <th>{% trans \"Default Layout\" %}</th>
                                <th>{% trans \"Interleave Default\" %}</th>
                                <th>{% trans \"Email Alert\" %}</th>
                                <th>{% trans \"Logged In\" %}</th>
                                <th>{% trans \"Last Accessed\" %}</th>
                                <th>{% trans \"Display Profile\" %}</th>
                                <th>{% trans \"Version\" %}</th>
                                <th>{% trans \"Device Name\" %}</th>
                                <th>{% trans \"IP Address\" %}</th>
                                <th>{% trans \"Mac Address\" %}</th>
                                <th>{% trans \"Timezone\" %}</th>
                                <th>{% trans \"Screen shot?\" %}</th>
                                <th>{% trans \"Thumbnail\" %}</th>
                                <th>{% trans \"Last Command\" %}</th>
                                <th>{% trans \"XMR Registered\" %}</th>
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
            var table = \$(\"#displays\").DataTable({
                \"language\": dataTablesLanguage,
                serverSide: true, stateSave: true,
                filter: false,
                searchDelay: 3000,
                \"order\": [[1, \"asc\"]],
                ajax: {
                    \"url\": \"{{ urlFor(\"display.search\") }}\",
                    \"data\": function (dataToSend) {
                        //make a new object so as not to destroy the input.
                        var data = {};
                        data.draw = dataToSend.draw;
                        data.length = dataToSend.length;
                        data.start = dataToSend.start;
                        data.order = dataToSend.order;
                        data.columns = [];

                        \$.each(dataToSend.columns, function (index, e) {
                            var col = {};
                            col.data = e.data;
                            if (e.name != null && e.name != \"\")
                                col.name = e.name;
                            data.columns.push(col);
                        });

                        \$.extend(data, \$(\"#displays\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());

                        return data;
                    }
                },
                \"columns\": [
                    {\"data\": \"displayId\"},
                    {
                        \"name\": \"display\",
                        \"data\": function (data, type) {
                            if (type != \"display\")
                                return data.display;

                            if (\"{{ settings.SHOW_DISPLAY_AS_VNCLINK }}\" != \"\" && data.clientAddress != null && data.clientAddress != \"\") {
                                var link = \"{{ settings.SHOW_DISPLAY_AS_VNCLINK }}\".replace('%s', data.clientAddress);
                                return '<a href=\"' + link + '\" title=\"{% trans \"VNC to this Display\" %}\" target=\"' + data.clientAddress + '\">' + data.display + '</a>';
                            }
                            else {
                                return data.display;
                            }
                        }
                    },
                    {
                        \"data\": \"mediaInventoryStatus\",
                        \"render\": function (data, type, row) {
                            if (type != \"display\")
                                return data;

                            var icon = \"\";
                            if (data == 1)
                                icon = \"fa-check\";
                            else if (data == 2)
                                icon = \"fa-times\";
                            else
                                icon = \"fa-cloud-download\";

                            return \"<span class='fa \" + icon + \"'></span>\";
                        }
                    },
                    {\"data\": \"licensed\", \"render\": dataTableTickCrossColumn},
                    {\"data\": \"currentLayout\", \"visible\": false},
                    {
                        \"data\": \"storageAvailableSpace\",
                        \"visible\": false,
                        \"render\": function (data, type, row) {
                            if (type != \"display\")
                                return data;

                            return row.storageAvailableSpaceFormatted;
                        }
                    },
                    {
                        \"data\": \"storageTotalSpace\",
                        \"visible\": false,
                        \"render\": function (data, type, row) {
                            if (type != \"display\")
                                return data;

                            return row.storageTotalSpaceFormatted;
                        }
                    },
                    {\"data\": \"storagePercentage\", \"visible\": false},
                    {\"data\": \"description\", \"visible\": false},
                    {
                        \"name\": \"tags\",
                        \"sortable\": false,
                        \"visible\": false,
                        \"data\": dataTableCreateTags
                    },
                    {\"data\": \"defaultLayout\", \"visible\": false},
                    {\"data\": \"incSchedule\", \"render\": dataTableTickCrossColumn, \"visible\": false},
                    {\"data\": \"emailAlert\", \"render\": dataTableTickCrossColumn, \"visible\": false},
                    {\"data\": \"loggedIn\", \"render\": dataTableTickCrossColumn},
                    {\"data\": \"lastAccessed\", \"render\": dataTableDateFromUnix},
                    {
                        \"name\": \"displayProfileId\",
                        \"data\": function (data, type) {
                            return data.displayProfile;
                        },
                        \"visible\": false
                    },
                    {
                        \"name\": \"clientVersion\",
                        \"data\": function (data, type) {
                            if (type != \"display\")
                                return data.clientVersion;

                            return data.clientType + ' ' + data.clientVersion + '-' + data.clientCode;
                        },
                        \"visible\": false
                    },
                    {\"data\": \"deviceName\", \"visible\": false},
                    {\"data\": \"clientAddress\", \"visible\": false},
                    {\"data\": \"macAddress\"},
                    {\"data\": \"timeZone\", \"visible\": false},
                    {\"data\": \"screenShotRequested\", \"render\": dataTableTickCrossColumn, \"visible\": false},
                    {
                        \"orderable\": false,
                        \"data\": function (data, type) {
                            if (type != \"display\")
                                return data.thumbnail;

                            if (data.thumbnail != \"\") {
                                return '<a data-toggle=\"lightbox\" data-type=\"image\" href=\"' + data.thumbnail + '\"><img class=\"display-screenshot\" src=\"' + data.thumbnail + '\" /></a>';
                            }
                            else {
                                return \"\";
                            }
                        },
                        \"visible\": false
                    },
                    {
                        \"data\": \"lastCommandSuccess\",
                        \"render\": function (data, type, row) {
                            if (type != \"display\")
                                return data;

                            var icon = \"\";
                            if (data == 1)
                                icon = \"fa-check\";
                            else if (data == 0)
                                icon = \"fa-times\";
                            else
                                icon = \"fa-question\";

                            return \"<span class='fa \" + icon + \"'></span>\";
                        },
                        \"visible\": false
                    },
                    {
                        \"data\": \"xmrChannel\",
                        \"render\": function (data, type, row) {
                            if (type === \"export\") {
                                return (data !== null && data !== \"\") ? 1 : 0;
                            }

                            if (type != \"display\")
                                return data;

                            var icon = \"\";
                            if (data != null && data != \"\")
                                icon = \"fa-check\";
                            else
                                icon = \"fa-times\";

                            return \"<span class='fa \" + icon + \"'></span>\";
                        },
                        \"visible\": false
                    },
                    {
                        \"orderable\": false,
                        \"data\": dataTableButtonsColumn
                    }
                ]
            });

            table.on('draw', dataTableDraw);
            table.on('draw', { form: \$(\"#displays\").closest(\".XiboGrid\").find(\".FilterDiv form\") }, dataTableCreateTagEvents);
            table.on('processing.dt', dataTableProcessing);
            dataTableAddButtons(table, \$('#displays_wrapper').find('.col-sm-6').eq(1));
        });
    </script>
{% endblock %}", "display-page.twig", "/var/www/web/views/display-page.twig");
    }
}
