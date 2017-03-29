<?php

/* @SonataAdmin/CRUD/base_edit.html.twig */
class __TwigTemplate_526ef77bb42274ee344f6644c756f32c6a7ea3c16218ec7428cd513907d3a529 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $_trait_0 = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form.html.twig", "@SonataAdmin/CRUD/base_edit.html.twig", 32);
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/base_edit.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_492d2006e5d7181c85e9fd79db0503e9fe3c83e15e46712d3a0a9faffba5513e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_492d2006e5d7181c85e9fd79db0503e9fe3c83e15e46712d3a0a9faffba5513e->enter($__internal_492d2006e5d7181c85e9fd79db0503e9fe3c83e15e46712d3a0a9faffba5513e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_edit.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_492d2006e5d7181c85e9fd79db0503e9fe3c83e15e46712d3a0a9faffba5513e->leave($__internal_492d2006e5d7181c85e9fd79db0503e9fe3c83e15e46712d3a0a9faffba5513e_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_a9ac4d37244099296b78d40ff5347654b4744b9ed97ef21717045416917dcc4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9ac4d37244099296b78d40ff5347654b4744b9ed97ef21717045416917dcc4f->enter($__internal_a9ac4d37244099296b78d40ff5347654b4744b9ed97ef21717045416917dcc4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

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
        
        $__internal_a9ac4d37244099296b78d40ff5347654b4744b9ed97ef21717045416917dcc4f->leave($__internal_a9ac4d37244099296b78d40ff5347654b4744b9ed97ef21717045416917dcc4f_prof);

    }

    // line 22
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_12bf53d0b43cd4aeaeff6efbddb17b4b1edc1dded9a73e8d68aaee179dd447e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12bf53d0b43cd4aeaeff6efbddb17b4b1edc1dded9a73e8d68aaee179dd447e8->enter($__internal_12bf53d0b43cd4aeaeff6efbddb17b4b1edc1dded9a73e8d68aaee179dd447e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 23
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_12bf53d0b43cd4aeaeff6efbddb17b4b1edc1dded9a73e8d68aaee179dd447e8->leave($__internal_12bf53d0b43cd4aeaeff6efbddb17b4b1edc1dded9a73e8d68aaee179dd447e8_prof);

    }

    // line 26
    public function block_actions($context, array $blocks = array())
    {
        $__internal_e77f04c74c9799e9439b72a7a8e8204e1c877f1a46c2d7361851f49c655a1e4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e77f04c74c9799e9439b72a7a8e8204e1c877f1a46c2d7361851f49c655a1e4c->enter($__internal_e77f04c74c9799e9439b72a7a8e8204e1c877f1a46c2d7361851f49c655a1e4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 27
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "@SonataAdmin/CRUD/base_edit.html.twig", 27)->display($context);
        
        $__internal_e77f04c74c9799e9439b72a7a8e8204e1c877f1a46c2d7361851f49c655a1e4c->leave($__internal_e77f04c74c9799e9439b72a7a8e8204e1c877f1a46c2d7361851f49c655a1e4c_prof);

    }

    // line 30
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_8c9f1f6fcfa004440869b5ac8d39c4073c392a27d902a090d08bd5feb4422469 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c9f1f6fcfa004440869b5ac8d39c4073c392a27d902a090d08bd5feb4422469->enter($__internal_8c9f1f6fcfa004440869b5ac8d39c4073c392a27d902a090d08bd5feb4422469_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_8c9f1f6fcfa004440869b5ac8d39c4073c392a27d902a090d08bd5feb4422469->leave($__internal_8c9f1f6fcfa004440869b5ac8d39c4073c392a27d902a090d08bd5feb4422469_prof);

    }

    // line 34
    public function block_form($context, array $blocks = array())
    {
        $__internal_83877dc36e69afaea581a823111b5bf4e183ffd17e06f082c33bb2ca31fdc141 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83877dc36e69afaea581a823111b5bf4e183ffd17e06f082c33bb2ca31fdc141->enter($__internal_83877dc36e69afaea581a823111b5bf4e183ffd17e06f082c33bb2ca31fdc141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 35
        echo "    ";
        $this->displayBlock("parentForm", $context, $blocks);
        echo "
";
        
        $__internal_83877dc36e69afaea581a823111b5bf4e183ffd17e06f082c33bb2ca31fdc141->leave($__internal_83877dc36e69afaea581a823111b5bf4e183ffd17e06f082c33bb2ca31fdc141_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_edit.html.twig";
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
", "@SonataAdmin/CRUD/base_edit.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\base_edit.html.twig");
    }
}
