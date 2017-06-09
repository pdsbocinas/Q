<?php

/* VODItvBaseBundle:Base/Components/Header:navbar.html.twig */
class __TwigTemplate_c2c171e7abe8d30f4abf71be531fcdd40ce4e0c4081bd55d8d17ac4b546ceba6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'navbar_class' => array($this, 'block_navbar_class'),
            'navbar_content' => array($this, 'block_navbar_content'),
            'navbar_brand' => array($this, 'block_navbar_brand'),
            'navbar_left' => array($this, 'block_navbar_left'),
            'itv_button' => array($this, 'block_itv_button'),
            'navbar_user' => array($this, 'block_navbar_user'),
            'navbar_right' => array($this, 'block_navbar_right'),
            'flap' => array($this, 'block_flap'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_527fdfed643c270e3c45393033e2e6eb3e022b9fab7156857c2c5e9b8516a251 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_527fdfed643c270e3c45393033e2e6eb3e022b9fab7156857c2c5e9b8516a251->enter($__internal_527fdfed643c270e3c45393033e2e6eb3e022b9fab7156857c2c5e9b8516a251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODItvBaseBundle:Base/Components/Header:navbar.html.twig"));

        // line 3
        echo "
<nav ";
        // line 4
        $this->displayBlock('navbar_class', $context, $blocks);
        echo ">
    ";
        // line 5
        $this->displayBlock('navbar_content', $context, $blocks);
        // line 60
        echo "</nav>
";
        
        $__internal_527fdfed643c270e3c45393033e2e6eb3e022b9fab7156857c2c5e9b8516a251->leave($__internal_527fdfed643c270e3c45393033e2e6eb3e022b9fab7156857c2c5e9b8516a251_prof);

    }

    // line 4
    public function block_navbar_class($context, array $blocks = array())
    {
        $__internal_d35fae07a65a1af8e0f0e10cecc281462d203402dcdc8a77429a0ef62c2e0c05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d35fae07a65a1af8e0f0e10cecc281462d203402dcdc8a77429a0ef62c2e0c05->enter($__internal_d35fae07a65a1af8e0f0e10cecc281462d203402dcdc8a77429a0ef62c2e0c05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_class"));

        echo "class=\"navbar navbar-fixed-top\"";
        
        $__internal_d35fae07a65a1af8e0f0e10cecc281462d203402dcdc8a77429a0ef62c2e0c05->leave($__internal_d35fae07a65a1af8e0f0e10cecc281462d203402dcdc8a77429a0ef62c2e0c05_prof);

    }

    // line 5
    public function block_navbar_content($context, array $blocks = array())
    {
        $__internal_47d5c5243f1ef48ff5b5a7acb673923df254a02f9a12f57d056a15732fdbc9d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47d5c5243f1ef48ff5b5a7acb673923df254a02f9a12f57d056a15732fdbc9d7->enter($__internal_47d5c5243f1ef48ff5b5a7acb673923df254a02f9a12f57d056a15732fdbc9d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_content"));

        // line 6
        echo "        <div class=\"container-fluid\">
            ";
        // line 8
        echo "                <div class=\"navbar-header\">
                    ";
        // line 10
        echo "                    ";
        $this->displayBlock('navbar_brand', $context, $blocks);
        // line 13
        echo "
                    ";
        // line 15
        echo "                    ";
        $this->displayBlock('navbar_left', $context, $blocks);
        // line 30
        echo "                </div>
            ";
        // line 32
        echo "
            ";
        // line 34
        echo "                ";
        // line 35
        echo "                ";
        $this->loadTemplate("VODBaseBundle:Base/Components/Header:navbar-help-center.html.twig", "VODItvBaseBundle:Base/Components/Header:navbar.html.twig", 35)->display($context);
        // line 36
        echo "
                ";
        // line 38
        echo "                ";
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 39
            echo "                    ";
            $this->displayBlock('navbar_user', $context, $blocks);
            // line 42
            echo "
                ";
            // line 44
            echo "                ";
        } else {
            // line 45
            echo "
                    ";
            // line 46
            $this->displayBlock('navbar_right', $context, $blocks);
            // line 49
            echo "
                ";
        }
        // line 51
        echo "
               
                ";
        // line 54
        echo "                ";
        $this->displayBlock('flap', $context, $blocks);
        // line 57
        echo "            ";
        // line 58
        echo "        </div>
    ";
        
        $__internal_47d5c5243f1ef48ff5b5a7acb673923df254a02f9a12f57d056a15732fdbc9d7->leave($__internal_47d5c5243f1ef48ff5b5a7acb673923df254a02f9a12f57d056a15732fdbc9d7_prof);

    }

    // line 10
    public function block_navbar_brand($context, array $blocks = array())
    {
        $__internal_4a0d9ac86a33aa220d6b1850cd5cdf9033cf1f61ea4d00a6ce7aaee4ba0fb582 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a0d9ac86a33aa220d6b1850cd5cdf9033cf1f61ea4d00a6ce7aaee4ba0fb582->enter($__internal_4a0d9ac86a33aa220d6b1850cd5cdf9033cf1f61ea4d00a6ce7aaee4ba0fb582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_brand"));

        // line 11
        echo "                        ";
        $this->loadTemplate("VODBaseBundle:Base/Components/Header:navbar-brand.html.twig", "VODItvBaseBundle:Base/Components/Header:navbar.html.twig", 11)->display($context);
        // line 12
        echo "                    ";
        
        $__internal_4a0d9ac86a33aa220d6b1850cd5cdf9033cf1f61ea4d00a6ce7aaee4ba0fb582->leave($__internal_4a0d9ac86a33aa220d6b1850cd5cdf9033cf1f61ea4d00a6ce7aaee4ba0fb582_prof);

    }

    // line 15
    public function block_navbar_left($context, array $blocks = array())
    {
        $__internal_ad50a87ddc53b2c38d691f6ee9b9fafa96956399cef901f12fb191d24c553f8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad50a87ddc53b2c38d691f6ee9b9fafa96956399cef901f12fb191d24c553f8d->enter($__internal_ad50a87ddc53b2c38d691f6ee9b9fafa96956399cef901f12fb191d24c553f8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_left"));

        // line 16
        echo "                        <div class=\"navbar__explore-button dropdown\">
                            <a href=\"#\" id=\"exploreButton\" class=\"dropdown-toggle dropdown-explore btn btn-link_primary\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"
                               data-toggle=\"dropdown\" data-target=\"#\">
                                ";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("base.navbar.explore", array(), "base"), "html", null, true);
        echo "
                                <span class=\"caret\"></span>
                            </a>
                            ";
        // line 22
        $this->loadTemplate("VODItvBaseBundle:Base/Components/Header:navbar.html.twig", "VODItvBaseBundle:Base/Components/Header:navbar.html.twig", 22, "904606936")->display($context);
        // line 23
        echo "                        </div>

                        ";
        // line 25
        $this->displayBlock('itv_button', $context, $blocks);
        // line 28
        echo "
                    ";
        
        $__internal_ad50a87ddc53b2c38d691f6ee9b9fafa96956399cef901f12fb191d24c553f8d->leave($__internal_ad50a87ddc53b2c38d691f6ee9b9fafa96956399cef901f12fb191d24c553f8d_prof);

    }

    // line 25
    public function block_itv_button($context, array $blocks = array())
    {
        $__internal_92fcfe2081a7c299fc6b81a4804dd7b41a6b3cf4c8b8acda22bc92a51d40907d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92fcfe2081a7c299fc6b81a4804dd7b41a6b3cf4c8b8acda22bc92a51d40907d->enter($__internal_92fcfe2081a7c299fc6b81a4804dd7b41a6b3cf4c8b8acda22bc92a51d40907d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "itv_button"));

        // line 26
        echo "                            ";
        $this->loadTemplate("VODBaseBundle:Base/Components/Header:itv-button.html.twig", "VODItvBaseBundle:Base/Components/Header:navbar.html.twig", 26)->display($context);
        // line 27
        echo "                        ";
        
        $__internal_92fcfe2081a7c299fc6b81a4804dd7b41a6b3cf4c8b8acda22bc92a51d40907d->leave($__internal_92fcfe2081a7c299fc6b81a4804dd7b41a6b3cf4c8b8acda22bc92a51d40907d_prof);

    }

    // line 39
    public function block_navbar_user($context, array $blocks = array())
    {
        $__internal_0ca47fd30aeadace48acda590c225356b0c5670933bfcee9d473a36d9ecbf56a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ca47fd30aeadace48acda590c225356b0c5670933bfcee9d473a36d9ecbf56a->enter($__internal_0ca47fd30aeadace48acda590c225356b0c5670933bfcee9d473a36d9ecbf56a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_user"));

        // line 40
        echo "                        ";
        $this->loadTemplate("VODBaseBundle:Base/Components/Header:navbar-user.html.twig", "VODItvBaseBundle:Base/Components/Header:navbar.html.twig", 40)->display($context);
        // line 41
        echo "                    ";
        
        $__internal_0ca47fd30aeadace48acda590c225356b0c5670933bfcee9d473a36d9ecbf56a->leave($__internal_0ca47fd30aeadace48acda590c225356b0c5670933bfcee9d473a36d9ecbf56a_prof);

    }

    // line 46
    public function block_navbar_right($context, array $blocks = array())
    {
        $__internal_00a76ca403bd85f65c00db551352f2bc7f5b25fbd4b3a0f7e142d2761e3b29b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00a76ca403bd85f65c00db551352f2bc7f5b25fbd4b3a0f7e142d2761e3b29b4->enter($__internal_00a76ca403bd85f65c00db551352f2bc7f5b25fbd4b3a0f7e142d2761e3b29b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_right"));

        // line 47
        echo "                        ";
        $this->loadTemplate("VODBaseBundle:Base/Components/Header:navbar-right.html.twig", "VODItvBaseBundle:Base/Components/Header:navbar.html.twig", 47)->display($context);
        // line 48
        echo "                    ";
        
        $__internal_00a76ca403bd85f65c00db551352f2bc7f5b25fbd4b3a0f7e142d2761e3b29b4->leave($__internal_00a76ca403bd85f65c00db551352f2bc7f5b25fbd4b3a0f7e142d2761e3b29b4_prof);

    }

    // line 54
    public function block_flap($context, array $blocks = array())
    {
        $__internal_37900aa61f8d4998b80558095667e8a8a5539f26d9d1c5f1db491ee02b4aeb81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37900aa61f8d4998b80558095667e8a8a5539f26d9d1c5f1db491ee02b4aeb81->enter($__internal_37900aa61f8d4998b80558095667e8a8a5539f26d9d1c5f1db491ee02b4aeb81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flap"));

        // line 55
        echo "                    ";
        $this->loadTemplate("VODBaseBundle:Base/Components/Header:flap.html.twig", "VODItvBaseBundle:Base/Components/Header:navbar.html.twig", 55)->display($context);
        // line 56
        echo "                ";
        
        $__internal_37900aa61f8d4998b80558095667e8a8a5539f26d9d1c5f1db491ee02b4aeb81->leave($__internal_37900aa61f8d4998b80558095667e8a8a5539f26d9d1c5f1db491ee02b4aeb81_prof);

    }

    public function getTemplateName()
    {
        return "VODItvBaseBundle:Base/Components/Header:navbar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  238 => 56,  235 => 55,  229 => 54,  222 => 48,  219 => 47,  213 => 46,  206 => 41,  203 => 40,  197 => 39,  190 => 27,  187 => 26,  181 => 25,  173 => 28,  171 => 25,  167 => 23,  165 => 22,  159 => 19,  154 => 16,  148 => 15,  141 => 12,  138 => 11,  132 => 10,  124 => 58,  122 => 57,  119 => 54,  115 => 51,  111 => 49,  109 => 46,  106 => 45,  103 => 44,  100 => 42,  97 => 39,  94 => 38,  91 => 36,  88 => 35,  86 => 34,  83 => 32,  80 => 30,  77 => 15,  74 => 13,  71 => 10,  68 => 8,  65 => 6,  59 => 5,  47 => 4,  39 => 60,  37 => 5,  33 => 4,  30 => 3,);
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
{# Barra de navegacion basica, es la que se ve en todo el sitio excepto mobile, tablet y la vista landing #}

<nav {% block navbar_class %}class=\"navbar navbar-fixed-top\"{% endblock navbar_class %}>
    {% block navbar_content %}
        <div class=\"container-fluid\">
            {# BLOQUE logo y botón/dropdown de explorar #}
                <div class=\"navbar-header\">
                    {# Logo #}
                    {% block navbar_brand %}
                        {% include 'VODBaseBundle:Base/Components/Header:navbar-brand.html.twig' %}
                    {% endblock navbar_brand %}

                    {#  Botón y dropdown de explorar #}
                    {% block navbar_left %}
                        <div class=\"navbar__explore-button dropdown\">
                            <a href=\"#\" id=\"exploreButton\" class=\"dropdown-toggle dropdown-explore btn btn-link_primary\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"
                               data-toggle=\"dropdown\" data-target=\"#\">
                                {{ 'base.navbar.explore' | trans }}
                                <span class=\"caret\"></span>
                            </a>
                            {% embed 'VODBaseBundle:Base/Components/Header:dropdown-tags.html.twig' %}{% endembed %}
                        </div>

                        {% block itv_button %}
                            {% include 'VODBaseBundle:Base/Components/Header:itv-button.html.twig' %}
                        {% endblock itv_button %}

                    {% endblock navbar_left %}
                </div>
            {# FIN BLOQUE logo y botonn/dropdown de explorar #}

            {# BLOQUE DERECHO  (nombre de usuario, botones de log in y registro, Centro de Ayuda ) #}
                {# Boton de centro de ayuda #}
                {% include 'VODBaseBundle:Base/Components/Header:navbar-help-center.html.twig' %}

                {# Si el usuario esta logueado muestra el avatar, el nombre y el dropdown de opciones #}
                {% if app.user %}
                    {% block navbar_user %}
                        {% include 'VODBaseBundle:Base/Components/Header:navbar-user.html.twig' %}
                    {% endblock navbar_user %}

                {# Si no hay user logueado muestra los botones de ingresar y registro #}
                {% else %}

                    {% block navbar_right %}
                        {% include 'VODBaseBundle:Base/Components/Header:navbar-right.html.twig' %}
                    {% endblock navbar_right %}

                {% endif %}

               
                {# bloque de navbar toogle que se usa en sportiva #}
                {% block flap %}
                    {% include 'VODBaseBundle:Base/Components/Header:flap.html.twig' %}
                {% endblock %}
            {# FIN BLOQUE DERECHO  (nombre de usuario, botones de log in y registro, ayuda ) #}
        </div>
    {% endblock navbar_content %}
</nav>
", "VODItvBaseBundle:Base/Components/Header:navbar.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/itv-base-bundle/Resources/views/Base/Components/Header/navbar.html.twig");
    }
}


/* VODItvBaseBundle:Base/Components/Header:navbar.html.twig */
class __TwigTemplate_c2c171e7abe8d30f4abf71be531fcdd40ce4e0c4081bd55d8d17ac4b546ceba6_904606936 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("VODBaseBundle:Base/Components/Header:dropdown-tags.html.twig", "VODItvBaseBundle:Base/Components/Header:navbar.html.twig", 22);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "VODBaseBundle:Base/Components/Header:dropdown-tags.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_167360aadccd28f8de98e395aaca0526313b542e163beca159cd352fda7e100a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_167360aadccd28f8de98e395aaca0526313b542e163beca159cd352fda7e100a->enter($__internal_167360aadccd28f8de98e395aaca0526313b542e163beca159cd352fda7e100a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODItvBaseBundle:Base/Components/Header:navbar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_167360aadccd28f8de98e395aaca0526313b542e163beca159cd352fda7e100a->leave($__internal_167360aadccd28f8de98e395aaca0526313b542e163beca159cd352fda7e100a_prof);

    }

    public function getTemplateName()
    {
        return "VODItvBaseBundle:Base/Components/Header:navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  337 => 22,  238 => 56,  235 => 55,  229 => 54,  222 => 48,  219 => 47,  213 => 46,  206 => 41,  203 => 40,  197 => 39,  190 => 27,  187 => 26,  181 => 25,  173 => 28,  171 => 25,  167 => 23,  165 => 22,  159 => 19,  154 => 16,  148 => 15,  141 => 12,  138 => 11,  132 => 10,  124 => 58,  122 => 57,  119 => 54,  115 => 51,  111 => 49,  109 => 46,  106 => 45,  103 => 44,  100 => 42,  97 => 39,  94 => 38,  91 => 36,  88 => 35,  86 => 34,  83 => 32,  80 => 30,  77 => 15,  74 => 13,  71 => 10,  68 => 8,  65 => 6,  59 => 5,  47 => 4,  39 => 60,  37 => 5,  33 => 4,  30 => 3,);
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
{# Barra de navegacion basica, es la que se ve en todo el sitio excepto mobile, tablet y la vista landing #}

<nav {% block navbar_class %}class=\"navbar navbar-fixed-top\"{% endblock navbar_class %}>
    {% block navbar_content %}
        <div class=\"container-fluid\">
            {# BLOQUE logo y botón/dropdown de explorar #}
                <div class=\"navbar-header\">
                    {# Logo #}
                    {% block navbar_brand %}
                        {% include 'VODBaseBundle:Base/Components/Header:navbar-brand.html.twig' %}
                    {% endblock navbar_brand %}

                    {#  Botón y dropdown de explorar #}
                    {% block navbar_left %}
                        <div class=\"navbar__explore-button dropdown\">
                            <a href=\"#\" id=\"exploreButton\" class=\"dropdown-toggle dropdown-explore btn btn-link_primary\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"
                               data-toggle=\"dropdown\" data-target=\"#\">
                                {{ 'base.navbar.explore' | trans }}
                                <span class=\"caret\"></span>
                            </a>
                            {% embed 'VODBaseBundle:Base/Components/Header:dropdown-tags.html.twig' %}{% endembed %}
                        </div>

                        {% block itv_button %}
                            {% include 'VODBaseBundle:Base/Components/Header:itv-button.html.twig' %}
                        {% endblock itv_button %}

                    {% endblock navbar_left %}
                </div>
            {# FIN BLOQUE logo y botonn/dropdown de explorar #}

            {# BLOQUE DERECHO  (nombre de usuario, botones de log in y registro, Centro de Ayuda ) #}
                {# Boton de centro de ayuda #}
                {% include 'VODBaseBundle:Base/Components/Header:navbar-help-center.html.twig' %}

                {# Si el usuario esta logueado muestra el avatar, el nombre y el dropdown de opciones #}
                {% if app.user %}
                    {% block navbar_user %}
                        {% include 'VODBaseBundle:Base/Components/Header:navbar-user.html.twig' %}
                    {% endblock navbar_user %}

                {# Si no hay user logueado muestra los botones de ingresar y registro #}
                {% else %}

                    {% block navbar_right %}
                        {% include 'VODBaseBundle:Base/Components/Header:navbar-right.html.twig' %}
                    {% endblock navbar_right %}

                {% endif %}

               
                {# bloque de navbar toogle que se usa en sportiva #}
                {% block flap %}
                    {% include 'VODBaseBundle:Base/Components/Header:flap.html.twig' %}
                {% endblock %}
            {# FIN BLOQUE DERECHO  (nombre de usuario, botones de log in y registro, ayuda ) #}
        </div>
    {% endblock navbar_content %}
</nav>
", "VODItvBaseBundle:Base/Components/Header:navbar.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/itv-base-bundle/Resources/views/Base/Components/Header/navbar.html.twig");
    }
}
