<?php

/* SonataAdminBundle:CRUD:base_acl.html.twig */
class __TwigTemplate_e5c36098e5e71efcb41ac7ccc0d940bef3701203ce83cd3dabc570584c8f5c86 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_acl.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b8060d43f599e9715b852b18e1d39f1166007c8bb24f2bbf142f882bf96f6857 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8060d43f599e9715b852b18e1d39f1166007c8bb24f2bbf142f882bf96f6857->enter($__internal_b8060d43f599e9715b852b18e1d39f1166007c8bb24f2bbf142f882bf96f6857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_acl.html.twig"));

        // line 18
        $context["acl"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl_macro.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 18);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8060d43f599e9715b852b18e1d39f1166007c8bb24f2bbf142f882bf96f6857->leave($__internal_b8060d43f599e9715b852b18e1d39f1166007c8bb24f2bbf142f882bf96f6857_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_b5a41d89590f8520daaae368516f474765719a9931c2c47c44f0a7eef15148c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5a41d89590f8520daaae368516f474765719a9931c2c47c44f0a7eef15148c0->enter($__internal_b5a41d89590f8520daaae368516f474765719a9931c2c47c44f0a7eef15148c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 15)->display($context);
        
        $__internal_b5a41d89590f8520daaae368516f474765719a9931c2c47c44f0a7eef15148c0->leave($__internal_b5a41d89590f8520daaae368516f474765719a9931c2c47c44f0a7eef15148c0_prof);

    }

    // line 20
    public function block_form($context, array $blocks = array())
    {
        $__internal_8722cdfc6538d63262a42558057ab65050ab620c488b1cd9bb6085fcf50ffe97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8722cdfc6538d63262a42558057ab65050ab620c488b1cd9bb6085fcf50ffe97->enter($__internal_8722cdfc6538d63262a42558057ab65050ab620c488b1cd9bb6085fcf50ffe97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 21
        echo "    ";
        $this->displayBlock('form_acl_roles', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('form_acl_users', $context, $blocks);
        
        $__internal_8722cdfc6538d63262a42558057ab65050ab620c488b1cd9bb6085fcf50ffe97->leave($__internal_8722cdfc6538d63262a42558057ab65050ab620c488b1cd9bb6085fcf50ffe97_prof);

    }

    // line 21
    public function block_form_acl_roles($context, array $blocks = array())
    {
        $__internal_7e9e32cb82e6e5ca93d46593c826a7b0cbbe6ecf15cb41aa9cdc7fb29317cebc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e9e32cb82e6e5ca93d46593c826a7b0cbbe6ecf15cb41aa9cdc7fb29317cebc->enter($__internal_7e9e32cb82e6e5ca93d46593c826a7b0cbbe6ecf15cb41aa9cdc7fb29317cebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        // line 22
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclRolesForm"]) ? $context["aclRolesForm"] : $this->getContext($context, "aclRolesForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_role", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_7e9e32cb82e6e5ca93d46593c826a7b0cbbe6ecf15cb41aa9cdc7fb29317cebc->leave($__internal_7e9e32cb82e6e5ca93d46593c826a7b0cbbe6ecf15cb41aa9cdc7fb29317cebc_prof);

    }

    // line 24
    public function block_form_acl_users($context, array $blocks = array())
    {
        $__internal_aab6117736735709d3586e6f3e1a46ac91f78361ab0c7e0a610fceef5a118649 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aab6117736735709d3586e6f3e1a46ac91f78361ab0c7e0a610fceef5a118649->enter($__internal_aab6117736735709d3586e6f3e1a46ac91f78361ab0c7e0a610fceef5a118649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        // line 25
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclUsersForm"]) ? $context["aclUsersForm"] : $this->getContext($context, "aclUsersForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_username", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_aab6117736735709d3586e6f3e1a46ac91f78361ab0c7e0a610fceef5a118649->leave($__internal_aab6117736735709d3586e6f3e1a46ac91f78361ab0c7e0a610fceef5a118649_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
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
", "SonataAdminBundle:CRUD:base_acl.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/base_acl.html.twig");
    }
}
