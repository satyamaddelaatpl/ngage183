<?php

/* settings-page.twig */
class __TwigTemplate_eb589f66cb1566027798cfa401411ee000620c4b0191aa97cee259effdf67627 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 9
        $this->parent = $this->loadTemplate("authed.twig", "settings-page.twig", 9);
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
        // line 10
        $context["forms"] = $this->loadTemplate("forms.twig", "settings-page.twig", 10);
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
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "SETTING_IMPORT_ENABLED", array())) {
            // line 15
            echo "            <li class=\"btn btn-success btn-xs\"><a id=\"layoutUploadForm\" class=\"btns\" title=\"";
            echo __("Import a database");
            echo "\" href=\"#\"> <i class=\"fa fa-cloud-download\" aria-hidden=\"true\"></i> ";
            echo __("Import");
            echo "</a></li>
        ";
        }
        // line 17
        echo "
        <li class=\"btn btn-info btn-xs\" ><a class=\"XiboFormButton btns\" title=\"";
        // line 18
        echo __("Export database");
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("maintenance.export.form"), "html", null, true);
        echo "\"> <i class=\"fa fa-cloud-upload\" aria-hidden=\"true\"></i> ";
        echo __("Export");
        echo "</a></li>

        ";
        // line 20
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "SETTING_LIBRARY_TIDY_ENABLED", array())) {
            // line 21
            echo "            <li class=\"btn btn-danger btn-xs\"><a class=\"XiboFormButton btns\" title=\"";
            echo __("Run through the library and remove unused and unnecessary files");
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("maintenance.libraryTidy.form"), "html", null, true);
            echo "\"> <i class=\"fa fa-trash\" aria-hidden=\"true\"></i> ";
            echo __("Tidy Library");
            echo "</a></li>
        ";
        }
        // line 23
        echo "    </ul>
";
    }

    // line 26
    public function block_pageContent($context, array $blocks = array())
    {
        // line 27
        echo "    <div class=\"widget\">
        <div class=\"widget-title\">";
        // line 28
        echo __("Settings");
        echo "</div>
        <div class=\"widget-body\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <ul class=\"nav nav-tabs\" role=\"tablist\">
                        ";
        // line 33
        $context["first"] = true;
        // line 34
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 35
            echo "                            ";
            $context["transCatTabName"] = $this->getAttribute($context["category"], "tabName", array());
            // line 36
            echo "                            <li ";
            if ((isset($context["first"]) ? $context["first"] : null)) {
                echo "class=\"active\"";
            }
            echo "><a href=\"#";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "tabId", array()), "html", null, true);
            echo "\" role=\"tab\" data-toggle=\"tab\"><span>";
            echo __((isset($context["transCatTabName"]) ? $context["transCatTabName"] : null));
            echo "</span></a></li>
                            ";
            // line 37
            $context["first"] = false;
            // line 38
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                    </ul>
                    <form id=\"SettingsForm\" class=\"XiboForm form-horizontal\" method=\"put\" action=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("settings.update"), "html", null, true);
        echo "\">
                        <div class=\"tab-content\">
                            ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) ? $context["fields"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 43
            echo "                                ";
            if (((isset($context["currentCat"]) ? $context["currentCat"] : null) != $this->getAttribute($context["field"], "cat", array()))) {
                // line 44
                echo "                                    ";
                if (((isset($context["currentCat"]) ? $context["currentCat"] : null) != "")) {
                    // line 45
                    echo "                                    </div>
                                    ";
                }
                // line 47
                echo "
                                    <div class=\"tab-pane ";
                // line 48
                if (((isset($context["currentCat"]) ? $context["currentCat"] : null) == "")) {
                    echo "active";
                }
                echo "\" id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "catId", array()), "html", null, true);
                echo "\">
                                    ";
                // line 49
                $context["currentCat"] = $this->getAttribute($context["field"], "cat", array());
                // line 50
                echo "                                    ";
                $context["transFieldCat"] = $this->getAttribute($context["field"], "cat", array());
                // line 51
                echo "                                    <h3 class=\"section-heading\">";
                echo __((isset($context["transFieldCat"]) ? $context["transFieldCat"] : null));
                echo "</h3>
                                ";
            }
            // line 53
            echo "                                ";
            // line 54
            echo "                                ";
            if (($this->getAttribute($context["field"], "enabled", array()) != 1)) {
                // line 55
                echo "                                    ";
                echo $context["forms"]->getdisabled($this->getAttribute($context["field"], "name", array()), $this->getAttribute($context["field"], "title", array()), $this->getAttribute($context["field"], "value", array()), $this->getAttribute($context["field"], "helpText", array()));
                echo "
                                ";
            } elseif (($this->getAttribute(            // line 56
$context["field"], "fieldType", array()) == "text")) {
                // line 57
                echo "                                    ";
                echo $context["forms"]->getinput($this->getAttribute($context["field"], "name", array()), $this->getAttribute($context["field"], "title", array()), $this->getAttribute($context["field"], "value", array()), $this->getAttribute($context["field"], "helpText", array()));
                echo "
                                ";
            } elseif (($this->getAttribute(            // line 58
$context["field"], "fieldType", array()) == "number")) {
                // line 59
                echo "                                    ";
                echo $context["forms"]->getnumber($this->getAttribute($context["field"], "name", array()), $this->getAttribute($context["field"], "title", array()), $this->getAttribute($context["field"], "value", array()), $this->getAttribute($context["field"], "helpText", array()));
                echo "
                                ";
            } elseif (($this->getAttribute(            // line 60
$context["field"], "fieldType", array()) == "email")) {
                // line 61
                echo "                                    ";
                echo $context["forms"]->getemail($this->getAttribute($context["field"], "name", array()), $this->getAttribute($context["field"], "title", array()), $this->getAttribute($context["field"], "value", array()), $this->getAttribute($context["field"], "helpText", array()));
                echo "
                                ";
            } elseif (($this->getAttribute(            // line 62
$context["field"], "fieldType", array()) == "checkbox")) {
                // line 63
                echo "                                    ";
                echo $context["forms"]->getcheckbox($this->getAttribute($context["field"], "name", array()), $this->getAttribute($context["field"], "title", array()), $this->getAttribute($context["field"], "value", array()), $this->getAttribute($context["field"], "helpText", array()));
                echo "
                                ";
            } elseif (($this->getAttribute(            // line 64
$context["field"], "fieldType", array()) == "dropdown")) {
                // line 65
                echo "                                    ";
                echo $context["forms"]->getdropdown($this->getAttribute($context["field"], "name", array()), "single", $this->getAttribute($context["field"], "title", array()), $this->getAttribute($context["field"], "value", array()), $this->getAttribute($context["field"], "options", array()), "id", "value", $this->getAttribute($context["field"], "helpText", array()));
                echo "
                                ";
            } elseif (($this->getAttribute(            // line 66
$context["field"], "fieldType", array()) == "timezone")) {
                // line 67
                echo "                                    ";
                echo $context["forms"]->getdropdown($this->getAttribute($context["field"], "name", array()), "single", $this->getAttribute($context["field"], "title", array()), $this->getAttribute($context["field"], "value", array()), $this->getAttribute($context["field"], "options", array()), "id", "value", $this->getAttribute($context["field"], "helpText", array()));
                echo "
                                ";
            } elseif (($this->getAttribute(            // line 68
$context["field"], "fieldType", array()) == "datetime")) {
                // line 69
                echo "                                    ";
                echo $context["forms"]->getdatetime($this->getAttribute($context["field"], "name", array()), $this->getAttribute($context["field"], "title", array()), $this->getAttribute($context["field"], "value", array()), $this->getAttribute($context["field"], "helpText", array()));
                echo "
                                ";
            }
            // line 71
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "                        </div>
                        <button class=\"btn btn-save btn-block btn-success\" href=\"#\"><span>";
        // line 73
        echo __("Save");
        echo "</span></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
";
    }

    // line 81
    public function block_javaScript($context, array $blocks = array())
    {
        // line 82
        echo "    <script type=\"text/javascript\">
        \$(\"#layoutUploadForm\").click(function() {

            var template = Handlebars.compile(\$(\"#template-backup-upload\").html());

            // Handle bars and open a dialog
            bootbox.dialog({
                message: template({
                    trans: {
                        addFiles: \"";
        // line 91
        echo __("Add Backup File");
        echo "\",
                        startUpload: \"";
        // line 92
        echo __("Start upload");
        echo "\",
                        cancelUpload: \"";
        // line 93
        echo __("Cancel upload");
        echo "\"
                    },
                    upload: {
                        maxSize: ";
        // line 96
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["libraryUpload"]) ? $context["libraryUpload"] : null), "maxSize", array()), "html", null, true);
        echo ",
                        maxSizeMessage: \"";
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["libraryUpload"]) ? $context["libraryUpload"] : null), "maxSizeMessage", array()), "html", null, true);
        echo "\",
                        validExt: \"";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["libraryUpload"]) ? $context["libraryUpload"] : null), "validExt", array()), "html", null, true);
        echo "\"
                    }
                }),
                title: \"";
        // line 101
        echo __("Upload Backup");
        echo "\",
                buttons: {
                    main: {
                        label: \"";
        // line 104
        echo __("Done");
        echo "\",
                        className: \"btn-primary\",
                        callback: function() {
                            XiboDialogClose();
                        }
                    }
                }
            }).on('shown.bs.modal', function() {
                // Configure the upload form
                var url = \"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("maintenance.import"), "html", null, true);
        echo "\";
                var form = \$(this).find(\"form\");

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
                });
            });
        });
    </script>
";
    }

    // line 158
    public function block_javaScriptTemplates($context, array $blocks = array())
    {
        // line 159
        echo "    ";
        $this->displayParentBlock("javaScriptTemplates", $context, $blocks);
        echo "

    ";
        // line 264
        echo "

    <script type=\"text/x-handlebars-template\" id=\"template-backup-upload\">
        <form method=\"post\" enctype=\"multipart/form-data\" data-max-file-size=\"{{ upload.maxSize }}\" data-accept-file-types=\"/(\\.|\\/)tar.gz/i\">
            <div class=\"row fileupload-buttonbar\">
                <div class=\"col-md-7\">
                    <div class=\"well\">
                        {{ upload.maxSizeMessage }}
                    </div>
                    <!-- The fileinput-button span is used to style the file input field as button -->
                    <span class=\"btn btn-success fileinput-button\">
                        <i class=\"glyphicon glyphicon-plus glyphicon glyphicon-white\"></i>
                        <span>{{ trans.addFiles }}</span>
                        <input type=\"file\" name=\"files[]\">
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
            <!-- The table listing the files available for upload/download -->
            <table role=\"presentation\" class=\"table table-striped\"><tbody class=\"files\"></tbody></table>
        </form>
    </script>

    <!-- The template to display files available for upload -->
    <script id=\"template-backup-upload\" type=\"text/x-tmpl\">
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
    <script id=\"template-backup-download\" type=\"text/x-tmpl\">
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
        return "settings-page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  363 => 264,  357 => 159,  354 => 158,  306 => 113,  294 => 104,  288 => 101,  282 => 98,  278 => 97,  274 => 96,  268 => 93,  264 => 92,  260 => 91,  249 => 82,  246 => 81,  235 => 73,  232 => 72,  226 => 71,  220 => 69,  218 => 68,  213 => 67,  211 => 66,  206 => 65,  204 => 64,  199 => 63,  197 => 62,  192 => 61,  190 => 60,  185 => 59,  183 => 58,  178 => 57,  176 => 56,  171 => 55,  168 => 54,  166 => 53,  160 => 51,  157 => 50,  155 => 49,  147 => 48,  144 => 47,  140 => 45,  137 => 44,  134 => 43,  130 => 42,  125 => 40,  122 => 39,  116 => 38,  114 => 37,  103 => 36,  100 => 35,  95 => 34,  93 => 33,  85 => 28,  82 => 27,  79 => 26,  74 => 23,  64 => 21,  62 => 20,  53 => 18,  50 => 17,  42 => 15,  40 => 14,  37 => 13,  34 => 12,  30 => 9,  28 => 10,  11 => 9,);
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
{% import \"forms.twig\" as forms %}

{% block actionMenu %}
    <ul class=\"nav nav-pills pull-right\">
        {% if settings.SETTING_IMPORT_ENABLED %}
            <li class=\"btn btn-success btn-xs\"><a id=\"layoutUploadForm\" class=\"btns\" title=\"{% trans \"Import a database\" %}\" href=\"#\"> <i class=\"fa fa-cloud-download\" aria-hidden=\"true\"></i> {% trans \"Import\" %}</a></li>
        {% endif %}

        <li class=\"btn btn-info btn-xs\" ><a class=\"XiboFormButton btns\" title=\"{% trans \"Export database\" %}\" href=\"{{ urlFor(\"maintenance.export.form\") }}\"> <i class=\"fa fa-cloud-upload\" aria-hidden=\"true\"></i> {% trans \"Export\" %}</a></li>

        {% if settings.SETTING_LIBRARY_TIDY_ENABLED %}
            <li class=\"btn btn-danger btn-xs\"><a class=\"XiboFormButton btns\" title=\"{% trans \"Run through the library and remove unused and unnecessary files\" %}\" href=\"{{ urlFor(\"maintenance.libraryTidy.form\") }}\"> <i class=\"fa fa-trash\" aria-hidden=\"true\"></i> {% trans \"Tidy Library\" %}</a></li>
        {% endif %}
    </ul>
{% endblock %}

{% block pageContent %}
    <div class=\"widget\">
        <div class=\"widget-title\">{% trans \"Settings\" %}</div>
        <div class=\"widget-body\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <ul class=\"nav nav-tabs\" role=\"tablist\">
                        {% set first = true %}
                        {% for category in categories %}
                            {% set transCatTabName = category.tabName %}
                            <li {% if first %}class=\"active\"{% endif %}><a href=\"#{{ category.tabId }}\" role=\"tab\" data-toggle=\"tab\"><span>{% trans transCatTabName %}</span></a></li>
                            {% set first = false %}
                        {% endfor %}
                    </ul>
                    <form id=\"SettingsForm\" class=\"XiboForm form-horizontal\" method=\"put\" action=\"{{ urlFor(\"settings.update\") }}\">
                        <div class=\"tab-content\">
                            {% for field in fields %}
                                {% if currentCat != field.cat %}
                                    {% if currentCat != \"\" %}
                                    </div>
                                    {% endif %}

                                    <div class=\"tab-pane {% if currentCat == \"\" %}active{% endif %}\" id=\"{{ field.catId }}\">
                                    {% set currentCat = field.cat %}
                                    {% set transFieldCat = field.cat %}
                                    <h3 class=\"section-heading\">{% trans transFieldCat %}</h3>
                                {% endif %}
                                {# Now we have to output the relevant form field #}
                                {% if field.enabled != 1 %}
                                    {{ forms.disabled(field.name, field.title, field.value, field.helpText) }}
                                {% elseif field.fieldType == \"text\" %}
                                    {{ forms.input(field.name, field.title, field.value, field.helpText) }}
                                {% elseif field.fieldType == \"number\" %}
                                    {{ forms.number(field.name, field.title, field.value, field.helpText) }}
                                {% elseif field.fieldType == \"email\" %}
                                    {{ forms.email(field.name, field.title, field.value, field.helpText) }}
                                {% elseif field.fieldType == \"checkbox\" %}
                                    {{ forms.checkbox(field.name, field.title, field.value, field.helpText) }}
                                {% elseif field.fieldType == \"dropdown\" %}
                                    {{ forms.dropdown(field.name, \"single\", field.title, field.value, field.options, \"id\", \"value\", field.helpText) }}
                                {% elseif field.fieldType == \"timezone\" %}
                                    {{ forms.dropdown(field.name, \"single\", field.title, field.value, field.options, \"id\", \"value\", field.helpText) }}
                                {% elseif field.fieldType == \"datetime\" %}
                                    {{ forms.datetime(field.name, field.title, field.value, field.helpText) }}
                                {% endif %}
                            {% endfor %}
                        </div>
                        <button class=\"btn btn-save btn-block btn-success\" href=\"#\"><span>{% trans \"Save\" %}</span></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block javaScript %}
    <script type=\"text/javascript\">
        \$(\"#layoutUploadForm\").click(function() {

            var template = Handlebars.compile(\$(\"#template-backup-upload\").html());

            // Handle bars and open a dialog
            bootbox.dialog({
                message: template({
                    trans: {
                        addFiles: \"{% trans \"Add Backup File\" %}\",
                        startUpload: \"{% trans \"Start upload\" %}\",
                        cancelUpload: \"{% trans \"Cancel upload\" %}\"
                    },
                    upload: {
                        maxSize: {{ libraryUpload.maxSize }},
                        maxSizeMessage: \"{{ libraryUpload.maxSizeMessage  }}\",
                        validExt: \"{{ libraryUpload.validExt }}\"
                    }
                }),
                title: \"{% trans \"Upload Backup\" %}\",
                buttons: {
                    main: {
                        label: \"{% trans \"Done\" %}\",
                        className: \"btn-primary\",
                        callback: function() {
                            XiboDialogClose();
                        }
                    }
                }
            }).on('shown.bs.modal', function() {
                // Configure the upload form
                var url = \"{{ urlFor(\"maintenance.import\") }}\";
                var form = \$(this).find(\"form\");

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
                });
            });
        });
    </script>
{% endblock %}

{% block javaScriptTemplates %}
    {{ parent() }}

    {% raw %}

    <script type=\"text/x-handlebars-template\" id=\"template-backup-upload\">
        <form method=\"post\" enctype=\"multipart/form-data\" data-max-file-size=\"{{ upload.maxSize }}\" data-accept-file-types=\"/(\\.|\\/)tar.gz/i\">
            <div class=\"row fileupload-buttonbar\">
                <div class=\"col-md-7\">
                    <div class=\"well\">
                        {{ upload.maxSizeMessage }}
                    </div>
                    <!-- The fileinput-button span is used to style the file input field as button -->
                    <span class=\"btn btn-success fileinput-button\">
                        <i class=\"glyphicon glyphicon-plus glyphicon glyphicon-white\"></i>
                        <span>{{ trans.addFiles }}</span>
                        <input type=\"file\" name=\"files[]\">
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
            <!-- The table listing the files available for upload/download -->
            <table role=\"presentation\" class=\"table table-striped\"><tbody class=\"files\"></tbody></table>
        </form>
    </script>

    <!-- The template to display files available for upload -->
    <script id=\"template-backup-upload\" type=\"text/x-tmpl\">
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
    <script id=\"template-backup-download\" type=\"text/x-tmpl\">
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
{% endblock %}", "settings-page.twig", "/var/www/web/views/settings-page.twig");
    }
}
