<?php

/* @App/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_1d3f5cc583267f0955037aefbe7c538aee1c215c99a564d3433e0447a2386a0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@App/Resetting/passwordAlreadyRequested.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_74c418a41986293d7ecc7b419a8a011a6203663ca093d1875a8548d3969ff256 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74c418a41986293d7ecc7b419a8a011a6203663ca093d1875a8548d3969ff256->enter($__internal_74c418a41986293d7ecc7b419a8a011a6203663ca093d1875a8548d3969ff256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74c418a41986293d7ecc7b419a8a011a6203663ca093d1875a8548d3969ff256->leave($__internal_74c418a41986293d7ecc7b419a8a011a6203663ca093d1875a8548d3969ff256_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_77903ff4f2604419fb955f47a4bf3a330e6b20dd67be34e7916e6b7b9dfd630c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77903ff4f2604419fb955f47a4bf3a330e6b20dd67be34e7916e6b7b9dfd630c->enter($__internal_77903ff4f2604419fb955f47a4bf3a330e6b20dd67be34e7916e6b7b9dfd630c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "\t";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_77903ff4f2604419fb955f47a4bf3a330e6b20dd67be34e7916e6b7b9dfd630c->leave($__internal_77903ff4f2604419fb955f47a4bf3a330e6b20dd67be34e7916e6b7b9dfd630c_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b419a3e3de4c407899e03b522dcfdc71cc9fc191f0fe6ddb65d3ccf23110118b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b419a3e3de4c407899e03b522dcfdc71cc9fc191f0fe6ddb65d3ccf23110118b->enter($__internal_b419a3e3de4c407899e03b522dcfdc71cc9fc191f0fe6ddb65d3ccf23110118b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "\t<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
\t";
        
        $__internal_b419a3e3de4c407899e03b522dcfdc71cc9fc191f0fe6ddb65d3ccf23110118b->leave($__internal_b419a3e3de4c407899e03b522dcfdc71cc9fc191f0fe6ddb65d3ccf23110118b_prof);

    }

    public function getTemplateName()
    {
        return "@App/Resetting/passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 6,  41 => 5,  35 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}
{% block body %}
\t{% block fos_user_content %}
\t<p>{{ 'resetting.password_already_requested'|trans }}</p>
\t{% endblock fos_user_content %}
{%endblock%}
", "@App/Resetting/passwordAlreadyRequested.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\src\\AppBundle\\Resources\\views\\Resetting\\passwordAlreadyRequested.html.twig");
    }
}
