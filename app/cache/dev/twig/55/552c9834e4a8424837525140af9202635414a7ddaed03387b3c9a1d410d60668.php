<?php

/* AppBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_fd2ef05a65c05ce57aa481b2ed9a140899630fa049f4b303f470530e9ba9992b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_bbc0761968124dee2099dabcc20dfba6e9942745b3a20bf8eafd8d3010a7e06f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbc0761968124dee2099dabcc20dfba6e9942745b3a20bf8eafd8d3010a7e06f->enter($__internal_bbc0761968124dee2099dabcc20dfba6e9942745b3a20bf8eafd8d3010a7e06f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bbc0761968124dee2099dabcc20dfba6e9942745b3a20bf8eafd8d3010a7e06f->leave($__internal_bbc0761968124dee2099dabcc20dfba6e9942745b3a20bf8eafd8d3010a7e06f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4eb44691bd1708bfadba0d0b015e79cf4bd4eb8ba0d46560a6af3f83011eddff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4eb44691bd1708bfadba0d0b015e79cf4bd4eb8ba0d46560a6af3f83011eddff->enter($__internal_4eb44691bd1708bfadba0d0b015e79cf4bd4eb8ba0d46560a6af3f83011eddff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_4eb44691bd1708bfadba0d0b015e79cf4bd4eb8ba0d46560a6af3f83011eddff->leave($__internal_4eb44691bd1708bfadba0d0b015e79cf4bd4eb8ba0d46560a6af3f83011eddff_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Registration:checkEmail.html.twig";
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
", "AppBundle:Registration:checkEmail.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\src\\AppBundle/Resources/views/Registration/checkEmail.html.twig");
    }
}
