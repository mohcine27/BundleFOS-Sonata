<?php

/* @SonataAdmin/CRUD/action.html.twig */
class __TwigTemplate_3418e052fe0b7d71bfaac05e28369f195b97830a8ddcad7f76114fd980730765 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_37066ce52c1117ae8d5b2ddb64f4af51d1f155bdad9fd6527e0f2924bde81589 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37066ce52c1117ae8d5b2ddb64f4af51d1f155bdad9fd6527e0f2924bde81589->enter($__internal_37066ce52c1117ae8d5b2ddb64f4af51d1f155bdad9fd6527e0f2924bde81589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37066ce52c1117ae8d5b2ddb64f4af51d1f155bdad9fd6527e0f2924bde81589->leave($__internal_37066ce52c1117ae8d5b2ddb64f4af51d1f155bdad9fd6527e0f2924bde81589_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_5d9e3563eebc4ff161355f1ae61118789680f75e754e3202a1aee9790da82677 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d9e3563eebc4ff161355f1ae61118789680f75e754e3202a1aee9790da82677->enter($__internal_5d9e3563eebc4ff161355f1ae61118789680f75e754e3202a1aee9790da82677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "@SonataAdmin/CRUD/action.html.twig", 15)->display($context);
        
        $__internal_5d9e3563eebc4ff161355f1ae61118789680f75e754e3202a1aee9790da82677->leave($__internal_5d9e3563eebc4ff161355f1ae61118789680f75e754e3202a1aee9790da82677_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_8f9c1a008e66179f0e6f9ab4dc5d9587c454b47eab479dc2fefc94e2a4b50d04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f9c1a008e66179f0e6f9ab4dc5d9587c454b47eab479dc2fefc94e2a4b50d04->enter($__internal_8f9c1a008e66179f0e6f9ab4dc5d9587c454b47eab479dc2fefc94e2a4b50d04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 19
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_8f9c1a008e66179f0e6f9ab4dc5d9587c454b47eab479dc2fefc94e2a4b50d04->leave($__internal_8f9c1a008e66179f0e6f9ab4dc5d9587c454b47eab479dc2fefc94e2a4b50d04_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_d42431543e65b92d1696e07c4f9745b79d677b76f1f25c9f2511f3b98ed49e9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d42431543e65b92d1696e07c4f9745b79d677b76f1f25c9f2511f3b98ed49e9c->enter($__internal_d42431543e65b92d1696e07c4f9745b79d677b76f1f25c9f2511f3b98ed49e9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "
    Redefine the content block in your action template

";
        
        $__internal_d42431543e65b92d1696e07c4f9745b79d677b76f1f25c9f2511f3b98ed49e9c->leave($__internal_d42431543e65b92d1696e07c4f9745b79d677b76f1f25c9f2511f3b98ed49e9c_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 25,  68 => 24,  57 => 20,  54 => 19,  48 => 18,  41 => 15,  35 => 14,  20 => 12,);
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

{% block tab_menu %}
    {% if action is defined %}
        {{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}
    {% endif %}
{% endblock %}

{% block content %}

    Redefine the content block in your action template

{% endblock %}
", "@SonataAdmin/CRUD/action.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\action.html.twig");
    }
}
