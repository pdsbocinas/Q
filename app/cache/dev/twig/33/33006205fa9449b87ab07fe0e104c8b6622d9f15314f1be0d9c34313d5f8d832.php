<?php

/* VODBaseBundle:Components/Modal:accept-button.html.twig */
class __TwigTemplate_08876c8e84c32026c1b055fdc6dbd81fd660d92c626e3855c5cd80d03c88e91f extends Twig_Template
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
        $__internal_2a588e0a028ade751392b94f872018a09a66d24ac2b15d8f49f189e48d31bb74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a588e0a028ade751392b94f872018a09a66d24ac2b15d8f49f189e48d31bb74->enter($__internal_2a588e0a028ade751392b94f872018a09a66d24ac2b15d8f49f189e48d31bb74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Components/Modal:accept-button.html.twig"));

        // line 1
        echo "<a id=\"modal-accept-button\" class=\"btn btn-primary btn-lg \" href=\"";
        echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["buttonText"]) ? $context["buttonText"] : $this->getContext($context, "buttonText")), array(), "common"), "html", null, true);
        echo "</a>";
        
        $__internal_2a588e0a028ade751392b94f872018a09a66d24ac2b15d8f49f189e48d31bb74->leave($__internal_2a588e0a028ade751392b94f872018a09a66d24ac2b15d8f49f189e48d31bb74_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Components/Modal:accept-button.html.twig";
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
        return new Twig_Source("<a id=\"modal-accept-button\" class=\"btn btn-primary btn-lg \" href=\"{{ action }}\">{{ buttonText | trans({}, 'common') }}</a>", "VODBaseBundle:Components/Modal:accept-button.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/Components/Modal/accept-button.html.twig");
    }
}
