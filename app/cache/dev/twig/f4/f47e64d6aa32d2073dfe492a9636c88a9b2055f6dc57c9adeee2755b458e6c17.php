<?php

/* VODBaseBundle:Base/Components/Footer:subfooter-legal.html.twig */
class __TwigTemplate_75a38427bf9520639c2280257c5815ea6cb9f269c01f7938ec7fbb55344da3c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'info_afip' => array($this, 'block_info_afip'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_24be936c19a3f404f2c5f6284d17e22644b05f35e78653583f0c40540934e5a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24be936c19a3f404f2c5f6284d17e22644b05f35e78653583f0c40540934e5a3->enter($__internal_24be936c19a3f404f2c5f6284d17e22644b05f35e78653583f0c40540934e5a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Base/Components/Footer:subfooter-legal.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('info_afip', $context, $blocks);
        
        $__internal_24be936c19a3f404f2c5f6284d17e22644b05f35e78653583f0c40540934e5a3->leave($__internal_24be936c19a3f404f2c5f6284d17e22644b05f35e78653583f0c40540934e5a3_prof);

    }

    public function block_info_afip($context, array $blocks = array())
    {
        $__internal_ef30a80c2e7358bbe10e4dca1460e8693d2fddd5689a92e446bbd526c5873523 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef30a80c2e7358bbe10e4dca1460e8693d2fddd5689a92e446bbd526c5873523->enter($__internal_ef30a80c2e7358bbe10e4dca1460e8693d2fddd5689a92e446bbd526c5873523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "info_afip"));

        // line 4
        echo "
\t";
        // line 5
        $context["divClass"] = "col-xs-4 text-right";
        // line 6
        echo "
\t";
        // line 7
        if ((isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
            // line 8
            echo "\t\t";
            $context["divClass"] = "col-xs-2 \tcol-sm-2 text-right";
            // line 9
            echo "\t";
        }
        // line 10
        echo "
\t<div class=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["divClass"]) ? $context["divClass"] : $this->getContext($context, "divClass")), "html", null, true);
        echo "\">
\t\t​<a class=\"data-fiscal\" href=\"http://qr.afip.gob.ar/?qr=hNNJtZCgjtvQq5LlWKnDyQ,,\" target=\"_F960AFIPInfo\">
\t\t\t<img src=\"//www.afip.gob.ar/images/f960/DATAWEB.jpg\" border=\"0\">
\t\t</a>​
\t</div>

";
        
        $__internal_ef30a80c2e7358bbe10e4dca1460e8693d2fddd5689a92e446bbd526c5873523->leave($__internal_ef30a80c2e7358bbe10e4dca1460e8693d2fddd5689a92e446bbd526c5873523_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Base/Components/Footer:subfooter-legal.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  57 => 11,  54 => 10,  51 => 9,  48 => 8,  46 => 7,  43 => 6,  41 => 5,  38 => 4,  26 => 3,  23 => 2,);
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

{% block info_afip %}

\t{% set divClass = 'col-xs-4 text-right' %}

\t{% if is_mobile %}
\t\t{% set divClass = 'col-xs-2 \tcol-sm-2 text-right' %}
\t{% endif %}

\t<div class=\"{{- divClass -}}\">
\t\t​<a class=\"data-fiscal\" href=\"http://qr.afip.gob.ar/?qr=hNNJtZCgjtvQq5LlWKnDyQ,,\" target=\"_F960AFIPInfo\">
\t\t\t<img src=\"//www.afip.gob.ar/images/f960/DATAWEB.jpg\" border=\"0\">
\t\t</a>​
\t</div>

{% endblock info_afip %}", "VODBaseBundle:Base/Components/Footer:subfooter-legal.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/src/VOD/QubitArgentinaBundle/Resources/views/Base/Components/Footer/subfooter-legal.html.twig");
    }
}
