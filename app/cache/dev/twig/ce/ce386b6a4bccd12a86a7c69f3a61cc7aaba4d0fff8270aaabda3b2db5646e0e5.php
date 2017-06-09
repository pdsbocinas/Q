<?php

/* VODItvBaseBundle:Base/Components/Header:navbar-mobile.html.twig */
class __TwigTemplate_aa21c5c8e6df2465db2360320686f449990fb4cb4bae09c6ef01858d6d9e0d6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'navbar_class' => array($this, 'block_navbar_class'),
            'navbar_brand' => array($this, 'block_navbar_brand'),
            'flap' => array($this, 'block_flap'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a01f126816ff41264121fdbd32c5026321881203980ca6c54d52b7ffc5ab862e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a01f126816ff41264121fdbd32c5026321881203980ca6c54d52b7ffc5ab862e->enter($__internal_a01f126816ff41264121fdbd32c5026321881203980ca6c54d52b7ffc5ab862e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODItvBaseBundle:Base/Components/Header:navbar-mobile.html.twig"));

        // line 3
        echo "
<nav ";
        // line 4
        $this->displayBlock('navbar_class', $context, $blocks);
        echo ">

";
        // line 7
        echo "\t<div class=\"container-fluid default-nav-view\">

\t\t<div class=\"navbar-header\">
\t\t";
        // line 11
        echo "\t\t\t<button type=\"button\" class=\"navbar__toggle c-button left-menu-opener collapsed \">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
        ";
        // line 18
        echo "\t\t\t";
        $this->displayBlock('navbar_brand', $context, $blocks);
        // line 21
        echo "\t\t</div>

\t\t";
        // line 23
        $this->loadTemplate("VODBaseBundle:Base/Components/Header:header-dropdown-menu.html.twig", "VODItvBaseBundle:Base/Components/Header:navbar-mobile.html.twig", 23)->display($context);
        // line 24
        echo "

\t";
        // line 27
        echo "\t";
        $this->displayBlock('flap', $context, $blocks);
        // line 31
        echo "</nav>


";
        // line 35
        echo "<nav id=\"c-menu--slide-left\" class=\"c-menu c-menu--slide-left navmenu-fixed-left\">

    ";
        // line 38
        echo "\t";
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 39
            echo "
\t\t";
            // line 41
            echo "\t\t<div class=\"navmenu-fixed-left__profile\">

\t\t\t<img class=\"profile-avatar\" src=\"";
            // line 43
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "activeProfile", array(), "any", false, true), "image", array(), "any", false, true), "pathSvg", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "activeProfile", array(), "any", false, true), "image", array(), "any", false, true), "pathSvg", array()), $this->env->getExtension('VOD\BaseBundle\Services\Twig\AppExtension')->defaultAvatar())) : ($this->env->getExtension('VOD\BaseBundle\Services\Twig\AppExtension')->defaultAvatar())), "html", null, true);
            echo "\"  alt=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "activeProfile", array(), "any", false, true), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "activeProfile", array(), "any", false, true), "name", array()), "default")) : ("default")), "html", null, true);
            echo "\">

\t\t\t<div class=\"profile-user-options\">
\t\t\t\t<a id=\"user-name-button\" href=\"";
            // line 46
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
            echo "\" class=\"navbar-link navbar-profile-link\" role=\"button\">
\t\t\t\t\t<span class=\"profile-name\">
\t\t\t\t\t\t";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "activeProfile", array()), "name", array()), "html", null, true);
            echo "
\t\t\t\t\t</span>
\t\t\t\t</a>
\t\t\t\t";
            // line 51
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "profiles", array())) != 1)) {
                // line 52
                echo "\t\t\t\t\t<a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("select_profile");
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("base.navbar.user_menu.change_profile", array(), "base"), "html", null, true);
                echo "\" class=\"change-user-btn\">
                        <i class=\"fa fa-exchange\"></i>
                    </a>
\t\t\t\t";
            }
            // line 56
            echo "\t\t\t</div>
\t\t</div>

\t\t";
            // line 60
            echo "\t\t<div class=\"panel-group\">
\t\t\t";
            // line 62
            echo "\t\t\t";
            if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "product", array()), "freePeriod", array()) == true) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "hasPaymentMethod", array()) == false))) {
                // line 63
                echo "\t\t\t\t<a class=\"btn btn-register btn-free-days\" href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_activate_subscription");
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.buttons.landing_start_button", array(), "common"), "html", null, true);
                echo "</a>
\t\t\t";
            }
            // line 65
            echo "\t\t\t";
            // line 66
            echo "
\t        ";
            // line 68
            echo "\t\t\t";
            // line 69
            echo "\t\t\t<div class=\"panel panel-unstyled\">
\t\t\t\t<div class=\"panel-heading\">
\t\t             <a href=\"#myData\" class=\"panel-title\" data-toggle=\"collapse\" data-target=\"#myData\">
                         <i class=\"fa fa-cog\"></i>";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("base.navbar.user_menu.account", array(), "base"), "html", null, true);
            echo "
\t\t                 <i class=\"fa fa-caret-down icon-flip\"></i>
\t\t             </a>
\t\t        </div>
\t\t        <div id=\"myData\" class=\"panel-collapse collapse\">
\t\t\t\t\t<ul class=\"user-menu\">
\t\t\t\t\t\t<li><a href=\"";
            // line 78
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_data");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("base.navbar.user_menu.data", array(), "base"), "html", null, true);
            echo "</a></li>

\t\t\t\t\t\t<li><a href=\"";
            // line 80
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_subscription");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("base.navbar.user_menu.subscription", array(), "base"), "html", null, true);
            echo "</a></li>

\t\t\t\t\t\t<li><a href=\"";
            // line 82
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_profile");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("base.navbar.user_menu.profiles", array(), "base"), "html", null, true);
            echo "</a></li>

\t\t\t\t\t\t<li><a href=\"";
            // line 84
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_parental_control");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("base.navbar.user_menu.parental_control", array(), "base"), "html", null, true);
            echo "</a></li>

\t\t\t\t\t\t<li><a href=\"";
            // line 86
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_consumption");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("base.navbar.user_menu.rentals", array(), "base"), "html", null, true);
            echo "</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t";
            // line 92
            echo "\t\t\t<div class=\"panel panel-unstyled\">
\t\t\t\t<div class=\"panel-heading\">
\t\t             <a href=\"#explore\" class=\"panel-title init-open\" data-toggle=\"collapse\" data-target=\"#explore\">
                         <i class=\"fa fa-film\"></i>";
            // line 95
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("base.navbar.explore", array(), "base"), "html", null, true);
            echo "
\t\t                 <i class=\"fa fa-caret-up icon-flip\"></i>
\t\t             </a>
\t\t        </div>
\t\t        <div id=\"explore\" class=\"panel-collapse collapse\">
\t\t\t\t\t<div class=\"navbar__explore-button\">
\t\t\t\t\t\t";
            // line 101
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("VODBaseBundle:Content:exploreTags"));
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t";
            // line 106
            $this->loadTemplate("VODBaseBundle:Base/Components/Header:itv-button.html.twig", "VODItvBaseBundle:Base/Components/Header:navbar-mobile.html.twig", 106)->display($context);
            // line 107
            echo "\t\t</div>


\t\t";
            // line 111
            echo "\t\t<a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\" class=\"btn-login-out btn-login\"><i class=\"fa fa-sign-out\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.buttons.close_session", array(), "common"), "html", null, true);
            echo "</a>
\t";
            // line 113
            echo "
    ";
        } else {
            // line 115
            echo "
    ";
            // line 117
            echo "\t\t<div class=\"navmenu-fixed-left__profile\">

\t\t";
            // line 120
            echo "\t\t\t<img class=\"profile-avatar\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('VOD\BaseBundle\Services\Twig\AppExtension')->defaultAvatar(), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("base.navbar.user_menu.guest", array(), "base"), "html", null, true);
            echo "\">
\t\t\t<div class=\"profile-user-options\">
\t\t\t\t<a id=\"user-name-button\" href=\"";
            // line 122
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
            echo "\" class=\"navbar-link navbar-profile-link\" role=\"button\">
\t\t\t\t\t<span class=\"profile-name\">";
            // line 123
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("base.navbar.user_menu.guest", array(), "base"), "html", null, true);
            echo "</span>
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>

\t\t";
            // line 129
            echo "\t\t<ul class=\"login-mobile\">
\t\t\t<li><a class=\"btn btn-register btn-free-days\" href=\"";
            // line 130
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("registration");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.buttons.landing_start_button", array(), "common"), "html", null, true);
            echo "</a></li>
\t\t    <li><a class=\"btn btn-login menu-link-btn btn-login-out\" href=\"";
            // line 131
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\"><i class=\"fa fa-sign-in\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.buttons.enter", array(), "common"), "html", null, true);
            echo "</a></li>
\t\t</ul>

\t\t";
            // line 135
            echo "\t    <div class=\"panel-group\">
\t    \t";
            // line 137
            echo "\t\t    <div class=\"panel panel-unstyled\">
\t\t\t\t<div class=\"panel-heading\">
\t\t            <a href=\"#explore\" class=\"panel-title\" data-toggle=\"collapse\" data-target=\"#explore\">
                        <i class=\"fa fa-film\"></i>";
            // line 140
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("base.navbar.explore", array(), "base"), "html", null, true);
            echo "
                        <i class=\"fa fa-caret-up icon-flip\"></i>
\t\t            </a>
\t\t        </div>
\t\t        <div id=\"explore\" class=\"panel-collapse collapse in\">
\t\t\t\t\t<div class=\"navbar__explore-button\">
\t\t\t\t\t\t";
            // line 146
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("VODBaseBundle:Content:exploreTags"));
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 152
        echo "\t";
        // line 153
        echo "</nav>
";
        
        $__internal_a01f126816ff41264121fdbd32c5026321881203980ca6c54d52b7ffc5ab862e->leave($__internal_a01f126816ff41264121fdbd32c5026321881203980ca6c54d52b7ffc5ab862e_prof);

    }

    // line 4
    public function block_navbar_class($context, array $blocks = array())
    {
        $__internal_a25762b634adcd82359601b5c43e33c2b08ded3b8069ab8c616d402222f1cc73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a25762b634adcd82359601b5c43e33c2b08ded3b8069ab8c616d402222f1cc73->enter($__internal_a25762b634adcd82359601b5c43e33c2b08ded3b8069ab8c616d402222f1cc73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_class"));

        echo "class=\"navbar navbar-fixed-top\"";
        
        $__internal_a25762b634adcd82359601b5c43e33c2b08ded3b8069ab8c616d402222f1cc73->leave($__internal_a25762b634adcd82359601b5c43e33c2b08ded3b8069ab8c616d402222f1cc73_prof);

    }

    // line 18
    public function block_navbar_brand($context, array $blocks = array())
    {
        $__internal_ac602165aa21ea8b22e3591c2b1773af02211380cef470677da850875ff511c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac602165aa21ea8b22e3591c2b1773af02211380cef470677da850875ff511c0->enter($__internal_ac602165aa21ea8b22e3591c2b1773af02211380cef470677da850875ff511c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_brand"));

        // line 19
        echo "\t\t\t\t";
        $this->loadTemplate("VODBaseBundle:Base/Components/Header:navbar-brand.html.twig", "VODItvBaseBundle:Base/Components/Header:navbar-mobile.html.twig", 19)->display($context);
        // line 20
        echo "\t\t\t";
        
        $__internal_ac602165aa21ea8b22e3591c2b1773af02211380cef470677da850875ff511c0->leave($__internal_ac602165aa21ea8b22e3591c2b1773af02211380cef470677da850875ff511c0_prof);

    }

    // line 27
    public function block_flap($context, array $blocks = array())
    {
        $__internal_23d6ba9e2463305ae2e133e6f0db9223d176bfad535cb58a59b37b398241986f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23d6ba9e2463305ae2e133e6f0db9223d176bfad535cb58a59b37b398241986f->enter($__internal_23d6ba9e2463305ae2e133e6f0db9223d176bfad535cb58a59b37b398241986f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flap"));

        // line 28
        echo "        ";
        $this->loadTemplate("VODBaseBundle:Base/Components/Header:flap.html.twig", "VODItvBaseBundle:Base/Components/Header:navbar-mobile.html.twig", 28)->display($context);
        // line 29
        echo "    ";
        
        $__internal_23d6ba9e2463305ae2e133e6f0db9223d176bfad535cb58a59b37b398241986f->leave($__internal_23d6ba9e2463305ae2e133e6f0db9223d176bfad535cb58a59b37b398241986f_prof);

    }

    public function getTemplateName()
    {
        return "VODItvBaseBundle:Base/Components/Header:navbar-mobile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  347 => 29,  344 => 28,  338 => 27,  331 => 20,  328 => 19,  322 => 18,  310 => 4,  302 => 153,  300 => 152,  291 => 146,  282 => 140,  277 => 137,  274 => 135,  266 => 131,  260 => 130,  257 => 129,  249 => 123,  245 => 122,  237 => 120,  233 => 117,  230 => 115,  226 => 113,  219 => 111,  214 => 107,  212 => 106,  204 => 101,  195 => 95,  190 => 92,  180 => 86,  173 => 84,  166 => 82,  159 => 80,  152 => 78,  143 => 72,  138 => 69,  136 => 68,  133 => 66,  131 => 65,  123 => 63,  120 => 62,  117 => 60,  112 => 56,  102 => 52,  100 => 51,  94 => 48,  89 => 46,  81 => 43,  77 => 41,  74 => 39,  71 => 38,  67 => 35,  62 => 31,  59 => 27,  55 => 24,  53 => 23,  49 => 21,  46 => 18,  38 => 11,  33 => 7,  28 => 4,  25 => 3,);
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
{# Navegación para mobile y tablet #}

<nav {% block navbar_class %}class=\"navbar navbar-fixed-top\"{% endblock navbar_class %}>

{# BLOQUE default-nav-view es el que contiene BOTON HAMBURGER, LOGO, LUPA, Y LOS TRES PUNTITOS #}
\t<div class=\"container-fluid default-nav-view\">

\t\t<div class=\"navbar-header\">
\t\t{# boton hamburger #}
\t\t\t<button type=\"button\" class=\"navbar__toggle c-button left-menu-opener collapsed \">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
        {# logo #}
\t\t\t{% block navbar_brand %}
\t\t\t\t{% include 'VODBaseBundle:Base/Components/Header:navbar-brand.html.twig' %}
\t\t\t{% endblock navbar_brand %}
\t\t</div>

\t\t{% include 'VODBaseBundle:Base/Components/Header:header-dropdown-menu.html.twig' %}


\t{# bloque de navbar toogle que se usa en sportiva #}
\t{% block flap %}
        {% include 'VODBaseBundle:Base/Components/Header:flap.html.twig' %}
    {% endblock %}
{# FIN BLOQUE search-nav-view #}
</nav>


{# BLOQUE NAVEGACION LATERAL, se abre cuando apretas el boton hamburger, tiene que ir por fuera de la <nav> si o si #}
<nav id=\"c-menu--slide-left\" class=\"c-menu c-menu--slide-left navmenu-fixed-left\">

    {# BLOQUE de USUARIO LOGUEADO #}
\t{% if app.user %}

\t\t{# Avatar , nombre y boton de cambio de perfil #}
\t\t<div class=\"navmenu-fixed-left__profile\">

\t\t\t<img class=\"profile-avatar\" src=\"{{ app.user.activeProfile.image.pathSvg | default(defaultAvatar()) }}\"  alt=\"{{ app.user.activeProfile.name | default('default')}}\">

\t\t\t<div class=\"profile-user-options\">
\t\t\t\t<a id=\"user-name-button\" href=\"{{ path('homepage') }}\" class=\"navbar-link navbar-profile-link\" role=\"button\">
\t\t\t\t\t<span class=\"profile-name\">
\t\t\t\t\t\t{{ app.user.activeProfile.name }}
\t\t\t\t\t</span>
\t\t\t\t</a>
\t\t\t\t{% if app.user.profiles | length != 1 %}
\t\t\t\t\t<a href=\"{{  path('select_profile') }}\" alt=\"{{ 'base.navbar.user_menu.change_profile' | trans }}\" class=\"change-user-btn\">
                        <i class=\"fa fa-exchange\"></i>
                    </a>
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t</div>

\t\t{# Seccion desplegable #}
\t\t<div class=\"panel-group\">
\t\t\t{# esto en realidad tiene que aparecer si tiene el free-period #}
\t\t\t{% if app.user.product.freePeriod == true and app.user.hasPaymentMethod == false %}
\t\t\t\t<a class=\"btn btn-register btn-free-days\" href=\"{{ path('user_activate_subscription') }}\">{{ 'common.buttons.landing_start_button' | trans({}, 'common') }}</a>
\t\t\t{% endif %}
\t\t\t{#{% if app.user.hasPaymentMethod != true %}#}

\t        {#{% endif %}#}
\t\t\t{# Seccion desplegable Menu de usuario #}
\t\t\t<div class=\"panel panel-unstyled\">
\t\t\t\t<div class=\"panel-heading\">
\t\t             <a href=\"#myData\" class=\"panel-title\" data-toggle=\"collapse\" data-target=\"#myData\">
                         <i class=\"fa fa-cog\"></i>{{ 'base.navbar.user_menu.account' | trans }}
\t\t                 <i class=\"fa fa-caret-down icon-flip\"></i>
\t\t             </a>
\t\t        </div>
\t\t        <div id=\"myData\" class=\"panel-collapse collapse\">
\t\t\t\t\t<ul class=\"user-menu\">
\t\t\t\t\t\t<li><a href=\"{{ path('user_data') }}\">{{ 'base.navbar.user_menu.data' | trans }}</a></li>

\t\t\t\t\t\t<li><a href=\"{{ path('user_subscription') }}\">{{ 'base.navbar.user_menu.subscription' | trans }}</a></li>

\t\t\t\t\t\t<li><a href=\"{{ path('user_profile') }}\">{{ 'base.navbar.user_menu.profiles' | trans }}</a></li>

\t\t\t\t\t\t<li><a href=\"{{ path('user_parental_control') }}\">{{ 'base.navbar.user_menu.parental_control' | trans }}</a></li>

\t\t\t\t\t\t<li><a href=\"{{ path('user_consumption') }}\">{{ 'base.navbar.user_menu.rentals' | trans }}</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t{# Seccion desplegable categorias de peliculas y series (explorar) #}
\t\t\t<div class=\"panel panel-unstyled\">
\t\t\t\t<div class=\"panel-heading\">
\t\t             <a href=\"#explore\" class=\"panel-title init-open\" data-toggle=\"collapse\" data-target=\"#explore\">
                         <i class=\"fa fa-film\"></i>{{ 'base.navbar.explore' | trans }}
\t\t                 <i class=\"fa fa-caret-up icon-flip\"></i>
\t\t             </a>
\t\t        </div>
\t\t        <div id=\"explore\" class=\"panel-collapse collapse\">
\t\t\t\t\t<div class=\"navbar__explore-button\">
\t\t\t\t\t\t{{ render(controller('VODBaseBundle:Content:exploreTags')) }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t{% include 'VODBaseBundle:Base/Components/Header:itv-button.html.twig' %}
\t\t</div>


\t\t{# Boton de LOG OUT #}
\t\t<a href=\"{{ path('logout') }}\" class=\"btn-login-out btn-login\"><i class=\"fa fa-sign-out\"></i>{{ 'common.buttons.close_session' | trans({}, 'common') }}</a>
\t{# FIN BLOQUE de USUARIO LOGUEADO #}

    {% else %}

    {# BLOQUE de NO LOGUEADO #}
\t\t<div class=\"navmenu-fixed-left__profile\">

\t\t{# Avatar default, nombre #}
\t\t\t<img class=\"profile-avatar\" src=\"{{ defaultAvatar() }}\" alt=\"{{'base.navbar.user_menu.guest' | trans }}\">
\t\t\t<div class=\"profile-user-options\">
\t\t\t\t<a id=\"user-name-button\" href=\"{{ path('homepage') }}\" class=\"navbar-link navbar-profile-link\" role=\"button\">
\t\t\t\t\t<span class=\"profile-name\">{{ 'base.navbar.user_menu.guest' | trans }}</span>
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>

\t\t{# Botones de menu ingresar y registrarse #}
\t\t<ul class=\"login-mobile\">
\t\t\t<li><a class=\"btn btn-register btn-free-days\" href=\"{{ path('registration') }}\">{{ 'common.buttons.landing_start_button' | trans({}, 'common') }}</a></li>
\t\t    <li><a class=\"btn btn-login menu-link-btn btn-login-out\" href=\"{{ path('login') }}\"><i class=\"fa fa-sign-in\"></i>{{ 'common.buttons.enter' | trans({}, 'common') }}</a></li>
\t\t</ul>

\t\t{# Menu desplegable #}
\t    <div class=\"panel-group\">
\t    \t{# Menu desplegable seccion explorar #}
\t\t    <div class=\"panel panel-unstyled\">
\t\t\t\t<div class=\"panel-heading\">
\t\t            <a href=\"#explore\" class=\"panel-title\" data-toggle=\"collapse\" data-target=\"#explore\">
                        <i class=\"fa fa-film\"></i>{{ 'base.navbar.explore' | trans }}
                        <i class=\"fa fa-caret-up icon-flip\"></i>
\t\t            </a>
\t\t        </div>
\t\t        <div id=\"explore\" class=\"panel-collapse collapse in\">
\t\t\t\t\t<div class=\"navbar__explore-button\">
\t\t\t\t\t\t{{ render(controller('VODBaseBundle:Content:exploreTags')) }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t{% endif %}
\t{# FIN BLOQUE de NO LOGUEADO #}
</nav>
", "VODItvBaseBundle:Base/Components/Header:navbar-mobile.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/itv-base-bundle/Resources/views/Base/Components/Header/navbar-mobile.html.twig");
    }
}
