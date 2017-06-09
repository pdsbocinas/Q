<?php

/* VODBaseBundle:Home/Landings/Sections:welcome-landing-section4.html.twig */
class __TwigTemplate_3c8e9108e549325ac4f8fb133f73c45b3766aec87ec1383d1a2315d93f5d0e52 extends Twig_Template
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
        $__internal_df08c465eea5deca809b0696f2b51b0cf8f45b38e14762899e4c51a36169c9a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df08c465eea5deca809b0696f2b51b0cf8f45b38e14762899e4c51a36169c9a5->enter($__internal_df08c465eea5deca809b0696f2b51b0cf8f45b38e14762899e4c51a36169c9a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Home/Landings/Sections:welcome-landing-section4.html.twig"));

        // line 1
        echo "<div id=\"section4\" class=\"dispositivos\">
\t<div class=\"container-fluid\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-12\">
\t\t\t\t<h2>";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("landing.dispositivos.title", array(), "landing");
        echo "</h2>
\t\t\t\t<h3>";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("landing.dispositivos.subtitle", array(), "landing");
        echo "</h3>
\t\t\t</div>
\t\t</div>
\t</div>
</div>";
        
        $__internal_df08c465eea5deca809b0696f2b51b0cf8f45b38e14762899e4c51a36169c9a5->leave($__internal_df08c465eea5deca809b0696f2b51b0cf8f45b38e14762899e4c51a36169c9a5_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Home/Landings/Sections:welcome-landing-section4.html.twig";
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
        return new Twig_Source("<div id=\"section4\" class=\"dispositivos\">
\t<div class=\"container-fluid\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-12\">
\t\t\t\t<h2>{{ 'landing.dispositivos.title' | trans({}, 'landing') | raw }}</h2>
\t\t\t\t<h3>{{ 'landing.dispositivos.subtitle' | trans({}, 'landing') | raw }}</h3>
\t\t\t</div>
\t\t</div>
\t</div>
</div>", "VODBaseBundle:Home/Landings/Sections:welcome-landing-section4.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/Home/Landings/Sections/welcome-landing-section4.html.twig");
    }
}
