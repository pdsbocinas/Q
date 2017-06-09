<?php

/* VODBaseBundle:Content:featured-criteria-grid-mobile.html.twig */
class __TwigTemplate_565f1a79032575d25812aa02af4ac4dd14218d473ca35faf17b75b273ce1b8e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("VODBaseBundle:Base/Wrappers:wrapper.html.twig", "VODBaseBundle:Content:featured-criteria-grid-mobile.html.twig", 1);
        $this->blocks = array(
            'header_container' => array($this, 'block_header_container'),
            'head' => array($this, 'block_head'),
            'custom_javascript' => array($this, 'block_custom_javascript'),
            'body_container' => array($this, 'block_body_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "VODBaseBundle:Base/Wrappers:wrapper.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b51d090e262ef680cc053ccf8c9ee482e722c866b754881728206a0842716ceb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b51d090e262ef680cc053ccf8c9ee482e722c866b754881728206a0842716ceb->enter($__internal_b51d090e262ef680cc053ccf8c9ee482e722c866b754881728206a0842716ceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Content:featured-criteria-grid-mobile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b51d090e262ef680cc053ccf8c9ee482e722c866b754881728206a0842716ceb->leave($__internal_b51d090e262ef680cc053ccf8c9ee482e722c866b754881728206a0842716ceb_prof);

    }

    // line 3
    public function block_header_container($context, array $blocks = array())
    {
        $__internal_b2a6c19c49da0716617f6d5ff65419ddbe7c1b3ed2942e4d2a75b1c8933db315 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2a6c19c49da0716617f6d5ff65419ddbe7c1b3ed2942e4d2a75b1c8933db315->enter($__internal_b2a6c19c49da0716617f6d5ff65419ddbe7c1b3ed2942e4d2a75b1c8933db315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_container"));

        // line 4
        echo "    ";
        $this->loadTemplate("VODBaseBundle:Content:featured-criteria-grid-mobile.html.twig", "VODBaseBundle:Content:featured-criteria-grid-mobile.html.twig", 4, "944970653")->display(array_merge($context, array("title" => $this->getAttribute((isset($context["featuredCriteria"]) ? $context["featuredCriteria"] : $this->getContext($context, "featuredCriteria")), "description", array()))));
        
        $__internal_b2a6c19c49da0716617f6d5ff65419ddbe7c1b3ed2942e4d2a75b1c8933db315->leave($__internal_b2a6c19c49da0716617f6d5ff65419ddbe7c1b3ed2942e4d2a75b1c8933db315_prof);

    }

    // line 11
    public function block_head($context, array $blocks = array())
    {
        $__internal_57eaef5f8290d7501568b768f56ab29bd5c342c48b41e2603d6c327cfde3462b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57eaef5f8290d7501568b768f56ab29bd5c342c48b41e2603d6c327cfde3462b->enter($__internal_57eaef5f8290d7501568b768f56ab29bd5c342c48b41e2603d6c327cfde3462b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 12
        echo "    ";
        $this->loadTemplate("VODBaseBundle:Content:featured-criteria-grid-mobile.html.twig", "VODBaseBundle:Content:featured-criteria-grid-mobile.html.twig", 12, "1870982966")->display($context);
        
        $__internal_57eaef5f8290d7501568b768f56ab29bd5c342c48b41e2603d6c327cfde3462b->leave($__internal_57eaef5f8290d7501568b768f56ab29bd5c342c48b41e2603d6c327cfde3462b_prof);

    }

    // line 31
    public function block_custom_javascript($context, array $blocks = array())
    {
        $__internal_38b1d434a9824335289a5213850ebd087bb0b86158ba9e78f592cdf8e1c9035c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38b1d434a9824335289a5213850ebd087bb0b86158ba9e78f592cdf8e1c9035c->enter($__internal_38b1d434a9824335289a5213850ebd087bb0b86158ba9e78f592cdf8e1c9035c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "custom_javascript"));

        // line 32
        echo "    <script>
        \$(document).ready(function() {
            var filterParameter = '' === \$.fn.getParameterByName('fl') ? 'd' : \$.fn.getParameterByName('fl');
            var logged = ";
        // line 35
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            echo "true";
        } else {
            echo "false";
        }
        echo ";
            var route = Routing.generate('content_featured_criteria_grid');
            var criteria = '";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["featuredCriteria"]) ? $context["featuredCriteria"] : $this->getContext($context, "featuredCriteria")), "vodSlug", array()), "html", null, true);
        echo "';
            var filterSelect = \$('#select-filter');

            if (logged) {
                \$.fn.getContentHistory();
            }

            \$(filterSelect).val(filterParameter);
            \$(filterSelect).change(function() {
                location.href = route + '/' + criteria + '?fl=' + \$(this).val();
            });

            \$('div#grid-result-container div#grid-result-list').infiniteSearch({
                criteria: criteria,
                filter: filterParameter,
                logged: logged,
                route: route
            });
        });
    </script>
";
        
        $__internal_38b1d434a9824335289a5213850ebd087bb0b86158ba9e78f592cdf8e1c9035c->leave($__internal_38b1d434a9824335289a5213850ebd087bb0b86158ba9e78f592cdf8e1c9035c_prof);

    }

    // line 59
    public function block_body_container($context, array $blocks = array())
    {
        $__internal_504896d0b68ac46bf1790f1022ab5e3e9feec0ce77e4c4df7c3206c78376596b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_504896d0b68ac46bf1790f1022ab5e3e9feec0ce77e4c4df7c3206c78376596b->enter($__internal_504896d0b68ac46bf1790f1022ab5e3e9feec0ce77e4c4df7c3206c78376596b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_container"));

        // line 60
        echo "    <div class=\"container-results\" data-location=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["google_analytics_event_parameters"]) ? $context["google_analytics_event_parameters"] : $this->getContext($context, "google_analytics_event_parameters")), "featured_criteria_grid", array()), "html", null, true);
        echo "\">
        <div class=\"col-xs-12\">
            <div class=\"clearfix\">
                <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-7 col-sm-offset-5 col-md-4 col-md-offset-8\">
                        ";
        // line 65
        $this->loadTemplate("VODBaseBundle:Content/Components:content-filters.html.twig", "VODBaseBundle:Content:featured-criteria-grid-mobile.html.twig", 65)->display($context);
        // line 66
        echo "                    </div>
                </div>
            </div>

            ";
        // line 70
        $this->loadTemplate("VODBaseBundle:Content/Components:basic-grid.html.twig", "VODBaseBundle:Content:featured-criteria-grid-mobile.html.twig", 70)->display(array_merge($context, array("dataLocation" => $this->getAttribute((isset($context["google_analytics_event_parameters"]) ? $context["google_analytics_event_parameters"] : $this->getContext($context, "google_analytics_event_parameters")), "featured_criteria_grid", array()))));
        // line 71
        echo "            <div id=\"loadmore\" class=\"text-center\" style=\"display:none;\"><i class=\"fa fa-4x fa-spinner fa-pulse\"></i></div>
            <br/>
            <br/>
        </div>
    </div>
";
        
        $__internal_504896d0b68ac46bf1790f1022ab5e3e9feec0ce77e4c4df7c3206c78376596b->leave($__internal_504896d0b68ac46bf1790f1022ab5e3e9feec0ce77e4c4df7c3206c78376596b_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Content:featured-criteria-grid-mobile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 71,  136 => 70,  130 => 66,  128 => 65,  119 => 60,  113 => 59,  85 => 37,  76 => 35,  71 => 32,  65 => 31,  57 => 12,  51 => 11,  43 => 4,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'VODBaseBundle:Base/Wrappers:wrapper.html.twig' %}

{% block header_container %}
    {% embed 'VODBaseBundle:Base/Components/Header:header-user-mobile.html.twig' with {title: featuredCriteria.description} %}
        {% block header_title %}
            <h1 class=\"header-user-mobile__title\" itemprop=\"name\">{{ title }}</h1>
        {% endblock header_title %}
    {% endembed %}
{% endblock header_container %}

{% block head %}
    {% embed 'VODBaseBundle:Base/Components/Header:head.html.twig' %}
        {% set title = 'common.titles.slug' | trans({'%slug%': featuredCriteria.description}, 'common') %}
        {% set description = 'common.titles.description_grid' | trans({'%slug_description%': featuredCriteria.description}, 'common') %}
        {% block title %}{{- title -}}{% endblock title %}
        {% block meta_description %}{{- description -}}{% endblock meta_description %}
        {% block meta %}
            {{ parent() }}
            {% include 'VODBaseBundle:Content/Components:facebook-meta-tags.html.twig' with ({ 
                'detail'        : false, 
                'url'           : absolute_url(path(app.request.attributes.get('_route'), app.request.attributes.get('_route_params'))),
                'title'         : title,
                'description'   : description
                })  
            %}
            {% include 'VODBaseBundle:New/Components:canonical-header.html.twig' %}
        {% endblock meta%}
    {% endembed %}
{% endblock head %}

{% block custom_javascript %}
    <script>
        \$(document).ready(function() {
            var filterParameter = '' === \$.fn.getParameterByName('fl') ? 'd' : \$.fn.getParameterByName('fl');
            var logged = {% if app.user %}true{% else %}false{% endif %};
            var route = Routing.generate('content_featured_criteria_grid');
            var criteria = '{{ featuredCriteria.vodSlug }}';
            var filterSelect = \$('#select-filter');

            if (logged) {
                \$.fn.getContentHistory();
            }

            \$(filterSelect).val(filterParameter);
            \$(filterSelect).change(function() {
                location.href = route + '/' + criteria + '?fl=' + \$(this).val();
            });

            \$('div#grid-result-container div#grid-result-list').infiniteSearch({
                criteria: criteria,
                filter: filterParameter,
                logged: logged,
                route: route
            });
        });
    </script>
{% endblock custom_javascript %}

{% block body_container %}
    <div class=\"container-results\" data-location=\"{{ google_analytics_event_parameters.featured_criteria_grid }}\">
        <div class=\"col-xs-12\">
            <div class=\"clearfix\">
                <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-7 col-sm-offset-5 col-md-4 col-md-offset-8\">
                        {% include 'VODBaseBundle:Content/Components:content-filters.html.twig' %}
                    </div>
                </div>
            </div>

            {% include 'VODBaseBundle:Content/Components:basic-grid.html.twig' with {'dataLocation': google_analytics_event_parameters.featured_criteria_grid } %}
            <div id=\"loadmore\" class=\"text-center\" style=\"display:none;\"><i class=\"fa fa-4x fa-spinner fa-pulse\"></i></div>
            <br/>
            <br/>
        </div>
    </div>
{% endblock body_container %}", "VODBaseBundle:Content:featured-criteria-grid-mobile.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/Content/featured-criteria-grid-mobile.html.twig");
    }
}


/* VODBaseBundle:Content:featured-criteria-grid-mobile.html.twig */
class __TwigTemplate_565f1a79032575d25812aa02af4ac4dd14218d473ca35faf17b75b273ce1b8e5_944970653 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("VODBaseBundle:Base/Components/Header:header-user-mobile.html.twig", "VODBaseBundle:Content:featured-criteria-grid-mobile.html.twig", 4);
        $this->blocks = array(
            'header_title' => array($this, 'block_header_title'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "VODBaseBundle:Base/Components/Header:header-user-mobile.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f598bd65b1fdb7706f284cea047056a0443209da3622bd63d497ba320e709f99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f598bd65b1fdb7706f284cea047056a0443209da3622bd63d497ba320e709f99->enter($__internal_f598bd65b1fdb7706f284cea047056a0443209da3622bd63d497ba320e709f99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Content:featured-criteria-grid-mobile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f598bd65b1fdb7706f284cea047056a0443209da3622bd63d497ba320e709f99->leave($__internal_f598bd65b1fdb7706f284cea047056a0443209da3622bd63d497ba320e709f99_prof);

    }

    // line 5
    public function block_header_title($context, array $blocks = array())
    {
        $__internal_96c21e678d8f1813245c5e9013e4a564a6101c31283173508f587f1db3e07d40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96c21e678d8f1813245c5e9013e4a564a6101c31283173508f587f1db3e07d40->enter($__internal_96c21e678d8f1813245c5e9013e4a564a6101c31283173508f587f1db3e07d40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_title"));

        // line 6
        echo "            <h1 class=\"header-user-mobile__title\" itemprop=\"name\">";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "</h1>
        ";
        
        $__internal_96c21e678d8f1813245c5e9013e4a564a6101c31283173508f587f1db3e07d40->leave($__internal_96c21e678d8f1813245c5e9013e4a564a6101c31283173508f587f1db3e07d40_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Content:featured-criteria-grid-mobile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 6,  285 => 5,  262 => 4,  138 => 71,  136 => 70,  130 => 66,  128 => 65,  119 => 60,  113 => 59,  85 => 37,  76 => 35,  71 => 32,  65 => 31,  57 => 12,  51 => 11,  43 => 4,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'VODBaseBundle:Base/Wrappers:wrapper.html.twig' %}

{% block header_container %}
    {% embed 'VODBaseBundle:Base/Components/Header:header-user-mobile.html.twig' with {title: featuredCriteria.description} %}
        {% block header_title %}
            <h1 class=\"header-user-mobile__title\" itemprop=\"name\">{{ title }}</h1>
        {% endblock header_title %}
    {% endembed %}
{% endblock header_container %}

{% block head %}
    {% embed 'VODBaseBundle:Base/Components/Header:head.html.twig' %}
        {% set title = 'common.titles.slug' | trans({'%slug%': featuredCriteria.description}, 'common') %}
        {% set description = 'common.titles.description_grid' | trans({'%slug_description%': featuredCriteria.description}, 'common') %}
        {% block title %}{{- title -}}{% endblock title %}
        {% block meta_description %}{{- description -}}{% endblock meta_description %}
        {% block meta %}
            {{ parent() }}
            {% include 'VODBaseBundle:Content/Components:facebook-meta-tags.html.twig' with ({ 
                'detail'        : false, 
                'url'           : absolute_url(path(app.request.attributes.get('_route'), app.request.attributes.get('_route_params'))),
                'title'         : title,
                'description'   : description
                })  
            %}
            {% include 'VODBaseBundle:New/Components:canonical-header.html.twig' %}
        {% endblock meta%}
    {% endembed %}
{% endblock head %}

{% block custom_javascript %}
    <script>
        \$(document).ready(function() {
            var filterParameter = '' === \$.fn.getParameterByName('fl') ? 'd' : \$.fn.getParameterByName('fl');
            var logged = {% if app.user %}true{% else %}false{% endif %};
            var route = Routing.generate('content_featured_criteria_grid');
            var criteria = '{{ featuredCriteria.vodSlug }}';
            var filterSelect = \$('#select-filter');

            if (logged) {
                \$.fn.getContentHistory();
            }

            \$(filterSelect).val(filterParameter);
            \$(filterSelect).change(function() {
                location.href = route + '/' + criteria + '?fl=' + \$(this).val();
            });

            \$('div#grid-result-container div#grid-result-list').infiniteSearch({
                criteria: criteria,
                filter: filterParameter,
                logged: logged,
                route: route
            });
        });
    </script>
{% endblock custom_javascript %}

{% block body_container %}
    <div class=\"container-results\" data-location=\"{{ google_analytics_event_parameters.featured_criteria_grid }}\">
        <div class=\"col-xs-12\">
            <div class=\"clearfix\">
                <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-7 col-sm-offset-5 col-md-4 col-md-offset-8\">
                        {% include 'VODBaseBundle:Content/Components:content-filters.html.twig' %}
                    </div>
                </div>
            </div>

            {% include 'VODBaseBundle:Content/Components:basic-grid.html.twig' with {'dataLocation': google_analytics_event_parameters.featured_criteria_grid } %}
            <div id=\"loadmore\" class=\"text-center\" style=\"display:none;\"><i class=\"fa fa-4x fa-spinner fa-pulse\"></i></div>
            <br/>
            <br/>
        </div>
    </div>
{% endblock body_container %}", "VODBaseBundle:Content:featured-criteria-grid-mobile.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/Content/featured-criteria-grid-mobile.html.twig");
    }
}


/* VODBaseBundle:Content:featured-criteria-grid-mobile.html.twig */
class __TwigTemplate_565f1a79032575d25812aa02af4ac4dd14218d473ca35faf17b75b273ce1b8e5_1870982966 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("VODBaseBundle:Base/Components/Header:head.html.twig", "VODBaseBundle:Content:featured-criteria-grid-mobile.html.twig", 12);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'meta_description' => array($this, 'block_meta_description'),
            'meta' => array($this, 'block_meta'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "VODBaseBundle:Base/Components/Header:head.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f999adc0bed9049968dbf300b9634985f9e0590113683d2ae5f5740e76e435f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f999adc0bed9049968dbf300b9634985f9e0590113683d2ae5f5740e76e435f7->enter($__internal_f999adc0bed9049968dbf300b9634985f9e0590113683d2ae5f5740e76e435f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Content:featured-criteria-grid-mobile.html.twig"));

        // line 13
        $context["title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.titles.slug", array("%slug%" => $this->getAttribute((isset($context["featuredCriteria"]) ? $context["featuredCriteria"] : $this->getContext($context, "featuredCriteria")), "description", array())), "common");
        // line 14
        $context["description"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.titles.description_grid", array("%slug_description%" => $this->getAttribute((isset($context["featuredCriteria"]) ? $context["featuredCriteria"] : $this->getContext($context, "featuredCriteria")), "description", array())), "common");
        // line 12
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f999adc0bed9049968dbf300b9634985f9e0590113683d2ae5f5740e76e435f7->leave($__internal_f999adc0bed9049968dbf300b9634985f9e0590113683d2ae5f5740e76e435f7_prof);

    }

    // line 15
    public function block_title($context, array $blocks = array())
    {
        $__internal_a159bd5b24c1bbf98da1683ff4fd315226a07472fa55d3ab655183ff03ca68c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a159bd5b24c1bbf98da1683ff4fd315226a07472fa55d3ab655183ff03ca68c6->enter($__internal_a159bd5b24c1bbf98da1683ff4fd315226a07472fa55d3ab655183ff03ca68c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        
        $__internal_a159bd5b24c1bbf98da1683ff4fd315226a07472fa55d3ab655183ff03ca68c6->leave($__internal_a159bd5b24c1bbf98da1683ff4fd315226a07472fa55d3ab655183ff03ca68c6_prof);

    }

    // line 16
    public function block_meta_description($context, array $blocks = array())
    {
        $__internal_e171a0abb5bde06a293104a53255ffd058818461231cdf73a9e6955b2d028da1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e171a0abb5bde06a293104a53255ffd058818461231cdf73a9e6955b2d028da1->enter($__internal_e171a0abb5bde06a293104a53255ffd058818461231cdf73a9e6955b2d028da1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_description"));

        echo twig_escape_filter($this->env, (isset($context["description"]) ? $context["description"] : $this->getContext($context, "description")), "html", null, true);
        
        $__internal_e171a0abb5bde06a293104a53255ffd058818461231cdf73a9e6955b2d028da1->leave($__internal_e171a0abb5bde06a293104a53255ffd058818461231cdf73a9e6955b2d028da1_prof);

    }

    // line 17
    public function block_meta($context, array $blocks = array())
    {
        $__internal_adad2d28353418f644982ab948ed5eb337d565afe67e2e0ea2dc253227d1b64b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adad2d28353418f644982ab948ed5eb337d565afe67e2e0ea2dc253227d1b64b->enter($__internal_adad2d28353418f644982ab948ed5eb337d565afe67e2e0ea2dc253227d1b64b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        // line 18
        echo "            ";
        $this->displayParentBlock("meta", $context, $blocks);
        echo "
            ";
        // line 19
        $this->loadTemplate("VODBaseBundle:Content/Components:facebook-meta-tags.html.twig", "VODBaseBundle:Content:featured-criteria-grid-mobile.html.twig", 19)->display(array_merge($context, array("detail" => false, "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute($this->getAttribute(        // line 21
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method"))), "title" =>         // line 22
(isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "description" =>         // line 23
(isset($context["description"]) ? $context["description"] : $this->getContext($context, "description")))));
        // line 26
        echo "            ";
        $this->loadTemplate("VODBaseBundle:New/Components:canonical-header.html.twig", "VODBaseBundle:Content:featured-criteria-grid-mobile.html.twig", 26)->display($context);
        // line 27
        echo "        ";
        
        $__internal_adad2d28353418f644982ab948ed5eb337d565afe67e2e0ea2dc253227d1b64b->leave($__internal_adad2d28353418f644982ab948ed5eb337d565afe67e2e0ea2dc253227d1b64b_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Content:featured-criteria-grid-mobile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  486 => 27,  483 => 26,  481 => 23,  480 => 22,  479 => 21,  478 => 19,  473 => 18,  467 => 17,  455 => 16,  443 => 15,  436 => 12,  434 => 14,  432 => 13,  413 => 12,  291 => 6,  285 => 5,  262 => 4,  138 => 71,  136 => 70,  130 => 66,  128 => 65,  119 => 60,  113 => 59,  85 => 37,  76 => 35,  71 => 32,  65 => 31,  57 => 12,  51 => 11,  43 => 4,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'VODBaseBundle:Base/Wrappers:wrapper.html.twig' %}

{% block header_container %}
    {% embed 'VODBaseBundle:Base/Components/Header:header-user-mobile.html.twig' with {title: featuredCriteria.description} %}
        {% block header_title %}
            <h1 class=\"header-user-mobile__title\" itemprop=\"name\">{{ title }}</h1>
        {% endblock header_title %}
    {% endembed %}
{% endblock header_container %}

{% block head %}
    {% embed 'VODBaseBundle:Base/Components/Header:head.html.twig' %}
        {% set title = 'common.titles.slug' | trans({'%slug%': featuredCriteria.description}, 'common') %}
        {% set description = 'common.titles.description_grid' | trans({'%slug_description%': featuredCriteria.description}, 'common') %}
        {% block title %}{{- title -}}{% endblock title %}
        {% block meta_description %}{{- description -}}{% endblock meta_description %}
        {% block meta %}
            {{ parent() }}
            {% include 'VODBaseBundle:Content/Components:facebook-meta-tags.html.twig' with ({ 
                'detail'        : false, 
                'url'           : absolute_url(path(app.request.attributes.get('_route'), app.request.attributes.get('_route_params'))),
                'title'         : title,
                'description'   : description
                })  
            %}
            {% include 'VODBaseBundle:New/Components:canonical-header.html.twig' %}
        {% endblock meta%}
    {% endembed %}
{% endblock head %}

{% block custom_javascript %}
    <script>
        \$(document).ready(function() {
            var filterParameter = '' === \$.fn.getParameterByName('fl') ? 'd' : \$.fn.getParameterByName('fl');
            var logged = {% if app.user %}true{% else %}false{% endif %};
            var route = Routing.generate('content_featured_criteria_grid');
            var criteria = '{{ featuredCriteria.vodSlug }}';
            var filterSelect = \$('#select-filter');

            if (logged) {
                \$.fn.getContentHistory();
            }

            \$(filterSelect).val(filterParameter);
            \$(filterSelect).change(function() {
                location.href = route + '/' + criteria + '?fl=' + \$(this).val();
            });

            \$('div#grid-result-container div#grid-result-list').infiniteSearch({
                criteria: criteria,
                filter: filterParameter,
                logged: logged,
                route: route
            });
        });
    </script>
{% endblock custom_javascript %}

{% block body_container %}
    <div class=\"container-results\" data-location=\"{{ google_analytics_event_parameters.featured_criteria_grid }}\">
        <div class=\"col-xs-12\">
            <div class=\"clearfix\">
                <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-7 col-sm-offset-5 col-md-4 col-md-offset-8\">
                        {% include 'VODBaseBundle:Content/Components:content-filters.html.twig' %}
                    </div>
                </div>
            </div>

            {% include 'VODBaseBundle:Content/Components:basic-grid.html.twig' with {'dataLocation': google_analytics_event_parameters.featured_criteria_grid } %}
            <div id=\"loadmore\" class=\"text-center\" style=\"display:none;\"><i class=\"fa fa-4x fa-spinner fa-pulse\"></i></div>
            <br/>
            <br/>
        </div>
    </div>
{% endblock body_container %}", "VODBaseBundle:Content:featured-criteria-grid-mobile.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/Content/featured-criteria-grid-mobile.html.twig");
    }
}
