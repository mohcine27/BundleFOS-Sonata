<?php

/* AppBundle:Registration:email.txt.twig */
class __TwigTemplate_ac1add586070d872239ad5e6491f914e87733b5700dc3a3c1d75af8a6071a0f3 extends Twig_Template
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
        $__internal_b7e33b7c0ea27864acf308d5d271ad7b8fe9b405341100eee9d06d5650cdeb20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7e33b7c0ea27864acf308d5d271ad7b8fe9b405341100eee9d06d5650cdeb20->enter($__internal_b7e33b7c0ea27864acf308d5d271ad7b8fe9b405341100eee9d06d5650cdeb20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_b7e33b7c0ea27864acf308d5d271ad7b8fe9b405341100eee9d06d5650cdeb20->leave($__internal_b7e33b7c0ea27864acf308d5d271ad7b8fe9b405341100eee9d06d5650cdeb20_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_78ce533455c933516856b6690058534acc9a295fbc9785bd99ca47ff46b76763 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78ce533455c933516856b6690058534acc9a295fbc9785bd99ca47ff46b76763->enter($__internal_78ce533455c933516856b6690058534acc9a295fbc9785bd99ca47ff46b76763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_78ce533455c933516856b6690058534acc9a295fbc9785bd99ca47ff46b76763->leave($__internal_78ce533455c933516856b6690058534acc9a295fbc9785bd99ca47ff46b76763_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_46e42bcc61a965e2338eaac80ea6ae1dfd8bcd78e87ae5e8bd7ec6f8027f8057 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46e42bcc61a965e2338eaac80ea6ae1dfd8bcd78e87ae5e8bd7ec6f8027f8057->enter($__internal_46e42bcc61a965e2338eaac80ea6ae1dfd8bcd78e87ae5e8bd7ec6f8027f8057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_46e42bcc61a965e2338eaac80ea6ae1dfd8bcd78e87ae5e8bd7ec6f8027f8057->leave($__internal_46e42bcc61a965e2338eaac80ea6ae1dfd8bcd78e87ae5e8bd7ec6f8027f8057_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_61c9b56863e6d80df26b01c6f04b438da5ddd3553ea15f2acd8338535018af04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61c9b56863e6d80df26b01c6f04b438da5ddd3553ea15f2acd8338535018af04->enter($__internal_61c9b56863e6d80df26b01c6f04b438da5ddd3553ea15f2acd8338535018af04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_61c9b56863e6d80df26b01c6f04b438da5ddd3553ea15f2acd8338535018af04->leave($__internal_61c9b56863e6d80df26b01c6f04b438da5ddd3553ea15f2acd8338535018af04_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Registration:email.txt.twig";
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
", "AppBundle:Registration:email.txt.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\src\\AppBundle/Resources/views/Registration/email.txt.twig");
    }
}
