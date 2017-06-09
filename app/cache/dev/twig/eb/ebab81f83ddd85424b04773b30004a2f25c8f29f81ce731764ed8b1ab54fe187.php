<?php

/* VODBaseBundle:Content:popover.html.twig */
class __TwigTemplate_518e2047e94c3e3d55a9d43602e04ebc74f3c15a981d71bedc936ac3618bd254 extends Twig_Template
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
        $__internal_117e2051ae918ce7c1c96b5904cade4ee853cd9e6cfd32b1c2036a415d694caf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_117e2051ae918ce7c1c96b5904cade4ee853cd9e6cfd32b1c2036a415d694caf->enter($__internal_117e2051ae918ce7c1c96b5904cade4ee853cd9e6cfd32b1c2036a415d694caf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Content:popover.html.twig"));

        // line 2
        echo "
<div class=\"webui-popover-header\">
\t<h3 class=\"item-title\">
        {title}<b> ({aired-from})</b>
\t    <span class=\"pull-right\">
            ";
        // line 7
        $this->loadTemplate("VODBaseBundle:Content:popover-starts.html.twig", "VODBaseBundle:Content:popover.html.twig", 7)->display($context);
        // line 8
        echo "        </span>
    </h3>
</div>

<div class=\"webui-popover-body\">
\t<div class='col-xs-12'>

\t\t<ul class=\"additional-info\">
\t\t\t<li><span class=\"icons icon-clock\">{runtime}min</span></li>
\t\t\t<li><span class=\"rated rated-{rated}\"></span></li>
\t\t\t<li><span class=\"icons icon-subtitled\">{subtitled}</span></li>
\t\t\t<li><span class=\"icons icon-audiotrack\">{audio-tracks}</span></li>
\t\t\t<li><span class=\"quality-{format}\"></span></li>
\t\t\t";
        // line 21
        $this->loadTemplate("VODBaseBundle:Content:popover-ranking-imdb.html.twig", "VODBaseBundle:Content:popover.html.twig", 21)->display($context);
        // line 22
        echo "\t\t</ul>

\t\t<ul class=\"item-details-info\">
\t\t\t<li>
\t\t\t\t<strong>";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("content.detail.info.genre", array(), "content"), "html", null, true);
        echo ":</strong> 
\t\t\t\t<span>{genres}</span>
\t\t\t</li>

\t\t\t<li>
\t\t\t\t<strong>";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("content.detail.info.director", array(), "content"), "html", null, true);
        echo ":</strong>
\t\t\t\t<span>{directors}</span>
\t\t\t</li>

\t\t\t<li>
\t\t\t\t<strong>";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("content.detail.info.actors", array(), "content"), "html", null, true);
        echo ":</strong> 
\t\t\t\t<span>{stars}</span>
\t\t\t</li>
\t\t</ul>

\t\t<p class=\"short-summary\">{summary}</p>
\t\t
\t\t<p>
\t        
\t    </p>
\t</div>
\t<div class='clearfix'></div>

\t<div class='col-xs-6'>
\t    <a class=\"btn btn-primary btn-block item-play btn-small\" data-location=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["google_analytics_event_parameters"]) ? $context["google_analytics_event_parameters"] : $this->getContext($context, "google_analytics_event_parameters")), "popover_detail", array()), "html", null, true);
        echo "\" data-uuid=\"{uuid}\" href=\"#\" type=\"button\">
            <span>{button-text}</span>
        </a>
\t\t
\t</div>

\t<div class=\"col-xs-3\">
\t\t";
        // line 58
        echo "\t\t<a class=\"pull-right detail btn-link btn-small\" data-location=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["google_analytics_event_parameters"]) ? $context["google_analytics_event_parameters"] : $this->getContext($context, "google_analytics_event_parameters")), "popover_detail", array()), "html", null, true);
        echo "\" href=\"{link}\">
            ";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.buttons.more_info", array(), "common"), "html", null, true);
        echo "
        </a>
\t</div>

\t<div class='col-xs-3'>
\t\t<div class='row' data-add-title=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("content.favourite.add", array(), "content"), "html", null, true);
        echo "\" data-remove-title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("content.favourite.remove", array(), "content"), "html", null, true);
        echo "\">
\t\t\t";
        // line 65
        $this->loadTemplate("VODBaseBundle:Components:share-template.html.twig", "VODBaseBundle:Content:popover.html.twig", 65)->display($context);
        // line 66
        echo "            ";
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 67
            echo "                ";
            $this->loadTemplate("VODBaseBundle:Components:favourite.html.twig", "VODBaseBundle:Content:popover.html.twig", 67)->display(array_merge($context, array("uuid" => "{uuid}")));
            // line 68
            echo "            ";
        }
        // line 69
        echo "\t\t</div>
\t</div>
</div>";
        
        $__internal_117e2051ae918ce7c1c96b5904cade4ee853cd9e6cfd32b1c2036a415d694caf->leave($__internal_117e2051ae918ce7c1c96b5904cade4ee853cd9e6cfd32b1c2036a415d694caf_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Content:popover.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 69,  124 => 68,  121 => 67,  118 => 66,  116 => 65,  110 => 64,  102 => 59,  97 => 58,  87 => 50,  70 => 36,  62 => 31,  54 => 26,  48 => 22,  46 => 21,  31 => 8,  29 => 7,  22 => 2,);
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

<div class=\"webui-popover-header\">
\t<h3 class=\"item-title\">
        {title}<b> ({aired-from})</b>
\t    <span class=\"pull-right\">
            {% include 'VODBaseBundle:Content:popover-starts.html.twig' %}
        </span>
    </h3>
</div>

<div class=\"webui-popover-body\">
\t<div class='col-xs-12'>

\t\t<ul class=\"additional-info\">
\t\t\t<li><span class=\"icons icon-clock\">{runtime}min</span></li>
\t\t\t<li><span class=\"rated rated-{rated}\"></span></li>
\t\t\t<li><span class=\"icons icon-subtitled\">{subtitled}</span></li>
\t\t\t<li><span class=\"icons icon-audiotrack\">{audio-tracks}</span></li>
\t\t\t<li><span class=\"quality-{format}\"></span></li>
\t\t\t{% include 'VODBaseBundle:Content:popover-ranking-imdb.html.twig' %}
\t\t</ul>

\t\t<ul class=\"item-details-info\">
\t\t\t<li>
\t\t\t\t<strong>{{ 'content.detail.info.genre' | trans }}:</strong> 
\t\t\t\t<span>{genres}</span>
\t\t\t</li>

\t\t\t<li>
\t\t\t\t<strong>{{ 'content.detail.info.director' | trans }}:</strong>
\t\t\t\t<span>{directors}</span>
\t\t\t</li>

\t\t\t<li>
\t\t\t\t<strong>{{ 'content.detail.info.actors' | trans }}:</strong> 
\t\t\t\t<span>{stars}</span>
\t\t\t</li>
\t\t</ul>

\t\t<p class=\"short-summary\">{summary}</p>
\t\t
\t\t<p>
\t        
\t    </p>
\t</div>
\t<div class='clearfix'></div>

\t<div class='col-xs-6'>
\t    <a class=\"btn btn-primary btn-block item-play btn-small\" data-location=\"{{ google_analytics_event_parameters.popover_detail }}\" data-uuid=\"{uuid}\" href=\"#\" type=\"button\">
            <span>{button-text}</span>
        </a>
\t\t
\t</div>

\t<div class=\"col-xs-3\">
\t\t{# Botón \"+ info\" #}
\t\t<a class=\"pull-right detail btn-link btn-small\" data-location=\"{{ google_analytics_event_parameters.popover_detail }}\" href=\"{link}\">
            {{ 'common.buttons.more_info' | trans({}, 'common') }}
        </a>
\t</div>

\t<div class='col-xs-3'>
\t\t<div class='row' data-add-title=\"{{ 'content.favourite.add' | trans() }}\" data-remove-title=\"{{ 'content.favourite.remove' | trans() }}\">
\t\t\t{% include 'VODBaseBundle:Components:share-template.html.twig' %}
            {% if app.user %}
                {% include 'VODBaseBundle:Components:favourite.html.twig' with { 'uuid' : '{uuid}' } %}
            {% endif %}
\t\t</div>
\t</div>
</div>", "VODBaseBundle:Content:popover.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/Content/popover.html.twig");
    }
}
