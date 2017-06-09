<?php

/* VODBaseBundle:Components/Slider:slider-publicities.html.twig */
class __TwigTemplate_236e289ccfda323db16b4b88c86df5bb299c719ed62ef1bf4a65ecd8baf2e694 extends Twig_Template
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
        $__internal_772696e561967fa4be4163543d6043bae29481bea6168910cddfd6863ea65337 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_772696e561967fa4be4163543d6043bae29481bea6168910cddfd6863ea65337->enter($__internal_772696e561967fa4be4163543d6043bae29481bea6168910cddfd6863ea65337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Components/Slider:slider-publicities.html.twig"));

        // line 1
        echo "<div class=\"slider\">
    ";
        // line 2
        if (((isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile")) &&  !(isset($context["is_tablet"]) ? $context["is_tablet"] : $this->getContext($context, "is_tablet")))) {
            // line 3
            echo "        ";
            if ((array_key_exists("array", $context) && (twig_length_filter($this->env, (isset($context["array"]) ? $context["array"] : $this->getContext($context, "array"))) > 0))) {
                // line 4
                echo "         ";
                $context["staticSlide"] = twig_random($this->env, (isset($context["array"]) ? $context["array"] : $this->getContext($context, "array")));
                // line 5
                echo "                ";
                if ($this->getAttribute((isset($context["staticSlide"]) ? $context["staticSlide"] : $this->getContext($context, "staticSlide")), "uuid", array())) {
                    // line 6
                    echo "                    ";
                    $context["isContent"] = true;
                    // line 7
                    echo "                ";
                } else {
                    // line 8
                    echo "                    ";
                    $context["isContent"] = false;
                    // line 9
                    echo "                ";
                }
                // line 10
                echo "
                ";
                // line 11
                $context["link"] = "";
                // line 12
                echo "                ";
                if ((isset($context["isContent"]) ? $context["isContent"] : $this->getContext($context, "isContent"))) {
                    // line 13
                    echo "                    ";
                    $context["link"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("content_router", array("uuid" => $this->getAttribute((isset($context["staticSlide"]) ? $context["staticSlide"] : $this->getContext($context, "staticSlide")), "uuid", array())));
                    // line 14
                    echo "                ";
                } else {
                    // line 15
                    echo "                    ";
                    if ($this->getAttribute((isset($context["staticSlide"]) ? $context["staticSlide"] : $this->getContext($context, "staticSlide")), "link", array())) {
                        // line 16
                        echo "                        ";
                        $context["link"] = $this->getAttribute((isset($context["staticSlide"]) ? $context["staticSlide"] : $this->getContext($context, "staticSlide")), "link", array());
                        // line 17
                        echo "                    ";
                    }
                    // line 18
                    echo "                ";
                }
                // line 19
                echo "
                <a class=\"slide\" href=\"";
                // line 20
                echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : $this->getContext($context, "link")), "html", null, true);
                echo "\" style=\"background-image: url('";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["staticSlide"]) ? $context["staticSlide"] : $this->getContext($context, "staticSlide")), "image", array()), "html", null, true);
                echo "'); \">
                    ";
                // line 22
                echo "                    ";
                if ((isset($context["isContent"]) ? $context["isContent"] : $this->getContext($context, "isContent"))) {
                    // line 23
                    echo "                        <span class=\"fa-stack btn-play\">
                            <i class=\"fa fa-play fa-inverse\"></i>
                        </span>
                    ";
                }
                // line 27
                echo "                    <div class=\"item-info\">
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-xs-12 col-sm-5 col-sm-offset-1\">
                                    ";
                // line 31
                if ((((($this->getAttribute((isset($context["staticSlide"]) ? $context["staticSlide"] : $this->getContext($context, "staticSlide")), "title", array()) != ".") &&  !twig_test_empty($this->getAttribute((isset($context["staticSlide"]) ? $context["staticSlide"] : $this->getContext($context, "staticSlide")), "title", array()))) && ($this->getAttribute((isset($context["staticSlide"]) ? $context["staticSlide"] : $this->getContext($context, "staticSlide")), "text", array()) != ".")) &&  !twig_test_empty($this->getAttribute((isset($context["staticSlide"]) ? $context["staticSlide"] : $this->getContext($context, "staticSlide")), "text", array())))) {
                    // line 32
                    echo "                                        <div class=\"title-container\">
                                            ";
                    // line 33
                    if ((($this->getAttribute((isset($context["staticSlide"]) ? $context["staticSlide"] : $this->getContext($context, "staticSlide")), "title", array()) != ".") &&  !twig_test_empty($this->getAttribute((isset($context["staticSlide"]) ? $context["staticSlide"] : $this->getContext($context, "staticSlide")), "title", array())))) {
                        // line 34
                        echo "                                                <h1 class=\"slide-title\">";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["staticSlide"]) ? $context["staticSlide"] : $this->getContext($context, "staticSlide")), "title", array()), "html", null, true);
                        echo "</h1>
                                            ";
                    }
                    // line 36
                    echo "                                            ";
                    if ((($this->getAttribute((isset($context["staticSlide"]) ? $context["staticSlide"] : $this->getContext($context, "staticSlide")), "text", array()) != ".") &&  !twig_test_empty($this->getAttribute((isset($context["staticSlide"]) ? $context["staticSlide"] : $this->getContext($context, "staticSlide")), "text", array())))) {
                        // line 37
                        echo "                                                <p class=\"lead\">";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["staticSlide"]) ? $context["staticSlide"] : $this->getContext($context, "staticSlide")), "text", array()), "html", null, true);
                        echo "</p>
                                            ";
                    }
                    // line 39
                    echo "                                        </div>
                                    ";
                }
                // line 41
                echo "                                </div>
                            </div>
                        </div>
                    </div>
                </a>
        ";
            }
            // line 47
            echo "    ";
        } else {
            // line 48
            echo "        ";
            if (array_key_exists("array", $context)) {
                // line 49
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["array"]) ? $context["array"] : $this->getContext($context, "array")));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 50
                    echo "                ";
                    if ($this->getAttribute($context["item"], "uuid", array())) {
                        // line 51
                        echo "                    ";
                        $context["isContent"] = true;
                        // line 52
                        echo "                ";
                    } else {
                        // line 53
                        echo "                    ";
                        $context["isContent"] = false;
                        // line 54
                        echo "                ";
                    }
                    // line 55
                    echo "
                ";
                    // line 56
                    $context["link"] = "";
                    // line 57
                    echo "                ";
                    if ($this->getAttribute($context["item"], "link", array())) {
                        // line 58
                        echo "                    ";
                        $context["link"] = $this->getAttribute($context["item"], "link", array());
                        // line 59
                        echo "                ";
                    }
                    // line 60
                    echo "
            \t<a class=\"slide\" href=\"";
                    // line 61
                    echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : $this->getContext($context, "link")), "html", null, true);
                    echo "\" style=\"background-image: url('";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "image", array()), "html", null, true);
                    echo "'); \">
                    ";
                    // line 62
                    if ((isset($context["isContent"]) ? $context["isContent"] : $this->getContext($context, "isContent"))) {
                        // line 63
                        echo "                        <span class=\"fa-stack btn-play\">
                            <i class=\"fa fa-play fa-inverse\"></i>
                        </span>
                    ";
                    }
                    // line 67
                    echo "                    ";
                    if ((($this->getAttribute($context["item"], "title", array()) != "") || ($this->getAttribute($context["item"], "text", array()) != ""))) {
                        // line 68
                        echo "    \t\t\t\t<div class=\"item-info\">
            \t\t\t<div class=\"container\">
    \t\t\t\t\t\t<div class=\"row\">
    \t\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-5 col-sm-offset-1\">
                                    ";
                        // line 72
                        if ((((($this->getAttribute($context["item"], "title", array()) != ".") &&  !twig_test_empty($this->getAttribute($context["item"], "title", array()))) && ($this->getAttribute($context["item"], "text", array()) != ".")) &&  !twig_test_empty($this->getAttribute($context["item"], "text", array())))) {
                            // line 73
                            echo "                                        <div class=\"slider-title-container\">
                                            ";
                            // line 74
                            if ((($this->getAttribute($context["item"], "title", array()) != ".") &&  !twig_test_empty($this->getAttribute($context["item"], "title", array())))) {
                                // line 75
                                echo "                                                <h1 class=\"slide-title\">";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
                                echo "</h1>
                                            ";
                            }
                            // line 77
                            echo "                                            ";
                            if ((($this->getAttribute($context["item"], "text", array()) != ".") &&  !twig_test_empty($this->getAttribute($context["item"], "text", array())))) {
                                // line 78
                                echo "                                                <p class=\"lead\">";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "text", array()), "html", null, true);
                                echo "</p>
                                            ";
                            }
                            // line 80
                            echo "                                        </div>
                                    ";
                        }
                        // line 82
                        echo "    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t</div>
            \t\t</div>
                    ";
                    }
                    // line 87
                    echo "            \t</a>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 89
                echo "        ";
            }
            // line 90
            echo "    ";
        }
        // line 91
        echo "</div>";
        
        $__internal_772696e561967fa4be4163543d6043bae29481bea6168910cddfd6863ea65337->leave($__internal_772696e561967fa4be4163543d6043bae29481bea6168910cddfd6863ea65337_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Components/Slider:slider-publicities.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 91,  241 => 90,  238 => 89,  231 => 87,  224 => 82,  220 => 80,  214 => 78,  211 => 77,  205 => 75,  203 => 74,  200 => 73,  198 => 72,  192 => 68,  189 => 67,  183 => 63,  181 => 62,  175 => 61,  172 => 60,  169 => 59,  166 => 58,  163 => 57,  161 => 56,  158 => 55,  155 => 54,  152 => 53,  149 => 52,  146 => 51,  143 => 50,  138 => 49,  135 => 48,  132 => 47,  124 => 41,  120 => 39,  114 => 37,  111 => 36,  105 => 34,  103 => 33,  100 => 32,  98 => 31,  92 => 27,  86 => 23,  83 => 22,  77 => 20,  74 => 19,  71 => 18,  68 => 17,  65 => 16,  62 => 15,  59 => 14,  56 => 13,  53 => 12,  51 => 11,  48 => 10,  45 => 9,  42 => 8,  39 => 7,  36 => 6,  33 => 5,  30 => 4,  27 => 3,  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"slider\">
    {% if is_mobile and not is_tablet %}
        {% if array is defined and array | length > 0%}
         {% set staticSlide = random(array) %}
                {% if staticSlide.uuid %}
                    {% set isContent = true %}
                {% else %}
                    {% set isContent = false %}
                {% endif %}

                {% set link = '' %}
                {% if isContent %}
                    {% set link = path('content_router', {'uuid': staticSlide.uuid} ) %}
                {% else %}
                    {% if staticSlide.link %}
                        {% set link = staticSlide.link %}
                    {% endif %}
                {% endif %}

                <a class=\"slide\" href=\"{{ link }}\" style=\"background-image: url('{{ staticSlide.image }}'); \">
                    {#<img src=\"{{ staticSlide.image }}\" alt=\"\">#}
                    {% if isContent %}
                        <span class=\"fa-stack btn-play\">
                            <i class=\"fa fa-play fa-inverse\"></i>
                        </span>
                    {% endif %}
                    <div class=\"item-info\">
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-xs-12 col-sm-5 col-sm-offset-1\">
                                    {% if staticSlide.title != '.' and staticSlide.title is not empty and staticSlide.text != '.' and staticSlide.text is not empty %}
                                        <div class=\"title-container\">
                                            {% if staticSlide.title != '.' and staticSlide.title is not empty %}
                                                <h1 class=\"slide-title\">{{ staticSlide.title }}</h1>
                                            {% endif %}
                                            {% if staticSlide.text != '.' and staticSlide.text is not empty %}
                                                <p class=\"lead\">{{ staticSlide.text }}</p>
                                            {% endif %}
                                        </div>
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
        {% endif %}
    {% else %}
        {% if array is defined %}
            {% for item in array %}
                {% if item.uuid %}
                    {% set isContent = true %}
                {% else %}
                    {% set isContent = false %}
                {% endif %}

                {% set link = '' %}
                {% if item.link %}
                    {% set link = item.link %}
                {% endif %}

            \t<a class=\"slide\" href=\"{{ link }}\" style=\"background-image: url('{{ item.image }}'); \">
                    {% if isContent %}
                        <span class=\"fa-stack btn-play\">
                            <i class=\"fa fa-play fa-inverse\"></i>
                        </span>
                    {% endif %}
                    {% if item.title != '' or item.text != '' %}
    \t\t\t\t<div class=\"item-info\">
            \t\t\t<div class=\"container\">
    \t\t\t\t\t\t<div class=\"row\">
    \t\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-5 col-sm-offset-1\">
                                    {% if item.title != '.' and item.title is not empty and item.text != '.' and item.text is not empty %}
                                        <div class=\"slider-title-container\">
                                            {% if item.title != '.' and item.title is not empty %}
                                                <h1 class=\"slide-title\">{{ item.title }}</h1>
                                            {% endif %}
                                            {% if item.text != '.' and item.text is not empty %}
                                                <p class=\"lead\">{{ item.text }}</p>
                                            {% endif %}
                                        </div>
                                    {% endif %}
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t</div>
            \t\t</div>
                    {% endif %}
            \t</a>
            {% endfor %}
        {% endif %}
    {% endif %}
</div>", "VODBaseBundle:Components/Slider:slider-publicities.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/Components/Slider/slider-publicities.html.twig");
    }
}
