<?php

/* VODBaseBundle:Components/Modal:coupon-modal.html.twig */
class __TwigTemplate_f14a43838ce1fab1ab3b0e909f4b072010633827b25a401a4e8e8be594cad3ed extends Twig_Template
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
        $__internal_771b3e619f1fb4375d96b76e3e06f421d63e4337ec2bfe394e70d64c347d87b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_771b3e619f1fb4375d96b76e3e06f421d63e4337ec2bfe394e70d64c347d87b1->enter($__internal_771b3e619f1fb4375d96b76e3e06f421d63e4337ec2bfe394e70d64c347d87b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Components/Modal:coupon-modal.html.twig"));

        // line 1
        echo "<div class=\"modal\" id=\"coupon-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"coupon-modal\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" id=\"modal-coupon-dismiss-button\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">X</span></button>
                    <h2>Ingresar cupón</h2>
                </div>
                <div class=\"modal-body\">
                    <div class=\"form-group\">
                        ";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "coupon", array()), 'widget', array("attr" => array("class" => "form-control", "data-rule-coupon" => true)));
        echo "
                        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "coupon", array()), "vars", array()), "errors", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 13
            echo "                            <p class=\"text-danger error bold back\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
            echo "</p>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "                    </div>

                    <div class=\"form-group\">
                        <div id=\"modal-coupon-information-container\"></div>
                    </div>
                </div>
                <div class=\"modal-footer text-center\">
                    <button id=\"modal-coupon-confirm\" class=\"btn btn-primary\">Confirmar</button>
                    <button id=\"modal-coupon-close\" class=\"btn btn-link\" data-dismiss=\"modal\" aria-label=\"Close\">Cancelar</button>
                </div>
            </div>
        </div>
    </div>
</div>";
        
        $__internal_771b3e619f1fb4375d96b76e3e06f421d63e4337ec2bfe394e70d64c347d87b1->leave($__internal_771b3e619f1fb4375d96b76e3e06f421d63e4337ec2bfe394e70d64c347d87b1_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Components/Modal:coupon-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 15,  42 => 13,  38 => 12,  34 => 11,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"modal\" id=\"coupon-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"coupon-modal\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" id=\"modal-coupon-dismiss-button\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">X</span></button>
                    <h2>Ingresar cupón</h2>
                </div>
                <div class=\"modal-body\">
                    <div class=\"form-group\">
                        {{ form_widget(form.coupon, {'attr': {'class':'form-control', 'data-rule-coupon': true}}) }}
                        {% for error in form.coupon.vars.errors %}
                            <p class=\"text-danger error bold back\">{{ error.message }}</p>
                        {% endfor %}
                    </div>

                    <div class=\"form-group\">
                        <div id=\"modal-coupon-information-container\"></div>
                    </div>
                </div>
                <div class=\"modal-footer text-center\">
                    <button id=\"modal-coupon-confirm\" class=\"btn btn-primary\">Confirmar</button>
                    <button id=\"modal-coupon-close\" class=\"btn btn-link\" data-dismiss=\"modal\" aria-label=\"Close\">Cancelar</button>
                </div>
            </div>
        </div>
    </div>
</div>", "VODBaseBundle:Components/Modal:coupon-modal.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/Components/Modal/coupon-modal.html.twig");
    }
}
