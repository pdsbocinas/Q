<?php

/* VODBaseBundle:Content/Components:content-filters.html.twig */
class __TwigTemplate_08f5f13712b131a3ce5fd2f82a2f62da40851d60900087985622f1326aa42d75 extends Twig_Template
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
        $__internal_84ae0b02a1079664138de419708650c8f9960331bbf6ac1c92a11fe1afc29838 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84ae0b02a1079664138de419708650c8f9960331bbf6ac1c92a11fe1afc29838->enter($__internal_84ae0b02a1079664138de419708650c8f9960331bbf6ac1c92a11fe1afc29838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Content/Components:content-filters.html.twig"));

        // line 2
        echo "<div class=\"form-group\">
\t<div class=\"style-select\">
\t\t<label class=\"order\" for=\"select-filter\">
\t\t\t<span>Ordenar Por</span>
\t\t</label>
\t\t<select class=\"form-control mt-10 select-filter\" id=\"select-filter\">
\t\t\t";
        // line 8
        if ((null === (isset($context["genre"]) ? $context["genre"] : $this->getContext($context, "genre")))) {
            // line 9
            echo "\t\t\t\t<option value=\"d\" selected=\"selected\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("content.filters.default", array(), "content"), "html", null, true);
            echo "</option>
\t\t\t";
        }
        // line 11
        echo "\t\t\t<option value=\"new\" ";
        if (($this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "field", array(), "array") == "new")) {
            echo "selected=\"selected\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("content.filters.new", array(), "content"), "html", null, true);
        echo "</option>
\t        <option value=\"aired\" ";
        // line 12
        if (($this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "field", array(), "array") == "aired")) {
            echo "selected=\"selected\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("content.filters.launch", array(), "content"), "html", null, true);
        echo "</option>
\t        <option value=\"alphabetic:asc\" ";
        // line 13
        if ((($this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "field", array(), "array") == "alphabetic") && ($this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "direction", array(), "array") == "asc"))) {
            echo "selected=\"selected\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("content.filters.az", array(), "content"), "html", null, true);
        echo "</option>
\t        <option value=\"alphabetic:desc\" ";
        // line 14
        if ((($this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "field", array(), "array") == "alphabetic") && ($this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "direction", array(), "array") == "desc"))) {
            echo "selected=\"selected\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("content.filters.za", array(), "content"), "html", null, true);
        echo "</option>
\t    </select>
\t</div>
</div>";
        
        $__internal_84ae0b02a1079664138de419708650c8f9960331bbf6ac1c92a11fe1afc29838->leave($__internal_84ae0b02a1079664138de419708650c8f9960331bbf6ac1c92a11fe1afc29838_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Content/Components:content-filters.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 14,  55 => 13,  47 => 12,  38 => 11,  32 => 9,  30 => 8,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'content' %}
<div class=\"form-group\">
\t<div class=\"style-select\">
\t\t<label class=\"order\" for=\"select-filter\">
\t\t\t<span>Ordenar Por</span>
\t\t</label>
\t\t<select class=\"form-control mt-10 select-filter\" id=\"select-filter\">
\t\t\t{% if genre is null %}
\t\t\t\t<option value=\"d\" selected=\"selected\">{{ 'content.filters.default' | trans }}</option>
\t\t\t{% endif %}
\t\t\t<option value=\"new\" {% if order['field'] == 'new' %}selected=\"selected\"{% endif %}>{{ 'content.filters.new' | trans }}</option>
\t        <option value=\"aired\" {% if order['field'] == 'aired' %}selected=\"selected\"{% endif %}>{{ 'content.filters.launch' | trans }}</option>
\t        <option value=\"alphabetic:asc\" {% if order['field'] == 'alphabetic' and order['direction'] == 'asc' %}selected=\"selected\"{% endif %}>{{ 'content.filters.az' | trans }}</option>
\t        <option value=\"alphabetic:desc\" {% if order['field'] == 'alphabetic' and order['direction'] == 'desc' %}selected=\"selected\"{% endif %}>{{ 'content.filters.za' | trans }}</option>
\t    </select>
\t</div>
</div>", "VODBaseBundle:Content/Components:content-filters.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/Content/Components/content-filters.html.twig");
    }
}
