<?php

/* VODBaseBundle:Base/Components/Header:work-with-us.html.twig */
class __TwigTemplate_6b11c349b2e8167c58782094f7be539716d2d1050183321d7e6c125ceaa532d1 extends Twig_Template
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
        $__internal_c11654091d61360afe2807db710714f58a3461b66653cf645cfdc5e1014f2fc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c11654091d61360afe2807db710714f58a3461b66653cf645cfdc5e1014f2fc2->enter($__internal_c11654091d61360afe2807db710714f58a3461b66653cf645cfdc5e1014f2fc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Base/Components/Header:work-with-us.html.twig"));

        // line 2
        echo "<li><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("work_with_us");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("base.footer.links.work_here", array(), "base"), "html", null, true);
        echo "</a></li>";
        
        $__internal_c11654091d61360afe2807db710714f58a3461b66653cf645cfdc5e1014f2fc2->leave($__internal_c11654091d61360afe2807db710714f58a3461b66653cf645cfdc5e1014f2fc2_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Base/Components/Header:work-with-us.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,);
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
<li><a href=\"{{ path('work_with_us') }}\">{{ 'base.footer.links.work_here' | trans }}</a></li>", "VODBaseBundle:Base/Components/Header:work-with-us.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/Base/Components/Header/work-with-us.html.twig");
    }
}
