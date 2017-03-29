<?php

/* @EasyAdmin/default/new.html.twig */
class __TwigTemplate_15623bccbc71b5c4a0c5cb2c57d4916ac216cc8dbd4a6a3d8ac7d97321550ca2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'content_title' => array($this, 'block_content_title'),
            'main' => array($this, 'block_main'),
            'entity_form' => array($this, 'block_entity_form'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 7
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "layout", array()), "@EasyAdmin/default/new.html.twig", 7);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c524f96131319abaef0f01242fcd12e9b279e4614daa64f3fe27b28f5ee1deb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c524f96131319abaef0f01242fcd12e9b279e4614daa64f3fe27b28f5ee1deb5->enter($__internal_c524f96131319abaef0f01242fcd12e9b279e4614daa64f3fe27b28f5ee1deb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/new.html.twig"));

        // line 1
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.form_theme"));
        // line 3
        $context["_entity_config"] = $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["__internal_6ac757690173981e73809504795fb00b9bbd2c20df4927ec5ed140430f6bd3b5"] = $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 5
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 4
(isset($context["__internal_6ac757690173981e73809504795fb00b9bbd2c20df4927ec5ed140430f6bd3b5"]) ? $context["__internal_6ac757690173981e73809504795fb00b9bbd2c20df4927ec5ed140430f6bd3b5"] : $this->getContext($context, "__internal_6ac757690173981e73809504795fb00b9bbd2c20df4927ec5ed140430f6bd3b5"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 5
(isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 4
(isset($context["__internal_6ac757690173981e73809504795fb00b9bbd2c20df4927ec5ed140430f6bd3b5"]) ? $context["__internal_6ac757690173981e73809504795fb00b9bbd2c20df4927ec5ed140430f6bd3b5"] : $this->getContext($context, "__internal_6ac757690173981e73809504795fb00b9bbd2c20df4927ec5ed140430f6bd3b5"))));
        // line 7
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c524f96131319abaef0f01242fcd12e9b279e4614daa64f3fe27b28f5ee1deb5->leave($__internal_c524f96131319abaef0f01242fcd12e9b279e4614daa64f3fe27b28f5ee1deb5_prof);

    }

    // line 9
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_9d22ceae624aca8143357db5b91f7acf697cef062c2119e77a6d42952e3eca4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d22ceae624aca8143357db5b91f7acf697cef062c2119e77a6d42952e3eca4d->enter($__internal_9d22ceae624aca8143357db5b91f7acf697cef062c2119e77a6d42952e3eca4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ("easyadmin-new-" . $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array())), "html", null, true);
        
        $__internal_9d22ceae624aca8143357db5b91f7acf697cef062c2119e77a6d42952e3eca4d->leave($__internal_9d22ceae624aca8143357db5b91f7acf697cef062c2119e77a6d42952e3eca4d_prof);

    }

    // line 10
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_9aa4060c5566e93f6eb5e508c29a62a240918a77986ce68714988d2209986e10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9aa4060c5566e93f6eb5e508c29a62a240918a77986ce68714988d2209986e10->enter($__internal_9aa4060c5566e93f6eb5e508c29a62a240918a77986ce68714988d2209986e10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("new new-" . twig_lower_filter($this->env, $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_9aa4060c5566e93f6eb5e508c29a62a240918a77986ce68714988d2209986e10->leave($__internal_9aa4060c5566e93f6eb5e508c29a62a240918a77986ce68714988d2209986e10_prof);

    }

    // line 12
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_4c4df39673462b01f7d8b67570f92c95a4c3dc110e45ddb75f05a8d0e8f8f640 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c4df39673462b01f7d8b67570f92c95a4c3dc110e45ddb75f05a8d0e8f8f640->enter($__internal_4c4df39673462b01f7d8b67570f92c95a4c3dc110e45ddb75f05a8d0e8f8f640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 13
        ob_start();
        // line 14
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("new.page_title", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "new", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "new", array()), "title", array()), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")),         // line 4
(isset($context["__internal_6ac757690173981e73809504795fb00b9bbd2c20df4927ec5ed140430f6bd3b5"]) ? $context["__internal_6ac757690173981e73809504795fb00b9bbd2c20df4927ec5ed140430f6bd3b5"] : $this->getContext($context, "__internal_6ac757690173981e73809504795fb00b9bbd2c20df4927ec5ed140430f6bd3b5")))) : (        // line 15
(isset($context["_default_title"]) ? $context["_default_title"] : $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_4c4df39673462b01f7d8b67570f92c95a4c3dc110e45ddb75f05a8d0e8f8f640->leave($__internal_4c4df39673462b01f7d8b67570f92c95a4c3dc110e45ddb75f05a8d0e8f8f640_prof);

    }

    // line 19
    public function block_main($context, array $blocks = array())
    {
        $__internal_1adef0e395ebd5ed0bfa273e6535bd0097bda2fa26d1cd1436dbd1a741baadbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1adef0e395ebd5ed0bfa273e6535bd0097bda2fa26d1cd1436dbd1a741baadbf->enter($__internal_1adef0e395ebd5ed0bfa273e6535bd0097bda2fa26d1cd1436dbd1a741baadbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 20
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        
        $__internal_1adef0e395ebd5ed0bfa273e6535bd0097bda2fa26d1cd1436dbd1a741baadbf->leave($__internal_1adef0e395ebd5ed0bfa273e6535bd0097bda2fa26d1cd1436dbd1a741baadbf_prof);

    }

    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_fef4ad643496cec48ab06157bc5b53e4b5f3f2d15cb899e13414c6de9f37b8b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fef4ad643496cec48ab06157bc5b53e4b5f3f2d15cb899e13414c6de9f37b8b2->enter($__internal_fef4ad643496cec48ab06157bc5b53e4b5f3f2d15cb899e13414c6de9f37b8b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 21
        echo "        ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
    ";
        
        $__internal_fef4ad643496cec48ab06157bc5b53e4b5f3f2d15cb899e13414c6de9f37b8b2->leave($__internal_fef4ad643496cec48ab06157bc5b53e4b5f3f2d15cb899e13414c6de9f37b8b2_prof);

    }

    // line 25
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_177e72e4e6a751d5de40d8e1b1fc0f864fc8867c08c82821c04938cecb97efe4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_177e72e4e6a751d5de40d8e1b1fc0f864fc8867c08c82821c04938cecb97efe4->enter($__internal_177e72e4e6a751d5de40d8e1b1fc0f864fc8867c08c82821c04938cecb97efe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 26
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('.new-form').areYouSure({ 'message': '";
        // line 30
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.are_you_sure", array(), "EasyAdminBundle"), "js"), "html", null, true);
        echo "' });

            \$('.form-actions').easyAdminSticky();
        });
    </script>

    ";
        // line 36
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_select2_widget.html.twig");
        echo "
";
        
        $__internal_177e72e4e6a751d5de40d8e1b1fc0f864fc8867c08c82821c04938cecb97efe4->leave($__internal_177e72e4e6a751d5de40d8e1b1fc0f864fc8867c08c82821c04938cecb97efe4_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 36,  141 => 30,  133 => 26,  127 => 25,  117 => 21,  104 => 20,  98 => 19,  88 => 15,  87 => 4,  85 => 15,  82 => 14,  80 => 13,  74 => 12,  62 => 10,  50 => 9,  43 => 7,  41 => 4,  40 => 5,  39 => 4,  38 => 5,  36 => 4,  34 => 3,  32 => 1,  23 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% form_theme form with easyadmin_config('design.form_theme') %}

{% set _entity_config = easyadmin_entity(app.request.query.get('entity')) %}
{% trans_default_domain _entity_config.translation_domain %}
{% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans } %}

{% extends _entity_config.templates.layout %}

{% block body_id 'easyadmin-new-' ~ _entity_config.name %}
{% block body_class 'new new-' ~ _entity_config.name|lower %}

{% block content_title %}
{% spaceless %}
    {% set _default_title = 'new.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}
    {{ _entity_config.new.title is defined ? _entity_config.new.title|trans(_trans_parameters) : _default_title }}
{% endspaceless %}
{% endblock %}

{% block main %}
    {% block entity_form %}
        {{ form(form) }}
    {% endblock entity_form %}
{% endblock %}

{% block body_javascript %}
    {{ parent() }}

    <script type=\"text/javascript\">
        \$(function() {
            \$('.new-form').areYouSure({ 'message': '{{ 'form.are_you_sure'|trans({}, 'EasyAdminBundle')|e('js') }}' });

            \$('.form-actions').easyAdminSticky();
        });
    </script>

    {{ include('@EasyAdmin/default/includes/_select2_widget.html.twig') }}
{% endblock %}
", "@EasyAdmin/default/new.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\default\\new.html.twig");
    }
}
