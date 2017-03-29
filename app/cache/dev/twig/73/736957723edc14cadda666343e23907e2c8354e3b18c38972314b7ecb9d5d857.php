<?php

/* SonataAdminBundle::empty_layout.html.twig */
class __TwigTemplate_1384ddb456f85e264f4d5b7599cb49a2f079b33fb172590b0909f58d93636f81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'sonata_header' => array($this, 'block_sonata_header'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "layout"), "method"), "SonataAdminBundle::empty_layout.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_718378355a08dc9940333dda885d6b503093802173f1df9bbc66c0891c47e94e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_718378355a08dc9940333dda885d6b503093802173f1df9bbc66c0891c47e94e->enter($__internal_718378355a08dc9940333dda885d6b503093802173f1df9bbc66c0891c47e94e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_718378355a08dc9940333dda885d6b503093802173f1df9bbc66c0891c47e94e->leave($__internal_718378355a08dc9940333dda885d6b503093802173f1df9bbc66c0891c47e94e_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_597c5ea5c84ca31f9f47cd1e7ff0a917e56eaaf0641e19cce85d88ca3d7a5eaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_597c5ea5c84ca31f9f47cd1e7ff0a917e56eaaf0641e19cce85d88ca3d7a5eaa->enter($__internal_597c5ea5c84ca31f9f47cd1e7ff0a917e56eaaf0641e19cce85d88ca3d7a5eaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_597c5ea5c84ca31f9f47cd1e7ff0a917e56eaaf0641e19cce85d88ca3d7a5eaa->leave($__internal_597c5ea5c84ca31f9f47cd1e7ff0a917e56eaaf0641e19cce85d88ca3d7a5eaa_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_e3cc8450805f2709f221d91b01f910a770c74cfaaec577e4c99fe5ac36b820cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3cc8450805f2709f221d91b01f910a770c74cfaaec577e4c99fe5ac36b820cf->enter($__internal_e3cc8450805f2709f221d91b01f910a770c74cfaaec577e4c99fe5ac36b820cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_e3cc8450805f2709f221d91b01f910a770c74cfaaec577e4c99fe5ac36b820cf->leave($__internal_e3cc8450805f2709f221d91b01f910a770c74cfaaec577e4c99fe5ac36b820cf_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_5e5f5671874de2247cb9cacfc7d53634055639f2cf76426893ecf82bfeeaad2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e5f5671874de2247cb9cacfc7d53634055639f2cf76426893ecf82bfeeaad2a->enter($__internal_5e5f5671874de2247cb9cacfc7d53634055639f2cf76426893ecf82bfeeaad2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_5e5f5671874de2247cb9cacfc7d53634055639f2cf76426893ecf82bfeeaad2a->leave($__internal_5e5f5671874de2247cb9cacfc7d53634055639f2cf76426893ecf82bfeeaad2a_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_d931da86439bf80e9e21e660e94c32b9ff63730bca2bb6eae45165b406173c14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d931da86439bf80e9e21e660e94c32b9ff63730bca2bb6eae45165b406173c14->enter($__internal_d931da86439bf80e9e21e660e94c32b9ff63730bca2bb6eae45165b406173c14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_d931da86439bf80e9e21e660e94c32b9ff63730bca2bb6eae45165b406173c14->leave($__internal_d931da86439bf80e9e21e660e94c32b9ff63730bca2bb6eae45165b406173c14_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ffc4542afdc95f033fa2298b4916f1166f94875e31abbc14086340ab1d125545 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffc4542afdc95f033fa2298b4916f1166f94875e31abbc14086340ab1d125545->enter($__internal_ffc4542afdc95f033fa2298b4916f1166f94875e31abbc14086340ab1d125545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 20
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <style>
        .content {
            margin: 0px;
            padding: 0px;
        }
    </style>

";
        
        $__internal_ffc4542afdc95f033fa2298b4916f1166f94875e31abbc14086340ab1d125545->leave($__internal_ffc4542afdc95f033fa2298b4916f1166f94875e31abbc14086340ab1d125545_prof);

    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_d67bb23e493210b6de2e55b90e2e96b527cb3aac8a2328a6eddd5ae97670e61e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d67bb23e493210b6de2e55b90e2e96b527cb3aac8a2328a6eddd5ae97670e61e->enter($__internal_d67bb23e493210b6de2e55b90e2e96b527cb3aac8a2328a6eddd5ae97670e61e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_d67bb23e493210b6de2e55b90e2e96b527cb3aac8a2328a6eddd5ae97670e61e->leave($__internal_d67bb23e493210b6de2e55b90e2e96b527cb3aac8a2328a6eddd5ae97670e61e_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_1939ddea2c6a5393f520eb8cda6b3346d1631c047f75fb13d71aa6b1945e3e2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1939ddea2c6a5393f520eb8cda6b3346d1631c047f75fb13d71aa6b1945e3e2c->enter($__internal_1939ddea2c6a5393f520eb8cda6b3346d1631c047f75fb13d71aa6b1945e3e2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_1939ddea2c6a5393f520eb8cda6b3346d1631c047f75fb13d71aa6b1945e3e2c->leave($__internal_1939ddea2c6a5393f520eb8cda6b3346d1631c047f75fb13d71aa6b1945e3e2c_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::empty_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 33,  113 => 32,  107 => 31,  89 => 20,  83 => 19,  72 => 17,  61 => 16,  50 => 15,  39 => 14,  24 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends admin_pool.getTemplate('layout') %}

{% block sonata_header %}{% endblock %}
{% block sonata_left_side %}{% endblock %}
{% block sonata_nav %}{% endblock %}
{% block sonata_breadcrumb %}{% endblock %}

{% block stylesheets %}
    {{ parent() }}

    <style>
        .content {
            margin: 0px;
            padding: 0px;
        }
    </style>

{% endblock %}

{% block sonata_wrapper %}
    {% block sonata_page_content %}
        {{ parent() }}
    {% endblock %}
{% endblock %}
", "SonataAdminBundle::empty_layout.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\vendor\\sonata-project\\admin-bundle/Resources/views/empty_layout.html.twig");
    }
}
