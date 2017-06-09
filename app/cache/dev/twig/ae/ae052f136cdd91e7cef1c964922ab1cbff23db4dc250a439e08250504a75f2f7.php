<?php

/* VODBaseBundle:Base/Wrappers:wrapper-landing.html.twig */
class __TwigTemplate_0c68b47089de0e4780c2209233a991458e6a2ce2544d6a0d7b0fd59de04599b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("VODBaseBundle:Base:base.html.twig", "VODBaseBundle:Base/Wrappers:wrapper-landing.html.twig", 1);
        $this->blocks = array(
            'header_container' => array($this, 'block_header_container'),
            'footer_container' => array($this, 'block_footer_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "VODBaseBundle:Base:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bcbbef83823d5f4e1917946625652a1dba61f1395dbe43407ec07a23c45088e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcbbef83823d5f4e1917946625652a1dba61f1395dbe43407ec07a23c45088e1->enter($__internal_bcbbef83823d5f4e1917946625652a1dba61f1395dbe43407ec07a23c45088e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Base/Wrappers:wrapper-landing.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bcbbef83823d5f4e1917946625652a1dba61f1395dbe43407ec07a23c45088e1->leave($__internal_bcbbef83823d5f4e1917946625652a1dba61f1395dbe43407ec07a23c45088e1_prof);

    }

    // line 3
    public function block_header_container($context, array $blocks = array())
    {
        $__internal_204294a4e499b58485620946757e048c1e1d1e57e1fef7df31de2883e968aee4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_204294a4e499b58485620946757e048c1e1d1e57e1fef7df31de2883e968aee4->enter($__internal_204294a4e499b58485620946757e048c1e1d1e57e1fef7df31de2883e968aee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_container"));

        // line 4
        echo "    ";
        $this->loadTemplate("VODBaseBundle:Base/Components/Header:navbar-landing.html.twig", "VODBaseBundle:Base/Wrappers:wrapper-landing.html.twig", 4)->display($context);
        
        $__internal_204294a4e499b58485620946757e048c1e1d1e57e1fef7df31de2883e968aee4->leave($__internal_204294a4e499b58485620946757e048c1e1d1e57e1fef7df31de2883e968aee4_prof);

    }

    // line 7
    public function block_footer_container($context, array $blocks = array())
    {
        $__internal_e9be08e810f29c5a883438ea4ccb5e06598cc810d50fbd35ada574054e72f508 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9be08e810f29c5a883438ea4ccb5e06598cc810d50fbd35ada574054e72f508->enter($__internal_e9be08e810f29c5a883438ea4ccb5e06598cc810d50fbd35ada574054e72f508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer_container"));

        // line 8
        echo "    ";
        $this->loadTemplate("VODBaseBundle:Base/Components/Footer:footer.html.twig", "VODBaseBundle:Base/Wrappers:wrapper-landing.html.twig", 8)->display($context);
        
        $__internal_e9be08e810f29c5a883438ea4ccb5e06598cc810d50fbd35ada574054e72f508->leave($__internal_e9be08e810f29c5a883438ea4ccb5e06598cc810d50fbd35ada574054e72f508_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Base/Wrappers:wrapper-landing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'VODBaseBundle:Base:base.html.twig' %}

{% block header_container %}
    {% include 'VODBaseBundle:Base/Components/Header:navbar-landing.html.twig' %}
{% endblock header_container %}

{% block footer_container %}
    {% include 'VODBaseBundle:Base/Components/Footer:footer.html.twig' %}
{% endblock footer_container %}

", "VODBaseBundle:Base/Wrappers:wrapper-landing.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/Base/Wrappers/wrapper-landing.html.twig");
    }
}
