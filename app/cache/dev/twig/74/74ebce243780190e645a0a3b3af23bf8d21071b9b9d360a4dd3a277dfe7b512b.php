<?php

/* VODBaseBundle:User/Components:cancel-subscription.html.twig */
class __TwigTemplate_9b12604e195fcf292298ec511d3513f29778a30ca3a310865311949a645ee544 extends Twig_Template
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
        $__internal_406b41798052c7414e112fcd60ad1762335ce6a1f73e45f78983715c8619384d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_406b41798052c7414e112fcd60ad1762335ce6a1f73e45f78983715c8619384d->enter($__internal_406b41798052c7414e112fcd60ad1762335ce6a1f73e45f78983715c8619384d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:User/Components:cancel-subscription.html.twig"));

        // line 2
        echo "
";
        // line 3
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "hasPaidProduct", array()) == true)) {
            // line 4
            echo "\t<div class=\"change-group ";
            if ((isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
                echo "short-container";
            }
            echo "\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-3 ";
            // line 6
            if ((isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
                echo "col-xs-12";
            }
            echo "\">
\t\t\t\t<h4>";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.subscription.cancel.title", array(), "user"), "html", null, true);
            echo "</h4>
\t\t\t</div>
\t\t\t<div class=\"col-xs-9 ";
            // line 9
            if ((isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
                echo "col-xs-12";
            }
            echo "\">
\t\t\t\t";
            // line 10
            if ((isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
                // line 11
                echo "\t\t\t\t";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.subscription.cancel.cannot", array(), "user"), "html", null, true);
                echo "
\t\t\t\t";
            } else {
                // line 13
                echo "\t\t\t\t<div class=\"pull-right\">
                    <a class=\"btn btn-link\" id=\"cancel-subscription-button\" href=\"";
                // line 14
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_cancel_subscription");
                echo "\">
                        ";
                // line 15
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.subscription.cancel.cancel_button", array(), "user"), "html", null, true);
                echo "
                    </a>
\t\t\t\t</div>
\t\t\t\t";
            }
            // line 19
            echo "\t\t\t</div>
\t\t</div>
\t</div>
";
        }
        
        $__internal_406b41798052c7414e112fcd60ad1762335ce6a1f73e45f78983715c8619384d->leave($__internal_406b41798052c7414e112fcd60ad1762335ce6a1f73e45f78983715c8619384d_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:User/Components:cancel-subscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 19,  67 => 15,  63 => 14,  60 => 13,  54 => 11,  52 => 10,  46 => 9,  41 => 7,  35 => 6,  27 => 4,  25 => 3,  22 => 2,);
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

{% if app.user.hasPaidProduct == true %}
\t<div class=\"change-group {% if is_mobile %}short-container{% endif %}\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-3 {% if is_mobile %}col-xs-12{% endif %}\">
\t\t\t\t<h4>{{ 'user.subscription.cancel.title' | trans }}</h4>
\t\t\t</div>
\t\t\t<div class=\"col-xs-9 {% if is_mobile %}col-xs-12{% endif %}\">
\t\t\t\t{% if is_mobile %}
\t\t\t\t{{ 'user.subscription.cancel.cannot' | trans }}
\t\t\t\t{% else %}
\t\t\t\t<div class=\"pull-right\">
                    <a class=\"btn btn-link\" id=\"cancel-subscription-button\" href=\"{{ path('user_cancel_subscription') }}\">
                        {{ 'user.subscription.cancel.cancel_button' | trans }}
                    </a>
\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t</div>
\t</div>
{% endif %}
", "VODBaseBundle:User/Components:cancel-subscription.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/User/Components/cancel-subscription.html.twig");
    }
}
