<?php

/* @FOSUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_d425166a00a2032ead81fa759651658f91855242a3c07edd7cdcb9dbcdc3dffa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6568e28e5f52bcfb6ec5d04ff0830d87b6c0221cab7038ebda5ad879b4533402 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6568e28e5f52bcfb6ec5d04ff0830d87b6c0221cab7038ebda5ad879b4533402->enter($__internal_6568e28e5f52bcfb6ec5d04ff0830d87b6c0221cab7038ebda5ad879b4533402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6568e28e5f52bcfb6ec5d04ff0830d87b6c0221cab7038ebda5ad879b4533402->leave($__internal_6568e28e5f52bcfb6ec5d04ff0830d87b6c0221cab7038ebda5ad879b4533402_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7df1367399cc5981c4fe450c34924ea90aef222b4e238d12568409da2c697be7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7df1367399cc5981c4fe450c34924ea90aef222b4e238d12568409da2c697be7->enter($__internal_7df1367399cc5981c4fe450c34924ea90aef222b4e238d12568409da2c697be7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_7df1367399cc5981c4fe450c34924ea90aef222b4e238d12568409da2c697be7->leave($__internal_7df1367399cc5981c4fe450c34924ea90aef222b4e238d12568409da2c697be7_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/changePassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:ChangePassword:changePassword_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/ChangePassword/changePassword.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle\\Resources\\views\\ChangePassword\\changePassword.html.twig");
    }
}
