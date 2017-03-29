<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_7a84c76196ffd65f8b422b5a5cdaed5e2970ca3bef2bbddaf1c2e736f931131b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FOSUserBundle::layout.html.twig", 1);
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
        $__internal_b1b3762a40af1a428c4fa6bb51496bfa7855b1b5d464c4db19adde5f74831c7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1b3762a40af1a428c4fa6bb51496bfa7855b1b5d464c4db19adde5f74831c7c->enter($__internal_b1b3762a40af1a428c4fa6bb51496bfa7855b1b5d464c4db19adde5f74831c7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1b3762a40af1a428c4fa6bb51496bfa7855b1b5d464c4db19adde5f74831c7c->leave($__internal_b1b3762a40af1a428c4fa6bb51496bfa7855b1b5d464c4db19adde5f74831c7c_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_8c04b9dd189fd4f2f9321d59c2c12d526da69de77c1436d657af6b4a2812e67e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c04b9dd189fd4f2f9321d59c2c12d526da69de77c1436d657af6b4a2812e67e->enter($__internal_8c04b9dd189fd4f2f9321d59c2c12d526da69de77c1436d657af6b4a2812e67e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Demo Application";
        
        $__internal_8c04b9dd189fd4f2f9321d59c2c12d526da69de77c1436d657af6b4a2812e67e->leave($__internal_8c04b9dd189fd4f2f9321d59c2c12d526da69de77c1436d657af6b4a2812e67e_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_e64a79aafdd1cbb1d96330a0965a2212b935c6e57f85bc544bf9cf9e7a6ed445 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e64a79aafdd1cbb1d96330a0965a2212b935c6e57f85bc544bf9cf9e7a6ed445->enter($__internal_e64a79aafdd1cbb1d96330a0965a2212b935c6e57f85bc544bf9cf9e7a6ed445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_e64a79aafdd1cbb1d96330a0965a2212b935c6e57f85bc544bf9cf9e7a6ed445->leave($__internal_e64a79aafdd1cbb1d96330a0965a2212b935c6e57f85bc544bf9cf9e7a6ed445_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2ae3081047c824ec7506b2a9cd6cd74e2a2d8ea8a46c7042b4b9370b99f22a75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ae3081047c824ec7506b2a9cd6cd74e2a2d8ea8a46c7042b4b9370b99f22a75->enter($__internal_2ae3081047c824ec7506b2a9cd6cd74e2a2d8ea8a46c7042b4b9370b99f22a75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        
        $__internal_2ae3081047c824ec7506b2a9cd6cd74e2a2d8ea8a46c7042b4b9370b99f22a75->leave($__internal_2ae3081047c824ec7506b2a9cd6cd74e2a2d8ea8a46c7042b4b9370b99f22a75_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
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
{% endblock %}", "FOSUserBundle::layout.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\src\\AppBundle/Resources/views/layout.html.twig");
    }
}
