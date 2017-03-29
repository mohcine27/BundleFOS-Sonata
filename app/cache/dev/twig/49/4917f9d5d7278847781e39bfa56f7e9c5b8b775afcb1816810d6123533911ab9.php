<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_5b2f30805ffe5f342d979cdf9c6c5b00abeeb1e34a83c73980a83194b0b89a10 extends Twig_Template
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
        $__internal_d9af3b7613bf027c124219e0ba2f7fbc7771d98aec102344968a9deaef7a416b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9af3b7613bf027c124219e0ba2f7fbc7771d98aec102344968a9deaef7a416b->enter($__internal_d9af3b7613bf027c124219e0ba2f7fbc7771d98aec102344968a9deaef7a416b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_d9af3b7613bf027c124219e0ba2f7fbc7771d98aec102344968a9deaef7a416b->leave($__internal_d9af3b7613bf027c124219e0ba2f7fbc7771d98aec102344968a9deaef7a416b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.rdf.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
