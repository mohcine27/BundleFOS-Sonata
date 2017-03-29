<?php

/* EasyAdminBundle:default:layout.html.twig */
class __TwigTemplate_871e7fe7ce52457efa88c82ac67587fbdb20b967900aec46ce0552309f29b0b4 extends Twig_Template
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
        $__internal_2ce3fc16bc7d2ef62d9d62465d3ab26391a5acf5fbb5e25794c0ae2d9201a736 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ce3fc16bc7d2ef62d9d62465d3ab26391a5acf5fbb5e25794c0ae2d9201a736->enter($__internal_2ce3fc16bc7d2ef62d9d62465d3ab26391a5acf5fbb5e25794c0ae2d9201a736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:layout.html.twig"));

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
        
        $__internal_2ce3fc16bc7d2ef62d9d62465d3ab26391a5acf5fbb5e25794c0ae2d9201a736->leave($__internal_2ce3fc16bc7d2ef62d9d62465d3ab26391a5acf5fbb5e25794c0ae2d9201a736_prof);

    }

    // line 10
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_1d840631f876ca49a8e86d60611ce114a620c7b014158ad972f532eb3e1e3ee5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d840631f876ca49a8e86d60611ce114a620c7b014158ad972f532eb3e1e3ee5->enter($__internal_1d840631f876ca49a8e86d60611ce114a620c7b014158ad972f532eb3e1e3ee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo strip_tags(        $this->renderBlock("content_title", $context, $blocks));
        
        $__internal_1d840631f876ca49a8e86d60611ce114a620c7b014158ad972f532eb3e1e3ee5->leave($__internal_1d840631f876ca49a8e86d60611ce114a620c7b014158ad972f532eb3e1e3ee5_prof);

    }

    // line 12
    public function block_head_stylesheets($context, array $blocks = array())
    {
        $__internal_22bdd3717ad205c2b1a192f01f228a792eefbf4ec63c89198bcd24197f6e637b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22bdd3717ad205c2b1a192f01f228a792eefbf4ec63c89198bcd24197f6e637b->enter($__internal_22bdd3717ad205c2b1a192f01f228a792eefbf4ec63c89198bcd24197f6e637b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

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
        
        $__internal_22bdd3717ad205c2b1a192f01f228a792eefbf4ec63c89198bcd24197f6e637b->leave($__internal_22bdd3717ad205c2b1a192f01f228a792eefbf4ec63c89198bcd24197f6e637b_prof);

    }

    // line 23
    public function block_head_favicon($context, array $blocks = array())
    {
        $__internal_d68a2cfe0dffd1f442595dde0aa7d6ab979839653be7815fbb175aaf7af2d757 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d68a2cfe0dffd1f442595dde0aa7d6ab979839653be7815fbb175aaf7af2d757->enter($__internal_d68a2cfe0dffd1f442595dde0aa7d6ab979839653be7815fbb175aaf7af2d757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

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
        
        $__internal_d68a2cfe0dffd1f442595dde0aa7d6ab979839653be7815fbb175aaf7af2d757->leave($__internal_d68a2cfe0dffd1f442595dde0aa7d6ab979839653be7815fbb175aaf7af2d757_prof);

    }

    // line 28
    public function block_head_javascript($context, array $blocks = array())
    {
        $__internal_523f842973d3ab9c6ee884cc8f2ea6ac02d731a692f8b3ea3fdaa4c2d96c7b6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_523f842973d3ab9c6ee884cc8f2ea6ac02d731a692f8b3ea3fdaa4c2d96c7b6c->enter($__internal_523f842973d3ab9c6ee884cc8f2ea6ac02d731a692f8b3ea3fdaa4c2d96c7b6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

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
        
        $__internal_523f842973d3ab9c6ee884cc8f2ea6ac02d731a692f8b3ea3fdaa4c2d96c7b6c->leave($__internal_523f842973d3ab9c6ee884cc8f2ea6ac02d731a692f8b3ea3fdaa4c2d96c7b6c_prof);

    }

    // line 29
    public function block_adminlte_options($context, array $blocks = array())
    {
        $__internal_598ad95c77d3161dca0900bb68b06eac4f79eca0c3fe26d39b4b237cda2bbaa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_598ad95c77d3161dca0900bb68b06eac4f79eca0c3fe26d39b4b237cda2bbaa4->enter($__internal_598ad95c77d3161dca0900bb68b06eac4f79eca0c3fe26d39b4b237cda2bbaa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

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
        
        $__internal_598ad95c77d3161dca0900bb68b06eac4f79eca0c3fe26d39b4b237cda2bbaa4->leave($__internal_598ad95c77d3161dca0900bb68b06eac4f79eca0c3fe26d39b4b237cda2bbaa4_prof);

    }

    // line 57
    public function block_body($context, array $blocks = array())
    {
        $__internal_e440bf2f61fd37aa46c095a5244828a1de0ca673dcb70b75f3f259cecee78909 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e440bf2f61fd37aa46c095a5244828a1de0ca673dcb70b75f3f259cecee78909->enter($__internal_e440bf2f61fd37aa46c095a5244828a1de0ca673dcb70b75f3f259cecee78909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e440bf2f61fd37aa46c095a5244828a1de0ca673dcb70b75f3f259cecee78909->leave($__internal_e440bf2f61fd37aa46c095a5244828a1de0ca673dcb70b75f3f259cecee78909_prof);

    }

    // line 58
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_44a85b27bf70ff8a7a091e432eea705def23dcc0938710f46ba1ca3f253312bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44a85b27bf70ff8a7a091e432eea705def23dcc0938710f46ba1ca3f253312bd->enter($__internal_44a85b27bf70ff8a7a091e432eea705def23dcc0938710f46ba1ca3f253312bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_44a85b27bf70ff8a7a091e432eea705def23dcc0938710f46ba1ca3f253312bd->leave($__internal_44a85b27bf70ff8a7a091e432eea705def23dcc0938710f46ba1ca3f253312bd_prof);

    }

    public function block_body_class($context, array $blocks = array())
    {
        $__internal_f0d2222c80233ea4c8506625bb95d50075d84f871802430ea6452427426901b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0d2222c80233ea4c8506625bb95d50075d84f871802430ea6452427426901b5->enter($__internal_f0d2222c80233ea4c8506625bb95d50075d84f871802430ea6452427426901b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        
        $__internal_f0d2222c80233ea4c8506625bb95d50075d84f871802430ea6452427426901b5->leave($__internal_f0d2222c80233ea4c8506625bb95d50075d84f871802430ea6452427426901b5_prof);

    }

    // line 60
    public function block_wrapper($context, array $blocks = array())
    {
        $__internal_0bbf620d5afb97f3552362cfe9707abbda3aebe40c3a9298435b6998a519496c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bbf620d5afb97f3552362cfe9707abbda3aebe40c3a9298435b6998a519496c->enter($__internal_0bbf620d5afb97f3552362cfe9707abbda3aebe40c3a9298435b6998a519496c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

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
        
        $__internal_0bbf620d5afb97f3552362cfe9707abbda3aebe40c3a9298435b6998a519496c->leave($__internal_0bbf620d5afb97f3552362cfe9707abbda3aebe40c3a9298435b6998a519496c_prof);

    }

    // line 62
    public function block_header($context, array $blocks = array())
    {
        $__internal_0a3be48f31f24574d7f260e46af1e4212da1e7a7a42f0e1a0fa8d05d6b0e3817 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a3be48f31f24574d7f260e46af1e4212da1e7a7a42f0e1a0fa8d05d6b0e3817->enter($__internal_0a3be48f31f24574d7f260e46af1e4212da1e7a7a42f0e1a0fa8d05d6b0e3817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_0a3be48f31f24574d7f260e46af1e4212da1e7a7a42f0e1a0fa8d05d6b0e3817->leave($__internal_0a3be48f31f24574d7f260e46af1e4212da1e7a7a42f0e1a0fa8d05d6b0e3817_prof);

    }

    // line 69
    public function block_header_logo($context, array $blocks = array())
    {
        $__internal_8fa14b17e67a2e3f8d779fd9fe3bc0ceb9c150d153c767f0ba63bb3fc7a46a67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fa14b17e67a2e3f8d779fd9fe3bc0ceb9c150d153c767f0ba63bb3fc7a46a67->enter($__internal_8fa14b17e67a2e3f8d779fd9fe3bc0ceb9c150d153c767f0ba63bb3fc7a46a67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

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
        
        $__internal_8fa14b17e67a2e3f8d779fd9fe3bc0ceb9c150d153c767f0ba63bb3fc7a46a67->leave($__internal_8fa14b17e67a2e3f8d779fd9fe3bc0ceb9c150d153c767f0ba63bb3fc7a46a67_prof);

    }

    // line 77
    public function block_header_custom_menu($context, array $blocks = array())
    {
        $__internal_d5320cdb6442fbb445af4fb39ebc29bf1b94b0bbe618cb3b8c2829d1dd3468f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5320cdb6442fbb445af4fb39ebc29bf1b94b0bbe618cb3b8c2829d1dd3468f7->enter($__internal_d5320cdb6442fbb445af4fb39ebc29bf1b94b0bbe618cb3b8c2829d1dd3468f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

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
        
        $__internal_d5320cdb6442fbb445af4fb39ebc29bf1b94b0bbe618cb3b8c2829d1dd3468f7->leave($__internal_d5320cdb6442fbb445af4fb39ebc29bf1b94b0bbe618cb3b8c2829d1dd3468f7_prof);

    }

    // line 80
    public function block_user_menu($context, array $blocks = array())
    {
        $__internal_f1a2854118c0612498bb44de69963218d755c8a8a2aeeec50799a23af7f54387 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1a2854118c0612498bb44de69963218d755c8a8a2aeeec50799a23af7f54387->enter($__internal_f1a2854118c0612498bb44de69963218d755c8a8a2aeeec50799a23af7f54387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

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
        
        $__internal_f1a2854118c0612498bb44de69963218d755c8a8a2aeeec50799a23af7f54387->leave($__internal_f1a2854118c0612498bb44de69963218d755c8a8a2aeeec50799a23af7f54387_prof);

    }

    // line 98
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_2a8899e7afcce56cba92a06a8447310869d5cdf89fdce722532e2189324e1764 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a8899e7afcce56cba92a06a8447310869d5cdf89fdce722532e2189324e1764->enter($__internal_2a8899e7afcce56cba92a06a8447310869d5cdf89fdce722532e2189324e1764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 99
        echo "                <section class=\"sidebar\">
                    ";
        // line 100
        $this->displayBlock('main_menu_wrapper', $context, $blocks);
        // line 107
        echo "                </section>
            ";
        
        $__internal_2a8899e7afcce56cba92a06a8447310869d5cdf89fdce722532e2189324e1764->leave($__internal_2a8899e7afcce56cba92a06a8447310869d5cdf89fdce722532e2189324e1764_prof);

    }

    // line 100
    public function block_main_menu_wrapper($context, array $blocks = array())
    {
        $__internal_570956024bae4dccfdf12032ae21cee6d0d96f9ff822b9ff456ed6721cba2b68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_570956024bae4dccfdf12032ae21cee6d0d96f9ff822b9ff456ed6721cba2b68->enter($__internal_570956024bae4dccfdf12032ae21cee6d0d96f9ff822b9ff456ed6721cba2b68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        // line 101
        echo "                        ";
        echo twig_include($this->env, $context, array(0 => ((        // line 102
array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "menu", array())) : ("")), 1 => $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.templates.menu"), 2 => "@EasyAdmin/default/menu.html.twig"));
        // line 105
        echo "
                    ";
        
        $__internal_570956024bae4dccfdf12032ae21cee6d0d96f9ff822b9ff456ed6721cba2b68->leave($__internal_570956024bae4dccfdf12032ae21cee6d0d96f9ff822b9ff456ed6721cba2b68_prof);

    }

    // line 112
    public function block_content($context, array $blocks = array())
    {
        $__internal_c0409373acfae6e2ab05a3a424786de3f6cbf6e8c2e97373858ac47f9d3c8411 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0409373acfae6e2ab05a3a424786de3f6cbf6e8c2e97373858ac47f9d3c8411->enter($__internal_c0409373acfae6e2ab05a3a424786de3f6cbf6e8c2e97373858ac47f9d3c8411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_c0409373acfae6e2ab05a3a424786de3f6cbf6e8c2e97373858ac47f9d3c8411->leave($__internal_c0409373acfae6e2ab05a3a424786de3f6cbf6e8c2e97373858ac47f9d3c8411_prof);

    }

    // line 113
    public function block_flash_messages($context, array $blocks = array())
    {
        $__internal_b9ea8f1a3f22a2ecc2449fe1c3969225c8095a675d384ae2c42237a4287f2c69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9ea8f1a3f22a2ecc2449fe1c3969225c8095a675d384ae2c42237a4287f2c69->enter($__internal_b9ea8f1a3f22a2ecc2449fe1c3969225c8095a675d384ae2c42237a4287f2c69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        // line 114
        echo "                    ";
        echo twig_include($this->env, $context, ((array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "flash_messages", array())) : ("@EasyAdmin/default/flash_messages.html.twig")));
        echo "
                ";
        
        $__internal_b9ea8f1a3f22a2ecc2449fe1c3969225c8095a675d384ae2c42237a4287f2c69->leave($__internal_b9ea8f1a3f22a2ecc2449fe1c3969225c8095a675d384ae2c42237a4287f2c69_prof);

    }

    // line 118
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_8fff392afa4d31b16ded089cf6dcc095f5d047a0ab2ef9a56fa6be43f0fcd70f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fff392afa4d31b16ded089cf6dcc095f5d047a0ab2ef9a56fa6be43f0fcd70f->enter($__internal_8fff392afa4d31b16ded089cf6dcc095f5d047a0ab2ef9a56fa6be43f0fcd70f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 119
        echo "                    <h1 class=\"title\">";
        $this->displayBlock('content_title', $context, $blocks);
        echo "</h1>
                ";
        
        $__internal_8fff392afa4d31b16ded089cf6dcc095f5d047a0ab2ef9a56fa6be43f0fcd70f->leave($__internal_8fff392afa4d31b16ded089cf6dcc095f5d047a0ab2ef9a56fa6be43f0fcd70f_prof);

    }

    public function block_content_title($context, array $blocks = array())
    {
        $__internal_19013db661c77e60185a6bdbe2fb7867da86e2fc2dea9b4c69a80b04fea5ffc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19013db661c77e60185a6bdbe2fb7867da86e2fc2dea9b4c69a80b04fea5ffc0->enter($__internal_19013db661c77e60185a6bdbe2fb7867da86e2fc2dea9b4c69a80b04fea5ffc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        
        $__internal_19013db661c77e60185a6bdbe2fb7867da86e2fc2dea9b4c69a80b04fea5ffc0->leave($__internal_19013db661c77e60185a6bdbe2fb7867da86e2fc2dea9b4c69a80b04fea5ffc0_prof);

    }

    // line 121
    public function block_content_help($context, array $blocks = array())
    {
        $__internal_f45b2df3895ad0c840f0f2139ac88cb0cd546dad082dadbab650c6d8bfba9203 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f45b2df3895ad0c840f0f2139ac88cb0cd546dad082dadbab650c6d8bfba9203->enter($__internal_f45b2df3895ad0c840f0f2139ac88cb0cd546dad082dadbab650c6d8bfba9203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

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
        
        $__internal_f45b2df3895ad0c840f0f2139ac88cb0cd546dad082dadbab650c6d8bfba9203->leave($__internal_f45b2df3895ad0c840f0f2139ac88cb0cd546dad082dadbab650c6d8bfba9203_prof);

    }

    // line 133
    public function block_main($context, array $blocks = array())
    {
        $__internal_1330b4b41d56d25d6f1baae17d6cddfcc0f42ec009e62cf9bb1636a9643ea5c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1330b4b41d56d25d6f1baae17d6cddfcc0f42ec009e62cf9bb1636a9643ea5c7->enter($__internal_1330b4b41d56d25d6f1baae17d6cddfcc0f42ec009e62cf9bb1636a9643ea5c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_1330b4b41d56d25d6f1baae17d6cddfcc0f42ec009e62cf9bb1636a9643ea5c7->leave($__internal_1330b4b41d56d25d6f1baae17d6cddfcc0f42ec009e62cf9bb1636a9643ea5c7_prof);

    }

    // line 140
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_0d03e98e23212ecb03dff03deed75acea3517030ca603deeef4cc31c550e5ea6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d03e98e23212ecb03dff03deed75acea3517030ca603deeef4cc31c550e5ea6->enter($__internal_0d03e98e23212ecb03dff03deed75acea3517030ca603deeef4cc31c550e5ea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        
        $__internal_0d03e98e23212ecb03dff03deed75acea3517030ca603deeef4cc31c550e5ea6->leave($__internal_0d03e98e23212ecb03dff03deed75acea3517030ca603deeef4cc31c550e5ea6_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:layout.html.twig";
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
", "EasyAdminBundle:default:layout.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\vendor\\javiereguiluz\\easyadmin-bundle/Resources/views/default/layout.html.twig");
    }
}
