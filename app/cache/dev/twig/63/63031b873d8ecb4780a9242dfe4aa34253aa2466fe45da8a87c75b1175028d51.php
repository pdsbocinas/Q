<?php

/* VODBaseBundle:User/Components:tabs.html.twig */
class __TwigTemplate_8b997446cf2829be6c280463cebe5bc8dd9a2b6545573afad521836b66d9f80d extends Twig_Template
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
        $__internal_9b2402073d1d9d89e2b328ea6ba422f090353631e9d3a6f8cb7e3321db3fa5f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b2402073d1d9d89e2b328ea6ba422f090353631e9d3a6f8cb7e3321db3fa5f0->enter($__internal_9b2402073d1d9d89e2b328ea6ba422f090353631e9d3a6f8cb7e3321db3fa5f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:User/Components:tabs.html.twig"));

        // line 2
        echo "
";
        // line 3
        $context["route"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method");
        // line 4
        echo "
<ul class=\"nav nav-tabs nav-profile nav-justified\" role=\"tablist\">
    <li role=\"presentation\" ";
        // line 6
        if (((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")) == "user_data")) {
            echo "class=\"active\"";
        }
        echo ">
        <a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_data");
        echo "\" role=\"tab\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.menu.data", array(), "user"), "html", null, true);
        echo "</a>
    </li>

    <li role=\"presentation\" ";
        // line 10
        if (((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")) == "user_subscription")) {
            echo "class=\"active\"";
        }
        echo ">
    \t<a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_subscription");
        echo "\" role=\"tab\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.menu.subscription", array(), "user"), "html", null, true);
        echo "</a>
    </li>

    <li role=\"presentation\"
        ";
        // line 15
        if (((((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")) == "user_profile") || ((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")) == "user_profile_new")) || ((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")) == "user_profile_edit"))) {
            // line 16
            echo "            class=\"active\"
        ";
        }
        // line 17
        echo ">
    \t<a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_profile");
        echo "\" role=\"tab\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.menu.profiles", array(), "user"), "html", null, true);
        echo "</a>
    </li>

    <li role=\"presentation\" ";
        // line 21
        if (((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")) == "user_parental_control")) {
            echo "class=\"active\"";
        }
        echo ">
    \t<a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_parental_control");
        echo "\" role=\"tab\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.menu.parental_control", array(), "user"), "html", null, true);
        echo "</a>
    </li>

    <li role=\"presentation\" ";
        // line 25
        if (((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")) == "user_consumption")) {
            echo "class=\"active\"";
        }
        echo ">
        <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_consumption");
        echo "\" role=\"tab\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.menu.rental", array(), "user"), "html", null, true);
        echo "</a>
    </li>
</ul>



";
        
        $__internal_9b2402073d1d9d89e2b328ea6ba422f090353631e9d3a6f8cb7e3321db3fa5f0->leave($__internal_9b2402073d1d9d89e2b328ea6ba422f090353631e9d3a6f8cb7e3321db3fa5f0_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:User/Components:tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 26,  91 => 25,  83 => 22,  77 => 21,  69 => 18,  66 => 17,  62 => 16,  60 => 15,  51 => 11,  45 => 10,  37 => 7,  31 => 6,  27 => 4,  25 => 3,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'user' %}

{% set route = app.request.attributes.get('_route') %}

<ul class=\"nav nav-tabs nav-profile nav-justified\" role=\"tablist\">
    <li role=\"presentation\" {% if route == 'user_data' %}class=\"active\"{% endif %}>
        <a href=\"{{ path('user_data') }}\" role=\"tab\">{{ 'user.menu.data' | trans }}</a>
    </li>

    <li role=\"presentation\" {% if route == 'user_subscription' %}class=\"active\"{% endif %}>
    \t<a href=\"{{ path('user_subscription') }}\" role=\"tab\">{{ 'user.menu.subscription' | trans }}</a>
    </li>

    <li role=\"presentation\"
        {% if route == 'user_profile' or route == 'user_profile_new' or route == 'user_profile_edit' %}
            class=\"active\"
        {% endif %}>
    \t<a href=\"{{ path('user_profile') }}\" role=\"tab\">{{ 'user.menu.profiles' | trans }}</a>
    </li>

    <li role=\"presentation\" {% if route == 'user_parental_control' %}class=\"active\"{% endif %}>
    \t<a href=\"{{ path('user_parental_control') }}\" role=\"tab\">{{ 'user.menu.parental_control' | trans }}</a>
    </li>

    <li role=\"presentation\" {% if route == 'user_consumption' %}class=\"active\"{% endif %}>
        <a href=\"{{ path('user_consumption') }}\" role=\"tab\">{{ 'user.menu.rental' | trans }}</a>
    </li>
</ul>



", "VODBaseBundle:User/Components:tabs.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/User/Components/tabs.html.twig");
    }
}
