<?php

/* VODItvBaseBundle:Base/Components/Header:favicon.html.twig */
class __TwigTemplate_ff8afd6123d09e5c94f08e5fddd1b1aa9d14f7e4853e6009fb15af0e1269c7c1 extends Twig_Template
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
        $__internal_db6f0233d7f16b1ec59699c3b6c98b18ba24bc9cad778d173f45584a5cfb9ed5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db6f0233d7f16b1ec59699c3b6c98b18ba24bc9cad778d173f45584a5cfb9ed5->enter($__internal_db6f0233d7f16b1ec59699c3b6c98b18ba24bc9cad778d173f45584a5cfb9ed5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODItvBaseBundle:Base/Components/Header:favicon.html.twig"));

        // line 1
        echo "<link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, ((isset($context["cdn_url"]) ? $context["cdn_url"] : $this->getContext($context, "cdn_url")) . "/images/favicon.ico"), "html", null, true);
        echo "\">";
        
        $__internal_db6f0233d7f16b1ec59699c3b6c98b18ba24bc9cad778d173f45584a5cfb9ed5->leave($__internal_db6f0233d7f16b1ec59699c3b6c98b18ba24bc9cad778d173f45584a5cfb9ed5_prof);

    }

    public function getTemplateName()
    {
        return "VODItvBaseBundle:Base/Components/Header:favicon.html.twig";
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
        return new Twig_Source("<link rel=\"shortcut icon\" href=\"{{ cdn_url~'/images/favicon.ico' }}\">", "VODItvBaseBundle:Base/Components/Header:favicon.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/itv-base-bundle/Resources/views/Base/Components/Header/favicon.html.twig");
    }
}
