<?php

/* VODBaseBundle:Base/Components/Footer:footer-block-left.html.twig */
class __TwigTemplate_81946ed31fd020db8ad15762eaaf55e36bad4ce3ec25101a9321d0c7a9c3cb9a extends Twig_Template
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
        $__internal_0ac9d0eb2435343f5c5136119056efc09e5d47c7605817ba49756b263edd6664 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ac9d0eb2435343f5c5136119056efc09e5d47c7605817ba49756b263edd6664->enter($__internal_0ac9d0eb2435343f5c5136119056efc09e5d47c7605817ba49756b263edd6664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Base/Components/Footer:footer-block-left.html.twig"));

        // line 2
        echo "
<div class=\"col-xs-4\">
    <h5>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("base.footer.titles.customer_support", array(), "base"), "html", null, true);
        echo "</h5>
    <ul>
        <li><a class=\"btn-link_alter\" href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("help");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("base.footer.links.help_center", array(), "base"), "html", null, true);
        echo "</a></li>
        <li><a class=\"btn-link_alter\" href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("help");
        echo "#faq\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("base.footer.links.faq", array(), "base"), "html", null, true);
        echo "</a></li>
        <li><a class=\"btn-link_alter\" href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("terms_and_conditions");
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("base.footer.links.terms_and_conditions", array(), "base"), "html", null, true);
        echo "</a></li>
    </ul>
</div>
";
        
        $__internal_0ac9d0eb2435343f5c5136119056efc09e5d47c7605817ba49756b263edd6664->leave($__internal_0ac9d0eb2435343f5c5136119056efc09e5d47c7605817ba49756b263edd6664_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Base/Components/Footer:footer-block-left.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 8,  37 => 7,  31 => 6,  26 => 4,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'base' %}

<div class=\"col-xs-4\">
    <h5>{{ 'base.footer.titles.customer_support' | trans }}</h5>
    <ul>
        <li><a class=\"btn-link_alter\" href=\"{{ path('help') }}\">{{ 'base.footer.links.help_center' | trans }}</a></li>
        <li><a class=\"btn-link_alter\" href=\"{{ path('help') }}#faq\">{{ 'base.footer.links.faq' | trans }}</a></li>
        <li><a class=\"btn-link_alter\" href=\"{{ path('terms_and_conditions') }}\" target=\"_blank\">{{ 'base.footer.links.terms_and_conditions' | trans }}</a></li>
    </ul>
</div>
", "VODBaseBundle:Base/Components/Footer:footer-block-left.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/Base/Components/Footer/footer-block-left.html.twig");
    }
}
