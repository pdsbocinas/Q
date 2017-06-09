<?php

/* VODBaseBundle:Components/Banner:catfish.html.twig */
class __TwigTemplate_6cc0cbb1c8ac5dfe299772848e86d7710e6b98025874862627fefd419eaa01a3 extends Twig_Template
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
        $__internal_0a67c3b13c26698d3b42a7acb1529d565b3b72ae28cc45cf5f1454717da201d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a67c3b13c26698d3b42a7acb1529d565b3b72ae28cc45cf5f1454717da201d9->enter($__internal_0a67c3b13c26698d3b42a7acb1529d565b3b72ae28cc45cf5f1454717da201d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Components/Banner:catfish.html.twig"));

        // line 2
        echo "
<div class=\"alert alert-success catfish\" role=\"alert\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
        <span aria-hidden=\"true\">&times;</span>
    </button>
    <div class=\"active-area\" rel=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("registration");
        echo "\">
        <div class=\"col-xs-6 col-md-8\">
            <div class=\"row\">
                ";
        // line 10
        if ((isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
            // line 11
            echo "                    ";
            $context["text"] = "catfish.smartphone_info";
            // line 12
            echo "                ";
        }
        // line 13
        echo "                ";
        if ((isset($context["is_tablet"]) ? $context["is_tablet"] : $this->getContext($context, "is_tablet"))) {
            // line 14
            echo "                        ";
            $context["text"] = "catfish.tablet_info";
            // line 15
            echo "                ";
        }
        // line 16
        echo "                <p>";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), array(), "catfish");
        echo "</p>
            </div>
        </div>
        <div class=\"col-xs-6 col-md-4\">
            ";
        // line 20
        $context["route"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("registration");
        // line 21
        echo "            ";
        $context["class"] = "btn-outline btn-default-outline";
        // line 22
        echo "            
            <a href=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), "html", null, true);
        echo "\" class=\"";
        echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("catfish.subscribe_button", array(), "catfish"), "html", null, true);
        echo "</a>
        </div>
    </div>
</div>";
        
        $__internal_0a67c3b13c26698d3b42a7acb1529d565b3b72ae28cc45cf5f1454717da201d9->leave($__internal_0a67c3b13c26698d3b42a7acb1529d565b3b72ae28cc45cf5f1454717da201d9_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Components/Banner:catfish.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 23,  65 => 22,  62 => 21,  60 => 20,  52 => 16,  49 => 15,  46 => 14,  43 => 13,  40 => 12,  37 => 11,  35 => 10,  29 => 7,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'catfish' %}

<div class=\"alert alert-success catfish\" role=\"alert\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
        <span aria-hidden=\"true\">&times;</span>
    </button>
    <div class=\"active-area\" rel=\"{{ path('registration') }}\">
        <div class=\"col-xs-6 col-md-8\">
            <div class=\"row\">
                {% if is_mobile %}
                    {% set text = 'catfish.smartphone_info' %}
                {% endif %}
                {% if is_tablet %}
                        {% set text = 'catfish.tablet_info' %}
                {% endif %}
                <p>{{ text | trans | raw }}</p>
            </div>
        </div>
        <div class=\"col-xs-6 col-md-4\">
            {% set route = path('registration') %}
            {% set class = 'btn-outline btn-default-outline' %}
            
            <a href=\"{{ route }}\" class=\"{{ class }}\">{{ 'catfish.subscribe_button' | trans }}</a>
        </div>
    </div>
</div>", "VODBaseBundle:Components/Banner:catfish.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/Components/Banner/catfish.html.twig");
    }
}
