<?php

/* layout-page.twig */
class __TwigTemplate_36e6b75852d957a5d94b35a069c90a7e506706b920a7227f0776e401371a78e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("authed.twig", "layout-page.twig", 1);
        $this->blocks = array(
            'actionMenu' => array($this, 'block_actionMenu'),
            'pageContent' => array($this, 'block_pageContent'),
            'javaScript' => array($this, 'block_javaScript'),
            'javaScriptTemplates' => array($this, 'block_javaScriptTemplates'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "authed.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["inline"] = $this->loadTemplate("inline.twig", "layout-page.twig", 2);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_actionMenu($context, array $blocks = array())
    {
        // line 5
        echo "    <ul class=\"nav nav-pills pull-right\">
        <li class=\"btn btn-success btn-xs\"><a class=\"XiboFormButton btns\" title=\"";
        // line 6
        echo __("Add a new Layout and jump to the layout designer.");
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("layout.add.form"), "html", null, true);
        echo "\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> ";
        echo __("Add Layout");
        echo "</a></li>
        <li class=\"btn btn-info btn-xs\"><a class=\"btns\" id=\"layoutUploadForm\" title=\"";
        // line 7
        echo __("Import a Layout from a ZIP file.");
        echo "\" href=\"#\"> <i class=\"fa fa-cloud-download\" aria-hidden=\"true\"></i> ";
        echo __("Import");
        echo "</a></li>
    </ul>
";
    }

    // line 11
    public function block_pageContent($context, array $blocks = array())
    {
        // line 12
        echo "    <div class=\"widget\">
        <div class=\"widget-title\">";
        // line 13
        echo __("Layouts");
        echo "</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\" data-grid-name=\"layoutView\">
                <div class=\"XiboFilter well\">
                    <div class=\"FilterDiv\" id=\"Filter\">
                        <form class=\"form-inline\">
                            <ul class=\"nav nav-tabs\" role=\"tablist\">
                                <li class=\"active\"><a href=\"#general-filter\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 20
        echo __("General");
        echo "</span></a></li>
                                <li><a href=\"#advanced-filter\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 21
        echo __("Advanced");
        echo "</span></a></li>
                            </ul>
                            <div class=\"tab-content\">
                                <div class=\"tab-pane active\" id=\"general-filter\">
                                    ";
        // line 25
        ob_start();
        echo __("Name");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 26
        echo "                                    ";
        echo $context["inline"]->getinput("layout", (isset($context["title"]) ? $context["title"] : null));
        echo "

                                    ";
        // line 28
        ob_start();
        echo __("Tags");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "                                    ";
        ob_start();
        echo __("A comma separated list of tags to filter by. Enter --no-tag to see items without tags.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 30
        echo "                                    ";
        echo $context["inline"]->getinputWithTags("tags", (isset($context["title"]) ? $context["title"] : null), null, (isset($context["helpText"]) ? $context["helpText"] : null));
        echo "

                                    ";
        // line 32
        $context["attributes"] = array(0 => array("name" => "data-live-search", "value" => "true"), 1 => array("name" => "data-selected-text-format", "value" => "count > 4"));
        // line 36
        echo "
                                    ";
        // line 37
        ob_start();
        echo __("Owner");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 38
        echo "                                    ";
        ob_start();
        echo __("Show items owned by the selected User.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 39
        echo "                                    ";
        echo $context["inline"]->getdropdown("userId", "single", (isset($context["title"]) ? $context["title"] : null), "", twig_array_merge(array(0 => array("userId" => null, "userName" => "")), (isset($context["users"]) ? $context["users"] : null)), "userId", "userName", (isset($context["helpText"]) ? $context["helpText"] : null), "selectPicker", "", "", "", (isset($context["attributes"]) ? $context["attributes"] : null));
        echo "

                                    ";
        // line 41
        ob_start();
        echo __("Owner User Group");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 42
        echo "                                    ";
        ob_start();
        echo __("Show items owned by users in the selected User Group.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 43
        echo "                                    ";
        echo $context["inline"]->getdropdown("ownerUserGroupId", "single", (isset($context["title"]) ? $context["title"] : null), "", twig_array_merge(array(0 => array("groupId" => null, "group" => "")), (isset($context["groups"]) ? $context["groups"] : null)), "groupId", "group", (isset($context["helpText"]) ? $context["helpText"] : null), "selectPicker", "", "", "", (isset($context["attributes"]) ? $context["attributes"] : null));
        echo "

                                </div>
                                <div class=\"tab-pane\" id=\"advanced-filter\">

                                    ";
        // line 48
        ob_start();
        echo __("Retired");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 49
        echo "                                    ";
        $context["values"] = array(0 => array("id" => 1, "value" => "Yes"), 1 => array("id" => 0, "value" => "No"));
        // line 50
        echo "                                    ";
        echo $context["inline"]->getdropdown("retired", "single", (isset($context["title"]) ? $context["title"] : null), 0, (isset($context["values"]) ? $context["values"] : null), "id", "value");
        echo "

                                    ";
        // line 52
        ob_start();
        echo __("Show");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 53
        echo "                                    ";
        $context["values"] = array(0 => array("id" => 1, "value" => "All"), 1 => array("id" => 2, "value" => "Only Used"), 2 => array("id" => 3, "value" => "Only Unused"));
        // line 54
        echo "                                    ";
        echo $context["inline"]->getdropdown("layoutStatusId", "single", (isset($context["title"]) ? $context["title"] : null), 1, (isset($context["values"]) ? $context["values"] : null), "id", "value");
        echo "

                                    ";
        // line 56
        ob_start();
        echo __("Description");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 57
        echo "                                    ";
        $context["option1"] = __("All");
        // line 58
        echo "                                    ";
        $context["option2"] = __("1st line");
        // line 59
        echo "                                    ";
        $context["option3"] = __("Widget List");
        // line 60
        echo "                                    ";
        $context["values"] = array(0 => array("id" => 1, "value" => (isset($context["option1"]) ? $context["option1"] : null)), 1 => array("id" => 2, "value" => (isset($context["option2"]) ? $context["option2"] : null)), 2 => array("id" => 3, "value" => (isset($context["option3"]) ? $context["option3"] : null)));
        // line 61
        echo "                                    ";
        echo $context["inline"]->getdropdown("showDescriptionId", "single", (isset($context["title"]) ? $context["title"] : null), 2, (isset($context["values"]) ? $context["values"] : null), "id", "value");
        echo "

                                    ";
        // line 63
        ob_start();
        echo __("Media");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 64
        echo "                                    ";
        echo $context["inline"]->getinput("mediaLike", (isset($context["title"]) ? $context["title"] : null));
        echo "
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class=\"XiboData\">
                    <table id=\"layouts\" class=\"table table-striped\">
                        <thead>
                            <tr>
                                <th>";
        // line 74
        echo __("ID");
        echo "</th>
                                <th>";
        // line 75
        echo __("Name");
        echo "</th>
                                <th>";
        // line 76
        echo __("Description");
        echo "</th>
                                <th>";
        // line 77
        echo __("Duration");
        echo "</th>
                                <th>";
        // line 78
        echo __("Tags");
        echo "</th>
                                <th>";
        // line 79
        echo __("Thumbnail");
        echo "</th>
                                <th>";
        // line 80
        echo __("Owner");
        echo "</th>
                                <th>";
        // line 81
        echo __("Permissions");
        echo "</th>
                                <th>";
        // line 82
        echo __("Status");
        echo "</th>
                                <th>";
        // line 83
        echo __("Created");
        echo "</th>
                                <th>";
        // line 84
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

    // line 98
    public function block_javaScript($context, array $blocks = array())
    {
        // line 99
        echo "    <script type=\"text/javascript\">
        var table;
        \$(document).ready(function() {
            table = \$(\"#layouts\").DataTable({
                \"language\": dataTablesLanguage,
                \"lengthMenu\": [10, 25, 50, 100, 250, 500],
                serverSide: true,
                stateSave: true,
                filter: false,
                searchDelay: 3000,
                \"order\": [[1, \"asc\"]],
                ajax: {
                    url: \"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("layout.search"), "html", null, true);
        echo "\",
                    \"data\": function (d) {
                        \$.extend(d, \$(\"#layouts\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                    }
                },
                \"columns\": [
                    {\"data\": \"layoutId\"},
                    {
                        \"data\": \"layout\",
                        \"render\": dataTableSpacingPreformatted
                    },
                    {
                        \"name\": \"description\",
                        \"data\": null,
                        \"render\": {\"_\": \"description\", \"display\": \"descriptionFormatted\", \"sort\": \"description\"}
                    },
                    {
                        \"name\": \"duration\",
                        \"data\": function (data, type) {
                            if (type != \"display\")
                                return data.duration;

                            return moment().startOf(\"day\").seconds(data.duration).format(\"H:mm:ss\");
                        }
                    },
                    {
                        \"sortable\": false,
                        \"visible\": false,
                        \"data\": dataTableCreateTags
                    },
                    {
                        \"name\": \"layoutId\",
                        \"data\": null,
                        \"render\": {\"_\": \"thumbnail\", \"display\": \"thumbnail\", \"sort\": \"layoutId\"}
                    },
                    {\"data\": \"owner\"},
                    {\"data\": \"groupsWithPermissions\"},
                    {
                        \"name\": \"status\",
                        \"data\": function (data, type) {
                            if (type != \"display\")
                                return data.status;

                            var icon = \"\";
                            if (data.status == 1)
                                icon = \"fa-check\";
                            else if (data.status == 0)
                                icon = \"fa-times\";
                            else if (data.status == 3)
                                icon = \"fa-cogs\";
                            else
                                icon = \"fa-exclamation\";

                            return \"<span class='fa \" + icon + \"' title='\" + (data.statusDescription) + ((data.statusMessage == null) ? \"\" : \" - \" + (data.statusMessage)) + \"'></span>\";
                        }
                    },
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
            table.on('draw', { form: \$(\"#layouts\").closest(\".XiboGrid\").find(\".FilterDiv form\") } ,dataTableCreateTagEvents);
            table.on('processing.dt', dataTableProcessing);
            dataTableAddButtons(table, \$('#layouts_wrapper').find('.col-sm-6').eq(1));
        });

        \$(\"#layoutUploadForm\").click(function() {

            var template = Handlebars.compile(\$(\"#template-layout-upload\").html());

            // Handle bars and open a dialog
            bootbox.dialog({
                message: template({
                    trans: {
                        addFiles: \"";
        // line 198
        echo __("Add ZIP Files");
        echo "\",
                        startUpload: \"";
        // line 199
        echo __("Start upload");
        echo "\",
                        cancelUpload: \"";
        // line 200
        echo __("Cancel upload");
        echo "\",
                        replaceExistingMediaMessage: \"";
        // line 201
        echo __("Replace Existing Media?");
        echo "\",
                        importTagsMessage: \"";
        // line 202
        echo __("Import Tags?");
        echo "\",
                        useExistingDataSetsMessage: \"";
        // line 203
        echo __("Use existing DataSets matched by name?");
        echo "\",
                        dataSetDataMessage: \"";
        // line 204
        echo __("Import DataSet Data?");
        echo "\"
                    },
                    upload: {
                        maxSize: ";
        // line 207
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["libraryUpload"]) ? $context["libraryUpload"] : null), "maxSize", array()), "html", null, true);
        echo ",
                        maxSizeMessage: \"";
        // line 208
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["libraryUpload"]) ? $context["libraryUpload"] : null), "maxSizeMessage", array()), "html", null, true);
        echo "\",
                        validExt: \"";
        // line 209
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["libraryUpload"]) ? $context["libraryUpload"] : null), "validExt", array()), "html", null, true);
        echo "\"
                    }
                }),
                title: \"";
        // line 212
        echo __("Upload Layout");
        echo "\",
                buttons: {
                    main: {
                        label: \"";
        // line 215
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
        // line 225
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("layout.import"), "html", null, true);
        echo "\";
                var form = \$(this).find(\"form\");
                var refreshSessionInterval;

                // Initialize the jQuery File Upload widget:
                form.fileupload({
                    url: url,
                    disableImageResize: true
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

                // Configure the active behaviour of the checkboxes
                \$(\"#useExistingDataSets\").on(\"click\", function () {
                    \$(\"#importDataSetData\").prop(\"disabled\", (\$(this).is(\":checked\")));
                });
            });
        });

        function layoutAddFormOpen() {
            \$(\"#layoutAddForm\").submit(function(e) {
                e.preventDefault();
                var form = \$(this);

                var url = \$(this).data().redirect;

                \$.ajax({
                    type: \$(this).attr(\"method\"),
                    url: \$(this).attr(\"action\"),
                    data: \$(this).serialize(),
                    cache: false,
                    dataType:\"json\",
                    success: function(xhr, textStatus, error) {

                        XiboSubmitResponse(xhr, form);

                        if (xhr.success) {
                            // Reload the designer
                            XiboRedirect(url.replace(\":id\", xhr.id));
                        }
                    }
                });
            });
        }

        function layoutExportFormSubmit() {
            var \$form = \$(\"#layoutExportForm\");
            window.location = \$form.attr(\"action\") + \"?\" + \$form.serialize();

            setTimeout(function() {
                XiboDialogClose();
            }, 1000);
        }

        function assignLayoutToCampaignFormSubmit() {
            var form = \$(\"#layoutAssignCampaignForm\");

            var url = form.prop(\"action\").replace(\":id\", form.find(\"#campaignId\").val());

            \$.ajax({
                type: form.attr(\"method\"),
                url: url,
                data: {layoutId: [{layoutId: form.data().layoutId}]},
                cache: false,
                dataType:\"json\",
                success: XiboSubmitResponse
            });
        }

    </script>
";
    }

    // line 335
    public function block_javaScriptTemplates($context, array $blocks = array())
    {
        // line 336
        echo "    ";
        $this->displayParentBlock("javaScriptTemplates", $context, $blocks);
        echo "

    ";
        // line 469
        echo "

        <script type=\"text/x-handlebars-template\" id=\"template-layout-upload\">
            <form method=\"post\" enctype=\"multipart/form-data\" data-max-file-size=\"{{ upload.maxSize }}\" data-accept-file-types=\"/(\\.|\\/)zip\$/i\">
                <div class=\"row fileupload-buttonbar\">
                    <div class=\"col-md-7\">
                        <div class=\"well\">
                            {{ upload.maxSizeMessage }}
                        </div>
                        <!-- The fileinput-button span is used to style the file input field as button -->
                    <span class=\"btn btn-success fileinput-button\">
                        <i class=\"glyphicon glyphicon-plus glyphicon glyphicon-white\"></i>
                        <span>{{ trans.addFiles }}</span>
                        <input type=\"file\" name=\"files[]\" multiple>
                    </span>
                        <button type=\"submit\" class=\"btn btn-primary start\">
                            <i class=\"glyphicon glyphicon-upload glyphicon glyphicon-white\"></i>
                            <span>{{ trans.startUpload }}</span>
                        </button>
                        <button type=\"reset\" class=\"btn btn-warning cancel\">
                            <i class=\"glyphicon glyphicon-ban-circle glyphicon glyphicon-white\"></i>
                            <span>{{ trans.cancelUpload }}</span>
                        </button>
                        <!-- The loading indicator is shown during file processing -->
                        <span class=\"fileupload-loading\"></span>
                    </div>
                    <!-- The global progress information -->
                    <div class=\"col-md-4 fileupload-progress fade\">
                        <!-- The global progress bar -->
                        <div class=\"progress\">
                            <div class=\"progress-bar progress-bar-success progress-bar-striped active\" role=\"progressbar\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:0%;\">
                                <div class=\"sr-only\"></div>
                            </div>
                        </div>
                        <!-- The extended global progress information -->
                        <div class=\"progress-extended\">&nbsp;</div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <label for=\"replaceExisting\" title=\"If the import finds existing media with the same name, should it be replaced in the Layout or should the Layout use that media.\">
                            <input type=\"checkbox\" id=\"replaceExisting\" name=\"replaceExisting\">
                            {{ trans.replaceExistingMediaMessage }}
                        </label>
                    </div>
                    <div class=\"col-md-6\">
                        <label for=\"importTags\" title=\"Would you like to import any tags contained on the layout.\">
                            <input type=\"checkbox\" id=\"importTags\" name=\"importTags\">
                            {{ trans.importTagsMessage }}
                        </label>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <label for=\"useExistingDataSets\">
                            <input type=\"checkbox\" id=\"useExistingDataSets\" name=\"useExistingDataSets\" checked>
                            {{ trans.useExistingDataSetsMessage }}
                        </label>
                    </div>
                    <div class=\"col-md-6\">
                        <label for=\"importDataSetData\">
                            <input type=\"checkbox\" id=\"importDataSetData\" name=\"importDataSetData\" disabled>
                            {{ trans.dataSetDataMessage }}
                        </label>
                    </div>
                </div>
                <!-- The table listing the files available for upload/download -->
                <table role=\"presentation\" class=\"table table-striped\"><tbody class=\"files\"></tbody></table>
            </form>
        </script>

        <!-- The template to display files available for upload -->
        <script id=\"template-layout-upload\" type=\"text/x-tmpl\">
        {% for (var i=0, file; file=o.files[i]; i++) { %}
            <tr class=\"template-upload fade\">
                <td>
                    <span class=\"fileupload-preview\"></span>
                </td>
                <td class=\"title\">
                    {% if (file.error) { %}
                        <div><span class=\"label label-danger\">{%=file.error%}</span></div>
                    {% } %}
                    {% if (!file.error) { %}
                    <label for=\"name[]\"><input name=\"name[]\" type=\"text\" id=\"name\" value=\"\" /></label>
                    {% } %}
                </td>
                <td>
                    <p class=\"size\">{%=o.formatFileSize(file.size)%}</p>
                    {% if (!o.files.error) { %}
                        <div class=\"progress\">
                            <div class=\"progress-bar progress-bar-striped active\" role=\"progressbar\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:0%;\">
                                <div class=\"sr-only\"></div>
                            </div>
                        </div>
                    </div>
                    {% } %}
                </td>
                <td>
                    {% if (!o.files.error && !i && !o.options.autoUpload) { %}
                        <button class=\"btn btn-primary start\">
                            <i class=\"glyphicon glyphicon-upload glyphicon glyphicon-white\"></i>
                        </button>
                    {% } %}
                    {% if (!i) { %}
                        <button class=\"btn btn-warning cancel\">
                            <i class=\"glyphicon glyphicon-ban-circle glyphicon glyphicon-white\"></i>
                        </button>
                    {% } %}
                </td>
            </tr>
        {% } %}
        </script>
        <!-- The template to display files available for download -->
        <script id=\"template-layout-download\" type=\"text/x-tmpl\">
        {% for (var i=0, file; file=o.files[i]; i++) { %}
            <tr class=\"template-download fade\">
               <td>
                    <p class=\"name\" id=\"{%=file.storedas%}\" status=\"{% if (file.error) { %}error{% } %}\">
                        {%=file.name%}
                    </p>
                    {% if (file.error) { %}
                        <div><span class=\"label label-danger\">{%=file.error%}</span></div>
                    {% } %}
                </td>
                <td>
                    <span class=\"size\">{%=o.formatFileSize(file.size)%}</span>
                </td>
            </tr>
        {% } %}
        </script>

    ";
        echo "
";
    }

    public function getTemplateName()
    {
        return "layout-page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  565 => 469,  559 => 336,  556 => 335,  443 => 225,  430 => 215,  424 => 212,  418 => 209,  414 => 208,  410 => 207,  404 => 204,  400 => 203,  396 => 202,  392 => 201,  388 => 200,  384 => 199,  380 => 198,  290 => 111,  276 => 99,  273 => 98,  256 => 84,  252 => 83,  248 => 82,  244 => 81,  240 => 80,  236 => 79,  232 => 78,  228 => 77,  224 => 76,  220 => 75,  216 => 74,  202 => 64,  198 => 63,  192 => 61,  189 => 60,  186 => 59,  183 => 58,  180 => 57,  176 => 56,  170 => 54,  167 => 53,  163 => 52,  157 => 50,  154 => 49,  150 => 48,  141 => 43,  136 => 42,  132 => 41,  126 => 39,  121 => 38,  117 => 37,  114 => 36,  112 => 32,  106 => 30,  101 => 29,  97 => 28,  91 => 26,  87 => 25,  80 => 21,  76 => 20,  68 => 15,  63 => 13,  60 => 12,  57 => 11,  48 => 7,  40 => 6,  37 => 5,  34 => 4,  30 => 1,  28 => 2,  11 => 1,);
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
{% import \"inline.twig\" as inline %}

{% block actionMenu %}
    <ul class=\"nav nav-pills pull-right\">
        <li class=\"btn btn-success btn-xs\"><a class=\"XiboFormButton btns\" title=\"{% trans \"Add a new Layout and jump to the layout designer.\" %}\" href=\"{{ urlFor(\"layout.add.form\") }}\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> {% trans \"Add Layout\" %}</a></li>
        <li class=\"btn btn-info btn-xs\"><a class=\"btns\" id=\"layoutUploadForm\" title=\"{% trans \"Import a Layout from a ZIP file.\" %}\" href=\"#\"> <i class=\"fa fa-cloud-download\" aria-hidden=\"true\"></i> {% trans \"Import\" %}</a></li>
    </ul>
{% endblock %}

{% block pageContent %}
    <div class=\"widget\">
        <div class=\"widget-title\">{% trans \"Layouts\" %}</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"{{ random() }}\" data-grid-name=\"layoutView\">
                <div class=\"XiboFilter well\">
                    <div class=\"FilterDiv\" id=\"Filter\">
                        <form class=\"form-inline\">
                            <ul class=\"nav nav-tabs\" role=\"tablist\">
                                <li class=\"active\"><a href=\"#general-filter\" role=\"tab\" data-toggle=\"tab\"><span>{% trans \"General\" %}</span></a></li>
                                <li><a href=\"#advanced-filter\" role=\"tab\" data-toggle=\"tab\"><span>{% trans \"Advanced\" %}</span></a></li>
                            </ul>
                            <div class=\"tab-content\">
                                <div class=\"tab-pane active\" id=\"general-filter\">
                                    {% set title %}{% trans \"Name\" %}{% endset %}
                                    {{ inline.input(\"layout\", title) }}

                                    {% set title %}{% trans \"Tags\" %}{% endset %}
                                    {% set helpText %}{% trans \"A comma separated list of tags to filter by. Enter --no-tag to see items without tags.\" %}{% endset %}
                                    {{ inline.inputWithTags(\"tags\", title, null, helpText) }}

                                    {% set attributes = [
                                    { name: \"data-live-search\", value: \"true\" },
                                    { name: \"data-selected-text-format\", value: \"count > 4\" }
                                    ] %}

                                    {% set title %}{% trans \"Owner\" %}{% endset %}
                                    {% set helpText %}{% trans \"Show items owned by the selected User.\" %}{% endset %}
                                    {{ inline.dropdown(\"userId\", \"single\", title, \"\", [{userId:null, userName:\"\"}]|merge(users), \"userId\", \"userName\", helpText, \"selectPicker\", \"\", \"\", \"\", attributes) }}

                                    {% set title %}{% trans \"Owner User Group\" %}{% endset %}
                                    {% set helpText %}{% trans \"Show items owned by users in the selected User Group.\" %}{% endset %}
                                    {{ inline.dropdown(\"ownerUserGroupId\", \"single\", title, \"\", [{groupId:null, group:\"\"}]|merge(groups), \"groupId\", \"group\", helpText, \"selectPicker\", \"\", \"\", \"\", attributes) }}

                                </div>
                                <div class=\"tab-pane\" id=\"advanced-filter\">

                                    {% set title %}{% trans \"Retired\" %}{% endset %}
                                    {% set values = [{id: 1, value: \"Yes\"}, {id: 0, value: \"No\"}] %}
                                    {{ inline.dropdown(\"retired\", \"single\", title, 0, values, \"id\", \"value\") }}

                                    {% set title %}{% trans \"Show\" %}{% endset %}
                                    {% set values = [{id: 1, value: \"All\"}, {id: 2, value: \"Only Used\"}, {id: 3, value: \"Only Unused\"}] %}
                                    {{ inline.dropdown(\"layoutStatusId\", \"single\", title, 1, values, \"id\", \"value\") }}

                                    {% set title %}{% trans \"Description\" %}{% endset %}
                                    {% set option1 = \"All\"|trans %}
                                    {% set option2 = \"1st line\"|trans %}
                                    {% set option3 = \"Widget List\"|trans %}
                                    {% set values = [{id: 1, value: option1}, {id: 2, value: option2}, {id: 3, value: option3}] %}
                                    {{ inline.dropdown(\"showDescriptionId\", \"single\", title, 2, values, \"id\", \"value\") }}

                                    {% set title %}{% trans \"Media\" %}{% endset %}
                                    {{ inline.input(\"mediaLike\", title) }}
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class=\"XiboData\">
                    <table id=\"layouts\" class=\"table table-striped\">
                        <thead>
                            <tr>
                                <th>{% trans \"ID\" %}</th>
                                <th>{% trans \"Name\" %}</th>
                                <th>{% trans \"Description\" %}</th>
                                <th>{% trans \"Duration\" %}</th>
                                <th>{% trans \"Tags\" %}</th>
                                <th>{% trans \"Thumbnail\" %}</th>
                                <th>{% trans \"Owner\" %}</th>
                                <th>{% trans \"Permissions\" %}</th>
                                <th>{% trans \"Status\" %}</th>
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
            table = \$(\"#layouts\").DataTable({
                \"language\": dataTablesLanguage,
                \"lengthMenu\": [10, 25, 50, 100, 250, 500],
                serverSide: true,
                stateSave: true,
                filter: false,
                searchDelay: 3000,
                \"order\": [[1, \"asc\"]],
                ajax: {
                    url: \"{{ urlFor(\"layout.search\") }}\",
                    \"data\": function (d) {
                        \$.extend(d, \$(\"#layouts\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                    }
                },
                \"columns\": [
                    {\"data\": \"layoutId\"},
                    {
                        \"data\": \"layout\",
                        \"render\": dataTableSpacingPreformatted
                    },
                    {
                        \"name\": \"description\",
                        \"data\": null,
                        \"render\": {\"_\": \"description\", \"display\": \"descriptionFormatted\", \"sort\": \"description\"}
                    },
                    {
                        \"name\": \"duration\",
                        \"data\": function (data, type) {
                            if (type != \"display\")
                                return data.duration;

                            return moment().startOf(\"day\").seconds(data.duration).format(\"H:mm:ss\");
                        }
                    },
                    {
                        \"sortable\": false,
                        \"visible\": false,
                        \"data\": dataTableCreateTags
                    },
                    {
                        \"name\": \"layoutId\",
                        \"data\": null,
                        \"render\": {\"_\": \"thumbnail\", \"display\": \"thumbnail\", \"sort\": \"layoutId\"}
                    },
                    {\"data\": \"owner\"},
                    {\"data\": \"groupsWithPermissions\"},
                    {
                        \"name\": \"status\",
                        \"data\": function (data, type) {
                            if (type != \"display\")
                                return data.status;

                            var icon = \"\";
                            if (data.status == 1)
                                icon = \"fa-check\";
                            else if (data.status == 0)
                                icon = \"fa-times\";
                            else if (data.status == 3)
                                icon = \"fa-cogs\";
                            else
                                icon = \"fa-exclamation\";

                            return \"<span class='fa \" + icon + \"' title='\" + (data.statusDescription) + ((data.statusMessage == null) ? \"\" : \" - \" + (data.statusMessage)) + \"'></span>\";
                        }
                    },
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
            table.on('draw', { form: \$(\"#layouts\").closest(\".XiboGrid\").find(\".FilterDiv form\") } ,dataTableCreateTagEvents);
            table.on('processing.dt', dataTableProcessing);
            dataTableAddButtons(table, \$('#layouts_wrapper').find('.col-sm-6').eq(1));
        });

        \$(\"#layoutUploadForm\").click(function() {

            var template = Handlebars.compile(\$(\"#template-layout-upload\").html());

            // Handle bars and open a dialog
            bootbox.dialog({
                message: template({
                    trans: {
                        addFiles: \"{% trans \"Add ZIP Files\" %}\",
                        startUpload: \"{% trans \"Start upload\" %}\",
                        cancelUpload: \"{% trans \"Cancel upload\" %}\",
                        replaceExistingMediaMessage: \"{% trans \"Replace Existing Media?\" %}\",
                        importTagsMessage: \"{% trans \"Import Tags?\" %}\",
                        useExistingDataSetsMessage: \"{% trans \"Use existing DataSets matched by name?\" %}\",
                        dataSetDataMessage: \"{% trans \"Import DataSet Data?\" %}\"
                    },
                    upload: {
                        maxSize: {{ libraryUpload.maxSize }},
                        maxSizeMessage: \"{{ libraryUpload.maxSizeMessage  }}\",
                        validExt: \"{{ libraryUpload.validExt }}\"
                    }
                }),
                title: \"{% trans \"Upload Layout\" %}\",
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
                var url = \"{{ urlFor(\"layout.import\") }}\";
                var form = \$(this).find(\"form\");
                var refreshSessionInterval;

                // Initialize the jQuery File Upload widget:
                form.fileupload({
                    url: url,
                    disableImageResize: true
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

                // Configure the active behaviour of the checkboxes
                \$(\"#useExistingDataSets\").on(\"click\", function () {
                    \$(\"#importDataSetData\").prop(\"disabled\", (\$(this).is(\":checked\")));
                });
            });
        });

        function layoutAddFormOpen() {
            \$(\"#layoutAddForm\").submit(function(e) {
                e.preventDefault();
                var form = \$(this);

                var url = \$(this).data().redirect;

                \$.ajax({
                    type: \$(this).attr(\"method\"),
                    url: \$(this).attr(\"action\"),
                    data: \$(this).serialize(),
                    cache: false,
                    dataType:\"json\",
                    success: function(xhr, textStatus, error) {

                        XiboSubmitResponse(xhr, form);

                        if (xhr.success) {
                            // Reload the designer
                            XiboRedirect(url.replace(\":id\", xhr.id));
                        }
                    }
                });
            });
        }

        function layoutExportFormSubmit() {
            var \$form = \$(\"#layoutExportForm\");
            window.location = \$form.attr(\"action\") + \"?\" + \$form.serialize();

            setTimeout(function() {
                XiboDialogClose();
            }, 1000);
        }

        function assignLayoutToCampaignFormSubmit() {
            var form = \$(\"#layoutAssignCampaignForm\");

            var url = form.prop(\"action\").replace(\":id\", form.find(\"#campaignId\").val());

            \$.ajax({
                type: form.attr(\"method\"),
                url: url,
                data: {layoutId: [{layoutId: form.data().layoutId}]},
                cache: false,
                dataType:\"json\",
                success: XiboSubmitResponse
            });
        }

    </script>
{% endblock %}

{% block javaScriptTemplates %}
    {{ parent() }}

    {% raw %}

        <script type=\"text/x-handlebars-template\" id=\"template-layout-upload\">
            <form method=\"post\" enctype=\"multipart/form-data\" data-max-file-size=\"{{ upload.maxSize }}\" data-accept-file-types=\"/(\\.|\\/)zip\$/i\">
                <div class=\"row fileupload-buttonbar\">
                    <div class=\"col-md-7\">
                        <div class=\"well\">
                            {{ upload.maxSizeMessage }}
                        </div>
                        <!-- The fileinput-button span is used to style the file input field as button -->
                    <span class=\"btn btn-success fileinput-button\">
                        <i class=\"glyphicon glyphicon-plus glyphicon glyphicon-white\"></i>
                        <span>{{ trans.addFiles }}</span>
                        <input type=\"file\" name=\"files[]\" multiple>
                    </span>
                        <button type=\"submit\" class=\"btn btn-primary start\">
                            <i class=\"glyphicon glyphicon-upload glyphicon glyphicon-white\"></i>
                            <span>{{ trans.startUpload }}</span>
                        </button>
                        <button type=\"reset\" class=\"btn btn-warning cancel\">
                            <i class=\"glyphicon glyphicon-ban-circle glyphicon glyphicon-white\"></i>
                            <span>{{ trans.cancelUpload }}</span>
                        </button>
                        <!-- The loading indicator is shown during file processing -->
                        <span class=\"fileupload-loading\"></span>
                    </div>
                    <!-- The global progress information -->
                    <div class=\"col-md-4 fileupload-progress fade\">
                        <!-- The global progress bar -->
                        <div class=\"progress\">
                            <div class=\"progress-bar progress-bar-success progress-bar-striped active\" role=\"progressbar\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:0%;\">
                                <div class=\"sr-only\"></div>
                            </div>
                        </div>
                        <!-- The extended global progress information -->
                        <div class=\"progress-extended\">&nbsp;</div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <label for=\"replaceExisting\" title=\"If the import finds existing media with the same name, should it be replaced in the Layout or should the Layout use that media.\">
                            <input type=\"checkbox\" id=\"replaceExisting\" name=\"replaceExisting\">
                            {{ trans.replaceExistingMediaMessage }}
                        </label>
                    </div>
                    <div class=\"col-md-6\">
                        <label for=\"importTags\" title=\"Would you like to import any tags contained on the layout.\">
                            <input type=\"checkbox\" id=\"importTags\" name=\"importTags\">
                            {{ trans.importTagsMessage }}
                        </label>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <label for=\"useExistingDataSets\">
                            <input type=\"checkbox\" id=\"useExistingDataSets\" name=\"useExistingDataSets\" checked>
                            {{ trans.useExistingDataSetsMessage }}
                        </label>
                    </div>
                    <div class=\"col-md-6\">
                        <label for=\"importDataSetData\">
                            <input type=\"checkbox\" id=\"importDataSetData\" name=\"importDataSetData\" disabled>
                            {{ trans.dataSetDataMessage }}
                        </label>
                    </div>
                </div>
                <!-- The table listing the files available for upload/download -->
                <table role=\"presentation\" class=\"table table-striped\"><tbody class=\"files\"></tbody></table>
            </form>
        </script>

        <!-- The template to display files available for upload -->
        <script id=\"template-layout-upload\" type=\"text/x-tmpl\">
        {% for (var i=0, file; file=o.files[i]; i++) { %}
            <tr class=\"template-upload fade\">
                <td>
                    <span class=\"fileupload-preview\"></span>
                </td>
                <td class=\"title\">
                    {% if (file.error) { %}
                        <div><span class=\"label label-danger\">{%=file.error%}</span></div>
                    {% } %}
                    {% if (!file.error) { %}
                    <label for=\"name[]\"><input name=\"name[]\" type=\"text\" id=\"name\" value=\"\" /></label>
                    {% } %}
                </td>
                <td>
                    <p class=\"size\">{%=o.formatFileSize(file.size)%}</p>
                    {% if (!o.files.error) { %}
                        <div class=\"progress\">
                            <div class=\"progress-bar progress-bar-striped active\" role=\"progressbar\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:0%;\">
                                <div class=\"sr-only\"></div>
                            </div>
                        </div>
                    </div>
                    {% } %}
                </td>
                <td>
                    {% if (!o.files.error && !i && !o.options.autoUpload) { %}
                        <button class=\"btn btn-primary start\">
                            <i class=\"glyphicon glyphicon-upload glyphicon glyphicon-white\"></i>
                        </button>
                    {% } %}
                    {% if (!i) { %}
                        <button class=\"btn btn-warning cancel\">
                            <i class=\"glyphicon glyphicon-ban-circle glyphicon glyphicon-white\"></i>
                        </button>
                    {% } %}
                </td>
            </tr>
        {% } %}
        </script>
        <!-- The template to display files available for download -->
        <script id=\"template-layout-download\" type=\"text/x-tmpl\">
        {% for (var i=0, file; file=o.files[i]; i++) { %}
            <tr class=\"template-download fade\">
               <td>
                    <p class=\"name\" id=\"{%=file.storedas%}\" status=\"{% if (file.error) { %}error{% } %}\">
                        {%=file.name%}
                    </p>
                    {% if (file.error) { %}
                        <div><span class=\"label label-danger\">{%=file.error%}</span></div>
                    {% } %}
                </td>
                <td>
                    <span class=\"size\">{%=o.formatFileSize(file.size)%}</span>
                </td>
            </tr>
        {% } %}
        </script>

    {% endraw %}
{% endblock %}", "layout-page.twig", "/var/www/web/views/layout-page.twig");
    }
}
