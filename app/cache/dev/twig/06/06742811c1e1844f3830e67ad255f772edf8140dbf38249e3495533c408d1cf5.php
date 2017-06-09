<?php

/* VODBaseBundle:Base/Components/Header:navbar-fake.html.twig */
class __TwigTemplate_9095b490e63542a4597afd40608fd08374921faa69a8ad9c4cd9e39c94acb6c2 extends Twig_Template
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
        $__internal_bcceb95309faf750056430b1a13b8684cf2cf62106e91c202688f78b46e1fcbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcceb95309faf750056430b1a13b8684cf2cf62106e91c202688f78b46e1fcbd->enter($__internal_bcceb95309faf750056430b1a13b8684cf2cf62106e91c202688f78b46e1fcbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Base/Components/Header:navbar-fake.html.twig"));

        // line 2
        echo "
<div class=\"container-fluid\">
    <div class=\"row navbar navbar_fake\">
        <div class=\"page-header clearfix\">
            <div class=\"col-xs-5 col-sm-3 col-md-2 text-left\">
                ";
        // line 7
        $this->loadTemplate("VODBaseBundle:Base/Components/Header:navbar-fake.html.twig", "VODBaseBundle:Base/Components/Header:navbar-fake.html.twig", 7, "259670465")->display($context);
        // line 8
        echo "            </div>
            <div class=\"col-xs-7 col-sm-6 col-md-6 col-sm-offset-3 col-md-offset-4 text-right\">
                ";
        // line 10
        $this->loadTemplate("VODBaseBundle:Base/Components/Header:navbar-right-landing.html.twig", "VODBaseBundle:Base/Components/Header:navbar-fake.html.twig", 10)->display($context);
        // line 11
        echo "            </div>
        </div>
    </div>
</div>";
        
        $__internal_bcceb95309faf750056430b1a13b8684cf2cf62106e91c202688f78b46e1fcbd->leave($__internal_bcceb95309faf750056430b1a13b8684cf2cf62106e91c202688f78b46e1fcbd_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Base/Components/Header:navbar-fake.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 11,  35 => 10,  31 => 8,  29 => 7,  22 => 2,);
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

<div class=\"container-fluid\">
    <div class=\"row navbar navbar_fake\">
        <div class=\"page-header clearfix\">
            <div class=\"col-xs-5 col-sm-3 col-md-2 text-left\">
                {% embed 'VODBaseBundle:Base/Components/Header:logo-landing.html.twig' %}{% endembed %}
            </div>
            <div class=\"col-xs-7 col-sm-6 col-md-6 col-sm-offset-3 col-md-offset-4 text-right\">
                {% include 'VODBaseBundle:Base/Components/Header:navbar-right-landing.html.twig' %}
            </div>
        </div>
    </div>
</div>", "VODBaseBundle:Base/Components/Header:navbar-fake.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/Base/Components/Header/navbar-fake.html.twig");
    }
}


/* VODBaseBundle:Base/Components/Header:navbar-fake.html.twig */
class __TwigTemplate_9095b490e63542a4597afd40608fd08374921faa69a8ad9c4cd9e39c94acb6c2_259670465 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 7
        $this->parent = $this->loadTemplate("VODBaseBundle:Base/Components/Header:logo-landing.html.twig", "VODBaseBundle:Base/Components/Header:navbar-fake.html.twig", 7);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "VODBaseBundle:Base/Components/Header:logo-landing.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3f30f409b963f9aa16c1bc4a413fad1cedf7de7ede891ded2d6e0a27b8037b4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f30f409b963f9aa16c1bc4a413fad1cedf7de7ede891ded2d6e0a27b8037b4e->enter($__internal_3f30f409b963f9aa16c1bc4a413fad1cedf7de7ede891ded2d6e0a27b8037b4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Base/Components/Header:navbar-fake.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f30f409b963f9aa16c1bc4a413fad1cedf7de7ede891ded2d6e0a27b8037b4e->leave($__internal_3f30f409b963f9aa16c1bc4a413fad1cedf7de7ede891ded2d6e0a27b8037b4e_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Base/Components/Header:navbar-fake.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 7,  37 => 11,  35 => 10,  31 => 8,  29 => 7,  22 => 2,);
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

<div class=\"container-fluid\">
    <div class=\"row navbar navbar_fake\">
        <div class=\"page-header clearfix\">
            <div class=\"col-xs-5 col-sm-3 col-md-2 text-left\">
                {% embed 'VODBaseBundle:Base/Components/Header:logo-landing.html.twig' %}{% endembed %}
            </div>
            <div class=\"col-xs-7 col-sm-6 col-md-6 col-sm-offset-3 col-md-offset-4 text-right\">
                {% include 'VODBaseBundle:Base/Components/Header:navbar-right-landing.html.twig' %}
            </div>
        </div>
    </div>
</div>", "VODBaseBundle:Base/Components/Header:navbar-fake.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/Base/Components/Header/navbar-fake.html.twig");
    }
}
