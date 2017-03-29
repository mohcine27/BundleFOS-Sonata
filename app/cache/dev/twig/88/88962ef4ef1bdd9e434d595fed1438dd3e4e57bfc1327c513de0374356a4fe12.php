<?php

/* @EasyAdmin/default/field_date.html.twig */
class __TwigTemplate_4fe56c3b662ec29dda49fef2edc67ca1d22f6d8d3ad62daa14517ea0c0cd9bcc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9d40ccda949670f9cbd90e325588ba7b8ff7512d2122875ad29e66c60e225ebb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d40ccda949670f9cbd90e325588ba7b8ff7512d2122875ad29e66c60e225ebb->enter($__internal_9d40ccda949670f9cbd90e325588ba7b8ff7512d2122875ad29e66c60e225ebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_date.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_9d40ccda949670f9cbd90e325588ba7b8ff7512d2122875ad29e66c60e225ebb->leave($__internal_9d40ccda949670f9cbd90e325588ba7b8ff7512d2122875ad29e66c60e225ebb_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_date.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ value|date(field_options.format) }}
", "@EasyAdmin/default/field_date.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\default\\field_date.html.twig");
    }
}
