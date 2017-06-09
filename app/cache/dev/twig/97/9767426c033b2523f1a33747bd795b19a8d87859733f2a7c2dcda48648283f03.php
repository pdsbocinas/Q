<?php

/* VODBaseBundle:Base/Wrappers:operator-validator.html.twig */
class __TwigTemplate_6e101bd2119c3d6d11383638c72cd9662f90de901522e81146408809fc19c8ff extends Twig_Template
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
        $__internal_ddda5131c0cba66ae4c30c2f921b995abebe7d91aeb2e07cea0a3e9284da2a54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddda5131c0cba66ae4c30c2f921b995abebe7d91aeb2e07cea0a3e9284da2a54->enter($__internal_ddda5131c0cba66ae4c30c2f921b995abebe7d91aeb2e07cea0a3e9284da2a54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Base/Wrappers:operator-validator.html.twig"));

        // line 1
        if (($this->getAttribute((isset($context["utils"]) ? $context["utils"] : $this->getContext($context, "utils")), "isProfileSection", array()) == 1)) {
            // line 2
            echo "\t";
            if ( !(isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
                echo "class=\"bg-full img-bg-full-";
                echo twig_escape_filter($this->env, twig_random($this->env, (isset($context["bg_images"]) ? $context["bg_images"] : $this->getContext($context, "bg_images"))), "html", null, true);
                echo "\"";
            }
        }
        
        $__internal_ddda5131c0cba66ae4c30c2f921b995abebe7d91aeb2e07cea0a3e9284da2a54->leave($__internal_ddda5131c0cba66ae4c30c2f921b995abebe7d91aeb2e07cea0a3e9284da2a54_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Base/Wrappers:operator-validator.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if utils.isProfileSection == 1 %}
\t{% if not is_mobile %}class=\"bg-full img-bg-full-{{ random(bg_images) }}\"{% endif %}
{% endif %}", "VODBaseBundle:Base/Wrappers:operator-validator.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/Base/Wrappers/operator-validator.html.twig");
    }
}
