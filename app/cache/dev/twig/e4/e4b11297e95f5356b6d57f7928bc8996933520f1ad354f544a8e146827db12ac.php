<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_b08d7efa0a1f26eee18db0f6d5ed67024e79433e9719194450cf65bd1ab92124 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eafd21a537cd36c60b0808004041d65a86281cd6818e2fe8bb8f9c702ead89e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eafd21a537cd36c60b0808004041d65a86281cd6818e2fe8bb8f9c702ead89e4->enter($__internal_eafd21a537cd36c60b0808004041d65a86281cd6818e2fe8bb8f9c702ead89e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eafd21a537cd36c60b0808004041d65a86281cd6818e2fe8bb8f9c702ead89e4->leave($__internal_eafd21a537cd36c60b0808004041d65a86281cd6818e2fe8bb8f9c702ead89e4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f03b07eaf28f38d9a5f2ba134af78ef10f089ec73fbb62e388dd2bac6ff23aa0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f03b07eaf28f38d9a5f2ba134af78ef10f089ec73fbb62e388dd2bac6ff23aa0->enter($__internal_f03b07eaf28f38d9a5f2ba134af78ef10f089ec73fbb62e388dd2bac6ff23aa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f03b07eaf28f38d9a5f2ba134af78ef10f089ec73fbb62e388dd2bac6ff23aa0->leave($__internal_f03b07eaf28f38d9a5f2ba134af78ef10f089ec73fbb62e388dd2bac6ff23aa0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7a3c358f81b042d69cfd7207d2e52ba61bd6baebad73a0b81ed532a932f3cf18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a3c358f81b042d69cfd7207d2e52ba61bd6baebad73a0b81ed532a932f3cf18->enter($__internal_7a3c358f81b042d69cfd7207d2e52ba61bd6baebad73a0b81ed532a932f3cf18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7a3c358f81b042d69cfd7207d2e52ba61bd6baebad73a0b81ed532a932f3cf18->leave($__internal_7a3c358f81b042d69cfd7207d2e52ba61bd6baebad73a0b81ed532a932f3cf18_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8cf80eb330e06d537eea36a76bfdc1f2ce30decea30632bb70bbc221fa5d53ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cf80eb330e06d537eea36a76bfdc1f2ce30decea30632bb70bbc221fa5d53ac->enter($__internal_8cf80eb330e06d537eea36a76bfdc1f2ce30decea30632bb70bbc221fa5d53ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_8cf80eb330e06d537eea36a76bfdc1f2ce30decea30632bb70bbc221fa5d53ac->leave($__internal_8cf80eb330e06d537eea36a76bfdc1f2ce30decea30632bb70bbc221fa5d53ac_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
