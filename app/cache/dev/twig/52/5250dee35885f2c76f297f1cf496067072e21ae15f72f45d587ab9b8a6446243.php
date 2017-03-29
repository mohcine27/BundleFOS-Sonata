<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_3ad43a4894d05288054fe5e6a1b4f403e284c858992db61fd7b8f564794269a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
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
        $__internal_717f0e7fadc453d8494aae1fc33de3210d25e88d7f325dc89d990f1420a5ae90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_717f0e7fadc453d8494aae1fc33de3210d25e88d7f325dc89d990f1420a5ae90->enter($__internal_717f0e7fadc453d8494aae1fc33de3210d25e88d7f325dc89d990f1420a5ae90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_717f0e7fadc453d8494aae1fc33de3210d25e88d7f325dc89d990f1420a5ae90->leave($__internal_717f0e7fadc453d8494aae1fc33de3210d25e88d7f325dc89d990f1420a5ae90_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fbd414b3325a2a977ef2ddfdbfb9f5d9af56bfc0b3ce708835ea93baf03ac7a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbd414b3325a2a977ef2ddfdbfb9f5d9af56bfc0b3ce708835ea93baf03ac7a0->enter($__internal_fbd414b3325a2a977ef2ddfdbfb9f5d9af56bfc0b3ce708835ea93baf03ac7a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_fbd414b3325a2a977ef2ddfdbfb9f5d9af56bfc0b3ce708835ea93baf03ac7a0->leave($__internal_fbd414b3325a2a977ef2ddfdbfb9f5d9af56bfc0b3ce708835ea93baf03ac7a0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_68959bc5331c52d6607320f9b20bb87531093b66221fa6f2c3e4ab90317f2ea8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68959bc5331c52d6607320f9b20bb87531093b66221fa6f2c3e4ab90317f2ea8->enter($__internal_68959bc5331c52d6607320f9b20bb87531093b66221fa6f2c3e4ab90317f2ea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_68959bc5331c52d6607320f9b20bb87531093b66221fa6f2c3e4ab90317f2ea8->leave($__internal_68959bc5331c52d6607320f9b20bb87531093b66221fa6f2c3e4ab90317f2ea8_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_1c8f3b1c46b7ff14feb40d873a4ffbef41f529f7d3d2a8ce163b2062ce6aca5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c8f3b1c46b7ff14feb40d873a4ffbef41f529f7d3d2a8ce163b2062ce6aca5c->enter($__internal_1c8f3b1c46b7ff14feb40d873a4ffbef41f529f7d3d2a8ce163b2062ce6aca5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1c8f3b1c46b7ff14feb40d873a4ffbef41f529f7d3d2a8ce163b2062ce6aca5c->leave($__internal_1c8f3b1c46b7ff14feb40d873a4ffbef41f529f7d3d2a8ce163b2062ce6aca5c_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_5e46cc88d2cd94868c91027e3aa83b07d40522a3e48984c844ba423dd96b8a8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e46cc88d2cd94868c91027e3aa83b07d40522a3e48984c844ba423dd96b8a8d->enter($__internal_5e46cc88d2cd94868c91027e3aa83b07d40522a3e48984c844ba423dd96b8a8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_5e46cc88d2cd94868c91027e3aa83b07d40522a3e48984c844ba423dd96b8a8d->leave($__internal_5e46cc88d2cd94868c91027e3aa83b07d40522a3e48984c844ba423dd96b8a8d_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
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
", "SensioDistributionBundle::Configurator/layout.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\vendor\\sensio\\distribution-bundle\\Sensio\\Bundle\\DistributionBundle/Resources/views/Configurator/layout.html.twig");
    }
}
