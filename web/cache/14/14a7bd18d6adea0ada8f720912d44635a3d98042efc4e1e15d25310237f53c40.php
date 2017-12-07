<?php

/* applications-page.twig */
class __TwigTemplate_2cbae29acffd84fd312e169419e31ca9ee1b90e27865d0e03f0bdc256c5a3eb6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 9
        $this->parent = $this->loadTemplate("authed.twig", "applications-page.twig", 9);
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
        $context["inline"] = $this->loadTemplate("inline.twig", "applications-page.twig", 10);
        // line 9
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_actionMenu($context, array $blocks = array())
    {
        // line 13
        echo "    <ul class=\"nav nav-pills pull-right\">
        <li class=\"btn btn-success btn-xs\"><a class=\"XiboFormButton btns\" title=\"";
        // line 14
        echo __("Add an Application");
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("application.add.form"), "html", null, true);
        echo "\"> <i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> ";
        echo __("Add Application");
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
        echo __("Applications");
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
                    <table id=\"applications\" class=\"table table-striped\">
                        <thead>
                            <tr>
                                <th>";
        // line 34
        echo __("Name");
        echo "</th>
                                <th>";
        // line 35
        echo __("Owner");
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

    // line 49
    public function block_javaScript($context, array $blocks = array())
    {
        // line 50
        echo "    <script type=\"text/javascript\">
        var table = \$(\"#applications\").DataTable({ \"language\": dataTablesLanguage,
            serverSide: true, stateSave: true,
            filter: false,
            searchDelay: 3000,
            \"order\": [[ 0, \"asc\"]],
            ajax: \"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("application.search"), "html", null, true);
        echo "\",
            \"columns\": [
                { \"data\": \"name\", \"render\": dataTableSpacingPreformatted },
                { \"data\": \"owner\" },
                {
                    \"orderable\": false,
                    \"data\": dataTableButtonsColumn
                }
            ]
        });

        table.on('draw', dataTableDraw);
        table.on('processing.dt', dataTableProcessing);
        
        function copyFromSecretInput() {
            // Initialize the tooltip.
            \$('#copy-button').tooltip();



            \$('#copy-button').bind('click', function() {
                
              var input = \$('#clientSecret');
              
              // Select the input to copy 
              input.focus();
              input.select();
              
              // Try to copy to clipboard and give feedback
              try {
                var success = document.execCommand('copy');
                if (success) {
                  \$('#copy-button').trigger('copied', ['Copied!']);
                } else {
                  \$('#copy-button').trigger('copied', ['Could not copy']);
                }
              } catch (err) {
                \$('#copy-button').trigger('copied', ['Could not copy']);
              }
              
              // Unselect the input
              input.blur();
            });

            // Handler for updating the tooltip message.
            \$('#copy-button').bind('copied', function(event, message) {
              \$(this).attr('title', message)
                  .tooltip('fixTitle')
                  .tooltip('show')
                  .attr('title', \"Copy to Clipboard\")
                  .tooltip('fixTitle');
            });
            
        }
    </script>
";
    }

    public function getTemplateName()
    {
        return "applications-page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 56,  99 => 50,  96 => 49,  79 => 35,  75 => 34,  61 => 23,  56 => 21,  53 => 20,  50 => 19,  39 => 14,  36 => 13,  33 => 12,  29 => 9,  27 => 10,  11 => 9,);
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
        <li class=\"btn btn-success btn-xs\"><a class=\"XiboFormButton btns\" title=\"{% trans \"Add an Application\" %}\" href=\"{{ urlFor(\"application.add.form\") }}\"> <i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> {% trans \"Add Application\" %}</a></li>
    </ul>
{% endblock %}


{% block pageContent %}
    <div class=\"widget\">
        <div class=\"widget-title\">{% trans \"Applications\" %}</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"{{ random() }}\">
                <div class=\"XiboFilter\">
                    <div class=\"FilterDiv\" id=\"Filter\">
                        <form class=\"form-inline\">
                        </form>
                    </div>
                </div>
                <div class=\"XiboData\">
                    <table id=\"applications\" class=\"table table-striped\">
                        <thead>
                            <tr>
                                <th>{% trans \"Name\" %}</th>
                                <th>{% trans \"Owner\" %}</th>
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
        var table = \$(\"#applications\").DataTable({ \"language\": dataTablesLanguage,
            serverSide: true, stateSave: true,
            filter: false,
            searchDelay: 3000,
            \"order\": [[ 0, \"asc\"]],
            ajax: \"{{ urlFor(\"application.search\") }}\",
            \"columns\": [
                { \"data\": \"name\", \"render\": dataTableSpacingPreformatted },
                { \"data\": \"owner\" },
                {
                    \"orderable\": false,
                    \"data\": dataTableButtonsColumn
                }
            ]
        });

        table.on('draw', dataTableDraw);
        table.on('processing.dt', dataTableProcessing);
        
        function copyFromSecretInput() {
            // Initialize the tooltip.
            \$('#copy-button').tooltip();



            \$('#copy-button').bind('click', function() {
                
              var input = \$('#clientSecret');
              
              // Select the input to copy 
              input.focus();
              input.select();
              
              // Try to copy to clipboard and give feedback
              try {
                var success = document.execCommand('copy');
                if (success) {
                  \$('#copy-button').trigger('copied', ['Copied!']);
                } else {
                  \$('#copy-button').trigger('copied', ['Could not copy']);
                }
              } catch (err) {
                \$('#copy-button').trigger('copied', ['Could not copy']);
              }
              
              // Unselect the input
              input.blur();
            });

            // Handler for updating the tooltip message.
            \$('#copy-button').bind('copied', function(event, message) {
              \$(this).attr('title', message)
                  .tooltip('fixTitle')
                  .tooltip('show')
                  .attr('title', \"Copy to Clipboard\")
                  .tooltip('fixTitle');
            });
            
        }
    </script>
{% endblock %}", "applications-page.twig", "/var/www/web/views/applications-page.twig");
    }
}
