<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_7a1fffbc794e96776dda65a100b6f8ebd95bf082790c1b5fcdd5b57026c9ace6 extends Twig_Template
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
        $__internal_84da1b1348acc86b4317a8a18dde167a924dd6bea19be4714dbcf9f67929b7c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84da1b1348acc86b4317a8a18dde167a924dd6bea19be4714dbcf9f67929b7c2->enter($__internal_84da1b1348acc86b4317a8a18dde167a924dd6bea19be4714dbcf9f67929b7c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_84da1b1348acc86b4317a8a18dde167a924dd6bea19be4714dbcf9f67929b7c2->leave($__internal_84da1b1348acc86b4317a8a18dde167a924dd6bea19be4714dbcf9f67929b7c2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
