<?php

/* VODBaseBundle:User/Profile:profile.html.twig */
class __TwigTemplate_6dd50dafdec7dc5f385f65314f4687d6b11e29c664c84b8ddfa84f6528d5f504 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("VODBaseBundle:Base/Wrappers:wrapper-user.html.twig", "VODBaseBundle:User/Profile:profile.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'custom_javascript' => array($this, 'block_custom_javascript'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "VODBaseBundle:Base/Wrappers:wrapper-user.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c1239c8db8f61441be7cbc3dc3b7e89933930102729023dc030322d46bf66e20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1239c8db8f61441be7cbc3dc3b7e89933930102729023dc030322d46bf66e20->enter($__internal_c1239c8db8f61441be7cbc3dc3b7e89933930102729023dc030322d46bf66e20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:User/Profile:profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1239c8db8f61441be7cbc3dc3b7e89933930102729023dc030322d46bf66e20->leave($__internal_c1239c8db8f61441be7cbc3dc3b7e89933930102729023dc030322d46bf66e20_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_257bac2e6468d1c551b0f390e8e9cedd84a0342efdb11056b6737dffc293c570 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_257bac2e6468d1c551b0f390e8e9cedd84a0342efdb11056b6737dffc293c570->enter($__internal_257bac2e6468d1c551b0f390e8e9cedd84a0342efdb11056b6737dffc293c570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 6
        echo "    ";
        $this->loadTemplate("VODBaseBundle:User/Profile:profile.html.twig", "VODBaseBundle:User/Profile:profile.html.twig", 6, "1465680079")->display($context);
        
        $__internal_257bac2e6468d1c551b0f390e8e9cedd84a0342efdb11056b6737dffc293c570->leave($__internal_257bac2e6468d1c551b0f390e8e9cedd84a0342efdb11056b6737dffc293c570_prof);

    }

    // line 12
    public function block_custom_javascript($context, array $blocks = array())
    {
        $__internal_2c83afa5ebec218472f93b131872a2149cf06ab549916a8b73e86c82409157f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c83afa5ebec218472f93b131872a2149cf06ab549916a8b73e86c82409157f3->enter($__internal_2c83afa5ebec218472f93b131872a2149cf06ab549916a8b73e86c82409157f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "custom_javascript"));

        // line 13
        echo "    ";
        $this->displayParentBlock("custom_javascript", $context, $blocks);
        echo "
    <script>
        \$(document).ready(function() {
            \$('.profile-delete').click(function(e) {
                e.preventDefault();
                \$('#delete-profile-modal').modal('show');
                var text = \$(this).data('text');
                var profileId = \$(this).data('profileid');
                \$('#delete-profile-modal').on('shown.bs.modal', function (e) {
                    \$('#delete-profile-modal #modal-text').text(text);
                    var path = Routing.generate('user_profile_delete', {'profileId': profileId});
                    \$('#delete-profile-modal #modal-accept-button').attr('href', path);
                });
            });
        });
    </script>
";
        
        $__internal_2c83afa5ebec218472f93b131872a2149cf06ab549916a8b73e86c82409157f3->leave($__internal_2c83afa5ebec218472f93b131872a2149cf06ab549916a8b73e86c82409157f3_prof);

    }

    // line 31
    public function block_content($context, array $blocks = array())
    {
        $__internal_bd96ec483812e57e54d9865ba336d53765649b16c32667996e8e18ffcf3a8404 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd96ec483812e57e54d9865ba336d53765649b16c32667996e8e18ffcf3a8404->enter($__internal_bd96ec483812e57e54d9865ba336d53765649b16c32667996e8e18ffcf3a8404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 32
        echo "
    ";
        // line 33
        $this->loadTemplate("VODBaseBundle:Components/Modal:generic-modal.html.twig", "VODBaseBundle:User/Profile:profile.html.twig", 33)->display(array_merge($context, array("crazyId" => "delete-profile-modal", "crazyTitle" => "Perfiles", "crazyText" => "", "acceptButton" => true, "acceptButtonText" => "common.buttons.confirm", "cancelButton" => true, "cancelButtonAction" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_profile"))));
        // line 36
        echo "
    <div class=\"change-group ";
        // line 37
        if ((isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
            echo " short-container";
        }
        echo "\">
    ";
        // line 38
        $this->loadTemplate("VODBaseBundle:Components:flash-messages.html.twig", "VODBaseBundle:User/Profile:profile.html.twig", 38)->display($context);
        // line 39
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "profiles", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["profile"]) {
            // line 40
            echo "        <div class=\"row ";
            if ((isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
                echo " change-group_alter";
            }
            echo "\">
            <div class=\"col-xs-1 ";
            // line 41
            if ((isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
                echo "col-xs-4 col-sm-3 col-md-2";
            }
            echo "\">
                ";
            // line 42
            $this->loadTemplate("VODBaseBundle:User/Profile:profile-avatar-default.html.twig", "VODBaseBundle:User/Profile:profile.html.twig", 42)->display($context);
            // line 43
            echo "            </div>

            ";
            // line 46
            echo "            ";
            if ((isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
                // line 47
                echo "                 <div class=\"col-xs-8\">
                    <div class=\"row\">
                        <p>";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($context["profile"], "name", array()), "html", null, true);
                echo "</p>
                        <p>";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["profile"], "class", array()), "description", array()), "html", null, true);
                echo "</p>
                        <div class=\"row\">
                            <a class=\"btn btn-link\" id=\"config-profile-";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "-button\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_profile_edit", array("action" => "editar", "profileId" => $this->getAttribute($context["profile"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.profile.list.edit", array(), "user"), "html", null, true);
                echo "</a>
                            ";
                // line 53
                if (($this->getAttribute($context["profile"], "isRoot", array()) == false)) {
                    // line 54
                    echo "                                <a class=\"btn btn-link profile-delete\" data-profileId=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["profile"], "id", array()), "html", null, true);
                    echo "\"
                                   data-text=\"";
                    // line 55
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.profile.list.delete", array("%profile%" => $this->getAttribute($context["profile"], "name", array())), "user"), "html", null, true);
                    echo "\"
                                   id=\"config-profile-";
                    // line 56
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                    echo "-delete-button\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.profile.list.delete_button", array(), "user"), "html", null, true);
                    echo "</a>
                            ";
                }
                // line 58
                echo "                        </div>
                    </div>
                </div>
            ";
                // line 62
                echo "            ";
            } else {
                // line 63
                echo "            ";
                // line 64
                echo "                    <div class=\"col-xs-4\">
                        <p>";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute($context["profile"], "name", array()), "html", null, true);
                echo "</p>
                    </div>

                    <div class=\"col-xs-5\">
                        <p>";
                // line 69
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["profile"], "class", array()), "description", array()), "html", null, true);
                echo "</p>
                    </div>

                    <div class=\"col-xs-2\">

                    <div class=\"text-right\">
                        <a class=\"btn btn-link\" id=\"config-profile-";
                // line 75
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "-button\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_profile_edit", array("action" => "editar", "profileId" => $this->getAttribute($context["profile"], "id", array()))), "html", null, true);
                echo "\">
                            ";
                // line 76
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.profile.list.edit", array(), "user"), "html", null, true);
                echo "
                        </a>
                        ";
                // line 78
                if (($this->getAttribute($context["profile"], "isRoot", array()) == false)) {
                    // line 79
                    echo "                            <a class=\"btn btn-link profile-delete\" data-profileId=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["profile"], "id", array()), "html", null, true);
                    echo "\"
                               data-text=\"";
                    // line 80
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.profile.list.delete", array("%profile%" => $this->getAttribute($context["profile"], "name", array())), "user"), "html", null, true);
                    echo "\"
                               id=\"config-profile-";
                    // line 81
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                    echo "-delete-button\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.profile.list.delete_button", array(), "user"), "html", null, true);
                    echo "</a>
                        ";
                }
                // line 83
                echo "                    </div>
                </div>
            ";
                // line 86
                echo "            ";
            }
            // line 87
            echo "        </div>
        <br />
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['profile'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "
    ";
        // line 91
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "profiles", array())) < 4)) {
            // line 92
            echo "        <div class=\"row\">
                <div class=\"col-xs-1 ";
            // line 93
            if ((isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
                echo "col-xs-4 col-sm-3 col-md-2";
            }
            echo "\">

                <div class=\"create-profile\">
                    <a class=\"btn btn-link\" id=\"create-profile-image-button\" href=\"";
            // line 96
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_profile_new", array("action" => "nuevo"));
            echo "\">
                        <i class=\"fa fa-plus\"></i>
                    </a>
                </div>
            </div>

            <div class=\"col-lg-11  ";
            // line 102
            if ((isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
                echo "col-xs-8 ";
            }
            echo "\">
                 ";
            // line 103
            if ((isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
                // line 104
                echo "                    <div class=\"row\">
                        <div class=\"row\">
                 ";
            } else {
                // line 107
                echo "                    <div class=\"pull-right\">
                 ";
            }
            // line 109
            echo "                        <a class=\"btn btn-link\" id=\"create-profile-button\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_profile_new", array("action" => "nuevo"));
            echo "\">
                            ";
            // line 110
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.profile.list.create_new", array(), "user"), "html", null, true);
            echo "
                        </a>
                    </div>
                ";
            // line 113
            if ((isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
                // line 114
                echo "                    </div>
                ";
            }
            // line 116
            echo "            </div>
        </div>
    ";
        }
        // line 119
        echo "    </div>
";
        
        $__internal_bd96ec483812e57e54d9865ba336d53765649b16c32667996e8e18ffcf3a8404->leave($__internal_bd96ec483812e57e54d9865ba336d53765649b16c32667996e8e18ffcf3a8404_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:User/Profile:profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  327 => 119,  322 => 116,  318 => 114,  316 => 113,  310 => 110,  305 => 109,  301 => 107,  296 => 104,  294 => 103,  288 => 102,  279 => 96,  271 => 93,  268 => 92,  266 => 91,  263 => 90,  247 => 87,  244 => 86,  240 => 83,  233 => 81,  229 => 80,  224 => 79,  222 => 78,  217 => 76,  211 => 75,  202 => 69,  195 => 65,  192 => 64,  190 => 63,  187 => 62,  182 => 58,  175 => 56,  171 => 55,  166 => 54,  164 => 53,  156 => 52,  151 => 50,  147 => 49,  143 => 47,  140 => 46,  136 => 43,  134 => 42,  128 => 41,  121 => 40,  103 => 39,  101 => 38,  95 => 37,  92 => 36,  90 => 33,  87 => 32,  81 => 31,  56 => 13,  50 => 12,  42 => 6,  36 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'VODBaseBundle:Base/Wrappers:wrapper-user.html.twig' %}

{% trans_default_domain 'user' %}

{% block head %}
    {% embed 'VODBaseBundle:Base/Components/Header:head.html.twig' %}
        {% block title %}{{ section ~ ' - ' ~ 'common.opengraph.site_name' | trans({}, 'common') }}{% endblock title %}
        {% block meta_description %}{{ section ~ ' - ' ~ 'common.opengraph.site_name' | trans({}, 'common') }}{% endblock meta_description %}
    {% endembed %}
{% endblock head %}

{% block custom_javascript %}
    {{ parent() }}
    <script>
        \$(document).ready(function() {
            \$('.profile-delete').click(function(e) {
                e.preventDefault();
                \$('#delete-profile-modal').modal('show');
                var text = \$(this).data('text');
                var profileId = \$(this).data('profileid');
                \$('#delete-profile-modal').on('shown.bs.modal', function (e) {
                    \$('#delete-profile-modal #modal-text').text(text);
                    var path = Routing.generate('user_profile_delete', {'profileId': profileId});
                    \$('#delete-profile-modal #modal-accept-button').attr('href', path);
                });
            });
        });
    </script>
{% endblock custom_javascript %}

{% block content %}

    {% include 'VODBaseBundle:Components/Modal:generic-modal.html.twig' with
        {'crazyId': 'delete-profile-modal', 'crazyTitle': 'Perfiles', 'crazyText': '',
    'acceptButton': true, 'acceptButtonText': 'common.buttons.confirm', 'cancelButton': true, 'cancelButtonAction': path('user_profile')} %}

    <div class=\"change-group {% if is_mobile %} short-container{% endif %}\">
    {% include 'VODBaseBundle:Components:flash-messages.html.twig' %}
    {% for profile in app.user.profiles %}
        <div class=\"row {% if is_mobile %} change-group_alter{% endif %}\">
            <div class=\"col-xs-1 {% if is_mobile %}col-xs-4 col-sm-3 col-md-2{% endif %}\">
                {% include 'VODBaseBundle:User/Profile:profile-avatar-default.html.twig' %}
            </div>

            {# mobile #}
            {% if is_mobile %}
                 <div class=\"col-xs-8\">
                    <div class=\"row\">
                        <p>{{ profile.name }}</p>
                        <p>{{ profile.class.description }}</p>
                        <div class=\"row\">
                            <a class=\"btn btn-link\" id=\"config-profile-{{ loop.index }}-button\" href=\"{{ path('user_profile_edit', {'action': 'editar', 'profileId': profile.id}) }}\">{{ 'user.profile.list.edit' | trans  }}</a>
                            {% if profile.isRoot == false %}
                                <a class=\"btn btn-link profile-delete\" data-profileId=\"{{ profile.id }}\"
                                   data-text=\"{{ 'user.profile.list.delete' | trans({'%profile%': profile.name}) }}\"
                                   id=\"config-profile-{{ loop.index }}-delete-button\">{{ 'user.profile.list.delete_button' | trans }}</a>
                            {% endif %}
                        </div>
                    </div>
                </div>
            {# fin mobile #}
            {% else  %}
            {# Desktop #}
                    <div class=\"col-xs-4\">
                        <p>{{ profile.name }}</p>
                    </div>

                    <div class=\"col-xs-5\">
                        <p>{{ profile.class.description }}</p>
                    </div>

                    <div class=\"col-xs-2\">

                    <div class=\"text-right\">
                        <a class=\"btn btn-link\" id=\"config-profile-{{ loop.index }}-button\" href=\"{{ path('user_profile_edit', {'action': 'editar', 'profileId': profile.id}) }}\">
                            {{ 'user.profile.list.edit' | trans  }}
                        </a>
                        {% if profile.isRoot == false %}
                            <a class=\"btn btn-link profile-delete\" data-profileId=\"{{ profile.id }}\"
                               data-text=\"{{ 'user.profile.list.delete' | trans({'%profile%': profile.name}) }}\"
                               id=\"config-profile-{{ loop.index }}-delete-button\">{{ 'user.profile.list.delete_button' | trans }}</a>
                        {% endif %}
                    </div>
                </div>
            {# fin desktop #}
            {% endif %}
        </div>
        <br />
    {% endfor %}

    {% if app.user.profiles | length < 4 %}
        <div class=\"row\">
                <div class=\"col-xs-1 {% if is_mobile %}col-xs-4 col-sm-3 col-md-2{% endif %}\">

                <div class=\"create-profile\">
                    <a class=\"btn btn-link\" id=\"create-profile-image-button\" href=\"{{ path('user_profile_new', {'action': 'nuevo'}) }}\">
                        <i class=\"fa fa-plus\"></i>
                    </a>
                </div>
            </div>

            <div class=\"col-lg-11  {% if is_mobile %}col-xs-8 {% endif %}\">
                 {% if is_mobile %}
                    <div class=\"row\">
                        <div class=\"row\">
                 {% else %}
                    <div class=\"pull-right\">
                 {% endif %}
                        <a class=\"btn btn-link\" id=\"create-profile-button\" href=\"{{ path('user_profile_new', {'action': 'nuevo'}) }}\">
                            {{ 'user.profile.list.create_new' | trans }}
                        </a>
                    </div>
                {% if is_mobile %}
                    </div>
                {% endif %}
            </div>
        </div>
    {% endif %}
    </div>
{% endblock %}
", "VODBaseBundle:User/Profile:profile.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/User/Profile/profile.html.twig");
    }
}


/* VODBaseBundle:User/Profile:profile.html.twig */
class __TwigTemplate_6dd50dafdec7dc5f385f65314f4687d6b11e29c664c84b8ddfa84f6528d5f504_1465680079 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 6
        $this->parent = $this->loadTemplate("VODBaseBundle:Base/Components/Header:head.html.twig", "VODBaseBundle:User/Profile:profile.html.twig", 6);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'meta_description' => array($this, 'block_meta_description'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "VODBaseBundle:Base/Components/Header:head.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0197801db9a499b59010345b65db4f566599f97c687d1cde781fda6e442d50fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0197801db9a499b59010345b65db4f566599f97c687d1cde781fda6e442d50fa->enter($__internal_0197801db9a499b59010345b65db4f566599f97c687d1cde781fda6e442d50fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:User/Profile:profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0197801db9a499b59010345b65db4f566599f97c687d1cde781fda6e442d50fa->leave($__internal_0197801db9a499b59010345b65db4f566599f97c687d1cde781fda6e442d50fa_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e2bfe02f2a3e685599dda3e2b1dbf055bf5373d18e3c463011667febe31f56a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2bfe02f2a3e685599dda3e2b1dbf055bf5373d18e3c463011667febe31f56a9->enter($__internal_e2bfe02f2a3e685599dda3e2b1dbf055bf5373d18e3c463011667febe31f56a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (((isset($context["section"]) ? $context["section"] : $this->getContext($context, "section")) . " - ") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.opengraph.site_name", array(), "common")), "html", null, true);
        
        $__internal_e2bfe02f2a3e685599dda3e2b1dbf055bf5373d18e3c463011667febe31f56a9->leave($__internal_e2bfe02f2a3e685599dda3e2b1dbf055bf5373d18e3c463011667febe31f56a9_prof);

    }

    // line 8
    public function block_meta_description($context, array $blocks = array())
    {
        $__internal_39bb63074855edf878012764fefc8dbd1c4ccb5f125a167ce47b9d7e3a3f39b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39bb63074855edf878012764fefc8dbd1c4ccb5f125a167ce47b9d7e3a3f39b9->enter($__internal_39bb63074855edf878012764fefc8dbd1c4ccb5f125a167ce47b9d7e3a3f39b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_description"));

        echo twig_escape_filter($this->env, (((isset($context["section"]) ? $context["section"] : $this->getContext($context, "section")) . " - ") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.opengraph.site_name", array(), "common")), "html", null, true);
        
        $__internal_39bb63074855edf878012764fefc8dbd1c4ccb5f125a167ce47b9d7e3a3f39b9->leave($__internal_39bb63074855edf878012764fefc8dbd1c4ccb5f125a167ce47b9d7e3a3f39b9_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:User/Profile:profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  528 => 8,  516 => 7,  492 => 6,  327 => 119,  322 => 116,  318 => 114,  316 => 113,  310 => 110,  305 => 109,  301 => 107,  296 => 104,  294 => 103,  288 => 102,  279 => 96,  271 => 93,  268 => 92,  266 => 91,  263 => 90,  247 => 87,  244 => 86,  240 => 83,  233 => 81,  229 => 80,  224 => 79,  222 => 78,  217 => 76,  211 => 75,  202 => 69,  195 => 65,  192 => 64,  190 => 63,  187 => 62,  182 => 58,  175 => 56,  171 => 55,  166 => 54,  164 => 53,  156 => 52,  151 => 50,  147 => 49,  143 => 47,  140 => 46,  136 => 43,  134 => 42,  128 => 41,  121 => 40,  103 => 39,  101 => 38,  95 => 37,  92 => 36,  90 => 33,  87 => 32,  81 => 31,  56 => 13,  50 => 12,  42 => 6,  36 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'VODBaseBundle:Base/Wrappers:wrapper-user.html.twig' %}

{% trans_default_domain 'user' %}

{% block head %}
    {% embed 'VODBaseBundle:Base/Components/Header:head.html.twig' %}
        {% block title %}{{ section ~ ' - ' ~ 'common.opengraph.site_name' | trans({}, 'common') }}{% endblock title %}
        {% block meta_description %}{{ section ~ ' - ' ~ 'common.opengraph.site_name' | trans({}, 'common') }}{% endblock meta_description %}
    {% endembed %}
{% endblock head %}

{% block custom_javascript %}
    {{ parent() }}
    <script>
        \$(document).ready(function() {
            \$('.profile-delete').click(function(e) {
                e.preventDefault();
                \$('#delete-profile-modal').modal('show');
                var text = \$(this).data('text');
                var profileId = \$(this).data('profileid');
                \$('#delete-profile-modal').on('shown.bs.modal', function (e) {
                    \$('#delete-profile-modal #modal-text').text(text);
                    var path = Routing.generate('user_profile_delete', {'profileId': profileId});
                    \$('#delete-profile-modal #modal-accept-button').attr('href', path);
                });
            });
        });
    </script>
{% endblock custom_javascript %}

{% block content %}

    {% include 'VODBaseBundle:Components/Modal:generic-modal.html.twig' with
        {'crazyId': 'delete-profile-modal', 'crazyTitle': 'Perfiles', 'crazyText': '',
    'acceptButton': true, 'acceptButtonText': 'common.buttons.confirm', 'cancelButton': true, 'cancelButtonAction': path('user_profile')} %}

    <div class=\"change-group {% if is_mobile %} short-container{% endif %}\">
    {% include 'VODBaseBundle:Components:flash-messages.html.twig' %}
    {% for profile in app.user.profiles %}
        <div class=\"row {% if is_mobile %} change-group_alter{% endif %}\">
            <div class=\"col-xs-1 {% if is_mobile %}col-xs-4 col-sm-3 col-md-2{% endif %}\">
                {% include 'VODBaseBundle:User/Profile:profile-avatar-default.html.twig' %}
            </div>

            {# mobile #}
            {% if is_mobile %}
                 <div class=\"col-xs-8\">
                    <div class=\"row\">
                        <p>{{ profile.name }}</p>
                        <p>{{ profile.class.description }}</p>
                        <div class=\"row\">
                            <a class=\"btn btn-link\" id=\"config-profile-{{ loop.index }}-button\" href=\"{{ path('user_profile_edit', {'action': 'editar', 'profileId': profile.id}) }}\">{{ 'user.profile.list.edit' | trans  }}</a>
                            {% if profile.isRoot == false %}
                                <a class=\"btn btn-link profile-delete\" data-profileId=\"{{ profile.id }}\"
                                   data-text=\"{{ 'user.profile.list.delete' | trans({'%profile%': profile.name}) }}\"
                                   id=\"config-profile-{{ loop.index }}-delete-button\">{{ 'user.profile.list.delete_button' | trans }}</a>
                            {% endif %}
                        </div>
                    </div>
                </div>
            {# fin mobile #}
            {% else  %}
            {# Desktop #}
                    <div class=\"col-xs-4\">
                        <p>{{ profile.name }}</p>
                    </div>

                    <div class=\"col-xs-5\">
                        <p>{{ profile.class.description }}</p>
                    </div>

                    <div class=\"col-xs-2\">

                    <div class=\"text-right\">
                        <a class=\"btn btn-link\" id=\"config-profile-{{ loop.index }}-button\" href=\"{{ path('user_profile_edit', {'action': 'editar', 'profileId': profile.id}) }}\">
                            {{ 'user.profile.list.edit' | trans  }}
                        </a>
                        {% if profile.isRoot == false %}
                            <a class=\"btn btn-link profile-delete\" data-profileId=\"{{ profile.id }}\"
                               data-text=\"{{ 'user.profile.list.delete' | trans({'%profile%': profile.name}) }}\"
                               id=\"config-profile-{{ loop.index }}-delete-button\">{{ 'user.profile.list.delete_button' | trans }}</a>
                        {% endif %}
                    </div>
                </div>
            {# fin desktop #}
            {% endif %}
        </div>
        <br />
    {% endfor %}

    {% if app.user.profiles | length < 4 %}
        <div class=\"row\">
                <div class=\"col-xs-1 {% if is_mobile %}col-xs-4 col-sm-3 col-md-2{% endif %}\">

                <div class=\"create-profile\">
                    <a class=\"btn btn-link\" id=\"create-profile-image-button\" href=\"{{ path('user_profile_new', {'action': 'nuevo'}) }}\">
                        <i class=\"fa fa-plus\"></i>
                    </a>
                </div>
            </div>

            <div class=\"col-lg-11  {% if is_mobile %}col-xs-8 {% endif %}\">
                 {% if is_mobile %}
                    <div class=\"row\">
                        <div class=\"row\">
                 {% else %}
                    <div class=\"pull-right\">
                 {% endif %}
                        <a class=\"btn btn-link\" id=\"create-profile-button\" href=\"{{ path('user_profile_new', {'action': 'nuevo'}) }}\">
                            {{ 'user.profile.list.create_new' | trans }}
                        </a>
                    </div>
                {% if is_mobile %}
                    </div>
                {% endif %}
            </div>
        </div>
    {% endif %}
    </div>
{% endblock %}
", "VODBaseBundle:User/Profile:profile.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/User/Profile/profile.html.twig");
    }
}
