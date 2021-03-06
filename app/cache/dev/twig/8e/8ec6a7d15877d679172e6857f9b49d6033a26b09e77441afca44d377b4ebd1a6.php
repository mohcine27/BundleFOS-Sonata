<?php

/* SonataAdminBundle:CRUD:edit_boolean.html.twig */
class __TwigTemplate_473abd8d14b23cc1f958e67648da4f6ca42cd450ccb5fca7971004c5c518a2bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'label' => array($this, 'block_label'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8e31abf1e580893c287302b997478c64eb44495f722f14ff70b3b172f9501062 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e31abf1e580893c287302b997478c64eb44495f722f14ff70b3b172f9501062->enter($__internal_8e31abf1e580893c287302b997478c64eb44495f722f14ff70b3b172f9501062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_boolean.html.twig"));

        // line 11
        echo "
<div>
    <div class=\"sonata-ba-field ";
        // line 13
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), "vars", array()), "errors", array())) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">
        ";
        // line 14
        $this->displayBlock('field', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('label', $context, $blocks);
        // line 23
        echo "
        <div class=\"sonata-ba-field-error-messages\">
            ";
        // line 25
        $this->displayBlock('errors', $context, $blocks);
        // line 26
        echo "        </div>

    </div>
</div>
";
        
        $__internal_8e31abf1e580893c287302b997478c64eb44495f722f14ff70b3b172f9501062->leave($__internal_8e31abf1e580893c287302b997478c64eb44495f722f14ff70b3b172f9501062_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_bd9a485887c6c1917d681c46d8d587b2ba566eea823407b304cbbbedd950e107 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd9a485887c6c1917d681c46d8d587b2ba566eea823407b304cbbbedd950e107->enter($__internal_bd9a485887c6c1917d681c46d8d587b2ba566eea823407b304cbbbedd950e107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget');
        
        $__internal_bd9a485887c6c1917d681c46d8d587b2ba566eea823407b304cbbbedd950e107->leave($__internal_bd9a485887c6c1917d681c46d8d587b2ba566eea823407b304cbbbedd950e107_prof);

    }

    // line 15
    public function block_label($context, array $blocks = array())
    {
        $__internal_7be15d0c407932ba21fd40d67bea836fee338fbc52d52897a1dbab6a3a72cf9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7be15d0c407932ba21fd40d67bea836fee338fbc52d52897a1dbab6a3a72cf9b->enter($__internal_7be15d0c407932ba21fd40d67bea836fee338fbc52d52897a1dbab6a3a72cf9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 16
        echo "            ";
        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 17
            echo "                ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
            echo "
            ";
        } else {
            // line 19
            echo "                ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label');
            echo "
            ";
        }
        // line 21
        echo "            <br>
        ";
        
        $__internal_7be15d0c407932ba21fd40d67bea836fee338fbc52d52897a1dbab6a3a72cf9b->leave($__internal_7be15d0c407932ba21fd40d67bea836fee338fbc52d52897a1dbab6a3a72cf9b_prof);

    }

    // line 25
    public function block_errors($context, array $blocks = array())
    {
        $__internal_8b61b3168947124a132effd49c149e608b21ee3b66c7bc8e9c7f44bcf9737768 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b61b3168947124a132effd49c149e608b21ee3b66c7bc8e9c7f44bcf9737768->enter($__internal_8b61b3168947124a132effd49c149e608b21ee3b66c7bc8e9c7f44bcf9737768_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'errors');
        
        $__internal_8b61b3168947124a132effd49c149e608b21ee3b66c7bc8e9c7f44bcf9737768->leave($__internal_8b61b3168947124a132effd49c149e608b21ee3b66c7bc8e9c7f44bcf9737768_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 25,  90 => 21,  84 => 19,  78 => 17,  75 => 16,  69 => 15,  57 => 14,  46 => 26,  44 => 25,  40 => 23,  37 => 15,  35 => 14,  29 => 13,  25 => 11,);
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

<div>
    <div class=\"sonata-ba-field {% if field_element.vars.errors|length > 0 %}sonata-ba-field-error{% endif %}\">
        {% block field %}{{ form_widget(field_element) }}{% endblock %}
        {% block label %}
            {% if field_description.options.name is defined %}
                {{ form_label(field_element, field_description.options.name) }}
            {% else %}
                {{ form_label(field_element) }}
            {% endif %}
            <br>
        {% endblock %}

        <div class=\"sonata-ba-field-error-messages\">
            {% block errors %}{{ form_errors(field_element) }}{% endblock %}
        </div>

    </div>
</div>
", "SonataAdminBundle:CRUD:edit_boolean.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/edit_boolean.html.twig");
    }
}
