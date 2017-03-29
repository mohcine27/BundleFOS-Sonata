<?php

/* @SonataAdmin/CRUD/edit_array.html.twig */
class __TwigTemplate_ad0f2d1eaefa5bb5ac43ca7ece26832b07e4fecba70531b4386366f5dc6233a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/edit_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a4ff3da2d1d00776ecb739e088350d4dff783f2d14b9aaef8f7c3a95ebd03000 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4ff3da2d1d00776ecb739e088350d4dff783f2d14b9aaef8f7c3a95ebd03000->enter($__internal_a4ff3da2d1d00776ecb739e088350d4dff783f2d14b9aaef8f7c3a95ebd03000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4ff3da2d1d00776ecb739e088350d4dff783f2d14b9aaef8f7c3a95ebd03000->leave($__internal_a4ff3da2d1d00776ecb739e088350d4dff783f2d14b9aaef8f7c3a95ebd03000_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_9a96e8d26d7671b667791dca69488a17af97540a6cd33010e17a32412f6b3af2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a96e8d26d7671b667791dca69488a17af97540a6cd33010e17a32412f6b3af2->enter($__internal_9a96e8d26d7671b667791dca69488a17af97540a6cd33010e17a32412f6b3af2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <span class=\"edit\">
        ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        echo "
    </span>
";
        
        $__internal_9a96e8d26d7671b667791dca69488a17af97540a6cd33010e17a32412f6b3af2->leave($__internal_9a96e8d26d7671b667791dca69488a17af97540a6cd33010e17a32412f6b3af2_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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

{% block field %}
    <span class=\"edit\">
        {{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}
    </span>
{% endblock %}
", "@SonataAdmin/CRUD/edit_array.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\edit_array.html.twig");
    }
}
