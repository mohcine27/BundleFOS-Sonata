<?php

/* @App/Registration/register.html.twig */
class __TwigTemplate_5dff22f40067a00cd8d086f1cfc033a1cda0f753bd17168cd1326e96744237d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@App/Registration/register.html.twig", 1);
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
        $__internal_a8e126baf09e74e3127c2ae3ea2ab5b6871825b523f424840e5a74d23389fed0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8e126baf09e74e3127c2ae3ea2ab5b6871825b523f424840e5a74d23389fed0->enter($__internal_a8e126baf09e74e3127c2ae3ea2ab5b6871825b523f424840e5a74d23389fed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8e126baf09e74e3127c2ae3ea2ab5b6871825b523f424840e5a74d23389fed0->leave($__internal_a8e126baf09e74e3127c2ae3ea2ab5b6871825b523f424840e5a74d23389fed0_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_c2e5c2476bcfed4dc6c9d480b2d5e3e1ae2523a5de68cd01ba0595621c47025e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2e5c2476bcfed4dc6c9d480b2d5e3e1ae2523a5de68cd01ba0595621c47025e->enter($__internal_c2e5c2476bcfed4dc6c9d480b2d5e3e1ae2523a5de68cd01ba0595621c47025e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@App/Registration/register.html.twig", 10)->display($context);
        // line 11
        echo "        </div>
    </div>
";
        
        $__internal_c2e5c2476bcfed4dc6c9d480b2d5e3e1ae2523a5de68cd01ba0595621c47025e->leave($__internal_c2e5c2476bcfed4dc6c9d480b2d5e3e1ae2523a5de68cd01ba0595621c47025e_prof);

    }

    public function getTemplateName()
    {
        return "@App/Registration/register.html.twig";
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
", "@App/Registration/register.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\src\\AppBundle\\Resources\\views\\Registration\\register.html.twig");
    }
}
