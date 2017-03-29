<?php

/* @App/Registration/email.txt.twig */
class __TwigTemplate_437be2fccf01622cd055113793a36426d031def55fefa344119743df1643edd9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2e03397ad378d8e4dd72d6b57db61b0b274f93e166b24841eb4b26752241fbcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e03397ad378d8e4dd72d6b57db61b0b274f93e166b24841eb4b26752241fbcf->enter($__internal_2e03397ad378d8e4dd72d6b57db61b0b274f93e166b24841eb4b26752241fbcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_2e03397ad378d8e4dd72d6b57db61b0b274f93e166b24841eb4b26752241fbcf->leave($__internal_2e03397ad378d8e4dd72d6b57db61b0b274f93e166b24841eb4b26752241fbcf_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_596875e6194c91b9907f51cf8488a15f7c7082ca494bf037c6936fc2544bbc6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_596875e6194c91b9907f51cf8488a15f7c7082ca494bf037c6936fc2544bbc6b->enter($__internal_596875e6194c91b9907f51cf8488a15f7c7082ca494bf037c6936fc2544bbc6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_596875e6194c91b9907f51cf8488a15f7c7082ca494bf037c6936fc2544bbc6b->leave($__internal_596875e6194c91b9907f51cf8488a15f7c7082ca494bf037c6936fc2544bbc6b_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_afa0573614434dba4769c968dba5e7f9a3feed393b6cd8746ff68e68bd55e71d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afa0573614434dba4769c968dba5e7f9a3feed393b6cd8746ff68e68bd55e71d->enter($__internal_afa0573614434dba4769c968dba5e7f9a3feed393b6cd8746ff68e68bd55e71d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_afa0573614434dba4769c968dba5e7f9a3feed393b6cd8746ff68e68bd55e71d->leave($__internal_afa0573614434dba4769c968dba5e7f9a3feed393b6cd8746ff68e68bd55e71d_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_76f983c4c53ed0e27029077b5b68d0b64ba2fc7bd86e52ec39c11fcd2c220eba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76f983c4c53ed0e27029077b5b68d0b64ba2fc7bd86e52ec39c11fcd2c220eba->enter($__internal_76f983c4c53ed0e27029077b5b68d0b64ba2fc7bd86e52ec39c11fcd2c220eba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_76f983c4c53ed0e27029077b5b68d0b64ba2fc7bd86e52ec39c11fcd2c220eba->leave($__internal_76f983c4c53ed0e27029077b5b68d0b64ba2fc7bd86e52ec39c11fcd2c220eba_prof);

    }

    public function getTemplateName()
    {
        return "@App/Registration/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{% autoescape false %}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@App/Registration/email.txt.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\src\\AppBundle\\Resources\\views\\Registration\\email.txt.twig");
    }
}
