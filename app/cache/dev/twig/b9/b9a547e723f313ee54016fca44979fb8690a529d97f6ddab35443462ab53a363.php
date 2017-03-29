<?php

/* AppBundle:Resetting:reset.html.twig */
class __TwigTemplate_5ec4c64f4d0b5816c9a079a4c50a07ceb10868412418467876e65909c9682d2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "AppBundle:Resetting:reset.html.twig", 1);
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
        $__internal_38b04f4a3356008bd74837846e85c5c375f345a41e4fbe91cabe37384dafc4e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38b04f4a3356008bd74837846e85c5c375f345a41e4fbe91cabe37384dafc4e1->enter($__internal_38b04f4a3356008bd74837846e85c5c375f345a41e4fbe91cabe37384dafc4e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38b04f4a3356008bd74837846e85c5c375f345a41e4fbe91cabe37384dafc4e1->leave($__internal_38b04f4a3356008bd74837846e85c5c375f345a41e4fbe91cabe37384dafc4e1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_02b9953fbb2164b8744cd8cc5c8d4388c21cb8745f86494bf63059eb00dbb353 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02b9953fbb2164b8744cd8cc5c8d4388c21cb8745f86494bf63059eb00dbb353->enter($__internal_02b9953fbb2164b8744cd8cc5c8d4388c21cb8745f86494bf63059eb00dbb353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "AppBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_02b9953fbb2164b8744cd8cc5c8d4388c21cb8745f86494bf63059eb00dbb353->leave($__internal_02b9953fbb2164b8744cd8cc5c8d4388c21cb8745f86494bf63059eb00dbb353_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Resetting:reset.html.twig";
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
{% include \"FOSUserBundle:Resetting:reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "AppBundle:Resetting:reset.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\src\\AppBundle/Resources/views/Resetting/reset.html.twig");
    }
}
