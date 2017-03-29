<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_ad98abbc0c09da017fabc5570314601ca07ba790f8bf701b098fa6fd3e8b51a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5e9485187410ab2595a910ce7b80a2283cf755708196d4ae689d1e43bce13ac2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e9485187410ab2595a910ce7b80a2283cf755708196d4ae689d1e43bce13ac2->enter($__internal_5e9485187410ab2595a910ce7b80a2283cf755708196d4ae689d1e43bce13ac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e9485187410ab2595a910ce7b80a2283cf755708196d4ae689d1e43bce13ac2->leave($__internal_5e9485187410ab2595a910ce7b80a2283cf755708196d4ae689d1e43bce13ac2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3f89d4150533b69e8f0535909f76d864801dad64c9d963e7877de650468c46e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f89d4150533b69e8f0535909f76d864801dad64c9d963e7877de650468c46e2->enter($__internal_3f89d4150533b69e8f0535909f76d864801dad64c9d963e7877de650468c46e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3f89d4150533b69e8f0535909f76d864801dad64c9d963e7877de650468c46e2->leave($__internal_3f89d4150533b69e8f0535909f76d864801dad64c9d963e7877de650468c46e2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1b15c9e0f4dc376ca29ead251ba752e139da6500ac2ab6c1cb7bdf45b03ec99f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b15c9e0f4dc376ca29ead251ba752e139da6500ac2ab6c1cb7bdf45b03ec99f->enter($__internal_1b15c9e0f4dc376ca29ead251ba752e139da6500ac2ab6c1cb7bdf45b03ec99f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1b15c9e0f4dc376ca29ead251ba752e139da6500ac2ab6c1cb7bdf45b03ec99f->leave($__internal_1b15c9e0f4dc376ca29ead251ba752e139da6500ac2ab6c1cb7bdf45b03ec99f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f4d139241ec46db97ebf1559b626afdb987cbc5efa68f61c64017faa8a6415a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4d139241ec46db97ebf1559b626afdb987cbc5efa68f61c64017faa8a6415a5->enter($__internal_f4d139241ec46db97ebf1559b626afdb987cbc5efa68f61c64017faa8a6415a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f4d139241ec46db97ebf1559b626afdb987cbc5efa68f61c64017faa8a6415a5->leave($__internal_f4d139241ec46db97ebf1559b626afdb987cbc5efa68f61c64017faa8a6415a5_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
