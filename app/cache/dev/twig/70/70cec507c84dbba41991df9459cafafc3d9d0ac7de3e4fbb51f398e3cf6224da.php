<?php

/* VODBaseBundle:Components/Modal:cancel-button.html.twig */
class __TwigTemplate_1b5fe2d6a7e9c1436f8b180dd3eb49b7aaf8126405f287fa5f8894da77dda5c2 extends Twig_Template
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
        $__internal_22f05d46a2ed0369ecf15d12fea4a3ce2ea0171dcadc1edec0b0a9745a74c3da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22f05d46a2ed0369ecf15d12fea4a3ce2ea0171dcadc1edec0b0a9745a74c3da->enter($__internal_22f05d46a2ed0369ecf15d12fea4a3ce2ea0171dcadc1edec0b0a9745a74c3da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Components/Modal:cancel-button.html.twig"));

        // line 1
        echo "<a id=\"modal-cancel-button\" class=\"btn btn-link btn-lg\" data-dismiss=\"modal\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["buttonText"]) ? $context["buttonText"] : $this->getContext($context, "buttonText")), array(), "common"), "html", null, true);
        echo "</a>
";
        
        $__internal_22f05d46a2ed0369ecf15d12fea4a3ce2ea0171dcadc1edec0b0a9745a74c3da->leave($__internal_22f05d46a2ed0369ecf15d12fea4a3ce2ea0171dcadc1edec0b0a9745a74c3da_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Components/Modal:cancel-button.html.twig";
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
        return new Twig_Source("<a id=\"modal-cancel-button\" class=\"btn btn-link btn-lg\" data-dismiss=\"modal\" href=\"{{ action }}\">{{ buttonText | trans({}, 'common') }}</a>
", "VODBaseBundle:Components/Modal:cancel-button.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/Components/Modal/cancel-button.html.twig");
    }
}
