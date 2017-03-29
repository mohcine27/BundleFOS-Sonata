<?php

/* SonataBlockBundle:Block:block_core_action.html.twig */
class __TwigTemplate_db6a3cd3b6e75dee5e5661b07690567e56598e04e2b8916e58edfdf0a744e463 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eae5f0694e96455116ba3846f169837f8073bc6e99ed423538ba835defc5a0fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eae5f0694e96455116ba3846f169837f8073bc6e99ed423538ba835defc5a0fa->enter($__internal_eae5f0694e96455116ba3846f169837f8073bc6e99ed423538ba835defc5a0fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eae5f0694e96455116ba3846f169837f8073bc6e99ed423538ba835defc5a0fa->leave($__internal_eae5f0694e96455116ba3846f169837f8073bc6e99ed423538ba835defc5a0fa_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_3d6d8ed99ecbd70bb893a225ea92315ac8e677c88ac6a8c1db8b630f718f2df8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d6d8ed99ecbd70bb893a225ea92315ac8e677c88ac6a8c1db8b630f718f2df8->enter($__internal_3d6d8ed99ecbd70bb893a225ea92315ac8e677c88ac6a8c1db8b630f718f2df8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
        echo "
";
        
        $__internal_3d6d8ed99ecbd70bb893a225ea92315ac8e677c88ac6a8c1db8b630f718f2df8->leave($__internal_3d6d8ed99ecbd70bb893a225ea92315ac8e677c88ac6a8c1db8b630f718f2df8_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_action.html.twig";
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
    {{ content|raw }}
{% endblock %}
", "SonataBlockBundle:Block:block_core_action.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\vendor\\sonata-project\\block-bundle/Resources/views/Block/block_core_action.html.twig");
    }
}
