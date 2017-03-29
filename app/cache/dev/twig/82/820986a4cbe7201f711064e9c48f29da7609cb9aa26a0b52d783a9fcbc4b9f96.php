<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_89fdbf412a4709818bb2d10117c8a5bf06fb53789b391c75db96cf497911e2ff extends Twig_Template
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
        $__internal_2aa343d4e53a5e7d21dbdd5289265a765307f04d2e0af59a3ac7976cf4d52b90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2aa343d4e53a5e7d21dbdd5289265a765307f04d2e0af59a3ac7976cf4d52b90->enter($__internal_2aa343d4e53a5e7d21dbdd5289265a765307f04d2e0af59a3ac7976cf4d52b90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_2aa343d4e53a5e7d21dbdd5289265a765307f04d2e0af59a3ac7976cf4d52b90->leave($__internal_2aa343d4e53a5e7d21dbdd5289265a765307f04d2e0af59a3ac7976cf4d52b90_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
