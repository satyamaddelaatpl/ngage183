<?php

/* not-found.twig */
class __TwigTemplate_2e6006fefa808dec423545bec7749cfc1a17194d6d73b4d2cfc816d1e33cd845 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 8
        $this->parent = $this->loadTemplate("non-authed.twig", "not-found.twig", 8);
        $this->blocks = array(
            'pageContent' => array($this, 'block_pageContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "non-authed.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 10
    public function block_pageContent($context, array $blocks = array())
    {
        // line 11
        echo "
    <div class=\"widget\">
        <div class=\"widget-title\">";
        // line 13
        echo __("Page not found");
        echo "</div>
        <div class=\"widget-body\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <p>";
        // line 17
        echo __("Sorry we could not find that page. Please check your URL or press back in your browser");
        echo "</p>
                    ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "globalError", array()), "html", null, true);
        echo "
                    ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "message", array()), "html", null, true);
        echo "
                </div>
            </div>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "not-found.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 19,  46 => 18,  42 => 17,  35 => 13,  31 => 11,  28 => 10,  11 => 8,);
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
{% extends \"non-authed.twig\" %}

{% block pageContent %}

    <div class=\"widget\">
        <div class=\"widget-title\">{% trans \"Page not found\" %}</div>
        <div class=\"widget-body\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <p>{% trans \"Sorry we could not find that page. Please check your URL or press back in your browser\" %}</p>
                    {{ flash.globalError }}
                    {{ flash.message }}
                </div>
            </div>
        </div>
    </div>

{% endblock %}", "not-found.twig", "/var/www/web/views/not-found.twig");
    }
}
