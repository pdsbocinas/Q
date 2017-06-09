<?php

/* VODBaseBundle:Components/Carousel:carousel-channels.html.twig */
class __TwigTemplate_e608dc3bb9f0b21c19f46de4dbd34bd94392ec3c4067a2b717dda6090e6a1e41 extends Twig_Template
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
        $__internal_736ec7c65a0b3c876782d1a2ee9506283949f00546a84700ae9813afdd4a4690 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_736ec7c65a0b3c876782d1a2ee9506283949f00546a84700ae9813afdd4a4690->enter($__internal_736ec7c65a0b3c876782d1a2ee9506283949f00546a84700ae9813afdd4a4690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Components/Carousel:carousel-channels.html.twig"));

        // line 1
        echo "<div class=\"panel panel-default channel-carousel\" style=\"background-image: url('";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["channel"]) ? $context["channel"] : $this->getContext($context, "channel")), "backgroundImage", array()), "html", null, true);
        echo "'); background-repeat:no-repeat; background-size:100% 100%;\"
\t data-row=\"";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["dataRow"]) ? $context["dataRow"] : $this->getContext($context, "dataRow")), "html", null, true);
        echo "\">
\t<div class=\"carousel-heading\">
\t\t<div class=\"col-xs-12\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xs-12 col-sm-6\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<h2 class=\"carousel-title text-left\"><a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("channel", array("uuid" => $this->getAttribute((isset($context["channel"]) ? $context["channel"] : $this->getContext($context, "channel")), "uuid", array()), "slug" => $this->getAttribute((isset($context["channel"]) ? $context["channel"] : $this->getContext($context, "channel")), "vodSlug", array()))), "html", null, true);
        echo "\">
\t\t\t\t\t\t";
        // line 9
        if (((isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile")) &&  !(isset($context["is_tablet"]) ? $context["is_tablet"] : $this->getContext($context, "is_tablet")))) {
            // line 10
            echo "\t\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, $this->env->getExtension('VOD\BaseBundle\Services\Twig\AppExtension')->getWordBreak($this->getAttribute((isset($context["channel"]) ? $context["channel"] : $this->getContext($context, "channel")), "title", array()), 6), "html", null, true);
            echo "
\t\t\t\t\t\t";
        } else {
            // line 12
            echo "\t\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["channel"]) ? $context["channel"] : $this->getContext($context, "channel")), "title", array()), "html", null, true);
            echo "
\t\t\t\t\t\t";
        }
        // line 13
        echo "</a></h2>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        // line 16
        if ( !(isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
            // line 17
            echo "\t\t\t\t<div class=\"col-xs-4 col-sm-6\">
\t\t\t\t\t<div class=\"text-right\">
\t\t\t\t\t\t<a class=\"btn-link btn-view-more\" href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("channel", array("uuid" => $this->getAttribute((isset($context["channel"]) ? $context["channel"] : $this->getContext($context, "channel")), "uuid", array()), "slug" => $this->getAttribute((isset($context["channel"]) ? $context["channel"] : $this->getContext($context, "channel")), "vodSlug", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.buttons.all_content", array(), "common"), "html", null, true);
            echo "
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        }
        // line 25
        echo "\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"clearfix\"></div>

\t ";
        // line 30
        if (( !(isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile")) || (isset($context["is_tablet"]) ? $context["is_tablet"] : $this->getContext($context, "is_tablet")))) {
            // line 31
            echo "\t<div class=\"title-channel-container\">
\t\t<div class=\"title-channel\">
\t\t\t<a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("channel_content_detail", array("uuid" => $this->getAttribute((isset($context["channel"]) ? $context["channel"] : $this->getContext($context, "channel")), "uuid", array()), "slug" => $this->getAttribute((isset($context["channel"]) ? $context["channel"] : $this->getContext($context, "channel")), "vodSlug", array()))), "html", null, true);
            echo "\">
\t\t\t<img src=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["channel"]) ? $context["channel"] : $this->getContext($context, "channel")), "coverBannerImage", array()), "html", null, true);
            echo "\"
\t\t\t\t alt=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["channel"]) ? $context["channel"] : $this->getContext($context, "channel")), "title", array()), "html", null, true);
            echo "\" class=\"img-responsive\">
\t\t\t</a>
\t\t</div>
\t</div>
\t";
        }
        // line 40
        echo "\t<div class=\"slick-channel-container\">
\t\t<div class=\"row\" data-row=\"";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["dataRow"]) ? $context["dataRow"] : $this->getContext($context, "dataRow")), "html", null, true);
        echo "\" id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["channel"]) ? $context["channel"] : $this->getContext($context, "channel")), "vodSlug", array()), "html", null, true);
        echo "\">
\t\t\t<div class=\"slick-channel\" data-page=\"1\">
\t\t\t\t";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["channel"]) ? $context["channel"] : $this->getContext($context, "channel")), "content", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 44
            echo "\t\t\t\t\t";
            // line 46
            echo "\t\t\t\t\t";
            if ((($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", true, true) && ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) == null)) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "activeProfile", array()), "class", array()), "limitValue", array()) >= $this->getAttribute($context["item"], "rated", array())))) {
                // line 47
                echo "\t\t\t\t\t\t";
                $this->loadTemplate("VODBaseBundle:Components/Carousel:carousel-item.html.twig", "VODBaseBundle:Components/Carousel:carousel-channels.html.twig", 47)->display(array_merge($context, array("dataLocation" => "home", "itemIndex" => $this->getAttribute($context["loop"], "index", array()), "channeltitle" => $this->getAttribute((isset($context["channel"]) ? $context["channel"] : $this->getContext($context, "channel")), "title", array()))));
                // line 48
                echo "\t\t\t\t\t";
            }
            // line 49
            echo "\t\t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"clearfix\"></div>
</div>";
        
        $__internal_736ec7c65a0b3c876782d1a2ee9506283949f00546a84700ae9813afdd4a4690->leave($__internal_736ec7c65a0b3c876782d1a2ee9506283949f00546a84700ae9813afdd4a4690_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Components/Carousel:carousel-channels.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 50,  144 => 49,  141 => 48,  138 => 47,  135 => 46,  133 => 44,  116 => 43,  109 => 41,  106 => 40,  98 => 35,  94 => 34,  90 => 33,  86 => 31,  84 => 30,  77 => 25,  69 => 20,  65 => 19,  61 => 17,  59 => 16,  54 => 13,  48 => 12,  42 => 10,  40 => 9,  36 => 8,  27 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"panel panel-default channel-carousel\" style=\"background-image: url('{{ channel.backgroundImage }}'); background-repeat:no-repeat; background-size:100% 100%;\"
\t data-row=\"{{ dataRow }}\">
\t<div class=\"carousel-heading\">
\t\t<div class=\"col-xs-12\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xs-12 col-sm-6\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<h2 class=\"carousel-title text-left\"><a href=\"{{ path('channel',{'uuid': channel.uuid, 'slug': channel.vodSlug})}}\">
\t\t\t\t\t\t{% if is_mobile and not is_tablet %}
\t\t\t\t\t\t\t{{ getWordBreak(channel.title, 6) }}
\t\t\t\t\t\t{% else  %}
\t\t\t\t\t\t\t{{ channel.title }}
\t\t\t\t\t\t{% endif %}</a></h2>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t{% if not is_mobile %}
\t\t\t\t<div class=\"col-xs-4 col-sm-6\">
\t\t\t\t\t<div class=\"text-right\">
\t\t\t\t\t\t<a class=\"btn-link btn-view-more\" href=\"{{ path('channel',{'uuid': channel.uuid, 'slug': channel.vodSlug})}}\">
\t\t\t\t\t\t\t{{ 'common.buttons.all_content' | trans({}, 'common') }}
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"clearfix\"></div>

\t {% if not is_mobile or is_tablet %}
\t<div class=\"title-channel-container\">
\t\t<div class=\"title-channel\">
\t\t\t<a href=\"{{ path('channel_content_detail', {'uuid': channel.uuid, 'slug': channel.vodSlug})}}\">
\t\t\t<img src=\"{{ channel.coverBannerImage }}\"
\t\t\t\t alt=\"{{ channel.title }}\" class=\"img-responsive\">
\t\t\t</a>
\t\t</div>
\t</div>
\t{% endif %}
\t<div class=\"slick-channel-container\">
\t\t<div class=\"row\" data-row=\"{{ dataRow }}\" id=\"{{ channel.vodSlug }}\">
\t\t\t<div class=\"slick-channel\" data-page=\"1\">
\t\t\t\t{% for item in channel.content %}
\t\t\t\t\t{# Este if se realiza para validar que, si el usuario se encuentra logueado se muestren únicamente los contenidos con un rated
\t\t\t\t\t\tapropiado para el perfil activo. #}
\t\t\t\t\t{% if (app.user is defined and app.user == null) or app.user.activeProfile.class.limitValue >= item.rated %}
\t\t\t\t\t\t{% include 'VODBaseBundle:Components/Carousel:carousel-item.html.twig' with {'dataLocation': 'home', 'itemIndex' : loop.index, 'channeltitle': channel.title} %}
\t\t\t\t\t{% endif %}
\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"clearfix\"></div>
</div>", "VODBaseBundle:Components/Carousel:carousel-channels.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/Components/Carousel/carousel-channels.html.twig");
    }
}
