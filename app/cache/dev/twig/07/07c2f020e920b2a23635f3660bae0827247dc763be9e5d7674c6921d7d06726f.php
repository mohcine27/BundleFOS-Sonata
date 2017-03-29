<?php

/* SonataAdminBundle:CRUD:base_edit.html.twig */
class __TwigTemplate_1f717c416b117504461f6a4e04974439b479ff72563f968cb208f042908b15b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $_trait_0 = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 32);
        // line 32
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."SonataAdminBundle:CRUD:base_edit_form.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        if (!isset($_trait_0_blocks["form"])) {
            throw new Twig_Error_Runtime(sprintf('Block "form" is not defined in trait "SonataAdminBundle:CRUD:base_edit_form.html.twig".'));
        }

        $_trait_0_blocks["parentForm"] = $_trait_0_blocks["form"]; unset($_trait_0_blocks["form"]);

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'title' => array($this, 'block_title'),
                'navbar_title' => array($this, 'block_navbar_title'),
                'actions' => array($this, 'block_actions'),
                'tab_menu' => array($this, 'block_tab_menu'),
                'form' => array($this, 'block_form'),
            )
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_edit.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fa8e09b3835e41e7e657c99c5c6b797199c8ecc85ee371918cae3ff7d096b7b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa8e09b3835e41e7e657c99c5c6b797199c8ecc85ee371918cae3ff7d096b7b3->enter($__internal_fa8e09b3835e41e7e657c99c5c6b797199c8ecc85ee371918cae3ff7d096b7b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa8e09b3835e41e7e657c99c5c6b797199c8ecc85ee371918cae3ff7d096b7b3->leave($__internal_fa8e09b3835e41e7e657c99c5c6b797199c8ecc85ee371918cae3ff7d096b7b3_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_6bfad8fbf2b9b03f6b6b6a01468bc616fe3146a300832a58852c85c992322cbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bfad8fbf2b9b03f6b6b6a01468bc616fe3146a300832a58852c85c992322cbb->enter($__internal_6bfad8fbf2b9b03f6b6b6a01468bc616fe3146a300832a58852c85c992322cbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 15
        echo "    ";
        if ( !(null === $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_edit", array("%name%" => twig_truncate_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "toString", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), 15)), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        } else {
            // line 18
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_create", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        }
        
        $__internal_6bfad8fbf2b9b03f6b6b6a01468bc616fe3146a300832a58852c85c992322cbb->leave($__internal_6bfad8fbf2b9b03f6b6b6a01468bc616fe3146a300832a58852c85c992322cbb_prof);

    }

    // line 22
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_944398ad059eb52d08fe0835d86e9341fd4adc3aab4feb7637647d9719167b00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_944398ad059eb52d08fe0835d86e9341fd4adc3aab4feb7637647d9719167b00->enter($__internal_944398ad059eb52d08fe0835d86e9341fd4adc3aab4feb7637647d9719167b00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 23
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_944398ad059eb52d08fe0835d86e9341fd4adc3aab4feb7637647d9719167b00->leave($__internal_944398ad059eb52d08fe0835d86e9341fd4adc3aab4feb7637647d9719167b00_prof);

    }

    // line 26
    public function block_actions($context, array $blocks = array())
    {
        $__internal_bb26a2a23f6b212651c1d14e7f42eecea22be23d1c74946839c4dfd99b2bcdb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb26a2a23f6b212651c1d14e7f42eecea22be23d1c74946839c4dfd99b2bcdb7->enter($__internal_bb26a2a23f6b212651c1d14e7f42eecea22be23d1c74946839c4dfd99b2bcdb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 27
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 27)->display($context);
        
        $__internal_bb26a2a23f6b212651c1d14e7f42eecea22be23d1c74946839c4dfd99b2bcdb7->leave($__internal_bb26a2a23f6b212651c1d14e7f42eecea22be23d1c74946839c4dfd99b2bcdb7_prof);

    }

    // line 30
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_9f6b58b5fc017ad736aaccb1277c6e52ca737b17dd710850ce165442b50c9098 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f6b58b5fc017ad736aaccb1277c6e52ca737b17dd710850ce165442b50c9098->enter($__internal_9f6b58b5fc017ad736aaccb1277c6e52ca737b17dd710850ce165442b50c9098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_9f6b58b5fc017ad736aaccb1277c6e52ca737b17dd710850ce165442b50c9098->leave($__internal_9f6b58b5fc017ad736aaccb1277c6e52ca737b17dd710850ce165442b50c9098_prof);

    }

    // line 34
    public function block_form($context, array $blocks = array())
    {
        $__internal_f8631c3187294fca515c670c24225591a15a76700128b1647c1d04fca67182d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8631c3187294fca515c670c24225591a15a76700128b1647c1d04fca67182d4->enter($__internal_f8631c3187294fca515c670c24225591a15a76700128b1647c1d04fca67182d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 35
        echo "    ";
        $this->displayBlock("parentForm", $context, $blocks);
        echo "
";
        
        $__internal_f8631c3187294fca515c670c24225591a15a76700128b1647c1d04fca67182d4->leave($__internal_f8631c3187294fca515c670c24225591a15a76700128b1647c1d04fca67182d4_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 35,  122 => 34,  110 => 30,  103 => 27,  97 => 26,  87 => 23,  81 => 22,  70 => 18,  64 => 16,  61 => 15,  55 => 14,  40 => 12,  12 => 32,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends base_template %}

{% block title %}
    {% if admin.id(object) is not null %}
        {{ \"title_edit\"|trans({'%name%': admin.toString(object)|truncate(15) }, 'SonataAdminBundle') }}
    {% else %}
        {{ \"title_create\"|trans({}, 'SonataAdminBundle') }}
    {% endif %}
{% endblock %}

{% block navbar_title %}
    {{ block('title') }}
{% endblock %}

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% block tab_menu %}{{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}{% endblock %}

{% use 'SonataAdminBundle:CRUD:base_edit_form.html.twig' with form as parentForm %}

{% block form %}
    {{ block('parentForm') }}
{% endblock %}
", "SonataAdminBundle:CRUD:base_edit.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/base_edit.html.twig");
    }
}
