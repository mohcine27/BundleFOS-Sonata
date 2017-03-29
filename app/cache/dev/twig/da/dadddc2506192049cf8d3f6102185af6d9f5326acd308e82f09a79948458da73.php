<?php

/* @App/Group/edit.html.twig */
class __TwigTemplate_eac371ab76bd7337487d1f7f83ff427e5d620baad973c4af267fb42f85bcaa37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@App/Group/edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_de93a1259bd920f3c863532b26ecbe86fc77f15d2bf2c11f6b11751c33a932f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de93a1259bd920f3c863532b26ecbe86fc77f15d2bf2c11f6b11751c33a932f2->enter($__internal_de93a1259bd920f3c863532b26ecbe86fc77f15d2bf2c11f6b11751c33a932f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de93a1259bd920f3c863532b26ecbe86fc77f15d2bf2c11f6b11751c33a932f2->leave($__internal_de93a1259bd920f3c863532b26ecbe86fc77f15d2bf2c11f6b11751c33a932f2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0d3e1cc3f66ec5353816f284c95ac1cb72b947d332ad8c2e31d10a5d0948c85a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d3e1cc3f66ec5353816f284c95ac1cb72b947d332ad8c2e31d10a5d0948c85a->enter($__internal_0d3e1cc3f66ec5353816f284c95ac1cb72b947d332ad8c2e31d10a5d0948c85a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@App/Group/edit.html.twig", 4)->display($context);
        
        $__internal_0d3e1cc3f66ec5353816f284c95ac1cb72b947d332ad8c2e31d10a5d0948c85a->leave($__internal_0d3e1cc3f66ec5353816f284c95ac1cb72b947d332ad8c2e31d10a5d0948c85a_prof);

    }

    public function getTemplateName()
    {
        return "@App/Group/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Group:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@App/Group/edit.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\src\\AppBundle\\Resources\\views\\Group\\edit.html.twig");
    }
}
