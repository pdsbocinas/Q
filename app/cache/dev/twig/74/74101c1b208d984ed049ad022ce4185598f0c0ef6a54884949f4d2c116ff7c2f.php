<?php

/* VODBaseBundle:Base/Components/Header:logo-landing.html.twig */
class __TwigTemplate_9f6b872a93f5c5d0d83ca953207be9c32363176659818d150a36778e5a3179eb extends Twig_Template
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
        $__internal_2e9c019836345eca3cf7658337ff2d475140a398249bc8bf628c739dc8b9fc10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e9c019836345eca3cf7658337ff2d475140a398249bc8bf628c739dc8b9fc10->enter($__internal_2e9c019836345eca3cf7658337ff2d475140a398249bc8bf628c739dc8b9fc10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Base/Components/Header:logo-landing.html.twig"));

        // line 1
        echo "<div class=\"logo-landing\">
    <img src=\"";
        // line 2
        echo twig_escape_filter($this->env, ((isset($context["cdn_url"]) ? $context["cdn_url"] : $this->getContext($context, "cdn_url")) . "/common/logo-qubit-blanco.svg"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.titles.site_name", array(), "common"), "html", null, true);
        echo "\">
</div>";
        
        $__internal_2e9c019836345eca3cf7658337ff2d475140a398249bc8bf628c739dc8b9fc10->leave($__internal_2e9c019836345eca3cf7658337ff2d475140a398249bc8bf628c739dc8b9fc10_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Base/Components/Header:logo-landing.html.twig";
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
        return new Twig_Source("<div class=\"logo-landing\">
    <img src=\"{{ cdn_url~'/common/logo-qubit-blanco.svg' }}\" alt=\"{{ 'common.titles.site_name'| trans({}, 'common') }}\">
</div>", "VODBaseBundle:Base/Components/Header:logo-landing.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/Base/Components/Header/logo-landing.html.twig");
    }
}
