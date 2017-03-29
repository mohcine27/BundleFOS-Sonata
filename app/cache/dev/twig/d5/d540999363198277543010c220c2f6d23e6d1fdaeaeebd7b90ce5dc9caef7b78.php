<?php

/* @SonataAdmin/CRUD/list_time.html.twig */
class __TwigTemplate_0c02c964b2595cd1774ab0c8094b1807b8a9343f0419050f3c2ccac696bdbf12 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list_time.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_def1688c81ec14cb6d308226476002449e8980fe80f591da4ea5147583608385 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_def1688c81ec14cb6d308226476002449e8980fe80f591da4ea5147583608385->enter($__internal_def1688c81ec14cb6d308226476002449e8980fe80f591da4ea5147583608385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_time.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_def1688c81ec14cb6d308226476002449e8980fe80f591da4ea5147583608385->leave($__internal_def1688c81ec14cb6d308226476002449e8980fe80f591da4ea5147583608385_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_747052e80a3a2e20efe3c7340ee021f5252f4ddfe8f63a413181b7324a01148c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_747052e80a3a2e20efe3c7340ee021f5252f4ddfe8f63a413181b7324a01148c->enter($__internal_747052e80a3a2e20efe3c7340ee021f5252f4ddfe8f63a413181b7324a01148c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_747052e80a3a2e20efe3c7340ee021f5252f4ddfe8f63a413181b7324a01148c->leave($__internal_747052e80a3a2e20efe3c7340ee021f5252f4ddfe8f63a413181b7324a01148c_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 18,  41 => 16,  39 => 15,  33 => 14,  18 => 12,);
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

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    {%- if value is empty -%}
        &nbsp;
    {%- else -%}
        {{ value|date('H:i:s') }}
    {%- endif -%}
{% endblock %}
", "@SonataAdmin/CRUD/list_time.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\list_time.html.twig");
    }
}
