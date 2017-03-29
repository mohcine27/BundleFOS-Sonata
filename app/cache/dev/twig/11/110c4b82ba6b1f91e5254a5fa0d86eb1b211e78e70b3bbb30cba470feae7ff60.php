<?php

/* AppBundle:Registration:register.html.twig */
class __TwigTemplate_b31a9dadb3bb9e24f1c28b68a316fdfb1beb30b099cea0e7d550ac43aff222d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:Registration:register.html.twig", 1);
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
        $__internal_316f7f6e00e087c717ba2fd4c36bdef519c8794b75d8b8004f5cb4fc03321dd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_316f7f6e00e087c717ba2fd4c36bdef519c8794b75d8b8004f5cb4fc03321dd9->enter($__internal_316f7f6e00e087c717ba2fd4c36bdef519c8794b75d8b8004f5cb4fc03321dd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_316f7f6e00e087c717ba2fd4c36bdef519c8794b75d8b8004f5cb4fc03321dd9->leave($__internal_316f7f6e00e087c717ba2fd4c36bdef519c8794b75d8b8004f5cb4fc03321dd9_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_324aaa9ed6bebee9b8db733809597533d7eaa2ebe3eeb8f5547481bd4bff6126 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_324aaa9ed6bebee9b8db733809597533d7eaa2ebe3eeb8f5547481bd4bff6126->enter($__internal_324aaa9ed6bebee9b8db733809597533d7eaa2ebe3eeb8f5547481bd4bff6126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"row\">
        <div class=\"col s12 m8 offset-m2\">
            <h4 class=\"card-panel teal lighten-2 white-head\">S'inscrire</h4>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col s12 m8 offset-m2\">
            ";
        // line 10
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "AppBundle:Registration:register.html.twig", 10)->display($context);
        // line 11
        echo "        </div>
    </div>
";
        
        $__internal_324aaa9ed6bebee9b8db733809597533d7eaa2ebe3eeb8f5547481bd4bff6126->leave($__internal_324aaa9ed6bebee9b8db733809597533d7eaa2ebe3eeb8f5547481bd4bff6126_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 11,  49 => 10,  40 => 3,  34 => 2,  11 => 1,);
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
    <div class=\"row\">
        <div class=\"col s12 m8 offset-m2\">
            <h4 class=\"card-panel teal lighten-2 white-head\">S'inscrire</h4>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col s12 m8 offset-m2\">
            {% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
        </div>
    </div>
{% endblock body %}
", "AppBundle:Registration:register.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\src\\AppBundle/Resources/views/Registration/register.html.twig");
    }
}
