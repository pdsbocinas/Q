<?php

/* VODBaseBundle:User/Components:parental-control-button.html.twig */
class __TwigTemplate_94ffa4b13dc584a22a9c052867f48b87dbd382fc96f9274fb8b028430ff84364 extends Twig_Template
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
        $__internal_19f36eec1e08e4a7cada4326aeeff8a908b7bfa39ca4010cc7803158d2c6e420 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19f36eec1e08e4a7cada4326aeeff8a908b7bfa39ca4010cc7803158d2c6e420->enter($__internal_19f36eec1e08e4a7cada4326aeeff8a908b7bfa39ca4010cc7803158d2c6e420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:User/Components:parental-control-button.html.twig"));

        // line 2
        echo "<div class=\"";
        if ( !(isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
            echo "text-right";
        }
        echo "  collapse ";
        echo twig_escape_filter($this->env, (isset($context["parentalControlDataViewClass"]) ? $context["parentalControlDataViewClass"] : $this->getContext($context, "parentalControlDataViewClass")), "html", null, true);
        echo " toggable-parental-control\" data-toggle=\"collapse\" data-target=\".toggable-parental-control\">
    ";
        // line 3
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "type", array()) == "Root")) {
            // line 4
            echo "\t    ";
            if ((isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
                // line 5
                echo "\t    \t<div class=\"helper-alignment-btn\">
\t    ";
            }
            // line 7
            echo "\t        <input type=\"button\" id=\"parental-control-change-button\" class=\"btn btn-link\" value=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.parental_control.buttons.config", array(), "user"), "html", null, true);
            echo "\">
\t    ";
            // line 8
            if ((isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
                // line 9
                echo "\t    \t</div>
\t    ";
            }
            // line 11
            echo "    ";
        }
        // line 12
        echo "</div>";
        
        $__internal_19f36eec1e08e4a7cada4326aeeff8a908b7bfa39ca4010cc7803158d2c6e420->leave($__internal_19f36eec1e08e4a7cada4326aeeff8a908b7bfa39ca4010cc7803158d2c6e420_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:User/Components:parental-control-button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 12,  51 => 11,  47 => 9,  45 => 8,  40 => 7,  36 => 5,  33 => 4,  31 => 3,  22 => 2,);
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
<div class=\"{% if not is_mobile %}text-right{% endif %}  collapse {{ parentalControlDataViewClass }} toggable-parental-control\" data-toggle=\"collapse\" data-target=\".toggable-parental-control\">
    {% if app.user.type == 'Root' %}
\t    {% if is_mobile %}
\t    \t<div class=\"helper-alignment-btn\">
\t    {% endif %}
\t        <input type=\"button\" id=\"parental-control-change-button\" class=\"btn btn-link\" value=\"{{ 'user.parental_control.buttons.config' | trans }}\">
\t    {% if is_mobile %}
\t    \t</div>
\t    {% endif %}
    {% endif %}
</div>", "VODBaseBundle:User/Components:parental-control-button.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/User/Components/parental-control-button.html.twig");
    }
}
