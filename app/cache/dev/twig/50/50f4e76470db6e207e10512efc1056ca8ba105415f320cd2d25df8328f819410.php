<?php

/* SonataAdminBundle:CRUD:show_percent.html.twig */
class __TwigTemplate_b1cb93ba94da0cf8a9ffe6eb997bc2ab5e07fecce9b36c25c6126a6d4563ccd5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_percent.html.twig", 12);
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
        $__internal_cc5e13dc885acba7b1c5dcb154153c82ea55975998abdfdf0a141b60d49b4e39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc5e13dc885acba7b1c5dcb154153c82ea55975998abdfdf0a141b60d49b4e39->enter($__internal_cc5e13dc885acba7b1c5dcb154153c82ea55975998abdfdf0a141b60d49b4e39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_percent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc5e13dc885acba7b1c5dcb154153c82ea55975998abdfdf0a141b60d49b4e39->leave($__internal_cc5e13dc885acba7b1c5dcb154153c82ea55975998abdfdf0a141b60d49b4e39_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_0ce2da482322833873051495cc9078c52d775f2bfa6e0412cd3901e28af39dfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ce2da482322833873051495cc9078c52d775f2bfa6e0412cd3901e28af39dfd->enter($__internal_0ce2da482322833873051495cc9078c52d775f2bfa6e0412cd3901e28af39dfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_0ce2da482322833873051495cc9078c52d775f2bfa6e0412cd3901e28af39dfd->leave($__internal_0ce2da482322833873051495cc9078c52d775f2bfa6e0412cd3901e28af39dfd_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_percent.html.twig";
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
", "SonataAdminBundle:CRUD:show_percent.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/show_percent.html.twig");
    }
}
