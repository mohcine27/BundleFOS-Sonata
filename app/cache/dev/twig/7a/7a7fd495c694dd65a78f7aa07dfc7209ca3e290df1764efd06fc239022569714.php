<?php

/* SonataAdminBundle:CRUD:list__batch.html.twig */
class __TwigTemplate_0c60a5dab28136d8228a05dcbcf9621d40e22af57602d8f311b4f2aad520aa74 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__batch.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1b117a24e062d5fb87b61448ba8c41029b73345d24ebbc54312fb5fc1988f2fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b117a24e062d5fb87b61448ba8c41029b73345d24ebbc54312fb5fc1988f2fc->enter($__internal_1b117a24e062d5fb87b61448ba8c41029b73345d24ebbc54312fb5fc1988f2fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b117a24e062d5fb87b61448ba8c41029b73345d24ebbc54312fb5fc1988f2fc->leave($__internal_1b117a24e062d5fb87b61448ba8c41029b73345d24ebbc54312fb5fc1988f2fc_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_427d678047dc5db0cffc40d02b1847ca360f910dc4a2bdf538d154e505a8fbf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_427d678047dc5db0cffc40d02b1847ca360f910dc4a2bdf538d154e505a8fbf6->enter($__internal_427d678047dc5db0cffc40d02b1847ca360f910dc4a2bdf538d154e505a8fbf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_427d678047dc5db0cffc40d02b1847ca360f910dc4a2bdf538d154e505a8fbf6->leave($__internal_427d678047dc5db0cffc40d02b1847ca360f910dc4a2bdf538d154e505a8fbf6_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__batch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
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
    <input type=\"checkbox\" name=\"idx[]\" value=\"{{ admin.id(object) }}\">
{% endblock %}
", "SonataAdminBundle:CRUD:list__batch.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\list__batch.html.twig");
    }
}
