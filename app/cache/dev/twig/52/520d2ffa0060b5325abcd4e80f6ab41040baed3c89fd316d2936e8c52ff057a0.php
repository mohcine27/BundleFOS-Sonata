<?php

/* @App/Admin/users.html.twig */
class __TwigTemplate_3edb06084e1d6bd614587feb07a473e12d734536ee4560a6d952a99e5fddaa09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "@App/Admin/users.html.twig", 2);
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
        $__internal_2314bd0fba839956fa2b3a050193f4baf8f2a34d2fa51dbf470d74c17acfd1d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2314bd0fba839956fa2b3a050193f4baf8f2a34d2fa51dbf470d74c17acfd1d8->enter($__internal_2314bd0fba839956fa2b3a050193f4baf8f2a34d2fa51dbf470d74c17acfd1d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Admin/users.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2314bd0fba839956fa2b3a050193f4baf8f2a34d2fa51dbf470d74c17acfd1d8->leave($__internal_2314bd0fba839956fa2b3a050193f4baf8f2a34d2fa51dbf470d74c17acfd1d8_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_ce9991bb3e5324a7ba55f430372cd3e833ab17df7393daefeccef8ebab0d838a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce9991bb3e5324a7ba55f430372cd3e833ab17df7393daefeccef8ebab0d838a->enter($__internal_ce9991bb3e5324a7ba55f430372cd3e833ab17df7393daefeccef8ebab0d838a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " 
    <h1>Liste des users</h1>
\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 7
            echo "\t\t<li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()));
            echo "</li>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "
 ";
        
        $__internal_ce9991bb3e5324a7ba55f430372cd3e833ab17df7393daefeccef8ebab0d838a->leave($__internal_ce9991bb3e5324a7ba55f430372cd3e833ab17df7393daefeccef8ebab0d838a_prof);

    }

    public function getTemplateName()
    {
        return "@App/Admin/users.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 9,  47 => 7,  43 => 6,  34 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source(" {% trans_default_domain 'FOSUserBundle' %}
 {% extends \"base.html.twig\" %} 

 {% block body %} 
    <h1>Liste des users</h1>
\t{% for user in users%}
\t\t<li>{{user.username|e}}</li>
\t{% endfor%}

 {% endblock body %} ", "@App/Admin/users.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\src\\AppBundle\\Resources\\views\\Admin\\users.html.twig");
    }
}
