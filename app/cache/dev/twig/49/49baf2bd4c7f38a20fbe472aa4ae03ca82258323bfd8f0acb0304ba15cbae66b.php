<?php

/* VODBaseBundle:Base/Components/Scripts:fb-sdk-script.html.twig */
class __TwigTemplate_e104280b74280ad96d4270c7e613f26d39cdead4f3d0faf61ae1a2330ec120f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'facebook_sdk_script' => array($this, 'block_facebook_sdk_script'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c7e3a607bcaa4bc65a9a121e72d21f952c836063709263809f924506402c487b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7e3a607bcaa4bc65a9a121e72d21f952c836063709263809f924506402c487b->enter($__internal_c7e3a607bcaa4bc65a9a121e72d21f952c836063709263809f924506402c487b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Base/Components/Scripts:fb-sdk-script.html.twig"));

        // line 1
        $this->displayBlock('facebook_sdk_script', $context, $blocks);
        
        $__internal_c7e3a607bcaa4bc65a9a121e72d21f952c836063709263809f924506402c487b->leave($__internal_c7e3a607bcaa4bc65a9a121e72d21f952c836063709263809f924506402c487b_prof);

    }

    public function block_facebook_sdk_script($context, array $blocks = array())
    {
        $__internal_0b8b8ac3bfee309cba0d4212929e655cf83ae25bbc9a3e1d278eb84d8db7af6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b8b8ac3bfee309cba0d4212929e655cf83ae25bbc9a3e1d278eb84d8db7af6c->enter($__internal_0b8b8ac3bfee309cba0d4212929e655cf83ae25bbc9a3e1d278eb84d8db7af6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "facebook_sdk_script"));

        // line 2
        echo "\t<script>
        \$.ajaxSetup({ cache: true });
        \$.getScript('//connect.facebook.net/es_LA/sdk.js', function(){
            FB.init({
                appId: '";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["facebook_application_id"]) ? $context["facebook_application_id"] : $this->getContext($context, "facebook_application_id")), "html", null, true);
        echo "',
                version: 'v2.5' // or v2.0, v2.1, v2.2, v2.3
            });
        });
    </script>
";
        
        $__internal_0b8b8ac3bfee309cba0d4212929e655cf83ae25bbc9a3e1d278eb84d8db7af6c->leave($__internal_0b8b8ac3bfee309cba0d4212929e655cf83ae25bbc9a3e1d278eb84d8db7af6c_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Base/Components/Scripts:fb-sdk-script.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  41 => 6,  35 => 2,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block facebook_sdk_script %}
\t<script>
        \$.ajaxSetup({ cache: true });
        \$.getScript('//connect.facebook.net/es_LA/sdk.js', function(){
            FB.init({
                appId: '{{ facebook_application_id }}',
                version: 'v2.5' // or v2.0, v2.1, v2.2, v2.3
            });
        });
    </script>
{% endblock facebook_sdk_script %}", "VODBaseBundle:Base/Components/Scripts:fb-sdk-script.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/Base/Components/Scripts/fb-sdk-script.html.twig");
    }
}
