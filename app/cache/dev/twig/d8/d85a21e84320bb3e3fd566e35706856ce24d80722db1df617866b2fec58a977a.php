<?php

/* SonataAdminBundle:CRUD:show_time.html.twig */
class __TwigTemplate_c3be6e54a5b30bd6e3b7e52233098722a3196f85cd458d8c1f96b10649bdcb89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_time.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_180660bc070efe225ccdaeccbd5437357f80171fd1876c2e0067ed484cecfc7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_180660bc070efe225ccdaeccbd5437357f80171fd1876c2e0067ed484cecfc7f->enter($__internal_180660bc070efe225ccdaeccbd5437357f80171fd1876c2e0067ed484cecfc7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_time.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_180660bc070efe225ccdaeccbd5437357f80171fd1876c2e0067ed484cecfc7f->leave($__internal_180660bc070efe225ccdaeccbd5437357f80171fd1876c2e0067ed484cecfc7f_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_038df15a0204f82238290280a7a5261898e007f542a758b6550af0ecfcf11ca6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_038df15a0204f82238290280a7a5261898e007f542a758b6550af0ecfcf11ca6->enter($__internal_038df15a0204f82238290280a7a5261898e007f542a758b6550af0ecfcf11ca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_038df15a0204f82238290280a7a5261898e007f542a758b6550af0ecfcf11ca6->leave($__internal_038df15a0204f82238290280a7a5261898e007f542a758b6550af0ecfcf11ca6_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 18,  42 => 16,  40 => 15,  34 => 14,  11 => 12,);
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

{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field %}
    {%- if value is empty -%}
        &nbsp;
    {%- else -%}
        {{ value|date('H:i:s') }}
    {%- endif -%}
{% endblock %}
", "SonataAdminBundle:CRUD:show_time.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/show_time.html.twig");
    }
}
