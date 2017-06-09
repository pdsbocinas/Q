<?php

/* VODBaseBundle:Base/Components/Forms:search-javascript.html.twig */
class __TwigTemplate_5ce1953e62a37a5d35492be94a6e4cb6cff6e0c14b6c6ea3fa24cc880b23cd0a extends Twig_Template
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
        $__internal_a7ffa34714d5eed07d265653468eeffb3f303b76e71a5260c30d6b1df5768d6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7ffa34714d5eed07d265653468eeffb3f303b76e71a5260c30d6b1df5768d6b->enter($__internal_a7ffa34714d5eed07d265653468eeffb3f303b76e71a5260c30d6b1df5768d6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Base/Components/Forms:search-javascript.html.twig"));

        // line 1
        echo "<script>
    \$('.btn-default-filter').click(function(e) {
        e.preventDefault();
        if(!\$(this).hasClass('show')) {
            \$('.btn-default-filter').removeClass('show');
            \$(this).addClass('show');
        }
    });

    \$('#btn-search-movie, #btn-search-directors, #btn-search-actors, #btn-search-tags').search();
</script>";
        
        $__internal_a7ffa34714d5eed07d265653468eeffb3f303b76e71a5260c30d6b1df5768d6b->leave($__internal_a7ffa34714d5eed07d265653468eeffb3f303b76e71a5260c30d6b1df5768d6b_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Base/Components/Forms:search-javascript.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script>
    \$('.btn-default-filter').click(function(e) {
        e.preventDefault();
        if(!\$(this).hasClass('show')) {
            \$('.btn-default-filter').removeClass('show');
            \$(this).addClass('show');
        }
    });

    \$('#btn-search-movie, #btn-search-directors, #btn-search-actors, #btn-search-tags').search();
</script>", "VODBaseBundle:Base/Components/Forms:search-javascript.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/Base/Components/Forms/search-javascript.html.twig");
    }
}
