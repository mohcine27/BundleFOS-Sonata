<?php

/* SonataAdminBundle:CRUD:edit_string.html.twig */
class __TwigTemplate_56f7aed481223d92bb055158ef336f6e1498d5ffc81a568a472e9c8f56b387f7 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3f7c08c1d5920d0552d6559e711d9162c18c7fc2485aeaa0afd3f61a8700ae34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f7c08c1d5920d0552d6559e711d9162c18c7fc2485aeaa0afd3f61a8700ae34->enter($__internal_3f7c08c1d5920d0552d6559e711d9162c18c7fc2485aeaa0afd3f61a8700ae34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f7c08c1d5920d0552d6559e711d9162c18c7fc2485aeaa0afd3f61a8700ae34->leave($__internal_3f7c08c1d5920d0552d6559e711d9162c18c7fc2485aeaa0afd3f61a8700ae34_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_c7985fc7cfbadaeecbd37c615d8c883959a30eae636f8663fac81db3aff48a05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7985fc7cfbadaeecbd37c615d8c883959a30eae636f8663fac81db3aff48a05->enter($__internal_c7985fc7cfbadaeecbd37c615d8c883959a30eae636f8663fac81db3aff48a05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_c7985fc7cfbadaeecbd37c615d8c883959a30eae636f8663fac81db3aff48a05->leave($__internal_c7985fc7cfbadaeecbd37c615d8c883959a30eae636f8663fac81db3aff48a05_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_string.html.twig";
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
", "SonataAdminBundle:CRUD:edit_string.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/edit_string.html.twig");
    }
}
