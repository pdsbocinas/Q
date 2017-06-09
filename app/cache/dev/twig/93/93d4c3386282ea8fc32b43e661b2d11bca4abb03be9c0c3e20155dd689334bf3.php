<?php

/* VODBaseBundle:Base/Wrappers:wrapper-user.html.twig */
class __TwigTemplate_b5a351b306ae798b89e4d347d1709d0d8ec9e0abf89045219555c1e1e336aec0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("VODBaseBundle:Base/Wrappers:wrapper.html.twig", "VODBaseBundle:Base/Wrappers:wrapper-user.html.twig", 1);
        $this->blocks = array(
            'body_class' => array($this, 'block_body_class'),
            'body_container' => array($this, 'block_body_container'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "VODBaseBundle:Base/Wrappers:wrapper.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4769bee752a123b33902ab25d3d9fcc287e02ae28693141612f0d358f3ce862b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4769bee752a123b33902ab25d3d9fcc287e02ae28693141612f0d358f3ce862b->enter($__internal_4769bee752a123b33902ab25d3d9fcc287e02ae28693141612f0d358f3ce862b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Base/Wrappers:wrapper-user.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4769bee752a123b33902ab25d3d9fcc287e02ae28693141612f0d358f3ce862b->leave($__internal_4769bee752a123b33902ab25d3d9fcc287e02ae28693141612f0d358f3ce862b_prof);

    }

    // line 3
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_b2def1f891289ef8a74f7b211c34c2fd74ee41cc99d255bd052413879e4ea4fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2def1f891289ef8a74f7b211c34c2fd74ee41cc99d255bd052413879e4ea4fd->enter($__internal_b2def1f891289ef8a74f7b211c34c2fd74ee41cc99d255bd052413879e4ea4fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        // line 4
        echo "\tclass=\"bg-user\"
";
        
        $__internal_b2def1f891289ef8a74f7b211c34c2fd74ee41cc99d255bd052413879e4ea4fd->leave($__internal_b2def1f891289ef8a74f7b211c34c2fd74ee41cc99d255bd052413879e4ea4fd_prof);

    }

    // line 7
    public function block_body_container($context, array $blocks = array())
    {
        $__internal_71f19e503f825df27bb10d15313f7e0f7c1a2f223688fb8e6f52cf4e300c171b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71f19e503f825df27bb10d15313f7e0f7c1a2f223688fb8e6f52cf4e300c171b->enter($__internal_71f19e503f825df27bb10d15313f7e0f7c1a2f223688fb8e6f52cf4e300c171b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_container"));

        // line 8
        echo "    <div class=\"container-wrapper\">
\t\t<div class=\"container-user\">
\t\t\t";
        // line 10
        if ( !(isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
            // line 11
            $this->loadTemplate("VODBaseBundle:User/Components:tabs.html.twig", "VODBaseBundle:Base/Wrappers:wrapper-user.html.twig", 11)->display($context);
        }
        // line 13
        echo "\t\t\t";
        $this->displayBlock('content', $context, $blocks);
        // line 14
        echo "\t\t</div>
    </div>
";
        
        $__internal_71f19e503f825df27bb10d15313f7e0f7c1a2f223688fb8e6f52cf4e300c171b->leave($__internal_71f19e503f825df27bb10d15313f7e0f7c1a2f223688fb8e6f52cf4e300c171b_prof);

    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        $__internal_d3570cf3fdf6f1344484b00529de59410a16c243deaf627a4bb8bd8d4b6a8d88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3570cf3fdf6f1344484b00529de59410a16c243deaf627a4bb8bd8d4b6a8d88->enter($__internal_d3570cf3fdf6f1344484b00529de59410a16c243deaf627a4bb8bd8d4b6a8d88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_d3570cf3fdf6f1344484b00529de59410a16c243deaf627a4bb8bd8d4b6a8d88->leave($__internal_d3570cf3fdf6f1344484b00529de59410a16c243deaf627a4bb8bd8d4b6a8d88_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Base/Wrappers:wrapper-user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 13,  68 => 14,  65 => 13,  62 => 11,  60 => 10,  56 => 8,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
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

{% block body_class %}
\tclass=\"bg-user\"
{% endblock body_class %}

{% block body_container %}
    <div class=\"container-wrapper\">
\t\t<div class=\"container-user\">
\t\t\t{% if not is_mobile %}
\t\t\t\t{%- include 'VODBaseBundle:User/Components:tabs.html.twig' -%}
\t\t\t{% endif %}
\t\t\t{% block content %}{% endblock content %}
\t\t</div>
    </div>
{% endblock body_container %}
", "VODBaseBundle:Base/Wrappers:wrapper-user.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/Base/Wrappers/wrapper-user.html.twig");
    }
}
