<?php

/* @EasyAdmin/default/layout.html.twig */
class __TwigTemplate_a72327ba3cb68e3cd1183611e276741ef8f0c092e1f94cca3306db100d581b37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'head_stylesheets' => array($this, 'block_head_stylesheets'),
            'head_favicon' => array($this, 'block_head_favicon'),
            'head_javascript' => array($this, 'block_head_javascript'),
            'adminlte_options' => array($this, 'block_adminlte_options'),
            'body' => array($this, 'block_body'),
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'wrapper' => array($this, 'block_wrapper'),
            'header' => array($this, 'block_header'),
            'header_logo' => array($this, 'block_header_logo'),
            'header_custom_menu' => array($this, 'block_header_custom_menu'),
            'user_menu' => array($this, 'block_user_menu'),
            'sidebar' => array($this, 'block_sidebar'),
            'main_menu_wrapper' => array($this, 'block_main_menu_wrapper'),
            'content' => array($this, 'block_content'),
            'flash_messages' => array($this, 'block_flash_messages'),
            'content_header' => array($this, 'block_content_header'),
            'content_title' => array($this, 'block_content_title'),
            'content_help' => array($this, 'block_content_help'),
            'main' => array($this, 'block_main'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9feee45d5f85e5de327f8d8513f401e5b08429374835f11f978588edf4963659 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9feee45d5f85e5de327f8d8513f401e5b08429374835f11f978588edf4963659->enter($__internal_9feee45d5f85e5de327f8d8513f401e5b08429374835f11f978588edf4963659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, _twig_default_filter(twig_first($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()), "_")), "en"), "html", null, true);
        echo "\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />

        <title>";
        // line 10
        $this->displayBlock('page_title', $context, $blocks);
        echo "</title>

        ";
        // line 12
        $this->displayBlock('head_stylesheets', $context, $blocks);
        // line 18
        echo "
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.assets.css"));
        foreach ($context['_seq'] as $context["_key"] => $context["css_asset"]) {
            // line 20
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["css_asset"]), "html", null, true);
            echo "\">
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['css_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
        ";
        // line 23
        $this->displayBlock('head_favicon', $context, $blocks);
        // line 27
        echo "
        ";
        // line 28
        $this->displayBlock('head_javascript', $context, $blocks);
        // line 45
        echo "
        ";
        // line 46
        if ($this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.rtl")) {
            // line 47
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/bootstrap-rtl.min.css"), "html", null, true);
            echo "\">
            <link rel=\"stylesheet\" href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/adminlte-rtl.min.css"), "html", null, true);
            echo "\">
        ";
        }
        // line 50
        echo "
        <!--[if lt IE 9]>
            <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/html5shiv.min.css"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/respond.min.css"), "html", null, true);
        echo "\"></script>
        <![endif]-->
    </head>

    ";
        // line 57
        $this->displayBlock('body', $context, $blocks);
        // line 147
        echo "</html>
";
        
        $__internal_9feee45d5f85e5de327f8d8513f401e5b08429374835f11f978588edf4963659->leave($__internal_9feee45d5f85e5de327f8d8513f401e5b08429374835f11f978588edf4963659_prof);

    }

    // line 10
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_2f39f15bad1ef758391c56b7fb10043ce128f57bdce1a3cbbf8201d02b5d8bae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f39f15bad1ef758391c56b7fb10043ce128f57bdce1a3cbbf8201d02b5d8bae->enter($__internal_2f39f15bad1ef758391c56b7fb10043ce128f57bdce1a3cbbf8201d02b5d8bae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo strip_tags(        $this->renderBlock("content_title", $context, $blocks));
        
        $__internal_2f39f15bad1ef758391c56b7fb10043ce128f57bdce1a3cbbf8201d02b5d8bae->leave($__internal_2f39f15bad1ef758391c56b7fb10043ce128f57bdce1a3cbbf8201d02b5d8bae_prof);

    }

    // line 12
    public function block_head_stylesheets($context, array $blocks = array())
    {
        $__internal_18997f3478fe9c50c756bfd93a9b2092fcaa6b575426d6de0383a30ac106831a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18997f3478fe9c50c756bfd93a9b2092fcaa6b575426d6de0383a30ac106831a->enter($__internal_18997f3478fe9c50c756bfd93a9b2092fcaa6b575426d6de0383a30ac106831a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        // line 13
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/easyadmin-all.min.css"), "html", null, true);
        echo "\">
            <style>
                ";
        // line 15
        echo $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("_internal.custom_css");
        echo "
            </style>
        ";
        
        $__internal_18997f3478fe9c50c756bfd93a9b2092fcaa6b575426d6de0383a30ac106831a->leave($__internal_18997f3478fe9c50c756bfd93a9b2092fcaa6b575426d6de0383a30ac106831a_prof);

    }

    // line 23
    public function block_head_favicon($context, array $blocks = array())
    {
        $__internal_d8d9ddc9f057d23d69ef4fa89cf656cfa1ae9d6700458d079da929b8d69404a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8d9ddc9f057d23d69ef4fa89cf656cfa1ae9d6700458d079da929b8d69404a5->enter($__internal_d8d9ddc9f057d23d69ef4fa89cf656cfa1ae9d6700458d079da929b8d69404a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

        // line 24
        echo "            ";
        $context["favicon"] = $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.assets.favicon");
        // line 25
        echo "            <link rel=\"icon\" type=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["favicon"]) ? $context["favicon"] : $this->getContext($context, "favicon")), "mime_type", array()), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute((isset($context["favicon"]) ? $context["favicon"] : $this->getContext($context, "favicon")), "path", array())), "html", null, true);
        echo "\" />
        ";
        
        $__internal_d8d9ddc9f057d23d69ef4fa89cf656cfa1ae9d6700458d079da929b8d69404a5->leave($__internal_d8d9ddc9f057d23d69ef4fa89cf656cfa1ae9d6700458d079da929b8d69404a5_prof);

    }

    // line 28
    public function block_head_javascript($context, array $blocks = array())
    {
        $__internal_627566668482b34b42c5a6f9259b7fac68ffe331cc279ec3c0b07f5dbfe4946b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_627566668482b34b42c5a6f9259b7fac68ffe331cc279ec3c0b07f5dbfe4946b->enter($__internal_627566668482b34b42c5a6f9259b7fac68ffe331cc279ec3c0b07f5dbfe4946b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

        // line 29
        echo "            ";
        $this->displayBlock('adminlte_options', $context, $blocks);
        // line 42
        echo "
            <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/javascript/easyadmin-all.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_627566668482b34b42c5a6f9259b7fac68ffe331cc279ec3c0b07f5dbfe4946b->leave($__internal_627566668482b34b42c5a6f9259b7fac68ffe331cc279ec3c0b07f5dbfe4946b_prof);

    }

    // line 29
    public function block_adminlte_options($context, array $blocks = array())
    {
        $__internal_bd925a39b37b94cc1f85b92457c2a370199716274dfeaa8b25720d38a46b49d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd925a39b37b94cc1f85b92457c2a370199716274dfeaa8b25720d38a46b49d1->enter($__internal_bd925a39b37b94cc1f85b92457c2a370199716274dfeaa8b25720d38a46b49d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

        // line 30
        echo "                <script type=\"text/javascript\">
                    var AdminLTEOptions = {
                        animationSpeed: 'normal',
                        sidebarExpandOnHover: false,
                        enableBoxRefresh: false,
                        enableBSToppltip: false,
                        enableFastclick: false,
                        enableControlSidebar: false,
                        enableBoxWidget: false
                    };
                </script>
            ";
        
        $__internal_bd925a39b37b94cc1f85b92457c2a370199716274dfeaa8b25720d38a46b49d1->leave($__internal_bd925a39b37b94cc1f85b92457c2a370199716274dfeaa8b25720d38a46b49d1_prof);

    }

    // line 57
    public function block_body($context, array $blocks = array())
    {
        $__internal_d7e8b72f32499a00863bbd9f18865d5ee731d58932b5b0b8119fb728d4f584f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7e8b72f32499a00863bbd9f18865d5ee731d58932b5b0b8119fb728d4f584f1->enter($__internal_d7e8b72f32499a00863bbd9f18865d5ee731d58932b5b0b8119fb728d4f584f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 58
        echo "    <body id=\"";
        $this->displayBlock('body_id', $context, $blocks);
        echo "\" class=\"easyadmin sidebar-mini ";
        $this->displayBlock('body_class', $context, $blocks);
        echo " ";
        echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "cookies", array()), "has", array(0 => "_easyadmin_navigation_iscollapsed"), "method")) ? ("sidebar-collapse") : (""));
        echo "\">
        <div class=\"wrapper\">
        ";
        // line 60
        $this->displayBlock('wrapper', $context, $blocks);
        // line 138
        echo "        </div>

        ";
        // line 140
        $this->displayBlock('body_javascript', $context, $blocks);
        // line 141
        echo "
        ";
        // line 142
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.assets.js"));
        foreach ($context['_seq'] as $context["_key"] => $context["js_asset"]) {
            // line 143
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["js_asset"]), "html", null, true);
            echo "\"></script>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 145
        echo "    </body>
    ";
        
        $__internal_d7e8b72f32499a00863bbd9f18865d5ee731d58932b5b0b8119fb728d4f584f1->leave($__internal_d7e8b72f32499a00863bbd9f18865d5ee731d58932b5b0b8119fb728d4f584f1_prof);

    }

    // line 58
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_3963f56bdff3409ac9260b26d4db7a8fc98d77afc8e79380342e464547322fa0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3963f56bdff3409ac9260b26d4db7a8fc98d77afc8e79380342e464547322fa0->enter($__internal_3963f56bdff3409ac9260b26d4db7a8fc98d77afc8e79380342e464547322fa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_3963f56bdff3409ac9260b26d4db7a8fc98d77afc8e79380342e464547322fa0->leave($__internal_3963f56bdff3409ac9260b26d4db7a8fc98d77afc8e79380342e464547322fa0_prof);

    }

    public function block_body_class($context, array $blocks = array())
    {
        $__internal_6441f691a5f6ab39c1f1fd115eb1cd20ff0bbc982b99c7c413c9b4973625e6db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6441f691a5f6ab39c1f1fd115eb1cd20ff0bbc982b99c7c413c9b4973625e6db->enter($__internal_6441f691a5f6ab39c1f1fd115eb1cd20ff0bbc982b99c7c413c9b4973625e6db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        
        $__internal_6441f691a5f6ab39c1f1fd115eb1cd20ff0bbc982b99c7c413c9b4973625e6db->leave($__internal_6441f691a5f6ab39c1f1fd115eb1cd20ff0bbc982b99c7c413c9b4973625e6db_prof);

    }

    // line 60
    public function block_wrapper($context, array $blocks = array())
    {
        $__internal_147bef289231cc7fd3b015c0fc646c586110e534dcc8451b9339b4df37c724a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_147bef289231cc7fd3b015c0fc646c586110e534dcc8451b9339b4df37c724a7->enter($__internal_147bef289231cc7fd3b015c0fc646c586110e534dcc8451b9339b4df37c724a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        // line 61
        echo "            <header class=\"main-header\">
            ";
        // line 62
        $this->displayBlock('header', $context, $blocks);
        // line 95
        echo "            </header>

            <aside class=\"main-sidebar\">
            ";
        // line 98
        $this->displayBlock('sidebar', $context, $blocks);
        // line 109
        echo "            </aside>

            <div class=\"content-wrapper\">
            ";
        // line 112
        $this->displayBlock('content', $context, $blocks);
        // line 136
        echo "            </div>
        ";
        
        $__internal_147bef289231cc7fd3b015c0fc646c586110e534dcc8451b9339b4df37c724a7->leave($__internal_147bef289231cc7fd3b015c0fc646c586110e534dcc8451b9339b4df37c724a7_prof);

    }

    // line 62
    public function block_header($context, array $blocks = array())
    {
        $__internal_dfc2cd43e3cd132b0673bf3e9b253f487647c99007188f446ced8e3a5dcb5a60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfc2cd43e3cd132b0673bf3e9b253f487647c99007188f446ced8e3a5dcb5a60->enter($__internal_dfc2cd43e3cd132b0673bf3e9b253f487647c99007188f446ced8e3a5dcb5a60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 63
        echo "                <nav class=\"navbar\" role=\"navigation\">
                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("toggle_navigation", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
                    </a>

                    <div id=\"header-logo\">
                        ";
        // line 69
        $this->displayBlock('header_logo', $context, $blocks);
        // line 74
        echo "                    </div>

                    <div class=\"navbar-custom-menu\">
                    ";
        // line 77
        $this->displayBlock('header_custom_menu', $context, $blocks);
        // line 92
        echo "                    </div>
                </nav>
            ";
        
        $__internal_dfc2cd43e3cd132b0673bf3e9b253f487647c99007188f446ced8e3a5dcb5a60->leave($__internal_dfc2cd43e3cd132b0673bf3e9b253f487647c99007188f446ced8e3a5dcb5a60_prof);

    }

    // line 69
    public function block_header_logo($context, array $blocks = array())
    {
        $__internal_75fbe66df5115ad82a3bcfcea6ad1d71d6517743b767838d4db3b85db0742e3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75fbe66df5115ad82a3bcfcea6ad1d71d6517743b767838d4db3b85db0742e3e->enter($__internal_75fbe66df5115ad82a3bcfcea6ad1d71d6517743b767838d4db3b85db0742e3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

        // line 70
        echo "                            <a class=\"logo ";
        echo (((twig_length_filter($this->env, $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("site_name")) > 14)) ? ("logo-long") : (""));
        echo "\" title=\"";
        echo twig_escape_filter($this->env, strip_tags($this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("site_name")), "html", null, true);
        echo "\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin");
        echo "\">
                                ";
        // line 71
        echo $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("site_name");
        echo "
                            </a>
                        ";
        
        $__internal_75fbe66df5115ad82a3bcfcea6ad1d71d6517743b767838d4db3b85db0742e3e->leave($__internal_75fbe66df5115ad82a3bcfcea6ad1d71d6517743b767838d4db3b85db0742e3e_prof);

    }

    // line 77
    public function block_header_custom_menu($context, array $blocks = array())
    {
        $__internal_8caecf3cb0bc2d61e39cbabbb267c170bc704f96ea9adc78a4c7b7ca0774b2f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8caecf3cb0bc2d61e39cbabbb267c170bc704f96ea9adc78a4c7b7ca0774b2f2->enter($__internal_8caecf3cb0bc2d61e39cbabbb267c170bc704f96ea9adc78a4c7b7ca0774b2f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

        // line 78
        echo "                        <ul class=\"nav navbar-nav\">
                            <li class=\"user user-menu\">
                                ";
        // line 80
        $this->displayBlock('user_menu', $context, $blocks);
        // line 89
        echo "                            </li>
                        </ul>
                    ";
        
        $__internal_8caecf3cb0bc2d61e39cbabbb267c170bc704f96ea9adc78a4c7b7ca0774b2f2->leave($__internal_8caecf3cb0bc2d61e39cbabbb267c170bc704f96ea9adc78a4c7b7ca0774b2f2_prof);

    }

    // line 80
    public function block_user_menu($context, array $blocks = array())
    {
        $__internal_7d87f4215b3cac689babd284236d088cc0bee06c2f232b73c84be47d8f43cccf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d87f4215b3cac689babd284236d088cc0bee06c2f232b73c84be47d8f43cccf->enter($__internal_7d87f4215b3cac689babd284236d088cc0bee06c2f232b73c84be47d8f43cccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

        // line 81
        echo "                                    <span class=\"sr-only\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.logged_in_as", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
                                    <i class=\"hidden-xs fa fa-user\"></i>
                                    ";
        // line 83
        if ((($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()))) : (""))) {
            // line 84
            echo "                                        ";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "username", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "username", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))), "html", null, true);
            echo "
                                    ";
        } else {
            // line 86
            echo "                                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.anonymous", array(), "EasyAdminBundle"), "html", null, true);
            echo "
                                    ";
        }
        // line 88
        echo "                                ";
        
        $__internal_7d87f4215b3cac689babd284236d088cc0bee06c2f232b73c84be47d8f43cccf->leave($__internal_7d87f4215b3cac689babd284236d088cc0bee06c2f232b73c84be47d8f43cccf_prof);

    }

    // line 98
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_3bde7219f3e1d8b3a49e38e4e03c50014c3596101a21dc36e54f696b5280968d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bde7219f3e1d8b3a49e38e4e03c50014c3596101a21dc36e54f696b5280968d->enter($__internal_3bde7219f3e1d8b3a49e38e4e03c50014c3596101a21dc36e54f696b5280968d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 99
        echo "                <section class=\"sidebar\">
                    ";
        // line 100
        $this->displayBlock('main_menu_wrapper', $context, $blocks);
        // line 107
        echo "                </section>
            ";
        
        $__internal_3bde7219f3e1d8b3a49e38e4e03c50014c3596101a21dc36e54f696b5280968d->leave($__internal_3bde7219f3e1d8b3a49e38e4e03c50014c3596101a21dc36e54f696b5280968d_prof);

    }

    // line 100
    public function block_main_menu_wrapper($context, array $blocks = array())
    {
        $__internal_a4389af6483c5d90f5fe7b36441053df8e59ae38c6a1a72ecf04315a2bd938b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4389af6483c5d90f5fe7b36441053df8e59ae38c6a1a72ecf04315a2bd938b4->enter($__internal_a4389af6483c5d90f5fe7b36441053df8e59ae38c6a1a72ecf04315a2bd938b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        // line 101
        echo "                        ";
        echo twig_include($this->env, $context, array(0 => ((        // line 102
array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "menu", array())) : ("")), 1 => $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.templates.menu"), 2 => "@EasyAdmin/default/menu.html.twig"));
        // line 105
        echo "
                    ";
        
        $__internal_a4389af6483c5d90f5fe7b36441053df8e59ae38c6a1a72ecf04315a2bd938b4->leave($__internal_a4389af6483c5d90f5fe7b36441053df8e59ae38c6a1a72ecf04315a2bd938b4_prof);

    }

    // line 112
    public function block_content($context, array $blocks = array())
    {
        $__internal_55b5f49da57bc6866c9d89fa9768111ad3912d48fe1b2dacb18b32f6c2929252 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55b5f49da57bc6866c9d89fa9768111ad3912d48fe1b2dacb18b32f6c2929252->enter($__internal_55b5f49da57bc6866c9d89fa9768111ad3912d48fe1b2dacb18b32f6c2929252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 113
        echo "                ";
        $this->displayBlock('flash_messages', $context, $blocks);
        // line 116
        echo "
                <section class=\"content-header\">
                ";
        // line 118
        $this->displayBlock('content_header', $context, $blocks);
        // line 121
        echo "                ";
        $this->displayBlock('content_help', $context, $blocks);
        // line 130
        echo "                </section>

                <section id=\"main\" class=\"content\">
                    ";
        // line 133
        $this->displayBlock('main', $context, $blocks);
        // line 134
        echo "                </section>
            ";
        
        $__internal_55b5f49da57bc6866c9d89fa9768111ad3912d48fe1b2dacb18b32f6c2929252->leave($__internal_55b5f49da57bc6866c9d89fa9768111ad3912d48fe1b2dacb18b32f6c2929252_prof);

    }

    // line 113
    public function block_flash_messages($context, array $blocks = array())
    {
        $__internal_e860d4974e8e49a8da64a6f532cae5ff229c3db0ebb6ecc241451c3cac8cc188 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e860d4974e8e49a8da64a6f532cae5ff229c3db0ebb6ecc241451c3cac8cc188->enter($__internal_e860d4974e8e49a8da64a6f532cae5ff229c3db0ebb6ecc241451c3cac8cc188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        // line 114
        echo "                    ";
        echo twig_include($this->env, $context, ((array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "flash_messages", array())) : ("@EasyAdmin/default/flash_messages.html.twig")));
        echo "
                ";
        
        $__internal_e860d4974e8e49a8da64a6f532cae5ff229c3db0ebb6ecc241451c3cac8cc188->leave($__internal_e860d4974e8e49a8da64a6f532cae5ff229c3db0ebb6ecc241451c3cac8cc188_prof);

    }

    // line 118
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_c384554bdeea0a4aefecb10f881ed8855abd3f6b6b220a60f5932874c1271f36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c384554bdeea0a4aefecb10f881ed8855abd3f6b6b220a60f5932874c1271f36->enter($__internal_c384554bdeea0a4aefecb10f881ed8855abd3f6b6b220a60f5932874c1271f36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 119
        echo "                    <h1 class=\"title\">";
        $this->displayBlock('content_title', $context, $blocks);
        echo "</h1>
                ";
        
        $__internal_c384554bdeea0a4aefecb10f881ed8855abd3f6b6b220a60f5932874c1271f36->leave($__internal_c384554bdeea0a4aefecb10f881ed8855abd3f6b6b220a60f5932874c1271f36_prof);

    }

    public function block_content_title($context, array $blocks = array())
    {
        $__internal_2be9f9a6a4ed4f9ce3e2f9bd6c2dc303c67425e68b2f2df592a211ca34323889 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2be9f9a6a4ed4f9ce3e2f9bd6c2dc303c67425e68b2f2df592a211ca34323889->enter($__internal_2be9f9a6a4ed4f9ce3e2f9bd6c2dc303c67425e68b2f2df592a211ca34323889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        
        $__internal_2be9f9a6a4ed4f9ce3e2f9bd6c2dc303c67425e68b2f2df592a211ca34323889->leave($__internal_2be9f9a6a4ed4f9ce3e2f9bd6c2dc303c67425e68b2f2df592a211ca34323889_prof);

    }

    // line 121
    public function block_content_help($context, array $blocks = array())
    {
        $__internal_3d0fd0e82ca5ae6d2059cc26c951e68c594dcb73b99875b6c71a7bda1a3afdb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d0fd0e82ca5ae6d2059cc26c951e68c594dcb73b99875b6c71a7bda1a3afdb2->enter($__internal_3d0fd0e82ca5ae6d2059cc26c951e68c594dcb73b99875b6c71a7bda1a3afdb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

        // line 122
        echo "                    ";
        if ((array_key_exists("_entity_config", $context) && (($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array", false, true), "help", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array", false, true), "help", array(), "array"), false)) : (false)))) {
            // line 123
            echo "                        <div class=\"box box-widget help-entity\">
                            <div class=\"box-body\">
                                ";
            // line 125
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array"), "help", array(), "array"));
            echo "
                            </div>
                        </div>
                    ";
        }
        // line 129
        echo "                ";
        
        $__internal_3d0fd0e82ca5ae6d2059cc26c951e68c594dcb73b99875b6c71a7bda1a3afdb2->leave($__internal_3d0fd0e82ca5ae6d2059cc26c951e68c594dcb73b99875b6c71a7bda1a3afdb2_prof);

    }

    // line 133
    public function block_main($context, array $blocks = array())
    {
        $__internal_4520ccd54a053f336e2dd6eea8dafc0e033ffc92bb84f0d954f9e4cf73895b6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4520ccd54a053f336e2dd6eea8dafc0e033ffc92bb84f0d954f9e4cf73895b6c->enter($__internal_4520ccd54a053f336e2dd6eea8dafc0e033ffc92bb84f0d954f9e4cf73895b6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_4520ccd54a053f336e2dd6eea8dafc0e033ffc92bb84f0d954f9e4cf73895b6c->leave($__internal_4520ccd54a053f336e2dd6eea8dafc0e033ffc92bb84f0d954f9e4cf73895b6c_prof);

    }

    // line 140
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_adb19aab7042b6c35a63c8a57fb350082d2c0c74f807a57d7ca17d0643914567 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adb19aab7042b6c35a63c8a57fb350082d2c0c74f807a57d7ca17d0643914567->enter($__internal_adb19aab7042b6c35a63c8a57fb350082d2c0c74f807a57d7ca17d0643914567_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        
        $__internal_adb19aab7042b6c35a63c8a57fb350082d2c0c74f807a57d7ca17d0643914567->leave($__internal_adb19aab7042b6c35a63c8a57fb350082d2c0c74f807a57d7ca17d0643914567_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  597 => 140,  586 => 133,  579 => 129,  572 => 125,  568 => 123,  565 => 122,  559 => 121,  539 => 119,  533 => 118,  523 => 114,  517 => 113,  509 => 134,  507 => 133,  502 => 130,  499 => 121,  497 => 118,  493 => 116,  490 => 113,  484 => 112,  476 => 105,  474 => 102,  472 => 101,  466 => 100,  458 => 107,  456 => 100,  453 => 99,  447 => 98,  440 => 88,  434 => 86,  428 => 84,  426 => 83,  420 => 81,  414 => 80,  405 => 89,  403 => 80,  399 => 78,  393 => 77,  383 => 71,  374 => 70,  368 => 69,  359 => 92,  357 => 77,  352 => 74,  350 => 69,  343 => 65,  339 => 63,  333 => 62,  325 => 136,  323 => 112,  318 => 109,  316 => 98,  311 => 95,  309 => 62,  306 => 61,  300 => 60,  279 => 58,  271 => 145,  262 => 143,  258 => 142,  255 => 141,  253 => 140,  249 => 138,  247 => 60,  237 => 58,  231 => 57,  213 => 30,  207 => 29,  198 => 43,  195 => 42,  192 => 29,  186 => 28,  174 => 25,  171 => 24,  165 => 23,  155 => 15,  149 => 13,  143 => 12,  131 => 10,  123 => 147,  121 => 57,  114 => 53,  110 => 52,  106 => 50,  101 => 48,  96 => 47,  94 => 46,  91 => 45,  89 => 28,  86 => 27,  84 => 23,  81 => 22,  72 => 20,  68 => 19,  65 => 18,  63 => 12,  58 => 10,  47 => 2,  44 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"{{ app.request.locale|split('_')|first|default('en') }}\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />

        <title>{% block page_title %}{{ block('content_title')|striptags|raw }}{% endblock %}</title>

        {% block head_stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/easyadmin/stylesheet/easyadmin-all.min.css') }}\">
            <style>
                {{ easyadmin_config('_internal.custom_css')|raw }}
            </style>
        {% endblock %}

        {% for css_asset in easyadmin_config('design.assets.css') %}
            <link rel=\"stylesheet\" href=\"{{ asset(css_asset) }}\">
        {% endfor %}

        {% block head_favicon %}
            {% set favicon = easyadmin_config('design.assets.favicon') %}
            <link rel=\"icon\" type=\"{{ favicon.mime_type }}\" href=\"{{ asset(favicon.path) }}\" />
        {% endblock %}

        {% block head_javascript %}
            {% block adminlte_options %}
                <script type=\"text/javascript\">
                    var AdminLTEOptions = {
                        animationSpeed: 'normal',
                        sidebarExpandOnHover: false,
                        enableBoxRefresh: false,
                        enableBSToppltip: false,
                        enableFastclick: false,
                        enableControlSidebar: false,
                        enableBoxWidget: false
                    };
                </script>
            {% endblock %}

            <script src=\"{{ asset('bundles/easyadmin/javascript/easyadmin-all.min.js') }}\"></script>
        {% endblock head_javascript %}

        {% if easyadmin_config('design.rtl') %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/easyadmin/stylesheet/bootstrap-rtl.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/easyadmin/stylesheet/adminlte-rtl.min.css') }}\">
        {% endif %}

        <!--[if lt IE 9]>
            <script src=\"{{ asset('bundles/easyadmin/stylesheet/html5shiv.min.css') }}\"></script>
            <script src=\"{{ asset('bundles/easyadmin/stylesheet/respond.min.css') }}\"></script>
        <![endif]-->
    </head>

    {% block body %}
    <body id=\"{% block body_id %}{% endblock %}\" class=\"easyadmin sidebar-mini {% block body_class %}{% endblock %} {{ app.request.cookies.has('_easyadmin_navigation_iscollapsed') ? 'sidebar-collapse' }}\">
        <div class=\"wrapper\">
        {% block wrapper %}
            <header class=\"main-header\">
            {% block header %}
                <nav class=\"navbar\" role=\"navigation\">
                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">{{ 'toggle_navigation'|trans(domain = 'EasyAdminBundle') }}</span>
                    </a>

                    <div id=\"header-logo\">
                        {% block header_logo %}
                            <a class=\"logo {{ easyadmin_config('site_name')|length > 14 ? 'logo-long' }}\" title=\"{{ easyadmin_config('site_name')|striptags }}\" href=\"{{ path('easyadmin') }}\">
                                {{ easyadmin_config('site_name')|raw }}
                            </a>
                        {% endblock header_logo %}
                    </div>

                    <div class=\"navbar-custom-menu\">
                    {% block header_custom_menu %}
                        <ul class=\"nav navbar-nav\">
                            <li class=\"user user-menu\">
                                {% block user_menu %}
                                    <span class=\"sr-only\">{{ 'user.logged_in_as'|trans(domain = 'EasyAdminBundle') }}</span>
                                    <i class=\"hidden-xs fa fa-user\"></i>
                                    {% if app.user|default %}
                                        {{ app.user.username|default('user.unnamed'|trans(domain = 'EasyAdminBundle')) }}
                                    {% else %}
                                        {{ 'user.anonymous'|trans(domain = 'EasyAdminBundle') }}
                                    {% endif %}
                                {% endblock user_menu %}
                            </li>
                        </ul>
                    {% endblock header_custom_menu %}
                    </div>
                </nav>
            {% endblock header %}
            </header>

            <aside class=\"main-sidebar\">
            {% block sidebar %}
                <section class=\"sidebar\">
                    {% block main_menu_wrapper %}
                        {{ include([
                            _entity_config is defined ? _entity_config.templates.menu,
                            easyadmin_config('design.templates.menu'),
                            '@EasyAdmin/default/menu.html.twig'
                        ]) }}
                    {% endblock main_menu_wrapper %}
                </section>
            {% endblock sidebar %}
            </aside>

            <div class=\"content-wrapper\">
            {% block content %}
                {% block flash_messages %}
                    {{ include(_entity_config is defined ? _entity_config.templates.flash_messages : '@EasyAdmin/default/flash_messages.html.twig') }}
                {% endblock flash_messages %}

                <section class=\"content-header\">
                {% block content_header %}
                    <h1 class=\"title\">{% block content_title %}{% endblock %}</h1>
                {% endblock content_header %}
                {% block content_help %}
                    {% if _entity_config is defined and _entity_config[app.request.query.get('action')]['help']|default(false) %}
                        <div class=\"box box-widget help-entity\">
                            <div class=\"box-body\">
                                {{ _entity_config[app.request.query.get('action')]['help']|trans|raw }}
                            </div>
                        </div>
                    {% endif %}
                {% endblock content_help %}
                </section>

                <section id=\"main\" class=\"content\">
                    {% block main %}{% endblock %}
                </section>
            {% endblock content %}
            </div>
        {% endblock wrapper %}
        </div>

        {% block body_javascript %}{% endblock body_javascript %}

        {% for js_asset in easyadmin_config('design.assets.js') %}
            <script src=\"{{ asset(js_asset) }}\"></script>
        {% endfor %}
    </body>
    {% endblock body %}
</html>
", "@EasyAdmin/default/layout.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\default\\layout.html.twig");
    }
}
