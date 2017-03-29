<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_b7062fe3a4e85bca360d8fa850c9fe2b723b0a5bd2002f5af7651c89376a65d5 extends Twig_Template
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
        $__internal_3d638d8853b8fa2af8d90ea8aae5b235197a3ef9f308e0b75818c3224aa71734 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d638d8853b8fa2af8d90ea8aae5b235197a3ef9f308e0b75818c3224aa71734->enter($__internal_3d638d8853b8fa2af8d90ea8aae5b235197a3ef9f308e0b75818c3224aa71734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_3d638d8853b8fa2af8d90ea8aae5b235197a3ef9f308e0b75818c3224aa71734->leave($__internal_3d638d8853b8fa2af8d90ea8aae5b235197a3ef9f308e0b75818c3224aa71734_prof);

    }

    public function getTemplateName()
    {
        return "knp_menu_base.html.twig";
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
        return new Twig_Source("{% if options.compressed %}{{ block('compressed_root') }}{% else %}{{ block('root') }}{% endif %}
", "knp_menu_base.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\vendor\\knplabs\\knp-menu\\src\\Knp\\Menu\\Resources\\views\\knp_menu_base.html.twig");
    }
}
