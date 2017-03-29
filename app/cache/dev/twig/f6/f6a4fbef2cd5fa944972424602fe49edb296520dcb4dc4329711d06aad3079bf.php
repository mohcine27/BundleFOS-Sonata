<?php

/* @App/Resetting/reset.html.twig */
class __TwigTemplate_cd3c512bc61e777d544e86931ac7c06107f610427b25d40b6d05d0a2390a64e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@App/Resetting/reset.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_65d2fa38b306b9fb337ca642b72de839a813d6fbac851536116378ba48789bf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65d2fa38b306b9fb337ca642b72de839a813d6fbac851536116378ba48789bf1->enter($__internal_65d2fa38b306b9fb337ca642b72de839a813d6fbac851536116378ba48789bf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65d2fa38b306b9fb337ca642b72de839a813d6fbac851536116378ba48789bf1->leave($__internal_65d2fa38b306b9fb337ca642b72de839a813d6fbac851536116378ba48789bf1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_423607e7b5595f1bf4e2ab58f8ea08688d36a2ae1448cc59f0243d0ea12252d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_423607e7b5595f1bf4e2ab58f8ea08688d36a2ae1448cc59f0243d0ea12252d5->enter($__internal_423607e7b5595f1bf4e2ab58f8ea08688d36a2ae1448cc59f0243d0ea12252d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@App/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_423607e7b5595f1bf4e2ab58f8ea08688d36a2ae1448cc59f0243d0ea12252d5->leave($__internal_423607e7b5595f1bf4e2ab58f8ea08688d36a2ae1448cc59f0243d0ea12252d5_prof);

    }

    public function getTemplateName()
    {
        return "@App/Resetting/reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Resetting:reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "@App/Resetting/reset.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\src\\AppBundle\\Resources\\views\\Resetting\\reset.html.twig");
    }
}
