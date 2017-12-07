<?php

/* base.twig */
class __TwigTemplate_a4a980a3a1069364ab5b1bff3db1ca9af5a916966b5cccedd81c5863345b2bfe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'headContent' => array($this, 'block_headContent'),
            'content' => array($this, 'block_content'),
            'javaScriptTemplates' => array($this, 'block_javaScriptTemplates'),
            'javaScript' => array($this, 'block_javaScript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <title>";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "getThemeConfig", array(0 => "theme_title"), "method"), "html", null, true);
        echo "</title>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"token\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["csrfToken"]) ? $context["csrfToken"] : null), "html", null, true);
        echo "\"/>
        <link rel=\"shortcut icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "img/favicon.ico"), "method"), "html", null, true);
        echo "\" />

        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "libraries/bootstrap/css/bootstrap.min.css"), "method"), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "libraries/font-awesome/css/font-awesome.min.css"), "method"), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "libraries/bootstrap-select/css/bootstrap-select.css"), "method"), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "libraries/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css"), "method"), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "libraries/jquery-timepicker/jquery.timepicker.css"), "method"), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "libraries/bootstrap-slider-master/bootstrap-slider.min.css"), "method"), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "libraries/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css"), "method"), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "libraries/bootstrap-ekko-lightbox/ekko-lightbox.min.css"), "method"), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "libraries/bootstrap-switch/bootstrap-switch.min.css"), "method"), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "libraries/bootstrap-tagsinput-master/bootstrap-tagsinput.css"), "method"), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "libraries/calendar/css/calendar.css"), "method"), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "libraries/morrisjs/morris.css"), "method"), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "libraries/datatables/dataTables.bootstrap.css"), "method"), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "libraries/datatables/buttons.dataTables.min.css"), "method"), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "libraries/jquery/jquery-ui/css/ui-lightness/jquery-ui-1.10.2.custom.min.css"), "method"), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "libraries/jquery-file-upload/css/jquery.fileupload.css"), "method"), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "libraries/jquery-file-upload/css/jquery.fileupload-ui.css"), "method"), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "libraries/toastr/toastr.min.css"), "method"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "css/dashboard.css"), "method"), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
        <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "css/timeline.css"), "method"), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
        <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "css/xibo.css"), "method"), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
        <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "css/calendar.css"), "method"), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
        <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "css/override.css"), "method"), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
        <link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("library.font.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!-- Copyright 2006-2017 Daniel Garner. Part of the Xibo Open Source Digital Signage Solution. Released under the AGPLv3 or later. -->
        <!-- Please be sure you read this before removing the Source/About links from your theme: http://bit.ly/agplv3 -->
        ";
        // line 37
        $this->displayBlock('headContent', $context, $blocks);
        // line 38
        echo "    </head>
    <body>
        ";
        // line 40
        $this->displayBlock('content', $context, $blocks);
        // line 41
        echo "
        <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "libraries/jquery/jquery-1.11.1.min.js"), "method"), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "libraries/jquery/jquery.validate.min.js"), "method"), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "libraries/jquery/additional-methods.min.js"), "method"), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "libraries/bootstrap/js/bootstrap.min.js"), "method"), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "libraries/bootstrap/js/bootbox.min.js"), "method"), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "libraries/bootstrap-switch/bootstrap-switch.min.js"), "method"), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\"></script>

        ";
        // line 50
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "libraries/datatables/jquery.dataTables.min.js"), "method"), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "libraries/datatables/dataTables.bootstrap.js"), "method"), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "libraries/datatables/dataTables.buttons.min.js"), "method"), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "libraries/datatables/buttons.colVis.min.js"), "method"), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "libraries/datatables/buttons.print.min.js"), "method"), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "libraries/datatables/buttons.html5.js"), "method"), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "libraries/datatables/buttons.flash.min.js"), "method"), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "libraries/jquery/jquery-ui/jquery-ui-1.10.2.custom.min.js"), "method"), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "libraries/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"), "method"), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "libraries/bootstrap-select/js/bootstrap-select.min.js"), "method"), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "libraries/bootstrap-ekko-lightbox/ekko-lightbox.min.js"), "method"), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "libraries/underscore/underscore-min.js"), "method"), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "libraries/jstimezonedetect/jstz.min.js"), "method"), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "libraries/ckeditor/ckeditor.js"), "method"), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "libraries/bootstrap/js/bootstrap-ckeditor-fix.js"), "method"), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "libraries/jquery-file-upload/js/tmpl.min.js"), "method"), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "libraries/jquery-load-image/load-image.all.min.js"), "method"), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "libraries/jquery-file-upload/js/jquery.iframe-transport.js"), "method"), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "libraries/jquery-file-upload/js/jquery.fileupload.js"), "method"), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "libraries/jquery-file-upload/js/jquery.fileupload-process.js"), "method"), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "libraries/jquery-file-upload/js/jquery.fileupload-resize.js"), "method"), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "libraries/jquery-file-upload/js/jquery.fileupload-validate.js"), "method"), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "libraries/jquery-file-upload/js/jquery.fileupload-ui.js"), "method"), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "libraries/jquery-file-upload/js/jquery.fileupload-image.js"), "method"), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "libraries/jquery-file-upload/js/jquery.fileupload-video.js"), "method"), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "libraries/jquery-file-upload/js/jquery.fileupload-audio.js"), "method"), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "libraries/jquery-message-queuing/jquery.ba-jqmq.min.js"), "method"), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "libraries/jquery-throttle-debounce/jquery.ba-throttle-debounce.min.js"), "method"), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "libraries/toastr/toastr.min.js"), "method"), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "libraries/date-time-format.js"), "method"), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "libraries/momentjs/moment.js"), "method"), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "libraries/momentjs/moment-timezone.js"), "method"), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "libraries/morrisjs/raphael.min.js"), "method"), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "libraries/morrisjs/morris.min.js"), "method"), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "libraries/chartjs/Chart.min.js"), "method"), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "libraries/colors/colors.min.js"), "method"), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "js/xibo-cms.js"), "method"), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "js/xibo-forms.js"), "method"), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "js/xibo-preview-timeline.js"), "method"), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "js/xibo-calendar.js"), "method"), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "js/xibo-datasets.js"), "method"), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "libraries/handlebars/handlebars-v3.0.0.js"), "method"), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "libraries/jquery-serialize-object/jquery.serialize-object.min.js"), "method"), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "libraries/bootstrap-tagsinput-master/bootstrap-tagsinput.min.js"), "method"), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "libraries/jquery-timepicker/jquery.timepicker.min.js"), "method"), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "libraries/bootstrap-slider-master/bootstrap-slider.min.js"), "method"), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\"></script>

        ";
        // line 100
        echo "        ";
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "CALENDAR_TYPE", array()) == "Jalali")) {
            // line 101
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "libraries/bootstrap-datetimepicker/js/jalali-date.js"), "method"), "html", null, true);
            echo "?";
            echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
            echo "\"></script>
            <script src=\"";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "libraries/bootstrap-datetimepicker/js/bootstrap-datetimepicker-jalali.min.js"), "method"), "html", null, true);
            echo "?";
            echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
            echo "\"></script>
            <script src=\"";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "libraries/calendar/js/calendar-jalali.js"), "method"), "html", null, true);
            echo "?";
            echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
            echo "\"></script>
            <script src=\"";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "libraries/momentjs/moment-jalali.js"), "method"), "html", null, true);
            echo "?";
            echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
            echo "\"></script>
            <script type=\"text/javascript\">
                moment.loadPersian();
            </script>
        ";
        } else {
            // line 109
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "libraries/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"), "method"), "html", null, true);
            echo "?";
            echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
            echo "\"></script>
            <script src=\"";
            // line 110
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "libraries/calendar/js/calendar.js"), "method"), "html", null, true);
            echo "?";
            echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
            echo "\"></script>
            <script src=\"";
            // line 111
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "libraries/calendar/js/language/en_GB.js"), "method"), "html", null, true);
            echo "?";
            echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
            echo "\"></script>
        ";
        }
        // line 113
        echo "
        ";
        // line 114
        if (($this->getAttribute((isset($context["translate"]) ? $context["translate"] : null), "jsLocale", array()) != "en-GB")) {
            // line 115
            echo "            ";
            // line 116
            echo "            ";
            ob_start();
            echo "libraries/calendar/js/language/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["translate"]) ? $context["translate"] : null), "calendarLanguage", array()), "html", null, true);
            echo ".js";
            $context["calendarTranslation"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 117
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => (isset($context["calendarTranslation"]) ? $context["calendarTranslation"] : null)), "method"), "html", null, true);
            echo "\"></script>
            ";
            // line 118
            ob_start();
            echo "libraries/bootstrap-datetimepicker/js/locales/bootstrap-datetimepicker.";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["translate"]) ? $context["translate"] : null), "jsShortLocale", array()), "html", null, true);
            echo ".js";
            $context["datePickerTranslation"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 119
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => (isset($context["datePickerTranslation"]) ? $context["datePickerTranslation"] : null)), "method"), "html", null, true);
            echo "\"></script>
            ";
            // line 120
            ob_start();
            echo "libraries/bootstrap-select/js/i18n/defaults-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["translate"]) ? $context["translate"] : null), "boostrapSelectLanguage", array()), "html", null, true);
            echo ".min.js";
            $context["selectPickerTranslation"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 121
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => (isset($context["selectPickerTranslation"]) ? $context["selectPickerTranslation"] : null)), "method"), "html", null, true);
            echo "\"></script>
        ";
        }
        // line 123
        echo "
        <script type=\"text/javascript\">
            var translations = ";
        // line 125
        echo (isset($context["translations"]) ? $context["translations"] : null);
        echo ";
            // Translations we want always available
            ";
        // line 128
        echo "            translations.withselected = \"";
        echo twig_escape_filter($this->env, __("With Selected"), "js", null, true);
        echo "\";
            translations.selectAll = \"";
        // line 129
        echo twig_escape_filter($this->env, __("Select All"), "js", null, true);
        echo "\";
            translations.multiselect = \"";
        // line 130
        echo twig_escape_filter($this->env, __("Multiple Items Selected"), "js", null, true);
        echo "\";
            translations.multiselectNoItemsMessage = \"";
        // line 131
        echo twig_escape_filter($this->env, __("Sorry, no items have been selected."), "js", null, true);
        echo "\";
            translations.multiselectMessage = \"";
        // line 132
        echo twig_escape_filter($this->env, __("Caution, you have selected %1 items. Clicking save will run the %2 transaction on all these items."), "js", null, true);
        echo "\";
            translations.save = \"";
        // line 133
        echo twig_escape_filter($this->env, __("Save"), "js", null, true);
        echo "\";
            translations.cancel = \"";
        // line 134
        echo twig_escape_filter($this->env, __("Cancel"), "js", null, true);
        echo "\";
            translations.close = \"";
        // line 135
        echo twig_escape_filter($this->env, __("Close"), "js", null, true);
        echo "\";
            translations.success = \"";
        // line 136
        echo twig_escape_filter($this->env, __("Success"), "js", null, true);
        echo "\";
            translations.failure = \"";
        // line 137
        echo twig_escape_filter($this->env, __("Failure"), "js", null, true);
        echo "\";
            translations.enterText = \"";
        // line 138
        echo twig_escape_filter($this->env, __("Enter text..."), "js", null, true);
        echo "\";
            translations.statusPending = \"";
        // line 139
        echo twig_escape_filter($this->env, __("Status Pending"), "js", null, true);
        echo "\";
            translations.duplicate = \"";
        // line 140
        echo twig_escape_filter($this->env, __("Duplicate"), "js", null, true);
        echo "\";
            translations.spacesWarning = \"";
        // line 141
        echo twig_escape_filter($this->env, __("Warning - starts with or ends with a space, or contains double spaces"), "js", null, true);
        echo "\";
            ";
        // line 143
        echo "
            var language = \"";
        // line 144
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["translate"]) ? $context["translate"] : null), "jsLocale", array()), "html", null, true);
        echo "\";
            var timezone = \"";
        // line 145
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "defaultTimezone", array()), "html", null, true);
        echo "\";
            var dateFormat = \"";
        // line 146
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "DATE_FORMAT", array()), "html", null, true);
        echo "\";
            var jsDateFormat = \"";
        // line 147
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "DATE_FORMAT_JS", array()), "html", null, true);
        echo "\";
            var timeFormat = \"";
        // line 148
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "TIME_FORMAT", array()), "html", null, true);
        echo "\";
            var jsTimeFormat = \"";
        // line 149
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "TIME_FORMAT_JS", array()), "html", null, true);
        echo "\";
            var systemDateFormat = \"";
        // line 150
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "systemDateFormat", array()), "html", null, true);
        echo "\";
            var systemTimeFormat = \"";
        // line 151
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "systemTimeFormat", array()), "html", null, true);
        echo "\";
            var bootstrapDateFormat = \"";
        // line 152
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "DATE_FORMAT_BOOTSTRAP", array()), "html", null, true);
        echo "\";
            var bootstrapDateFormatDateOnly = \"";
        // line 153
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "DATE_FORMAT_BOOTSTRAP_DATEONLY", array()), "html", null, true);
        echo "\";
            var calendarType = \"";
        // line 154
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "CALENDAR_TYPE", array()), "html", null, true);
        echo "\";
            var clockUrl = \"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("clock"), "html", null, true);
        echo "\";
            var calendarLanguage = \"";
        // line 156
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["translate"]) ? $context["translate"] : null), "calendarLanguage", array()), "html", null, true);
        echo "\";
            var pingUrl = \"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("ping"), "html", null, true);
        echo "\";

            ";
        // line 160
        echo "            var dataTablesLanguage = {
                \"decimal\":        \"\",
                \"emptyTable\":     \"";
        // line 162
        echo twig_escape_filter($this->env, __("No data available in table"), "js", null, true);
        echo "\",
                \"info\":           \"";
        // line 163
        echo twig_escape_filter($this->env, __("Showing _START_ to _END_ of _TOTAL_ entries"), "js", null, true);
        echo "\",
                \"infoEmpty\":      \"";
        // line 164
        echo twig_escape_filter($this->env, __("Showing 0 to 0 of 0 entries"), "js", null, true);
        echo "\",
                \"infoFiltered\":   \"";
        // line 165
        echo twig_escape_filter($this->env, __("(filtered from _MAX_ total entries)"), "js", null, true);
        echo "\",
                \"infoPostFix\":    \"\",
                \"thousands\":      \",\",
                \"lengthMenu\":     \"";
        // line 168
        echo twig_escape_filter($this->env, __("Show _MENU_ entries"), "js", null, true);
        echo "\",
                \"loadingRecords\": \"";
        // line 169
        echo twig_escape_filter($this->env, __("Loading..."), "js", null, true);
        echo "\",
                \"processing\":     \"";
        // line 170
        echo twig_escape_filter($this->env, __("Processing..."), "js", null, true);
        echo "\",
                \"search\":         \"";
        // line 171
        echo twig_escape_filter($this->env, __("Search:"), "js", null, true);
        echo "\",
                \"zeroRecords\":    \"";
        // line 172
        echo twig_escape_filter($this->env, __("No matching records found"), "js", null, true);
        echo "\",
                \"paginate\": {
                    \"first\":      \"";
        // line 174
        echo twig_escape_filter($this->env, __("First"), "js", null, true);
        echo "\",
                    \"last\":       \"";
        // line 175
        echo twig_escape_filter($this->env, __("Last"), "js", null, true);
        echo "\",
                    \"next\":       \"";
        // line 176
        echo twig_escape_filter($this->env, __("Next"), "js", null, true);
        echo "\",
                    \"previous\":   \"";
        // line 177
        echo twig_escape_filter($this->env, __("Previous"), "js", null, true);
        echo "\"
                },
                \"aria\": {
                    \"sortAscending\":  \"";
        // line 180
        echo twig_escape_filter($this->env, __(": activate to sort column ascending"), "js", null, true);
        echo "\",
                    \"sortDescending\": \"";
        // line 181
        echo twig_escape_filter($this->env, __(": activate to sort column descending"), "js", null, true);
        echo "\"
                }
            };
            ";
        // line 185
        echo "
            moment.locale(\"";
        // line 186
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["translate"]) ? $context["translate"] : null), "jsLocale", array()), "html", null, true);
        echo "\");

            \$(function() {
                var csrf_token = \$('meta[name=\"token\"]').attr('content');
                \$.ajaxSetup({
                    headers: {
                        'X-XSRF-TOKEN': csrf_token
                    }
                });
            });

            toastr.options.positionClass = \"toast-bottom-right\";

            // CKEditor default config
            var CKEDITOR_DEFAULT_CONFIG = {
                contentsCss: [ CKEDITOR.getUrl('contents.css'), \"";
        // line 201
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("library.font.css"), "html", null, true);
        echo "\" ],
                font_names: '";
        // line 202
        echo twig_escape_filter($this->env, (isset($context["ckeditorConfig"]) ? $context["ckeditorConfig"] : null), "html", null, true);
        echo "' + CKEDITOR.config.font_names,
                imageDownloadUrl: \"";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("library.download"), "html", null, true);
        echo "?preview=1\"
            }

        </script>

        ";
        // line 208
        $this->displayBlock('javaScriptTemplates', $context, $blocks);
        // line 209
        echo "        ";
        $this->displayBlock('javaScript', $context, $blocks);
        // line 210
        echo "    </body>
</html>";
    }

    // line 37
    public function block_headContent($context, array $blocks = array())
    {
    }

    // line 40
    public function block_content($context, array $blocks = array())
    {
    }

    // line 208
    public function block_javaScriptTemplates($context, array $blocks = array())
    {
    }

    // line 209
    public function block_javaScript($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  867 => 209,  862 => 208,  857 => 40,  852 => 37,  847 => 210,  844 => 209,  842 => 208,  834 => 203,  830 => 202,  826 => 201,  808 => 186,  805 => 185,  799 => 181,  795 => 180,  789 => 177,  785 => 176,  781 => 175,  777 => 174,  772 => 172,  768 => 171,  764 => 170,  760 => 169,  756 => 168,  750 => 165,  746 => 164,  742 => 163,  738 => 162,  734 => 160,  729 => 157,  725 => 156,  721 => 155,  717 => 154,  713 => 153,  709 => 152,  705 => 151,  701 => 150,  697 => 149,  693 => 148,  689 => 147,  685 => 146,  681 => 145,  677 => 144,  674 => 143,  670 => 141,  666 => 140,  662 => 139,  658 => 138,  654 => 137,  650 => 136,  646 => 135,  642 => 134,  638 => 133,  634 => 132,  630 => 131,  626 => 130,  622 => 129,  617 => 128,  612 => 125,  608 => 123,  602 => 121,  596 => 120,  591 => 119,  585 => 118,  580 => 117,  573 => 116,  571 => 115,  569 => 114,  566 => 113,  559 => 111,  553 => 110,  546 => 109,  536 => 104,  530 => 103,  524 => 102,  517 => 101,  514 => 100,  507 => 97,  501 => 96,  495 => 95,  489 => 94,  483 => 93,  477 => 92,  471 => 91,  465 => 90,  459 => 89,  453 => 88,  447 => 87,  440 => 85,  434 => 84,  428 => 83,  422 => 82,  416 => 81,  410 => 80,  404 => 79,  398 => 78,  392 => 77,  386 => 76,  380 => 75,  374 => 74,  368 => 73,  362 => 72,  356 => 71,  350 => 70,  344 => 69,  338 => 68,  332 => 67,  326 => 66,  320 => 65,  314 => 64,  308 => 63,  302 => 62,  296 => 61,  290 => 60,  284 => 59,  278 => 58,  271 => 56,  265 => 55,  259 => 54,  253 => 53,  247 => 52,  241 => 51,  234 => 50,  227 => 47,  221 => 46,  215 => 45,  209 => 44,  203 => 43,  197 => 42,  194 => 41,  192 => 40,  188 => 38,  186 => 37,  180 => 34,  174 => 33,  168 => 32,  162 => 31,  156 => 30,  150 => 29,  146 => 28,  140 => 27,  134 => 26,  128 => 25,  122 => 24,  116 => 23,  110 => 22,  104 => 21,  98 => 20,  92 => 19,  86 => 18,  80 => 17,  74 => 16,  68 => 15,  62 => 14,  56 => 13,  50 => 12,  44 => 11,  39 => 9,  35 => 8,  28 => 4,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <title>{{ theme.getThemeConfig(\"theme_title\") }}</title>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"token\" content=\"{{ csrfToken }}\"/>
        <link rel=\"shortcut icon\" href=\"{{ theme.uri(\"img/favicon.ico\") }}\" />

        <link href=\"{{ theme.uri(\"libraries/bootstrap/css/bootstrap.min.css\") }}?{{ version }}\" rel=\"stylesheet\" media=\"screen\">
        <link href=\"{{ theme.uri(\"libraries/font-awesome/css/font-awesome.min.css\") }}?{{ version }}\" rel=\"stylesheet\">
        <link href=\"{{ theme.uri(\"libraries/bootstrap-select/css/bootstrap-select.css\") }}?{{ version }}\" rel=\"stylesheet\">
        <link href=\"{{ theme.uri(\"libraries/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css\") }}?{{ version }}\" rel=\"stylesheet\">
        <link href=\"{{ theme.uri(\"libraries/jquery-timepicker/jquery.timepicker.css\") }}?{{ version }}\" rel=\"stylesheet\">
        <link href=\"{{ theme.uri(\"libraries/bootstrap-slider-master/bootstrap-slider.min.css\") }}?{{ version }}\" rel=\"stylesheet\">
        <link href=\"{{ theme.uri(\"libraries/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css\") }}?{{ version }}\" rel=\"stylesheet\">
        <link href=\"{{ theme.uri(\"libraries/bootstrap-ekko-lightbox/ekko-lightbox.min.css\") }}?{{ version }}\" rel=\"stylesheet\">
        <link href=\"{{ theme.uri(\"libraries/bootstrap-switch/bootstrap-switch.min.css\") }}?{{ version }}\" rel=\"stylesheet\">
        <link href=\"{{ theme.uri(\"libraries/bootstrap-tagsinput-master/bootstrap-tagsinput.css\") }}?{{ version }}\" rel=\"stylesheet\">
        <link href=\"{{ theme.uri(\"libraries/calendar/css/calendar.css\") }}?{{ version }}\" rel=\"stylesheet\">
        <link href=\"{{ theme.uri(\"libraries/morrisjs/morris.css\") }}?{{ version }}\" rel=\"stylesheet\">
        <link href=\"{{ theme.uri(\"libraries/datatables/dataTables.bootstrap.css\") }}?{{ version }}\" rel=\"stylesheet\">
        <link href=\"{{ theme.uri(\"libraries/datatables/buttons.dataTables.min.css\") }}?{{ version }}\" rel=\"stylesheet\">
        <link href=\"{{ theme.uri(\"libraries/jquery/jquery-ui/css/ui-lightness/jquery-ui-1.10.2.custom.min.css\") }}?{{ version }}\" rel=\"stylesheet\">
        <link href=\"{{ theme.uri(\"libraries/jquery-file-upload/css/jquery.fileupload.css\") }}?{{ version }}\" rel=\"stylesheet\">
        <link href=\"{{ theme.uri(\"libraries/jquery-file-upload/css/jquery.fileupload-ui.css\") }}?{{ version }}\" rel=\"stylesheet\">
        <link href=\"{{ theme.uri(\"libraries/toastr/toastr.min.css\") }}\" rel=\"stylesheet\">
        <link href=\"{{ theme.uri(\"css/dashboard.css\") }}?{{ version }}\" rel=\"stylesheet\" media=\"screen\">
        <link href=\"{{ theme.uri(\"css/timeline.css\") }}?{{ version }}\" rel=\"stylesheet\" media=\"screen\">
        <link href=\"{{ theme.uri(\"css/xibo.css\") }}?{{ version }}\" rel=\"stylesheet\" media=\"screen\">
        <link href=\"{{ theme.uri(\"css/calendar.css\") }}?{{ version }}\" rel=\"stylesheet\" media=\"screen\">
        <link href=\"{{ theme.uri(\"css/override.css\") }}?{{ version }}\" rel=\"stylesheet\" media=\"screen\">
        <link href=\"{{ urlFor(\"library.font.css\") }}\" rel=\"stylesheet\">
        <!-- Copyright 2006-2017 Daniel Garner. Part of the Xibo Open Source Digital Signage Solution. Released under the AGPLv3 or later. -->
        <!-- Please be sure you read this before removing the Source/About links from your theme: http://bit.ly/agplv3 -->
        {% block headContent %}{% endblock %}
    </head>
    <body>
        {% block content %}{% endblock %}

        <script src=\"{{ theme.uri(\"libraries/jquery/jquery-1.11.1.min.js\") }}?{{ version }}\"></script>
        <script src=\"{{ theme.uri(\"libraries/jquery/jquery.validate.min.js\") }}?{{ version }}\"></script>
        <script src=\"{{ theme.uri(\"libraries/jquery/additional-methods.min.js\") }}?{{ version }}\"></script>
        <script src=\"{{ theme.uri(\"libraries/bootstrap/js/bootstrap.min.js\") }}?{{ version }}\"></script>
        <script src=\"{{ theme.uri(\"libraries/bootstrap/js/bootbox.min.js\") }}?{{ version }}\"></script>
        <script src=\"{{ theme.uri(\"libraries/bootstrap-switch/bootstrap-switch.min.js\") }}?{{ version }}\"></script>

        {# Datatables #}
        <script src=\"{{ theme.uri(\"libraries/datatables/jquery.dataTables.min.js\") }}?{{ version }}\"></script>
        <script src=\"{{ theme.uri(\"libraries/datatables/dataTables.bootstrap.js\") }}?{{ version }}\"></script>
        <script src=\"{{ theme.uri(\"libraries/datatables/dataTables.buttons.min.js\") }}?{{ version }}\"></script>
        <script src=\"{{ theme.uri(\"libraries/datatables/buttons.colVis.min.js\") }}?{{ version }}\"></script>
        <script src=\"{{ theme.uri(\"libraries/datatables/buttons.print.min.js\") }}?{{ version }}\"></script>
        <script src=\"{{ theme.uri(\"libraries/datatables/buttons.html5.js\") }}?{{ version }}\"></script>
        <script src=\"{{ theme.uri(\"libraries/datatables/buttons.flash.min.js\") }}?{{ version }}\"></script>

        <script src=\"{{ theme.uri(\"libraries/jquery/jquery-ui/jquery-ui-1.10.2.custom.min.js\") }}?{{ version }}\"></script>
        <script src=\"{{ theme.uri(\"libraries/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js\") }}?{{ version }}\"></script>
        <script src=\"{{ theme.uri(\"libraries/bootstrap-select/js/bootstrap-select.min.js\") }}?{{ version }}\"></script>
        <script src=\"{{ theme.uri(\"libraries/bootstrap-ekko-lightbox/ekko-lightbox.min.js\") }}?{{ version }}\"></script>
        <script src=\"{{ theme.uri(\"libraries/underscore/underscore-min.js\") }}?{{ version }}\"></script>
        <script src=\"{{ theme.uri(\"libraries/jstimezonedetect/jstz.min.js\") }}?{{ version }}\"></script>
        <script src=\"{{ theme.uri(\"libraries/ckeditor/ckeditor.js\") }}?{{ version }}\"></script>
        <script src=\"{{ theme.uri(\"libraries/bootstrap/js/bootstrap-ckeditor-fix.js\") }}?{{ version }}\"></script>
        <script src=\"{{ theme.uri(\"libraries/jquery-file-upload/js/tmpl.min.js\") }}?{{ version }}\"></script>
        <script src=\"{{ theme.uri(\"libraries/jquery-load-image/load-image.all.min.js\") }}?{{ version }}\"></script>
        <script src=\"{{ theme.uri(\"libraries/jquery-file-upload/js/jquery.iframe-transport.js\") }}?{{ version }}\"></script>
        <script src=\"{{ theme.uri(\"libraries/jquery-file-upload/js/jquery.fileupload.js\") }}?{{ version }}\"></script>
        <script src=\"{{ theme.uri(\"libraries/jquery-file-upload/js/jquery.fileupload-process.js\") }}?{{ version }}\"></script>
        <script src=\"{{ theme.uri(\"libraries/jquery-file-upload/js/jquery.fileupload-resize.js\") }}?{{ version }}\"></script>
        <script src=\"{{ theme.uri(\"libraries/jquery-file-upload/js/jquery.fileupload-validate.js\") }}?{{ version }}\"></script>
        <script src=\"{{ theme.uri(\"libraries/jquery-file-upload/js/jquery.fileupload-ui.js\") }}?{{ version }}\"></script>
        <script src=\"{{ theme.uri(\"libraries/jquery-file-upload/js/jquery.fileupload-image.js\") }}?{{ version }}\"></script>
        <script src=\"{{ theme.uri(\"libraries/jquery-file-upload/js/jquery.fileupload-video.js\") }}?{{ version }}\"></script>
        <script src=\"{{ theme.uri(\"libraries/jquery-file-upload/js/jquery.fileupload-audio.js\") }}?{{ version }}\"></script>
        <script src=\"{{ theme.uri(\"libraries/jquery-message-queuing/jquery.ba-jqmq.min.js\") }}?{{ version }}\"></script>
        <script src=\"{{ theme.uri(\"libraries/jquery-throttle-debounce/jquery.ba-throttle-debounce.min.js\") }}?{{ version }}\"></script>
        <script src=\"{{ theme.uri(\"libraries/toastr/toastr.min.js\") }}?{{ version }}\"></script>
        <script src=\"{{ theme.uri(\"libraries/date-time-format.js\") }}?{{ version }}\"></script>
        <script src=\"{{ theme.uri(\"libraries/momentjs/moment.js\") }}?{{ version }}\"></script>
        <script src=\"{{ theme.uri(\"libraries/momentjs/moment-timezone.js\") }}?{{ version }}\"></script>
        <script src=\"{{ theme.uri(\"libraries/morrisjs/raphael.min.js\") }}?{{ version }}\"></script>
        <script src=\"{{ theme.uri(\"libraries/morrisjs/morris.min.js\") }}?{{ version }}\"></script>
        <script src=\"{{ theme.uri(\"libraries/chartjs/Chart.min.js\") }}?{{ version }}\"></script>

        <script src=\"{{ theme.uri(\"libraries/colors/colors.min.js\") }}?{{ version }}\"></script>
        <script src=\"{{ theme.uri(\"js/xibo-cms.js\") }}?{{ version }}\"></script>
        <script src=\"{{ theme.uri(\"js/xibo-forms.js\") }}?{{ version }}\"></script>
        <script src=\"{{ theme.uri(\"js/xibo-preview-timeline.js\") }}?{{ version }}\"></script>
        <script src=\"{{ theme.uri(\"js/xibo-calendar.js\") }}?{{ version }}\"></script>
        <script src=\"{{ theme.uri(\"js/xibo-datasets.js\") }}?{{ version }}\"></script>
        <script src=\"{{ theme.uri(\"libraries/handlebars/handlebars-v3.0.0.js\") }}?{{ version }}\"></script>
        <script src=\"{{ theme.uri(\"libraries/jquery-serialize-object/jquery.serialize-object.min.js\") }}?{{ version }}\"></script>
        <script src=\"{{ theme.uri(\"libraries/bootstrap-tagsinput-master/bootstrap-tagsinput.min.js\") }}?{{ version }}\"></script>
        <script src=\"{{ theme.uri(\"libraries/jquery-timepicker/jquery.timepicker.min.js\") }}?{{ version }}\"></script>
        <script src=\"{{ theme.uri(\"libraries/bootstrap-slider-master/bootstrap-slider.min.js\") }}?{{ version }}\"></script>

        {# Dates #}
        {% if settings.CALENDAR_TYPE == \"Jalali\" %}
            <script src=\"{{ theme.uri(\"libraries/bootstrap-datetimepicker/js/jalali-date.js\") }}?{{ version }}\"></script>
            <script src=\"{{ theme.uri(\"libraries/bootstrap-datetimepicker/js/bootstrap-datetimepicker-jalali.min.js\") }}?{{ version }}\"></script>
            <script src=\"{{ theme.uri(\"libraries/calendar/js/calendar-jalali.js\") }}?{{ version }}\"></script>
            <script src=\"{{ theme.uri(\"libraries/momentjs/moment-jalali.js\") }}?{{ version }}\"></script>
            <script type=\"text/javascript\">
                moment.loadPersian();
            </script>
        {% else %}
            <script src=\"{{ theme.uri(\"libraries/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js\") }}?{{ version }}\"></script>
            <script src=\"{{ theme.uri(\"libraries/calendar/js/calendar.js\") }}?{{ version }}\"></script>
            <script src=\"{{ theme.uri(\"libraries/calendar/js/language/en_GB.js\") }}?{{ version }}\"></script>
        {% endif %}

        {% if translate.jsLocale != 'en-GB' %}
            {# Handle the inclusion of i18n #}
            {% set calendarTranslation %}libraries/calendar/js/language/{{ translate.calendarLanguage }}.js{% endset %}
            <script src=\"{{ theme.uri(calendarTranslation) }}\"></script>
            {% set datePickerTranslation %}libraries/bootstrap-datetimepicker/js/locales/bootstrap-datetimepicker.{{ translate.jsShortLocale }}.js{% endset %}
            <script src=\"{{ theme.uri(datePickerTranslation) }}\"></script>
            {% set selectPickerTranslation %}libraries/bootstrap-select/js/i18n/defaults-{{ translate.boostrapSelectLanguage }}.min.js{% endset %}
            <script src=\"{{ theme.uri(selectPickerTranslation) }}\"></script>
        {% endif %}

        <script type=\"text/javascript\">
            var translations = {{ translations|raw }};
            // Translations we want always available
            {% autoescape \"js\" %}
            translations.withselected = \"{{ \"With Selected\"|trans }}\";
            translations.selectAll = \"{{ \"Select All\"|trans }}\";
            translations.multiselect = \"{{ \"Multiple Items Selected\"|trans }}\";
            translations.multiselectNoItemsMessage = \"{{ \"Sorry, no items have been selected.\"|trans }}\";
            translations.multiselectMessage = \"{{ \"Caution, you have selected %1 items. Clicking save will run the %2 transaction on all these items.\"|trans }}\";
            translations.save = \"{{ \"Save\"|trans }}\";
            translations.cancel = \"{{ \"Cancel\"|trans }}\";
            translations.close = \"{{ \"Close\"|trans }}\";
            translations.success = \"{{ \"Success\"|trans }}\";
            translations.failure = \"{{ \"Failure\"|trans }}\";
            translations.enterText = \"{{ \"Enter text...\"|trans }}\";
            translations.statusPending = \"{{ \"Status Pending\"|trans }}\";
            translations.duplicate = \"{{ \"Duplicate\"|trans }}\";
            translations.spacesWarning = \"{{ \"Warning - starts with or ends with a space, or contains double spaces\"|trans }}\";
            {% endautoescape %}

            var language = \"{{ translate.jsLocale }}\";
            var timezone = \"{{ settings.defaultTimezone }}\";
            var dateFormat = \"{{ settings.DATE_FORMAT }}\";
            var jsDateFormat = \"{{ settings.DATE_FORMAT_JS }}\";
            var timeFormat = \"{{ settings.TIME_FORMAT }}\";
            var jsTimeFormat = \"{{ settings.TIME_FORMAT_JS }}\";
            var systemDateFormat = \"{{ settings.systemDateFormat }}\";
            var systemTimeFormat = \"{{ settings.systemTimeFormat }}\";
            var bootstrapDateFormat = \"{{ settings.DATE_FORMAT_BOOTSTRAP }}\";
            var bootstrapDateFormatDateOnly = \"{{ settings.DATE_FORMAT_BOOTSTRAP_DATEONLY }}\";
            var calendarType = \"{{ settings.CALENDAR_TYPE }}\";
            var clockUrl = \"{{ urlFor(\"clock\") }}\";
            var calendarLanguage = \"{{ translate.calendarLanguage }}\";
            var pingUrl = \"{{ urlFor(\"ping\") }}\";

            {% autoescape \"js\" %}
            var dataTablesLanguage = {
                \"decimal\":        \"\",
                \"emptyTable\":     \"{{ \"No data available in table\"|trans }}\",
                \"info\":           \"{{ \"Showing _START_ to _END_ of _TOTAL_ entries\"|trans }}\",
                \"infoEmpty\":      \"{{ \"Showing 0 to 0 of 0 entries\"|trans }}\",
                \"infoFiltered\":   \"{{ \"(filtered from _MAX_ total entries)\"|trans }}\",
                \"infoPostFix\":    \"\",
                \"thousands\":      \",\",
                \"lengthMenu\":     \"{{ \"Show _MENU_ entries\"|trans }}\",
                \"loadingRecords\": \"{{ \"Loading...\"|trans }}\",
                \"processing\":     \"{{ \"Processing...\"|trans }}\",
                \"search\":         \"{{ \"Search:\"|trans }}\",
                \"zeroRecords\":    \"{{ \"No matching records found\"|trans }}\",
                \"paginate\": {
                    \"first\":      \"{{ \"First\"|trans }}\",
                    \"last\":       \"{{ \"Last\"|trans }}\",
                    \"next\":       \"{{ \"Next\"|trans }}\",
                    \"previous\":   \"{{ \"Previous\"|trans }}\"
                },
                \"aria\": {
                    \"sortAscending\":  \"{{ \": activate to sort column ascending\"|trans }}\",
                    \"sortDescending\": \"{{ \": activate to sort column descending\"|trans }}\"
                }
            };
            {% endautoescape %}

            moment.locale(\"{{ translate.jsLocale }}\");

            \$(function() {
                var csrf_token = \$('meta[name=\"token\"]').attr('content');
                \$.ajaxSetup({
                    headers: {
                        'X-XSRF-TOKEN': csrf_token
                    }
                });
            });

            toastr.options.positionClass = \"toast-bottom-right\";

            // CKEditor default config
            var CKEDITOR_DEFAULT_CONFIG = {
                contentsCss: [ CKEDITOR.getUrl('contents.css'), \"{{ urlFor(\"library.font.css\") }}\" ],
                font_names: '{{ ckeditorConfig }}' + CKEDITOR.config.font_names,
                imageDownloadUrl: \"{{ urlFor(\"library.download\") }}?preview=1\"
            }

        </script>

        {% block javaScriptTemplates %}{% endblock %}
        {% block javaScript %}{% endblock %}
    </body>
</html>", "base.twig", "/var/www/web/views/base.twig");
    }
}
