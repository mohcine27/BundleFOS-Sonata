<?php

/* EasyAdminBundle:default:field_raw.html.twig */
class __TwigTemplate_7267a42ca2e63174be90ed345f3753d6ee9d1f1506ce64a1716a2a042ed714e6 extends Twig_Template
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
        $__internal_d303331765dfe5129ee0c5b8c6d950306ef97dca83a10c64bab1a83937409e8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d303331765dfe5129ee0c5b8c6d950306ef97dca83a10c64bab1a83937409e8b->enter($__internal_d303331765dfe5129ee0c5b8c6d950306ef97dca83a10c64bab1a83937409e8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_raw.html.twig"));

        // line 1
        echo (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
        echo "
";
        
        $__internal_d303331765dfe5129ee0c5b8c6d950306ef97dca83a10c64bab1a83937409e8b->leave($__internal_d303331765dfe5129ee0c5b8c6d950306ef97dca83a10c64bab1a83937409e8b_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_raw.html.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ value|raw }}
", "EasyAdminBundle:default:field_raw.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\vendor\\javiereguiluz\\easyadmin-bundle/Resources/views/default/field_raw.html.twig");
    }
}
