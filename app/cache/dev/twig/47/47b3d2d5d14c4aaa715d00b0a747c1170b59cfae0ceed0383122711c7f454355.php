<?php

/* @App/Resetting/email.txt.twig */
class __TwigTemplate_37ed44911b2f7b61f1a6bec2a8398fe1eca7ef480ff9ce0a9f5ea772c19de424 extends Twig_Template
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
        $__internal_199128620dbdc5248799f381f59c369de3e76ee980400becdf128afbcb68c82d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_199128620dbdc5248799f381f59c369de3e76ee980400becdf128afbcb68c82d->enter($__internal_199128620dbdc5248799f381f59c369de3e76ee980400becdf128afbcb68c82d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_199128620dbdc5248799f381f59c369de3e76ee980400becdf128afbcb68c82d->leave($__internal_199128620dbdc5248799f381f59c369de3e76ee980400becdf128afbcb68c82d_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_4b4674f18c46aa8813ef2ecfc70187846e916be21e4985496341ce1eceecffe7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b4674f18c46aa8813ef2ecfc70187846e916be21e4985496341ce1eceecffe7->enter($__internal_4b4674f18c46aa8813ef2ecfc70187846e916be21e4985496341ce1eceecffe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array(), "FOSUserBundle");
        echo "
";
        
        $__internal_4b4674f18c46aa8813ef2ecfc70187846e916be21e4985496341ce1eceecffe7->leave($__internal_4b4674f18c46aa8813ef2ecfc70187846e916be21e4985496341ce1eceecffe7_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_1fb07c828917e9bb610a506feb5cb889823152ae558e5292bb1afb7e8591fc93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fb07c828917e9bb610a506feb5cb889823152ae558e5292bb1afb7e8591fc93->enter($__internal_1fb07c828917e9bb610a506feb5cb889823152ae558e5292bb1afb7e8591fc93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_1fb07c828917e9bb610a506feb5cb889823152ae558e5292bb1afb7e8591fc93->leave($__internal_1fb07c828917e9bb610a506feb5cb889823152ae558e5292bb1afb7e8591fc93_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_d8775ed02cb05c1c3bed6683265af2bf383d338acb6d40d08d5171ca48e93625 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8775ed02cb05c1c3bed6683265af2bf383d338acb6d40d08d5171ca48e93625->enter($__internal_d8775ed02cb05c1c3bed6683265af2bf383d338acb6d40d08d5171ca48e93625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_d8775ed02cb05c1c3bed6683265af2bf383d338acb6d40d08d5171ca48e93625->leave($__internal_d8775ed02cb05c1c3bed6683265af2bf383d338acb6d40d08d5171ca48e93625_prof);

    }

    public function getTemplateName()
    {
        return "@App/Resetting/email.txt.twig";
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
", "@App/Resetting/email.txt.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\src\\AppBundle\\Resources\\views\\Resetting\\email.txt.twig");
    }
}
