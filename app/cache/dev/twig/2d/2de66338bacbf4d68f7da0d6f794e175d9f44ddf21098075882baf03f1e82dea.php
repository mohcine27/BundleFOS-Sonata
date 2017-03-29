<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_9bd1866f1ed8619c9657850391b6e60be56cfe85a9b6677bdc3e7a970668882f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_99cc6fe7d99eb56ca898639a6e23a7016c13bffb94c66d2d588a0139cb6e90bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99cc6fe7d99eb56ca898639a6e23a7016c13bffb94c66d2d588a0139cb6e90bc->enter($__internal_99cc6fe7d99eb56ca898639a6e23a7016c13bffb94c66d2d588a0139cb6e90bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99cc6fe7d99eb56ca898639a6e23a7016c13bffb94c66d2d588a0139cb6e90bc->leave($__internal_99cc6fe7d99eb56ca898639a6e23a7016c13bffb94c66d2d588a0139cb6e90bc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fcd3cef08ceb4b306ddb93939082b4f18cfa632ae1b1b84b50a1e83a33c526f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcd3cef08ceb4b306ddb93939082b4f18cfa632ae1b1b84b50a1e83a33c526f2->enter($__internal_fcd3cef08ceb4b306ddb93939082b4f18cfa632ae1b1b84b50a1e83a33c526f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_fcd3cef08ceb4b306ddb93939082b4f18cfa632ae1b1b84b50a1e83a33c526f2->leave($__internal_fcd3cef08ceb4b306ddb93939082b4f18cfa632ae1b1b84b50a1e83a33c526f2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
{% include \"FOSUserBundle:ChangePassword:changePassword_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:changePassword.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/views/ChangePassword/changePassword.html.twig");
    }
}
