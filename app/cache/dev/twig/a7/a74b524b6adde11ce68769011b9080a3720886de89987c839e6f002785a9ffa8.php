<?php

/* VODBaseBundle:User/Subscription:subscription.html.twig */
class __TwigTemplate_fda2e83aabc6803d7a8660aa4bf9a33dcf45942165acc5a533bd640ca9290b18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("VODBaseBundle:Base/Wrappers:wrapper-user.html.twig", "VODBaseBundle:User/Subscription:subscription.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'custom_stylesheet' => array($this, 'block_custom_stylesheet'),
            'custom_javascript' => array($this, 'block_custom_javascript'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "VODBaseBundle:Base/Wrappers:wrapper-user.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0b10a1447e9aa083e32edb416b36188e232f833495cde03631adf0d349408cce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b10a1447e9aa083e32edb416b36188e232f833495cde03631adf0d349408cce->enter($__internal_0b10a1447e9aa083e32edb416b36188e232f833495cde03631adf0d349408cce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:User/Subscription:subscription.html.twig"));

        // line 15
        $context["addCouponFormClass"] = "out";
        // line 16
        if (($this->getAttribute($this->getAttribute((isset($context["couponForm"]) ? $context["couponForm"] : $this->getContext($context, "couponForm")), "vars", array()), "valid", array()) == false)) {
            // line 17
            $context["addCouponFormClass"] = "in";
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b10a1447e9aa083e32edb416b36188e232f833495cde03631adf0d349408cce->leave($__internal_0b10a1447e9aa083e32edb416b36188e232f833495cde03631adf0d349408cce_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_5a05ac87a8d922da9e2b1e12522833d2d6164e8735bd2dcc95d924fd2ef460b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a05ac87a8d922da9e2b1e12522833d2d6164e8735bd2dcc95d924fd2ef460b8->enter($__internal_5a05ac87a8d922da9e2b1e12522833d2d6164e8735bd2dcc95d924fd2ef460b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 6
        echo "    ";
        $this->displayBlock('custom_stylesheet', $context, $blocks);
        // line 9
        echo "    ";
        $this->loadTemplate("VODBaseBundle:User/Subscription:subscription.html.twig", "VODBaseBundle:User/Subscription:subscription.html.twig", 9, "1129820946")->display($context);
        
        $__internal_5a05ac87a8d922da9e2b1e12522833d2d6164e8735bd2dcc95d924fd2ef460b8->leave($__internal_5a05ac87a8d922da9e2b1e12522833d2d6164e8735bd2dcc95d924fd2ef460b8_prof);

    }

    // line 6
    public function block_custom_stylesheet($context, array $blocks = array())
    {
        $__internal_1d4f4aad3ea3f0819b99f6ebfc6c064b6c46a4a01aece73ba2f80b8cdd11761a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d4f4aad3ea3f0819b99f6ebfc6c064b6c46a4a01aece73ba2f80b8cdd11761a->enter($__internal_1d4f4aad3ea3f0819b99f6ebfc6c064b6c46a4a01aece73ba2f80b8cdd11761a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "custom_stylesheet"));

        // line 7
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/vendor/paginationjs/dist/pagination.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_1d4f4aad3ea3f0819b99f6ebfc6c064b6c46a4a01aece73ba2f80b8cdd11761a->leave($__internal_1d4f4aad3ea3f0819b99f6ebfc6c064b6c46a4a01aece73ba2f80b8cdd11761a_prof);

    }

    // line 20
    public function block_custom_javascript($context, array $blocks = array())
    {
        $__internal_21c99f38523f271dbd70303a8229c406c52ee9234054d2c10639825655117841 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21c99f38523f271dbd70303a8229c406c52ee9234054d2c10639825655117841->enter($__internal_21c99f38523f271dbd70303a8229c406c52ee9234054d2c10639825655117841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "custom_javascript"));

        // line 21
        echo "\t";
        $this->displayParentBlock("custom_javascript", $context, $blocks);
        echo "
\t<script>
\t\tvar couponForm = \$('#";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["couponForm"]) ? $context["couponForm"] : $this->getContext($context, "couponForm")), "vars", array()), "id", array()), "html", null, true);
        echo "').validate({
\t        errorClass: 'text-danger error',
\t        errorElement: 'p',
\t        onkeyup: false,
\t        onfocusout: function(element) {
\t            this.element(element);
\t        }
\t    });

\t    \$('#";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["couponForm"]) ? $context["couponForm"] : $this->getContext($context, "couponForm")), "coupon", array()), "vars", array()), "id", array()), "html", null, true);
        echo "').bind('input', function() {
            if(\$(this).val().length >= ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["couponCodeParameters"]) ? $context["couponCodeParameters"] : $this->getContext($context, "couponCodeParameters")), "min", array()), "html", null, true);
        echo ") {
                \$.post('";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("service_constraint_coupon_validator");
        echo "', \$(this).serialize(), function(data) {
                    if (false === data.Status) {
                        \$('#coupon-error-container').html('<p class=\"text-danger\">' + data.Message + '</p>');
                        \$('#coupon-information-container').html('');
                    } else {
                    \t\$('#coupon-error-container').html('');
                        \$('#coupon-information-container').html(data.Data.Twig);
                    }
                }, 'json');
            } else {
            \t\$('#coupon-information-container').html('');
            \t\$('#coupon-error-container').html('');
            }
        });

        \$(document).on('click', '#button-close-coupon-information', function() {
            \$('#coupon-information-container').html('');
            \$('#";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["couponForm"]) ? $context["couponForm"] : $this->getContext($context, "couponForm")), "coupon", array()), "vars", array()), "id", array()), "html", null, true);
        echo "').val('');
        });

        \$(document).on('click', '#add-coupon-cancel-button', function() {
        \t\$('#coupon-information-container').html('');
        \t\$('#";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["couponForm"]) ? $context["couponForm"] : $this->getContext($context, "couponForm")), "coupon", array()), "vars", array()), "id", array()), "html", null, true);
        echo "').val('');
            couponForm.resetForm();
        });

        \$('#tincho-modal').modal('show');

        var template = function (data) {
            var dataHtml = '';

            \$.each(data, function(index, item){
                dataHtml += '<tr>';
                dataHtml += '<td>'+ item.date +'</td>';
                dataHtml += '<td>'+ item.id +'</td>';
                dataHtml += '<td>'+ item.description +'</td>';
                dataHtml += '<td>'+ item.import +'</td>';
                dataHtml += '</tr>';
            });

            return dataHtml;
        };

        var dataSource = [
            ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, (isset($context["transactions"]) ? $context["transactions"] : $this->getContext($context, "transactions"))));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 79
            echo "            {
                'id'            : '";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo "',
                'date'          : '";
            // line 81
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "date", array()), "d/m/Y"), "html", null, true);
            echo "',
                'description'   : '";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "description", array()), "html", null, true);
            echo "',
                'import'        : '";
            // line 83
            echo twig_escape_filter($this->env, (($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.currency_symbol", array(), "common") . " ") . twig_number_format_filter($this->env, $this->getAttribute($context["item"], "amount", array()), (isset($context["currency_decimals"]) ? $context["currency_decimals"] : $this->getContext($context, "currency_decimals")), ",", ".")), "html", null, true);
            echo "',
            },
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "        ];

        \$(function () {
            var dataContainer = \$('#data-transaction');

            \$('#pagination-transaction').pagination({
                dataSource: dataSource,
                callback: function(data, pagination) {
                    var html = template(data);
                    dataContainer.html(html);
                }
            });
        });
    </script>
";
        
        $__internal_21c99f38523f271dbd70303a8229c406c52ee9234054d2c10639825655117841->leave($__internal_21c99f38523f271dbd70303a8229c406c52ee9234054d2c10639825655117841_prof);

    }

    // line 102
    public function block_content($context, array $blocks = array())
    {
        $__internal_4ad8421d7015a3e653d6268152a842c7b385c6470b8d0092953ee6fbbb4cb3a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ad8421d7015a3e653d6268152a842c7b385c6470b8d0092953ee6fbbb4cb3a0->enter($__internal_4ad8421d7015a3e653d6268152a842c7b385c6470b8d0092953ee6fbbb4cb3a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 103
        echo "\t";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "user_subscription_error"), "method")) {
            // line 104
            echo "\t\t<div class=\"alert alert-danger\" role=\"alert\">
\t\t\t";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "user_subscription_error"), "method"), 0, array(), "array"), "html", null, true);
            echo "
\t\t</div>
\t";
        }
        // line 108
        echo "\t";
        // line 109
        echo "\t\t";
        $this->loadTemplate("VODBaseBundle:User/Components:subscription-type.html.twig", "VODBaseBundle:User/Subscription:subscription.html.twig", 109)->display($context);
        // line 110
        echo "\t";
        // line 111
        echo "
\t";
        // line 113
        echo "\t\t";
        $this->loadTemplate("VODBaseBundle:User/Components:subscription-billing.html.twig", "VODBaseBundle:User/Subscription:subscription.html.twig", 113)->display(array_merge($context, array("showAccountDates" => (isset($context["showAccountDates"]) ? $context["showAccountDates"] : $this->getContext($context, "showAccountDates")), "accountCode" =>         // line 114
(isset($context["accountCode"]) ? $context["accountCode"] : $this->getContext($context, "accountCode")), "accountBillingFromPeriod" =>         // line 115
(isset($context["accountBillingFromPeriod"]) ? $context["accountBillingFromPeriod"] : $this->getContext($context, "accountBillingFromPeriod")), "accountBillingToPeriod" =>         // line 116
(isset($context["accountBillingToPeriod"]) ? $context["accountBillingToPeriod"] : $this->getContext($context, "accountBillingToPeriod")), "accountNextBillingDate" =>         // line 117
(isset($context["accountNextBillingDate"]) ? $context["accountNextBillingDate"] : $this->getContext($context, "accountNextBillingDate")), "transactions" =>         // line 118
(isset($context["transactions"]) ? $context["transactions"] : $this->getContext($context, "transactions")))));
        // line 119
        echo "\t";
        // line 120
        echo "
\t";
        // line 122
        echo "\t\t";
        $this->loadTemplate("VODBaseBundle:User/Components:payment-method.html.twig", "VODBaseBundle:User/Subscription:subscription.html.twig", 122)->display($context);
        // line 123
        echo "\t";
        // line 124
        echo "
    ";
        // line 126
        echo "        ";
        if (("Movistar" != $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "paymentGateway", array()))) {
            // line 127
            echo "            ";
            $this->loadTemplate("VODBaseBundle:User/Components:coupon-block.html.twig", "VODBaseBundle:User/Subscription:subscription.html.twig", 127)->display($context);
            // line 128
            echo "        ";
        }
        // line 129
        echo "    ";
        // line 130
        echo "
\t";
        // line 132
        echo "\t\t";
        $this->loadTemplate("VODBaseBundle:User/Components:cancel-subscription.html.twig", "VODBaseBundle:User/Subscription:subscription.html.twig", 132)->display($context);
        // line 133
        echo "\t";
        // line 134
        echo "
    ";
        // line 135
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "payment_gateway_error"), "method")) {
            // line 136
            echo "        ";
            // line 137
            $this->loadTemplate("VODBaseBundle:Components/Modal:generic-modal.html.twig", "VODBaseBundle:User/Subscription:subscription.html.twig", 137)->display(array_merge($context, array("crazyId" => "tincho-modal", "crazyTitle" => "Atención", "crazyText" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 141
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "payment_gateway_error"), "method"), 0, array(), "array"), "acceptButton" => true, "cancelButton" => false, "acceptButtonText" => "Aceptar", "acceptButtonAction" => "javascript:\$(\"#tincho-modal\").modal(\"hide\")")));
            // line 148
            echo "    ";
        }
        
        $__internal_4ad8421d7015a3e653d6268152a842c7b385c6470b8d0092953ee6fbbb4cb3a0->leave($__internal_4ad8421d7015a3e653d6268152a842c7b385c6470b8d0092953ee6fbbb4cb3a0_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:User/Subscription:subscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 148,  288 => 141,  287 => 137,  285 => 136,  283 => 135,  280 => 134,  278 => 133,  275 => 132,  272 => 130,  270 => 129,  267 => 128,  264 => 127,  261 => 126,  258 => 124,  256 => 123,  253 => 122,  250 => 120,  248 => 119,  246 => 118,  245 => 117,  244 => 116,  243 => 115,  242 => 114,  240 => 113,  237 => 111,  235 => 110,  232 => 109,  230 => 108,  224 => 105,  221 => 104,  218 => 103,  212 => 102,  191 => 86,  182 => 83,  178 => 82,  174 => 81,  170 => 80,  167 => 79,  163 => 78,  138 => 56,  130 => 51,  110 => 34,  106 => 33,  102 => 32,  90 => 23,  84 => 21,  78 => 20,  68 => 7,  62 => 6,  54 => 9,  51 => 6,  45 => 5,  38 => 1,  35 => 17,  33 => 16,  31 => 15,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'VODBaseBundle:Base/Wrappers:wrapper-user.html.twig' %}

{% trans_default_domain 'user' %}

{% block head %}
    {% block custom_stylesheet %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/vendor/paginationjs/dist/pagination.css') }}\">
    {% endblock custom_stylesheet %}
    {% embed 'VODBaseBundle:Base/Components/Header:head.html.twig' %}
        {% block title %}{{ section ~ ' - ' ~ 'common.opengraph.site_name' | trans({}, 'common') }}{% endblock title %}
        {% block meta_description %}{{ section ~ ' - ' ~ 'common.opengraph.site_name' | trans({}, 'common') }}{% endblock meta_description %}
    {% endembed %}
{% endblock head %}

{% set addCouponFormClass = 'out' %}
{% if couponForm.vars.valid == false %} {#if form not valid set out class#}
\t{% set addCouponFormClass = 'in' %}
{% endif %}

{% block custom_javascript %}
\t{{ parent() }}
\t<script>
\t\tvar couponForm = \$('#{{ couponForm.vars.id }}').validate({
\t        errorClass: 'text-danger error',
\t        errorElement: 'p',
\t        onkeyup: false,
\t        onfocusout: function(element) {
\t            this.element(element);
\t        }
\t    });

\t    \$('#{{ couponForm.coupon.vars.id }}').bind('input', function() {
            if(\$(this).val().length >= {{ couponCodeParameters.min }}) {
                \$.post('{{ path('service_constraint_coupon_validator') }}', \$(this).serialize(), function(data) {
                    if (false === data.Status) {
                        \$('#coupon-error-container').html('<p class=\"text-danger\">' + data.Message + '</p>');
                        \$('#coupon-information-container').html('');
                    } else {
                    \t\$('#coupon-error-container').html('');
                        \$('#coupon-information-container').html(data.Data.Twig);
                    }
                }, 'json');
            } else {
            \t\$('#coupon-information-container').html('');
            \t\$('#coupon-error-container').html('');
            }
        });

        \$(document).on('click', '#button-close-coupon-information', function() {
            \$('#coupon-information-container').html('');
            \$('#{{ couponForm.coupon.vars.id }}').val('');
        });

        \$(document).on('click', '#add-coupon-cancel-button', function() {
        \t\$('#coupon-information-container').html('');
        \t\$('#{{ couponForm.coupon.vars.id }}').val('');
            couponForm.resetForm();
        });

        \$('#tincho-modal').modal('show');

        var template = function (data) {
            var dataHtml = '';

            \$.each(data, function(index, item){
                dataHtml += '<tr>';
                dataHtml += '<td>'+ item.date +'</td>';
                dataHtml += '<td>'+ item.id +'</td>';
                dataHtml += '<td>'+ item.description +'</td>';
                dataHtml += '<td>'+ item.import +'</td>';
                dataHtml += '</tr>';
            });

            return dataHtml;
        };

        var dataSource = [
            {% for item in transactions | reverse  %}
            {
                'id'            : '{{ item.id }}',
                'date'          : '{{ item.date | date('d/m/Y') }}',
                'description'   : '{{ item.description }}',
                'import'        : '{{ 'common.currency_symbol' | trans({}, 'common')~' '~item.amount|number_format(currency_decimals, ',', '.') }}',
            },
            {% endfor %}
        ];

        \$(function () {
            var dataContainer = \$('#data-transaction');

            \$('#pagination-transaction').pagination({
                dataSource: dataSource,
                callback: function(data, pagination) {
                    var html = template(data);
                    dataContainer.html(html);
                }
            });
        });
    </script>
{% endblock custom_javascript %}

{% block content %}
\t{% if app.session.flashBag.has('user_subscription_error') %}
\t\t<div class=\"alert alert-danger\" role=\"alert\">
\t\t\t{{ app.session.flashBag.get('user_subscription_error')[0] }}
\t\t</div>
\t{% endif %}
\t{# BLOQUE TIPO DE SUSCRIPCION #}
\t\t{% include 'VODBaseBundle:User/Components:subscription-type.html.twig' %}
\t{# FIN BLOQUE - TIPO DE SUSCRIPCION #}

\t{# BLOQUE FACTURACIÓN #}
\t\t{% include 'VODBaseBundle:User/Components:subscription-billing.html.twig' with {'showAccountDates': showAccountDates,
\t\t'accountCode': accountCode,
\t\t'accountBillingFromPeriod': accountBillingFromPeriod,
\t\t'accountBillingToPeriod': accountBillingToPeriod,
\t\t'accountNextBillingDate': accountNextBillingDate,
\t\t'transactions': transactions} %}
\t{# BLOQUE FACTURACIÓN #}

\t{# BLOQUE - METODO DE PAGO #}
\t\t{% include 'VODBaseBundle:User/Components:payment-method.html.twig' %}
\t{# FIN BLOQUE - METODO DE PAGO #}

    {# BLOQUE - CUPON #}
        {% if 'Movistar' != app.user.paymentGateway %}
            {% include 'VODBaseBundle:User/Components:coupon-block.html.twig' %}
        {% endif %}
    {# FIN BLOQUE - CUPON  #}

\t{# BLOQUE - CANCELAR SUSCRIPCION #}
\t\t{% include 'VODBaseBundle:User/Components:cancel-subscription.html.twig' %}
\t{# FIN BLOQUE - CANCELAR SUSCRIPCION #}

    {% if app.session.flashBag.has('payment_gateway_error') %}
        {%
            include 'VODBaseBundle:Components/Modal:generic-modal.html.twig'
            with {
                'crazyId'       : 'tincho-modal',
                'crazyTitle'    : 'Atención',
                'crazyText'     : app.session.flashBag.get('payment_gateway_error')[0],
                'acceptButton'  : true,
                'cancelButton'  : false,
                'acceptButtonText': 'Aceptar',
                'acceptButtonAction': 'javascript:\$(\"#tincho-modal\").modal(\"hide\")'
            }
        %}
    {% endif %}
{% endblock %}
", "VODBaseBundle:User/Subscription:subscription.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/User/Subscription/subscription.html.twig");
    }
}


/* VODBaseBundle:User/Subscription:subscription.html.twig */
class __TwigTemplate_fda2e83aabc6803d7a8660aa4bf9a33dcf45942165acc5a533bd640ca9290b18_1129820946 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 9
        $this->parent = $this->loadTemplate("VODBaseBundle:Base/Components/Header:head.html.twig", "VODBaseBundle:User/Subscription:subscription.html.twig", 9);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'meta_description' => array($this, 'block_meta_description'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "VODBaseBundle:Base/Components/Header:head.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_227437ffb5ccf062e43156fbcd88035a779eefb75632e67ab98738f24c044a58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_227437ffb5ccf062e43156fbcd88035a779eefb75632e67ab98738f24c044a58->enter($__internal_227437ffb5ccf062e43156fbcd88035a779eefb75632e67ab98738f24c044a58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:User/Subscription:subscription.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_227437ffb5ccf062e43156fbcd88035a779eefb75632e67ab98738f24c044a58->leave($__internal_227437ffb5ccf062e43156fbcd88035a779eefb75632e67ab98738f24c044a58_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_4ab30a1208172ae5e5432a15cc113997c5fb29f6d28fd586e2d5d8a10c53d3d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ab30a1208172ae5e5432a15cc113997c5fb29f6d28fd586e2d5d8a10c53d3d9->enter($__internal_4ab30a1208172ae5e5432a15cc113997c5fb29f6d28fd586e2d5d8a10c53d3d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (((isset($context["section"]) ? $context["section"] : $this->getContext($context, "section")) . " - ") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.opengraph.site_name", array(), "common")), "html", null, true);
        
        $__internal_4ab30a1208172ae5e5432a15cc113997c5fb29f6d28fd586e2d5d8a10c53d3d9->leave($__internal_4ab30a1208172ae5e5432a15cc113997c5fb29f6d28fd586e2d5d8a10c53d3d9_prof);

    }

    // line 11
    public function block_meta_description($context, array $blocks = array())
    {
        $__internal_2fdf72999c042d86c7fe6dd2466a75fac182555e1480e3f09402a1276cd63184 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fdf72999c042d86c7fe6dd2466a75fac182555e1480e3f09402a1276cd63184->enter($__internal_2fdf72999c042d86c7fe6dd2466a75fac182555e1480e3f09402a1276cd63184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_description"));

        echo twig_escape_filter($this->env, (((isset($context["section"]) ? $context["section"] : $this->getContext($context, "section")) . " - ") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.opengraph.site_name", array(), "common")), "html", null, true);
        
        $__internal_2fdf72999c042d86c7fe6dd2466a75fac182555e1480e3f09402a1276cd63184->leave($__internal_2fdf72999c042d86c7fe6dd2466a75fac182555e1480e3f09402a1276cd63184_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:User/Subscription:subscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  520 => 11,  508 => 10,  484 => 9,  290 => 148,  288 => 141,  287 => 137,  285 => 136,  283 => 135,  280 => 134,  278 => 133,  275 => 132,  272 => 130,  270 => 129,  267 => 128,  264 => 127,  261 => 126,  258 => 124,  256 => 123,  253 => 122,  250 => 120,  248 => 119,  246 => 118,  245 => 117,  244 => 116,  243 => 115,  242 => 114,  240 => 113,  237 => 111,  235 => 110,  232 => 109,  230 => 108,  224 => 105,  221 => 104,  218 => 103,  212 => 102,  191 => 86,  182 => 83,  178 => 82,  174 => 81,  170 => 80,  167 => 79,  163 => 78,  138 => 56,  130 => 51,  110 => 34,  106 => 33,  102 => 32,  90 => 23,  84 => 21,  78 => 20,  68 => 7,  62 => 6,  54 => 9,  51 => 6,  45 => 5,  38 => 1,  35 => 17,  33 => 16,  31 => 15,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'VODBaseBundle:Base/Wrappers:wrapper-user.html.twig' %}

{% trans_default_domain 'user' %}

{% block head %}
    {% block custom_stylesheet %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/vendor/paginationjs/dist/pagination.css') }}\">
    {% endblock custom_stylesheet %}
    {% embed 'VODBaseBundle:Base/Components/Header:head.html.twig' %}
        {% block title %}{{ section ~ ' - ' ~ 'common.opengraph.site_name' | trans({}, 'common') }}{% endblock title %}
        {% block meta_description %}{{ section ~ ' - ' ~ 'common.opengraph.site_name' | trans({}, 'common') }}{% endblock meta_description %}
    {% endembed %}
{% endblock head %}

{% set addCouponFormClass = 'out' %}
{% if couponForm.vars.valid == false %} {#if form not valid set out class#}
\t{% set addCouponFormClass = 'in' %}
{% endif %}

{% block custom_javascript %}
\t{{ parent() }}
\t<script>
\t\tvar couponForm = \$('#{{ couponForm.vars.id }}').validate({
\t        errorClass: 'text-danger error',
\t        errorElement: 'p',
\t        onkeyup: false,
\t        onfocusout: function(element) {
\t            this.element(element);
\t        }
\t    });

\t    \$('#{{ couponForm.coupon.vars.id }}').bind('input', function() {
            if(\$(this).val().length >= {{ couponCodeParameters.min }}) {
                \$.post('{{ path('service_constraint_coupon_validator') }}', \$(this).serialize(), function(data) {
                    if (false === data.Status) {
                        \$('#coupon-error-container').html('<p class=\"text-danger\">' + data.Message + '</p>');
                        \$('#coupon-information-container').html('');
                    } else {
                    \t\$('#coupon-error-container').html('');
                        \$('#coupon-information-container').html(data.Data.Twig);
                    }
                }, 'json');
            } else {
            \t\$('#coupon-information-container').html('');
            \t\$('#coupon-error-container').html('');
            }
        });

        \$(document).on('click', '#button-close-coupon-information', function() {
            \$('#coupon-information-container').html('');
            \$('#{{ couponForm.coupon.vars.id }}').val('');
        });

        \$(document).on('click', '#add-coupon-cancel-button', function() {
        \t\$('#coupon-information-container').html('');
        \t\$('#{{ couponForm.coupon.vars.id }}').val('');
            couponForm.resetForm();
        });

        \$('#tincho-modal').modal('show');

        var template = function (data) {
            var dataHtml = '';

            \$.each(data, function(index, item){
                dataHtml += '<tr>';
                dataHtml += '<td>'+ item.date +'</td>';
                dataHtml += '<td>'+ item.id +'</td>';
                dataHtml += '<td>'+ item.description +'</td>';
                dataHtml += '<td>'+ item.import +'</td>';
                dataHtml += '</tr>';
            });

            return dataHtml;
        };

        var dataSource = [
            {% for item in transactions | reverse  %}
            {
                'id'            : '{{ item.id }}',
                'date'          : '{{ item.date | date('d/m/Y') }}',
                'description'   : '{{ item.description }}',
                'import'        : '{{ 'common.currency_symbol' | trans({}, 'common')~' '~item.amount|number_format(currency_decimals, ',', '.') }}',
            },
            {% endfor %}
        ];

        \$(function () {
            var dataContainer = \$('#data-transaction');

            \$('#pagination-transaction').pagination({
                dataSource: dataSource,
                callback: function(data, pagination) {
                    var html = template(data);
                    dataContainer.html(html);
                }
            });
        });
    </script>
{% endblock custom_javascript %}

{% block content %}
\t{% if app.session.flashBag.has('user_subscription_error') %}
\t\t<div class=\"alert alert-danger\" role=\"alert\">
\t\t\t{{ app.session.flashBag.get('user_subscription_error')[0] }}
\t\t</div>
\t{% endif %}
\t{# BLOQUE TIPO DE SUSCRIPCION #}
\t\t{% include 'VODBaseBundle:User/Components:subscription-type.html.twig' %}
\t{# FIN BLOQUE - TIPO DE SUSCRIPCION #}

\t{# BLOQUE FACTURACIÓN #}
\t\t{% include 'VODBaseBundle:User/Components:subscription-billing.html.twig' with {'showAccountDates': showAccountDates,
\t\t'accountCode': accountCode,
\t\t'accountBillingFromPeriod': accountBillingFromPeriod,
\t\t'accountBillingToPeriod': accountBillingToPeriod,
\t\t'accountNextBillingDate': accountNextBillingDate,
\t\t'transactions': transactions} %}
\t{# BLOQUE FACTURACIÓN #}

\t{# BLOQUE - METODO DE PAGO #}
\t\t{% include 'VODBaseBundle:User/Components:payment-method.html.twig' %}
\t{# FIN BLOQUE - METODO DE PAGO #}

    {# BLOQUE - CUPON #}
        {% if 'Movistar' != app.user.paymentGateway %}
            {% include 'VODBaseBundle:User/Components:coupon-block.html.twig' %}
        {% endif %}
    {# FIN BLOQUE - CUPON  #}

\t{# BLOQUE - CANCELAR SUSCRIPCION #}
\t\t{% include 'VODBaseBundle:User/Components:cancel-subscription.html.twig' %}
\t{# FIN BLOQUE - CANCELAR SUSCRIPCION #}

    {% if app.session.flashBag.has('payment_gateway_error') %}
        {%
            include 'VODBaseBundle:Components/Modal:generic-modal.html.twig'
            with {
                'crazyId'       : 'tincho-modal',
                'crazyTitle'    : 'Atención',
                'crazyText'     : app.session.flashBag.get('payment_gateway_error')[0],
                'acceptButton'  : true,
                'cancelButton'  : false,
                'acceptButtonText': 'Aceptar',
                'acceptButtonAction': 'javascript:\$(\"#tincho-modal\").modal(\"hide\")'
            }
        %}
    {% endif %}
{% endblock %}
", "VODBaseBundle:User/Subscription:subscription.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/User/Subscription/subscription.html.twig");
    }
}
