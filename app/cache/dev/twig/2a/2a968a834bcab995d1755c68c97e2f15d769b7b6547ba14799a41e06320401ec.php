<?php

/* @EasyAdmin/default/edit.html.twig */
class __TwigTemplate_253a8b09d1ba43b0732c61dd951ca5372e64dd1739a81dcff8c2a18b29a3fae2 extends Twig_Template
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
            'delete_form' => array($this, 'block_delete_form'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 8
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "layout", array()), "@EasyAdmin/default/edit.html.twig", 8);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7179556a5b02fba754e54271531f3e80b6309c4e9661002ec870917c8347901a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7179556a5b02fba754e54271531f3e80b6309c4e9661002ec870917c8347901a->enter($__internal_7179556a5b02fba754e54271531f3e80b6309c4e9661002ec870917c8347901a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/edit.html.twig"));

        // line 1
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.form_theme"));
        // line 3
        $context["_entity_config"] = $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["_entity_id"] = $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "primary_key_field_name", array()));
        // line 5
        $context["__internal_0f132ea0f753f2114df7f8b1150f5464a2eb0736b4fc07de64e8d0600ce95499"] = $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 6
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 5
(isset($context["__internal_0f132ea0f753f2114df7f8b1150f5464a2eb0736b4fc07de64e8d0600ce95499"]) ? $context["__internal_0f132ea0f753f2114df7f8b1150f5464a2eb0736b4fc07de64e8d0600ce95499"] : $this->getContext($context, "__internal_0f132ea0f753f2114df7f8b1150f5464a2eb0736b4fc07de64e8d0600ce95499"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 6
(isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 5
(isset($context["__internal_0f132ea0f753f2114df7f8b1150f5464a2eb0736b4fc07de64e8d0600ce95499"]) ? $context["__internal_0f132ea0f753f2114df7f8b1150f5464a2eb0736b4fc07de64e8d0600ce95499"] : $this->getContext($context, "__internal_0f132ea0f753f2114df7f8b1150f5464a2eb0736b4fc07de64e8d0600ce95499"))), "%entity_id%" =>         // line 6
(isset($context["_entity_id"]) ? $context["_entity_id"] : $this->getContext($context, "_entity_id")));
        // line 8
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7179556a5b02fba754e54271531f3e80b6309c4e9661002ec870917c8347901a->leave($__internal_7179556a5b02fba754e54271531f3e80b6309c4e9661002ec870917c8347901a_prof);

    }

    // line 10
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_1747e114ddfdb754c935f705335cd744e06e9eda10b9e75d4d24a8e9dbf81f43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1747e114ddfdb754c935f705335cd744e06e9eda10b9e75d4d24a8e9dbf81f43->enter($__internal_1747e114ddfdb754c935f705335cd744e06e9eda10b9e75d4d24a8e9dbf81f43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ((("easyadmin-edit-" . $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array())) . "-") . (isset($context["_entity_id"]) ? $context["_entity_id"] : $this->getContext($context, "_entity_id"))), "html", null, true);
        
        $__internal_1747e114ddfdb754c935f705335cd744e06e9eda10b9e75d4d24a8e9dbf81f43->leave($__internal_1747e114ddfdb754c935f705335cd744e06e9eda10b9e75d4d24a8e9dbf81f43_prof);

    }

    // line 11
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_10fe340392c58b34f2017d80b425097daa7470f8808ee2b780d3e6956533885a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10fe340392c58b34f2017d80b425097daa7470f8808ee2b780d3e6956533885a->enter($__internal_10fe340392c58b34f2017d80b425097daa7470f8808ee2b780d3e6956533885a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("edit edit-" . twig_lower_filter($this->env, $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_10fe340392c58b34f2017d80b425097daa7470f8808ee2b780d3e6956533885a->leave($__internal_10fe340392c58b34f2017d80b425097daa7470f8808ee2b780d3e6956533885a_prof);

    }

    // line 13
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_7550a52af89e1a5693f28c1c93137714e4838f3de1f7e6aee3e856ecbacf1531 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7550a52af89e1a5693f28c1c93137714e4838f3de1f7e6aee3e856ecbacf1531->enter($__internal_7550a52af89e1a5693f28c1c93137714e4838f3de1f7e6aee3e856ecbacf1531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 14
        ob_start();
        // line 15
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit.page_title", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "edit", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "edit", array()), "title", array()), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")),         // line 5
(isset($context["__internal_0f132ea0f753f2114df7f8b1150f5464a2eb0736b4fc07de64e8d0600ce95499"]) ? $context["__internal_0f132ea0f753f2114df7f8b1150f5464a2eb0736b4fc07de64e8d0600ce95499"] : $this->getContext($context, "__internal_0f132ea0f753f2114df7f8b1150f5464a2eb0736b4fc07de64e8d0600ce95499")))) : (        // line 16
(isset($context["_default_title"]) ? $context["_default_title"] : $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_7550a52af89e1a5693f28c1c93137714e4838f3de1f7e6aee3e856ecbacf1531->leave($__internal_7550a52af89e1a5693f28c1c93137714e4838f3de1f7e6aee3e856ecbacf1531_prof);

    }

    // line 20
    public function block_main($context, array $blocks = array())
    {
        $__internal_c3e4035e3b674997454d08fb558a1bfc05e650588cbfee54601371b1539f3c0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3e4035e3b674997454d08fb558a1bfc05e650588cbfee54601371b1539f3c0f->enter($__internal_c3e4035e3b674997454d08fb558a1bfc05e650588cbfee54601371b1539f3c0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 21
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        // line 24
        echo "
    ";
        // line 25
        $this->displayBlock('delete_form', $context, $blocks);
        
        $__internal_c3e4035e3b674997454d08fb558a1bfc05e650588cbfee54601371b1539f3c0f->leave($__internal_c3e4035e3b674997454d08fb558a1bfc05e650588cbfee54601371b1539f3c0f_prof);

    }

    // line 21
    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_6a21847607844cb7bf5be7e97201ae4c1ea43fb45c3f6182806bbc23d0a3e9f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a21847607844cb7bf5be7e97201ae4c1ea43fb45c3f6182806bbc23d0a3e9f9->enter($__internal_6a21847607844cb7bf5be7e97201ae4c1ea43fb45c3f6182806bbc23d0a3e9f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 22
        echo "        ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
    ";
        
        $__internal_6a21847607844cb7bf5be7e97201ae4c1ea43fb45c3f6182806bbc23d0a3e9f9->leave($__internal_6a21847607844cb7bf5be7e97201ae4c1ea43fb45c3f6182806bbc23d0a3e9f9_prof);

    }

    // line 25
    public function block_delete_form($context, array $blocks = array())
    {
        $__internal_1768462cf8c7d2fec215087aa0e58cdf724b55833f3a624ea69e2a7db5f2057e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1768462cf8c7d2fec215087aa0e58cdf724b55833f3a624ea69e2a7db5f2057e->enter($__internal_1768462cf8c7d2fec215087aa0e58cdf724b55833f3a624ea69e2a7db5f2057e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        // line 26
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_delete_form.html.twig", array("view" => "edit", "referer" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 28
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer", 1 => ""), "method"), "delete_form" =>         // line 29
(isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "_translation_domain" => $this->getAttribute(        // line 30
(isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "translation_domain", array()), "_trans_parameters" =>         // line 31
(isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "_entity_config" =>         // line 32
(isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config"))), false);
        // line 33
        echo "
    ";
        
        $__internal_1768462cf8c7d2fec215087aa0e58cdf724b55833f3a624ea69e2a7db5f2057e->leave($__internal_1768462cf8c7d2fec215087aa0e58cdf724b55833f3a624ea69e2a7db5f2057e_prof);

    }

    // line 37
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_b65d075a1f5fb3630502724988e2cb56f3fd27c7fb8f46d541d865282e0527a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b65d075a1f5fb3630502724988e2cb56f3fd27c7fb8f46d541d865282e0527a2->enter($__internal_b65d075a1f5fb3630502724988e2cb56f3fd27c7fb8f46d541d865282e0527a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 38
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('.edit-form').areYouSure({ 'message': '";
        // line 42
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.are_you_sure", array(), "EasyAdminBundle"), "js"), "html", null, true);
        echo "' });

            \$('.form-actions').easyAdminSticky();

            \$('a.action-delete').on('click', function(e) {
                e.preventDefault();

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        \$('#delete-form').trigger('submit');
                    });
            });
        });
    </script>

    ";
        // line 58
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_select2_widget.html.twig");
        echo "
";
        
        $__internal_b65d075a1f5fb3630502724988e2cb56f3fd27c7fb8f46d541d865282e0527a2->leave($__internal_b65d075a1f5fb3630502724988e2cb56f3fd27c7fb8f46d541d865282e0527a2_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 58,  173 => 42,  165 => 38,  159 => 37,  151 => 33,  149 => 32,  148 => 31,  147 => 30,  146 => 29,  145 => 28,  143 => 26,  137 => 25,  127 => 22,  121 => 21,  114 => 25,  111 => 24,  108 => 21,  102 => 20,  92 => 16,  91 => 5,  89 => 16,  86 => 15,  84 => 14,  78 => 13,  66 => 11,  54 => 10,  47 => 8,  45 => 6,  44 => 5,  43 => 6,  42 => 5,  41 => 6,  39 => 5,  37 => 4,  35 => 3,  33 => 1,  24 => 8,);
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
{% set _entity_id = attribute(entity, _entity_config.primary_key_field_name) %}
{% trans_default_domain _entity_config.translation_domain %}
{% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans, '%entity_id%': _entity_id } %}

{% extends _entity_config.templates.layout %}

{% block body_id 'easyadmin-edit-' ~ _entity_config.name ~ '-' ~ _entity_id %}
{% block body_class 'edit edit-' ~ _entity_config.name|lower %}

{% block content_title %}
{% spaceless %}
    {% set _default_title = 'edit.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}
    {{ _entity_config.edit.title is defined ? _entity_config.edit.title|trans(_trans_parameters) : _default_title }}
{% endspaceless %}
{% endblock %}

{% block main %}
    {% block entity_form %}
        {{ form(form) }}
    {% endblock entity_form %}

    {% block delete_form %}
        {{ include('@EasyAdmin/default/includes/_delete_form.html.twig', {
            view: 'edit',
            referer: app.request.query.get('referer', ''),
            delete_form: delete_form,
            _translation_domain: _entity_config.translation_domain,
            _trans_parameters: _trans_parameters,
            _entity_config: _entity_config,
        }, with_context = false) }}
    {% endblock delete_form %}
{% endblock %}

{% block body_javascript %}
    {{ parent() }}

    <script type=\"text/javascript\">
        \$(function() {
            \$('.edit-form').areYouSure({ 'message': '{{ 'form.are_you_sure'|trans({}, 'EasyAdminBundle')|e('js') }}' });

            \$('.form-actions').easyAdminSticky();

            \$('a.action-delete').on('click', function(e) {
                e.preventDefault();

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        \$('#delete-form').trigger('submit');
                    });
            });
        });
    </script>

    {{ include('@EasyAdmin/default/includes/_select2_widget.html.twig') }}
{% endblock %}
", "@EasyAdmin/default/edit.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\default\\edit.html.twig");
    }
}
