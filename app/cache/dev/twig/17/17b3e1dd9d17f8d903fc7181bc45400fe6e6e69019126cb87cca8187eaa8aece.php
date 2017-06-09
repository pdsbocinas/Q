<?php

/* VODBaseBundle:Base/Components/Header:css.html.twig */
class __TwigTemplate_1c39b84f4666ac8a91cb8a43833ec9f46e238982121eef752208fcca538c01be extends Twig_Template
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
        $__internal_dcd447e9d02209d2c85ac956e1116c7065aacb31833d964657f16289368507f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcd447e9d02209d2c85ac956e1116c7065aacb31833d964657f16289368507f2->enter($__internal_dcd447e9d02209d2c85ac956e1116c7065aacb31833d964657f16289368507f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Base/Components/Header:css.html.twig"));

        // line 1
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/qubit-argentina.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">";
        
        $__internal_dcd447e9d02209d2c85ac956e1116c7065aacb31833d964657f16289368507f2->leave($__internal_dcd447e9d02209d2c85ac956e1116c7065aacb31833d964657f16289368507f2_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Base/Components/Header:css.html.twig";
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
        return new Twig_Source("<link href=\"{{ asset('css/qubit-argentina.css')}}\" rel=\"stylesheet\">", "VODBaseBundle:Base/Components/Header:css.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/src/VOD/QubitArgentinaBundle/Resources/views/Base/Components/Header/css.html.twig");
    }
}
