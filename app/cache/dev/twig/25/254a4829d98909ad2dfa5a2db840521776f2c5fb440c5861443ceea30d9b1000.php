<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_33cd0003d0e7d79433b0b53e94f963af69b57738662a3a8c3beec73cbc50b6f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_a0c6448b0b1d0d55246b39e66f1b0d5a0a14a803b1b23c03744e493403e2739b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0c6448b0b1d0d55246b39e66f1b0d5a0a14a803b1b23c03744e493403e2739b->enter($__internal_a0c6448b0b1d0d55246b39e66f1b0d5a0a14a803b1b23c03744e493403e2739b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0c6448b0b1d0d55246b39e66f1b0d5a0a14a803b1b23c03744e493403e2739b->leave($__internal_a0c6448b0b1d0d55246b39e66f1b0d5a0a14a803b1b23c03744e493403e2739b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ab442b361b03e481e54243406d9a400af6c33395b6cd65dbf43b35162c1cc0d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab442b361b03e481e54243406d9a400af6c33395b6cd65dbf43b35162c1cc0d0->enter($__internal_ab442b361b03e481e54243406d9a400af6c33395b6cd65dbf43b35162c1cc0d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_ab442b361b03e481e54243406d9a400af6c33395b6cd65dbf43b35162c1cc0d0->leave($__internal_ab442b361b03e481e54243406d9a400af6c33395b6cd65dbf43b35162c1cc0d0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d6bd1826323f3a63a77e25be252f3a02c13bf4f1b4505d8c6cae14b80fa66300 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6bd1826323f3a63a77e25be252f3a02c13bf4f1b4505d8c6cae14b80fa66300->enter($__internal_d6bd1826323f3a63a77e25be252f3a02c13bf4f1b4505d8c6cae14b80fa66300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d6bd1826323f3a63a77e25be252f3a02c13bf4f1b4505d8c6cae14b80fa66300->leave($__internal_d6bd1826323f3a63a77e25be252f3a02c13bf4f1b4505d8c6cae14b80fa66300_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
