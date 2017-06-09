<?php

/* VODBaseBundle:Content:genre-grid-mobile.html.twig */
class __TwigTemplate_0f6d88e1e279ad6e6aafbc7a1a7b4cf4080a56b8433b819672691a175006fdd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("VODBaseBundle:Base/Wrappers:wrapper.html.twig", "VODBaseBundle:Content:genre-grid-mobile.html.twig", 1);
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
        $__internal_8fbe4e33c12c69a28b3bcf40bc40516844b1bf5304f1ab492700a84516cdc25b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fbe4e33c12c69a28b3bcf40bc40516844b1bf5304f1ab492700a84516cdc25b->enter($__internal_8fbe4e33c12c69a28b3bcf40bc40516844b1bf5304f1ab492700a84516cdc25b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Content:genre-grid-mobile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8fbe4e33c12c69a28b3bcf40bc40516844b1bf5304f1ab492700a84516cdc25b->leave($__internal_8fbe4e33c12c69a28b3bcf40bc40516844b1bf5304f1ab492700a84516cdc25b_prof);

    }

    // line 3
    public function block_header_container($context, array $blocks = array())
    {
        $__internal_1224e5a3746d5f441a257907b8d65ae07d1437e274b3427b24cf72311903831a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1224e5a3746d5f441a257907b8d65ae07d1437e274b3427b24cf72311903831a->enter($__internal_1224e5a3746d5f441a257907b8d65ae07d1437e274b3427b24cf72311903831a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_container"));

        // line 4
        echo "    ";
        $this->loadTemplate("VODBaseBundle:Content:genre-grid-mobile.html.twig", "VODBaseBundle:Content:genre-grid-mobile.html.twig", 4, "877266796")->display(array_merge($context, array("title" => $this->getAttribute((isset($context["genre"]) ? $context["genre"] : $this->getContext($context, "genre")), "description", array()))));
        
        $__internal_1224e5a3746d5f441a257907b8d65ae07d1437e274b3427b24cf72311903831a->leave($__internal_1224e5a3746d5f441a257907b8d65ae07d1437e274b3427b24cf72311903831a_prof);

    }

    // line 11
    public function block_head($context, array $blocks = array())
    {
        $__internal_910c3ef101bbd8558d40278ab2cdefcd8f8bd25221355704b8469e30f3db2df4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_910c3ef101bbd8558d40278ab2cdefcd8f8bd25221355704b8469e30f3db2df4->enter($__internal_910c3ef101bbd8558d40278ab2cdefcd8f8bd25221355704b8469e30f3db2df4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 12
        echo "    ";
        $this->loadTemplate("VODBaseBundle:Content:genre-grid-mobile.html.twig", "VODBaseBundle:Content:genre-grid-mobile.html.twig", 12, "1557962147")->display($context);
        
        $__internal_910c3ef101bbd8558d40278ab2cdefcd8f8bd25221355704b8469e30f3db2df4->leave($__internal_910c3ef101bbd8558d40278ab2cdefcd8f8bd25221355704b8469e30f3db2df4_prof);

    }

    // line 32
    public function block_custom_javascript($context, array $blocks = array())
    {
        $__internal_3f49e0d03b13fa98fad8f226e7929591e22a4f3301cbec966366973c364487a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f49e0d03b13fa98fad8f226e7929591e22a4f3301cbec966366973c364487a8->enter($__internal_3f49e0d03b13fa98fad8f226e7929591e22a4f3301cbec966366973c364487a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "custom_javascript"));

        // line 33
        echo "    <script>
\t\t\$(document).ready(function() {
            var filterParameter = '' === \$.fn.getParameterByName('fl') ? 'aired' : \$.fn.getParameterByName('fl');
            var logged = ";
        // line 36
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            echo "true";
        } else {
            echo "false";
        }
        echo ";
            var route = Routing.generate('content_genre_grid');
            var criteria = '";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["genre"]) ? $context["genre"] : $this->getContext($context, "genre")), "slug", array()), "html", null, true);
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
\t\t});
    </script>
";
        
        $__internal_3f49e0d03b13fa98fad8f226e7929591e22a4f3301cbec966366973c364487a8->leave($__internal_3f49e0d03b13fa98fad8f226e7929591e22a4f3301cbec966366973c364487a8_prof);

    }

    // line 61
    public function block_body_container($context, array $blocks = array())
    {
        $__internal_40181ed86b1b864b86212a58870bfe49024b5f49c1f2f656c3224577b43b97b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40181ed86b1b864b86212a58870bfe49024b5f49c1f2f656c3224577b43b97b6->enter($__internal_40181ed86b1b864b86212a58870bfe49024b5f49c1f2f656c3224577b43b97b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_container"));

        // line 62
        echo "    <div class=\"container-results\" data-location=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["google_analytics_event_parameters"]) ? $context["google_analytics_event_parameters"] : $this->getContext($context, "google_analytics_event_parameters")), "genre", array()), "html", null, true);
        echo "\">
        <div class=\"col-xs-12\">
            <div class=\"clearfix\">
                <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-7 col-sm-offset-5 col-md-4 col-md-offset-8\">
                        ";
        // line 67
        $this->loadTemplate("VODBaseBundle:Content/Components:content-filters.html.twig", "VODBaseBundle:Content:genre-grid-mobile.html.twig", 67)->display($context);
        // line 68
        echo "                    </div>
                </div>
            </div>

            ";
        // line 72
        $this->loadTemplate("VODBaseBundle:Content/Components:basic-grid.html.twig", "VODBaseBundle:Content:genre-grid-mobile.html.twig", 72)->display(array_merge($context, array("dataLocation" => $this->getAttribute((isset($context["google_analytics_event_parameters"]) ? $context["google_analytics_event_parameters"] : $this->getContext($context, "google_analytics_event_parameters")), "genre", array()))));
        // line 73
        echo "            <div id='loadmore' class='text-center' style='display:none;'><i class='fa fa-4x fa-spinner fa-pulse'></i></div>
            <br/>
            <br/>
        </div>
    </div>
";
        
        $__internal_40181ed86b1b864b86212a58870bfe49024b5f49c1f2f656c3224577b43b97b6->leave($__internal_40181ed86b1b864b86212a58870bfe49024b5f49c1f2f656c3224577b43b97b6_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Content:genre-grid-mobile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 73,  137 => 72,  131 => 68,  129 => 67,  120 => 62,  114 => 61,  85 => 38,  76 => 36,  71 => 33,  65 => 32,  57 => 12,  51 => 11,  43 => 4,  37 => 3,  11 => 1,);
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
    {% embed 'VODBaseBundle:Base/Components/Header:header-user-mobile.html.twig' with {title: genre.description} %}
        {% block header_title %}
            <h1 class=\"header-user-mobile__title\" itemprop=\"name\">{{ title }}</h1>
        {% endblock header_title %}
    {% endembed %}
{% endblock header_container %}

{% block head %}
    {% embed 'VODBaseBundle:Base/Components/Header:head.html.twig' %}
        {% set title = 'common.titles.slug_genre' | trans({'%slug%': genre.description}, 'common') %}
        {% set description = 'common.titles.description_genre' | trans({'%slug_description%': genre.description }, 'common') %}
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
\t\t\$(document).ready(function() {
            var filterParameter = '' === \$.fn.getParameterByName('fl') ? 'aired' : \$.fn.getParameterByName('fl');
            var logged = {% if app.user %}true{% else %}false{% endif %};
            var route = Routing.generate('content_genre_grid');
            var criteria = '{{ genre.slug }}';
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
\t\t});
    </script>
{% endblock custom_javascript %}

{% block body_container %}
    <div class=\"container-results\" data-location=\"{{ google_analytics_event_parameters.genre }}\">
        <div class=\"col-xs-12\">
            <div class=\"clearfix\">
                <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-7 col-sm-offset-5 col-md-4 col-md-offset-8\">
                        {% include 'VODBaseBundle:Content/Components:content-filters.html.twig' %}
                    </div>
                </div>
            </div>

            {% include 'VODBaseBundle:Content/Components:basic-grid.html.twig' with {'dataLocation': google_analytics_event_parameters.genre } %}
            <div id='loadmore' class='text-center' style='display:none;'><i class='fa fa-4x fa-spinner fa-pulse'></i></div>
            <br/>
            <br/>
        </div>
    </div>
{% endblock body_container %}", "VODBaseBundle:Content:genre-grid-mobile.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/Content/genre-grid-mobile.html.twig");
    }
}


/* VODBaseBundle:Content:genre-grid-mobile.html.twig */
class __TwigTemplate_0f6d88e1e279ad6e6aafbc7a1a7b4cf4080a56b8433b819672691a175006fdd1_877266796 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("VODBaseBundle:Base/Components/Header:header-user-mobile.html.twig", "VODBaseBundle:Content:genre-grid-mobile.html.twig", 4);
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
        $__internal_80f2bd1c7c7a4372f2f3f5562abfeccd3bd1afb50a6e74b0a6b987152dfbe9b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80f2bd1c7c7a4372f2f3f5562abfeccd3bd1afb50a6e74b0a6b987152dfbe9b3->enter($__internal_80f2bd1c7c7a4372f2f3f5562abfeccd3bd1afb50a6e74b0a6b987152dfbe9b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Content:genre-grid-mobile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80f2bd1c7c7a4372f2f3f5562abfeccd3bd1afb50a6e74b0a6b987152dfbe9b3->leave($__internal_80f2bd1c7c7a4372f2f3f5562abfeccd3bd1afb50a6e74b0a6b987152dfbe9b3_prof);

    }

    // line 5
    public function block_header_title($context, array $blocks = array())
    {
        $__internal_1e0dcab7451232ec6440bfe0f97be5d4a7743995d4c96b51bd7e0a954fccc815 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e0dcab7451232ec6440bfe0f97be5d4a7743995d4c96b51bd7e0a954fccc815->enter($__internal_1e0dcab7451232ec6440bfe0f97be5d4a7743995d4c96b51bd7e0a954fccc815_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_title"));

        // line 6
        echo "            <h1 class=\"header-user-mobile__title\" itemprop=\"name\">";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "</h1>
        ";
        
        $__internal_1e0dcab7451232ec6440bfe0f97be5d4a7743995d4c96b51bd7e0a954fccc815->leave($__internal_1e0dcab7451232ec6440bfe0f97be5d4a7743995d4c96b51bd7e0a954fccc815_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Content:genre-grid-mobile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  294 => 6,  288 => 5,  265 => 4,  139 => 73,  137 => 72,  131 => 68,  129 => 67,  120 => 62,  114 => 61,  85 => 38,  76 => 36,  71 => 33,  65 => 32,  57 => 12,  51 => 11,  43 => 4,  37 => 3,  11 => 1,);
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
    {% embed 'VODBaseBundle:Base/Components/Header:header-user-mobile.html.twig' with {title: genre.description} %}
        {% block header_title %}
            <h1 class=\"header-user-mobile__title\" itemprop=\"name\">{{ title }}</h1>
        {% endblock header_title %}
    {% endembed %}
{% endblock header_container %}

{% block head %}
    {% embed 'VODBaseBundle:Base/Components/Header:head.html.twig' %}
        {% set title = 'common.titles.slug_genre' | trans({'%slug%': genre.description}, 'common') %}
        {% set description = 'common.titles.description_genre' | trans({'%slug_description%': genre.description }, 'common') %}
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
\t\t\$(document).ready(function() {
            var filterParameter = '' === \$.fn.getParameterByName('fl') ? 'aired' : \$.fn.getParameterByName('fl');
            var logged = {% if app.user %}true{% else %}false{% endif %};
            var route = Routing.generate('content_genre_grid');
            var criteria = '{{ genre.slug }}';
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
\t\t});
    </script>
{% endblock custom_javascript %}

{% block body_container %}
    <div class=\"container-results\" data-location=\"{{ google_analytics_event_parameters.genre }}\">
        <div class=\"col-xs-12\">
            <div class=\"clearfix\">
                <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-7 col-sm-offset-5 col-md-4 col-md-offset-8\">
                        {% include 'VODBaseBundle:Content/Components:content-filters.html.twig' %}
                    </div>
                </div>
            </div>

            {% include 'VODBaseBundle:Content/Components:basic-grid.html.twig' with {'dataLocation': google_analytics_event_parameters.genre } %}
            <div id='loadmore' class='text-center' style='display:none;'><i class='fa fa-4x fa-spinner fa-pulse'></i></div>
            <br/>
            <br/>
        </div>
    </div>
{% endblock body_container %}", "VODBaseBundle:Content:genre-grid-mobile.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/Content/genre-grid-mobile.html.twig");
    }
}


/* VODBaseBundle:Content:genre-grid-mobile.html.twig */
class __TwigTemplate_0f6d88e1e279ad6e6aafbc7a1a7b4cf4080a56b8433b819672691a175006fdd1_1557962147 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("VODBaseBundle:Base/Components/Header:head.html.twig", "VODBaseBundle:Content:genre-grid-mobile.html.twig", 12);
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
        $__internal_32deb6f37a75dd56e637e014ffb7339cc3a911dd2f9b3a5f527054c7f5575677 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32deb6f37a75dd56e637e014ffb7339cc3a911dd2f9b3a5f527054c7f5575677->enter($__internal_32deb6f37a75dd56e637e014ffb7339cc3a911dd2f9b3a5f527054c7f5575677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Content:genre-grid-mobile.html.twig"));

        // line 13
        $context["title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.titles.slug_genre", array("%slug%" => $this->getAttribute((isset($context["genre"]) ? $context["genre"] : $this->getContext($context, "genre")), "description", array())), "common");
        // line 14
        $context["description"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.titles.description_genre", array("%slug_description%" => $this->getAttribute((isset($context["genre"]) ? $context["genre"] : $this->getContext($context, "genre")), "description", array())), "common");
        // line 12
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32deb6f37a75dd56e637e014ffb7339cc3a911dd2f9b3a5f527054c7f5575677->leave($__internal_32deb6f37a75dd56e637e014ffb7339cc3a911dd2f9b3a5f527054c7f5575677_prof);

    }

    // line 15
    public function block_title($context, array $blocks = array())
    {
        $__internal_70ea1d3f5780a14c04054a7ab4a3e675e9597fe52f49295045a88f48b7322abe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70ea1d3f5780a14c04054a7ab4a3e675e9597fe52f49295045a88f48b7322abe->enter($__internal_70ea1d3f5780a14c04054a7ab4a3e675e9597fe52f49295045a88f48b7322abe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        
        $__internal_70ea1d3f5780a14c04054a7ab4a3e675e9597fe52f49295045a88f48b7322abe->leave($__internal_70ea1d3f5780a14c04054a7ab4a3e675e9597fe52f49295045a88f48b7322abe_prof);

    }

    // line 16
    public function block_meta_description($context, array $blocks = array())
    {
        $__internal_9281a7e70383e6195ffd94d0db430c87e5e5134980410c910a610bf527d0ef22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9281a7e70383e6195ffd94d0db430c87e5e5134980410c910a610bf527d0ef22->enter($__internal_9281a7e70383e6195ffd94d0db430c87e5e5134980410c910a610bf527d0ef22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_description"));

        echo twig_escape_filter($this->env, (isset($context["description"]) ? $context["description"] : $this->getContext($context, "description")), "html", null, true);
        
        $__internal_9281a7e70383e6195ffd94d0db430c87e5e5134980410c910a610bf527d0ef22->leave($__internal_9281a7e70383e6195ffd94d0db430c87e5e5134980410c910a610bf527d0ef22_prof);

    }

    // line 17
    public function block_meta($context, array $blocks = array())
    {
        $__internal_e72c063b7c5add9d53200dceb9ea3708228348cda3eeafaef2b1f7178ace22b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e72c063b7c5add9d53200dceb9ea3708228348cda3eeafaef2b1f7178ace22b8->enter($__internal_e72c063b7c5add9d53200dceb9ea3708228348cda3eeafaef2b1f7178ace22b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        // line 18
        echo "            ";
        $this->displayParentBlock("meta", $context, $blocks);
        echo "
            ";
        // line 19
        $this->loadTemplate("VODBaseBundle:Content/Components:facebook-meta-tags.html.twig", "VODBaseBundle:Content:genre-grid-mobile.html.twig", 19)->display(array_merge($context, array("detail" => false, "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute($this->getAttribute(        // line 21
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method"))), "title" =>         // line 22
(isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "description" =>         // line 23
(isset($context["description"]) ? $context["description"] : $this->getContext($context, "description")))));
        // line 26
        echo "            ";
        $this->loadTemplate("VODBaseBundle:New/Components:canonical-header.html.twig", "VODBaseBundle:Content:genre-grid-mobile.html.twig", 26)->display($context);
        // line 27
        echo "        ";
        
        $__internal_e72c063b7c5add9d53200dceb9ea3708228348cda3eeafaef2b1f7178ace22b8->leave($__internal_e72c063b7c5add9d53200dceb9ea3708228348cda3eeafaef2b1f7178ace22b8_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Content:genre-grid-mobile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  491 => 27,  488 => 26,  486 => 23,  485 => 22,  484 => 21,  483 => 19,  478 => 18,  472 => 17,  460 => 16,  448 => 15,  441 => 12,  439 => 14,  437 => 13,  418 => 12,  294 => 6,  288 => 5,  265 => 4,  139 => 73,  137 => 72,  131 => 68,  129 => 67,  120 => 62,  114 => 61,  85 => 38,  76 => 36,  71 => 33,  65 => 32,  57 => 12,  51 => 11,  43 => 4,  37 => 3,  11 => 1,);
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
    {% embed 'VODBaseBundle:Base/Components/Header:header-user-mobile.html.twig' with {title: genre.description} %}
        {% block header_title %}
            <h1 class=\"header-user-mobile__title\" itemprop=\"name\">{{ title }}</h1>
        {% endblock header_title %}
    {% endembed %}
{% endblock header_container %}

{% block head %}
    {% embed 'VODBaseBundle:Base/Components/Header:head.html.twig' %}
        {% set title = 'common.titles.slug_genre' | trans({'%slug%': genre.description}, 'common') %}
        {% set description = 'common.titles.description_genre' | trans({'%slug_description%': genre.description }, 'common') %}
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
\t\t\$(document).ready(function() {
            var filterParameter = '' === \$.fn.getParameterByName('fl') ? 'aired' : \$.fn.getParameterByName('fl');
            var logged = {% if app.user %}true{% else %}false{% endif %};
            var route = Routing.generate('content_genre_grid');
            var criteria = '{{ genre.slug }}';
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
\t\t});
    </script>
{% endblock custom_javascript %}

{% block body_container %}
    <div class=\"container-results\" data-location=\"{{ google_analytics_event_parameters.genre }}\">
        <div class=\"col-xs-12\">
            <div class=\"clearfix\">
                <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-7 col-sm-offset-5 col-md-4 col-md-offset-8\">
                        {% include 'VODBaseBundle:Content/Components:content-filters.html.twig' %}
                    </div>
                </div>
            </div>

            {% include 'VODBaseBundle:Content/Components:basic-grid.html.twig' with {'dataLocation': google_analytics_event_parameters.genre } %}
            <div id='loadmore' class='text-center' style='display:none;'><i class='fa fa-4x fa-spinner fa-pulse'></i></div>
            <br/>
            <br/>
        </div>
    </div>
{% endblock body_container %}", "VODBaseBundle:Content:genre-grid-mobile.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/Content/genre-grid-mobile.html.twig");
    }
}
