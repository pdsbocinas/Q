<?php

/* VODBaseBundle:Base/Components/Footer:subfooter-links.html.twig */
class __TwigTemplate_14b481e4b2aad7e81d74e87b43dc4489adb3cf76340aff9ea3a6811a8e441e55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'social_network' => array($this, 'block_social_network'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cec7c4de5cd09ef8db14865da612a27616116d980742c47ead755aa7217dcac0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cec7c4de5cd09ef8db14865da612a27616116d980742c47ead755aa7217dcac0->enter($__internal_cec7c4de5cd09ef8db14865da612a27616116d980742c47ead755aa7217dcac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Base/Components/Footer:subfooter-links.html.twig"));

        // line 2
        echo "
";
        // line 4
        $this->displayBlock('social_network', $context, $blocks);
        // line 19
        echo "


";
        
        $__internal_cec7c4de5cd09ef8db14865da612a27616116d980742c47ead755aa7217dcac0->leave($__internal_cec7c4de5cd09ef8db14865da612a27616116d980742c47ead755aa7217dcac0_prof);

    }

    // line 4
    public function block_social_network($context, array $blocks = array())
    {
        $__internal_cdcc6661e67cbb6590d46677710a61c652371e221ff1a563b2a9c9d2d13e9826 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdcc6661e67cbb6590d46677710a61c652371e221ff1a563b2a9c9d2d13e9826->enter($__internal_cdcc6661e67cbb6590d46677710a61c652371e221ff1a563b2a9c9d2d13e9826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "social_network"));

        // line 5
        echo "\t";
        if ((isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
            // line 6
            echo "\t\t<div class=\"col-xs-10 col-sm-8 col-sm-offset-2 text-center\">
\t";
        } else {
            // line 8
            echo "\t\t<div class=\"col-xs-4 text-center\">
\t";
        }
        // line 10
        echo "\t\t\t<ul class=\"subfooter-links\">
\t\t\t\t<li class=\"facebook\">";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("base.footer.links.facebook", array(), "base");
        echo "</li>
\t\t\t\t<li class=\"twitter\">";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("base.footer.links.twitter", array(), "base");
        echo "</li>
\t\t\t\t<li class=\"youtube\">";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("base.footer.links.youtube", array(), "base");
        echo "</li>
\t\t\t\t<li class=\"pinterest\">";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("base.footer.links.pinterest", array(), "base");
        echo "</li>
\t\t\t\t<li class=\"instagram\">";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("base.footer.links.instagram", array(), "base");
        echo "</li>
\t\t\t</ul>
\t\t</div>
";
        
        $__internal_cdcc6661e67cbb6590d46677710a61c652371e221ff1a563b2a9c9d2d13e9826->leave($__internal_cdcc6661e67cbb6590d46677710a61c652371e221ff1a563b2a9c9d2d13e9826_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Base/Components/Footer:subfooter-links.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  74 => 15,  70 => 14,  66 => 13,  62 => 12,  58 => 11,  55 => 10,  51 => 8,  47 => 6,  44 => 5,  38 => 4,  28 => 19,  26 => 4,  23 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'base' %}

{# Links a las Redes sociales #}
{% block social_network %}
\t{% if is_mobile %}
\t\t<div class=\"col-xs-10 col-sm-8 col-sm-offset-2 text-center\">
\t{% else %}
\t\t<div class=\"col-xs-4 text-center\">
\t{% endif %}
\t\t\t<ul class=\"subfooter-links\">
\t\t\t\t<li class=\"facebook\">{{ 'base.footer.links.facebook'   | trans  | raw }}</li>
\t\t\t\t<li class=\"twitter\">{{ 'base.footer.links.twitter'    | trans  | raw }}</li>
\t\t\t\t<li class=\"youtube\">{{ 'base.footer.links.youtube'    | trans  | raw }}</li>
\t\t\t\t<li class=\"pinterest\">{{ 'base.footer.links.pinterest'  | trans  | raw }}</li>
\t\t\t\t<li class=\"instagram\">{{ 'base.footer.links.instagram'  | trans  | raw }}</li>
\t\t\t</ul>
\t\t</div>
{% endblock social_network %}



", "VODBaseBundle:Base/Components/Footer:subfooter-links.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/Base/Components/Footer/subfooter-links.html.twig");
    }
}
