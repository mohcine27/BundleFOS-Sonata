<?php

/* @EasyAdmin/default/field_time.html.twig */
class __TwigTemplate_49623f66e797880d418c2d41f377d4a22692acbad7069d875f713c04232efb8f extends Twig_Template
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
        $__internal_17463b1dcf184c7f1b9cf75ad776ae9bd91ad34c4ec155a07940b462c04f1d9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17463b1dcf184c7f1b9cf75ad776ae9bd91ad34c4ec155a07940b462c04f1d9a->enter($__internal_17463b1dcf184c7f1b9cf75ad776ae9bd91ad34c4ec155a07940b462c04f1d9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_time.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_17463b1dcf184c7f1b9cf75ad776ae9bd91ad34c4ec155a07940b462c04f1d9a->leave($__internal_17463b1dcf184c7f1b9cf75ad776ae9bd91ad34c4ec155a07940b462c04f1d9a_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_time.html.twig";
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
", "@EasyAdmin/default/field_time.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\default\\field_time.html.twig");
    }
}
