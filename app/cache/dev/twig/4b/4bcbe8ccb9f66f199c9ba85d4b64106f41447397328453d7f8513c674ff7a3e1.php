<?php

/* VODBaseBundle:Base/Components/Header:navbar-landing-home.html.twig */
class __TwigTemplate_dbca607c28fb8e6ceea0bded55a0455f81b17bd1e443ffd7af5bd68a70825f24 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'navbar_class' => array($this, 'block_navbar_class'),
            'navbar_content' => array($this, 'block_navbar_content'),
            'navbar_brand' => array($this, 'block_navbar_brand'),
            'navbar_right' => array($this, 'block_navbar_right'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d1908c73a522eca35c595cfd743070521d94d42e85474882a0877ca1ee4adbf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1908c73a522eca35c595cfd743070521d94d42e85474882a0877ca1ee4adbf8->enter($__internal_d1908c73a522eca35c595cfd743070521d94d42e85474882a0877ca1ee4adbf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Base/Components/Header:navbar-landing-home.html.twig"));

        // line 12
        echo "
<nav ";
        // line 13
        $this->displayBlock('navbar_class', $context, $blocks);
        echo ">
    ";
        // line 14
        $this->displayBlock('navbar_content', $context, $blocks);
        // line 30
        echo "</nav>
";
        
        $__internal_d1908c73a522eca35c595cfd743070521d94d42e85474882a0877ca1ee4adbf8->leave($__internal_d1908c73a522eca35c595cfd743070521d94d42e85474882a0877ca1ee4adbf8_prof);

    }

    // line 13
    public function block_navbar_class($context, array $blocks = array())
    {
        $__internal_9b87760763fb3347e87089843652d700e982ae09adb9a8d6d60f02992ac3eaa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b87760763fb3347e87089843652d700e982ae09adb9a8d6d60f02992ac3eaa9->enter($__internal_9b87760763fb3347e87089843652d700e982ae09adb9a8d6d60f02992ac3eaa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_class"));

        echo "class=\"navbar navbar-fixed-top navbar-landing navbar-short\"";
        
        $__internal_9b87760763fb3347e87089843652d700e982ae09adb9a8d6d60f02992ac3eaa9->leave($__internal_9b87760763fb3347e87089843652d700e982ae09adb9a8d6d60f02992ac3eaa9_prof);

    }

    // line 14
    public function block_navbar_content($context, array $blocks = array())
    {
        $__internal_14493f6462765be9ce13aa8be0a77a295c47c1ddee905823fa5a02c1ba6eb6aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14493f6462765be9ce13aa8be0a77a295c47c1ddee905823fa5a02c1ba6eb6aa->enter($__internal_14493f6462765be9ce13aa8be0a77a295c47c1ddee905823fa5a02c1ba6eb6aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_content"));

        // line 15
        echo "        <div class=\"container-fluid\">
        \t<div class=\"navbar-header\">
                ";
        // line 18
        echo "                ";
        $this->displayBlock('navbar_brand', $context, $blocks);
        // line 21
        echo "            </div>
            <div class=\"navbar-right\">
                <a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("help");
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("base.footer.links.help_center"), "html", null, true);
        echo "\" class=\"navbar__help-button btn\"><i class=\"fa fa-question\"></i></a>
            </div>
            ";
        // line 25
        $this->displayBlock('navbar_right', $context, $blocks);
        // line 27
        echo "  
        </div>
    ";
        
        $__internal_14493f6462765be9ce13aa8be0a77a295c47c1ddee905823fa5a02c1ba6eb6aa->leave($__internal_14493f6462765be9ce13aa8be0a77a295c47c1ddee905823fa5a02c1ba6eb6aa_prof);

    }

    // line 18
    public function block_navbar_brand($context, array $blocks = array())
    {
        $__internal_8dc69bb949662cce3e63be5e186ce825c315eeb3b757d926f744dc3e967800d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dc69bb949662cce3e63be5e186ce825c315eeb3b757d926f744dc3e967800d4->enter($__internal_8dc69bb949662cce3e63be5e186ce825c315eeb3b757d926f744dc3e967800d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_brand"));

        // line 19
        echo "                    ";
        $this->loadTemplate("VODBaseBundle:Base/Components/Header:navbar-brand.html.twig", "VODBaseBundle:Base/Components/Header:navbar-landing-home.html.twig", 19)->display($context);
        // line 20
        echo "                ";
        
        $__internal_8dc69bb949662cce3e63be5e186ce825c315eeb3b757d926f744dc3e967800d4->leave($__internal_8dc69bb949662cce3e63be5e186ce825c315eeb3b757d926f744dc3e967800d4_prof);

    }

    // line 25
    public function block_navbar_right($context, array $blocks = array())
    {
        $__internal_1a01b7b293d79405e6bdfffaafbc1674135aab3884a5edee85da24712da27f93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a01b7b293d79405e6bdfffaafbc1674135aab3884a5edee85da24712da27f93->enter($__internal_1a01b7b293d79405e6bdfffaafbc1674135aab3884a5edee85da24712da27f93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_right"));

        // line 26
        echo "                ";
        $this->loadTemplate("VODBaseBundle:Base/Components/Header:navbar-right-landing.html.twig", "VODBaseBundle:Base/Components/Header:navbar-landing-home.html.twig", 26)->display($context);
        // line 27
        echo "            ";
        
        $__internal_1a01b7b293d79405e6bdfffaafbc1674135aab3884a5edee85da24712da27f93->leave($__internal_1a01b7b293d79405e6bdfffaafbc1674135aab3884a5edee85da24712da27f93_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Base/Components/Header:navbar-landing-home.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  115 => 27,  112 => 26,  106 => 25,  99 => 20,  96 => 19,  90 => 18,  81 => 27,  79 => 25,  72 => 23,  68 => 21,  65 => 18,  61 => 15,  55 => 14,  43 => 13,  35 => 30,  33 => 14,  29 => 13,  26 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#% extends 'VODBaseBundle:Base/Components/Header:navbar.html.twig' %}

{ Navbar que se usa EXCLUSIVAMENTE en landing para que solo muestren el logo, y los botones de ingresar y registro y el de centro de ayuda y tiene el modo de opacidad !! }

{% block navbar_class %}class=\"navbar navbar-fixed-top navbar-landing navbar-short\"{% endblock navbar_class %}

{% block navbar_left %}
{% endblock navbar_left %}

{% block navbar_search %}
{% endblock navbar_search %#}

<nav {% block navbar_class %}class=\"navbar navbar-fixed-top navbar-landing navbar-short\"{% endblock navbar_class %}>
    {% block navbar_content %}
        <div class=\"container-fluid\">
        \t<div class=\"navbar-header\">
                {# Logo #}
                {% block navbar_brand %}
                    {% include 'VODBaseBundle:Base/Components/Header:navbar-brand.html.twig' %}
                {% endblock navbar_brand %}
            </div>
            <div class=\"navbar-right\">
                <a href=\"{{ path('help') }}\" alt=\"{{ 'base.footer.links.help_center' | trans }}\" class=\"navbar__help-button btn\"><i class=\"fa fa-question\"></i></a>
            </div>
            {% block navbar_right %}
                {% include 'VODBaseBundle:Base/Components/Header:navbar-right-landing.html.twig' %}
            {% endblock navbar_right %}  
        </div>
    {% endblock navbar_content %}
</nav>
", "VODBaseBundle:Base/Components/Header:navbar-landing-home.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/Base/Components/Header/navbar-landing-home.html.twig");
    }
}
