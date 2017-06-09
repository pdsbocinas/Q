<?php

/* VODBaseBundle:Base/Components/Header:smartBannerIOS.html.twig */
class __TwigTemplate_92c1cfd72d2688949bb3adda8a1442c493087e83d7ef4befda3dca77fe3c8164 extends Twig_Template
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
        $__internal_3792ace4dee53a5d7cd959affff5cc9185426dd37377d8692e12da001785f264 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3792ace4dee53a5d7cd959affff5cc9185426dd37377d8692e12da001785f264->enter($__internal_3792ace4dee53a5d7cd959affff5cc9185426dd37377d8692e12da001785f264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Base/Components/Header:smartBannerIOS.html.twig"));

        
        $__internal_3792ace4dee53a5d7cd959affff5cc9185426dd37377d8692e12da001785f264->leave($__internal_3792ace4dee53a5d7cd959affff5cc9185426dd37377d8692e12da001785f264_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Base/Components/Header:smartBannerIOS.html.twig";
    }

    public function getDebugInfo()
    {
        return array ();
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#{% set smartBannerClosed = app.request.cookies.get('smart-banner-disabled') %}
{% if (smartBannerClosed != true) %}
\t<script type=\"text/javascript\">
\t\t\$(window).load(function() {
\t\t\t\$.fn.smartBanneriOS(); 
\t\t})
\t</script>
{% endif %}#}", "VODBaseBundle:Base/Components/Header:smartBannerIOS.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/Base/Components/Header/smartBannerIOS.html.twig");
    }
}
