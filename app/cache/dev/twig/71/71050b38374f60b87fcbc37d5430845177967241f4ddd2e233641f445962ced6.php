<?php

/* VODBaseBundle:Components/Carousel:item-image.html.twig */
class __TwigTemplate_bca3a6bdfd7df535c34d9c64eeab592fd4cedfe9173b2b25f05ca4ce76533ec5 extends Twig_Template
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
        $__internal_d975de4749a9a2d0578608aa6b6e9181233e63a788f7e683f9d9118a71201fc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d975de4749a9a2d0578608aa6b6e9181233e63a788f7e683f9d9118a71201fc3->enter($__internal_d975de4749a9a2d0578608aa6b6e9181233e63a788f7e683f9d9118a71201fc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Components/Carousel:item-image.html.twig"));

        // line 1
        echo "<div id=\"item-img-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id", array()), "html", null, true);
        echo "\" class=\"item-img\">
    ";
        // line 2
        if ((array_key_exists("isMobile", $context) && (isset($context["isMobile"]) ? $context["isMobile"] : $this->getContext($context, "isMobile")))) {
            // line 3
            echo "        ";
            $context["imageUrl"] = $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "image", array(0 => ("medium" . (isset($context["doubleItem"]) ? $context["doubleItem"] : $this->getContext($context, "doubleItem")))), "method"), "url", array());
            // line 4
            echo "    ";
        } else {
            // line 5
            echo "        ";
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "image", array(0 => ("large" . (isset($context["doubleItem"]) ? $context["doubleItem"] : $this->getContext($context, "doubleItem")))), "method") != null)) {
                // line 6
                echo "            ";
                $context["imageUrl"] = $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "image", array(0 => ("large" . (isset($context["doubleItem"]) ? $context["doubleItem"] : $this->getContext($context, "doubleItem")))), "method"), "url", array());
                // line 7
                echo "        ";
            } else {
                // line 8
                echo "                ";
                $context["imageUrl"] = ((isset($context["cdn_url"]) ? $context["cdn_url"] : $this->getContext($context, "cdn_url")) . "/images/transparent-pixel.png");
                // line 9
                echo "        ";
            }
            // line 10
            echo "    ";
        }
        // line 11
        echo "
    ";
        // line 12
        if (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "BaseContentType", array()) == "Clip")) {
            // line 13
            echo "        ";
            $context["imageUrl"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "fanarts", array()), "first", array()), "url", array());
            // line 14
            echo "    ";
        }
        // line 15
        echo "
    ";
        // line 16
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "BaseContentType", array()) == "Episode") &&  !(null === $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "image", array(0 => "img_snapshot"), "method")))) {
            // line 17
            echo "        ";
            $context["imageUrl"] = $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "image", array(0 => "img_snapshot"), "method"), "url", array());
            // line 18
            echo "    ";
        }
        // line 19
        echo "
    <img class=\"lazy\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["imageUrl"]) ? $context["imageUrl"] : $this->getContext($context, "imageUrl")), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "title", array()), "html", null, true);
        echo "\">
</div>";
        
        $__internal_d975de4749a9a2d0578608aa6b6e9181233e63a788f7e683f9d9118a71201fc3->leave($__internal_d975de4749a9a2d0578608aa6b6e9181233e63a788f7e683f9d9118a71201fc3_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Components/Carousel:item-image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 20,  75 => 19,  72 => 18,  69 => 17,  67 => 16,  64 => 15,  61 => 14,  58 => 13,  56 => 12,  53 => 11,  50 => 10,  47 => 9,  44 => 8,  41 => 7,  38 => 6,  35 => 5,  32 => 4,  29 => 3,  27 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"item-img-{{item.id}}\" class=\"item-img\">
    {% if isMobile is defined and isMobile  %}
        {% set imageUrl = item.image('medium' ~ doubleItem).url%}
    {% else %}
        {% if item.image('large' ~ doubleItem) != null %}
            {% set imageUrl = item.image('large' ~ doubleItem).url%}
        {% else %}
                {% set imageUrl = cdn_url ~ '/images/transparent-pixel.png' %}
        {% endif %}
    {% endif %}

    {% if item.BaseContentType == 'Clip' %}
        {% set imageUrl = item.fanarts.first.url %}
    {% endif %}

    {% if item.BaseContentType == 'Episode' and item.image('img_snapshot') is not null %}
        {% set imageUrl =  item.image('img_snapshot').url %}
    {% endif %}

    <img class=\"lazy\" src=\"{{ imageUrl }}\" alt=\"{{ item.title }}\">
</div>", "VODBaseBundle:Components/Carousel:item-image.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/Components/Carousel/item-image.html.twig");
    }
}
