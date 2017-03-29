<?php

/* EasyAdminBundle:default:exception.html.twig */
class __TwigTemplate_2bead348a685084f1e83778405a82618859e72c3ef0bc403ce93fc812afa6447 extends Twig_Template
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
        return $this->loadTemplate(array(0 => (($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "templates", array(), "any", false, true), "layout", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "templates", array(), "any", false, true), "layout", array()), "")) : ("")), 1 => $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.templates.layout"), 2 => "@EasyAdmin/default/layout.html.twig"), "EasyAdminBundle:default:exception.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_be3c9caa2fc03faba06f6b0de1583062a419511df5844d97d3198dfa4078f317 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be3c9caa2fc03faba06f6b0de1583062a419511df5844d97d3198dfa4078f317->enter($__internal_be3c9caa2fc03faba06f6b0de1583062a419511df5844d97d3198dfa4078f317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:exception.html.twig"));

        // line 1
        $context["_entity_config"] = $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 3
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be3c9caa2fc03faba06f6b0de1583062a419511df5844d97d3198dfa4078f317->leave($__internal_be3c9caa2fc03faba06f6b0de1583062a419511df5844d97d3198dfa4078f317_prof);

    }

    // line 8
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_7746cba1d025b6d5f4037fc9dbe58c8d3f28d2b2b270efe50772d598ef32bbdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7746cba1d025b6d5f4037fc9dbe58c8d3f28d2b2b270efe50772d598ef32bbdf->enter($__internal_7746cba1d025b6d5f4037fc9dbe58c8d3f28d2b2b270efe50772d598ef32bbdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo "error";
        
        $__internal_7746cba1d025b6d5f4037fc9dbe58c8d3f28d2b2b270efe50772d598ef32bbdf->leave($__internal_7746cba1d025b6d5f4037fc9dbe58c8d3f28d2b2b270efe50772d598ef32bbdf_prof);

    }

    // line 9
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_16ace90c6ce6a59f8858666be1b236b620eb39c3f1a2b19dcc231642598c4a8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16ace90c6ce6a59f8858666be1b236b620eb39c3f1a2b19dcc231642598c4a8a->enter($__internal_16ace90c6ce6a59f8858666be1b236b620eb39c3f1a2b19dcc231642598c4a8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("errors", 1, array(), "EasyAdminBundle"), "html", null, true);
        
        $__internal_16ace90c6ce6a59f8858666be1b236b620eb39c3f1a2b19dcc231642598c4a8a->leave($__internal_16ace90c6ce6a59f8858666be1b236b620eb39c3f1a2b19dcc231642598c4a8a_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_c67010484460d425732e060c707d8526445f01b1aad3604ec29f17745091dafb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c67010484460d425732e060c707d8526445f01b1aad3604ec29f17745091dafb->enter($__internal_c67010484460d425732e060c707d8526445f01b1aad3604ec29f17745091dafb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_c67010484460d425732e060c707d8526445f01b1aad3604ec29f17745091dafb->leave($__internal_c67010484460d425732e060c707d8526445f01b1aad3604ec29f17745091dafb_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:exception.html.twig";
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
", "EasyAdminBundle:default:exception.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\vendor\\javiereguiluz\\easyadmin-bundle/Resources/views/default/exception.html.twig");
    }
}
