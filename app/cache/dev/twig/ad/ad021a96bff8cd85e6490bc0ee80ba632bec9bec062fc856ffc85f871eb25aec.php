<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_09c99dbd59ff7bb07aeeab1655fd9ab56e9f536e4e1e177e28fb4dd008a68587 extends Twig_Template
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
        $__internal_36ef0cf106a87f9726a6d473d4661bcbc5099310d1a6a74944469b27444d3cec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36ef0cf106a87f9726a6d473d4661bcbc5099310d1a6a74944469b27444d3cec->enter($__internal_36ef0cf106a87f9726a6d473d4661bcbc5099310d1a6a74944469b27444d3cec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36ef0cf106a87f9726a6d473d4661bcbc5099310d1a6a74944469b27444d3cec->leave($__internal_36ef0cf106a87f9726a6d473d4661bcbc5099310d1a6a74944469b27444d3cec_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_50aac930c3a7093a7d76119b18b14c1c67746881939a2daee87d40bb6fe01c58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50aac930c3a7093a7d76119b18b14c1c67746881939a2daee87d40bb6fe01c58->enter($__internal_50aac930c3a7093a7d76119b18b14c1c67746881939a2daee87d40bb6fe01c58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_50aac930c3a7093a7d76119b18b14c1c67746881939a2daee87d40bb6fe01c58->leave($__internal_50aac930c3a7093a7d76119b18b14c1c67746881939a2daee87d40bb6fe01c58_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_bb06f8eb6aa9ed8fa23a8890813734cd3db93218785f12d3956d20616b90c35c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb06f8eb6aa9ed8fa23a8890813734cd3db93218785f12d3956d20616b90c35c->enter($__internal_bb06f8eb6aa9ed8fa23a8890813734cd3db93218785f12d3956d20616b90c35c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_bb06f8eb6aa9ed8fa23a8890813734cd3db93218785f12d3956d20616b90c35c->leave($__internal_bb06f8eb6aa9ed8fa23a8890813734cd3db93218785f12d3956d20616b90c35c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9fd955bfbd4112de90feb85cb4387fad6ec751577699a2adbda4f8b0205f4e4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fd955bfbd4112de90feb85cb4387fad6ec751577699a2adbda4f8b0205f4e4a->enter($__internal_9fd955bfbd4112de90feb85cb4387fad6ec751577699a2adbda4f8b0205f4e4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_9fd955bfbd4112de90feb85cb4387fad6ec751577699a2adbda4f8b0205f4e4a->leave($__internal_9fd955bfbd4112de90feb85cb4387fad6ec751577699a2adbda4f8b0205f4e4a_prof);

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
