<?php

/* @EasyAdmin/default/field_id.html.twig */
class __TwigTemplate_00e67ada084d79bf30e95b123d4917b2de0af1ccad599dfc240b53080237663d extends Twig_Template
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
        $__internal_11918c0bc1093f6f11ec7d4af10b28b7a65d885ab5147d96b8dd962fdc904884 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11918c0bc1093f6f11ec7d4af10b28b7a65d885ab5147d96b8dd962fdc904884->enter($__internal_11918c0bc1093f6f11ec7d4af10b28b7a65d885ab5147d96b8dd962fdc904884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_id.html.twig"));

        // line 2
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "
";
        
        $__internal_11918c0bc1093f6f11ec7d4af10b28b7a65d885ab5147d96b8dd962fdc904884->leave($__internal_11918c0bc1093f6f11ec7d4af10b28b7a65d885ab5147d96b8dd962fdc904884_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_id.html.twig";
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
", "@EasyAdmin/default/field_id.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\default\\field_id.html.twig");
    }
}
