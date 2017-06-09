<?php

/* VODBaseBundle:Components:genres.html.twig */
class __TwigTemplate_0885a7b1605318bbd41b69da3b1b9010079ca784a91ea783fad5b9bd0d1c7563 extends Twig_Template
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
        $__internal_9c72733b367126bc46840439c7cfa0567b8db5a8f353d056a8a5da3734f02507 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c72733b367126bc46840439c7cfa0567b8db5a8f353d056a8a5da3734f02507->enter($__internal_9c72733b367126bc46840439c7cfa0567b8db5a8f353d056a8a5da3734f02507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Components:genres.html.twig"));

        // line 3
        $context["class"] = "genre-item";
        // line 4
        if (array_key_exists("cssClass", $context)) {
            // line 5
            echo "    ";
            $context["class"] = ("genre-item " . (isset($context["cssClass"]) ? $context["cssClass"] : $this->getContext($context, "cssClass")));
        }
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["genres"]) ? $context["genres"] : $this->getContext($context, "genres")));
        foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
            // line 8
            echo "    <a class=\"";
            echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
            echo "\" data-tag=\"";
            echo twig_escape_filter($this->env, $context["genre"], "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("content_genre_grid", array("genreSlug" => $this->getAttribute($context["genre"], "slug", array()))), "html", null, true);
            echo "\">
        <span class=\"label label-default btn-link_alter\">";
            // line 9
            echo twig_escape_filter($this->env, $context["genre"], "html", null, true);
            echo "</span>
    </a>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_9c72733b367126bc46840439c7cfa0567b8db5a8f353d056a8a5da3734f02507->leave($__internal_9c72733b367126bc46840439c7cfa0567b8db5a8f353d056a8a5da3734f02507_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Components:genres.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 9,  34 => 8,  30 => 7,  26 => 5,  24 => 4,  22 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# la clase genre-item está para bindear el evento click al género y redirigir a la grilla de géneros#}
{# la clase cssClass, si viene definida, viene de explore-tags.html.twig y tiene el valor de tag-item, con esa clase activo el trackeo de google analytics #}
{% set class = 'genre-item' %}
{% if cssClass is defined %}
    {% set class = 'genre-item ' ~ cssClass %}
{% endif %}
{% for genre in genres %}
    <a class=\"{{ class }}\" data-tag=\"{{ genre }}\" href=\"{{ path('content_genre_grid', {'genreSlug': genre.slug}) }}\">
        <span class=\"label label-default btn-link_alter\">{{ genre }}</span>
    </a>
{% endfor %}", "VODBaseBundle:Components:genres.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/Components/genres.html.twig");
    }
}
