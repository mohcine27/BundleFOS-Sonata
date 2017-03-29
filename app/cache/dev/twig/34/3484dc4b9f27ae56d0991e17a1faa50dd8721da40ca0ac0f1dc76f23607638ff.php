<?php

/* SonataAdminBundle:CRUD:list__batch.html.twig */
class __TwigTemplate_807e6d4550b625bb0c1b421fbf7a2438a74ee87f03dfaa476bfdf9bb0389cb76 extends Twig_Template
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
        $__internal_b4e2a44cef8fe26f37d33b7a0988c718741ec8138a42250f4044a20dfd3193e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4e2a44cef8fe26f37d33b7a0988c718741ec8138a42250f4044a20dfd3193e5->enter($__internal_b4e2a44cef8fe26f37d33b7a0988c718741ec8138a42250f4044a20dfd3193e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4e2a44cef8fe26f37d33b7a0988c718741ec8138a42250f4044a20dfd3193e5->leave($__internal_b4e2a44cef8fe26f37d33b7a0988c718741ec8138a42250f4044a20dfd3193e5_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_8c55d5dd83b96761195b1d274a5eef4e46fd72825566628c0bae4bbf16ef9420 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c55d5dd83b96761195b1d274a5eef4e46fd72825566628c0bae4bbf16ef9420->enter($__internal_8c55d5dd83b96761195b1d274a5eef4e46fd72825566628c0bae4bbf16ef9420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_8c55d5dd83b96761195b1d274a5eef4e46fd72825566628c0bae4bbf16ef9420->leave($__internal_8c55d5dd83b96761195b1d274a5eef4e46fd72825566628c0bae4bbf16ef9420_prof);

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
", "SonataAdminBundle:CRUD:list__batch.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/list__batch.html.twig");
    }
}
