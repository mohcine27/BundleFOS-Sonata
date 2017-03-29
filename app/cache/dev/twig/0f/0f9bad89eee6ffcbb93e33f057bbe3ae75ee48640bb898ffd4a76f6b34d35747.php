<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_fcf659d6e6d1316cb4b690f3de8c6d01b079e5f5366a83fbc14e0951dc68cdcb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_435aabe36960f95fada02ac98f798d987a54242791bd98f0813bfb125b7e307f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_435aabe36960f95fada02ac98f798d987a54242791bd98f0813bfb125b7e307f->enter($__internal_435aabe36960f95fada02ac98f798d987a54242791bd98f0813bfb125b7e307f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_435aabe36960f95fada02ac98f798d987a54242791bd98f0813bfb125b7e307f->leave($__internal_435aabe36960f95fada02ac98f798d987a54242791bd98f0813bfb125b7e307f_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_3c6201edfc7836acbd649d569163cf7e7c9c0e2c10dd47cc247d90c851fd9989 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c6201edfc7836acbd649d569163cf7e7c9c0e2c10dd47cc247d90c851fd9989->enter($__internal_3c6201edfc7836acbd649d569163cf7e7c9c0e2c10dd47cc247d90c851fd9989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_3c6201edfc7836acbd649d569163cf7e7c9c0e2c10dd47cc247d90c851fd9989->leave($__internal_3c6201edfc7836acbd649d569163cf7e7c9c0e2c10dd47cc247d90c851fd9989_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
