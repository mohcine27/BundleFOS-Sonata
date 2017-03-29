<?php

/* EasyAdminBundle:default:field_datetime.html.twig */
class __TwigTemplate_49cf7fcb29ff002af5280432a69aa65b894cac9f32ffcf5bb60ac8ae9ddab4da extends Twig_Template
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
        $__internal_8717ca982df0e286cafaab75923fff33fbc6a11c3f15367090e2ef9fd1a7d7cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8717ca982df0e286cafaab75923fff33fbc6a11c3f15367090e2ef9fd1a7d7cc->enter($__internal_8717ca982df0e286cafaab75923fff33fbc6a11c3f15367090e2ef9fd1a7d7cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_datetime.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_8717ca982df0e286cafaab75923fff33fbc6a11c3f15367090e2ef9fd1a7d7cc->leave($__internal_8717ca982df0e286cafaab75923fff33fbc6a11c3f15367090e2ef9fd1a7d7cc_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_datetime.html.twig";
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
", "EasyAdminBundle:default:field_datetime.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\vendor\\javiereguiluz\\easyadmin-bundle/Resources/views/default/field_datetime.html.twig");
    }
}
