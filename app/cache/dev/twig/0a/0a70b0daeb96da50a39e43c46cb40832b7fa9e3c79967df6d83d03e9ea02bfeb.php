<?php

/* VODBaseBundle:New/Player:player.html.twig */
class __TwigTemplate_f4a0d7fa4edcdbeb98ff86e8e0740549d3b7a4ca3c02ca520f2617461be4c8c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("VODBaseBundle:New/Base:main.html.twig", "VODBaseBundle:New/Player:player.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheet' => array($this, 'block_stylesheet'),
            'header_javascript' => array($this, 'block_header_javascript'),
            'javascript' => array($this, 'block_javascript'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "VODBaseBundle:New/Base:main.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c84bb51fce302cb9cf252b9376d8c0ebdb8ffb5834dd11c78b5d960747043447 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c84bb51fce302cb9cf252b9376d8c0ebdb8ffb5834dd11c78b5d960747043447->enter($__internal_c84bb51fce302cb9cf252b9376d8c0ebdb8ffb5834dd11c78b5d960747043447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VODBaseBundle:New/Player:player.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c84bb51fce302cb9cf252b9376d8c0ebdb8ffb5834dd11c78b5d960747043447->leave($__internal_c84bb51fce302cb9cf252b9376d8c0ebdb8ffb5834dd11c78b5d960747043447_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c22ab96f1167ad100787b0c9a71d8c746b609f96733524110323cca3116b07d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c22ab96f1167ad100787b0c9a71d8c746b609f96733524110323cca3116b07d5->enter($__internal_c22ab96f1167ad100787b0c9a71d8c746b609f96733524110323cca3116b07d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "title", array()), "html", null, true);
        
        $__internal_c22ab96f1167ad100787b0c9a71d8c746b609f96733524110323cca3116b07d5->leave($__internal_c22ab96f1167ad100787b0c9a71d8c746b609f96733524110323cca3116b07d5_prof);

    }

    // line 5
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_602cc8143632b16d95b43e01a0944465d5efe821cb8fdf7e6abb44f4ccaaa400 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_602cc8143632b16d95b43e01a0944465d5efe821cb8fdf7e6abb44f4ccaaa400->enter($__internal_602cc8143632b16d95b43e01a0944465d5efe821cb8fdf7e6abb44f4ccaaa400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 6
        echo "    ";
        ob_start();
        // line 7
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["player_css"]) ? $context["player_css"] : $this->getContext($context, "player_css")), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["qubit_css"]) ? $context["qubit_css"] : $this->getContext($context, "qubit_css")), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["thumbnails_css"]) ? $context["thumbnails_css"] : $this->getContext($context, "thumbnails_css")), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/player.css"), "html", null, true);
        echo "\">
        <link href=\"//fonts.googleapis.com/css?family=Raleway\" rel=\"stylesheet\">
        <link href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css\" rel=\"stylesheet\">
        ";
        // line 13
        if ((twig_length_filter($this->env, (isset($context["playerStyles"]) ? $context["playerStyles"] : $this->getContext($context, "playerStyles"))) > 0)) {
            // line 14
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["playerStyles"]) ? $context["playerStyles"] : $this->getContext($context, "playerStyles")));
            foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
                // line 15
                echo "                <link rel=\"stylesheet\" href=\"";
                echo twig_escape_filter($this->env, $context["style"], "html", null, true);
                echo "\">
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "        ";
        }
        // line 18
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_602cc8143632b16d95b43e01a0944465d5efe821cb8fdf7e6abb44f4ccaaa400->leave($__internal_602cc8143632b16d95b43e01a0944465d5efe821cb8fdf7e6abb44f4ccaaa400_prof);

    }

    // line 21
    public function block_header_javascript($context, array $blocks = array())
    {
        $__internal_137d31e3efd8b08ee58c557fd3294142015c8c11b012a3197bebc806e6081d6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_137d31e3efd8b08ee58c557fd3294142015c8c11b012a3197bebc806e6081d6c->enter($__internal_137d31e3efd8b08ee58c557fd3294142015c8c11b012a3197bebc806e6081d6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_javascript"));

        // line 22
        echo "    ";
        ob_start();
        // line 23
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, (isset($context["player_javascript_url"]) ? $context["player_javascript_url"] : $this->getContext($context, "player_javascript_url")), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"//smartplugin.youbora.com/v5/javascript/videojs5/5.3.0/sp.min.js\"></script>
        <script type=\"text/javascript\" src=\"//smartplugin.youbora.com/v5/javascript/shakaplayer2/5.3.2/sp.min.js\"></script>
        <script type=\"text/javascript\" src=\"//code.jquery.com/jquery-2.2.0.min.js\"></script>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_137d31e3efd8b08ee58c557fd3294142015c8c11b012a3197bebc806e6081d6c->leave($__internal_137d31e3efd8b08ee58c557fd3294142015c8c11b012a3197bebc806e6081d6c_prof);

    }

    // line 30
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_16f306cd7dfc98a96417dd572b80af5dbdda808433cba1a4b927a1672406c7e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16f306cd7dfc98a96417dd572b80af5dbdda808433cba1a4b927a1672406c7e6->enter($__internal_16f306cd7dfc98a96417dd572b80af5dbdda808433cba1a4b927a1672406c7e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 31
        echo "    ";
        ob_start();
        // line 32
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
        <script>
            window.WebPlayer = window.WebPlayer || {};

            var subs = []; var vttSubsUrl = '";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["vttSubsUrl"]) ? $context["vttSubsUrl"] : $this->getContext($context, "vttSubsUrl")), "html", null, true);
        echo "';

            if (vttSubsUrl != '') {
                subs.push({
                    'src': vttSubsUrl,
                    'lang': '";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["play"]) ? $context["play"] : $this->getContext($context, "play")), "subtitle", array()), "html", null, true);
        echo "',
                    'default': true
                })
            }

            window.WebPlayer.Configuration = {
                meta: {
                    poster: '";
        // line 49
        echo twig_escape_filter($this->env, (($this->getAttribute(twig_random($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "fanArts", array())), "url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(twig_random($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "fanArts", array())), "url", array()), "https://stcloudfront.qubit.tv/assets/public/qubit/qubit-ar/staging/images/logo-qubit-azul.svg")) : ("https://stcloudfront.qubit.tv/assets/public/qubit/qubit-ar/staging/images/logo-qubit-azul.svg")), "html", null, true);
        echo "',
                    thumbs: '";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["thumbnailPrefix"]) ? $context["thumbnailPrefix"] : $this->getContext($context, "thumbnailPrefix")), "html", null, true);
        echo "',
                    time: ";
        // line 51
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["play"]) ? $context["play"] : null), "currentTime", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["play"]) ? $context["play"] : null), "currentTime", array()), 0)) : (0)), "html", null, true);
        echo ",
                    link: '";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["urlDetail"]) ? $context["urlDetail"] : $this->getContext($context, "urlDetail")), "html", null, true);
        echo "',
                    uuid: '";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "uuid", array()), "html", null, true);
        echo "'
                },
                containerId: 'container',
                movieTitleContainerId: 'movie-title',
                playerType: '";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["playerType"]) ? $context["playerType"] : $this->getContext($context, "playerType")), "html", null, true);
        echo "',
                experience: {
                    uri: Routing.generate('content_play', {hash: '";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["hash"]) ? $context["hash"] : $this->getContext($context, "hash")), "html", null, true);
        echo "' }),
                    method: 'POST',
                    seconds: 15,
                    body: '{\"ReproductionId\": ";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["play"]) ? $context["play"] : $this->getContext($context, "play")), "reproductionId", array()), "html", null, true);
        echo ", \"Uuid\": \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "uuid", array()), "html", null, true);
        echo "\", \"CurrentTime\": \\'%currentTime%\\', \"Duration\": ";
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "runtime", array()) * 60), "html", null, true);
        echo " }'
                },
                youbora: {
                    accountCode: '";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["youboraAccountCode"]) ? $context["youboraAccountCode"] : $this->getContext($context, "youboraAccountCode")), "html", null, true);
        echo "',
                    media: {
                        title: '";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "title", array()), "html", null, true);
        echo "'
                    },
                    operatorCode: '";
        // line 69
        echo twig_escape_filter($this->env, (isset($context["operatorCode"]) ? $context["operatorCode"] : $this->getContext($context, "operatorCode")), "html", null, true);
        echo "',
                    playerType: '";
        // line 70
        echo twig_escape_filter($this->env, (isset($context["playerType"]) ? $context["playerType"] : $this->getContext($context, "playerType")), "html", null, true);
        echo "',
                    transactionCode: '";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["play"]) ? $context["play"] : $this->getContext($context, "play")), "reproductionId", array()), "html", null, true);
        echo "',
                    username: '";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "displayIdentifier", array()), "html", null, true);
        echo "'
                }
            };

            switch (window.WebPlayer.Configuration.playerType) {
                case 'shaka':
                    window.WebPlayer.Configuration.source = '";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["play"]) ? $context["play"] : $this->getContext($context, "play")), "urlDash", array()), "html", null, true);
        echo "';
                    window.WebPlayer.Configuration.drm = {
                        widevine: '";
        // line 80
        echo $this->getAttribute((isset($context["play"]) ? $context["play"] : $this->getContext($context, "play")), "dashProxy", array());
        echo "'
                    };
                    window.WebPlayer.Configuration.youbora.media.source = '";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["play"]) ? $context["play"] : $this->getContext($context, "play")), "urlDash", array()), "html", null, true);
        echo "';
                    break;
                case 'hls':
                case 'hls-mobile':
                    var jsonEncoded = ";
        // line 86
        echo twig_jsonencode_filter($this->getAttribute((isset($context["play"]) ? $context["play"] : $this->getContext($context, "play")), "serializedHlsUrls", array()));
        echo "; var urls = [];

                    for(var objUrlKey in jsonEncoded) {
                        var url = {
                            url: jsonEncoded[objUrlKey]['url'][0],
                            lang: jsonEncoded[objUrlKey]['language']
                        };

                        urls.push(url);
                    }

                    window.WebPlayer.Configuration.styles = [];
                    window.WebPlayer.Configuration.sources = urls;
                    window.WebPlayer.Configuration.subs = subs;
                    window.WebPlayer.Configuration.youbora.media.source = urls[0].url;
                    break;
                case 'playready':
                    window.WebPlayer.Configuration.subs = subs;
                    window.WebPlayer.Configuration.meta.parseMpd = false;
                    window.WebPlayer.Configuration.source = '";
        // line 105
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["play"]) ? $context["play"] : $this->getContext($context, "play")), "urlPlayReadyMPD", array()), "html", null, true);
        echo "';
                    window.WebPlayer.Configuration.drm = {
                        playready: '";
        // line 107
        echo $this->getAttribute((isset($context["play"]) ? $context["play"] : $this->getContext($context, "play")), "urlPlayReadyProxy", array());
        echo "'
                    };
                    window.WebPlayer.Configuration.youbora.media.source = '";
        // line 109
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["play"]) ? $context["play"] : $this->getContext($context, "play")), "urlPlayReadyMPD", array()), "html", null, true);
        echo "';
                    break;
                default:
                    console.error('QBWebError: Unknown playerType.' + window.WebPlayer.Configuration.playerType);
            }
        </script>
        <script type=\"text/javascript\" src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/player.min.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 117
        echo "            ";
        // line 118
        echo "            ";
        // line 119
        echo "                ";
        // line 120
        echo "            ";
        // line 121
        echo "
            ";
        // line 123
        echo "
            ";
        // line 125
        echo "
            ";
        // line 127
        echo "                ";
        // line 128
        echo "                    ";
        // line 129
        echo "                        ";
        // line 130
        echo "                    ";
        // line 131
        echo "                    ";
        // line 132
        echo "                        ";
        // line 133
        echo "                        ";
        // line 134
        echo "                        ";
        // line 135
        echo "                    ";
        // line 136
        echo "                    ";
        // line 137
        echo "                    ";
        // line 138
        echo "                        ";
        // line 139
        echo "                        ";
        // line 140
        echo "                        ";
        // line 141
        echo "                        ";
        // line 142
        echo "                    ";
        // line 143
        echo "                    ";
        // line 144
        echo "                        ";
        // line 145
        echo "                        ";
        // line 146
        echo "                            ";
        // line 147
        echo "                            ";
        // line 148
        echo "                        ";
        // line 149
        echo "                        ";
        // line 150
        echo "                        ";
        // line 151
        echo "                        ";
        // line 152
        echo "                        ";
        // line 153
        echo "                    ";
        // line 154
        echo "                ";
        // line 155
        echo "            ";
        // line 156
        echo "                ";
        // line 157
        echo "
                ";
        // line 159
        echo "
                ";
        // line 161
        echo "                    ";
        // line 162
        echo "                ";
        // line 163
        echo "
                ";
        // line 165
        echo "                ";
        // line 166
        echo "                ";
        // line 167
        echo "                    ";
        // line 168
        echo "                        ";
        // line 169
        echo "                        ";
        // line 170
        echo "                        ";
        // line 171
        echo "                    ";
        // line 172
        echo "                ";
        // line 173
        echo "
                ";
        // line 175
        echo "                    ";
        // line 176
        echo "                        ";
        // line 177
        echo "                        ";
        // line 178
        echo "                        ";
        // line 179
        echo "                        ";
        // line 180
        echo "                        ";
        // line 181
        echo "                        ";
        // line 182
        echo "                    ";
        // line 183
        echo "                    ";
        // line 184
        echo "                    ";
        // line 185
        echo "                    ";
        // line 186
        echo "                        ";
        // line 187
        echo "                        ";
        // line 188
        echo "                        ";
        // line 189
        echo "                        ";
        // line 190
        echo "                    ";
        // line 191
        echo "                    ";
        // line 192
        echo "                        ";
        // line 193
        echo "                        ";
        // line 194
        echo "                        ";
        // line 195
        echo "                        ";
        // line 196
        echo "                            ";
        // line 197
        echo "                            ";
        // line 198
        echo "                        ";
        // line 199
        echo "                        ";
        // line 200
        echo "                        ";
        // line 201
        echo "                    ";
        // line 202
        echo "                    ";
        // line 203
        echo "                ";
        // line 204
        echo "            ";
        // line 205
        echo "                ";
        // line 206
        echo "            ";
        // line 207
        echo "
            ";
        // line 209
        echo "                ";
        // line 210
        echo "            ";
        // line 211
        echo "                ";
        // line 212
        echo "                    ";
        // line 213
        echo "                    ";
        // line 214
        echo "                    ";
        // line 215
        echo "                ";
        // line 216
        echo "            ";
        // line 217
        echo "        ";
        // line 218
        $this->loadTemplate("VODBaseBundle:New/Player/Components:operator-javascript.html.twig", "VODBaseBundle:New/Player:player.html.twig", 218)->display($context);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_16f306cd7dfc98a96417dd572b80af5dbdda808433cba1a4b927a1672406c7e6->leave($__internal_16f306cd7dfc98a96417dd572b80af5dbdda808433cba1a4b927a1672406c7e6_prof);

    }

    // line 222
    public function block_body($context, array $blocks = array())
    {
        $__internal_eb399f749e8ae7489cb5847dd7466b049f625395ae5ac23fc8cf2f819f0f73f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb399f749e8ae7489cb5847dd7466b049f625395ae5ac23fc8cf2f819f0f73f1->enter($__internal_eb399f749e8ae7489cb5847dd7466b049f625395ae5ac23fc8cf2f819f0f73f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 223
        echo "    ";
        ob_start();
        // line 224
        echo "        <div id=\"container\"></div>
        <div id=\"movie-title\" class=\"video-js-title hide\">
            <a class=\"btn-back\" id=\"goback\" href=\"";
        // line 226
        echo twig_escape_filter($this->env, (isset($context["urlDetail"]) ? $context["urlDetail"] : $this->getContext($context, "urlDetail")), "html", null, true);
        echo "\">
                <i class=\"fa fa-lg fa-arrow-left\"></i>
            </a>
            <h1>";
        // line 229
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "title", array()), "html", null, true);
        echo "</h1>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_eb399f749e8ae7489cb5847dd7466b049f625395ae5ac23fc8cf2f819f0f73f1->leave($__internal_eb399f749e8ae7489cb5847dd7466b049f625395ae5ac23fc8cf2f819f0f73f1_prof);

    }

    public function getTemplateName()
    {
        return "VODBaseBundle:New/Player:player.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  525 => 229,  519 => 226,  515 => 224,  512 => 223,  506 => 222,  498 => 218,  496 => 217,  494 => 216,  492 => 215,  490 => 214,  488 => 213,  486 => 212,  484 => 211,  482 => 210,  480 => 209,  477 => 207,  475 => 206,  473 => 205,  471 => 204,  469 => 203,  467 => 202,  465 => 201,  463 => 200,  461 => 199,  459 => 198,  457 => 197,  455 => 196,  453 => 195,  451 => 194,  449 => 193,  447 => 192,  445 => 191,  443 => 190,  441 => 189,  439 => 188,  437 => 187,  435 => 186,  433 => 185,  431 => 184,  429 => 183,  427 => 182,  425 => 181,  423 => 180,  421 => 179,  419 => 178,  417 => 177,  415 => 176,  413 => 175,  410 => 173,  408 => 172,  406 => 171,  404 => 170,  402 => 169,  400 => 168,  398 => 167,  396 => 166,  394 => 165,  391 => 163,  389 => 162,  387 => 161,  384 => 159,  381 => 157,  379 => 156,  377 => 155,  375 => 154,  373 => 153,  371 => 152,  369 => 151,  367 => 150,  365 => 149,  363 => 148,  361 => 147,  359 => 146,  357 => 145,  355 => 144,  353 => 143,  351 => 142,  349 => 141,  347 => 140,  345 => 139,  343 => 138,  341 => 137,  339 => 136,  337 => 135,  335 => 134,  333 => 133,  331 => 132,  329 => 131,  327 => 130,  325 => 129,  323 => 128,  321 => 127,  318 => 125,  315 => 123,  312 => 121,  310 => 120,  308 => 119,  306 => 118,  304 => 117,  300 => 115,  291 => 109,  286 => 107,  281 => 105,  259 => 86,  252 => 82,  247 => 80,  242 => 78,  233 => 72,  229 => 71,  225 => 70,  221 => 69,  216 => 67,  211 => 65,  201 => 62,  195 => 59,  190 => 57,  183 => 53,  179 => 52,  175 => 51,  171 => 50,  167 => 49,  157 => 42,  149 => 37,  142 => 33,  137 => 32,  134 => 31,  128 => 30,  114 => 23,  111 => 22,  105 => 21,  97 => 18,  94 => 17,  85 => 15,  80 => 14,  78 => 13,  72 => 10,  68 => 9,  64 => 8,  59 => 7,  56 => 6,  50 => 5,  38 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'VODBaseBundle:New/Base:main.html.twig' %}

{% block title %}{{- content.title -}}{% endblock title %}

{% block stylesheet %}
    {% spaceless %}
        <link rel=\"stylesheet\" href=\"{{ player_css }}\">
        <link rel=\"stylesheet\" href=\"{{ qubit_css }}\">
        <link rel=\"stylesheet\" href=\"{{ thumbnails_css }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/player.css')}}\">
        <link href=\"//fonts.googleapis.com/css?family=Raleway\" rel=\"stylesheet\">
        <link href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css\" rel=\"stylesheet\">
        {% if playerStyles|length > 0 %}
            {% for style in playerStyles %}
                <link rel=\"stylesheet\" href=\"{{ style }}\">
            {% endfor %}
        {% endif %}
    {% endspaceless %}
{% endblock stylesheet %}

{% block header_javascript %}
    {% spaceless %}
        <script type=\"text/javascript\" src=\"{{ player_javascript_url }}\"></script>
        <script type=\"text/javascript\" src=\"//smartplugin.youbora.com/v5/javascript/videojs5/5.3.0/sp.min.js\"></script>
        <script type=\"text/javascript\" src=\"//smartplugin.youbora.com/v5/javascript/shakaplayer2/5.3.2/sp.min.js\"></script>
        <script type=\"text/javascript\" src=\"//code.jquery.com/jquery-2.2.0.min.js\"></script>
    {% endspaceless %}
{% endblock header_javascript %}

{% block javascript %}
    {% spaceless %}
        <script src=\"{{ asset('bundles/fosjsrouting/js/router.js') }}\"></script>
        <script src=\"{{ path('fos_js_routing_js', {'callback': 'fos.Router.setData'}) }}\"></script>
        <script>
            window.WebPlayer = window.WebPlayer || {};

            var subs = []; var vttSubsUrl = '{{ vttSubsUrl }}';

            if (vttSubsUrl != '') {
                subs.push({
                    'src': vttSubsUrl,
                    'lang': '{{ play.subtitle }}',
                    'default': true
                })
            }

            window.WebPlayer.Configuration = {
                meta: {
                    poster: '{{ random(content.fanArts).url | default('https://stcloudfront.qubit.tv/assets/public/qubit/qubit-ar/staging/images/logo-qubit-azul.svg') }}',
                    thumbs: '{{ thumbnailPrefix }}',
                    time: {{ play.currentTime | default(0) }},
                    link: '{{ urlDetail }}',
                    uuid: '{{ content.uuid }}'
                },
                containerId: 'container',
                movieTitleContainerId: 'movie-title',
                playerType: '{{ playerType }}',
                experience: {
                    uri: Routing.generate('content_play', {hash: '{{ hash }}' }),
                    method: 'POST',
                    seconds: 15,
                    body: '{\"ReproductionId\": {{ play.reproductionId }}, \"Uuid\": \"{{ content.uuid }}\", \"CurrentTime\": \\'%currentTime%\\', \"Duration\": {{ content.runtime*60 }} }'
                },
                youbora: {
                    accountCode: '{{ youboraAccountCode }}',
                    media: {
                        title: '{{ content.title }}'
                    },
                    operatorCode: '{{ operatorCode }}',
                    playerType: '{{ playerType }}',
                    transactionCode: '{{ play.reproductionId }}',
                    username: '{{ app.user.displayIdentifier }}'
                }
            };

            switch (window.WebPlayer.Configuration.playerType) {
                case 'shaka':
                    window.WebPlayer.Configuration.source = '{{ play.urlDash }}';
                    window.WebPlayer.Configuration.drm = {
                        widevine: '{{ play.dashProxy|raw }}'
                    };
                    window.WebPlayer.Configuration.youbora.media.source = '{{ play.urlDash }}';
                    break;
                case 'hls':
                case 'hls-mobile':
                    var jsonEncoded = {{ play.serializedHlsUrls|json_encode|raw }}; var urls = [];

                    for(var objUrlKey in jsonEncoded) {
                        var url = {
                            url: jsonEncoded[objUrlKey]['url'][0],
                            lang: jsonEncoded[objUrlKey]['language']
                        };

                        urls.push(url);
                    }

                    window.WebPlayer.Configuration.styles = [];
                    window.WebPlayer.Configuration.sources = urls;
                    window.WebPlayer.Configuration.subs = subs;
                    window.WebPlayer.Configuration.youbora.media.source = urls[0].url;
                    break;
                case 'playready':
                    window.WebPlayer.Configuration.subs = subs;
                    window.WebPlayer.Configuration.meta.parseMpd = false;
                    window.WebPlayer.Configuration.source = '{{ play.urlPlayReadyMPD }}';
                    window.WebPlayer.Configuration.drm = {
                        playready: '{{ play.urlPlayReadyProxy|raw }}'
                    };
                    window.WebPlayer.Configuration.youbora.media.source = '{{ play.urlPlayReadyMPD }}';
                    break;
                default:
                    console.error('QBWebError: Unknown playerType.' + window.WebPlayer.Configuration.playerType);
            }
        </script>
        <script type=\"text/javascript\" src=\"{{ asset('js/player.min.js') }}\"></script>
        {#<script>#}
            {#var randomFanArt = 'https://stcloudfront.qubit.tv/assets/public/qubit/qubit-ar/staging/images/logo-qubit-azul.svg';#}
            {#{% if content.fanArts | length > 0 %}#}
                {#randomFanArt = '{{ random(content.fanArts).url }}';#}
            {#{% endif %}#}

            {#var playerType = \"{{ playerType }}\";#}

            {#var movieConfig = {};#}

            {#if (playerType == 'shaka') {#}
                {#movieConfig = {#}
                    {#drm: {#}
                        {#widevine: \"{{ play.dashProxy|raw }}\"#}
                    {#},#}
                    {#meta: {#}
                        {#poster: randomFanArt,#}
                        {#thumbs: '{{ thumbnailPrefix }}',#}
                        {#time: {{ play.currentTime | default(0) }}#}
                    {#},#}
                    {#source: '{{ play.urlDash }}',#}
                    {#experience: {#}
                        {#uri: Routing.generate('content_play', {hash: '{{ hash }}' }),#}
                        {#method: 'POST',#}
                        {#seconds: 15,#}
                        {#body: '{\"ReproductionId\": {{ play.reproductionId }}, \"Uuid\": \"{{ content.uuid }}\", \"CurrentTime\": \\'%currentTime%\\', \"Duration\": {{ content.runtime*60 }} }'#}
                    {#},#}
                    {#youbora: {#}
                        {#accountCode: '{{ youboraAccountCode }}',#}
                        {#media: {#}
                            {#source: '{{ play.urlDash }}',#}
                            {#title: '{{ content.title }}'#}
                        {#},#}
                        {#operator: '{{ operatorCode }}',#}
                        {#playerType: '{{ playerType }}',#}
                        {#transactionCode: {{ play.reproductionId }},#}
                        {#username: '{{ app.user.displayIdentifier }}'#}
                    {#}#}
                {#};#}
            {#} else if (playerType == 'hls' || playerType == 'hls-mobile' || playerType == 'hls-ie-11') {#}
                {#var jsonEncoded = {{ play.serializedHlsUrls|json_encode|raw }};#}

                {#var urls = [];#}

                {#for (var objKeys in jsonEncoded) {#}
                    {#urls.push(jsonEncoded[objKeys]);#}
                {#}#}

                {#var subs = [];#}
                {#var vttSubsUrl = '{{ vttSubsUrl }}';#}
                {#if (vttSubsUrl != '') {#}
                    {#subs.push({#}
                        {#'src': vttSubsUrl,#}
                        {#'lang': '{{ play.subtitle }}',#}
                        {#'default': true#}
                    {#})#}
                {#}#}

                {#movieConfig = {#}
                    {#\"meta\": {#}
                        {#\"slug\": \"{{ content.vodSlug }}\",#}
                        {#\"uuid\": \"{{ content.uuid }}\",#}
                        {#\"link\": \"{{ urlDetail }}\",#}
                        {#\"poster\": randomFanArt,#}
                        {#\"thumbs\": \"{{ thumbnailPrefix }}\",#}
                        {#\"time\": \"{{ play.currentTime | default(0) }}\"#}
                    {#},#}
                    {#\"subs\": subs,#}
                    {#\"sources\": urls,#}
                    {#\"experience\": {#}
                        {#\"uri\": Routing.generate('content_play', {hash: '{{ hash }}' }),#}
                        {#\"method\": \"POST\",#}
                        {#\"seconds\": 15,#}
                        {#\"body\": '{\"ReproductionId\": {{ play.reproductionId }}, \"Uuid\": \"{{ content.uuid }}\", \"CurrentTime\": \\'%currentTime%\\', \"Duration\": {{ content.runtime*60 }} }'#}
                    {#},#}
                    {#\"youbora\": {#}
                        {#\"accountCode\": \"{{ youboraAccountCode }}\",#}
                        {#\"username\": \"{{ app.user.displayIdentifier }}\",#}
                        {#\"transactionCode\": \"{{ play.reproductionId }}\",#}
                        {#\"media\": {#}
                            {#\"title\": \"{{ content.title }}\",#}
                            {#\"source\": urls[0].url#}
                        {#},#}
                        {#\"operator\": \"{{ operatorCode }}\",#}
                        {#\"playerType\": \"{{ playerType }}\"#}
                    {#},#}
                    {#\"styles\": []#}
                {#};#}
            {#} else {#}
                {#console.log('QBWebError: Unknown playerType.'+playerType);#}
            {#}#}

            {#if (Object.keys(movieConfig).length === 0 && movieConfig.constructor === Object) {#}
                {#console.log('QBWebError: Obj. movieConfig is empty'+movieConfig);#}
            {#} else {#}
                {#WebPlayer.initPlayer('container', 'movie-title', movieConfig, playerType).then(function() {#}
                    {#var videoElement = document.querySelector('#container video').parentNode;#}
                    {#var player = videojs(videoElement);#}
                    {#WebPlayer.addPlayerEvents(player);#}
                {#});#}
            {#}#}
        {#</script>#}
        {%- include 'VODBaseBundle:New/Player/Components:operator-javascript.html.twig' -%}
    {% endspaceless %}
{% endblock javascript %}

{% block body %}
    {% spaceless %}
        <div id=\"container\"></div>
        <div id=\"movie-title\" class=\"video-js-title hide\">
            <a class=\"btn-back\" id=\"goback\" href=\"{{ urlDetail }}\">
                <i class=\"fa fa-lg fa-arrow-left\"></i>
            </a>
            <h1>{{ content.title }}</h1>
        </div>
    {% endspaceless %}
{% endblock body %}", "VODBaseBundle:New/Player:player.html.twig", "/Users/pablosanchez/Sites/qubit-argentina/vendor/vod/base-bundle/Resources/views/New/Player/player.html.twig");
    }
}
