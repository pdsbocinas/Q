<?php

/* VODBaseBundle:Components:flash-messages.html.twig */
class __TwigTemplate_4d8dd5a5cadc3e81f3199ef9bdb9bcf37c0b324724ba05844790ffe9b4c41cc4 extends Twig_Template
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
        $__internal_ca07691c2dad77534966b55eea3ee9c002532a148282251e87847db7ad6aa632 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca07691c2dad77534966b55eea3ee9c002532a148282251e87847db7ad6aa632->enter($__internal_ca07691c2dad77534966b55eea3ee9c002532a148282251e87847db7ad6aa632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Components:flash-messages.html.twig"));

        // line 1
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "success"), "method")) {
            // line 2
            echo "    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"alert alert-success alert-dismissible\" role=\"alert\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 7
                echo "                    ";
                echo $context["msg"];
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "            </div>
        </div>
    </div>
";
        }
        // line 13
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "error"), "method")) {
            // line 14
            echo "    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "error"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 19
                echo "                    ";
                echo $context["msg"];
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "            </div>
        </div>
    </div>
";
        }
        
        $__internal_ca07691c2dad77534966b55eea3ee9c002532a148282251e87847db7ad6aa632->leave($__internal_ca07691c2dad77534966b55eea3ee9c002532a148282251e87847db7ad6aa632_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Components:flash-messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 21,  61 => 19,  57 => 18,  51 => 14,  49 => 13,  43 => 9,  34 => 7,  30 => 6,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if app.session.flashBag.has('success') %}
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"alert alert-success alert-dismissible\" role=\"alert\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                {% for msg in app.session.flashBag.get('success') %}
                    {{ msg | raw }}
                {% endfor %}
            </div>
        </div>
    </div>
{% endif %}
{% if app.session.flashBag.has('error') %}
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                {% for msg in app.session.flashBag.get('error') %}
                    {{ msg | raw}}
                {% endfor %}
            </div>
        </div>
    </div>
{% endif %}
", "VODBaseBundle:Components:flash-messages.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/Components/flash-messages.html.twig");
    }
}
