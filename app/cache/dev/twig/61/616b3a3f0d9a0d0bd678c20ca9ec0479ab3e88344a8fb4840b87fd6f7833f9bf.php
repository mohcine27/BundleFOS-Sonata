<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_06598c3e76a0cf3854d692e6ecbe8e70e0837ee07ebd90eef51c2598cdd1c470 extends Twig_Template
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
        $__internal_76ae625528466b53bcc71b226ca90e2e08e3bcd1df79a47619393f602d5a86ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76ae625528466b53bcc71b226ca90e2e08e3bcd1df79a47619393f602d5a86ea->enter($__internal_76ae625528466b53bcc71b226ca90e2e08e3bcd1df79a47619393f602d5a86ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_76ae625528466b53bcc71b226ca90e2e08e3bcd1df79a47619393f602d5a86ea->leave($__internal_76ae625528466b53bcc71b226ca90e2e08e3bcd1df79a47619393f602d5a86ea_prof);

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
