<?php

/* VODBaseBundle:Components/Carousel:carousel-mock.html.twig */
class __TwigTemplate_149d5b369025c79a6a6f1fa2a4d7bc1350d0731bf2bd957239da946f205f3b9f extends Twig_Template
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
        $__internal_a216c7af0c0911c1f62052067ca6bd23445510339d12bac2977b40aa17c49e3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a216c7af0c0911c1f62052067ca6bd23445510339d12bac2977b40aa17c49e3a->enter($__internal_a216c7af0c0911c1f62052067ca6bd23445510339d12bac2977b40aa17c49e3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Components/Carousel:carousel-mock.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 2
            echo "    <div class=\"item-wrapper\">
        <div class=\"item-link\">
            <div class=\"item-img loading\">
                <img src=\"";
            // line 5
            echo twig_escape_filter($this->env, ((isset($context["cdn_url"]) ? $context["cdn_url"] : $this->getContext($context, "cdn_url")) . "/images/transparent-pixel.png"), "html", null, true);
            echo "\" alt=\"\"/>
            </div>
        </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_a216c7af0c0911c1f62052067ca6bd23445510339d12bac2977b40aa17c49e3a->leave($__internal_a216c7af0c0911c1f62052067ca6bd23445510339d12bac2977b40aa17c49e3a_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Components/Carousel:carousel-mock.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  26 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for i in 0..9 %}
    <div class=\"item-wrapper\">
        <div class=\"item-link\">
            <div class=\"item-img loading\">
                <img src=\"{{ cdn_url~'/images/transparent-pixel.png' }}\" alt=\"\"/>
            </div>
        </div>
    </div>
{% endfor %}", "VODBaseBundle:Components/Carousel:carousel-mock.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/Components/Carousel/carousel-mock.html.twig");
    }
}
