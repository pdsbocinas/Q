<?php

/* VODBaseBundle:Base/Components/Header:navbar.html.twig */
class __TwigTemplate_1fbb63304b58e71ce653d356229c95b99a6f1a06d493504cd77d3baa976cb6ef extends Twig_Template
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
            'navbar_search' => array($this, 'block_navbar_search'),
            'flap' => array($this, 'block_flap'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4a9ce58576d55115eebf75cf2ed722a31ac27b503d861d57344fda9f33028d34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a9ce58576d55115eebf75cf2ed722a31ac27b503d861d57344fda9f33028d34->enter($__internal_4a9ce58576d55115eebf75cf2ed722a31ac27b503d861d57344fda9f33028d34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Base/Components/Header:navbar.html.twig"));

        // line 3
        echo "
<nav ";
        // line 4
        $this->displayBlock('navbar_class', $context, $blocks);
        echo ">
    ";
        // line 5
        $this->displayBlock('navbar_content', $context, $blocks);
        // line 75
        echo "</nav>
";
        
        $__internal_4a9ce58576d55115eebf75cf2ed722a31ac27b503d861d57344fda9f33028d34->leave($__internal_4a9ce58576d55115eebf75cf2ed722a31ac27b503d861d57344fda9f33028d34_prof);

    }

    // line 4
    public function block_navbar_class($context, array $blocks = array())
    {
        $__internal_57d396eff81ff850a5862e5babdf519d67d1b4b96a3be577b22e54533037e043 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57d396eff81ff850a5862e5babdf519d67d1b4b96a3be577b22e54533037e043->enter($__internal_57d396eff81ff850a5862e5babdf519d67d1b4b96a3be577b22e54533037e043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_class"));

        echo "class=\"navbar navbar-fixed-top\"";
        
        $__internal_57d396eff81ff850a5862e5babdf519d67d1b4b96a3be577b22e54533037e043->leave($__internal_57d396eff81ff850a5862e5babdf519d67d1b4b96a3be577b22e54533037e043_prof);

    }

    // line 5
    public function block_navbar_content($context, array $blocks = array())
    {
        $__internal_3f0d788e6e97b92c832560e894a45bfb63cbf0d5d5cafb898f6c6228f7a3f2cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f0d788e6e97b92c832560e894a45bfb63cbf0d5d5cafb898f6c6228f7a3f2cf->enter($__internal_3f0d788e6e97b92c832560e894a45bfb63cbf0d5d5cafb898f6c6228f7a3f2cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_content"));

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
        $this->loadTemplate("VODBaseBundle:Base/Components/Header:navbar-help-center.html.twig", "VODBaseBundle:Base/Components/Header:navbar.html.twig", 35)->display($context);
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
        // line 53
        echo "                ";
        $this->displayBlock('navbar_search', $context, $blocks);
        // line 67
        echo "
                ";
        // line 69
        echo "                ";
        $this->displayBlock('flap', $context, $blocks);
        // line 72
        echo "            ";
        // line 73
        echo "        </div>
    ";
        
        $__internal_3f0d788e6e97b92c832560e894a45bfb63cbf0d5d5cafb898f6c6228f7a3f2cf->leave($__internal_3f0d788e6e97b92c832560e894a45bfb63cbf0d5d5cafb898f6c6228f7a3f2cf_prof);

    }

    // line 10
    public function block_navbar_brand($context, array $blocks = array())
    {
        $__internal_1b40fa375900417be75b12001f4e8911ebcb972594a6a88c599851279f22e761 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b40fa375900417be75b12001f4e8911ebcb972594a6a88c599851279f22e761->enter($__internal_1b40fa375900417be75b12001f4e8911ebcb972594a6a88c599851279f22e761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_brand"));

        // line 11
        echo "                        ";
        $this->loadTemplate("VODBaseBundle:Base/Components/Header:navbar-brand.html.twig", "VODBaseBundle:Base/Components/Header:navbar.html.twig", 11)->display($context);
        // line 12
        echo "                    ";
        
        $__internal_1b40fa375900417be75b12001f4e8911ebcb972594a6a88c599851279f22e761->leave($__internal_1b40fa375900417be75b12001f4e8911ebcb972594a6a88c599851279f22e761_prof);

    }

    // line 15
    public function block_navbar_left($context, array $blocks = array())
    {
        $__internal_b11628cba11addeec0f20b0b912f7c099fdf7843f2ebe1a632c4817185dc9fe9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b11628cba11addeec0f20b0b912f7c099fdf7843f2ebe1a632c4817185dc9fe9->enter($__internal_b11628cba11addeec0f20b0b912f7c099fdf7843f2ebe1a632c4817185dc9fe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_left"));

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
        $this->loadTemplate("VODBaseBundle:Base/Components/Header:navbar.html.twig", "VODBaseBundle:Base/Components/Header:navbar.html.twig", 22, "2087672482")->display($context);
        // line 23
        echo "                        </div>

                        ";
        // line 25
        $this->displayBlock('itv_button', $context, $blocks);
        // line 28
        echo "
                    ";
        
        $__internal_b11628cba11addeec0f20b0b912f7c099fdf7843f2ebe1a632c4817185dc9fe9->leave($__internal_b11628cba11addeec0f20b0b912f7c099fdf7843f2ebe1a632c4817185dc9fe9_prof);

    }

    // line 25
    public function block_itv_button($context, array $blocks = array())
    {
        $__internal_699db98deda04d872e40bcc76b988af1e49a6410d80332865df6354eaea882c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_699db98deda04d872e40bcc76b988af1e49a6410d80332865df6354eaea882c5->enter($__internal_699db98deda04d872e40bcc76b988af1e49a6410d80332865df6354eaea882c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "itv_button"));

        // line 26
        echo "                            ";
        $this->loadTemplate("VODBaseBundle:Base/Components/Header:itv-button.html.twig", "VODBaseBundle:Base/Components/Header:navbar.html.twig", 26)->display($context);
        // line 27
        echo "                        ";
        
        $__internal_699db98deda04d872e40bcc76b988af1e49a6410d80332865df6354eaea882c5->leave($__internal_699db98deda04d872e40bcc76b988af1e49a6410d80332865df6354eaea882c5_prof);

    }

    // line 39
    public function block_navbar_user($context, array $blocks = array())
    {
        $__internal_aa0a79742782d720c51d390f153b9cdbe1cb31f97e76380540601961a895a767 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa0a79742782d720c51d390f153b9cdbe1cb31f97e76380540601961a895a767->enter($__internal_aa0a79742782d720c51d390f153b9cdbe1cb31f97e76380540601961a895a767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_user"));

        // line 40
        echo "                        ";
        $this->loadTemplate("VODBaseBundle:Base/Components/Header:navbar-user.html.twig", "VODBaseBundle:Base/Components/Header:navbar.html.twig", 40)->display($context);
        // line 41
        echo "                    ";
        
        $__internal_aa0a79742782d720c51d390f153b9cdbe1cb31f97e76380540601961a895a767->leave($__internal_aa0a79742782d720c51d390f153b9cdbe1cb31f97e76380540601961a895a767_prof);

    }

    // line 46
    public function block_navbar_right($context, array $blocks = array())
    {
        $__internal_ee36ba9f8367713a5106d014eaedd686b523798f503e5a13487f6f9a06dc5106 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee36ba9f8367713a5106d014eaedd686b523798f503e5a13487f6f9a06dc5106->enter($__internal_ee36ba9f8367713a5106d014eaedd686b523798f503e5a13487f6f9a06dc5106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_right"));

        // line 47
        echo "                        ";
        $this->loadTemplate("VODBaseBundle:Base/Components/Header:navbar-right.html.twig", "VODBaseBundle:Base/Components/Header:navbar.html.twig", 47)->display($context);
        // line 48
        echo "                    ";
        
        $__internal_ee36ba9f8367713a5106d014eaedd686b523798f503e5a13487f6f9a06dc5106->leave($__internal_ee36ba9f8367713a5106d014eaedd686b523798f503e5a13487f6f9a06dc5106_prof);

    }

    // line 53
    public function block_navbar_search($context, array $blocks = array())
    {
        $__internal_217a3c860f666eb50eca1e9f209520329da98f7892f780b239d2882aed72ce41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_217a3c860f666eb50eca1e9f209520329da98f7892f780b239d2882aed72ce41->enter($__internal_217a3c860f666eb50eca1e9f209520329da98f7892f780b239d2882aed72ce41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_search"));

        // line 54
        echo "                    <div class=\"navbar-right\">
                        <form class=\"navbar__form\">
                            <div class=\"input-group search\">
                                <input id=\"input-search\" type=\"text\" class=\"form-control\" maxlength=\"30\" placeholder=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("base.navbar.search", array(), "base"), "html", null, true);
        echo "\">
                                <span class=\"input-group-btn\">
                                    <button class=\"btn\" type=\"button\">
                                        <i class=\"fa fa-lg fa-flip-horizontal fa-search\"></i>
                                    </button>
                                </span>
                            </div>
                        </form>
                    </div>
                ";
        
        $__internal_217a3c860f666eb50eca1e9f209520329da98f7892f780b239d2882aed72ce41->leave($__internal_217a3c860f666eb50eca1e9f209520329da98f7892f780b239d2882aed72ce41_prof);

    }

    // line 69
    public function block_flap($context, array $blocks = array())
    {
        $__internal_a7b7e0ac529a51a44d96938f30e1c0a3d43673dcd10787e0dd6ac4efbfdb1fc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7b7e0ac529a51a44d96938f30e1c0a3d43673dcd10787e0dd6ac4efbfdb1fc7->enter($__internal_a7b7e0ac529a51a44d96938f30e1c0a3d43673dcd10787e0dd6ac4efbfdb1fc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flap"));

        // line 70
        echo "                    ";
        $this->loadTemplate("VODBaseBundle:Base/Components/Header:flap.html.twig", "VODBaseBundle:Base/Components/Header:navbar.html.twig", 70)->display($context);
        // line 71
        echo "                ";
        
        $__internal_a7b7e0ac529a51a44d96938f30e1c0a3d43673dcd10787e0dd6ac4efbfdb1fc7->leave($__internal_a7b7e0ac529a51a44d96938f30e1c0a3d43673dcd10787e0dd6ac4efbfdb1fc7_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Base/Components/Header:navbar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  272 => 71,  269 => 70,  263 => 69,  246 => 57,  241 => 54,  235 => 53,  228 => 48,  225 => 47,  219 => 46,  212 => 41,  209 => 40,  203 => 39,  196 => 27,  193 => 26,  187 => 25,  179 => 28,  177 => 25,  173 => 23,  171 => 22,  165 => 19,  160 => 16,  154 => 15,  147 => 12,  144 => 11,  138 => 10,  130 => 73,  128 => 72,  125 => 69,  122 => 67,  119 => 53,  116 => 51,  112 => 49,  110 => 46,  107 => 45,  104 => 44,  101 => 42,  98 => 39,  95 => 38,  92 => 36,  89 => 35,  87 => 34,  84 => 32,  81 => 30,  78 => 15,  75 => 13,  72 => 10,  69 => 8,  66 => 6,  60 => 5,  48 => 4,  40 => 75,  38 => 5,  34 => 4,  31 => 3,);
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

                {# bloque de busqueda #}
                {% block navbar_search %}
                    <div class=\"navbar-right\">
                        <form class=\"navbar__form\">
                            <div class=\"input-group search\">
                                <input id=\"input-search\" type=\"text\" class=\"form-control\" maxlength=\"30\" placeholder=\"{{ 'base.navbar.search' | trans }}\">
                                <span class=\"input-group-btn\">
                                    <button class=\"btn\" type=\"button\">
                                        <i class=\"fa fa-lg fa-flip-horizontal fa-search\"></i>
                                    </button>
                                </span>
                            </div>
                        </form>
                    </div>
                {% endblock navbar_search %}

                {# bloque de navbar toogle que se usa en sportiva #}
                {% block flap %}
                    {% include 'VODBaseBundle:Base/Components/Header:flap.html.twig' %}
                {% endblock %}
            {# FIN BLOQUE DERECHO  (nombre de usuario, botones de log in y registro, ayuda ) #}
        </div>
    {% endblock navbar_content %}
</nav>
", "VODBaseBundle:Base/Components/Header:navbar.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/Base/Components/Header/navbar.html.twig");
    }
}


/* VODBaseBundle:Base/Components/Header:navbar.html.twig */
class __TwigTemplate_1fbb63304b58e71ce653d356229c95b99a6f1a06d493504cd77d3baa976cb6ef_2087672482 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("VODBaseBundle:Base/Components/Header:dropdown-tags.html.twig", "VODBaseBundle:Base/Components/Header:navbar.html.twig", 22);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "VODBaseBundle:Base/Components/Header:dropdown-tags.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d9532264987d33a7f27951ec22a1f9a89d3f5ac9407c5580602479b8ad8d309c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9532264987d33a7f27951ec22a1f9a89d3f5ac9407c5580602479b8ad8d309c->enter($__internal_d9532264987d33a7f27951ec22a1f9a89d3f5ac9407c5580602479b8ad8d309c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Base/Components/Header:navbar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9532264987d33a7f27951ec22a1f9a89d3f5ac9407c5580602479b8ad8d309c->leave($__internal_d9532264987d33a7f27951ec22a1f9a89d3f5ac9407c5580602479b8ad8d309c_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Base/Components/Header:navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  386 => 22,  272 => 71,  269 => 70,  263 => 69,  246 => 57,  241 => 54,  235 => 53,  228 => 48,  225 => 47,  219 => 46,  212 => 41,  209 => 40,  203 => 39,  196 => 27,  193 => 26,  187 => 25,  179 => 28,  177 => 25,  173 => 23,  171 => 22,  165 => 19,  160 => 16,  154 => 15,  147 => 12,  144 => 11,  138 => 10,  130 => 73,  128 => 72,  125 => 69,  122 => 67,  119 => 53,  116 => 51,  112 => 49,  110 => 46,  107 => 45,  104 => 44,  101 => 42,  98 => 39,  95 => 38,  92 => 36,  89 => 35,  87 => 34,  84 => 32,  81 => 30,  78 => 15,  75 => 13,  72 => 10,  69 => 8,  66 => 6,  60 => 5,  48 => 4,  40 => 75,  38 => 5,  34 => 4,  31 => 3,);
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

                {# bloque de busqueda #}
                {% block navbar_search %}
                    <div class=\"navbar-right\">
                        <form class=\"navbar__form\">
                            <div class=\"input-group search\">
                                <input id=\"input-search\" type=\"text\" class=\"form-control\" maxlength=\"30\" placeholder=\"{{ 'base.navbar.search' | trans }}\">
                                <span class=\"input-group-btn\">
                                    <button class=\"btn\" type=\"button\">
                                        <i class=\"fa fa-lg fa-flip-horizontal fa-search\"></i>
                                    </button>
                                </span>
                            </div>
                        </form>
                    </div>
                {% endblock navbar_search %}

                {# bloque de navbar toogle que se usa en sportiva #}
                {% block flap %}
                    {% include 'VODBaseBundle:Base/Components/Header:flap.html.twig' %}
                {% endblock %}
            {# FIN BLOQUE DERECHO  (nombre de usuario, botones de log in y registro, ayuda ) #}
        </div>
    {% endblock navbar_content %}
</nav>
", "VODBaseBundle:Base/Components/Header:navbar.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/Base/Components/Header/navbar.html.twig");
    }
}
