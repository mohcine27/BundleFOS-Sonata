<?php

/* SonataAdminBundle:CRUD:edit_text.html.twig */
class __TwigTemplate_9ed36f8c33d8258748c29bb79002d4814f63375d05aca59f9afd615d54414d63 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8b6860590171247b5ba6fe0a33c73b7fbb87eff95035a02a3bc8cb17c728a37e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b6860590171247b5ba6fe0a33c73b7fbb87eff95035a02a3bc8cb17c728a37e->enter($__internal_8b6860590171247b5ba6fe0a33c73b7fbb87eff95035a02a3bc8cb17c728a37e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b6860590171247b5ba6fe0a33c73b7fbb87eff95035a02a3bc8cb17c728a37e->leave($__internal_8b6860590171247b5ba6fe0a33c73b7fbb87eff95035a02a3bc8cb17c728a37e_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_b6ed571cf570dd687e38b69329c8fae068c2eb8b9b9b9140aab63a50b0400301 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6ed571cf570dd687e38b69329c8fae068c2eb8b9b9b9140aab63a50b0400301->enter($__internal_b6ed571cf570dd687e38b69329c8fae068c2eb8b9b9b9140aab63a50b0400301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_b6ed571cf570dd687e38b69329c8fae068c2eb8b9b9b9140aab63a50b0400301->leave($__internal_b6ed571cf570dd687e38b69329c8fae068c2eb8b9b9b9140aab63a50b0400301_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_text.html.twig";
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
", "SonataAdminBundle:CRUD:edit_text.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/edit_text.html.twig");
    }
}
