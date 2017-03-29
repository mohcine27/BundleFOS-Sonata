<?php

/* @SonataAdmin/CRUD/show_percent.html.twig */
class __TwigTemplate_99190fbd39c35760a26e4bd5a370f6f6c7e880ecb724b6843692738c73d56d37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "@SonataAdmin/CRUD/show_percent.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4ad27e470df896963c5719dac05cf8e46852e5b7e023c39221b14462c8e4edae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ad27e470df896963c5719dac05cf8e46852e5b7e023c39221b14462c8e4edae->enter($__internal_4ad27e470df896963c5719dac05cf8e46852e5b7e023c39221b14462c8e4edae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_percent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ad27e470df896963c5719dac05cf8e46852e5b7e023c39221b14462c8e4edae->leave($__internal_4ad27e470df896963c5719dac05cf8e46852e5b7e023c39221b14462c8e4edae_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_03d47fa5bc1545e09d73049ce094a05c5df3e195faef8ed187c85f6abc30870e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03d47fa5bc1545e09d73049ce094a05c5df3e195faef8ed187c85f6abc30870e->enter($__internal_03d47fa5bc1545e09d73049ce094a05c5df3e195faef8ed187c85f6abc30870e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_03d47fa5bc1545e09d73049ce094a05c5df3e195faef8ed187c85f6abc30870e->leave($__internal_03d47fa5bc1545e09d73049ce094a05c5df3e195faef8ed187c85f6abc30870e_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_percent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 16,  40 => 15,  34 => 14,  11 => 12,);
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

{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field %}
    {% set value = value * 100 %}
    {{ value }} %
{% endblock %}
", "@SonataAdmin/CRUD/show_percent.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\show_percent.html.twig");
    }
}
