<?php

/* VODBaseBundle:User/Components:vertical-select-profile.html.twig */
class __TwigTemplate_36dc97888a4c9f3d5367a40f9a49b26d2b9010467677d880728a205608cdc415 extends Twig_Template
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
        $__internal_e759fecee9f34a39f0bf37bf57e58ff120d63128584ca4dd4a34414a10b0c8db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e759fecee9f34a39f0bf37bf57e58ff120d63128584ca4dd4a34414a10b0c8db->enter($__internal_e759fecee9f34a39f0bf37bf57e58ff120d63128584ca4dd4a34414a10b0c8db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:User/Components:vertical-select-profile.html.twig"));

        // line 2
        echo "<ul class=\"select-user\">
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["profiles"]) ? $context["profiles"] : $this->getContext($context, "profiles")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["profile"]) {
            // line 4
            echo "        ";
            if (($this->getAttribute((isset($context["activeProfile"]) ? $context["activeProfile"] : $this->getContext($context, "activeProfile")), "id", array()) != $this->getAttribute($context["profile"], "id", array()))) {
                // line 5
                echo "            ";
                $this->loadTemplate("VODBaseBundle:Components:profile-item.html.twig", "VODBaseBundle:User/Components:vertical-select-profile.html.twig", 5)->display($context);
                // line 6
                echo "        ";
            }
            // line 7
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['profile'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "</ul>";
        
        $__internal_e759fecee9f34a39f0bf37bf57e58ff120d63128584ca4dd4a34414a10b0c8db->leave($__internal_e759fecee9f34a39f0bf37bf57e58ff120d63128584ca4dd4a34414a10b0c8db_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:User/Components:vertical-select-profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 8,  51 => 7,  48 => 6,  45 => 5,  42 => 4,  25 => 3,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Este es el template que se usa en el dropdown sobre el nombre de usuario en dekstop  #}
<ul class=\"select-user\">
    {% for profile in profiles %}
        {% if activeProfile.id != profile.id %}
            {% include 'VODBaseBundle:Components:profile-item.html.twig' %}
        {% endif %}
    {% endfor %}
</ul>", "VODBaseBundle:User/Components:vertical-select-profile.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/User/Components/vertical-select-profile.html.twig");
    }
}
