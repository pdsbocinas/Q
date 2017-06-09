<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b8e122b769231c8471b0c08fbd3b245b440ecf1f97569a15f7796c747be20ee7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_103bb40385528ca2efe6f63776bb939b0067c7c1552354e014a73fa0ee35ece5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_103bb40385528ca2efe6f63776bb939b0067c7c1552354e014a73fa0ee35ece5->enter($__internal_103bb40385528ca2efe6f63776bb939b0067c7c1552354e014a73fa0ee35ece5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_103bb40385528ca2efe6f63776bb939b0067c7c1552354e014a73fa0ee35ece5->leave($__internal_103bb40385528ca2efe6f63776bb939b0067c7c1552354e014a73fa0ee35ece5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_14e603d64999eeea1e94af9d0c03a5da51b98763037858a2c8db32adaff567ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14e603d64999eeea1e94af9d0c03a5da51b98763037858a2c8db32adaff567ad->enter($__internal_14e603d64999eeea1e94af9d0c03a5da51b98763037858a2c8db32adaff567ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_14e603d64999eeea1e94af9d0c03a5da51b98763037858a2c8db32adaff567ad->leave($__internal_14e603d64999eeea1e94af9d0c03a5da51b98763037858a2c8db32adaff567ad_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_20a4cb91ee58fdf22f319a9501f99d51f16a0715b72d66d1fad3e566f4733604 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20a4cb91ee58fdf22f319a9501f99d51f16a0715b72d66d1fad3e566f4733604->enter($__internal_20a4cb91ee58fdf22f319a9501f99d51f16a0715b72d66d1fad3e566f4733604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_20a4cb91ee58fdf22f319a9501f99d51f16a0715b72d66d1fad3e566f4733604->leave($__internal_20a4cb91ee58fdf22f319a9501f99d51f16a0715b72d66d1fad3e566f4733604_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5365376ee759e5cfef8a281e9581f05e29a1e7863cf6e4e4983ee88e3d971c19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5365376ee759e5cfef8a281e9581f05e29a1e7863cf6e4e4983ee88e3d971c19->enter($__internal_5365376ee759e5cfef8a281e9581f05e29a1e7863cf6e4e4983ee88e3d971c19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5365376ee759e5cfef8a281e9581f05e29a1e7863cf6e4e4983ee88e3d971c19->leave($__internal_5365376ee759e5cfef8a281e9581f05e29a1e7863cf6e4e4983ee88e3d971c19_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
