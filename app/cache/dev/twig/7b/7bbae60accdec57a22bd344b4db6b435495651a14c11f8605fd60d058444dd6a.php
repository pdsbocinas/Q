<?php

/* VODBaseBundle:Content:genre-grid.html.twig */
class __TwigTemplate_3c06ce6d5dc20212a8dfaa28451da54c51642e4934a2284f886ef5385e4dc9b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("VODBaseBundle:Base/Wrappers:wrapper.html.twig", "VODBaseBundle:Content:genre-grid.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'custom_stylesheet' => array($this, 'block_custom_stylesheet'),
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
        $__internal_9bcb77b639aa544ff229abbf91ccfa1fe625477eaaea530f9b82aaf660ac58a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bcb77b639aa544ff229abbf91ccfa1fe625477eaaea530f9b82aaf660ac58a3->enter($__internal_9bcb77b639aa544ff229abbf91ccfa1fe625477eaaea530f9b82aaf660ac58a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Content:genre-grid.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9bcb77b639aa544ff229abbf91ccfa1fe625477eaaea530f9b82aaf660ac58a3->leave($__internal_9bcb77b639aa544ff229abbf91ccfa1fe625477eaaea530f9b82aaf660ac58a3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cf9a9c0c4d4709a07088b2ab51d00c0e177e38486a43a5ca357b4ebb9eb8f30e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf9a9c0c4d4709a07088b2ab51d00c0e177e38486a43a5ca357b4ebb9eb8f30e->enter($__internal_cf9a9c0c4d4709a07088b2ab51d00c0e177e38486a43a5ca357b4ebb9eb8f30e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        $this->loadTemplate("VODBaseBundle:Content:genre-grid.html.twig", "VODBaseBundle:Content:genre-grid.html.twig", 4, "236070953")->display($context);
        
        $__internal_cf9a9c0c4d4709a07088b2ab51d00c0e177e38486a43a5ca357b4ebb9eb8f30e->leave($__internal_cf9a9c0c4d4709a07088b2ab51d00c0e177e38486a43a5ca357b4ebb9eb8f30e_prof);

    }

    // line 29
    public function block_custom_stylesheet($context, array $blocks = array())
    {
        $__internal_ae4dfea85ea251daff7060a4854523e4ee231e973a21f7521d9a09b6b1fc15a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae4dfea85ea251daff7060a4854523e4ee231e973a21f7521d9a09b6b1fc15a2->enter($__internal_ae4dfea85ea251daff7060a4854523e4ee231e973a21f7521d9a09b6b1fc15a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "custom_stylesheet"));

        // line 30
        echo "    <link rel='stylesheet' href='";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/vendor/webui-popover/dist/jquery.webui-popover.min.css"), "html", null, true);
        echo "'>
";
        
        $__internal_ae4dfea85ea251daff7060a4854523e4ee231e973a21f7521d9a09b6b1fc15a2->leave($__internal_ae4dfea85ea251daff7060a4854523e4ee231e973a21f7521d9a09b6b1fc15a2_prof);

    }

    // line 33
    public function block_custom_javascript($context, array $blocks = array())
    {
        $__internal_2ed3d07d35547c603a41bb033387105c971681d86ca2245e30816215bedb8ab5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ed3d07d35547c603a41bb033387105c971681d86ca2245e30816215bedb8ab5->enter($__internal_2ed3d07d35547c603a41bb033387105c971681d86ca2245e30816215bedb8ab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "custom_javascript"));

        // line 34
        echo "    <script>
\t\t\$(document).ready(function() {
            var filterParameter = '' === \$.fn.getParameterByName('fl') ? 'new' : \$.fn.getParameterByName('fl');
            var logged = ";
        // line 37
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            echo "true";
        } else {
            echo "false";
        }
        echo ";
            var route = Routing.generate('content_genre_grid');
            var criteria = '";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["genre"]) ? $context["genre"] : $this->getContext($context, "genre")), "slug", array()), "html", null, true);
        echo "';
            var filterSelect = \$('#select-filter');

            if (logged) {
                \$.fn.getContentHistory();
            }

            \$.fn.popOverThis({elements:'#grid-result-list div.item-wrapper:not(.popovered)'});
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
        
        $__internal_2ed3d07d35547c603a41bb033387105c971681d86ca2245e30816215bedb8ab5->leave($__internal_2ed3d07d35547c603a41bb033387105c971681d86ca2245e30816215bedb8ab5_prof);

    }

    // line 62
    public function block_body_container($context, array $blocks = array())
    {
        $__internal_135d2cc36a18597cc34c26cd49f2e118d47f7786bc5ce63035d3b690e98fb30d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_135d2cc36a18597cc34c26cd49f2e118d47f7786bc5ce63035d3b690e98fb30d->enter($__internal_135d2cc36a18597cc34c26cd49f2e118d47f7786bc5ce63035d3b690e98fb30d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_container"));

        // line 63
        echo "    <div class='container-results' data-location=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["google_analytics_event_parameters"]) ? $context["google_analytics_event_parameters"] : $this->getContext($context, "google_analytics_event_parameters")), "genre", array()), "html", null, true);
        echo "\">
        <div class='panel panel-default'>
            <div class=\"clearfix\">
                <div class=\"col-xs-5\">
                    <div class=\"row\">
                        <h1 class=\"grid-title\">";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.genre", array("%genre%" => $this->getAttribute((isset($context["genre"]) ? $context["genre"] : $this->getContext($context, "genre")), "description", array())), "common"), "html", null, true);
        echo "</h1>
                    </div>
                </div>
                <div class=\"col-xs-7\">
                    <div class=\"row\">
                        <div class=\"col-xs-7 col-xs-offset-5\">
                            ";
        // line 74
        $this->loadTemplate("VODBaseBundle:Content/Components:content-filters.html.twig", "VODBaseBundle:Content:genre-grid.html.twig", 74)->display($context);
        // line 75
        echo "                        </div>
                    </div>
                </div>
            </div>
            
            ";
        // line 80
        $this->loadTemplate("VODBaseBundle:Content/Components:basic-grid.html.twig", "VODBaseBundle:Content:genre-grid.html.twig", 80)->display(array_merge($context, array("dataLocation" => $this->getAttribute((isset($context["google_analytics_event_parameters"]) ? $context["google_analytics_event_parameters"] : $this->getContext($context, "google_analytics_event_parameters")), "genre", array()))));
        // line 81
        echo "            <div id='loadmore' class='text-center' style='display:none;'><i class='fa fa-4x fa-spinner fa-pulse'></i></div>
            <br/>
            <br/>
        </div>
    </div>

    <div id=\"popover-template\" class=\"hidden\">
        ";
        // line 88
        $this->loadTemplate("VODBaseBundle:Content:popover.html.twig", "VODBaseBundle:Content:genre-grid.html.twig", 88)->display($context);
        // line 89
        echo "    </div>
";
        
        $__internal_135d2cc36a18597cc34c26cd49f2e118d47f7786bc5ce63035d3b690e98fb30d->leave($__internal_135d2cc36a18597cc34c26cd49f2e118d47f7786bc5ce63035d3b690e98fb30d_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Content:genre-grid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 89,  160 => 88,  151 => 81,  149 => 80,  142 => 75,  140 => 74,  131 => 68,  122 => 63,  116 => 62,  87 => 39,  78 => 37,  73 => 34,  67 => 33,  57 => 30,  51 => 29,  43 => 4,  37 => 3,  11 => 1,);
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

{% block custom_stylesheet %}
    <link rel='stylesheet' href='{{ asset('css/vendor/webui-popover/dist/jquery.webui-popover.min.css') }}'>
{% endblock custom_stylesheet %}

{% block custom_javascript %}
    <script>
\t\t\$(document).ready(function() {
            var filterParameter = '' === \$.fn.getParameterByName('fl') ? 'new' : \$.fn.getParameterByName('fl');
            var logged = {% if app.user %}true{% else %}false{% endif %};
            var route = Routing.generate('content_genre_grid');
            var criteria = '{{ genre.slug }}';
            var filterSelect = \$('#select-filter');

            if (logged) {
                \$.fn.getContentHistory();
            }

            \$.fn.popOverThis({elements:'#grid-result-list div.item-wrapper:not(.popovered)'});
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
    <div class='container-results' data-location=\"{{ google_analytics_event_parameters.genre }}\">
        <div class='panel panel-default'>
            <div class=\"clearfix\">
                <div class=\"col-xs-5\">
                    <div class=\"row\">
                        <h1 class=\"grid-title\">{{ 'common.genre' | trans({'%genre%': genre.description}, 'common') }}</h1>
                    </div>
                </div>
                <div class=\"col-xs-7\">
                    <div class=\"row\">
                        <div class=\"col-xs-7 col-xs-offset-5\">
                            {% include 'VODBaseBundle:Content/Components:content-filters.html.twig' %}
                        </div>
                    </div>
                </div>
            </div>
            
            {% include 'VODBaseBundle:Content/Components:basic-grid.html.twig' with {'dataLocation': google_analytics_event_parameters.genre } %}
            <div id='loadmore' class='text-center' style='display:none;'><i class='fa fa-4x fa-spinner fa-pulse'></i></div>
            <br/>
            <br/>
        </div>
    </div>

    <div id=\"popover-template\" class=\"hidden\">
        {% include 'VODBaseBundle:Content:popover.html.twig' %}
    </div>
{% endblock body_container %}", "VODBaseBundle:Content:genre-grid.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/Content/genre-grid.html.twig");
    }
}


/* VODBaseBundle:Content:genre-grid.html.twig */
class __TwigTemplate_3c06ce6d5dc20212a8dfaa28451da54c51642e4934a2284f886ef5385e4dc9b6_236070953 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("VODBaseBundle:Base/Components/Header:head.html.twig", "VODBaseBundle:Content:genre-grid.html.twig", 4);
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
        $__internal_a03775ccb274b4c2b6bc2fac45a9e8c6798d126f33b4e82e036466ce1b1ff556 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a03775ccb274b4c2b6bc2fac45a9e8c6798d126f33b4e82e036466ce1b1ff556->enter($__internal_a03775ccb274b4c2b6bc2fac45a9e8c6798d126f33b4e82e036466ce1b1ff556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Content:genre-grid.html.twig"));

        // line 6
        $context["title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.titles.slug_genre", array("%slug%" => $this->getAttribute((isset($context["genre"]) ? $context["genre"] : $this->getContext($context, "genre")), "description", array())), "common");
        // line 8
        $context["description"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.titles.description_genre", array("%slug_description%" => $this->getAttribute((isset($context["genre"]) ? $context["genre"] : $this->getContext($context, "genre")), "description", array())), "common");
        // line 4
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a03775ccb274b4c2b6bc2fac45a9e8c6798d126f33b4e82e036466ce1b1ff556->leave($__internal_a03775ccb274b4c2b6bc2fac45a9e8c6798d126f33b4e82e036466ce1b1ff556_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_6a6e9a5cb5e48af14d338d320d04def421f70a970b3225b4f657223392c67d39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a6e9a5cb5e48af14d338d320d04def421f70a970b3225b4f657223392c67d39->enter($__internal_6a6e9a5cb5e48af14d338d320d04def421f70a970b3225b4f657223392c67d39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        
        $__internal_6a6e9a5cb5e48af14d338d320d04def421f70a970b3225b4f657223392c67d39->leave($__internal_6a6e9a5cb5e48af14d338d320d04def421f70a970b3225b4f657223392c67d39_prof);

    }

    // line 12
    public function block_meta_description($context, array $blocks = array())
    {
        $__internal_98bd88087a222cfdf832495d9322ac004e4e09423e9d9dcc7dbd96e6d88aeaec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98bd88087a222cfdf832495d9322ac004e4e09423e9d9dcc7dbd96e6d88aeaec->enter($__internal_98bd88087a222cfdf832495d9322ac004e4e09423e9d9dcc7dbd96e6d88aeaec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_description"));

        echo twig_escape_filter($this->env, (isset($context["description"]) ? $context["description"] : $this->getContext($context, "description")), "html", null, true);
        
        $__internal_98bd88087a222cfdf832495d9322ac004e4e09423e9d9dcc7dbd96e6d88aeaec->leave($__internal_98bd88087a222cfdf832495d9322ac004e4e09423e9d9dcc7dbd96e6d88aeaec_prof);

    }

    // line 14
    public function block_meta($context, array $blocks = array())
    {
        $__internal_6f5257f56e4fd0c77ea3efaa53cb0d0b71be14c79cd681777486ea02047fa518 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f5257f56e4fd0c77ea3efaa53cb0d0b71be14c79cd681777486ea02047fa518->enter($__internal_6f5257f56e4fd0c77ea3efaa53cb0d0b71be14c79cd681777486ea02047fa518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        // line 15
        echo "            ";
        $this->displayParentBlock("meta", $context, $blocks);
        echo "
            ";
        // line 16
        $this->loadTemplate("VODBaseBundle:Content/Components:facebook-meta-tags.html.twig", "VODBaseBundle:Content:genre-grid.html.twig", 16)->display(array_merge($context, array("detail" => false, "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute($this->getAttribute(        // line 18
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method"))), "title" =>         // line 19
(isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "description" =>         // line 20
(isset($context["description"]) ? $context["description"] : $this->getContext($context, "description")))));
        // line 23
        echo "            ";
        $this->loadTemplate("VODBaseBundle:New/Components:canonical-header.html.twig", "VODBaseBundle:Content:genre-grid.html.twig", 23)->display($context);
        // line 24
        echo "        ";
        
        $__internal_6f5257f56e4fd0c77ea3efaa53cb0d0b71be14c79cd681777486ea02047fa518->leave($__internal_6f5257f56e4fd0c77ea3efaa53cb0d0b71be14c79cd681777486ea02047fa518_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Content:genre-grid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  369 => 24,  366 => 23,  364 => 20,  363 => 19,  362 => 18,  361 => 16,  356 => 15,  350 => 14,  338 => 12,  326 => 10,  319 => 4,  317 => 8,  315 => 6,  296 => 4,  162 => 89,  160 => 88,  151 => 81,  149 => 80,  142 => 75,  140 => 74,  131 => 68,  122 => 63,  116 => 62,  87 => 39,  78 => 37,  73 => 34,  67 => 33,  57 => 30,  51 => 29,  43 => 4,  37 => 3,  11 => 1,);
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

{% block custom_stylesheet %}
    <link rel='stylesheet' href='{{ asset('css/vendor/webui-popover/dist/jquery.webui-popover.min.css') }}'>
{% endblock custom_stylesheet %}

{% block custom_javascript %}
    <script>
\t\t\$(document).ready(function() {
            var filterParameter = '' === \$.fn.getParameterByName('fl') ? 'new' : \$.fn.getParameterByName('fl');
            var logged = {% if app.user %}true{% else %}false{% endif %};
            var route = Routing.generate('content_genre_grid');
            var criteria = '{{ genre.slug }}';
            var filterSelect = \$('#select-filter');

            if (logged) {
                \$.fn.getContentHistory();
            }

            \$.fn.popOverThis({elements:'#grid-result-list div.item-wrapper:not(.popovered)'});
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
    <div class='container-results' data-location=\"{{ google_analytics_event_parameters.genre }}\">
        <div class='panel panel-default'>
            <div class=\"clearfix\">
                <div class=\"col-xs-5\">
                    <div class=\"row\">
                        <h1 class=\"grid-title\">{{ 'common.genre' | trans({'%genre%': genre.description}, 'common') }}</h1>
                    </div>
                </div>
                <div class=\"col-xs-7\">
                    <div class=\"row\">
                        <div class=\"col-xs-7 col-xs-offset-5\">
                            {% include 'VODBaseBundle:Content/Components:content-filters.html.twig' %}
                        </div>
                    </div>
                </div>
            </div>
            
            {% include 'VODBaseBundle:Content/Components:basic-grid.html.twig' with {'dataLocation': google_analytics_event_parameters.genre } %}
            <div id='loadmore' class='text-center' style='display:none;'><i class='fa fa-4x fa-spinner fa-pulse'></i></div>
            <br/>
            <br/>
        </div>
    </div>

    <div id=\"popover-template\" class=\"hidden\">
        {% include 'VODBaseBundle:Content:popover.html.twig' %}
    </div>
{% endblock body_container %}", "VODBaseBundle:Content:genre-grid.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/Content/genre-grid.html.twig");
    }
}
