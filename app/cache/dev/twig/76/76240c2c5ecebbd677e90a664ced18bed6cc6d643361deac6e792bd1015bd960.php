<?php

/* AppBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_a4b6f4b4869a3780f966d3f1eec6ed3204703782eb2f34753684aa229d291dc8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_476c40d7f7678772f9fa617868f61cce5fa4aa6e201f6a0bbdeeafae72f93815 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_476c40d7f7678772f9fa617868f61cce5fa4aa6e201f6a0bbdeeafae72f93815->enter($__internal_476c40d7f7678772f9fa617868f61cce5fa4aa6e201f6a0bbdeeafae72f93815_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_476c40d7f7678772f9fa617868f61cce5fa4aa6e201f6a0bbdeeafae72f93815->leave($__internal_476c40d7f7678772f9fa617868f61cce5fa4aa6e201f6a0bbdeeafae72f93815_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_6ba0de92329cc8cdcb6e05e075adc27007f06435378f3c1a0c2f8ade1646d2df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ba0de92329cc8cdcb6e05e075adc27007f06435378f3c1a0c2f8ade1646d2df->enter($__internal_6ba0de92329cc8cdcb6e05e075adc27007f06435378f3c1a0c2f8ade1646d2df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "\t";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_6ba0de92329cc8cdcb6e05e075adc27007f06435378f3c1a0c2f8ade1646d2df->leave($__internal_6ba0de92329cc8cdcb6e05e075adc27007f06435378f3c1a0c2f8ade1646d2df_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8ea47eca657f478b99868e1573b6e4d75c0c74e233104fa015e653e8d346d746 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ea47eca657f478b99868e1573b6e4d75c0c74e233104fa015e653e8d346d746->enter($__internal_8ea47eca657f478b99868e1573b6e4d75c0c74e233104fa015e653e8d346d746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "\t<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
\t";
        
        $__internal_8ea47eca657f478b99868e1573b6e4d75c0c74e233104fa015e653e8d346d746->leave($__internal_8ea47eca657f478b99868e1573b6e4d75c0c74e233104fa015e653e8d346d746_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 6,  41 => 5,  35 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}
{% block body %}
\t{% block fos_user_content %}
\t<p>{{ 'resetting.password_already_requested'|trans }}</p>
\t{% endblock fos_user_content %}
{%endblock%}
", "AppBundle:Resetting:passwordAlreadyRequested.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\src\\AppBundle/Resources/views/Resetting/passwordAlreadyRequested.html.twig");
    }
}
