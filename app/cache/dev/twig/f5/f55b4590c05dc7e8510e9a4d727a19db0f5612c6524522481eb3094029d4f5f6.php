<?php

/* VODBaseBundle:User:parental-control.html.twig */
class __TwigTemplate_849a8bf960b0a62decc0468c544399a681ca3cac25afae16b35c328e799f5c3f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("VODBaseBundle:Base/Wrappers:wrapper-user.html.twig", "VODBaseBundle:User:parental-control.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_ba6624e1e627921f198aa147656f50abd201dabdd78ca35706c8233d2c36285b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba6624e1e627921f198aa147656f50abd201dabdd78ca35706c8233d2c36285b->enter($__internal_ba6624e1e627921f198aa147656f50abd201dabdd78ca35706c8233d2c36285b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:User:parental-control.html.twig"));

        // line 6
        $context["parentalControlDataViewClass"] = "in";
        // line 7
        $context["parentalControlFormViewClass"] = "out";
        // line 8
        if (($this->getAttribute($this->getAttribute((isset($context["parentalControlForm"]) ? $context["parentalControlForm"] : $this->getContext($context, "parentalControlForm")), "vars", array()), "valid", array()) == false)) {
            // line 9
            $context["parentalControlDataViewClass"] = "out";
            // line 10
            $context["parentalControlFormViewClass"] = "in";
        }
        // line 13
        $context["parentalPasswordDataViewClass"] = "in";
        // line 14
        $context["parentalPasswordFormViewClass"] = "out";
        // line 15
        if (($this->getAttribute($this->getAttribute((isset($context["parentalPasswordForm"]) ? $context["parentalPasswordForm"] : $this->getContext($context, "parentalPasswordForm")), "vars", array()), "valid", array()) == false)) {
            // line 16
            $context["parentalPasswordDataViewClass"] = "out";
            // line 17
            $context["parentalPasswordFormViewClass"] = "in";
        }
        // line 21
        $context["parentalPasswordPlaceholder"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.parental_control.placeholders.first_time_password", array(), "user");
        // line 22
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "parentalControlEnabled", array()) == true)) {
            // line 23
            $context["parentalPasswordPlaceholder"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.parental_control.placeholders.actual_pin", array(), "user");
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba6624e1e627921f198aa147656f50abd201dabdd78ca35706c8233d2c36285b->leave($__internal_ba6624e1e627921f198aa147656f50abd201dabdd78ca35706c8233d2c36285b_prof);

    }

    // line 26
    public function block_head($context, array $blocks = array())
    {
        $__internal_78fc053019f3db6a5443768022a3ec88873fff8940287668ae4a9f17cbbf26e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78fc053019f3db6a5443768022a3ec88873fff8940287668ae4a9f17cbbf26e4->enter($__internal_78fc053019f3db6a5443768022a3ec88873fff8940287668ae4a9f17cbbf26e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 27
        echo "    ";
        $this->loadTemplate("VODBaseBundle:User:parental-control.html.twig", "VODBaseBundle:User:parental-control.html.twig", 27, "261935089")->display($context);
        
        $__internal_78fc053019f3db6a5443768022a3ec88873fff8940287668ae4a9f17cbbf26e4->leave($__internal_78fc053019f3db6a5443768022a3ec88873fff8940287668ae4a9f17cbbf26e4_prof);

    }

    // line 33
    public function block_custom_javascript($context, array $blocks = array())
    {
        $__internal_ebbf5f7e77c878454e29dd4070638ac71bf8c9ed1da726977020133ddfe46386 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebbf5f7e77c878454e29dd4070638ac71bf8c9ed1da726977020133ddfe46386->enter($__internal_ebbf5f7e77c878454e29dd4070638ac71bf8c9ed1da726977020133ddfe46386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "custom_javascript"));

        // line 34
        echo "    <script>
        var parentalPasswordForm = \$('#";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["parentalPasswordForm"]) ? $context["parentalPasswordForm"] : $this->getContext($context, "parentalPasswordForm")), "vars", array()), "id", array()), "html", null, true);
        echo "').validate({
            errorClass: 'text-danger',
            errorElement: 'p',
            onkeyup: false,
            onfocusout: function(element) {
                this.element(element);
            }
        });

        var parentalControlForm = \$('#";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["parentalControlForm"]) ? $context["parentalControlForm"] : $this->getContext($context, "parentalControlForm")), "vars", array()), "id", array()), "html", null, true);
        echo "').validate({
            errorClass: 'text-danger',
            errorElement: 'p',
            onkeyup: false,
            onfocusout: function(element) {
                this.element(element);
            }
        });

        \$(document).ready(function(){
            \$('#parental-control-change-cancel-button').on('click', function(){
                parentalControlForm.resetForm();
            });

            \$('#parental-password-change-cancel-button').on('click', function(){
                parentalPasswordForm.resetForm();
            });
        });
    </script>
";
        
        $__internal_ebbf5f7e77c878454e29dd4070638ac71bf8c9ed1da726977020133ddfe46386->leave($__internal_ebbf5f7e77c878454e29dd4070638ac71bf8c9ed1da726977020133ddfe46386_prof);

    }

    // line 65
    public function block_content($context, array $blocks = array())
    {
        $__internal_442f148a577c46d6cc2aad27c6590937793b9f03384514cff541adb5ae8f06b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_442f148a577c46d6cc2aad27c6590937793b9f03384514cff541adb5ae8f06b6->enter($__internal_442f148a577c46d6cc2aad27c6590937793b9f03384514cff541adb5ae8f06b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 66
        echo "    <div class=\"";
        if ((isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
            echo "change-group-alter";
        } else {
            echo "change-group";
        }
        echo "\">
        <div class=\"row\">
            <div class=\"";
        // line 68
        if ((isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
            echo "col-xs-12";
        } else {
            echo "col-xs-9";
        }
        echo "\">
                <p>";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.parental_control.title", array(), "user");
        echo "</p>
            </div>
        </div>

        ";
        // line 73
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "success"), "method")) {
            // line 74
            echo "            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <div class=\"alert alert-success alert-dismissible\" role=\"alert\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                        ";
            // line 78
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 79
                echo "                            ";
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "                    </div>
                </div>
            </div>
        ";
        }
        // line 85
        echo "    </div>

    <div class=\"";
        // line 87
        if ((isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
            echo "change-group_alter";
        } else {
            echo "change-group";
        }
        echo "\">
        <div id=\"1\" class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"row\">
                <div class=\"";
        // line 91
        if ((isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
            echo "col-xs-12";
        } else {
            echo "col-xs-3";
        }
        echo "\">
                    <h4>";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.parental_control.change_option_title", array(), "user"), "html", null, true);
        echo "</h4>
                </div>
                <div class=\"";
        // line 94
        if ((isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
            echo "col-xs-12 col-md-12";
        } else {
            echo "col-md-6 col-lg-7";
        }
        echo "\">
                    ";
        // line 96
        echo "                    ";
        $this->loadTemplate("VODBaseBundle:User/Components:parental-control-status.html.twig", "VODBaseBundle:User:parental-control.html.twig", 96)->display($context);
        // line 97
        echo "
                    ";
        // line 99
        echo "                    ";
        $this->loadTemplate("VODBaseBundle:User/Components:parental-control-change.html.twig", "VODBaseBundle:User:parental-control.html.twig", 99)->display($context);
        // line 100
        echo "                </div>

                <div class=\"";
        // line 102
        if ((isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
            echo "col-xs-12 col-md-12";
        } else {
            echo "col-md-3 col-lg-2";
        }
        echo "\">
                    ";
        // line 104
        echo "                    ";
        $this->loadTemplate("VODBaseBundle:User/Components:parental-control-button.html.twig", "VODBaseBundle:User:parental-control.html.twig", 104)->display($context);
        // line 105
        echo "                </div>
            </div>
        </div>
    </div>
    </div>

        ";
        // line 111
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "type", array()) == "Root")) {
            // line 112
            echo "        <div class=\"";
            if ((isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
                echo "change-group_alter";
            } else {
                echo "change-group";
            }
            echo "\">
            <div id=\"2\" class=\"row\">
                <div class=\"col-xs-12\">
                    <div class=\"row\">
                        <div class=\"";
            // line 116
            if ((isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
                echo "col-xs-12";
            } else {
                echo "col-xs-3";
            }
            echo "\">
                            <h4>";
            // line 117
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.parental_control.change_pin_title", array(), "user"), "html", null, true);
            echo "</h4>
                        </div>

                        <div class=\"col-md-6 col-lg-7 ";
            // line 120
            if ((isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
                echo "col-xs-12 col-md-12";
            }
            echo "\">
                            ";
            // line 122
            echo "                            ";
            $this->loadTemplate("VODBaseBundle:User/Components:parental-control-password.html.twig", "VODBaseBundle:User:parental-control.html.twig", 122)->display($context);
            // line 123
            echo "                        </div>

                        <div class=\"col-md-3 col-lg-2 ";
            // line 125
            if ((isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
                echo "col-xs-12 col-md-12";
            }
            echo "\">
                            ";
            // line 127
            echo "                            ";
            $this->loadTemplate("VODBaseBundle:User/Components:parental-control-pin-button.html.twig", "VODBaseBundle:User:parental-control.html.twig", 127)->display($context);
            // line 128
            echo "                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"";
            // line 134
            if ((isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
                echo "change-group_alter";
            } else {
                echo "change-group";
            }
            echo "\">
            <div id=\"3\" class=\"row\">
                <div class=\"col-xs-12\">
                    <div class=\"row\">
                        <div class=\"";
            // line 138
            if ((isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
                echo "col-xs-12";
            } else {
                echo "col-xs-3";
            }
            echo "\">
                            <h4>";
            // line 139
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.parental_control.forgot_pin_title", array(), "user"), "html", null, true);
            echo "</h4>
                        </div>

                        <div class=\"col-md-6 col-lg-7 ";
            // line 142
            if ((isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
                echo "col-xs-12 col-md-12";
            }
            echo "\">
                            ";
            // line 144
            echo "                            ";
            $this->loadTemplate("VODBaseBundle:User/Components:parental-control-recover-pin.html.twig", "VODBaseBundle:User:parental-control.html.twig", 144)->display($context);
            // line 145
            echo "                        </div>

                        <div class=\"col-md-3 col-lg-2\">
                            ";
            // line 149
            echo "                            ";
            $this->loadTemplate("VODBaseBundle:User/Components:parental-control-recover-pin-button.html.twig", "VODBaseBundle:User:parental-control.html.twig", 149)->display($context);
            // line 150
            echo "                        </div>
                    </div>
                </div>
            </div>
        </div>
        ";
        }
        // line 156
        echo "    </div>
</div>
";
        
        $__internal_442f148a577c46d6cc2aad27c6590937793b9f03384514cff541adb5ae8f06b6->leave($__internal_442f148a577c46d6cc2aad27c6590937793b9f03384514cff541adb5ae8f06b6_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:User:parental-control.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  362 => 156,  354 => 150,  351 => 149,  346 => 145,  343 => 144,  337 => 142,  331 => 139,  323 => 138,  312 => 134,  304 => 128,  301 => 127,  295 => 125,  291 => 123,  288 => 122,  282 => 120,  276 => 117,  268 => 116,  256 => 112,  254 => 111,  246 => 105,  243 => 104,  235 => 102,  231 => 100,  228 => 99,  225 => 97,  222 => 96,  214 => 94,  209 => 92,  201 => 91,  190 => 87,  186 => 85,  180 => 81,  171 => 79,  167 => 78,  161 => 74,  159 => 73,  152 => 69,  144 => 68,  134 => 66,  128 => 65,  101 => 44,  89 => 35,  86 => 34,  80 => 33,  72 => 27,  66 => 26,  59 => 1,  56 => 23,  54 => 22,  52 => 21,  49 => 17,  47 => 16,  45 => 15,  43 => 14,  41 => 13,  38 => 10,  36 => 9,  34 => 8,  32 => 7,  30 => 6,  11 => 1,);
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

{# Toggle class functionality set #}
{% set parentalControlDataViewClass = 'in' %}
{% set parentalControlFormViewClass = 'out' %}
{% if parentalControlForm.vars.valid == false %} {#if form not valid set out class#}
    {% set parentalControlDataViewClass = 'out' %}
    {% set parentalControlFormViewClass = 'in' %}
{% endif %}

{% set parentalPasswordDataViewClass = 'in' %}
{% set parentalPasswordFormViewClass = 'out' %}
{% if parentalPasswordForm.vars.valid == false %} {#if form not valid set out class#}
    {% set parentalPasswordDataViewClass = 'out' %}
    {% set parentalPasswordFormViewClass = 'in' %}
{% endif %}

{# Parental password placeholder variable set #}
{% set parentalPasswordPlaceholder = 'user.parental_control.placeholders.first_time_password' | trans %}
{% if app.user.parentalControlEnabled == true%}
    {% set parentalPasswordPlaceholder = 'user.parental_control.placeholders.actual_pin' | trans %}
{% endif %}

{% block head %}
    {% embed 'VODBaseBundle:Base/Components/Header:head.html.twig' %}
        {% block title %}{{ section ~ ' - ' ~ 'common.opengraph.site_name' | trans({}, 'common') }}{% endblock title %}
        {% block meta_description %}{{ section ~ ' - ' ~ 'common.opengraph.site_name' | trans({}, 'common') }}{% endblock meta_description %}
    {% endembed %}
{% endblock head %}

{% block custom_javascript %}
    <script>
        var parentalPasswordForm = \$('#{{ parentalPasswordForm.vars.id }}').validate({
            errorClass: 'text-danger',
            errorElement: 'p',
            onkeyup: false,
            onfocusout: function(element) {
                this.element(element);
            }
        });

        var parentalControlForm = \$('#{{ parentalControlForm.vars.id }}').validate({
            errorClass: 'text-danger',
            errorElement: 'p',
            onkeyup: false,
            onfocusout: function(element) {
                this.element(element);
            }
        });

        \$(document).ready(function(){
            \$('#parental-control-change-cancel-button').on('click', function(){
                parentalControlForm.resetForm();
            });

            \$('#parental-password-change-cancel-button').on('click', function(){
                parentalPasswordForm.resetForm();
            });
        });
    </script>
{% endblock custom_javascript %}

{% block content %}
    <div class=\"{% if is_mobile %}change-group-alter{% else %}change-group{% endif %}\">
        <div class=\"row\">
            <div class=\"{% if is_mobile %}col-xs-12{% else %}col-xs-9{% endif %}\">
                <p>{{ 'user.parental_control.title' | trans | raw }}</p>
            </div>
        </div>

        {% if app.session.flashBag.has('success') %}
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <div class=\"alert alert-success alert-dismissible\" role=\"alert\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                        {% for msg in app.session.flashBag.get('success') %}
                            {{ msg }}
                        {% endfor %}
                    </div>
                </div>
            </div>
        {% endif %}
    </div>

    <div class=\"{% if is_mobile %}change-group_alter{% else %}change-group{% endif %}\">
        <div id=\"1\" class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"row\">
                <div class=\"{% if is_mobile %}col-xs-12{% else %}col-xs-3{% endif %}\">
                    <h4>{{ 'user.parental_control.change_option_title' | trans }}</h4>
                </div>
                <div class=\"{% if is_mobile %}col-xs-12 col-md-12{% else %}col-md-6 col-lg-7{% endif %}\">
                    {# Seccion control parental: activado / desactivado #}
                    {% include 'VODBaseBundle:User/Components:parental-control-status.html.twig' %}

                    {# Seccion control parental: cambiar #}
                    {% include 'VODBaseBundle:User/Components:parental-control-change.html.twig' %}
                </div>

                <div class=\"{% if is_mobile %}col-xs-12 col-md-12{% else %}col-md-3 col-lg-2{% endif %}\">
                    {# Seccion control parental: boton configurar #}
                    {% include 'VODBaseBundle:User/Components:parental-control-button.html.twig' %}
                </div>
            </div>
        </div>
    </div>
    </div>

        {% if app.user.type == 'Root' %}
        <div class=\"{% if is_mobile %}change-group_alter{% else %}change-group{% endif %}\">
            <div id=\"2\" class=\"row\">
                <div class=\"col-xs-12\">
                    <div class=\"row\">
                        <div class=\"{% if is_mobile %}col-xs-12{% else %}col-xs-3{% endif %}\">
                            <h4>{{ 'user.parental_control.change_pin_title' | trans }}</h4>
                        </div>

                        <div class=\"col-md-6 col-lg-7 {% if is_mobile %}col-xs-12 col-md-12{% endif %}\">
                            {# Seccion control parental: cambiar pin  #}
                            {% include 'VODBaseBundle:User/Components:parental-control-password.html.twig' %}
                        </div>

                        <div class=\"col-md-3 col-lg-2 {% if is_mobile %}col-xs-12 col-md-12{% endif %}\">
                            {# Seccion control parental: boton cambiar pin  #}
                            {% include 'VODBaseBundle:User/Components:parental-control-pin-button.html.twig' %}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"{% if is_mobile %}change-group_alter{% else %}change-group{% endif %}\">
            <div id=\"3\" class=\"row\">
                <div class=\"col-xs-12\">
                    <div class=\"row\">
                        <div class=\"{% if is_mobile %}col-xs-12{% else %}col-xs-3{% endif %}\">
                            <h4>{{ 'user.parental_control.forgot_pin_title' | trans }}</h4>
                        </div>

                        <div class=\"col-md-6 col-lg-7 {% if is_mobile %}col-xs-12 col-md-12{% endif %}\">
                            {# Seccion control parental: recuperar pin  #}
                            {% include 'VODBaseBundle:User/Components:parental-control-recover-pin.html.twig' %}
                        </div>

                        <div class=\"col-md-3 col-lg-2\">
                            {# Seccion control parental: recuperar pin  boton #}
                            {% include 'VODBaseBundle:User/Components:parental-control-recover-pin-button.html.twig' %}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {% endif %}
    </div>
</div>
{% endblock %}
", "VODBaseBundle:User:parental-control.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/User/parental-control.html.twig");
    }
}


/* VODBaseBundle:User:parental-control.html.twig */
class __TwigTemplate_849a8bf960b0a62decc0468c544399a681ca3cac25afae16b35c328e799f5c3f_261935089 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 27
        $this->parent = $this->loadTemplate("VODBaseBundle:Base/Components/Header:head.html.twig", "VODBaseBundle:User:parental-control.html.twig", 27);
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
        $__internal_3bffabc9f307277ac1d9ab53e7a46a1a7b6c6d32fcc0f9d14c8134ad5ea6852f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bffabc9f307277ac1d9ab53e7a46a1a7b6c6d32fcc0f9d14c8134ad5ea6852f->enter($__internal_3bffabc9f307277ac1d9ab53e7a46a1a7b6c6d32fcc0f9d14c8134ad5ea6852f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:User:parental-control.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3bffabc9f307277ac1d9ab53e7a46a1a7b6c6d32fcc0f9d14c8134ad5ea6852f->leave($__internal_3bffabc9f307277ac1d9ab53e7a46a1a7b6c6d32fcc0f9d14c8134ad5ea6852f_prof);

    }

    // line 28
    public function block_title($context, array $blocks = array())
    {
        $__internal_4fb26c7240895a076bbacd6c8fe441a5b8f19b51e7eb38aba426d6400d35564b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fb26c7240895a076bbacd6c8fe441a5b8f19b51e7eb38aba426d6400d35564b->enter($__internal_4fb26c7240895a076bbacd6c8fe441a5b8f19b51e7eb38aba426d6400d35564b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (((isset($context["section"]) ? $context["section"] : $this->getContext($context, "section")) . " - ") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.opengraph.site_name", array(), "common")), "html", null, true);
        
        $__internal_4fb26c7240895a076bbacd6c8fe441a5b8f19b51e7eb38aba426d6400d35564b->leave($__internal_4fb26c7240895a076bbacd6c8fe441a5b8f19b51e7eb38aba426d6400d35564b_prof);

    }

    // line 29
    public function block_meta_description($context, array $blocks = array())
    {
        $__internal_15001c2e9d6d34278a8223bf4d313a0212ff760290cee3ced0c4e38134a6089a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15001c2e9d6d34278a8223bf4d313a0212ff760290cee3ced0c4e38134a6089a->enter($__internal_15001c2e9d6d34278a8223bf4d313a0212ff760290cee3ced0c4e38134a6089a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_description"));

        echo twig_escape_filter($this->env, (((isset($context["section"]) ? $context["section"] : $this->getContext($context, "section")) . " - ") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.opengraph.site_name", array(), "common")), "html", null, true);
        
        $__internal_15001c2e9d6d34278a8223bf4d313a0212ff760290cee3ced0c4e38134a6089a->leave($__internal_15001c2e9d6d34278a8223bf4d313a0212ff760290cee3ced0c4e38134a6089a_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:User:parental-control.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  602 => 29,  590 => 28,  566 => 27,  362 => 156,  354 => 150,  351 => 149,  346 => 145,  343 => 144,  337 => 142,  331 => 139,  323 => 138,  312 => 134,  304 => 128,  301 => 127,  295 => 125,  291 => 123,  288 => 122,  282 => 120,  276 => 117,  268 => 116,  256 => 112,  254 => 111,  246 => 105,  243 => 104,  235 => 102,  231 => 100,  228 => 99,  225 => 97,  222 => 96,  214 => 94,  209 => 92,  201 => 91,  190 => 87,  186 => 85,  180 => 81,  171 => 79,  167 => 78,  161 => 74,  159 => 73,  152 => 69,  144 => 68,  134 => 66,  128 => 65,  101 => 44,  89 => 35,  86 => 34,  80 => 33,  72 => 27,  66 => 26,  59 => 1,  56 => 23,  54 => 22,  52 => 21,  49 => 17,  47 => 16,  45 => 15,  43 => 14,  41 => 13,  38 => 10,  36 => 9,  34 => 8,  32 => 7,  30 => 6,  11 => 1,);
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

{# Toggle class functionality set #}
{% set parentalControlDataViewClass = 'in' %}
{% set parentalControlFormViewClass = 'out' %}
{% if parentalControlForm.vars.valid == false %} {#if form not valid set out class#}
    {% set parentalControlDataViewClass = 'out' %}
    {% set parentalControlFormViewClass = 'in' %}
{% endif %}

{% set parentalPasswordDataViewClass = 'in' %}
{% set parentalPasswordFormViewClass = 'out' %}
{% if parentalPasswordForm.vars.valid == false %} {#if form not valid set out class#}
    {% set parentalPasswordDataViewClass = 'out' %}
    {% set parentalPasswordFormViewClass = 'in' %}
{% endif %}

{# Parental password placeholder variable set #}
{% set parentalPasswordPlaceholder = 'user.parental_control.placeholders.first_time_password' | trans %}
{% if app.user.parentalControlEnabled == true%}
    {% set parentalPasswordPlaceholder = 'user.parental_control.placeholders.actual_pin' | trans %}
{% endif %}

{% block head %}
    {% embed 'VODBaseBundle:Base/Components/Header:head.html.twig' %}
        {% block title %}{{ section ~ ' - ' ~ 'common.opengraph.site_name' | trans({}, 'common') }}{% endblock title %}
        {% block meta_description %}{{ section ~ ' - ' ~ 'common.opengraph.site_name' | trans({}, 'common') }}{% endblock meta_description %}
    {% endembed %}
{% endblock head %}

{% block custom_javascript %}
    <script>
        var parentalPasswordForm = \$('#{{ parentalPasswordForm.vars.id }}').validate({
            errorClass: 'text-danger',
            errorElement: 'p',
            onkeyup: false,
            onfocusout: function(element) {
                this.element(element);
            }
        });

        var parentalControlForm = \$('#{{ parentalControlForm.vars.id }}').validate({
            errorClass: 'text-danger',
            errorElement: 'p',
            onkeyup: false,
            onfocusout: function(element) {
                this.element(element);
            }
        });

        \$(document).ready(function(){
            \$('#parental-control-change-cancel-button').on('click', function(){
                parentalControlForm.resetForm();
            });

            \$('#parental-password-change-cancel-button').on('click', function(){
                parentalPasswordForm.resetForm();
            });
        });
    </script>
{% endblock custom_javascript %}

{% block content %}
    <div class=\"{% if is_mobile %}change-group-alter{% else %}change-group{% endif %}\">
        <div class=\"row\">
            <div class=\"{% if is_mobile %}col-xs-12{% else %}col-xs-9{% endif %}\">
                <p>{{ 'user.parental_control.title' | trans | raw }}</p>
            </div>
        </div>

        {% if app.session.flashBag.has('success') %}
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <div class=\"alert alert-success alert-dismissible\" role=\"alert\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                        {% for msg in app.session.flashBag.get('success') %}
                            {{ msg }}
                        {% endfor %}
                    </div>
                </div>
            </div>
        {% endif %}
    </div>

    <div class=\"{% if is_mobile %}change-group_alter{% else %}change-group{% endif %}\">
        <div id=\"1\" class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"row\">
                <div class=\"{% if is_mobile %}col-xs-12{% else %}col-xs-3{% endif %}\">
                    <h4>{{ 'user.parental_control.change_option_title' | trans }}</h4>
                </div>
                <div class=\"{% if is_mobile %}col-xs-12 col-md-12{% else %}col-md-6 col-lg-7{% endif %}\">
                    {# Seccion control parental: activado / desactivado #}
                    {% include 'VODBaseBundle:User/Components:parental-control-status.html.twig' %}

                    {# Seccion control parental: cambiar #}
                    {% include 'VODBaseBundle:User/Components:parental-control-change.html.twig' %}
                </div>

                <div class=\"{% if is_mobile %}col-xs-12 col-md-12{% else %}col-md-3 col-lg-2{% endif %}\">
                    {# Seccion control parental: boton configurar #}
                    {% include 'VODBaseBundle:User/Components:parental-control-button.html.twig' %}
                </div>
            </div>
        </div>
    </div>
    </div>

        {% if app.user.type == 'Root' %}
        <div class=\"{% if is_mobile %}change-group_alter{% else %}change-group{% endif %}\">
            <div id=\"2\" class=\"row\">
                <div class=\"col-xs-12\">
                    <div class=\"row\">
                        <div class=\"{% if is_mobile %}col-xs-12{% else %}col-xs-3{% endif %}\">
                            <h4>{{ 'user.parental_control.change_pin_title' | trans }}</h4>
                        </div>

                        <div class=\"col-md-6 col-lg-7 {% if is_mobile %}col-xs-12 col-md-12{% endif %}\">
                            {# Seccion control parental: cambiar pin  #}
                            {% include 'VODBaseBundle:User/Components:parental-control-password.html.twig' %}
                        </div>

                        <div class=\"col-md-3 col-lg-2 {% if is_mobile %}col-xs-12 col-md-12{% endif %}\">
                            {# Seccion control parental: boton cambiar pin  #}
                            {% include 'VODBaseBundle:User/Components:parental-control-pin-button.html.twig' %}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"{% if is_mobile %}change-group_alter{% else %}change-group{% endif %}\">
            <div id=\"3\" class=\"row\">
                <div class=\"col-xs-12\">
                    <div class=\"row\">
                        <div class=\"{% if is_mobile %}col-xs-12{% else %}col-xs-3{% endif %}\">
                            <h4>{{ 'user.parental_control.forgot_pin_title' | trans }}</h4>
                        </div>

                        <div class=\"col-md-6 col-lg-7 {% if is_mobile %}col-xs-12 col-md-12{% endif %}\">
                            {# Seccion control parental: recuperar pin  #}
                            {% include 'VODBaseBundle:User/Components:parental-control-recover-pin.html.twig' %}
                        </div>

                        <div class=\"col-md-3 col-lg-2\">
                            {# Seccion control parental: recuperar pin  boton #}
                            {% include 'VODBaseBundle:User/Components:parental-control-recover-pin-button.html.twig' %}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {% endif %}
    </div>
</div>
{% endblock %}
", "VODBaseBundle:User:parental-control.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/User/parental-control.html.twig");
    }
}
