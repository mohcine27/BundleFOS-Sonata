<?php

/* @SensioDistribution/Configurator/layout.html.twig */
class __TwigTemplate_d04e95433590c7fac7a4d60f24da2e03f61b351c7b0b6e87a48fe98fc7942ba5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "@SensioDistribution/Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1f078e3633fd6d3e23ab8add706b688c035888d7508d8b2c2527dd1ec76c1846 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f078e3633fd6d3e23ab8add706b688c035888d7508d8b2c2527dd1ec76c1846->enter($__internal_1f078e3633fd6d3e23ab8add706b688c035888d7508d8b2c2527dd1ec76c1846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SensioDistribution/Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f078e3633fd6d3e23ab8add706b688c035888d7508d8b2c2527dd1ec76c1846->leave($__internal_1f078e3633fd6d3e23ab8add706b688c035888d7508d8b2c2527dd1ec76c1846_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8f45cc7b0b3e92ac0c5b8bc6d735a552001401d9d3e5c985eb72d02c3ec77c53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f45cc7b0b3e92ac0c5b8bc6d735a552001401d9d3e5c985eb72d02c3ec77c53->enter($__internal_8f45cc7b0b3e92ac0c5b8bc6d735a552001401d9d3e5c985eb72d02c3ec77c53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_8f45cc7b0b3e92ac0c5b8bc6d735a552001401d9d3e5c985eb72d02c3ec77c53->leave($__internal_8f45cc7b0b3e92ac0c5b8bc6d735a552001401d9d3e5c985eb72d02c3ec77c53_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ffa681ec18155608cb4d3b11b7dbdbea441c3d5cdbbb0354f36a504f4c6ffbbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffa681ec18155608cb4d3b11b7dbdbea441c3d5cdbbb0354f36a504f4c6ffbbf->enter($__internal_ffa681ec18155608cb4d3b11b7dbdbea441c3d5cdbbb0354f36a504f4c6ffbbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_ffa681ec18155608cb4d3b11b7dbdbea441c3d5cdbbb0354f36a504f4c6ffbbf->leave($__internal_ffa681ec18155608cb4d3b11b7dbdbea441c3d5cdbbb0354f36a504f4c6ffbbf_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_9470448fc61a2205358e09d18cb7e819e69a0369a68866319493f245a2f5f4a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9470448fc61a2205358e09d18cb7e819e69a0369a68866319493f245a2f5f4a6->enter($__internal_9470448fc61a2205358e09d18cb7e819e69a0369a68866319493f245a2f5f4a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_9470448fc61a2205358e09d18cb7e819e69a0369a68866319493f245a2f5f4a6->leave($__internal_9470448fc61a2205358e09d18cb7e819e69a0369a68866319493f245a2f5f4a6_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_0df0d0d1131370bd01f837d305deca0bd32442aefe2e87ec4ab6822a77cc5036 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0df0d0d1131370bd01f837d305deca0bd32442aefe2e87ec4ab6822a77cc5036->enter($__internal_0df0d0d1131370bd01f837d305deca0bd32442aefe2e87ec4ab6822a77cc5036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_0df0d0d1131370bd01f837d305deca0bd32442aefe2e87ec4ab6822a77cc5036->leave($__internal_0df0d0d1131370bd01f837d305deca0bd32442aefe2e87ec4ab6822a77cc5036_prof);

    }

    public function getTemplateName()
    {
        return "@SensioDistribution/Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"TwigBundle::layout.html.twig\" %}

{% block head %}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}\" />
{% endblock %}

{% block title 'Web Configurator Bundle' %}

{% block body %}
    <div class=\"block\">
        {% block content %}{% endblock %}
    </div>
    <div class=\"version\">Symfony Standard Edition v.{{ version }}</div>
{% endblock %}
", "@SensioDistribution/Configurator/layout.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\vendor\\sensio\\distribution-bundle\\Sensio\\Bundle\\DistributionBundle\\Resources\\views\\Configurator\\layout.html.twig");
    }
}
