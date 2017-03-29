<?php

/* SonataAdminBundle:CRUD:edit_file.html.twig */
class __TwigTemplate_01157106fd6d2e2a7d7220505cd6c9b69af4d0f4db6a9f080dc97186fff30358 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_file.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f1b1e4e5bffc59040f33fda6a253319e4c6fc0f0a984cde60e30a3f03bafea98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1b1e4e5bffc59040f33fda6a253319e4c6fc0f0a984cde60e30a3f03bafea98->enter($__internal_f1b1e4e5bffc59040f33fda6a253319e4c6fc0f0a984cde60e30a3f03bafea98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_file.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1b1e4e5bffc59040f33fda6a253319e4c6fc0f0a984cde60e30a3f03bafea98->leave($__internal_f1b1e4e5bffc59040f33fda6a253319e4c6fc0f0a984cde60e30a3f03bafea98_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_c852f38bc67128f092137d0cd8be2bdddc10c60a12138fea7e621302f06e0407 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c852f38bc67128f092137d0cd8be2bdddc10c60a12138fea7e621302f06e0407->enter($__internal_c852f38bc67128f092137d0cd8be2bdddc10c60a12138fea7e621302f06e0407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_c852f38bc67128f092137d0cd8be2bdddc10c60a12138fea7e621302f06e0407->leave($__internal_c852f38bc67128f092137d0cd8be2bdddc10c60a12138fea7e621302f06e0407_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_file.html.twig";
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
", "SonataAdminBundle:CRUD:edit_file.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/edit_file.html.twig");
    }
}
