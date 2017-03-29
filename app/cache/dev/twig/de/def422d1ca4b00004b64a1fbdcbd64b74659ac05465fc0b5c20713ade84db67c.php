<?php

/* AppBundle:Resetting:email.txt.twig */
class __TwigTemplate_0d62318079a6bd93a8e1bc251dedc0790675a764a3b9b70ec3da750b7191271e extends Twig_Template
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
        $__internal_c35eff9009e2f39b40768fd061ac28c7defe2171482fb883ba3ef377259d6a3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c35eff9009e2f39b40768fd061ac28c7defe2171482fb883ba3ef377259d6a3e->enter($__internal_c35eff9009e2f39b40768fd061ac28c7defe2171482fb883ba3ef377259d6a3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_c35eff9009e2f39b40768fd061ac28c7defe2171482fb883ba3ef377259d6a3e->leave($__internal_c35eff9009e2f39b40768fd061ac28c7defe2171482fb883ba3ef377259d6a3e_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_39ee1ce5cfce06faf6e5408d5837c06fe311051a785106b838f4bd511c6e1f9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39ee1ce5cfce06faf6e5408d5837c06fe311051a785106b838f4bd511c6e1f9c->enter($__internal_39ee1ce5cfce06faf6e5408d5837c06fe311051a785106b838f4bd511c6e1f9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array(), "FOSUserBundle");
        echo "
";
        
        $__internal_39ee1ce5cfce06faf6e5408d5837c06fe311051a785106b838f4bd511c6e1f9c->leave($__internal_39ee1ce5cfce06faf6e5408d5837c06fe311051a785106b838f4bd511c6e1f9c_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_5ad6d4ec772b48e81ca48b53e81f56d8c4d9681ca2ebe632efefa75b52f82c3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ad6d4ec772b48e81ca48b53e81f56d8c4d9681ca2ebe632efefa75b52f82c3a->enter($__internal_5ad6d4ec772b48e81ca48b53e81f56d8c4d9681ca2ebe632efefa75b52f82c3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_5ad6d4ec772b48e81ca48b53e81f56d8c4d9681ca2ebe632efefa75b52f82c3a->leave($__internal_5ad6d4ec772b48e81ca48b53e81f56d8c4d9681ca2ebe632efefa75b52f82c3a_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_fc2e61a7f54e32327de37bddbc2cf36e86f665767bd0fcbd464c900da7f1b208 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc2e61a7f54e32327de37bddbc2cf36e86f665767bd0fcbd464c900da7f1b208->enter($__internal_fc2e61a7f54e32327de37bddbc2cf36e86f665767bd0fcbd464c900da7f1b208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_fc2e61a7f54e32327de37bddbc2cf36e86f665767bd0fcbd464c900da7f1b208->leave($__internal_fc2e61a7f54e32327de37bddbc2cf36e86f665767bd0fcbd464c900da7f1b208_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Resetting:email.txt.twig";
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
{{ 'resetting.email.subject'|trans }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "AppBundle:Resetting:email.txt.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\src\\AppBundle/Resources/views/Resetting/email.txt.twig");
    }
}
