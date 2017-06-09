<?php

/* BeelabRecaptcha2Bundle:form:fields.html.twig */
class __TwigTemplate_88af88fdf45569a4cd5cce70aeb74c0c4668239e3ec25aa57655d331ef9dff47 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'beelab_recaptcha2_widget' => array($this, 'block_beelab_recaptcha2_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_be40a958c6b1b8cdbfa22ebdaad87416a375bea9ee33e58fd20b0b476638c398 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be40a958c6b1b8cdbfa22ebdaad87416a375bea9ee33e58fd20b0b476638c398->enter($__internal_be40a958c6b1b8cdbfa22ebdaad87416a375bea9ee33e58fd20b0b476638c398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BeelabRecaptcha2Bundle:form:fields.html.twig"));

        // line 1
        $this->displayBlock('beelab_recaptcha2_widget', $context, $blocks);
        
        $__internal_be40a958c6b1b8cdbfa22ebdaad87416a375bea9ee33e58fd20b0b476638c398->leave($__internal_be40a958c6b1b8cdbfa22ebdaad87416a375bea9ee33e58fd20b0b476638c398_prof);

    }

    public function block_beelab_recaptcha2_widget($context, array $blocks = array())
    {
        $__internal_edecbf3b3eaa5b0c2b0a1bf01a80841497e4b3117964b3a71b581aa5b66f3f2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edecbf3b3eaa5b0c2b0a1bf01a80841497e4b3117964b3a71b581aa5b66f3f2a->enter($__internal_edecbf3b3eaa5b0c2b0a1bf01a80841497e4b3117964b3a71b581aa5b66f3f2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "beelab_recaptcha2_widget"));

        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "        <div class=\"g-recaptcha\" data-theme=\"dark\" data-sitekey=\"";
        echo twig_escape_filter($this->env, (isset($context["site_key"]) ? $context["site_key"] : $this->getContext($context, "site_key")), "html", null, true);
        echo "\"></div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_edecbf3b3eaa5b0c2b0a1bf01a80841497e4b3117964b3a71b581aa5b66f3f2a->leave($__internal_edecbf3b3eaa5b0c2b0a1bf01a80841497e4b3117964b3a71b581aa5b66f3f2a_prof);

    }

    public function getTemplateName()
    {
        return "BeelabRecaptcha2Bundle:form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  38 => 3,  35 => 2,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block beelab_recaptcha2_widget %}
    {% spaceless %}
        <div class=\"g-recaptcha\" data-theme=\"dark\" data-sitekey=\"{{ site_key }}\"></div>
    {% endspaceless %}
{% endblock %}
", "BeelabRecaptcha2Bundle:form:fields.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/app/Resources/BeelabRecaptcha2Bundle/views/form/fields.html.twig");
    }
}
