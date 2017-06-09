<?php

/* VODBaseBundle:Base/Components/Header:navbar-help-center.html.twig */
class __TwigTemplate_f4d0726a36ca89ac677d75a3f8037e48587da70dee19220b3f57fff10aa6c1c6 extends Twig_Template
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
        $__internal_c6c391bd582e9134e07ac4de9d9df404dc8c6a8cf6a5f2fe4cf2012555056cd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6c391bd582e9134e07ac4de9d9df404dc8c6a8cf6a5f2fe4cf2012555056cd7->enter($__internal_c6c391bd582e9134e07ac4de9d9df404dc8c6a8cf6a5f2fe4cf2012555056cd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Base/Components/Header:navbar-help-center.html.twig"));

        // line 1
        echo "<div class=\"navbar-right\">
    <a href=\"";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("help");
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("base.footer.links.help_center"), "html", null, true);
        echo "\" class=\"navbar__help-button btn\"><i class=\"fa fa-question\"></i></a>
</div>
";
        
        $__internal_c6c391bd582e9134e07ac4de9d9df404dc8c6a8cf6a5f2fe4cf2012555056cd7->leave($__internal_c6c391bd582e9134e07ac4de9d9df404dc8c6a8cf6a5f2fe4cf2012555056cd7_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Base/Components/Header:navbar-help-center.html.twig";
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
        return new Twig_Source("<div class=\"navbar-right\">
    <a href=\"{{ path('help') }}\" alt=\"{{ 'base.footer.links.help_center' | trans }}\" class=\"navbar__help-button btn\"><i class=\"fa fa-question\"></i></a>
</div>
", "VODBaseBundle:Base/Components/Header:navbar-help-center.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/Base/Components/Header/navbar-help-center.html.twig");
    }
}
