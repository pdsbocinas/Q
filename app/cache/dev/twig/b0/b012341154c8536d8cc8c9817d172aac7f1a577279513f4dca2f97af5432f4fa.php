<?php

/* VODBaseBundle:Components:share-template.html.twig */
class __TwigTemplate_2375203b4ee3226e4f4201feb7d7054437301595ede836919705db1b7bbbb441 extends Twig_Template
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
        $__internal_da13fd5626246d6c379ed8f5e1c18e142138f9c92562f38026a97183fbd797d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da13fd5626246d6c379ed8f5e1c18e142138f9c92562f38026a97183fbd797d0->enter($__internal_da13fd5626246d6c379ed8f5e1c18e142138f9c92562f38026a97183fbd797d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Components:share-template.html.twig"));

        // line 2
        echo "
<div class=\"share pull-left\">
";
        // line 4
        if ((isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
            // line 5
            echo "\t<div class=\"dropdown dropdown_mobile\">
\t<span>
";
        } else {
            // line 8
            echo "\t<div class=\"dropup\">
\t<span data-toggle=\"tooltip\" title=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("share.title", array(), "share"), "html", null, true);
            echo "\">
";
        }
        // line 11
        echo "\t\t\t<a class=\"btn btn-rounded dropdown-toggle share-button\" data-url=\"{link}\" type=\"button\" id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-haspopup=\"true\"
\t\t\t   aria-expanded=\"true\">
\t\t\t\t<i class=\"fa fa-lg fa-share-alt\"></i>
\t\t\t</a>
\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu1\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"javascript:void(0);\" id=\"fb-share-button\" data-item=\"{slug}\" data-detailurl=\"{link}\"
                                           data-quote=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("share.facebook_quote", array("%title%" => "{title}"), "share"), "html", null, true);
        echo "\"
\t\t\t\t\t   class=\"fb-share-btn\"><i class=\"fa fa-lg fa-facebook-square\"></i> ";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("share.facebook_share_button", array(), "share"), "html", null, true);
        echo "</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"javascript:void(0);\" id=\"tweet-button\" data-item=\"{slug}\"
\t\t\t\t\t   class=\"tweet-btn\" target=\"_blank\" data-url=\"{link}?utm_source=Twitter&utm_medium=tweet&utm_campaign=organic&utm_content={slug}\"
                                           data-text=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("share.message", array("%title%" => "{title}"), "share"), "html", null, true);
        echo "\" 
\t\t\t\t\t   data-lang=\"es\" ><i class=\"fa fa-lg fa-twitter\"></i> ";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("share.twitter_tweet_button", array(), "share"), "html", null, true);
        echo "</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</span>
\t</div>
</div>";
        
        $__internal_da13fd5626246d6c379ed8f5e1c18e142138f9c92562f38026a97183fbd797d0->leave($__internal_da13fd5626246d6c379ed8f5e1c18e142138f9c92562f38026a97183fbd797d0_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Components:share-template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 25,  62 => 24,  54 => 19,  50 => 18,  41 => 11,  36 => 9,  33 => 8,  28 => 5,  26 => 4,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'share' %}

<div class=\"share pull-left\">
{% if is_mobile %}
\t<div class=\"dropdown dropdown_mobile\">
\t<span>
{% else %}
\t<div class=\"dropup\">
\t<span data-toggle=\"tooltip\" title=\"{{ 'share.title' | trans }}\">
{% endif %}
\t\t\t<a class=\"btn btn-rounded dropdown-toggle share-button\" data-url=\"{link}\" type=\"button\" id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-haspopup=\"true\"
\t\t\t   aria-expanded=\"true\">
\t\t\t\t<i class=\"fa fa-lg fa-share-alt\"></i>
\t\t\t</a>
\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu1\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"javascript:void(0);\" id=\"fb-share-button\" data-item=\"{slug}\" data-detailurl=\"{link}\"
                                           data-quote=\"{{ 'share.facebook_quote' | trans({'%title%': '{title}'}, 'share') }}\"
\t\t\t\t\t   class=\"fb-share-btn\"><i class=\"fa fa-lg fa-facebook-square\"></i> {{ 'share.facebook_share_button' | trans }}</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"javascript:void(0);\" id=\"tweet-button\" data-item=\"{slug}\"
\t\t\t\t\t   class=\"tweet-btn\" target=\"_blank\" data-url=\"{link}?utm_source=Twitter&utm_medium=tweet&utm_campaign=organic&utm_content={slug}\"
                                           data-text=\"{{ 'share.message' | trans({'%title%': '{title}'}, 'share') }}\" 
\t\t\t\t\t   data-lang=\"es\" ><i class=\"fa fa-lg fa-twitter\"></i> {{ 'share.twitter_tweet_button' | trans }}</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</span>
\t</div>
</div>", "VODBaseBundle:Components:share-template.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/Components/share-template.html.twig");
    }
}
