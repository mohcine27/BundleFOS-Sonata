<?php

/* EasyAdminBundle:default:new.html.twig */
class __TwigTemplate_8d0c799de7b2a1e03821d7aec4f48d6941978dca5a4f97c86f9587eafe67dc2e extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "layout", array()), "EasyAdminBundle:default:new.html.twig", 7);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_55fa1c1d5a4092954f918f1478424a31075673bd5c43f94059a7744d838db5b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55fa1c1d5a4092954f918f1478424a31075673bd5c43f94059a7744d838db5b4->enter($__internal_55fa1c1d5a4092954f918f1478424a31075673bd5c43f94059a7744d838db5b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:new.html.twig"));

        // line 1
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.form_theme"));
        // line 3
        $context["_entity_config"] = $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["__internal_657717b5d8bcd43e0a6384d3b95aefe6a7896a9064d60ac717bede6678d63fed"] = $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 5
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 4
(isset($context["__internal_657717b5d8bcd43e0a6384d3b95aefe6a7896a9064d60ac717bede6678d63fed"]) ? $context["__internal_657717b5d8bcd43e0a6384d3b95aefe6a7896a9064d60ac717bede6678d63fed"] : $this->getContext($context, "__internal_657717b5d8bcd43e0a6384d3b95aefe6a7896a9064d60ac717bede6678d63fed"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 5
(isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 4
(isset($context["__internal_657717b5d8bcd43e0a6384d3b95aefe6a7896a9064d60ac717bede6678d63fed"]) ? $context["__internal_657717b5d8bcd43e0a6384d3b95aefe6a7896a9064d60ac717bede6678d63fed"] : $this->getContext($context, "__internal_657717b5d8bcd43e0a6384d3b95aefe6a7896a9064d60ac717bede6678d63fed"))));
        // line 7
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55fa1c1d5a4092954f918f1478424a31075673bd5c43f94059a7744d838db5b4->leave($__internal_55fa1c1d5a4092954f918f1478424a31075673bd5c43f94059a7744d838db5b4_prof);

    }

    // line 9
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_f0ed6cad6c9abebec5890451198691cc285ae394d1518ffd633f6a9dea83cd0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0ed6cad6c9abebec5890451198691cc285ae394d1518ffd633f6a9dea83cd0a->enter($__internal_f0ed6cad6c9abebec5890451198691cc285ae394d1518ffd633f6a9dea83cd0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ("easyadmin-new-" . $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array())), "html", null, true);
        
        $__internal_f0ed6cad6c9abebec5890451198691cc285ae394d1518ffd633f6a9dea83cd0a->leave($__internal_f0ed6cad6c9abebec5890451198691cc285ae394d1518ffd633f6a9dea83cd0a_prof);

    }

    // line 10
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_aacb0054a3456c0f6f766d3986241420d2f73e3353452a3eee01439bfd504986 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aacb0054a3456c0f6f766d3986241420d2f73e3353452a3eee01439bfd504986->enter($__internal_aacb0054a3456c0f6f766d3986241420d2f73e3353452a3eee01439bfd504986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("new new-" . twig_lower_filter($this->env, $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_aacb0054a3456c0f6f766d3986241420d2f73e3353452a3eee01439bfd504986->leave($__internal_aacb0054a3456c0f6f766d3986241420d2f73e3353452a3eee01439bfd504986_prof);

    }

    // line 12
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_a877eecb57a664c338a6f2945ee00abe957309ff8a0025f72c679207c098a19c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a877eecb57a664c338a6f2945ee00abe957309ff8a0025f72c679207c098a19c->enter($__internal_a877eecb57a664c338a6f2945ee00abe957309ff8a0025f72c679207c098a19c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 13
        ob_start();
        // line 14
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("new.page_title", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "new", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "new", array()), "title", array()), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")),         // line 4
(isset($context["__internal_657717b5d8bcd43e0a6384d3b95aefe6a7896a9064d60ac717bede6678d63fed"]) ? $context["__internal_657717b5d8bcd43e0a6384d3b95aefe6a7896a9064d60ac717bede6678d63fed"] : $this->getContext($context, "__internal_657717b5d8bcd43e0a6384d3b95aefe6a7896a9064d60ac717bede6678d63fed")))) : (        // line 15
(isset($context["_default_title"]) ? $context["_default_title"] : $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_a877eecb57a664c338a6f2945ee00abe957309ff8a0025f72c679207c098a19c->leave($__internal_a877eecb57a664c338a6f2945ee00abe957309ff8a0025f72c679207c098a19c_prof);

    }

    // line 19
    public function block_main($context, array $blocks = array())
    {
        $__internal_5a13357b540cb6b60036a3162059f9d2266ce0e6e173baefa437231c8d99b19e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a13357b540cb6b60036a3162059f9d2266ce0e6e173baefa437231c8d99b19e->enter($__internal_5a13357b540cb6b60036a3162059f9d2266ce0e6e173baefa437231c8d99b19e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 20
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        
        $__internal_5a13357b540cb6b60036a3162059f9d2266ce0e6e173baefa437231c8d99b19e->leave($__internal_5a13357b540cb6b60036a3162059f9d2266ce0e6e173baefa437231c8d99b19e_prof);

    }

    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_068798b016998f8ed1bdd11cd5c75e7c7b1ca01de5c3e5a77adfb71f5b2de424 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_068798b016998f8ed1bdd11cd5c75e7c7b1ca01de5c3e5a77adfb71f5b2de424->enter($__internal_068798b016998f8ed1bdd11cd5c75e7c7b1ca01de5c3e5a77adfb71f5b2de424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 21
        echo "        ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
    ";
        
        $__internal_068798b016998f8ed1bdd11cd5c75e7c7b1ca01de5c3e5a77adfb71f5b2de424->leave($__internal_068798b016998f8ed1bdd11cd5c75e7c7b1ca01de5c3e5a77adfb71f5b2de424_prof);

    }

    // line 25
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_4b98e4850af29a80ec96e386f23b176b3a6a78c11f225c3904265f42ce5d7d83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b98e4850af29a80ec96e386f23b176b3a6a78c11f225c3904265f42ce5d7d83->enter($__internal_4b98e4850af29a80ec96e386f23b176b3a6a78c11f225c3904265f42ce5d7d83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

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
        
        $__internal_4b98e4850af29a80ec96e386f23b176b3a6a78c11f225c3904265f42ce5d7d83->leave($__internal_4b98e4850af29a80ec96e386f23b176b3a6a78c11f225c3904265f42ce5d7d83_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:new.html.twig";
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
", "EasyAdminBundle:default:new.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\vendor\\javiereguiluz\\easyadmin-bundle/Resources/views/default/new.html.twig");
    }
}
