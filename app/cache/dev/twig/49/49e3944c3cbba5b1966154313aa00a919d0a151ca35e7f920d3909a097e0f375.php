<?php

/* VODBaseBundle:Home/Landings/Sections:welcome-landing-section2.html.twig */
class __TwigTemplate_4ab981a6a4655c9576fa6847a68d6220b5da80779af0413ebb9b19424e37fca5 extends Twig_Template
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
        $__internal_02282f77a447e015ad8f99dd189600e90cb0faeadab457e266fa1155ede1a2c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02282f77a447e015ad8f99dd189600e90cb0faeadab457e266fa1155ede1a2c0->enter($__internal_02282f77a447e015ad8f99dd189600e90cb0faeadab457e266fa1155ede1a2c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Home/Landings/Sections:welcome-landing-section2.html.twig"));

        // line 1
        echo "<div id=\"section2\" class=\"section\">
\t<img class=\"img-responsive\" src=\"";
        // line 2
        echo twig_escape_filter($this->env, ((isset($context["cdn_url"]) ? $context["cdn_url"] : $this->getContext($context, "cdn_url")) . "/common/banner-festival.jpg"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("landing.section1.title", array(), "landing"), "html", null, true);
        echo "\">
</div>";
        
        $__internal_02282f77a447e015ad8f99dd189600e90cb0faeadab457e266fa1155ede1a2c0->leave($__internal_02282f77a447e015ad8f99dd189600e90cb0faeadab457e266fa1155ede1a2c0_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Home/Landings/Sections:welcome-landing-section2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"section2\" class=\"section\">
\t<img class=\"img-responsive\" src=\"{{ cdn_url~'/common/banner-festival.jpg' }}\" alt=\"{{ 'landing.section1.title' | trans({}, 'landing') }}\">
</div>", "VODBaseBundle:Home/Landings/Sections:welcome-landing-section2.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/Home/Landings/Sections/welcome-landing-section2.html.twig");
    }
}
