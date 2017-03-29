<?php

/* @SonataBlock/Block/block_core_action.html.twig */
class __TwigTemplate_05826ffa58e9fbf6695f9d501a46b21d87db710454c8e99c1731f66bf8ca2332 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataBlock/Block/block_core_action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c2c8c39985c236be8b626b808a06262a103fd11aa60e8e49b1ec07a9fcc88310 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2c8c39985c236be8b626b808a06262a103fd11aa60e8e49b1ec07a9fcc88310->enter($__internal_c2c8c39985c236be8b626b808a06262a103fd11aa60e8e49b1ec07a9fcc88310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_core_action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2c8c39985c236be8b626b808a06262a103fd11aa60e8e49b1ec07a9fcc88310->leave($__internal_c2c8c39985c236be8b626b808a06262a103fd11aa60e8e49b1ec07a9fcc88310_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_c0be115cbf0160f7025c429bfed3c1a6f8dc11a8989e39ded78a5d572195ea8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0be115cbf0160f7025c429bfed3c1a6f8dc11a8989e39ded78a5d572195ea8c->enter($__internal_c0be115cbf0160f7025c429bfed3c1a6f8dc11a8989e39ded78a5d572195ea8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
        echo "
";
        
        $__internal_c0be115cbf0160f7025c429bfed3c1a6f8dc11a8989e39ded78a5d572195ea8c->leave($__internal_c0be115cbf0160f7025c429bfed3c1a6f8dc11a8989e39ded78a5d572195ea8c_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_core_action.html.twig";
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
", "@SonataBlock/Block/block_core_action.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\vendor\\sonata-project\\block-bundle\\Resources\\views\\Block\\block_core_action.html.twig");
    }
}
