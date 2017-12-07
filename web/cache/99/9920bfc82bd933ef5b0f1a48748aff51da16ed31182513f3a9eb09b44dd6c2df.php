<?php

/* campaign-page.twig */
class __TwigTemplate_4b13a480943f480deb6ae46be5bc9199f0a9b364755b783595826790f6c3a2da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 9
        $this->parent = $this->loadTemplate("authed.twig", "campaign-page.twig", 9);
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
        $context["inline"] = $this->loadTemplate("inline.twig", "campaign-page.twig", 10);
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
        echo __("Add a new Campaign");
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("campaign.add.form"), "html", null, true);
        echo "\"> <i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i>  ";
        echo __("Add Campaign");
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
        echo __("Campaigns");
        echo "</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"";
        // line 23
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\">
                <div class=\"XiboFilter well\">
                    <div class=\"FilterDiv\" id=\"Filter\">
                        <form class=\"form-inline\">
                            ";
        // line 27
        ob_start();
        echo __("Name");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 28
        echo "                            ";
        echo $context["inline"]->getinput("name", (isset($context["title"]) ? $context["title"] : null));
        echo "
                            
                            ";
        // line 30
        ob_start();
        echo __("Tags");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 31
        echo "                            ";
        ob_start();
        echo __("A comma separated list of tags to filter by. Enter --no-tag to see items without tags.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 32
        echo "                            ";
        echo $context["inline"]->getinputWithTags("tags", (isset($context["title"]) ? $context["title"] : null), null, (isset($context["helpText"]) ? $context["helpText"] : null));
        echo "
                            
                            ";
        // line 34
        ob_start();
        echo __("Layouts");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 35
        echo "                            ";
        $context["values"] = array(0 => array("id" => 0, "value" => ""), 1 => array("id" => 2, "value" => "Yes"), 2 => array("id" => 1, "value" => "No"));
        // line 36
        echo "                            ";
        echo $context["inline"]->getdropdown("hasLayouts", "single", (isset($context["title"]) ? $context["title"] : null), 0, (isset($context["values"]) ? $context["values"] : null), "id", "value");
        echo "
                        </form>
                    </div>
                </div>
                <div class=\"XiboData\">
                    <table id=\"campaigns\" class=\"table table-striped\">
                        <thead>
                            <tr>
                                <th>";
        // line 44
        echo __("Name");
        echo "</th>
                                <th>";
        // line 45
        echo __("# Layouts");
        echo "</th>
                                <th>";
        // line 46
        echo __("Tags");
        echo "</th>
                                <th>";
        // line 47
        echo __("Duration");
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

    // line 61
    public function block_javaScript($context, array $blocks = array())
    {
        // line 62
        echo "    <script type=\"text/javascript\">
        // Configure the DataTable
        var table = \$(\"#campaigns\").DataTable({ \"language\": dataTablesLanguage,
            serverSide: true, stateSave: true,
            \"filter\": false,
            searchDelay: 3000,
            \"order\": [[ 0, \"asc\"]],
            ajax: {
                url: \"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("campaign.search"), "html", null, true);
        echo "\",
                \"data\": function(d) {
                    \$.extend(d, \$(\"#campaigns\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                }
            },
            \"columns\": [
                {
                    \"data\": \"campaign\" ,
                    \"render\": dataTableSpacingPreformatted
                },
                { \"data\": \"numberLayouts\" },
                {
                    \"sortable\": false,
                    \"data\": dataTableCreateTags
                },
                { \"data\": \"totalDuration\" },
                {
                    \"orderable\": false,
                    \"data\": dataTableButtonsColumn
                }
            ]
        });

        // Data Table events
        table.on('draw', dataTableDraw);
        table.on('draw', { form: \$(\"#campaigns\").closest(\".XiboGrid\").find(\".FilterDiv form\") } ,dataTableCreateTagEvents);
        table.on('processing.dt', dataTableProcessing);

        // Callback for the media form
        // Fired when the media form opens
        function layoutFormCallBack(dialog) {

            // Convert our filter form tags inputs into actual tag inputs
            \$(dialog).find(\"#tags\").tagsinput();

            // Hold a container for the layouts we have assigned already
            var container = \$(\"#LayoutAssign\");

            // Layout DataTable
            var layoutTable = \$(\"#layoutAssignments\").DataTable({ \"language\": dataTablesLanguage,
                serverSide: true, stateSave: true,
                searchDelay: 3000,
                \"order\": [[ 0, \"asc\"]],
                \"filter\": false,
                ajax: {
                    url: \"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("layout.search"), "html", null, true);
        echo "\",
                    \"data\": function(d) {
                        \$.extend(d, \$(\"#layoutAssignments\").closest(\".XiboGrid\").find(\".layoutAssignFilterOptions form\").serializeObject());
                    }
                },
                \"columns\": [
                    { \"data\": \"layoutId\" },
                    {
                        \"data\": \"layout\",
                        \"render\": dataTableSpacingPreformatted
                    },
                    {
                        \"sortable\": false,
                        \"data\": function(data, type, row, meta) {
                            if (type != \"display\")
                                return \"\";

                            // Create a click-able span
                            return \"<a href=\\\"#\\\" class=\\\"assignItem\\\"><span class=\\\"glyphicon glyphicon-plus-sign\\\"></a>\";
                        }
                    }
                ]
            });

            layoutTable.on('draw', { form: \$(\"#layoutAssignments\").closest(\".XiboGrid\").find(\"form\") }, function(e, settings) {
                dataTableDraw(e, settings);
                dataTableCreateTagEvents(e, settings);

                // Clicky on the +spans
                \$(\".assignItem\", \"#layoutAssignments\").click(function() {
                    // Get the row that this is in.
                    var data = layoutTable.row(\$(this).closest(\"tr\")).data();

                    // Append to our layouts list
                    // We are adding a new layout, so the display order should be the highest display order
                    var order = nextDisplayOrder();

                    // Construct a new item for the assigned box
                    var newItem = \$(\"<li/>\", {
                        \"text\": data.layout,
                        \"data-layout-id\": data.layoutId,
                        \"data-display-order\": order,
                        \"class\": \"btn btn-sm btn-default\"
                    });

                    newItem.appendTo(\"#LayoutAssignSortable\");

                    // Add a span to that new item
                    \$(\"<span/>\", {
                        \"class\": \"glyphicon glyphicon-minus-sign\",
                        click: function(){
                            \$(this).parent().remove();
                        }
                    }).appendTo(newItem);
                });
            });
            layoutTable.on('processing.dt', dataTableProcessing);

            // Make our little list sortable
            \$(\"#LayoutAssignSortable\").sortable();

            // Bind to the existing items in the list
            \$(\"#LayoutAssignSortable\").find('li span').click(function () {
                \$(this).parent().remove();
            });

            // Bind the filter form
            \$(\".layoutAssignFilterOptions\").find(\"input, select\").change(function() {
                layoutTable.ajax.reload();
            });
            
            // Get the original sortable positions
            container.data().originalLayoutPositions = [];
            \$(\"#LayoutAssignSortable\").find(\"li\").each(function(){
                container.data().originalLayoutPositions.push(\$(this).data(\"layoutId\"));
            });
        }

        function layoutAssignSubmit() {
            
            // Collect our media
            var container = \$(\"#LayoutAssign\");
            
            var originalLayoutPositions = container.data().originalLayoutPositions;
            var originalPositionsLength = originalLayoutPositions.length;
            
            var finalLayoutPositions = [];
            
            var layoutChanges = [];
            
            // Get the final sortable positions
            finalLayoutPositions = [];
            \$(\"#LayoutAssignSortable\").find(\"li\").each(function(){
                finalLayoutPositions.push(\$(this).data(\"layoutId\"));
            });
            
            // Build an array of id's to assign and an array to unassign
            var assign = [];
            var unassign = [];
            
            for (var i = 0; i < finalLayoutPositions.length; i++) {
                var elem = finalLayoutPositions[i];
                
                // Search for the element on the original layout
                if (originalLayoutPositions.indexOf(elem) != -1) {
                    
                    var originalPosition = originalLayoutPositions.indexOf(elem);
                    var finalPosition = i;
                    
                    // If the original position is different from the final, make the swap
                    if (originalPosition != finalPosition) {
                        // Remove from the original position
                        unassign.push({layoutId: elem, displayOrder: originalPosition+1});
                        
                        // Assign to the new position
                        assign.push({layoutId: elem, displayOrder: finalPosition+1});
                    }
                    
                    // Clean picked element from the original list
                    originalLayoutPositions[originalPosition] = -1;
                } else {
                    
                    // If the element is not on the list add it to the end of it
                    assign.push({layoutId: elem, displayOrder: originalPositionsLength});
                    
                    // Increase the last position variable
                    originalPositionsLength++
                }
            }
            
            // Remove all non processed elements
            for (var i = 0; i < originalLayoutPositions.length; i++) {
                    if (originalLayoutPositions[i] != -1) {
                        var elem = originalLayoutPositions[i];
                        
                        // Remove from the original position
                        unassign.push({layoutId: elem, displayOrder: i+1});
                    }
            }
            
            assignLayoutsToCampaign(container.data().url, assign, unassign);
        }

        function assignLayoutsToCampaign(url, layout, unassign) {
            toastr.info(layout, \"Assign Layouts to Campaign\");
            
            \$.ajax({
                type: \"post\",
                url: url,
                cache: false,
                dataType: \"json\",
                data: {layoutId: layout, unassignLayoutId: unassign},
                success: XiboSubmitResponse
            });
        }

        function nextDisplayOrder() {
            // Look through the assignment list and get the next display order
            var high = 0;
            \$(\"#LayoutAssign li\").each(function() {
                var itemOrder = \$(this).data().displayOrder;
                if (itemOrder > high)
                    high = itemOrder;
            });

            return high + 1;
        }
    </script>
";
    }

    public function getTemplateName()
    {
        return "campaign-page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 115,  154 => 70,  144 => 62,  141 => 61,  124 => 47,  120 => 46,  116 => 45,  112 => 44,  100 => 36,  97 => 35,  93 => 34,  87 => 32,  82 => 31,  78 => 30,  72 => 28,  68 => 27,  61 => 23,  56 => 21,  53 => 20,  50 => 19,  39 => 14,  36 => 13,  33 => 12,  29 => 9,  27 => 10,  11 => 9,);
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
 * (campaign-page.twig)
 */
This is the template for the campaign page
#}
{% extends \"authed.twig\" %}
{% import \"inline.twig\" as inline %}

{% block actionMenu %}
    <ul class=\"nav nav-pills pull-right\">
        <li class=\"btn btn-success btn-xs\"><a class=\"XiboFormButton btns\" title=\"{% trans \"Add a new Campaign\" %}\" href=\"{{ urlFor(\"campaign.add.form\") }}\"> <i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i>  {% trans \"Add Campaign\" %}</a></li>
    </ul>
{% endblock %}


{% block pageContent %}
    <div class=\"widget\">
        <div class=\"widget-title\">{% trans \"Campaigns\" %}</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"{{ random() }}\">
                <div class=\"XiboFilter well\">
                    <div class=\"FilterDiv\" id=\"Filter\">
                        <form class=\"form-inline\">
                            {% set title %}{% trans \"Name\" %}{% endset %}
                            {{ inline.input(\"name\", title) }}
                            
                            {% set title %}{% trans \"Tags\" %}{% endset %}
                            {% set helpText %}{% trans \"A comma separated list of tags to filter by. Enter --no-tag to see items without tags.\" %}{% endset %}
                            {{ inline.inputWithTags(\"tags\", title, null, helpText) }}
                            
                            {% set title %}{% trans \"Layouts\" %}{% endset %}
                            {% set values = [{id: 0, value: \"\"}, {id: 2, value: \"Yes\"}, {id: 1, value: \"No\"}] %}
                            {{ inline.dropdown(\"hasLayouts\", \"single\", title, 0, values, \"id\", \"value\") }}
                        </form>
                    </div>
                </div>
                <div class=\"XiboData\">
                    <table id=\"campaigns\" class=\"table table-striped\">
                        <thead>
                            <tr>
                                <th>{% trans \"Name\" %}</th>
                                <th>{% trans \"# Layouts\" %}</th>
                                <th>{% trans \"Tags\" %}</th>
                                <th>{% trans \"Duration\" %}</th>
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
        // Configure the DataTable
        var table = \$(\"#campaigns\").DataTable({ \"language\": dataTablesLanguage,
            serverSide: true, stateSave: true,
            \"filter\": false,
            searchDelay: 3000,
            \"order\": [[ 0, \"asc\"]],
            ajax: {
                url: \"{{ urlFor(\"campaign.search\") }}\",
                \"data\": function(d) {
                    \$.extend(d, \$(\"#campaigns\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                }
            },
            \"columns\": [
                {
                    \"data\": \"campaign\" ,
                    \"render\": dataTableSpacingPreformatted
                },
                { \"data\": \"numberLayouts\" },
                {
                    \"sortable\": false,
                    \"data\": dataTableCreateTags
                },
                { \"data\": \"totalDuration\" },
                {
                    \"orderable\": false,
                    \"data\": dataTableButtonsColumn
                }
            ]
        });

        // Data Table events
        table.on('draw', dataTableDraw);
        table.on('draw', { form: \$(\"#campaigns\").closest(\".XiboGrid\").find(\".FilterDiv form\") } ,dataTableCreateTagEvents);
        table.on('processing.dt', dataTableProcessing);

        // Callback for the media form
        // Fired when the media form opens
        function layoutFormCallBack(dialog) {

            // Convert our filter form tags inputs into actual tag inputs
            \$(dialog).find(\"#tags\").tagsinput();

            // Hold a container for the layouts we have assigned already
            var container = \$(\"#LayoutAssign\");

            // Layout DataTable
            var layoutTable = \$(\"#layoutAssignments\").DataTable({ \"language\": dataTablesLanguage,
                serverSide: true, stateSave: true,
                searchDelay: 3000,
                \"order\": [[ 0, \"asc\"]],
                \"filter\": false,
                ajax: {
                    url: \"{{ urlFor(\"layout.search\") }}\",
                    \"data\": function(d) {
                        \$.extend(d, \$(\"#layoutAssignments\").closest(\".XiboGrid\").find(\".layoutAssignFilterOptions form\").serializeObject());
                    }
                },
                \"columns\": [
                    { \"data\": \"layoutId\" },
                    {
                        \"data\": \"layout\",
                        \"render\": dataTableSpacingPreformatted
                    },
                    {
                        \"sortable\": false,
                        \"data\": function(data, type, row, meta) {
                            if (type != \"display\")
                                return \"\";

                            // Create a click-able span
                            return \"<a href=\\\"#\\\" class=\\\"assignItem\\\"><span class=\\\"glyphicon glyphicon-plus-sign\\\"></a>\";
                        }
                    }
                ]
            });

            layoutTable.on('draw', { form: \$(\"#layoutAssignments\").closest(\".XiboGrid\").find(\"form\") }, function(e, settings) {
                dataTableDraw(e, settings);
                dataTableCreateTagEvents(e, settings);

                // Clicky on the +spans
                \$(\".assignItem\", \"#layoutAssignments\").click(function() {
                    // Get the row that this is in.
                    var data = layoutTable.row(\$(this).closest(\"tr\")).data();

                    // Append to our layouts list
                    // We are adding a new layout, so the display order should be the highest display order
                    var order = nextDisplayOrder();

                    // Construct a new item for the assigned box
                    var newItem = \$(\"<li/>\", {
                        \"text\": data.layout,
                        \"data-layout-id\": data.layoutId,
                        \"data-display-order\": order,
                        \"class\": \"btn btn-sm btn-default\"
                    });

                    newItem.appendTo(\"#LayoutAssignSortable\");

                    // Add a span to that new item
                    \$(\"<span/>\", {
                        \"class\": \"glyphicon glyphicon-minus-sign\",
                        click: function(){
                            \$(this).parent().remove();
                        }
                    }).appendTo(newItem);
                });
            });
            layoutTable.on('processing.dt', dataTableProcessing);

            // Make our little list sortable
            \$(\"#LayoutAssignSortable\").sortable();

            // Bind to the existing items in the list
            \$(\"#LayoutAssignSortable\").find('li span').click(function () {
                \$(this).parent().remove();
            });

            // Bind the filter form
            \$(\".layoutAssignFilterOptions\").find(\"input, select\").change(function() {
                layoutTable.ajax.reload();
            });
            
            // Get the original sortable positions
            container.data().originalLayoutPositions = [];
            \$(\"#LayoutAssignSortable\").find(\"li\").each(function(){
                container.data().originalLayoutPositions.push(\$(this).data(\"layoutId\"));
            });
        }

        function layoutAssignSubmit() {
            
            // Collect our media
            var container = \$(\"#LayoutAssign\");
            
            var originalLayoutPositions = container.data().originalLayoutPositions;
            var originalPositionsLength = originalLayoutPositions.length;
            
            var finalLayoutPositions = [];
            
            var layoutChanges = [];
            
            // Get the final sortable positions
            finalLayoutPositions = [];
            \$(\"#LayoutAssignSortable\").find(\"li\").each(function(){
                finalLayoutPositions.push(\$(this).data(\"layoutId\"));
            });
            
            // Build an array of id's to assign and an array to unassign
            var assign = [];
            var unassign = [];
            
            for (var i = 0; i < finalLayoutPositions.length; i++) {
                var elem = finalLayoutPositions[i];
                
                // Search for the element on the original layout
                if (originalLayoutPositions.indexOf(elem) != -1) {
                    
                    var originalPosition = originalLayoutPositions.indexOf(elem);
                    var finalPosition = i;
                    
                    // If the original position is different from the final, make the swap
                    if (originalPosition != finalPosition) {
                        // Remove from the original position
                        unassign.push({layoutId: elem, displayOrder: originalPosition+1});
                        
                        // Assign to the new position
                        assign.push({layoutId: elem, displayOrder: finalPosition+1});
                    }
                    
                    // Clean picked element from the original list
                    originalLayoutPositions[originalPosition] = -1;
                } else {
                    
                    // If the element is not on the list add it to the end of it
                    assign.push({layoutId: elem, displayOrder: originalPositionsLength});
                    
                    // Increase the last position variable
                    originalPositionsLength++
                }
            }
            
            // Remove all non processed elements
            for (var i = 0; i < originalLayoutPositions.length; i++) {
                    if (originalLayoutPositions[i] != -1) {
                        var elem = originalLayoutPositions[i];
                        
                        // Remove from the original position
                        unassign.push({layoutId: elem, displayOrder: i+1});
                    }
            }
            
            assignLayoutsToCampaign(container.data().url, assign, unassign);
        }

        function assignLayoutsToCampaign(url, layout, unassign) {
            toastr.info(layout, \"Assign Layouts to Campaign\");
            
            \$.ajax({
                type: \"post\",
                url: url,
                cache: false,
                dataType: \"json\",
                data: {layoutId: layout, unassignLayoutId: unassign},
                success: XiboSubmitResponse
            });
        }

        function nextDisplayOrder() {
            // Look through the assignment list and get the next display order
            var high = 0;
            \$(\"#LayoutAssign li\").each(function() {
                var itemOrder = \$(this).data().displayOrder;
                if (itemOrder > high)
                    high = itemOrder;
            });

            return high + 1;
        }
    </script>
{% endblock %}
", "campaign-page.twig", "/var/www/web/views/campaign-page.twig");
    }
}
