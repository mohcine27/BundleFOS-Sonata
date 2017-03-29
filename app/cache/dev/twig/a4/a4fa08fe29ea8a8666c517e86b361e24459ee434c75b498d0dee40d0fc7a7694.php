<?php

/* @SonataAdmin/CRUD/base_acl.html.twig */
class __TwigTemplate_96176aa729ea47e64d38a5fc14bd37d24195b1f396cb105ecf078a5cb8b7fc21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'form' => array($this, 'block_form'),
            'form_acl_roles' => array($this, 'block_form_acl_roles'),
            'form_acl_users' => array($this, 'block_form_acl_users'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/base_acl.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6fe5b8f97f7abcfb10e8216aeca141b4c91f93785b1b1a14d3ca39264248afa1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fe5b8f97f7abcfb10e8216aeca141b4c91f93785b1b1a14d3ca39264248afa1->enter($__internal_6fe5b8f97f7abcfb10e8216aeca141b4c91f93785b1b1a14d3ca39264248afa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_acl.html.twig"));

        // line 18
        $context["acl"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl_macro.html.twig", "@SonataAdmin/CRUD/base_acl.html.twig", 18);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6fe5b8f97f7abcfb10e8216aeca141b4c91f93785b1b1a14d3ca39264248afa1->leave($__internal_6fe5b8f97f7abcfb10e8216aeca141b4c91f93785b1b1a14d3ca39264248afa1_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_6e356c0936b1816a0f5ef3cb45e6740f3107efc99fddcfc0b7815daffbe9a82a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e356c0936b1816a0f5ef3cb45e6740f3107efc99fddcfc0b7815daffbe9a82a->enter($__internal_6e356c0936b1816a0f5ef3cb45e6740f3107efc99fddcfc0b7815daffbe9a82a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "@SonataAdmin/CRUD/base_acl.html.twig", 15)->display($context);
        
        $__internal_6e356c0936b1816a0f5ef3cb45e6740f3107efc99fddcfc0b7815daffbe9a82a->leave($__internal_6e356c0936b1816a0f5ef3cb45e6740f3107efc99fddcfc0b7815daffbe9a82a_prof);

    }

    // line 20
    public function block_form($context, array $blocks = array())
    {
        $__internal_c55c920277be579ab15971dcef836708ddc44c9f377a49491831325a4b804924 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c55c920277be579ab15971dcef836708ddc44c9f377a49491831325a4b804924->enter($__internal_c55c920277be579ab15971dcef836708ddc44c9f377a49491831325a4b804924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 21
        echo "    ";
        $this->displayBlock('form_acl_roles', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('form_acl_users', $context, $blocks);
        
        $__internal_c55c920277be579ab15971dcef836708ddc44c9f377a49491831325a4b804924->leave($__internal_c55c920277be579ab15971dcef836708ddc44c9f377a49491831325a4b804924_prof);

    }

    // line 21
    public function block_form_acl_roles($context, array $blocks = array())
    {
        $__internal_436f812fcca85a46ff68e7231e5e4047209d6bf13ce8119c1d7804e1185ec4a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_436f812fcca85a46ff68e7231e5e4047209d6bf13ce8119c1d7804e1185ec4a7->enter($__internal_436f812fcca85a46ff68e7231e5e4047209d6bf13ce8119c1d7804e1185ec4a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        // line 22
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclRolesForm"]) ? $context["aclRolesForm"] : $this->getContext($context, "aclRolesForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_role", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_436f812fcca85a46ff68e7231e5e4047209d6bf13ce8119c1d7804e1185ec4a7->leave($__internal_436f812fcca85a46ff68e7231e5e4047209d6bf13ce8119c1d7804e1185ec4a7_prof);

    }

    // line 24
    public function block_form_acl_users($context, array $blocks = array())
    {
        $__internal_ebb640b981c29ce6b53af3f3709fc86820635d0a00f593ec63da075980956f46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebb640b981c29ce6b53af3f3709fc86820635d0a00f593ec63da075980956f46->enter($__internal_ebb640b981c29ce6b53af3f3709fc86820635d0a00f593ec63da075980956f46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        // line 25
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclUsersForm"]) ? $context["aclUsersForm"] : $this->getContext($context, "aclUsersForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_username", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_ebb640b981c29ce6b53af3f3709fc86820635d0a00f593ec63da075980956f46->leave($__internal_ebb640b981c29ce6b53af3f3709fc86820635d0a00f593ec63da075980956f46_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_acl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 25,  85 => 24,  75 => 22,  69 => 21,  61 => 24,  58 => 21,  52 => 20,  45 => 15,  39 => 14,  32 => 12,  30 => 18,  21 => 12,);
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

{% extends base_template %}

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% import 'SonataAdminBundle:CRUD:base_acl_macro.html.twig' as acl %}

{% block form %}
    {% block form_acl_roles %}
        {{ acl.render_form(aclRolesForm, permissions, 'td_role', admin, sonata_admin.adminPool, object) }}
    {% endblock %}
    {% block form_acl_users %}
        {{ acl.render_form(aclUsersForm, permissions, 'td_username', admin, sonata_admin.adminPool, object) }}
    {% endblock %}
{% endblock %}
", "@SonataAdmin/CRUD/base_acl.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\base_acl.html.twig");
    }
}
