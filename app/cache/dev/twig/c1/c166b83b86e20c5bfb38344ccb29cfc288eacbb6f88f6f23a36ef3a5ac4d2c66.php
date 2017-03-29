<?php

/* SonataBlockBundle:Block:block_core_menu.html.twig */
class __TwigTemplate_1d6d43efebb919c8b6719a6a2b6434cddc38b7c6efa0b1e44c93a86d99cdc4f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_menu.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2d8b6d8a5f4876150250180a8ccb2aac4dd565d5f7fa2c901a03e284a2990b7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d8b6d8a5f4876150250180a8ccb2aac4dd565d5f7fa2c901a03e284a2990b7b->enter($__internal_2d8b6d8a5f4876150250180a8ccb2aac4dd565d5f7fa2c901a03e284a2990b7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_menu.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d8b6d8a5f4876150250180a8ccb2aac4dd565d5f7fa2c901a03e284a2990b7b->leave($__internal_2d8b6d8a5f4876150250180a8ccb2aac4dd565d5f7fa2c901a03e284a2990b7b_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_e3969cb8baf514bd413b143f6604443d7984f7bd91d1eb477af0622b18b33803 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3969cb8baf514bd413b143f6604443d7984f7bd91d1eb477af0622b18b33803->enter($__internal_e3969cb8baf514bd413b143f6604443d7984f7bd91d1eb477af0622b18b33803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), (isset($context["menu_options"]) ? $context["menu_options"] : $this->getContext($context, "menu_options")));
        echo "
";
        
        $__internal_e3969cb8baf514bd413b143f6604443d7984f7bd91d1eb477af0622b18b33803->leave($__internal_e3969cb8baf514bd413b143f6604443d7984f7bd91d1eb477af0622b18b33803_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends sonata_block.templates.block_base %}

{% block block %}
    {{ knp_menu_render(menu, menu_options) }}
{% endblock %}
", "SonataBlockBundle:Block:block_core_menu.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\vendor\\sonata-project\\block-bundle/Resources/views/Block/block_core_menu.html.twig");
    }
}
