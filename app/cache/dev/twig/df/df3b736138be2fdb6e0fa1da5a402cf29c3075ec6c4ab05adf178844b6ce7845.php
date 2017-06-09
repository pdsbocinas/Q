<?php

/* VODBaseBundle:User/Components:parental-control-change.html.twig */
class __TwigTemplate_73cf28e9c95167317f3169464b2ce4375d6d9af9ad7fd99c18b88ecb69b56ee7 extends Twig_Template
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
        $__internal_65275b169110a7818181d408b32938f08064d08e6018863558dcf8e7073977d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65275b169110a7818181d408b32938f08064d08e6018863558dcf8e7073977d9->enter($__internal_65275b169110a7818181d408b32938f08064d08e6018863558dcf8e7073977d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:User/Components:parental-control-change.html.twig"));

        // line 2
        echo "<div class=\"change-parental-control collapse ";
        echo twig_escape_filter($this->env, (isset($context["parentalControlFormViewClass"]) ? $context["parentalControlFormViewClass"] : $this->getContext($context, "parentalControlFormViewClass")), "html", null, true);
        echo " toggable-parental-control\">
    ";
        // line 3
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["parentalControlForm"]) ? $context["parentalControlForm"] : $this->getContext($context, "parentalControlForm")), 'form_start', array("attr" => array("novalidate" => "novalidate", "id" => $this->getAttribute($this->getAttribute((isset($context["parentalControlForm"]) ? $context["parentalControlForm"] : $this->getContext($context, "parentalControlForm")), "vars", array()), "id", array()))));
        echo "
    <div class=\"style-select\">
        <div class=\"form-group\">
            ";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["parentalControlForm"]) ? $context["parentalControlForm"] : $this->getContext($context, "parentalControlForm")), "parentalControlPlayLimit", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["parentalControlForm"]) ? $context["parentalControlForm"] : $this->getContext($context, "parentalControlForm")), "parentalControlPlayLimit", array()), "vars", array()), "errors", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 8
            echo "                <p class=\"text-danger\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
            echo "</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "        </div>
        <div class=\"clearfix\"></div>
    </div>
        
    <div class=\"form-group\">
        ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["parentalControlForm"]) ? $context["parentalControlForm"] : $this->getContext($context, "parentalControlForm")), "parentalControlPassword", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.parental_control.placeholders.actual_pin", array(), "user"))));
        // line 16
        echo "
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["parentalControlForm"]) ? $context["parentalControlForm"] : $this->getContext($context, "parentalControlForm")), "parentalControlPassword", array()), "vars", array()), "errors", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 18
            echo "            <p class=\"text-danger\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
            echo "</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "    </div>
    <div class=\"form-group\">
        ";
        // line 22
        $context["cssClass"] = "btn btn-primary btn-lg";
        // line 23
        echo "        ";
        if ((isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
            // line 24
            echo "            ";
            $context["cssClass"] = ((isset($context["cssClass"]) ? $context["cssClass"] : $this->getContext($context, "cssClass")) . " btn-lg_unfixed-width");
            // line 25
            echo "        ";
        }
        // line 26
        echo "        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["parentalControlForm"]) ? $context["parentalControlForm"] : $this->getContext($context, "parentalControlForm")), "save", array()), 'widget', array("attr" => array("class" => (isset($context["cssClass"]) ? $context["cssClass"] : $this->getContext($context, "cssClass")))));
        echo "
        <input type=\"button\" id=\"parental-control-change-cancel-button\" class=\"
        btn btn-link collapse ";
        // line 28
        if ((isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
            echo "btn-lg_unfixed-width";
        }
        // line 29
        echo "        ";
        echo twig_escape_filter($this->env, (isset($context["parentalControlFormViewClass"]) ? $context["parentalControlFormViewClass"] : $this->getContext($context, "parentalControlFormViewClass")), "html", null, true);
        echo " toggable-parental-control\" data-toggle=\"collapse\" data-target=\".toggable-parental-control\" value=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.buttons.cancel", array(), "common"), "html", null, true);
        echo "\">
    </div>
    ";
        // line 31
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["parentalControlForm"]) ? $context["parentalControlForm"] : $this->getContext($context, "parentalControlForm")), 'form_end');
        echo "
</div>";
        
        $__internal_65275b169110a7818181d408b32938f08064d08e6018863558dcf8e7073977d9->leave($__internal_65275b169110a7818181d408b32938f08064d08e6018863558dcf8e7073977d9_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:User/Components:parental-control-change.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 31,  100 => 29,  96 => 28,  90 => 26,  87 => 25,  84 => 24,  81 => 23,  79 => 22,  75 => 20,  66 => 18,  62 => 17,  59 => 16,  57 => 15,  50 => 10,  41 => 8,  37 => 7,  33 => 6,  27 => 3,  22 => 2,);
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
<div class=\"change-parental-control collapse {{ parentalControlFormViewClass }} toggable-parental-control\">
    {{ form_start(parentalControlForm, {'attr': {'novalidate': 'novalidate', 'id': parentalControlForm.vars.id }}) }}
    <div class=\"style-select\">
        <div class=\"form-group\">
            {{ form_widget(parentalControlForm.parentalControlPlayLimit, {'attr': {'class': 'form-control'}}) }}
            {% for error in parentalControlForm.parentalControlPlayLimit.vars.errors %}
                <p class=\"text-danger\">{{ error.message }}</p>
            {% endfor %}
        </div>
        <div class=\"clearfix\"></div>
    </div>
        
    <div class=\"form-group\">
        {{ form_widget(parentalControlForm.parentalControlPassword, {'attr': {'class': 'form-control',
            'placeholder': 'user.parental_control.placeholders.actual_pin' | trans}}) }}
        {% for error in parentalControlForm.parentalControlPassword.vars.errors %}
            <p class=\"text-danger\">{{ error.message }}</p>
        {% endfor %}
    </div>
    <div class=\"form-group\">
        {% set cssClass = 'btn btn-primary btn-lg' %}
        {% if is_mobile %}
            {% set cssClass = cssClass ~ ' btn-lg_unfixed-width' %}
        {% endif %}
        {{ form_widget(parentalControlForm.save, {'attr': {'class': cssClass }}) }}
        <input type=\"button\" id=\"parental-control-change-cancel-button\" class=\"
        btn btn-link collapse {% if is_mobile %}btn-lg_unfixed-width{% endif %}
        {{ parentalControlFormViewClass }} toggable-parental-control\" data-toggle=\"collapse\" data-target=\".toggable-parental-control\" value=\"{{ 'common.buttons.cancel' | trans({}, 'common') }}\">
    </div>
    {{ form_end(parentalControlForm) }}
</div>", "VODBaseBundle:User/Components:parental-control-change.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/User/Components/parental-control-change.html.twig");
    }
}
