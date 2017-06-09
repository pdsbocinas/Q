<?php

/* VODBaseBundle:Base/Components/Header:logo.html.twig */
class __TwigTemplate_76dc037ee750e72602c122f92393b4ec07233fae292d99b60642093203dafb03 extends Twig_Template
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
        $__internal_7884577a26ebc61427dee1f6d6958f1346835345bff53ede4558afba8d75349a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7884577a26ebc61427dee1f6d6958f1346835345bff53ede4558afba8d75349a->enter($__internal_7884577a26ebc61427dee1f6d6958f1346835345bff53ede4558afba8d75349a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Base/Components/Header:logo.html.twig"));

        // line 1
        echo "<img src=\"";
        echo twig_escape_filter($this->env, ((isset($context["cdn_url"]) ? $context["cdn_url"] : $this->getContext($context, "cdn_url")) . "/images/logo-qubit-azul.svg"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.titles.site_name", array(), "common"), "html", null, true);
        echo "\">";
        
        $__internal_7884577a26ebc61427dee1f6d6958f1346835345bff53ede4558afba8d75349a->leave($__internal_7884577a26ebc61427dee1f6d6958f1346835345bff53ede4558afba8d75349a_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Base/Components/Header:logo.html.twig";
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
        return new Twig_Source("<img src=\"{{cdn_url~'/images/logo-qubit-azul.svg'}}\" alt=\"{{ 'common.titles.site_name' | trans({}, 'common') }}\">", "VODBaseBundle:Base/Components/Header:logo.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/Base/Components/Header/logo.html.twig");
    }
}
