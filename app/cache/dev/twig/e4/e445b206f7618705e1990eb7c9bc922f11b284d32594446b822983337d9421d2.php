<?php

/* VODBaseBundle:Base/Components/Forms:search.html.twig */
class __TwigTemplate_6d2bdb6819838ad8025c69dd38851ff35754fb3f41afe578c28959fd3020b1b2 extends Twig_Template
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
        $__internal_47753e1c3f9f30152cea667c9201259aeaf546c58c8af54fb158e22974a6ba74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47753e1c3f9f30152cea667c9201259aeaf546c58c8af54fb158e22974a6ba74->enter($__internal_47753e1c3f9f30152cea667c9201259aeaf546c58c8af54fb158e22974a6ba74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Base/Components/Forms:search.html.twig"));

        // line 1
        echo "<div class=\"block-group-filter\">
\t<div class=\"btn-group-filter\" role=\"group\" aria-label=\"...\">
\t    <a href=\"#\" id=\"btn-search-movie\" class=\"smoothing btn btn-default-filter border-filter-left show\" data-filter=\"content_search\" data-key=\"movie\">Películas</a>
\t    <a href=\"#\" id=\"btn-search-directors\" class=\"smoothing btn btn-default-filter borde-left\" data-filter=\"search_directors\" data-key=\"directors\">Directores</a>
\t    <a href=\"#\" id=\"btn-search-actors\" class=\"smoothing btn btn-default-filter borde-left\" data-filter=\"search_stars\" data-key=\"stars\">Actores</a>
\t    <a href=\"#\" id=\"btn-search-tags\" class=\"smoothing btn btn-default-filter borde-left border-filter-right\" data-filter=\"search_tags\" data-key=\"tags\">Tags</a>
\t</div>
</div>";
        
        $__internal_47753e1c3f9f30152cea667c9201259aeaf546c58c8af54fb158e22974a6ba74->leave($__internal_47753e1c3f9f30152cea667c9201259aeaf546c58c8af54fb158e22974a6ba74_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Base/Components/Forms:search.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"block-group-filter\">
\t<div class=\"btn-group-filter\" role=\"group\" aria-label=\"...\">
\t    <a href=\"#\" id=\"btn-search-movie\" class=\"smoothing btn btn-default-filter border-filter-left show\" data-filter=\"content_search\" data-key=\"movie\">Películas</a>
\t    <a href=\"#\" id=\"btn-search-directors\" class=\"smoothing btn btn-default-filter borde-left\" data-filter=\"search_directors\" data-key=\"directors\">Directores</a>
\t    <a href=\"#\" id=\"btn-search-actors\" class=\"smoothing btn btn-default-filter borde-left\" data-filter=\"search_stars\" data-key=\"stars\">Actores</a>
\t    <a href=\"#\" id=\"btn-search-tags\" class=\"smoothing btn btn-default-filter borde-left border-filter-right\" data-filter=\"search_tags\" data-key=\"tags\">Tags</a>
\t</div>
</div>", "VODBaseBundle:Base/Components/Forms:search.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/Base/Components/Forms/search.html.twig");
    }
}
