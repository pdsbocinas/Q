<?php

/* VODBaseBundle:Content/Components:collection.html.twig */
class __TwigTemplate_797d18d808024c9cf259b9e26d9a6de4dd2b3f27a5a795e7d033dc5277a02ea8 extends Twig_Template
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
        $__internal_3e9fb83cf31669ea9e18b45b76c5a415f95288fabc702246fb58bc11d257b02e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e9fb83cf31669ea9e18b45b76c5a415f95288fabc702246fb58bc11d257b02e->enter($__internal_3e9fb83cf31669ea9e18b45b76c5a415f95288fabc702246fb58bc11d257b02e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Content/Components:collection.html.twig"));

        // line 1
        if ( !array_key_exists("isMobile", $context)) {
            // line 2
            echo "    ";
            $context["isMobile"] = $this->env->getExtension('SunCat\MobileDetectBundle\Twig\Extension\MobileDetectExtension')->isMobile();
        }
        // line 4
        if ( !array_key_exists("isTablet", $context)) {
            // line 5
            echo "    ";
            $context["isTablet"] = $this->env->getExtension('SunCat\MobileDetectBundle\Twig\Extension\MobileDetectExtension')->isTablet();
        }
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 8
            echo "    ";
            $this->loadTemplate("VODBaseBundle:Components/Carousel:carousel-item.html.twig", "VODBaseBundle:Content/Components:collection.html.twig", 8)->display($context);
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_3e9fb83cf31669ea9e18b45b76c5a415f95288fabc702246fb58bc11d257b02e->leave($__internal_3e9fb83cf31669ea9e18b45b76c5a415f95288fabc702246fb58bc11d257b02e_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Content/Components:collection.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 8,  34 => 7,  30 => 5,  28 => 4,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if isMobile is not defined %}
    {% set isMobile = is_mobile() %}
{% endif %}
{% if isTablet is not defined %}
    {% set isTablet = is_tablet() %}
{% endif %}
{% for item in content %}
    {% include 'VODBaseBundle:Components/Carousel:carousel-item.html.twig' %}
{% endfor %}", "VODBaseBundle:Content/Components:collection.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/Content/Components/collection.html.twig");
    }
}
