<?php

/* AppBundle:Resetting:reset_content.html.twig */
class __TwigTemplate_cf0e628ab21e61f5cf964f43a2dee5921145a668eb7797f556ace8d0d6e60b42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f7c9844b0af4a9b3a35ad2359264f4c350fe5c5db7cb0459048f3c43f1c951e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7c9844b0af4a9b3a35ad2359264f4c350fe5c5db7cb0459048f3c43f1c951e7->enter($__internal_f7c9844b0af4a9b3a35ad2359264f4c350fe5c5db7cb0459048f3c43f1c951e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Resetting:reset_content.html.twig"));

        // line 2
        echo "
<form action=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_reset", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_resetting_reset\">
    ";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.reset.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_f7c9844b0af4a9b3a35ad2359264f4c350fe5c5db7cb0459048f3c43f1c951e7->leave($__internal_f7c9844b0af4a9b3a35ad2359264f4c350fe5c5db7cb0459048f3c43f1c951e7_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Resetting:reset_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 6,  31 => 4,  25 => 3,  22 => 2,);
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

<form action=\"{{ path('fos_user_resetting_reset', {'token': token}) }}\" {{ form_enctype(form) }} method=\"POST\" class=\"fos_user_resetting_reset\">
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'resetting.reset.submit'|trans }}\" />
    </div>
</form>
", "AppBundle:Resetting:reset_content.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\src\\AppBundle/Resources/views/Resetting/reset_content.html.twig");
    }
}
