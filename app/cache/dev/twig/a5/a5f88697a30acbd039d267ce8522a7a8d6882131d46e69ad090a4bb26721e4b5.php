<?php

/* VODBaseBundle:Content/Components:facebook-meta-tags.html.twig */
class __TwigTemplate_2a4acffae954efae9145924ba794dc5aade877d2718e9819a9b765bd001dd321 extends Twig_Template
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
        $__internal_660096d09d5dc9f404b7736500c38c20d4b18eac0f52b8661d8cd2e3dd6d7a04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_660096d09d5dc9f404b7736500c38c20d4b18eac0f52b8661d8cd2e3dd6d7a04->enter($__internal_660096d09d5dc9f404b7736500c38c20d4b18eac0f52b8661d8cd2e3dd6d7a04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Content/Components:facebook-meta-tags.html.twig"));

        // line 1
        if ( !array_key_exists("detail", $context)) {
            // line 2
            echo "\t";
            $context["detail"] = false;
        }
        // line 4
        echo "
<meta property=\"og:url\" content=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "\" />
<meta property=\"og:site_name\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.opengraph.site_name", array(), "common"), "html", null, true);
        echo "\" />
";
        // line 7
        if ((true == (isset($context["detail"]) ? $context["detail"] : $this->getContext($context, "detail")))) {
            // line 8
            echo "<meta property=\"og:title\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "title", array()), "html", null, true);
            echo "\" />
<meta property=\"og:type\" content=\"video.movie\"/>
<meta property=\"og:image\" content=\"";
            // line 10
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "fanarts", array(), "any", false, true), "first", array(), "any", false, true), "url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "fanarts", array(), "any", false, true), "first", array(), "any", false, true), "url", array()), ((isset($context["cdn_url"]) ? $context["cdn_url"] : $this->getContext($context, "cdn_url")) . "/images/logo.png"))) : (((isset($context["cdn_url"]) ? $context["cdn_url"] : $this->getContext($context, "cdn_url")) . "/images/logo.png"))), "html", null, true);
            echo "\" />
<meta property=\"og:description\" content=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "shortSummary", array()), "html", null, true);
            echo "\" />
";
        } else {
            // line 13
            echo "<meta property=\"og:title\" content=\"";
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
            echo "\" />
<meta property=\"og:type\" content=\"website\" />
<meta property=\"og:image\" content=\"";
            // line 15
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "fanarts", array(), "any", false, true), "first", array(), "any", false, true), "url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "fanarts", array(), "any", false, true), "first", array(), "any", false, true), "url", array()), ((isset($context["cdn_url"]) ? $context["cdn_url"] : $this->getContext($context, "cdn_url")) . "/images/logo.png"))) : (((isset($context["cdn_url"]) ? $context["cdn_url"] : $this->getContext($context, "cdn_url")) . "/images/logo.png"))), "html", null, true);
            echo "\" />
<meta property=\"og:description\" content=\"";
            // line 16
            echo twig_escape_filter($this->env, (isset($context["description"]) ? $context["description"] : $this->getContext($context, "description")), "html", null, true);
            echo "\" />
";
        }
        // line 18
        echo "<meta property=\"fb:app_id\" content=\"";
        echo twig_escape_filter($this->env, (isset($context["facebook_application_id"]) ? $context["facebook_application_id"] : $this->getContext($context, "facebook_application_id")), "html", null, true);
        echo "\" />";
        
        $__internal_660096d09d5dc9f404b7736500c38c20d4b18eac0f52b8661d8cd2e3dd6d7a04->leave($__internal_660096d09d5dc9f404b7736500c38c20d4b18eac0f52b8661d8cd2e3dd6d7a04_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Content/Components:facebook-meta-tags.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  62 => 15,  56 => 13,  51 => 11,  47 => 10,  41 => 8,  39 => 7,  35 => 6,  31 => 5,  28 => 4,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if detail is not defined %}
\t{% set detail = false %}
{% endif %}

<meta property=\"og:url\" content=\"{{ url }}\" />
<meta property=\"og:site_name\" content=\"{{ 'common.opengraph.site_name' | trans({}, 'common') }}\" />
{% if true  == detail %}
<meta property=\"og:title\" content=\"{{ content.title }}\" />
<meta property=\"og:type\" content=\"video.movie\"/>
<meta property=\"og:image\" content=\"{{ content.fanarts.first.url | default(cdn_url~'/images/logo.png') }}\" />
<meta property=\"og:description\" content=\"{{ content.shortSummary }}\" />
{% else %}
<meta property=\"og:title\" content=\"{{ title }}\" />
<meta property=\"og:type\" content=\"website\" />
<meta property=\"og:image\" content=\"{{ content.fanarts.first.url | default(cdn_url~'/images/logo.png') }}\" />
<meta property=\"og:description\" content=\"{{ description }}\" />
{% endif %}
<meta property=\"fb:app_id\" content=\"{{ facebook_application_id }}\" />", "VODBaseBundle:Content/Components:facebook-meta-tags.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/Content/Components/facebook-meta-tags.html.twig");
    }
}
