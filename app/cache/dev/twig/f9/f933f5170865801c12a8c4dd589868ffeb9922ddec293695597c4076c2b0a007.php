<?php

/* @EasyAdmin/default/show.html.twig */
class __TwigTemplate_fa54d63def5c58aa62e3ec9d8465cec7625e54fe62d21a92dc4dc519dff1e191 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'content_title' => array($this, 'block_content_title'),
            'main' => array($this, 'block_main'),
            'item_actions' => array($this, 'block_item_actions'),
            'delete_form' => array($this, 'block_delete_form'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 6
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "layout", array()), "@EasyAdmin/default/show.html.twig", 6);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_60fd129319f98f65647f98100bd8e528a2bc1c11a35d234e987f9135ebc51d77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60fd129319f98f65647f98100bd8e528a2bc1c11a35d234e987f9135ebc51d77->enter($__internal_60fd129319f98f65647f98100bd8e528a2bc1c11a35d234e987f9135ebc51d77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/show.html.twig"));

        // line 1
        $context["_entity_config"] = $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 2
        $context["_entity_id"] = $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "primary_key_field_name", array()));
        // line 3
        $context["__internal_7e81f67a370db0484570dc4dc31d98b580a98800f65e32759f13b9fa96d038f6"] = $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 4
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 3
(isset($context["__internal_7e81f67a370db0484570dc4dc31d98b580a98800f65e32759f13b9fa96d038f6"]) ? $context["__internal_7e81f67a370db0484570dc4dc31d98b580a98800f65e32759f13b9fa96d038f6"] : $this->getContext($context, "__internal_7e81f67a370db0484570dc4dc31d98b580a98800f65e32759f13b9fa96d038f6"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 4
(isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 3
(isset($context["__internal_7e81f67a370db0484570dc4dc31d98b580a98800f65e32759f13b9fa96d038f6"]) ? $context["__internal_7e81f67a370db0484570dc4dc31d98b580a98800f65e32759f13b9fa96d038f6"] : $this->getContext($context, "__internal_7e81f67a370db0484570dc4dc31d98b580a98800f65e32759f13b9fa96d038f6"))), "%entity_id%" =>         // line 4
(isset($context["_entity_id"]) ? $context["_entity_id"] : $this->getContext($context, "_entity_id")));
        // line 6
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60fd129319f98f65647f98100bd8e528a2bc1c11a35d234e987f9135ebc51d77->leave($__internal_60fd129319f98f65647f98100bd8e528a2bc1c11a35d234e987f9135ebc51d77_prof);

    }

    // line 8
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_24381c0d10eeefda7e9cdf9e49ccc7cd8599504b477c9784fcc3846d9459d73c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24381c0d10eeefda7e9cdf9e49ccc7cd8599504b477c9784fcc3846d9459d73c->enter($__internal_24381c0d10eeefda7e9cdf9e49ccc7cd8599504b477c9784fcc3846d9459d73c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ((("easyadmin-show-" . $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array())) . "-") . (isset($context["_entity_id"]) ? $context["_entity_id"] : $this->getContext($context, "_entity_id"))), "html", null, true);
        
        $__internal_24381c0d10eeefda7e9cdf9e49ccc7cd8599504b477c9784fcc3846d9459d73c->leave($__internal_24381c0d10eeefda7e9cdf9e49ccc7cd8599504b477c9784fcc3846d9459d73c_prof);

    }

    // line 9
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_9147b11d4d666d6ef3e819d39e0b694268d906e6b9afbafafec677e0559c4ba6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9147b11d4d666d6ef3e819d39e0b694268d906e6b9afbafafec677e0559c4ba6->enter($__internal_9147b11d4d666d6ef3e819d39e0b694268d906e6b9afbafafec677e0559c4ba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("show show-" . twig_lower_filter($this->env, $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_9147b11d4d666d6ef3e819d39e0b694268d906e6b9afbafafec677e0559c4ba6->leave($__internal_9147b11d4d666d6ef3e819d39e0b694268d906e6b9afbafafec677e0559c4ba6_prof);

    }

    // line 11
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_c8fbade81de5af918b04546dfd95dc39c2b45d893fedc329d2f39bf52a8d20c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8fbade81de5af918b04546dfd95dc39c2b45d893fedc329d2f39bf52a8d20c9->enter($__internal_c8fbade81de5af918b04546dfd95dc39c2b45d893fedc329d2f39bf52a8d20c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 12
        ob_start();
        // line 13
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("show.page_title", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 14
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "show", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "show", array()), "title", array()), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")),         // line 3
(isset($context["__internal_7e81f67a370db0484570dc4dc31d98b580a98800f65e32759f13b9fa96d038f6"]) ? $context["__internal_7e81f67a370db0484570dc4dc31d98b580a98800f65e32759f13b9fa96d038f6"] : $this->getContext($context, "__internal_7e81f67a370db0484570dc4dc31d98b580a98800f65e32759f13b9fa96d038f6")))) : (        // line 14
(isset($context["_default_title"]) ? $context["_default_title"] : $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_c8fbade81de5af918b04546dfd95dc39c2b45d893fedc329d2f39bf52a8d20c9->leave($__internal_c8fbade81de5af918b04546dfd95dc39c2b45d893fedc329d2f39bf52a8d20c9_prof);

    }

    // line 18
    public function block_main($context, array $blocks = array())
    {
        $__internal_a7d13ff96ca68a48cff86d414ef4fceccea9a216e71b50cf965c015e63c18c4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7d13ff96ca68a48cff86d414ef4fceccea9a216e71b50cf965c015e63c18c4e->enter($__internal_a7d13ff96ca68a48cff86d414ef4fceccea9a216e71b50cf965c015e63c18c4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 19
        echo "    <div class=\"form-horizontal\">
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) ? $context["fields"] : $this->getContext($context, "fields")));
        foreach ($context['_seq'] as $context["field"] => $context["metadata"]) {
            // line 21
            echo "            <div class=\"form-group field-";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, (($this->getAttribute($context["metadata"], "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["metadata"], "type", array()), "default")) : ("default"))), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["metadata"], "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["metadata"], "css_class", array()), "")) : ("")), "html", null, true);
            echo "\">
                <label class=\"col-sm-2 control-label\">
                    ";
            // line 23
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute($context["metadata"], "label", array())) ? ($this->getAttribute($context["metadata"], "label", array())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize($context["field"]))), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")),             // line 3
(isset($context["__internal_7e81f67a370db0484570dc4dc31d98b580a98800f65e32759f13b9fa96d038f6"]) ? $context["__internal_7e81f67a370db0484570dc4dc31d98b580a98800f65e32759f13b9fa96d038f6"] : $this->getContext($context, "__internal_7e81f67a370db0484570dc4dc31d98b580a98800f65e32759f13b9fa96d038f6")));
            // line 23
            echo "
                </label>
                <div class=\"col-sm-10\">
                    <div class=\"form-control\">
                        ";
            // line 27
            echo $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->renderEntityField($this->env, "show", $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()), (isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), $context["metadata"]);
            echo "
                    </div>

                    ";
            // line 30
            if (((($this->getAttribute($context["metadata"], "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["metadata"], "help", array()), "")) : ("")) != "")) {
                // line 31
                echo "                        <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["metadata"], "help", array()), array(),                 // line 3
(isset($context["__internal_7e81f67a370db0484570dc4dc31d98b580a98800f65e32759f13b9fa96d038f6"]) ? $context["__internal_7e81f67a370db0484570dc4dc31d98b580a98800f65e32759f13b9fa96d038f6"] : $this->getContext($context, "__internal_7e81f67a370db0484570dc4dc31d98b580a98800f65e32759f13b9fa96d038f6")));
                // line 31
                echo "</span>
                    ";
            }
            // line 33
            echo "                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['metadata'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "
        <div class=\"form-group form-actions\">
            <div class=\"col-sm-10 col-sm-offset-2\">
            ";
        // line 39
        $this->displayBlock('item_actions', $context, $blocks);
        // line 51
        echo "            </div>
        </div>
    </div>

    ";
        // line 55
        $this->displayBlock('delete_form', $context, $blocks);
        
        $__internal_a7d13ff96ca68a48cff86d414ef4fceccea9a216e71b50cf965c015e63c18c4e->leave($__internal_a7d13ff96ca68a48cff86d414ef4fceccea9a216e71b50cf965c015e63c18c4e_prof);

    }

    // line 39
    public function block_item_actions($context, array $blocks = array())
    {
        $__internal_b1ba99b631c90c522c01605b370193b90a5b91c191610981d709cc6a5df23561 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1ba99b631c90c522c01605b370193b90a5b91c191610981d709cc6a5df23561->enter($__internal_b1ba99b631c90c522c01605b370193b90a5b91c191610981d709cc6a5df23561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        // line 40
        echo "                ";
        $context["_show_actions"] = $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionsForItem("show", $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()));
        // line 41
        echo "                ";
        $context["_request_parameters"] = array("entity" => $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()), "referer" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer"), "method"));
        // line 42
        echo "
                ";
        // line 43
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_actions.html.twig", array("actions" =>         // line 44
(isset($context["_show_actions"]) ? $context["_show_actions"] : $this->getContext($context, "_show_actions")), "request_parameters" =>         // line 45
(isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), "translation_domain" => $this->getAttribute(        // line 46
(isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "translation_domain", array()), "trans_parameters" =>         // line 47
(isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "item_id" =>         // line 48
(isset($context["_entity_id"]) ? $context["_entity_id"] : $this->getContext($context, "_entity_id"))), false);
        // line 49
        echo "
            ";
        
        $__internal_b1ba99b631c90c522c01605b370193b90a5b91c191610981d709cc6a5df23561->leave($__internal_b1ba99b631c90c522c01605b370193b90a5b91c191610981d709cc6a5df23561_prof);

    }

    // line 55
    public function block_delete_form($context, array $blocks = array())
    {
        $__internal_9a714abbcf40309a43c57baed97ceb9a2b652b89b545ad00e0736d819167e4fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a714abbcf40309a43c57baed97ceb9a2b652b89b545ad00e0736d819167e4fa->enter($__internal_9a714abbcf40309a43c57baed97ceb9a2b652b89b545ad00e0736d819167e4fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        // line 56
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_delete_form.html.twig", array("view" => "show", "referer" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 58
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer", 1 => ""), "method"), "delete_form" =>         // line 59
(isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "_translation_domain" => $this->getAttribute(        // line 60
(isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "translation_domain", array()), "_trans_parameters" =>         // line 61
(isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "_entity_config" =>         // line 62
(isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config"))), false);
        // line 63
        echo "
    ";
        
        $__internal_9a714abbcf40309a43c57baed97ceb9a2b652b89b545ad00e0736d819167e4fa->leave($__internal_9a714abbcf40309a43c57baed97ceb9a2b652b89b545ad00e0736d819167e4fa_prof);

    }

    // line 67
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_11ae09559e76ea5e00bd22c213167c8ff0a4a094ff6eb6338b42aa11e5b8312c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11ae09559e76ea5e00bd22c213167c8ff0a4a094ff6eb6338b42aa11e5b8312c->enter($__internal_11ae09559e76ea5e00bd22c213167c8ff0a4a094ff6eb6338b42aa11e5b8312c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 68
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
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
        
        $__internal_11ae09559e76ea5e00bd22c213167c8ff0a4a094ff6eb6338b42aa11e5b8312c->leave($__internal_11ae09559e76ea5e00bd22c213167c8ff0a4a094ff6eb6338b42aa11e5b8312c_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 68,  226 => 67,  218 => 63,  216 => 62,  215 => 61,  214 => 60,  213 => 59,  212 => 58,  210 => 56,  204 => 55,  196 => 49,  194 => 48,  193 => 47,  192 => 46,  191 => 45,  190 => 44,  189 => 43,  186 => 42,  183 => 41,  180 => 40,  174 => 39,  167 => 55,  161 => 51,  159 => 39,  154 => 36,  146 => 33,  142 => 31,  140 => 3,  138 => 31,  136 => 30,  130 => 27,  124 => 23,  122 => 3,  121 => 23,  113 => 21,  109 => 20,  106 => 19,  100 => 18,  90 => 14,  89 => 3,  87 => 14,  84 => 13,  82 => 12,  76 => 11,  64 => 9,  52 => 8,  45 => 6,  43 => 4,  42 => 3,  41 => 4,  40 => 3,  39 => 4,  37 => 3,  35 => 2,  33 => 1,  24 => 6,);
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
{% set _entity_id = attribute(entity, _entity_config.primary_key_field_name) %}
{% trans_default_domain _entity_config.translation_domain %}
{% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans, '%entity_id%': _entity_id } %}

{% extends _entity_config.templates.layout %}

{% block body_id 'easyadmin-show-' ~ _entity_config.name ~ '-' ~ _entity_id %}
{% block body_class 'show show-' ~ _entity_config.name|lower %}

{% block content_title %}
{% spaceless %}
    {% set _default_title = 'show.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}
    {{ _entity_config.show.title is defined ? _entity_config.show.title|trans(_trans_parameters) : _default_title }}
{% endspaceless %}
{% endblock %}

{% block main %}
    <div class=\"form-horizontal\">
        {% for field, metadata in fields %}
            <div class=\"form-group field-{{ metadata.type|default('default')|lower }} {{ metadata.css_class|default('') }}\">
                <label class=\"col-sm-2 control-label\">
                    {{ (metadata.label ?: field|humanize)|trans(_trans_parameters)|raw }}
                </label>
                <div class=\"col-sm-10\">
                    <div class=\"form-control\">
                        {{ easyadmin_render_field_for_show_view(_entity_config.name, entity, metadata) }}
                    </div>

                    {% if metadata.help|default('') != '' %}
                        <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> {{ metadata.help|trans|raw }}</span>
                    {% endif %}
                </div>
            </div>
        {% endfor %}

        <div class=\"form-group form-actions\">
            <div class=\"col-sm-10 col-sm-offset-2\">
            {% block item_actions %}
                {% set _show_actions = easyadmin_get_actions_for_show_item(_entity_config.name) %}
                {% set _request_parameters = { entity: _entity_config.name, referer: app.request.query.get('referer') } %}

                {{ include('@EasyAdmin/default/includes/_actions.html.twig', {
                    actions: _show_actions,
                    request_parameters: _request_parameters,
                    translation_domain: _entity_config.translation_domain,
                    trans_parameters: _trans_parameters,
                    item_id: _entity_id
                }, with_context = false) }}
            {% endblock item_actions %}
            </div>
        </div>
    </div>

    {% block delete_form %}
        {{ include('@EasyAdmin/default/includes/_delete_form.html.twig', {
            view: 'show',
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
{% endblock %}
", "@EasyAdmin/default/show.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\default\\show.html.twig");
    }
}
