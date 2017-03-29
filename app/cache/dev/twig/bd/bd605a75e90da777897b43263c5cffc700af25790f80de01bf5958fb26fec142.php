<?php

/* AppBundle:Profile:show.html.twig */
class __TwigTemplate_8ed8d8fa1da8d3ea27603b7ca523d6e1c2f47ab3172977282378817a2968f8f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:Profile:show.html.twig", 2);
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
        $__internal_b1c97de40d66c36928655d847d9d59c28e33e7161fed6ab8d04dd837813f5328 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1c97de40d66c36928655d847d9d59c28e33e7161fed6ab8d04dd837813f5328->enter($__internal_b1c97de40d66c36928655d847d9d59c28e33e7161fed6ab8d04dd837813f5328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1c97de40d66c36928655d847d9d59c28e33e7161fed6ab8d04dd837813f5328->leave($__internal_b1c97de40d66c36928655d847d9d59c28e33e7161fed6ab8d04dd837813f5328_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_0d69e84cf58ccaef3324731b14ad3ffb35d22bcc94c42d1e2017f0acda3870f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d69e84cf58ccaef3324731b14ad3ffb35d22bcc94c42d1e2017f0acda3870f8->enter($__internal_0d69e84cf58ccaef3324731b14ad3ffb35d22bcc94c42d1e2017f0acda3870f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0d69e84cf58ccaef3324731b14ad3ffb35d22bcc94c42d1e2017f0acda3870f8->leave($__internal_0d69e84cf58ccaef3324731b14ad3ffb35d22bcc94c42d1e2017f0acda3870f8_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Profile:show.html.twig";
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
{% endblock body %}", "AppBundle:Profile:show.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\src\\AppBundle/Resources/views/Profile/show.html.twig");
    }
}
