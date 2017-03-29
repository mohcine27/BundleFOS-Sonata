<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_dd82913b4888e70b66f71f5e27ac3b7a6462e52ffe754349e75ba13fbd0d3a39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_500c3c2c6f020d751c74e53e807a91e85556f49b6329d13d1db75562569f55a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_500c3c2c6f020d751c74e53e807a91e85556f49b6329d13d1db75562569f55a8->enter($__internal_500c3c2c6f020d751c74e53e807a91e85556f49b6329d13d1db75562569f55a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_500c3c2c6f020d751c74e53e807a91e85556f49b6329d13d1db75562569f55a8->leave($__internal_500c3c2c6f020d751c74e53e807a91e85556f49b6329d13d1db75562569f55a8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3fdc6c320aeccf539c36a331197a6ba10b8184a6563518b77a2521c8e9df5deb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fdc6c320aeccf539c36a331197a6ba10b8184a6563518b77a2521c8e9df5deb->enter($__internal_3fdc6c320aeccf539c36a331197a6ba10b8184a6563518b77a2521c8e9df5deb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3fdc6c320aeccf539c36a331197a6ba10b8184a6563518b77a2521c8e9df5deb->leave($__internal_3fdc6c320aeccf539c36a331197a6ba10b8184a6563518b77a2521c8e9df5deb_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0f9507b875f26bf6a5753f35c7def0e151d0d400ab33eb2958ba8863ad33f75e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f9507b875f26bf6a5753f35c7def0e151d0d400ab33eb2958ba8863ad33f75e->enter($__internal_0f9507b875f26bf6a5753f35c7def0e151d0d400ab33eb2958ba8863ad33f75e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0f9507b875f26bf6a5753f35c7def0e151d0d400ab33eb2958ba8863ad33f75e->leave($__internal_0f9507b875f26bf6a5753f35c7def0e151d0d400ab33eb2958ba8863ad33f75e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d5f7b93505d38de70b1a6476caf7af821ea41667791d84d06d2345665b3a0d1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5f7b93505d38de70b1a6476caf7af821ea41667791d84d06d2345665b3a0d1e->enter($__internal_d5f7b93505d38de70b1a6476caf7af821ea41667791d84d06d2345665b3a0d1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d5f7b93505d38de70b1a6476caf7af821ea41667791d84d06d2345665b3a0d1e->leave($__internal_d5f7b93505d38de70b1a6476caf7af821ea41667791d84d06d2345665b3a0d1e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
