<?php

/* @SonataAdmin/CRUD/edit_text.html.twig */
class __TwigTemplate_809c37d68e2eb4adea711c8979c5e2234c8ee1ca8cf267826b5367f01eb0f621 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/edit_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_339484e6363e0de6efe4e9ff5f044ce1db4b2a4e5c00d37b685028321ea43b81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_339484e6363e0de6efe4e9ff5f044ce1db4b2a4e5c00d37b685028321ea43b81->enter($__internal_339484e6363e0de6efe4e9ff5f044ce1db4b2a4e5c00d37b685028321ea43b81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_339484e6363e0de6efe4e9ff5f044ce1db4b2a4e5c00d37b685028321ea43b81->leave($__internal_339484e6363e0de6efe4e9ff5f044ce1db4b2a4e5c00d37b685028321ea43b81_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_5217943e9fb92b0cb9e4ea9e3928b9f185714bffb13b9e5eb79ea0730cff853c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5217943e9fb92b0cb9e4ea9e3928b9f185714bffb13b9e5eb79ea0730cff853c->enter($__internal_5217943e9fb92b0cb9e4ea9e3928b9f185714bffb13b9e5eb79ea0730cff853c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_5217943e9fb92b0cb9e4ea9e3928b9f185714bffb13b9e5eb79ea0730cff853c->leave($__internal_5217943e9fb92b0cb9e4ea9e3928b9f185714bffb13b9e5eb79ea0730cff853c_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit_text.html.twig";
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
", "@SonataAdmin/CRUD/edit_text.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\edit_text.html.twig");
    }
}
