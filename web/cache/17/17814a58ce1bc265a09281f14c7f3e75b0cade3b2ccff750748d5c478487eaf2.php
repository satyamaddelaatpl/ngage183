<?php

/* text-form-edit.twig */
class __TwigTemplate_dcc626b47787c1263579837ae4e586cf930012e8faf029e7ca9f385e7e619914 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 9
        $this->parent = $this->loadTemplate("form-base.twig", "text-form-edit.twig", 9);
        $this->blocks = array(
            'formTitle' => array($this, 'block_formTitle'),
            'formButtons' => array($this, 'block_formButtons'),
            'callBack' => array($this, 'block_callBack'),
            'formFieldActions' => array($this, 'block_formFieldActions'),
            'formHtml' => array($this, 'block_formHtml'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form-base.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 10
        $context["forms"] = $this->loadTemplate("forms.twig", "text-form-edit.twig", 10);
        // line 9
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_formTitle($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        echo __("Edit Text");
    }

    // line 16
    public function block_formButtons($context, array $blocks = array())
    {
        // line 17
        echo "    ";
        echo __("Help");
        echo ", XiboHelpRender(\"";
        echo twig_escape_filter($this->env, (isset($context["help"]) ? $context["help"] : null), "html", null, true);
        echo "\")
    ";
        // line 18
        echo __("Cancel");
        echo ", XiboDialogClose()
    ";
        // line 19
        echo __("Apply");
        echo ", XiboDialogApply(\"#textEditForm\")
    ";
        // line 20
        echo __("Save");
        echo ", \$(\"#textEditForm\").submit()
";
    }

    // line 23
    public function block_callBack($context, array $blocks = array())
    {
        echo "text_callback";
    }

    // line 25
    public function block_formFieldActions($context, array $blocks = array())
    {
        // line 26
        echo "    [{
    \"field\": \"effect\",
    \"trigger\": \"init\",
    \"value\": \"\",
    \"operation\": \"equals\",
    \"actions\": {
    \".effect-controls\": { \"display\": \"none\" }
    }
    },{
    \"field\": \"effect\",
    \"trigger\": \"change\",
    \"value\": \"\",
    \"operation\": \"equals\",
    \"actions\": {
    \".effect-controls\": { \"display\": \"none\" }
    }
    },{
    \"field\": \"effect\",
    \"trigger\": \"init\",
    \"value\": \"\",
    \"operation\": \"not\",
    \"actions\": {
    \".effect-controls\": { \"display\": \"block\" }
    }
    },{
    \"field\": \"effect\",
    \"trigger\": \"change\",
    \"value\": \"\",
    \"operation\": \"not\",
    \"actions\": {
    \".effect-controls\": { \"display\": \"block\" }
    }
    },{
    \"field\": \"useDuration\",
    \"trigger\": \"init\",
    \"value\": false,
    \"operation\": \"is:checked\",
    \"actions\": {
    \".duration-fields\": { \"display\": \"none\" }
    }
    },{
    \"field\": \"useDuration\",
    \"trigger\": \"change\",
    \"value\": false,
    \"operation\": \"is:checked\",
    \"actions\": {
    \".duration-fields\": { \"display\": \"none\" }
    }
    },{
    \"field\": \"useDuration\",
    \"trigger\": \"init\",
    \"value\": true,
    \"operation\": \"is:checked\",
    \"actions\": {
    \".duration-fields\": { \"display\": \"block\" }
    }
    },{
    \"field\": \"useDuration\",
    \"trigger\": \"change\",
    \"value\": true,
    \"operation\": \"is:checked\",
    \"actions\": {
    \".duration-fields\": { \"display\": \"block\" }
    }
    }]
";
    }

    // line 93
    public function block_formHtml($context, array $blocks = array())
    {
        // line 94
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <ul class=\"nav nav-tabs\" role=\"tablist\">
                <li class=\"active\"><a href=\"#general\" role=\"tab\" data-toggle=\"tab\" data-enlarge=\"1\"><span>";
        // line 97
        echo __("General");
        echo "</span></a></li>
                <li><a href=\"#options\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 98
        echo __("Options");
        echo "</span></a></li>
                <li><a href=\"#advanced\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 99
        echo __("Advanced");
        echo "</span></a></li>
            </ul>
            <form id=\"textEditForm\" class=\"XiboForm form-horizontal\" method=\"put\" action=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("module.widget.edit", array("id" => $this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "widget", array()), "widgetId", array()))), "html", null, true);
        echo "\">
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"general\">
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <div class=\"well\">
                                    <div class=\"text-center text-info\">";
        // line 107
        echo __("Date/Time templates");
        echo "</div>
                                    <ul id=\"TickerDataSetColumns\">
                                        <li class=\"ckeditor_snippits\" linkedto=\"ta_text\">Clock</li>
                                        <li class=\"ckeditor_snippits\" linkedto=\"ta_text\">Clock|HH:mm</li>
                                        <li class=\"ckeditor_snippits\" linkedto=\"ta_text\">Date</li>
                                        <li class=\"ckeditor_snippits\" linkedto=\"ta_text\">Clock|DD/MM/YYYY</li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <div class=\"form-group well\">
                                    <label class=\"col-sm-2 control-label\" for=\"ckeditor_library_select\">";
        // line 118
        echo __("Library");
        echo "</label>
                                    <div class=\"col-sm-10\">
                                        <select id=\"ckeditor_library_select\" class=\"form-control\" data-linked-to=\"ta_text\">
                                            <option></option>
                                            ";
        // line 122
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["media"]) ? $context["media"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 123
            echo "                                                ";
            if (($this->getAttribute($context["item"], "mediaType", array()) == "image")) {
                // line 124
                echo "                                                <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "mediaId", array()), "html", null, true);
                echo "\" data-image-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("library.download", array("id" => $this->getAttribute($context["item"], "mediaId", array()))), "html", null, true);
                echo "?preview=1\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
                echo "</option>
                                                ";
            }
            // line 126
            echo "                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        ";
        // line 133
        ob_start();
        // line 134
        echo "                            ";
        echo __("Enter the text to display. Please note that the background colour has automatically coloured to your layout background colour.");
        // line 135
        echo "                            ";
        echo __("The red rectangle reflects the size of the region you are editing.");
        // line 136
        echo "                            ";
        echo __("Shift+Enter will drop a single line. Enter alone starts a new paragraph.");
        // line 137
        echo "                        ";
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 138
        echo "                        ";
        echo $context["forms"]->gettextarea("ta_text", "", $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "getOption", array(0 => "text"), "method"), (isset($context["helpText"]) ? $context["helpText"] : null), "", 10);
        echo "
                    </div>

                    <div class=\"tab-pane\" id=\"options\">
                        ";
        // line 142
        ob_start();
        echo __("Name");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 143
        echo "                        ";
        ob_start();
        echo __("An optional name for this widget");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 144
        echo "                        ";
        echo $context["forms"]->getinput("name", (isset($context["title"]) ? $context["title"] : null), $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "getOption", array(0 => "name"), "method"), (isset($context["helpText"]) ? $context["helpText"] : null));
        echo "

                        ";
        // line 146
        ob_start();
        echo __("Effect");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 147
        echo "                        ";
        ob_start();
        echo __("Please select the effect that will be used to transition between items. If all items should be output, select None. Marquee effects are CPU intensive and may not be suitable for lower power displays.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 148
        echo "                        ";
        ob_start();
        echo __("None");
        $context["noneOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 149
        echo "                        ";
        ob_start();
        echo __("Fade");
        $context["fade"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 150
        echo "                        ";
        ob_start();
        echo __("Fade Out");
        $context["fadeout"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 151
        echo "                        ";
        ob_start();
        echo __("Scroll Horizontal");
        $context["scrollHorz"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 152
        echo "                        ";
        ob_start();
        echo __("Scroll Vertical");
        $context["scrollVert"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 153
        echo "                        ";
        ob_start();
        echo __("Flip Horizontal");
        $context["flipHorz"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 154
        echo "                        ";
        ob_start();
        echo __("Flip Vertical");
        $context["flipVert"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 155
        echo "                        ";
        ob_start();
        echo __("shuffle");
        $context["shuffle"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 156
        echo "                        ";
        ob_start();
        echo __("Tile Slide");
        $context["tileSlide"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 157
        echo "                        ";
        ob_start();
        echo __("Tile Blind");
        $context["tileBlind"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 158
        echo "                        ";
        ob_start();
        echo __("Marquee Left");
        $context["marqueeLeft"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 159
        echo "                        ";
        ob_start();
        echo __("Marquee Right");
        $context["marqueeRight"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 160
        echo "                        ";
        ob_start();
        echo __("Marquee Up");
        $context["marqueeUp"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 161
        echo "                        ";
        ob_start();
        echo __("Marquee Down");
        $context["marqueeDown"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 162
        echo "                        ";
        $context["options"] = array(0 => array("effectid" => "none", "effect" =>         // line 163
(isset($context["noneOption"]) ? $context["noneOption"] : null)), 1 => array("effectid" => "fade", "effect" =>         // line 164
(isset($context["fade"]) ? $context["fade"] : null)), 2 => array("effectid" => "fadeout", "effect" =>         // line 165
(isset($context["fadeout"]) ? $context["fadeout"] : null)), 3 => array("effectid" => "scrollHorz", "effect" =>         // line 166
(isset($context["scrollHorz"]) ? $context["scrollHorz"] : null)), 4 => array("effectid" => "scrollVert", "effect" =>         // line 167
(isset($context["scrollVert"]) ? $context["scrollVert"] : null)), 5 => array("effectid" => "flipHorz", "effect" =>         // line 168
(isset($context["flipHorz"]) ? $context["flipHorz"] : null)), 6 => array("effectid" => "flipVert", "effect" =>         // line 169
(isset($context["flipVert"]) ? $context["flipVert"] : null)), 7 => array("effectid" => "shuffle", "effect" =>         // line 170
(isset($context["shuffle"]) ? $context["shuffle"] : null)), 8 => array("effectid" => "tileSlide", "effect" =>         // line 171
(isset($context["tileSlide"]) ? $context["tileSlide"] : null)), 9 => array("effectid" => "tileBlind", "effect" =>         // line 172
(isset($context["tileBlind"]) ? $context["tileBlind"] : null)), 10 => array("effectid" => "marqueeLeft", "effect" =>         // line 173
(isset($context["marqueeLeft"]) ? $context["marqueeLeft"] : null)), 11 => array("effectid" => "marqueeRight", "effect" =>         // line 174
(isset($context["marqueeRight"]) ? $context["marqueeRight"] : null)), 12 => array("effectid" => "marqueeUp", "effect" =>         // line 175
(isset($context["marqueeUp"]) ? $context["marqueeUp"] : null)), 13 => array("effectid" => "marqueeDown", "effect" =>         // line 176
(isset($context["marqueeDown"]) ? $context["marqueeDown"] : null)));
        // line 178
        echo "                        ";
        echo $context["forms"]->getdropdown("effect", "single", (isset($context["title"]) ? $context["title"] : null), $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "getOption", array(0 => "effect"), "method"), (isset($context["options"]) ? $context["options"] : null), "effectid", "effect", (isset($context["helpText"]) ? $context["helpText"] : null));
        echo "

                        ";
        // line 180
        ob_start();
        echo __("Speed");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 181
        echo "                        ";
        ob_start();
        echo __("The transition speed of the selected effect in milliseconds (normal = 1000) or the Marquee Speed in a low to high scale (normal = 1).");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 182
        echo "                        ";
        echo $context["forms"]->getnumber("speed", (isset($context["title"]) ? $context["title"] : null), $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "getOption", array(0 => "speed"), "method"), (isset($context["helpText"]) ? $context["helpText"] : null), "effect-controls");
        echo "

                        ";
        // line 184
        ob_start();
        echo __("Set a duration?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 185
        echo "                        ";
        ob_start();
        echo __("Select to provide a specific duration for this Widget");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 186
        echo "                        ";
        echo $context["forms"]->getcheckbox("useDuration", (isset($context["title"]) ? $context["title"] : null), $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "getUseDuration", array(), "method"), (isset($context["helpText"]) ? $context["helpText"] : null));
        echo "

                        ";
        // line 188
        ob_start();
        echo __("Duration");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 189
        echo "                        ";
        ob_start();
        echo __("The duration in seconds this should be displayed");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 190
        echo "                        ";
        echo $context["forms"]->getnumber("duration", (isset($context["title"]) ? $context["title"] : null), $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "getDuration", array(), "method"), (isset($context["helpText"]) ? $context["helpText"] : null), "duration-fields", "required");
        echo "
                    </div>

                    <div class=\"tab-pane\" id=\"advanced\">
                        ";
        // line 194
        ob_start();
        echo __("Background Colour");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 195
        echo "                        ";
        ob_start();
        echo __("The selected effect works best with a background colour. Optionally add one here.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 196
        echo "                        ";
        echo $context["forms"]->getinput("backgroundColor", (isset($context["title"]) ? $context["title"] : null), $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "getOption", array(0 => "backgroundColor"), "method"), (isset($context["helpText"]) ? $context["helpText"] : null), "effect-controls");
        echo "

                        ";
        // line 198
        ob_start();
        echo __("Marquee Selector");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 199
        echo "                        ";
        ob_start();
        echo __("The selector to use for stacking marquee items in a line when scrolling Left/Right.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 200
        echo "                        ";
        echo $context["forms"]->getinput("marqueeInlineSelector", (isset($context["title"]) ? $context["title"] : null), $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "getOption", array(0 => "marqueeInlineSelector"), "method"), (isset($context["helpText"]) ? $context["helpText"] : null), "effect-controls");
        echo "

                        ";
        // line 202
        ob_start();
        echo __("Optional JavaScript");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 203
        echo "                        ";
        echo $context["forms"]->gettextarea("javaScript", "", $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "getRawNode", array(0 => "javaScript"), "method"), (isset($context["title"]) ? $context["title"] : null), "", "", 10);
        echo "
                    </div>
                </div>
            </form>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "text-form-edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  447 => 203,  443 => 202,  437 => 200,  432 => 199,  428 => 198,  422 => 196,  417 => 195,  413 => 194,  405 => 190,  400 => 189,  396 => 188,  390 => 186,  385 => 185,  381 => 184,  375 => 182,  370 => 181,  366 => 180,  360 => 178,  358 => 176,  357 => 175,  356 => 174,  355 => 173,  354 => 172,  353 => 171,  352 => 170,  351 => 169,  350 => 168,  349 => 167,  348 => 166,  347 => 165,  346 => 164,  345 => 163,  343 => 162,  338 => 161,  333 => 160,  328 => 159,  323 => 158,  318 => 157,  313 => 156,  308 => 155,  303 => 154,  298 => 153,  293 => 152,  288 => 151,  283 => 150,  278 => 149,  273 => 148,  268 => 147,  264 => 146,  258 => 144,  253 => 143,  249 => 142,  241 => 138,  238 => 137,  235 => 136,  232 => 135,  229 => 134,  227 => 133,  219 => 127,  213 => 126,  203 => 124,  200 => 123,  196 => 122,  189 => 118,  175 => 107,  166 => 101,  161 => 99,  157 => 98,  153 => 97,  148 => 94,  145 => 93,  76 => 26,  73 => 25,  67 => 23,  61 => 20,  57 => 19,  53 => 18,  46 => 17,  43 => 16,  38 => 13,  35 => 12,  31 => 9,  29 => 10,  11 => 9,);
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

{% extends \"form-base.twig\" %}
{% import \"forms.twig\" as forms %}

{% block formTitle %}
    {% trans \"Edit Text\" %}
{% endblock %}

{% block formButtons %}
    {% trans \"Help\" %}, XiboHelpRender(\"{{ help }}\")
    {% trans \"Cancel\" %}, XiboDialogClose()
    {% trans \"Apply\" %}, XiboDialogApply(\"#textEditForm\")
    {% trans \"Save\" %}, \$(\"#textEditForm\").submit()
{% endblock %}

{% block callBack %}text_callback{% endblock %}

{% block formFieldActions %}
    [{
    \"field\": \"effect\",
    \"trigger\": \"init\",
    \"value\": \"\",
    \"operation\": \"equals\",
    \"actions\": {
    \".effect-controls\": { \"display\": \"none\" }
    }
    },{
    \"field\": \"effect\",
    \"trigger\": \"change\",
    \"value\": \"\",
    \"operation\": \"equals\",
    \"actions\": {
    \".effect-controls\": { \"display\": \"none\" }
    }
    },{
    \"field\": \"effect\",
    \"trigger\": \"init\",
    \"value\": \"\",
    \"operation\": \"not\",
    \"actions\": {
    \".effect-controls\": { \"display\": \"block\" }
    }
    },{
    \"field\": \"effect\",
    \"trigger\": \"change\",
    \"value\": \"\",
    \"operation\": \"not\",
    \"actions\": {
    \".effect-controls\": { \"display\": \"block\" }
    }
    },{
    \"field\": \"useDuration\",
    \"trigger\": \"init\",
    \"value\": false,
    \"operation\": \"is:checked\",
    \"actions\": {
    \".duration-fields\": { \"display\": \"none\" }
    }
    },{
    \"field\": \"useDuration\",
    \"trigger\": \"change\",
    \"value\": false,
    \"operation\": \"is:checked\",
    \"actions\": {
    \".duration-fields\": { \"display\": \"none\" }
    }
    },{
    \"field\": \"useDuration\",
    \"trigger\": \"init\",
    \"value\": true,
    \"operation\": \"is:checked\",
    \"actions\": {
    \".duration-fields\": { \"display\": \"block\" }
    }
    },{
    \"field\": \"useDuration\",
    \"trigger\": \"change\",
    \"value\": true,
    \"operation\": \"is:checked\",
    \"actions\": {
    \".duration-fields\": { \"display\": \"block\" }
    }
    }]
{% endblock %}

{% block formHtml %}
    <div class=\"row\">
        <div class=\"col-md-12\">
            <ul class=\"nav nav-tabs\" role=\"tablist\">
                <li class=\"active\"><a href=\"#general\" role=\"tab\" data-toggle=\"tab\" data-enlarge=\"1\"><span>{% trans \"General\" %}</span></a></li>
                <li><a href=\"#options\" role=\"tab\" data-toggle=\"tab\"><span>{% trans \"Options\" %}</span></a></li>
                <li><a href=\"#advanced\" role=\"tab\" data-toggle=\"tab\"><span>{% trans \"Advanced\" %}</span></a></li>
            </ul>
            <form id=\"textEditForm\" class=\"XiboForm form-horizontal\" method=\"put\" action=\"{{ urlFor(\"module.widget.edit\", {id: module.widget.widgetId}) }}\">
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"general\">
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <div class=\"well\">
                                    <div class=\"text-center text-info\">{% trans \"Date/Time templates\" %}</div>
                                    <ul id=\"TickerDataSetColumns\">
                                        <li class=\"ckeditor_snippits\" linkedto=\"ta_text\">Clock</li>
                                        <li class=\"ckeditor_snippits\" linkedto=\"ta_text\">Clock|HH:mm</li>
                                        <li class=\"ckeditor_snippits\" linkedto=\"ta_text\">Date</li>
                                        <li class=\"ckeditor_snippits\" linkedto=\"ta_text\">Clock|DD/MM/YYYY</li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <div class=\"form-group well\">
                                    <label class=\"col-sm-2 control-label\" for=\"ckeditor_library_select\">{% trans \"Library\" %}</label>
                                    <div class=\"col-sm-10\">
                                        <select id=\"ckeditor_library_select\" class=\"form-control\" data-linked-to=\"ta_text\">
                                            <option></option>
                                            {% for item in media %}
                                                {% if item.mediaType == \"image\" %}
                                                <option value=\"{{ item.mediaId }}\" data-image-url=\"{{ urlFor(\"library.download\", {id: item.mediaId}) }}?preview=1\">{{ item.name }}</option>
                                                {% endif %}
                                            {% endfor %}
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {% set helpText %}
                            {% trans \"Enter the text to display. Please note that the background colour has automatically coloured to your layout background colour.\" %}
                            {% trans \"The red rectangle reflects the size of the region you are editing.\" %}
                            {% trans \"Shift+Enter will drop a single line. Enter alone starts a new paragraph.\" %}
                        {% endset %}
                        {{ forms.textarea(\"ta_text\", \"\", module.getOption(\"text\"), helpText, \"\", 10) }}
                    </div>

                    <div class=\"tab-pane\" id=\"options\">
                        {% set title %}{% trans \"Name\" %}{% endset %}
                        {% set helpText %}{% trans \"An optional name for this widget\" %}{% endset %}
                        {{ forms.input(\"name\", title, module.getOption(\"name\"), helpText) }}

                        {% set title %}{% trans \"Effect\" %}{% endset %}
                        {% set helpText %}{% trans \"Please select the effect that will be used to transition between items. If all items should be output, select None. Marquee effects are CPU intensive and may not be suitable for lower power displays.\" %}{% endset %}
                        {% set noneOption %}{% trans \"None\" %}{% endset %}
                        {% set fade %}{% trans \"Fade\" %}{% endset %}
                        {% set fadeout %}{% trans \"Fade Out\" %}{% endset %}
                        {% set scrollHorz %}{% trans \"Scroll Horizontal\" %}{% endset %}
                        {% set scrollVert %}{% trans \"Scroll Vertical\" %}{% endset %}
                        {% set flipHorz %}{% trans \"Flip Horizontal\" %}{% endset %}
                        {% set flipVert %}{% trans \"Flip Vertical\" %}{% endset %}
                        {% set shuffle %}{% trans \"shuffle\" %}{% endset %}
                        {% set tileSlide %}{% trans \"Tile Slide\" %}{% endset %}
                        {% set tileBlind %}{% trans \"Tile Blind\" %}{% endset %}
                        {% set marqueeLeft %}{% trans \"Marquee Left\" %}{% endset %}
                        {% set marqueeRight %}{% trans \"Marquee Right\" %}{% endset %}
                        {% set marqueeUp %}{% trans \"Marquee Up\" %}{% endset %}
                        {% set marqueeDown %}{% trans \"Marquee Down\" %}{% endset %}
                        {% set options = [
                        { effectid: \"none\", effect: noneOption },
                        { effectid: \"fade\", effect: fade },
                        { effectid: \"fadeout\", effect: fadeout},
                        { effectid: \"scrollHorz\", effect: scrollHorz},
                        { effectid: \"scrollVert\", effect: scrollVert},
                        { effectid: \"flipHorz\", effect: flipHorz},
                        { effectid: \"flipVert\", effect: flipVert},
                        { effectid: \"shuffle\", effect: shuffle},
                        { effectid: \"tileSlide\", effect: tileSlide},
                        { effectid: \"tileBlind\", effect: tileBlind},
                        { effectid: \"marqueeLeft\", effect: marqueeLeft},
                        { effectid: \"marqueeRight\", effect: marqueeRight},
                        { effectid: \"marqueeUp\", effect: marqueeUp},
                        { effectid: \"marqueeDown\", effect: marqueeDown}
                        ] %}
                        {{ forms.dropdown(\"effect\", \"single\", title, module.getOption(\"effect\"), options, \"effectid\", \"effect\", helpText) }}

                        {% set title %}{% trans \"Speed\" %}{% endset %}
                        {% set helpText %}{% trans \"The transition speed of the selected effect in milliseconds (normal = 1000) or the Marquee Speed in a low to high scale (normal = 1).\" %}{% endset %}
                        {{ forms.number(\"speed\", title, module.getOption(\"speed\"), helpText, \"effect-controls\") }}

                        {% set title %}{% trans \"Set a duration?\" %}{% endset %}
                        {% set helpText %}{% trans \"Select to provide a specific duration for this Widget\" %}{% endset %}
                        {{ forms.checkbox(\"useDuration\", title, module.getUseDuration(), helpText) }}

                        {% set title %}{% trans \"Duration\" %}{% endset %}
                        {% set helpText %}{% trans \"The duration in seconds this should be displayed\" %}{% endset %}
                        {{ forms.number(\"duration\", title, module.getDuration(), helpText, \"duration-fields\", \"required\") }}
                    </div>

                    <div class=\"tab-pane\" id=\"advanced\">
                        {% set title %}{% trans \"Background Colour\" %}{% endset %}
                        {% set helpText %}{% trans \"The selected effect works best with a background colour. Optionally add one here.\" %}{% endset %}
                        {{ forms.input(\"backgroundColor\", title, module.getOption(\"backgroundColor\"), helpText, \"effect-controls\") }}

                        {% set title %}{% trans \"Marquee Selector\" %}{% endset %}
                        {% set helpText %}{% trans \"The selector to use for stacking marquee items in a line when scrolling Left/Right.\" %}{% endset %}
                        {{ forms.input(\"marqueeInlineSelector\", title, module.getOption(\"marqueeInlineSelector\"), helpText, \"effect-controls\") }}

                        {% set title %}{% trans \"Optional JavaScript\" %}{% endset %}
                        {{ forms.textarea(\"javaScript\", \"\", module.getRawNode(\"javaScript\"), title, \"\", \"\", 10) }}
                    </div>
                </div>
            </form>
        </div>
    </div>
{% endblock %}", "text-form-edit.twig", "/var/www/web/modules/text-form-edit.twig");
    }
}
