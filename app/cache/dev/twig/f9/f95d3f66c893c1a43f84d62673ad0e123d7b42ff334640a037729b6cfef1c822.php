<?php

/* VODBaseBundle:Security:login.html.twig */
class __TwigTemplate_cdb25fcad8511e1c4837b823be554471b7a4a78e05ccb47ba4a7c2e0026d000b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("VODBaseBundle:Base/Wrappers:wrapper.html.twig", "VODBaseBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'body_class' => array($this, 'block_body_class'),
            'header_container' => array($this, 'block_header_container'),
            'body_container' => array($this, 'block_body_container'),
            'error_container' => array($this, 'block_error_container'),
            'footer_container' => array($this, 'block_footer_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "VODBaseBundle:Base/Wrappers:wrapper.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_19e734155996c0e826a59534ac2e439d140dcc2fed94798336a7b74e00990f99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19e734155996c0e826a59534ac2e439d140dcc2fed94798336a7b74e00990f99->enter($__internal_19e734155996c0e826a59534ac2e439d140dcc2fed94798336a7b74e00990f99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19e734155996c0e826a59534ac2e439d140dcc2fed94798336a7b74e00990f99->leave($__internal_19e734155996c0e826a59534ac2e439d140dcc2fed94798336a7b74e00990f99_prof);

    }

    // line 3
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_344422c1a2b7148e0b921885341aeda0622c7c7069dfa33c401088183f4fbd6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_344422c1a2b7148e0b921885341aeda0622c7c7069dfa33c401088183f4fbd6e->enter($__internal_344422c1a2b7148e0b921885341aeda0622c7c7069dfa33c401088183f4fbd6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        if ( !(isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
            echo "class=\"bg-full img-bg-full-";
            echo twig_escape_filter($this->env, twig_random($this->env, (isset($context["bg_images"]) ? $context["bg_images"] : $this->getContext($context, "bg_images"))), "html", null, true);
            echo "\"";
        }
        
        $__internal_344422c1a2b7148e0b921885341aeda0622c7c7069dfa33c401088183f4fbd6e->leave($__internal_344422c1a2b7148e0b921885341aeda0622c7c7069dfa33c401088183f4fbd6e_prof);

    }

    // line 7
    public function block_header_container($context, array $blocks = array())
    {
        $__internal_515aadb17df0eef33c76653d3032a7c7058367e1322955c6cf67304653f118a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_515aadb17df0eef33c76653d3032a7c7058367e1322955c6cf67304653f118a3->enter($__internal_515aadb17df0eef33c76653d3032a7c7058367e1322955c6cf67304653f118a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_container"));

        
        $__internal_515aadb17df0eef33c76653d3032a7c7058367e1322955c6cf67304653f118a3->leave($__internal_515aadb17df0eef33c76653d3032a7c7058367e1322955c6cf67304653f118a3_prof);

    }

    // line 9
    public function block_body_container($context, array $blocks = array())
    {
        $__internal_aea68f83847facafbcbf37dbbe113869e0b23b3ba7d10889547bdda64b75955f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aea68f83847facafbcbf37dbbe113869e0b23b3ba7d10889547bdda64b75955f->enter($__internal_aea68f83847facafbcbf37dbbe113869e0b23b3ba7d10889547bdda64b75955f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_container"));

        // line 10
        echo "    <div class=\"container-full\">
        <div class=\"container-absolute\">
            <div class=\"col-xs-12 col-md-6  col-md-offset-3\">
                <h1 class=\"login\">
                    <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">
                        ";
        // line 15
        $this->loadTemplate("VODBaseBundle:Base/Components/Header:logo.html.twig", "VODBaseBundle:Security:login.html.twig", 15)->display($context);
        // line 16
        echo "                    </a>
                </h1>
                ";
        // line 18
        $this->displayBlock('error_container', $context, $blocks);
        // line 26
        echo "                ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "success"), "method")) {
            // line 27
            echo "                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"alert alert-success alert-dismissible\" role=\"alert\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                                ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 32
                echo "                                    ";
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "                            </div>
                        </div>
                    </div>
                ";
        }
        // line 38
        echo "              
                <form id=\"login\" action=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
        echo "\" method=\"post\">
                    <h2>";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.title", array(), "security"), "html", null, true);
        echo "</h2>
                    <div class=\"form-group\">
                        <input class=\"form-control\" type=\"email\" id=\"username\" name=\"_username\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\"
                               placeholder=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.placeholders.email", array(), "security"), "html", null, true);
        echo "\" autofocus />
                    </div>
                    
                    <div class=\"form-group form-group_alter\">
                        <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" placeholder=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.placeholders.password", array(), "security"), "html", null, true);
        echo "\" />
                        <i class=\"fa fa-eye\"></i>
                    </div>
                    <div class=\"form-group text-right\">
                        <a class=\"btn btn-link\" href=\"";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("request_new_password");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.labels.forgot_password", array(), "security"), "html", null, true);
        echo "</a>
                    </div>
                    <div class=\"form-group\">
                        <input type=\"checkbox\" class=\"remember\" id=\"remember_me\" name=\"_remember_me\" checked />
                        <label for=\"remember_me\"><span>";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.labels.remember_me", array(), "security"), "html", null, true);
        echo "</span></label>
                    </div>
                    <input type=\"hidden\" name=\"_target_path\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), "html", null, true);
        echo "\">
                        ";
        // line 63
        echo "                    <div class=\"form-group\">
                        <button class=\"btn btn-primary btn-lg btn-block\" type=\"submit\">";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.registration.login_link", array(), "security"), "html", null, true);
        echo "</button>
                    </div>
                </form>
                <p class=\"register-note\">
                    ";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.labels.new", array(), "security"), "html", null, true);
        echo "
                    <a href=\"";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("registration");
        echo "\" class=\"btn btn-link\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.labels.register_now", array(), "security"), "html", null, true);
        echo "</a>
                </p>
            </div>
        </div>    
    </div>
";
        
        $__internal_aea68f83847facafbcbf37dbbe113869e0b23b3ba7d10889547bdda64b75955f->leave($__internal_aea68f83847facafbcbf37dbbe113869e0b23b3ba7d10889547bdda64b75955f_prof);

    }

    // line 18
    public function block_error_container($context, array $blocks = array())
    {
        $__internal_a1dbb068f9801982f2af1df858ca948819ad0a6c7a272cb20867b5171e417be7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1dbb068f9801982f2af1df858ca948819ad0a6c7a272cb20867b5171e417be7->enter($__internal_a1dbb068f9801982f2af1df858ca948819ad0a6c7a272cb20867b5171e417be7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "error_container"));

        // line 19
        echo "                    ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 20
            echo "                        <div class=\"alert alert-danger\">
                            <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                            <strong>¡Error!</strong> ";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "
                        </div>
                    ";
        }
        // line 25
        echo "                ";
        
        $__internal_a1dbb068f9801982f2af1df858ca948819ad0a6c7a272cb20867b5171e417be7->leave($__internal_a1dbb068f9801982f2af1df858ca948819ad0a6c7a272cb20867b5171e417be7_prof);

    }

    // line 76
    public function block_footer_container($context, array $blocks = array())
    {
        $__internal_2b903de78ff85148e669873d8d71f4ad0ddee2783f01b66b5258b0620d7d062e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b903de78ff85148e669873d8d71f4ad0ddee2783f01b66b5258b0620d7d062e->enter($__internal_2b903de78ff85148e669873d8d71f4ad0ddee2783f01b66b5258b0620d7d062e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer_container"));

        
        $__internal_2b903de78ff85148e669873d8d71f4ad0ddee2783f01b66b5258b0620d7d062e->leave($__internal_2b903de78ff85148e669873d8d71f4ad0ddee2783f01b66b5258b0620d7d062e_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 76,  213 => 25,  207 => 22,  203 => 20,  200 => 19,  194 => 18,  179 => 69,  175 => 68,  168 => 64,  165 => 63,  161 => 57,  156 => 55,  147 => 51,  140 => 47,  133 => 43,  129 => 42,  124 => 40,  120 => 39,  117 => 38,  111 => 34,  102 => 32,  98 => 31,  92 => 27,  89 => 26,  87 => 18,  83 => 16,  81 => 15,  77 => 14,  71 => 10,  65 => 9,  54 => 7,  38 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'VODBaseBundle:Base/Wrappers:wrapper.html.twig' %}

{% block body_class %}{% if not is_mobile %}class=\"bg-full img-bg-full-{{ random(bg_images) }}\"{% endif %}{% endblock body_class %}

{% trans_default_domain 'security' %}

{% block header_container %}{% endblock header_container %}

{% block body_container %}
    <div class=\"container-full\">
        <div class=\"container-absolute\">
            <div class=\"col-xs-12 col-md-6  col-md-offset-3\">
                <h1 class=\"login\">
                    <a href=\"{{ path('homepage') }}\">
                        {% include 'VODBaseBundle:Base/Components/Header:logo.html.twig' %}
                    </a>
                </h1>
                {% block error_container %}
                    {% if error %}
                        <div class=\"alert alert-danger\">
                            <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                            <strong>¡Error!</strong> {{ error.messageKey | trans(error.messageData, 'security') }}
                        </div>
                    {% endif %}
                {% endblock error_container %}
                {% if app.session.flashBag.has('success') %}
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"alert alert-success alert-dismissible\" role=\"alert\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                                {% for msg in app.session.flashBag.get('success') %}
                                    {{ msg }}
                                {% endfor %}
                            </div>
                        </div>
                    </div>
                {% endif %}
              
                <form id=\"login\" action=\"{{ path('login_check') }}\" method=\"post\">
                    <h2>{{ 'security.login.title' | trans }}</h2>
                    <div class=\"form-group\">
                        <input class=\"form-control\" type=\"email\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\"
                               placeholder=\"{{ 'security.login.placeholders.email' | trans }}\" autofocus />
                    </div>
                    
                    <div class=\"form-group form-group_alter\">
                        <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" placeholder=\"{{ 'security.login.placeholders.password' | trans }}\" />
                        <i class=\"fa fa-eye\"></i>
                    </div>
                    <div class=\"form-group text-right\">
                        <a class=\"btn btn-link\" href=\"{{ path('request_new_password') }}\">{{ 'security.login.labels.forgot_password' | trans }}</a>
                    </div>
                    <div class=\"form-group\">
                        <input type=\"checkbox\" class=\"remember\" id=\"remember_me\" name=\"_remember_me\" checked />
                        <label for=\"remember_me\"><span>{{ 'security.login.labels.remember_me' | trans }}</span></label>
                    </div>
                    <input type=\"hidden\" name=\"_target_path\" value=\"{{ route }}\">
                        {#
                            If you want to control the URL the user
                            is redirected to on success (more details below)
                            <input type=\"hidden\" name=\"_target_path\" value=\"/account\" />
                        #}
                    <div class=\"form-group\">
                        <button class=\"btn btn-primary btn-lg btn-block\" type=\"submit\">{{ 'security.registration.login_link' | trans }}</button>
                    </div>
                </form>
                <p class=\"register-note\">
                    {{ 'security.login.labels.new' | trans }}
                    <a href=\"{{ path('registration') }}\" class=\"btn btn-link\">{{ 'security.login.labels.register_now' | trans }}</a>
                </p>
            </div>
        </div>    
    </div>
{% endblock body_container %}

{% block footer_container %}
{% endblock footer_container %}", "VODBaseBundle:Security:login.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/Security/login.html.twig");
    }
}
