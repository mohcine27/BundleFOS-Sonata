<?php

/* @SonataAdmin/CRUD/edit_boolean.html.twig */
class __TwigTemplate_e673e4485f95937c374d606c2c8707a1dc3884418c409b3ee08a2c450f58207d extends Twig_Template
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
        $__internal_715c9916096fd338a85c5e3ffb37ccd9244734c99409b3c0596838c0caff6860 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_715c9916096fd338a85c5e3ffb37ccd9244734c99409b3c0596838c0caff6860->enter($__internal_715c9916096fd338a85c5e3ffb37ccd9244734c99409b3c0596838c0caff6860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_boolean.html.twig"));

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
        
        $__internal_715c9916096fd338a85c5e3ffb37ccd9244734c99409b3c0596838c0caff6860->leave($__internal_715c9916096fd338a85c5e3ffb37ccd9244734c99409b3c0596838c0caff6860_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_c1b94a8d6927e11076598e850ee54058f84cf39661808118688ecc298b00c523 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1b94a8d6927e11076598e850ee54058f84cf39661808118688ecc298b00c523->enter($__internal_c1b94a8d6927e11076598e850ee54058f84cf39661808118688ecc298b00c523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget');
        
        $__internal_c1b94a8d6927e11076598e850ee54058f84cf39661808118688ecc298b00c523->leave($__internal_c1b94a8d6927e11076598e850ee54058f84cf39661808118688ecc298b00c523_prof);

    }

    // line 15
    public function block_label($context, array $blocks = array())
    {
        $__internal_0f7112b6fe18cf3bff7385c3eeece38a431bd64c186cc1344f6c9a02a420f9ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f7112b6fe18cf3bff7385c3eeece38a431bd64c186cc1344f6c9a02a420f9ac->enter($__internal_0f7112b6fe18cf3bff7385c3eeece38a431bd64c186cc1344f6c9a02a420f9ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

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
        
        $__internal_0f7112b6fe18cf3bff7385c3eeece38a431bd64c186cc1344f6c9a02a420f9ac->leave($__internal_0f7112b6fe18cf3bff7385c3eeece38a431bd64c186cc1344f6c9a02a420f9ac_prof);

    }

    // line 25
    public function block_errors($context, array $blocks = array())
    {
        $__internal_438e366212d37752905ed179babdb02f465bd3198c2ad30016ad9d9e09fb8d00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_438e366212d37752905ed179babdb02f465bd3198c2ad30016ad9d9e09fb8d00->enter($__internal_438e366212d37752905ed179babdb02f465bd3198c2ad30016ad9d9e09fb8d00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'errors');
        
        $__internal_438e366212d37752905ed179babdb02f465bd3198c2ad30016ad9d9e09fb8d00->leave($__internal_438e366212d37752905ed179babdb02f465bd3198c2ad30016ad9d9e09fb8d00_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit_boolean.html.twig";
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
", "@SonataAdmin/CRUD/edit_boolean.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\edit_boolean.html.twig");
    }
}
