<?php

/* AppBundle:Registration:confirmed.html.twig */
class __TwigTemplate_642d352109d5d703177934acc04ccf82697c8b4ddc9ce552605a23598f27e5f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_e33bf44b4800edf305c15537c39d105abf94ffd090806aa7b54f4125de04c73e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e33bf44b4800edf305c15537c39d105abf94ffd090806aa7b54f4125de04c73e->enter($__internal_e33bf44b4800edf305c15537c39d105abf94ffd090806aa7b54f4125de04c73e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e33bf44b4800edf305c15537c39d105abf94ffd090806aa7b54f4125de04c73e->leave($__internal_e33bf44b4800edf305c15537c39d105abf94ffd090806aa7b54f4125de04c73e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_befde1790654817da9fcb2e1921e330af2ceb8a2856cbd3d0c8eb21c73703085 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_befde1790654817da9fcb2e1921e330af2ceb8a2856cbd3d0c8eb21c73703085->enter($__internal_befde1790654817da9fcb2e1921e330af2ceb8a2856cbd3d0c8eb21c73703085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <div class=\"row\">
    <p>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ( !twig_test_empty($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()))) {
            // line 8
            echo "        ";
            $context["targetUrl"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => (("_security." . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security", array()), "token", array()), "providerKey", array())) . ".target_path")), "method");
            // line 9
            echo "        ";
            if ( !twig_test_empty((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")))) {
                echo "<p><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
                echo "</a></p>";
            }
            // line 10
            echo "    ";
        }
        // line 11
        echo "    </div>
";
        
        $__internal_befde1790654817da9fcb2e1921e330af2ceb8a2856cbd3d0c8eb21c73703085->leave($__internal_befde1790654817da9fcb2e1921e330af2ceb8a2856cbd3d0c8eb21c73703085_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 11,  61 => 10,  52 => 9,  49 => 8,  47 => 7,  43 => 6,  40 => 5,  34 => 4,  11 => 1,);
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
    <div class=\"row\">
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if app.session is not empty %}
        {% set targetUrl = app.session.get('_security.' ~ app.security.token.providerKey ~ '.target_path') %}
        {% if targetUrl is not empty %}<p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>{% endif %}
    {% endif %}
    </div>
{% endblock body %}
", "AppBundle:Registration:confirmed.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\src\\AppBundle/Resources/views/Registration/confirmed.html.twig");
    }
}
