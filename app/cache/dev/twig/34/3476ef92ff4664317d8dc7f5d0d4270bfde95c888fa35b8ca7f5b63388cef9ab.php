<?php

/* EasyAdminBundle:default:field_id.html.twig */
class __TwigTemplate_c5150debcdb58d4738de6d293b9086a70d3b8bce0e9ccda927ab4d907e8bedc4 extends Twig_Template
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
        $__internal_a00042f366381c8c7cf9b93040b76087bc3b54846d57e04a147a6736e0b498d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a00042f366381c8c7cf9b93040b76087bc3b54846d57e04a147a6736e0b498d8->enter($__internal_a00042f366381c8c7cf9b93040b76087bc3b54846d57e04a147a6736e0b498d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_id.html.twig"));

        // line 2
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "
";
        
        $__internal_a00042f366381c8c7cf9b93040b76087bc3b54846d57e04a147a6736e0b498d8->leave($__internal_a00042f366381c8c7cf9b93040b76087bc3b54846d57e04a147a6736e0b498d8_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_id.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# this field template is used to avoid formatting the special ID attribute as a number #}
{{ value }}
", "EasyAdminBundle:default:field_id.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\vendor\\javiereguiluz\\easyadmin-bundle/Resources/views/default/field_id.html.twig");
    }
}
