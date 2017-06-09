<?php

/* VODItvBaseBundle:Base:base.html.twig */
class __TwigTemplate_4b9a31338a6acf86c3577cca049512e6b642e3bf3cfca1f694d791b27d80ef70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'meta' => array($this, 'block_meta'),
            'title' => array($this, 'block_title'),
            'favicon' => array($this, 'block_favicon'),
            'stylesheet' => array($this, 'block_stylesheet'),
            'header_container' => array($this, 'block_header_container'),
            'body_container' => array($this, 'block_body_container'),
            'footer_container' => array($this, 'block_footer_container'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_01929193c9b260590402b0fc46ba766c54e4cda15e744744aedcc15cda6ee7e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01929193c9b260590402b0fc46ba766c54e4cda15e744744aedcc15cda6ee7e8->enter($__internal_01929193c9b260590402b0fc46ba766c54e4cda15e744744aedcc15cda6ee7e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODItvBaseBundle:Base:base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html class=\"no-js\" lang=\"\">
    <head>
        ";
        // line 4
        $this->displayBlock('meta', $context, $blocks);
        // line 11
        echo "        <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        ";
        // line 13
        $this->displayBlock('favicon', $context, $blocks);
        // line 16
        echo "        ";
        $this->loadTemplate("VODItvBaseBundle:Base/Components/Header:css.html.twig", "VODItvBaseBundle:Base:base.html.twig", 16)->display($context);
        // line 17
        echo "
        ";
        // line 18
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 19
        echo "    </head>
    <body ";
        // line 20
        if ( !$this->env->getExtension('SunCat\MobileDetectBundle\Twig\Extension\MobileDetectExtension')->isMobile()) {
            echo " data-locked=\"true\" ";
        }
        echo " class=\"o-wrapper\">
        
        ";
        // line 22
        $this->displayBlock('header_container', $context, $blocks);
        // line 29
        echo "        
        ";
        // line 30
        $this->displayBlock('body_container', $context, $blocks);
        // line 31
        echo "
        ";
        // line 32
        $this->displayBlock('footer_container', $context, $blocks);
        // line 33
        echo "        
        ";
        // line 34
        $this->loadTemplate("VODBaseBundle:Base:search-container.html.twig", "VODItvBaseBundle:Base:base.html.twig", 34)->display($context);
        // line 35
        echo "        
        ";
        // line 36
        if ($this->env->getExtension('SunCat\MobileDetectBundle\Twig\Extension\MobileDetectExtension')->isMobile()) {
            // line 37
            echo "            <div id=\"c-mask\" class=\"c-mask\"></div>
        ";
        }
        // line 39
        echo "
        ";
        // line 40
        $this->displayBlock('javascript', $context, $blocks);
        // line 43
        echo "        
    </body>
</html>
";
        
        $__internal_01929193c9b260590402b0fc46ba766c54e4cda15e744744aedcc15cda6ee7e8->leave($__internal_01929193c9b260590402b0fc46ba766c54e4cda15e744744aedcc15cda6ee7e8_prof);

    }

    // line 4
    public function block_meta($context, array $blocks = array())
    {
        $__internal_7a5a4d637cdd0daa0a9346521d9a82253098e920882ee0b1ebb880881693b73f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a5a4d637cdd0daa0a9346521d9a82253098e920882ee0b1ebb880881693b73f->enter($__internal_7a5a4d637cdd0daa0a9346521d9a82253098e920882ee0b1ebb880881693b73f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        // line 5
        echo "            <meta charset=\"utf-8\">
            <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
            <meta name=\"description\" content=\"\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" />
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
        ";
        
        $__internal_7a5a4d637cdd0daa0a9346521d9a82253098e920882ee0b1ebb880881693b73f->leave($__internal_7a5a4d637cdd0daa0a9346521d9a82253098e920882ee0b1ebb880881693b73f_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_f5c91ee4e621d23af2e4525433d9a5e43da860d05425affd51af8a77f375239f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5c91ee4e621d23af2e4525433d9a5e43da860d05425affd51af8a77f375239f->enter($__internal_f5c91ee4e621d23af2e4525433d9a5e43da860d05425affd51af8a77f375239f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Qubit Live TV";
        
        $__internal_f5c91ee4e621d23af2e4525433d9a5e43da860d05425affd51af8a77f375239f->leave($__internal_f5c91ee4e621d23af2e4525433d9a5e43da860d05425affd51af8a77f375239f_prof);

    }

    // line 13
    public function block_favicon($context, array $blocks = array())
    {
        $__internal_eb57ac1f81169db8fcb3931095033dddf7cd7eca062d40be13bc354f66268469 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb57ac1f81169db8fcb3931095033dddf7cd7eca062d40be13bc354f66268469->enter($__internal_eb57ac1f81169db8fcb3931095033dddf7cd7eca062d40be13bc354f66268469_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "favicon"));

        // line 14
        echo "            ";
        $this->loadTemplate("VODItvBaseBundle:Base/Components/Header:favicon.html.twig", "VODItvBaseBundle:Base:base.html.twig", 14)->display($context);
        // line 15
        echo "        ";
        
        $__internal_eb57ac1f81169db8fcb3931095033dddf7cd7eca062d40be13bc354f66268469->leave($__internal_eb57ac1f81169db8fcb3931095033dddf7cd7eca062d40be13bc354f66268469_prof);

    }

    // line 18
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_159bb83d4f702612b8b28ae6a37c1ed067ae1a7e74986348d490b8037a454de6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_159bb83d4f702612b8b28ae6a37c1ed067ae1a7e74986348d490b8037a454de6->enter($__internal_159bb83d4f702612b8b28ae6a37c1ed067ae1a7e74986348d490b8037a454de6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        
        $__internal_159bb83d4f702612b8b28ae6a37c1ed067ae1a7e74986348d490b8037a454de6->leave($__internal_159bb83d4f702612b8b28ae6a37c1ed067ae1a7e74986348d490b8037a454de6_prof);

    }

    // line 22
    public function block_header_container($context, array $blocks = array())
    {
        $__internal_703afaac07ede46323384c1fd83b416de1cf9e2b352f2d50218bfb9b5f99f3cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_703afaac07ede46323384c1fd83b416de1cf9e2b352f2d50218bfb9b5f99f3cb->enter($__internal_703afaac07ede46323384c1fd83b416de1cf9e2b352f2d50218bfb9b5f99f3cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_container"));

        // line 23
        echo "            ";
        if ($this->env->getExtension('SunCat\MobileDetectBundle\Twig\Extension\MobileDetectExtension')->isMobile()) {
            // line 24
            echo "                ";
            $this->loadTemplate("VODItvBaseBundle:Base/Components/Header:navbar-mobile.html.twig", "VODItvBaseBundle:Base:base.html.twig", 24)->display($context);
            // line 25
            echo "            ";
        } else {
            // line 26
            echo "                ";
            $this->loadTemplate("VODItvBaseBundle:Base/Components/Header:navbar.html.twig", "VODItvBaseBundle:Base:base.html.twig", 26)->display($context);
            // line 27
            echo "            ";
        }
        // line 28
        echo "        ";
        
        $__internal_703afaac07ede46323384c1fd83b416de1cf9e2b352f2d50218bfb9b5f99f3cb->leave($__internal_703afaac07ede46323384c1fd83b416de1cf9e2b352f2d50218bfb9b5f99f3cb_prof);

    }

    // line 30
    public function block_body_container($context, array $blocks = array())
    {
        $__internal_06db27b421cc86411e316ff357875a503256a233fdb74843a41523249bf41fd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06db27b421cc86411e316ff357875a503256a233fdb74843a41523249bf41fd4->enter($__internal_06db27b421cc86411e316ff357875a503256a233fdb74843a41523249bf41fd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_container"));

        
        $__internal_06db27b421cc86411e316ff357875a503256a233fdb74843a41523249bf41fd4->leave($__internal_06db27b421cc86411e316ff357875a503256a233fdb74843a41523249bf41fd4_prof);

    }

    // line 32
    public function block_footer_container($context, array $blocks = array())
    {
        $__internal_8d3f61afc0162e844c04a01b777a365bb5cf15ebed8e7b8f001d018e9fc91384 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d3f61afc0162e844c04a01b777a365bb5cf15ebed8e7b8f001d018e9fc91384->enter($__internal_8d3f61afc0162e844c04a01b777a365bb5cf15ebed8e7b8f001d018e9fc91384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer_container"));

        
        $__internal_8d3f61afc0162e844c04a01b777a365bb5cf15ebed8e7b8f001d018e9fc91384->leave($__internal_8d3f61afc0162e844c04a01b777a365bb5cf15ebed8e7b8f001d018e9fc91384_prof);

    }

    // line 40
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_59fa6e1d584a9792b4229b5207ae734848afaadacf7ae41ae485e10403339f78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59fa6e1d584a9792b4229b5207ae734848afaadacf7ae41ae485e10403339f78->enter($__internal_59fa6e1d584a9792b4229b5207ae734848afaadacf7ae41ae485e10403339f78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 41
        echo "            ";
        $this->loadTemplate("VODItvBaseBundle:Base/Components/Scripts:javascripts.html.twig", "VODItvBaseBundle:Base:base.html.twig", 41)->display($context);
        // line 42
        echo "        ";
        
        $__internal_59fa6e1d584a9792b4229b5207ae734848afaadacf7ae41ae485e10403339f78->leave($__internal_59fa6e1d584a9792b4229b5207ae734848afaadacf7ae41ae485e10403339f78_prof);

    }

    public function getTemplateName()
    {
        return "VODItvBaseBundle:Base:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 42,  217 => 41,  211 => 40,  200 => 32,  189 => 30,  182 => 28,  179 => 27,  176 => 26,  173 => 25,  170 => 24,  167 => 23,  161 => 22,  150 => 18,  143 => 15,  140 => 14,  134 => 13,  122 => 11,  110 => 5,  104 => 4,  94 => 43,  92 => 40,  89 => 39,  85 => 37,  83 => 36,  80 => 35,  78 => 34,  75 => 33,  73 => 32,  70 => 31,  68 => 30,  65 => 29,  63 => 22,  56 => 20,  53 => 19,  51 => 18,  48 => 17,  45 => 16,  43 => 13,  37 => 11,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html class=\"no-js\" lang=\"\">
    <head>
        {% block meta %}
            <meta charset=\"utf-8\">
            <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
            <meta name=\"description\" content=\"\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" />
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
        {% endblock meta %}
        <title>{% block title %}Qubit Live TV{% endblock title %}</title>

        {% block favicon %}
            {% include 'VODItvBaseBundle:Base/Components/Header:favicon.html.twig' %}
        {% endblock %}
        {% include 'VODItvBaseBundle:Base/Components/Header:css.html.twig' %}

        {% block stylesheet %}{% endblock stylesheet %}
    </head>
    <body {% if not is_mobile() %} data-locked=\"true\" {% endif %} class=\"o-wrapper\">
        
        {% block header_container %}
            {% if is_mobile() %}
                {% include 'VODItvBaseBundle:Base/Components/Header:navbar-mobile.html.twig' %}
            {% else %}
                {% include 'VODItvBaseBundle:Base/Components/Header:navbar.html.twig' %}
            {% endif %}
        {% endblock header_container %}
        
        {% block body_container %}{% endblock body_container %}

        {% block footer_container %}{% endblock footer_container %}
        
        {% include 'VODBaseBundle:Base:search-container.html.twig' %}
        
        {% if is_mobile() %}
            <div id=\"c-mask\" class=\"c-mask\"></div>
        {% endif %}

        {% block javascript %}
            {% include 'VODItvBaseBundle:Base/Components/Scripts:javascripts.html.twig' %}
        {% endblock javascript %}
        
    </body>
</html>
", "VODItvBaseBundle:Base:base.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/itv-base-bundle/Resources/views/Base/base.html.twig");
    }
}
