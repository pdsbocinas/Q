<?php

/* VODBaseBundle:User/Components:parental-control-recover-pin.html.twig */
class __TwigTemplate_dfb3dccac63c5ac3ba9b36f8af4a8a4b1711114d3642711ef54d0b030b2f2d98 extends Twig_Template
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
        $__internal_5f18062894190deba7147f7d1115a2b9b085e20efc2345f937273a3853657da2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f18062894190deba7147f7d1115a2b9b085e20efc2345f937273a3853657da2->enter($__internal_5f18062894190deba7147f7d1115a2b9b085e20efc2345f937273a3853657da2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:User/Components:parental-control-recover-pin.html.twig"));

        // line 2
        echo "
<div class=\"recover-parental-password collapse toggable-parental-recover ";
        // line 3
        if ((isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
            echo " user-info-label";
        }
        echo "\">
    ";
        // line 4
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["forgotParentalPassword"]) ? $context["forgotParentalPassword"] : $this->getContext($context, "forgotParentalPassword")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
    <div class=\"form-group\">
        <span>
            ";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.parental_control.forgot_pin_explain", array("%email%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "email", array())), "user"), "html", null, true);
        echo "
        </span>
    </div>
    <div class=\"form-group\">
    ";
        // line 11
        $context["cssClass"] = "btn btn-primary btn-lg";
        echo " 
    ";
        // line 12
        if ((isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
            // line 13
            echo "        ";
            $context["cssClass"] = ((isset($context["cssClass"]) ? $context["cssClass"] : $this->getContext($context, "cssClass")) . " btn-lg_unfixed-width");
            echo " 
    ";
        }
        // line 15
        echo "        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["forgotParentalPassword"]) ? $context["forgotParentalPassword"] : $this->getContext($context, "forgotParentalPassword")), "save", array()), 'widget', array("attr" => array("class" => (isset($context["cssClass"]) ? $context["cssClass"] : $this->getContext($context, "cssClass")))));
        echo "
        <input type=\"button\" id=\"parental-recover-button\"
       class=\"btn btn-link collapse out toggable-parental-recover ";
        // line 17
        if ((isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
            echo "btn-lg_unfixed-width";
        }
        echo "\"
        data-toggle=\"collapse\" data-target=\".toggable-parental-recover\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.buttons.cancel", array(), "common"), "html", null, true);
        echo "\">
    </div>
    ";
        // line 20
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["forgotParentalPassword"]) ? $context["forgotParentalPassword"] : $this->getContext($context, "forgotParentalPassword")), 'form_end');
        echo "
</div>";
        
        $__internal_5f18062894190deba7147f7d1115a2b9b085e20efc2345f937273a3853657da2->leave($__internal_5f18062894190deba7147f7d1115a2b9b085e20efc2345f937273a3853657da2_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:User/Components:parental-control-recover-pin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 20,  68 => 18,  62 => 17,  56 => 15,  50 => 13,  48 => 12,  44 => 11,  37 => 7,  31 => 4,  25 => 3,  22 => 2,);
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

<div class=\"recover-parental-password collapse toggable-parental-recover {% if is_mobile %} user-info-label{% endif %}\">
    {{ form_start(forgotParentalPassword, {'attr': {'novalidate': 'novalidate'}}) }}
    <div class=\"form-group\">
        <span>
            {{ 'user.parental_control.forgot_pin_explain' | trans({'%email%': app.user.email }) }}
        </span>
    </div>
    <div class=\"form-group\">
    {% set cssClass = 'btn btn-primary btn-lg' %} 
    {% if is_mobile %}
        {% set cssClass = cssClass ~ ' btn-lg_unfixed-width' %} 
    {% endif %}
        {{ form_widget(forgotParentalPassword.save, {'attr': {'class': cssClass }}) }}
        <input type=\"button\" id=\"parental-recover-button\"
       class=\"btn btn-link collapse out toggable-parental-recover {% if is_mobile %}btn-lg_unfixed-width{% endif %}\"
        data-toggle=\"collapse\" data-target=\".toggable-parental-recover\" value=\"{{ 'common.buttons.cancel' | trans({}, 'common') }}\">
    </div>
    {{ form_end(forgotParentalPassword) }}
</div>", "VODBaseBundle:User/Components:parental-control-recover-pin.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/User/Components/parental-control-recover-pin.html.twig");
    }
}
