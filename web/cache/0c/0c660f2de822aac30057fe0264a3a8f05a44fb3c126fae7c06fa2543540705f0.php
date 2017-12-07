<?php

/* playlist-form-library-assign.twig */
class __TwigTemplate_dad12c3821f06fa1c19302544c2a265345051ae9457a1991721f9cdfe9ec4d10 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 10
        $this->parent = $this->loadTemplate("form-base.twig", "playlist-form-library-assign.twig", 10);
        $this->blocks = array(
            'formTitle' => array($this, 'block_formTitle'),
            'formButtons' => array($this, 'block_formButtons'),
            'callBack' => array($this, 'block_callBack'),
            'formHtml' => array($this, 'block_formHtml'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form-base.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        $context["inline"] = $this->loadTemplate("inline.twig", "playlist-form-library-assign.twig", 11);
        // line 10
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_formTitle($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        echo __("Assign an item from the Library");
    }

    // line 17
    public function block_formButtons($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        echo __("Help");
        echo ", XiboHelpRender(\"";
        echo twig_escape_filter($this->env, (isset($context["help"]) ? $context["help"] : null), "html", null, true);
        echo "\")
    ";
        // line 19
        echo __("Cancel");
        echo ", XiboDialogClose()
    ";
        // line 20
        echo __("Save");
        echo ", LibraryAssignSubmit(";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["playlist"]) ? $context["playlist"] : null), "playlistId", array()), "html", null, true);
        echo ")
";
    }

    // line 23
    public function block_callBack($context, array $blocks = array())
    {
        echo "mediaFormCallBack";
    }

    // line 25
    public function block_formHtml($context, array $blocks = array())
    {
        // line 26
        echo "    <div class=\"row\">
        <div class=\"col-md-9\">
            <div id=\"libraryAssignFilterOptions\">
                <form onsubmit=\"false\">
                    ";
        // line 30
        echo $context["inline"]->gethidden("retired", 0);
        echo "
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            ";
        // line 33
        ob_start();
        echo __("Name");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 34
        echo "                            ";
        echo $context["inline"]->getinput("media", (isset($context["title"]) ? $context["title"] : null));
        echo "
                        </div>
                        <div class=\"col-md-6\">
                            ";
        // line 37
        ob_start();
        echo __("Type");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 38
        echo "                            ";
        echo $context["inline"]->getdropdown("type", "single", (isset($context["title"]) ? $context["title"] : null), "", twig_array_merge(array(0 => array("type" => null, "name" => "")), (isset($context["modules"]) ? $context["modules"] : null)), "type", "name");
        echo "
                        </div>
                    </div>
                </form>
            </div>
            <div class=\"XiboGrid\" id=\"";
        // line 43
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\">
                <div class=\"XiboData\">
                    <table id=\"mediaAssignments\" class=\"table table-striped\">
                        <thead>
                        <tr>
                            <th>";
        // line 48
        echo __("ID");
        echo "</th>
                            <th>";
        // line 49
        echo __("Name");
        echo "</th>
                            <th>";
        // line 50
        echo __("Type");
        echo "</th>
                            <th>";
        // line 51
        echo __("Thumbnail");
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
        <div class=\"col-md-3\">
            <div id=\"LibraryAssign\" class=\"well\" data-url=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("playlist.library.assign", array("id" => $this->getAttribute((isset($context["playlist"]) ? $context["playlist"] : null), "playlistId", array()))), "html", null, true);
        echo "\">
                <h4>";
        // line 64
        echo __("Assignments");
        echo "</h4>
                <div>
                    <ul id=\"LibraryAssignSortable\">
                        ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["media"]) ? $context["media"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 68
            echo "                            <li id=\"MediaID_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "mediaId", array()), "html", null, true);
            echo "\" class=\"li-sortable\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
            echo "<span class=\"glyphicon glyphicon-minus-sign\"></span></li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "                    </ul>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "playlist-form-library-assign.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 70,  158 => 68,  154 => 67,  148 => 64,  144 => 63,  129 => 51,  125 => 50,  121 => 49,  117 => 48,  109 => 43,  100 => 38,  96 => 37,  89 => 34,  85 => 33,  79 => 30,  73 => 26,  70 => 25,  64 => 23,  56 => 20,  52 => 19,  45 => 18,  42 => 17,  37 => 14,  34 => 13,  30 => 10,  28 => 11,  11 => 10,);
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
{% import \"inline.twig\" as inline %}

{% block formTitle %}
    {% trans \"Assign an item from the Library\" %}
{% endblock %}

{% block formButtons %}
    {% trans \"Help\" %}, XiboHelpRender(\"{{ help }}\")
    {% trans \"Cancel\" %}, XiboDialogClose()
    {% trans \"Save\" %}, LibraryAssignSubmit({{ playlist.playlistId }})
{% endblock %}

{% block callBack %}mediaFormCallBack{% endblock %}

{% block formHtml %}
    <div class=\"row\">
        <div class=\"col-md-9\">
            <div id=\"libraryAssignFilterOptions\">
                <form onsubmit=\"false\">
                    {{ inline.hidden(\"retired\", 0) }}
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            {% set title %}{% trans \"Name\" %}{% endset %}
                            {{ inline.input(\"media\", title) }}
                        </div>
                        <div class=\"col-md-6\">
                            {% set title %}{% trans \"Type\" %}{% endset %}
                            {{ inline.dropdown(\"type\", \"single\", title, \"\", [{type: null, name: \"\"}]|merge(modules), \"type\", \"name\") }}
                        </div>
                    </div>
                </form>
            </div>
            <div class=\"XiboGrid\" id=\"{{ random() }}\">
                <div class=\"XiboData\">
                    <table id=\"mediaAssignments\" class=\"table table-striped\">
                        <thead>
                        <tr>
                            <th>{% trans \"ID\" %}</th>
                            <th>{% trans \"Name\" %}</th>
                            <th>{% trans \"Type\" %}</th>
                            <th>{% trans \"Thumbnail\" %}</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div id=\"LibraryAssign\" class=\"well\" data-url=\"{{ urlFor(\"playlist.library.assign\", {id: playlist.playlistId}) }}\">
                <h4>{% trans \"Assignments\" %}</h4>
                <div>
                    <ul id=\"LibraryAssignSortable\">
                        {% for item in media %}
                            <li id=\"MediaID_{{ item.mediaId }}\" class=\"li-sortable\">{{ item.name }}<span class=\"glyphicon glyphicon-minus-sign\"></span></li>
                        {% endfor %}
                    </ul>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "playlist-form-library-assign.twig", "/var/www/web/views/playlist-form-library-assign.twig");
    }
}
