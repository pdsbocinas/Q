<?php

/* VODBaseBundle:New/Header:favicon.html.twig */
class __TwigTemplate_a0ef461465635667705f9b10c7a0918219dc7d36ff9801f6e540765426ac15d8 extends Twig_Template
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
        $__internal_c233a444b6006de9f1a597eaaf264a3e50f5983e6cc1db1b3b92a7e939348ab2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c233a444b6006de9f1a597eaaf264a3e50f5983e6cc1db1b3b92a7e939348ab2->enter($__internal_c233a444b6006de9f1a597eaaf264a3e50f5983e6cc1db1b3b92a7e939348ab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:New/Header:favicon.html.twig"));

        // line 1
        echo "<link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, ((isset($context["cdn_url"]) ? $context["cdn_url"] : $this->getContext($context, "cdn_url")) . "/images/favicon.ico"), "html", null, true);
        echo "\">";
        
        $__internal_c233a444b6006de9f1a597eaaf264a3e50f5983e6cc1db1b3b92a7e939348ab2->leave($__internal_c233a444b6006de9f1a597eaaf264a3e50f5983e6cc1db1b3b92a7e939348ab2_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:New/Header:favicon.html.twig";
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
        return new Twig_Source("<link rel=\"shortcut icon\" href=\"{{ cdn_url~'/images/favicon.ico' }}\">", "VODBaseBundle:New/Header:favicon.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/New/Header/favicon.html.twig");
    }
}
