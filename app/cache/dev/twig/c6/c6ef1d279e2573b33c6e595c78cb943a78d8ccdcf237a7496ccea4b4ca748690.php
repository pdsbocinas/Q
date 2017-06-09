<?php

/* VODBaseBundle:Base/Components/Footer:subfooter-copyright.html.twig */
class __TwigTemplate_073c79f1c6bb5a19741d10f3542f1659fc48cd1ee5775bf8263a60be58d7cf2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'copyright' => array($this, 'block_copyright'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_103239ee2742d29c63d1f15a823d205285b6825745ff7ed1b87a630912f73673 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_103239ee2742d29c63d1f15a823d205285b6825745ff7ed1b87a630912f73673->enter($__internal_103239ee2742d29c63d1f15a823d205285b6825745ff7ed1b87a630912f73673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Base/Components/Footer:subfooter-copyright.html.twig"));

        // line 1
        $this->displayBlock('copyright', $context, $blocks);
        
        $__internal_103239ee2742d29c63d1f15a823d205285b6825745ff7ed1b87a630912f73673->leave($__internal_103239ee2742d29c63d1f15a823d205285b6825745ff7ed1b87a630912f73673_prof);

    }

    public function block_copyright($context, array $blocks = array())
    {
        $__internal_d27005128ea8f50a2f7d422aca95071522c1eb6a3fc8ae8995dcce47a52010d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d27005128ea8f50a2f7d422aca95071522c1eb6a3fc8ae8995dcce47a52010d6->enter($__internal_d27005128ea8f50a2f7d422aca95071522c1eb6a3fc8ae8995dcce47a52010d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "copyright"));

        // line 2
        echo "\t";
        if ((isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
            // line 3
            echo "\t\t<div class=\"col-xs-12 text-center\">
\t";
        } else {
            // line 5
            echo "\t\t<div class=\"col-xs-4\">
\t";
        }
        // line 7
        echo "\t\t\t<p class=\"copyright\">
\t\t\t\t";
        // line 8
        if ( !(isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
            // line 9
            echo "\t\t\t\t\t";
            $this->loadTemplate("VODBaseBundle:Base/Components/Footer:subfooter-logo.html.twig", "VODBaseBundle:Base/Components/Footer:subfooter-copyright.html.twig", 9)->display($context);
            // line 10
            echo "\t\t\t\t";
        }
        // line 11
        echo "\t\t\t\t";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("base.footer.links.copyright", array(), "base");
        echo "
\t\t\t</p>
\t\t</div>
";
        
        $__internal_d27005128ea8f50a2f7d422aca95071522c1eb6a3fc8ae8995dcce47a52010d6->leave($__internal_d27005128ea8f50a2f7d422aca95071522c1eb6a3fc8ae8995dcce47a52010d6_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Base/Components/Footer:subfooter-copyright.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  57 => 11,  54 => 10,  51 => 9,  49 => 8,  46 => 7,  42 => 5,  38 => 3,  35 => 2,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block copyright %}
\t{% if is_mobile %}
\t\t<div class=\"col-xs-12 text-center\">
\t{% else %}
\t\t<div class=\"col-xs-4\">
\t{% endif %}
\t\t\t<p class=\"copyright\">
\t\t\t\t{% if not is_mobile %}
\t\t\t\t\t{% include 'VODBaseBundle:Base/Components/Footer:subfooter-logo.html.twig' %}
\t\t\t\t{% endif %}
\t\t\t\t{{ 'base.footer.links.copyright' | trans({}, 'base') | raw }}
\t\t\t</p>
\t\t</div>
{% endblock copyright %}
", "VODBaseBundle:Base/Components/Footer:subfooter-copyright.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/Base/Components/Footer/subfooter-copyright.html.twig");
    }
}
