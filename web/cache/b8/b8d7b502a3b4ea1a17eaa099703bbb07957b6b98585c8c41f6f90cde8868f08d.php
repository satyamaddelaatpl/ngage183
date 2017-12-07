<?php

/* form-base.twig */
class __TwigTemplate_6e31ee75feda9f42a1f2cf36ca272a24aa570cdf782390cc7440d5884ae7924c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'formTitle' => array($this, 'block_formTitle'),
            '__internal_9a0c8408edaf4436f523a3353b7662f56b2da2458254e21c284977e4c2ed1173' => array($this, 'block___internal_9a0c8408edaf4436f523a3353b7662f56b2da2458254e21c284977e4c2ed1173'),
            'formHtml' => array($this, 'block_formHtml'),
            '__internal_ca64022d4400c514d319dee73fdf92ea8c00078d3503485c0d9c49a0150d0ea0' => array($this, 'block___internal_ca64022d4400c514d319dee73fdf92ea8c00078d3503485c0d9c49a0150d0ea0'),
            'formButtons' => array($this, 'block_formButtons'),
            '__internal_e32d60c373fbff508a596e9889a96afe9ad4c9d844dda6accc8a20504e4df65a' => array($this, 'block___internal_e32d60c373fbff508a596e9889a96afe9ad4c9d844dda6accc8a20504e4df65a'),
            'formFieldActions' => array($this, 'block_formFieldActions'),
            '__internal_0a85384e423d925cf5628effa27006e34f2834db3358b8aca17468a5b80cb113' => array($this, 'block___internal_0a85384e423d925cf5628effa27006e34f2834db3358b8aca17468a5b80cb113'),
            'callBack' => array($this, 'block_callBack'),
            '__internal_d8bdfbf0404a41c17086e1625b259b960e1d0547929e649cca1003dfeb9ce83b' => array($this, 'block___internal_d8bdfbf0404a41c17086e1625b259b960e1d0547929e649cca1003dfeb9ce83b'),
            'extra' => array($this, 'block_extra'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "{
    \"title\": ";
        // line 2
        echo twig_jsonencode_filter(        $this->renderBlock("__internal_9a0c8408edaf4436f523a3353b7662f56b2da2458254e21c284977e4c2ed1173", $context, $blocks));
        echo ",
    \"html\": ";
        // line 3
        echo twig_jsonencode_filter(        $this->renderBlock("__internal_ca64022d4400c514d319dee73fdf92ea8c00078d3503485c0d9c49a0150d0ea0", $context, $blocks));
        echo ",
    \"buttons\": ";
        // line 4
        echo twig_jsonencode_filter(        $this->renderBlock("__internal_e32d60c373fbff508a596e9889a96afe9ad4c9d844dda6accc8a20504e4df65a", $context, $blocks));
        echo ",
    \"fieldActions\": ";
        // line 5
        echo twig_jsonencode_filter(        $this->renderBlock("__internal_0a85384e423d925cf5628effa27006e34f2834db3358b8aca17468a5b80cb113", $context, $blocks));
        echo ",
    \"callBack\": ";
        // line 6
        echo twig_jsonencode_filter(        $this->renderBlock("__internal_d8bdfbf0404a41c17086e1625b259b960e1d0547929e649cca1003dfeb9ce83b", $context, $blocks));
        echo ",
    \"extra\": ";
        // line 7
        $this->displayBlock('extra', $context, $blocks);
        // line 8
        echo "}";
    }

    // line 2
    public function block_formTitle($context, array $blocks = array())
    {
    }

    public function block___internal_9a0c8408edaf4436f523a3353b7662f56b2da2458254e21c284977e4c2ed1173($context, array $blocks = array())
    {
        $this->displayBlock('formTitle', $context, $blocks);
    }

    // line 3
    public function block_formHtml($context, array $blocks = array())
    {
    }

    public function block___internal_ca64022d4400c514d319dee73fdf92ea8c00078d3503485c0d9c49a0150d0ea0($context, array $blocks = array())
    {
        $this->displayBlock('formHtml', $context, $blocks);
    }

    // line 4
    public function block_formButtons($context, array $blocks = array())
    {
    }

    public function block___internal_e32d60c373fbff508a596e9889a96afe9ad4c9d844dda6accc8a20504e4df65a($context, array $blocks = array())
    {
        $this->displayBlock('formButtons', $context, $blocks);
    }

    // line 5
    public function block_formFieldActions($context, array $blocks = array())
    {
    }

    public function block___internal_0a85384e423d925cf5628effa27006e34f2834db3358b8aca17468a5b80cb113($context, array $blocks = array())
    {
        $this->displayBlock('formFieldActions', $context, $blocks);
    }

    // line 6
    public function block_callBack($context, array $blocks = array())
    {
    }

    public function block___internal_d8bdfbf0404a41c17086e1625b259b960e1d0547929e649cca1003dfeb9ce83b($context, array $blocks = array())
    {
        $this->displayBlock('callBack', $context, $blocks);
    }

    // line 7
    public function block_extra($context, array $blocks = array())
    {
        echo "[]";
    }

    public function getTemplateName()
    {
        return "form-base.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 7,  99 => 6,  89 => 5,  79 => 4,  69 => 3,  59 => 2,  55 => 8,  53 => 7,  49 => 6,  45 => 5,  41 => 4,  37 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
    \"title\": {% filter json_encode|raw %}{% block formTitle %}{% endblock %}{% endfilter %},
    \"html\": {% filter json_encode|raw %}{% block formHtml %}{% endblock %}{% endfilter %},
    \"buttons\": {% filter json_encode|raw %}{% block formButtons %}{% endblock %}{% endfilter %},
    \"fieldActions\": {% filter json_encode|raw %}{% block formFieldActions %}{% endblock %}{% endfilter %},
    \"callBack\": {% filter json_encode|raw %}{% block callBack %}{% endblock %}{% endfilter %},
    \"extra\": {% block extra %}[]{% endblock %}
}", "form-base.twig", "/var/www/web/views/form-base.twig");
    }
}
