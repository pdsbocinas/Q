<?php

/* VODBaseBundle:Base/Components/Footer:subfooter.html.twig */
class __TwigTemplate_73d81183554dfacf0973bab3bf50ec19263f86a4376bcbaaddf562ed07a07174 extends Twig_Template
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
        $__internal_9a1273b429af724bd6f6d91d3a4a178cb729edf44a270b8147310e391fae70be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a1273b429af724bd6f6d91d3a4a178cb729edf44a270b8147310e391fae70be->enter($__internal_9a1273b429af724bd6f6d91d3a4a178cb729edf44a270b8147310e391fae70be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Base/Components/Footer:subfooter.html.twig"));

        // line 1
        echo "<div class=\"subfooter\">
    <div class=\"container-fluid\">
        <div class=\"row\">
        ";
        // line 5
        echo "        ";
        if ((isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
            // line 6
            echo "            ";
            $this->loadTemplate("VODBaseBundle:Base/Components/Footer:subfooter-links.html.twig", "VODBaseBundle:Base/Components/Footer:subfooter.html.twig", 6)->display($context);
            // line 7
            echo "
            ";
            // line 8
            $this->loadTemplate("VODBaseBundle:Base/Components/Footer:subfooter-legal.html.twig", "VODBaseBundle:Base/Components/Footer:subfooter.html.twig", 8)->display($context);
            // line 9
            echo "        </div>
        <div class=\"row\">
            ";
            // line 11
            $this->loadTemplate("VODBaseBundle:Base/Components/Footer:subfooter-copyright.html.twig", "VODBaseBundle:Base/Components/Footer:subfooter.html.twig", 11)->display($context);
            // line 12
            echo "        ";
            // line 13
            echo "        ";
        } else {
            // line 14
            echo "            ";
            $this->loadTemplate("VODBaseBundle:Base/Components/Footer:subfooter-copyright.html.twig", "VODBaseBundle:Base/Components/Footer:subfooter.html.twig", 14)->display($context);
            // line 15
            echo "
            ";
            // line 16
            $this->loadTemplate("VODBaseBundle:Base/Components/Footer:subfooter-links.html.twig", "VODBaseBundle:Base/Components/Footer:subfooter.html.twig", 16)->display($context);
            // line 17
            echo "
            ";
            // line 18
            $this->loadTemplate("VODBaseBundle:Base/Components/Footer:subfooter-legal.html.twig", "VODBaseBundle:Base/Components/Footer:subfooter.html.twig", 18)->display($context);
            // line 19
            echo "        ";
        }
        // line 20
        echo "
        </div>
    </div>
</div>
";
        
        $__internal_9a1273b429af724bd6f6d91d3a4a178cb729edf44a270b8147310e391fae70be->leave($__internal_9a1273b429af724bd6f6d91d3a4a178cb729edf44a270b8147310e391fae70be_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Base/Components/Footer:subfooter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 20,  62 => 19,  60 => 18,  57 => 17,  55 => 16,  52 => 15,  49 => 14,  46 => 13,  44 => 12,  42 => 11,  38 => 9,  36 => 8,  33 => 7,  30 => 6,  27 => 5,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"subfooter\">
    <div class=\"container-fluid\">
        <div class=\"row\">
        {# El orden de los links varía según la resolución. Si es mobile llamo primero a redes sociales y a info legal, y luego a copyright #}
        {% if is_mobile %}
            {% include 'VODBaseBundle:Base/Components/Footer:subfooter-links.html.twig' %}

            {% include 'VODBaseBundle:Base/Components/Footer:subfooter-legal.html.twig' %}
        </div>
        <div class=\"row\">
            {% include 'VODBaseBundle:Base/Components/Footer:subfooter-copyright.html.twig' %}
        {# Si es desktop, muestro los tres alineados #}
        {% else %}
            {% include 'VODBaseBundle:Base/Components/Footer:subfooter-copyright.html.twig' %}

            {% include 'VODBaseBundle:Base/Components/Footer:subfooter-links.html.twig' %}

            {% include 'VODBaseBundle:Base/Components/Footer:subfooter-legal.html.twig' %}
        {% endif %}

        </div>
    </div>
</div>
", "VODBaseBundle:Base/Components/Footer:subfooter.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/Base/Components/Footer/subfooter.html.twig");
    }
}
