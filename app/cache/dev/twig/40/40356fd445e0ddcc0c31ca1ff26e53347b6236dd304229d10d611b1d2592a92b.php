<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_137698912453fdef437409b4e8e12fc418ed061e27df503a09e96a0371f19b88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_e28b2aef07e983383278b3fe7244ea66ff4f887b12d5c1b49ba430001bf4c042 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e28b2aef07e983383278b3fe7244ea66ff4f887b12d5c1b49ba430001bf4c042->enter($__internal_e28b2aef07e983383278b3fe7244ea66ff4f887b12d5c1b49ba430001bf4c042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e28b2aef07e983383278b3fe7244ea66ff4f887b12d5c1b49ba430001bf4c042->leave($__internal_e28b2aef07e983383278b3fe7244ea66ff4f887b12d5c1b49ba430001bf4c042_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8e966a1f7d15f61c4013f54c31dd727e985c4f402c8d282547cbc23b419f0518 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e966a1f7d15f61c4013f54c31dd727e985c4f402c8d282547cbc23b419f0518->enter($__internal_8e966a1f7d15f61c4013f54c31dd727e985c4f402c8d282547cbc23b419f0518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8e966a1f7d15f61c4013f54c31dd727e985c4f402c8d282547cbc23b419f0518->leave($__internal_8e966a1f7d15f61c4013f54c31dd727e985c4f402c8d282547cbc23b419f0518_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a2be59d0f3fa7249d3d3d5040db8fa3e18afbef80c6952a38f56ba6fa059b0ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2be59d0f3fa7249d3d3d5040db8fa3e18afbef80c6952a38f56ba6fa059b0ba->enter($__internal_a2be59d0f3fa7249d3d3d5040db8fa3e18afbef80c6952a38f56ba6fa059b0ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a2be59d0f3fa7249d3d3d5040db8fa3e18afbef80c6952a38f56ba6fa059b0ba->leave($__internal_a2be59d0f3fa7249d3d3d5040db8fa3e18afbef80c6952a38f56ba6fa059b0ba_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7fd77dc4f157a1a7eceb8784a42c210418b283a76e945e95f5b785cbe707935d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fd77dc4f157a1a7eceb8784a42c210418b283a76e945e95f5b785cbe707935d->enter($__internal_7fd77dc4f157a1a7eceb8784a42c210418b283a76e945e95f5b785cbe707935d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_7fd77dc4f157a1a7eceb8784a42c210418b283a76e945e95f5b785cbe707935d->leave($__internal_7fd77dc4f157a1a7eceb8784a42c210418b283a76e945e95f5b785cbe707935d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
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

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
