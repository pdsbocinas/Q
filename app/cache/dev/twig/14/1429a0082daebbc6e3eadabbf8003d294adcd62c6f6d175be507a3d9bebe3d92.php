<?php

/* VODBaseBundle:Base:search-container.html.twig */
class __TwigTemplate_f9ac8c94275a6cfb925ce6601d0795a876d2b2df58218a70e7248a3d87e6a905 extends Twig_Template
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
        $__internal_d055be451240f207d6d81b195326059b9e0a58e0cad0e54f261e30309ffdb090 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d055be451240f207d6d81b195326059b9e0a58e0cad0e54f261e30309ffdb090->enter($__internal_d055be451240f207d6d81b195326059b9e0a58e0cad0e54f261e30309ffdb090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Base:search-container.html.twig"));

        // line 2
        echo "<main id=\"search-container\" class=\"container-search\" style=\"display:none;position:relative\" data-location=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["google_analytics_event_parameters"]) ? $context["google_analytics_event_parameters"] : $this->getContext($context, "google_analytics_event_parameters")), "search", array()), "html", null, true);
        echo "\">
    ";
        // line 3
        $this->loadTemplate("VODBaseBundle:Base/Components/Forms:search.html.twig", "VODBaseBundle:Base:search-container.html.twig", 3)->display($context);
        // line 4
        echo "
    ";
        // line 6
        echo "    <div id=\"result-text\">
        <h3>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("base.search_container.title", array(), "base"), "html", null, true);
        echo " \"<span></span>\"</h3>
    </div>

    ";
        // line 11
        echo "    <div id=\"no-result-text\" style=\"display:none\">
        <h3>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("base.search_container.no_results", array(), "base"), "html", null, true);
        echo " \"<span></span>\"</h3>
    </div>
    
    ";
        // line 16
        echo "    <div id=\"search-loader\" class=\"search-loader text-center\">
        <i class=\"fa fa-4x fa-spinner fa-pulse\"></i>
    </div>

    ";
        // line 21
        echo "    <div class=\"search-container\">
        <div class=\"container-fluid\">
            <div class=\"row\"></div>
        </div>
    </div>
</main>";
        
        $__internal_d055be451240f207d6d81b195326059b9e0a58e0cad0e54f261e30309ffdb090->leave($__internal_d055be451240f207d6d81b195326059b9e0a58e0cad0e54f261e30309ffdb090_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Base:search-container.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 21,  50 => 16,  44 => 12,  41 => 11,  35 => 7,  32 => 6,  29 => 4,  27 => 3,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Cuando realizo una búsqueda en la navbar, oculto el contenedor principal y muestro este otro contenedor #}
<main id=\"search-container\" class=\"container-search\" style=\"display:none;position:relative\" data-location=\"{{ google_analytics_event_parameters.search }}\">
    {% include 'VODBaseBundle:Base/Components/Forms:search.html.twig' %}

    {# Texto que se muestra con los resultados #}
    <div id=\"result-text\">
        <h3>{{ 'base.search_container.title' | trans({}, 'base') }} \"<span></span>\"</h3>
    </div>

    {# Si mi búsqueda no arroja ningún resultado, muestro un texto informativo #}
    <div id=\"no-result-text\" style=\"display:none\">
        <h3>{{ 'base.search_container.no_results' | trans({}, 'base') }} \"<span></span>\"</h3>
    </div>
    
    {# Muestro un preloader mientras realizo la búsqueda #}
    <div id=\"search-loader\" class=\"search-loader text-center\">
        <i class=\"fa fa-4x fa-spinner fa-pulse\"></i>
    </div>

    {# Acá se inyectan los resultados de la búsqueda #}
    <div class=\"search-container\">
        <div class=\"container-fluid\">
            <div class=\"row\"></div>
        </div>
    </div>
</main>", "VODBaseBundle:Base:search-container.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/Base/search-container.html.twig");
    }
}
