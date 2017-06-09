<?php

/* VODBaseBundle:Base/Components/Scripts:javascripts.html.twig */
class __TwigTemplate_bfb3a6d5c77dbe49863ec85014afb02a851458ad45119f5ad1afdc26241677ff extends Twig_Template
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
        $__internal_812ae8b0ebbcb03da2039e4a3007b53d30aaa74a956929499183d1b5cd22372f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_812ae8b0ebbcb03da2039e4a3007b53d30aaa74a956929499183d1b5cd22372f->enter($__internal_812ae8b0ebbcb03da2039e4a3007b53d30aaa74a956929499183d1b5cd22372f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Base/Components/Scripts:javascripts.html.twig"));

        // line 1
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
<script src=\"//code.jquery.com/jquery-2.2.0.min.js\"></script>
<script src=\"//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.js\"></script>

<script src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor.min.js"), "html", null, true);
        echo "\"></script>
";
        // line 7
        $this->loadTemplate("VODBaseBundle:Base/Components/Scripts:fb-sdk-script.html.twig", "VODBaseBundle:Base/Components/Scripts:javascripts.html.twig", 7)->display($context);
        // line 8
        $this->loadTemplate("VODBaseBundle:Base/Components/Scripts:google-url-shortener-script.html.twig", "VODBaseBundle:Base/Components/Scripts:javascripts.html.twig", 8)->display($context);
        // line 9
        echo "
<script  type=\"text/javascript\"  src=\"https://st.qubit.tv/assets/public/plugin/qoe/1.0/qoe.js\"></script>
<script type=\"text/javascript\">
    window.QOE.init({
        username: '";
        // line 13
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "displayIdentifier", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "displayIdentifier", array()), "not-logged")) : ("not-logged")), "html", null, true);
        echo "',
        userId: ";
        // line 14
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "userNumber", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "userNumber", array()), 0)) : (0)), "html", null, true);
        echo ",
        route: '";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), "html", null, true);
        echo "',
        operator: '";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["operator_code"]) ? $context["operator_code"] : $this->getContext($context, "operator_code")), "html", null, true);
        echo "'
    });
</script>

";
        // line 20
        if ((isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
            // line 21
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/app-mobile.min.js"), "html", null, true);
            echo "\"></script>
    ";
            // line 22
            if (($this->env->getExtension('SunCat\MobileDetectBundle\Twig\Extension\MobileDetectExtension')->isIOS() && ($this->env->getExtension('SunCat\MobileDetectBundle\Twig\Extension\MobileDetectExtension')->isDevice("WindowsPhoneOS") == false))) {
                // line 23
                echo "        ";
                $this->loadTemplate("VODBaseBundle:Base/Components/Header:smartBannerIOS.html.twig", "VODBaseBundle:Base/Components/Scripts:javascripts.html.twig", 23)->display($context);
                // line 24
                echo "    ";
            }
        } else {
            // line 26
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/app.min.js"), "html", null, true);
            echo "\"></script>
";
        }
        // line 28
        echo "
";
        // line 29
        $this->loadTemplate("VODBaseBundle:Base/Components/Forms:search-javascript.html.twig", "VODBaseBundle:Base/Components/Scripts:javascripts.html.twig", 29)->display($context);
        // line 30
        echo "
";
        // line 32
        echo "<script>
if (\$('#poll-quality-modal').length > 0) {
    \$('#poll-quality-modal').modal('show');

    \$('.quality-button').click(function() {
        \$('.quality-button').prop('disabled', true);
        var postData = {
            quality: \$(this).data('quality'),
            identifier: \$('#poll-quality-modal').data('identifier'),
            reason: \$('#poll-quality-modal').data('reason')
        };
        \$.post('";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("service_poll_quality");
        echo "', postData).then(function() {
            \$('#poll-quality-modal').modal('hide');
        });
    });
}

if (\$('.modal-non-reproduction').length > 0) {
    \$('.modal-non-reproduction').modal('show');
}
</script>
";
        
        $__internal_812ae8b0ebbcb03da2039e4a3007b53d30aaa74a956929499183d1b5cd22372f->leave($__internal_812ae8b0ebbcb03da2039e4a3007b53d30aaa74a956929499183d1b5cd22372f_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Base/Components/Scripts:javascripts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 43,  97 => 32,  94 => 30,  92 => 29,  89 => 28,  83 => 26,  79 => 24,  76 => 23,  74 => 22,  69 => 21,  67 => 20,  60 => 16,  56 => 15,  52 => 14,  48 => 13,  42 => 9,  40 => 8,  38 => 7,  34 => 6,  27 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script src=\"{{ asset('bundles/fosjsrouting/js/router.js') }}\"></script>
<script src=\"{{ path('fos_js_routing_js', {'callback': 'fos.Router.setData'}) }}\"></script>
<script src=\"//code.jquery.com/jquery-2.2.0.min.js\"></script>
<script src=\"//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.js\"></script>

<script src=\"{{ asset('js/vendor.min.js') }}\"></script>
{% include 'VODBaseBundle:Base/Components/Scripts:fb-sdk-script.html.twig' %}
{% include 'VODBaseBundle:Base/Components/Scripts:google-url-shortener-script.html.twig' %}

<script  type=\"text/javascript\"  src=\"https://st.qubit.tv/assets/public/plugin/qoe/1.0/qoe.js\"></script>
<script type=\"text/javascript\">
    window.QOE.init({
        username: '{{ app.user.displayIdentifier | default('not-logged') }}',
        userId: {{ app.user.userNumber | default(0) }},
        route: '{{ app.request.attributes.get('_route') }}',
        operator: '{{ operator_code }}'
    });
</script>

{% if is_mobile %}
    <script src=\"{{ asset('js/app-mobile.min.js') }}\"></script>
    {% if is_ios() and is_device('WindowsPhoneOS') == false %}
        {% include 'VODBaseBundle:Base/Components/Header:smartBannerIOS.html.twig' %}
    {% endif %}
{% else %}
    <script src=\"{{ asset('js/app.min.js') }}\"></script>
{% endif %}

{% include 'VODBaseBundle:Base/Components/Forms:search-javascript.html.twig' %}

{# Revisar esto porque quizas no sea necesario #}
<script>
if (\$('#poll-quality-modal').length > 0) {
    \$('#poll-quality-modal').modal('show');

    \$('.quality-button').click(function() {
        \$('.quality-button').prop('disabled', true);
        var postData = {
            quality: \$(this).data('quality'),
            identifier: \$('#poll-quality-modal').data('identifier'),
            reason: \$('#poll-quality-modal').data('reason')
        };
        \$.post('{{ path('service_poll_quality') }}', postData).then(function() {
            \$('#poll-quality-modal').modal('hide');
        });
    });
}

if (\$('.modal-non-reproduction').length > 0) {
    \$('.modal-non-reproduction').modal('show');
}
</script>
", "VODBaseBundle:Base/Components/Scripts:javascripts.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/Base/Components/Scripts/javascripts.html.twig");
    }
}
