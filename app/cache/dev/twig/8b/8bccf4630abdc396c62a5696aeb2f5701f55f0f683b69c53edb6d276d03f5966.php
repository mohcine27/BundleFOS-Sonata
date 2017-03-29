<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_5934fc2f5889511bb6878c6c1b7a46e08fbea0ebaff79f68d0c7e4d30d1d1c9c extends Twig_Template
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
        $__internal_06a92146be4e857af6dfb42dc23ccb9953623a085db69d23f5267104263c1a8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06a92146be4e857af6dfb42dc23ccb9953623a085db69d23f5267104263c1a8a->enter($__internal_06a92146be4e857af6dfb42dc23ccb9953623a085db69d23f5267104263c1a8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06a92146be4e857af6dfb42dc23ccb9953623a085db69d23f5267104263c1a8a->leave($__internal_06a92146be4e857af6dfb42dc23ccb9953623a085db69d23f5267104263c1a8a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d34be684ebe6b3b1800852e8e59419dafa2422acb20cbcca0ac7e1ed95841c28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d34be684ebe6b3b1800852e8e59419dafa2422acb20cbcca0ac7e1ed95841c28->enter($__internal_d34be684ebe6b3b1800852e8e59419dafa2422acb20cbcca0ac7e1ed95841c28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d34be684ebe6b3b1800852e8e59419dafa2422acb20cbcca0ac7e1ed95841c28->leave($__internal_d34be684ebe6b3b1800852e8e59419dafa2422acb20cbcca0ac7e1ed95841c28_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_60be4eb71d453c34d034fca1363712225666b8d1240ac26a08fb8044e129d289 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60be4eb71d453c34d034fca1363712225666b8d1240ac26a08fb8044e129d289->enter($__internal_60be4eb71d453c34d034fca1363712225666b8d1240ac26a08fb8044e129d289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_60be4eb71d453c34d034fca1363712225666b8d1240ac26a08fb8044e129d289->leave($__internal_60be4eb71d453c34d034fca1363712225666b8d1240ac26a08fb8044e129d289_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d6a7c4797a8e244f07a2a6f86d2d4bcd585f43da58c5ef4c872c5ab2f8040449 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6a7c4797a8e244f07a2a6f86d2d4bcd585f43da58c5ef4c872c5ab2f8040449->enter($__internal_d6a7c4797a8e244f07a2a6f86d2d4bcd585f43da58c5ef4c872c5ab2f8040449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_d6a7c4797a8e244f07a2a6f86d2d4bcd585f43da58c5ef4c872c5ab2f8040449->leave($__internal_d6a7c4797a8e244f07a2a6f86d2d4bcd585f43da58c5ef4c872c5ab2f8040449_prof);

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
