<?php

/* VODBaseBundle:Components/Modal:generic-modal.html.twig */
class __TwigTemplate_59bceeec0653751c14df1acd5a565ffe32197976dc3106e0d026ab5a62f1a1e6 extends Twig_Template
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
        $__internal_653a7e79968b5bdd269fe1eed57d23a05a80dc67270af9b6a97790d9e14e872c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_653a7e79968b5bdd269fe1eed57d23a05a80dc67270af9b6a97790d9e14e872c->enter($__internal_653a7e79968b5bdd269fe1eed57d23a05a80dc67270af9b6a97790d9e14e872c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Components/Modal:generic-modal.html.twig"));

        // line 2
        echo "
";
        // line 3
        if ( !array_key_exists("m", $context)) {
            // line 4
            echo "    ";
            $context["crazyTitle"] = "";
        }
        // line 6
        if ( !array_key_exists("crazyText", $context)) {
            // line 7
            echo "    ";
            $context["crazyText"] = "";
        }
        // line 9
        if ( !array_key_exists("acceptButtonAction", $context)) {
            // line 10
            echo "    ";
            $context["acceptButtonAction"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        }
        // line 12
        if ( !array_key_exists("cancelButtonAction", $context)) {
            // line 13
            echo "    ";
            $context["cancelButtonAction"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        }
        // line 15
        if ( !array_key_exists("acceptButtonText", $context)) {
            // line 16
            echo "    ";
            $context["acceptButtonText"] = "common.buttons.accept";
        }
        // line 18
        if ( !array_key_exists("cancelButtonText", $context)) {
            // line 19
            echo "    ";
            $context["cancelButtonText"] = "common.buttons.cancel";
        }
        // line 21
        echo "

";
        // line 34
        echo "
<div class=\"modal fade\" id=\"";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["crazyId"]) ? $context["crazyId"] : $this->getContext($context, "crazyId")), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-body text-center\">
                <button type=\"button\" class=\"btn-close  btn btn-rounded\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">X</span></button>
                <h2 class=\"item-title\">";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["crazyTitle"]) ? $context["crazyTitle"] : $this->getContext($context, "crazyTitle")), "html", null, true);
        echo "</h2>
                <div class=\"row\">
                    <div class=\"col-xs-12\">
                        <p id=\"modal-text\">";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["crazyText"]) ? $context["crazyText"] : $this->getContext($context, "crazyText")), array(), "modal");
        echo "</p>
                    </div>
                </div>
                <br />
                ";
        // line 47
        $context["cssButtonClass"] = "col-xs-6";
        // line 48
        echo "                ";
        if ((((isset($context["acceptButton"]) ? $context["acceptButton"] : $this->getContext($context, "acceptButton")) == false) || ((isset($context["cancelButton"]) ? $context["cancelButton"] : $this->getContext($context, "cancelButton")) == false))) {
            // line 49
            echo "                    ";
            $context["cssButtonClass"] = "col-xs-12";
            // line 50
            echo "                ";
        }
        // line 51
        echo "
                <div class=\"row\">
                    ";
        // line 53
        if (((isset($context["acceptButton"]) ? $context["acceptButton"] : $this->getContext($context, "acceptButton")) == true)) {
            // line 54
            echo "                        <div class=\"";
            echo twig_escape_filter($this->env, (isset($context["cssButtonClass"]) ? $context["cssButtonClass"] : $this->getContext($context, "cssButtonClass")), "html", null, true);
            echo "\">
                            ";
            // line 55
            $this->loadTemplate("VODBaseBundle:Components/Modal:accept-button.html.twig", "VODBaseBundle:Components/Modal:generic-modal.html.twig", 55)->display(array_merge($context, array("buttonText" =>             // line 56
(isset($context["acceptButtonText"]) ? $context["acceptButtonText"] : $this->getContext($context, "acceptButtonText")), "action" => (isset($context["acceptButtonAction"]) ? $context["acceptButtonAction"] : $this->getContext($context, "acceptButtonAction")))));
            // line 57
            echo "                        </div>
                    ";
        }
        // line 59
        echo "                    ";
        if (((isset($context["cancelButton"]) ? $context["cancelButton"] : $this->getContext($context, "cancelButton")) == true)) {
            // line 60
            echo "                        <div class=\"";
            echo twig_escape_filter($this->env, (isset($context["cssButtonClass"]) ? $context["cssButtonClass"] : $this->getContext($context, "cssButtonClass")), "html", null, true);
            echo "\">
                            ";
            // line 61
            $this->loadTemplate("VODBaseBundle:Components/Modal:cancel-button.html.twig", "VODBaseBundle:Components/Modal:generic-modal.html.twig", 61)->display(array_merge($context, array("buttonText" =>             // line 62
(isset($context["cancelButtonText"]) ? $context["cancelButtonText"] : $this->getContext($context, "cancelButtonText")), "action" => (isset($context["cancelButtonAction"]) ? $context["cancelButtonAction"] : $this->getContext($context, "cancelButtonAction")))));
            // line 63
            echo "                        </div>
                    ";
        }
        // line 65
        echo "                </div>
            </div>
        </div>
    </div>
</div>";
        
        $__internal_653a7e79968b5bdd269fe1eed57d23a05a80dc67270af9b6a97790d9e14e872c->leave($__internal_653a7e79968b5bdd269fe1eed57d23a05a80dc67270af9b6a97790d9e14e872c_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Components/Modal:generic-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 65,  129 => 63,  127 => 62,  126 => 61,  121 => 60,  118 => 59,  114 => 57,  112 => 56,  111 => 55,  106 => 54,  104 => 53,  100 => 51,  97 => 50,  94 => 49,  91 => 48,  89 => 47,  82 => 43,  76 => 40,  68 => 35,  65 => 34,  61 => 21,  57 => 19,  55 => 18,  51 => 16,  49 => 15,  45 => 13,  43 => 12,  39 => 10,  37 => 9,  33 => 7,  31 => 6,  27 => 4,  25 => 3,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'modal' %}

{% if m is not defined %}
    {% set crazyTitle = '' %}
{% endif %}
{% if crazyText is not defined %}
    {% set crazyText = '' %}
{% endif %}
{% if acceptButtonAction is not defined %}
    {% set acceptButtonAction = path('homepage') %}
{% endif %}
{% if cancelButtonAction is not defined %}
    {% set cancelButtonAction = path('homepage') %}
{% endif %}
{% if acceptButtonText is not defined %}
    {% set acceptButtonText = 'common.buttons.accept' %}
{% endif %}
{% if cancelButtonText is not defined %}
    {% set cancelButtonText = 'common.buttons.cancel' %}
{% endif %}


{#
como utilizar el modal:
 1. Lo incluimos en un twig que queramos utilizarlo:
    {% include 'VODBaseBundle:Components/Modal:generic-modal.html.twig' with
    {'crazyId': 'tincho-modal', 'crazyTitle': 'Tincho modal', 'crazyText': 'Tincho text', 'acceptButton': false,
    'acceptButtonAction': path('homepage'), 'cancelButton': false, 'cancelButtonAction': path('homepage'),
    'acceptButtonText': 'Aceptar', 'cancelButtonText': 'Cancelar' } %}
 2. Agregamos el código javascript al block correspondiente, con el ID que le enviamos como parámetro:
    \$('#tincho-modal').modal('show');
 3. Disfrutamos de la magía del generic-modal!
#}

<div class=\"modal fade\" id=\"{{ crazyId }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-body text-center\">
                <button type=\"button\" class=\"btn-close  btn btn-rounded\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">X</span></button>
                <h2 class=\"item-title\">{{ crazyTitle }}</h2>
                <div class=\"row\">
                    <div class=\"col-xs-12\">
                        <p id=\"modal-text\">{{ crazyText | trans |raw }}</p>
                    </div>
                </div>
                <br />
                {% set cssButtonClass = 'col-xs-6' %}
                {% if acceptButton == false or cancelButton == false %}
                    {% set cssButtonClass = 'col-xs-12' %}
                {% endif %}

                <div class=\"row\">
                    {% if acceptButton == true %}
                        <div class=\"{{ cssButtonClass }}\">
                            {% include 'VODBaseBundle:Components/Modal:accept-button.html.twig'
                            with {'buttonText': acceptButtonText, 'action': acceptButtonAction} %}
                        </div>
                    {% endif %}
                    {% if cancelButton == true %}
                        <div class=\"{{ cssButtonClass }}\">
                            {% include 'VODBaseBundle:Components/Modal:cancel-button.html.twig'
                            with {'buttonText': cancelButtonText, 'action': cancelButtonAction} %}
                        </div>
                    {% endif %}
                </div>
            </div>
        </div>
    </div>
</div>", "VODBaseBundle:Components/Modal:generic-modal.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/Components/Modal/generic-modal.html.twig");
    }
}
