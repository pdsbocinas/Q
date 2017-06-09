<?php

/* VODBaseBundle:Base/Components/Header:navbar-brand.html.twig */
class __TwigTemplate_6c42e8048604f8bf56d7ad52df80ac1d2b3709395dc43dbfc5de80fc0630869b extends Twig_Template
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
        $__internal_9305981d514143a321fcdf342c54236e289ef5b19f2c05d8db7182067be77a15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9305981d514143a321fcdf342c54236e289ef5b19f2c05d8db7182067be77a15->enter($__internal_9305981d514143a321fcdf342c54236e289ef5b19f2c05d8db7182067be77a15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Base/Components/Header:navbar-brand.html.twig"));

        // line 1
        echo "<a class=\"navbar-brand\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">
\t";
        // line 2
        $this->loadTemplate("VODBaseBundle:Base/Components/Header:logo.html.twig", "VODBaseBundle:Base/Components/Header:navbar-brand.html.twig", 2)->display($context);
        // line 3
        echo "</a>


";
        
        $__internal_9305981d514143a321fcdf342c54236e289ef5b19f2c05d8db7182067be77a15->leave($__internal_9305981d514143a321fcdf342c54236e289ef5b19f2c05d8db7182067be77a15_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Base/Components/Header:navbar-brand.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  27 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<a class=\"navbar-brand\" href=\"{{ path('homepage') }}\">
\t{% include 'VODBaseBundle:Base/Components/Header:logo.html.twig' %}
</a>


", "VODBaseBundle:Base/Components/Header:navbar-brand.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/Base/Components/Header/navbar-brand.html.twig");
    }
}
