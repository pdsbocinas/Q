<?php

/* VODBaseBundle:Components/Macros:block-utilities.html.twig */
class __TwigTemplate_a94385b26607f58391e80b2d55b02c9fe93f928d0695ee8c81a7188308e85742 extends Twig_Template
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
        $__internal_d0d6f8121692e4f03746e0c74c06029722692ae90611e99829b2dd0bc3dac8c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0d6f8121692e4f03746e0c74c06029722692ae90611e99829b2dd0bc3dac8c9->enter($__internal_d0d6f8121692e4f03746e0c74c06029722692ae90611e99829b2dd0bc3dac8c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Components/Macros:block-utilities.html.twig"));

        
        $__internal_d0d6f8121692e4f03746e0c74c06029722692ae90611e99829b2dd0bc3dac8c9->leave($__internal_d0d6f8121692e4f03746e0c74c06029722692ae90611e99829b2dd0bc3dac8c9_prof);

    }

    // line 1
    public function getrender_block($__mobileView__ = null, $__desktopView__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "mobileView" => $__mobileView__,
            "desktopView" => $__desktopView__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_f83a39044a8cbe1c840219bb6ab92ae34af7dcdc973500bba1231c0e43216dc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_f83a39044a8cbe1c840219bb6ab92ae34af7dcdc973500bba1231c0e43216dc6->enter($__internal_f83a39044a8cbe1c840219bb6ab92ae34af7dcdc973500bba1231c0e43216dc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_block"));

            // line 2
            echo "\t";
            $context["includeView"] = (isset($context["mobileView"]) ? $context["mobileView"] : $this->getContext($context, "mobileView"));
            // line 3
            echo "\t";
            if ((false == (isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile")))) {
                // line 4
                echo "\t\t";
                $context["includeView"] = (isset($context["desktopView"]) ? $context["desktopView"] : $this->getContext($context, "desktopView"));
                // line 5
                echo "\t";
            }
            // line 6
            echo "\t";
            $this->loadTemplate((isset($context["includeView"]) ? $context["includeView"] : $this->getContext($context, "includeView")), "VODBaseBundle:Components/Macros:block-utilities.html.twig", 6)->display($context);
            
            $__internal_f83a39044a8cbe1c840219bb6ab92ae34af7dcdc973500bba1231c0e43216dc6->leave($__internal_f83a39044a8cbe1c840219bb6ab92ae34af7dcdc973500bba1231c0e43216dc6_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Components/Macros:block-utilities.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 6,  52 => 5,  49 => 4,  46 => 3,  43 => 2,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro render_block(mobileView, desktopView) %}
\t{% set includeView = mobileView %}
\t{% if false == is_mobile %}
\t\t{% set includeView = desktopView %}
\t{% endif %}
\t{% include includeView %}
{% endmacro %}", "VODBaseBundle:Components/Macros:block-utilities.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/Components/Macros/block-utilities.html.twig");
    }
}
