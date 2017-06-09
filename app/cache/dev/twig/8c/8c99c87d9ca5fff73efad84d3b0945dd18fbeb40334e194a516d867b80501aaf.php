<?php

/* VODBaseBundle:New/Base:main.html.twig */
class __TwigTemplate_d8f69eabe475df6e1f199a41caa125bc97b194eba5a2a7832ff404d575f152cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'meta_description' => array($this, 'block_meta_description'),
            'meta_tags' => array($this, 'block_meta_tags'),
            'title' => array($this, 'block_title'),
            'stylesheet' => array($this, 'block_stylesheet'),
            'header_javascript' => array($this, 'block_header_javascript'),
            'body_class' => array($this, 'block_body_class'),
            'body_custom_data' => array($this, 'block_body_custom_data'),
            'body_custom_style' => array($this, 'block_body_custom_style'),
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e8645b6c2ae128c8b9e36b3179ea85bf3b8fcd5c79ccff8a88f4e82c213a0008 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8645b6c2ae128c8b9e36b3179ea85bf3b8fcd5c79ccff8a88f4e82c213a0008->enter($__internal_e8645b6c2ae128c8b9e36b3179ea85bf3b8fcd5c79ccff8a88f4e82c213a0008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:New/Base:main.html.twig"));

        // line 2
        echo "<!DOCTYPE html>
<html lang=\"es\">
\t<head>
\t\t";
        // line 5
        $this->loadTemplate("VODBaseBundle:New/Header:meta.html.twig", "VODBaseBundle:New/Base:main.html.twig", 5)->display($context);
        // line 6
        echo "\t\t<meta name=\"description\" content=\"";
        $this->displayBlock('meta_description', $context, $blocks);
        echo "\">
\t\t";
        // line 7
        $this->displayBlock('meta_tags', $context, $blocks);
        // line 8
        echo "
\t\t";
        // line 9
        $this->loadTemplate("VODBaseBundle:New/Header:favicon.html.twig", "VODBaseBundle:New/Base:main.html.twig", 9)->display($context);
        // line 10
        echo "
\t\t<title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

\t\t";
        // line 13
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 19
        echo "\t\t";
        $this->displayBlock('header_javascript', $context, $blocks);
        // line 20
        echo "\t\t";
        $this->loadTemplate("VODBaseBundle:Base/Components/Scripts:google-tag-manager-script.html.twig", "VODBaseBundle:New/Base:main.html.twig", 20)->display(array_merge($context, array("section" => "head")));
        // line 21
        echo "\t</head>

\t";
        // line 24
        echo "    ";
        $context["blockUtilities"] = $this->loadTemplate("VODBaseBundle:Components/Macros:block-utilities.html.twig", "VODBaseBundle:New/Base:main.html.twig", 24);
        // line 25
        echo "
\t<body ";
        // line 26
        $this->loadTemplate("VODBaseBundle:Base:data-operator.html.twig", "VODBaseBundle:New/Base:main.html.twig", 26)->display($context);
        // line 27
        echo "    data-locked=\"";
        echo (((isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) ? ("false") : ("true"));
        echo "\"
    ";
        // line 28
        $this->displayBlock('body_class', $context, $blocks);
        // line 29
        echo "    ";
        $this->displayBlock('body_custom_data', $context, $blocks);
        // line 30
        echo "    style=\"";
        $this->displayBlock('body_custom_style', $context, $blocks);
        echo "\">


\t\t";
        // line 34
        echo "        <div class=\"la-anim-1\"></div>

\t\t";
        // line 36
        $this->displayBlock('body', $context, $blocks);
        // line 43
        echo "
\t\t";
        // line 44
        $this->displayBlock('javascript', $context, $blocks);
        // line 48
        echo "
\t\t";
        // line 49
        $this->loadTemplate("VODBaseBundle:New/Scripts:operator-custom-javascript.html.twig", "VODBaseBundle:New/Base:main.html.twig", 49)->display($context);
        // line 50
        echo "\t\t";
        // line 51
        echo "\t\t";
        $this->loadTemplate("VODBaseBundle:Base/Components/Scripts:google-tag-manager-script.html.twig", "VODBaseBundle:New/Base:main.html.twig", 51)->display(array_merge($context, array("section" => "body")));
        // line 52
        echo "\t</body>
</html>
";
        
        $__internal_e8645b6c2ae128c8b9e36b3179ea85bf3b8fcd5c79ccff8a88f4e82c213a0008->leave($__internal_e8645b6c2ae128c8b9e36b3179ea85bf3b8fcd5c79ccff8a88f4e82c213a0008_prof);

    }

    // line 6
    public function block_meta_description($context, array $blocks = array())
    {
        $__internal_29857ff22cc92cd1678af6ff5c6c134a2ebeeba6c970ebea86e935d1912ab9cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29857ff22cc92cd1678af6ff5c6c134a2ebeeba6c970ebea86e935d1912ab9cb->enter($__internal_29857ff22cc92cd1678af6ff5c6c134a2ebeeba6c970ebea86e935d1912ab9cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_description"));

        
        $__internal_29857ff22cc92cd1678af6ff5c6c134a2ebeeba6c970ebea86e935d1912ab9cb->leave($__internal_29857ff22cc92cd1678af6ff5c6c134a2ebeeba6c970ebea86e935d1912ab9cb_prof);

    }

    // line 7
    public function block_meta_tags($context, array $blocks = array())
    {
        $__internal_fa3542a99086f32212a4609630ecc4b5a3d8b9eab8be694bccd43b1c3b6f6cc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa3542a99086f32212a4609630ecc4b5a3d8b9eab8be694bccd43b1c3b6f6cc0->enter($__internal_fa3542a99086f32212a4609630ecc4b5a3d8b9eab8be694bccd43b1c3b6f6cc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_tags"));

        
        $__internal_fa3542a99086f32212a4609630ecc4b5a3d8b9eab8be694bccd43b1c3b6f6cc0->leave($__internal_fa3542a99086f32212a4609630ecc4b5a3d8b9eab8be694bccd43b1c3b6f6cc0_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_027d002a9ad15fa2195eb0c7ac991695faafe733360e0ccd7bce6745261e86f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_027d002a9ad15fa2195eb0c7ac991695faafe733360e0ccd7bce6745261e86f4->enter($__internal_027d002a9ad15fa2195eb0c7ac991695faafe733360e0ccd7bce6745261e86f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.titles.site_name", array(), "common"), "html", null, true);
        
        $__internal_027d002a9ad15fa2195eb0c7ac991695faafe733360e0ccd7bce6745261e86f4->leave($__internal_027d002a9ad15fa2195eb0c7ac991695faafe733360e0ccd7bce6745261e86f4_prof);

    }

    // line 13
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_9fe837172cc0a6f175ad8850f58cc61bf0d2b12b4d2085eeb7cca8aa1a5d35f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fe837172cc0a6f175ad8850f58cc61bf0d2b12b4d2085eeb7cca8aa1a5d35f6->enter($__internal_9fe837172cc0a6f175ad8850f58cc61bf0d2b12b4d2085eeb7cca8aa1a5d35f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 14
        echo "\t\t\t";
        // line 15
        echo "\t\t\t<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/vendor/webui-popover/dist/jquery.webui-popover.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t\t";
        // line 17
        echo "\t\t\t";
        $this->loadTemplate("VODBaseBundle:Base/Components/Header:css.html.twig", "VODBaseBundle:New/Base:main.html.twig", 17)->display($context);
        // line 18
        echo "\t\t";
        
        $__internal_9fe837172cc0a6f175ad8850f58cc61bf0d2b12b4d2085eeb7cca8aa1a5d35f6->leave($__internal_9fe837172cc0a6f175ad8850f58cc61bf0d2b12b4d2085eeb7cca8aa1a5d35f6_prof);

    }

    // line 19
    public function block_header_javascript($context, array $blocks = array())
    {
        $__internal_6599001d5d3fa5e81b34751d99f4f22185ad20cb7c590d486ecd111812fbf8c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6599001d5d3fa5e81b34751d99f4f22185ad20cb7c590d486ecd111812fbf8c6->enter($__internal_6599001d5d3fa5e81b34751d99f4f22185ad20cb7c590d486ecd111812fbf8c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_javascript"));

        
        $__internal_6599001d5d3fa5e81b34751d99f4f22185ad20cb7c590d486ecd111812fbf8c6->leave($__internal_6599001d5d3fa5e81b34751d99f4f22185ad20cb7c590d486ecd111812fbf8c6_prof);

    }

    // line 28
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_9ec690c5b36561fdd4aef76f5255995195c541a24e4c80206203c0ecb0684374 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ec690c5b36561fdd4aef76f5255995195c541a24e4c80206203c0ecb0684374->enter($__internal_9ec690c5b36561fdd4aef76f5255995195c541a24e4c80206203c0ecb0684374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        
        $__internal_9ec690c5b36561fdd4aef76f5255995195c541a24e4c80206203c0ecb0684374->leave($__internal_9ec690c5b36561fdd4aef76f5255995195c541a24e4c80206203c0ecb0684374_prof);

    }

    // line 29
    public function block_body_custom_data($context, array $blocks = array())
    {
        $__internal_5b63e7dcf2980035d807cd06303f8aac77c17b8aac810f8457dbaf39bbb3cc44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b63e7dcf2980035d807cd06303f8aac77c17b8aac810f8457dbaf39bbb3cc44->enter($__internal_5b63e7dcf2980035d807cd06303f8aac77c17b8aac810f8457dbaf39bbb3cc44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_custom_data"));

        
        $__internal_5b63e7dcf2980035d807cd06303f8aac77c17b8aac810f8457dbaf39bbb3cc44->leave($__internal_5b63e7dcf2980035d807cd06303f8aac77c17b8aac810f8457dbaf39bbb3cc44_prof);

    }

    // line 30
    public function block_body_custom_style($context, array $blocks = array())
    {
        $__internal_388c9bdba564ba566c98f24375394875d88f11939663bd653de149ade13042a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_388c9bdba564ba566c98f24375394875d88f11939663bd653de149ade13042a8->enter($__internal_388c9bdba564ba566c98f24375394875d88f11939663bd653de149ade13042a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_custom_style"));

        
        $__internal_388c9bdba564ba566c98f24375394875d88f11939663bd653de149ade13042a8->leave($__internal_388c9bdba564ba566c98f24375394875d88f11939663bd653de149ade13042a8_prof);

    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        $__internal_fc94c42889ad7653c699ffea93737b7bc62f74fece58e33cc2efd9909c3d5e4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc94c42889ad7653c699ffea93737b7bc62f74fece58e33cc2efd9909c3d5e4a->enter($__internal_fc94c42889ad7653c699ffea93737b7bc62f74fece58e33cc2efd9909c3d5e4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 37
        echo "\t\t\t";
        // line 42
        echo "\t\t";
        
        $__internal_fc94c42889ad7653c699ffea93737b7bc62f74fece58e33cc2efd9909c3d5e4a->leave($__internal_fc94c42889ad7653c699ffea93737b7bc62f74fece58e33cc2efd9909c3d5e4a_prof);

    }

    // line 44
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_5c5d5a33bd500b5b8903ed69883b55087d37edc213eb5717e814290ae0db7d92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c5d5a33bd500b5b8903ed69883b55087d37edc213eb5717e814290ae0db7d92->enter($__internal_5c5d5a33bd500b5b8903ed69883b55087d37edc213eb5717e814290ae0db7d92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 45
        echo "\t\t\t";
        // line 46
        echo "\t\t\t";
        $this->loadTemplate("VODBaseBundle:New/Scripts:main.html.twig", "VODBaseBundle:New/Base:main.html.twig", 46)->display($context);
        // line 47
        echo "\t    ";
        
        $__internal_5c5d5a33bd500b5b8903ed69883b55087d37edc213eb5717e814290ae0db7d92->leave($__internal_5c5d5a33bd500b5b8903ed69883b55087d37edc213eb5717e814290ae0db7d92_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:New/Base:main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 47,  250 => 46,  248 => 45,  242 => 44,  235 => 42,  233 => 37,  227 => 36,  216 => 30,  205 => 29,  194 => 28,  183 => 19,  176 => 18,  173 => 17,  168 => 15,  166 => 14,  160 => 13,  148 => 11,  137 => 7,  126 => 6,  117 => 52,  114 => 51,  112 => 50,  110 => 49,  107 => 48,  105 => 44,  102 => 43,  100 => 36,  96 => 34,  89 => 30,  86 => 29,  84 => 28,  79 => 27,  77 => 26,  74 => 25,  71 => 24,  67 => 21,  64 => 20,  61 => 19,  59 => 13,  54 => 11,  51 => 10,  49 => 9,  46 => 8,  44 => 7,  39 => 6,  37 => 5,  32 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'base' %}
<!DOCTYPE html>
<html lang=\"es\">
\t<head>
\t\t{% include 'VODBaseBundle:New/Header:meta.html.twig' %}
\t\t<meta name=\"description\" content=\"{% block meta_description %}{% endblock meta_description %}\">
\t\t{% block meta_tags %}{% endblock meta_tags %}

\t\t{% include 'VODBaseBundle:New/Header:favicon.html.twig' %}

\t\t<title>{% block title %}{{ 'common.titles.site_name' |trans({}, 'common') }}{% endblock title %}</title>

\t\t{% block stylesheet %}
\t\t\t{# Como los estilos del popover son los mismos siempre, no hace falta ponerlo en el twig de abajo #}
\t\t\t<link href=\"{{ asset('css/vendor/webui-popover/dist/jquery.webui-popover.min.css') }}\" rel=\"stylesheet\">
\t\t\t{# Incluyo este twig ya que cada operador pisa con sus propios estilos #}
\t\t\t{% include 'VODBaseBundle:Base/Components/Header:css.html.twig' %}
\t\t{% endblock stylesheet %}
\t\t{% block header_javascript %}{% endblock header_javascript %}
\t\t{% include 'VODBaseBundle:Base/Components/Scripts:google-tag-manager-script.html.twig' with { 'section' : 'head' } %}
\t</head>

\t{# Uso este macro para definir la vista (mobile o desktop) que voy a usar #}
    {% import 'VODBaseBundle:Components/Macros:block-utilities.html.twig' as blockUtilities %}

\t<body {% include 'VODBaseBundle:Base:data-operator.html.twig' %}
    data-locked=\"{{ is_mobile ? 'false':'true' }}\"
    {% block body_class %}{% endblock body_class %}
    {% block body_custom_data %}{% endblock body_custom_data %}
    style=\"{% block body_custom_style %}{% endblock body_custom_style %}\">


\t\t{# Este es el loader estilo Youtube #}
        <div class=\"la-anim-1\"></div>

\t\t{% block body %}
\t\t\t{#
\t\t\t\tAcá se inyecta el layout principal,
\t\t\t\tallí se definen todos los componentes que utiliza el site
\t\t\t\t[VODBaseBundle:New/Layouts:main-layout.html.twig]
\t\t\t#}
\t\t{% endblock body %}

\t\t{% block javascript %}
\t\t\t{# Toda la mierda javascritera #}
\t\t\t{% include 'VODBaseBundle:New/Scripts:main.html.twig' %}
\t    {% endblock javascript %}

\t\t{% include 'VODBaseBundle:New/Scripts:operator-custom-javascript.html.twig' %}
\t\t{# Guguel analitics dude! #}
\t\t{% include 'VODBaseBundle:Base/Components/Scripts:google-tag-manager-script.html.twig' with { 'section' : 'body' } %}
\t</body>
</html>
", "VODBaseBundle:New/Base:main.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/New/Base/main.html.twig");
    }
}
