<?php

/* @App/Resetting/checkEmail.html.twig */
class __TwigTemplate_3dd50ebd31431034a8fd963a65f0f7db8e0a17c917f83bd592cf556a22686d53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@App/Resetting/checkEmail.html.twig", 1);
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
        $__internal_3095aa62e0f020f0157d6bbd3db4795b6835b18d7dc60de72a2dc50dec60eabd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3095aa62e0f020f0157d6bbd3db4795b6835b18d7dc60de72a2dc50dec60eabd->enter($__internal_3095aa62e0f020f0157d6bbd3db4795b6835b18d7dc60de72a2dc50dec60eabd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3095aa62e0f020f0157d6bbd3db4795b6835b18d7dc60de72a2dc50dec60eabd->leave($__internal_3095aa62e0f020f0157d6bbd3db4795b6835b18d7dc60de72a2dc50dec60eabd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8e8d9ba751f4a395cf6c64f7770f8da46bb83604b54b89e1320081736afa0d84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e8d9ba751f4a395cf6c64f7770f8da46bb83604b54b89e1320081736afa0d84->enter($__internal_8e8d9ba751f4a395cf6c64f7770f8da46bb83604b54b89e1320081736afa0d84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_8e8d9ba751f4a395cf6c64f7770f8da46bb83604b54b89e1320081736afa0d84->leave($__internal_8e8d9ba751f4a395cf6c64f7770f8da46bb83604b54b89e1320081736afa0d84_prof);

    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fc243103e74ebc2479de80e3dc611a5e1623dc9e6827a45b97d45500fa9c6c41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc243103e74ebc2479de80e3dc611a5e1623dc9e6827a45b97d45500fa9c6c41->enter($__internal_fc243103e74ebc2479de80e3dc611a5e1623dc9e6827a45b97d45500fa9c6c41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "\t<p>
\t";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
\t</p>
\t";
        
        $__internal_fc243103e74ebc2479de80e3dc611a5e1623dc9e6827a45b97d45500fa9c6c41->leave($__internal_fc243103e74ebc2479de80e3dc611a5e1623dc9e6827a45b97d45500fa9c6c41_prof);

    }

    public function getTemplateName()
    {
        return "@App/Resetting/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 6,  58 => 5,  52 => 4,  44 => 9,  41 => 4,  35 => 3,  11 => 1,);
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
\t<p>
\t{{ 'resetting.check_email'|trans({'%email%': email}) }}
\t</p>
\t{% endblock %}

{%endblock%}", "@App/Resetting/checkEmail.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\src\\AppBundle\\Resources\\views\\Resetting\\checkEmail.html.twig");
    }
}
