<?php

/* get-resource.twig */
class __TwigTemplate_826a037abae3d83ee0ce1cf3e1837be1b7cf644b8ad56064aab6b53071442ee2 extends Twig_Template
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
        echo "<!doctype html>
<html lang=\"en\">
<head>
    <title>Xibo Open Source Digital Signage</title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <meta name=\"viewport\" content=\"width=";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["viewPortWidth"]) ? $context["viewPortWidth"] : null), "html", null, true);
        echo "\" />
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
    <!-- Copyright 2006-2017 Spring Signage Ltd. Part of the Xibo Open Source Digital Signage Solution. Released under the AGPLv3 or later. -->
    <style type=\"text/css\">
        body {
            margin: 0;
            overflow: hidden;
            font-family: sans-serif, Arial, Verdana, \"Trebuchet MS\";
        }
        h1, h2, h3, h4, p {
            margin-top: 0;
        }
        #iframe {
            border: 0;
        }
        .cycle-slide p, p.cycle-slide {
            margin-bottom:0;
        }
    </style>
    ";
        // line 32
        echo (isset($context["styleSheet"]) ? $context["styleSheet"] : null);
        echo "
    ";
        // line 33
        echo (isset($context["head"]) ? $context["head"] : null);
        echo "
</head>
<!--[if lt IE 7 ]><body class=\"ie6\"><![endif]-->
<!--[if IE 7 ]><body class=\"ie7\"><![endif]-->
<!--[if IE 8 ]><body class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><body class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><body><!--<![endif]-->
<div id=\"content\">";
        // line 40
        echo (isset($context["body"]) ? $context["body"] : null);
        echo "</div>
</body>
";
        // line 42
        echo (isset($context["javaScript"]) ? $context["javaScript"] : null);
        echo "
</html>
";
        // line 44
        echo (isset($context["controlMeta"]) ? $context["controlMeta"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "get-resource.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 44,  67 => 42,  62 => 40,  52 => 33,  48 => 32,  26 => 13,  19 => 8,);
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
<!doctype html>
<html lang=\"en\">
<head>
    <title>Xibo Open Source Digital Signage</title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <meta name=\"viewport\" content=\"width={{ viewPortWidth }}\" />
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
    <!-- Copyright 2006-2017 Spring Signage Ltd. Part of the Xibo Open Source Digital Signage Solution. Released under the AGPLv3 or later. -->
    <style type=\"text/css\">
        body {
            margin: 0;
            overflow: hidden;
            font-family: sans-serif, Arial, Verdana, \"Trebuchet MS\";
        }
        h1, h2, h3, h4, p {
            margin-top: 0;
        }
        #iframe {
            border: 0;
        }
        .cycle-slide p, p.cycle-slide {
            margin-bottom:0;
        }
    </style>
    {{ styleSheet|raw }}
    {{ head|raw }}
</head>
<!--[if lt IE 7 ]><body class=\"ie6\"><![endif]-->
<!--[if IE 7 ]><body class=\"ie7\"><![endif]-->
<!--[if IE 8 ]><body class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><body class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><body><!--<![endif]-->
<div id=\"content\">{{ body|raw }}</div>
</body>
{{ javaScript|raw }}
</html>
{{ controlMeta|raw }}
", "get-resource.twig", "/var/www/web/modules/get-resource.twig");
    }
}
