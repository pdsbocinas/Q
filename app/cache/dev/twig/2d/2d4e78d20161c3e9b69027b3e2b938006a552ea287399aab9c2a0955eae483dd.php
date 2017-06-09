<?php

/* VODBaseBundle:Base/Components/Header:itv-button.html.twig */
class __TwigTemplate_ceb59c8eaabe9e81aa1c69a07199c8526051d7a8bbafbd437cf57bf29bb90e1e extends Twig_Template
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
        $__internal_a80d910aec896be985229350b6552d25701d1c1ef1ec4aff44eb320b361860eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a80d910aec896be985229350b6552d25701d1c1ef1ec4aff44eb320b361860eb->enter($__internal_a80d910aec896be985229350b6552d25701d1c1ef1ec4aff44eb320b361860eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Base/Components/Header:itv-button.html.twig"));

        // line 1
        $this->loadTemplate("VODItvBaseBundle:Widget:button.html.twig", "VODBaseBundle:Base/Components/Header:itv-button.html.twig", 1)->display($context);
        
        $__internal_a80d910aec896be985229350b6552d25701d1c1ef1ec4aff44eb320b361860eb->leave($__internal_a80d910aec896be985229350b6552d25701d1c1ef1ec4aff44eb320b361860eb_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Base/Components/Header:itv-button.html.twig";
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
        return new Twig_Source("{% include 'VODItvBaseBundle:Widget:button.html.twig' %}", "VODBaseBundle:Base/Components/Header:itv-button.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/src/VOD/QubitArgentinaBundle/Resources/views/Base/Components/Header/itv-button.html.twig");
    }
}
