<?php

/* VODBaseBundle:Base:base.html.twig */
class __TwigTemplate_09da62b41a67422dce9b5f9512e89ee917b40c28b3d8ca6ff92691f22fe7728c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body_class' => array($this, 'block_body_class'),
            'body_custom_data' => array($this, 'block_body_custom_data'),
            'body_custom_style' => array($this, 'block_body_custom_style'),
            'google_analytics_javascript' => array($this, 'block_google_analytics_javascript'),
            'main_container' => array($this, 'block_main_container'),
            'header_container' => array($this, 'block_header_container'),
            'flash_messages' => array($this, 'block_flash_messages'),
            'body_container' => array($this, 'block_body_container'),
            'modal_container' => array($this, 'block_modal_container'),
            'footer_container' => array($this, 'block_footer_container'),
            'javascript' => array($this, 'block_javascript'),
            'operator_custom_javascript' => array($this, 'block_operator_custom_javascript'),
            'custom_javascript' => array($this, 'block_custom_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fd34b466d60eac12a8c1fb06aebeb8fd82427a9e176e62349feb27c58f20fc84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd34b466d60eac12a8c1fb06aebeb8fd82427a9e176e62349feb27c58f20fc84->enter($__internal_fd34b466d60eac12a8c1fb06aebeb8fd82427a9e176e62349feb27c58f20fc84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Base:base.html.twig"));

        // line 2
        echo "<!DOCTYPE html>
<html lang=\"es\">
    ";
        // line 5
        echo "    ";
        $this->displayBlock('head', $context, $blocks);
        // line 12
        echo "    ";
        // line 13
        echo "
    ";
        // line 15
        echo "    ";
        $context["blockUtilities"] = $this->loadTemplate("VODBaseBundle:Components/Macros:block-utilities.html.twig", "VODBaseBundle:Base:base.html.twig", 15);
        // line 16
        echo "    <body ";
        $this->loadTemplate("VODBaseBundle:Base:data-operator.html.twig", "VODBaseBundle:Base:base.html.twig", 16)->display($context);
        // line 17
        echo "    data-locked=\"";
        echo (((isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) ? ("false") : ("true"));
        echo "\"
    ";
        // line 18
        $this->displayBlock('body_class', $context, $blocks);
        // line 19
        echo "    ";
        $this->displayBlock('body_custom_data', $context, $blocks);
        // line 20
        echo "    style=\"";
        $this->displayBlock('body_custom_style', $context, $blocks);
        echo "\">

    ";
        // line 22
        $this->displayBlock('google_analytics_javascript', $context, $blocks);
        // line 25
        echo "
    ";
        // line 26
        $this->displayBlock('main_container', $context, $blocks);
        // line 69
        echo "
    ";
        // line 70
        $this->displayBlock('footer_container', $context, $blocks);
        // line 71
        echo "
    ";
        // line 72
        $this->displayBlock('javascript', $context, $blocks);
        // line 75
        echo "
    ";
        // line 76
        $this->displayBlock('operator_custom_javascript', $context, $blocks);
        // line 101
        echo "
    ";
        // line 102
        $this->displayBlock('custom_javascript', $context, $blocks);
        // line 104
        echo "    <script  type=\"text/javascript\"  src=\"https://st.qubit.tv/assets/public/plugin/qoe/1.0/qoe.js\"></script>
    <script type=\"text/javascript\">
        window.QOE.init({
            username: '";
        // line 107
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "displayIdentifier", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "displayIdentifier", array()), "not-logged")) : ("not-logged")), "html", null, true);
        echo "',
            userId: ";
        // line 108
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "userNumber", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "userNumber", array()), 0)) : (0)), "html", null, true);
        echo ",
            route: '";
        // line 109
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), "html", null, true);
        echo "',
            operator: '";
        // line 110
        echo twig_escape_filter($this->env, (isset($context["operator_code"]) ? $context["operator_code"] : $this->getContext($context, "operator_code")), "html", null, true);
        echo "'
        });
    </script>

    </body>
</html>
";
        
        $__internal_fd34b466d60eac12a8c1fb06aebeb8fd82427a9e176e62349feb27c58f20fc84->leave($__internal_fd34b466d60eac12a8c1fb06aebeb8fd82427a9e176e62349feb27c58f20fc84_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_3cef13ff914427fe0ef5d420a307e4db5eb3f618c2d1d45a3de06c0d6d5c7745 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cef13ff914427fe0ef5d420a307e4db5eb3f618c2d1d45a3de06c0d6d5c7745->enter($__internal_3cef13ff914427fe0ef5d420a307e4db5eb3f618c2d1d45a3de06c0d6d5c7745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 6
        echo "        ";
        $this->loadTemplate("VODBaseBundle:Base:base.html.twig", "VODBaseBundle:Base:base.html.twig", 6, "961282571")->display($context);
        // line 11
        echo "    ";
        
        $__internal_3cef13ff914427fe0ef5d420a307e4db5eb3f618c2d1d45a3de06c0d6d5c7745->leave($__internal_3cef13ff914427fe0ef5d420a307e4db5eb3f618c2d1d45a3de06c0d6d5c7745_prof);

    }

    // line 18
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_c687251ea1bb8ea8668b541aa0c47f7babdda05870e041ec3babebc6c47d6ced = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c687251ea1bb8ea8668b541aa0c47f7babdda05870e041ec3babebc6c47d6ced->enter($__internal_c687251ea1bb8ea8668b541aa0c47f7babdda05870e041ec3babebc6c47d6ced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        
        $__internal_c687251ea1bb8ea8668b541aa0c47f7babdda05870e041ec3babebc6c47d6ced->leave($__internal_c687251ea1bb8ea8668b541aa0c47f7babdda05870e041ec3babebc6c47d6ced_prof);

    }

    // line 19
    public function block_body_custom_data($context, array $blocks = array())
    {
        $__internal_94ba70ae00f9a63da762fbdf5f1ed2dd676a1184b9013a000a1a12dfaf6dfb76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94ba70ae00f9a63da762fbdf5f1ed2dd676a1184b9013a000a1a12dfaf6dfb76->enter($__internal_94ba70ae00f9a63da762fbdf5f1ed2dd676a1184b9013a000a1a12dfaf6dfb76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_custom_data"));

        
        $__internal_94ba70ae00f9a63da762fbdf5f1ed2dd676a1184b9013a000a1a12dfaf6dfb76->leave($__internal_94ba70ae00f9a63da762fbdf5f1ed2dd676a1184b9013a000a1a12dfaf6dfb76_prof);

    }

    // line 20
    public function block_body_custom_style($context, array $blocks = array())
    {
        $__internal_77c962879e3ba057c3c0437ad853723984c6d32832d317705fc00027ee41e115 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77c962879e3ba057c3c0437ad853723984c6d32832d317705fc00027ee41e115->enter($__internal_77c962879e3ba057c3c0437ad853723984c6d32832d317705fc00027ee41e115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_custom_style"));

        
        $__internal_77c962879e3ba057c3c0437ad853723984c6d32832d317705fc00027ee41e115->leave($__internal_77c962879e3ba057c3c0437ad853723984c6d32832d317705fc00027ee41e115_prof);

    }

    // line 22
    public function block_google_analytics_javascript($context, array $blocks = array())
    {
        $__internal_baf7a250353c3e6eedcf69aef9b7fac9f8ba3892f609e25d79f1b07a454abcf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baf7a250353c3e6eedcf69aef9b7fac9f8ba3892f609e25d79f1b07a454abcf7->enter($__internal_baf7a250353c3e6eedcf69aef9b7fac9f8ba3892f609e25d79f1b07a454abcf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "google_analytics_javascript"));

        // line 23
        echo "        ";
        $this->loadTemplate("VODBaseBundle:Base/Components/Scripts:google-tag-manager-script.html.twig", "VODBaseBundle:Base:base.html.twig", 23)->display(array_merge($context, array("section" => "body")));
        // line 24
        echo "    ";
        
        $__internal_baf7a250353c3e6eedcf69aef9b7fac9f8ba3892f609e25d79f1b07a454abcf7->leave($__internal_baf7a250353c3e6eedcf69aef9b7fac9f8ba3892f609e25d79f1b07a454abcf7_prof);

    }

    // line 26
    public function block_main_container($context, array $blocks = array())
    {
        $__internal_0a93978e4ca0e0ba2cb7bd8a76edf315317f7d905383ae0a6c0e0bccbcfbe498 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a93978e4ca0e0ba2cb7bd8a76edf315317f7d905383ae0a6c0e0bccbcfbe498->enter($__internal_0a93978e4ca0e0ba2cb7bd8a76edf315317f7d905383ae0a6c0e0bccbcfbe498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_container"));

        // line 27
        echo "        ";
        // line 28
        echo "        <div class=\"la-anim-1\"></div>

        ";
        // line 31
        echo "        ";
        $this->displayBlock('header_container', $context, $blocks);
        // line 32
        echo "
        ";
        // line 34
        echo "        <main id=\"main-container\" class=\"o-wrapper\">
            ";
        // line 35
        $this->displayBlock('flash_messages', $context, $blocks);
        // line 45
        echo "            ";
        $this->displayBlock('body_container', $context, $blocks);
        // line 46
        echo "        </main>

        ";
        // line 49
        echo "        ";
        $this->loadTemplate("VODBaseBundle:Base:search-container.html.twig", "VODBaseBundle:Base:base.html.twig", 49)->display($context);
        // line 50
        echo "

        ";
        // line 53
        echo "        <div id=\"modal-container\">";
        // line 54
        $this->displayBlock('modal_container', $context, $blocks);
        // line 56
        echo "</div>

        ";
        // line 59
        echo "        ";
        if ((isset($context["is_mobile"]) ? $context["is_mobile"] : $this->getContext($context, "is_mobile"))) {
            // line 60
            echo "            ";
            // line 61
            echo "            ";
            if (!twig_in_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), (isset($context["catfish_banner_disabled_routes"]) ? $context["catfish_banner_disabled_routes"] : $this->getContext($context, "catfish_banner_disabled_routes")))) {
                // line 62
                echo "                ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("VODBaseBundle:Home:catfishBanner"));
                echo "
            ";
            }
            // line 64
            echo "
            ";
            // line 66
            echo "            <div id=\"c-mask\" class=\"c-mask\"></div>
        ";
        }
        // line 68
        echo "    ";
        
        $__internal_0a93978e4ca0e0ba2cb7bd8a76edf315317f7d905383ae0a6c0e0bccbcfbe498->leave($__internal_0a93978e4ca0e0ba2cb7bd8a76edf315317f7d905383ae0a6c0e0bccbcfbe498_prof);

    }

    // line 31
    public function block_header_container($context, array $blocks = array())
    {
        $__internal_d3800150900c1924597f6c93c479f7bb85841865872297d4033f9bf4536343f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3800150900c1924597f6c93c479f7bb85841865872297d4033f9bf4536343f6->enter($__internal_d3800150900c1924597f6c93c479f7bb85841865872297d4033f9bf4536343f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_container"));

        
        $__internal_d3800150900c1924597f6c93c479f7bb85841865872297d4033f9bf4536343f6->leave($__internal_d3800150900c1924597f6c93c479f7bb85841865872297d4033f9bf4536343f6_prof);

    }

    // line 35
    public function block_flash_messages($context, array $blocks = array())
    {
        $__internal_7d70e9ee2eda291f8840ab5623c5919f21988f2c05b0905594b336472fd87d06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d70e9ee2eda291f8840ab5623c5919f21988f2c05b0905594b336472fd87d06->enter($__internal_7d70e9ee2eda291f8840ab5623c5919f21988f2c05b0905594b336472fd87d06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        // line 36
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "subscription"), "method"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 37
            echo "                    ";
            if ($this->getAttribute($context["loop"], "first", array())) {
                // line 38
                echo "                        <div class=\"alert alert-info flash_message\" role=\"alert\" id=\"subscription-flash\">
                            <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                            ";
                // line 40
                echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
                echo "
                        </div>
                    ";
            }
            // line 43
            echo "                ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "            ";
        
        $__internal_7d70e9ee2eda291f8840ab5623c5919f21988f2c05b0905594b336472fd87d06->leave($__internal_7d70e9ee2eda291f8840ab5623c5919f21988f2c05b0905594b336472fd87d06_prof);

    }

    // line 45
    public function block_body_container($context, array $blocks = array())
    {
        $__internal_c7e2badba1ea096a05d91094a6086491cfde3ba995d967c00633bb205b0dfced = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7e2badba1ea096a05d91094a6086491cfde3ba995d967c00633bb205b0dfced->enter($__internal_c7e2badba1ea096a05d91094a6086491cfde3ba995d967c00633bb205b0dfced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_container"));

        
        $__internal_c7e2badba1ea096a05d91094a6086491cfde3ba995d967c00633bb205b0dfced->leave($__internal_c7e2badba1ea096a05d91094a6086491cfde3ba995d967c00633bb205b0dfced_prof);

    }

    // line 54
    public function block_modal_container($context, array $blocks = array())
    {
        $__internal_bd1a77bc5b97809bd4cc900c216a6c0e52fc82081e09599e37e577b4dfff6401 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd1a77bc5b97809bd4cc900c216a6c0e52fc82081e09599e37e577b4dfff6401->enter($__internal_bd1a77bc5b97809bd4cc900c216a6c0e52fc82081e09599e37e577b4dfff6401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal_container"));

        
        $__internal_bd1a77bc5b97809bd4cc900c216a6c0e52fc82081e09599e37e577b4dfff6401->leave($__internal_bd1a77bc5b97809bd4cc900c216a6c0e52fc82081e09599e37e577b4dfff6401_prof);

    }

    // line 70
    public function block_footer_container($context, array $blocks = array())
    {
        $__internal_63130ef35814aee1ea40e8dbc963ea02bbbcd90c06e41e4467f6e1190b6d2bbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63130ef35814aee1ea40e8dbc963ea02bbbcd90c06e41e4467f6e1190b6d2bbb->enter($__internal_63130ef35814aee1ea40e8dbc963ea02bbbcd90c06e41e4467f6e1190b6d2bbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer_container"));

        
        $__internal_63130ef35814aee1ea40e8dbc963ea02bbbcd90c06e41e4467f6e1190b6d2bbb->leave($__internal_63130ef35814aee1ea40e8dbc963ea02bbbcd90c06e41e4467f6e1190b6d2bbb_prof);

    }

    // line 72
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_02ae8c351c59b2edaebfbc1a69e540a3c376e0581523776244837d506314e5db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02ae8c351c59b2edaebfbc1a69e540a3c376e0581523776244837d506314e5db->enter($__internal_02ae8c351c59b2edaebfbc1a69e540a3c376e0581523776244837d506314e5db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 73
        echo "        ";
        $this->loadTemplate("VODBaseBundle:Base/Components/Scripts:javascripts.html.twig", "VODBaseBundle:Base:base.html.twig", 73)->display($context);
        // line 74
        echo "    ";
        
        $__internal_02ae8c351c59b2edaebfbc1a69e540a3c376e0581523776244837d506314e5db->leave($__internal_02ae8c351c59b2edaebfbc1a69e540a3c376e0581523776244837d506314e5db_prof);

    }

    // line 76
    public function block_operator_custom_javascript($context, array $blocks = array())
    {
        $__internal_11043815c554dcdb5fabb1f803b63f11e5676517ce1fb40ecf8c6a05f27a8624 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11043815c554dcdb5fabb1f803b63f11e5676517ce1fb40ecf8c6a05f27a8624->enter($__internal_11043815c554dcdb5fabb1f803b63f11e5676517ce1fb40ecf8c6a05f27a8624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "operator_custom_javascript"));

        // line 77
        echo "        ";
        $this->loadTemplate("VODBaseBundle:Base/Components/Scripts:operator-custom-javascript.html.twig", "VODBaseBundle:Base:base.html.twig", 77)->display($context);
        // line 78
        echo "
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
                \$.post('";
        // line 90
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
        
        $__internal_11043815c554dcdb5fabb1f803b63f11e5676517ce1fb40ecf8c6a05f27a8624->leave($__internal_11043815c554dcdb5fabb1f803b63f11e5676517ce1fb40ecf8c6a05f27a8624_prof);

    }

    // line 102
    public function block_custom_javascript($context, array $blocks = array())
    {
        $__internal_615a81ddd497495297f2aa0c5401c94cc590264145658e95f33903536575592c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_615a81ddd497495297f2aa0c5401c94cc590264145658e95f33903536575592c->enter($__internal_615a81ddd497495297f2aa0c5401c94cc590264145658e95f33903536575592c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "custom_javascript"));

        // line 103
        echo "    ";
        
        $__internal_615a81ddd497495297f2aa0c5401c94cc590264145658e95f33903536575592c->leave($__internal_615a81ddd497495297f2aa0c5401c94cc590264145658e95f33903536575592c_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Base:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  431 => 103,  425 => 102,  407 => 90,  393 => 78,  390 => 77,  384 => 76,  377 => 74,  374 => 73,  368 => 72,  357 => 70,  346 => 54,  335 => 45,  328 => 44,  314 => 43,  308 => 40,  304 => 38,  301 => 37,  283 => 36,  277 => 35,  266 => 31,  259 => 68,  255 => 66,  252 => 64,  246 => 62,  243 => 61,  241 => 60,  238 => 59,  234 => 56,  232 => 54,  230 => 53,  226 => 50,  223 => 49,  219 => 46,  216 => 45,  214 => 35,  211 => 34,  208 => 32,  205 => 31,  201 => 28,  199 => 27,  193 => 26,  186 => 24,  183 => 23,  177 => 22,  166 => 20,  155 => 19,  144 => 18,  137 => 11,  134 => 6,  128 => 5,  114 => 110,  110 => 109,  106 => 108,  102 => 107,  97 => 104,  95 => 102,  92 => 101,  90 => 76,  87 => 75,  85 => 72,  82 => 71,  80 => 70,  77 => 69,  75 => 26,  72 => 25,  70 => 22,  64 => 20,  61 => 19,  59 => 18,  54 => 17,  51 => 16,  48 => 15,  45 => 13,  43 => 12,  40 => 5,  36 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'base' %}
<!DOCTYPE html>
<html lang=\"es\">
    {# Contenido del HEAD #}
    {% block head %}
        {% embed 'VODBaseBundle:Base/Components/Header:head.html.twig' %}
            {% block title %}{{ 'common.titles.site_name' |trans({}, 'common') }}{% endblock title %}
            {% block meta_description %}{% endblock meta_description %}
            {% block custom_stylesheet %}{% endblock custom_stylesheet %}
        {% endembed %}
    {% endblock head %}
    {# Fin del HEAD #}

    {# Uso este macro para definir la vista (mobile o desktop) que voy a usar #}
    {% import 'VODBaseBundle:Components/Macros:block-utilities.html.twig' as blockUtilities %}
    <body {% include 'VODBaseBundle:Base:data-operator.html.twig' %}
    data-locked=\"{{ is_mobile ? 'false':'true' }}\"
    {% block body_class %}{% endblock body_class %}
    {% block body_custom_data %}{% endblock body_custom_data %}
    style=\"{% block body_custom_style %}{% endblock body_custom_style %}\">

    {% block google_analytics_javascript %}
        {% include 'VODBaseBundle:Base/Components/Scripts:google-tag-manager-script.html.twig' with { 'section' : 'body' } %}
    {% endblock google_analytics_javascript %}

    {% block main_container %}
        {# Este es el loader estilo Youtube #}
        <div class=\"la-anim-1\"></div>

        {# Navbar #}
        {% block header_container %}{% endblock header_container %}

        {# Contenedor principal de los contenidos #}
        <main id=\"main-container\" class=\"o-wrapper\">
            {% block flash_messages %}
                {% for flash_message in app.session.flashBag.get('subscription') %}
                    {% if loop.first %}
                        <div class=\"alert alert-info flash_message\" role=\"alert\" id=\"subscription-flash\">
                            <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                            {{ flash_message }}
                        </div>
                    {% endif %}
                {% endfor %}
            {% endblock flash_messages %}
            {% block body_container %}{% endblock %}
        </main>

        {# Cuando realizo una búsqueda en la navbar, oculto el contenedor principal y muestro este otro contenedor #}
        {% include 'VODBaseBundle:Base:search-container.html.twig' %}


        {# Contenedor de los distintos modals que puedo mostrar #}
        <div id=\"modal-container\">
            {%- block modal_container -%}
            {%- endblock modal_container -%}
        </div>

        {# Solo en resoluciones mobile: #}
        {% if is_mobile %}
            {# Muestro el catfish siempre que no esté deshabilitado en parameters #}
            {% if app.request.attributes.get('_route') not in catfish_banner_disabled_routes %}
                {{ render(controller('VODBaseBundle:Home:catfishBanner')) }}
            {% endif %}

            {# Cuando abro el menú lateral en mobile, bloqueo en contenido con un layer #}
            <div id=\"c-mask\" class=\"c-mask\"></div>
        {% endif %}
    {% endblock main_container %}

    {% block footer_container %}{% endblock footer_container %}

    {% block javascript %}
        {% include 'VODBaseBundle:Base/Components/Scripts:javascripts.html.twig' %}
    {% endblock javascript %}

    {% block operator_custom_javascript %}
        {% include 'VODBaseBundle:Base/Components/Scripts:operator-custom-javascript.html.twig' %}

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
    {% endblock operator_custom_javascript %}

    {% block custom_javascript %}
    {% endblock custom_javascript %}
    <script  type=\"text/javascript\"  src=\"https://st.qubit.tv/assets/public/plugin/qoe/1.0/qoe.js\"></script>
    <script type=\"text/javascript\">
        window.QOE.init({
            username: '{{ app.user.displayIdentifier | default('not-logged') }}',
            userId: {{ app.user.userNumber | default(0) }},
            route: '{{ app.request.attributes.get('_route') }}',
            operator: '{{ operator_code }}'
        });
    </script>

    </body>
</html>
", "VODBaseBundle:Base:base.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/Base/base.html.twig");
    }
}


/* VODBaseBundle:Base:base.html.twig */
class __TwigTemplate_09da62b41a67422dce9b5f9512e89ee917b40c28b3d8ca6ff92691f22fe7728c_961282571 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 6
        $this->parent = $this->loadTemplate("VODBaseBundle:Base/Components/Header:head.html.twig", "VODBaseBundle:Base:base.html.twig", 6);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'meta_description' => array($this, 'block_meta_description'),
            'custom_stylesheet' => array($this, 'block_custom_stylesheet'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "VODBaseBundle:Base/Components/Header:head.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_956eeabec5b47f5f8b95adbc3744a81e22508ad1868cb078eecb39790a819602 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_956eeabec5b47f5f8b95adbc3744a81e22508ad1868cb078eecb39790a819602->enter($__internal_956eeabec5b47f5f8b95adbc3744a81e22508ad1868cb078eecb39790a819602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:Base:base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_956eeabec5b47f5f8b95adbc3744a81e22508ad1868cb078eecb39790a819602->leave($__internal_956eeabec5b47f5f8b95adbc3744a81e22508ad1868cb078eecb39790a819602_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b7993abe7b3185a71b10448248c51c2040c7a71f977affab8afe6cb1ed4e1a31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7993abe7b3185a71b10448248c51c2040c7a71f977affab8afe6cb1ed4e1a31->enter($__internal_b7993abe7b3185a71b10448248c51c2040c7a71f977affab8afe6cb1ed4e1a31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("common.titles.site_name", array(), "common"), "html", null, true);
        
        $__internal_b7993abe7b3185a71b10448248c51c2040c7a71f977affab8afe6cb1ed4e1a31->leave($__internal_b7993abe7b3185a71b10448248c51c2040c7a71f977affab8afe6cb1ed4e1a31_prof);

    }

    // line 8
    public function block_meta_description($context, array $blocks = array())
    {
        $__internal_6705990d88b4d85aed8c98aabf61932c911b9725f3ea0190d63267a2949f1ae9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6705990d88b4d85aed8c98aabf61932c911b9725f3ea0190d63267a2949f1ae9->enter($__internal_6705990d88b4d85aed8c98aabf61932c911b9725f3ea0190d63267a2949f1ae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_description"));

        
        $__internal_6705990d88b4d85aed8c98aabf61932c911b9725f3ea0190d63267a2949f1ae9->leave($__internal_6705990d88b4d85aed8c98aabf61932c911b9725f3ea0190d63267a2949f1ae9_prof);

    }

    // line 9
    public function block_custom_stylesheet($context, array $blocks = array())
    {
        $__internal_212f62b116e1f475460b6f0bca8d8ce863abd9d1752a1203fdd4c9891a5613af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_212f62b116e1f475460b6f0bca8d8ce863abd9d1752a1203fdd4c9891a5613af->enter($__internal_212f62b116e1f475460b6f0bca8d8ce863abd9d1752a1203fdd4c9891a5613af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "custom_stylesheet"));

        
        $__internal_212f62b116e1f475460b6f0bca8d8ce863abd9d1752a1203fdd4c9891a5613af->leave($__internal_212f62b116e1f475460b6f0bca8d8ce863abd9d1752a1203fdd4c9891a5613af_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:Base:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  638 => 9,  627 => 8,  615 => 7,  590 => 6,  431 => 103,  425 => 102,  407 => 90,  393 => 78,  390 => 77,  384 => 76,  377 => 74,  374 => 73,  368 => 72,  357 => 70,  346 => 54,  335 => 45,  328 => 44,  314 => 43,  308 => 40,  304 => 38,  301 => 37,  283 => 36,  277 => 35,  266 => 31,  259 => 68,  255 => 66,  252 => 64,  246 => 62,  243 => 61,  241 => 60,  238 => 59,  234 => 56,  232 => 54,  230 => 53,  226 => 50,  223 => 49,  219 => 46,  216 => 45,  214 => 35,  211 => 34,  208 => 32,  205 => 31,  201 => 28,  199 => 27,  193 => 26,  186 => 24,  183 => 23,  177 => 22,  166 => 20,  155 => 19,  144 => 18,  137 => 11,  134 => 6,  128 => 5,  114 => 110,  110 => 109,  106 => 108,  102 => 107,  97 => 104,  95 => 102,  92 => 101,  90 => 76,  87 => 75,  85 => 72,  82 => 71,  80 => 70,  77 => 69,  75 => 26,  72 => 25,  70 => 22,  64 => 20,  61 => 19,  59 => 18,  54 => 17,  51 => 16,  48 => 15,  45 => 13,  43 => 12,  40 => 5,  36 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'base' %}
<!DOCTYPE html>
<html lang=\"es\">
    {# Contenido del HEAD #}
    {% block head %}
        {% embed 'VODBaseBundle:Base/Components/Header:head.html.twig' %}
            {% block title %}{{ 'common.titles.site_name' |trans({}, 'common') }}{% endblock title %}
            {% block meta_description %}{% endblock meta_description %}
            {% block custom_stylesheet %}{% endblock custom_stylesheet %}
        {% endembed %}
    {% endblock head %}
    {# Fin del HEAD #}

    {# Uso este macro para definir la vista (mobile o desktop) que voy a usar #}
    {% import 'VODBaseBundle:Components/Macros:block-utilities.html.twig' as blockUtilities %}
    <body {% include 'VODBaseBundle:Base:data-operator.html.twig' %}
    data-locked=\"{{ is_mobile ? 'false':'true' }}\"
    {% block body_class %}{% endblock body_class %}
    {% block body_custom_data %}{% endblock body_custom_data %}
    style=\"{% block body_custom_style %}{% endblock body_custom_style %}\">

    {% block google_analytics_javascript %}
        {% include 'VODBaseBundle:Base/Components/Scripts:google-tag-manager-script.html.twig' with { 'section' : 'body' } %}
    {% endblock google_analytics_javascript %}

    {% block main_container %}
        {# Este es el loader estilo Youtube #}
        <div class=\"la-anim-1\"></div>

        {# Navbar #}
        {% block header_container %}{% endblock header_container %}

        {# Contenedor principal de los contenidos #}
        <main id=\"main-container\" class=\"o-wrapper\">
            {% block flash_messages %}
                {% for flash_message in app.session.flashBag.get('subscription') %}
                    {% if loop.first %}
                        <div class=\"alert alert-info flash_message\" role=\"alert\" id=\"subscription-flash\">
                            <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                            {{ flash_message }}
                        </div>
                    {% endif %}
                {% endfor %}
            {% endblock flash_messages %}
            {% block body_container %}{% endblock %}
        </main>

        {# Cuando realizo una búsqueda en la navbar, oculto el contenedor principal y muestro este otro contenedor #}
        {% include 'VODBaseBundle:Base:search-container.html.twig' %}


        {# Contenedor de los distintos modals que puedo mostrar #}
        <div id=\"modal-container\">
            {%- block modal_container -%}
            {%- endblock modal_container -%}
        </div>

        {# Solo en resoluciones mobile: #}
        {% if is_mobile %}
            {# Muestro el catfish siempre que no esté deshabilitado en parameters #}
            {% if app.request.attributes.get('_route') not in catfish_banner_disabled_routes %}
                {{ render(controller('VODBaseBundle:Home:catfishBanner')) }}
            {% endif %}

            {# Cuando abro el menú lateral en mobile, bloqueo en contenido con un layer #}
            <div id=\"c-mask\" class=\"c-mask\"></div>
        {% endif %}
    {% endblock main_container %}

    {% block footer_container %}{% endblock footer_container %}

    {% block javascript %}
        {% include 'VODBaseBundle:Base/Components/Scripts:javascripts.html.twig' %}
    {% endblock javascript %}

    {% block operator_custom_javascript %}
        {% include 'VODBaseBundle:Base/Components/Scripts:operator-custom-javascript.html.twig' %}

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
    {% endblock operator_custom_javascript %}

    {% block custom_javascript %}
    {% endblock custom_javascript %}
    <script  type=\"text/javascript\"  src=\"https://st.qubit.tv/assets/public/plugin/qoe/1.0/qoe.js\"></script>
    <script type=\"text/javascript\">
        window.QOE.init({
            username: '{{ app.user.displayIdentifier | default('not-logged') }}',
            userId: {{ app.user.userNumber | default(0) }},
            route: '{{ app.request.attributes.get('_route') }}',
            operator: '{{ operator_code }}'
        });
    </script>

    </body>
</html>
", "VODBaseBundle:Base:base.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/Base/base.html.twig");
    }
}
