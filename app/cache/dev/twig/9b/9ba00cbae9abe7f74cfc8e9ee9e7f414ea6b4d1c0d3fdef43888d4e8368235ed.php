<?php

/* VODBaseBundle:New/Components:canonical.html.twig */
class __TwigTemplate_7b6b9ce85b9775495db2ace21b18fef3698ccddc0ecce89cbf6877dc74ed9045 extends Twig_Template
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
        $__internal_c2e1d2b59d52f4b7f95e053a295f051b7693656e900818e58f00571908d4aad2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2e1d2b59d52f4b7f95e053a295f051b7693656e900818e58f00571908d4aad2->enter($__internal_c2e1d2b59d52f4b7f95e053a295f051b7693656e900818e58f00571908d4aad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:New/Components:canonical.html.twig"));

        // line 1
        echo "<link href=\"http://www.qubit.tv";
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "\" rel=\"canonical\">";
        
        $__internal_c2e1d2b59d52f4b7f95e053a295f051b7693656e900818e58f00571908d4aad2->leave($__internal_c2e1d2b59d52f4b7f95e053a295f051b7693656e900818e58f00571908d4aad2_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:New/Components:canonical.html.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<link href=\"http://www.qubit.tv{{ url }}\" rel=\"canonical\">", "VODBaseBundle:New/Components:canonical.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/New/Components/canonical.html.twig");
    }
}
