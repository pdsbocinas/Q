<?php

/* VODBaseBundle:Content/Components:basic-grid.html.twig */
class __TwigTemplate_0834225f27522dfd30dcb977d0571f77dbb429a36f6e70b0e8ad584809af0fd5 extends Twig_Template
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
        $__internal_7fcc8d4d3d241fe402c2724018faf29ea894b10b068d69cc2aac4a4a1cd6037b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fcc8d4d3d241fe402c2724018faf29ea894b10b068d69cc2aac4a4a1cd6037b->enter($__internal_7fcc8d4d3d241fe402c2724018faf29ea894b10b068d69cc2aac4a4a1cd6037b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Content/Components:basic-grid.html.twig"));

        // line 1
        echo "<div id=\"grid-result-container\">
    <div id=\"grid-result-list\">
        ";
        // line 3
        $this->loadTemplate("VODBaseBundle:Content/Components:collection.html.twig", "VODBaseBundle:Content/Components:basic-grid.html.twig", 3)->display($context);
        // line 4
        echo "    </div>
</div>";
        
        $__internal_7fcc8d4d3d241fe402c2724018faf29ea894b10b068d69cc2aac4a4a1cd6037b->leave($__internal_7fcc8d4d3d241fe402c2724018faf29ea894b10b068d69cc2aac4a4a1cd6037b_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Content/Components:basic-grid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 4,  26 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"grid-result-container\">
    <div id=\"grid-result-list\">
        {% include 'VODBaseBundle:Content/Components:collection.html.twig' %}
    </div>
</div>", "VODBaseBundle:Content/Components:basic-grid.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/Content/Components/basic-grid.html.twig");
    }
}
