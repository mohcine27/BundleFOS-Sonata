<?php

/* AppBundle:Admin:users.html.twig */
class __TwigTemplate_d51a176e92c6ccddcd6b26a0f3e8b99223a244aa6db052b79ddad9fda70d9fb7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:Admin:users.html.twig", 2);
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
        $__internal_06438f33fb4d2778c4d6762355c09655d972d82ac7305315ba3d23be0149522d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06438f33fb4d2778c4d6762355c09655d972d82ac7305315ba3d23be0149522d->enter($__internal_06438f33fb4d2778c4d6762355c09655d972d82ac7305315ba3d23be0149522d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Admin:users.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06438f33fb4d2778c4d6762355c09655d972d82ac7305315ba3d23be0149522d->leave($__internal_06438f33fb4d2778c4d6762355c09655d972d82ac7305315ba3d23be0149522d_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_253b47a4c72c82cf985c6fcc32ad99df65dda98647c006fc2236a4fbf6d2e4e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_253b47a4c72c82cf985c6fcc32ad99df65dda98647c006fc2236a4fbf6d2e4e1->enter($__internal_253b47a4c72c82cf985c6fcc32ad99df65dda98647c006fc2236a4fbf6d2e4e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_253b47a4c72c82cf985c6fcc32ad99df65dda98647c006fc2236a4fbf6d2e4e1->leave($__internal_253b47a4c72c82cf985c6fcc32ad99df65dda98647c006fc2236a4fbf6d2e4e1_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Admin:users.html.twig";
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

 {% endblock body %} ", "AppBundle:Admin:users.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\src\\AppBundle/Resources/views/Admin/users.html.twig");
    }
}
