<?php

/* @SonataAdmin/CRUD/show_time.html.twig */
class __TwigTemplate_8afebc5d9931d827db6e2e028b48ec423bc19a0e662ceec8add785c832a17b54 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "@SonataAdmin/CRUD/show_time.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fbc50787fbe98db84b1e9bdacac21040318a1b6c9d385992ee3425c8c70d2e13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbc50787fbe98db84b1e9bdacac21040318a1b6c9d385992ee3425c8c70d2e13->enter($__internal_fbc50787fbe98db84b1e9bdacac21040318a1b6c9d385992ee3425c8c70d2e13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_time.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fbc50787fbe98db84b1e9bdacac21040318a1b6c9d385992ee3425c8c70d2e13->leave($__internal_fbc50787fbe98db84b1e9bdacac21040318a1b6c9d385992ee3425c8c70d2e13_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_bd9ef9919ee58105d4f7e85cb74af9cce2e551e5ec77125e6bb970e6eadfba45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd9ef9919ee58105d4f7e85cb74af9cce2e551e5ec77125e6bb970e6eadfba45->enter($__internal_bd9ef9919ee58105d4f7e85cb74af9cce2e551e5ec77125e6bb970e6eadfba45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_bd9ef9919ee58105d4f7e85cb74af9cce2e551e5ec77125e6bb970e6eadfba45->leave($__internal_bd9ef9919ee58105d4f7e85cb74af9cce2e551e5ec77125e6bb970e6eadfba45_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 18,  42 => 16,  40 => 15,  34 => 14,  11 => 12,);
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

{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field %}
    {%- if value is empty -%}
        &nbsp;
    {%- else -%}
        {{ value|date('H:i:s') }}
    {%- endif -%}
{% endblock %}
", "@SonataAdmin/CRUD/show_time.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\show_time.html.twig");
    }
}
