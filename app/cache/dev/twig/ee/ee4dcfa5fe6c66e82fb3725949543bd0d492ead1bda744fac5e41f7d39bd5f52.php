<?php

/* VODBaseBundle:Components:login-link.html.twig */
class __TwigTemplate_8f235d7f98f59aa4cb45fd266e3252bc765928fa82909bf152ce57d502b21b51 extends Twig_Template
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
        $__internal_43d9ff24d581f66bb04113900f628c61f3124a06fc9b1bb66c10621e0fc6011f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43d9ff24d581f66bb04113900f628c61f3124a06fc9b1bb66c10621e0fc6011f->enter($__internal_43d9ff24d581f66bb04113900f628c61f3124a06fc9b1bb66c10621e0fc6011f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Components:login-link.html.twig"));

        // line 1
        echo "<a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.buttons.here", array(), "common"), "html", null, true);
        echo "</a>";
        
        $__internal_43d9ff24d581f66bb04113900f628c61f3124a06fc9b1bb66c10621e0fc6011f->leave($__internal_43d9ff24d581f66bb04113900f628c61f3124a06fc9b1bb66c10621e0fc6011f_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Components:login-link.html.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<a href=\"{{ path('login') }}\">{{ 'common.buttons.here' | trans({}, 'common') }}</a>", "VODBaseBundle:Components:login-link.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/Components/login-link.html.twig");
    }
}
