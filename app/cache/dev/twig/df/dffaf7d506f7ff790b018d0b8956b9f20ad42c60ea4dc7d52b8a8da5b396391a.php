<?php

/* VODBaseBundle:User/Profile:profile-avatar-default.html.twig */
class __TwigTemplate_a79eb31515b8912dd8eaae8c9a8f5d07e1ac5d7953a5876b27e0de4563caf24f extends Twig_Template
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
        $__internal_e6c1227d64013d2129863aa177d6dbf6d81b39c83032ac7504e61fae1e45c6c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6c1227d64013d2129863aa177d6dbf6d81b39c83032ac7504e61fae1e45c6c8->enter($__internal_e6c1227d64013d2129863aa177d6dbf6d81b39c83032ac7504e61fae1e45c6c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:User/Profile:profile-avatar-default.html.twig"));

        // line 1
        echo "<img class=\"img-responsive\" src=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "image", array(), "any", false, true), "pathSvg", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "image", array(), "any", false, true), "pathSvg", array()), $this->env->getExtension('VOD\BaseBundle\Services\Twig\AppExtension')->defaultAvatar())) : ($this->env->getExtension('VOD\BaseBundle\Services\Twig\AppExtension')->defaultAvatar())), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "name", array()), "default")) : ("default")), "html", null, true);
        echo "\">";
        
        $__internal_e6c1227d64013d2129863aa177d6dbf6d81b39c83032ac7504e61fae1e45c6c8->leave($__internal_e6c1227d64013d2129863aa177d6dbf6d81b39c83032ac7504e61fae1e45c6c8_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:User/Profile:profile-avatar-default.html.twig";
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
        return new Twig_Source("<img class=\"img-responsive\" src=\"{{ profile.image.pathSvg | default(defaultAvatar()) }}\" alt=\"{{ profile.name | default('default') }}\">", "VODBaseBundle:User/Profile:profile-avatar-default.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/User/Profile/profile-avatar-default.html.twig");
    }
}
