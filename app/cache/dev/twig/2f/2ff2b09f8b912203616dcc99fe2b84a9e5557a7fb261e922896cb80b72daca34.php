<?php

/* @SonataAdmin/CRUD/edit_integer.html.twig */
class __TwigTemplate_d61ee22f2a23c83dc03128e5c5c441ca781a99babb9984a570057012e860709c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/edit_integer.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d9d8890d5654142b99a51dfe281ca01980c4d5995b230e2d9c331bdcd682e7b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9d8890d5654142b99a51dfe281ca01980c4d5995b230e2d9c331bdcd682e7b6->enter($__internal_d9d8890d5654142b99a51dfe281ca01980c4d5995b230e2d9c331bdcd682e7b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_integer.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9d8890d5654142b99a51dfe281ca01980c4d5995b230e2d9c331bdcd682e7b6->leave($__internal_d9d8890d5654142b99a51dfe281ca01980c4d5995b230e2d9c331bdcd682e7b6_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_eb6dbb9aae4f7a6a47bff00561dba6412df1185de2a2bb123f11d4f098eda1e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb6dbb9aae4f7a6a47bff00561dba6412df1185de2a2bb123f11d4f098eda1e8->enter($__internal_eb6dbb9aae4f7a6a47bff00561dba6412df1185de2a2bb123f11d4f098eda1e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_eb6dbb9aae4f7a6a47bff00561dba6412df1185de2a2bb123f11d4f098eda1e8->leave($__internal_eb6dbb9aae4f7a6a47bff00561dba6412df1185de2a2bb123f11d4f098eda1e8_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit_integer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 14,  18 => 12,);
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

{% block field %}{{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}{% endblock %}
", "@SonataAdmin/CRUD/edit_integer.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\edit_integer.html.twig");
    }
}
