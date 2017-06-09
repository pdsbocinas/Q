<?php

/* VODBaseBundle:Base/Components/Scripts:google-url-shortener-script.html.twig */
class __TwigTemplate_1501bada8ad8fa82be7a60ba36d1d80acc34015ed93526442110f5c59f169ae6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'tweet_function' => array($this, 'block_tweet_function'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a0810a98e0507a194760b7791ba2ab26919b78edee1d2fa78780b65b1b8fab0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0810a98e0507a194760b7791ba2ab26919b78edee1d2fa78780b65b1b8fab0a->enter($__internal_a0810a98e0507a194760b7791ba2ab26919b78edee1d2fa78780b65b1b8fab0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Base/Components/Scripts:google-url-shortener-script.html.twig"));

        // line 1
        $this->displayBlock('tweet_function', $context, $blocks);
        
        $__internal_a0810a98e0507a194760b7791ba2ab26919b78edee1d2fa78780b65b1b8fab0a->leave($__internal_a0810a98e0507a194760b7791ba2ab26919b78edee1d2fa78780b65b1b8fab0a_prof);

    }

    public function block_tweet_function($context, array $blocks = array())
    {
        $__internal_58656a52500369d47fb3de595670a1cf3759909194ec5993d26619b366f5d052 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58656a52500369d47fb3de595670a1cf3759909194ec5993d26619b366f5d052->enter($__internal_58656a52500369d47fb3de595670a1cf3759909194ec5993d26619b366f5d052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tweet_function"));

        // line 2
        echo "    <script type=\"text/javascript\">
        function init() {
            gapi.client.setApiKey('";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["google_url_shortener_api_key"]) ? $context["google_url_shortener_api_key"] : $this->getContext($context, "google_url_shortener_api_key")), "html", null, true);
        echo "');
            gapi.client.load('urlshortener', 'v1');
            // Binds click event on share button to generate a shortUrl with google url shortener API
            \$(document).on('click', '.share-button ', function() {
                var element = \$(this);
                var request = \$.fn.googleUrlShortener(\$(element).data('url'));
                request.then(function(response) {
                    var aTweetButton = \$(element).parent().find('#tweet-button');
                    var fbButton = \$(element).parent().find('#fb-share-button');
                    \$(aTweetButton).data('url', response.result.id);
                    \$(fbButton).data('url', response.result.id);
                });
            });
        }
    </script>
    <script src=\"https://apis.google.com/js/client.js?onload=init\"></script>
";
        
        $__internal_58656a52500369d47fb3de595670a1cf3759909194ec5993d26619b366f5d052->leave($__internal_58656a52500369d47fb3de595670a1cf3759909194ec5993d26619b366f5d052_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Base/Components/Scripts:google-url-shortener-script.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  39 => 4,  35 => 2,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block tweet_function %}
    <script type=\"text/javascript\">
        function init() {
            gapi.client.setApiKey('{{ google_url_shortener_api_key }}');
            gapi.client.load('urlshortener', 'v1');
            // Binds click event on share button to generate a shortUrl with google url shortener API
            \$(document).on('click', '.share-button ', function() {
                var element = \$(this);
                var request = \$.fn.googleUrlShortener(\$(element).data('url'));
                request.then(function(response) {
                    var aTweetButton = \$(element).parent().find('#tweet-button');
                    var fbButton = \$(element).parent().find('#fb-share-button');
                    \$(aTweetButton).data('url', response.result.id);
                    \$(fbButton).data('url', response.result.id);
                });
            });
        }
    </script>
    <script src=\"https://apis.google.com/js/client.js?onload=init\"></script>
{% endblock tweet_function %}", "VODBaseBundle:Base/Components/Scripts:google-url-shortener-script.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/Base/Components/Scripts/google-url-shortener-script.html.twig");
    }
}
