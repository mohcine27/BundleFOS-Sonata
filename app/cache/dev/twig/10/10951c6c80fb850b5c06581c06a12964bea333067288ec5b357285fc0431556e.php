<?php

/* AppBundle:Group:show.html.twig */
class __TwigTemplate_e0308f4018a667e3662a01971ea51ec38c196ae37609dc66d99911a54ab51dd6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:Group:show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6d9f4b7a481c4f8b4243b59c3e5c264a052ade1ccc09581e2392007cfc2c2f09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d9f4b7a481c4f8b4243b59c3e5c264a052ade1ccc09581e2392007cfc2c2f09->enter($__internal_6d9f4b7a481c4f8b4243b59c3e5c264a052ade1ccc09581e2392007cfc2c2f09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d9f4b7a481c4f8b4243b59c3e5c264a052ade1ccc09581e2392007cfc2c2f09->leave($__internal_6d9f4b7a481c4f8b4243b59c3e5c264a052ade1ccc09581e2392007cfc2c2f09_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_a7c2265c7d1a3b345a707aa56108fb5e9da5108021ebe3a9e10459d7bd11e1af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7c2265c7d1a3b345a707aa56108fb5e9da5108021ebe3a9e10459d7bd11e1af->enter($__internal_a7c2265c7d1a3b345a707aa56108fb5e9da5108021ebe3a9e10459d7bd11e1af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_a7c2265c7d1a3b345a707aa56108fb5e9da5108021ebe3a9e10459d7bd11e1af->leave($__internal_a7c2265c7d1a3b345a707aa56108fb5e9da5108021ebe3a9e10459d7bd11e1af_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7d38ef1353f3f4f624a238e0220c2d995491a7fc93450cf3e460bcbe2cec7abc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d38ef1353f3f4f624a238e0220c2d995491a7fc93450cf3e460bcbe2cec7abc->enter($__internal_7d38ef1353f3f4f624a238e0220c2d995491a7fc93450cf3e460bcbe2cec7abc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "\t";
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "AppBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_7d38ef1353f3f4f624a238e0220c2d995491a7fc93450cf3e460bcbe2cec7abc->leave($__internal_7d38ef1353f3f4f624a238e0220c2d995491a7fc93450cf3e460bcbe2cec7abc_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Group:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 4,  41 => 3,  35 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}
{% block body %}
{% block fos_user_content %}
\t{% include \"FOSUserBundle:Group:show_content.html.twig\" %}
{% endblock fos_user_content %}
{% endblock body %}", "AppBundle:Group:show.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\src\\AppBundle/Resources/views/Group/show.html.twig");
    }
}
