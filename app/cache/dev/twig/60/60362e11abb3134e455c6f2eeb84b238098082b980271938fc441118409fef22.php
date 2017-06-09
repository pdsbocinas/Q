<?php

/* VODBaseBundle:User/Components:payment-method.html.twig */
class __TwigTemplate_6251d1429f22ecdc0a472eaebebf95b0e12510b00cad48addc1e0f2d35dba6a4 extends Twig_Template
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
        $__internal_be9d44de4c85fee0971e3db454cd89f1ac4969903ab8968a57f2a0770ac15bac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be9d44de4c85fee0971e3db454cd89f1ac4969903ab8968a57f2a0770ac15bac->enter($__internal_be9d44de4c85fee0971e3db454cd89f1ac4969903ab8968a57f2a0770ac15bac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:User/Components:payment-method.html.twig"));

        // line 2
        echo "
<div class=\"change-group ";
        // line 3
        if ((isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
            echo "change-group_alter";
        }
        echo "\">
\t<div class=\"row\">
\t\t<div class=\"col-xs-3 ";
        // line 5
        if ((isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
            echo "col-xs-12";
        }
        echo "\">
\t\t\t<h4>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.payment_method.title", array(), "user"), "html", null, true);
        echo "</h4>
\t\t</div>
\t\t<div class=\"";
        // line 8
        if ((isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
            echo "col-xs-12";
        } else {
            echo "col-xs-9";
        }
        echo "\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"";
        // line 10
        if ((isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
            echo "col-xs-12";
        } else {
            echo "col-xs-9";
        }
        echo "\">
\t\t\t\t\t<div class=\"payment-method\">
\t\t\t\t\t\t";
        // line 12
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "hasPaymentMethod", array()) == true)) {
            // line 13
            echo "                            ";
            if (("Movistar" == $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "paymentGateway", array()), "name", array()))) {
                // line 14
                echo "                                <p>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.payment_method.movistar.yes", array(), "user"), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t";
            } else {
                // line 16
                echo "\t\t\t\t\t\t\t\t";
                if ((("Global Collect" == $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "paymentGateway", array()), "name", array())) || ("Stripe" == $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "paymentGateway", array()), "name", array())))) {
                    // line 17
                    echo "\t\t\t\t\t\t\t\t\t";
                    // line 18
                    echo "                                \t";
                    $this->loadTemplate("VODBaseBundle:Payment/Components:payment-method-credit-card.html.twig", "VODBaseBundle:User/Components:payment-method.html.twig", 18)->display($context);
                    // line 19
                    echo "                                ";
                } else {
                    // line 20
                    echo "\t\t\t\t\t\t\t\t\t<p>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "simplePaymentInformation", array()), "html", null, true);
                    echo "</p>
\t\t\t\t\t\t\t\t";
                }
                // line 22
                echo "\t\t\t\t\t\t\t";
            }
            // line 23
            echo "\t\t\t\t\t\t";
        } else {
            // line 24
            echo "                            <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.payment_method.credit_card.no", array(), "user"), "html", null, true);
            echo "</p>
                            ";
            // line 26
            echo "                            ";
            if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "hasPaidProduct", array())) {
                // line 27
                echo "                                <a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_activate_subscription");
                echo "\" id=\"active-subscription-button\" class=\"btn btn-link btn-link-without-padding-left\" >
                                    ";
                // line 28
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.payment_method.credit_card.buttons.add", array(), "user"), "html", null, true);
                echo "
                                </a>
                            ";
            }
            // line 31
            echo "\t\t\t\t\t\t";
        }
        // line 32
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        // line 35
        echo "\t\t\t\t";
        if (("Global Collect" == $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "paymentGateway", array()), "name", array()))) {
            // line 36
            echo "\t\t\t\t\t<div class=\"";
            if ((isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
                echo "col-xs-12";
            } else {
                echo "col-xs-3";
            }
            echo "\">
\t\t\t\t\t\t<div class=\"";
            // line 37
            if ((isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
                echo "helper-alignment-btn";
            } else {
                echo "pull-right";
            }
            echo "\">
\t\t\t\t\t\t\t<a class=\"btn btn-link disable\" disabled=\"disabled\" href=\"javascript:void(0)\">Cambiar tarjeta de crédito</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 42
        echo "\t\t\t\t<div class=\"col-xs-9 collapse out js-togglable-payment-method ";
        if ((isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
            echo "col-xs-12";
        }
        echo "\">
\t\t\t\t\t<p>cambiar tarjeta</p>
\t\t\t\t\t<a class=\"btn btn-primary btn-lg\" href=\"#\">";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.buttons.confirm", array(), "common"), "html", null, true);
        echo "</a>
\t\t\t\t\t<a class=\"btn btn-link btn-lg out js-togglable-payment-method\" data-toggle=\"collapse\" data-target=\".js-togglable-payment-method\">
                        ";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.buttons.cancel", array(), "common"), "html", null, true);
        echo "
                    </a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
        
        $__internal_be9d44de4c85fee0971e3db454cd89f1ac4969903ab8968a57f2a0770ac15bac->leave($__internal_be9d44de4c85fee0971e3db454cd89f1ac4969903ab8968a57f2a0770ac15bac_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:User/Components:payment-method.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 46,  153 => 44,  145 => 42,  133 => 37,  124 => 36,  121 => 35,  117 => 32,  114 => 31,  108 => 28,  103 => 27,  100 => 26,  95 => 24,  92 => 23,  89 => 22,  83 => 20,  80 => 19,  77 => 18,  75 => 17,  72 => 16,  66 => 14,  63 => 13,  61 => 12,  52 => 10,  43 => 8,  38 => 6,  32 => 5,  25 => 3,  22 => 2,);
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

<div class=\"change-group {% if is_mobile %}change-group_alter{% endif %}\">
\t<div class=\"row\">
\t\t<div class=\"col-xs-3 {% if is_mobile %}col-xs-12{% endif %}\">
\t\t\t<h4>{{ 'user.payment_method.title' | trans }}</h4>
\t\t</div>
\t\t<div class=\"{% if is_mobile %}col-xs-12{% else %}col-xs-9{% endif %}\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"{% if is_mobile %}col-xs-12{% else %}col-xs-9{% endif %}\">
\t\t\t\t\t<div class=\"payment-method\">
\t\t\t\t\t\t{% if app.user.hasPaymentMethod == true %}
                            {% if 'Movistar' == app.user.paymentGateway.name %}
                                <p>{{ 'user.payment_method.movistar.yes' | trans }}</p>
\t\t\t\t\t\t\t{% else  %}
\t\t\t\t\t\t\t\t{% if 'Global Collect' == app.user.paymentGateway.name or 'Stripe' == app.user.paymentGateway.name %}
\t\t\t\t\t\t\t\t\t{# Esto de Global Collect hay que cambiarlo cuando cambie el método de pago #}
                                \t{% include 'VODBaseBundle:Payment/Components:payment-method-credit-card.html.twig' %}
                                {% else  %}
\t\t\t\t\t\t\t\t\t<p>{{ app.user.simplePaymentInformation }}</p>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% else %}
                            <p>{{ 'user.payment_method.credit_card.no' | trans }}</p>
                            {# Si no tiene metodo de pago, pero tiene un plan activo es el caso en que activo la suscripcion por un cupon... Por lo tanto, le permito agregar#}
                            {% if app.user.hasPaidProduct %}
                                <a href=\"{{ path('user_activate_subscription') }}\" id=\"active-subscription-button\" class=\"btn btn-link btn-link-without-padding-left\" >
                                    {{ 'user.payment_method.credit_card.buttons.add' | trans }}
                                </a>
                            {% endif %}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t{# Solo muestro el boton de cambiar tarjeta de credito con medio de pago Global collect #}
\t\t\t\t{% if 'Global Collect' == app.user.paymentGateway.name %}
\t\t\t\t\t<div class=\"{% if is_mobile %}col-xs-12{% else %}col-xs-3{% endif %}\">
\t\t\t\t\t\t<div class=\"{% if is_mobile %}helper-alignment-btn{% else %}pull-right{% endif %}\">
\t\t\t\t\t\t\t<a class=\"btn btn-link disable\" disabled=\"disabled\" href=\"javascript:void(0)\">Cambiar tarjeta de crédito</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t\t<div class=\"col-xs-9 collapse out js-togglable-payment-method {% if is_mobile %}col-xs-12{% endif %}\">
\t\t\t\t\t<p>cambiar tarjeta</p>
\t\t\t\t\t<a class=\"btn btn-primary btn-lg\" href=\"#\">{{ 'common.buttons.confirm' | trans({}, 'common') }}</a>
\t\t\t\t\t<a class=\"btn btn-link btn-lg out js-togglable-payment-method\" data-toggle=\"collapse\" data-target=\".js-togglable-payment-method\">
                        {{ 'common.buttons.cancel'| trans({}, 'common') }}
                    </a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
", "VODBaseBundle:User/Components:payment-method.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/User/Components/payment-method.html.twig");
    }
}
