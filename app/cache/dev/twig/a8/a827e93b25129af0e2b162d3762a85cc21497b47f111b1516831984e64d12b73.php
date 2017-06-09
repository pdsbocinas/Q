<?php

/* VODBaseBundle:Content:popover-ranking-imdb.html.twig */
class __TwigTemplate_67b9d85dbce9cf6125d137a1a43a8ede16499cfe3a2cfc6be203fd08f2eaeea4 extends Twig_Template
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
        $__internal_2ca0498394dd1b24b797267c5c484826a50cbb74d4dfd7b01f9736f98fe66cdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ca0498394dd1b24b797267c5c484826a50cbb74d4dfd7b01f9736f98fe66cdf->enter($__internal_2ca0498394dd1b24b797267c5c484826a50cbb74d4dfd7b01f9736f98fe66cdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Content:popover-ranking-imdb.html.twig"));

        // line 2
        echo "<li><span class=\"icons imdb\"></span>{ranking}/10</li>";
        
        $__internal_2ca0498394dd1b24b797267c5c484826a50cbb74d4dfd7b01f9736f98fe66cdf->leave($__internal_2ca0498394dd1b24b797267c5c484826a50cbb74d4dfd7b01f9736f98fe66cdf_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Content:popover-ranking-imdb.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#{- content.ranking / 10 ~ '/10' -}#}
<li><span class=\"icons imdb\"></span>{ranking}/10</li>", "VODBaseBundle:Content:popover-ranking-imdb.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/Content/popover-ranking-imdb.html.twig");
    }
}
