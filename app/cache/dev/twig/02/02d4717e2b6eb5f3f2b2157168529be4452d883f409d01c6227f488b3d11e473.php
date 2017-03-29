<?php

/* SonataAdminBundle:CRUD:action.html.twig */
class __TwigTemplate_ff164709b274680f994390307799af5a4e2d6b188d7b94b0a895193fa5ec4167 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_907c047e947f46c1103fe282cb9b2832da79153f0138ab26b6e346cadc5497fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_907c047e947f46c1103fe282cb9b2832da79153f0138ab26b6e346cadc5497fa->enter($__internal_907c047e947f46c1103fe282cb9b2832da79153f0138ab26b6e346cadc5497fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_907c047e947f46c1103fe282cb9b2832da79153f0138ab26b6e346cadc5497fa->leave($__internal_907c047e947f46c1103fe282cb9b2832da79153f0138ab26b6e346cadc5497fa_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_6ab7fb8d5cad96c8748bb35bef2ed9308e227b3f8646e05cc1a97816ae8ca621 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ab7fb8d5cad96c8748bb35bef2ed9308e227b3f8646e05cc1a97816ae8ca621->enter($__internal_6ab7fb8d5cad96c8748bb35bef2ed9308e227b3f8646e05cc1a97816ae8ca621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:action.html.twig", 15)->display($context);
        
        $__internal_6ab7fb8d5cad96c8748bb35bef2ed9308e227b3f8646e05cc1a97816ae8ca621->leave($__internal_6ab7fb8d5cad96c8748bb35bef2ed9308e227b3f8646e05cc1a97816ae8ca621_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_e483d1739282caf0c4d212e24a2cec01747d14df83c1faf6b0c93aeb33586d06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e483d1739282caf0c4d212e24a2cec01747d14df83c1faf6b0c93aeb33586d06->enter($__internal_e483d1739282caf0c4d212e24a2cec01747d14df83c1faf6b0c93aeb33586d06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 19
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_e483d1739282caf0c4d212e24a2cec01747d14df83c1faf6b0c93aeb33586d06->leave($__internal_e483d1739282caf0c4d212e24a2cec01747d14df83c1faf6b0c93aeb33586d06_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_fda96e9926875f9189a2c88c962dc22572f38553a2789c0dca1149437cd95748 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fda96e9926875f9189a2c88c962dc22572f38553a2789c0dca1149437cd95748->enter($__internal_fda96e9926875f9189a2c88c962dc22572f38553a2789c0dca1149437cd95748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "
    Redefine the content block in your action template

";
        
        $__internal_fda96e9926875f9189a2c88c962dc22572f38553a2789c0dca1149437cd95748->leave($__internal_fda96e9926875f9189a2c88c962dc22572f38553a2789c0dca1149437cd95748_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:action.html.twig";
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
", "SonataAdminBundle:CRUD:action.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/action.html.twig");
    }
}
