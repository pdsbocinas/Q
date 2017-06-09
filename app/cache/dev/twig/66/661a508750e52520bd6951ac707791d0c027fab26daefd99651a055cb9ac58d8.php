<?php

/* @VODBase/User/Components/select-profile.html.twig */
class __TwigTemplate_5a70447bd9c7fb322c3db12e1c5a73c2251e7e4e65b4a7b680bfe8bf3b79e226 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("VODBaseBundle:Base/Wrappers:wrapper.html.twig", "@VODBase/User/Components/select-profile.html.twig", 1);
        $this->blocks = array(
            'header_container' => array($this, 'block_header_container'),
            'body_class' => array($this, 'block_body_class'),
            'body_container' => array($this, 'block_body_container'),
            'footer_container' => array($this, 'block_footer_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "VODBaseBundle:Base/Wrappers:wrapper.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_19225654d19c606d9fdacab2770c15da422c3c1858b445d5bdae0a8c9c03afea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19225654d19c606d9fdacab2770c15da422c3c1858b445d5bdae0a8c9c03afea->enter($__internal_19225654d19c606d9fdacab2770c15da422c3c1858b445d5bdae0a8c9c03afea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@VODBase/User/Components/select-profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19225654d19c606d9fdacab2770c15da422c3c1858b445d5bdae0a8c9c03afea->leave($__internal_19225654d19c606d9fdacab2770c15da422c3c1858b445d5bdae0a8c9c03afea_prof);

    }

    // line 3
    public function block_header_container($context, array $blocks = array())
    {
        $__internal_9921360247fb8c201970bd8f1a01773cd0d7323a860b743f890567090ca6a2c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9921360247fb8c201970bd8f1a01773cd0d7323a860b743f890567090ca6a2c0->enter($__internal_9921360247fb8c201970bd8f1a01773cd0d7323a860b743f890567090ca6a2c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_container"));

        
        $__internal_9921360247fb8c201970bd8f1a01773cd0d7323a860b743f890567090ca6a2c0->leave($__internal_9921360247fb8c201970bd8f1a01773cd0d7323a860b743f890567090ca6a2c0_prof);

    }

    // line 4
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_e323a533df719e135c6dca9eb4fdeb008284e716eb2e09c2fb65e21f4a5b4eee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e323a533df719e135c6dca9eb4fdeb008284e716eb2e09c2fb65e21f4a5b4eee->enter($__internal_e323a533df719e135c6dca9eb4fdeb008284e716eb2e09c2fb65e21f4a5b4eee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        if ( !(isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
            echo "class=\"bg-full img-bg-full-";
            echo twig_escape_filter($this->env, twig_random($this->env, (isset($context["bg_images"]) ? $context["bg_images"] : $this->getContext($context, "bg_images"))), "html", null, true);
            echo "\"";
        }
        
        $__internal_e323a533df719e135c6dca9eb4fdeb008284e716eb2e09c2fb65e21f4a5b4eee->leave($__internal_e323a533df719e135c6dca9eb4fdeb008284e716eb2e09c2fb65e21f4a5b4eee_prof);

    }

    // line 6
    public function block_body_container($context, array $blocks = array())
    {
        $__internal_f66650a846f4d9226c4cbf405e62a74e0dcf0e2374bb21f6b076077c367b0c25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f66650a846f4d9226c4cbf405e62a74e0dcf0e2374bb21f6b076077c367b0c25->enter($__internal_f66650a846f4d9226c4cbf405e62a74e0dcf0e2374bb21f6b076077c367b0c25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_container"));

        // line 7
        echo "\t";
        $this->loadTemplate("VODBaseBundle:User/Components:horizontal-profile-selector.html.twig", "@VODBase/User/Components/select-profile.html.twig", 7)->display($context);
        
        $__internal_f66650a846f4d9226c4cbf405e62a74e0dcf0e2374bb21f6b076077c367b0c25->leave($__internal_f66650a846f4d9226c4cbf405e62a74e0dcf0e2374bb21f6b076077c367b0c25_prof);

    }

    // line 10
    public function block_footer_container($context, array $blocks = array())
    {
        $__internal_63d02774c166c7b1623379828f7feff38f6dc756c8a3616a207cd58f67077c5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63d02774c166c7b1623379828f7feff38f6dc756c8a3616a207cd58f67077c5b->enter($__internal_63d02774c166c7b1623379828f7feff38f6dc756c8a3616a207cd58f67077c5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer_container"));

        
        $__internal_63d02774c166c7b1623379828f7feff38f6dc756c8a3616a207cd58f67077c5b->leave($__internal_63d02774c166c7b1623379828f7feff38f6dc756c8a3616a207cd58f67077c5b_prof);

    }

    public function getTemplateName()
    {
        return "@VODBase/User/Components/select-profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 10,  70 => 7,  64 => 6,  48 => 4,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'VODBaseBundle:Base/Wrappers:wrapper.html.twig' %}

{% block header_container %}{% endblock header_container %}
{% block body_class %}{% if not is_mobile %}class=\"bg-full img-bg-full-{{ random(bg_images) }}\"{% endif %}{% endblock body_class %}

{% block body_container %}
\t{% include 'VODBaseBundle:User/Components:horizontal-profile-selector.html.twig' %}
{% endblock body_container %}

{% block footer_container %}
{% endblock footer_container %}", "@VODBase/User/Components/select-profile.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/User/Components/select-profile.html.twig");
    }
}
