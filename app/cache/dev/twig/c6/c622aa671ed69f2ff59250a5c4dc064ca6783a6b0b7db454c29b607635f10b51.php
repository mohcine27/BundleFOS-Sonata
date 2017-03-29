<?php

/* AppBundle:Group:list.html.twig */
class __TwigTemplate_cdc958a8cacd39a8517e3adf92b6037c96347aa5fd2e3a2f00756bee12e75c5d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:Group:list.html.twig", 1);
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
        $__internal_94480cefd5337de8dcb07a7215015eead23513e18236ef73db2ea047f41e1b98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94480cefd5337de8dcb07a7215015eead23513e18236ef73db2ea047f41e1b98->enter($__internal_94480cefd5337de8dcb07a7215015eead23513e18236ef73db2ea047f41e1b98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94480cefd5337de8dcb07a7215015eead23513e18236ef73db2ea047f41e1b98->leave($__internal_94480cefd5337de8dcb07a7215015eead23513e18236ef73db2ea047f41e1b98_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e43b28f24940680dcc3b51b986e7010d74f991ab3da1628f3e3aabe4ef14cc85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e43b28f24940680dcc3b51b986e7010d74f991ab3da1628f3e3aabe4ef14cc85->enter($__internal_e43b28f24940680dcc3b51b986e7010d74f991ab3da1628f3e3aabe4ef14cc85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_e43b28f24940680dcc3b51b986e7010d74f991ab3da1628f3e3aabe4ef14cc85->leave($__internal_e43b28f24940680dcc3b51b986e7010d74f991ab3da1628f3e3aabe4ef14cc85_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d06089988a42840dbb72b0d02ce391834a2b3461e0023427b9db98c7cc10661d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d06089988a42840dbb72b0d02ce391834a2b3461e0023427b9db98c7cc10661d->enter($__internal_d06089988a42840dbb72b0d02ce391834a2b3461e0023427b9db98c7cc10661d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "\t";
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "AppBundle:Group:list.html.twig", 5)->display($context);
        
        $__internal_d06089988a42840dbb72b0d02ce391834a2b3461e0023427b9db98c7cc10661d->leave($__internal_d06089988a42840dbb72b0d02ce391834a2b3461e0023427b9db98c7cc10661d_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Group:list.html.twig";
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
{% endblock body %}", "AppBundle:Group:list.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\src\\AppBundle/Resources/views/Group/list.html.twig");
    }
}
