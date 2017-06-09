<?php

/* VODBaseBundle:Components:explore-tags.html.twig */
class __TwigTemplate_cd2694221e5198741c9942c6c82b5dbd28165c9e494603e658b7f8dcd862026e extends Twig_Template
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
        $__internal_40e797b373df076f34439146c829e1538ec883a38ef9a491ced69e824dfb265f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40e797b373df076f34439146c829e1538ec883a38ef9a491ced69e824dfb265f->enter($__internal_40e797b373df076f34439146c829e1538ec883a38ef9a491ced69e824dfb265f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Components:explore-tags.html.twig"));

        // line 1
        echo "<a class=\"genre-item\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">
    <span class=\"label label-default btn-link_alter\">";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.titles.start", array(), "common"), "html", null, true);
        echo "</span>
</a>
";
        // line 4
        $context["cssClass"] = "tag-item";
        // line 5
        $this->loadTemplate("VODBaseBundle:Components:genres.html.twig", "VODBaseBundle:Components:explore-tags.html.twig", 5)->display(array_merge($context, array("cssClass" => (isset($context["cssClass"]) ? $context["cssClass"] : $this->getContext($context, "cssClass")))));
        
        $__internal_40e797b373df076f34439146c829e1538ec883a38ef9a491ced69e824dfb265f->leave($__internal_40e797b373df076f34439146c829e1538ec883a38ef9a491ced69e824dfb265f_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Components:explore-tags.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 5,  32 => 4,  27 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<a class=\"genre-item\" href=\"{{ path('homepage') }}\">
    <span class=\"label label-default btn-link_alter\">{{ 'common.titles.start' | trans({}, 'common') }}</span>
</a>
{% set cssClass = 'tag-item' %}
{% include 'VODBaseBundle:Components:genres.html.twig' with {'cssClass': cssClass} %}", "VODBaseBundle:Components:explore-tags.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/Components/explore-tags.html.twig");
    }
}
