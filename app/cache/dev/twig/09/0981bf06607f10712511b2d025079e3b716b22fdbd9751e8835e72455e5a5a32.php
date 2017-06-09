<?php

/* VODBaseBundle:User/Components:parental-control-status.html.twig */
class __TwigTemplate_f6f696b5b3c65c38f15ef5a17a1598d7672febb19a5c041e1258d4b8872a4aa0 extends Twig_Template
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
        $__internal_79233702ceff41fe694695d3e8506563284c4cdb248210efdbc46588ac9086f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79233702ceff41fe694695d3e8506563284c4cdb248210efdbc46588ac9086f7->enter($__internal_79233702ceff41fe694695d3e8506563284c4cdb248210efdbc46588ac9086f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:User/Components:parental-control-status.html.twig"));

        // line 2
        echo "
<div class=\"parental-control collapse ";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["parentalControlDataViewClass"]) ? $context["parentalControlDataViewClass"] : $this->getContext($context, "parentalControlDataViewClass")), "html", null, true);
        echo " toggable-parental-control ";
        if ((isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
            echo " user-info-label ";
        }
        echo "\">
    <p>
        ";
        // line 5
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "parentalControlEnabled", array()) == true)) {
            // line 6
            echo "            <span class=\"success bold\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.parental_control.activated", array(), "user"), "html", null, true);
            echo ":
                ";
            // line 7
            if ($this->getAttribute((isset($context["parentalControlTypes"]) ? $context["parentalControlTypes"] : $this->getContext($context, "parentalControlTypes")), "get", array(0 => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "parentalControlPlayLimit", array())), "method")) {
                // line 8
                echo "                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["parentalControlTypes"]) ? $context["parentalControlTypes"] : $this->getContext($context, "parentalControlTypes")), "get", array(0 => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "parentalControlPlayLimit", array())), "method"), "description", array()), "html", null, true);
                echo "
                ";
            }
            // line 10
            echo "            </span>
        ";
        } else {
            // line 12
            echo "            <span class=\"disabled bold\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.parental_control.deactivated", array(), "user"), "html", null, true);
            echo "</span>
        ";
        }
        // line 14
        echo "    </p>
</div>";
        
        $__internal_79233702ceff41fe694695d3e8506563284c4cdb248210efdbc46588ac9086f7->leave($__internal_79233702ceff41fe694695d3e8506563284c4cdb248210efdbc46588ac9086f7_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:User/Components:parental-control-status.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 14,  53 => 12,  49 => 10,  43 => 8,  41 => 7,  36 => 6,  34 => 5,  25 => 3,  22 => 2,);
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

<div class=\"parental-control collapse {{ parentalControlDataViewClass }} toggable-parental-control {% if is_mobile %} user-info-label {% endif %}\">
    <p>
        {% if app.user.parentalControlEnabled == true %}
            <span class=\"success bold\">{{ 'user.parental_control.activated' | trans }}:
                {% if parentalControlTypes.get(app.user.parentalControlPlayLimit) %}
                    {{ parentalControlTypes.get(app.user.parentalControlPlayLimit).description }}
                {% endif %}
            </span>
        {% else %}
            <span class=\"disabled bold\">{{ 'user.parental_control.deactivated' | trans }}</span>
        {% endif %}
    </p>
</div>", "VODBaseBundle:User/Components:parental-control-status.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/User/Components/parental-control-status.html.twig");
    }
}
