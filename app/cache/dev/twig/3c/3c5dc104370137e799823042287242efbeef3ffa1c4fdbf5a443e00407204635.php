<?php

/* @App/Group/show.html.twig */
class __TwigTemplate_3fcb4e4662f3e5ea4e80dfb38f693e042a5e6c5a2cb0b07361f8d0b3dcca1d71 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@App/Group/show.html.twig", 1);
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
        $__internal_22e6e10e7cbe9f6fe3e560a4e5edd17aa19bf4f33cff2b183d848058d820ae9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22e6e10e7cbe9f6fe3e560a4e5edd17aa19bf4f33cff2b183d848058d820ae9c->enter($__internal_22e6e10e7cbe9f6fe3e560a4e5edd17aa19bf4f33cff2b183d848058d820ae9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22e6e10e7cbe9f6fe3e560a4e5edd17aa19bf4f33cff2b183d848058d820ae9c->leave($__internal_22e6e10e7cbe9f6fe3e560a4e5edd17aa19bf4f33cff2b183d848058d820ae9c_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_433eed27df4e243c65d8735893b08d8a3328e2c8a78d9e0f18122a065ca9908b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_433eed27df4e243c65d8735893b08d8a3328e2c8a78d9e0f18122a065ca9908b->enter($__internal_433eed27df4e243c65d8735893b08d8a3328e2c8a78d9e0f18122a065ca9908b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_433eed27df4e243c65d8735893b08d8a3328e2c8a78d9e0f18122a065ca9908b->leave($__internal_433eed27df4e243c65d8735893b08d8a3328e2c8a78d9e0f18122a065ca9908b_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_26c444b2784d9e91f5fa5fd3eae1c67c50f33e39e9a12e2698e4db3db0a87e13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26c444b2784d9e91f5fa5fd3eae1c67c50f33e39e9a12e2698e4db3db0a87e13->enter($__internal_26c444b2784d9e91f5fa5fd3eae1c67c50f33e39e9a12e2698e4db3db0a87e13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "\t";
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@App/Group/show.html.twig", 4)->display($context);
        
        $__internal_26c444b2784d9e91f5fa5fd3eae1c67c50f33e39e9a12e2698e4db3db0a87e13->leave($__internal_26c444b2784d9e91f5fa5fd3eae1c67c50f33e39e9a12e2698e4db3db0a87e13_prof);

    }

    public function getTemplateName()
    {
        return "@App/Group/show.html.twig";
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
{% endblock body %}", "@App/Group/show.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\src\\AppBundle\\Resources\\views\\Group\\show.html.twig");
    }
}
