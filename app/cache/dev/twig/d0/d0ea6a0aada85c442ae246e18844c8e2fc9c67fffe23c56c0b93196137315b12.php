<?php

/* VODBaseBundle:New/Header:meta.html.twig */
class __TwigTemplate_6863adf17eac4f9cd9ae2077838369c210a9801c4d4b3bf4c9db0803ef225fa3 extends Twig_Template
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
        $__internal_e74e9eb623ef089626dc57122cd50f86e92d048c49a8f07ac89c102a917458af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e74e9eb623ef089626dc57122cd50f86e92d048c49a8f07ac89c102a917458af->enter($__internal_e74e9eb623ef089626dc57122cd50f86e92d048c49a8f07ac89c102a917458af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:New/Header:meta.html.twig"));

        // line 1
        echo "<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" />";
        
        $__internal_e74e9eb623ef089626dc57122cd50f86e92d048c49a8f07ac89c102a917458af->leave($__internal_e74e9eb623ef089626dc57122cd50f86e92d048c49a8f07ac89c102a917458af_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:New/Header:meta.html.twig";
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
        return new Twig_Source("<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" />", "VODBaseBundle:New/Header:meta.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/New/Header/meta.html.twig");
    }
}
