<?php

/* VODBaseBundle:Base/Components/Header:navbar-user.html.twig */
class __TwigTemplate_30837056e87ac2cd8cad11254c71c697260ab15ed2b88150f3e67997c5e68990 extends Twig_Template
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
        $__internal_d6ad930081867c69ef67dfa1d3274fcc76f68e3be4583a9568f378a9383f83f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6ad930081867c69ef67dfa1d3274fcc76f68e3be4583a9568f378a9383f83f3->enter($__internal_d6ad930081867c69ef67dfa1d3274fcc76f68e3be4583a9568f378a9383f83f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Base/Components/Header:navbar-user.html.twig"));

        // line 2
        echo "
<ul class=\"navbar-right\">
    <li class=\"dropdown dropdown-profile\">
        ";
        // line 6
        echo "        <img class=\"profile-avatar\" src=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "activeProfile", array(), "any", false, true), "image", array(), "any", false, true), "pathSvg", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "activeProfile", array(), "any", false, true), "image", array(), "any", false, true), "pathSvg", array()), $this->env->getExtension('VOD\BaseBundle\Services\Twig\AppExtension')->defaultAvatar())) : ($this->env->getExtension('VOD\BaseBundle\Services\Twig\AppExtension')->defaultAvatar())), "html", null, true);
        echo "\"  alt=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "activeProfile", array(), "any", false, true), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "activeProfile", array(), "any", false, true), "name", array()), "default")) : ("default")), "html", null, true);
        echo "\">
        <a id=\"user-name-button\" href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\" class=\"navbar-link navbar-profile-link dropdown-toggle  btn-link_alter\" role=\"button\"
           aria-expanded=\"false\">
            <span class=\"profile-name\">
                ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "activeProfile", array()), "name", array()), "html", null, true);
        echo "
            </span>
        </a>
        
        ";
        // line 15
        echo "        <ul class=\"dropdown-menu\">
            ";
        // line 16
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "profiles", array())) != 1)) {
            // line 17
            echo "                <li>
                    <h6>";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("base.navbar.user_menu.change_profile", array(), "base"), "html", null, true);
            echo "</h6>
                    ";
            // line 19
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("VODBaseBundle:User:selectVerticalProfile"));
            echo "
                </li>
            ";
        }
        // line 22
        echo "            <li class=\"user-options\">
                <a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_data");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("base.navbar.user_menu.data", array(), "base"), "html", null, true);
        echo "</a>
            </li>
            <li class=\"user-options\">
                <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_subscription");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("base.navbar.user_menu.subscription", array(), "base"), "html", null, true);
        echo "</a>
            </li>
            <li class=\"user-options\">
                <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_profile");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("base.navbar.user_menu.profiles", array(), "base"), "html", null, true);
        echo "</a>
            </li>
            <li class=\"user-options\">
                <a href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_parental_control");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("base.navbar.user_menu.parental_control", array(), "base"), "html", null, true);
        echo "</a></li>
            <li class=\"user-options\">
                <a href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_consumption");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("base.navbar.user_menu.rentals", array(), "base"), "html", null, true);
        echo "</a>
            </li>
            <li>
                <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.buttons.close_session", array(), "common"), "html", null, true);
        echo "</a>
            </li>
        </ul>
    </li>
</ul>

<div class=\"navbar-right\">
    ";
        // line 44
        if (((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") != "payment_method") && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") != "user_activate_subscription")) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") != "user_activate_payment_method"))) {
            // line 45
            echo "        ";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "isNewSubscriber", array()) == true)) {
                // line 46
                echo "            <a class=\"btn btn-register btn-free-days\" href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_activate_subscription");
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.buttons.landing_start_button", array(), "common"), "html", null, true);
                echo "</a>
        ";
            }
            // line 48
            echo "    ";
        }
        // line 49
        echo "</div>";
        
        $__internal_d6ad930081867c69ef67dfa1d3274fcc76f68e3be4583a9568f378a9383f83f3->leave($__internal_d6ad930081867c69ef67dfa1d3274fcc76f68e3be4583a9568f378a9383f83f3_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Base/Components/Header:navbar-user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 49,  132 => 48,  124 => 46,  121 => 45,  119 => 44,  107 => 37,  99 => 34,  92 => 32,  84 => 29,  76 => 26,  68 => 23,  65 => 22,  59 => 19,  55 => 18,  52 => 17,  50 => 16,  47 => 15,  40 => 10,  34 => 7,  27 => 6,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'base' %}

<ul class=\"navbar-right\">
    <li class=\"dropdown dropdown-profile\">
        {# Avatar y nombre de usuario #}
        <img class=\"profile-avatar\" src=\"{{ app.user.activeProfile.image.pathSvg | default(defaultAvatar()) }}\"  alt=\"{{ app.user.activeProfile.name | default('default')}}\">
        <a id=\"user-name-button\" href=\"{{ path('homepage') }}\" class=\"navbar-link navbar-profile-link dropdown-toggle  btn-link_alter\" role=\"button\"
           aria-expanded=\"false\">
            <span class=\"profile-name\">
                {{ app.user.activeProfile.name }}
            </span>
        </a>
        
        {# Dropdown de opciones del usr #}
        <ul class=\"dropdown-menu\">
            {% if app.user.profiles | length != 1 %}
                <li>
                    <h6>{{ 'base.navbar.user_menu.change_profile' | trans }}</h6>
                    {{ render(controller('VODBaseBundle:User:selectVerticalProfile')) }}
                </li>
            {% endif %}
            <li class=\"user-options\">
                <a href=\"{{ path('user_data') }}\">{{ 'base.navbar.user_menu.data' | trans }}</a>
            </li>
            <li class=\"user-options\">
                <a href=\"{{ path('user_subscription') }}\">{{ 'base.navbar.user_menu.subscription' | trans }}</a>
            </li>
            <li class=\"user-options\">
                <a href=\"{{ path('user_profile') }}\">{{ 'base.navbar.user_menu.profiles' | trans }}</a>
            </li>
            <li class=\"user-options\">
                <a href=\"{{ path('user_parental_control') }}\">{{ 'base.navbar.user_menu.parental_control' | trans }}</a></li>
            <li class=\"user-options\">
                <a href=\"{{ path('user_consumption') }}\">{{ 'base.navbar.user_menu.rentals' | trans }}</a>
            </li>
            <li>
                <a href=\"{{ path('logout') }}\">{{ 'common.buttons.close_session' | trans({}, 'common') }}</a>
            </li>
        </ul>
    </li>
</ul>

<div class=\"navbar-right\">
    {% if (app.request.get('_route') != 'payment_method' and app.request.get('_route') != 'user_activate_subscription' and app.request.get('_route') != 'user_activate_payment_method') %}
        {% if app.user.isNewSubscriber == true %}
            <a class=\"btn btn-register btn-free-days\" href=\"{{ path('user_activate_subscription') }}\">{{ 'common.buttons.landing_start_button' | trans({}, 'common') }}</a>
        {% endif %}
    {% endif %}
</div>", "VODBaseBundle:Base/Components/Header:navbar-user.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/Base/Components/Header/navbar-user.html.twig");
    }
}
