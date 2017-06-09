<?php

/* VODBaseBundle:Base/Components/Header:navbar-right-landing.html.twig */
class __TwigTemplate_5c1793493f72cd3e93d6783d49fce8348fa4d4b7c617c93ea87725f1bc784e19 extends Twig_Template
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
        $__internal_74849742b2a1c6d7a2b068b69f88bdf4ae90927b00a16d2477e4efc7c205e6e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74849742b2a1c6d7a2b068b69f88bdf4ae90927b00a16d2477e4efc7c205e6e7->enter($__internal_74849742b2a1c6d7a2b068b69f88bdf4ae90927b00a16d2477e4efc7c205e6e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Base/Components/Header:navbar-right-landing.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        if ( !(isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
            // line 6
            echo "\t<ul class=\"navbar-right login-buttons\">
\t\t<li><a class=\"btn btn-login btn-small btn-link_primary\" href=\"";
            // line 7
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.buttons.enter", array(), "common"), "html", null, true);
            echo "</a></li>
\t\t<li><a class=\"btn btn-register btn-small\" href=\"";
            // line 8
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("registration");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.buttons.start", array(), "common"), "html", null, true);
            echo "</a></li>
\t</ul>
";
        } elseif (        // line 10
(isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
            // line 11
            echo "\t<ul class=\"navbar-right login-buttons\">
\t\t<li><a class=\"btn btn-login btn-small btn-link_primary\" href=\"";
            // line 12
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.buttons.enter", array(), "common"), "html", null, true);
            echo "</a></li>
\t\t<li><a class=\"btn btn-register btn-small\" href=\"";
            // line 13
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("registration");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.buttons.start", array(), "common"), "html", null, true);
            echo "</a></li>
\t</ul>
";
        }
        
        $__internal_74849742b2a1c6d7a2b068b69f88bdf4ae90927b00a16d2477e4efc7c205e6e7->leave($__internal_74849742b2a1c6d7a2b068b69f88bdf4ae90927b00a16d2477e4efc7c205e6e7_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Base/Components/Header:navbar-right-landing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 13,  51 => 12,  48 => 11,  46 => 10,  39 => 8,  33 => 7,  30 => 6,  28 => 5,  25 => 4,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Navbar hecha para que solo levante en la landing por el boton viejo de Comenzar #}

{% trans_default_domain 'common' %}

{% if not is_mobile %}
\t<ul class=\"navbar-right login-buttons\">
\t\t<li><a class=\"btn btn-login btn-small btn-link_primary\" href=\"{{ path('login') }}\">{{ 'common.buttons.enter' | trans }}</a></li>
\t\t<li><a class=\"btn btn-register btn-small\" href=\"{{ path('registration') }}\">{{ 'common.buttons.start' | trans }}</a></li>
\t</ul>
{% elseif is_mobile %}
\t<ul class=\"navbar-right login-buttons\">
\t\t<li><a class=\"btn btn-login btn-small btn-link_primary\" href=\"{{ path('login') }}\">{{ 'common.buttons.enter' | trans }}</a></li>
\t\t<li><a class=\"btn btn-register btn-small\" href=\"{{ path('registration') }}\">{{ 'common.buttons.start' | trans }}</a></li>
\t</ul>
{% endif %}
", "VODBaseBundle:Base/Components/Header:navbar-right-landing.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/Base/Components/Header/navbar-right-landing.html.twig");
    }
}
