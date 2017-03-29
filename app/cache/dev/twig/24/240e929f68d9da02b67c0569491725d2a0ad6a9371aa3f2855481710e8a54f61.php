<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_bc0115cd84ca7ff9fc114c339fb777c9bdc835de355ea2e9be172b72f8c2082a extends Twig_Template
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
        $__internal_a4658d02c1f76783e3158bec1e2f61171c43dc1eef7f51d9985a9d947ea06fbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4658d02c1f76783e3158bec1e2f61171c43dc1eef7f51d9985a9d947ea06fbd->enter($__internal_a4658d02c1f76783e3158bec1e2f61171c43dc1eef7f51d9985a9d947ea06fbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4658d02c1f76783e3158bec1e2f61171c43dc1eef7f51d9985a9d947ea06fbd->leave($__internal_a4658d02c1f76783e3158bec1e2f61171c43dc1eef7f51d9985a9d947ea06fbd_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5f32937b6a5c6287633b34128062536fadc785efce9c703f7d7f614244ce5ef8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f32937b6a5c6287633b34128062536fadc785efce9c703f7d7f614244ce5ef8->enter($__internal_5f32937b6a5c6287633b34128062536fadc785efce9c703f7d7f614244ce5ef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5f32937b6a5c6287633b34128062536fadc785efce9c703f7d7f614244ce5ef8->leave($__internal_5f32937b6a5c6287633b34128062536fadc785efce9c703f7d7f614244ce5ef8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9fb966898f3d5680bdac9eee2cc98b4727ebe836033e7c43f04758be3520ff93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fb966898f3d5680bdac9eee2cc98b4727ebe836033e7c43f04758be3520ff93->enter($__internal_9fb966898f3d5680bdac9eee2cc98b4727ebe836033e7c43f04758be3520ff93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9fb966898f3d5680bdac9eee2cc98b4727ebe836033e7c43f04758be3520ff93->leave($__internal_9fb966898f3d5680bdac9eee2cc98b4727ebe836033e7c43f04758be3520ff93_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9371f11b1bb6d2dd971f51a5c6c3683c84c66f58ec0a12d7d97e0b08f91f677c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9371f11b1bb6d2dd971f51a5c6c3683c84c66f58ec0a12d7d97e0b08f91f677c->enter($__internal_9371f11b1bb6d2dd971f51a5c6c3683c84c66f58ec0a12d7d97e0b08f91f677c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9371f11b1bb6d2dd971f51a5c6c3683c84c66f58ec0a12d7d97e0b08f91f677c->leave($__internal_9371f11b1bb6d2dd971f51a5c6c3683c84c66f58ec0a12d7d97e0b08f91f677c_prof);

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
