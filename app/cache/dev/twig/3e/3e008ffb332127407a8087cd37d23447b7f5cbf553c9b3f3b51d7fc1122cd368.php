<?php

/* VODBaseBundle:Components/Carousel:home-carousel.html.twig */
class __TwigTemplate_1bd8d88cdab8cc2ca8ae70034a38f9ff5b1756238e977b941e53de28f9e41386 extends Twig_Template
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
        $__internal_b05b88eb5d25396c71cd2e5f0b86c467d94efe53d161851428d0a4658e765cef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b05b88eb5d25396c71cd2e5f0b86c467d94efe53d161851428d0a4658e765cef->enter($__internal_b05b88eb5d25396c71cd2e5f0b86c467d94efe53d161851428d0a4658e765cef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Components/Carousel:home-carousel.html.twig"));

        // line 2
        if ( !array_key_exists("isMobile", $context)) {
            // line 3
            echo "    ";
            $context["isMobile"] = $this->env->getExtension('SunCat\MobileDetectBundle\Twig\Extension\MobileDetectExtension')->isMobile();
        }
        // line 5
        if ( !array_key_exists("isTablet", $context)) {
            // line 6
            echo "    ";
            $context["isTablet"] = $this->env->getExtension('SunCat\MobileDetectBundle\Twig\Extension\MobileDetectExtension')->isTablet();
        }
        // line 8
        echo "
";
        // line 11
        echo "    ";
        // line 13
        echo "
";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["carousel"]) {
            // line 15
            echo "    ";
            if ($this->getAttribute($context["carousel"], "content", array(), "any", true, true)) {
                // line 16
                echo "        ";
                if (call_user_func_array($this->env->getTest('FeaturedCriteria')->getCallable(), array($context["carousel"]))) {
                    // line 17
                    echo "            ";
                    $this->loadTemplate("VODBaseBundle:Components/Carousel:carousel.html.twig", "VODBaseBundle:Components/Carousel:home-carousel.html.twig", 17)->display(array_merge($context, array("dataLocation" => "home", "dataRow" => $this->getAttribute($context["loop"], "index0", array()))));
                    // line 18
                    echo "        ";
                }
                // line 19
                echo "        ";
                if (((call_user_func_array($this->env->getTest('Channel')->getCallable(), array($context["carousel"])) && (false == $this->getAttribute($context["carousel"], "isDeleted", array()))) && ($this->getAttribute($this->getAttribute($context["carousel"], "content", array()), "count", array()) > 0))) {
                    // line 20
                    echo "            ";
                    $this->loadTemplate("VODBaseBundle:Components/Carousel:carousel-channels.html.twig", "VODBaseBundle:Components/Carousel:home-carousel.html.twig", 20)->display(array_merge($context, array("channel" => $context["carousel"], "dataLocation" => "home", "dataRow" => $this->getAttribute($context["loop"], "index0", array()))));
                    // line 21
                    echo "        ";
                }
                // line 22
                echo "\t";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['carousel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_b05b88eb5d25396c71cd2e5f0b86c467d94efe53d161851428d0a4658e765cef->leave($__internal_b05b88eb5d25396c71cd2e5f0b86c467d94efe53d161851428d0a4658e765cef_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Components/Carousel:home-carousel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 22,  77 => 21,  74 => 20,  71 => 19,  68 => 18,  65 => 17,  62 => 16,  59 => 15,  42 => 14,  39 => 13,  37 => 11,  34 => 8,  30 => 6,  28 => 5,  24 => 3,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Esto se realiza acá para no hacerlo dentro del for y hacer lo mismo N cantidad de veces #}
{% if isMobile is not defined %}
    {% set isMobile = is_mobile() %}
{% endif %}
{% if isTablet is not defined %}
    {% set isTablet = is_tablet() %}
{% endif %}

{# http://redmine.qubit.tv/issues/21639. 18/08/2016 SOLO EN QUBIT CROSS COUNTRY (POR AHORA) #}
{#{% if directors is defined %}#}
    {#{% include 'VODBaseBundle:Components/Carousel:directors-carousel.html.twig' %}#}
{#{% endif %}#}

{% for carousel in content %}
    {% if carousel.content is defined %}
        {% if carousel is FeaturedCriteria %}
            {% include 'VODBaseBundle:Components/Carousel:carousel.html.twig' with {'dataLocation': 'home', 'dataRow': loop.index0} %}
        {% endif %}
        {% if carousel is Channel and false == carousel.isDeleted and carousel.content.count > 0 %}
            {% include 'VODBaseBundle:Components/Carousel:carousel-channels.html.twig' with {'channel': carousel, 'dataLocation': 'home', 'dataRow': loop.index0} %}
        {% endif %}
\t{% endif %}
{% endfor %}", "VODBaseBundle:Components/Carousel:home-carousel.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/Components/Carousel/home-carousel.html.twig");
    }
}
