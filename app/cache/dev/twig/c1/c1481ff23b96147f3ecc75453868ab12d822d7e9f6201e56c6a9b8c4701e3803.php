<?php

/* EasyAdminBundle:default:edit.html.twig */
class __TwigTemplate_fca76b5affd4e15a62f82de409f4cfff329c0c72982550b69e60d0b1dbb87b38 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "layout", array()), "EasyAdminBundle:default:edit.html.twig", 8);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a37080c7aee692a042f8026991fc9a105132a559a45dcdce3532a051825752bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a37080c7aee692a042f8026991fc9a105132a559a45dcdce3532a051825752bb->enter($__internal_a37080c7aee692a042f8026991fc9a105132a559a45dcdce3532a051825752bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:edit.html.twig"));

        // line 1
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.form_theme"));
        // line 3
        $context["_entity_config"] = $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["_entity_id"] = $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "primary_key_field_name", array()));
        // line 5
        $context["__internal_233d311a9771d1a956a9c21644f014b6bc6a657aa4b82cad3758e5e2f5694b5a"] = $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 6
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 5
(isset($context["__internal_233d311a9771d1a956a9c21644f014b6bc6a657aa4b82cad3758e5e2f5694b5a"]) ? $context["__internal_233d311a9771d1a956a9c21644f014b6bc6a657aa4b82cad3758e5e2f5694b5a"] : $this->getContext($context, "__internal_233d311a9771d1a956a9c21644f014b6bc6a657aa4b82cad3758e5e2f5694b5a"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 6
(isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 5
(isset($context["__internal_233d311a9771d1a956a9c21644f014b6bc6a657aa4b82cad3758e5e2f5694b5a"]) ? $context["__internal_233d311a9771d1a956a9c21644f014b6bc6a657aa4b82cad3758e5e2f5694b5a"] : $this->getContext($context, "__internal_233d311a9771d1a956a9c21644f014b6bc6a657aa4b82cad3758e5e2f5694b5a"))), "%entity_id%" =>         // line 6
(isset($context["_entity_id"]) ? $context["_entity_id"] : $this->getContext($context, "_entity_id")));
        // line 8
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a37080c7aee692a042f8026991fc9a105132a559a45dcdce3532a051825752bb->leave($__internal_a37080c7aee692a042f8026991fc9a105132a559a45dcdce3532a051825752bb_prof);

    }

    // line 10
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_19929f650f93df209ba85cf6b9311e29b416160709ee0a3e3f0b0d35c3bc94cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19929f650f93df209ba85cf6b9311e29b416160709ee0a3e3f0b0d35c3bc94cd->enter($__internal_19929f650f93df209ba85cf6b9311e29b416160709ee0a3e3f0b0d35c3bc94cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ((("easyadmin-edit-" . $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array())) . "-") . (isset($context["_entity_id"]) ? $context["_entity_id"] : $this->getContext($context, "_entity_id"))), "html", null, true);
        
        $__internal_19929f650f93df209ba85cf6b9311e29b416160709ee0a3e3f0b0d35c3bc94cd->leave($__internal_19929f650f93df209ba85cf6b9311e29b416160709ee0a3e3f0b0d35c3bc94cd_prof);

    }

    // line 11
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_f33b8b736e2e1f218d6a31ebc565d2035a9bc760d367e144a47f860ef738ebdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f33b8b736e2e1f218d6a31ebc565d2035a9bc760d367e144a47f860ef738ebdd->enter($__internal_f33b8b736e2e1f218d6a31ebc565d2035a9bc760d367e144a47f860ef738ebdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("edit edit-" . twig_lower_filter($this->env, $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_f33b8b736e2e1f218d6a31ebc565d2035a9bc760d367e144a47f860ef738ebdd->leave($__internal_f33b8b736e2e1f218d6a31ebc565d2035a9bc760d367e144a47f860ef738ebdd_prof);

    }

    // line 13
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_ecb133be252b44ec40d4a3d235cf9c86dec5a5c19d0baabeca734c6e6f688018 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecb133be252b44ec40d4a3d235cf9c86dec5a5c19d0baabeca734c6e6f688018->enter($__internal_ecb133be252b44ec40d4a3d235cf9c86dec5a5c19d0baabeca734c6e6f688018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 14
        ob_start();
        // line 15
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit.page_title", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "edit", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "edit", array()), "title", array()), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")),         // line 5
(isset($context["__internal_233d311a9771d1a956a9c21644f014b6bc6a657aa4b82cad3758e5e2f5694b5a"]) ? $context["__internal_233d311a9771d1a956a9c21644f014b6bc6a657aa4b82cad3758e5e2f5694b5a"] : $this->getContext($context, "__internal_233d311a9771d1a956a9c21644f014b6bc6a657aa4b82cad3758e5e2f5694b5a")))) : (        // line 16
(isset($context["_default_title"]) ? $context["_default_title"] : $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_ecb133be252b44ec40d4a3d235cf9c86dec5a5c19d0baabeca734c6e6f688018->leave($__internal_ecb133be252b44ec40d4a3d235cf9c86dec5a5c19d0baabeca734c6e6f688018_prof);

    }

    // line 20
    public function block_main($context, array $blocks = array())
    {
        $__internal_3f009de15fe08c329f4fc3a5497dd608e4ccf9ef99706513fb537737bdcd70df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f009de15fe08c329f4fc3a5497dd608e4ccf9ef99706513fb537737bdcd70df->enter($__internal_3f009de15fe08c329f4fc3a5497dd608e4ccf9ef99706513fb537737bdcd70df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 21
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        // line 24
        echo "
    ";
        // line 25
        $this->displayBlock('delete_form', $context, $blocks);
        
        $__internal_3f009de15fe08c329f4fc3a5497dd608e4ccf9ef99706513fb537737bdcd70df->leave($__internal_3f009de15fe08c329f4fc3a5497dd608e4ccf9ef99706513fb537737bdcd70df_prof);

    }

    // line 21
    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_bf14b2c93c56bd100cd93e9733001f8a58486127d0c875ee2bb62ac52fa273c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf14b2c93c56bd100cd93e9733001f8a58486127d0c875ee2bb62ac52fa273c5->enter($__internal_bf14b2c93c56bd100cd93e9733001f8a58486127d0c875ee2bb62ac52fa273c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 22
        echo "        ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
    ";
        
        $__internal_bf14b2c93c56bd100cd93e9733001f8a58486127d0c875ee2bb62ac52fa273c5->leave($__internal_bf14b2c93c56bd100cd93e9733001f8a58486127d0c875ee2bb62ac52fa273c5_prof);

    }

    // line 25
    public function block_delete_form($context, array $blocks = array())
    {
        $__internal_9f2018e538a7b3ba63bd17f454fbabf0d495773fcc91332784efccc8c18c117a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f2018e538a7b3ba63bd17f454fbabf0d495773fcc91332784efccc8c18c117a->enter($__internal_9f2018e538a7b3ba63bd17f454fbabf0d495773fcc91332784efccc8c18c117a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

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
        
        $__internal_9f2018e538a7b3ba63bd17f454fbabf0d495773fcc91332784efccc8c18c117a->leave($__internal_9f2018e538a7b3ba63bd17f454fbabf0d495773fcc91332784efccc8c18c117a_prof);

    }

    // line 37
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_26b72824af1be509c8026c3727b2623c5ecf5b3cd70d2e015c31c2d58d0d518d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26b72824af1be509c8026c3727b2623c5ecf5b3cd70d2e015c31c2d58d0d518d->enter($__internal_26b72824af1be509c8026c3727b2623c5ecf5b3cd70d2e015c31c2d58d0d518d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

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
        
        $__internal_26b72824af1be509c8026c3727b2623c5ecf5b3cd70d2e015c31c2d58d0d518d->leave($__internal_26b72824af1be509c8026c3727b2623c5ecf5b3cd70d2e015c31c2d58d0d518d_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:edit.html.twig";
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
", "EasyAdminBundle:default:edit.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\vendor\\javiereguiluz\\easyadmin-bundle/Resources/views/default/edit.html.twig");
    }
}
