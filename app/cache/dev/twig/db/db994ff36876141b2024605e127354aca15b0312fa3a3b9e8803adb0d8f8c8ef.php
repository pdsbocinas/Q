<?php

/* VODBaseBundle:User/Components:subscription-product-information.html.twig */
class __TwigTemplate_97387580116627e5126f16cf4e22ae636aefe6e8d3b91ffac708971797c24046 extends Twig_Template
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
        $__internal_086046782081d460bd99664596539b891d7afef165e994abb0e0cdf7659ada36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_086046782081d460bd99664596539b891d7afef165e994abb0e0cdf7659ada36->enter($__internal_086046782081d460bd99664596539b891d7afef165e994abb0e0cdf7659ada36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:User/Components:subscription-product-information.html.twig"));

        // line 2
        echo "<div class=\"product\">
\t";
        // line 3
        if ( !$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "hasPaidProduct", array())) {
            // line 4
            echo "\t    ";
            $context["subscription"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.subscription.no_subscription", array(), "user");
            // line 5
            echo "\t";
        } else {
            // line 6
            echo "\t    ";
            $context["price"] = twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "product", array()), "price", array()), (isset($context["currency_decimals"]) ? $context["currency_decimals"] : $this->getContext($context, "currency_decimals")), ",", ".");
            // line 7
            echo "\t    ";
            $context["formatedPrice"] = (($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.currency_symbol", array(), "common") . " ") . (isset($context["price"]) ? $context["price"] : $this->getContext($context, "price")));
            // line 8
            echo "\t    ";
            $context["subscription"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.subscription.type", array("%product%" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "product", array()), "name", array()), "%price%" => (isset($context["formatedPrice"]) ? $context["formatedPrice"] : $this->getContext($context, "formatedPrice"))), "user");
            // line 9
            echo "\t    ";
            // line 10
            echo "\t        ";
            if ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "channelUpMode", array()) == "clarin365") || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "channelUpMode", array()) == "clarin365plus"))) {
                // line 11
                echo "\t            ";
                $context["category"] = "";
                // line 12
                echo "\t            ";
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "channelUpMode", array()) == "clarin365")) {
                    // line 13
                    echo "\t                ";
                    $context["classicPrice"] = ((isset($context["price"]) ? $context["price"] : $this->getContext($context, "price")) - (((isset($context["price"]) ? $context["price"] : $this->getContext($context, "price")) * $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("promotions.clarin.classic_rate", array(), "promotions")) / 100));
                    // line 14
                    echo "\t                ";
                    $context["formatedPrice"] = (($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.currency_symbol", array(), "common") . " ") . twig_number_format_filter($this->env, (isset($context["classicPrice"]) ? $context["classicPrice"] : $this->getContext($context, "classicPrice")), (isset($context["currency_decimals"]) ? $context["currency_decimals"] : $this->getContext($context, "currency_decimals")), ",", "."));
                    // line 15
                    echo "\t            ";
                } elseif (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "channelUpMode", array()) == "clarin365plus")) {
                    // line 16
                    echo "\t                ";
                    $context["plusPrice"] = ((isset($context["price"]) ? $context["price"] : $this->getContext($context, "price")) - (((isset($context["price"]) ? $context["price"] : $this->getContext($context, "price")) * $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("promotions.clarin.plus_rate", array(), "promotions")) / 100));
                    // line 17
                    echo "\t                ";
                    $context["category"] = "Plus";
                    // line 18
                    echo "\t                ";
                    $context["formatedPrice"] = (($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.currency_symbol", array(), "common") . " ") . twig_number_format_filter($this->env, (isset($context["plusPrice"]) ? $context["plusPrice"] : $this->getContext($context, "plusPrice")), (isset($context["currency_decimals"]) ? $context["currency_decimals"] : $this->getContext($context, "currency_decimals")), ",", "."));
                    // line 19
                    echo "\t            ";
                }
                // line 20
                echo "\t            ";
                $context["subscription"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("promotions.clarin.suscription_resumee", array("%category%" => (isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "%price%" => (isset($context["formatedPrice"]) ? $context["formatedPrice"] : $this->getContext($context, "formatedPrice"))), "promotions");
                // line 21
                echo "\t        ";
            }
            // line 22
            echo "\t    ";
            // line 23
            echo "\t";
        }
        // line 24
        echo "\t<p>";
        echo twig_escape_filter($this->env, (isset($context["subscription"]) ? $context["subscription"] : $this->getContext($context, "subscription")), "html", null, true);
        echo "</p>
</div>";
        
        $__internal_086046782081d460bd99664596539b891d7afef165e994abb0e0cdf7659ada36->leave($__internal_086046782081d460bd99664596539b891d7afef165e994abb0e0cdf7659ada36_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:User/Components:subscription-product-information.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 24,  82 => 23,  80 => 22,  77 => 21,  74 => 20,  71 => 19,  68 => 18,  65 => 17,  62 => 16,  59 => 15,  56 => 14,  53 => 13,  50 => 12,  47 => 11,  44 => 10,  42 => 9,  39 => 8,  36 => 7,  33 => 6,  30 => 5,  27 => 4,  25 => 3,  22 => 2,);
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
<div class=\"product\">
\t{% if not app.user.hasPaidProduct %}
\t    {% set subscription = 'user.subscription.no_subscription' | trans %}
\t{% else %}
\t    {% set price = app.user.product.price|number_format(currency_decimals, ',', '.') %}
\t    {% set formatedPrice = 'common.currency_symbol'| trans({}, 'common') ~ ' ' ~ price %}
\t    {% set subscription = 'user.subscription.type' | trans({'%product%': app.user.product.name, '%price%': formatedPrice}) %}
\t    {# Clarin #}
\t        {% if app.user.channelUpMode == 'clarin365' or app.user.channelUpMode == 'clarin365plus' %}
\t            {% set category = '' %}
\t            {% if app.user.channelUpMode == 'clarin365' %}
\t                {% set classicPrice = price - (price * 'promotions.clarin.classic_rate' |trans({}, 'promotions')/100) %}
\t                {% set formatedPrice = 'common.currency_symbol' | trans({}, 'common') ~ ' ' ~ classicPrice |number_format(currency_decimals, ',', '.') %}
\t            {% elseif app.user.channelUpMode == 'clarin365plus' %}
\t                {% set plusPrice = price - (price * 'promotions.clarin.plus_rate' |trans({}, 'promotions')/100) %}
\t                {% set category = 'Plus' %}
\t                {% set formatedPrice = 'common.currency_symbol' | trans({}, 'common') ~ ' ' ~ plusPrice |number_format(currency_decimals, ',', '.') %}
\t            {% endif %}
\t            {% set subscription = 'promotions.clarin.suscription_resumee' | trans({'%category%': category, '%price%': formatedPrice}, 'promotions') %}
\t        {% endif %}
\t    {# fin clarin #}
\t{% endif %}
\t<p>{{- subscription -}}</p>
</div>", "VODBaseBundle:User/Components:subscription-product-information.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/src/VOD/QubitArgentinaBundle/Resources/views/User/Components/subscription-product-information.html.twig");
    }
}
