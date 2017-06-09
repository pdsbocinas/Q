<?php

/* VODBaseBundle:Base/Components/Header:navbar-right.html.twig */
class __TwigTemplate_3e6e5c18024ff252365881dc834ce1a58ecd30f3ffc2e94efe5de17177d84879 extends Twig_Template
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
        $__internal_c77f6df0d7a5d831e72d2552ceea2d55dd45834828f41699f415a99bc379e058 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c77f6df0d7a5d831e72d2552ceea2d55dd45834828f41699f415a99bc379e058->enter($__internal_c77f6df0d7a5d831e72d2552ceea2d55dd45834828f41699f415a99bc379e058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Base/Components/Header:navbar-right.html.twig"));

        // line 2
        echo "
<ul class=\"navbar-right login-buttons\">
\t";
        // line 5
        echo "\t<li>
\t\t<a class=\"btn btn-login btn-small btn-link_primary\" href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.buttons.enter", array(), "common"), "html", null, true);
        echo "</a>
\t</li>

\t";
        // line 10
        echo "\t<li>
\t\t";
        // line 11
        if ( !(isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
            // line 12
            echo "\t\t\t<a class=\"btn btn-register btn-free-days\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("registration");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.buttons.landing_start_button", array(), "common"), "html", null, true);
            echo "</a>
\t\t";
        } elseif (        // line 13
(isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
            // line 14
            echo "\t\t\t<a class=\"btn btn-register btn-small\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_confirm_subscription");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.buttons.start", array(), "common"), "html", null, true);
            echo "</a>
\t\t";
        }
        // line 16
        echo "\t</li>
</ul>
";
        
        $__internal_c77f6df0d7a5d831e72d2552ceea2d55dd45834828f41699f415a99bc379e058->leave($__internal_c77f6df0d7a5d831e72d2552ceea2d55dd45834828f41699f415a99bc379e058_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Base/Components/Header:navbar-right.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 16,  51 => 14,  49 => 13,  42 => 12,  40 => 11,  37 => 10,  29 => 6,  26 => 5,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'common' %}

<ul class=\"navbar-right login-buttons\">
\t{# Botón ingresar #}
\t<li>
\t\t<a class=\"btn btn-login btn-small btn-link_primary\" href=\"{{ path('login') }}\">{{ 'common.buttons.enter' | trans }}</a>
\t</li>

\t{# Botón registro #}
\t<li>
\t\t{% if not is_mobile %}
\t\t\t<a class=\"btn btn-register btn-free-days\" href=\"{{ path('registration') }}\">{{ 'common.buttons.landing_start_button' | trans({}, 'common') }}</a>
\t\t{% elseif is_mobile %}
\t\t\t<a class=\"btn btn-register btn-small\" href=\"{{ path('user_confirm_subscription') }}\">{{ 'common.buttons.start' | trans }}</a>
\t\t{% endif %}
\t</li>
</ul>
", "VODBaseBundle:Base/Components/Header:navbar-right.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/Base/Components/Header/navbar-right.html.twig");
    }
}
