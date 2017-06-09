<?php

/* VODBaseBundle:Base/Components/Forms:newsletter-subscription.html.twig */
class __TwigTemplate_090717808292b7c293614aa27e6f3b3e0593c94e60ba61d2d7e72f71a828c067 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'email_subscribe_logo' => array($this, 'block_email_subscribe_logo'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_500b7ebf77d4e49d53c88d7f1222f57d4ef0d587719d029244cfcd4b8da241d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_500b7ebf77d4e49d53c88d7f1222f57d4ef0d587719d029244cfcd4b8da241d6->enter($__internal_500b7ebf77d4e49d53c88d7f1222f57d4ef0d587719d029244cfcd4b8da241d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Base/Components/Forms:newsletter-subscription.html.twig"));

        // line 2
        $context["subscribedToNewsletter"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "subscribed-to-newssletter"), "method");
        // line 3
        echo "
";
        // line 4
        if (((null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) && ((null === (isset($context["subscribedToNewsletter"]) ? $context["subscribedToNewsletter"] : $this->getContext($context, "subscribedToNewsletter"))) && ((isset($context["subscribedToNewsletter"]) ? $context["subscribedToNewsletter"] : $this->getContext($context, "subscribedToNewsletter")) == false)))) {
            // line 5
            echo "\t";
            if ((array_key_exists("status", $context) && ((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")) == false))) {
                // line 6
                echo "\t\t<div class=\"email-subscribe-form  error\">
\t";
            } elseif ((            // line 7
array_key_exists("status", $context) && ((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")) == true))) {
                // line 8
                echo "\t\t<div class=\"email-subscribe-form success\">
\t";
            } else {
                // line 10
                echo "\t\t<div class=\"email-subscribe-form\">
\t";
            }
            // line 12
            echo "\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12 col-lg-8 col-lg-offset-2\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"email-subscribe text-center\">
\t\t\t\t\t\t\t";
            // line 17
            if ((array_key_exists("status", $context) && ((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")) == true))) {
                // line 18
                echo "\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 19
                echo twig_escape_filter($this->env, ((isset($context["cdn_url"]) ? $context["cdn_url"] : $this->getContext($context, "cdn_url")) . "/images/footer-icon.png"), "html", null, true);
                echo "\" alt=\"Newsletter\">
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<span style=\"color:#fff;\"><strong>";
                // line 22
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("forms.newsletter.success", array(), "forms"), "html", null, true);
                echo "</strong></span>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t";
            } else {
                // line 25
                echo "\t\t\t\t\t\t\t\t<form action=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("service_subscribe_newsletter");
                echo "\" id=\"form-subscribe-newsletter\" method=\"POST\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t";
                // line 27
                $this->displayBlock('email_subscribe_logo', $context, $blocks);
                // line 32
                echo "\t\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" name=\"email\" placeholder=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("forms.newsletter.placeholder", array(), "forms"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn-outline btn-default-outline btn-lg\" id=\"submit-form-subscribe-newsletter\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\ttype=\"button\">";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.buttons.send", array(), "common"), "html", null, true);
                echo "</button>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t";
            }
            // line 40
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
        }
        
        $__internal_500b7ebf77d4e49d53c88d7f1222f57d4ef0d587719d029244cfcd4b8da241d6->leave($__internal_500b7ebf77d4e49d53c88d7f1222f57d4ef0d587719d029244cfcd4b8da241d6_prof);

    }

    // line 27
    public function block_email_subscribe_logo($context, array $blocks = array())
    {
        $__internal_b79e64176491b7fec24cdc66d95c586c37408da698c0f87e2923cd4b686bc208 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b79e64176491b7fec24cdc66d95c586c37408da698c0f87e2923cd4b686bc208->enter($__internal_b79e64176491b7fec24cdc66d95c586c37408da698c0f87e2923cd4b686bc208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_subscribe_logo"));

        // line 28
        echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 29
        echo twig_escape_filter($this->env, ((isset($context["cdn_url"]) ? $context["cdn_url"] : $this->getContext($context, "cdn_url")) . "/images/footer-icon.png"), "html", null, true);
        echo "\" alt=\"Newsletter\">
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t";
        
        $__internal_b79e64176491b7fec24cdc66d95c586c37408da698c0f87e2923cd4b686bc208->leave($__internal_b79e64176491b7fec24cdc66d95c586c37408da698c0f87e2923cd4b686bc208_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Base/Components/Forms:newsletter-subscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 29,  113 => 28,  107 => 27,  93 => 40,  85 => 35,  78 => 32,  76 => 27,  70 => 25,  64 => 22,  58 => 19,  55 => 18,  53 => 17,  46 => 12,  42 => 10,  38 => 8,  36 => 7,  33 => 6,  30 => 5,  28 => 4,  25 => 3,  23 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'forms' %}
{% set subscribedToNewsletter = app.session.get('subscribed-to-newssletter') %}

{% if app.user is null and (subscribedToNewsletter is null and subscribedToNewsletter == false) %}
\t{% if status is defined and status == false %}
\t\t<div class=\"email-subscribe-form  error\">
\t{% elseif status is defined and status == true %}
\t\t<div class=\"email-subscribe-form success\">
\t{% else %}
\t\t<div class=\"email-subscribe-form\">
\t{% endif %}
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12 col-lg-8 col-lg-offset-2\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"email-subscribe text-center\">
\t\t\t\t\t\t\t{% if status is defined and status == true %}
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ cdn_url~'/images/footer-icon.png' }}\" alt=\"Newsletter\">
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<span style=\"color:#fff;\"><strong>{{ 'forms.newsletter.success' | trans({}, 'forms') }}</strong></span>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<form action=\"{{ path('service_subscribe_newsletter') }}\" id=\"form-subscribe-newsletter\" method=\"POST\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t{% block email_subscribe_logo %}
\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ cdn_url~'/images/footer-icon.png' }}\" alt=\"Newsletter\">
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t{% endblock email_subscribe_logo %}
\t\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" name=\"email\" placeholder=\"{{ 'forms.newsletter.placeholder' | trans({}, 'forms') }}\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn-outline btn-default-outline btn-lg\" id=\"submit-form-subscribe-newsletter\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\ttype=\"button\">{{ 'common.buttons.send' | trans({}, 'common') }}</button>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
{% endif %}", "VODBaseBundle:Base/Components/Forms:newsletter-subscription.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/Base/Components/Forms/newsletter-subscription.html.twig");
    }
}
