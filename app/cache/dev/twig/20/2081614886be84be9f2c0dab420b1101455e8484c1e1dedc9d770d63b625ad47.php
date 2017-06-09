<?php

/* VODBaseBundle:Base/Components/Footer:footer.html.twig */
class __TwigTemplate_9a08db680245bf42a61f9fc7955c81cd196cd07e2b6d7f8644d61577e4ebe4e5 extends Twig_Template
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
        $__internal_699c157bd3dd9f03fc00f88063226c79e7dbff4b7474a2fad7d69c26bbf64245 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_699c157bd3dd9f03fc00f88063226c79e7dbff4b7474a2fad7d69c26bbf64245->enter($__internal_699c157bd3dd9f03fc00f88063226c79e7dbff4b7474a2fad7d69c26bbf64245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Base/Components/Footer:footer.html.twig"));

        // line 1
        echo "<footer>
\t";
        // line 3
        echo "    ";
        $this->displayBlock('footerLinks_container', $context, $blocks);
        // line 6
        echo "
\t";
        // line 8
        echo "    ";
        $this->displayBlock('subfooter_container', $context, $blocks);
        // line 11
        echo "</footer>
";
        
        $__internal_699c157bd3dd9f03fc00f88063226c79e7dbff4b7474a2fad7d69c26bbf64245->leave($__internal_699c157bd3dd9f03fc00f88063226c79e7dbff4b7474a2fad7d69c26bbf64245_prof);

    }

    // line 3
    public function block_footerLinks_container($context, array $blocks = array())
    {
        $__internal_44f2cbeece492fed77077876ffcfe2369735b802f0536f492e1b420fd83930cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44f2cbeece492fed77077876ffcfe2369735b802f0536f492e1b420fd83930cd->enter($__internal_44f2cbeece492fed77077876ffcfe2369735b802f0536f492e1b420fd83930cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footerLinks_container"));

        // line 4
        echo "    \t";
        $this->loadTemplate("VODBaseBundle:Base/Components/Footer:footer-links.html.twig", "VODBaseBundle:Base/Components/Footer:footer.html.twig", 4)->display($context);
        // line 5
        echo "    ";
        
        $__internal_44f2cbeece492fed77077876ffcfe2369735b802f0536f492e1b420fd83930cd->leave($__internal_44f2cbeece492fed77077876ffcfe2369735b802f0536f492e1b420fd83930cd_prof);

    }

    // line 8
    public function block_subfooter_container($context, array $blocks = array())
    {
        $__internal_9be288cf61f9e9d1860c99a3326f9950c3a55a8e9a626d15ef221d481d5284f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9be288cf61f9e9d1860c99a3326f9950c3a55a8e9a626d15ef221d481d5284f2->enter($__internal_9be288cf61f9e9d1860c99a3326f9950c3a55a8e9a626d15ef221d481d5284f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subfooter_container"));

        // line 9
        echo "    \t";
        $this->loadTemplate("VODBaseBundle:Base/Components/Footer:subfooter.html.twig", "VODBaseBundle:Base/Components/Footer:footer.html.twig", 9)->display($context);
        // line 10
        echo "    ";
        
        $__internal_9be288cf61f9e9d1860c99a3326f9950c3a55a8e9a626d15ef221d481d5284f2->leave($__internal_9be288cf61f9e9d1860c99a3326f9950c3a55a8e9a626d15ef221d481d5284f2_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Base/Components/Footer:footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  69 => 10,  66 => 9,  60 => 8,  53 => 5,  50 => 4,  44 => 3,  36 => 11,  33 => 8,  30 => 6,  27 => 3,  24 => 1,);
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
    \t{% include 'VODBaseBundle:Base/Components/Footer:footer-links.html.twig' %}
    {% endblock footerLinks_container %}

\t{# Links a redes sociales, info legal y copyright #}
    {% block subfooter_container %}
    \t{% include 'VODBaseBundle:Base/Components/Footer:subfooter.html.twig' %}
    {% endblock subfooter_container %}
</footer>
", "VODBaseBundle:Base/Components/Footer:footer.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/Base/Components/Footer/footer.html.twig");
    }
}
