<?php

/* library-form-delete.twig */
class __TwigTemplate_d02c96b060aba1965d2ebc7591050dde68a64f985f14640353cc1377bd001525 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 10
        $this->parent = $this->loadTemplate("form-base.twig", "library-form-delete.twig", 10);
        $this->blocks = array(
            'formTitle' => array($this, 'block_formTitle'),
            'formButtons' => array($this, 'block_formButtons'),
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
        $context["forms"] = $this->loadTemplate("forms.twig", "library-form-delete.twig", 11);
        // line 10
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_formTitle($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        echo __("Delete Media");
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
        echo __("Yes");
        echo ", \$(\"#libraryDeleteForm\").submit()
";
    }

    // line 23
    public function block_formHtml($context, array $blocks = array())
    {
        // line 24
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <form id=\"libraryDeleteForm\" class=\"XiboForm form-horizontal\" method=\"delete\" action=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("library.delete", array("id" => $this->getAttribute((isset($context["media"]) ? $context["media"] : null), "mediaId", array()))), "html", null, true);
        echo "\">
                ";
        // line 27
        ob_start();
        echo __("Are you sure you want to delete this file?");
        $context["message"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 28
        echo "                ";
        echo $context["forms"]->getmessage((isset($context["message"]) ? $context["message"] : null));
        echo "

                ";
        // line 30
        ob_start();
        echo __("Deleting a file cannot be reversed.");
        $context["message"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 31
        echo "                ";
        echo $context["forms"]->getmessage((isset($context["message"]) ? $context["message"] : null));
        echo "

                ";
        // line 33
        if ($this->getAttribute((isset($context["media"]) ? $context["media"] : null), "isUsed", array(), "method")) {
            // line 34
            echo "
                    ";
            // line 35
            ob_start();
            echo __("Force delete from any existing layouts, assignments, etc");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 36
            echo "                    ";
            ob_start();
            echo __("This library item has been used somewhere in the system. You will only be allowed to delete it if you check this.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 37
            echo "                    ";
            echo $context["forms"]->getcheckbox("forceDelete", (isset($context["title"]) ? $context["title"] : null), 0, (isset($context["helpText"]) ? $context["helpText"] : null));
            echo "

                ";
        }
        // line 40
        echo "
            </form>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "library-form-delete.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 40,  106 => 37,  101 => 36,  97 => 35,  94 => 34,  92 => 33,  86 => 31,  82 => 30,  76 => 28,  72 => 27,  68 => 26,  64 => 24,  61 => 23,  55 => 20,  51 => 19,  44 => 18,  41 => 17,  36 => 14,  33 => 13,  29 => 10,  27 => 11,  11 => 10,);
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
    {% trans \"Delete Media\" %}
{% endblock %}

{% block formButtons %}
    {% trans \"Help\" %}, XiboHelpRender(\"{{ help }}\")
    {% trans \"Cancel\" %}, XiboDialogClose()
    {% trans \"Yes\" %}, \$(\"#libraryDeleteForm\").submit()
{% endblock %}

{% block formHtml %}
    <div class=\"row\">
        <div class=\"col-md-12\">
            <form id=\"libraryDeleteForm\" class=\"XiboForm form-horizontal\" method=\"delete\" action=\"{{ urlFor(\"library.delete\", {\"id\": media.mediaId}) }}\">
                {% set message %}{% trans \"Are you sure you want to delete this file?\" %}{% endset %}
                {{ forms.message(message) }}

                {% set message %}{% trans \"Deleting a file cannot be reversed.\" %}{% endset %}
                {{ forms.message(message) }}

                {% if media.isUsed() %}

                    {% set title %}{% trans \"Force delete from any existing layouts, assignments, etc\" %}{% endset %}
                    {% set helpText %}{% trans \"This library item has been used somewhere in the system. You will only be allowed to delete it if you check this.\" %}{% endset %}
                    {{ forms.checkbox(\"forceDelete\", title, 0, helpText) }}

                {% endif %}

            </form>
        </div>
    </div>
{% endblock %}", "library-form-delete.twig", "/var/www/web/views/library-form-delete.twig");
    }
}
