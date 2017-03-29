<?php

/* AppBundle:Group:show_content.html.twig */
class __TwigTemplate_7bc1740c9f2d860d8752901da7c2517817aa0bd09c80a92e5da8cd423b5cec23 extends Twig_Template
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
        $__internal_a89fd97176e936261831490d01cb71e94bbcd66a9dab3156682d1a019cbe531a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a89fd97176e936261831490d01cb71e94bbcd66a9dab3156682d1a019cbe531a->enter($__internal_a89fd97176e936261831490d01cb71e94bbcd66a9dab3156682d1a019cbe531a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Group:show_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_group_show\">
    <p>";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
\t<a href=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
        echo "\">Retour au profile</a>
</div>
";
        
        $__internal_a89fd97176e936261831490d01cb71e94bbcd66a9dab3156682d1a019cbe531a->leave($__internal_a89fd97176e936261831490d01cb71e94bbcd66a9dab3156682d1a019cbe531a_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans([], 'FOSUserBundle') }}: {{ group.getName() }}</p>
\t<a href=\"{{ path('fos_user_profile_show') }}\">Retour au profile</a>
</div>
", "AppBundle:Group:show_content.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\src\\AppBundle/Resources/views/Group/show_content.html.twig");
    }
}
