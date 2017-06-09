<?php

/* VODBaseBundle:Home/Landings/Sections:welcome-landing-section1.html.twig */
class __TwigTemplate_9c2848612a062a1877264561350621e379169271ecf2ae995057b823de7c1f23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'navbar_fake' => array($this, 'block_navbar_fake'),
            'box' => array($this, 'block_box'),
            'slider' => array($this, 'block_slider'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_536245bacf40cb7374d2ee4ca189b0d6ab893e6eb3d249974fc82fc6c9a7f3db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_536245bacf40cb7374d2ee4ca189b0d6ab893e6eb3d249974fc82fc6c9a7f3db->enter($__internal_536245bacf40cb7374d2ee4ca189b0d6ab893e6eb3d249974fc82fc6c9a7f3db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Home/Landings/Sections:welcome-landing-section1.html.twig"));

        // line 2
        echo "
<div id=\"section1\" class=\"hero\">
    
    ";
        // line 5
        $this->displayBlock('navbar_fake', $context, $blocks);
        // line 8
        echo "
\t";
        // line 9
        $this->displayBlock('box', $context, $blocks);
        // line 29
        echo "    
    ";
        // line 30
        $this->displayBlock('slider', $context, $blocks);
        // line 33
        echo "</div>";
        
        $__internal_536245bacf40cb7374d2ee4ca189b0d6ab893e6eb3d249974fc82fc6c9a7f3db->leave($__internal_536245bacf40cb7374d2ee4ca189b0d6ab893e6eb3d249974fc82fc6c9a7f3db_prof);

    }

    // line 5
    public function block_navbar_fake($context, array $blocks = array())
    {
        $__internal_7a299c72406fefb63c0e0dec1e443919dc95677633803b919b6b9c966b58258c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a299c72406fefb63c0e0dec1e443919dc95677633803b919b6b9c966b58258c->enter($__internal_7a299c72406fefb63c0e0dec1e443919dc95677633803b919b6b9c966b58258c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_fake"));

        // line 6
        echo "        ";
        $this->loadTemplate("VODBaseBundle:Base/Components/Header:navbar-fake.html.twig", "VODBaseBundle:Home/Landings/Sections:welcome-landing-section1.html.twig", 6)->display($context);
        // line 7
        echo "    ";
        
        $__internal_7a299c72406fefb63c0e0dec1e443919dc95677633803b919b6b9c966b58258c->leave($__internal_7a299c72406fefb63c0e0dec1e443919dc95677633803b919b6b9c966b58258c_prof);

    }

    // line 9
    public function block_box($context, array $blocks = array())
    {
        $__internal_27e94c848dfd7e8dbd9545c52aff86655beaa943e57a94482786ab648c965b89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27e94c848dfd7e8dbd9545c52aff86655beaa943e57a94482786ab648c965b89->enter($__internal_27e94c848dfd7e8dbd9545c52aff86655beaa943e57a94482786ab648c965b89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "box"));

        // line 10
        echo "\t    <div class=\"box\">
\t        <div class=\"container-fluid text-left\">
\t            <div class=\"row\">
\t                <div class=\"col-lg-9\">
\t                    <h1>";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("landing.hero.title", array(), "landing");
        echo "</h1>
\t                    <ul class=\"list-group featured-list-group\">
\t\t\t\t\t\t\t";
        // line 16
        $context["price"] = ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.currency_symbol", array(), "common") . twig_number_format_filter($this->env, $this->env->getExtension('VOD\BaseBundle\Services\Twig\AppExtension')->defaultPrice(), (isset($context["currency_decimals"]) ? $context["currency_decimals"] : $this->getContext($context, "currency_decimals")), ",", "."));
        // line 17
        echo "                        <li class=\"featured-list-group_item\"><h2>";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("landing.hero.list.first", array("%price%" => (isset($context["price"]) ? $context["price"] : $this->getContext($context, "price"))), "landing");
        echo "</h2></li>
\t                        <li class=\"featured-list-group_item\"><h2>";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("landing.hero.list.second", array(), "landing");
        echo "</h2></li>
\t                        <li class=\"featured-list-group_item\"><h2>";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("landing.hero.list.third", array(), "landing");
        echo "</h2></li>
\t                    </ul>
\t                    <a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("registration");
        echo "\" class=\"btn btn-primary btn-lg\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.buttons.landing_start_button", array(), "common");
        echo "</a>
\t                    <p class=\"disclaimer\">";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.disclaimers.premium_content", array(), "common");
        echo "</p>
\t                    <p class=\"disclaimer\">";
        // line 23
        echo twig_escape_filter($this->env, twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.first_month_promotion.disclaimer", array(), "registration"), array("*" => "")), "html", null, true);
        echo "</p>
\t                </div>
\t            </div>
\t        </div>
\t    </div>
\t";
        
        $__internal_27e94c848dfd7e8dbd9545c52aff86655beaa943e57a94482786ab648c965b89->leave($__internal_27e94c848dfd7e8dbd9545c52aff86655beaa943e57a94482786ab648c965b89_prof);

    }

    // line 30
    public function block_slider($context, array $blocks = array())
    {
        $__internal_71795fba2a31d0e24de572ea47b09a8e0601c2675ab8aa96e3a2d738fffbb438 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71795fba2a31d0e24de572ea47b09a8e0601c2675ab8aa96e3a2d738fffbb438->enter($__internal_71795fba2a31d0e24de572ea47b09a8e0601c2675ab8aa96e3a2d738fffbb438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

        // line 31
        echo "    \t";
        $this->loadTemplate("VODBaseBundle:Components/Slider:slider-landing.html.twig", "VODBaseBundle:Home/Landings/Sections:welcome-landing-section1.html.twig", 31)->display($context);
        // line 32
        echo "    ";
        
        $__internal_71795fba2a31d0e24de572ea47b09a8e0601c2675ab8aa96e3a2d738fffbb438->leave($__internal_71795fba2a31d0e24de572ea47b09a8e0601c2675ab8aa96e3a2d738fffbb438_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Home/Landings/Sections:welcome-landing-section1.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  130 => 32,  127 => 31,  121 => 30,  108 => 23,  104 => 22,  98 => 21,  93 => 19,  89 => 18,  84 => 17,  82 => 16,  77 => 14,  71 => 10,  65 => 9,  58 => 7,  55 => 6,  49 => 5,  42 => 33,  40 => 30,  37 => 29,  35 => 9,  32 => 8,  30 => 5,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'landing' %}

<div id=\"section1\" class=\"hero\">
    
    {% block navbar_fake %}
        {% include 'VODBaseBundle:Base/Components/Header:navbar-fake.html.twig' %}
    {% endblock navbar_fake %}

\t{% block box %}
\t    <div class=\"box\">
\t        <div class=\"container-fluid text-left\">
\t            <div class=\"row\">
\t                <div class=\"col-lg-9\">
\t                    <h1>{{ 'landing.hero.title' | trans | raw }}</h1>
\t                    <ul class=\"list-group featured-list-group\">
\t\t\t\t\t\t\t{% set price = 'common.currency_symbol' | trans({}, 'common') ~ defaultPrice()|number_format(currency_decimals, ',', '.') %}
                        <li class=\"featured-list-group_item\"><h2>{{ 'landing.hero.list.first'  | trans({'%price%': price})  | raw }}</h2></li>
\t                        <li class=\"featured-list-group_item\"><h2>{{ 'landing.hero.list.second' | trans  | raw }}</h2></li>
\t                        <li class=\"featured-list-group_item\"><h2>{{ 'landing.hero.list.third'  | trans  | raw }}</h2></li>
\t                    </ul>
\t                    <a href=\"{{ path('registration') }}\" class=\"btn btn-primary btn-lg\">{{ 'common.buttons.landing_start_button' | trans({}, 'common') | raw }}</a>
\t                    <p class=\"disclaimer\">{{ 'common.disclaimers.premium_content' | trans({}, 'common') | raw }}</p>
\t                    <p class=\"disclaimer\">{{ 'registration.first_month_promotion.disclaimer' | trans({}, 'registration')  | replace({'*': ''}) }}</p>
\t                </div>
\t            </div>
\t        </div>
\t    </div>
\t{% endblock box %}
    
    {% block slider %}
    \t{% include 'VODBaseBundle:Components/Slider:slider-landing.html.twig' %}
    {% endblock %}
</div>", "VODBaseBundle:Home/Landings/Sections:welcome-landing-section1.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/Home/Landings/Sections/welcome-landing-section1.html.twig");
    }
}
