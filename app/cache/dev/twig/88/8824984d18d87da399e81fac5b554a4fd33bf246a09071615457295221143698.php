<?php

/* VODBaseBundle:Base/Components/Footer:footer-links.html.twig */
class __TwigTemplate_0c511b573092ef26237f1f6b36a84b0ba53933d9608ca11d17f9b3d286895743 extends Twig_Template
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
        $__internal_541e459a619fb9ed4dbe0279d594476672fccec4c17307fbea2f2ec2d14a7cfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_541e459a619fb9ed4dbe0279d594476672fccec4c17307fbea2f2ec2d14a7cfa->enter($__internal_541e459a619fb9ed4dbe0279d594476672fccec4c17307fbea2f2ec2d14a7cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Base/Components/Footer:footer-links.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "<div class=\"footer-links\">
\t<div class=\"container-fluid\">
\t\t<div class=\"row\">
\t\t\t";
        // line 7
        if ((isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
            // line 8
            echo "\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<ul class=\"mobile-footer-links\">
\t\t\t\t\t\t\t<li><a class=\"btn-link_alter\" href=\"";
            // line 11
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("terms_and_conditions");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("base.footer.links.terms_and_conditions", array(), "base"), "html", null, true);
            echo "</a></li>
\t\t\t\t\t\t\t<li><a class=\"btn-link_alter\" href=\"";
            // line 12
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("help");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("base.footer.links.help_center", array(), "base"), "html", null, true);
            echo "</a></li>
\t\t\t\t\t\t\t<li><a class=\"btn-link_alter\" href=\"";
            // line 13
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("work_with_us");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("base.footer.links.work_here", array(), "base"), "html", null, true);
            echo "</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        } else {
            // line 18
            echo "\t\t\t\t<div class=\"col-xs-6\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t";
            // line 20
            $this->loadTemplate("VODBaseBundle:Base/Components/Footer:footer-block-left.html.twig", "VODBaseBundle:Base/Components/Footer:footer-links.html.twig", 20)->display($context);
            // line 21
            echo "
\t\t\t\t\t\t";
            // line 22
            $this->loadTemplate("VODBaseBundle:Base/Components/Footer:footer-block-center.html.twig", "VODBaseBundle:Base/Components/Footer:footer-links.html.twig", 22)->display($context);
            // line 23
            echo "
\t\t\t\t\t\t";
            // line 24
            $this->loadTemplate("VODBaseBundle:Base/Components/Footer:footer-block-right.html.twig", "VODBaseBundle:Base/Components/Footer:footer-links.html.twig", 24)->display($context);
            // line 25
            echo "\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-xs-6\">
\t\t\t\t\t<div class=\"tags\">
\t\t\t\t\t\t<h5>";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("base.footer.titles.most_popular_genres", array(), "base"), "html", null, true);
            echo "</h5>
\t\t\t\t\t\t";
            // line 31
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("VODBaseBundle:Content:popularGenres"));
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 35
        echo "\t\t</div>
\t</div>
</div>
";
        
        $__internal_541e459a619fb9ed4dbe0279d594476672fccec4c17307fbea2f2ec2d14a7cfa->leave($__internal_541e459a619fb9ed4dbe0279d594476672fccec4c17307fbea2f2ec2d14a7cfa_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Base/Components/Footer:footer-links.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 35,  86 => 31,  82 => 30,  75 => 25,  73 => 24,  70 => 23,  68 => 22,  65 => 21,  63 => 20,  59 => 18,  49 => 13,  43 => 12,  37 => 11,  32 => 8,  30 => 7,  25 => 4,  22 => 2,);
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

{# Links a internas legales, institucionales, soporte y centro de ayuda #}
<div class=\"footer-links\">
\t<div class=\"container-fluid\">
\t\t<div class=\"row\">
\t\t\t{% if is_mobile %}
\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<ul class=\"mobile-footer-links\">
\t\t\t\t\t\t\t<li><a class=\"btn-link_alter\" href=\"{{ path('terms_and_conditions') }}\">{{ 'base.footer.links.terms_and_conditions' | trans }}</a></li>
\t\t\t\t\t\t\t<li><a class=\"btn-link_alter\" href=\"{{ path('help') }}\">{{ 'base.footer.links.help_center' | trans }}</a></li>
\t\t\t\t\t\t\t<li><a class=\"btn-link_alter\" href=\"{{ path('work_with_us') }}\">{{ 'base.footer.links.work_here' | trans }}</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% else %}
\t\t\t\t<div class=\"col-xs-6\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t{% include 'VODBaseBundle:Base/Components/Footer:footer-block-left.html.twig' %}

\t\t\t\t\t\t{% include 'VODBaseBundle:Base/Components/Footer:footer-block-center.html.twig' %}

\t\t\t\t\t\t{% include 'VODBaseBundle:Base/Components/Footer:footer-block-right.html.twig' %}
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-xs-6\">
\t\t\t\t\t<div class=\"tags\">
\t\t\t\t\t\t<h5>{{ 'base.footer.titles.most_popular_genres' | trans }}</h5>
\t\t\t\t\t\t{{ render(controller('VODBaseBundle:Content:popularGenres')) }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% endif %}
\t\t</div>
\t</div>
</div>
", "VODBaseBundle:Base/Components/Footer:footer-links.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/Base/Components/Footer/footer-links.html.twig");
    }
}
