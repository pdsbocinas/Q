<?php

/* VODBaseBundle:Home/Landings/Sections:welcome-landing-section7.html.twig */
class __TwigTemplate_a7744f2a93a1e86f948da71cef2bb36745afb1a48e4203b9a782653227f960d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_128fd5a417bb455e53cdefa487d2e7ec0cf02290c25ad93c4a7d1ec1341354c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_128fd5a417bb455e53cdefa487d2e7ec0cf02290c25ad93c4a7d1ec1341354c4->enter($__internal_128fd5a417bb455e53cdefa487d2e7ec0cf02290c25ad93c4a7d1ec1341354c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Home/Landings/Sections:welcome-landing-section7.html.twig"));

        // line 1
        echo "<div id=\"section7\" class=\"call-to-action\">
\t<div class=\"box text-center\">
\t\t<div class=\"container\">
\t\t\t<div class=\"col-lg-12\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-10 col-lg-offset-1\">
\t\t\t\t\t\t<h2>";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("landing.calltoaction.title", array(), "landing");
        echo "</h2>
\t\t\t\t\t\t<h3>";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("landing.calltoaction.subtitle", array(), "landing");
        echo "</h3>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-8 col-lg-offset-2\">
\t\t\t\t";
        // line 12
        if ((isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
            echo " 
\t\t\t\t\t<img class=\"img-responsive\" src=\"";
            // line 13
            echo twig_escape_filter($this->env, ((isset($context["cdn_url"]) ? $context["cdn_url"] : $this->getContext($context, "cdn_url")) . "/common/portadas-mobile.png"), "html", null, true);
            echo "\" alt=\"\">
\t\t\t\t";
        } else {
            // line 15
            echo "\t\t\t\t\t<img class=\"img-responsive\" src=\"";
            echo twig_escape_filter($this->env, ((isset($context["cdn_url"]) ? $context["cdn_url"] : $this->getContext($context, "cdn_url")) . "/common/portadas.png"), "html", null, true);
            echo "\" alt=\"\">
\t\t\t\t";
        }
        // line 17
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t<a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("registration");
        echo "\" class=\"btn btn-primary btn-lg\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.buttons.landing_start_button", array(), "common"), "html", null, true);
        echo "</a>
\t\t\t\t<br /><br />
\t\t\t\t<p class=\"lead\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("landing.calltoaction.more", array(), "landing"), "html", null, true);
        echo " <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\"> ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("landing.calltoaction.explore", array(), "landing");
        echo "</a></p>\t
\t\t\t</div>\t
\t\t</div>
\t</div>
\t<div class=\"text-center next-section\">
\t\t<a class=\"arrow-down\" href=\"#top\"><img src=\"";
        // line 26
        echo twig_escape_filter($this->env, ((isset($context["cdn_url"]) ? $context["cdn_url"] : $this->getContext($context, "cdn_url")) . "/common/arrow-down.png"), "html", null, true);
        echo "\" alt=\"\"></a>
\t</div>
</div>";
        
        $__internal_128fd5a417bb455e53cdefa487d2e7ec0cf02290c25ad93c4a7d1ec1341354c4->leave($__internal_128fd5a417bb455e53cdefa487d2e7ec0cf02290c25ad93c4a7d1ec1341354c4_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Home/Landings/Sections:welcome-landing-section7.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 26,  67 => 21,  60 => 19,  56 => 17,  50 => 15,  45 => 13,  41 => 12,  34 => 8,  30 => 7,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"section7\" class=\"call-to-action\">
\t<div class=\"box text-center\">
\t\t<div class=\"container\">
\t\t\t<div class=\"col-lg-12\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-10 col-lg-offset-1\">
\t\t\t\t\t\t<h2>{{ 'landing.calltoaction.title' | trans({}, 'landing') | raw }}</h2>
\t\t\t\t\t\t<h3>{{ 'landing.calltoaction.subtitle' | trans({}, 'landing') | raw }}</h3>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-8 col-lg-offset-2\">
\t\t\t\t{% if is_mobile %} 
\t\t\t\t\t<img class=\"img-responsive\" src=\"{{ cdn_url~'/common/portadas-mobile.png' }}\" alt=\"\">
\t\t\t\t{% else %}
\t\t\t\t\t<img class=\"img-responsive\" src=\"{{ cdn_url~'/common/portadas.png' }}\" alt=\"\">
\t\t\t\t{% endif %}
\t\t\t\t</div>
\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t<a href=\"{{ path('registration') }}\" class=\"btn btn-primary btn-lg\">{{ 'common.buttons.landing_start_button' | trans({}, 'common') }}</a>
\t\t\t\t<br /><br />
\t\t\t\t<p class=\"lead\">{{ 'landing.calltoaction.more' | trans({}, 'landing')}} <a href=\"{{ path('homepage') }}\"> {{ 'landing.calltoaction.explore' | trans({}, 'landing') | raw}}</a></p>\t
\t\t\t</div>\t
\t\t</div>
\t</div>
\t<div class=\"text-center next-section\">
\t\t<a class=\"arrow-down\" href=\"#top\"><img src=\"{{ cdn_url~'/common/arrow-down.png' }}\" alt=\"\"></a>
\t</div>
</div>", "VODBaseBundle:Home/Landings/Sections:welcome-landing-section7.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/Home/Landings/Sections/welcome-landing-section7.html.twig");
    }
}
