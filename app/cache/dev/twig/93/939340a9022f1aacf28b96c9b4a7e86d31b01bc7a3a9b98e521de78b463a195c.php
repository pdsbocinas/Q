<?php

/* VODBaseBundle:Base/Components/Scripts:google-tag-manager-script.html.twig */
class __TwigTemplate_db8b8a406daf35eecd984be8eb4b4e4fd755cc41da6c5f47aaa36e278e05c636 extends Twig_Template
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
        $__internal_a8ed1509caf9443d3daf3b6f502497dd47e85fdaa388235d5ef0dad2aaefd69c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8ed1509caf9443d3daf3b6f502497dd47e85fdaa388235d5ef0dad2aaefd69c->enter($__internal_a8ed1509caf9443d3daf3b6f502497dd47e85fdaa388235d5ef0dad2aaefd69c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Base/Components/Scripts:google-tag-manager-script.html.twig"));

        // line 1
        if (((isset($context["section"]) ? $context["section"] : $this->getContext($context, "section")) == "head")) {
            // line 2
            echo "    <!-- Google Tag Manager -->
    <script>
        window.dataLayer = window.dataLayer || [];";
            // line 6
            if ( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()))) {
                // line 7
                echo "dataLayer.push({
                \"event\": \"SetUser\",
                \"user-Id\": \"";
                // line 9
                echo twig_escape_filter($this->env, (((isset($context["operator_code"]) ? $context["operator_code"] : $this->getContext($context, "operator_code")) . "-") . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "userNumber", array())), "html", null, true);
                echo "\",
                ";
                // line 10
                if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "product", array()), "freePeriod", array())) {
                    // line 11
                    echo "                \"user-type\": 'Suscripción de Prueba',
                ";
                } else {
                    // line 13
                    echo "                \"user-type\": \"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "getUserType", array()), "html", null, true);
                    echo "\",
                ";
                }
                // line 15
                echo "                \"user-Profile\": \"";
                echo twig_escape_filter($this->env, (((isset($context["operator_code"]) ? $context["operator_code"] : $this->getContext($context, "operator_code")) . "-") . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "activeProfile", array()), "profileInformation", array())), "html", null, true);
                echo "\",
                \"user-Agent\": \"";
                // line 16
                echo twig_escape_filter($this->env, $this->env->getExtension('VOD\BaseBundle\Services\Twig\AppExtension')->getUserAgent(), "html", null, true);
                echo "\",
                \"user-Email\": \"";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "email", array()), "html", null, true);
                echo "\"
            });";
            }
            // line 20
            echo "(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                'https://www.googletagmanager.com/gtm.js?id='+i+dl+ '&gtm_auth=";
            // line 23
            echo twig_escape_filter($this->env, (isset($context["gtm_auth"]) ? $context["gtm_auth"] : $this->getContext($context, "gtm_auth")), "html", null, true);
            echo "&gtm_preview=";
            echo twig_escape_filter($this->env, (isset($context["gtm_preview"]) ? $context["gtm_preview"] : $this->getContext($context, "gtm_preview")), "html", null, true);
            echo "&gtm_cookies_win=x';f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["gtm_code"]) ? $context["gtm_code"] : $this->getContext($context, "gtm_code")), "html", null, true);
            echo "');</script>
    <!-- End Google Tag Manager -->
";
        }
        // line 27
        echo "
";
        // line 28
        if (((isset($context["section"]) ? $context["section"] : $this->getContext($context, "section")) == "body")) {
            // line 29
            echo "    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src=\"https://www.googletagmanager.com/ns.html?id=";
            // line 30
            echo twig_escape_filter($this->env, (isset($context["gtm_code"]) ? $context["gtm_code"] : $this->getContext($context, "gtm_code")), "html", null, true);
            echo "&gtm_auth=";
            echo twig_escape_filter($this->env, (isset($context["gtm_auth"]) ? $context["gtm_auth"] : $this->getContext($context, "gtm_auth")), "html", null, true);
            echo "&gtm_preview=";
            echo twig_escape_filter($this->env, (isset($context["gtm_preview"]) ? $context["gtm_preview"] : $this->getContext($context, "gtm_preview")), "html", null, true);
            echo "&gtm_cookies_win=x\"
                      height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
";
        }
        
        $__internal_a8ed1509caf9443d3daf3b6f502497dd47e85fdaa388235d5ef0dad2aaefd69c->leave($__internal_a8ed1509caf9443d3daf3b6f502497dd47e85fdaa388235d5ef0dad2aaefd69c_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Base/Components/Scripts:google-tag-manager-script.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 30,  86 => 29,  84 => 28,  81 => 27,  75 => 24,  69 => 23,  64 => 20,  59 => 17,  55 => 16,  50 => 15,  44 => 13,  40 => 11,  38 => 10,  34 => 9,  30 => 7,  28 => 6,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if section == 'head' %}
    <!-- Google Tag Manager -->
    <script>
        window.dataLayer = window.dataLayer || [];

        {%- if app.user is not null -%}
            dataLayer.push({
                \"event\": \"SetUser\",
                \"user-Id\": \"{{- operator_code ~ '-' ~ app.user.userNumber -}}\",
                {% if app.user.product.freePeriod %}
                \"user-type\": 'Suscripción de Prueba',
                {% else %}
                \"user-type\": \"{{- app.user.getUserType -}}\",
                {% endif %}
                \"user-Profile\": \"{{- operator_code~'-'~app.user.activeProfile.profileInformation -}}\",
                \"user-Agent\": \"{{ getUserAgent() }}\",
                \"user-Email\": \"{{ app.user.email }}\"
            });
        {%- endif -%}
        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                'https://www.googletagmanager.com/gtm.js?id='+i+dl+ '&gtm_auth={{ gtm_auth }}&gtm_preview={{ gtm_preview }}&gtm_cookies_win=x';f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','{{ gtm_code }}');</script>
    <!-- End Google Tag Manager -->
{% endif %}

{% if section == 'body' %}
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src=\"https://www.googletagmanager.com/ns.html?id={{ gtm_code }}&gtm_auth={{ gtm_auth }}&gtm_preview={{ gtm_preview }}&gtm_cookies_win=x\"
                      height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
{% endif %}", "VODBaseBundle:Base/Components/Scripts:google-tag-manager-script.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/Base/Components/Scripts/google-tag-manager-script.html.twig");
    }
}
