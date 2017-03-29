<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_2f4829ae0ab7adabb79db79845d06f3073694fa2f67e2c7b83c797bc13bc1405 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2ee4f666729aa5d6049e8ea58b7ce462ba2051b22897d5add2c603fab11e76ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ee4f666729aa5d6049e8ea58b7ce462ba2051b22897d5add2c603fab11e76ac->enter($__internal_2ee4f666729aa5d6049e8ea58b7ce462ba2051b22897d5add2c603fab11e76ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_2ee4f666729aa5d6049e8ea58b7ce462ba2051b22897d5add2c603fab11e76ac->leave($__internal_2ee4f666729aa5d6049e8ea58b7ce462ba2051b22897d5add2c603fab11e76ac_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.atom.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
