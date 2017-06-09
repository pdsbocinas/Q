<?php

/* VODBaseBundle:New/Components:canonical-header.html.twig */
class __TwigTemplate_a254787eac38ca2266a13226232797ec216f1ba83564bbe941c0d0bfd1f53c3c extends Twig_Template
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
        $__internal_714b1c99c6ba1466482d8640438b69d2ecf58d52a0f84b51c38d997722fca857 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_714b1c99c6ba1466482d8640438b69d2ecf58d52a0f84b51c38d997722fca857->enter($__internal_714b1c99c6ba1466482d8640438b69d2ecf58d52a0f84b51c38d997722fca857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:New/Components:canonical-header.html.twig"));

        // line 1
        $context["url"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method"));
        // line 2
        echo "
";
        // line 4
        $this->loadTemplate("VODBaseBundle:New/Components:canonical.html.twig", "VODBaseBundle:New/Components:canonical-header.html.twig", 4)->display($context);
        // line 5
        echo "
";
        // line 7
        $this->loadTemplate("VODBaseBundle:New/Components:canonical-alternate-list.html.twig", "VODBaseBundle:New/Components:canonical-header.html.twig", 7)->display($context);
        
        $__internal_714b1c99c6ba1466482d8640438b69d2ecf58d52a0f84b51c38d997722fca857->leave($__internal_714b1c99c6ba1466482d8640438b69d2ecf58d52a0f84b51c38d997722fca857_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:New/Components:canonical-header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 7,  29 => 5,  27 => 4,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set url = path(app.request.attributes.get('_route'), app.request.attributes.get('_route_params')) %}

{# Este cambia en todos los operadores y se debe sobreescribir #}
{% include 'VODBaseBundle:New/Components:canonical.html.twig' %}

{# Listado de canonicals que se mantiene en todos los operadores #}
{% include 'VODBaseBundle:New/Components:canonical-alternate-list.html.twig' %}", "VODBaseBundle:New/Components:canonical-header.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/New/Components/canonical-header.html.twig");
    }
}
