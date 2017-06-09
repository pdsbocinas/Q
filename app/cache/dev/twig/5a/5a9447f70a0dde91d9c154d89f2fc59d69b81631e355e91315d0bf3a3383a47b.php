<?php

/* VODBaseBundle:Base/Components/Footer:footer-block-center.html.twig */
class __TwigTemplate_4d2a023f3e21239c5ad1845e1f0233086a271a4847e26f59351a4ec298553574 extends Twig_Template
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
        $__internal_5cc27b48720ab96a324364d851055cf40df7b55d8c9831a83b530fe88daec3b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cc27b48720ab96a324364d851055cf40df7b55d8c9831a83b530fe88daec3b2->enter($__internal_5cc27b48720ab96a324364d851055cf40df7b55d8c9831a83b530fe88daec3b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Base/Components/Footer:footer-block-center.html.twig"));

        // line 2
        echo "
<div class=\"col-xs-4\">
    <h5>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("base.footer.titles.company", array(), "base"), "html", null, true);
        echo "</h5>
    <ul>
        ";
        // line 7
        echo "        <li><a class=\"btn-link_alter\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("work_with_us");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("base.footer.links.work_here", array(), "base"), "html", null, true);
        echo "</a></li>
        <li><a class=\"btn-link_alter\" href=\"http://blog.qubit.tv/\" target=\"_blank\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("base.footer.links.our_blog", array(), "base"), "html", null, true);
        echo "</a></li>
    </ul>
</div>
";
        
        $__internal_5cc27b48720ab96a324364d851055cf40df7b55d8c9831a83b530fe88daec3b2->leave($__internal_5cc27b48720ab96a324364d851055cf40df7b55d8c9831a83b530fe88daec3b2_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Base/Components/Footer:footer-block-center.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 8,  31 => 7,  26 => 4,  22 => 2,);
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
    <h5>{{'base.footer.titles.company' | trans }}</h5>
    <ul>
        {#<li><a class=\"btn-link_alter\" href=\"http://corporate.qubit.tv/\" target=\"_blank\">{{'base.footer.links.who_we_are' | trans }}</a></li>#}
        <li><a class=\"btn-link_alter\" href=\"{{ path('work_with_us') }}\">{{'base.footer.links.work_here' | trans }}</a></li>
        <li><a class=\"btn-link_alter\" href=\"http://blog.qubit.tv/\" target=\"_blank\">{{'base.footer.links.our_blog' | trans }}</a></li>
    </ul>
</div>
", "VODBaseBundle:Base/Components/Footer:footer-block-center.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/Base/Components/Footer/footer-block-center.html.twig");
    }
}
