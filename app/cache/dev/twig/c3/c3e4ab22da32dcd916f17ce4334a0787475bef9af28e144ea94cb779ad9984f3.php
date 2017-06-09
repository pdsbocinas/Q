<?php

/* VODBaseBundle:User/Components:horizontal-profile-selector.html.twig */
class __TwigTemplate_c70d7ffa70bde40d4177694133525559688aaf2c195a4abba29f6b509c57a1b8 extends Twig_Template
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
        $__internal_444b802ad6443cc17e80dccf6a686be8adc58c1e3fbe1e66c0c1e5d5dd91fad2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_444b802ad6443cc17e80dccf6a686be8adc58c1e3fbe1e66c0c1e5d5dd91fad2->enter($__internal_444b802ad6443cc17e80dccf6a686be8adc58c1e3fbe1e66c0c1e5d5dd91fad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:User/Components:horizontal-profile-selector.html.twig"));

        // line 3
        echo "
<div class=\"container-full\">
    <div class=\"container-absolute text-center\">
        <div class=\"login\">
            <h1><img src=\"";
        // line 7
        echo twig_escape_filter($this->env, ((isset($context["cdn_url"]) ? $context["cdn_url"] : $this->getContext($context, "cdn_url")) . "/images/logo-qubit-azul.svg"), "html", null, true);
        echo "\" alt=\"Qubit.tv\"></h1>
            <h2>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.profile.labels.select_yours", array(), "user"), "html", null, true);
        echo "</h2>
            <ul class=\"select-user\">
                ";
        // line 10
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
            // line 11
            echo "                    ";
            $this->loadTemplate("VODBaseBundle:Components:profile-item.html.twig", "VODBaseBundle:User/Components:horizontal-profile-selector.html.twig", 11)->display($context);
            // line 12
            echo "                ";
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
        // line 13
        echo "                ";
        if ((twig_length_filter($this->env, (isset($context["profiles"]) ? $context["profiles"] : $this->getContext($context, "profiles"))) < 4)) {
            // line 14
            echo "                    <li>
                        <a id=\"create-profile-image-button\" href=\"";
            // line 15
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_profile_new", array("action" => "nuevo"));
            echo "\">
                            <div class=\"add-profile-block\"><i class=\"fa fa-plus\"></i></div>
                            <span>";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.profile.buttons.add_new", array(), "user"), "html", null, true);
            echo "</span>
                        </a>
                    </li>
                ";
        }
        // line 21
        echo "            </ul>
        </div>
    </div>
</div>";
        
        $__internal_444b802ad6443cc17e80dccf6a686be8adc58c1e3fbe1e66c0c1e5d5dd91fad2->leave($__internal_444b802ad6443cc17e80dccf6a686be8adc58c1e3fbe1e66c0c1e5d5dd91fad2_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:User/Components:horizontal-profile-selector.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  82 => 17,  77 => 15,  74 => 14,  71 => 13,  57 => 12,  54 => 11,  37 => 10,  32 => 8,  28 => 7,  22 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Esta es la template que se usa cuando te logueas y tenes mas de un perfil  #}
{% trans_default_domain 'user' %}

<div class=\"container-full\">
    <div class=\"container-absolute text-center\">
        <div class=\"login\">
            <h1><img src=\"{{cdn_url~'/images/logo-qubit-azul.svg'}}\" alt=\"Qubit.tv\"></h1>
            <h2>{{ 'user.profile.labels.select_yours' | trans }}</h2>
            <ul class=\"select-user\">
                {% for profile in profiles %}
                    {% include 'VODBaseBundle:Components:profile-item.html.twig' %}
                {% endfor %}
                {% if profiles | length < 4 %}
                    <li>
                        <a id=\"create-profile-image-button\" href=\"{{ path('user_profile_new', {'action': 'nuevo'}) }}\">
                            <div class=\"add-profile-block\"><i class=\"fa fa-plus\"></i></div>
                            <span>{{ 'user.profile.buttons.add_new' | trans }}</span>
                        </a>
                    </li>
                {% endif %}
            </ul>
        </div>
    </div>
</div>", "VODBaseBundle:User/Components:horizontal-profile-selector.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/User/Components/horizontal-profile-selector.html.twig");
    }
}
