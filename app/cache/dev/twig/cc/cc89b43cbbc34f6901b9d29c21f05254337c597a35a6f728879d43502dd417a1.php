<?php

/* @SonataAdmin/CRUD/show_email.html.twig */
class __TwigTemplate_19d54cc8cd682338c6bfb67e6312c33e803c74a3f50ad8678d35e27cdde688ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "@SonataAdmin/CRUD/show_email.html.twig", 1);
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
        $__internal_19aa60937ff0ac7ec8c3504b705d11c88f2e973d339dccb5ca467ff719fae3bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19aa60937ff0ac7ec8c3504b705d11c88f2e973d339dccb5ca467ff719fae3bb->enter($__internal_19aa60937ff0ac7ec8c3504b705d11c88f2e973d339dccb5ca467ff719fae3bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19aa60937ff0ac7ec8c3504b705d11c88f2e973d339dccb5ca467ff719fae3bb->leave($__internal_19aa60937ff0ac7ec8c3504b705d11c88f2e973d339dccb5ca467ff719fae3bb_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_46dcf38529b3f6a549befd4dfae4cd66bc9d5cf76fb195abd4eba59082439f5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46dcf38529b3f6a549befd4dfae4cd66bc9d5cf76fb195abd4eba59082439f5f->enter($__internal_46dcf38529b3f6a549befd4dfae4cd66bc9d5cf76fb195abd4eba59082439f5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 4
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "@SonataAdmin/CRUD/show_email.html.twig", 4)->display($context);
        
        $__internal_46dcf38529b3f6a549befd4dfae4cd66bc9d5cf76fb195abd4eba59082439f5f->leave($__internal_46dcf38529b3f6a549befd4dfae4cd66bc9d5cf76fb195abd4eba59082439f5f_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_email.html.twig";
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
", "@SonataAdmin/CRUD/show_email.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\show_email.html.twig");
    }
}
