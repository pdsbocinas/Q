<?php

/* VODBaseBundle:Base/Wrappers:wrapper.html.twig */
class __TwigTemplate_220f4114b78794697770eacc3d4fe9c4a589654eb4ae73bb95d21caa412e3f60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("VODBaseBundle:Base:base.html.twig", "VODBaseBundle:Base/Wrappers:wrapper.html.twig", 1);
        $this->blocks = array(
            'navbar_stylesheet' => array($this, 'block_navbar_stylesheet'),
            'body_class' => array($this, 'block_body_class'),
            'header_container' => array($this, 'block_header_container'),
            'body_container' => array($this, 'block_body_container'),
            'content' => array($this, 'block_content'),
            'footer_container' => array($this, 'block_footer_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "VODBaseBundle:Base:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ee7823567c833066a477e9d81d3c982097c7faac9494dcf191e1d4635e32abca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee7823567c833066a477e9d81d3c982097c7faac9494dcf191e1d4635e32abca->enter($__internal_ee7823567c833066a477e9d81d3c982097c7faac9494dcf191e1d4635e32abca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Base/Wrappers:wrapper.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee7823567c833066a477e9d81d3c982097c7faac9494dcf191e1d4635e32abca->leave($__internal_ee7823567c833066a477e9d81d3c982097c7faac9494dcf191e1d4635e32abca_prof);

    }

    // line 5
    public function block_navbar_stylesheet($context, array $blocks = array())
    {
        $__internal_bb1b87745320aa5af50ec81f57fa1ba9d39de364d94f38af2c67eadb7bfc4fac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb1b87745320aa5af50ec81f57fa1ba9d39de364d94f38af2c67eadb7bfc4fac->enter($__internal_bb1b87745320aa5af50ec81f57fa1ba9d39de364d94f38af2c67eadb7bfc4fac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_stylesheet"));

        
        $__internal_bb1b87745320aa5af50ec81f57fa1ba9d39de364d94f38af2c67eadb7bfc4fac->leave($__internal_bb1b87745320aa5af50ec81f57fa1ba9d39de364d94f38af2c67eadb7bfc4fac_prof);

    }

    // line 14
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_5ebf5373670fbc61596a469973becc7aeed6d711c134bbbb2121a767292584e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ebf5373670fbc61596a469973becc7aeed6d711c134bbbb2121a767292584e3->enter($__internal_5ebf5373670fbc61596a469973becc7aeed6d711c134bbbb2121a767292584e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        // line 15
        echo "\t";
        $this->loadTemplate("VODBaseBundle:Base/Wrappers:operator-validator.html.twig", "VODBaseBundle:Base/Wrappers:wrapper.html.twig", 15)->display($context);
        
        $__internal_5ebf5373670fbc61596a469973becc7aeed6d711c134bbbb2121a767292584e3->leave($__internal_5ebf5373670fbc61596a469973becc7aeed6d711c134bbbb2121a767292584e3_prof);

    }

    // line 19
    public function block_header_container($context, array $blocks = array())
    {
        $__internal_4e703bfc208969dce173d3bffa417e362f844fff3d4679b1f9515c0986be9397 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e703bfc208969dce173d3bffa417e362f844fff3d4679b1f9515c0986be9397->enter($__internal_4e703bfc208969dce173d3bffa417e362f844fff3d4679b1f9515c0986be9397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_container"));

        // line 20
        echo "    ";
        if ((isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
            // line 21
            echo "\t\t";
            if (($this->getAttribute((isset($context["utils"]) ? $context["utils"] : $this->getContext($context, "utils")), "isProfileSection", array()) == 1)) {
                // line 22
                echo "\t\t\t";
                if ( !array_key_exists("section", $context)) {
                    // line 23
                    echo "\t            ";
                    $context["section"] = "";
                    // line 24
                    echo "\t        ";
                }
                // line 25
                echo "\t        ";
                $this->loadTemplate("VODBaseBundle:Base/Components/Header:header-user-mobile.html.twig", "VODBaseBundle:Base/Wrappers:wrapper.html.twig", 25)->display(array_merge($context, array("title" => (isset($context["section"]) ? $context["section"] : $this->getContext($context, "section")))));
                // line 26
                echo "\t\t";
            } else {
                // line 27
                echo "\t\t\t";
                $this->loadTemplate("VODBaseBundle:Base/Components/Header:navbar-mobile.html.twig", "VODBaseBundle:Base/Wrappers:wrapper.html.twig", 27)->display($context);
                // line 28
                echo "\t\t";
            }
            // line 29
            echo "\t";
        } else {
            // line 30
            echo "\t\t";
            $this->loadTemplate("VODBaseBundle:Base/Components/Header:navbar.html.twig", "VODBaseBundle:Base/Wrappers:wrapper.html.twig", 30)->display($context);
            // line 31
            echo "\t";
        }
        
        $__internal_4e703bfc208969dce173d3bffa417e362f844fff3d4679b1f9515c0986be9397->leave($__internal_4e703bfc208969dce173d3bffa417e362f844fff3d4679b1f9515c0986be9397_prof);

    }

    // line 35
    public function block_body_container($context, array $blocks = array())
    {
        $__internal_797d19ba6fbfa50033e1b8e1c1d2e2f7979a318d5db7d9a189f1ab58a8dec5a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_797d19ba6fbfa50033e1b8e1c1d2e2f7979a318d5db7d9a189f1ab58a8dec5a8->enter($__internal_797d19ba6fbfa50033e1b8e1c1d2e2f7979a318d5db7d9a189f1ab58a8dec5a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_container"));

        // line 36
        echo "    <div class=\"container-wrapper\">
        ";
        // line 37
        $this->displayBlock('content', $context, $blocks);
        // line 38
        echo "    </div>
";
        
        $__internal_797d19ba6fbfa50033e1b8e1c1d2e2f7979a318d5db7d9a189f1ab58a8dec5a8->leave($__internal_797d19ba6fbfa50033e1b8e1c1d2e2f7979a318d5db7d9a189f1ab58a8dec5a8_prof);

    }

    // line 37
    public function block_content($context, array $blocks = array())
    {
        $__internal_2b1ac27f80882840270c8b4e22959551f79eb15ba06e13d49cfb66eaa71c9351 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b1ac27f80882840270c8b4e22959551f79eb15ba06e13d49cfb66eaa71c9351->enter($__internal_2b1ac27f80882840270c8b4e22959551f79eb15ba06e13d49cfb66eaa71c9351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_2b1ac27f80882840270c8b4e22959551f79eb15ba06e13d49cfb66eaa71c9351->leave($__internal_2b1ac27f80882840270c8b4e22959551f79eb15ba06e13d49cfb66eaa71c9351_prof);

    }

    // line 41
    public function block_footer_container($context, array $blocks = array())
    {
        $__internal_055f5cb28930d08675c3664c1d6cb75a51c5a9aa98e58bada59bc85f0bf29540 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_055f5cb28930d08675c3664c1d6cb75a51c5a9aa98e58bada59bc85f0bf29540->enter($__internal_055f5cb28930d08675c3664c1d6cb75a51c5a9aa98e58bada59bc85f0bf29540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer_container"));

        // line 42
        echo "\t";
        $this->loadTemplate("VODBaseBundle:Base/Components/Footer:footer.html.twig", "VODBaseBundle:Base/Wrappers:wrapper.html.twig", 42)->display($context);
        
        $__internal_055f5cb28930d08675c3664c1d6cb75a51c5a9aa98e58bada59bc85f0bf29540->leave($__internal_055f5cb28930d08675c3664c1d6cb75a51c5a9aa98e58bada59bc85f0bf29540_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Base/Wrappers:wrapper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 42,  141 => 41,  130 => 37,  122 => 38,  120 => 37,  117 => 36,  111 => 35,  103 => 31,  100 => 30,  97 => 29,  94 => 28,  91 => 27,  88 => 26,  85 => 25,  82 => 24,  79 => 23,  76 => 22,  73 => 21,  70 => 20,  64 => 19,  56 => 15,  50 => 14,  39 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'VODBaseBundle:Base:base.html.twig' %}
\t
{#Ahora todas las templates van a depender de este wrapper, aca hacemos todas las comprobaciones necesarias para antes de llegar al contenido mas  #}

{% block navbar_stylesheet %}
{% endblock navbar_stylesheet %}

{# bloque de imagenes de background, si es una pantalla de las de configuracion de usuario lleva imagenes de fondo pero solo en desktop. 

Si es otra pantalla y es necesario el fondo, hay que agregar el bloque en el template correspondiente:
{% block body_class %}class=\"bg-full img-bg-full-{{ random(bg_images) }}\"{% endblock body_class %}
 #}

{% block body_class %}
\t{% include 'VODBaseBundle:Base/Wrappers:operator-validator.html.twig' %}
{% endblock body_class %}

{# bloque de header, cambia la navegación para desktop y mobile, si es mobile chequea si es una pantalla de usuario entonces cambia a la navegación especial para esas pantallas #}
{% block header_container %}
    {% if is_mobile %}
\t\t{% if utils.isProfileSection == 1 %}
\t\t\t{% if section is not defined %}
\t            {% set section = '' %}
\t        {% endif %}
\t        {% include 'VODBaseBundle:Base/Components/Header:header-user-mobile.html.twig' with {'title': section } %}
\t\t{% else %}
\t\t\t{% include 'VODBaseBundle:Base/Components/Header:navbar-mobile.html.twig' %}
\t\t{% endif %}
\t{% else %}
\t\t{% include 'VODBaseBundle:Base/Components/Header:navbar.html.twig' %}
\t{% endif %}
{% endblock header_container %}

{# bloque de body, aca va el contenido, excepto para las pantallas de user, que heredan de wrapper-user.html.twig #}
{% block body_container %}
    <div class=\"container-wrapper\">
        {% block content %}{% endblock content %}
    </div>
{% endblock body_container %}

{% block footer_container %}
\t{% include 'VODBaseBundle:Base/Components/Footer:footer.html.twig' %}
{% endblock footer_container %}", "VODBaseBundle:Base/Wrappers:wrapper.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/Base/Wrappers/wrapper.html.twig");
    }
}
