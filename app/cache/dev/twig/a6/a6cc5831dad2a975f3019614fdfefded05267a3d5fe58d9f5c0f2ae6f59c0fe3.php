<?php

/* @EasyAdmin/default/field_object.html.twig */
class __TwigTemplate_4231cf8dafbab1304e08eaeaabf3f93fc040d317c2292bb050afa6b8a4188bd0 extends Twig_Template
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
        $__internal_e2e0a1b5402ea69d3398b0d9fb5e21823a2f44deb11aab0c473e2c32c851b175 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2e0a1b5402ea69d3398b0d9fb5e21823a2f44deb11aab0c473e2c32c851b175->enter($__internal_e2e0a1b5402ea69d3398b0d9fb5e21823a2f44deb11aab0c473e2c32c851b175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_object.html.twig"));

        // line 1
        echo "<span class=\"label\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.object", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_e2e0a1b5402ea69d3398b0d9fb5e21823a2f44deb11aab0c473e2c32c851b175->leave($__internal_e2e0a1b5402ea69d3398b0d9fb5e21823a2f44deb11aab0c473e2c32c851b175_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_object.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<span class=\"label\">{{ 'label.object'|trans(domain = 'EasyAdminBundle') }}</span>
", "@EasyAdmin/default/field_object.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\default\\field_object.html.twig");
    }
}
