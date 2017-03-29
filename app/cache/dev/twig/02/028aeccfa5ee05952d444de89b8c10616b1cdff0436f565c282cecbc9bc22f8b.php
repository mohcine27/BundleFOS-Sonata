<?php

/* EasyAdminBundle:default:field_datetimetz.html.twig */
class __TwigTemplate_1b1dcc0599307e33a0ddefabd6586b1da47856af9a269647ec09c50189c317bb extends Twig_Template
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
        $__internal_79713c851d5b92aaf3bf648e2b68979bd4f292e3bd6cba7b77092f9f019f2f6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79713c851d5b92aaf3bf648e2b68979bd4f292e3bd6cba7b77092f9f019f2f6e->enter($__internal_79713c851d5b92aaf3bf648e2b68979bd4f292e3bd6cba7b77092f9f019f2f6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_datetimetz.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_79713c851d5b92aaf3bf648e2b68979bd4f292e3bd6cba7b77092f9f019f2f6e->leave($__internal_79713c851d5b92aaf3bf648e2b68979bd4f292e3bd6cba7b77092f9f019f2f6e_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_datetimetz.html.twig";
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
", "EasyAdminBundle:default:field_datetimetz.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\vendor\\javiereguiluz\\easyadmin-bundle/Resources/views/default/field_datetimetz.html.twig");
    }
}
