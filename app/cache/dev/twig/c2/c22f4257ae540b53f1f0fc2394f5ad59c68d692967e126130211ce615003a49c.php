<?php

/* VODBaseBundle:Home/Landings/Sections:welcome-landing-section6.html.twig */
class __TwigTemplate_6df1067006ac3390cd3d8976a067228419a2cde199613b4a7513a7fbcf786f4a extends Twig_Template
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
        $__internal_206b1f138e57b22442a9e90174ad1678bb3dc2d9ef40344cb385a89c19a12358 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_206b1f138e57b22442a9e90174ad1678bb3dc2d9ef40344cb385a89c19a12358->enter($__internal_206b1f138e57b22442a9e90174ad1678bb3dc2d9ef40344cb385a89c19a12358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Home/Landings/Sections:welcome-landing-section6.html.twig"));

        // line 1
        echo "<div id=\"section6\" class=\"quotes\">
\t<div class=\"container text-left\">
\t\t<div class=\"box\">
\t\t\t<div class=\"col-lg-12\">
\t\t\t\t<h2>";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("landing.nacional.title", array(), "landing");
        echo "</h2>
\t\t\t\t<h3>";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("landing.nacional.subtitle", array(), "landing");
        echo "</h3>
\t\t\t</div>
\t\t</div>\t\t
\t</div>
</div>";
        
        $__internal_206b1f138e57b22442a9e90174ad1678bb3dc2d9ef40344cb385a89c19a12358->leave($__internal_206b1f138e57b22442a9e90174ad1678bb3dc2d9ef40344cb385a89c19a12358_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Home/Landings/Sections:welcome-landing-section6.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 6,  28 => 5,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"section6\" class=\"quotes\">
\t<div class=\"container text-left\">
\t\t<div class=\"box\">
\t\t\t<div class=\"col-lg-12\">
\t\t\t\t<h2>{{ 'landing.nacional.title' | trans({}, 'landing') | raw }}</h2>
\t\t\t\t<h3>{{ 'landing.nacional.subtitle' | trans({}, 'landing') | raw }}</h3>
\t\t\t</div>
\t\t</div>\t\t
\t</div>
</div>", "VODBaseBundle:Home/Landings/Sections:welcome-landing-section6.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/Home/Landings/Sections/welcome-landing-section6.html.twig");
    }
}
