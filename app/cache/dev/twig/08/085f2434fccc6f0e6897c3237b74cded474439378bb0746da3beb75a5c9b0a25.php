<?php

/* SonataAdminBundle:CRUD:edit_integer.html.twig */
class __TwigTemplate_1cd21ba25a55cb85e3e0239ef57ed76208d43907888e4657a4afd89a6b69415c extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_integer.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f9139a28b82d5629e86205778cf01209af4b55fb72e8ff4c62583a6bbcc0e83b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9139a28b82d5629e86205778cf01209af4b55fb72e8ff4c62583a6bbcc0e83b->enter($__internal_f9139a28b82d5629e86205778cf01209af4b55fb72e8ff4c62583a6bbcc0e83b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_integer.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9139a28b82d5629e86205778cf01209af4b55fb72e8ff4c62583a6bbcc0e83b->leave($__internal_f9139a28b82d5629e86205778cf01209af4b55fb72e8ff4c62583a6bbcc0e83b_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_539b05888307cb74df354d735c685e9e3b4eebb1fb73608fbde6b67cd3dfcb07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_539b05888307cb74df354d735c685e9e3b4eebb1fb73608fbde6b67cd3dfcb07->enter($__internal_539b05888307cb74df354d735c685e9e3b4eebb1fb73608fbde6b67cd3dfcb07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_539b05888307cb74df354d735c685e9e3b4eebb1fb73608fbde6b67cd3dfcb07->leave($__internal_539b05888307cb74df354d735c685e9e3b4eebb1fb73608fbde6b67cd3dfcb07_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_integer.html.twig";
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
", "SonataAdminBundle:CRUD:edit_integer.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/edit_integer.html.twig");
    }
}
