<?php

/* VODBaseBundle:Home:index.html.twig */
class __TwigTemplate_c80dbbe3d43fd300e443710246c4e2e36a62b4c57a6dd311c9d6ae01c265148f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("VODBaseBundle:Base/Wrappers:wrapper.html.twig", "VODBaseBundle:Home:index.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'custom_javascript' => array($this, 'block_custom_javascript'),
            'body_container' => array($this, 'block_body_container'),
            'email_subscribe_container' => array($this, 'block_email_subscribe_container'),
            'modal_container' => array($this, 'block_modal_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "VODBaseBundle:Base/Wrappers:wrapper.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a2cb9d136566391705085a0db975d1f9e5378082563535f5473cd4b27749e0d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2cb9d136566391705085a0db975d1f9e5378082563535f5473cd4b27749e0d7->enter($__internal_a2cb9d136566391705085a0db975d1f9e5378082563535f5473cd4b27749e0d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Home:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2cb9d136566391705085a0db975d1f9e5378082563535f5473cd4b27749e0d7->leave($__internal_a2cb9d136566391705085a0db975d1f9e5378082563535f5473cd4b27749e0d7_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_03ee79519f195a40f75d7589b65c31143b02f65cb8b61a3eb15b869cfa240775 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03ee79519f195a40f75d7589b65c31143b02f65cb8b61a3eb15b869cfa240775->enter($__internal_03ee79519f195a40f75d7589b65c31143b02f65cb8b61a3eb15b869cfa240775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 6
        echo "    ";
        $this->loadTemplate("VODBaseBundle:Home:index.html.twig", "VODBaseBundle:Home:index.html.twig", 6, "1015483041")->display($context);
        
        $__internal_03ee79519f195a40f75d7589b65c31143b02f65cb8b61a3eb15b869cfa240775->leave($__internal_03ee79519f195a40f75d7589b65c31143b02f65cb8b61a3eb15b869cfa240775_prof);

    }

    // line 24
    public function block_custom_javascript($context, array $blocks = array())
    {
        $__internal_50a2b12a47cf9e875780723a1df59ad89d3fa094aef2a6e37eb6cee2832f9890 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50a2b12a47cf9e875780723a1df59ad89d3fa094aef2a6e37eb6cee2832f9890->enter($__internal_50a2b12a47cf9e875780723a1df59ad89d3fa094aef2a6e37eb6cee2832f9890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "custom_javascript"));

        // line 25
        echo "    <script>
        \$(document).ready(function() {
            ";
        // line 27
        if (array_key_exists("countryEnabled", $context)) {
            // line 28
            echo "                ";
            if (((isset($context["countryEnabled"]) ? $context["countryEnabled"] : $this->getContext($context, "countryEnabled")) == false)) {
                // line 29
                echo "                    \$('#country-not-enabled-modal').modal('show');
                ";
            }
            // line 31
            echo "            ";
        }
        // line 32
        echo "
            \$('div.content-carousel').prepareCarousels({
                ";
        // line 34
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            echo "username:'";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "'";
        }
        // line 35
        echo "            });

            \$(window).scroll(function(){
                \$('div.content-carousel').prepareCarousels({
                    ";
        // line 39
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            echo "username:'";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "'";
        }
        // line 40
        echo "                });
            });

            ";
        // line 44
        echo "            \$.fn.initCarousel('.slider', {
                slidesToShow: 1,
                slidesToScroll: 1,
                speed: 1000,
                autoplay: true,
                autoplaySpeed: 3000,
                infinite: true,
                arrows: true,
                dots: true,
                fade: false,
                cssEase: 'linear',
                variableWidth: false
            });

            \$.fn.initCarousel('.slick-channel', {
                slidesToShow: 4,
                slidesToScroll: 4,
                autoplay: false,
                infinite: true,
                lazyLoad: 'progressive',
                variableWidth: true,
                popover: true,
                perItemOver: true,
                perItemOut: true
            });
        });
    </script>
";
        
        $__internal_50a2b12a47cf9e875780723a1df59ad89d3fa094aef2a6e37eb6cee2832f9890->leave($__internal_50a2b12a47cf9e875780723a1df59ad89d3fa094aef2a6e37eb6cee2832f9890_prof);

    }

    // line 73
    public function block_body_container($context, array $blocks = array())
    {
        $__internal_9115f104e8b97fac3db2404ab4fa19cb278143a7b9baedefcd66798616cca112 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9115f104e8b97fac3db2404ab4fa19cb278143a7b9baedefcd66798616cca112->enter($__internal_9115f104e8b97fac3db2404ab4fa19cb278143a7b9baedefcd66798616cca112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_container"));

        // line 74
        echo "\t<div class=\"container-fluid\">
\t\t<div class=\"row\">
            <div id=\"main-slider\">
                ";
        // line 77
        $context["array"] = (isset($context["publicities"]) ? $context["publicities"] : $this->getContext($context, "publicities"));
        // line 78
        echo "                ";
        $this->loadTemplate("VODBaseBundle:Components/Slider:slider-publicities.html.twig", "VODBaseBundle:Home:index.html.twig", 78)->display(array_merge($context, array("array" => (isset($context["publicities"]) ? $context["publicities"] : $this->getContext($context, "publicities")))));
        // line 79
        echo "            </div>
            <div id=\"container-main-carousel\" data-page=\"0\">
                <div id=\"section-0\">
                    ";
        // line 82
        $this->loadTemplate("VODBaseBundle:Components/Carousel:home-carousel.html.twig", "VODBaseBundle:Home:index.html.twig", 82)->display(array_merge($context, array("content" => (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")))));
        // line 83
        echo "                </div>
            </div>
\t\t\t<div id=\"loadmore\" class=\"text-center\" style=\"display:none;\"><i class=\"fa fa-2x fa-spinner fa-pulse\"></i></div>
\t\t</div>
\t</div>
    ";
        // line 88
        $this->displayBlock('email_subscribe_container', $context, $blocks);
        // line 93
        echo "
    ";
        // line 94
        $this->displayBlock('modal_container', $context, $blocks);
        // line 101
        echo "
    <div id=\"popover-template\" class=\"hidden\">
        ";
        // line 103
        $this->loadTemplate("VODBaseBundle:Content:popover.html.twig", "VODBaseBundle:Home:index.html.twig", 103)->display($context);
        // line 104
        echo "    </div>

";
        
        $__internal_9115f104e8b97fac3db2404ab4fa19cb278143a7b9baedefcd66798616cca112->leave($__internal_9115f104e8b97fac3db2404ab4fa19cb278143a7b9baedefcd66798616cca112_prof);

    }

    // line 88
    public function block_email_subscribe_container($context, array $blocks = array())
    {
        $__internal_7b8f714e8db68e05bccbc42411a248c5fa05dbda90f089e3d1b3d958acf4923d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b8f714e8db68e05bccbc42411a248c5fa05dbda90f089e3d1b3d958acf4923d->enter($__internal_7b8f714e8db68e05bccbc42411a248c5fa05dbda90f089e3d1b3d958acf4923d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_subscribe_container"));

        // line 89
        echo "        <div id=\"newsletter-container\">
            ";
        // line 90
        $this->loadTemplate("VODBaseBundle:Base/Components/Forms:newsletter-subscription.html.twig", "VODBaseBundle:Home:index.html.twig", 90)->display($context);
        // line 91
        echo "        </div>
    ";
        
        $__internal_7b8f714e8db68e05bccbc42411a248c5fa05dbda90f089e3d1b3d958acf4923d->leave($__internal_7b8f714e8db68e05bccbc42411a248c5fa05dbda90f089e3d1b3d958acf4923d_prof);

    }

    // line 94
    public function block_modal_container($context, array $blocks = array())
    {
        $__internal_439ff365d700528cfc66ef2ab0210ecf6c3d1fd2038b524adbf9649e2b48e552 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_439ff365d700528cfc66ef2ab0210ecf6c3d1fd2038b524adbf9649e2b48e552->enter($__internal_439ff365d700528cfc66ef2ab0210ecf6c3d1fd2038b524adbf9649e2b48e552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal_container"));

        // line 95
        echo "        ";
        if (array_key_exists("countryEnabled", $context)) {
            // line 96
            echo "            ";
            if (((isset($context["countryEnabled"]) ? $context["countryEnabled"] : $this->getContext($context, "countryEnabled")) == false)) {
                // line 97
                echo "                ";
                $this->loadTemplate("VODBaseBundle:Components/Modal:country-not-enabled-modal.html.twig", "VODBaseBundle:Home:index.html.twig", 97)->display($context);
                // line 98
                echo "            ";
            }
            // line 99
            echo "        ";
        }
        // line 100
        echo "    ";
        
        $__internal_439ff365d700528cfc66ef2ab0210ecf6c3d1fd2038b524adbf9649e2b48e552->leave($__internal_439ff365d700528cfc66ef2ab0210ecf6c3d1fd2038b524adbf9649e2b48e552_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Home:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 100,  224 => 99,  221 => 98,  218 => 97,  215 => 96,  212 => 95,  206 => 94,  198 => 91,  196 => 90,  193 => 89,  187 => 88,  178 => 104,  176 => 103,  172 => 101,  170 => 94,  167 => 93,  165 => 88,  158 => 83,  156 => 82,  151 => 79,  148 => 78,  146 => 77,  141 => 74,  135 => 73,  101 => 44,  96 => 40,  90 => 39,  84 => 35,  78 => 34,  74 => 32,  71 => 31,  67 => 29,  64 => 28,  62 => 27,  58 => 25,  52 => 24,  44 => 6,  38 => 5,  11 => 1,);
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

{% trans_default_domain 'common' %}

{% block head %}
    {% embed 'VODBaseBundle:Base/Components/Header:head.html.twig' %}
       {% block title %}{{ 'common.titles.home_title' | trans({}, 'common') }}{% endblock title %}
        {% block meta_description %}{{ 'common.titles.home_description' | trans({}, 'common') }}{% endblock meta_description %}
        {% block meta %}
            {{ parent() }}
            {% include 'VODBaseBundle:Content/Components:facebook-meta-tags.html.twig' with ({ 
                'detail'        : false, 
                'url'           : absolute_url(path(app.request.get('_route'))),
                'title'         : 'common.titles.home_title' | trans({}, 'common'),
                'description'   : 'common.titles.home_description' | trans({}, 'common')
                }) 
            %}
            {% include 'VODBaseBundle:New/Components:canonical-header.html.twig' %}
        {% endblock meta %}
    {% endembed %}
{% endblock head %}


{% block custom_javascript %}
    <script>
        \$(document).ready(function() {
            {% if countryEnabled is defined %}
                {% if countryEnabled == false %}
                    \$('#country-not-enabled-modal').modal('show');
                {% endif %}
            {% endif %}

            \$('div.content-carousel').prepareCarousels({
                {% if app.user %}username:'{{ app.user.username }}'{% endif %}
            });

            \$(window).scroll(function(){
                \$('div.content-carousel').prepareCarousels({
                    {% if app.user %}username:'{{ app.user.username }}'{% endif %}
                });
            });

            {# Init main slider with publicities #}
            \$.fn.initCarousel('.slider', {
                slidesToShow: 1,
                slidesToScroll: 1,
                speed: 1000,
                autoplay: true,
                autoplaySpeed: 3000,
                infinite: true,
                arrows: true,
                dots: true,
                fade: false,
                cssEase: 'linear',
                variableWidth: false
            });

            \$.fn.initCarousel('.slick-channel', {
                slidesToShow: 4,
                slidesToScroll: 4,
                autoplay: false,
                infinite: true,
                lazyLoad: 'progressive',
                variableWidth: true,
                popover: true,
                perItemOver: true,
                perItemOut: true
            });
        });
    </script>
{% endblock custom_javascript %}

{% block body_container %}
\t<div class=\"container-fluid\">
\t\t<div class=\"row\">
            <div id=\"main-slider\">
                {% set array = publicities %}
                {% include 'VODBaseBundle:Components/Slider:slider-publicities.html.twig' with {'array': publicities} %}
            </div>
            <div id=\"container-main-carousel\" data-page=\"0\">
                <div id=\"section-0\">
                    {% include 'VODBaseBundle:Components/Carousel:home-carousel.html.twig' with {'content': content} %}
                </div>
            </div>
\t\t\t<div id=\"loadmore\" class=\"text-center\" style=\"display:none;\"><i class=\"fa fa-2x fa-spinner fa-pulse\"></i></div>
\t\t</div>
\t</div>
    {% block email_subscribe_container %}
        <div id=\"newsletter-container\">
            {% include 'VODBaseBundle:Base/Components/Forms:newsletter-subscription.html.twig' %}
        </div>
    {% endblock email_subscribe_container %}

    {% block modal_container %}
        {% if countryEnabled is defined %}
            {% if countryEnabled == false %}
                {% include 'VODBaseBundle:Components/Modal:country-not-enabled-modal.html.twig' %}
            {% endif %}
        {% endif %}
    {% endblock %}

    <div id=\"popover-template\" class=\"hidden\">
        {% include 'VODBaseBundle:Content:popover.html.twig' %}
    </div>

{% endblock body_container%}

", "VODBaseBundle:Home:index.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/Home/index.html.twig");
    }
}


/* VODBaseBundle:Home:index.html.twig */
class __TwigTemplate_c80dbbe3d43fd300e443710246c4e2e36a62b4c57a6dd311c9d6ae01c265148f_1015483041 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 6
        $this->parent = $this->loadTemplate("VODBaseBundle:Base/Components/Header:head.html.twig", "VODBaseBundle:Home:index.html.twig", 6);
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
        $__internal_16c344baa5448e2c6d648bc2744c77bdc0c20ba826980a0e18ac53e2d2eb0658 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16c344baa5448e2c6d648bc2744c77bdc0c20ba826980a0e18ac53e2d2eb0658->enter($__internal_16c344baa5448e2c6d648bc2744c77bdc0c20ba826980a0e18ac53e2d2eb0658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Home:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16c344baa5448e2c6d648bc2744c77bdc0c20ba826980a0e18ac53e2d2eb0658->leave($__internal_16c344baa5448e2c6d648bc2744c77bdc0c20ba826980a0e18ac53e2d2eb0658_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d972efb97ba92256d47d19762863854df2134fd9bf3a88cec8b509dcac345ff5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d972efb97ba92256d47d19762863854df2134fd9bf3a88cec8b509dcac345ff5->enter($__internal_d972efb97ba92256d47d19762863854df2134fd9bf3a88cec8b509dcac345ff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.titles.home_title", array(), "common"), "html", null, true);
        
        $__internal_d972efb97ba92256d47d19762863854df2134fd9bf3a88cec8b509dcac345ff5->leave($__internal_d972efb97ba92256d47d19762863854df2134fd9bf3a88cec8b509dcac345ff5_prof);

    }

    // line 8
    public function block_meta_description($context, array $blocks = array())
    {
        $__internal_899caa19b227a5882823d930a176a57e7dd887a16966ff8433659b101da903fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_899caa19b227a5882823d930a176a57e7dd887a16966ff8433659b101da903fd->enter($__internal_899caa19b227a5882823d930a176a57e7dd887a16966ff8433659b101da903fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_description"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.titles.home_description", array(), "common"), "html", null, true);
        
        $__internal_899caa19b227a5882823d930a176a57e7dd887a16966ff8433659b101da903fd->leave($__internal_899caa19b227a5882823d930a176a57e7dd887a16966ff8433659b101da903fd_prof);

    }

    // line 9
    public function block_meta($context, array $blocks = array())
    {
        $__internal_8a37cd276401bde1a3dee0de0e40682785fca770a20d40303c13a4687661e30a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a37cd276401bde1a3dee0de0e40682785fca770a20d40303c13a4687661e30a->enter($__internal_8a37cd276401bde1a3dee0de0e40682785fca770a20d40303c13a4687661e30a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        // line 10
        echo "            ";
        $this->displayParentBlock("meta", $context, $blocks);
        echo "
            ";
        // line 11
        $this->loadTemplate("VODBaseBundle:Content/Components:facebook-meta-tags.html.twig", "VODBaseBundle:Home:index.html.twig", 11)->display(array_merge($context, array("detail" => false, "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute(        // line 13
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method"))), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.titles.home_title", array(), "common"), "description" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.titles.home_description", array(), "common"))));
        // line 18
        echo "            ";
        $this->loadTemplate("VODBaseBundle:New/Components:canonical-header.html.twig", "VODBaseBundle:Home:index.html.twig", 18)->display($context);
        // line 19
        echo "        ";
        
        $__internal_8a37cd276401bde1a3dee0de0e40682785fca770a20d40303c13a4687661e30a->leave($__internal_8a37cd276401bde1a3dee0de0e40682785fca770a20d40303c13a4687661e30a_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Home:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  444 => 19,  441 => 18,  439 => 13,  438 => 11,  433 => 10,  427 => 9,  415 => 8,  403 => 7,  378 => 6,  227 => 100,  224 => 99,  221 => 98,  218 => 97,  215 => 96,  212 => 95,  206 => 94,  198 => 91,  196 => 90,  193 => 89,  187 => 88,  178 => 104,  176 => 103,  172 => 101,  170 => 94,  167 => 93,  165 => 88,  158 => 83,  156 => 82,  151 => 79,  148 => 78,  146 => 77,  141 => 74,  135 => 73,  101 => 44,  96 => 40,  90 => 39,  84 => 35,  78 => 34,  74 => 32,  71 => 31,  67 => 29,  64 => 28,  62 => 27,  58 => 25,  52 => 24,  44 => 6,  38 => 5,  11 => 1,);
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

{% trans_default_domain 'common' %}

{% block head %}
    {% embed 'VODBaseBundle:Base/Components/Header:head.html.twig' %}
       {% block title %}{{ 'common.titles.home_title' | trans({}, 'common') }}{% endblock title %}
        {% block meta_description %}{{ 'common.titles.home_description' | trans({}, 'common') }}{% endblock meta_description %}
        {% block meta %}
            {{ parent() }}
            {% include 'VODBaseBundle:Content/Components:facebook-meta-tags.html.twig' with ({ 
                'detail'        : false, 
                'url'           : absolute_url(path(app.request.get('_route'))),
                'title'         : 'common.titles.home_title' | trans({}, 'common'),
                'description'   : 'common.titles.home_description' | trans({}, 'common')
                }) 
            %}
            {% include 'VODBaseBundle:New/Components:canonical-header.html.twig' %}
        {% endblock meta %}
    {% endembed %}
{% endblock head %}


{% block custom_javascript %}
    <script>
        \$(document).ready(function() {
            {% if countryEnabled is defined %}
                {% if countryEnabled == false %}
                    \$('#country-not-enabled-modal').modal('show');
                {% endif %}
            {% endif %}

            \$('div.content-carousel').prepareCarousels({
                {% if app.user %}username:'{{ app.user.username }}'{% endif %}
            });

            \$(window).scroll(function(){
                \$('div.content-carousel').prepareCarousels({
                    {% if app.user %}username:'{{ app.user.username }}'{% endif %}
                });
            });

            {# Init main slider with publicities #}
            \$.fn.initCarousel('.slider', {
                slidesToShow: 1,
                slidesToScroll: 1,
                speed: 1000,
                autoplay: true,
                autoplaySpeed: 3000,
                infinite: true,
                arrows: true,
                dots: true,
                fade: false,
                cssEase: 'linear',
                variableWidth: false
            });

            \$.fn.initCarousel('.slick-channel', {
                slidesToShow: 4,
                slidesToScroll: 4,
                autoplay: false,
                infinite: true,
                lazyLoad: 'progressive',
                variableWidth: true,
                popover: true,
                perItemOver: true,
                perItemOut: true
            });
        });
    </script>
{% endblock custom_javascript %}

{% block body_container %}
\t<div class=\"container-fluid\">
\t\t<div class=\"row\">
            <div id=\"main-slider\">
                {% set array = publicities %}
                {% include 'VODBaseBundle:Components/Slider:slider-publicities.html.twig' with {'array': publicities} %}
            </div>
            <div id=\"container-main-carousel\" data-page=\"0\">
                <div id=\"section-0\">
                    {% include 'VODBaseBundle:Components/Carousel:home-carousel.html.twig' with {'content': content} %}
                </div>
            </div>
\t\t\t<div id=\"loadmore\" class=\"text-center\" style=\"display:none;\"><i class=\"fa fa-2x fa-spinner fa-pulse\"></i></div>
\t\t</div>
\t</div>
    {% block email_subscribe_container %}
        <div id=\"newsletter-container\">
            {% include 'VODBaseBundle:Base/Components/Forms:newsletter-subscription.html.twig' %}
        </div>
    {% endblock email_subscribe_container %}

    {% block modal_container %}
        {% if countryEnabled is defined %}
            {% if countryEnabled == false %}
                {% include 'VODBaseBundle:Components/Modal:country-not-enabled-modal.html.twig' %}
            {% endif %}
        {% endif %}
    {% endblock %}

    <div id=\"popover-template\" class=\"hidden\">
        {% include 'VODBaseBundle:Content:popover.html.twig' %}
    </div>

{% endblock body_container%}

", "VODBaseBundle:Home:index.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/Home/index.html.twig");
    }
}
