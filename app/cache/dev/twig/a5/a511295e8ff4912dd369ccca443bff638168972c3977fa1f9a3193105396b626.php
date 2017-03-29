<?php

/* AppBundle:Resetting:request.html.twig */
class __TwigTemplate_355f0a0f3a729eb63333a0d44a300bb7687323ea7364c965f1f154c93e709476 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:Resetting:request.html.twig", 1);
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
        $__internal_595c20deeb526b3d28907f22298b3e9693cb27f5cbc428f21e20aad0b5483ae2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_595c20deeb526b3d28907f22298b3e9693cb27f5cbc428f21e20aad0b5483ae2->enter($__internal_595c20deeb526b3d28907f22298b3e9693cb27f5cbc428f21e20aad0b5483ae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_595c20deeb526b3d28907f22298b3e9693cb27f5cbc428f21e20aad0b5483ae2->leave($__internal_595c20deeb526b3d28907f22298b3e9693cb27f5cbc428f21e20aad0b5483ae2_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_d35141e1914d239711169ab813237468b5b34d5e2e5ed2c97bd9d37ab8ec70f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d35141e1914d239711169ab813237468b5b34d5e2e5ed2c97bd9d37ab8ec70f3->enter($__internal_d35141e1914d239711169ab813237468b5b34d5e2e5ed2c97bd9d37ab8ec70f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "\t\t<div class=\"row\">
\t\t\t<div class=\"col s12 m8 offset-m2\">
\t\t\t\t<h4 class=\"card-panel teal lighten-2 white-head\">Modifier mot de passe</h4>
\t\t\t</div>
\t\t</div>
\t";
        // line 8
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 13
        echo "
";
        
        $__internal_d35141e1914d239711169ab813237468b5b34d5e2e5ed2c97bd9d37ab8ec70f3->leave($__internal_d35141e1914d239711169ab813237468b5b34d5e2e5ed2c97bd9d37ab8ec70f3_prof);

    }

    // line 8
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_663a5e6bfb41bab1b4a957d84c5497b998e1585421ff44b64e8968c87f72a3d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_663a5e6bfb41bab1b4a957d84c5497b998e1585421ff44b64e8968c87f72a3d9->enter($__internal_663a5e6bfb41bab1b4a957d84c5497b998e1585421ff44b64e8968c87f72a3d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 9
        echo "\t\t<div class=\"row\">
\t\t\t";
        // line 10
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "AppBundle:Resetting:request.html.twig", 10)->display($context);
        // line 11
        echo "\t\t <div class=\"col s12 m8 offset-m2\">\t 
\t";
        
        $__internal_663a5e6bfb41bab1b4a957d84c5497b998e1585421ff44b64e8968c87f72a3d9->leave($__internal_663a5e6bfb41bab1b4a957d84c5497b998e1585421ff44b64e8968c87f72a3d9_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Resetting:request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 11,  67 => 10,  64 => 9,  58 => 8,  50 => 13,  48 => 8,  41 => 3,  35 => 2,  11 => 1,);
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
\t\t<div class=\"row\">
\t\t\t<div class=\"col s12 m8 offset-m2\">
\t\t\t\t<h4 class=\"card-panel teal lighten-2 white-head\">Modifier mot de passe</h4>
\t\t\t</div>
\t\t</div>
\t{% block fos_user_content %}
\t\t<div class=\"row\">
\t\t\t{% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
\t\t <div class=\"col s12 m8 offset-m2\">\t 
\t{% endblock fos_user_content %}

{% endblock body %}", "AppBundle:Resetting:request.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\src\\AppBundle/Resources/views/Resetting/request.html.twig");
    }
}
