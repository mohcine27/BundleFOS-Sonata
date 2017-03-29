<?php

/* :default:index.html.twig */
class __TwigTemplate_a9fbdc4c6c8bc048b64a71f741b411906b6f572067360655ddbba578e21cd454 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_53f96acbdc5ad0a9157621a9b194897523bcf31632bc58d2fc58f20634ad3bd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53f96acbdc5ad0a9157621a9b194897523bcf31632bc58d2fc58f20634ad3bd7->enter($__internal_53f96acbdc5ad0a9157621a9b194897523bcf31632bc58d2fc58f20634ad3bd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53f96acbdc5ad0a9157621a9b194897523bcf31632bc58d2fc58f20634ad3bd7->leave($__internal_53f96acbdc5ad0a9157621a9b194897523bcf31632bc58d2fc58f20634ad3bd7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_562ff20e4313c307b95ed012a6655be100bbbbd3bd948cade435c528ef14a4b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_562ff20e4313c307b95ed012a6655be100bbbbd3bd948cade435c528ef14a4b4->enter($__internal_562ff20e4313c307b95ed012a6655be100bbbbd3bd948cade435c528ef14a4b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    Homepage.
";
        
        $__internal_562ff20e4313c307b95ed012a6655be100bbbbd3bd948cade435c528ef14a4b4->leave($__internal_562ff20e4313c307b95ed012a6655be100bbbbd3bd948cade435c528ef14a4b4_prof);

    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    Homepage.
{% endblock %}
", ":default:index.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\app/Resources\\views/default/index.html.twig");
    }
}
