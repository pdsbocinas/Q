<?php

/* VODBaseBundle:User/Components:coupon-block.html.twig */
class __TwigTemplate_63ad3e2f9801fef84cdd2f5ad1ac641ca07840ff86197fc1ab7a16b80ef5da53 extends Twig_Template
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
        $__internal_79a265a0a2fda54e44fd7e3457dd27d78f1dae8714eb739c453a5ba1f0a4ee59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79a265a0a2fda54e44fd7e3457dd27d78f1dae8714eb739c453a5ba1f0a4ee59->enter($__internal_79a265a0a2fda54e44fd7e3457dd27d78f1dae8714eb739c453a5ba1f0a4ee59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:User/Components:coupon-block.html.twig"));

        // line 2
        echo "
<div class=\"change-group ";
        // line 3
        if ((isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
            echo "change-group_alter";
        }
        echo "\">
\t<div class=\"row\">
\t\t<div class=\"";
        // line 5
        if ((isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
            echo "col-xs-12";
        } else {
            echo "col-xs-3";
        }
        echo "\">
\t\t\t<h4>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.payment_method.coupon.title", array(), "user"), "html", null, true);
        echo "</h4>
\t\t</div>

\t\t<div class=\"";
        // line 9
        if ((isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
            echo "col-xs-12";
        } else {
            echo "col-xs-9";
        }
        echo "\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"";
        // line 11
        if ((isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
            echo "col-xs-12";
        } else {
            echo "col-xs-9";
        }
        echo "\">
\t\t\t\t\t<div class=\"collapse in js-toggable-coupons\">
\t\t\t\t\t\t<div class=\"coupons\">
\t\t\t\t\t\t\t";
        // line 14
        if ((true == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "hasPromotion", array()))) {
            // line 15
            echo "\t\t\t\t\t\t\t\t<p>No podés ingresar un cupón porque ya estás disfrutando de una promoción.</p>
\t\t\t\t\t\t\t";
        } elseif ((((null ===         // line 16
(isset($context["activeCoupons"]) ? $context["activeCoupons"] : $this->getContext($context, "activeCoupons"))) || (twig_length_filter($this->env, (isset($context["activeCoupons"]) ? $context["activeCoupons"] : $this->getContext($context, "activeCoupons"))) == 0)) && ((null === (isset($context["inactiveCoupons"]) ? $context["inactiveCoupons"] : $this->getContext($context, "inactiveCoupons"))) || (twig_length_filter($this->env, (isset($context["inactiveCoupons"]) ? $context["inactiveCoupons"] : $this->getContext($context, "inactiveCoupons"))) == 0)))) {
            // line 17
            echo "\t\t\t\t\t\t\t\t<p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.payment_method.coupon.no", array(), "user"), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t";
        }
        // line 19
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"collapse out ";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["addCouponFormClass"]) ? $context["addCouponFormClass"] : $this->getContext($context, "addCouponFormClass")), "html", null, true);
        echo " js-toggable-add-coupon\">
\t\t\t\t\t\t";
        // line 23
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["couponForm"]) ? $context["couponForm"] : $this->getContext($context, "couponForm")), 'form_start', array("attr" => array("novalidate" => "novalidate", "id" => $this->getAttribute($this->getAttribute((isset($context["couponForm"]) ? $context["couponForm"] : $this->getContext($context, "couponForm")), "vars", array()), "id", array()))));
        echo "
\t\t\t\t\t\t\t";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["couponForm"]) ? $context["couponForm"] : $this->getContext($context, "couponForm")), "_token", array()), 'widget');
        echo "
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["couponForm"]) ? $context["couponForm"] : $this->getContext($context, "couponForm")), "coupon", array()), 'widget', array("attr" => array("placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.payment_method.coupon.form.placeholders.add", array(), "user"), "class" => "form-control")));
        // line 27
        echo "
\t\t\t\t\t\t\t\t<div id=\"coupon-error-container\">
\t\t\t\t\t\t\t\t\t";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["couponForm"]) ? $context["couponForm"] : $this->getContext($context, "couponForm")), "coupon", array()), "vars", array()), "errors", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 30
            echo "\t\t\t\t\t\t\t\t\t\t<p class=\"text-danger\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<div id=\"coupon-information-container\"></div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t";
        // line 40
        $context["cssClass"] = "btn btn-primary btn-lg";
        // line 41
        echo "\t\t\t\t\t            ";
        if ((isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
            // line 42
            echo "\t\t\t\t\t                ";
            $context["cssClass"] = ((isset($context["cssClass"]) ? $context["cssClass"] : $this->getContext($context, "cssClass")) . " btn-lg_unfixed-width");
            // line 43
            echo "\t\t\t\t\t            ";
        }
        // line 44
        echo "\t\t\t\t\t\t\t\t";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["couponForm"]) ? $context["couponForm"] : $this->getContext($context, "couponForm")), "save", array()), 'widget', array("attr" => array("class" => (isset($context["cssClass"]) ? $context["cssClass"] : $this->getContext($context, "cssClass")), "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.buttons.confirm", array(), "common"))));
        // line 45
        echo "
\t\t\t\t\t\t\t\t<a id=\"add-coupon-cancel-button\" class=\"btn btn-link btn-lg  ";
        // line 46
        if ((isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
            echo "btn-lg_unfixed-width";
        }
        echo "\" data-toggle=\"collapse\" data-target=\".js-toggable-add-coupon\">
\t\t\t\t\t\t\t\t\t";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.buttons.cancel", array(), "common"), "html", null, true);
        echo "</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 49
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["couponForm"]) ? $context["couponForm"] : $this->getContext($context, "couponForm")), 'form_end');
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"";
        // line 53
        if ((isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
            echo "col-xs-12";
        } else {
            echo "col-xs-3";
        }
        echo "\">
                    ";
        // line 54
        if ((((null === (isset($context["activeCoupons"]) ? $context["activeCoupons"] : $this->getContext($context, "activeCoupons"))) || (twig_length_filter($this->env, (isset($context["activeCoupons"]) ? $context["activeCoupons"] : $this->getContext($context, "activeCoupons"))) == 0)) && ((null === (isset($context["inactiveCoupons"]) ? $context["inactiveCoupons"] : $this->getContext($context, "inactiveCoupons"))) || (twig_length_filter($this->env, (isset($context["inactiveCoupons"]) ? $context["inactiveCoupons"] : $this->getContext($context, "inactiveCoupons"))) == 0)))) {
            // line 55
            echo "\t\t\t\t\t\t<div class=\"";
            if ((isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
                echo "helper-alignment-btn";
            } else {
                echo "pull-right";
            }
            echo "\">
\t\t\t\t\t\t\t<input type=\"button\" id=\"add-coupon-button\"
\t\t\t\t\t\t\t\t   ";
            // line 57
            if (((isset($context["hasLinkCoupon"]) ? $context["hasLinkCoupon"] : $this->getContext($context, "hasLinkCoupon")) == false)) {
                echo "disabled=\"disabled\"";
            }
            // line 58
            echo "\t\t\t\t\t\t\t\t   class=\"btn btn-link add-button ";
            if (((isset($context["hasLinkCoupon"]) ? $context["hasLinkCoupon"] : $this->getContext($context, "hasLinkCoupon")) == false)) {
                echo "disabled";
            }
            echo "\"
\t\t\t\t\t\t\t\t   value=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.payment_method.coupon.add", array(), "user"), "html", null, true);
            echo "\" data-toggle=\"collapse\" data-target=\".js-toggable-add-coupon\">
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 62
        echo "\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"";
        // line 66
        if ((isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
            echo "col-xs-12";
        } else {
            echo "col-xs-9";
        }
        echo "\">
\t\t\t\t\t";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["activeCoupons"]) ? $context["activeCoupons"] : $this->getContext($context, "activeCoupons")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["coupon"]) {
            // line 68
            echo "\t\t\t\t\t\t";
            $this->loadTemplate("VODBaseBundle:User/Components:coupon.html.twig", "VODBaseBundle:User/Components:coupon-block.html.twig", 68)->display($context);
            // line 69
            echo "\t\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coupon'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "\t\t\t\t</div>

\t\t\t\t<div class=\"";
        // line 72
        if ((isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
            echo "col-xs-12";
        } else {
            echo "col-xs-3";
        }
        echo "\">
\t\t\t\t\t";
        // line 73
        if ( !(((null === (isset($context["activeCoupons"]) ? $context["activeCoupons"] : $this->getContext($context, "activeCoupons"))) || (twig_length_filter($this->env, (isset($context["activeCoupons"]) ? $context["activeCoupons"] : $this->getContext($context, "activeCoupons"))) == 0)) && ((null === (isset($context["inactiveCoupons"]) ? $context["inactiveCoupons"] : $this->getContext($context, "inactiveCoupons"))) || (twig_length_filter($this->env, (isset($context["inactiveCoupons"]) ? $context["inactiveCoupons"] : $this->getContext($context, "inactiveCoupons"))) == 0)))) {
            // line 74
            echo "\t\t\t\t\t\t<div class=\"";
            if ((isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
                echo "helper-alignment-btn";
            } else {
                echo "pull-right";
            }
            echo "\">
\t\t\t\t\t\t\t<a id=\"add-coupon-button\" ";
            // line 75
            if (((isset($context["hasLinkCoupon"]) ? $context["hasLinkCoupon"] : $this->getContext($context, "hasLinkCoupon")) == false)) {
                echo "disabled=\"disabled\"";
            }
            echo " class=\"btn btn-link add-button ";
            if (((isset($context["hasLinkCoupon"]) ? $context["hasLinkCoupon"] : $this->getContext($context, "hasLinkCoupon")) == false)) {
                echo "disabled";
            }
            echo "\" data-toggle=\"collapse\"
\t\t\t\t\t\t\t   data-target=\".js-toggable-add-coupon\">
\t\t\t\t\t\t\t\t";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.payment_method.coupon.add_other", array(), "user"), "html", null, true);
            echo "
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 81
        echo "\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"";
        // line 85
        if ((isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
            echo "col-xs-12";
        } else {
            echo "col-xs-9";
        }
        echo "\">
\t\t\t\t\t";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["inactiveCoupons"]) ? $context["inactiveCoupons"] : $this->getContext($context, "inactiveCoupons")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["coupon"]) {
            // line 87
            echo "\t\t\t\t\t\t<div class=\"collapse out js-toggable-history\">
\t\t\t\t\t\t\t";
            // line 88
            $this->loadTemplate("VODBaseBundle:User/Components:coupon.html.twig", "VODBaseBundle:User/Components:coupon-block.html.twig", 88)->display($context);
            // line 89
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coupon'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "\t\t\t\t</div>

\t\t\t\t<div class=\"";
        // line 93
        if ((isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
            echo "col-xs-12";
        } else {
            echo "col-xs-3";
        }
        echo "\">
\t\t\t\t\t";
        // line 94
        if ((twig_length_filter($this->env, (isset($context["inactiveCoupons"]) ? $context["inactiveCoupons"] : $this->getContext($context, "inactiveCoupons"))) > 0)) {
            // line 95
            echo "\t\t\t\t\t\t<div class=\"";
            if ((isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
                echo "helper-alignment-btn";
            } else {
                echo "pull-right";
            }
            echo "\">
\t\t\t\t\t\t\t<a id=\"history-coupon-button\" class=\"btn btn-link\" data-toggle=\"collapse\" data-target=\".js-toggable-history\">
\t\t\t\t\t\t\t\t";
            // line 97
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.payment_method.coupon.history", array(), "user"), "html", null, true);
            echo "</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<br>
\t\t\t\t    ";
        }
        // line 101
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
        
        $__internal_79a265a0a2fda54e44fd7e3457dd27d78f1dae8714eb739c453a5ba1f0a4ee59->leave($__internal_79a265a0a2fda54e44fd7e3457dd27d78f1dae8714eb739c453a5ba1f0a4ee59_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:User/Components:coupon-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  368 => 101,  361 => 97,  351 => 95,  349 => 94,  341 => 93,  337 => 91,  322 => 89,  320 => 88,  317 => 87,  300 => 86,  292 => 85,  286 => 81,  279 => 77,  268 => 75,  259 => 74,  257 => 73,  249 => 72,  245 => 70,  231 => 69,  228 => 68,  211 => 67,  203 => 66,  197 => 62,  191 => 59,  184 => 58,  180 => 57,  170 => 55,  168 => 54,  160 => 53,  153 => 49,  148 => 47,  142 => 46,  139 => 45,  136 => 44,  133 => 43,  130 => 42,  127 => 41,  125 => 40,  115 => 32,  106 => 30,  102 => 29,  98 => 27,  96 => 26,  91 => 24,  87 => 23,  83 => 22,  78 => 19,  72 => 17,  70 => 16,  67 => 15,  65 => 14,  55 => 11,  46 => 9,  40 => 6,  32 => 5,  25 => 3,  22 => 2,);
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
\t\t<div class=\"{% if is_mobile %}col-xs-12{% else %}col-xs-3{% endif %}\">
\t\t\t<h4>{{ 'user.payment_method.coupon.title' | trans }}</h4>
\t\t</div>

\t\t<div class=\"{% if is_mobile %}col-xs-12{% else %}col-xs-9{% endif %}\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"{% if is_mobile %}col-xs-12{% else %}col-xs-9{% endif %}\">
\t\t\t\t\t<div class=\"collapse in js-toggable-coupons\">
\t\t\t\t\t\t<div class=\"coupons\">
\t\t\t\t\t\t\t{% if true == app.user.hasPromotion %}
\t\t\t\t\t\t\t\t<p>No podés ingresar un cupón porque ya estás disfrutando de una promoción.</p>
\t\t\t\t\t\t\t{% elseif (((activeCoupons is null) or (activeCoupons | length == 0)) and ((inactiveCoupons is null) or (inactiveCoupons | length == 0))) %}
\t\t\t\t\t\t\t\t<p>{{ 'user.payment_method.coupon.no' | trans }}</p>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"collapse out {{ addCouponFormClass }} js-toggable-add-coupon\">
\t\t\t\t\t\t{{ form_start(couponForm, {'attr': {'novalidate': 'novalidate', 'id': couponForm.vars.id}}) }}
\t\t\t\t\t\t\t{{ form_widget(couponForm._token) }}
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t{{ form_widget(couponForm.coupon, {'attr': {'placeholder': 'user.payment_method.coupon.form.placeholders.add' | trans,
\t\t\t\t\t\t\t\t\t'class':'form-control'}}) }}
\t\t\t\t\t\t\t\t<div id=\"coupon-error-container\">
\t\t\t\t\t\t\t\t\t{% for error in couponForm.coupon.vars.errors %}
\t\t\t\t\t\t\t\t\t\t<p class=\"text-danger\">{{ error.message }}</p>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<div id=\"coupon-information-container\"></div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t{% set cssClass = 'btn btn-primary btn-lg' %}
\t\t\t\t\t            {% if is_mobile %}
\t\t\t\t\t                {% set cssClass = cssClass ~ ' btn-lg_unfixed-width' %}
\t\t\t\t\t            {% endif %}
\t\t\t\t\t\t\t\t{{ form_widget(couponForm.save, {'attr': {'class': cssClass,
\t\t\t\t\t\t\t\t\t'label': 'common.buttons.confirm' | trans({}, 'common') }}) }}
\t\t\t\t\t\t\t\t<a id=\"add-coupon-cancel-button\" class=\"btn btn-link btn-lg  {% if is_mobile %}btn-lg_unfixed-width{% endif %}\" data-toggle=\"collapse\" data-target=\".js-toggable-add-coupon\">
\t\t\t\t\t\t\t\t\t{{ 'common.buttons.cancel' | trans({}, 'common') }}</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{{ form_end(couponForm) }}
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"{% if is_mobile %}col-xs-12{% else %}col-xs-3{% endif %}\">
                    {% if (((activeCoupons is null) or (activeCoupons | length == 0)) and ((inactiveCoupons is null) or (inactiveCoupons | length == 0))) %}
\t\t\t\t\t\t<div class=\"{% if is_mobile %}helper-alignment-btn{% else %}pull-right{% endif %}\">
\t\t\t\t\t\t\t<input type=\"button\" id=\"add-coupon-button\"
\t\t\t\t\t\t\t\t   {% if hasLinkCoupon == false %}disabled=\"disabled\"{% endif %}
\t\t\t\t\t\t\t\t   class=\"btn btn-link add-button {% if hasLinkCoupon == false %}disabled{% endif %}\"
\t\t\t\t\t\t\t\t   value=\"{{- 'user.payment_method.coupon.add' | trans -}}\" data-toggle=\"collapse\" data-target=\".js-toggable-add-coupon\">
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"{% if is_mobile %}col-xs-12{% else %}col-xs-9{% endif %}\">
\t\t\t\t\t{% for coupon in activeCoupons %}
\t\t\t\t\t\t{% include 'VODBaseBundle:User/Components:coupon.html.twig' %}
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>

\t\t\t\t<div class=\"{% if is_mobile %}col-xs-12{% else %}col-xs-3{% endif %}\">
\t\t\t\t\t{% if not (((activeCoupons is null) or (activeCoupons | length == 0)) and ((inactiveCoupons is null) or (inactiveCoupons | length == 0))) %}
\t\t\t\t\t\t<div class=\"{% if is_mobile %}helper-alignment-btn{% else %}pull-right{% endif %}\">
\t\t\t\t\t\t\t<a id=\"add-coupon-button\" {% if hasLinkCoupon == false %}disabled=\"disabled\"{% endif %} class=\"btn btn-link add-button {% if hasLinkCoupon == false %}disabled{% endif %}\" data-toggle=\"collapse\"
\t\t\t\t\t\t\t   data-target=\".js-toggable-add-coupon\">
\t\t\t\t\t\t\t\t{{ 'user.payment_method.coupon.add_other' | trans }}
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"{% if is_mobile %}col-xs-12{% else %}col-xs-9{% endif %}\">
\t\t\t\t\t{% for coupon in inactiveCoupons %}
\t\t\t\t\t\t<div class=\"collapse out js-toggable-history\">
\t\t\t\t\t\t\t{% include 'VODBaseBundle:User/Components:coupon.html.twig' %}
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>

\t\t\t\t<div class=\"{% if is_mobile %}col-xs-12{% else %}col-xs-3{% endif %}\">
\t\t\t\t\t{% if (inactiveCoupons | length > 0) %}
\t\t\t\t\t\t<div class=\"{% if is_mobile %}helper-alignment-btn{% else %}pull-right{% endif %}\">
\t\t\t\t\t\t\t<a id=\"history-coupon-button\" class=\"btn btn-link\" data-toggle=\"collapse\" data-target=\".js-toggable-history\">
\t\t\t\t\t\t\t\t{{ 'user.payment_method.coupon.history' | trans }}</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<br>
\t\t\t\t    {% endif %}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
", "VODBaseBundle:User/Components:coupon-block.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/User/Components/coupon-block.html.twig");
    }
}
