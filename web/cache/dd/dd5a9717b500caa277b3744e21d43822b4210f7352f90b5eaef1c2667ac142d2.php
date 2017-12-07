<?php

/* authed-sidebar.twig */
class __TwigTemplate_72e6c869ac9714d3feb69b66c4bdf59afd5b2d93f15aee1846153bda805a8aeb extends Twig_Template
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
        // line 1
        echo "<div id=\"sidebar-wrapper\">
    <ul class=\"sidebar\">
        <li class=\"sidebar-main\"><a href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("home"), "html", null, true);
        echo "\">";
        echo __("Dashboard");
        echo "</a></li>

        ";
        // line 5
        if ($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "routeViewable", array(0 => "/schedule"), "method")) {
            // line 6
            echo "            <li class=\"sidebar-list\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("schedule.view"), "html", null, true);
            echo "\">";
            echo __("Schedule");
            echo "</a></li>
        ";
        }
        // line 8
        echo "
        ";
        // line 9
        if ($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "routeViewable", array(0 => "/daypart"), "method")) {
            // line 10
            echo "            <li class=\"sidebar-list\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("daypart.view"), "html", null, true);
            echo "\">";
            echo __("Dayparting");
            echo "</a></li>
        ";
        }
        // line 12
        echo "
        ";
        // line 13
        if (((($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "routeViewable", array(0 => "/campaign"), "method") || $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "routeViewable", array(0 => "/layout"), "method")) || $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "routeViewable", array(0 => "/template"), "method")) || $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "routeViewable", array(0 => "/resolution"), "method"))) {
            // line 14
            echo "            <li class=\"sidebar-title\"><a>";
            echo __("Design");
            echo "</a></li>
            ";
            // line 15
            if ($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "routeViewable", array(0 => "/campaign"), "method")) {
                // line 16
                echo "                <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("campaign.view"), "html", null, true);
                echo "\">";
                echo __("Campaigns");
                echo "</a></li>
            ";
            }
            // line 18
            echo "
            ";
            // line 19
            if ($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "routeViewable", array(0 => "/layout"), "method")) {
                // line 20
                echo "                <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("layout.view"), "html", null, true);
                echo "\">";
                echo __("Layouts");
                echo "</a></li>
            ";
            }
            // line 22
            echo "
            ";
            // line 23
            if ($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "routeViewable", array(0 => "/template"), "method")) {
                // line 24
                echo "                <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("template.view"), "html", null, true);
                echo "\">";
                echo __("Templates");
                echo "</a></li>
            ";
            }
            // line 26
            echo "
            ";
            // line 27
            if ($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "routeViewable", array(0 => "/resolution"), "method")) {
                // line 28
                echo "                <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("resolution.view"), "html", null, true);
                echo "\">";
                echo __("Resolutions");
                echo "</a></li>
            ";
            }
            // line 30
            echo "        ";
        }
        // line 31
        echo "
        ";
        // line 32
        if (($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "routeViewable", array(0 => "/library"), "method") || $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "routeViewable", array(0 => "/dataset"), "method"))) {
            // line 33
            echo "            <li class=\"sidebar-title\"><a>";
            echo __("Library");
            echo "</a></li>
            ";
            // line 34
            if ($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "routeViewable", array(0 => "/library"), "method")) {
                // line 35
                echo "                <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("library.view"), "html", null, true);
                echo "\">";
                echo __("Media");
                echo "</a></li>
            ";
            }
            // line 37
            echo "
            ";
            // line 38
            if ($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "routeViewable", array(0 => "/dataset"), "method")) {
                // line 39
                echo "                <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("dataset.view"), "html", null, true);
                echo "\">";
                echo __("DataSets");
                echo "</a></li>
            ";
            }
            // line 41
            echo "        ";
        }
        // line 42
        echo "
        ";
        // line 43
        if (((($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "routeViewable", array(0 => "/display"), "method") || $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "routeViewable", array(0 => "/displaygroup"), "method")) || $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "routeViewable", array(0 => "/stats"), "method")) || $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "routeViewable", array(0 => "/displayprofile"), "method"))) {
            // line 44
            echo "            <li class=\"sidebar-title\"><a>";
            echo __("Displays");
            echo "</a></li>
            ";
            // line 45
            if ($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "routeViewable", array(0 => "/display"), "method")) {
                // line 46
                echo "                <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("display.view"), "html", null, true);
                echo "\">";
                echo __("Displays");
                echo "</a></li>
            ";
            }
            // line 48
            echo "
            ";
            // line 49
            if ($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "routeViewable", array(0 => "/displaygroup"), "method")) {
                // line 50
                echo "                <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("displaygroup.view"), "html", null, true);
                echo "\">";
                echo __("Display Groups");
                echo "</a></li>
            ";
            }
            // line 52
            echo "
            ";
            // line 53
            if ($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "routeViewable", array(0 => "/displayprofile"), "method")) {
                // line 54
                echo "                <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("displayprofile.view"), "html", null, true);
                echo "\">";
                echo __("Display Settings");
                echo "</a></li>
            ";
            }
            // line 56
            echo "
            ";
            // line 57
            if ($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "routeViewable", array(0 => "/command"), "method")) {
                // line 58
                echo "                <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("command.view"), "html", null, true);
                echo "\">";
                echo __("Commands");
                echo "</a></li>
            ";
            }
            // line 60
            echo "        ";
        }
        // line 61
        echo "
        ";
        // line 62
        if (($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "routeViewable", array(0 => "/user"), "method") && ($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "isGroupAdmin", array(), "method") || $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "isSuperAdmin", array(), "method")))) {
            // line 63
            echo "            ";
            $context["userMenuViewable"] = true;
            // line 64
            echo "        ";
        } else {
            // line 65
            echo "            ";
            $context["userMenuViewable"] = false;
            // line 66
            echo "        ";
        }
        // line 67
        echo "
        ";
        // line 68
        if (((((((isset($context["userMenuViewable"]) ? $context["userMenuViewable"] : null) || $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "routeViewable", array(0 => "/usergroup"), "method")) || $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "routeViewable", array(0 => "/admin"), "method")) || $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "routeViewable", array(0 => "/application"), "method")) || $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "routeViewable", array(0 => "/module"), "method")) || $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "routeViewable", array(0 => "/transition"), "method"))) {
            // line 69
            echo "            <li class=\"sidebar-title\"><a>";
            echo __("Administration");
            echo "</a></li>

            ";
            // line 71
            if ((isset($context["userMenuViewable"]) ? $context["userMenuViewable"] : null)) {
                // line 72
                echo "                <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("user.view"), "html", null, true);
                echo "\">";
                echo __("Users");
                echo "</a></li>
            ";
            }
            // line 74
            echo "
            ";
            // line 75
            if ($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "routeViewable", array(0 => "/group"), "method")) {
                // line 76
                echo "                <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("group.view"), "html", null, true);
                echo "\">";
                echo __("User Groups");
                echo "</a></li>
            ";
            }
            // line 78
            echo "
            ";
            // line 79
            if ($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "routeViewable", array(0 => "/admin"), "method")) {
                // line 80
                echo "                <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("admin.view"), "html", null, true);
                echo "\">";
                echo __("Settings");
                echo "</a></li>
            ";
            }
            // line 82
            echo "
            ";
            // line 83
            if ($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "routeViewable", array(0 => "/application"), "method")) {
                // line 84
                echo "                <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("application.view"), "html", null, true);
                echo "\">";
                echo __("Applications");
                echo "</a></li>
            ";
            }
            // line 86
            echo "
            ";
            // line 87
            if ($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "routeViewable", array(0 => "/module"), "method")) {
                // line 88
                echo "                <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("module.view"), "html", null, true);
                echo "\">";
                echo __("Modules");
                echo "</a></li>
            ";
            }
            // line 90
            echo "
            ";
            // line 91
            if ($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "routeViewable", array(0 => "/transition"), "method")) {
                // line 92
                echo "                <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("transition.view"), "html", null, true);
                echo "\">";
                echo __("Transitions");
                echo "</a></li>
            ";
            }
            // line 94
            echo "
            ";
            // line 95
            if ($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "routeViewable", array(0 => "/task"), "method")) {
                // line 96
                echo "                <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("task.view"), "html", null, true);
                echo "\">";
                echo __("Tasks");
                echo "</a></li>
            ";
            }
            // line 98
            echo "        ";
        }
        // line 99
        echo "

        ";
        // line 101
        if ($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "routeViewable", array(0 => "/stats"), "method")) {
            // line 102
            echo "
            <li class=\"sidebar-title\"><a>";
            // line 103
            echo __("Reporting");
            echo "</a></li>

            ";
            // line 105
            if ($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "routeViewable", array(0 => "/stats"), "method")) {
                // line 106
                echo "                <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("stats.view"), "html", null, true);
                echo "\">";
                echo __("Display Statistics");
                echo "</a></li>
            ";
            }
            // line 108
            echo "
            ";
            // line 109
            if ($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "routeViewable", array(0 => "/stats"), "method")) {
                // line 110
                echo "                <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("stats.proofofplay.view"), "html", null, true);
                echo "\">";
                echo __("Proof of Play");
                echo "</a></li>
            ";
            }
            // line 112
            echo "
            ";
            // line 113
            if ($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "routeViewable", array(0 => "/stats"), "method")) {
                // line 114
                echo "                <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("stats.library.view"), "html", null, true);
                echo "\">";
                echo __("Library Usage");
                echo "</a></li>
            ";
            }
            // line 116
            echo "        ";
        }
        // line 117
        echo "
        ";
        // line 118
        if ((((($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "routeViewable", array(0 => "/log"), "method") || $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "routeViewable", array(0 => "/sessions"), "method")) || $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "routeViewable", array(0 => "/auditlog"), "method")) || $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "routeViewable", array(0 => "/fault"), "method")) || $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "routeViewable", array(0 => "/help"), "method"))) {
            // line 119
            echo "            <li class=\"sidebar-title\"><a>";
            echo __("Advanced");
            echo "</a></li>
            ";
            // line 120
            if ($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "routeViewable", array(0 => "/log"), "method")) {
                // line 121
                echo "                <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("log.view"), "html", null, true);
                echo "\">";
                echo __("Log");
                echo "</a></li>
            ";
            }
            // line 123
            echo "
            ";
            // line 124
            if ($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "routeViewable", array(0 => "/sessions"), "method")) {
                // line 125
                echo "                <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("sessions.view"), "html", null, true);
                echo "\">";
                echo __("Sessions");
                echo "</a></li>
            ";
            }
            // line 127
            echo "
            ";
            // line 128
            if ($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "routeViewable", array(0 => "/auditlog"), "method")) {
                // line 129
                echo "                <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("auditlog.view"), "html", null, true);
                echo "\">";
                echo __("Audit Trail");
                echo "</a></li>
            ";
            }
            // line 131
            echo "
            ";
            // line 132
            if ($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "routeViewable", array(0 => "/fault"), "method")) {
                // line 133
                echo "                <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("fault.view"), "html", null, true);
                echo "\">";
                echo __("Report Fault");
                echo "</a></li>
            ";
            }
            // line 135
            echo "
            ";
            // line 136
            if ($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "routeViewable", array(0 => "/help"), "method")) {
                // line 137
                echo "                <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("help.view"), "html", null, true);
                echo "\">";
                echo __("Help Links");
                echo "</a></li>
            ";
            }
            // line 139
            echo "        ";
        }
        // line 140
        echo "    </ul>

    <div class=\"sidebar-footer\">
        <div class=\"col-sm-6\">
            <a class=\"XiboFormButton\" href=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("about"), "html", null, true);
        echo "\" title=\"";
        echo __("About the CMS");
        echo "\">";
        echo __("About");
        echo "</a>
        </div>
        <div class=\"col-sm-6\">
            <a href=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["helpService"]) ? $context["helpService"] : null), "address", array(), "method"), "html", null, true);
        echo "\" target=\"_blank\" title=\"";
        echo __("Open the Manual in a new Window");
        echo "\">";
        echo __("Manual");
        echo "</a>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "authed-sidebar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  476 => 147,  466 => 144,  460 => 140,  457 => 139,  449 => 137,  447 => 136,  444 => 135,  436 => 133,  434 => 132,  431 => 131,  423 => 129,  421 => 128,  418 => 127,  410 => 125,  408 => 124,  405 => 123,  397 => 121,  395 => 120,  390 => 119,  388 => 118,  385 => 117,  382 => 116,  374 => 114,  372 => 113,  369 => 112,  361 => 110,  359 => 109,  356 => 108,  348 => 106,  346 => 105,  341 => 103,  338 => 102,  336 => 101,  332 => 99,  329 => 98,  321 => 96,  319 => 95,  316 => 94,  308 => 92,  306 => 91,  303 => 90,  295 => 88,  293 => 87,  290 => 86,  282 => 84,  280 => 83,  277 => 82,  269 => 80,  267 => 79,  264 => 78,  256 => 76,  254 => 75,  251 => 74,  243 => 72,  241 => 71,  235 => 69,  233 => 68,  230 => 67,  227 => 66,  224 => 65,  221 => 64,  218 => 63,  216 => 62,  213 => 61,  210 => 60,  202 => 58,  200 => 57,  197 => 56,  189 => 54,  187 => 53,  184 => 52,  176 => 50,  174 => 49,  171 => 48,  163 => 46,  161 => 45,  156 => 44,  154 => 43,  151 => 42,  148 => 41,  140 => 39,  138 => 38,  135 => 37,  127 => 35,  125 => 34,  120 => 33,  118 => 32,  115 => 31,  112 => 30,  104 => 28,  102 => 27,  99 => 26,  91 => 24,  89 => 23,  86 => 22,  78 => 20,  76 => 19,  73 => 18,  65 => 16,  63 => 15,  58 => 14,  56 => 13,  53 => 12,  45 => 10,  43 => 9,  40 => 8,  32 => 6,  30 => 5,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"sidebar-wrapper\">
    <ul class=\"sidebar\">
        <li class=\"sidebar-main\"><a href=\"{{ urlFor(\"home\") }}\">{% trans \"Dashboard\" %}</a></li>

        {% if currentUser.routeViewable(\"/schedule\") %}
            <li class=\"sidebar-list\"><a href=\"{{ urlFor(\"schedule.view\") }}\">{% trans \"Schedule\" %}</a></li>
        {% endif %}

        {% if currentUser.routeViewable(\"/daypart\") %}
            <li class=\"sidebar-list\"><a href=\"{{ urlFor(\"daypart.view\") }}\">{% trans \"Dayparting\" %}</a></li>
        {% endif %}

        {% if currentUser.routeViewable(\"/campaign\") or currentUser.routeViewable(\"/layout\") or currentUser.routeViewable(\"/template\") or currentUser.routeViewable(\"/resolution\") %}
            <li class=\"sidebar-title\"><a>{% trans \"Design\" %}</a></li>
            {% if currentUser.routeViewable(\"/campaign\") %}
                <li class=\"sidebar-list\"><a href=\"{{ urlFor(\"campaign.view\") }}\">{% trans \"Campaigns\" %}</a></li>
            {% endif %}

            {% if currentUser.routeViewable(\"/layout\") %}
                <li class=\"sidebar-list\"><a href=\"{{ urlFor(\"layout.view\") }}\">{% trans \"Layouts\" %}</a></li>
            {% endif %}

            {% if currentUser.routeViewable(\"/template\") %}
                <li class=\"sidebar-list\"><a href=\"{{ urlFor(\"template.view\") }}\">{% trans \"Templates\" %}</a></li>
            {% endif %}

            {% if currentUser.routeViewable(\"/resolution\") %}
                <li class=\"sidebar-list\"><a href=\"{{ urlFor(\"resolution.view\") }}\">{% trans \"Resolutions\" %}</a></li>
            {% endif %}
        {% endif %}

        {% if currentUser.routeViewable(\"/library\") or currentUser.routeViewable(\"/dataset\") %}
            <li class=\"sidebar-title\"><a>{% trans \"Library\" %}</a></li>
            {% if currentUser.routeViewable(\"/library\") %}
                <li class=\"sidebar-list\"><a href=\"{{ urlFor(\"library.view\") }}\">{% trans \"Media\" %}</a></li>
            {% endif %}

            {% if currentUser.routeViewable(\"/dataset\") %}
                <li class=\"sidebar-list\"><a href=\"{{ urlFor(\"dataset.view\") }}\">{% trans \"DataSets\" %}</a></li>
            {% endif %}
        {% endif %}

        {% if currentUser.routeViewable(\"/display\") or currentUser.routeViewable(\"/displaygroup\") or currentUser.routeViewable(\"/stats\") or currentUser.routeViewable(\"/displayprofile\") %}
            <li class=\"sidebar-title\"><a>{% trans \"Displays\" %}</a></li>
            {% if currentUser.routeViewable(\"/display\") %}
                <li class=\"sidebar-list\"><a href=\"{{ urlFor(\"display.view\") }}\">{% trans \"Displays\" %}</a></li>
            {% endif %}

            {% if currentUser.routeViewable(\"/displaygroup\") %}
                <li class=\"sidebar-list\"><a href=\"{{ urlFor(\"displaygroup.view\") }}\">{% trans \"Display Groups\" %}</a></li>
            {% endif %}

            {% if currentUser.routeViewable(\"/displayprofile\") %}
                <li class=\"sidebar-list\"><a href=\"{{ urlFor(\"displayprofile.view\") }}\">{% trans \"Display Settings\" %}</a></li>
            {% endif %}

            {% if currentUser.routeViewable(\"/command\") %}
                <li class=\"sidebar-list\"><a href=\"{{ urlFor(\"command.view\") }}\">{% trans \"Commands\" %}</a></li>
            {% endif %}
        {% endif %}

        {% if currentUser.routeViewable(\"/user\") and (currentUser.isGroupAdmin() or currentUser.isSuperAdmin()) %}
            {% set userMenuViewable = true %}
        {% else %}
            {% set userMenuViewable = false %}
        {% endif %}

        {% if userMenuViewable or currentUser.routeViewable(\"/usergroup\") or currentUser.routeViewable(\"/admin\") or currentUser.routeViewable(\"/application\") or currentUser.routeViewable(\"/module\") or currentUser.routeViewable(\"/transition\") %}
            <li class=\"sidebar-title\"><a>{% trans \"Administration\" %}</a></li>

            {% if userMenuViewable %}
                <li class=\"sidebar-list\"><a href=\"{{ urlFor(\"user.view\") }}\">{% trans \"Users\" %}</a></li>
            {% endif %}

            {% if currentUser.routeViewable(\"/group\") %}
                <li class=\"sidebar-list\"><a href=\"{{ urlFor(\"group.view\") }}\">{% trans \"User Groups\" %}</a></li>
            {% endif %}

            {% if currentUser.routeViewable(\"/admin\") %}
                <li class=\"sidebar-list\"><a href=\"{{ urlFor(\"admin.view\") }}\">{% trans \"Settings\" %}</a></li>
            {% endif %}

            {% if currentUser.routeViewable(\"/application\") %}
                <li class=\"sidebar-list\"><a href=\"{{ urlFor(\"application.view\") }}\">{% trans \"Applications\" %}</a></li>
            {% endif %}

            {% if currentUser.routeViewable(\"/module\") %}
                <li class=\"sidebar-list\"><a href=\"{{ urlFor(\"module.view\") }}\">{% trans \"Modules\" %}</a></li>
            {% endif %}

            {% if currentUser.routeViewable(\"/transition\") %}
                <li class=\"sidebar-list\"><a href=\"{{ urlFor(\"transition.view\") }}\">{% trans \"Transitions\" %}</a></li>
            {% endif %}

            {% if currentUser.routeViewable(\"/task\") %}
                <li class=\"sidebar-list\"><a href=\"{{ urlFor(\"task.view\") }}\">{% trans \"Tasks\" %}</a></li>
            {% endif %}
        {% endif %}


        {% if currentUser.routeViewable(\"/stats\") %}

            <li class=\"sidebar-title\"><a>{% trans \"Reporting\" %}</a></li>

            {% if currentUser.routeViewable(\"/stats\") %}
                <li class=\"sidebar-list\"><a href=\"{{ urlFor(\"stats.view\") }}\">{% trans \"Display Statistics\" %}</a></li>
            {% endif %}

            {% if currentUser.routeViewable(\"/stats\") %}
                <li class=\"sidebar-list\"><a href=\"{{ urlFor(\"stats.proofofplay.view\") }}\">{% trans \"Proof of Play\" %}</a></li>
            {% endif %}

            {% if currentUser.routeViewable(\"/stats\") %}
                <li class=\"sidebar-list\"><a href=\"{{ urlFor(\"stats.library.view\") }}\">{% trans \"Library Usage\" %}</a></li>
            {% endif %}
        {% endif %}

        {% if currentUser.routeViewable(\"/log\") or currentUser.routeViewable(\"/sessions\") or currentUser.routeViewable(\"/auditlog\") or currentUser.routeViewable(\"/fault\") or currentUser.routeViewable(\"/help\") %}
            <li class=\"sidebar-title\"><a>{% trans \"Advanced\" %}</a></li>
            {% if currentUser.routeViewable(\"/log\") %}
                <li class=\"sidebar-list\"><a href=\"{{ urlFor(\"log.view\") }}\">{% trans \"Log\" %}</a></li>
            {% endif %}

            {% if currentUser.routeViewable(\"/sessions\") %}
                <li class=\"sidebar-list\"><a href=\"{{ urlFor(\"sessions.view\") }}\">{% trans \"Sessions\" %}</a></li>
            {% endif %}

            {% if currentUser.routeViewable(\"/auditlog\") %}
                <li class=\"sidebar-list\"><a href=\"{{ urlFor(\"auditlog.view\") }}\">{% trans \"Audit Trail\" %}</a></li>
            {% endif %}

            {% if currentUser.routeViewable(\"/fault\") %}
                <li class=\"sidebar-list\"><a href=\"{{ urlFor(\"fault.view\") }}\">{% trans \"Report Fault\" %}</a></li>
            {% endif %}

            {% if currentUser.routeViewable(\"/help\") %}
                <li class=\"sidebar-list\"><a href=\"{{ urlFor(\"help.view\") }}\">{% trans \"Help Links\" %}</a></li>
            {% endif %}
        {% endif %}
    </ul>

    <div class=\"sidebar-footer\">
        <div class=\"col-sm-6\">
            <a class=\"XiboFormButton\" href=\"{{ urlFor(\"about\") }}\" title=\"{% trans \"About the CMS\" %}\">{% trans \"About\" %}</a>
        </div>
        <div class=\"col-sm-6\">
            <a href=\"{{ helpService.address() }}\" target=\"_blank\" title=\"{% trans \"Open the Manual in a new Window\" %}\">{% trans \"Manual\" %}</a>
        </div>
    </div>
</div>", "authed-sidebar.twig", "/var/www/web/views/authed-sidebar.twig");
    }
}
