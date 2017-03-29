<?php

/* AppBundle:Group:edit.html.twig */
class __TwigTemplate_1c9c46b44b37594e21fa7c493ad7da3fd472e48d9c53e1b17641e0c68aa5b832 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "AppBundle:Group:edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b0c62656bf136d650e0c04ffe19f19c202aab96fa846d1ca67e9c3f787d425d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0c62656bf136d650e0c04ffe19f19c202aab96fa846d1ca67e9c3f787d425d6->enter($__internal_b0c62656bf136d650e0c04ffe19f19c202aab96fa846d1ca67e9c3f787d425d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0c62656bf136d650e0c04ffe19f19c202aab96fa846d1ca67e9c3f787d425d6->leave($__internal_b0c62656bf136d650e0c04ffe19f19c202aab96fa846d1ca67e9c3f787d425d6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a90da6efafd2bf7a696f5d27a5880abc6112eb5837d0aec7abb264db8ee749e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a90da6efafd2bf7a696f5d27a5880abc6112eb5837d0aec7abb264db8ee749e4->enter($__internal_a90da6efafd2bf7a696f5d27a5880abc6112eb5837d0aec7abb264db8ee749e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "AppBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_a90da6efafd2bf7a696f5d27a5880abc6112eb5837d0aec7abb264db8ee749e4->leave($__internal_a90da6efafd2bf7a696f5d27a5880abc6112eb5837d0aec7abb264db8ee749e4_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Group:edit.html.twig";
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
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Group:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "AppBundle:Group:edit.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\src\\AppBundle/Resources/views/Group/edit.html.twig");
    }
}
