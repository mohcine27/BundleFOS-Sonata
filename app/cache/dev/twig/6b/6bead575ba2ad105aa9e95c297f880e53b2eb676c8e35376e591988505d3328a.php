<?php

/* @App/Resetting/request.html.twig */
class __TwigTemplate_234f0a387ab3c16a8023531db528bd3b7c461bdd374c6d1bb13b84b8e5416e73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@App/Resetting/request.html.twig", 1);
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
        $__internal_707bfe5f5159640644679e86ffa25b7812af3214f75007ded6925448b927db0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_707bfe5f5159640644679e86ffa25b7812af3214f75007ded6925448b927db0c->enter($__internal_707bfe5f5159640644679e86ffa25b7812af3214f75007ded6925448b927db0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_707bfe5f5159640644679e86ffa25b7812af3214f75007ded6925448b927db0c->leave($__internal_707bfe5f5159640644679e86ffa25b7812af3214f75007ded6925448b927db0c_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_b2de8ad77cb0d81cfa948ab8e4c1c8abbf59bcb153b2135fd1be06ca887045a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2de8ad77cb0d81cfa948ab8e4c1c8abbf59bcb153b2135fd1be06ca887045a1->enter($__internal_b2de8ad77cb0d81cfa948ab8e4c1c8abbf59bcb153b2135fd1be06ca887045a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b2de8ad77cb0d81cfa948ab8e4c1c8abbf59bcb153b2135fd1be06ca887045a1->leave($__internal_b2de8ad77cb0d81cfa948ab8e4c1c8abbf59bcb153b2135fd1be06ca887045a1_prof);

    }

    // line 8
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4d555334a9ec2fb4923c42f9ecd8b92db684e22bf30ec937edb9cbda00853b9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d555334a9ec2fb4923c42f9ecd8b92db684e22bf30ec937edb9cbda00853b9c->enter($__internal_4d555334a9ec2fb4923c42f9ecd8b92db684e22bf30ec937edb9cbda00853b9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 9
        echo "\t\t<div class=\"row\">
\t\t\t";
        // line 10
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@App/Resetting/request.html.twig", 10)->display($context);
        // line 11
        echo "\t\t <div class=\"col s12 m8 offset-m2\">\t 
\t";
        
        $__internal_4d555334a9ec2fb4923c42f9ecd8b92db684e22bf30ec937edb9cbda00853b9c->leave($__internal_4d555334a9ec2fb4923c42f9ecd8b92db684e22bf30ec937edb9cbda00853b9c_prof);

    }

    public function getTemplateName()
    {
        return "@App/Resetting/request.html.twig";
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

{% endblock body %}", "@App/Resetting/request.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\src\\AppBundle\\Resources\\views\\Resetting\\request.html.twig");
    }
}
