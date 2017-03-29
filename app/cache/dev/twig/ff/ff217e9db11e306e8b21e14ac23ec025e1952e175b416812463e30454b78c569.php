<?php

/* AppBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_febfac5efb182cf72f463697a3dc3497dcc939a0b0604ea40bbf0577de201dda extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:Resetting:checkEmail.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ba96a55934b3f9527d2b3a1fdd22fcbfa1bf2b8f5f14fa6169dd80e83a5a4032 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba96a55934b3f9527d2b3a1fdd22fcbfa1bf2b8f5f14fa6169dd80e83a5a4032->enter($__internal_ba96a55934b3f9527d2b3a1fdd22fcbfa1bf2b8f5f14fa6169dd80e83a5a4032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba96a55934b3f9527d2b3a1fdd22fcbfa1bf2b8f5f14fa6169dd80e83a5a4032->leave($__internal_ba96a55934b3f9527d2b3a1fdd22fcbfa1bf2b8f5f14fa6169dd80e83a5a4032_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_599390c966e689a74dcf119962020ce1838e5490f77506ecce8e59743154c928 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_599390c966e689a74dcf119962020ce1838e5490f77506ecce8e59743154c928->enter($__internal_599390c966e689a74dcf119962020ce1838e5490f77506ecce8e59743154c928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_599390c966e689a74dcf119962020ce1838e5490f77506ecce8e59743154c928->leave($__internal_599390c966e689a74dcf119962020ce1838e5490f77506ecce8e59743154c928_prof);

    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1a3f10956c471cb5ed1ad820e461701b5a2a04aa1ed51513075fa32663fc5629 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a3f10956c471cb5ed1ad820e461701b5a2a04aa1ed51513075fa32663fc5629->enter($__internal_1a3f10956c471cb5ed1ad820e461701b5a2a04aa1ed51513075fa32663fc5629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "\t<p>
\t";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
\t</p>
\t";
        
        $__internal_1a3f10956c471cb5ed1ad820e461701b5a2a04aa1ed51513075fa32663fc5629->leave($__internal_1a3f10956c471cb5ed1ad820e461701b5a2a04aa1ed51513075fa32663fc5629_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 6,  58 => 5,  52 => 4,  44 => 9,  41 => 4,  35 => 3,  11 => 1,);
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
\t{% block fos_user_content %}
\t<p>
\t{{ 'resetting.check_email'|trans({'%email%': email}) }}
\t</p>
\t{% endblock %}

{%endblock%}", "AppBundle:Resetting:checkEmail.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\src\\AppBundle/Resources/views/Resetting/checkEmail.html.twig");
    }
}
