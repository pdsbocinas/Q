<?php

/* VODBaseBundle:Base/Components/Header:navbar-mobile.html.twig */
class __TwigTemplate_6e9f8b6c48443d25e4c760984ccbb32cf088c033d4320a0b2862fa4558963663 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'navbar_class' => array($this, 'block_navbar_class'),
            'navbar_brand' => array($this, 'block_navbar_brand'),
            'navbar_search' => array($this, 'block_navbar_search'),
            'flap' => array($this, 'block_flap'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d8436bda4909afdef093141c291d03eda7a783dae01e67f46a9511cee2cd819e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8436bda4909afdef093141c291d03eda7a783dae01e67f46a9511cee2cd819e->enter($__internal_d8436bda4909afdef093141c291d03eda7a783dae01e67f46a9511cee2cd819e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Base/Components/Header:navbar-mobile.html.twig"));

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
        $this->loadTemplate("VODBaseBundle:Base/Components/Header:header-dropdown-menu.html.twig", "VODBaseBundle:Base/Components/Header:navbar-mobile.html.twig", 23)->display($context);
        // line 24
        echo "
\t\t";
        // line 26
        echo "\t\t";
        $this->displayBlock('navbar_search', $context, $blocks);
        // line 37
        echo "\t</div>
";
        // line 39
        echo "

";
        // line 42
        echo "\t<div class=\"container-fluid search-nav-view\">

\t";
        // line 45
        echo "\t\t<a href=\"#\" class=\"btn btn-back switcher\"><i class=\"fa fa-lg fa-arrow-left\"></i></a>

\t";
        // line 48
        echo "\t\t<form class=\"navbar__form navbar-right\" action=\"\">
\t\t\t<div class=\"input-group search\">
\t\t\t\t<input id=\"input-search\" type=\"search\" class=\"form-control \" maxlength=\"30\" placeholder=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("base.navbar.search", array(), "base"), "html", null, true);
        echo "\">
\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t<button class=\"btn\" type=\"button\"><i class=\"fa fa-lg fa-flip-horizontal fa-search\"></i></button>
\t\t\t\t</span>
\t\t\t</div>
\t\t</form>
\t</div>

\t";
        // line 59
        echo "\t";
        $this->displayBlock('flap', $context, $blocks);
        // line 63
        echo "</nav>


";
        // line 67
        echo "<nav id=\"c-menu--slide-left\" class=\"c-menu c-menu--slide-left navmenu-fixed-left\">

    ";
        // line 70
        echo "\t";
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 71
            echo "
\t\t";
            // line 73
            echo "\t\t<div class=\"navmenu-fixed-left__profile\">

\t\t\t<img class=\"profile-avatar\" src=\"";
            // line 75
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "activeProfile", array(), "any", false, true), "image", array(), "any", false, true), "pathSvg", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "activeProfile", array(), "any", false, true), "image", array(), "any", false, true), "pathSvg", array()), $this->env->getExtension('VOD\BaseBundle\Services\Twig\AppExtension')->defaultAvatar())) : ($this->env->getExtension('VOD\BaseBundle\Services\Twig\AppExtension')->defaultAvatar())), "html", null, true);
            echo "\"  alt=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "activeProfile", array(), "any", false, true), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "activeProfile", array(), "any", false, true), "name", array()), "default")) : ("default")), "html", null, true);
            echo "\">

\t\t\t<div class=\"profile-user-options\">
\t\t\t\t<a id=\"user-name-button\" href=\"";
            // line 78
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
            echo "\" class=\"navbar-link navbar-profile-link\" role=\"button\">
\t\t\t\t\t<span class=\"profile-name\">
\t\t\t\t\t\t";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "activeProfile", array()), "name", array()), "html", null, true);
            echo "
\t\t\t\t\t</span>
\t\t\t\t</a>
\t\t\t\t";
            // line 83
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "profiles", array())) != 1)) {
                // line 84
                echo "\t\t\t\t\t<a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("select_profile");
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("base.navbar.user_menu.change_profile", array(), "base"), "html", null, true);
                echo "\" class=\"change-user-btn\">
                        <i class=\"fa fa-exchange\"></i>
                    </a>
\t\t\t\t";
            }
            // line 88
            echo "\t\t\t</div>
\t\t</div>

\t\t";
            // line 92
            echo "\t\t<div class=\"panel-group\">
\t\t\t";
            // line 94
            echo "\t\t\t";
            if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "product", array()), "freePeriod", array()) == true) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "hasPaymentMethod", array()) == false))) {
                // line 95
                echo "\t\t\t\t<a class=\"btn btn-register btn-free-days\" href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_activate_subscription");
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.buttons.landing_start_button", array(), "common"), "html", null, true);
                echo "</a>
\t\t\t";
            }
            // line 97
            echo "\t\t\t";
            // line 98
            echo "
\t        ";
            // line 100
            echo "\t\t\t";
            // line 101
            echo "\t\t\t<div class=\"panel panel-unstyled\">
\t\t\t\t<div class=\"panel-heading\">
\t\t             <a href=\"#myData\" class=\"panel-title\" data-toggle=\"collapse\" aria-controls=\"myData\" data-target=\"#myData\">
                         <i class=\"fa fa-cog\"></i>";
            // line 104
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("base.navbar.user_menu.account", array(), "base"), "html", null, true);
            echo "
\t\t                 <i class=\"fa fa-caret-down icon-flip\"></i>
\t\t             </a>
\t\t        </div>
\t\t        <div id=\"myData\" class=\"panel-collapse collapse\">
\t\t\t\t\t<ul class=\"user-menu\">
\t\t\t\t\t\t<li><a href=\"";
            // line 110
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_data");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("base.navbar.user_menu.data", array(), "base"), "html", null, true);
            echo "</a></li>

\t\t\t\t\t\t<li><a href=\"";
            // line 112
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_subscription");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("base.navbar.user_menu.subscription", array(), "base"), "html", null, true);
            echo "</a></li>

\t\t\t\t\t\t<li><a href=\"";
            // line 114
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_profile");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("base.navbar.user_menu.profiles", array(), "base"), "html", null, true);
            echo "</a></li>

\t\t\t\t\t\t<li><a href=\"";
            // line 116
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_parental_control");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("base.navbar.user_menu.parental_control", array(), "base"), "html", null, true);
            echo "</a></li>

\t\t\t\t\t\t<li><a href=\"";
            // line 118
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_consumption");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("base.navbar.user_menu.rentals", array(), "base"), "html", null, true);
            echo "</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t";
            // line 124
            echo "\t\t\t<div class=\"panel panel-unstyled\">
\t\t\t\t<div class=\"panel-heading\">
\t\t             <a href=\"#explore\" class=\"panel-title init-open\" data-toggle=\"collapse\" data-target=\"#explore\">
                         <i class=\"fa fa-film\"></i>";
            // line 127
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("base.navbar.explore", array(), "base"), "html", null, true);
            echo "
\t\t                 <i class=\"fa fa-caret-down icon-flip\"></i>
\t\t             </a>
\t\t        </div>
\t\t        <div id=\"explore\" class=\"panel-collapse collapse\">
\t\t\t\t\t<div class=\"navbar__explore-button\">
\t\t\t\t\t\t";
            // line 133
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("VODBaseBundle:Content:exploreTags"));
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t";
            // line 138
            $this->loadTemplate("VODBaseBundle:Base/Components/Header:itv-button.html.twig", "VODBaseBundle:Base/Components/Header:navbar-mobile.html.twig", 138)->display($context);
            // line 139
            echo "\t\t</div>


\t\t";
            // line 143
            echo "\t\t<a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\" class=\"btn-login-out btn-login\"><i class=\"fa fa-sign-out\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.buttons.close_session", array(), "common"), "html", null, true);
            echo "</a>
\t";
            // line 145
            echo "
    ";
        } else {
            // line 147
            echo "
    ";
            // line 149
            echo "\t\t<div class=\"navmenu-fixed-left__profile\">

\t\t";
            // line 152
            echo "\t\t\t<img class=\"profile-avatar\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('VOD\BaseBundle\Services\Twig\AppExtension')->defaultAvatar(), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("base.navbar.user_menu.guest", array(), "base"), "html", null, true);
            echo "\">
\t\t\t<div class=\"profile-user-options\">
\t\t\t\t<a id=\"user-name-button\" href=\"";
            // line 154
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
            echo "\" class=\"navbar-link navbar-profile-link\" role=\"button\">
\t\t\t\t\t<span class=\"profile-name\">";
            // line 155
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("base.navbar.user_menu.guest", array(), "base"), "html", null, true);
            echo "</span>
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>

\t\t";
            // line 161
            echo "\t\t<ul class=\"login-mobile\">
\t\t\t<li><a class=\"btn btn-register btn-free-days\" href=\"";
            // line 162
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("registration");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.buttons.landing_start_button", array(), "common"), "html", null, true);
            echo "</a></li>
\t\t    <li><a class=\"btn btn-login menu-link-btn btn-login-out\" href=\"";
            // line 163
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\"><i class=\"fa fa-sign-in\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.buttons.enter", array(), "common"), "html", null, true);
            echo "</a></li>
\t\t</ul>

\t\t";
            // line 167
            echo "\t    <div class=\"panel-group\">
\t    \t";
            // line 169
            echo "\t\t    <div class=\"panel panel-unstyled\">
\t\t\t\t<div class=\"panel-heading\">
\t\t            <a href=\"#explore\" class=\"panel-title\" data-toggle=\"collapse\" data-target=\"#explore\">
                        <i class=\"fa fa-film\"></i>";
            // line 172
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("base.navbar.explore", array(), "base"), "html", null, true);
            echo "
                        <i class=\"fa fa-caret-up icon-flip\"></i>
\t\t            </a>
\t\t        </div>
\t\t        <div id=\"explore\" class=\"panel-collapse collapse in\">
\t\t\t\t\t<div class=\"navbar__explore-button\">
\t\t\t\t\t\t";
            // line 178
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("VODBaseBundle:Content:exploreTags"));
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 184
        echo "\t";
        // line 185
        echo "</nav>
";
        
        $__internal_d8436bda4909afdef093141c291d03eda7a783dae01e67f46a9511cee2cd819e->leave($__internal_d8436bda4909afdef093141c291d03eda7a783dae01e67f46a9511cee2cd819e_prof);

    }

    // line 4
    public function block_navbar_class($context, array $blocks = array())
    {
        $__internal_791af27eac47524899e32e509776190fb129366d687bc0992fe8ecf5a912ba97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_791af27eac47524899e32e509776190fb129366d687bc0992fe8ecf5a912ba97->enter($__internal_791af27eac47524899e32e509776190fb129366d687bc0992fe8ecf5a912ba97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_class"));

        echo "class=\"navbar navbar-fixed-top\"";
        
        $__internal_791af27eac47524899e32e509776190fb129366d687bc0992fe8ecf5a912ba97->leave($__internal_791af27eac47524899e32e509776190fb129366d687bc0992fe8ecf5a912ba97_prof);

    }

    // line 18
    public function block_navbar_brand($context, array $blocks = array())
    {
        $__internal_3f59cf52ea99a872a96a24096fb745ac3b665241719b198541df10f54866deef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f59cf52ea99a872a96a24096fb745ac3b665241719b198541df10f54866deef->enter($__internal_3f59cf52ea99a872a96a24096fb745ac3b665241719b198541df10f54866deef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_brand"));

        // line 19
        echo "\t\t\t\t";
        $this->loadTemplate("VODBaseBundle:Base/Components/Header:navbar-brand.html.twig", "VODBaseBundle:Base/Components/Header:navbar-mobile.html.twig", 19)->display($context);
        // line 20
        echo "\t\t\t";
        
        $__internal_3f59cf52ea99a872a96a24096fb745ac3b665241719b198541df10f54866deef->leave($__internal_3f59cf52ea99a872a96a24096fb745ac3b665241719b198541df10f54866deef_prof);

    }

    // line 26
    public function block_navbar_search($context, array $blocks = array())
    {
        $__internal_7100d1752ba0822b79e111bc3cb8d6a72c6829e750848f828c213354da02ebe5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7100d1752ba0822b79e111bc3cb8d6a72c6829e750848f828c213354da02ebe5->enter($__internal_7100d1752ba0822b79e111bc3cb8d6a72c6829e750848f828c213354da02ebe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_search"));

        // line 27
        echo "\t\t\t<div class=\"navbar-right\">
\t\t\t\t<form class=\"navbar__form navbar-right\" >
\t\t\t\t\t<div class=\"input-group search\">
\t\t\t\t\t\t<span class=\"input-group-btn switcher\">
\t\t\t\t\t\t\t<button class=\"btn\" type=\"button\"><i class=\"fa fa-lg fa-flip-horizontal fa-search\"></i></button>
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t";
        
        $__internal_7100d1752ba0822b79e111bc3cb8d6a72c6829e750848f828c213354da02ebe5->leave($__internal_7100d1752ba0822b79e111bc3cb8d6a72c6829e750848f828c213354da02ebe5_prof);

    }

    // line 59
    public function block_flap($context, array $blocks = array())
    {
        $__internal_63cab2df7357854c8046c3548dc3002606fbb599dc44c68dad11f16132112c66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63cab2df7357854c8046c3548dc3002606fbb599dc44c68dad11f16132112c66->enter($__internal_63cab2df7357854c8046c3548dc3002606fbb599dc44c68dad11f16132112c66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flap"));

        // line 60
        echo "        ";
        $this->loadTemplate("VODBaseBundle:Base/Components/Header:flap.html.twig", "VODBaseBundle:Base/Components/Header:navbar-mobile.html.twig", 60)->display($context);
        // line 61
        echo "    ";
        
        $__internal_63cab2df7357854c8046c3548dc3002606fbb599dc44c68dad11f16132112c66->leave($__internal_63cab2df7357854c8046c3548dc3002606fbb599dc44c68dad11f16132112c66_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Base/Components/Header:navbar-mobile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  402 => 61,  399 => 60,  393 => 59,  377 => 27,  371 => 26,  364 => 20,  361 => 19,  355 => 18,  343 => 4,  335 => 185,  333 => 184,  324 => 178,  315 => 172,  310 => 169,  307 => 167,  299 => 163,  293 => 162,  290 => 161,  282 => 155,  278 => 154,  270 => 152,  266 => 149,  263 => 147,  259 => 145,  252 => 143,  247 => 139,  245 => 138,  237 => 133,  228 => 127,  223 => 124,  213 => 118,  206 => 116,  199 => 114,  192 => 112,  185 => 110,  176 => 104,  171 => 101,  169 => 100,  166 => 98,  164 => 97,  156 => 95,  153 => 94,  150 => 92,  145 => 88,  135 => 84,  133 => 83,  127 => 80,  122 => 78,  114 => 75,  110 => 73,  107 => 71,  104 => 70,  100 => 67,  95 => 63,  92 => 59,  81 => 50,  77 => 48,  73 => 45,  69 => 42,  65 => 39,  62 => 37,  59 => 26,  56 => 24,  54 => 23,  50 => 21,  47 => 18,  39 => 11,  34 => 7,  29 => 4,  26 => 3,);
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

\t\t{# bloque de navegacion abreviado, solo la lupa #}
\t\t{% block navbar_search %}
\t\t\t<div class=\"navbar-right\">
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
{# FIN BLOQUE default-nav-view  #}


{# BLOQUE search-nav-view es el que aparece cuando se inicia una busqueda, tiene FLECHA DE VOLVER, INPUT DE TEXTO, LUPA #}
\t<div class=\"container-fluid search-nav-view\">

\t{# Flecha de volver a la nav original #}
\t\t<a href=\"#\" class=\"btn btn-back switcher\"><i class=\"fa fa-lg fa-arrow-left\"></i></a>

\t{# Bloque de busqueda #}
\t\t<form class=\"navbar__form navbar-right\" action=\"\">
\t\t\t<div class=\"input-group search\">
\t\t\t\t<input id=\"input-search\" type=\"search\" class=\"form-control \" maxlength=\"30\" placeholder=\"{{ 'base.navbar.search' | trans }}\">
\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t<button class=\"btn\" type=\"button\"><i class=\"fa fa-lg fa-flip-horizontal fa-search\"></i></button>
\t\t\t\t</span>
\t\t\t</div>
\t\t</form>
\t</div>

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
\t\t             <a href=\"#myData\" class=\"panel-title\" data-toggle=\"collapse\" aria-controls=\"myData\" data-target=\"#myData\">
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
\t\t                 <i class=\"fa fa-caret-down icon-flip\"></i>
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
", "VODBaseBundle:Base/Components/Header:navbar-mobile.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/Base/Components/Header/navbar-mobile.html.twig");
    }
}
