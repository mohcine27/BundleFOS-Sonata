<?php

/* @EasyAdmin/default/layout.html.twig */
class __TwigTemplate_d87aa942e42ea39518fcc9e41e4c17da6e1d0b5702021882da9f8adb11f619ce extends Twig_Template
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
        $__internal_e8b9b2520dfc4145f301092e9609c82d7c422fa536905f490556da6590aca356 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8b9b2520dfc4145f301092e9609c82d7c422fa536905f490556da6590aca356->enter($__internal_e8b9b2520dfc4145f301092e9609c82d7c422fa536905f490556da6590aca356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/layout.html.twig"));

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
        
        $__internal_e8b9b2520dfc4145f301092e9609c82d7c422fa536905f490556da6590aca356->leave($__internal_e8b9b2520dfc4145f301092e9609c82d7c422fa536905f490556da6590aca356_prof);

    }

    // line 10
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_0a1d5c07bc343cb9f90dfacb503e7766fe2673a399da99d659e166a2234055da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a1d5c07bc343cb9f90dfacb503e7766fe2673a399da99d659e166a2234055da->enter($__internal_0a1d5c07bc343cb9f90dfacb503e7766fe2673a399da99d659e166a2234055da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo strip_tags(        $this->renderBlock("content_title", $context, $blocks));
        
        $__internal_0a1d5c07bc343cb9f90dfacb503e7766fe2673a399da99d659e166a2234055da->leave($__internal_0a1d5c07bc343cb9f90dfacb503e7766fe2673a399da99d659e166a2234055da_prof);

    }

    // line 12
    public function block_head_stylesheets($context, array $blocks = array())
    {
        $__internal_bce571affef361db821184b16d87c91688a4d0d9db206f901116bf03e630485d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bce571affef361db821184b16d87c91688a4d0d9db206f901116bf03e630485d->enter($__internal_bce571affef361db821184b16d87c91688a4d0d9db206f901116bf03e630485d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

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
        
        $__internal_bce571affef361db821184b16d87c91688a4d0d9db206f901116bf03e630485d->leave($__internal_bce571affef361db821184b16d87c91688a4d0d9db206f901116bf03e630485d_prof);

    }

    // line 23
    public function block_head_favicon($context, array $blocks = array())
    {
        $__internal_0e621821ba1444535ded4bb73a87c23c0a877c2dadda5ca283525c85b29c8240 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e621821ba1444535ded4bb73a87c23c0a877c2dadda5ca283525c85b29c8240->enter($__internal_0e621821ba1444535ded4bb73a87c23c0a877c2dadda5ca283525c85b29c8240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

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
        
        $__internal_0e621821ba1444535ded4bb73a87c23c0a877c2dadda5ca283525c85b29c8240->leave($__internal_0e621821ba1444535ded4bb73a87c23c0a877c2dadda5ca283525c85b29c8240_prof);

    }

    // line 28
    public function block_head_javascript($context, array $blocks = array())
    {
        $__internal_205f0f1dbd64e3975978bd5bfb039d737c4c2d6c6cad041862b92130f91010bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_205f0f1dbd64e3975978bd5bfb039d737c4c2d6c6cad041862b92130f91010bc->enter($__internal_205f0f1dbd64e3975978bd5bfb039d737c4c2d6c6cad041862b92130f91010bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

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
        
        $__internal_205f0f1dbd64e3975978bd5bfb039d737c4c2d6c6cad041862b92130f91010bc->leave($__internal_205f0f1dbd64e3975978bd5bfb039d737c4c2d6c6cad041862b92130f91010bc_prof);

    }

    // line 29
    public function block_adminlte_options($context, array $blocks = array())
    {
        $__internal_724d41e3024556c28ed61661f0c56a62c39f99bcd9bb2c9b5f205a250f7773a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_724d41e3024556c28ed61661f0c56a62c39f99bcd9bb2c9b5f205a250f7773a3->enter($__internal_724d41e3024556c28ed61661f0c56a62c39f99bcd9bb2c9b5f205a250f7773a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

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
        
        $__internal_724d41e3024556c28ed61661f0c56a62c39f99bcd9bb2c9b5f205a250f7773a3->leave($__internal_724d41e3024556c28ed61661f0c56a62c39f99bcd9bb2c9b5f205a250f7773a3_prof);

    }

    // line 57
    public function block_body($context, array $blocks = array())
    {
        $__internal_dd4adbaf5355058031206c1d854e964dc5c6c08f842eed97860323bcb86a98ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd4adbaf5355058031206c1d854e964dc5c6c08f842eed97860323bcb86a98ec->enter($__internal_dd4adbaf5355058031206c1d854e964dc5c6c08f842eed97860323bcb86a98ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_dd4adbaf5355058031206c1d854e964dc5c6c08f842eed97860323bcb86a98ec->leave($__internal_dd4adbaf5355058031206c1d854e964dc5c6c08f842eed97860323bcb86a98ec_prof);

    }

    // line 58
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_3166da3677378245cb9870691d3929964d97942d08e88454dd7da656438e9578 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3166da3677378245cb9870691d3929964d97942d08e88454dd7da656438e9578->enter($__internal_3166da3677378245cb9870691d3929964d97942d08e88454dd7da656438e9578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_3166da3677378245cb9870691d3929964d97942d08e88454dd7da656438e9578->leave($__internal_3166da3677378245cb9870691d3929964d97942d08e88454dd7da656438e9578_prof);

    }

    public function block_body_class($context, array $blocks = array())
    {
        $__internal_b91429adaa84a1bb7edc582b9dd9dac4b0207a8d41c48d9e031035eda25849c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b91429adaa84a1bb7edc582b9dd9dac4b0207a8d41c48d9e031035eda25849c4->enter($__internal_b91429adaa84a1bb7edc582b9dd9dac4b0207a8d41c48d9e031035eda25849c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        
        $__internal_b91429adaa84a1bb7edc582b9dd9dac4b0207a8d41c48d9e031035eda25849c4->leave($__internal_b91429adaa84a1bb7edc582b9dd9dac4b0207a8d41c48d9e031035eda25849c4_prof);

    }

    // line 60
    public function block_wrapper($context, array $blocks = array())
    {
        $__internal_490c4e059bc38a91c0b925dc078871b22dc33c0eddd4a5f64e89bf275ae843c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_490c4e059bc38a91c0b925dc078871b22dc33c0eddd4a5f64e89bf275ae843c8->enter($__internal_490c4e059bc38a91c0b925dc078871b22dc33c0eddd4a5f64e89bf275ae843c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

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
        
        $__internal_490c4e059bc38a91c0b925dc078871b22dc33c0eddd4a5f64e89bf275ae843c8->leave($__internal_490c4e059bc38a91c0b925dc078871b22dc33c0eddd4a5f64e89bf275ae843c8_prof);

    }

    // line 62
    public function block_header($context, array $blocks = array())
    {
        $__internal_9218d388aa6d4b0751898cc27f1bd7698f18d502031f6f0aea269bb1c9a0a969 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9218d388aa6d4b0751898cc27f1bd7698f18d502031f6f0aea269bb1c9a0a969->enter($__internal_9218d388aa6d4b0751898cc27f1bd7698f18d502031f6f0aea269bb1c9a0a969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_9218d388aa6d4b0751898cc27f1bd7698f18d502031f6f0aea269bb1c9a0a969->leave($__internal_9218d388aa6d4b0751898cc27f1bd7698f18d502031f6f0aea269bb1c9a0a969_prof);

    }

    // line 69
    public function block_header_logo($context, array $blocks = array())
    {
        $__internal_23f02ce7e9af11d055754ebd0f56941dbf04302c8ba30bab6c96a55759ddaf76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23f02ce7e9af11d055754ebd0f56941dbf04302c8ba30bab6c96a55759ddaf76->enter($__internal_23f02ce7e9af11d055754ebd0f56941dbf04302c8ba30bab6c96a55759ddaf76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

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
        
        $__internal_23f02ce7e9af11d055754ebd0f56941dbf04302c8ba30bab6c96a55759ddaf76->leave($__internal_23f02ce7e9af11d055754ebd0f56941dbf04302c8ba30bab6c96a55759ddaf76_prof);

    }

    // line 77
    public function block_header_custom_menu($context, array $blocks = array())
    {
        $__internal_3669603f10c53bfb138419b5d3f84710c30ba34494dad14e528ffe188821757b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3669603f10c53bfb138419b5d3f84710c30ba34494dad14e528ffe188821757b->enter($__internal_3669603f10c53bfb138419b5d3f84710c30ba34494dad14e528ffe188821757b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

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
        
        $__internal_3669603f10c53bfb138419b5d3f84710c30ba34494dad14e528ffe188821757b->leave($__internal_3669603f10c53bfb138419b5d3f84710c30ba34494dad14e528ffe188821757b_prof);

    }

    // line 80
    public function block_user_menu($context, array $blocks = array())
    {
        $__internal_3fd5a851f1d21401a6f285b97eb068d35e6c6edf50080b16ca64b6543f04f51e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fd5a851f1d21401a6f285b97eb068d35e6c6edf50080b16ca64b6543f04f51e->enter($__internal_3fd5a851f1d21401a6f285b97eb068d35e6c6edf50080b16ca64b6543f04f51e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

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
        
        $__internal_3fd5a851f1d21401a6f285b97eb068d35e6c6edf50080b16ca64b6543f04f51e->leave($__internal_3fd5a851f1d21401a6f285b97eb068d35e6c6edf50080b16ca64b6543f04f51e_prof);

    }

    // line 98
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_fea2d66f958d188f46c40980cd118e0578227cd14290d8cc275f503b909272b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fea2d66f958d188f46c40980cd118e0578227cd14290d8cc275f503b909272b6->enter($__internal_fea2d66f958d188f46c40980cd118e0578227cd14290d8cc275f503b909272b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 99
        echo "                <section class=\"sidebar\">
                    ";
        // line 100
        $this->displayBlock('main_menu_wrapper', $context, $blocks);
        // line 107
        echo "                </section>
            ";
        
        $__internal_fea2d66f958d188f46c40980cd118e0578227cd14290d8cc275f503b909272b6->leave($__internal_fea2d66f958d188f46c40980cd118e0578227cd14290d8cc275f503b909272b6_prof);

    }

    // line 100
    public function block_main_menu_wrapper($context, array $blocks = array())
    {
        $__internal_aae7a5cbf42b4d162aea8e39fd6afa04e5d8ae7bb03eb299a53b19b3a5b0f275 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aae7a5cbf42b4d162aea8e39fd6afa04e5d8ae7bb03eb299a53b19b3a5b0f275->enter($__internal_aae7a5cbf42b4d162aea8e39fd6afa04e5d8ae7bb03eb299a53b19b3a5b0f275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        // line 101
        echo "                        ";
        echo twig_include($this->env, $context, array(0 => ((        // line 102
array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "menu", array())) : ("")), 1 => $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.templates.menu"), 2 => "@EasyAdmin/default/menu.html.twig"));
        // line 105
        echo "
                    ";
        
        $__internal_aae7a5cbf42b4d162aea8e39fd6afa04e5d8ae7bb03eb299a53b19b3a5b0f275->leave($__internal_aae7a5cbf42b4d162aea8e39fd6afa04e5d8ae7bb03eb299a53b19b3a5b0f275_prof);

    }

    // line 112
    public function block_content($context, array $blocks = array())
    {
        $__internal_7876582521cfbc53e84614a2df2a695fac38c8faddbe41b32fca7f36920e472b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7876582521cfbc53e84614a2df2a695fac38c8faddbe41b32fca7f36920e472b->enter($__internal_7876582521cfbc53e84614a2df2a695fac38c8faddbe41b32fca7f36920e472b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_7876582521cfbc53e84614a2df2a695fac38c8faddbe41b32fca7f36920e472b->leave($__internal_7876582521cfbc53e84614a2df2a695fac38c8faddbe41b32fca7f36920e472b_prof);

    }

    // line 113
    public function block_flash_messages($context, array $blocks = array())
    {
        $__internal_f7bf85c1001a4a8297d106b7d65b0e94390bb47fb1c6138eaa9f37e9b67359be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7bf85c1001a4a8297d106b7d65b0e94390bb47fb1c6138eaa9f37e9b67359be->enter($__internal_f7bf85c1001a4a8297d106b7d65b0e94390bb47fb1c6138eaa9f37e9b67359be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        // line 114
        echo "                    ";
        echo twig_include($this->env, $context, ((array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "flash_messages", array())) : ("@EasyAdmin/default/flash_messages.html.twig")));
        echo "
                ";
        
        $__internal_f7bf85c1001a4a8297d106b7d65b0e94390bb47fb1c6138eaa9f37e9b67359be->leave($__internal_f7bf85c1001a4a8297d106b7d65b0e94390bb47fb1c6138eaa9f37e9b67359be_prof);

    }

    // line 118
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_ffef140cf9cdf495dde932c9b374de9b4605b1b29b50ebfe4b6c38c4be495d7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffef140cf9cdf495dde932c9b374de9b4605b1b29b50ebfe4b6c38c4be495d7c->enter($__internal_ffef140cf9cdf495dde932c9b374de9b4605b1b29b50ebfe4b6c38c4be495d7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 119
        echo "                    <h1 class=\"title\">";
        $this->displayBlock('content_title', $context, $blocks);
        echo "</h1>
                ";
        
        $__internal_ffef140cf9cdf495dde932c9b374de9b4605b1b29b50ebfe4b6c38c4be495d7c->leave($__internal_ffef140cf9cdf495dde932c9b374de9b4605b1b29b50ebfe4b6c38c4be495d7c_prof);

    }

    public function block_content_title($context, array $blocks = array())
    {
        $__internal_1b9f89d185eb09c9c556bacc6be275690d99140dc7458c14d098236f76448ca9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b9f89d185eb09c9c556bacc6be275690d99140dc7458c14d098236f76448ca9->enter($__internal_1b9f89d185eb09c9c556bacc6be275690d99140dc7458c14d098236f76448ca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        
        $__internal_1b9f89d185eb09c9c556bacc6be275690d99140dc7458c14d098236f76448ca9->leave($__internal_1b9f89d185eb09c9c556bacc6be275690d99140dc7458c14d098236f76448ca9_prof);

    }

    // line 121
    public function block_content_help($context, array $blocks = array())
    {
        $__internal_08501b5842c2ff6d1b1dd2d14ac332b2ce583b9ed99fbae86828fb259c668d67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08501b5842c2ff6d1b1dd2d14ac332b2ce583b9ed99fbae86828fb259c668d67->enter($__internal_08501b5842c2ff6d1b1dd2d14ac332b2ce583b9ed99fbae86828fb259c668d67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

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
        
        $__internal_08501b5842c2ff6d1b1dd2d14ac332b2ce583b9ed99fbae86828fb259c668d67->leave($__internal_08501b5842c2ff6d1b1dd2d14ac332b2ce583b9ed99fbae86828fb259c668d67_prof);

    }

    // line 133
    public function block_main($context, array $blocks = array())
    {
        $__internal_e6050365734cc44f86d46a1c3c47e9a60a3613dfebc755faa5496be4f8730aa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6050365734cc44f86d46a1c3c47e9a60a3613dfebc755faa5496be4f8730aa5->enter($__internal_e6050365734cc44f86d46a1c3c47e9a60a3613dfebc755faa5496be4f8730aa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_e6050365734cc44f86d46a1c3c47e9a60a3613dfebc755faa5496be4f8730aa5->leave($__internal_e6050365734cc44f86d46a1c3c47e9a60a3613dfebc755faa5496be4f8730aa5_prof);

    }

    // line 140
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_15c74f5ea31b0fa96e5cc843c3d13b1bde5b6601db1b4da5d799eca2f0c1afbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15c74f5ea31b0fa96e5cc843c3d13b1bde5b6601db1b4da5d799eca2f0c1afbf->enter($__internal_15c74f5ea31b0fa96e5cc843c3d13b1bde5b6601db1b4da5d799eca2f0c1afbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        
        $__internal_15c74f5ea31b0fa96e5cc843c3d13b1bde5b6601db1b4da5d799eca2f0c1afbf->leave($__internal_15c74f5ea31b0fa96e5cc843c3d13b1bde5b6601db1b4da5d799eca2f0c1afbf_prof);

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
