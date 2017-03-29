<?php

/* @App/Group/list.html.twig */
class __TwigTemplate_7c91bbd2f074d62209ef0c98a99a79a005c242ab6a53f751a73bb7946d211c3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@App/Group/list.html.twig", 1);
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
        $__internal_c601157f2daac05caa1209d1c6f83fd05ed24fe749837827329606692401ef05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c601157f2daac05caa1209d1c6f83fd05ed24fe749837827329606692401ef05->enter($__internal_c601157f2daac05caa1209d1c6f83fd05ed24fe749837827329606692401ef05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c601157f2daac05caa1209d1c6f83fd05ed24fe749837827329606692401ef05->leave($__internal_c601157f2daac05caa1209d1c6f83fd05ed24fe749837827329606692401ef05_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5fd39e6bf524b546d63e29f5297bb761da7b17fb83f65e741baeb34b1c4394e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fd39e6bf524b546d63e29f5297bb761da7b17fb83f65e741baeb34b1c4394e8->enter($__internal_5fd39e6bf524b546d63e29f5297bb761da7b17fb83f65e741baeb34b1c4394e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_5fd39e6bf524b546d63e29f5297bb761da7b17fb83f65e741baeb34b1c4394e8->leave($__internal_5fd39e6bf524b546d63e29f5297bb761da7b17fb83f65e741baeb34b1c4394e8_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0afc4cf5ee373d5f548310d58994b8a57a43c6428a3759feff61be4889967f4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0afc4cf5ee373d5f548310d58994b8a57a43c6428a3759feff61be4889967f4c->enter($__internal_0afc4cf5ee373d5f548310d58994b8a57a43c6428a3759feff61be4889967f4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "\t";
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@App/Group/list.html.twig", 5)->display($context);
        
        $__internal_0afc4cf5ee373d5f548310d58994b8a57a43c6428a3759feff61be4889967f4c->leave($__internal_0afc4cf5ee373d5f548310d58994b8a57a43c6428a3759feff61be4889967f4c_prof);

    }

    public function getTemplateName()
    {
        return "@App/Group/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 5,  41 => 4,  35 => 3,  11 => 1,);
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

{% block body %}
{% block fos_user_content %}
\t{% include \"FOSUserBundle:Group:list_content.html.twig\" %}
{% endblock fos_user_content %}
{% endblock body %}", "@App/Group/list.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\src\\AppBundle\\Resources\\views\\Group\\list.html.twig");
    }
}
