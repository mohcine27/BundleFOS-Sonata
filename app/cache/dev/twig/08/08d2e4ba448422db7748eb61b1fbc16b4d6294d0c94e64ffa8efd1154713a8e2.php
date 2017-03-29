<?php

/* default/index.html.twig */
class __TwigTemplate_e562058ca1f771b654d8277fd2d301b39c6bc24b53c8b4fb904384327d8cc8aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b0e153adebd996916769f786c0e82cde1bf587232f4c222b2199ee19195c5a80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0e153adebd996916769f786c0e82cde1bf587232f4c222b2199ee19195c5a80->enter($__internal_b0e153adebd996916769f786c0e82cde1bf587232f4c222b2199ee19195c5a80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0e153adebd996916769f786c0e82cde1bf587232f4c222b2199ee19195c5a80->leave($__internal_b0e153adebd996916769f786c0e82cde1bf587232f4c222b2199ee19195c5a80_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8d52bb70514ab10bbd66c60edff345bc25eb557f0dcbc58809868b70ed98e446 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d52bb70514ab10bbd66c60edff345bc25eb557f0dcbc58809868b70ed98e446->enter($__internal_8d52bb70514ab10bbd66c60edff345bc25eb557f0dcbc58809868b70ed98e446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    Homepage.
";
        
        $__internal_8d52bb70514ab10bbd66c60edff345bc25eb557f0dcbc58809868b70ed98e446->leave($__internal_8d52bb70514ab10bbd66c60edff345bc25eb557f0dcbc58809868b70ed98e446_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
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
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    Homepage.
{% endblock %}
", "default/index.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\app\\Resources\\views\\default\\index.html.twig");
    }
}
