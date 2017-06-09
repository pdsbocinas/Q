<?php

/* VODBaseBundle:Base/Components/Footer:footer-lite.html.twig */
class __TwigTemplate_87ea8712d629bfca1d1d458e38a9efaf7d238ddb9a8801cc2e6d5bff6373a54e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'footerLinks_container' => array($this, 'block_footerLinks_container'),
            'subfooter_container' => array($this, 'block_subfooter_container'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fbfcbbde1e96c4fd0d3766cd8c4de8080a9174541f3b1b16cd4ddd37c1dffb08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbfcbbde1e96c4fd0d3766cd8c4de8080a9174541f3b1b16cd4ddd37c1dffb08->enter($__internal_fbfcbbde1e96c4fd0d3766cd8c4de8080a9174541f3b1b16cd4ddd37c1dffb08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Base/Components/Footer:footer-lite.html.twig"));

        // line 1
        echo "<footer>
\t";
        // line 3
        echo "    ";
        $this->displayBlock('footerLinks_container', $context, $blocks);
        // line 5
        echo "\t
\t";
        // line 7
        echo "    ";
        $this->displayBlock('subfooter_container', $context, $blocks);
        // line 30
        echo "</footer>";
        
        $__internal_fbfcbbde1e96c4fd0d3766cd8c4de8080a9174541f3b1b16cd4ddd37c1dffb08->leave($__internal_fbfcbbde1e96c4fd0d3766cd8c4de8080a9174541f3b1b16cd4ddd37c1dffb08_prof);

    }

    // line 3
    public function block_footerLinks_container($context, array $blocks = array())
    {
        $__internal_727ad44574de1e289ca47cede602783930c225c707f3b225908071b0dfdf0dc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_727ad44574de1e289ca47cede602783930c225c707f3b225908071b0dfdf0dc8->enter($__internal_727ad44574de1e289ca47cede602783930c225c707f3b225908071b0dfdf0dc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footerLinks_container"));

        // line 4
        echo "    ";
        
        $__internal_727ad44574de1e289ca47cede602783930c225c707f3b225908071b0dfdf0dc8->leave($__internal_727ad44574de1e289ca47cede602783930c225c707f3b225908071b0dfdf0dc8_prof);

    }

    // line 7
    public function block_subfooter_container($context, array $blocks = array())
    {
        $__internal_19090369a49d49ef7d3001226df39b90f18afbd4519b4ea5fe57d4770a39488e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19090369a49d49ef7d3001226df39b90f18afbd4519b4ea5fe57d4770a39488e->enter($__internal_19090369a49d49ef7d3001226df39b90f18afbd4519b4ea5fe57d4770a39488e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subfooter_container"));

        // line 8
        echo "    \t<div class=\"subfooter\">
    \t\t<div class=\"container-fluid\">
\t\t\t\t<div class=\"row\">
    \t\t\t";
        // line 12
        echo "    \t\t\t";
        if ($this->env->getExtension('SunCat\MobileDetectBundle\Twig\Extension\MobileDetectExtension')->isMobile()) {
            // line 13
            echo "    \t\t\t\t<div class=\"col-xs-10 col-sm-8 col-sm-offset-2\">
    \t\t\t\t</div>
\t    \t\t\t";
            // line 15
            $this->loadTemplate("VODBaseBundle:Base/Components/Footer:subfooter-legal.html.twig", "VODBaseBundle:Base/Components/Footer:footer-lite.html.twig", 15)->display($context);
            // line 16
            echo "\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t    \t\t";
            // line 18
            $this->loadTemplate("VODBaseBundle:Base/Components/Footer:subfooter-copyright.html.twig", "VODBaseBundle:Base/Components/Footer:footer-lite.html.twig", 18)->display($context);
            // line 19
            echo "\t\t    \t";
            // line 20
            echo "\t    \t\t";
        } else {
            // line 21
            echo "\t\t    \t\t";
            $this->loadTemplate("VODBaseBundle:Base/Components/Footer:subfooter-copyright.html.twig", "VODBaseBundle:Base/Components/Footer:footer-lite.html.twig", 21)->display($context);
            // line 22
            echo "\t\t    \t\t<div class=\"col-xs-4\"></div>
\t    \t\t\t";
            // line 23
            $this->loadTemplate("VODBaseBundle:Base/Components/Footer:subfooter-legal.html.twig", "VODBaseBundle:Base/Components/Footer:footer-lite.html.twig", 23)->display($context);
            // line 24
            echo "\t\t    \t";
        }
        // line 25
        echo "\t\t    \t
\t\t    \t</div>
\t    \t</div>
    \t</div>
    ";
        
        $__internal_19090369a49d49ef7d3001226df39b90f18afbd4519b4ea5fe57d4770a39488e->leave($__internal_19090369a49d49ef7d3001226df39b90f18afbd4519b4ea5fe57d4770a39488e_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Base/Components/Footer:footer-lite.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  98 => 25,  95 => 24,  93 => 23,  90 => 22,  87 => 21,  84 => 20,  82 => 19,  80 => 18,  76 => 16,  74 => 15,  70 => 13,  67 => 12,  62 => 8,  56 => 7,  49 => 4,  43 => 3,  36 => 30,  33 => 7,  30 => 5,  27 => 3,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<footer>
\t{# Links a internas legales, institucionales, soporte y centro de ayuda #}
    {% block footerLinks_container %}
    {% endblock footerLinks_container %}
\t
\t{# Links a redes sociales, info legal y copyright #}
    {% block subfooter_container %}
    \t<div class=\"subfooter\">
    \t\t<div class=\"container-fluid\">
\t\t\t\t<div class=\"row\">
    \t\t\t{# El orden de los links varía según la resolución. Si es mobile llamo primero a redes sociales y a info legal, y luego a copyright #}
    \t\t\t{% if is_mobile() %}
    \t\t\t\t<div class=\"col-xs-10 col-sm-8 col-sm-offset-2\">
    \t\t\t\t</div>
\t    \t\t\t{% include 'VODBaseBundle:Base/Components/Footer:subfooter-legal.html.twig' %}
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t    \t\t{% include 'VODBaseBundle:Base/Components/Footer:subfooter-copyright.html.twig' %}
\t\t    \t{# Si es desktop, muestro los tres alineados #}
\t    \t\t{% else %}
\t\t    \t\t{% include 'VODBaseBundle:Base/Components/Footer:subfooter-copyright.html.twig' %}
\t\t    \t\t<div class=\"col-xs-4\"></div>
\t    \t\t\t{% include 'VODBaseBundle:Base/Components/Footer:subfooter-legal.html.twig' %}
\t\t    \t{% endif %}
\t\t    \t
\t\t    \t</div>
\t    \t</div>
    \t</div>
    {% endblock subfooter_container %}
</footer>", "VODBaseBundle:Base/Components/Footer:footer-lite.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/Base/Components/Footer/footer-lite.html.twig");
    }
}
