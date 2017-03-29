<?php

/* @EasyAdmin/default/field_datetimetz.html.twig */
class __TwigTemplate_a9dc75aa1d13303d28cee65856cf967a8326499558ef19b26082ee9f3ab05a92 extends Twig_Template
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
        $__internal_a5be4e34f515403b30d5a8fc01aebefa73db9d003272e50ee5c4f923bce3670d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5be4e34f515403b30d5a8fc01aebefa73db9d003272e50ee5c4f923bce3670d->enter($__internal_a5be4e34f515403b30d5a8fc01aebefa73db9d003272e50ee5c4f923bce3670d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_datetimetz.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_a5be4e34f515403b30d5a8fc01aebefa73db9d003272e50ee5c4f923bce3670d->leave($__internal_a5be4e34f515403b30d5a8fc01aebefa73db9d003272e50ee5c4f923bce3670d_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_datetimetz.html.twig";
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
", "@EasyAdmin/default/field_datetimetz.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\default\\field_datetimetz.html.twig");
    }
}
