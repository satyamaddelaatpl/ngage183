<?php

/* layout-preview-partial.twig */
class __TwigTemplate_1ff6051e15080e40e06320f3c397c36bfa27d85da1d756d0649b0930e1d953b4 extends Twig_Template
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
        echo "<div id=\"player_";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["layout"]) ? $context["layout"] : null), "layoutId", array()), "html", null, true);
        echo "\" class=\"preview-player\">
    <div id=\"info_";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["layout"]) ? $context["layout"] : null), "layoutId", array()), "html", null, true);
        echo "\" class=\"preview-info\"></div>
    <div id=\"log_";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["layout"]) ? $context["layout"] : null), "layoutId", array()), "html", null, true);
        echo "\" class=\"preview-log\"></div>
    <div id=\"screen_";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["layout"]) ? $context["layout"] : null), "layoutId", array()), "html", null, true);
        echo "\" class=\"preview-screen\">
        <div id=\"splash_";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["layout"]) ? $context["layout"] : null), "layoutId", array()), "html", null, true);
        echo "\" class=\"preview-splash\">
            <div id=\"loader_";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["layout"]) ? $context["layout"] : null), "layoutId", array()), "html", null, true);
        echo "\" class=\"preview-loader\"></div>
            <div id=\"loaderCaption_";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["layout"]) ? $context["layout"] : null), "layoutId", array()), "html", null, true);
        echo "\" class=\"preview-loaderCaption\">
                <p>";
        // line 8
        echo __("Loading Layout...");
        echo "</p>
            </div>
        </div>
        <div id=\"end_";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["layout"]) ? $context["layout"] : null), "layoutId", array()), "html", null, true);
        echo "\" class=\"preview-end\"><a href=\"javascript:history.go(0)\" style=\"text-decoration: none; color: #ffffff\">";
        echo __("Play again?");
        echo "</a></div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "layout-preview-partial.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 11,  48 => 8,  44 => 7,  40 => 6,  36 => 5,  32 => 4,  28 => 3,  24 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"player_{{layout.layoutId}}\" class=\"preview-player\">
    <div id=\"info_{{layout.layoutId}}\" class=\"preview-info\"></div>
    <div id=\"log_{{layout.layoutId}}\" class=\"preview-log\"></div>
    <div id=\"screen_{{layout.layoutId}}\" class=\"preview-screen\">
        <div id=\"splash_{{layout.layoutId}}\" class=\"preview-splash\">
            <div id=\"loader_{{layout.layoutId}}\" class=\"preview-loader\"></div>
            <div id=\"loaderCaption_{{layout.layoutId}}\" class=\"preview-loaderCaption\">
                <p>{% trans \"Loading Layout...\" %}</p>
            </div>
        </div>
        <div id=\"end_{{layout.layoutId}}\" class=\"preview-end\"><a href=\"javascript:history.go(0)\" style=\"text-decoration: none; color: #ffffff\">{% trans \"Play again?\" %}</a></div>
    </div>
</div>

", "layout-preview-partial.twig", "/var/www/web/views/layout-preview-partial.twig");
    }
}
