<?php

/* @SonataAdmin/CRUD/edit_file.html.twig */
class __TwigTemplate_a4586d246f02b384b0e8d0e11e78167060d032f0f593bd992e3fd3287aefcab5 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/edit_file.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3022294328774a0a6360e13ef426f297aedb87d574466aa61c9b55e73a7b0cc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3022294328774a0a6360e13ef426f297aedb87d574466aa61c9b55e73a7b0cc7->enter($__internal_3022294328774a0a6360e13ef426f297aedb87d574466aa61c9b55e73a7b0cc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_file.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3022294328774a0a6360e13ef426f297aedb87d574466aa61c9b55e73a7b0cc7->leave($__internal_3022294328774a0a6360e13ef426f297aedb87d574466aa61c9b55e73a7b0cc7_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_b0246b0b587a5f62dc71bc5742b6308c2f7b3fb94a3397a31a74781914b3463c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0246b0b587a5f62dc71bc5742b6308c2f7b3fb94a3397a31a74781914b3463c->enter($__internal_b0246b0b587a5f62dc71bc5742b6308c2f7b3fb94a3397a31a74781914b3463c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_b0246b0b587a5f62dc71bc5742b6308c2f7b3fb94a3397a31a74781914b3463c->leave($__internal_b0246b0b587a5f62dc71bc5742b6308c2f7b3fb94a3397a31a74781914b3463c_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit_file.html.twig";
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
", "@SonataAdmin/CRUD/edit_file.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\edit_file.html.twig");
    }
}
