<?php

/* VODBaseBundle:Home/Landings:welcome-landing.html.twig */
class __TwigTemplate_8c0933488fa090f3a0d094c8147b2aeea99d89fdde93b536cfda1082b8f54e64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("VODBaseBundle:Base/Wrappers:wrapper-landing.html.twig", "VODBaseBundle:Home/Landings:welcome-landing.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body_class' => array($this, 'block_body_class'),
            'header_container' => array($this, 'block_header_container'),
            'custom_javascript' => array($this, 'block_custom_javascript'),
            'body_container' => array($this, 'block_body_container'),
            'landing_section1' => array($this, 'block_landing_section1'),
            'landing_section2' => array($this, 'block_landing_section2'),
            'landing_section3' => array($this, 'block_landing_section3'),
            'landing_section4' => array($this, 'block_landing_section4'),
            'landing_section5' => array($this, 'block_landing_section5'),
            'landing_section6' => array($this, 'block_landing_section6'),
            'landing_section7' => array($this, 'block_landing_section7'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "VODBaseBundle:Base/Wrappers:wrapper-landing.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cff936471191abb2faa636e8ef0e2456858eebdf33c20adfc2737e26c46a42fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cff936471191abb2faa636e8ef0e2456858eebdf33c20adfc2737e26c46a42fe->enter($__internal_cff936471191abb2faa636e8ef0e2456858eebdf33c20adfc2737e26c46a42fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Home/Landings:welcome-landing.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cff936471191abb2faa636e8ef0e2456858eebdf33c20adfc2737e26c46a42fe->leave($__internal_cff936471191abb2faa636e8ef0e2456858eebdf33c20adfc2737e26c46a42fe_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_d81aa40da47cf2d04ed96d4472fbdbefc63f3e2e608d7753340020cd66e936c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d81aa40da47cf2d04ed96d4472fbdbefc63f3e2e608d7753340020cd66e936c0->enter($__internal_d81aa40da47cf2d04ed96d4472fbdbefc63f3e2e608d7753340020cd66e936c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 6
        echo "    ";
        $this->loadTemplate("VODBaseBundle:Home/Landings:welcome-landing.html.twig", "VODBaseBundle:Home/Landings:welcome-landing.html.twig", 6, "1225456986")->display($context);
        
        $__internal_d81aa40da47cf2d04ed96d4472fbdbefc63f3e2e608d7753340020cd66e936c0->leave($__internal_d81aa40da47cf2d04ed96d4472fbdbefc63f3e2e608d7753340020cd66e936c0_prof);

    }

    // line 22
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_6e7e0ef34aab8ba83f197dad5066dc8b0c2d9b9b5b90eeea720d6fec3aee9a76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e7e0ef34aab8ba83f197dad5066dc8b0c2d9b9b5b90eeea720d6fec3aee9a76->enter($__internal_6e7e0ef34aab8ba83f197dad5066dc8b0c2d9b9b5b90eeea720d6fec3aee9a76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo " ";
        if ((isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
            echo "class=\"hidding-nav\"";
        } else {
            echo " class=\"body-parallax\"";
        }
        echo " ";
        
        $__internal_6e7e0ef34aab8ba83f197dad5066dc8b0c2d9b9b5b90eeea720d6fec3aee9a76->leave($__internal_6e7e0ef34aab8ba83f197dad5066dc8b0c2d9b9b5b90eeea720d6fec3aee9a76_prof);

    }

    // line 26
    public function block_header_container($context, array $blocks = array())
    {
        $__internal_89425efb0541d1f9c66fa899505a81ad6ab34ab8a80911f7c7ff83f4cc4f283d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89425efb0541d1f9c66fa899505a81ad6ab34ab8a80911f7c7ff83f4cc4f283d->enter($__internal_89425efb0541d1f9c66fa899505a81ad6ab34ab8a80911f7c7ff83f4cc4f283d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_container"));

        // line 27
        echo "\t";
        $this->loadTemplate("VODBaseBundle:Base/Components/Header:navbar-landing-home.html.twig", "VODBaseBundle:Home/Landings:welcome-landing.html.twig", 27)->display($context);
        
        $__internal_89425efb0541d1f9c66fa899505a81ad6ab34ab8a80911f7c7ff83f4cc4f283d->leave($__internal_89425efb0541d1f9c66fa899505a81ad6ab34ab8a80911f7c7ff83f4cc4f283d_prof);

    }

    // line 30
    public function block_custom_javascript($context, array $blocks = array())
    {
        $__internal_37232937d41ec4c749ae4fe357e454136c6758dcdfe25d66ef7340965a5b7461 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37232937d41ec4c749ae4fe357e454136c6758dcdfe25d66ef7340965a5b7461->enter($__internal_37232937d41ec4c749ae4fe357e454136c6758dcdfe25d66ef7340965a5b7461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "custom_javascript"));

        // line 31
        echo "    ";
        $this->loadTemplate("VODBaseBundle:Base/Components/Scripts:landing-scripts.html.twig", "VODBaseBundle:Home/Landings:welcome-landing.html.twig", 31)->display($context);
        
        $__internal_37232937d41ec4c749ae4fe357e454136c6758dcdfe25d66ef7340965a5b7461->leave($__internal_37232937d41ec4c749ae4fe357e454136c6758dcdfe25d66ef7340965a5b7461_prof);

    }

    // line 34
    public function block_body_container($context, array $blocks = array())
    {
        $__internal_bd1d1c287fc321850c9ebb8d31988350f0ab6882dfba4e4e28a64c8793e330f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd1d1c287fc321850c9ebb8d31988350f0ab6882dfba4e4e28a64c8793e330f0->enter($__internal_bd1d1c287fc321850c9ebb8d31988350f0ab6882dfba4e4e28a64c8793e330f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_container"));

        // line 35
        echo "\t<div class=\"container-landing\" id=\"top\">
\t\t";
        // line 36
        $this->displayBlock('landing_section1', $context, $blocks);
        // line 39
        echo "\t\t
\t\t";
        // line 40
        if ( !(isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
            // line 41
            echo "\t\t\t";
            $this->displayBlock('landing_section2', $context, $blocks);
            // line 44
            echo "\t\t\t
\t\t\t";
            // line 45
            $this->displayBlock('landing_section3', $context, $blocks);
            // line 48
            echo "\t\t";
        }
        // line 49
        echo "\t\t
\t\t";
        // line 50
        $this->displayBlock('landing_section4', $context, $blocks);
        // line 53
        echo "
\t\t";
        // line 54
        if ( !(isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
            // line 55
            echo "\t\t\t";
            $this->displayBlock('landing_section5', $context, $blocks);
            // line 58
            echo "\t\t\t
\t\t\t";
            // line 59
            $this->displayBlock('landing_section6', $context, $blocks);
            // line 62
            echo "\t\t";
        }
        // line 63
        echo "\t\t
\t\t";
        // line 64
        $this->displayBlock('landing_section7', $context, $blocks);
        // line 67
        echo "\t</div>
";
        
        $__internal_bd1d1c287fc321850c9ebb8d31988350f0ab6882dfba4e4e28a64c8793e330f0->leave($__internal_bd1d1c287fc321850c9ebb8d31988350f0ab6882dfba4e4e28a64c8793e330f0_prof);

    }

    // line 36
    public function block_landing_section1($context, array $blocks = array())
    {
        $__internal_efc6817ce8b490465425494b27274679261a12b0d8a4a33991ca116a995cafe2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efc6817ce8b490465425494b27274679261a12b0d8a4a33991ca116a995cafe2->enter($__internal_efc6817ce8b490465425494b27274679261a12b0d8a4a33991ca116a995cafe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "landing_section1"));

        // line 37
        echo "\t\t\t";
        $this->loadTemplate("VODBaseBundle:Home/Landings/Sections:welcome-landing-section1.html.twig", "VODBaseBundle:Home/Landings:welcome-landing.html.twig", 37)->display($context);
        // line 38
        echo "\t\t";
        
        $__internal_efc6817ce8b490465425494b27274679261a12b0d8a4a33991ca116a995cafe2->leave($__internal_efc6817ce8b490465425494b27274679261a12b0d8a4a33991ca116a995cafe2_prof);

    }

    // line 41
    public function block_landing_section2($context, array $blocks = array())
    {
        $__internal_b8eca3668c5dfd7cf69e776a772d1eda5c4ad45767f6b3e35b35de3226d66b13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8eca3668c5dfd7cf69e776a772d1eda5c4ad45767f6b3e35b35de3226d66b13->enter($__internal_b8eca3668c5dfd7cf69e776a772d1eda5c4ad45767f6b3e35b35de3226d66b13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "landing_section2"));

        // line 42
        echo "\t\t\t\t";
        $this->loadTemplate("VODBaseBundle:Home/Landings/Sections:welcome-landing-section2.html.twig", "VODBaseBundle:Home/Landings:welcome-landing.html.twig", 42)->display($context);
        // line 43
        echo "\t\t\t";
        
        $__internal_b8eca3668c5dfd7cf69e776a772d1eda5c4ad45767f6b3e35b35de3226d66b13->leave($__internal_b8eca3668c5dfd7cf69e776a772d1eda5c4ad45767f6b3e35b35de3226d66b13_prof);

    }

    // line 45
    public function block_landing_section3($context, array $blocks = array())
    {
        $__internal_cae1436fa7faf45b6039372008be5ae51bd39553f157436543553da0aee5c3ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cae1436fa7faf45b6039372008be5ae51bd39553f157436543553da0aee5c3ee->enter($__internal_cae1436fa7faf45b6039372008be5ae51bd39553f157436543553da0aee5c3ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "landing_section3"));

        // line 46
        echo "\t\t\t\t";
        $this->loadTemplate("VODBaseBundle:Home/Landings/Sections:welcome-landing-section3.html.twig", "VODBaseBundle:Home/Landings:welcome-landing.html.twig", 46)->display($context);
        // line 47
        echo "\t\t\t";
        
        $__internal_cae1436fa7faf45b6039372008be5ae51bd39553f157436543553da0aee5c3ee->leave($__internal_cae1436fa7faf45b6039372008be5ae51bd39553f157436543553da0aee5c3ee_prof);

    }

    // line 50
    public function block_landing_section4($context, array $blocks = array())
    {
        $__internal_a91b4c1966ff39f159ae68538f900c38054d3fd1396fe449f79c7231ce081a36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a91b4c1966ff39f159ae68538f900c38054d3fd1396fe449f79c7231ce081a36->enter($__internal_a91b4c1966ff39f159ae68538f900c38054d3fd1396fe449f79c7231ce081a36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "landing_section4"));

        // line 51
        echo "\t\t\t";
        $this->loadTemplate("VODBaseBundle:Home/Landings/Sections:welcome-landing-section4.html.twig", "VODBaseBundle:Home/Landings:welcome-landing.html.twig", 51)->display($context);
        // line 52
        echo "\t\t";
        
        $__internal_a91b4c1966ff39f159ae68538f900c38054d3fd1396fe449f79c7231ce081a36->leave($__internal_a91b4c1966ff39f159ae68538f900c38054d3fd1396fe449f79c7231ce081a36_prof);

    }

    // line 55
    public function block_landing_section5($context, array $blocks = array())
    {
        $__internal_c187edc1aefd1f2e6424ee20a7874821af3a10627bdd14cd2c7933a03c7a1c88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c187edc1aefd1f2e6424ee20a7874821af3a10627bdd14cd2c7933a03c7a1c88->enter($__internal_c187edc1aefd1f2e6424ee20a7874821af3a10627bdd14cd2c7933a03c7a1c88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "landing_section5"));

        // line 56
        echo "\t\t\t\t";
        $this->loadTemplate("VODBaseBundle:Home/Landings/Sections:welcome-landing-section5.html.twig", "VODBaseBundle:Home/Landings:welcome-landing.html.twig", 56)->display($context);
        // line 57
        echo "\t\t\t";
        
        $__internal_c187edc1aefd1f2e6424ee20a7874821af3a10627bdd14cd2c7933a03c7a1c88->leave($__internal_c187edc1aefd1f2e6424ee20a7874821af3a10627bdd14cd2c7933a03c7a1c88_prof);

    }

    // line 59
    public function block_landing_section6($context, array $blocks = array())
    {
        $__internal_bfbd83942cb5a306ddfae133dba9242e55012baea839aae9f1d4d513f9a6c0a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfbd83942cb5a306ddfae133dba9242e55012baea839aae9f1d4d513f9a6c0a2->enter($__internal_bfbd83942cb5a306ddfae133dba9242e55012baea839aae9f1d4d513f9a6c0a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "landing_section6"));

        // line 60
        echo "\t\t\t\t";
        $this->loadTemplate("VODBaseBundle:Home/Landings/Sections:welcome-landing-section6.html.twig", "VODBaseBundle:Home/Landings:welcome-landing.html.twig", 60)->display($context);
        // line 61
        echo "\t\t\t";
        
        $__internal_bfbd83942cb5a306ddfae133dba9242e55012baea839aae9f1d4d513f9a6c0a2->leave($__internal_bfbd83942cb5a306ddfae133dba9242e55012baea839aae9f1d4d513f9a6c0a2_prof);

    }

    // line 64
    public function block_landing_section7($context, array $blocks = array())
    {
        $__internal_6400765713a9bba0266d03a6738dcf3c9ddb70a533aa51ef95c48224e5a79cdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6400765713a9bba0266d03a6738dcf3c9ddb70a533aa51ef95c48224e5a79cdf->enter($__internal_6400765713a9bba0266d03a6738dcf3c9ddb70a533aa51ef95c48224e5a79cdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "landing_section7"));

        // line 65
        echo "\t\t\t";
        $this->loadTemplate("VODBaseBundle:Home/Landings/Sections:welcome-landing-section7.html.twig", "VODBaseBundle:Home/Landings:welcome-landing.html.twig", 65)->display($context);
        // line 66
        echo "\t\t";
        
        $__internal_6400765713a9bba0266d03a6738dcf3c9ddb70a533aa51ef95c48224e5a79cdf->leave($__internal_6400765713a9bba0266d03a6738dcf3c9ddb70a533aa51ef95c48224e5a79cdf_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Home/Landings:welcome-landing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 66,  268 => 65,  262 => 64,  255 => 61,  252 => 60,  246 => 59,  239 => 57,  236 => 56,  230 => 55,  223 => 52,  220 => 51,  214 => 50,  207 => 47,  204 => 46,  198 => 45,  191 => 43,  188 => 42,  182 => 41,  175 => 38,  172 => 37,  166 => 36,  158 => 67,  156 => 64,  153 => 63,  150 => 62,  148 => 59,  145 => 58,  142 => 55,  140 => 54,  137 => 53,  135 => 50,  132 => 49,  129 => 48,  127 => 45,  124 => 44,  121 => 41,  119 => 40,  116 => 39,  114 => 36,  111 => 35,  105 => 34,  97 => 31,  91 => 30,  83 => 27,  77 => 26,  59 => 22,  51 => 6,  45 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'VODBaseBundle:Base/Wrappers:wrapper-landing.html.twig' %}

{% trans_default_domain 'common' %}

{% block head %}
    {% embed 'VODBaseBundle:Base/Components/Header:head.html.twig' %}
        {% block meta_description %}{{ 'common.titles.description' | trans({}, 'common') }}{% endblock meta_description %}
    \t{% block meta %}
            {{ parent() }}
            {% include 'VODBaseBundle:Content/Components:facebook-meta-tags.html.twig' with ({ 
                'detail'        : false, 
                'url'           : absolute_url(path(app.request.get('_route'))),
                'title'         : 'common.titles.home_title' | trans({}, 'common'),
                'description'   : 'common.titles.description' | trans({}, 'common')
                }) 
            %}
            {% include 'VODBaseBundle:New/Components:canonical-header.html.twig' %}
        {% endblock meta %}
    {% endembed %}
{% endblock head %}

{% block body_class %} {% if is_mobile %}class=\"hidding-nav\"{% else %} class=\"body-parallax\"{% endif %} {% endblock body_class %}

{# Reemplace el include del twig navbar-landing-home.html.twig #}

{% block header_container %}
\t{% include 'VODBaseBundle:Base/Components/Header:navbar-landing-home.html.twig' %}
{% endblock header_container %}

{% block custom_javascript %}
    {% include 'VODBaseBundle:Base/Components/Scripts:landing-scripts.html.twig'  %}
{% endblock custom_javascript %}

{% block body_container %}
\t<div class=\"container-landing\" id=\"top\">
\t\t{% block landing_section1 %}
\t\t\t{% include 'VODBaseBundle:Home/Landings/Sections:welcome-landing-section1.html.twig' %}
\t\t{% endblock landing_section1 %}
\t\t
\t\t{% if not is_mobile %}
\t\t\t{% block landing_section2 %}
\t\t\t\t{% include 'VODBaseBundle:Home/Landings/Sections:welcome-landing-section2.html.twig' %}
\t\t\t{% endblock landing_section2 %}
\t\t\t
\t\t\t{% block landing_section3 %}
\t\t\t\t{% include 'VODBaseBundle:Home/Landings/Sections:welcome-landing-section3.html.twig' %}
\t\t\t{% endblock landing_section3 %}
\t\t{% endif %}
\t\t
\t\t{% block landing_section4 %}
\t\t\t{% include 'VODBaseBundle:Home/Landings/Sections:welcome-landing-section4.html.twig' %}
\t\t{% endblock landing_section4 %}

\t\t{% if not is_mobile %}
\t\t\t{% block landing_section5 %}
\t\t\t\t{% include 'VODBaseBundle:Home/Landings/Sections:welcome-landing-section5.html.twig' %}
\t\t\t{% endblock landing_section5 %}
\t\t\t
\t\t\t{% block landing_section6 %}
\t\t\t\t{% include 'VODBaseBundle:Home/Landings/Sections:welcome-landing-section6.html.twig' %}
\t\t\t{% endblock landing_section6 %}
\t\t{% endif %}
\t\t
\t\t{% block landing_section7 %}
\t\t\t{% include 'VODBaseBundle:Home/Landings/Sections:welcome-landing-section7.html.twig' %}
\t\t{% endblock landing_section7 %}
\t</div>
{% endblock %}", "VODBaseBundle:Home/Landings:welcome-landing.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/Home/Landings/welcome-landing.html.twig");
    }
}


/* VODBaseBundle:Home/Landings:welcome-landing.html.twig */
class __TwigTemplate_8c0933488fa090f3a0d094c8147b2aeea99d89fdde93b536cfda1082b8f54e64_1225456986 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 6
        $this->parent = $this->loadTemplate("VODBaseBundle:Base/Components/Header:head.html.twig", "VODBaseBundle:Home/Landings:welcome-landing.html.twig", 6);
        $this->blocks = array(
            'meta_description' => array($this, 'block_meta_description'),
            'meta' => array($this, 'block_meta'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "VODBaseBundle:Base/Components/Header:head.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e90596a16b04f9a783096c3872e4a6c5e7644f430894b6aae36423a67d3b258b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e90596a16b04f9a783096c3872e4a6c5e7644f430894b6aae36423a67d3b258b->enter($__internal_e90596a16b04f9a783096c3872e4a6c5e7644f430894b6aae36423a67d3b258b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Home/Landings:welcome-landing.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e90596a16b04f9a783096c3872e4a6c5e7644f430894b6aae36423a67d3b258b->leave($__internal_e90596a16b04f9a783096c3872e4a6c5e7644f430894b6aae36423a67d3b258b_prof);

    }

    // line 7
    public function block_meta_description($context, array $blocks = array())
    {
        $__internal_ab8f011a6d59781c9d05a2f0b67bbfd49ac97c9ec95c2c2ae827c9d5c270d8dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab8f011a6d59781c9d05a2f0b67bbfd49ac97c9ec95c2c2ae827c9d5c270d8dd->enter($__internal_ab8f011a6d59781c9d05a2f0b67bbfd49ac97c9ec95c2c2ae827c9d5c270d8dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_description"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.titles.description", array(), "common"), "html", null, true);
        
        $__internal_ab8f011a6d59781c9d05a2f0b67bbfd49ac97c9ec95c2c2ae827c9d5c270d8dd->leave($__internal_ab8f011a6d59781c9d05a2f0b67bbfd49ac97c9ec95c2c2ae827c9d5c270d8dd_prof);

    }

    // line 8
    public function block_meta($context, array $blocks = array())
    {
        $__internal_125513085edca5f76d61fb2f6f50b76bfba17f676291aeec0bd643ecc9748184 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_125513085edca5f76d61fb2f6f50b76bfba17f676291aeec0bd643ecc9748184->enter($__internal_125513085edca5f76d61fb2f6f50b76bfba17f676291aeec0bd643ecc9748184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        // line 9
        echo "            ";
        $this->displayParentBlock("meta", $context, $blocks);
        echo "
            ";
        // line 10
        $this->loadTemplate("VODBaseBundle:Content/Components:facebook-meta-tags.html.twig", "VODBaseBundle:Home/Landings:welcome-landing.html.twig", 10)->display(array_merge($context, array("detail" => false, "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute(        // line 12
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method"))), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.titles.home_title", array(), "common"), "description" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.titles.description", array(), "common"))));
        // line 17
        echo "            ";
        $this->loadTemplate("VODBaseBundle:New/Components:canonical-header.html.twig", "VODBaseBundle:Home/Landings:welcome-landing.html.twig", 17)->display($context);
        // line 18
        echo "        ";
        
        $__internal_125513085edca5f76d61fb2f6f50b76bfba17f676291aeec0bd643ecc9748184->leave($__internal_125513085edca5f76d61fb2f6f50b76bfba17f676291aeec0bd643ecc9748184_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Home/Landings:welcome-landing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  435 => 18,  432 => 17,  430 => 12,  429 => 10,  424 => 9,  418 => 8,  406 => 7,  382 => 6,  271 => 66,  268 => 65,  262 => 64,  255 => 61,  252 => 60,  246 => 59,  239 => 57,  236 => 56,  230 => 55,  223 => 52,  220 => 51,  214 => 50,  207 => 47,  204 => 46,  198 => 45,  191 => 43,  188 => 42,  182 => 41,  175 => 38,  172 => 37,  166 => 36,  158 => 67,  156 => 64,  153 => 63,  150 => 62,  148 => 59,  145 => 58,  142 => 55,  140 => 54,  137 => 53,  135 => 50,  132 => 49,  129 => 48,  127 => 45,  124 => 44,  121 => 41,  119 => 40,  116 => 39,  114 => 36,  111 => 35,  105 => 34,  97 => 31,  91 => 30,  83 => 27,  77 => 26,  59 => 22,  51 => 6,  45 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'VODBaseBundle:Base/Wrappers:wrapper-landing.html.twig' %}

{% trans_default_domain 'common' %}

{% block head %}
    {% embed 'VODBaseBundle:Base/Components/Header:head.html.twig' %}
        {% block meta_description %}{{ 'common.titles.description' | trans({}, 'common') }}{% endblock meta_description %}
    \t{% block meta %}
            {{ parent() }}
            {% include 'VODBaseBundle:Content/Components:facebook-meta-tags.html.twig' with ({ 
                'detail'        : false, 
                'url'           : absolute_url(path(app.request.get('_route'))),
                'title'         : 'common.titles.home_title' | trans({}, 'common'),
                'description'   : 'common.titles.description' | trans({}, 'common')
                }) 
            %}
            {% include 'VODBaseBundle:New/Components:canonical-header.html.twig' %}
        {% endblock meta %}
    {% endembed %}
{% endblock head %}

{% block body_class %} {% if is_mobile %}class=\"hidding-nav\"{% else %} class=\"body-parallax\"{% endif %} {% endblock body_class %}

{# Reemplace el include del twig navbar-landing-home.html.twig #}

{% block header_container %}
\t{% include 'VODBaseBundle:Base/Components/Header:navbar-landing-home.html.twig' %}
{% endblock header_container %}

{% block custom_javascript %}
    {% include 'VODBaseBundle:Base/Components/Scripts:landing-scripts.html.twig'  %}
{% endblock custom_javascript %}

{% block body_container %}
\t<div class=\"container-landing\" id=\"top\">
\t\t{% block landing_section1 %}
\t\t\t{% include 'VODBaseBundle:Home/Landings/Sections:welcome-landing-section1.html.twig' %}
\t\t{% endblock landing_section1 %}
\t\t
\t\t{% if not is_mobile %}
\t\t\t{% block landing_section2 %}
\t\t\t\t{% include 'VODBaseBundle:Home/Landings/Sections:welcome-landing-section2.html.twig' %}
\t\t\t{% endblock landing_section2 %}
\t\t\t
\t\t\t{% block landing_section3 %}
\t\t\t\t{% include 'VODBaseBundle:Home/Landings/Sections:welcome-landing-section3.html.twig' %}
\t\t\t{% endblock landing_section3 %}
\t\t{% endif %}
\t\t
\t\t{% block landing_section4 %}
\t\t\t{% include 'VODBaseBundle:Home/Landings/Sections:welcome-landing-section4.html.twig' %}
\t\t{% endblock landing_section4 %}

\t\t{% if not is_mobile %}
\t\t\t{% block landing_section5 %}
\t\t\t\t{% include 'VODBaseBundle:Home/Landings/Sections:welcome-landing-section5.html.twig' %}
\t\t\t{% endblock landing_section5 %}
\t\t\t
\t\t\t{% block landing_section6 %}
\t\t\t\t{% include 'VODBaseBundle:Home/Landings/Sections:welcome-landing-section6.html.twig' %}
\t\t\t{% endblock landing_section6 %}
\t\t{% endif %}
\t\t
\t\t{% block landing_section7 %}
\t\t\t{% include 'VODBaseBundle:Home/Landings/Sections:welcome-landing-section7.html.twig' %}
\t\t{% endblock landing_section7 %}
\t</div>
{% endblock %}", "VODBaseBundle:Home/Landings:welcome-landing.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/Home/Landings/welcome-landing.html.twig");
    }
}
