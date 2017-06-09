<?php

/* VODBaseBundle:Components/Carousel:carousel.html.twig */
class __TwigTemplate_e7c2289d538caeabb5446865e4815f48b173ea93c32c220920458a74cf6fce01 extends Twig_Template
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
        $__internal_2518c7c032349a6c549c3ec2af60098ca3ef85fe56bc9ddee7e948bdff17bf1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2518c7c032349a6c549c3ec2af60098ca3ef85fe56bc9ddee7e948bdff17bf1f->enter($__internal_2518c7c032349a6c549c3ec2af60098ca3ef85fe56bc9ddee7e948bdff17bf1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Components/Carousel:carousel.html.twig"));

        // line 1
        if ( !array_key_exists("dataLocation", $context)) {
            // line 2
            echo "    ";
            $context["dataLocation"] = $this->getAttribute((isset($context["google_analytics_event_parameters"]) ? $context["google_analytics_event_parameters"] : $this->getContext($context, "google_analytics_event_parameters")), "home", array());
        }
        // line 4
        if ( !array_key_exists("dataRow", $context)) {
            // line 5
            echo "    ";
            $context["dataRow"] = 0;
        }
        // line 7
        echo "
";
        // line 9
        echo "
<div class=\"panel panel-default content-carousel\" data-row=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["dataRow"]) ? $context["dataRow"] : $this->getContext($context, "dataRow")), "html", null, true);
        echo "\" id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["carousel"]) ? $context["carousel"] : $this->getContext($context, "carousel")), "vodSlug", array()), "html", null, true);
        echo "\">
\t<div class=\"carousel-heading\">
\t\t<div class=\"col-xs-12\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xs-12 col-sm-6\">
\t\t\t\t\t<div class=\"row\">
                        <h2 class=\"carousel-title text-left\">
                            <a class=\"\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("content_featured_criteria_grid", array("featuredCriteriaSlug" => $this->getAttribute((isset($context["carousel"]) ? $context["carousel"] : $this->getContext($context, "carousel")), "vodSlug", array()))), "html", null, true);
        echo "\">
                                ";
        // line 18
        if (((isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile")) &&  !(isset($context["is_tablet"]) ? $context["is_tablet"] : $this->getContext($context, "is_tablet")))) {
            // line 19
            echo "                                   ";
            echo twig_escape_filter($this->env, $this->env->getExtension('VOD\BaseBundle\Services\Twig\AppExtension')->getWordBreak($this->getAttribute((isset($context["carousel"]) ? $context["carousel"] : $this->getContext($context, "carousel")), "description", array()), 6), "html", null, true);
            echo "
                                ";
        } else {
            // line 21
            echo "                                \t";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["carousel"]) ? $context["carousel"] : $this->getContext($context, "carousel")), "description", array()), "html", null, true);
            echo "
                                ";
        }
        // line 23
        echo "                            </a>
                        </h2>
\t\t\t\t\t</div>
\t\t\t\t</div>
                ";
        // line 27
        if ( !(isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
            // line 28
            echo "\t\t\t\t<div class=\"col-xs-4 col-sm-6\">
\t\t\t\t\t<div class=\"text-right\">
\t\t\t\t\t\t<a class=\"btn-link btn-view-more\" href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("content_featured_criteria_grid", array("featuredCriteriaSlug" => $this->getAttribute((isset($context["carousel"]) ? $context["carousel"] : $this->getContext($context, "carousel")), "vodSlug", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.buttons.all_content", array(), "common"), "html", null, true);
            echo "
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
                ";
        }
        // line 36
        echo "\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"clearfix\"></div>
    ";
        // line 40
        $context["condition"] = false;
        // line 41
        echo "    ";
        if (($this->getAttribute((isset($context["carousel"]) ? $context["carousel"] : $this->getContext($context, "carousel")), "searchCondition", array()) != false)) {
            // line 42
            echo "        ";
            $context["condition"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["carousel"]) ? $context["carousel"] : $this->getContext($context, "carousel")), "searchCondition", array()), "filter", array()), "external", array(), "array");
            // line 43
            echo "    ";
        }
        // line 44
        echo "    ";
        $context["personalized"] = ((($this->getAttribute((isset($context["carousel"]) ? $context["carousel"] : $this->getContext($context, "carousel")), "isPersonalized", array()) == 1)) ? (true) : (false));
        // line 45
        echo "    ";
        $context["params"] = array("name" => $this->getAttribute((isset($context["carousel"]) ? $context["carousel"] : $this->getContext($context, "carousel")), "name", array()), "criteria" => $this->getAttribute((isset($context["carousel"]) ? $context["carousel"] : $this->getContext($context, "carousel")), "searchCriteria", array()), "condition" => (isset($context["condition"]) ? $context["condition"] : $this->getContext($context, "condition")), "personalized" => (isset($context["personalized"]) ? $context["personalized"] : $this->getContext($context, "personalized")), "timestamp" => $this->getAttribute(twig_date_converter($this->env), "timestamp", array()), "apiSlug" => $this->getAttribute((isset($context["carousel"]) ? $context["carousel"] : $this->getContext($context, "carousel")), "apiSlug", array()));
        // line 46
        echo "    <div class=\"slick\"
         data-name=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["carousel"]) ? $context["carousel"] : $this->getContext($context, "carousel")), "vodSlug", array()), "html", null, true);
        echo "\"
\t\t data-apiSlug=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["carousel"]) ? $context["carousel"] : $this->getContext($context, "carousel")), "apiSlug", array()), "html", null, true);
        echo "\"
         data-criteria=\"";
        // line 49
        echo twig_escape_filter($this->env, (( !twig_test_empty($this->getAttribute((isset($context["carousel"]) ? $context["carousel"] : $this->getContext($context, "carousel")), "searchCriteria", array()))) ? ($this->getAttribute((isset($context["carousel"]) ? $context["carousel"] : $this->getContext($context, "carousel")), "searchCriteria", array())) : ("search_mix")), "html", null, true);
        echo "\"
         data-personalized=\"";
        // line 50
        if (((isset($context["personalized"]) ? $context["personalized"] : $this->getContext($context, "personalized")) == true)) {
            echo "true";
        } else {
            echo "false";
        }
        echo "\"
         data-logged=\"";
        // line 51
        if ($this->getAttribute((isset($context["carousel"]) ? $context["carousel"] : $this->getContext($context, "carousel")), "listStatus", array())) {
            echo " 1 ";
        } else {
            echo " 0 ";
        }
        echo "\"
\t\t data-status=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["carousel"]) ? $context["carousel"] : $this->getContext($context, "carousel")), "listStatus", array()), "html", null, true);
        echo "\"
         data-page=\"0\"
\t\t data-page-locked=\"0\"
         data-user-restriction=\"";
        // line 55
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "activeProfile", array()), "class", array()), "limitValue", array()), "html", null, true);
        } else {
            echo "5";
        }
        echo "\"
         data-hash=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('VOD\BaseBundle\Services\Twig\AppExtension')->encodeArrayUrl((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params"))), "html", null, true);
        echo " \">
\t\t\t";
        // line 57
        $this->loadTemplate("VODBaseBundle:Components/Carousel:carousel-mock.html.twig", "VODBaseBundle:Components/Carousel:carousel.html.twig", 57)->display($context);
        // line 58
        echo "\t</div>
</div>";
        
        $__internal_2518c7c032349a6c549c3ec2af60098ca3ef85fe56bc9ddee7e948bdff17bf1f->leave($__internal_2518c7c032349a6c549c3ec2af60098ca3ef85fe56bc9ddee7e948bdff17bf1f_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Components/Carousel:carousel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 58,  166 => 57,  162 => 56,  154 => 55,  148 => 52,  140 => 51,  132 => 50,  128 => 49,  124 => 48,  120 => 47,  117 => 46,  114 => 45,  111 => 44,  108 => 43,  105 => 42,  102 => 41,  100 => 40,  94 => 36,  86 => 31,  82 => 30,  78 => 28,  76 => 27,  70 => 23,  64 => 21,  58 => 19,  56 => 18,  52 => 17,  40 => 10,  37 => 9,  34 => 7,  30 => 5,  28 => 4,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if dataLocation is not defined %}
    {% set dataLocation = google_analytics_event_parameters.home %}
{% endif %}
{% if dataRow is not defined %}
    {% set dataRow = 0 %}
{% endif %}

{#% set carouselTitle = carousel.description | split(\" \")| join(\" \") %#}

<div class=\"panel panel-default content-carousel\" data-row=\"{{ dataRow }}\" id=\"{{ carousel.vodSlug }}\">
\t<div class=\"carousel-heading\">
\t\t<div class=\"col-xs-12\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xs-12 col-sm-6\">
\t\t\t\t\t<div class=\"row\">
                        <h2 class=\"carousel-title text-left\">
                            <a class=\"\" href=\"{{ path('content_featured_criteria_grid', {'featuredCriteriaSlug': carousel.vodSlug}) }}\">
                                {% if is_mobile and not is_tablet %}
                                   {{ getWordBreak(carousel.description, 6) }}
                                {% else  %}
                                \t{{ carousel.description }}
                                {% endif %}
                            </a>
                        </h2>
\t\t\t\t\t</div>
\t\t\t\t</div>
                {% if not is_mobile %}
\t\t\t\t<div class=\"col-xs-4 col-sm-6\">
\t\t\t\t\t<div class=\"text-right\">
\t\t\t\t\t\t<a class=\"btn-link btn-view-more\" href=\"{{ path('content_featured_criteria_grid', {'featuredCriteriaSlug': carousel.vodSlug}) }}\">
\t\t\t\t\t\t\t{{ 'common.buttons.all_content' | trans({}, 'common') }}
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
                {% endif %}
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"clearfix\"></div>
    {% set condition = false %}
    {% if carousel.searchCondition != false %}
        {% set condition = carousel.searchCondition.filter['external'] %}
    {% endif %}
    {% set personalized = (carousel.isPersonalized == 1) ? true : false %}
    {% set params = {'name': carousel.name, 'criteria': carousel.searchCriteria , 'condition': condition , 'personalized': personalized , 'timestamp': date().timestamp, 'apiSlug': carousel.apiSlug} %}
    <div class=\"slick\"
         data-name=\"{{ carousel.vodSlug }}\"
\t\t data-apiSlug=\"{{ carousel.apiSlug }}\"
         data-criteria=\"{{ carousel.searchCriteria is not empty ? carousel.searchCriteria : 'search_mix' }}\"
         data-personalized=\"{% if personalized == true %}true{% else %}false{% endif %}\"
         data-logged=\"{% if carousel.listStatus %} 1 {% else %} 0 {% endif %}\"
\t\t data-status=\"{{carousel.listStatus}}\"
         data-page=\"0\"
\t\t data-page-locked=\"0\"
         data-user-restriction=\"{% if app.user %}{{ app.user.activeProfile.class.limitValue }}{% else %}5{% endif %}\"
         data-hash=\"{{ encodeArrayUrl(params)}} \">
\t\t\t{% include 'VODBaseBundle:Components/Carousel:carousel-mock.html.twig' %}
\t</div>
</div>", "VODBaseBundle:Components/Carousel:carousel.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/Components/Carousel/carousel.html.twig");
    }
}
