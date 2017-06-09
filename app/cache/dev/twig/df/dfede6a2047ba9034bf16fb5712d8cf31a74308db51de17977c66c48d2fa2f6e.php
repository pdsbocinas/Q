<?php

/* VODBaseBundle:User/Components:subscription-type.html.twig */
class __TwigTemplate_a183af3826929ec4d0655840e6b293b2f8d90171a75c177f5c79a5e0447335e6 extends Twig_Template
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
        $__internal_a4680b15c32aacae0d7ba599e56ecd4f759667a25a5e58cb7a2d6fa0626f97a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4680b15c32aacae0d7ba599e56ecd4f759667a25a5e58cb7a2d6fa0626f97a4->enter($__internal_a4680b15c32aacae0d7ba599e56ecd4f759667a25a5e58cb7a2d6fa0626f97a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:User/Components:subscription-type.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
<div class=\"change-group ";
        // line 5
        if ((isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
            echo "change-group_alter";
        }
        echo "\">
\t";
        // line 6
        $this->loadTemplate("VODBaseBundle:Components:flash-messages.html.twig", "VODBaseBundle:User/Components:subscription-type.html.twig", 6)->display($context);
        // line 7
        echo "\t<div class=\"row\">
\t\t<div class=\"col-xs-3 ";
        // line 8
        if ((isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
            echo "col-xs-12";
        }
        echo "\">
\t\t\t<h4>
\t\t\t\t";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.subscription.title", array(), "user"), "html", null, true);
        echo "
\t\t\t</h4>
\t\t</div>

\t\t<div class=\"col-xs-9 ";
        // line 14
        if ((isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
            echo "col-xs-12";
        }
        echo "\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xs-10 collapse in js-togglable-product ";
        // line 16
        if ((isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
            echo "col-xs-12";
        }
        echo "\">
\t\t\t\t\t";
        // line 18
        echo "\t\t\t\t\t";
        $this->loadTemplate("VODBaseBundle:User/Components:subscription-product-information.html.twig", "VODBaseBundle:User/Components:subscription-type.html.twig", 18)->display($context);
        // line 19
        echo "\t\t\t\t</div>
\t\t\t\t";
        // line 20
        if ( !$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "hasPaidProduct", array())) {
            // line 21
            echo "\t\t\t\t\t<div class=\"col-xs-2 in ";
            if ((isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
                echo "col-xs-12";
            }
            echo "\">
\t\t\t\t\t\t";
            // line 22
            if ((isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
                echo "<div class=\"helper-alignment-btn\">";
            }
            // line 23
            echo "\t\t\t\t\t\t<a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_activate_subscription");
            echo "\" id=\"active-subscription-button\" class=\"btn btn-link ";
            if ( !(isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
                echo "pull-right";
            }
            echo "\" >
\t\t\t\t\t\t\t";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.subscription.buttons.activate", array(), "user"), "html", null, true);
            echo "
\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
            // line 26
            if ((isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
                echo "</div>";
            }
            // line 27
            echo "\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 29
        echo "\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
        
        $__internal_a4680b15c32aacae0d7ba599e56ecd4f759667a25a5e58cb7a2d6fa0626f97a4->leave($__internal_a4680b15c32aacae0d7ba599e56ecd4f759667a25a5e58cb7a2d6fa0626f97a4_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:User/Components:subscription-type.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 29,  103 => 27,  99 => 26,  94 => 24,  85 => 23,  81 => 22,  74 => 21,  72 => 20,  69 => 19,  66 => 18,  60 => 16,  53 => 14,  46 => 10,  39 => 8,  36 => 7,  34 => 6,  28 => 5,  25 => 4,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Tipo de subscripción #}

{% trans_default_domain 'user' %}

<div class=\"change-group {% if is_mobile %}change-group_alter{% endif %}\">
\t{% include 'VODBaseBundle:Components:flash-messages.html.twig' %}
\t<div class=\"row\">
\t\t<div class=\"col-xs-3 {% if is_mobile %}col-xs-12{% endif %}\">
\t\t\t<h4>
\t\t\t\t{{ 'user.subscription.title' | trans }}
\t\t\t</h4>
\t\t</div>

\t\t<div class=\"col-xs-9 {% if is_mobile %}col-xs-12{% endif %}\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xs-10 collapse in js-togglable-product {% if is_mobile %}col-xs-12{% endif %}\">
\t\t\t\t\t{# Product information #}
\t\t\t\t\t{% include 'VODBaseBundle:User/Components:subscription-product-information.html.twig' %}
\t\t\t\t</div>
\t\t\t\t{% if not app.user.hasPaidProduct %}
\t\t\t\t\t<div class=\"col-xs-2 in {% if is_mobile %}col-xs-12{% endif %}\">
\t\t\t\t\t\t{% if is_mobile %}<div class=\"helper-alignment-btn\">{% endif %}
\t\t\t\t\t\t<a href=\"{{ path('user_activate_subscription') }}\" id=\"active-subscription-button\" class=\"btn btn-link {% if not is_mobile %}pull-right{% endif %}\" >
\t\t\t\t\t\t\t{{ 'user.subscription.buttons.activate'|trans }}
\t\t\t\t\t\t</a>
\t\t\t\t\t\t{% if is_mobile %}</div>{% endif %}
\t\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t</div>
\t</div>
</div>
", "VODBaseBundle:User/Components:subscription-type.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/User/Components/subscription-type.html.twig");
    }
}
