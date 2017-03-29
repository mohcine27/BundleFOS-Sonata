<?php

/* @SonataBlock/Block/block_core_menu.html.twig */
class __TwigTemplate_0eb2776e656a1cf2de4f21426f7b194616618e8ec547e13814b6341d083a3d53 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataBlock/Block/block_core_menu.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fe0aa751ada3fdc6cf3f3c03d08c8a35a9781624caaac72f154f644152814d60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe0aa751ada3fdc6cf3f3c03d08c8a35a9781624caaac72f154f644152814d60->enter($__internal_fe0aa751ada3fdc6cf3f3c03d08c8a35a9781624caaac72f154f644152814d60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_core_menu.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe0aa751ada3fdc6cf3f3c03d08c8a35a9781624caaac72f154f644152814d60->leave($__internal_fe0aa751ada3fdc6cf3f3c03d08c8a35a9781624caaac72f154f644152814d60_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_8e2b18a8579e0a7b75392e478c9e6924f239589be7be30c53630c5b74d98d0d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e2b18a8579e0a7b75392e478c9e6924f239589be7be30c53630c5b74d98d0d5->enter($__internal_8e2b18a8579e0a7b75392e478c9e6924f239589be7be30c53630c5b74d98d0d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), (isset($context["menu_options"]) ? $context["menu_options"] : $this->getContext($context, "menu_options")));
        echo "
";
        
        $__internal_8e2b18a8579e0a7b75392e478c9e6924f239589be7be30c53630c5b74d98d0d5->leave($__internal_8e2b18a8579e0a7b75392e478c9e6924f239589be7be30c53630c5b74d98d0d5_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_core_menu.html.twig";
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
", "@SonataBlock/Block/block_core_menu.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\vendor\\sonata-project\\block-bundle\\Resources\\views\\Block\\block_core_menu.html.twig");
    }
}
