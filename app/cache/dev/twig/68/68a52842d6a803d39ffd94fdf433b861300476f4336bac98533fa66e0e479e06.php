<?php

/* VODBaseBundle:Base/Components/Header:header-user-mobile.html.twig */
class __TwigTemplate_d7e4c12797aae8364f9d7a2500c213e8040eb78815ee2d7f77306bccd2cb04f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header_title' => array($this, 'block_header_title'),
            'navbar_search' => array($this, 'block_navbar_search'),
            'flap' => array($this, 'block_flap'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c707bc0d50aa93c722c392cc6e9a3f26a8682bcb51010e0236e222e83ad958fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c707bc0d50aa93c722c392cc6e9a3f26a8682bcb51010e0236e222e83ad958fe->enter($__internal_c707bc0d50aa93c722c392cc6e9a3f26a8682bcb51010e0236e222e83ad958fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Base/Components/Header:header-user-mobile.html.twig"));

        // line 1
        if ( !array_key_exists("route_back", $context)) {
            // line 2
            echo "\t";
            $context["route_back"] = "homepage";
            // line 3
            echo "
\t";
            // line 4
            if ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "user_profile_edit") || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "user_profile_new"))) {
                // line 5
                echo "\t\t";
                $context["route_back"] = "user_profile";
                // line 6
                echo "\t";
            } elseif (((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "user_subscription") || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "user_profile")) || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "user_parental_control"))) {
                // line 7
                echo "\t\t";
                $context["route_back"] = "user_data";
                // line 8
                echo "\t";
            }
            // line 9
            echo "
\t";
            // line 10
            $context["url_back"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["route_back"]) ? $context["route_back"] : $this->getContext($context, "route_back")));
        } else {
            // line 12
            echo "\t";
            $context["url_back"] = (isset($context["route_back"]) ? $context["route_back"] : $this->getContext($context, "route_back"));
        }
        // line 14
        echo "
";
        // line 16
        echo "<div class=\"header-user-mobile navbar  navbar-fixed-top\">
\t<div class=\"default-nav-view\">
\t\t<a href=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["url_back"]) ? $context["url_back"] : $this->getContext($context, "url_back")), "html", null, true);
        echo "\" class=\"btn btn-back\"><i class=\"fa fa-lg fa-arrow-left\"></i></a>

\t\t";
        // line 20
        $this->displayBlock('header_title', $context, $blocks);
        // line 23
        echo "
\t\t";
        // line 24
        $this->displayBlock('navbar_search', $context, $blocks);
        // line 35
        echo "\t</div>

\t<div class=\"search-nav-view container-fluid\">
\t\t<a href=\"#\" class=\"btn btn-back switcher\"><i class=\"fa fa-lg fa-arrow-left\"></i></a>
\t\t<form class=\"navbar__form navbar-right\" >
\t\t\t<div class=\"input-group search\">
\t\t\t\t<input id=\"input-search\" type=\"text\" class=\"form-control \" maxlength=\"30\" placeholder=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("base.navbar.search", array(), "base"), "html", null, true);
        echo "\">
\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t<button class=\"btn\" type=\"button\"><i class=\"fa fa-lg fa-flip-horizontal fa-search\"></i></button>
\t\t\t\t</span>
\t\t\t</div>
\t\t</form>
\t</div>
\t";
        // line 48
        $this->displayBlock('flap', $context, $blocks);
        // line 51
        echo "</div>";
        
        $__internal_c707bc0d50aa93c722c392cc6e9a3f26a8682bcb51010e0236e222e83ad958fe->leave($__internal_c707bc0d50aa93c722c392cc6e9a3f26a8682bcb51010e0236e222e83ad958fe_prof);

    }

    // line 20
    public function block_header_title($context, array $blocks = array())
    {
        $__internal_c5a253ea59e7a1c2bdae947abe069535bf1561b23a7bb01b71499f16d27052ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5a253ea59e7a1c2bdae947abe069535bf1561b23a7bb01b71499f16d27052ca->enter($__internal_c5a253ea59e7a1c2bdae947abe069535bf1561b23a7bb01b71499f16d27052ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_title"));

        // line 21
        echo "        \t<h2 class=\"header-user-mobile__title\" itemprop=\"name\">";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "</h2>
        ";
        
        $__internal_c5a253ea59e7a1c2bdae947abe069535bf1561b23a7bb01b71499f16d27052ca->leave($__internal_c5a253ea59e7a1c2bdae947abe069535bf1561b23a7bb01b71499f16d27052ca_prof);

    }

    // line 24
    public function block_navbar_search($context, array $blocks = array())
    {
        $__internal_ea399300272d4830c405f0f39aa180c2b5766817740845d8de6f778ea01b058f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea399300272d4830c405f0f39aa180c2b5766817740845d8de6f778ea01b058f->enter($__internal_ea399300272d4830c405f0f39aa180c2b5766817740845d8de6f778ea01b058f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_search"));

        // line 25
        echo "\t\t\t<div class=\"navbar-right header-user-mobile__search\">
\t\t\t\t<form class=\"navbar__form navbar-right\" >
\t\t\t\t\t<div class=\"input-group search\">
\t\t\t\t\t\t<span class=\"input-group-btn switcher\">
\t\t\t\t\t\t\t<button class=\"btn\" type=\"button\"><i class=\"fa fa-lg fa-flip-horizontal fa-search\"></i></button>
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t";
        
        $__internal_ea399300272d4830c405f0f39aa180c2b5766817740845d8de6f778ea01b058f->leave($__internal_ea399300272d4830c405f0f39aa180c2b5766817740845d8de6f778ea01b058f_prof);

    }

    // line 48
    public function block_flap($context, array $blocks = array())
    {
        $__internal_33062870394e15e81eee6b1d4c6c713dc647a7351075c55c67c47b05ceb08375 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33062870394e15e81eee6b1d4c6c713dc647a7351075c55c67c47b05ceb08375->enter($__internal_33062870394e15e81eee6b1d4c6c713dc647a7351075c55c67c47b05ceb08375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flap"));

        // line 49
        echo "\t    ";
        $this->loadTemplate("VODBaseBundle:Base/Components/Header:flap.html.twig", "VODBaseBundle:Base/Components/Header:header-user-mobile.html.twig", 49)->display($context);
        // line 50
        echo "\t";
        
        $__internal_33062870394e15e81eee6b1d4c6c713dc647a7351075c55c67c47b05ceb08375->leave($__internal_33062870394e15e81eee6b1d4c6c713dc647a7351075c55c67c47b05ceb08375_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Base/Components/Header:header-user-mobile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 50,  147 => 49,  141 => 48,  125 => 25,  119 => 24,  109 => 21,  103 => 20,  96 => 51,  94 => 48,  84 => 41,  76 => 35,  74 => 24,  71 => 23,  69 => 20,  64 => 18,  60 => 16,  57 => 14,  53 => 12,  50 => 10,  47 => 9,  44 => 8,  41 => 7,  38 => 6,  35 => 5,  33 => 4,  30 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if route_back is not defined %}
\t{% set route_back = 'homepage' %}

\t{% if app.request.get('_route') == 'user_profile_edit' or app.request.get('_route') == 'user_profile_new' %}
\t\t{% set route_back = 'user_profile' %}
\t{% elseif app.request.get('_route') == 'user_subscription' or app.request.get('_route') == 'user_profile' or app.request.get('_route') == 'user_parental_control'%}
\t\t{% set route_back = 'user_data' %}
\t{% endif %}

\t{% set url_back = path(route_back) %}
{% else %}
\t{% set url_back = route_back %}
{% endif %}

{# Este template es para las secciones de usuario unicamente, donde se reemplaza la navegacion de arriba por esto: Flecha de volver atras, Nombre de la seccion, y lupa de busqueda #}
<div class=\"header-user-mobile navbar  navbar-fixed-top\">
\t<div class=\"default-nav-view\">
\t\t<a href=\"{{ url_back }}\" class=\"btn btn-back\"><i class=\"fa fa-lg fa-arrow-left\"></i></a>

\t\t{% block header_title %}
        \t<h2 class=\"header-user-mobile__title\" itemprop=\"name\">{{ title }}</h2>
        {% endblock header_title %}

\t\t{% block navbar_search %}
\t\t\t<div class=\"navbar-right header-user-mobile__search\">
\t\t\t\t<form class=\"navbar__form navbar-right\" >
\t\t\t\t\t<div class=\"input-group search\">
\t\t\t\t\t\t<span class=\"input-group-btn switcher\">
\t\t\t\t\t\t\t<button class=\"btn\" type=\"button\"><i class=\"fa fa-lg fa-flip-horizontal fa-search\"></i></button>
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t{% endblock navbar_search %}
\t</div>

\t<div class=\"search-nav-view container-fluid\">
\t\t<a href=\"#\" class=\"btn btn-back switcher\"><i class=\"fa fa-lg fa-arrow-left\"></i></a>
\t\t<form class=\"navbar__form navbar-right\" >
\t\t\t<div class=\"input-group search\">
\t\t\t\t<input id=\"input-search\" type=\"text\" class=\"form-control \" maxlength=\"30\" placeholder=\"{{ 'base.navbar.search' | trans({}, 'base') }}\">
\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t<button class=\"btn\" type=\"button\"><i class=\"fa fa-lg fa-flip-horizontal fa-search\"></i></button>
\t\t\t\t</span>
\t\t\t</div>
\t\t</form>
\t</div>
\t{% block flap %}
\t    {% include 'VODBaseBundle:Base/Components/Header:flap.html.twig' %}
\t{% endblock %}
</div>", "VODBaseBundle:Base/Components/Header:header-user-mobile.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/Base/Components/Header/header-user-mobile.html.twig");
    }
}
