<?php

/* VODBaseBundle:Base/Components/Scripts:landing-scripts.html.twig */
class __TwigTemplate_3e64f0c96193b727f713f6fba12517599f12157f135f05a12e87566f997e6f8d extends Twig_Template
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
        $__internal_b32a26a4589c495c62e72982774ff9c706203a7a4b43b2223a77eb1fa029263b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b32a26a4589c495c62e72982774ff9c706203a7a4b43b2223a77eb1fa029263b->enter($__internal_b32a26a4589c495c62e72982774ff9c706203a7a4b43b2223a77eb1fa029263b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Base/Components/Scripts:landing-scripts.html.twig"));

        // line 1
        echo "<script>
    \$(document).ready(function() {
        \$.fn.initCarousel('.slider-landing', {
            dots: false,
            autoplay: true,
            arrows: false,
            infinite: true,
            speed: 1000,
            fade: true,
            cssEase: 'linear',
            pauseOnHover: false,
            centerMode: true
        });

        \$(document).parallaxLanding();

        if(navigator.userAgent.match(/MSIE 10/i) || navigator.userAgent.match(/MSIE 11/i) || navigator.userAgent.match(/Trident\\/7\\./) || navigator.userAgent.match(/Edge\\/13\\./)) {
            \$('body').on(\"mousewheel\", function () {
                event.preventDefault();
                var wd = event.wheelDelta;
                var csp = window.pageYOffset;
                window.scrollTo(0, csp - wd);
            });
        }
    });
</script>";
        
        $__internal_b32a26a4589c495c62e72982774ff9c706203a7a4b43b2223a77eb1fa029263b->leave($__internal_b32a26a4589c495c62e72982774ff9c706203a7a4b43b2223a77eb1fa029263b_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Base/Components/Scripts:landing-scripts.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script>
    \$(document).ready(function() {
        \$.fn.initCarousel('.slider-landing', {
            dots: false,
            autoplay: true,
            arrows: false,
            infinite: true,
            speed: 1000,
            fade: true,
            cssEase: 'linear',
            pauseOnHover: false,
            centerMode: true
        });

        \$(document).parallaxLanding();

        if(navigator.userAgent.match(/MSIE 10/i) || navigator.userAgent.match(/MSIE 11/i) || navigator.userAgent.match(/Trident\\/7\\./) || navigator.userAgent.match(/Edge\\/13\\./)) {
            \$('body').on(\"mousewheel\", function () {
                event.preventDefault();
                var wd = event.wheelDelta;
                var csp = window.pageYOffset;
                window.scrollTo(0, csp - wd);
            });
        }
    });
</script>", "VODBaseBundle:Base/Components/Scripts:landing-scripts.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/Base/Components/Scripts/landing-scripts.html.twig");
    }
}
