<?php

/* VODBaseBundle:Components:profile-item.html.twig */
class __TwigTemplate_caa8d7c6eb4435e84a07c91442c52306c886a0594bca0c4ff1532affcd6a0992 extends Twig_Template
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
        $__internal_6e8e52bb1b77bbdb8145bd8ed6d9dbc9ec59434b2208ad4e238543d942986a9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e8e52bb1b77bbdb8145bd8ed6d9dbc9ec59434b2208ad4e238543d942986a9c->enter($__internal_6e8e52bb1b77bbdb8145bd8ed6d9dbc9ec59434b2208ad4e238543d942986a9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Components:profile-item.html.twig"));

        // line 1
        echo "<li>
    <a href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("switch_profile", array("profileId" => $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "id", array()), "back_url" => (isset($context["backUrl"]) ? $context["backUrl"] : $this->getContext($context, "backUrl")))), "html", null, true);
        echo "\">
        <img class=\"img-responsive\" src=\"";
        // line 3
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "image", array(), "any", false, true), "pathSvg", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "image", array(), "any", false, true), "pathSvg", array()), $this->env->getExtension('VOD\BaseBundle\Services\Twig\AppExtension')->defaultAvatar())) : ($this->env->getExtension('VOD\BaseBundle\Services\Twig\AppExtension')->defaultAvatar())), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "name", array()), "invitado")) : ("invitado")), "html", null, true);
        echo "\">
        <span>";
        // line 4
        echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "name", array())) > 10)) ? ((twig_slice($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "name", array()), 0, 10) . "...")) : ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "name", array()))), "html", null, true);
        echo "</span>
    </a>
    <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_profile_edit", array("action" => "editar", "profileId" => $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "id", array()))), "html", null, true);
        echo "\" class=\"profile-edit\">
        <i class=\"fa fa-pencil\"></i>
    </a>
</li>
";
        
        $__internal_6e8e52bb1b77bbdb8145bd8ed6d9dbc9ec59434b2208ad4e238543d942986a9c->leave($__internal_6e8e52bb1b77bbdb8145bd8ed6d9dbc9ec59434b2208ad4e238543d942986a9c_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Components:profile-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  35 => 4,  29 => 3,  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<li>
    <a href=\"{{ path('switch_profile', {'profileId': profile.id, 'back_url': backUrl}) }}\">
        <img class=\"img-responsive\" src=\"{{ profile.image.pathSvg | default(defaultAvatar()) }}\" alt=\"{{ profile.name | default('invitado') }}\">
        <span>{{ profile.name|length > 10 ? profile.name|slice(0, 10) ~ '...' : profile.name }}</span>
    </a>
    <a href=\"{{ path('user_profile_edit', {'action': 'editar', 'profileId': profile.id}) }}\" class=\"profile-edit\">
        <i class=\"fa fa-pencil\"></i>
    </a>
</li>
", "VODBaseBundle:Components:profile-item.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/Components/profile-item.html.twig");
    }
}
