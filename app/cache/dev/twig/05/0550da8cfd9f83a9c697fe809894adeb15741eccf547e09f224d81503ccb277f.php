<?php

/* @EasyAdmin/default/exception.html.twig */
class __TwigTemplate_28e38ea0092dc1024b115f9024b3de50964bc4764a07eb3305f76472540c26fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_class' => array($this, 'block_body_class'),
            'page_title' => array($this, 'block_page_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return $this->loadTemplate(array(0 => (($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "templates", array(), "any", false, true), "layout", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "templates", array(), "any", false, true), "layout", array()), "")) : ("")), 1 => $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.templates.layout"), 2 => "@EasyAdmin/default/layout.html.twig"), "@EasyAdmin/default/exception.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ddc542be6572698cafe7c1c2bc4fa85f36ee5c3c7c0143b1bd9784be0404dd7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddc542be6572698cafe7c1c2bc4fa85f36ee5c3c7c0143b1bd9784be0404dd7b->enter($__internal_ddc542be6572698cafe7c1c2bc4fa85f36ee5c3c7c0143b1bd9784be0404dd7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/exception.html.twig"));

        // line 1
        $context["_entity_config"] = $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 3
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ddc542be6572698cafe7c1c2bc4fa85f36ee5c3c7c0143b1bd9784be0404dd7b->leave($__internal_ddc542be6572698cafe7c1c2bc4fa85f36ee5c3c7c0143b1bd9784be0404dd7b_prof);

    }

    // line 8
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_fb994247aa0250a62b61a3d589c84a8122a3dc8a1180aa55280d734eb57148c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb994247aa0250a62b61a3d589c84a8122a3dc8a1180aa55280d734eb57148c5->enter($__internal_fb994247aa0250a62b61a3d589c84a8122a3dc8a1180aa55280d734eb57148c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo "error";
        
        $__internal_fb994247aa0250a62b61a3d589c84a8122a3dc8a1180aa55280d734eb57148c5->leave($__internal_fb994247aa0250a62b61a3d589c84a8122a3dc8a1180aa55280d734eb57148c5_prof);

    }

    // line 9
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_f22a5b80df6ca40c1b99ec4aa55699c526a0dceaed19bc987440357223e2e132 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f22a5b80df6ca40c1b99ec4aa55699c526a0dceaed19bc987440357223e2e132->enter($__internal_f22a5b80df6ca40c1b99ec4aa55699c526a0dceaed19bc987440357223e2e132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("errors", 1, array(), "EasyAdminBundle"), "html", null, true);
        
        $__internal_f22a5b80df6ca40c1b99ec4aa55699c526a0dceaed19bc987440357223e2e132->leave($__internal_f22a5b80df6ca40c1b99ec4aa55699c526a0dceaed19bc987440357223e2e132_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_2927a6d9218631f6c2e7727f91a9e590156352f30a8b1b581cab7a644746bf94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2927a6d9218631f6c2e7727f91a9e590156352f30a8b1b581cab7a644746bf94->enter($__internal_2927a6d9218631f6c2e7727f91a9e590156352f30a8b1b581cab7a644746bf94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 12
        echo "    <section id=\"main\" class=\"content\">
        <div class=\"error-description\">
            <h1><i class=\"fa fa-exclamation-circle\"></i> ";
        // line 14
        $this->displayBlock("page_title", $context, $blocks);
        echo "</h1>

            <div class=\"error-message\">
                ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "publicMessage", array()), $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "translationParameters", array()), "EasyAdminBundle"), "html", null, true);
        echo "
            </div>
        </div>
    </section>
";
        
        $__internal_2927a6d9218631f6c2e7727f91a9e590156352f30a8b1b581cab7a644746bf94->leave($__internal_2927a6d9218631f6c2e7727f91a9e590156352f30a8b1b581cab7a644746bf94_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 17,  72 => 14,  68 => 12,  62 => 11,  50 => 9,  38 => 8,  31 => 3,  29 => 1,  20 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set _entity_config = easyadmin_entity(app.request.query.get('entity')) %}
{% extends [
    _entity_config.templates.layout|default(''),
    easyadmin_config('design.templates.layout'),
    '@EasyAdmin/default/layout.html.twig'
] %}

{% block body_class 'error' %}
{% block page_title %}{{ 'errors'|transchoice(1, {}, 'EasyAdminBundle') }}{% endblock %}

{% block content %}
    <section id=\"main\" class=\"content\">
        <div class=\"error-description\">
            <h1><i class=\"fa fa-exclamation-circle\"></i> {{ block('page_title') }}</h1>

            <div class=\"error-message\">
                {{ exception.publicMessage|trans(exception.translationParameters, 'EasyAdminBundle') }}
            </div>
        </div>
    </section>
{% endblock %}
", "@EasyAdmin/default/exception.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\default\\exception.html.twig");
    }
}
