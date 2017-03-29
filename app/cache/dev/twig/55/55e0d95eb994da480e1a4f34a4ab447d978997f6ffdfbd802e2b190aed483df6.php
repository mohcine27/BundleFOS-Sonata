<?php

/* @App/layout.html.twig */
class __TwigTemplate_35a45952a5f3d44b1fdaafdd77431aadbe7e9d7ba48f1a59a0bd52a55c088af8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@App/layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c5968530eca0f8f0c944eddc140659751586c379c92c388b2c1a7a429fa4253b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5968530eca0f8f0c944eddc140659751586c379c92c388b2c1a7a429fa4253b->enter($__internal_c5968530eca0f8f0c944eddc140659751586c379c92c388b2c1a7a429fa4253b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5968530eca0f8f0c944eddc140659751586c379c92c388b2c1a7a429fa4253b->leave($__internal_c5968530eca0f8f0c944eddc140659751586c379c92c388b2c1a7a429fa4253b_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_0413ad53a3bb2d4919343ffad8b0401f7a09484d56184bf35fcf958be1c249de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0413ad53a3bb2d4919343ffad8b0401f7a09484d56184bf35fcf958be1c249de->enter($__internal_0413ad53a3bb2d4919343ffad8b0401f7a09484d56184bf35fcf958be1c249de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Demo Application";
        
        $__internal_0413ad53a3bb2d4919343ffad8b0401f7a09484d56184bf35fcf958be1c249de->leave($__internal_0413ad53a3bb2d4919343ffad8b0401f7a09484d56184bf35fcf958be1c249de_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_3933cb5d93cf3b22853141b72fa4a8c5b835e942aa88b350ab7d465ef7481480 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3933cb5d93cf3b22853141b72fa4a8c5b835e942aa88b350ab7d465ef7481480->enter($__internal_3933cb5d93cf3b22853141b72fa4a8c5b835e942aa88b350ab7d465ef7481480_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_3933cb5d93cf3b22853141b72fa4a8c5b835e942aa88b350ab7d465ef7481480->leave($__internal_3933cb5d93cf3b22853141b72fa4a8c5b835e942aa88b350ab7d465ef7481480_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ec7a7e49fd54ab5a49337e30b2561acd059ebe3b7bff804131c329815fa455f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec7a7e49fd54ab5a49337e30b2561acd059ebe3b7bff804131c329815fa455f5->enter($__internal_ec7a7e49fd54ab5a49337e30b2561acd059ebe3b7bff804131c329815fa455f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        
        $__internal_ec7a7e49fd54ab5a49337e30b2561acd059ebe3b7bff804131c329815fa455f5->leave($__internal_ec7a7e49fd54ab5a49337e30b2561acd059ebe3b7bff804131c329815fa455f5_prof);

    }

    public function getTemplateName()
    {
        return "@App/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 5,  48 => 4,  36 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block title %}Demo Application{% endblock %}

{% block content %}
    {% block fos_user_content %}{% endblock %}
{% endblock %}", "@App/layout.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\src\\AppBundle\\Resources\\views\\layout.html.twig");
    }
}
