<?php

/* VODBaseBundle:Base/Components/Header:header-dropdown-menu.html.twig */
class __TwigTemplate_4550628ab841d4780fa5669ea7d6253b7cb9fc2086952ae5858367550d1bcbfd extends Twig_Template
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
        $__internal_ae9f00bf63b6e60ba926fdc54100c24a8f625c92bd800f93a15dcb9fc521fe29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae9f00bf63b6e60ba926fdc54100c24a8f625c92bd800f93a15dcb9fc521fe29->enter($__internal_ae9f00bf63b6e60ba926fdc54100c24a8f625c92bd800f93a15dcb9fc521fe29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Base/Components/Header:header-dropdown-menu.html.twig"));

        // line 2
        echo "
<div class=\"navbar-right dropdown\">
\t<a href=\"#\" title=\"menu\"  class=\"navbar__more-links dropdown-toggle \" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t<i class=\"fa fa-ellipsis-v\"></i>
\t</a>
\t<div class=\"dropdown-links\">
\t\t<ul>
\t\t\t<li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("help");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("base.footer.links.help_center", array(), "base"), "html", null, true);
        echo "</a></li>
\t\t\t<li><a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("terms_and_conditions");
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("base.footer.links.terms_and_conditions", array(), "base"), "html", null, true);
        echo "</a></li>
\t\t\t<li><a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("help");
        echo "#contact\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("base.navbar.mail_to", array(), "base"), "html", null, true);
        echo "</a></li>
\t\t\t";
        // line 12
        $this->loadTemplate("VODBaseBundle:Base/Components/Header:work-with-us.html.twig", "VODBaseBundle:Base/Components/Header:header-dropdown-menu.html.twig", 12)->display($context);
        // line 13
        echo "\t\t</ul>
\t</div>
</div>";
        
        $__internal_ae9f00bf63b6e60ba926fdc54100c24a8f625c92bd800f93a15dcb9fc521fe29->leave($__internal_ae9f00bf63b6e60ba926fdc54100c24a8f625c92bd800f93a15dcb9fc521fe29_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Base/Components/Header:header-dropdown-menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 13,  49 => 12,  43 => 11,  37 => 10,  31 => 9,  22 => 2,);
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

<div class=\"navbar-right dropdown\">
\t<a href=\"#\" title=\"menu\"  class=\"navbar__more-links dropdown-toggle \" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t<i class=\"fa fa-ellipsis-v\"></i>
\t</a>
\t<div class=\"dropdown-links\">
\t\t<ul>
\t\t\t<li><a href=\"{{ path('help') }}\">{{ 'base.footer.links.help_center' | trans }}</a></li>
\t\t\t<li><a href=\"{{ path('terms_and_conditions') }}\" target=\"_blank\">{{ 'base.footer.links.terms_and_conditions' | trans }}</a></li>
\t\t\t<li><a href=\"{{ path('help') }}#contact\">{{ 'base.navbar.mail_to' | trans }}</a></li>
\t\t\t{% include 'VODBaseBundle:Base/Components/Header:work-with-us.html.twig' %}
\t\t</ul>
\t</div>
</div>", "VODBaseBundle:Base/Components/Header:header-dropdown-menu.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/Base/Components/Header/header-dropdown-menu.html.twig");
    }
}
