<?php

/* layout-preview.twig */
class __TwigTemplate_3e953ece6b3d38957e4e73a2c9ccbf1c789e7fcc560aa331b352c12c64e1bc64 extends Twig_Template
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
        // line 8
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>";
        // line 11
        echo __("Preview for Layout");
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["layout"]) ? $context["layout"] : null), "layoutId", array()), "html", null, true);
        echo "</title>

        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        
        <link rel=\"shortcut icon\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "img/favicon.ico"), "method"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "css/html-preview.css"), "method"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "libraries/font-awesome/css/font-awesome.min.css"), "method"), "html", null, true);
        echo "\" />
        
    </head>
    <body>
        ";
        // line 23
        $this->loadTemplate("layout-preview-partial.twig", "layout-preview.twig", 23)->display(array_merge($context, array("layout" => (isset($context["layout"]) ? $context["layout"] : null), "previewOptions" => (isset($context["previewOptions"]) ? $context["previewOptions"] : null))));
        // line 24
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "libraries/jquery/jquery-1.11.1.min.js"), "method"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "libraries/html5preloader/html5Preloader.js"), "method"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "js/html-preview.js"), "method"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\">
        
            var emptyRegionMessage = \"";
        // line 29
        echo __("Empty Region");
        echo "\"; 
        
            (function(\$){
              \$(document).ready(function(){
                dsInit(";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["layout"]) ? $context["layout"] : null), "layoutId", array()), "html", null, true);
        echo ", ";
        echo twig_jsonencode_filter((isset($context["previewOptions"]) ? $context["previewOptions"] : null));
        echo ", true)
              });
            }(jQuery));
        </script>
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "layout-preview.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 33,  67 => 29,  61 => 26,  57 => 25,  52 => 24,  50 => 23,  43 => 19,  39 => 18,  35 => 17,  24 => 11,  19 => 8,);
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
<!DOCTYPE html>
<html>
    <head>
        <title>{% trans \"Preview for Layout\" %} {{ layout.layoutId }}</title>

        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        
        <link rel=\"shortcut icon\" href=\"{{ theme.uri(\"img/favicon.ico\") }}\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ theme.uri(\"css/html-preview.css\") }}\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ theme.uri(\"libraries/font-awesome/css/font-awesome.min.css\") }}\" />
        
    </head>
    <body>
        {% include 'layout-preview-partial.twig' with {'layout': layout, 'previewOptions': previewOptions} %}
        <script src=\"{{ theme.uri(\"libraries/jquery/jquery-1.11.1.min.js\") }}\"></script>
        <script src=\"{{ theme.uri(\"libraries/html5preloader/html5Preloader.js\") }}\"></script>
        <script src=\"{{ theme.uri(\"js/html-preview.js\") }}\"></script>
        <script type=\"text/javascript\">
        
            var emptyRegionMessage = \"{% trans \"Empty Region\" %}\"; 
        
            (function(\$){
              \$(document).ready(function(){
                dsInit({{ layout.layoutId }}, {{ previewOptions|json_encode()|raw }}, true)
              });
            }(jQuery));
        </script>
    </body>
</html>
", "layout-preview.twig", "/var/www/web/modules/layout-preview.twig");
    }
}
