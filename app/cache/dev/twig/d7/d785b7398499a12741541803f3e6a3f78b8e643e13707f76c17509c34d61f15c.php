<?php

/* VODBaseBundle:User/Components:subscription-billing.html.twig */
class __TwigTemplate_5465d70dd5b4c5b5a6d800a7e5bd5ea046a0af867c34484c5543120cfcef4500 extends Twig_Template
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
        $__internal_e6cdd28419461d381618dc268abb2d8093c1ee4979618b190a365dd33d5fe172 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6cdd28419461d381618dc268abb2d8093c1ee4979618b190a365dd33d5fe172->enter($__internal_e6cdd28419461d381618dc268abb2d8093c1ee4979618b190a365dd33d5fe172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:User/Components:subscription-billing.html.twig"));

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
    <div class=\"row\">
        <div class=\"col-xs-3 ";
        // line 7
        if ((isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
            echo "col-xs-12";
        }
        echo "\">
            <h4>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.consumed_charges.title", array(), "user"), "html", null, true);
        echo "</h4>
        </div>
        <div class=\"col-xs-9 ";
        // line 10
        if ((isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
            echo "col-xs-12";
        }
        echo "\">
            <div class=\"row\">
                <div class=\"col-xs-10 collapse in js-togglable-cc ";
        // line 12
        if ((isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
            echo "col-xs-12";
        }
        echo "\">
                    <div class=\"consumed-charges\">
                        <h4>";
        // line 14
        echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.consumed_charges.account", array(), "user") . (isset($context["accountCode"]) ? $context["accountCode"] : $this->getContext($context, "accountCode"))), "html", null, true);
        echo "</h4>
                        ";
        // line 15
        if (((isset($context["showAccountDates"]) ? $context["showAccountDates"] : $this->getContext($context, "showAccountDates")) == true)) {
            // line 16
            echo "                            <p>
                                ";
            // line 17
            echo twig_escape_filter($this->env, (($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.consumed_charges.lapse.current", array(), "user") . " ") . (isset($context["accountBillingFromPeriod"]) ? $context["accountBillingFromPeriod"] : $this->getContext($context, "accountBillingFromPeriod"))), "html", null, true);
            echo "
                                ";
            // line 18
            echo twig_escape_filter($this->env, (($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.consumed_charges.lapse.to", array(), "user") . " ") . (isset($context["accountBillingToPeriod"]) ? $context["accountBillingToPeriod"] : $this->getContext($context, "accountBillingToPeriod"))), "html", null, true);
            echo "
                            </p>

                            <p>
                                ";
            // line 22
            echo twig_escape_filter($this->env, (($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.consumed_charges.lapse.next", array(), "user") . " ") . (isset($context["accountNextBillingDate"]) ? $context["accountNextBillingDate"] : $this->getContext($context, "accountNextBillingDate"))), "html", null, true);
            echo "
                            </p>
                        ";
        }
        // line 25
        echo "                        <button type=\"button\" data-toggle=\"collapse\" data-target=\"#js-toggable-view-charges\" aria-expanded=\"false\" aria-controls=\"js-toggable-view-charges\" class=\"btn-link-without-padding collapsed btn-link btn-link-toggable\">
                            ";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.consumed_charges.latest_movements", array(), "user"), "html", null, true);
        echo "
                        </button>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-xs-12 collapse js-toggable-view-charges\" id=\"js-toggable-view-charges\">
                    <table>
                        <thead>
                        <tr>
                            <th>";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.consumed_charges.charges.date", array(), "user"), "html", null, true);
        echo "</th>
                            <th>";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.consumed_charges.charges.transaction", array(), "user"), "html", null, true);
        echo "</th>
                            <th>";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.consumed_charges.charges.detail", array(), "user"), "html", null, true);
        echo "</th>
                            <th>";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.consumed_charges.charges.import", array(), "user"), "html", null, true);
        echo "</th>
                        </tr>
                        </thead>
                        <tbody id=\"data-transaction\">
                        ";
        // line 51
        echo "                        </tbody>
                    </table>
                    <div id=\"pagination-transaction\"></div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_e6cdd28419461d381618dc268abb2d8093c1ee4979618b190a365dd33d5fe172->leave($__internal_e6cdd28419461d381618dc268abb2d8093c1ee4979618b190a365dd33d5fe172_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:User/Components:subscription-billing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 51,  114 => 39,  110 => 38,  106 => 37,  102 => 36,  89 => 26,  86 => 25,  80 => 22,  73 => 18,  69 => 17,  66 => 16,  64 => 15,  60 => 14,  53 => 12,  46 => 10,  41 => 8,  35 => 7,  28 => 5,  25 => 4,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Facturación #}

{% trans_default_domain 'user' %}

<div class=\"change-group {% if is_mobile %}change-group_alter{% endif %}\">
    <div class=\"row\">
        <div class=\"col-xs-3 {% if is_mobile %}col-xs-12{% endif %}\">
            <h4>{{ 'user.consumed_charges.title' | trans }}</h4>
        </div>
        <div class=\"col-xs-9 {% if is_mobile %}col-xs-12{% endif %}\">
            <div class=\"row\">
                <div class=\"col-xs-10 collapse in js-togglable-cc {% if is_mobile %}col-xs-12{% endif %}\">
                    <div class=\"consumed-charges\">
                        <h4>{{ 'user.consumed_charges.account' | trans ~ accountCode }}</h4>
                        {% if showAccountDates == true %}
                            <p>
                                {{ 'user.consumed_charges.lapse.current' | trans ~ ' ' ~ accountBillingFromPeriod }}
                                {{ 'user.consumed_charges.lapse.to' | trans ~ ' ' ~ accountBillingToPeriod }}
                            </p>

                            <p>
                                {{ 'user.consumed_charges.lapse.next' | trans ~ ' ' ~ accountNextBillingDate }}
                            </p>
                        {% endif %}
                        <button type=\"button\" data-toggle=\"collapse\" data-target=\"#js-toggable-view-charges\" aria-expanded=\"false\" aria-controls=\"js-toggable-view-charges\" class=\"btn-link-without-padding collapsed btn-link btn-link-toggable\">
                            {{ 'user.consumed_charges.latest_movements' | trans }}
                        </button>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-xs-12 collapse js-toggable-view-charges\" id=\"js-toggable-view-charges\">
                    <table>
                        <thead>
                        <tr>
                            <th>{{ 'user.consumed_charges.charges.date' | trans }}</th>
                            <th>{{ 'user.consumed_charges.charges.transaction' | trans }}</th>
                            <th>{{ 'user.consumed_charges.charges.detail' | trans }}</th>
                            <th>{{ 'user.consumed_charges.charges.import' | trans }}</th>
                        </tr>
                        </thead>
                        <tbody id=\"data-transaction\">
                        {#% for transaction in transactions %}
                            <tr>
                                <td>{{ transaction.date }}</td>
                                <td>{{ transaction.id }}</td>
                                <td>{{ transaction.description }}</td>
                                <td>{{ 'common.currency_symbol' | trans({}, 'common')~' '~transaction.amount|number_format(currency_decimals, ',', '.') }}</td>
                            </tr>
                        {% endfor %#}
                        </tbody>
                    </table>
                    <div id=\"pagination-transaction\"></div>
                </div>
            </div>
        </div>
    </div>
</div>
", "VODBaseBundle:User/Components:subscription-billing.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/User/Components/subscription-billing.html.twig");
    }
}
