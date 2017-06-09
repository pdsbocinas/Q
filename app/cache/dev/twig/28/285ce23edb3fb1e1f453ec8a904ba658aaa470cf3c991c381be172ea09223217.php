<?php

/* VODBaseBundle:User/Components:parental-control-recover-pin-button.html.twig */
class __TwigTemplate_e6f20534efca6a6003ab78e0bb32ad9c13e2e59484f522cc5af1dfd81205e602 extends Twig_Template
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
        $__internal_4b89df3cf3b191148eb454855b6fcb1c07a64498a218292cdbe84e4f46afaa5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b89df3cf3b191148eb454855b6fcb1c07a64498a218292cdbe84e4f46afaa5f->enter($__internal_4b89df3cf3b191148eb454855b6fcb1c07a64498a218292cdbe84e4f46afaa5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:User/Components:parental-control-recover-pin-button.html.twig"));

        // line 2
        echo "<div class=\"";
        if ( !(isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
            echo "text-right";
        } else {
            echo "text-left";
        }
        echo " collapse in toggable-parental-recover\" data-toggle=\"collapse\" data-target=\".toggable-parental-recover\" >
\t";
        // line 3
        if ((isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
            echo "<div class=\"helper-alignment-btn\">";
        }
        // line 4
        echo "    <input type=\"button\" id=\"parental-recover-button\" class=\"btn btn-link\" value=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.parental_control.buttons.recover", array(), "user"), "html", null, true);
        echo "\">
    ";
        // line 5
        if ((isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
            echo "</div>";
        }
        // line 6
        echo "</div>";
        
        $__internal_4b89df3cf3b191148eb454855b6fcb1c07a64498a218292cdbe84e4f46afaa5f->leave($__internal_4b89df3cf3b191148eb454855b6fcb1c07a64498a218292cdbe84e4f46afaa5f_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:User/Components:parental-control-recover-pin-button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  40 => 5,  35 => 4,  31 => 3,  22 => 2,);
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
<div class=\"{% if not is_mobile %}text-right{% else %}text-left{% endif %} collapse in toggable-parental-recover\" data-toggle=\"collapse\" data-target=\".toggable-parental-recover\" >
\t{% if is_mobile %}<div class=\"helper-alignment-btn\">{% endif %}
    <input type=\"button\" id=\"parental-recover-button\" class=\"btn btn-link\" value=\"{{ 'user.parental_control.buttons.recover' | trans }}\">
    {% if is_mobile %}</div>{% endif %}
</div>", "VODBaseBundle:User/Components:parental-control-recover-pin-button.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/User/Components/parental-control-recover-pin-button.html.twig");
    }
}
