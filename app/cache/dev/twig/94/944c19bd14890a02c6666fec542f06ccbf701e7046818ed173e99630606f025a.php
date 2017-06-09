<?php

/* VODBaseBundle:Security:registration.html.twig */
class __TwigTemplate_b30a28b32918b4844b2b3793c96e66acf67e1a9ab7f73dc2dbc5d067e266bf8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("VODBaseBundle:Base/Wrappers:wrapper-landing.html.twig", "VODBaseBundle:Security:registration.html.twig", 1);
        $this->blocks = array(
            'data_locked' => array($this, 'block_data_locked'),
            'body_container' => array($this, 'block_body_container'),
            'custom_javascript' => array($this, 'block_custom_javascript'),
            'footer_container' => array($this, 'block_footer_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "VODBaseBundle:Base/Wrappers:wrapper-landing.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4e562ae1d015313002ede3b25d492802aabcdc1abbc39164803f70e074dda8e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e562ae1d015313002ede3b25d492802aabcdc1abbc39164803f70e074dda8e8->enter($__internal_4e562ae1d015313002ede3b25d492802aabcdc1abbc39164803f70e074dda8e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Security:registration.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e562ae1d015313002ede3b25d492802aabcdc1abbc39164803f70e074dda8e8->leave($__internal_4e562ae1d015313002ede3b25d492802aabcdc1abbc39164803f70e074dda8e8_prof);

    }

    // line 5
    public function block_data_locked($context, array $blocks = array())
    {
        $__internal_457fc4e1bae55bd3a07caa22623df2ed52c5fd1fde32ad7a43804b5f214b558e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_457fc4e1bae55bd3a07caa22623df2ed52c5fd1fde32ad7a43804b5f214b558e->enter($__internal_457fc4e1bae55bd3a07caa22623df2ed52c5fd1fde32ad7a43804b5f214b558e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data_locked"));

        
        $__internal_457fc4e1bae55bd3a07caa22623df2ed52c5fd1fde32ad7a43804b5f214b558e->leave($__internal_457fc4e1bae55bd3a07caa22623df2ed52c5fd1fde32ad7a43804b5f214b558e_prof);

    }

    // line 7
    public function block_body_container($context, array $blocks = array())
    {
        $__internal_a20bfe1138a3b2a62058293136a0ee3f7e2bd9d3e73fdf65497e5ec30392fdd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a20bfe1138a3b2a62058293136a0ee3f7e2bd9d3e73fdf65497e5ec30392fdd5->enter($__internal_a20bfe1138a3b2a62058293136a0ee3f7e2bd9d3e73fdf65497e5ec30392fdd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_container"));

        // line 8
        echo "    <div class=\"container-wrapper\">
        <div class=\"row\">
            <div class=\"col-sm-6 col-sm-offset-3\">
                <h2>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.registration.title", array(), "security"), "html", null, true);
        echo "</h2>
                ";
        // line 13
        echo "                ";
        $context["formattedPrice"] = ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.currency_symbol", array(), "common") . (isset($context["productPrice"]) ? $context["productPrice"] : $this->getContext($context, "productPrice")));
        // line 14
        echo "                ";
        if (( !(isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile")) || (isset($context["is_tablet"]) ? $context["is_tablet"] : $this->getContext($context, "is_tablet")))) {
            // line 15
            echo "
                    <h3>";
            // line 16
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.registration.subtitle", array("%price%" => (isset($context["formattedPrice"]) ? $context["formattedPrice"] : $this->getContext($context, "formattedPrice"))), "security");
            echo "</h3>
                ";
        }
        // line 18
        echo "                <h3>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.registration.create_account", array(), "security"), "html", null, true);
        echo "</h3>

                <div class=\"row\">
                    ";
        // line 21
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate", "id" => $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()))));
        echo "
                    ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "

                    ";
        // line 25
        echo "                    <div class=\"col-sm-9\">
                        <div class=\"form-group\">
                            ";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.registration.placeholders.email", array(), "security"), "class" => "form-control onlyInput", "data-automation" => "registration_username")));
        echo "
                            ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), "vars", array()), "errors", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 29
            echo "                                <p class=\"text-danger error bold back\" data-automation=\"registration_username-error\">";
            echo $this->getAttribute($context["error"], "message", array());
            echo "</p>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "                        </div>

                        ";
        // line 34
        echo "                        <div class=\"form-group form-group_alter\">
                            ";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'widget', array("attr" => array("placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.registration.placeholders.password", array(), "security"), "class" => "form-control", "data-automation" => "registration_password")));
        echo "
                            ";
        // line 36
        if ((isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
            echo "<i class=\"fa fa-eye\"></i>";
        }
        // line 37
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), "vars", array()), "errors", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 38
            echo "                                <p class=\"text-danger error bold back\" data-automation=\"registration_password-error\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
            echo "</p>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                        </div>

                        ";
        // line 43
        echo "                        ";
        if ((isset($context["showCouponLink"]) ? $context["showCouponLink"] : $this->getContext($context, "showCouponLink"))) {
            // line 44
            echo "                            <div id=\"add-coupon-button-container\">
                                <p>";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.registration.coupon.has_coupon", array(), "security"), "html", null, true);
            echo " <button id=\"btn-coupon-modal\" class=\"btn btn-link\" data-toggle=\"modal\" data-target=\"#coupon-modal\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.registration.coupon.add_coupon", array(), "security"), "html", null, true);
            echo "</button></p>
                            </div>
                        ";
        }
        // line 48
        echo "                        ";
        // line 49
        echo "                        ";
        $this->loadTemplate("VODBaseBundle:Components/Modal:coupon-modal.html.twig", "VODBaseBundle:Security:registration.html.twig", 49)->display($context);
        // line 50
        echo "
                        <div class=\"form-group\">
                            <div id=\"coupon-information-container\"></div>
                        </div>

                        ";
        // line 56
        echo "                        <div class=\"form-group\">
                            ";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "recaptcha", array()), 'widget');
        echo "
                            ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "errors", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 59
            echo "                                <p class=\"text-danger error bold back\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
            echo "</p>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "                        </div>

                        ";
        // line 64
        echo "                        <div class=\"form-group\">
                            ";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary btn-lg", "data-automation" => "registration_save")));
        echo "
                        </div>
                    </div>
                    ";
        // line 68
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                </div>

                <p class=\"disclaimer disclaimer_alter\">";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.registration.labels.accept", array(), "security"), "html", null, true);
        echo " <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("terms_and_conditions");
        echo "\" class=\"btn-link\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.registration.labels.terms_and_conditions", array(), "security"), "html", null, true);
        echo "</a> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.registration.labels.accept2", array(), "security"), "html", null, true);
        echo "</p>

                <p><strong>";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.registration.labels.has_account", array(), "security"), "html", null, true);
        echo " <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.registration.login_link", array(), "security"), "html", null, true);
        echo "</a></strong></p>
            </div>
        </div>
    </div>
";
        
        $__internal_a20bfe1138a3b2a62058293136a0ee3f7e2bd9d3e73fdf65497e5ec30392fdd5->leave($__internal_a20bfe1138a3b2a62058293136a0ee3f7e2bd9d3e73fdf65497e5ec30392fdd5_prof);

    }

    // line 79
    public function block_custom_javascript($context, array $blocks = array())
    {
        $__internal_0a7126750ee85f6546c1d79f2f7962a309167fd71cc53065d4e6ed41902261c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a7126750ee85f6546c1d79f2f7962a309167fd71cc53065d4e6ed41902261c4->enter($__internal_0a7126750ee85f6546c1d79f2f7962a309167fd71cc53065d4e6ed41902261c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "custom_javascript"));

        // line 80
        echo "    ";
        $this->displayParentBlock("custom_javascript", $context, $blocks);
        echo "
    <script src=\"//www.google.com/recaptcha/api.js?hl=";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()), "html", null, true);
        echo "\"></script>
    <script>
        var v = \$('#";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "').validate({
            errorClass: 'text-danger error bold',
            errorElement: 'p',
            onkeyup: false,
            onfocusout: function(element) {
                \$(element).next('.text-danger.error.bold').html('');  ";
        // line 89
        echo "                if (\$(element).attr('id') !== 'registration_coupon') {
                    this.element(element);
                }
            }
        });

        ";
        // line 96
        echo "        \$('#btn-coupon-modal, #modal-coupon-confirm, #modal-coupon-close, #button-close-coupon-information').click(function(e) {
            e.preventDefault();
        });

        ";
        // line 101
        echo "        \$(document).on('click', '#button-close-coupon-information, #modal-coupon-close, #modal-coupon-dismiss-button', function(event) {
            event.preventDefault();
            \$('#modal-coupon-information-container, #coupon-information-container').html('').hide();
            \$('#registration_coupon-error').html('').hide();
            \$('#registration_coupon').val('');
            \$('#add-coupon-button-container').show();
        });

        \$(document).on('hidden.bs.modal', '#coupon-modal', function() {
            \$('#modal-coupon-information-container').html('').hide();
            \$('#registration_coupon-error').html('').hide();
        });

        ";
        // line 115
        echo "        \$(document).on('input', '#registration_coupon', function() {
            v.element(\$(this));
        });

        ";
        // line 120
        echo "        \$(document).on('click', '#modal-coupon-confirm', function() {
            var couponInfo = \$('#modal-coupon-information-container').html();
            var informationContainer = \$('#coupon-information-container').html('').show();
            \$(informationContainer).html(couponInfo);

            if (couponInfo != '') {
                \$('#add-coupon-button-container').hide();
            }

            \$('#coupon-modal').modal('hide');
        });

        ";
        // line 133
        echo "        \$.validator.addMethod('coupon', function(value, element, params) {
            if (value.length <= 5 || value.length > 50) {
                return this.optional(element)
            }

            \$('#registration_coupon-error').hide();
            \$('#registration_coupon').removeClass('valid');
            \$('#modal-coupon-confirm').addClass('btn-disabled').attr('disabled', true);

            var path = Routing.generate('service_constraint_coupon_validator');
            var informationContainerModal = \$('#modal-coupon-information-container').html('').show();


            \$.post(path, \$(element).serialize()).then(function(data) {
                if (data.Status) {
                    \$(informationContainerModal).html(data.Data.Twig);
                    \$('#registration_coupon').addClass('valid');
                    \$('#modal-coupon-confirm').removeClass('btn-disabled').attr('disabled', false);

                    return true;
                } else {
                    \$('#registration_coupon-error').show();
                    \$('#registration_coupon-error').html(data.Message);
                    \$('#add-coupon-button-container').show();

                    return false;
                }
            });
        }, '');

        \$(document).ready(function(){
            \$('.onlyInput').bind('copy paste cut drag drop', function () { return false; });
            \$.fn.subscriptionPush(1, '";
        // line 165
        echo twig_escape_filter($this->env, (isset($context["gtm_currency_code"]) ? $context["gtm_currency_code"] : $this->getContext($context, "gtm_currency_code")), "html", null, true);
        echo "');
        });
    </script>
";
        
        $__internal_0a7126750ee85f6546c1d79f2f7962a309167fd71cc53065d4e6ed41902261c4->leave($__internal_0a7126750ee85f6546c1d79f2f7962a309167fd71cc53065d4e6ed41902261c4_prof);

    }

    // line 170
    public function block_footer_container($context, array $blocks = array())
    {
        $__internal_150f75bbcf4be28f29cc457b7c99ee2eea98eb6ace24ab6448071ab1fd5954fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_150f75bbcf4be28f29cc457b7c99ee2eea98eb6ace24ab6448071ab1fd5954fc->enter($__internal_150f75bbcf4be28f29cc457b7c99ee2eea98eb6ace24ab6448071ab1fd5954fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer_container"));

        // line 171
        echo "    ";
        $this->loadTemplate("VODBaseBundle:Base/Components/Footer:footer-lite.html.twig", "VODBaseBundle:Security:registration.html.twig", 171)->display($context);
        
        $__internal_150f75bbcf4be28f29cc457b7c99ee2eea98eb6ace24ab6448071ab1fd5954fc->leave($__internal_150f75bbcf4be28f29cc457b7c99ee2eea98eb6ace24ab6448071ab1fd5954fc_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Security:registration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  363 => 171,  357 => 170,  346 => 165,  312 => 133,  298 => 120,  292 => 115,  277 => 101,  271 => 96,  263 => 89,  255 => 83,  250 => 81,  245 => 80,  239 => 79,  223 => 73,  212 => 71,  206 => 68,  200 => 65,  197 => 64,  193 => 61,  184 => 59,  180 => 58,  176 => 57,  173 => 56,  166 => 50,  163 => 49,  161 => 48,  153 => 45,  150 => 44,  147 => 43,  143 => 40,  134 => 38,  129 => 37,  125 => 36,  121 => 35,  118 => 34,  114 => 31,  105 => 29,  101 => 28,  97 => 27,  93 => 25,  88 => 22,  84 => 21,  77 => 18,  72 => 16,  69 => 15,  66 => 14,  63 => 13,  59 => 11,  54 => 8,  48 => 7,  37 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'VODBaseBundle:Base/Wrappers:wrapper-landing.html.twig' %}

{% trans_default_domain 'security' %}

{% block data_locked %}{% endblock data_locked %}

{% block body_container %}
    <div class=\"container-wrapper\">
        <div class=\"row\">
            <div class=\"col-sm-6 col-sm-offset-3\">
                <h2>{{'security.registration.title' | trans }}</h2>
                {# Este subtítulo no está en mobile #}
                {% set formattedPrice = 'common.currency_symbol' | trans({}, 'common') ~ productPrice%}
                {% if not is_mobile or is_tablet %}

                    <h3>{{'security.registration.subtitle' | trans({'%price%': formattedPrice }) | raw }}</h3>
                {% endif %}
                <h3>{{'security.registration.create_account' | trans }}</h3>

                <div class=\"row\">
                    {{ form_start(form, {'attr': {'novalidate': 'novalidate', 'id': form.vars.id}}) }}
                    {{ form_widget(form._token) }}

                    {# Email #}
                    <div class=\"col-sm-9\">
                        <div class=\"form-group\">
                            {{ form_widget(form.username, {'attr': {'placeholder': 'security.registration.placeholders.email' | trans, 'class':'form-control onlyInput', 'data-automation': 'registration_username'}}) }}
                            {% for error in form.username.vars.errors %}
                                <p class=\"text-danger error bold back\" data-automation=\"registration_username-error\">{{ error.message | raw }}</p>
                            {% endfor %}
                        </div>

                        {# Contraseña #}
                        <div class=\"form-group form-group_alter\">
                            {{ form_widget(form.password, {'attr': {'placeholder': 'security.registration.placeholders.password' | trans, 'class':'form-control', 'data-automation': 'registration_password'}}) }}
                            {% if is_mobile %}<i class=\"fa fa-eye\"></i>{% endif %}
                            {% for error in form.password.vars.errors %}
                                <p class=\"text-danger error bold back\" data-automation=\"registration_password-error\">{{ error.message }}</p>
                            {% endfor %}
                        </div>

                        {# Cupón #}
                        {% if showCouponLink %}
                            <div id=\"add-coupon-button-container\">
                                <p>{{'security.registration.coupon.has_coupon' | trans }} <button id=\"btn-coupon-modal\" class=\"btn btn-link\" data-toggle=\"modal\" data-target=\"#coupon-modal\">{{'security.registration.coupon.add_coupon' | trans }}</button></p>
                            </div>
                        {% endif %}
                        {# Modal del cupón #}
                        {% include 'VODBaseBundle:Components/Modal:coupon-modal.html.twig' %}

                        <div class=\"form-group\">
                            <div id=\"coupon-information-container\"></div>
                        </div>

                        {# Captcha #}
                        <div class=\"form-group\">
                            {{ form_widget(form.recaptcha) }}
                            {% for error in form.vars.errors %}
                                <p class=\"text-danger error bold back\">{{ error.message }}</p>
                            {% endfor %}
                        </div>

                        {# Botón Continuar #}
                        <div class=\"form-group\">
                            {{ form_widget(form.save, {'attr': {'class': 'btn btn-primary btn-lg', 'data-automation': 'registration_save' }}) }}
                        </div>
                    </div>
                    {{ form_end(form) }}
                </div>

                <p class=\"disclaimer disclaimer_alter\">{{ 'security.registration.labels.accept' | trans }} <a href=\"{{ path('terms_and_conditions') }}\" class=\"btn-link\" target=\"_blank\">{{ 'security.registration.labels.terms_and_conditions' | trans }}</a> {{ 'security.registration.labels.accept2' | trans }}</p>

                <p><strong>{{ 'security.registration.labels.has_account' | trans }} <a href=\"{{ path('login') }}\">{{ 'security.registration.login_link' | trans }}</a></strong></p>
            </div>
        </div>
    </div>
{% endblock body_container %}

{% block custom_javascript %}
    {{ parent() }}
    <script src=\"//www.google.com/recaptcha/api.js?hl={{ app.request.locale }}\"></script>
    <script>
        var v = \$('#{{ form.vars.id }}').validate({
            errorClass: 'text-danger error bold',
            errorElement: 'p',
            onkeyup: false,
            onfocusout: function(element) {
                \$(element).next('.text-danger.error.bold').html('');  {# clears all errors from the backend when user focus THIS input #}
                if (\$(element).attr('id') !== 'registration_coupon') {
                    this.element(element);
                }
            }
        });

        {# Estos botones no deben validar el formulario, ya que son los del modal #}
        \$('#btn-coupon-modal, #modal-coupon-confirm, #modal-coupon-close, #button-close-coupon-information').click(function(e) {
            e.preventDefault();
        });

        {# Si queremos eliminar el cupón #}
        \$(document).on('click', '#button-close-coupon-information, #modal-coupon-close, #modal-coupon-dismiss-button', function(event) {
            event.preventDefault();
            \$('#modal-coupon-information-container, #coupon-information-container').html('').hide();
            \$('#registration_coupon-error').html('').hide();
            \$('#registration_coupon').val('');
            \$('#add-coupon-button-container').show();
        });

        \$(document).on('hidden.bs.modal', '#coupon-modal', function() {
            \$('#modal-coupon-information-container').html('').hide();
            \$('#registration_coupon-error').html('').hide();
        });

        {# Si se produce algún evento input en el inputtext del cupon #}
        \$(document).on('input', '#registration_coupon', function() {
            v.element(\$(this));
        });

        {# Si el usuario hace click en el botón confirmar del modal #}
        \$(document).on('click', '#modal-coupon-confirm', function() {
            var couponInfo = \$('#modal-coupon-information-container').html();
            var informationContainer = \$('#coupon-information-container').html('').show();
            \$(informationContainer).html(couponInfo);

            if (couponInfo != '') {
                \$('#add-coupon-button-container').hide();
            }

            \$('#coupon-modal').modal('hide');
        });

        {#  #}
        \$.validator.addMethod('coupon', function(value, element, params) {
            if (value.length <= 5 || value.length > 50) {
                return this.optional(element)
            }

            \$('#registration_coupon-error').hide();
            \$('#registration_coupon').removeClass('valid');
            \$('#modal-coupon-confirm').addClass('btn-disabled').attr('disabled', true);

            var path = Routing.generate('service_constraint_coupon_validator');
            var informationContainerModal = \$('#modal-coupon-information-container').html('').show();


            \$.post(path, \$(element).serialize()).then(function(data) {
                if (data.Status) {
                    \$(informationContainerModal).html(data.Data.Twig);
                    \$('#registration_coupon').addClass('valid');
                    \$('#modal-coupon-confirm').removeClass('btn-disabled').attr('disabled', false);

                    return true;
                } else {
                    \$('#registration_coupon-error').show();
                    \$('#registration_coupon-error').html(data.Message);
                    \$('#add-coupon-button-container').show();

                    return false;
                }
            });
        }, '');

        \$(document).ready(function(){
            \$('.onlyInput').bind('copy paste cut drag drop', function () { return false; });
            \$.fn.subscriptionPush(1, '{{ gtm_currency_code }}');
        });
    </script>
{% endblock custom_javascript %}

{% block footer_container %}
    {% include 'VODBaseBundle:Base/Components/Footer:footer-lite.html.twig' %}
{% endblock footer_container %}
", "VODBaseBundle:Security:registration.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/Security/registration.html.twig");
    }
}
