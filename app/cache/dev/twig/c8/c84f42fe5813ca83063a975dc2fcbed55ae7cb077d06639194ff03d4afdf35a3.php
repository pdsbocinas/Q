<?php

/* VODBaseBundle:Base/Components/Footer:footer-block-right.html.twig */
class __TwigTemplate_cb3de67b7bf7973bf7500bf610330add041d55bc791e5f7efac662310d59a4f4 extends Twig_Template
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
        $__internal_589edcfc203899b80fd237a58f0959ea8c5baad2e77fb25a67ca187bd1f743dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_589edcfc203899b80fd237a58f0959ea8c5baad2e77fb25a67ca187bd1f743dc->enter($__internal_589edcfc203899b80fd237a58f0959ea8c5baad2e77fb25a67ca187bd1f743dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Base/Components/Footer:footer-block-right.html.twig"));

        // line 2
        echo "
<div class=\"col-xs-4\">
    <h5>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("base.footer.titles.contact", array(), "base"), "html", null, true);
        echo "</h5>
    <ul>
        <li>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("base.footer.info.first_line_address", array(), "base"), "html", null, true);
        echo "</li>
        <li>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("base.footer.info.second_line_address", array(), "base"), "html", null, true);
        echo "</li>
    </ul>
</div>";
        
        $__internal_589edcfc203899b80fd237a58f0959ea8c5baad2e77fb25a67ca187bd1f743dc->leave($__internal_589edcfc203899b80fd237a58f0959ea8c5baad2e77fb25a67ca187bd1f743dc_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Base/Components/Footer:footer-block-right.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 7,  31 => 6,  26 => 4,  22 => 2,);
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
    <h5>{{ 'base.footer.titles.contact' | trans }}</h5>
    <ul>
        <li>{{ 'base.footer.info.first_line_address' | trans }}</li>
        <li>{{ 'base.footer.info.second_line_address' | trans }}</li>
    </ul>
</div>", "VODBaseBundle:Base/Components/Footer:footer-block-right.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/src/VOD/QubitArgentinaBundle/Resources/views/Base/Components/Footer/footer-block-right.html.twig");
    }
}
