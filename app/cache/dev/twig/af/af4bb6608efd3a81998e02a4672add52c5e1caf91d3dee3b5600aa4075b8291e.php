<?php

/* VODBaseBundle:Base/Components/Footer:subfooter-logo.html.twig */
class __TwigTemplate_387eb9ac404810d235e792788e645bc58f52d7328f4b575020a93b394eae2acf extends Twig_Template
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
        $__internal_464d92754db7c6013c3985d7df8d54bf3721284eef7ec31034b4748f48a9edd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_464d92754db7c6013c3985d7df8d54bf3721284eef7ec31034b4748f48a9edd6->enter($__internal_464d92754db7c6013c3985d7df8d54bf3721284eef7ec31034b4748f48a9edd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Base/Components/Footer:subfooter-logo.html.twig"));

        // line 1
        echo "<img src=\"";
        echo twig_escape_filter($this->env, ((isset($context["cdn_url"]) ? $context["cdn_url"] : $this->getContext($context, "cdn_url")) . "/images/logo-qubit-blanco.svg"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.titles.site_name", array(), "common"), "html", null, true);
        echo "\">
";
        
        $__internal_464d92754db7c6013c3985d7df8d54bf3721284eef7ec31034b4748f48a9edd6->leave($__internal_464d92754db7c6013c3985d7df8d54bf3721284eef7ec31034b4748f48a9edd6_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Base/Components/Footer:subfooter-logo.html.twig";
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
        return new Twig_Source("<img src=\"{{cdn_url~'/images/logo-qubit-blanco.svg'}}\" alt=\"{{ 'common.titles.site_name' | trans({}, 'common') }}\">
", "VODBaseBundle:Base/Components/Footer:subfooter-logo.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/Base/Components/Footer/subfooter-logo.html.twig");
    }
}
