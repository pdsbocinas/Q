<?php

/* VODItvBaseBundle:Home:index.html.twig */
class __TwigTemplate_6694c338e82d1e0513a13b6ee7306edc1fe6eb56daa800f076a2bedb3477ee00 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("VODItvBaseBundle:Base:base.html.twig", "VODItvBaseBundle:Home:index.html.twig", 1);
        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'body_container' => array($this, 'block_body_container'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "VODItvBaseBundle:Base:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c21e790e2cfdcf46e4b0aae7710efbb4a513bcbefca07a705526e9ad9104e720 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c21e790e2cfdcf46e4b0aae7710efbb4a513bcbefca07a705526e9ad9104e720->enter($__internal_c21e790e2cfdcf46e4b0aae7710efbb4a513bcbefca07a705526e9ad9104e720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODItvBaseBundle:Home:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c21e790e2cfdcf46e4b0aae7710efbb4a513bcbefca07a705526e9ad9104e720->leave($__internal_c21e790e2cfdcf46e4b0aae7710efbb4a513bcbefca07a705526e9ad9104e720_prof);

    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_a25a61d99b551dd87a1f4e9aca2f25b80e8e26a15f4d48fd105d3e4950060fb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a25a61d99b551dd87a1f4e9aca2f25b80e8e26a15f4d48fd105d3e4950060fb9->enter($__internal_a25a61d99b551dd87a1f4e9aca2f25b80e8e26a15f4d48fd105d3e4950060fb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 4
        echo "    <link href=\"//fonts.googleapis.com/css?family=Roboto\" rel=\"stylesheet\">
    ";
        // line 5
        if (((isset($context["itv_debug"]) ? $context["itv_debug"] : $this->getContext($context, "itv_debug")) == false)) {
            // line 6
            echo "        <link href=";
            echo twig_escape_filter($this->env, (isset($context["itv_cdn_url"]) ? $context["itv_cdn_url"] : $this->getContext($context, "itv_cdn_url")), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["itv_version"]) ? $context["itv_version"] : $this->getContext($context, "itv_version")), "html", null, true);
            echo "/css/app.css rel=stylesheet>
    ";
        } else {
            // line 8
            echo "        <link href=\"http://localhost:8080/style.css\" rel=stylesheet>
    ";
        }
        
        $__internal_a25a61d99b551dd87a1f4e9aca2f25b80e8e26a15f4d48fd105d3e4950060fb9->leave($__internal_a25a61d99b551dd87a1f4e9aca2f25b80e8e26a15f4d48fd105d3e4950060fb9_prof);

    }

    // line 12
    public function block_body_container($context, array $blocks = array())
    {
        $__internal_48062450f4a83de220660091bcfa0fa1ed972c16110d181198117a54b72059a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48062450f4a83de220660091bcfa0fa1ed972c16110d181198117a54b72059a3->enter($__internal_48062450f4a83de220660091bcfa0fa1ed972c16110d181198117a54b72059a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_container"));

        // line 13
        echo "    <div id=app></div>
";
        
        $__internal_48062450f4a83de220660091bcfa0fa1ed972c16110d181198117a54b72059a3->leave($__internal_48062450f4a83de220660091bcfa0fa1ed972c16110d181198117a54b72059a3_prof);

    }

    // line 16
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_9a20fd746713959d6d9bdfabc154294ffc280163fadddd4bcdddde037898643c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a20fd746713959d6d9bdfabc154294ffc280163fadddd4bcdddde037898643c->enter($__internal_9a20fd746713959d6d9bdfabc154294ffc280163fadddd4bcdddde037898643c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 17
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
    ";
        // line 18
        if (((isset($context["itv_debug"]) ? $context["itv_debug"] : $this->getContext($context, "itv_debug")) == false)) {
            // line 19
            echo "        <script type=text/javascript src=";
            echo twig_escape_filter($this->env, (isset($context["itv_cdn_url"]) ? $context["itv_cdn_url"] : $this->getContext($context, "itv_cdn_url")), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["itv_version"]) ? $context["itv_version"] : $this->getContext($context, "itv_version")), "html", null, true);
            echo "/js/manifest.js></script>
        <script type=text/javascript src=";
            // line 20
            echo twig_escape_filter($this->env, (isset($context["itv_cdn_url"]) ? $context["itv_cdn_url"] : $this->getContext($context, "itv_cdn_url")), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["itv_version"]) ? $context["itv_version"] : $this->getContext($context, "itv_version")), "html", null, true);
            echo "/js/vendor.js></script>
        <script type=text/javascript src=";
            // line 21
            echo twig_escape_filter($this->env, (isset($context["itv_cdn_url"]) ? $context["itv_cdn_url"] : $this->getContext($context, "itv_cdn_url")), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["itv_version"]) ? $context["itv_version"] : $this->getContext($context, "itv_version")), "html", null, true);
            echo "/js/app.js></script>
    ";
        } else {
            // line 23
            echo "        <script type=text/javascript src=\"http://localhost:8080/app.js\"></script>
    ";
        }
        
        $__internal_9a20fd746713959d6d9bdfabc154294ffc280163fadddd4bcdddde037898643c->leave($__internal_9a20fd746713959d6d9bdfabc154294ffc280163fadddd4bcdddde037898643c_prof);

    }

    public function getTemplateName()
    {
        return "VODItvBaseBundle:Home:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 23,  104 => 21,  98 => 20,  91 => 19,  89 => 18,  84 => 17,  78 => 16,  70 => 13,  64 => 12,  55 => 8,  47 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'VODItvBaseBundle:Base:base.html.twig' %}

{% block stylesheet %}
    <link href=\"//fonts.googleapis.com/css?family=Roboto\" rel=\"stylesheet\">
    {% if itv_debug == false %}
        <link href={{itv_cdn_url}}/{{ itv_version }}/css/app.css rel=stylesheet>
    {% else %}
        <link href=\"http://localhost:8080/style.css\" rel=stylesheet>
    {% endif %}
{% endblock stylesheet %}

{% block body_container %}
    <div id=app></div>
{% endblock body_container %}

{% block javascript %}
    {{ parent() }}
    {% if itv_debug == false %}
        <script type=text/javascript src={{itv_cdn_url}}/{{ itv_version }}/js/manifest.js></script>
        <script type=text/javascript src={{itv_cdn_url}}/{{ itv_version }}/js/vendor.js></script>
        <script type=text/javascript src={{itv_cdn_url}}/{{ itv_version }}/js/app.js></script>
    {% else %}
        <script type=text/javascript src=\"http://localhost:8080/app.js\"></script>
    {% endif %}
{% endblock javascript %}", "VODItvBaseBundle:Home:index.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/itv-base-bundle/Resources/views/Home/index.html.twig");
    }
}
