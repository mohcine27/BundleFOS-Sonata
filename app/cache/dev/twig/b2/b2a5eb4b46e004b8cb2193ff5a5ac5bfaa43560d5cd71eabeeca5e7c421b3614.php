<?php

/* @App/Profile/show.html.twig */
class __TwigTemplate_bca9ab1ef139bba8199eb1a0ac56c3e2d60279be8dcd97ed0770bea1dd1ce099 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "@App/Profile/show.html.twig", 2);
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
        $__internal_5fd7ef8be04c4f7ff8aa62737c87aea132bf4690fa18758ed296040fb2bf276e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fd7ef8be04c4f7ff8aa62737c87aea132bf4690fa18758ed296040fb2bf276e->enter($__internal_5fd7ef8be04c4f7ff8aa62737c87aea132bf4690fa18758ed296040fb2bf276e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5fd7ef8be04c4f7ff8aa62737c87aea132bf4690fa18758ed296040fb2bf276e->leave($__internal_5fd7ef8be04c4f7ff8aa62737c87aea132bf4690fa18758ed296040fb2bf276e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_6b948a9019ad3a4b5e59e564e5c3182cd68edf35925ee34b9cadce3de1fe9486 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b948a9019ad3a4b5e59e564e5c3182cd68edf35925ee34b9cadce3de1fe9486->enter($__internal_6b948a9019ad3a4b5e59e564e5c3182cd68edf35925ee34b9cadce3de1fe9486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <div class=\"fos_user_user_show\">
        <p>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
        <p>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
    </div>
\t";
        // line 9
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 10
            echo "\t\t<a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
            echo "\">Edit Profile</a>
\t";
        }
        // line 12
        echo "\t<a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\">Se déconnecter</a>
\t";
        
        $__internal_6b948a9019ad3a4b5e59e564e5c3182cd68edf35925ee34b9cadce3de1fe9486->leave($__internal_6b948a9019ad3a4b5e59e564e5c3182cd68edf35925ee34b9cadce3de1fe9486_prof);

    }

    public function getTemplateName()
    {
        return "@App/Profile/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 12,  58 => 10,  56 => 9,  49 => 7,  43 => 6,  40 => 5,  34 => 4,  11 => 2,);
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
{% extends \"base.html.twig\" %}

{% block body %}
    <div class=\"fos_user_user_show\">
        <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
        <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
    </div>
\t{% if is_granted('ROLE_ADMIN')%}
\t\t<a href=\"{{ path('fos_user_profile_edit') }}\">Edit Profile</a>
\t{% endif %}
\t<a href=\"{{ path('fos_user_security_logout') }}\">Se déconnecter</a>
\t{# <p>{{ role}}</p> #}
{% endblock body %}", "@App/Profile/show.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\src\\AppBundle\\Resources\\views\\Profile\\show.html.twig");
    }
}
