<?php

/* @SonataAdmin/CRUD/list_percent.html.twig */
class __TwigTemplate_3ccff5aa2e20f99540c07c8a278a8eec25233dbac9093ee38884e764b0328062 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list_percent.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_75ae26dd329f43c2eaccacaa9d9a3540087be29087299457ad30a242552a787d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75ae26dd329f43c2eaccacaa9d9a3540087be29087299457ad30a242552a787d->enter($__internal_75ae26dd329f43c2eaccacaa9d9a3540087be29087299457ad30a242552a787d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_percent.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75ae26dd329f43c2eaccacaa9d9a3540087be29087299457ad30a242552a787d->leave($__internal_75ae26dd329f43c2eaccacaa9d9a3540087be29087299457ad30a242552a787d_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_8afb38f95a55077a436eb71416e56800712161ad033b834d465a2b15c8a6242e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8afb38f95a55077a436eb71416e56800712161ad033b834d465a2b15c8a6242e->enter($__internal_8afb38f95a55077a436eb71416e56800712161ad033b834d465a2b15c8a6242e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_8afb38f95a55077a436eb71416e56800712161ad033b834d465a2b15c8a6242e->leave($__internal_8afb38f95a55077a436eb71416e56800712161ad033b834d465a2b15c8a6242e_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_percent.html.twig";
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

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    {% set value = value * 100 %}
    {{ value }} %
{% endblock %}
", "@SonataAdmin/CRUD/list_percent.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\list_percent.html.twig");
    }
}
