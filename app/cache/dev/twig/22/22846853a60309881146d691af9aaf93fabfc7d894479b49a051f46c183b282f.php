<?php

/* VODBaseBundle:New/Components:canonical-alternate-list.html.twig */
class __TwigTemplate_dd0242b637fc74b09019d5925a27aa24b38f99d080893e55557ecb1eda36a48d extends Twig_Template
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
        $__internal_9cd3bf8df13769ae37acd2e4c28a1b59d920ec3409b31b3eab56dc593dafa845 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cd3bf8df13769ae37acd2e4c28a1b59d920ec3409b31b3eab56dc593dafa845->enter($__internal_9cd3bf8df13769ae37acd2e4c28a1b59d920ec3409b31b3eab56dc593dafa845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:New/Components:canonical-alternate-list.html.twig"));

        // line 2
        echo "<link href=\"http://www.qubit.tv";
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "\" hreflang=\"es\" rel=\"alternate\">
<link href=\"http://www.qubit.tv";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "\" hreflang=\"es-AR\" rel=\"alternate\">
<link href=\"http://co.qubit.tv";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "\" hreflang=\"es-CO\" rel=\"alternate\">
<link href=\"http://ec.qubit.tv";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "\" hreflang=\"es-EC\" rel=\"alternate\">
<link href=\"http://gt.qubit.tv";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "\" hreflang=\"es-GT\" rel=\"alternate\">
<link href=\"http://uy.qubit.tv";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "\" hreflang=\"es-UY\" rel=\"alternate\">
<link href=\"http://py.qubit.tv";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "\" hreflang=\"es-PY\" rel=\"alternate\">
<link href=\"http://cl.qubit.tv";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "\" hreflang=\"es-CL\" rel=\"alternate\">
<link href=\"http://pe.qubit.tv";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "\" hreflang=\"es-PE\" rel=\"alternate\">";
        
        $__internal_9cd3bf8df13769ae37acd2e4c28a1b59d920ec3409b31b3eab56dc593dafa845->leave($__internal_9cd3bf8df13769ae37acd2e4c28a1b59d920ec3409b31b3eab56dc593dafa845_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:New/Components:canonical-alternate-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 10,  51 => 9,  47 => 8,  43 => 7,  39 => 6,  35 => 5,  31 => 4,  27 => 3,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Esta lista se mantiene para todos los operadores. Cuando se agrega uno nuevo, hay que agregarlo aca #}
<link href=\"http://www.qubit.tv{{ url }}\" hreflang=\"es\" rel=\"alternate\">
<link href=\"http://www.qubit.tv{{ url }}\" hreflang=\"es-AR\" rel=\"alternate\">
<link href=\"http://co.qubit.tv{{ url }}\" hreflang=\"es-CO\" rel=\"alternate\">
<link href=\"http://ec.qubit.tv{{ url }}\" hreflang=\"es-EC\" rel=\"alternate\">
<link href=\"http://gt.qubit.tv{{ url }}\" hreflang=\"es-GT\" rel=\"alternate\">
<link href=\"http://uy.qubit.tv{{ url }}\" hreflang=\"es-UY\" rel=\"alternate\">
<link href=\"http://py.qubit.tv{{ url }}\" hreflang=\"es-PY\" rel=\"alternate\">
<link href=\"http://cl.qubit.tv{{ url }}\" hreflang=\"es-CL\" rel=\"alternate\">
<link href=\"http://pe.qubit.tv{{ url }}\" hreflang=\"es-PE\" rel=\"alternate\">", "VODBaseBundle:New/Components:canonical-alternate-list.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/New/Components/canonical-alternate-list.html.twig");
    }
}
