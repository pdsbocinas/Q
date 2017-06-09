<?php

/* VODBaseBundle:User/Components:parental-control-password.html.twig */
class __TwigTemplate_2e519e01fbe0a2b55667987cd356381f65214ac1a8f079179abe14251b35a2a1 extends Twig_Template
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
        $__internal_b06cc6b419264cafc3efbfa04d740dd9ed4c57a3d41ad782235a63a5372a0b41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b06cc6b419264cafc3efbfa04d740dd9ed4c57a3d41ad782235a63a5372a0b41->enter($__internal_b06cc6b419264cafc3efbfa04d740dd9ed4c57a3d41ad782235a63a5372a0b41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:User/Components:parental-control-password.html.twig"));

        // line 1
        echo " ";
        // line 2
        echo "
 <div class=\"change-parental-password collapse ";
        // line 3
        if ((isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
            echo " user-info-label ";
        }
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["parentalPasswordFormViewClass"]) ? $context["parentalPasswordFormViewClass"] : $this->getContext($context, "parentalPasswordFormViewClass")), "html", null, true);
        echo " toggable-parental-password\">
    ";
        // line 4
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["parentalPasswordForm"]) ? $context["parentalPasswordForm"] : $this->getContext($context, "parentalPasswordForm")), 'form_start', array("attr" => array("novalidate" => "novalidate", "id" => $this->getAttribute($this->getAttribute((isset($context["parentalPasswordForm"]) ? $context["parentalPasswordForm"] : $this->getContext($context, "parentalPasswordForm")), "vars", array()), "id", array()))));
        echo "
    <div class=\"form-group\">
        ";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["parentalPasswordForm"]) ? $context["parentalPasswordForm"] : $this->getContext($context, "parentalPasswordForm")), "parentalControlPassword", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.parental_control.placeholders.actual_pin", array(), "user"))));
        // line 7
        echo "
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["parentalPasswordForm"]) ? $context["parentalPasswordForm"] : $this->getContext($context, "parentalPasswordForm")), "parentalControlPassword", array()), "vars", array()), "errors", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 9
            echo "            <p class=\"text-danger\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
            echo "</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "    </div>
    <div class=\"form-group\">
        ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["parentalPasswordForm"]) ? $context["parentalPasswordForm"] : $this->getContext($context, "parentalPasswordForm")), "newParentalControlPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.parental_control.placeholders.new_pin", array(), "user"))));
        // line 14
        echo "
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["parentalPasswordForm"]) ? $context["parentalPasswordForm"] : $this->getContext($context, "parentalPasswordForm")), "newParentalControlPassword", array()), "first", array()), "vars", array()), "errors", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 16
            echo "            <p class=\"text-danger\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
            echo "</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "    </div>
    <div class=\"form-group\">
        ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["parentalPasswordForm"]) ? $context["parentalPasswordForm"] : $this->getContext($context, "parentalPasswordForm")), "newParentalControlPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.parental_control.placeholders.confirm_new_pin", array(), "user"))));
        // line 21
        echo "
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["parentalPasswordForm"]) ? $context["parentalPasswordForm"] : $this->getContext($context, "parentalPasswordForm")), "newParentalControlPassword", array()), "second", array()), "vars", array()), "errors", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 23
            echo "            <p class=\"text-danger\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
            echo "</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    </div>
    <div class=\"form-group\">
    ";
        // line 27
        $context["cssClass"] = "btn btn-primary btn-lg";
        echo " 
    ";
        // line 28
        if ((isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
            // line 29
            echo "        ";
            $context["cssClass"] = ((isset($context["cssClass"]) ? $context["cssClass"] : $this->getContext($context, "cssClass")) . " btn-lg_unfixed-width");
            echo " 
    ";
        }
        // line 31
        echo "        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["parentalPasswordForm"]) ? $context["parentalPasswordForm"] : $this->getContext($context, "parentalPasswordForm")), "save", array()), 'widget', array("attr" => array("class" => (isset($context["cssClass"]) ? $context["cssClass"] : $this->getContext($context, "cssClass")))));
        echo "
        <input type=\"button\" id=\"parental-password-change-cancel-button\"
       class=\"";
        // line 33
        if ((isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
            echo "btn-lg_unfixed-width";
        }
        echo " btn btn-link collapse ";
        echo twig_escape_filter($this->env, (isset($context["parentalPasswordFormViewClass"]) ? $context["parentalPasswordFormViewClass"] : $this->getContext($context, "parentalPasswordFormViewClass")), "html", null, true);
        echo " toggable-parental-password\"
       data-toggle=\"collapse\" data-target=\".toggable-parental-password\"
       value=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.buttons.cancel", array(), "common"), "html", null, true);
        echo "\">
    </div>
    ";
        // line 37
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["parentalPasswordForm"]) ? $context["parentalPasswordForm"] : $this->getContext($context, "parentalPasswordForm")), 'form_end');
        echo "
</div>";
        
        $__internal_b06cc6b419264cafc3efbfa04d740dd9ed4c57a3d41ad782235a63a5372a0b41->leave($__internal_b06cc6b419264cafc3efbfa04d740dd9ed4c57a3d41ad782235a63a5372a0b41_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:User/Components:parental-control-password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 37,  133 => 35,  124 => 33,  118 => 31,  112 => 29,  110 => 28,  106 => 27,  102 => 25,  93 => 23,  89 => 22,  86 => 21,  84 => 20,  80 => 18,  71 => 16,  67 => 15,  64 => 14,  62 => 13,  58 => 11,  49 => 9,  45 => 8,  42 => 7,  40 => 6,  35 => 4,  27 => 3,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source(" {% trans_default_domain 'user' %}

 <div class=\"change-parental-password collapse {% if is_mobile %} user-info-label {% endif %} {{ parentalPasswordFormViewClass }} toggable-parental-password\">
    {{ form_start(parentalPasswordForm, {'attr': {'novalidate': 'novalidate', 'id': parentalPasswordForm.vars.id}}) }}
    <div class=\"form-group\">
        {{ form_widget(parentalPasswordForm.parentalControlPassword, {'attr': {'class': 'form-control',
            'placeholder': 'user.parental_control.placeholders.actual_pin' | trans }}) }}
        {% for error in parentalPasswordForm.parentalControlPassword.vars.errors %}
            <p class=\"text-danger\">{{ error.message }}</p>
        {% endfor %}
    </div>
    <div class=\"form-group\">
        {{ form_widget(parentalPasswordForm.newParentalControlPassword.first, {'attr': {'class': 'form-control',
            'placeholder': 'user.parental_control.placeholders.new_pin' | trans }}) }}
        {% for error in  parentalPasswordForm.newParentalControlPassword.first.vars.errors %}
            <p class=\"text-danger\">{{ error.message }}</p>
        {% endfor %}
    </div>
    <div class=\"form-group\">
        {{ form_widget(parentalPasswordForm.newParentalControlPassword.second, {'attr': {'class': 'form-control',
            'placeholder': 'user.parental_control.placeholders.confirm_new_pin' | trans }}) }}
        {% for error in  parentalPasswordForm.newParentalControlPassword.second.vars.errors %}
            <p class=\"text-danger\">{{ error.message }}</p>
        {% endfor %}
    </div>
    <div class=\"form-group\">
    {% set cssClass = 'btn btn-primary btn-lg' %} 
    {% if is_mobile %}
        {% set cssClass = cssClass ~ ' btn-lg_unfixed-width' %} 
    {% endif %}
        {{ form_widget(parentalPasswordForm.save, {'attr': {'class': cssClass }}) }}
        <input type=\"button\" id=\"parental-password-change-cancel-button\"
       class=\"{% if is_mobile %}btn-lg_unfixed-width{% endif %} btn btn-link collapse {{ parentalPasswordFormViewClass }} toggable-parental-password\"
       data-toggle=\"collapse\" data-target=\".toggable-parental-password\"
       value=\"{{ 'common.buttons.cancel' | trans({}, 'common') }}\">
    </div>
    {{ form_end(parentalPasswordForm) }}
</div>", "VODBaseBundle:User/Components:parental-control-password.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/User/Components/parental-control-password.html.twig");
    }
}
