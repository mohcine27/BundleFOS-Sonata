<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_f69d99a9187644f2c4ed9fad9df2c675e048f061a37ef16cf7b1f6fdc1e6f072 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1fc469730478abf0c4da207ffaba4cb8569ab3fb8550ceaef7ac638d827c2963 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fc469730478abf0c4da207ffaba4cb8569ab3fb8550ceaef7ac638d827c2963->enter($__internal_1fc469730478abf0c4da207ffaba4cb8569ab3fb8550ceaef7ac638d827c2963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1fc469730478abf0c4da207ffaba4cb8569ab3fb8550ceaef7ac638d827c2963->leave($__internal_1fc469730478abf0c4da207ffaba4cb8569ab3fb8550ceaef7ac638d827c2963_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a58cf6fe217a1b3a45a877b4f7d110fa9a292fd7ea9791a255d89fe6bc50b4f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a58cf6fe217a1b3a45a877b4f7d110fa9a292fd7ea9791a255d89fe6bc50b4f0->enter($__internal_a58cf6fe217a1b3a45a877b4f7d110fa9a292fd7ea9791a255d89fe6bc50b4f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_a58cf6fe217a1b3a45a877b4f7d110fa9a292fd7ea9791a255d89fe6bc50b4f0->leave($__internal_a58cf6fe217a1b3a45a877b4f7d110fa9a292fd7ea9791a255d89fe6bc50b4f0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c2de32afcb4122589ded77ccb248b5ae9b16843de9e7d55928a8f9fd6effe261 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2de32afcb4122589ded77ccb248b5ae9b16843de9e7d55928a8f9fd6effe261->enter($__internal_c2de32afcb4122589ded77ccb248b5ae9b16843de9e7d55928a8f9fd6effe261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_c2de32afcb4122589ded77ccb248b5ae9b16843de9e7d55928a8f9fd6effe261->leave($__internal_c2de32afcb4122589ded77ccb248b5ae9b16843de9e7d55928a8f9fd6effe261_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
