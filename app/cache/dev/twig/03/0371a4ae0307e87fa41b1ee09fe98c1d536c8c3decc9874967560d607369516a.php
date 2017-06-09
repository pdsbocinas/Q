<?php

/* VODBaseBundle:Base/Components/Header:head.html.twig */
class __TwigTemplate_35523e578e42e4c6f094643565ef1e968bbf5ea9230b7a5cf7855a9051d4f504 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'meta' => array($this, 'block_meta'),
            'meta_description' => array($this, 'block_meta_description'),
            'favicon' => array($this, 'block_favicon'),
            'title' => array($this, 'block_title'),
            'stylesheet' => array($this, 'block_stylesheet'),
            'navbar_stylesheet' => array($this, 'block_navbar_stylesheet'),
            'custom_stylesheet' => array($this, 'block_custom_stylesheet'),
            'pixel_codes' => array($this, 'block_pixel_codes'),
            'javascript_plugins' => array($this, 'block_javascript_plugins'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2d2a23abd9b88d578036fa6ea3a7dedb4d0daff8e7034c7a57cea5a3d8bf44d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d2a23abd9b88d578036fa6ea3a7dedb4d0daff8e7034c7a57cea5a3d8bf44d9->enter($__internal_2d2a23abd9b88d578036fa6ea3a7dedb4d0daff8e7034c7a57cea5a3d8bf44d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Base/Components/Header:head.html.twig"));

        // line 2
        echo "<head>
    ";
        // line 3
        $this->displayBlock('meta', $context, $blocks);
        // line 13
        echo "
    ";
        // line 14
        $this->displayBlock('favicon', $context, $blocks);
        // line 17
        echo "
    <title>";
        // line 18
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 20
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 26
        echo "
    ";
        // line 27
        $this->displayBlock('navbar_stylesheet', $context, $blocks);
        // line 29
        echo "
    ";
        // line 30
        $this->displayBlock('custom_stylesheet', $context, $blocks);
        // line 32
        echo "
    ";
        // line 33
        $this->displayBlock('pixel_codes', $context, $blocks);
        // line 35
        echo "
    ";
        // line 36
        $this->displayBlock('javascript_plugins', $context, $blocks);
        // line 38
        echo "
    ";
        // line 39
        $this->loadTemplate("VODBaseBundle:Base/Components/Scripts:google-tag-manager-script.html.twig", "VODBaseBundle:Base/Components/Header:head.html.twig", 39)->display(array_merge($context, array("section" => "head")));
        // line 40
        echo "</head>";
        
        $__internal_2d2a23abd9b88d578036fa6ea3a7dedb4d0daff8e7034c7a57cea5a3d8bf44d9->leave($__internal_2d2a23abd9b88d578036fa6ea3a7dedb4d0daff8e7034c7a57cea5a3d8bf44d9_prof);

    }

    // line 3
    public function block_meta($context, array $blocks = array())
    {
        $__internal_7699763024572c08db23c844d8c3490b8abe5eec4d1ff6cf34407eaa3eb1ceaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7699763024572c08db23c844d8c3490b8abe5eec4d1ff6cf34407eaa3eb1ceaf->enter($__internal_7699763024572c08db23c844d8c3490b8abe5eec4d1ff6cf34407eaa3eb1ceaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        // line 4
        echo "        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" />
        <meta name=\"theme-color\" content=\"#000000\">
        <meta name=\"description\" content=\"";
        // line 8
        $this->displayBlock('meta_description', $context, $blocks);
        echo "\">
        ";
        // line 12
        echo "    ";
        
        $__internal_7699763024572c08db23c844d8c3490b8abe5eec4d1ff6cf34407eaa3eb1ceaf->leave($__internal_7699763024572c08db23c844d8c3490b8abe5eec4d1ff6cf34407eaa3eb1ceaf_prof);

    }

    // line 8
    public function block_meta_description($context, array $blocks = array())
    {
        $__internal_0b258e962cf4b9ddb2368474f7b17aadde72d8a32e58e38de8daca9df7325df8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b258e962cf4b9ddb2368474f7b17aadde72d8a32e58e38de8daca9df7325df8->enter($__internal_0b258e962cf4b9ddb2368474f7b17aadde72d8a32e58e38de8daca9df7325df8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_description"));

        
        $__internal_0b258e962cf4b9ddb2368474f7b17aadde72d8a32e58e38de8daca9df7325df8->leave($__internal_0b258e962cf4b9ddb2368474f7b17aadde72d8a32e58e38de8daca9df7325df8_prof);

    }

    // line 14
    public function block_favicon($context, array $blocks = array())
    {
        $__internal_34bb74e0add59283913dfa3dffb12a972317d8236f67bf92b84e6b4ae3a1e983 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34bb74e0add59283913dfa3dffb12a972317d8236f67bf92b84e6b4ae3a1e983->enter($__internal_34bb74e0add59283913dfa3dffb12a972317d8236f67bf92b84e6b4ae3a1e983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "favicon"));

        // line 15
        echo "        ";
        $this->loadTemplate("VODBaseBundle:Base/Components/Header:favicon.html.twig", "VODBaseBundle:Base/Components/Header:head.html.twig", 15)->display($context);
        // line 16
        echo "    ";
        
        $__internal_34bb74e0add59283913dfa3dffb12a972317d8236f67bf92b84e6b4ae3a1e983->leave($__internal_34bb74e0add59283913dfa3dffb12a972317d8236f67bf92b84e6b4ae3a1e983_prof);

    }

    // line 18
    public function block_title($context, array $blocks = array())
    {
        $__internal_e2120530a30b00dccc6538ba0d177a6fae444e3e79bf08ec5542117d09af0bf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2120530a30b00dccc6538ba0d177a6fae444e3e79bf08ec5542117d09af0bf5->enter($__internal_e2120530a30b00dccc6538ba0d177a6fae444e3e79bf08ec5542117d09af0bf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.titles.site_name", array(), "common"), "html", null, true);
        
        $__internal_e2120530a30b00dccc6538ba0d177a6fae444e3e79bf08ec5542117d09af0bf5->leave($__internal_e2120530a30b00dccc6538ba0d177a6fae444e3e79bf08ec5542117d09af0bf5_prof);

    }

    // line 20
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_b4eaea8101ef6188def6fd87c457abdfb3e3f5b134ce4f39498ac87d0a5492ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4eaea8101ef6188def6fd87c457abdfb3e3f5b134ce4f39498ac87d0a5492ae->enter($__internal_b4eaea8101ef6188def6fd87c457abdfb3e3f5b134ce4f39498ac87d0a5492ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 21
        echo "        ";
        // line 22
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/vendor/webui-popover/dist/jquery.webui-popover.min.css"), "html", null, true);
        echo "\">
        ";
        // line 24
        echo "        ";
        $this->loadTemplate("VODBaseBundle:Base/Components/Header:css.html.twig", "VODBaseBundle:Base/Components/Header:head.html.twig", 24)->display($context);
        // line 25
        echo "    ";
        
        $__internal_b4eaea8101ef6188def6fd87c457abdfb3e3f5b134ce4f39498ac87d0a5492ae->leave($__internal_b4eaea8101ef6188def6fd87c457abdfb3e3f5b134ce4f39498ac87d0a5492ae_prof);

    }

    // line 27
    public function block_navbar_stylesheet($context, array $blocks = array())
    {
        $__internal_130c01fd27cbb4d612c57201d996d71855504ffb29393e0bad27a09875477d68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_130c01fd27cbb4d612c57201d996d71855504ffb29393e0bad27a09875477d68->enter($__internal_130c01fd27cbb4d612c57201d996d71855504ffb29393e0bad27a09875477d68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_stylesheet"));

        // line 28
        echo "    ";
        
        $__internal_130c01fd27cbb4d612c57201d996d71855504ffb29393e0bad27a09875477d68->leave($__internal_130c01fd27cbb4d612c57201d996d71855504ffb29393e0bad27a09875477d68_prof);

    }

    // line 30
    public function block_custom_stylesheet($context, array $blocks = array())
    {
        $__internal_8fe3b2055ecb1ff0b94434c37a579084a85d68b0f2cd127baf8c86c35f982b92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fe3b2055ecb1ff0b94434c37a579084a85d68b0f2cd127baf8c86c35f982b92->enter($__internal_8fe3b2055ecb1ff0b94434c37a579084a85d68b0f2cd127baf8c86c35f982b92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "custom_stylesheet"));

        // line 31
        echo "    ";
        
        $__internal_8fe3b2055ecb1ff0b94434c37a579084a85d68b0f2cd127baf8c86c35f982b92->leave($__internal_8fe3b2055ecb1ff0b94434c37a579084a85d68b0f2cd127baf8c86c35f982b92_prof);

    }

    // line 33
    public function block_pixel_codes($context, array $blocks = array())
    {
        $__internal_94b4d1767ef6a8ab41f7f0de17e41c9aa9a0ee9c258d21f8df2834a74e840ac9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94b4d1767ef6a8ab41f7f0de17e41c9aa9a0ee9c258d21f8df2834a74e840ac9->enter($__internal_94b4d1767ef6a8ab41f7f0de17e41c9aa9a0ee9c258d21f8df2834a74e840ac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pixel_codes"));

        // line 34
        echo "    ";
        
        $__internal_94b4d1767ef6a8ab41f7f0de17e41c9aa9a0ee9c258d21f8df2834a74e840ac9->leave($__internal_94b4d1767ef6a8ab41f7f0de17e41c9aa9a0ee9c258d21f8df2834a74e840ac9_prof);

    }

    // line 36
    public function block_javascript_plugins($context, array $blocks = array())
    {
        $__internal_f65f9041055d2537471e3b5b5625de17258914d156b00787e4f3f7230e6cf112 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f65f9041055d2537471e3b5b5625de17258914d156b00787e4f3f7230e6cf112->enter($__internal_f65f9041055d2537471e3b5b5625de17258914d156b00787e4f3f7230e6cf112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript_plugins"));

        // line 37
        echo "    ";
        
        $__internal_f65f9041055d2537471e3b5b5625de17258914d156b00787e4f3f7230e6cf112->leave($__internal_f65f9041055d2537471e3b5b5625de17258914d156b00787e4f3f7230e6cf112_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Base/Components/Header:head.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 37,  207 => 36,  200 => 34,  194 => 33,  187 => 31,  181 => 30,  174 => 28,  168 => 27,  161 => 25,  158 => 24,  153 => 22,  151 => 21,  145 => 20,  133 => 18,  126 => 16,  123 => 15,  117 => 14,  106 => 8,  99 => 12,  95 => 8,  89 => 4,  83 => 3,  76 => 40,  74 => 39,  71 => 38,  69 => 36,  66 => 35,  64 => 33,  61 => 32,  59 => 30,  56 => 29,  54 => 27,  51 => 26,  49 => 20,  44 => 18,  41 => 17,  39 => 14,  36 => 13,  34 => 3,  31 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'common' %}
<head>
    {% block meta %}
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" />
        <meta name=\"theme-color\" content=\"#000000\">
        <meta name=\"description\" content=\"{% block meta_description %}{% endblock meta_description %}\">
        {# {% if is_mobile and is_ios() %}
            <meta name=\"apple-itunes-app\" content=\"app-id=926302652\">
        {% endif %} #}
    {% endblock meta %}

    {% block favicon %}
        {% include 'VODBaseBundle:Base/Components/Header:favicon.html.twig' %}
    {% endblock %}

    <title>{% block title %}{{ 'common.titles.site_name' |trans({}, 'common') }}{% endblock title %}</title>

    {% block stylesheet %}
        {# Como los estilos del popover son los mismos siempre, no hace falta ponerlo en el twig de abajo #}
        <link rel=\"stylesheet\" href=\"{{ asset('css/vendor/webui-popover/dist/jquery.webui-popover.min.css') }}\">
        {# Incluyo este twig ya que cada operador pisa con sus propios estilos #}
        {% include 'VODBaseBundle:Base/Components/Header:css.html.twig' %}
    {% endblock stylesheet %}

    {% block navbar_stylesheet %}
    {% endblock navbar_stylesheet %}

    {% block custom_stylesheet %}
    {% endblock custom_stylesheet %}

    {% block pixel_codes %}
    {% endblock pixel_codes %}

    {% block javascript_plugins %}
    {% endblock javascript_plugins %}

    {% include 'VODBaseBundle:Base/Components/Scripts:google-tag-manager-script.html.twig' with { 'section' : 'head' }  %}
</head>", "VODBaseBundle:Base/Components/Header:head.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/Base/Components/Header/head.html.twig");
    }
}
