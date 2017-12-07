<?php

/* authed.twig */
class __TwigTemplate_68584a00fd3df2abf88efcf0912b282e7f75f09a73fb38c616fdd7cafd84d35e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.twig", "authed.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'actionMenu' => array($this, 'block_actionMenu'),
            'pageContent' => array($this, 'block_pageContent'),
            'pageFooter' => array($this, 'block_pageFooter'),
            'javaScriptTemplates' => array($this, 'block_javaScriptTemplates'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div id=\"page-wrapper\" class=\"active\">
        <div class=\"collapse navbar-collapse\" id=\"navbar-collapse-1\">
            ";
        // line 6
        $this->loadTemplate("authed-sidebar.twig", "authed.twig", 6)->display($context);
        // line 7
        echo "        </div>

        <div id=\"content-wrapper\">
            <div class=\"page-content\">
                <div class=\"row header\">
                    <div class=\"col-sm-12\">
                        <div class=\"meta pull-left\">
                            <div class=\"page\"><img class=\"xibo-logo\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "img/xibologo.png"), "method"), "html", null, true);
        echo "\"></div>
                        </div>
                        <div class=\"user pull-right\">
                            <button type=\"button\"  class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar-collapse-1\">
                                <span class=\"sr-only\">Toggle navigation</span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                            </button>
                            <div class=\"item dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                    <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "img/avatar.jpg"), "method"), "html", null, true);
        echo "\" />
                                </a>
                                <ul class=\"dropdown-menu dropdown-menu-right\">
                                    <li class=\"dropdown-header\">";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "userName", array()), "html", null, true);
        echo "<br/>
                                        <div id=\"XiboClock\">";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["clock"]) ? $context["clock"] : null), "html", null, true);
        echo "</div>
                                    </li>
                                    <li class=\"divider\"></li>
                                    <li><a class=\"XiboFormButton\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("user.change.password.form"), "html", null, true);
        echo "\" title=\"";
        echo __("Change Password");
        echo "\">";
        echo __("Change Password");
        echo "</a></li>
                                    <li><a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("welcome.wizard"), "html", null, true);
        echo "\">";
        echo __("Reshow welcome");
        echo "</a></li>
                                    <li><a class=\"XiboHelpButton\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["helpService"]) ? $context["helpService"] : null), "link", array(), "method"), "html", null, true);
        echo "\">";
        echo __("Help");
        echo "</a></li>
                                    <li class=\"divider\"></li>
                                    <li><a title=\"";
        // line 36
        echo __("Logout");
        echo "\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["logoutUrl"]) ? $context["logoutUrl"] : null), "html", null, true);
        echo "\">";
        echo __("Logout");
        echo "</a></li>
                                </ul>
                            </div>
                        </div>
                        ";
        // line 40
        if ($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "routeViewable", array(0 => "/drawer"), "method")) {
            // line 41
            echo "                        <div class=\"user pull-right\">
                            <div class=\"item dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                    <i class=\"fa fa-bell\"></i> ";
            // line 44
            if (((isset($context["notificationCount"]) ? $context["notificationCount"] : null) > 0)) {
                echo "<span class=\"badge red\">";
                echo twig_escape_filter($this->env, (isset($context["notificationCount"]) ? $context["notificationCount"] : null), "html", null, true);
                echo "</span>";
            }
            // line 45
            echo "                                </a>
                                <ul class=\"dropdown-menu dropdown-menu-right notification-drawer\">
                                    <li class=\"dropdown-header\">";
            // line 47
            echo __("Notifications");
            echo "<br/>

                                    </li>
                                    ";
            // line 50
            if ((twig_length_filter($this->env, (isset($context["notifications"]) ? $context["notifications"] : null)) > 0)) {
                // line 51
                echo "                                    <li class=\"divider\"></li>
                                    ";
            }
            // line 53
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["notifications"]) ? $context["notifications"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
                // line 54
                echo "                                    <li>
                                        <div class=\"notification\">
                                            ";
                // line 56
                if ($this->getAttribute($context["notification"], "notificationId", array())) {
                    // line 57
                    echo "                                            <a class=\"XiboFormButton\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("notification.show", array("id" => $this->getAttribute($context["notification"], "notificationId", array()))), "html", null, true);
                    echo "\"><span class=\"";
                    if ($this->getAttribute($context["notification"], "read", array())) {
                        echo "notification-unread";
                    } else {
                        echo "notification-read";
                    }
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["notification"], "subject", array()), "html", null, true);
                    echo " - <span class=\"notification-date\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["notification"], "releaseDt", array()), "html", null, true);
                    echo "</span></span></a>
                                            ";
                } else {
                    // line 59
                    echo "                                            <span class=\"fa fa-exclamation-circle\"></span> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["notification"], "subject", array()), "html", null, true);
                    echo " - <span class=\"notification-date\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["notification"], "releaseDt", array()), "html", null, true);
                    echo "</span>
                                            ";
                }
                // line 61
                echo "                                        </div>
                                    </li>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "
                                    ";
            // line 65
            if ($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "routeViewable", array(0 => "/notification"), "method")) {
                // line 66
                echo "                                    <li class=\"divider\"></li>

                                    <li><a href=\"";
                // line 68
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("notification.view"), "html", null, true);
                echo "\">";
                echo __("Notification Centre");
                echo "</a></li>
                                    ";
            }
            // line 70
            echo "                                </ul>
                            </div>
                        </div>
                        ";
        }
        // line 74
        echo "                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        ";
        // line 78
        $this->displayBlock('actionMenu', $context, $blocks);
        // line 79
        echo "                        ";
        $this->displayBlock('pageContent', $context, $blocks);
        // line 80
        echo "                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        ";
        // line 84
        $this->displayBlock('pageFooter', $context, $blocks);
        // line 85
        echo "                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    // line 78
    public function block_actionMenu($context, array $blocks = array())
    {
    }

    // line 79
    public function block_pageContent($context, array $blocks = array())
    {
    }

    // line 84
    public function block_pageFooter($context, array $blocks = array())
    {
    }

    // line 92
    public function block_javaScriptTemplates($context, array $blocks = array())
    {
        // line 93
        echo "
    <script type=\"text/javascript\">
        ";
        // line 95
        $context["userPreferences"] = $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "userOptions", array());
        // line 96
        echo "        var userPreferences = ";
        echo twig_jsonencode_filter((isset($context["userPreferences"]) ? $context["userPreferences"] : null));
        echo ";
        var userPreferencesUrl = \"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("user.pref"), "html", null, true);
        echo "\";
    </script>

    ";
        // line 268
        echo "
    <script type=\"text/x-handlebars-template\" id=\"buttons-template\">
        <div class=\"btn-group pull-right\">
            <button class=\"btn dropdown-toggle\" data-toggle=\"dropdown\">
                <span class=\"fa fa-caret-down\"></span>
            </button>
            <ul class=\"dropdown-menu\">
                {{#each buttons}}
                    {{#if divider}}
                    <li class=\"divider\"></li>
                    {{else}}
                        {{#if external}}
                        <li class=\"{{ id }}\"><a tabindex=\"-1\" target=\"{{ linkType }}\" href=\"{{ url }}\">{{ text }}</a></li>
                        {{/if}}

                        {{#unless external}}
                            <li {{#each dataAttributes}}
                                data-{{ name }}=\"{{ value }}\"
                                {{/each}}
                                class=\"{{#if class}}{{ class }}{{else}}XiboFormButton{{/if}} {{ id }}\" href=\"{{ url }}\"><a tabindex=\"-1\" href=\"#\">{{ text }}</a>
                            </li>
                        {{/unless}}
                    {{/if}}
                {{/each}}
            </ul>
        </div>
    </script>

    <script type=\"text/x-handlebars-template\" id=\"multiselect-button-template\">
        <div class=\"btn-group\">
            <button class=\"btn select-all\" data-toggle=\"selectAll\">
                {{ selectAll }}
            </button>
            <button class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                <span class=\"fa fa-caret-down\"></span>
                {{ withSelected }}
            </button>
            <ul class=\"dropdown-menu\">
                {{#each buttons}}
                <li class=\"XiboMultiSelectFormButton\" data-button-id=\"{{ id }}\" data-grid-id=\"{{ gridId }}\"><a tabindex=\"-1\" href=\"#\">{{ text }}</a></li>
                {{/each}}
            </ul>
        </div>
    </script>

    <script type=\"text/x-handlebars-template\" id=\"template-file-upload\">
        <form method=\"post\" enctype=\"multipart/form-data\" data-max-file-size=\"{{ upload.maxSize }}\" data-accept-file-types=\"/(\\.|\\/){{ upload.validExt }}\$/i\">
            {{#if playlistId}}
                <input type=\"hidden\" name=\"playlistId\" value=\"{{ playlistId }}\" />
            {{/if}}
            {{#if widgetId}}
                <input type=\"hidden\" name=\"widgetId\" value=\"{{ widgetId }}\" />
            {{/if}}
            {{#if oldMediaId}}
                <input type=\"hidden\" name=\"oldMediaId\" value=\"{{ oldMediaId }}\" />
            {{/if}}
            <div class=\"row fileupload-buttonbar\">
                <div class=\"col-md-7\">
                    <div class=\"well\">
                        {{ upload.maxSizeMessage }}
                    </div>
                    <!-- The fileinput-button span is used to style the file input field as button -->
                    <span class=\"btn btn-success fileinput-button\">
                        <i class=\"glyphicon glyphicon-plus glyphicon glyphicon-white\"></i>
                        <span>{{ trans.addFiles }}</span>
                        {{#if oldMediaId }}
                        <input type=\"file\" name=\"files[]\">
                        {{else}}
                        <input type=\"file\" name=\"files[]\" multiple>
                        {{/if}}
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
            {{#if oldMediaId}}
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <label for=\"updateInLayouts\" title=\"{{ trans.updateInLayouts.helpText }}\">
                        <input type=\"checkbox\" id=\"updateInLayouts\" name=\"updateInLayouts\" {{#if updateInAllChecked}}checked{{/if}}>
                        {{ trans.updateInLayouts.title }}
                    </label>
                </div>
                <div class=\"col-md-6\">
                    <label for=\"deleteOldRevisions\" title=\"{{ trans.deleteOldRevisions.helpText }}\">
                        <input type=\"checkbox\" id=\"deleteOldRevisions\" name=\"deleteOldRevisions\" {{#if deleteOldRevisionsChecked}}checked{{/if}}>
                        {{ trans.deleteOldRevisions.title }}
                    </label>
                </div>
            </div>
            {{/if}}
            <!-- The table listing the files available for upload/download -->
            <table role=\"presentation\" class=\"table table-striped\"><tbody class=\"files\"></tbody></table>
        </form>
    </script>

    <!-- The template to display files available for upload -->
    <script id=\"template-upload\" type=\"text/x-tmpl\">
    {% for (var i=0, file; file=o.files[i]; i++) { %}
        <tr class=\"template-upload fade\">
            <td>
                <span class=\"preview\"></span>
            </td>
            <td class=\"title\">
                <label for=\"name[]\"><input name=\"name[]\" type=\"text\" id=\"name\" value=\"\" /></label>
                <div><span class=\"error\"></span></div>
            </td>
            <td>
                <p class=\"size\">{%=o.formatFileSize(file.size)%}</p>
                    <div class=\"progress\">
                        <div class=\"progress-bar progress-bar-striped active\" role=\"progressbar\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:0%;\">
                            <div class=\"sr-only\"></div>
                        </div>
                    </div>
                </div>
            </td>
            <td>
                {% if (!i && !o.options.autoUpload) { %}
                    <button class=\"btn btn-primary start\" disabled>
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
    <script id=\"template-download\" type=\"text/x-tmpl\">
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

    <script type=\"text/x-handlebars-template\" id=\"layout-background-image-upload-template\">
        <form method=\"post\" action=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("library.add"), "html", null, true);
        echo "\" enctype=\"multipart/form-data\" data-max-file-size=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["libraryUpload"]) ? $context["libraryUpload"] : null), "maxSize", array()), "html", null, true);
        echo "\" data-accept-file-types=\"/(\\.|\\/)";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["libraryUpload"]) ? $context["libraryUpload"] : null), "validImageExt", array()), "html", null, true);
        echo "\$/i\">
            <div class=\"row\">
                <div class=\"col-md-4\">
                    <span class=\"btn btn-success fileinput-button\">
                        <i class=\"glyphicon glyphicon-plus glyphicon glyphicon-white\"></i>
                        <span>";
        // line 276
        echo __("Add a new background image?");
        echo "</span> <input type=\"file\" name=\"files[]\">
                    </span>
                </div>
                <div class=\"col-md-8\">
                    <span class=\"fileupload-loading\"></span>
                    <div class=\"fileupload-progress fade\">
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
            </div>
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <!-- The table listing the files available for upload/download -->
                    <table role=\"presentation\" class=\"table table-striped\"><tbody class=\"files\"></tbody></table>
                </div>
            </div>
        </form>
    </script>

";
    }

    public function getTemplateName()
    {
        return "authed.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  455 => 276,  443 => 271,  269 => 268,  263 => 97,  258 => 96,  256 => 95,  252 => 93,  249 => 92,  244 => 84,  239 => 79,  234 => 78,  225 => 85,  223 => 84,  217 => 80,  214 => 79,  212 => 78,  206 => 74,  200 => 70,  193 => 68,  189 => 66,  187 => 65,  184 => 64,  176 => 61,  168 => 59,  152 => 57,  150 => 56,  146 => 54,  141 => 53,  137 => 51,  135 => 50,  129 => 47,  125 => 45,  119 => 44,  114 => 41,  112 => 40,  101 => 36,  94 => 34,  88 => 33,  80 => 32,  74 => 29,  70 => 28,  64 => 25,  50 => 14,  41 => 7,  39 => 6,  35 => 4,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.twig\" %}

{% block content %}
    <div id=\"page-wrapper\" class=\"active\">
        <div class=\"collapse navbar-collapse\" id=\"navbar-collapse-1\">
            {% include \"authed-sidebar.twig\" %}
        </div>

        <div id=\"content-wrapper\">
            <div class=\"page-content\">
                <div class=\"row header\">
                    <div class=\"col-sm-12\">
                        <div class=\"meta pull-left\">
                            <div class=\"page\"><img class=\"xibo-logo\" src=\"{{ theme.uri(\"img/xibologo.png\") }}\"></div>
                        </div>
                        <div class=\"user pull-right\">
                            <button type=\"button\"  class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar-collapse-1\">
                                <span class=\"sr-only\">Toggle navigation</span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                            </button>
                            <div class=\"item dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                    <img src=\"{{ theme.uri(\"img/avatar.jpg\") }}\" />
                                </a>
                                <ul class=\"dropdown-menu dropdown-menu-right\">
                                    <li class=\"dropdown-header\">{{ currentUser.userName }}<br/>
                                        <div id=\"XiboClock\">{{ clock }}</div>
                                    </li>
                                    <li class=\"divider\"></li>
                                    <li><a class=\"XiboFormButton\" href=\"{{ urlFor(\"user.change.password.form\") }}\" title=\"{% trans \"Change Password\" %}\">{% trans \"Change Password\" %}</a></li>
                                    <li><a href=\"{{ urlFor(\"welcome.wizard\") }}\">{% trans \"Reshow welcome\" %}</a></li>
                                    <li><a class=\"XiboHelpButton\" href=\"{{ helpService.link() }}\">{% trans \"Help\" %}</a></li>
                                    <li class=\"divider\"></li>
                                    <li><a title=\"{% trans \"Logout\" %}\" href=\"{{ logoutUrl }}\">{% trans \"Logout\" %}</a></li>
                                </ul>
                            </div>
                        </div>
                        {% if currentUser.routeViewable(\"/drawer\") %}
                        <div class=\"user pull-right\">
                            <div class=\"item dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                    <i class=\"fa fa-bell\"></i> {% if notificationCount > 0 %}<span class=\"badge red\">{{ notificationCount }}</span>{% endif %}
                                </a>
                                <ul class=\"dropdown-menu dropdown-menu-right notification-drawer\">
                                    <li class=\"dropdown-header\">{% trans \"Notifications\" %}<br/>

                                    </li>
                                    {% if notifications|length > 0 %}
                                    <li class=\"divider\"></li>
                                    {% endif %}
                                    {% for notification in notifications %}
                                    <li>
                                        <div class=\"notification\">
                                            {% if notification.notificationId %}
                                            <a class=\"XiboFormButton\" href=\"{{ urlFor(\"notification.show\", {id: notification.notificationId}) }}\"><span class=\"{% if notification.read %}notification-unread{% else %}notification-read{% endif %}\">{{ notification.subject }} - <span class=\"notification-date\">{{ notification.releaseDt }}</span></span></a>
                                            {% else %}
                                            <span class=\"fa fa-exclamation-circle\"></span> {{ notification.subject }} - <span class=\"notification-date\">{{ notification.releaseDt }}</span>
                                            {% endif %}
                                        </div>
                                    </li>
                                    {% endfor %}

                                    {% if currentUser.routeViewable(\"/notification\") %}
                                    <li class=\"divider\"></li>

                                    <li><a href=\"{{ urlFor(\"notification.view\") }}\">{% trans \"Notification Centre\" %}</a></li>
                                    {% endif %}
                                </ul>
                            </div>
                        </div>
                        {% endif %}
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        {% block actionMenu %}{% endblock %}
                        {% block pageContent %}{% endblock %}
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        {% block pageFooter %}{% endblock %}
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block javaScriptTemplates %}

    <script type=\"text/javascript\">
        {% set userPreferences = currentUser.userOptions %}
        var userPreferences = {{ userPreferences|json_encode|raw }};
        var userPreferencesUrl = \"{{ urlFor(\"user.pref\") }}\";
    </script>

    {% raw %}
    <script type=\"text/x-handlebars-template\" id=\"buttons-template\">
        <div class=\"btn-group pull-right\">
            <button class=\"btn dropdown-toggle\" data-toggle=\"dropdown\">
                <span class=\"fa fa-caret-down\"></span>
            </button>
            <ul class=\"dropdown-menu\">
                {{#each buttons}}
                    {{#if divider}}
                    <li class=\"divider\"></li>
                    {{else}}
                        {{#if external}}
                        <li class=\"{{ id }}\"><a tabindex=\"-1\" target=\"{{ linkType }}\" href=\"{{ url }}\">{{ text }}</a></li>
                        {{/if}}

                        {{#unless external}}
                            <li {{#each dataAttributes}}
                                data-{{ name }}=\"{{ value }}\"
                                {{/each}}
                                class=\"{{#if class}}{{ class }}{{else}}XiboFormButton{{/if}} {{ id }}\" href=\"{{ url }}\"><a tabindex=\"-1\" href=\"#\">{{ text }}</a>
                            </li>
                        {{/unless}}
                    {{/if}}
                {{/each}}
            </ul>
        </div>
    </script>

    <script type=\"text/x-handlebars-template\" id=\"multiselect-button-template\">
        <div class=\"btn-group\">
            <button class=\"btn select-all\" data-toggle=\"selectAll\">
                {{ selectAll }}
            </button>
            <button class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                <span class=\"fa fa-caret-down\"></span>
                {{ withSelected }}
            </button>
            <ul class=\"dropdown-menu\">
                {{#each buttons}}
                <li class=\"XiboMultiSelectFormButton\" data-button-id=\"{{ id }}\" data-grid-id=\"{{ gridId }}\"><a tabindex=\"-1\" href=\"#\">{{ text }}</a></li>
                {{/each}}
            </ul>
        </div>
    </script>

    <script type=\"text/x-handlebars-template\" id=\"template-file-upload\">
        <form method=\"post\" enctype=\"multipart/form-data\" data-max-file-size=\"{{ upload.maxSize }}\" data-accept-file-types=\"/(\\.|\\/){{ upload.validExt }}\$/i\">
            {{#if playlistId}}
                <input type=\"hidden\" name=\"playlistId\" value=\"{{ playlistId }}\" />
            {{/if}}
            {{#if widgetId}}
                <input type=\"hidden\" name=\"widgetId\" value=\"{{ widgetId }}\" />
            {{/if}}
            {{#if oldMediaId}}
                <input type=\"hidden\" name=\"oldMediaId\" value=\"{{ oldMediaId }}\" />
            {{/if}}
            <div class=\"row fileupload-buttonbar\">
                <div class=\"col-md-7\">
                    <div class=\"well\">
                        {{ upload.maxSizeMessage }}
                    </div>
                    <!-- The fileinput-button span is used to style the file input field as button -->
                    <span class=\"btn btn-success fileinput-button\">
                        <i class=\"glyphicon glyphicon-plus glyphicon glyphicon-white\"></i>
                        <span>{{ trans.addFiles }}</span>
                        {{#if oldMediaId }}
                        <input type=\"file\" name=\"files[]\">
                        {{else}}
                        <input type=\"file\" name=\"files[]\" multiple>
                        {{/if}}
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
            {{#if oldMediaId}}
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <label for=\"updateInLayouts\" title=\"{{ trans.updateInLayouts.helpText }}\">
                        <input type=\"checkbox\" id=\"updateInLayouts\" name=\"updateInLayouts\" {{#if updateInAllChecked}}checked{{/if}}>
                        {{ trans.updateInLayouts.title }}
                    </label>
                </div>
                <div class=\"col-md-6\">
                    <label for=\"deleteOldRevisions\" title=\"{{ trans.deleteOldRevisions.helpText }}\">
                        <input type=\"checkbox\" id=\"deleteOldRevisions\" name=\"deleteOldRevisions\" {{#if deleteOldRevisionsChecked}}checked{{/if}}>
                        {{ trans.deleteOldRevisions.title }}
                    </label>
                </div>
            </div>
            {{/if}}
            <!-- The table listing the files available for upload/download -->
            <table role=\"presentation\" class=\"table table-striped\"><tbody class=\"files\"></tbody></table>
        </form>
    </script>

    <!-- The template to display files available for upload -->
    <script id=\"template-upload\" type=\"text/x-tmpl\">
    {% for (var i=0, file; file=o.files[i]; i++) { %}
        <tr class=\"template-upload fade\">
            <td>
                <span class=\"preview\"></span>
            </td>
            <td class=\"title\">
                <label for=\"name[]\"><input name=\"name[]\" type=\"text\" id=\"name\" value=\"\" /></label>
                <div><span class=\"error\"></span></div>
            </td>
            <td>
                <p class=\"size\">{%=o.formatFileSize(file.size)%}</p>
                    <div class=\"progress\">
                        <div class=\"progress-bar progress-bar-striped active\" role=\"progressbar\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:0%;\">
                            <div class=\"sr-only\"></div>
                        </div>
                    </div>
                </div>
            </td>
            <td>
                {% if (!i && !o.options.autoUpload) { %}
                    <button class=\"btn btn-primary start\" disabled>
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
    <script id=\"template-download\" type=\"text/x-tmpl\">
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

    <script type=\"text/x-handlebars-template\" id=\"layout-background-image-upload-template\">
        <form method=\"post\" action=\"{{ urlFor(\"library.add\") }}\" enctype=\"multipart/form-data\" data-max-file-size=\"{{ libraryUpload.maxSize }}\" data-accept-file-types=\"/(\\.|\\/){{ libraryUpload.validImageExt }}\$/i\">
            <div class=\"row\">
                <div class=\"col-md-4\">
                    <span class=\"btn btn-success fileinput-button\">
                        <i class=\"glyphicon glyphicon-plus glyphicon glyphicon-white\"></i>
                        <span>{% trans \"Add a new background image?\" %}</span> <input type=\"file\" name=\"files[]\">
                    </span>
                </div>
                <div class=\"col-md-8\">
                    <span class=\"fileupload-loading\"></span>
                    <div class=\"fileupload-progress fade\">
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
            </div>
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <!-- The table listing the files available for upload/download -->
                    <table role=\"presentation\" class=\"table table-striped\"><tbody class=\"files\"></tbody></table>
                </div>
            </div>
        </form>
    </script>

{% endblock %}", "authed.twig", "/var/www/web/views/authed.twig");
    }
}
