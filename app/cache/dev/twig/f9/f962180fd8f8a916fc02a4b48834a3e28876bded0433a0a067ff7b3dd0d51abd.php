<?php

/* SonataAdminBundle:CRUD:show_email.html.twig */
class __TwigTemplate_34f3abcd05d16028438697010742004e2b9c2a59163c8874ed19830804fdc27b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_email.html.twig", 1);
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
        $__internal_0f4605b178c66ffa785a670517a7ef5889c45a589642f80817f5d25b23ca4bf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f4605b178c66ffa785a670517a7ef5889c45a589642f80817f5d25b23ca4bf9->enter($__internal_0f4605b178c66ffa785a670517a7ef5889c45a589642f80817f5d25b23ca4bf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f4605b178c66ffa785a670517a7ef5889c45a589642f80817f5d25b23ca4bf9->leave($__internal_0f4605b178c66ffa785a670517a7ef5889c45a589642f80817f5d25b23ca4bf9_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_a7dec12888c6ec7649ec5731be4aed4c608181c83af146dd8e6f04e458286691 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7dec12888c6ec7649ec5731be4aed4c608181c83af146dd8e6f04e458286691->enter($__internal_a7dec12888c6ec7649ec5731be4aed4c608181c83af146dd8e6f04e458286691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 4
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "SonataAdminBundle:CRUD:show_email.html.twig", 4)->display($context);
        
        $__internal_a7dec12888c6ec7649ec5731be4aed4c608181c83af146dd8e6f04e458286691->leave($__internal_a7dec12888c6ec7649ec5731be4aed4c608181c83af146dd8e6f04e458286691_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field %}
    {% include 'SonataAdminBundle:CRUD:_email_link.html.twig' %}
{% endblock %}
", "SonataAdminBundle:CRUD:show_email.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/show_email.html.twig");
    }
}
