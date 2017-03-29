<?php

/* AppBundle:Group:new.html.twig */
class __TwigTemplate_35f9a968b0596fbb48f9fff516d6329fd6390051b1174cb4e33675e8863e7f89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:Group:new.html.twig", 1);
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
        $__internal_e2a313be55feb858458de0b6a75b083fb3c77e6734fc2959adf7751a3e274bb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2a313be55feb858458de0b6a75b083fb3c77e6734fc2959adf7751a3e274bb3->enter($__internal_e2a313be55feb858458de0b6a75b083fb3c77e6734fc2959adf7751a3e274bb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2a313be55feb858458de0b6a75b083fb3c77e6734fc2959adf7751a3e274bb3->leave($__internal_e2a313be55feb858458de0b6a75b083fb3c77e6734fc2959adf7751a3e274bb3_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_4faf4839c480931f2597efcd232efa411096d7642f808e663e563dbf97b880a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4faf4839c480931f2597efcd232efa411096d7642f808e663e563dbf97b880a1->enter($__internal_4faf4839c480931f2597efcd232efa411096d7642f808e663e563dbf97b880a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_4faf4839c480931f2597efcd232efa411096d7642f808e663e563dbf97b880a1->leave($__internal_4faf4839c480931f2597efcd232efa411096d7642f808e663e563dbf97b880a1_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_493af8c2f099528866e44fa725e8f3ca5f198906a2235bf567f504041e79e202 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_493af8c2f099528866e44fa725e8f3ca5f198906a2235bf567f504041e79e202->enter($__internal_493af8c2f099528866e44fa725e8f3ca5f198906a2235bf567f504041e79e202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "\t";
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "AppBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_493af8c2f099528866e44fa725e8f3ca5f198906a2235bf567f504041e79e202->leave($__internal_493af8c2f099528866e44fa725e8f3ca5f198906a2235bf567f504041e79e202_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Group:new.html.twig";
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
{% endblock body %}", "AppBundle:Group:new.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\src\\AppBundle/Resources/views/Group/new.html.twig");
    }
}
