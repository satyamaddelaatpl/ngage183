<?php

/* datasetview-designer-javascript.twig */
class __TwigTemplate_3905a2c398899f408e4832c8e2dcd409678fb718584b14db277ffaf1a7066bfc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 9
        echo "

";
        // line 77
        echo "
<script type=\"text/x-handlebars-template\" id=\"dataSetViewOrderClauseTemplate\">
    <div class=\"form-group\">
        <label class=\"col-sm-1 control-label\" for=\"orderClause[]\">{{ title }}</label>
        <div class=\"col-sm-7\">
            <select class=\"form-control\" name=\"orderClause[]\">
                <option value=\"\"></option>
                {{#each columns}}
                    <option value=\"{{ heading }}\" {{#if_eq heading ../orderClause}}selected{{/if_eq}}>{{ heading }}</option>
                {{/each}}
            </select>
        </div>
        <div class=\"col-sm-3\">
            <label for=\"orderClauseDirection[]\">
                <select class=\"form-control\" name=\"orderClauseDirection[]\">
                    <option value=\"ASC\" {{#if orderClauseAsc}}selected{{/if}}>{{ ascTitle }}</option>
                    <option value=\"DESC\" {{#if orderClauseDesc}}selected{{/if}}>{{ descTitle }}</option>
                </select>
            </label>
        </div>
        <div class=\"col-sm-1\">
            <button class=\"btn btn-default btn-sm\"><i class=\"fa {{ buttonGlyph }}\"></i></button>
        </div>
    </div>
</script>

<script type=\"text/x-handlebars-template\" id=\"dataSetViewFilterClauseTemplate\">
    <div class=\"form-group\">
        <label class=\"col-sm-1 control-label\" for=\"filterClause[]\">{{ title }}</label>
        <div class=\"col-sm-2\">
            <label for=\"filterClauseOperator[]\" {{#if_eq title \"1\"}}class=\"hidden\"{{/if_eq}}>
                <select class=\"form-control\" name=\"filterClauseOperator[]\">
                    {{#each filterOperatorOptions}}
                    <option value=\"{{ id }}\" {{#if_eq id ../filterClauseOperator}}selected{{/if_eq}}>{{ value }}</option>
                    {{/each}}
                </select>
            </label>
        </div>
        <div class=\"col-sm-3\">
            <select class=\"form-control\" name=\"filterClause[]\">
                <option value=\"\"></option>
                {{#each columns}}
                    <option value=\"{{ heading }}\" {{#if_eq heading ../filterClause}}selected{{/if_eq}}>{{ heading }}</option>
                {{/each}}
            </select>
        </div>
        <div class=\"col-sm-3\">
            <label for=\"filterClauseCriteria[]\">
                <select class=\"form-control\" name=\"filterClauseCriteria[]\">
                    {{#each filterOptions}}
                    <option value=\"{{ id }}\" {{#if_eq id ../filterClauseCriteria}}selected{{/if_eq}}>{{ value }}</option>
                    {{/each}}
                </select>
            </label>
        </div>
        <div class=\"col-sm-2\">
            <label for=\"filterClauseValue[]\">
                <input class=\"form-control\" name=\"filterClauseValue[]\" type=\"text\" value=\"{{ filterClauseValue }}\" />
            </label>
        </div>
        <div class=\"col-sm-1\">
            <button class=\"btn btn-default btn-sm\"><i class=\"fa {{ buttonGlyph }}\"></i></button>
        </div>
    </div>
</script>

";
        echo "

<script type=\"text/javascript\">
    Handlebars.registerHelper('if_eq', function(a, b, opts) {
        if(a == b) // Or === depending on your needs
            return opts.fn(this);
        else
            return opts.inverse(this);
    });

    function dataSetFormSetup(dialog) {

        \$(\"#columnsIn, #columnsOut\").sortable({
            connectWith: '.connectedSortable',
            dropOnEmpty: true
        }).disableSelection();

        \$(\".li-sortable\", dialog).dblclick(switchLists);

        // If all 3 of the template fields are empty, then the template should be reapplied.
        if (!\$(\"#overrideTemplate\").is(\":checked\") && \$(\"#styleSheet\").val() == \"\") {
            // Reapply
            var templateId = \$(\"#templateId\").val();

            \$.each(\$('.bootbox').data().extra.templates, function(index, value) {
                if (value.id == templateId) {
                    \$(\"#styleSheet\").val(value.css);
                }
            });
        }

        \$(\"#templateId\").on('change', function() {
            // Check to see if the override template check box is unchecked
            if (!\$(\"#overrideTemplate\").is(\":checked\")) {

                var templateId = \$(\"#templateId\").val();

                \$.each(\$('.bootbox').data().extra.templates, function(index, value) {
                    if (value.id == templateId) {
                        \$(\"#styleSheet\").val(value.css);
                    }
                });
            }
        });

        configureQueryBuilder(dialog);

        // Configure the editor
        CKEDITOR.replace(\"noDataMessage\", CKEDITOR_DEFAULT_CONFIG);
        CKEDITOR.instances[\"noDataMessage\"].on('instanceReady', function () {

            \$(\"#cke_noDataMessage .cke_contents\").css({
                background: \$('#layout').css('background-color')
            });

            \$(\"#cke_noDataMessage iframe\").css({
                \"background\": \"transparent\"
            });

            // Reapply the background style after switching to source view and back to the normal editing view
            CKEDITOR.instances[\"noDataMessage\"].on('contentDom', function () {

                \$(\"#cke_noDataMessage .cke_contents\").css({
                    background: \$('#layout').css('background-color')
                });

                \$(\"#cke_noDataMessage iframe\").css({
                    \"background\": \"transparent\"
                });
            });
        });

        // Make sure when we close the dialog we also destroy the editor
        dialog.on(\"hide.bs.modal\", function() {
            try {
                if (CKEDITOR.instances[\"noDataMessage\"] !== undefined) {
                    CKEDITOR.instances[\"noDataMessage\"].destroy();
                }
            } catch (e) {
                console.log(\"Unable to remove CKEditor instance. \" + e);
            }
        });
    }

    function dataSetTickerFormSetup(dialog) {
        text_callback(dialog, \$('.bootbox').data().extra.templates);
        configureQueryBuilder(dialog);
    }

    function configureQueryBuilder(dialog) {
        // Order Clause
        var orderClauseFields = \$(\"#orderClause\");

        if (orderClauseFields.length == 0)
            return;

        var orderClauseTemplate = Handlebars.compile(\$(\"#dataSetViewOrderClauseTemplate\").html());
        var ascTitle = \"";
        // line 174
        echo __("Ascending");
        echo "\";
        var descTitle = \"";
        // line 175
        echo __("Descending");
        echo "\";

        if (dialog.data().extra.orderClause.length == 0) {
            // Add a template row
            var context = {columns: dialog.data().extra.columns, title: \"1\", orderClause: \"\", orderClauseAsc: \"\", orderClauseDesc: \"\", buttonGlyph: \"fa-plus\", ascTitle: ascTitle, descTitle: descTitle};
            orderClauseFields.append(orderClauseTemplate(context));
        } else {
            // For each of the existing codes, create form components
            var i = 0;
            \$.each(dialog.data().extra.orderClause, function (index, field) {
                i++;

                var direction = (field.orderClauseDirection == \"ASC\");

                var context = {columns: dialog.data().extra.columns, title: i, orderClause: field.orderClause, orderClauseAsc: direction, orderClauseDesc: !direction, buttonGlyph: ((i == 1) ? \"fa-plus\" : \"fa-minus\"), ascTitle: ascTitle, descTitle: descTitle};

                orderClauseFields.append(orderClauseTemplate(context));
            });
        }

        // Nabble the resulting buttons
        orderClauseFields.on(\"click\", \"button\", function (e) {
            e.preventDefault();

            // find the gylph
            if (\$(this).find(\"i\").hasClass(\"fa-plus\")) {
                var context = {columns: dialog.data().extra.columns, title: orderClauseFields.find('.form-group').length + 1, orderClause: \"\", orderClauseAsc: \"\", orderClauseDesc: \"\", buttonGlyph: \"fa-minus\", ascTitle: ascTitle, descTitle: descTitle};
                orderClauseFields.append(orderClauseTemplate(context));
            } else {
                // Remove this row
                \$(this).closest(\".form-group\").remove();
            }
        });

        //
        // Filter Clause
        //
        var filterClauseFields = \$(\"#filterClause\");
        var filterClauseTemplate = Handlebars.compile(\$(\"#dataSetViewFilterClauseTemplate\").html());
        var filterOptions = [
            {
                id: \"starts-with\",
                value: \"";
        // line 217
        echo __("starts with");
        echo "\"
            },{
                id: \"ends-with\",
                value: \"";
        // line 220
        echo __("ends with");
        echo "\"
            },{
                id: \"contains\",
                value: \"";
        // line 223
        echo __("contains");
        echo "\"
            },{
                id: \"equals\",
                value: \"";
        // line 226
        echo __("equals");
        echo "\"
            },{
                id: \"not-starts-with\",
                value: \"";
        // line 229
        echo __("does not start with");
        echo "\"
            },{
                id: \"not-ends-with\",
                value: \"";
        // line 232
        echo __("does not end with");
        echo "\"
            },{
                id: \"not-contains\",
                value: \"";
        // line 235
        echo __("does not contain");
        echo "\"
            },{
                id: \"not-equals\",
                value: \"";
        // line 238
        echo __("does not equal");
        echo "\"
            },{
                id: \"greater-than\",
                value: \"";
        // line 241
        echo __("greater than");
        echo "\"
            },{
                id: \"less-than\",
                value: \"";
        // line 244
        echo __("less than");
        echo "\"
            }
        ];
        var filterOperatorOptions = [
            {
                id: \"OR\",
                value: \"";
        // line 250
        echo __("Or");
        echo "\"
            },{
                id: \"AND\",
                value: \"";
        // line 253
        echo __("And");
        echo "\"
            }
        ];

        if (dialog.data().extra.filterClause.length == 0) {
            // Add a template row
            context = {
                columns: dialog.data().extra.columns,
                filterOptions: filterOptions,
                filterOperatorOptions: filterOperatorOptions,
                title: \"1\",
                filterClause: \"\",
                filterClauseOperator: \"AND\",
                filterClauseCriteria: \"\",
                filterClauseValue: \"\",
                buttonGlyph: \"fa-plus\"
            };
            filterClauseFields.append(filterClauseTemplate(context));
        } else {
            // For each of the existing codes, create form components
            var j = 0;
            \$.each(dialog.data().extra.filterClause, function (index, field) {
                j++;

                var context = {
                    columns: dialog.data().extra.columns,
                    filterOptions: filterOptions,
                    filterOperatorOptions: filterOperatorOptions,
                    title: j,
                    filterClause: field.filterClause,
                    filterClauseOperator: field.filterClauseOperator,
                    filterClauseCriteria: field.filterClauseCriteria,
                    filterClauseValue: field.filterClauseValue,
                    buttonGlyph: ((j == 1) ? \"fa-plus\" : \"fa-minus\")
                };

                filterClauseFields.append(filterClauseTemplate(context));
            });
        }

        // Nabble the resulting buttons
        filterClauseFields.on(\"click\", \"button\", function (e) {
            e.preventDefault();

            // find the gylph
            if (\$(this).find(\"i\").hasClass(\"fa-plus\")) {
                var context = {
                    columns: dialog.data().extra.columns,
                    filterOptions: filterOptions,
                    filterOperatorOptions: filterOperatorOptions,
                    title: filterClauseFields.find('.form-group').length + 1,
                    filterClause: \"\",
                    filterClauseOperator: \"AND\",
                    filterClauseCriteria: \"\",
                    filterClauseValue: \"\",
                    buttonGlyph: \"fa-minus\"
                };
                filterClauseFields.append(filterClauseTemplate(context));
            } else {
                // Remove this row
                \$(this).closest(\".form-group\").remove();
            }
        });
    }

    function DataSetViewSubmit(apply) {

        var form = \$(\"#dataSetViewEditForm\");
        
        // Clean the previous generated hidden dataSetColumns from the form
        form.find('input[name=\"dataSetColumnId[]\"]').remove();

        // Add all the selected columns to the form as hidden input fields
        \$(\$(\"#columnsIn\").sortable('toArray')).each(function() {
            form.append('<input type=\"hidden\" name=\"dataSetColumnId[]\" value=\"' + this + '\" />');
        });

        // Submit the form
        if (apply == 1)
            form.data(\"apply\", true);

        form.submit();
    }
</script>";
    }

    public function getTemplateName()
    {
        return "datasetview-designer-javascript.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  307 => 253,  301 => 250,  292 => 244,  286 => 241,  280 => 238,  274 => 235,  268 => 232,  262 => 229,  256 => 226,  250 => 223,  244 => 220,  238 => 217,  193 => 175,  189 => 174,  23 => 77,  19 => 9,);
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
 * Copyright (C) 2016 Spring Signage Ltd
 * (\${FILE_NAME})
 */

#}


{% raw %}
<script type=\"text/x-handlebars-template\" id=\"dataSetViewOrderClauseTemplate\">
    <div class=\"form-group\">
        <label class=\"col-sm-1 control-label\" for=\"orderClause[]\">{{ title }}</label>
        <div class=\"col-sm-7\">
            <select class=\"form-control\" name=\"orderClause[]\">
                <option value=\"\"></option>
                {{#each columns}}
                    <option value=\"{{ heading }}\" {{#if_eq heading ../orderClause}}selected{{/if_eq}}>{{ heading }}</option>
                {{/each}}
            </select>
        </div>
        <div class=\"col-sm-3\">
            <label for=\"orderClauseDirection[]\">
                <select class=\"form-control\" name=\"orderClauseDirection[]\">
                    <option value=\"ASC\" {{#if orderClauseAsc}}selected{{/if}}>{{ ascTitle }}</option>
                    <option value=\"DESC\" {{#if orderClauseDesc}}selected{{/if}}>{{ descTitle }}</option>
                </select>
            </label>
        </div>
        <div class=\"col-sm-1\">
            <button class=\"btn btn-default btn-sm\"><i class=\"fa {{ buttonGlyph }}\"></i></button>
        </div>
    </div>
</script>

<script type=\"text/x-handlebars-template\" id=\"dataSetViewFilterClauseTemplate\">
    <div class=\"form-group\">
        <label class=\"col-sm-1 control-label\" for=\"filterClause[]\">{{ title }}</label>
        <div class=\"col-sm-2\">
            <label for=\"filterClauseOperator[]\" {{#if_eq title \"1\"}}class=\"hidden\"{{/if_eq}}>
                <select class=\"form-control\" name=\"filterClauseOperator[]\">
                    {{#each filterOperatorOptions}}
                    <option value=\"{{ id }}\" {{#if_eq id ../filterClauseOperator}}selected{{/if_eq}}>{{ value }}</option>
                    {{/each}}
                </select>
            </label>
        </div>
        <div class=\"col-sm-3\">
            <select class=\"form-control\" name=\"filterClause[]\">
                <option value=\"\"></option>
                {{#each columns}}
                    <option value=\"{{ heading }}\" {{#if_eq heading ../filterClause}}selected{{/if_eq}}>{{ heading }}</option>
                {{/each}}
            </select>
        </div>
        <div class=\"col-sm-3\">
            <label for=\"filterClauseCriteria[]\">
                <select class=\"form-control\" name=\"filterClauseCriteria[]\">
                    {{#each filterOptions}}
                    <option value=\"{{ id }}\" {{#if_eq id ../filterClauseCriteria}}selected{{/if_eq}}>{{ value }}</option>
                    {{/each}}
                </select>
            </label>
        </div>
        <div class=\"col-sm-2\">
            <label for=\"filterClauseValue[]\">
                <input class=\"form-control\" name=\"filterClauseValue[]\" type=\"text\" value=\"{{ filterClauseValue }}\" />
            </label>
        </div>
        <div class=\"col-sm-1\">
            <button class=\"btn btn-default btn-sm\"><i class=\"fa {{ buttonGlyph }}\"></i></button>
        </div>
    </div>
</script>

{% endraw %}

<script type=\"text/javascript\">
    Handlebars.registerHelper('if_eq', function(a, b, opts) {
        if(a == b) // Or === depending on your needs
            return opts.fn(this);
        else
            return opts.inverse(this);
    });

    function dataSetFormSetup(dialog) {

        \$(\"#columnsIn, #columnsOut\").sortable({
            connectWith: '.connectedSortable',
            dropOnEmpty: true
        }).disableSelection();

        \$(\".li-sortable\", dialog).dblclick(switchLists);

        // If all 3 of the template fields are empty, then the template should be reapplied.
        if (!\$(\"#overrideTemplate\").is(\":checked\") && \$(\"#styleSheet\").val() == \"\") {
            // Reapply
            var templateId = \$(\"#templateId\").val();

            \$.each(\$('.bootbox').data().extra.templates, function(index, value) {
                if (value.id == templateId) {
                    \$(\"#styleSheet\").val(value.css);
                }
            });
        }

        \$(\"#templateId\").on('change', function() {
            // Check to see if the override template check box is unchecked
            if (!\$(\"#overrideTemplate\").is(\":checked\")) {

                var templateId = \$(\"#templateId\").val();

                \$.each(\$('.bootbox').data().extra.templates, function(index, value) {
                    if (value.id == templateId) {
                        \$(\"#styleSheet\").val(value.css);
                    }
                });
            }
        });

        configureQueryBuilder(dialog);

        // Configure the editor
        CKEDITOR.replace(\"noDataMessage\", CKEDITOR_DEFAULT_CONFIG);
        CKEDITOR.instances[\"noDataMessage\"].on('instanceReady', function () {

            \$(\"#cke_noDataMessage .cke_contents\").css({
                background: \$('#layout').css('background-color')
            });

            \$(\"#cke_noDataMessage iframe\").css({
                \"background\": \"transparent\"
            });

            // Reapply the background style after switching to source view and back to the normal editing view
            CKEDITOR.instances[\"noDataMessage\"].on('contentDom', function () {

                \$(\"#cke_noDataMessage .cke_contents\").css({
                    background: \$('#layout').css('background-color')
                });

                \$(\"#cke_noDataMessage iframe\").css({
                    \"background\": \"transparent\"
                });
            });
        });

        // Make sure when we close the dialog we also destroy the editor
        dialog.on(\"hide.bs.modal\", function() {
            try {
                if (CKEDITOR.instances[\"noDataMessage\"] !== undefined) {
                    CKEDITOR.instances[\"noDataMessage\"].destroy();
                }
            } catch (e) {
                console.log(\"Unable to remove CKEditor instance. \" + e);
            }
        });
    }

    function dataSetTickerFormSetup(dialog) {
        text_callback(dialog, \$('.bootbox').data().extra.templates);
        configureQueryBuilder(dialog);
    }

    function configureQueryBuilder(dialog) {
        // Order Clause
        var orderClauseFields = \$(\"#orderClause\");

        if (orderClauseFields.length == 0)
            return;

        var orderClauseTemplate = Handlebars.compile(\$(\"#dataSetViewOrderClauseTemplate\").html());
        var ascTitle = \"{% trans \"Ascending\" %}\";
        var descTitle = \"{% trans \"Descending\" %}\";

        if (dialog.data().extra.orderClause.length == 0) {
            // Add a template row
            var context = {columns: dialog.data().extra.columns, title: \"1\", orderClause: \"\", orderClauseAsc: \"\", orderClauseDesc: \"\", buttonGlyph: \"fa-plus\", ascTitle: ascTitle, descTitle: descTitle};
            orderClauseFields.append(orderClauseTemplate(context));
        } else {
            // For each of the existing codes, create form components
            var i = 0;
            \$.each(dialog.data().extra.orderClause, function (index, field) {
                i++;

                var direction = (field.orderClauseDirection == \"ASC\");

                var context = {columns: dialog.data().extra.columns, title: i, orderClause: field.orderClause, orderClauseAsc: direction, orderClauseDesc: !direction, buttonGlyph: ((i == 1) ? \"fa-plus\" : \"fa-minus\"), ascTitle: ascTitle, descTitle: descTitle};

                orderClauseFields.append(orderClauseTemplate(context));
            });
        }

        // Nabble the resulting buttons
        orderClauseFields.on(\"click\", \"button\", function (e) {
            e.preventDefault();

            // find the gylph
            if (\$(this).find(\"i\").hasClass(\"fa-plus\")) {
                var context = {columns: dialog.data().extra.columns, title: orderClauseFields.find('.form-group').length + 1, orderClause: \"\", orderClauseAsc: \"\", orderClauseDesc: \"\", buttonGlyph: \"fa-minus\", ascTitle: ascTitle, descTitle: descTitle};
                orderClauseFields.append(orderClauseTemplate(context));
            } else {
                // Remove this row
                \$(this).closest(\".form-group\").remove();
            }
        });

        //
        // Filter Clause
        //
        var filterClauseFields = \$(\"#filterClause\");
        var filterClauseTemplate = Handlebars.compile(\$(\"#dataSetViewFilterClauseTemplate\").html());
        var filterOptions = [
            {
                id: \"starts-with\",
                value: \"{% trans \"starts with\" %}\"
            },{
                id: \"ends-with\",
                value: \"{% trans \"ends with\" %}\"
            },{
                id: \"contains\",
                value: \"{% trans \"contains\" %}\"
            },{
                id: \"equals\",
                value: \"{% trans \"equals\" %}\"
            },{
                id: \"not-starts-with\",
                value: \"{% trans \"does not start with\" %}\"
            },{
                id: \"not-ends-with\",
                value: \"{% trans \"does not end with\" %}\"
            },{
                id: \"not-contains\",
                value: \"{% trans \"does not contain\" %}\"
            },{
                id: \"not-equals\",
                value: \"{% trans \"does not equal\" %}\"
            },{
                id: \"greater-than\",
                value: \"{% trans \"greater than\" %}\"
            },{
                id: \"less-than\",
                value: \"{% trans \"less than\" %}\"
            }
        ];
        var filterOperatorOptions = [
            {
                id: \"OR\",
                value: \"{% trans \"Or\" %}\"
            },{
                id: \"AND\",
                value: \"{% trans \"And\" %}\"
            }
        ];

        if (dialog.data().extra.filterClause.length == 0) {
            // Add a template row
            context = {
                columns: dialog.data().extra.columns,
                filterOptions: filterOptions,
                filterOperatorOptions: filterOperatorOptions,
                title: \"1\",
                filterClause: \"\",
                filterClauseOperator: \"AND\",
                filterClauseCriteria: \"\",
                filterClauseValue: \"\",
                buttonGlyph: \"fa-plus\"
            };
            filterClauseFields.append(filterClauseTemplate(context));
        } else {
            // For each of the existing codes, create form components
            var j = 0;
            \$.each(dialog.data().extra.filterClause, function (index, field) {
                j++;

                var context = {
                    columns: dialog.data().extra.columns,
                    filterOptions: filterOptions,
                    filterOperatorOptions: filterOperatorOptions,
                    title: j,
                    filterClause: field.filterClause,
                    filterClauseOperator: field.filterClauseOperator,
                    filterClauseCriteria: field.filterClauseCriteria,
                    filterClauseValue: field.filterClauseValue,
                    buttonGlyph: ((j == 1) ? \"fa-plus\" : \"fa-minus\")
                };

                filterClauseFields.append(filterClauseTemplate(context));
            });
        }

        // Nabble the resulting buttons
        filterClauseFields.on(\"click\", \"button\", function (e) {
            e.preventDefault();

            // find the gylph
            if (\$(this).find(\"i\").hasClass(\"fa-plus\")) {
                var context = {
                    columns: dialog.data().extra.columns,
                    filterOptions: filterOptions,
                    filterOperatorOptions: filterOperatorOptions,
                    title: filterClauseFields.find('.form-group').length + 1,
                    filterClause: \"\",
                    filterClauseOperator: \"AND\",
                    filterClauseCriteria: \"\",
                    filterClauseValue: \"\",
                    buttonGlyph: \"fa-minus\"
                };
                filterClauseFields.append(filterClauseTemplate(context));
            } else {
                // Remove this row
                \$(this).closest(\".form-group\").remove();
            }
        });
    }

    function DataSetViewSubmit(apply) {

        var form = \$(\"#dataSetViewEditForm\");
        
        // Clean the previous generated hidden dataSetColumns from the form
        form.find('input[name=\"dataSetColumnId[]\"]').remove();

        // Add all the selected columns to the form as hidden input fields
        \$(\$(\"#columnsIn\").sortable('toArray')).each(function() {
            form.append('<input type=\"hidden\" name=\"dataSetColumnId[]\" value=\"' + this + '\" />');
        });

        // Submit the form
        if (apply == 1)
            form.data(\"apply\", true);

        form.submit();
    }
</script>", "datasetview-designer-javascript.twig", "/var/www/web/modules/datasetview-designer-javascript.twig");
    }
}
