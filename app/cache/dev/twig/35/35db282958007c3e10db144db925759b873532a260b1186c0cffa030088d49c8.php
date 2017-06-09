<?php

/* VODBaseBundle:Base/Components/Header:navbar-landing.html.twig */
class __TwigTemplate_61d40123cf224ef7bf62f78e166fae96c939cc5ca63e11257f1498d1e132da3e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("VODBaseBundle:Base/Components/Header:navbar.html.twig", "VODBaseBundle:Base/Components/Header:navbar-landing.html.twig", 1);
        $this->blocks = array(
            'navbar_class' => array($this, 'block_navbar_class'),
            'navbar_left' => array($this, 'block_navbar_left'),
            'navbar_right' => array($this, 'block_navbar_right'),
            'navbar_search' => array($this, 'block_navbar_search'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "VODBaseBundle:Base/Components/Header:navbar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b680d69fab0c26b8edda3aea733361302eb726f8c9fe6250cacfba9b585c3a18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b680d69fab0c26b8edda3aea733361302eb726f8c9fe6250cacfba9b585c3a18->enter($__internal_b680d69fab0c26b8edda3aea733361302eb726f8c9fe6250cacfba9b585c3a18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Base/Components/Header:navbar-landing.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b680d69fab0c26b8edda3aea733361302eb726f8c9fe6250cacfba9b585c3a18->leave($__internal_b680d69fab0c26b8edda3aea733361302eb726f8c9fe6250cacfba9b585c3a18_prof);

    }

    // line 5
    public function block_navbar_class($context, array $blocks = array())
    {
        $__internal_ea8c3c4fe272a6fdd6d5a315fc84946231ca1b439e06f004bfec8580edab668e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea8c3c4fe272a6fdd6d5a315fc84946231ca1b439e06f004bfec8580edab668e->enter($__internal_ea8c3c4fe272a6fdd6d5a315fc84946231ca1b439e06f004bfec8580edab668e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_class"));

        echo "class=\"navbar navbar-fixed-top navbar-short\"";
        
        $__internal_ea8c3c4fe272a6fdd6d5a315fc84946231ca1b439e06f004bfec8580edab668e->leave($__internal_ea8c3c4fe272a6fdd6d5a315fc84946231ca1b439e06f004bfec8580edab668e_prof);

    }

    // line 7
    public function block_navbar_left($context, array $blocks = array())
    {
        $__internal_24dc3cc59fec2dd31b55340d4956f60dff9078cbe957b2942ee70b74d7435fa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24dc3cc59fec2dd31b55340d4956f60dff9078cbe957b2942ee70b74d7435fa5->enter($__internal_24dc3cc59fec2dd31b55340d4956f60dff9078cbe957b2942ee70b74d7435fa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_left"));

        
        $__internal_24dc3cc59fec2dd31b55340d4956f60dff9078cbe957b2942ee70b74d7435fa5->leave($__internal_24dc3cc59fec2dd31b55340d4956f60dff9078cbe957b2942ee70b74d7435fa5_prof);

    }

    // line 10
    public function block_navbar_right($context, array $blocks = array())
    {
        $__internal_5abb85cfaa02be369e01f91c8aef44574b4509d6f739b4d4071bcfd00fac176c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5abb85cfaa02be369e01f91c8aef44574b4509d6f739b4d4071bcfd00fac176c->enter($__internal_5abb85cfaa02be369e01f91c8aef44574b4509d6f739b4d4071bcfd00fac176c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_right"));

        
        $__internal_5abb85cfaa02be369e01f91c8aef44574b4509d6f739b4d4071bcfd00fac176c->leave($__internal_5abb85cfaa02be369e01f91c8aef44574b4509d6f739b4d4071bcfd00fac176c_prof);

    }

    // line 13
    public function block_navbar_search($context, array $blocks = array())
    {
        $__internal_ec35f45bb57a0b553f80c489107ccf8a15eab31bc2895f1a2e2037eb6cfd7af2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec35f45bb57a0b553f80c489107ccf8a15eab31bc2895f1a2e2037eb6cfd7af2->enter($__internal_ec35f45bb57a0b553f80c489107ccf8a15eab31bc2895f1a2e2037eb6cfd7af2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_search"));

        
        $__internal_ec35f45bb57a0b553f80c489107ccf8a15eab31bc2895f1a2e2037eb6cfd7af2->leave($__internal_ec35f45bb57a0b553f80c489107ccf8a15eab31bc2895f1a2e2037eb6cfd7af2_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Base/Components/Header:navbar-landing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 13,  60 => 10,  49 => 7,  37 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'VODBaseBundle:Base/Components/Header:navbar.html.twig' %}

{# Navbar que se usa en landing y un par de paginas mas para que solo muestren el logo, y los botones de ingresar y registro y el de centro de ayuda #}

{% block navbar_class %}class=\"navbar navbar-fixed-top navbar-short\"{% endblock navbar_class %}

{% block navbar_left %}
{% endblock navbar_left %}

{% block navbar_right %}
{% endblock navbar_right %}

{% block navbar_search %}
{% endblock navbar_search %}
", "VODBaseBundle:Base/Components/Header:navbar-landing.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/Base/Components/Header/navbar-landing.html.twig");
    }
}
