<?php

/* @App/Group/new.html.twig */
class __TwigTemplate_13786710abd17d23e2b38364b7d59d1db83bd94eb220e30716beab6780200436 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@App/Group/new.html.twig", 1);
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
        $__internal_1404c6a983b8da21f225c76d370b2a1584a71a8ad7873ef389de633af33e05af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1404c6a983b8da21f225c76d370b2a1584a71a8ad7873ef389de633af33e05af->enter($__internal_1404c6a983b8da21f225c76d370b2a1584a71a8ad7873ef389de633af33e05af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1404c6a983b8da21f225c76d370b2a1584a71a8ad7873ef389de633af33e05af->leave($__internal_1404c6a983b8da21f225c76d370b2a1584a71a8ad7873ef389de633af33e05af_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_4e0aa7dd75089be7e1a2660d0aede2ea52b2cd727cd296da0c699f40a0c89267 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e0aa7dd75089be7e1a2660d0aede2ea52b2cd727cd296da0c699f40a0c89267->enter($__internal_4e0aa7dd75089be7e1a2660d0aede2ea52b2cd727cd296da0c699f40a0c89267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_4e0aa7dd75089be7e1a2660d0aede2ea52b2cd727cd296da0c699f40a0c89267->leave($__internal_4e0aa7dd75089be7e1a2660d0aede2ea52b2cd727cd296da0c699f40a0c89267_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_356d982c63145593cd35c63bdf0e0a5b436fd4a05c31f7783cc0906cdd674bd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_356d982c63145593cd35c63bdf0e0a5b436fd4a05c31f7783cc0906cdd674bd0->enter($__internal_356d982c63145593cd35c63bdf0e0a5b436fd4a05c31f7783cc0906cdd674bd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "\t";
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@App/Group/new.html.twig", 4)->display($context);
        
        $__internal_356d982c63145593cd35c63bdf0e0a5b436fd4a05c31f7783cc0906cdd674bd0->leave($__internal_356d982c63145593cd35c63bdf0e0a5b436fd4a05c31f7783cc0906cdd674bd0_prof);

    }

    public function getTemplateName()
    {
        return "@App/Group/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 4,  41 => 3,  35 => 2,  11 => 1,);
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
\t{% include \"FOSUserBundle:Group:new_content.html.twig\" %}
{% endblock fos_user_content %}
{% endblock body %}", "@App/Group/new.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\src\\AppBundle\\Resources\\views\\Group\\new.html.twig");
    }
}
