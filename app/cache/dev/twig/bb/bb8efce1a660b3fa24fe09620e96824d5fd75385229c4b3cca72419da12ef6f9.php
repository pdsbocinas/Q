<?php

/* VODBaseBundle:Base/Components/Header:favicon.html.twig */
class __TwigTemplate_2c3a09edd94479794eb3e16930b75f325035d0b525123ba474827f140415c992 extends Twig_Template
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
        $__internal_91882d5159df1b173f49fe13119b23a462bf23e0ce4fca312dfc4c89f2e532d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91882d5159df1b173f49fe13119b23a462bf23e0ce4fca312dfc4c89f2e532d8->enter($__internal_91882d5159df1b173f49fe13119b23a462bf23e0ce4fca312dfc4c89f2e532d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Base/Components/Header:favicon.html.twig"));

        // line 1
        echo "<link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, ((isset($context["cdn_url"]) ? $context["cdn_url"] : $this->getContext($context, "cdn_url")) . "/images/favicon.ico"), "html", null, true);
        echo "\">";
        
        $__internal_91882d5159df1b173f49fe13119b23a462bf23e0ce4fca312dfc4c89f2e532d8->leave($__internal_91882d5159df1b173f49fe13119b23a462bf23e0ce4fca312dfc4c89f2e532d8_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Base/Components/Header:favicon.html.twig";
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
        return new Twig_Source("<link rel=\"shortcut icon\" href=\"{{ cdn_url~'/images/favicon.ico' }}\">", "VODBaseBundle:Base/Components/Header:favicon.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/Base/Components/Header/favicon.html.twig");
    }
}
