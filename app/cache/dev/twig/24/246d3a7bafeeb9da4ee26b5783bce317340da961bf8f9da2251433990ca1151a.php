<?php

/* @App/Profile/edit.html.twig */
class __TwigTemplate_d52356a0aa2a9a10dbbb9f7690b382d3c1a067ec4b6158ef7240f41c6d608c88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@App/Profile/edit.html.twig", 1);
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
        $__internal_0e981a0189c014a15f63a4f41236feec743a5d788e714f164987219febdff723 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e981a0189c014a15f63a4f41236feec743a5d788e714f164987219febdff723->enter($__internal_0e981a0189c014a15f63a4f41236feec743a5d788e714f164987219febdff723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e981a0189c014a15f63a4f41236feec743a5d788e714f164987219febdff723->leave($__internal_0e981a0189c014a15f63a4f41236feec743a5d788e714f164987219febdff723_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_94d6890899d383b1e94d52c418715f1d285ec8372c2ff83da2fd9bfff2c11f71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94d6890899d383b1e94d52c418715f1d285ec8372c2ff83da2fd9bfff2c11f71->enter($__internal_94d6890899d383b1e94d52c418715f1d285ec8372c2ff83da2fd9bfff2c11f71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"row\">
        <div class=\"col s12 m8 offset-m2\">
            <h4 class=\"card-panel teal lighten-2 white-head\">Modifier votre profile</h4>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col s12 m8 offset-m2\">
\t\t";
        // line 10
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@App/Profile/edit.html.twig", 10)->display($context);
        // line 11
        echo "\t\t</div>
    </div>
";
        
        $__internal_94d6890899d383b1e94d52c418715f1d285ec8372c2ff83da2fd9bfff2c11f71->leave($__internal_94d6890899d383b1e94d52c418715f1d285ec8372c2ff83da2fd9bfff2c11f71_prof);

    }

    public function getTemplateName()
    {
        return "@App/Profile/edit.html.twig";
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
            <h4 class=\"card-panel teal lighten-2 white-head\">Modifier votre profile</h4>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col s12 m8 offset-m2\">
\t\t{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
\t\t</div>
    </div>
{% endblock body %}
", "@App/Profile/edit.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\src\\AppBundle\\Resources\\views\\Profile\\edit.html.twig");
    }
}
