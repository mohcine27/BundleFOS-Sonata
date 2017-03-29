<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_a9566054149ffc65bbaba0b3f2c709829763f98c46f6b589a61199be8704e3fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_3c86c518702393c45a4f8e7102dcb581af2143ef2257f2d2ac6f6d91eeb15ebd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c86c518702393c45a4f8e7102dcb581af2143ef2257f2d2ac6f6d91eeb15ebd->enter($__internal_3c86c518702393c45a4f8e7102dcb581af2143ef2257f2d2ac6f6d91eeb15ebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c86c518702393c45a4f8e7102dcb581af2143ef2257f2d2ac6f6d91eeb15ebd->leave($__internal_3c86c518702393c45a4f8e7102dcb581af2143ef2257f2d2ac6f6d91eeb15ebd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c5fc6ac426d69655f5c08ec492395fb027eda91f247b6bda30966f89d34eb39c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5fc6ac426d69655f5c08ec492395fb027eda91f247b6bda30966f89d34eb39c->enter($__internal_c5fc6ac426d69655f5c08ec492395fb027eda91f247b6bda30966f89d34eb39c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c5fc6ac426d69655f5c08ec492395fb027eda91f247b6bda30966f89d34eb39c->leave($__internal_c5fc6ac426d69655f5c08ec492395fb027eda91f247b6bda30966f89d34eb39c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2f5f820e0e8a32be389ca5c16d7f4df9eb132e7c01d84348d7786a732829fd23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f5f820e0e8a32be389ca5c16d7f4df9eb132e7c01d84348d7786a732829fd23->enter($__internal_2f5f820e0e8a32be389ca5c16d7f4df9eb132e7c01d84348d7786a732829fd23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2f5f820e0e8a32be389ca5c16d7f4df9eb132e7c01d84348d7786a732829fd23->leave($__internal_2f5f820e0e8a32be389ca5c16d7f4df9eb132e7c01d84348d7786a732829fd23_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b5ba4ea0a1dce85327c7e36c2d2f62a97da0af36e30c84697d746bbbf74bb207 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5ba4ea0a1dce85327c7e36c2d2f62a97da0af36e30c84697d746bbbf74bb207->enter($__internal_b5ba4ea0a1dce85327c7e36c2d2f62a97da0af36e30c84697d746bbbf74bb207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_b5ba4ea0a1dce85327c7e36c2d2f62a97da0af36e30c84697d746bbbf74bb207->leave($__internal_b5ba4ea0a1dce85327c7e36c2d2f62a97da0af36e30c84697d746bbbf74bb207_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
", "@Twig/Exception/exception_full.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
