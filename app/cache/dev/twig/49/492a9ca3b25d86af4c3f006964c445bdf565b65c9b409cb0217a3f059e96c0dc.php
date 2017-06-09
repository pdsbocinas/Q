<?php

/* VODBaseBundle:Components:favourite.html.twig */
class __TwigTemplate_e1deda8973a9e6ab6c5bf66fe77f08520162219106c634f74e50ddca3d506315 extends Twig_Template
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
        $__internal_ef03db81fdf8e5b1c0d49d192824838b9955c616b43877c1e1e163c3637c5d29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef03db81fdf8e5b1c0d49d192824838b9955c616b43877c1e1e163c3637c5d29->enter($__internal_ef03db81fdf8e5b1c0d49d192824838b9955c616b43877c1e1e163c3637c5d29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Components:favourite.html.twig"));

        // line 2
        if ((array_key_exists("favorite", $context) && ((isset($context["favorite"]) ? $context["favorite"] : $this->getContext($context, "favorite")) == true))) {
            // line 3
            echo "    ";
            $context["defaultTitle"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("content.favourite.remove", array(), "content");
        } else {
            // line 5
            echo "    ";
            $context["defaultTitle"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("content.favourite.add", array(), "content");
        }
        // line 7
        echo "<div class=\"favourite\">
    <a class=\"btn btn-rounded check\" href=\"#\" title=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["defaultTitle"]) ? $context["defaultTitle"] : $this->getContext($context, "defaultTitle")), "html", null, true);
        echo "\"
       data-remove=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("content.favourite.remove", array(), "content"), "html", null, true);
        echo "\" data-add=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("content.favourite.add", array(), "content"), "html", null, true);
        echo "\" id=\"favourite-tooltip\"
            ";
        // line 10
        if ((array_key_exists("uuid", $context) &&  !(null === (isset($context["uuid"]) ? $context["uuid"] : $this->getContext($context, "uuid"))))) {
            echo twig_escape_filter($this->env, ("data-uuid=" . (isset($context["uuid"]) ? $context["uuid"] : $this->getContext($context, "uuid"))), "html", null, true);
        }
        echo ">
        <i class=\"not-fa fa-lg ";
        // line 11
        if ((array_key_exists("favorite", $context) && ((isset($context["favorite"]) ? $context["favorite"] : $this->getContext($context, "favorite")) == true))) {
            echo "favourite-heart";
        }
        echo "\" data-uuid=\"";
        echo twig_escape_filter($this->env, (isset($context["uuid"]) ? $context["uuid"] : $this->getContext($context, "uuid")), "html", null, true);
        echo "\" ></i>
    </a>
</div>";
        
        $__internal_ef03db81fdf8e5b1c0d49d192824838b9955c616b43877c1e1e163c3637c5d29->leave($__internal_ef03db81fdf8e5b1c0d49d192824838b9955c616b43877c1e1e163c3637c5d29_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Components:favourite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 11,  45 => 10,  39 => 9,  35 => 8,  32 => 7,  28 => 5,  24 => 3,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'content' %}
{% if favorite is defined and favorite == true %}
    {% set defaultTitle = 'content.favourite.remove' | trans() %}
{% else %}
    {% set defaultTitle = 'content.favourite.add' | trans() %}
{% endif %}
<div class=\"favourite\">
    <a class=\"btn btn-rounded check\" href=\"#\" title=\"{{ defaultTitle }}\"
       data-remove=\"{{ 'content.favourite.remove' | trans() }}\" data-add=\"{{ 'content.favourite.add' | trans() }}\" id=\"favourite-tooltip\"
            {% if uuid is defined and uuid is not null %}{{ \"data-uuid=\"~uuid }}{% endif %}>
        <i class=\"not-fa fa-lg {% if favorite is defined and favorite == true %}favourite-heart{% endif %}\" data-uuid=\"{{ uuid }}\" ></i>
    </a>
</div>", "VODBaseBundle:Components:favourite.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/Components/favourite.html.twig");
    }
}
