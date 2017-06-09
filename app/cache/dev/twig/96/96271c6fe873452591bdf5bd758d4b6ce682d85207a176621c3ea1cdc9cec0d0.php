<?php

/* VODBaseBundle:Home/Landings/Sections:welcome-landing-section5.html.twig */
class __TwigTemplate_d1f2df12619d88dee08d28ea1e354edfc1bc4ef439e2105b024ef103c2fe839d extends Twig_Template
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
        $__internal_fa4000dc809158afa8310c489466d0bb56b3afe4bcfb85f3ddeb53ef56dd98c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa4000dc809158afa8310c489466d0bb56b3afe4bcfb85f3ddeb53ef56dd98c5->enter($__internal_fa4000dc809158afa8310c489466d0bb56b3afe4bcfb85f3ddeb53ef56dd98c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Home/Landings/Sections:welcome-landing-section5.html.twig"));

        // line 1
        echo "<div id=\"section5\" class=\"section local-movies\">
\t<h2>";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("landing.nacional.tag", array(), "landing");
        echo "</h2>
\t<img class=\"img-responsive\" src=\"";
        // line 3
        echo twig_escape_filter($this->env, ((isset($context["cdn_url"]) ? $context["cdn_url"] : $this->getContext($context, "cdn_url")) . "/common/landing-cine-nacional.png"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("landing.nacional.alt", array(), "landing"), "html", null, true);
        echo "\">
</div>";
        
        $__internal_fa4000dc809158afa8310c489466d0bb56b3afe4bcfb85f3ddeb53ef56dd98c5->leave($__internal_fa4000dc809158afa8310c489466d0bb56b3afe4bcfb85f3ddeb53ef56dd98c5_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Home/Landings/Sections:welcome-landing-section5.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"section5\" class=\"section local-movies\">
\t<h2>{{ 'landing.nacional.tag' | trans({}, 'landing') | raw }}</h2>
\t<img class=\"img-responsive\" src=\"{{ cdn_url~'/common/landing-cine-nacional.png' }}\" alt=\"{{ 'landing.nacional.alt' | trans({}, 'landing') }}\">
</div>", "VODBaseBundle:Home/Landings/Sections:welcome-landing-section5.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/Home/Landings/Sections/welcome-landing-section5.html.twig");
    }
}
