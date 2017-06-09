<?php

/* VODBaseBundle:Components/Carousel:carousel-item.html.twig */
class __TwigTemplate_78439751d260030c93642b35f90ce04ca3bfc0b856bf42f5788c621514ac6797 extends Twig_Template
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
        $__internal_8b248759d14fafb65cbcb987ded50711a44cbdd7d98af12ce1059c9df2a3cd3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b248759d14fafb65cbcb987ded50711a44cbdd7d98af12ce1059c9df2a3cd3b->enter($__internal_8b248759d14fafb65cbcb987ded50711a44cbdd7d98af12ce1059c9df2a3cd3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Components/Carousel:carousel-item.html.twig"));

        // line 2
        echo "
";
        // line 3
        if ( !array_key_exists("dataLocation", $context)) {
            // line 4
            echo "    ";
            $context["dataLocation"] = "home";
        }
        // line 6
        echo "
";
        // line 7
        $context["doubleItem"] = "";
        // line 8
        if (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "highlight", array()) == true)) {
            // line 9
            echo "    ";
            $context["doubleItem"] = "_doble";
        }
        // line 11
        echo "
";
        // line 12
        if (array_key_exists("itemIndex", $context)) {
            // line 13
            echo "    ";
            $context["itemPath"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->env->getExtension('VOD\BaseBundle\Services\Twig\AppExtension')->contentRoute($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "baseContentType", array())), array("uuid" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "uuid", array()), "slug" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "vodSlug", array()), "index" => (isset($context["itemIndex"]) ? $context["itemIndex"] : $this->getContext($context, "itemIndex")), "carousel" => (isset($context["channeltitle"]) ? $context["channeltitle"] : $this->getContext($context, "channeltitle"))));
        } else {
            // line 15
            echo "    ";
            $context["itemPath"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->env->getExtension('VOD\BaseBundle\Services\Twig\AppExtension')->contentRoute($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "baseContentType", array())), array("uuid" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "uuid", array()), "slug" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "vodSlug", array())));
        }
        // line 17
        echo "
";
        // line 18
        $context["popoverButtonText"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.buttons.watch", array(), "common");
        // line 19
        if ((( !$this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "statusComercial", array()) == "premium")) || ((((        // line 20
array_key_exists("contentStatus", $context) &&  !(null === (isset($context["contentStatus"]) ? $context["contentStatus"] : $this->getContext($context, "contentStatus")))) && ($this->getAttribute((isset($context["contentStatus"]) ? $context["contentStatus"] : $this->getContext($context, "contentStatus")), "paid", array()) == false)) && $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "hasPaidProduct", array())))) {
            // line 21
            echo "    ";
            $context["price"] = ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.currency_symbol", array(), "common") . twig_number_format_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "price", array()), (isset($context["currency_decimals"]) ? $context["currency_decimals"] : $this->getContext($context, "currency_decimals")), ",", "."));
            // line 22
            echo "    ";
            $context["popoverButtonText"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("content.detail.rent_for", array("%price%" => (isset($context["price"]) ? $context["price"] : $this->getContext($context, "price"))), "content");
        }
        // line 24
        echo "
";
        // line 25
        $context["favorite"] = false;
        // line 26
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 27
            echo "    ";
            if (((array_key_exists("contentStatus", $context) &&  !(null === (isset($context["contentStatus"]) ? $context["contentStatus"] : $this->getContext($context, "contentStatus")))) && ((isset($context["contentStatus"]) ? $context["contentStatus"] : $this->getContext($context, "contentStatus")) != false))) {
                // line 28
                echo "        ";
                $context["favorite"] = ((($this->getAttribute((isset($context["contentStatus"]) ? $context["contentStatus"] : $this->getContext($context, "contentStatus")), "favorite", array()) == true)) ? ("1") : ("0"));
                // line 29
                echo "    ";
            }
        }
        // line 31
        echo "
";
        // line 32
        if ((($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", true, true) && ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) == null)) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "activeProfile", array()), "class", array()), "limitValue", array()) >= $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "rated", array())))) {
            // line 33
            echo "    <div data-location=\"";
            echo twig_escape_filter($this->env, (isset($context["dataLocation"]) ? $context["dataLocation"] : $this->getContext($context, "dataLocation")), "html", null, true);
            echo "\" class=\"item-wrapper item-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id", array()), "html", null, true);
            echo " item";
            echo twig_escape_filter($this->env, (isset($context["doubleItem"]) ? $context["doubleItem"] : $this->getContext($context, "doubleItem")), "html", null, true);
            echo "\" data-uuid=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "uuid", array()), "html", null, true);
            echo "\" data-runtime=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "runtime", array()), "html", null, true);
            echo "\"
         data-content-title=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "title", array()), "html", null, true);
            echo "\"
         data-audio-tracks=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "audioTracks", array()), "html", null, true);
            echo "\"
         data-aired-from=\"";
            // line 36
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "airedFrom", array()), "Y"), "html", null, true);
            echo "\"
         data-summary=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "shortSummary", array()), "html", null, true);
            echo "\"
         data-slug=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "vodSlug", array()), "html", null, true);
            echo "\"
         data-available-hd=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "availableHD", array()), "html", null, true);
            echo "\"
         data-rated=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "rated", array()), "html", null, true);
            echo "\"
         data-genres=\"";
            // line 41
            echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "genres", array()), array("," => ", ")), "html", null, true);
            echo "\"
         data-directors=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "directorsString", array()), "html", null, true);
            echo "\"
         data-stars=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "starsString", array()), "html", null, true);
            echo "\"
         data-subtitled=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "subtitled", array()), "html", null, true);
            echo "\"
         data-link=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->env->getExtension('VOD\BaseBundle\Services\Twig\AppExtension')->contentRoute($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "baseContentType", array())), array("uuid" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "uuid", array()), "slug" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "vodSlug", array())))), "html", null, true);
            echo "\"
         data-ranking=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "ranking", array()), "html", null, true);
            echo "\"
         data-button-text=\"";
            // line 47
            echo twig_escape_filter($this->env, (isset($context["popoverButtonText"]) ? $context["popoverButtonText"] : $this->getContext($context, "popoverButtonText")), "html", null, true);
            echo "\"
         data-favorite=\"";
            // line 48
            echo twig_escape_filter($this->env, (isset($context["favorite"]) ? $context["favorite"] : $this->getContext($context, "favorite")), "html", null, true);
            echo "\"
    >
         <a class=\"item-link\" href=\"";
            // line 50
            echo twig_escape_filter($this->env, (isset($context["itemPath"]) ? $context["itemPath"] : $this->getContext($context, "itemPath")), "html", null, true);
            echo "\">
            ";
            // line 51
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "statusComercial", array()) == "premium")) {
                // line 52
                echo "                <span class=\"label label-status\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("content.premium", array(), "content"), "html", null, true);
                echo "</span>
            ";
            }
            // line 54
            echo "
            ";
            // line 55
            $this->loadTemplate("VODBaseBundle:Components/Carousel:item-image.html.twig", "VODBaseBundle:Components/Carousel:carousel-item.html.twig", 55)->display(array_merge($context, array("item" => (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")))));
            // line 56
            echo "
            <div class=\"progress\" ";
            // line 57
            if ( !(($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "viewed", array()) > 0) && ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "currentTime", array()) > 0))) {
                echo " style=\"display:none\" ";
            }
            echo ">
                <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "porcentualView", array()), "html", null, true);
            echo "%;\">
                    ";
            // line 59
            if (( !(null === $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "viewed", array())) &&  !(null === $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "currentTime", array())))) {
                // line 60
                echo "                        <span class=\"sr-only\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "porcentualView", array()), "html", null, true);
                echo "% Complete</span>
                    ";
            }
            // line 62
            echo "                </div>
            </div>
        </a>

        ";
            // line 66
            if (( !(isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile")) &&  !(isset($context["is_tablet"]) ? $context["is_tablet"] : $this->getContext($context, "is_tablet")))) {
                // line 67
                echo "            ";
                if (array_key_exists("itemIndex", $context)) {
                    // line 68
                    echo "                <a href=\"#\" class=\"item-play\" data-uuid=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "uuid", array()), "html", null, true);
                    echo "\" data-location=\"";
                    echo twig_escape_filter($this->env, (isset($context["dataLocation"]) ? $context["dataLocation"] : $this->getContext($context, "dataLocation")), "html", null, true);
                    echo "\" data-index=\"";
                    echo twig_escape_filter($this->env, (isset($context["itemIndex"]) ? $context["itemIndex"] : $this->getContext($context, "itemIndex")), "html", null, true);
                    echo "\" data-carousel=\"";
                    echo twig_escape_filter($this->env, (isset($context["channeltitle"]) ? $context["channeltitle"] : $this->getContext($context, "channeltitle")), "html", null, true);
                    echo "\">
            ";
                } else {
                    // line 70
                    echo "                <a href=\"#\" class=\"item-play\" data-uuid=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "uuid", array()), "html", null, true);
                    echo "\" data-location=\"";
                    echo twig_escape_filter($this->env, (isset($context["dataLocation"]) ? $context["dataLocation"] : $this->getContext($context, "dataLocation")), "html", null, true);
                    echo "\">
            ";
                }
                // line 72
                echo "            <span class=\"fa-stack\">
                <i class=\"fa fa-play fa-inverse\"></i>
                <i class=\"fa fa-2x fa-spinner fa-pulse\" style=\"display:none\"></i>
            </span>
        </a>
        ";
            }
            // line 78
            echo "
        <meta content=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "airedFrom", array()), "html", null, true);
            echo "\" />
        ";
            // line 80
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "directors", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["director"]) {
                // line 81
                echo "            <meta content=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["director"], "name", array()), "html", null, true);
                echo "\" />
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['director'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "    </div>
";
        }
        
        $__internal_8b248759d14fafb65cbcb987ded50711a44cbdd7d98af12ce1059c9df2a3cd3b->leave($__internal_8b248759d14fafb65cbcb987ded50711a44cbdd7d98af12ce1059c9df2a3cd3b_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Components/Carousel:carousel-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 83,  254 => 81,  250 => 80,  246 => 79,  243 => 78,  235 => 72,  227 => 70,  215 => 68,  212 => 67,  210 => 66,  204 => 62,  198 => 60,  196 => 59,  192 => 58,  186 => 57,  183 => 56,  181 => 55,  178 => 54,  172 => 52,  170 => 51,  166 => 50,  161 => 48,  157 => 47,  153 => 46,  149 => 45,  145 => 44,  141 => 43,  137 => 42,  133 => 41,  129 => 40,  125 => 39,  121 => 38,  117 => 37,  113 => 36,  109 => 35,  105 => 34,  92 => 33,  90 => 32,  87 => 31,  83 => 29,  80 => 28,  77 => 27,  75 => 26,  73 => 25,  70 => 24,  66 => 22,  63 => 21,  61 => 20,  60 => 19,  58 => 18,  55 => 17,  51 => 15,  47 => 13,  45 => 12,  42 => 11,  38 => 9,  36 => 8,  34 => 7,  31 => 6,  27 => 4,  25 => 3,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'content' %}

{% if dataLocation is not defined %}
    {% set dataLocation = 'home' %}
{% endif %}

{% set doubleItem = '' %}
{% if item.highlight == true %}
    {% set doubleItem = '_doble' %}
{% endif %}

{% if itemIndex is defined %}
    {% set itemPath = path(contentRoute(item.baseContentType), {'uuid': item.uuid, 'slug': item.vodSlug, 'index': itemIndex, 'carousel': channeltitle}) %}
{% else %}
    {% set itemPath = path(contentRoute(item.baseContentType), {'uuid': item.uuid, 'slug': item.vodSlug}) %}
{% endif %}

{% set popoverButtonText = 'common.buttons.watch' | trans({}, 'common') %}
{% if (not app.user and item.statusComercial == 'premium') or
        (contentStatus is defined and contentStatus is not null and contentStatus.paid == false and app.user and app.user.hasPaidProduct) %}
    {% set price = 'common.currency_symbol' | trans({}, 'common') ~ item.price|number_format(currency_decimals, ',', '.') %}
    {% set popoverButtonText = 'content.detail.rent_for' | trans({'%price%': price}) %}
{% endif %}

{% set favorite = false %}
{% if app.user %}
    {% if contentStatus is defined and contentStatus is not null and contentStatus != false %}
        {% set favorite = (contentStatus.favorite == true) ? '1' : '0' %}
    {% endif %}
{% endif %}

{% if (app.user is defined and app.user == null) or app.user.activeProfile.class.limitValue >= item.rated %}
    <div data-location=\"{{ dataLocation }}\" class=\"item-wrapper item-{{ item.id }} item{{doubleItem}}\" data-uuid=\"{{ item.uuid }}\" data-runtime=\"{{ item.runtime }}\"
         data-content-title=\"{{ item.title }}\"
         data-audio-tracks=\"{{ item.audioTracks }}\"
         data-aired-from=\"{{ item.airedFrom |date('Y') }}\"
         data-summary=\"{{ item.shortSummary }}\"
         data-slug=\"{{ item.vodSlug }}\"
         data-available-hd=\"{{ item.availableHD }}\"
         data-rated=\"{{ item.rated }}\"
         data-genres=\"{{ item.genres | replace({',': ', '})}}\"
         data-directors=\"{{ item.directorsString }}\"
         data-stars=\"{{ item.starsString }}\"
         data-subtitled=\"{{ item.subtitled }}\"
         data-link=\"{{ absolute_url(path(contentRoute(item.baseContentType), {'uuid': item.uuid, 'slug': item.vodSlug})) }}\"
         data-ranking=\"{{ item.ranking }}\"
         data-button-text=\"{{ popoverButtonText }}\"
         data-favorite=\"{{ favorite }}\"
    >
         <a class=\"item-link\" href=\"{{ itemPath }}\">
            {% if item.statusComercial == 'premium' %}
                <span class=\"label label-status\">{{ 'content.premium' | trans }}</span>
            {% endif %}

            {% include 'VODBaseBundle:Components/Carousel:item-image.html.twig' with {'item': item}%}

            <div class=\"progress\" {% if not (item.viewed > 0 and item.currentTime > 0) %} style=\"display:none\" {% endif %}>
                <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: {{ item.porcentualView }}%;\">
                    {% if item.viewed is not null and item.currentTime is not null %}
                        <span class=\"sr-only\">{{ item.porcentualView }}% Complete</span>
                    {% endif %}
                </div>
            </div>
        </a>

        {% if not is_mobile and not is_tablet %}
            {% if itemIndex is defined %}
                <a href=\"#\" class=\"item-play\" data-uuid=\"{{ item.uuid }}\" data-location=\"{{ dataLocation }}\" data-index=\"{{ itemIndex}}\" data-carousel=\"{{ channeltitle }}\">
            {% else %}
                <a href=\"#\" class=\"item-play\" data-uuid=\"{{ item.uuid }}\" data-location=\"{{ dataLocation }}\">
            {% endif %}
            <span class=\"fa-stack\">
                <i class=\"fa fa-play fa-inverse\"></i>
                <i class=\"fa fa-2x fa-spinner fa-pulse\" style=\"display:none\"></i>
            </span>
        </a>
        {% endif %}

        <meta content=\"{{ item.airedFrom }}\" />
        {% for director in item.directors %}
            <meta content=\"{{ director.name }}\" />
        {% endfor %}
    </div>
{% endif %}
", "VODBaseBundle:Components/Carousel:carousel-item.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/Components/Carousel/carousel-item.html.twig");
    }
}
