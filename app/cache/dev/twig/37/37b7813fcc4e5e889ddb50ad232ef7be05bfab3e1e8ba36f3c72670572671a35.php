<?php

/* @App/Registration/checkEmail.html.twig */
class __TwigTemplate_b87b235efdc6858a1ad3512ccab7afbcf84ad0a77359c3049abf7b0816c24261 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@App/Registration/checkEmail.html.twig", 1);
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
        $__internal_981bc75b51fd526186cd3a4de851db98b2ca5af85c014683079dd3ac36b9cf55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_981bc75b51fd526186cd3a4de851db98b2ca5af85c014683079dd3ac36b9cf55->enter($__internal_981bc75b51fd526186cd3a4de851db98b2ca5af85c014683079dd3ac36b9cf55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_981bc75b51fd526186cd3a4de851db98b2ca5af85c014683079dd3ac36b9cf55->leave($__internal_981bc75b51fd526186cd3a4de851db98b2ca5af85c014683079dd3ac36b9cf55_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4b35b4b9ab2bebc9660490c6a409a39af66436f61d459e8a5efa874c7c25b2fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b35b4b9ab2bebc9660490c6a409a39af66436f61d459e8a5efa874c7c25b2fc->enter($__internal_4b35b4b9ab2bebc9660490c6a409a39af66436f61d459e8a5efa874c7c25b2fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_4b35b4b9ab2bebc9660490c6a409a39af66436f61d459e8a5efa874c7c25b2fc->leave($__internal_4b35b4b9ab2bebc9660490c6a409a39af66436f61d459e8a5efa874c7c25b2fc_prof);

    }

    public function getTemplateName()
    {
        return "@App/Registration/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block body %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock body %}
", "@App/Registration/checkEmail.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\src\\AppBundle\\Resources\\views\\Registration\\checkEmail.html.twig");
    }
}
