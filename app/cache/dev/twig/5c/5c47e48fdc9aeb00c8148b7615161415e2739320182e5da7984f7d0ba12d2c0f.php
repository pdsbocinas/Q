<?php

/* VODBaseBundle:User/Components:parental-control-pin-button.html.twig */
class __TwigTemplate_9c149409441a231eb1f8aa2476209a8e5bb9c4412b7adcde43392f15c03f019e extends Twig_Template
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
        $__internal_195ced6a94784ebbbb29dff95cd2fce06272d749839826240201c33dd53c2e6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_195ced6a94784ebbbb29dff95cd2fce06272d749839826240201c33dd53c2e6c->enter($__internal_195ced6a94784ebbbb29dff95cd2fce06272d749839826240201c33dd53c2e6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:User/Components:parental-control-pin-button.html.twig"));

        // line 2
        echo "<div class=\"";
        if ( !(isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
            echo "text-right";
        } else {
            echo "text-left";
        }
        echo " collapse in ";
        echo twig_escape_filter($this->env, (isset($context["parentalControlDataViewClass"]) ? $context["parentalControlDataViewClass"] : $this->getContext($context, "parentalControlDataViewClass")), "html", null, true);
        echo " toggable-parental-password\" data-toggle=\"collapse\" data-target=\".toggable-parental-password\">
    ";
        // line 3
        if ((isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
            // line 4
            echo "    <div class=\"helper-alignment-btn\">
    ";
        }
        // line 6
        echo "    <input type=\"button\" id=\"parental-password-change-button\" class=\"btn btn-link\" value=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.parental_control.buttons.modify", array(), "user"), "html", null, true);
        echo "\">
    ";
        // line 7
        if ((isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
            // line 8
            echo "    </div>
    ";
        }
        // line 10
        echo "</div>";
        
        $__internal_195ced6a94784ebbbb29dff95cd2fce06272d749839826240201c33dd53c2e6c->leave($__internal_195ced6a94784ebbbb29dff95cd2fce06272d749839826240201c33dd53c2e6c_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:User/Components:parental-control-pin-button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 10,  46 => 8,  44 => 7,  39 => 6,  35 => 4,  33 => 3,  22 => 2,);
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
<div class=\"{% if not is_mobile %}text-right{% else %}text-left{% endif %} collapse in {{ parentalControlDataViewClass }} toggable-parental-password\" data-toggle=\"collapse\" data-target=\".toggable-parental-password\">
    {% if is_mobile %}
    <div class=\"helper-alignment-btn\">
    {% endif %}
    <input type=\"button\" id=\"parental-password-change-button\" class=\"btn btn-link\" value=\"{{ 'user.parental_control.buttons.modify' | trans }}\">
    {% if is_mobile %}
    </div>
    {% endif %}
</div>", "VODBaseBundle:User/Components:parental-control-pin-button.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/User/Components/parental-control-pin-button.html.twig");
    }
}
