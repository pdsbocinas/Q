<?php

/* VODBaseBundle:Base/Components/Header:dropdown-tags.html.twig */
class __TwigTemplate_c6516dbc1c2d3ea15341bb243348bec5d37a4b5d216c65b1bdc408dfb1f94de9 extends Twig_Template
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
        $__internal_bae218e9f3201813905ede545ee3941ee111882181c37e7c9d6ee60dc09a53de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bae218e9f3201813905ede545ee3941ee111882181c37e7c9d6ee60dc09a53de->enter($__internal_bae218e9f3201813905ede545ee3941ee111882181c37e7c9d6ee60dc09a53de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Base/Components/Header:dropdown-tags.html.twig"));

        // line 1
        echo "<div class=\"dropdown-menu dropdown-tags\" aria-labelledby=\"exploreButton\">
    ";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("VODBaseBundle:Content:exploreTags"));
        echo "
</div>";
        
        $__internal_bae218e9f3201813905ede545ee3941ee111882181c37e7c9d6ee60dc09a53de->leave($__internal_bae218e9f3201813905ede545ee3941ee111882181c37e7c9d6ee60dc09a53de_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Base/Components/Header:dropdown-tags.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"dropdown-menu dropdown-tags\" aria-labelledby=\"exploreButton\">
    {{ render(controller('VODBaseBundle:Content:exploreTags')) }}
</div>", "VODBaseBundle:Base/Components/Header:dropdown-tags.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/Base/Components/Header/dropdown-tags.html.twig");
    }
}
