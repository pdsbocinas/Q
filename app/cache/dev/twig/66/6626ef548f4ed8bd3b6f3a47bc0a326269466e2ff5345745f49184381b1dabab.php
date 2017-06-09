<?php

/* VODItvBaseBundle:Widget:button.html.twig */
class __TwigTemplate_2193e89c6eac4b2dc6a05ccc50790127af6c5974a2f0b4eaad0a6b248df950e3 extends Twig_Template
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
        $__internal_060edcfdc74a2f8833b6720cdc3976b3e2a63045e1dabf6cc5c499ee48de775f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_060edcfdc74a2f8833b6720cdc3976b3e2a63045e1dabf6cc5c499ee48de775f->enter($__internal_060edcfdc74a2f8833b6720cdc3976b3e2a63045e1dabf6cc5c499ee48de775f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODItvBaseBundle:Widget:button.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 2
            echo "    ";
            if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "hasLiveTv", array())) {
                // line 3
                echo "        ";
                if ($this->env->getExtension('SunCat\MobileDetectBundle\Twig\Extension\MobileDetectExtension')->isMobile()) {
                    // line 4
                    echo "            <div class=\"panel panel-unstyled\">
                <div class=\"panel-heading\">
                    <a href=\"#itv\" class=\"panel-title init-open\" data-toggle=\"collapse\" data-target=\"#itv\">
                        <i class=\"fa fa-television\"></i> Tv en vivo
                        <i class=\"fa fa-caret-down icon-flip\"></i>
                    </a>
                </div>

                <div id=\"itv\" class=\"panel-collapse collapse\">
                    <div class=\"navbar__itv-button\">
                        <a class=\"genre-item tag-item\" href=\"";
                    // line 14
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vod_itv_now");
                    echo "\">
                            <span class=\"label label-default btn-link_alter\">Ahora</span>
                        </a>
                        <a class=\"genre-item tag-item\" href=\"";
                    // line 17
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vod_itv_programacion");
                    echo "\">
                            <span class=\"label label-default btn-link_alter\">Programación</span>
                        </a>
                        <a class=\"genre-item tag-item btn-disabled\" href=\"#\" disabled=\"disabled\" title=\"Muy pronto\" data-toggle=\"tooltip\" data-original-title=\"Muy pronto\">
                            <span class=\"label label-default btn-link_alter\" disabled=\"disabled\">Ya emitidos</span>
                        </a>
                    </div>
                </div>
            </div>
        ";
                } else {
                    // line 27
                    echo "            <div class=\"navbar__itv-button dropdown\">
                <a href=\"#\" id=\"itvButton\" class=\"dropdown-toggle dropdown-explore btn btn-link_primary\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"
                   data-toggle=\"dropdown\" data-target=\"#\">
                    TV EN VIVO
                    <span class=\"caret\"></span>
                </a>
                <div class=\"dropdown-menu dropdown-tags\" aria-labelledby=\"itvButton\">
                    <a class=\"genre-item tag-item\" href=\"";
                    // line 34
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vod_itv_now");
                    echo "\">
                        <span class=\"label label-default btn-link_alter\">Ahora</span>
                    </a>
                    <a class=\"genre-item tag-item\" href=\"";
                    // line 37
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vod_itv_programacion");
                    echo "\">
                        <span class=\"label label-default btn-link_alter\">Programación</span>
                    </a>
                    <a class=\"genre-item tag-item btn-disabled\" disabled=\"disabled\" href=\"#\">
                        <span class=\"label label-default btn-link_alter\" disabled=\"disabled\">Ya emitidos</span>
                    </a>
                </div>
            </div>
        ";
                }
                // line 46
                echo "    ";
            }
        }
        
        $__internal_060edcfdc74a2f8833b6720cdc3976b3e2a63045e1dabf6cc5c499ee48de775f->leave($__internal_060edcfdc74a2f8833b6720cdc3976b3e2a63045e1dabf6cc5c499ee48de775f_prof);

    }

    public function getTemplateName()
    {
        return "VODItvBaseBundle:Widget:button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 46,  76 => 37,  70 => 34,  61 => 27,  48 => 17,  42 => 14,  30 => 4,  27 => 3,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if app.user %}
    {% if app.user.hasLiveTv %}
        {% if is_mobile() %}
            <div class=\"panel panel-unstyled\">
                <div class=\"panel-heading\">
                    <a href=\"#itv\" class=\"panel-title init-open\" data-toggle=\"collapse\" data-target=\"#itv\">
                        <i class=\"fa fa-television\"></i> Tv en vivo
                        <i class=\"fa fa-caret-down icon-flip\"></i>
                    </a>
                </div>

                <div id=\"itv\" class=\"panel-collapse collapse\">
                    <div class=\"navbar__itv-button\">
                        <a class=\"genre-item tag-item\" href=\"{{ path('vod_itv_now') }}\">
                            <span class=\"label label-default btn-link_alter\">Ahora</span>
                        </a>
                        <a class=\"genre-item tag-item\" href=\"{{ path('vod_itv_programacion') }}\">
                            <span class=\"label label-default btn-link_alter\">Programación</span>
                        </a>
                        <a class=\"genre-item tag-item btn-disabled\" href=\"#\" disabled=\"disabled\" title=\"Muy pronto\" data-toggle=\"tooltip\" data-original-title=\"Muy pronto\">
                            <span class=\"label label-default btn-link_alter\" disabled=\"disabled\">Ya emitidos</span>
                        </a>
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"navbar__itv-button dropdown\">
                <a href=\"#\" id=\"itvButton\" class=\"dropdown-toggle dropdown-explore btn btn-link_primary\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"
                   data-toggle=\"dropdown\" data-target=\"#\">
                    TV EN VIVO
                    <span class=\"caret\"></span>
                </a>
                <div class=\"dropdown-menu dropdown-tags\" aria-labelledby=\"itvButton\">
                    <a class=\"genre-item tag-item\" href=\"{{ path('vod_itv_now') }}\">
                        <span class=\"label label-default btn-link_alter\">Ahora</span>
                    </a>
                    <a class=\"genre-item tag-item\" href=\"{{ path('vod_itv_programacion') }}\">
                        <span class=\"label label-default btn-link_alter\">Programación</span>
                    </a>
                    <a class=\"genre-item tag-item btn-disabled\" disabled=\"disabled\" href=\"#\">
                        <span class=\"label label-default btn-link_alter\" disabled=\"disabled\">Ya emitidos</span>
                    </a>
                </div>
            </div>
        {% endif %}
    {% endif %}
{% endif %}
", "VODItvBaseBundle:Widget:button.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/itv-base-bundle/Resources/views/Widget/button.html.twig");
    }
}
