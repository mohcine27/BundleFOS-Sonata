<?php

/* @SonataAdmin/CRUD/edit_string.html.twig */
class __TwigTemplate_793d9d4722c9b85b8ccda2cba646628bdce276319e0f46a08f0f9a3c218d9365 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/edit_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_01c9252cd3a52d665b1caf5e78a41c24c8abe125c11961b2229c1cb3e785f876 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01c9252cd3a52d665b1caf5e78a41c24c8abe125c11961b2229c1cb3e785f876->enter($__internal_01c9252cd3a52d665b1caf5e78a41c24c8abe125c11961b2229c1cb3e785f876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01c9252cd3a52d665b1caf5e78a41c24c8abe125c11961b2229c1cb3e785f876->leave($__internal_01c9252cd3a52d665b1caf5e78a41c24c8abe125c11961b2229c1cb3e785f876_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_196844c05f5aa864528c3d82d73e28c0fb10a9d9e731ba947b66fa52c15b5451 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_196844c05f5aa864528c3d82d73e28c0fb10a9d9e731ba947b66fa52c15b5451->enter($__internal_196844c05f5aa864528c3d82d73e28c0fb10a9d9e731ba947b66fa52c15b5451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_196844c05f5aa864528c3d82d73e28c0fb10a9d9e731ba947b66fa52c15b5451->leave($__internal_196844c05f5aa864528c3d82d73e28c0fb10a9d9e731ba947b66fa52c15b5451_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit_string.html.twig";
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
", "@SonataAdmin/CRUD/edit_string.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\edit_string.html.twig");
    }
}
