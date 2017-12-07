<?php

/* library-page.twig */
class __TwigTemplate_d4763b5042d4bd696caea7f0c5578c5fc5d0c393ae006eee1839336317123c81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 9
        $this->parent = $this->loadTemplate("authed.twig", "library-page.twig", 9);
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
        $context["inline"] = $this->loadTemplate("inline.twig", "library-page.twig", 10);
        // line 9
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_actionMenu($context, array $blocks = array())
    {
        // line 13
        echo "    <ul class=\"nav nav-pills pull-right\">
    <li class=\"btn btn-success btn-xs\"><a class=\"btns\" href=\"#\" id=\"libraryUploadForm\" title=\"";
        // line 14
        echo __("Add a new media item to the library");
        echo "\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> ";
        echo __("Add Media");
        echo "</a></li>
        ";
        // line 15
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "SETTING_LIBRARY_TIDY_ENABLED", array()) == 1)) {
            // line 16
            echo "            <li class=\"btn btn-danger btn-xs\"><a class=\"XiboFormButton btns\" title=\"";
            echo __("Run through the library and remove unused and unnecessary files");
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("library.tidy.form"), "html", null, true);
            echo "\"> <i class=\"fa fa-trash\" aria-hidden=\"true\"></i> ";
            echo __("Tidy Library");
            echo "</a></li>
        ";
        }
        // line 18
        echo "    </ul>
";
    }

    // line 22
    public function block_pageContent($context, array $blocks = array())
    {
        // line 23
        echo "    <div class=\"widget\">
        <div class=\"widget-title\">";
        // line 24
        echo __("Library");
        echo "</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\" data-grid-name=\"libraryView\">
                <div class=\"XiboFilter well\">
                    <div class=\"FilterDiv\" id=\"Filter\">
                        <form class=\"form-inline\">
                            ";
        // line 30
        ob_start();
        echo __("Name");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 31
        echo "                            ";
        echo $context["inline"]->getinput("media", (isset($context["title"]) ? $context["title"] : null));
        echo "

                            ";
        // line 33
        ob_start();
        echo __("Tags");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 34
        echo "                            ";
        ob_start();
        echo __("A comma separated list of tags to filter by. Enter --no-tag to see items without tags.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 35
        echo "                            ";
        echo $context["inline"]->getinputWithTags("tags", (isset($context["title"]) ? $context["title"] : null), null, (isset($context["helpText"]) ? $context["helpText"] : null));
        echo "

                            ";
        // line 37
        $context["attributes"] = array(0 => array("name" => "data-live-search", "value" => "true"), 1 => array("name" => "data-selected-text-format", "value" => "count > 4"));
        // line 41
        echo "
                            ";
        // line 42
        ob_start();
        echo __("Owner");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 43
        echo "                            ";
        $context["users"] = twig_array_merge(array(0 => array("userId" => null, "userName" => "")), (isset($context["users"]) ? $context["users"] : null));
        // line 44
        echo "                            ";
        echo $context["inline"]->getdropdown("ownerId", "single", (isset($context["title"]) ? $context["title"] : null), null, (isset($context["users"]) ? $context["users"] : null), "userId", "userName", "", "selectPicker", "", "", "", (isset($context["attributes"]) ? $context["attributes"] : null));
        echo "

                            ";
        // line 46
        ob_start();
        echo __("Owner User Group");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 47
        echo "                            ";
        ob_start();
        echo __("Show items owned by users in the selected User Group.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 48
        echo "                            ";
        echo $context["inline"]->getdropdown("ownerUserGroupId", "single", (isset($context["title"]) ? $context["title"] : null), "", twig_array_merge(array(0 => array("groupId" => null, "group" => "")), (isset($context["groups"]) ? $context["groups"] : null)), "groupId", "group", (isset($context["helpText"]) ? $context["helpText"] : null), "selectPicker", "", "", "", (isset($context["attributes"]) ? $context["attributes"] : null));
        echo "

                            ";
        // line 50
        ob_start();
        echo __("Type");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 51
        echo "                            ";
        echo $context["inline"]->getdropdown("type", "single", (isset($context["title"]) ? $context["title"] : null), "", twig_array_merge(array(0 => array("type" => null, "name" => "")), (isset($context["modules"]) ? $context["modules"] : null)), "type", "name");
        echo "

                            ";
        // line 53
        ob_start();
        echo __("Retired");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 54
        echo "                            ";
        $context["values"] = array(0 => array("id" => 1, "value" => "Yes"), 1 => array("id" => 0, "value" => "No"));
        // line 55
        echo "                            ";
        echo $context["inline"]->getdropdown("retired", "single", (isset($context["title"]) ? $context["title"] : null), 0, (isset($context["values"]) ? $context["values"] : null), "id", "value");
        echo "
                        </form>
                    </div>
                </div>
                <div class=\"XiboData\">
                    <table id=\"libraryItems\" class=\"table table-striped\">
                        <thead>
                            <tr>
                                <th>";
        // line 63
        echo __("ID");
        echo "</th>
                                <th>";
        // line 64
        echo __("Name");
        echo "</th>
                                <th>";
        // line 65
        echo __("Type");
        echo "</th>
                                <th>";
        // line 66
        echo __("Tag");
        echo "</th>
                                <th>";
        // line 67
        echo __("Thumbnail");
        echo "</th>
                                <th>";
        // line 68
        echo __("Duration");
        echo "</th>
                                <th>";
        // line 69
        echo __("Duration (seconds)");
        echo "</th>
                                <th>";
        // line 70
        echo __("Size");
        echo "</th>
                                <th>";
        // line 71
        echo __("Size (bytes)");
        echo "</th>
                                <th>";
        // line 72
        echo __("Owner");
        echo "</th>
                                <th>";
        // line 73
        echo __("Permissions");
        echo "</th>
                                <th>";
        // line 74
        echo __("Revised");
        echo "</th>
                                <th>";
        // line 75
        echo __("File Name");
        echo "</th>
                                <th>";
        // line 76
        echo __("Created");
        echo "</th>
                                <th>";
        // line 77
        echo __("Modified");
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
        var table;
        \$(document).ready(function() {
            table = \$(\"#libraryItems\").DataTable({
                \"language\": dataTablesLanguage,
                serverSide: true, stateSave: true,
                filter: false,
                searchDelay: 3000,
                \"order\": [[1, \"asc\"]],
                ajax: {
                    \"url\": \"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("library.search"), "html", null, true);
        echo "\",
                    \"data\": function (d) {
                        \$.extend(d, \$(\"#libraryItems\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                    }
                },
                \"columns\": [
                    {\"data\": \"mediaId\"},
                    {\"data\": \"name\", \"render\": dataTableSpacingPreformatted },
                    {\"data\": \"mediaType\"},
                    {
                        \"sortable\": false,
                        \"visible\": false,
                        \"data\": dataTableCreateTags
                    },
                    {
                        \"name\": \"mediaId\",
                        \"data\": null,
                        \"render\": {\"_\": \"thumbnail\", \"display\": \"thumbnail\", \"sort\": \"mediaId\"}
                    },
                    {
                        \"name\": \"duration\",
                        \"data\": function (data, type) {
                            if (type != \"display\")
                                return data.duration;

                            return moment().startOf(\"day\").seconds(data.duration).format(\"H:mm:ss\");
                        }
                    },
                    {\"data\": \"duration\", \"visible\": false},
                    {
                        \"name\": \"fileSize\",
                        \"data\": null,
                        \"render\": {\"_\": \"fileSize\", \"display\": \"fileSizeFormatted\", \"sort\": \"fileSize\"}
                    },
                    {\"data\": \"fileSize\", \"visible\": false},
                    {\"data\": \"owner\"},
                    {\"data\": \"groupsWithPermissions\"},
                    {\"data\": \"revised\", \"render\": dataTableTickCrossColumn, \"visible\": false},
                    {\"data\": \"fileName\"},
                    {
                        \"data\": \"createdDt\",
                        \"render\": dataTableDateFromIso,
                        \"visible\": false
                    },
                    {
                        \"data\": \"modifiedDt\",
                        \"render\": dataTableDateFromIso,
                        \"visible\": false
                    },
                    {
                        \"orderable\": false,
                        \"data\": dataTableButtonsColumn
                    }
                ]
            });

            table.on('draw', dataTableDraw);
            table.on('draw', { form: \$(\"#libraryItems\").closest(\".XiboGrid\").find(\".FilterDiv form\") } ,dataTableCreateTagEvents);
            table.on('processing.dt', dataTableProcessing);
            dataTableAddButtons(table, \$('#libraryItems_wrapper').find('.col-sm-6').eq(1));
        });

        \$(\"#libraryUploadForm\").click(function(e) {
            e.preventDefault();

            openUploadForm({
                trans: {
                    addFiles: \"";
        // line 169
        echo __("Add files");
        echo "\",
                    startUpload: \"";
        // line 170
        echo __("Start upload");
        echo "\",
                    cancelUpload: \"";
        // line 171
        echo __("Cancel upload");
        echo "\"
                },
                upload: {
                    maxSize: ";
        // line 174
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["libraryUpload"]) ? $context["libraryUpload"] : null), "maxSize", array()), "html", null, true);
        echo ",
                    maxSizeMessage: \"";
        // line 175
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["libraryUpload"]) ? $context["libraryUpload"] : null), "maxSizeMessage", array()), "html", null, true);
        echo "\",
                    validExt: \"";
        // line 176
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["libraryUpload"]) ? $context["libraryUpload"] : null), "validExt", array()), "html", null, true);
        echo "\"
                },
                updateInAllChecked: ";
        // line 178
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "LIBRARY_MEDIA_UPDATEINALL_CHECKB", array()) == "Checked")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                deleteOldRevisionsChecked: ";
        // line 179
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "LIBRARY_MEDIA_DELETEOLDVER_CHECKB", array()) == "Checked")) {
            echo "true";
        } else {
            echo "false";
        }
        // line 180
        echo "            });
        });

        /**
         * Media Edit form
         */
        function mediaEditFormOpen(dialog) {
            // Create a new button
            var footer = dialog.find(\".modal-footer\");
            var mediaId = dialog.find(\"#mediaEditForm\").data().mediaId;
            var validExtensions = dialog.find(\"#mediaEditForm\").data().validExtensions;

            // Append
            var replaceButton = \$('<button class=\"btn btn-warning\">').html(\"";
        // line 193
        echo __("Replace");
        echo "\");
            replaceButton.click(function(e) {
                e.preventDefault();

                // Open the upload dialog with our options.
                openUploadForm({
                    oldMediaId: mediaId,
                    updateInAllChecked: ";
        // line 200
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "LIBRARY_MEDIA_UPDATEINALL_CHECKB", array()) == "Checked")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                    deleteOldRevisionsChecked: ";
        // line 201
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "LIBRARY_MEDIA_DELETEOLDVER_CHECKB", array()) == "Checked")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                    trans: {
                        addFiles: \"";
        // line 203
        echo __("Add Replacement");
        echo "\",
                        startUpload: \"";
        // line 204
        echo __("Start Replace");
        echo "\",
                        cancelUpload: \"";
        // line 205
        echo __("Cancel Replace");
        echo "\",
                        updateInLayouts: {
                            title: \"";
        // line 207
        echo __("Update this media in all layouts it is assigned to?");
        echo "\",
                            helpText: \"";
        // line 208
        echo __("Note: It will only be updated in layouts you have permission to edit.");
        echo "\"
                        },
                        deleteOldRevisions: {
                            title: \"";
        // line 211
        echo __("Delete the old version?");
        echo "\",
                            helpText: \"";
        // line 212
        echo __("Completely remove the old version of this media item if a new file is being uploaded.");
        echo "\"
                        }
                    },
                    upload: {
                        maxSize: ";
        // line 216
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["libraryUpload"]) ? $context["libraryUpload"] : null), "maxSize", array()), "html", null, true);
        echo ",
                        maxSizeMessage: \"";
        // line 217
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["libraryUpload"]) ? $context["libraryUpload"] : null), "maxSizeMessage", array()), "html", null, true);
        echo "\",
                        validExt: validExtensions
                    }
                });
            });

            footer.find(\".btn-primary\").before(replaceButton);
        }

        /**
         * Opens the upload form
         * @param templateOptions
         */
        function openUploadForm(templateOptions) {

            var template = Handlebars.compile(\$(\"#template-file-upload\").html());

            // Handle bars and open a dialog
            bootbox.dialog({
                message: template(templateOptions),
                title: \"";
        // line 237
        echo __("Upload media");
        echo "\",
                buttons: {
                    main: {
                        label: \"";
        // line 240
        echo __("Done");
        echo "\",
                        className: \"btn-primary\",
                        callback: function() {
                            table.ajax.reload();
                            XiboDialogClose();
                        }
                    }
                }
            }).on('shown.bs.modal', function() {
                // Configure the upload form
                var url = \"";
        // line 250
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("library.add"), "html", null, true);
        echo "\";
                var form = \$(this).find(\"form\");
                var refreshSessionInterval;

                // Initialize the jQuery File Upload widget:
                form.fileupload({
                    url: url,
                    disableImageResize: true,
                    previewMaxWidth: 100,
                    previewMaxHeight: 100,
                    previewCrop: true
                });

                // Upload server status check for browsers with CORS support:
                if (\$.support.cors) {
                    \$.ajax({
                        url: url,
                        type: 'HEAD'
                    }).fail(function () {
                        \$('<span class=\"alert alert-error\"/>')
                                .text('Upload server currently unavailable - ' + new Date())
                                .appendTo(form);
                    });
                }

                // Enable iframe cross-domain access via redirect option:
                form.fileupload(
                        'option',
                        'redirect',
                        window.location.href.replace(
                                /\\/[^\\/]*\$/,
                                '/cors/result.html?%s'
                        )
                );

                form.bind('fileuploadsubmit', function (e, data) {
                    var inputs = data.context.find(':input');
                    if (inputs.filter('[required][value=\"\"]').first().focus().length) {
                        return false;
                    }
                    data.formData = inputs.serializeArray().concat(form.serializeArray());

                    inputs.filter(\"input\").prop(\"disabled\", true);
                }).bind('fileuploadstart', function (e, data) {
                    if (form.fileupload(\"active\") <= 0)
                        refreshSessionInterval = setInterval(\"XiboPing('\" + pingUrl + \"?refreshSession=true')\", 1000 * 60 * 3);

                    return true;
                }).bind('fileuploaddone', function (e, data) {
                    if (refreshSessionInterval != null && form.fileupload(\"active\") <= 0)
                        clearInterval(refreshSessionInterval);
                });
            });
        }

        ///
        /// Library Usage Form
        ///
        function usageFormOpen(dialog) {
            // Displays tab
            var usageTable = \$(\"#usageReportTable\").DataTable({
                \"language\": dataTablesLanguage,
                serverSide: true,
                stateSave: true,
                filter: false,
                searchDelay: 3000,
                \"order\": [[1, \"asc\"]],
                ajax: {
                    \"url\": \"";
        // line 318
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("library.usage"), "html", null, true);
        echo "\".replace(\":id\", \$(\"#usageReportTable\").data().mediaId),
                    \"data\": function(dataDisplay) {
                        \$.extend(dataDisplay, \$(dialog).find(\"#usageReportForm\").serializeObject());
                        return dataDisplay;
                    }
                },
                \"columns\": [
                    { \"data\": \"displayId\"},
                    { \"data\": \"display\" },
                    { \"data\": \"description\" }
                ]
            });

            usageTable.on('draw', dataTableDraw);
            usageTable.on('processing.dt', dataTableProcessing);

            \$(\"#mediaEventDateLink\").datetimepicker({
                format: bootstrapDateFormatDateOnly,
                autoclose: true,
                language: language,
                calendarType: calendarType,
                minView: 2,
                todayHighlight: true
            });

            \$(\"#dateClearButton\").on(\"click\", function () {
                \$(\"#mediaEventDateLink\").val(\"\")
                \$(\"#mediaEventDate\").val(\"\");
                \$(\"#mediaEventDateLink\").datetimepicker(\"update\");
                usageTable.ajax.reload();
            });

            // Layouts tab
            var usageTableLayouts = \$(\"#usageReportLayoutsTable\").DataTable({
                \"language\": dataTablesLanguage,
                serverSide: true,
                stateSave: true,
                filter: false,
                searchDelay: 3000,
                \"order\": [[1, \"asc\"]],
                ajax: {
                    \"url\": \"";
        // line 359
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("library.usage.layouts"), "html", null, true);
        echo "\".replace(\":id\", \$(\"#usageReportLayoutsTable\").data().mediaId)
                },
                \"columns\": [
                    { \"data\": \"layoutId\"},
                    { \"data\": \"layout\" },
                    { \"data\": \"description\" },
                    {
                        \"orderable\": false,
                        \"data\": dataTableButtonsColumn
                    }
                ]
            });

            usageTableLayouts.on('draw', dataTableDraw);
            usageTableLayouts.on('processing.dt', dataTableProcessing);
        }
    </script>
";
    }

    public function getTemplateName()
    {
        return "library-page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  603 => 359,  559 => 318,  488 => 250,  475 => 240,  469 => 237,  446 => 217,  442 => 216,  435 => 212,  431 => 211,  425 => 208,  421 => 207,  416 => 205,  412 => 204,  408 => 203,  399 => 201,  391 => 200,  381 => 193,  366 => 180,  360 => 179,  352 => 178,  347 => 176,  343 => 175,  339 => 174,  333 => 171,  329 => 170,  325 => 169,  255 => 102,  243 => 92,  240 => 91,  223 => 77,  219 => 76,  215 => 75,  211 => 74,  207 => 73,  203 => 72,  199 => 71,  195 => 70,  191 => 69,  187 => 68,  183 => 67,  179 => 66,  175 => 65,  171 => 64,  167 => 63,  155 => 55,  152 => 54,  148 => 53,  142 => 51,  138 => 50,  132 => 48,  127 => 47,  123 => 46,  117 => 44,  114 => 43,  110 => 42,  107 => 41,  105 => 37,  99 => 35,  94 => 34,  90 => 33,  84 => 31,  80 => 30,  73 => 26,  68 => 24,  65 => 23,  62 => 22,  57 => 18,  47 => 16,  45 => 15,  39 => 14,  36 => 13,  33 => 12,  29 => 9,  27 => 10,  11 => 9,);
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
 * (library-page)
 */

#}
{% extends \"authed.twig\" %}
{% import \"inline.twig\" as inline %}

{% block actionMenu %}
    <ul class=\"nav nav-pills pull-right\">
    <li class=\"btn btn-success btn-xs\"><a class=\"btns\" href=\"#\" id=\"libraryUploadForm\" title=\"{% trans \"Add a new media item to the library\" %}\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> {% trans \"Add Media\" %}</a></li>
        {% if settings.SETTING_LIBRARY_TIDY_ENABLED == 1 %}
            <li class=\"btn btn-danger btn-xs\"><a class=\"XiboFormButton btns\" title=\"{% trans \"Run through the library and remove unused and unnecessary files\" %}\" href=\"{{ urlFor(\"library.tidy.form\") }}\"> <i class=\"fa fa-trash\" aria-hidden=\"true\"></i> {% trans \"Tidy Library\" %}</a></li>
        {% endif %}
    </ul>
{% endblock %}


{% block pageContent %}
    <div class=\"widget\">
        <div class=\"widget-title\">{% trans \"Library\" %}</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"{{ random() }}\" data-grid-name=\"libraryView\">
                <div class=\"XiboFilter well\">
                    <div class=\"FilterDiv\" id=\"Filter\">
                        <form class=\"form-inline\">
                            {% set title %}{% trans \"Name\" %}{% endset %}
                            {{ inline.input(\"media\", title) }}

                            {% set title %}{% trans \"Tags\" %}{% endset %}
                            {% set helpText %}{% trans \"A comma separated list of tags to filter by. Enter --no-tag to see items without tags.\" %}{% endset %}
                            {{ inline.inputWithTags(\"tags\", title, null, helpText) }}

                            {% set attributes = [
                            { name: \"data-live-search\", value: \"true\" },
                            { name: \"data-selected-text-format\", value: \"count > 4\" }
                            ] %}

                            {% set title %}{% trans \"Owner\" %}{% endset %}
                            {% set users = [{userId: null, userName: \"\"}]|merge(users) %}
                            {{ inline.dropdown(\"ownerId\", \"single\", title, null, users, \"userId\", \"userName\", \"\", \"selectPicker\", \"\", \"\", \"\", attributes) }}

                            {% set title %}{% trans \"Owner User Group\" %}{% endset %}
                            {% set helpText %}{% trans \"Show items owned by users in the selected User Group.\" %}{% endset %}
                            {{ inline.dropdown(\"ownerUserGroupId\", \"single\", title, \"\", [{groupId:null, group:\"\"}]|merge(groups), \"groupId\", \"group\", helpText, \"selectPicker\", \"\", \"\", \"\", attributes) }}

                            {% set title %}{% trans \"Type\" %}{% endset %}
                            {{ inline.dropdown(\"type\", \"single\", title, \"\", [{\"type\": none, \"name\": \"\"}]|merge(modules), \"type\", \"name\") }}

                            {% set title %}{% trans \"Retired\" %}{% endset %}
                            {% set values = [{id: 1, value: \"Yes\"}, {id: 0, value: \"No\"}] %}
                            {{ inline.dropdown(\"retired\", \"single\", title, 0, values, \"id\", \"value\") }}
                        </form>
                    </div>
                </div>
                <div class=\"XiboData\">
                    <table id=\"libraryItems\" class=\"table table-striped\">
                        <thead>
                            <tr>
                                <th>{% trans \"ID\" %}</th>
                                <th>{% trans \"Name\" %}</th>
                                <th>{% trans \"Type\" %}</th>
                                <th>{% trans \"Tag\" %}</th>
                                <th>{% trans \"Thumbnail\" %}</th>
                                <th>{% trans \"Duration\" %}</th>
                                <th>{% trans \"Duration (seconds)\" %}</th>
                                <th>{% trans \"Size\" %}</th>
                                <th>{% trans \"Size (bytes)\" %}</th>
                                <th>{% trans \"Owner\" %}</th>
                                <th>{% trans \"Permissions\" %}</th>
                                <th>{% trans \"Revised\" %}</th>
                                <th>{% trans \"File Name\" %}</th>
                                <th>{% trans \"Created\" %}</th>
                                <th>{% trans \"Modified\" %}</th>
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
        var table;
        \$(document).ready(function() {
            table = \$(\"#libraryItems\").DataTable({
                \"language\": dataTablesLanguage,
                serverSide: true, stateSave: true,
                filter: false,
                searchDelay: 3000,
                \"order\": [[1, \"asc\"]],
                ajax: {
                    \"url\": \"{{ urlFor(\"library.search\") }}\",
                    \"data\": function (d) {
                        \$.extend(d, \$(\"#libraryItems\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                    }
                },
                \"columns\": [
                    {\"data\": \"mediaId\"},
                    {\"data\": \"name\", \"render\": dataTableSpacingPreformatted },
                    {\"data\": \"mediaType\"},
                    {
                        \"sortable\": false,
                        \"visible\": false,
                        \"data\": dataTableCreateTags
                    },
                    {
                        \"name\": \"mediaId\",
                        \"data\": null,
                        \"render\": {\"_\": \"thumbnail\", \"display\": \"thumbnail\", \"sort\": \"mediaId\"}
                    },
                    {
                        \"name\": \"duration\",
                        \"data\": function (data, type) {
                            if (type != \"display\")
                                return data.duration;

                            return moment().startOf(\"day\").seconds(data.duration).format(\"H:mm:ss\");
                        }
                    },
                    {\"data\": \"duration\", \"visible\": false},
                    {
                        \"name\": \"fileSize\",
                        \"data\": null,
                        \"render\": {\"_\": \"fileSize\", \"display\": \"fileSizeFormatted\", \"sort\": \"fileSize\"}
                    },
                    {\"data\": \"fileSize\", \"visible\": false},
                    {\"data\": \"owner\"},
                    {\"data\": \"groupsWithPermissions\"},
                    {\"data\": \"revised\", \"render\": dataTableTickCrossColumn, \"visible\": false},
                    {\"data\": \"fileName\"},
                    {
                        \"data\": \"createdDt\",
                        \"render\": dataTableDateFromIso,
                        \"visible\": false
                    },
                    {
                        \"data\": \"modifiedDt\",
                        \"render\": dataTableDateFromIso,
                        \"visible\": false
                    },
                    {
                        \"orderable\": false,
                        \"data\": dataTableButtonsColumn
                    }
                ]
            });

            table.on('draw', dataTableDraw);
            table.on('draw', { form: \$(\"#libraryItems\").closest(\".XiboGrid\").find(\".FilterDiv form\") } ,dataTableCreateTagEvents);
            table.on('processing.dt', dataTableProcessing);
            dataTableAddButtons(table, \$('#libraryItems_wrapper').find('.col-sm-6').eq(1));
        });

        \$(\"#libraryUploadForm\").click(function(e) {
            e.preventDefault();

            openUploadForm({
                trans: {
                    addFiles: \"{% trans \"Add files\" %}\",
                    startUpload: \"{% trans \"Start upload\" %}\",
                    cancelUpload: \"{% trans \"Cancel upload\" %}\"
                },
                upload: {
                    maxSize: {{ libraryUpload.maxSize }},
                    maxSizeMessage: \"{{ libraryUpload.maxSizeMessage  }}\",
                    validExt: \"{{ libraryUpload.validExt }}\"
                },
                updateInAllChecked: {% if settings.LIBRARY_MEDIA_UPDATEINALL_CHECKB == \"Checked\" %}true{% else %}false{% endif %},
                deleteOldRevisionsChecked: {% if settings.LIBRARY_MEDIA_DELETEOLDVER_CHECKB == \"Checked\" %}true{% else %}false{% endif %}
            });
        });

        /**
         * Media Edit form
         */
        function mediaEditFormOpen(dialog) {
            // Create a new button
            var footer = dialog.find(\".modal-footer\");
            var mediaId = dialog.find(\"#mediaEditForm\").data().mediaId;
            var validExtensions = dialog.find(\"#mediaEditForm\").data().validExtensions;

            // Append
            var replaceButton = \$('<button class=\"btn btn-warning\">').html(\"{% trans \"Replace\" %}\");
            replaceButton.click(function(e) {
                e.preventDefault();

                // Open the upload dialog with our options.
                openUploadForm({
                    oldMediaId: mediaId,
                    updateInAllChecked: {% if settings.LIBRARY_MEDIA_UPDATEINALL_CHECKB == \"Checked\" %}true{% else %}false{% endif %},
                    deleteOldRevisionsChecked: {% if settings.LIBRARY_MEDIA_DELETEOLDVER_CHECKB == \"Checked\" %}true{% else %}false{% endif %},
                    trans: {
                        addFiles: \"{% trans \"Add Replacement\" %}\",
                        startUpload: \"{% trans \"Start Replace\" %}\",
                        cancelUpload: \"{% trans \"Cancel Replace\" %}\",
                        updateInLayouts: {
                            title: \"{% trans \"Update this media in all layouts it is assigned to?\" %}\",
                            helpText: \"{% trans \"Note: It will only be updated in layouts you have permission to edit.\" %}\"
                        },
                        deleteOldRevisions: {
                            title: \"{% trans \"Delete the old version?\" %}\",
                            helpText: \"{% trans \"Completely remove the old version of this media item if a new file is being uploaded.\" %}\"
                        }
                    },
                    upload: {
                        maxSize: {{ libraryUpload.maxSize }},
                        maxSizeMessage: \"{{ libraryUpload.maxSizeMessage  }}\",
                        validExt: validExtensions
                    }
                });
            });

            footer.find(\".btn-primary\").before(replaceButton);
        }

        /**
         * Opens the upload form
         * @param templateOptions
         */
        function openUploadForm(templateOptions) {

            var template = Handlebars.compile(\$(\"#template-file-upload\").html());

            // Handle bars and open a dialog
            bootbox.dialog({
                message: template(templateOptions),
                title: \"{% trans \"Upload media\" %}\",
                buttons: {
                    main: {
                        label: \"{% trans \"Done\" %}\",
                        className: \"btn-primary\",
                        callback: function() {
                            table.ajax.reload();
                            XiboDialogClose();
                        }
                    }
                }
            }).on('shown.bs.modal', function() {
                // Configure the upload form
                var url = \"{{ urlFor(\"library.add\") }}\";
                var form = \$(this).find(\"form\");
                var refreshSessionInterval;

                // Initialize the jQuery File Upload widget:
                form.fileupload({
                    url: url,
                    disableImageResize: true,
                    previewMaxWidth: 100,
                    previewMaxHeight: 100,
                    previewCrop: true
                });

                // Upload server status check for browsers with CORS support:
                if (\$.support.cors) {
                    \$.ajax({
                        url: url,
                        type: 'HEAD'
                    }).fail(function () {
                        \$('<span class=\"alert alert-error\"/>')
                                .text('Upload server currently unavailable - ' + new Date())
                                .appendTo(form);
                    });
                }

                // Enable iframe cross-domain access via redirect option:
                form.fileupload(
                        'option',
                        'redirect',
                        window.location.href.replace(
                                /\\/[^\\/]*\$/,
                                '/cors/result.html?%s'
                        )
                );

                form.bind('fileuploadsubmit', function (e, data) {
                    var inputs = data.context.find(':input');
                    if (inputs.filter('[required][value=\"\"]').first().focus().length) {
                        return false;
                    }
                    data.formData = inputs.serializeArray().concat(form.serializeArray());

                    inputs.filter(\"input\").prop(\"disabled\", true);
                }).bind('fileuploadstart', function (e, data) {
                    if (form.fileupload(\"active\") <= 0)
                        refreshSessionInterval = setInterval(\"XiboPing('\" + pingUrl + \"?refreshSession=true')\", 1000 * 60 * 3);

                    return true;
                }).bind('fileuploaddone', function (e, data) {
                    if (refreshSessionInterval != null && form.fileupload(\"active\") <= 0)
                        clearInterval(refreshSessionInterval);
                });
            });
        }

        ///
        /// Library Usage Form
        ///
        function usageFormOpen(dialog) {
            // Displays tab
            var usageTable = \$(\"#usageReportTable\").DataTable({
                \"language\": dataTablesLanguage,
                serverSide: true,
                stateSave: true,
                filter: false,
                searchDelay: 3000,
                \"order\": [[1, \"asc\"]],
                ajax: {
                    \"url\": \"{{ urlFor(\"library.usage\") }}\".replace(\":id\", \$(\"#usageReportTable\").data().mediaId),
                    \"data\": function(dataDisplay) {
                        \$.extend(dataDisplay, \$(dialog).find(\"#usageReportForm\").serializeObject());
                        return dataDisplay;
                    }
                },
                \"columns\": [
                    { \"data\": \"displayId\"},
                    { \"data\": \"display\" },
                    { \"data\": \"description\" }
                ]
            });

            usageTable.on('draw', dataTableDraw);
            usageTable.on('processing.dt', dataTableProcessing);

            \$(\"#mediaEventDateLink\").datetimepicker({
                format: bootstrapDateFormatDateOnly,
                autoclose: true,
                language: language,
                calendarType: calendarType,
                minView: 2,
                todayHighlight: true
            });

            \$(\"#dateClearButton\").on(\"click\", function () {
                \$(\"#mediaEventDateLink\").val(\"\")
                \$(\"#mediaEventDate\").val(\"\");
                \$(\"#mediaEventDateLink\").datetimepicker(\"update\");
                usageTable.ajax.reload();
            });

            // Layouts tab
            var usageTableLayouts = \$(\"#usageReportLayoutsTable\").DataTable({
                \"language\": dataTablesLanguage,
                serverSide: true,
                stateSave: true,
                filter: false,
                searchDelay: 3000,
                \"order\": [[1, \"asc\"]],
                ajax: {
                    \"url\": \"{{ urlFor(\"library.usage.layouts\") }}\".replace(\":id\", \$(\"#usageReportLayoutsTable\").data().mediaId)
                },
                \"columns\": [
                    { \"data\": \"layoutId\"},
                    { \"data\": \"layout\" },
                    { \"data\": \"description\" },
                    {
                        \"orderable\": false,
                        \"data\": dataTableButtonsColumn
                    }
                ]
            });

            usageTableLayouts.on('draw', dataTableDraw);
            usageTableLayouts.on('processing.dt', dataTableProcessing);
        }
    </script>
{% endblock %}", "library-page.twig", "/var/www/web/views/library-page.twig");
    }
}
