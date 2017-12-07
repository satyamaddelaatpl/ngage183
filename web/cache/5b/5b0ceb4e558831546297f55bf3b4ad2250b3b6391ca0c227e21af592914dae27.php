<?php

/* dashboard-status-page.twig */
class __TwigTemplate_2af3af334ddfff1ba57d46583ca47535dbb123f5d6c68599b3c5695ee6c80986 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 9
        $this->parent = $this->loadTemplate("authed.twig", "dashboard-status-page.twig", 9);
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
        $context["inline"] = $this->loadTemplate("inline.twig", "dashboard-status-page.twig", 10);
        // line 9
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_pageContent($context, array $blocks = array())
    {
        // line 13
        echo "    <div class=\"row\">
        <div class=\"col-lg-3 col-md-6 col-xs-12\">
            <div class=\"widget\">
                <div class=\"widget-body\">
                    <div class=\"widget-icon orange pull-left\">
                        <i class=\"fa fa-desktop\"></i>
                    </div>
                    <div class=\"widget-content pull-left\">
                        <div class=\"title\">";
        // line 21
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["displays"]) ? $context["displays"] : null)), "html", null, true);
        echo "</div>
                        <div class=\"comment\">";
        // line 22
        if ((twig_length_filter($this->env, (isset($context["displays"]) ? $context["displays"] : null)) == 1)) {
            echo __("Display");
        } else {
            echo __("Displays");
        }
        echo "</div>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
        </div>
        <div class=\"col-lg-3 col-md-6 col-xs-12\">
            <div class=\"widget\">
                <div class=\"widget-body\">
                    <div class=\"widget-icon red pull-left\">
                        <i class=\"fa fa-tasks\"></i>
                    </div>
                    <div class=\"widget-content pull-left\">
                        <div class=\"title\">";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["librarySize"]) ? $context["librarySize"] : null), "html", null, true);
        echo "</div>
                        <div class=\"comment\">";
        // line 36
        echo __("Library Size");
        echo "</div>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
        </div>
        <div class=\"col-lg-3 col-md-6 col-xs-12\">
            <div class=\"widget\">
                <div class=\"widget-body\">
                    <div class=\"widget-icon green pull-left\">
                        <i class=\"fa fa-users\"></i>
                    </div>
                    <div class=\"widget-content pull-left\">
                        <div class=\"title\">";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["countUsers"]) ? $context["countUsers"] : null), "html", null, true);
        echo "</div>
                        <div class=\"comment\">";
        // line 50
        if (((isset($context["countUsers"]) ? $context["countUsers"] : null) == 1)) {
            echo __("User");
        } else {
            echo __("Users");
        }
        echo "</div>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
        </div>
        <div class=\"col-lg-3 col-md-6 col-xs-12\">
            <div class=\"widget\">
                <div class=\"widget-body\">
                    <div class=\"widget-icon blue pull-left\">
                        <i class=\"fa fa-cogs\"></i>
                    </div>
                    <div class=\"widget-content pull-left\">
                        ";
        // line 63
        if (((isset($context["embeddedWidget"]) ? $context["embeddedWidget"] : null) != "")) {
            // line 64
            echo "                            ";
            echo (isset($context["embeddedWidget"]) ? $context["embeddedWidget"] : null);
            echo "
                        ";
        } else {
            // line 66
            echo "                            <div class=\"title\">";
            echo twig_escape_filter($this->env, (isset($context["nowShowing"]) ? $context["nowShowing"] : null), "html", null, true);
            echo "</div>
                            <div class=\"comment\">";
            // line 67
            echo __("Now Showing");
            echo "</div>
                        ";
        }
        // line 69
        echo "                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-6\">
            <div class=\"widget\">
                <div class=\"widget-title\">
                    <i class=\"fa fa-cloud-download\"></i>
                    ";
        // line 80
        if (((isset($context["xmdsLimit"]) ? $context["xmdsLimit"] : null) != "")) {
            // line 81
            echo "                        ";
            /* xgettext:no-php-format */            echo strtr(__("Bandwidth Usage. Limit %xmdsLimit%"), array("%xmdsLimit%" => (isset($context["xmdsLimit"]) ? $context["xmdsLimit"] : null), ));
            // line 82
            echo "                    ";
        } else {
            // line 83
            echo "                        ";
            /* xgettext:no-php-format */            echo strtr(__("Bandwidth Usage (%bandwidthSuffix%)"), array("%bandwidthSuffix%" => (isset($context["bandwidthSuffix"]) ? $context["bandwidthSuffix"] : null), ));
            // line 84
            echo "                    ";
        }
        // line 85
        echo "                    ";
        if ($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "routeViewable", array(0 => "/stats"), "method")) {
            // line 86
            echo "                    <a class=\"pull-right\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("stats.view"), "html", null, true);
            echo "\">";
            echo __("More Statistics");
            echo "</a>
                    ";
        }
        // line 88
        echo "                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"widget-body medium no-padding\">
                    <canvas id=\"bandwidthChart\" style=\"clear:both;\" height=\"230\"></canvas>
                </div>
            </div>
        </div>
        <div class=\"col-lg-6\">
            <div class=\"widget\">
                <div class=\"widget-title\">
                    <i class=\"fa fa-tasks\"></i>
                    ";
        // line 99
        if (((isset($context["libraryLimitSet"]) ? $context["libraryLimitSet"] : null) != "")) {
            // line 100
            echo "                        ";
            /* xgettext:no-php-format */            echo strtr(__("Library Usage. Limit %libraryLimit%"), array("%libraryLimit%" => (isset($context["libraryLimit"]) ? $context["libraryLimit"] : null), ));
            // line 101
            echo "                    ";
        } else {
            // line 102
            echo "                        ";
            echo __("Library Usage");
            // line 103
            echo "                    ";
        }
        // line 104
        echo "                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"widget-body medium no-padding\">
                    <canvas id=\"libraryChart\" style=\"clear:both;\" width=\"350\" height=\"220\"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-6\">
            <div class=\"widget\">
                <div class=\"widget-title\">
                    <i class=\"fa fa-desktop\"></i>
                    ";
        // line 117
        echo __("Display Activity");
        // line 118
        echo "                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"widget-body medium no-padding\">
                    <div class=\"table-responsive\">
                        <table class=\"table\">
                            <thead>
                            <tr>
                                <th>";
        // line 125
        echo __("Display");
        echo "</th>
                                <th>";
        // line 126
        echo __("Logged In");
        echo "</th>
                                <th>";
        // line 127
        echo __("Authorised");
        echo "</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 131
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["displays"]) ? $context["displays"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 132
            echo "                                ";
            if (($this->getAttribute($context["row"], "mediaInventoryStatus", array()) == 1)) {
                // line 133
                echo "                                    ";
                $context["class"] = "success";
                // line 134
                echo "                                ";
            } elseif (($this->getAttribute($context["row"], "mediaInventoryStatus", array()) == 2)) {
                // line 135
                echo "                                    ";
                $context["class"] = "danger";
                // line 136
                echo "                                ";
            } else {
                // line 137
                echo "                                    ";
                $context["class"] = "warning";
                // line 138
                echo "                                ";
            }
            // line 139
            echo "                                <tr class=\"";
            echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
            echo "\">
                                    <td>";
            // line 140
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "display", array()), "html", null, true);
            echo "</td>
                                    <td><span class=\"glyphicon ";
            // line 141
            if (($this->getAttribute($context["row"], "loggedIn", array()) == 1)) {
                echo "glyphicon-ok";
            } else {
                echo "glyphicon-remove";
            }
            echo "\"></span></td>
                                    <td><span class=\"glyphicon ";
            // line 142
            if (($this->getAttribute($context["row"], "licensed", array()) == 1)) {
                echo "glyphicon-ok";
            } else {
                echo "glyphicon-remove";
            }
            echo "\"></span></td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 145
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-lg-6\">
            <div class=\"widget news-widget\">
                <div class=\"widget-title\">
                    <i class=\"fa fa-book\"></i>
                    ";
        // line 155
        echo __("Latest News");
        // line 156
        echo "                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"widget-body medium\">
                    ";
        // line 159
        if ((twig_length_filter($this->env, (isset($context["latestNews"]) ? $context["latestNews"] : null)) > 0)) {
            // line 160
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["latestNews"]) ? $context["latestNews"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["news"]) {
                // line 161
                echo "                            <div class=\"article\">
                                <h4 class=\"article_title\">";
                // line 162
                echo twig_escape_filter($this->env, $this->getAttribute($context["news"], "title", array()), "html", null, true);
                echo "</h4>
                                <p>";
                // line 163
                echo $this->getAttribute($context["news"], "description", array());
                echo " ";
                if ($this->getAttribute($context["news"], "link", array())) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["news"], "link", array()), "html", null, true);
                    echo "\" title=\"Read\" target=\"_blank\">";
                    echo __("Full Article");
                    echo "</a>.";
                }
                echo "</p>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['news'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 166
            echo "                    ";
        }
        // line 167
        echo "                </div>
            </div>
        </div>
    </div>
";
    }

    // line 173
    public function block_javaScript($context, array $blocks = array())
    {
        // line 174
        echo "    <script type=\"text/javascript\">

        // Create our chart
        var bandwidthChart = new Chart(\$(\"#bandwidthChart\"), {
            type: \"bar\",
            data: ";
        // line 179
        echo (isset($context["bandwidthWidget"]) ? $context["bandwidthWidget"] : null);
        echo ",
            options: {
                scales: {
                    xAxes: [{
                        stacked: ";
        // line 183
        if ((isset($context["xmdsLimit"]) ? $context["xmdsLimit"] : null)) {
            echo "true";
        } else {
            echo "false";
        }
        // line 184
        echo "                    }],
                    yAxes: [{
                        scaleLabel: {
                            display: true,
                            labelString: \"";
        // line 188
        echo twig_escape_filter($this->env, (isset($context["bandwidthSuffix"]) ? $context["bandwidthSuffix"] : null), "html", null, true);
        echo "\",
                        },
                        stacked: ";
        // line 190
        if ((isset($context["xmdsLimit"]) ? $context["xmdsLimit"] : null)) {
            echo "true";
        } else {
            echo "false";
        }
        // line 191
        echo "                    }]
                },
                legend: {
                    display: false
                },
                maintainAspectRatio: false,
            }
        });

        var libraryData = ";
        // line 200
        echo (isset($context["libraryWidgetData"]) ? $context["libraryWidgetData"] : null);
        echo ";
        var colours = new Array();
        for(var i = 0; i < libraryData.length; i++) {
            colours.push(\$c.rand());
        }
        var libraryChart = new Chart(\$(\"#libraryChart\"), {
            type: 'pie',
            data: {
                datasets: [{
                    data: libraryData,
                    backgroundColor: colours
                }],
                labels: ";
        // line 212
        echo (isset($context["libraryWidgetLabels"]) ? $context["libraryWidgetLabels"] : null);
        echo "
            },
            options: {
                maintainAspectRatio: false
            }
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "dashboard-status-page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  419 => 212,  404 => 200,  393 => 191,  387 => 190,  382 => 188,  376 => 184,  370 => 183,  363 => 179,  356 => 174,  353 => 173,  345 => 167,  342 => 166,  325 => 163,  321 => 162,  318 => 161,  313 => 160,  311 => 159,  306 => 156,  304 => 155,  292 => 145,  279 => 142,  271 => 141,  267 => 140,  262 => 139,  259 => 138,  256 => 137,  253 => 136,  250 => 135,  247 => 134,  244 => 133,  241 => 132,  237 => 131,  230 => 127,  226 => 126,  222 => 125,  213 => 118,  211 => 117,  196 => 104,  193 => 103,  190 => 102,  187 => 101,  184 => 100,  182 => 99,  169 => 88,  161 => 86,  158 => 85,  155 => 84,  152 => 83,  149 => 82,  146 => 81,  144 => 80,  131 => 69,  126 => 67,  121 => 66,  115 => 64,  113 => 63,  93 => 50,  89 => 49,  73 => 36,  69 => 35,  49 => 22,  45 => 21,  35 => 13,  32 => 12,  28 => 9,  26 => 10,  11 => 9,);
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
    <div class=\"row\">
        <div class=\"col-lg-3 col-md-6 col-xs-12\">
            <div class=\"widget\">
                <div class=\"widget-body\">
                    <div class=\"widget-icon orange pull-left\">
                        <i class=\"fa fa-desktop\"></i>
                    </div>
                    <div class=\"widget-content pull-left\">
                        <div class=\"title\">{{ displays|length }}</div>
                        <div class=\"comment\">{% if displays|length == 1 %}{% trans \"Display\" %}{% else %}{% trans \"Displays\" %}{% endif %}</div>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
        </div>
        <div class=\"col-lg-3 col-md-6 col-xs-12\">
            <div class=\"widget\">
                <div class=\"widget-body\">
                    <div class=\"widget-icon red pull-left\">
                        <i class=\"fa fa-tasks\"></i>
                    </div>
                    <div class=\"widget-content pull-left\">
                        <div class=\"title\">{{ librarySize }}</div>
                        <div class=\"comment\">{% trans \"Library Size\" %}</div>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
        </div>
        <div class=\"col-lg-3 col-md-6 col-xs-12\">
            <div class=\"widget\">
                <div class=\"widget-body\">
                    <div class=\"widget-icon green pull-left\">
                        <i class=\"fa fa-users\"></i>
                    </div>
                    <div class=\"widget-content pull-left\">
                        <div class=\"title\">{{ countUsers }}</div>
                        <div class=\"comment\">{% if countUsers == 1 %}{% trans \"User\" %}{% else %}{% trans \"Users\" %}{% endif %}</div>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
        </div>
        <div class=\"col-lg-3 col-md-6 col-xs-12\">
            <div class=\"widget\">
                <div class=\"widget-body\">
                    <div class=\"widget-icon blue pull-left\">
                        <i class=\"fa fa-cogs\"></i>
                    </div>
                    <div class=\"widget-content pull-left\">
                        {% if embeddedWidget != \"\" %}
                            {{ embeddedWidget|raw }}
                        {% else %}
                            <div class=\"title\">{{ nowShowing }}</div>
                            <div class=\"comment\">{% trans \"Now Showing\" %}</div>
                        {% endif %}
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-6\">
            <div class=\"widget\">
                <div class=\"widget-title\">
                    <i class=\"fa fa-cloud-download\"></i>
                    {% if xmdsLimit != \"\" %}
                        {% trans %}Bandwidth Usage. Limit {{ xmdsLimit }}{% endtrans %}
                    {% else %}
                        {% trans %}Bandwidth Usage ({{ bandwidthSuffix }}){% endtrans %}
                    {% endif %}
                    {% if currentUser.routeViewable(\"/stats\") %}
                    <a class=\"pull-right\" href=\"{{ urlFor(\"stats.view\") }}\">{% trans \"More Statistics\" %}</a>
                    {% endif %}
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"widget-body medium no-padding\">
                    <canvas id=\"bandwidthChart\" style=\"clear:both;\" height=\"230\"></canvas>
                </div>
            </div>
        </div>
        <div class=\"col-lg-6\">
            <div class=\"widget\">
                <div class=\"widget-title\">
                    <i class=\"fa fa-tasks\"></i>
                    {% if libraryLimitSet != \"\" %}
                        {% trans %}Library Usage. Limit {{ libraryLimit }}{% endtrans %}
                    {% else %}
                        {% trans \"Library Usage\" %}
                    {% endif %}
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"widget-body medium no-padding\">
                    <canvas id=\"libraryChart\" style=\"clear:both;\" width=\"350\" height=\"220\"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-6\">
            <div class=\"widget\">
                <div class=\"widget-title\">
                    <i class=\"fa fa-desktop\"></i>
                    {% trans \"Display Activity\" %}
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"widget-body medium no-padding\">
                    <div class=\"table-responsive\">
                        <table class=\"table\">
                            <thead>
                            <tr>
                                <th>{% trans \"Display\" %}</th>
                                <th>{% trans \"Logged In\" %}</th>
                                <th>{% trans \"Authorised\" %}</th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for row in displays %}
                                {% if row.mediaInventoryStatus == 1 %}
                                    {% set class = \"success\" %}
                                {% elseif row.mediaInventoryStatus == 2 %}
                                    {% set class = \"danger\" %}
                                {% else %}
                                    {% set class = \"warning\" %}
                                {% endif %}
                                <tr class=\"{{ class }}\">
                                    <td>{{ row.display }}</td>
                                    <td><span class=\"glyphicon {% if row.loggedIn == 1 %}glyphicon-ok{% else %}glyphicon-remove{% endif %}\"></span></td>
                                    <td><span class=\"glyphicon {% if row.licensed == 1 %}glyphicon-ok{% else %}glyphicon-remove{% endif %}\"></span></td>
                                </tr>
                            {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-lg-6\">
            <div class=\"widget news-widget\">
                <div class=\"widget-title\">
                    <i class=\"fa fa-book\"></i>
                    {% trans \"Latest News\" %}
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"widget-body medium\">
                    {% if latestNews|length > 0 %}
                        {% for news in latestNews %}
                            <div class=\"article\">
                                <h4 class=\"article_title\">{{ news.title }}</h4>
                                <p>{{ news.description|raw }} {% if news.link %}<a href=\"{{ news.link }}\" title=\"Read\" target=\"_blank\">{% trans \"Full Article\" %}</a>.{% endif %}</p>
                            </div>
                        {% endfor %}
                    {% endif %}
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block javaScript %}
    <script type=\"text/javascript\">

        // Create our chart
        var bandwidthChart = new Chart(\$(\"#bandwidthChart\"), {
            type: \"bar\",
            data: {{ bandwidthWidget|raw }},
            options: {
                scales: {
                    xAxes: [{
                        stacked: {% if xmdsLimit %}true{% else %}false{% endif %}
                    }],
                    yAxes: [{
                        scaleLabel: {
                            display: true,
                            labelString: \"{{ bandwidthSuffix }}\",
                        },
                        stacked: {% if xmdsLimit %}true{% else %}false{% endif %}
                    }]
                },
                legend: {
                    display: false
                },
                maintainAspectRatio: false,
            }
        });

        var libraryData = {{ libraryWidgetData|raw }};
        var colours = new Array();
        for(var i = 0; i < libraryData.length; i++) {
            colours.push(\$c.rand());
        }
        var libraryChart = new Chart(\$(\"#libraryChart\"), {
            type: 'pie',
            data: {
                datasets: [{
                    data: libraryData,
                    backgroundColor: colours
                }],
                labels: {{ libraryWidgetLabels|raw }}
            },
            options: {
                maintainAspectRatio: false
            }
        });
    </script>
{% endblock %}", "dashboard-status-page.twig", "/var/www/web/views/dashboard-status-page.twig");
    }
}
