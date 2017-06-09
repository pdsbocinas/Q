<?php

/* VODBaseBundle:Home:index-mobile.html.twig */
class __TwigTemplate_ab1f73e19a0be98c6be865b8f064814aa87aaef2e1eb807c2fbb76661411fce5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("VODBaseBundle:Base/Wrappers:wrapper.html.twig", "VODBaseBundle:Home:index-mobile.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'custom_javascript' => array($this, 'block_custom_javascript'),
            'body_class' => array($this, 'block_body_class'),
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
        $__internal_dbd675056da78480a463de39d097cc2d83f734ecff094dcd296050a13b7e090a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbd675056da78480a463de39d097cc2d83f734ecff094dcd296050a13b7e090a->enter($__internal_dbd675056da78480a463de39d097cc2d83f734ecff094dcd296050a13b7e090a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Home:index-mobile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbd675056da78480a463de39d097cc2d83f734ecff094dcd296050a13b7e090a->leave($__internal_dbd675056da78480a463de39d097cc2d83f734ecff094dcd296050a13b7e090a_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_a08d31630f48aae3c0dba3ac941f7203e43280b32eec5a3696651efde570dad0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a08d31630f48aae3c0dba3ac941f7203e43280b32eec5a3696651efde570dad0->enter($__internal_a08d31630f48aae3c0dba3ac941f7203e43280b32eec5a3696651efde570dad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 6
        echo "    ";
        $this->loadTemplate("VODBaseBundle:Home:index-mobile.html.twig", "VODBaseBundle:Home:index-mobile.html.twig", 6, "1308571304")->display($context);
        
        $__internal_a08d31630f48aae3c0dba3ac941f7203e43280b32eec5a3696651efde570dad0->leave($__internal_a08d31630f48aae3c0dba3ac941f7203e43280b32eec5a3696651efde570dad0_prof);

    }

    // line 23
    public function block_custom_javascript($context, array $blocks = array())
    {
        $__internal_180227d887d1dd557c26883e5323b5f8e2a6374a10b9992d8421087470439246 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_180227d887d1dd557c26883e5323b5f8e2a6374a10b9992d8421087470439246->enter($__internal_180227d887d1dd557c26883e5323b5f8e2a6374a10b9992d8421087470439246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "custom_javascript"));

        // line 24
        echo "    <script>
        \$(document).ready(function() {
            ";
        // line 26
        if (array_key_exists("countryEnabled", $context)) {
            // line 27
            echo "                ";
            if (((isset($context["countryEnabled"]) ? $context["countryEnabled"] : $this->getContext($context, "countryEnabled")) == false)) {
                // line 28
                echo "                    \$('#country-not-enabled-modal').modal('show');
                ";
            }
            // line 30
            echo "            ";
        }
        // line 31
        echo "
            \$('div.content-carousel').prepareCarousels({
                ";
        // line 33
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            echo "username:'";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "'";
        }
        // line 34
        echo "            });

            \$(window).scroll(function(){
                \$('div.content-carousel').prepareCarousels({
                    ";
        // line 38
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            echo "username:'";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "'";
        }
        // line 39
        echo "                });

                \$('div.container-main-carousel').loadCarouselsStructure({});
            });

            ";
        // line 45
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
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                variableWidth: true,
                perItemOver: true,
                perItemOut: true,
                afterChangeEvent: true
            });
        });
    </script>
";
        
        $__internal_180227d887d1dd557c26883e5323b5f8e2a6374a10b9992d8421087470439246->leave($__internal_180227d887d1dd557c26883e5323b5f8e2a6374a10b9992d8421087470439246_prof);

    }

    // line 72
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_352e306908b78f924a174bf5fd16622f3b48bfcb21d76f5539c117ca898928b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_352e306908b78f924a174bf5fd16622f3b48bfcb21d76f5539c117ca898928b6->enter($__internal_352e306908b78f924a174bf5fd16622f3b48bfcb21d76f5539c117ca898928b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        if ((isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
            echo "class=\"hidding-nav\"";
        }
        
        $__internal_352e306908b78f924a174bf5fd16622f3b48bfcb21d76f5539c117ca898928b6->leave($__internal_352e306908b78f924a174bf5fd16622f3b48bfcb21d76f5539c117ca898928b6_prof);

    }

    // line 74
    public function block_body_container($context, array $blocks = array())
    {
        $__internal_b8a22a77aeb5124bf1b19ba99a12e2fb9086116a6ec6cfcea5bc6d69d935ec9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8a22a77aeb5124bf1b19ba99a12e2fb9086116a6ec6cfcea5bc6d69d935ec9b->enter($__internal_b8a22a77aeb5124bf1b19ba99a12e2fb9086116a6ec6cfcea5bc6d69d935ec9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_container"));

        // line 75
        echo "\t<div class=\"container-fluid\">
\t\t<div class=\"row\">
            <div id=\"main-slider\">
                ";
        // line 78
        $this->loadTemplate("VODBaseBundle:Components/Slider:slider-publicities.html.twig", "VODBaseBundle:Home:index-mobile.html.twig", 78)->display(array_merge($context, array("array" => (isset($context["publicities"]) ? $context["publicities"] : $this->getContext($context, "publicities")))));
        // line 79
        echo "            </div>
            <div id=\"container-main-carousel\" data-page=\"0\">
                <div id=\"section-0\">
                    ";
        // line 82
        $this->loadTemplate("VODBaseBundle:Components/Carousel:home-carousel.html.twig", "VODBaseBundle:Home:index-mobile.html.twig", 82)->display(array_merge($context, array("content" => (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")))));
        // line 83
        echo "                </div>
            </div>
\t\t\t<div id=\"loadmore\" class=\"text-center\" style=\"display:none;\"><i class=\"fa fa-2x fa-spinner fa-pulse\"></i></div>
\t\t</div>
\t</div>
    ";
        // line 88
        if ((isset($context["is_tablet"]) ? $context["is_tablet"] : $this->getContext($context, "is_tablet"))) {
            // line 89
            echo "        ";
            $this->displayBlock('email_subscribe_container', $context, $blocks);
            // line 94
            echo "    ";
        }
        // line 95
        echo "
    ";
        // line 96
        $this->displayBlock('modal_container', $context, $blocks);
        // line 103
        echo "
";
        
        $__internal_b8a22a77aeb5124bf1b19ba99a12e2fb9086116a6ec6cfcea5bc6d69d935ec9b->leave($__internal_b8a22a77aeb5124bf1b19ba99a12e2fb9086116a6ec6cfcea5bc6d69d935ec9b_prof);

    }

    // line 89
    public function block_email_subscribe_container($context, array $blocks = array())
    {
        $__internal_99edb1837a0e65162d56fee689bad39d1ee9972de31368cb3918bac06ee90a64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99edb1837a0e65162d56fee689bad39d1ee9972de31368cb3918bac06ee90a64->enter($__internal_99edb1837a0e65162d56fee689bad39d1ee9972de31368cb3918bac06ee90a64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_subscribe_container"));

        // line 90
        echo "            <div id=\"newsletter-container\">
                ";
        // line 91
        $this->loadTemplate("VODBaseBundle:Base/Components/Forms:newsletter-subscription.html.twig", "VODBaseBundle:Home:index-mobile.html.twig", 91)->display($context);
        // line 92
        echo "            </div>
        ";
        
        $__internal_99edb1837a0e65162d56fee689bad39d1ee9972de31368cb3918bac06ee90a64->leave($__internal_99edb1837a0e65162d56fee689bad39d1ee9972de31368cb3918bac06ee90a64_prof);

    }

    // line 96
    public function block_modal_container($context, array $blocks = array())
    {
        $__internal_dedd05b1a6a862b0c305ee6ad5b8db7d85172638522eb812fcfafc980f1d4a70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dedd05b1a6a862b0c305ee6ad5b8db7d85172638522eb812fcfafc980f1d4a70->enter($__internal_dedd05b1a6a862b0c305ee6ad5b8db7d85172638522eb812fcfafc980f1d4a70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal_container"));

        // line 97
        echo "        ";
        if (array_key_exists("countryEnabled", $context)) {
            // line 98
            echo "            ";
            if (((isset($context["countryEnabled"]) ? $context["countryEnabled"] : $this->getContext($context, "countryEnabled")) == false)) {
                // line 99
                echo "                ";
                $this->loadTemplate("VODBaseBundle:Components/Modal:country-not-enabled-modal.html.twig", "VODBaseBundle:Home:index-mobile.html.twig", 99)->display($context);
                // line 100
                echo "            ";
            }
            // line 101
            echo "        ";
        }
        // line 102
        echo "    ";
        
        $__internal_dedd05b1a6a862b0c305ee6ad5b8db7d85172638522eb812fcfafc980f1d4a70->leave($__internal_dedd05b1a6a862b0c305ee6ad5b8db7d85172638522eb812fcfafc980f1d4a70_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Home:index-mobile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 102,  235 => 101,  232 => 100,  229 => 99,  226 => 98,  223 => 97,  217 => 96,  209 => 92,  207 => 91,  204 => 90,  198 => 89,  190 => 103,  188 => 96,  185 => 95,  182 => 94,  179 => 89,  177 => 88,  170 => 83,  168 => 82,  163 => 79,  161 => 78,  156 => 75,  150 => 74,  136 => 72,  104 => 45,  97 => 39,  91 => 38,  85 => 34,  79 => 33,  75 => 31,  72 => 30,  68 => 28,  65 => 27,  63 => 26,  59 => 24,  53 => 23,  45 => 6,  39 => 5,  11 => 1,);
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

                \$('div.container-main-carousel').loadCarouselsStructure({});
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
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                variableWidth: true,
                perItemOver: true,
                perItemOut: true,
                afterChangeEvent: true
            });
        });
    </script>
{% endblock custom_javascript %}

{% block body_class %}{% if is_mobile %}class=\"hidding-nav\"{% endif %}{% endblock body_class %}

{% block body_container %}
\t<div class=\"container-fluid\">
\t\t<div class=\"row\">
            <div id=\"main-slider\">
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
    {% if is_tablet %}
        {% block email_subscribe_container %}
            <div id=\"newsletter-container\">
                {% include 'VODBaseBundle:Base/Components/Forms:newsletter-subscription.html.twig' %}
            </div>
        {% endblock email_subscribe_container %}
    {% endif %}

    {% block modal_container %}
        {% if countryEnabled is defined %}
            {% if countryEnabled == false %}
                {% include 'VODBaseBundle:Components/Modal:country-not-enabled-modal.html.twig' %}
            {% endif %}
        {% endif %}
    {% endblock %}

{% endblock body_container%}
", "VODBaseBundle:Home:index-mobile.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/Home/index-mobile.html.twig");
    }
}


/* VODBaseBundle:Home:index-mobile.html.twig */
class __TwigTemplate_ab1f73e19a0be98c6be865b8f064814aa87aaef2e1eb807c2fbb76661411fce5_1308571304 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 6
        $this->parent = $this->loadTemplate("VODBaseBundle:Base/Components/Header:head.html.twig", "VODBaseBundle:Home:index-mobile.html.twig", 6);
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
        $__internal_62a12159fe668ca8a3d0dbdba72c198577ecd298a50af183dd7e1b2fd5e5fea6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62a12159fe668ca8a3d0dbdba72c198577ecd298a50af183dd7e1b2fd5e5fea6->enter($__internal_62a12159fe668ca8a3d0dbdba72c198577ecd298a50af183dd7e1b2fd5e5fea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Home:index-mobile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62a12159fe668ca8a3d0dbdba72c198577ecd298a50af183dd7e1b2fd5e5fea6->leave($__internal_62a12159fe668ca8a3d0dbdba72c198577ecd298a50af183dd7e1b2fd5e5fea6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_48bfc878301d6c09763f617091ce7752e2e5e99b78300960a018f5e497ccff23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48bfc878301d6c09763f617091ce7752e2e5e99b78300960a018f5e497ccff23->enter($__internal_48bfc878301d6c09763f617091ce7752e2e5e99b78300960a018f5e497ccff23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.titles.home_title", array(), "common"), "html", null, true);
        
        $__internal_48bfc878301d6c09763f617091ce7752e2e5e99b78300960a018f5e497ccff23->leave($__internal_48bfc878301d6c09763f617091ce7752e2e5e99b78300960a018f5e497ccff23_prof);

    }

    // line 8
    public function block_meta_description($context, array $blocks = array())
    {
        $__internal_752f3106aa01a67b7364035ff9546d71472e18b06df3e6546c7c1a91ed28edc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_752f3106aa01a67b7364035ff9546d71472e18b06df3e6546c7c1a91ed28edc2->enter($__internal_752f3106aa01a67b7364035ff9546d71472e18b06df3e6546c7c1a91ed28edc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_description"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.titles.home_description", array(), "common"), "html", null, true);
        
        $__internal_752f3106aa01a67b7364035ff9546d71472e18b06df3e6546c7c1a91ed28edc2->leave($__internal_752f3106aa01a67b7364035ff9546d71472e18b06df3e6546c7c1a91ed28edc2_prof);

    }

    // line 9
    public function block_meta($context, array $blocks = array())
    {
        $__internal_9d147850acfce840fee1d1ead70a06e4e9da5956fa8c852a34c305d3966a9fa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d147850acfce840fee1d1ead70a06e4e9da5956fa8c852a34c305d3966a9fa4->enter($__internal_9d147850acfce840fee1d1ead70a06e4e9da5956fa8c852a34c305d3966a9fa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        // line 10
        echo "            ";
        $this->displayParentBlock("meta", $context, $blocks);
        echo "
            ";
        // line 11
        $this->loadTemplate("VODBaseBundle:Content/Components:facebook-meta-tags.html.twig", "VODBaseBundle:Home:index-mobile.html.twig", 11)->display(array_merge($context, array("detail" => false, "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute(        // line 13
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method"))), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.titles.home_title", array(), "common"), "description" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.titles.home_description", array(), "common"))));
        // line 18
        echo "            ";
        $this->loadTemplate("VODBaseBundle:New/Components:canonical-header.html.twig", "VODBaseBundle:Home:index-mobile.html.twig", 18)->display($context);
        // line 19
        echo "        ";
        
        $__internal_9d147850acfce840fee1d1ead70a06e4e9da5956fa8c852a34c305d3966a9fa4->leave($__internal_9d147850acfce840fee1d1ead70a06e4e9da5956fa8c852a34c305d3966a9fa4_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Home:index-mobile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  452 => 19,  449 => 18,  447 => 13,  446 => 11,  441 => 10,  435 => 9,  423 => 8,  411 => 7,  386 => 6,  238 => 102,  235 => 101,  232 => 100,  229 => 99,  226 => 98,  223 => 97,  217 => 96,  209 => 92,  207 => 91,  204 => 90,  198 => 89,  190 => 103,  188 => 96,  185 => 95,  182 => 94,  179 => 89,  177 => 88,  170 => 83,  168 => 82,  163 => 79,  161 => 78,  156 => 75,  150 => 74,  136 => 72,  104 => 45,  97 => 39,  91 => 38,  85 => 34,  79 => 33,  75 => 31,  72 => 30,  68 => 28,  65 => 27,  63 => 26,  59 => 24,  53 => 23,  45 => 6,  39 => 5,  11 => 1,);
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

                \$('div.container-main-carousel').loadCarouselsStructure({});
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
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                variableWidth: true,
                perItemOver: true,
                perItemOut: true,
                afterChangeEvent: true
            });
        });
    </script>
{% endblock custom_javascript %}

{% block body_class %}{% if is_mobile %}class=\"hidding-nav\"{% endif %}{% endblock body_class %}

{% block body_container %}
\t<div class=\"container-fluid\">
\t\t<div class=\"row\">
            <div id=\"main-slider\">
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
    {% if is_tablet %}
        {% block email_subscribe_container %}
            <div id=\"newsletter-container\">
                {% include 'VODBaseBundle:Base/Components/Forms:newsletter-subscription.html.twig' %}
            </div>
        {% endblock email_subscribe_container %}
    {% endif %}

    {% block modal_container %}
        {% if countryEnabled is defined %}
            {% if countryEnabled == false %}
                {% include 'VODBaseBundle:Components/Modal:country-not-enabled-modal.html.twig' %}
            {% endif %}
        {% endif %}
    {% endblock %}

{% endblock body_container%}
", "VODBaseBundle:Home:index-mobile.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/Home/index-mobile.html.twig");
    }
}
