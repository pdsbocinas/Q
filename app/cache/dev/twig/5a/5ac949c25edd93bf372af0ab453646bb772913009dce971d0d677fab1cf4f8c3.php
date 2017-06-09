<?php

/* VODBaseBundle:Home/Landings/Sections:welcome-landing-section3.html.twig */
class __TwigTemplate_e5495c34a865c6107e03b69ffd3a97ced35f722836f294ab72e75b0cf178f9fe extends Twig_Template
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
        $__internal_544a11fe3d14d4b9eb2664b0ab15b95e7c155bef75c1937377abc56550c303fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_544a11fe3d14d4b9eb2664b0ab15b95e7c155bef75c1937377abc56550c303fa->enter($__internal_544a11fe3d14d4b9eb2664b0ab15b95e7c155bef75c1937377abc56550c303fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Home/Landings/Sections:welcome-landing-section3.html.twig"));

        // line 1
        echo "<div id=\"section3\" class=\"titles\">
\t<div class=\"box box-top text-right\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<h2>";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("landing.titles.title", array(), "landing");
        echo "</h2>
\t\t\t\t\t<h3>";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("landing.titles.subtitle", array(), "landing");
        echo "</h3>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>";
        
        $__internal_544a11fe3d14d4b9eb2664b0ab15b95e7c155bef75c1937377abc56550c303fa->leave($__internal_544a11fe3d14d4b9eb2664b0ab15b95e7c155bef75c1937377abc56550c303fa_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Home/Landings/Sections:welcome-landing-section3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 7,  29 => 6,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"section3\" class=\"titles\">
\t<div class=\"box box-top text-right\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<h2>{{ 'landing.titles.title' | trans({}, 'landing') | raw }}</h2>
\t\t\t\t\t<h3>{{ 'landing.titles.subtitle' | trans({}, 'landing') | raw }}</h3>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>", "VODBaseBundle:Home/Landings/Sections:welcome-landing-section3.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/Home/Landings/Sections/welcome-landing-section3.html.twig");
    }
}
