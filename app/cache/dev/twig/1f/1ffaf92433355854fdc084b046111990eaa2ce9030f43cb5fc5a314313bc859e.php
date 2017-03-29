<?php

/* SonataBlockBundle:Block:block_container.html.twig */
class __TwigTemplate_77d4a9dd1d45a4c5e81e58d0d28f90840ab9e6040e9b3cafc74f518db22957a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block_class' => array($this, 'block_block_class'),
            'block_role' => array($this, 'block_block_role'),
            'block' => array($this, 'block_block'),
            'block_child_render' => array($this, 'block_block_child_render'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_container.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_95aeb16245e8a1d0ddfecbd5e5dd3effcf1d4b88dca63e2a1bf029be35e71962 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95aeb16245e8a1d0ddfecbd5e5dd3effcf1d4b88dca63e2a1bf029be35e71962->enter($__internal_95aeb16245e8a1d0ddfecbd5e5dd3effcf1d4b88dca63e2a1bf029be35e71962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_container.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95aeb16245e8a1d0ddfecbd5e5dd3effcf1d4b88dca63e2a1bf029be35e71962->leave($__internal_95aeb16245e8a1d0ddfecbd5e5dd3effcf1d4b88dca63e2a1bf029be35e71962_prof);

    }

    // line 15
    public function block_block_class($context, array $blocks = array())
    {
        $__internal_cfbf443404e42b35444b20a265144b41d0ef8d3b7e28018d42364789f268a83e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfbf443404e42b35444b20a265144b41d0ef8d3b7e28018d42364789f268a83e->enter($__internal_cfbf443404e42b35444b20a265144b41d0ef8d3b7e28018d42364789f268a83e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_class"));

        echo " cms-container";
        if ( !$this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "hasParent", array(), "method")) {
            echo " cms-container-root";
        }
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "class", array())) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "class", array()), "html", null, true);
        }
        
        $__internal_cfbf443404e42b35444b20a265144b41d0ef8d3b7e28018d42364789f268a83e->leave($__internal_cfbf443404e42b35444b20a265144b41d0ef8d3b7e28018d42364789f268a83e_prof);

    }

    // line 18
    public function block_block_role($context, array $blocks = array())
    {
        $__internal_8349deae9e544bca1f3c0469b3b431e4d79728757a12bd01ef0f19e2e6eb00e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8349deae9e544bca1f3c0469b3b431e4d79728757a12bd01ef0f19e2e6eb00e5->enter($__internal_8349deae9e544bca1f3c0469b3b431e4d79728757a12bd01ef0f19e2e6eb00e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_role"));

        echo "container";
        
        $__internal_8349deae9e544bca1f3c0469b3b431e4d79728757a12bd01ef0f19e2e6eb00e5->leave($__internal_8349deae9e544bca1f3c0469b3b431e4d79728757a12bd01ef0f19e2e6eb00e5_prof);

    }

    // line 21
    public function block_block($context, array $blocks = array())
    {
        $__internal_ba0f062bd5d609beeb96d575530e4eb5ea1c6c8dd70a0cb6fa2c25d4981eebf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba0f062bd5d609beeb96d575530e4eb5ea1c6c8dd70a0cb6fa2c25d4981eebf1->enter($__internal_ba0f062bd5d609beeb96d575530e4eb5ea1c6c8dd70a0cb6fa2c25d4981eebf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 22
        echo "    ";
        if ((isset($context["decorator"]) ? $context["decorator"] : $this->getContext($context, "decorator"))) {
            echo $this->getAttribute((isset($context["decorator"]) ? $context["decorator"] : $this->getContext($context, "decorator")), "pre", array());
        }
        // line 23
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "children", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 24
            echo "        ";
            $this->displayBlock('block_child_render', $context, $blocks);
            // line 27
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    ";
        if ((isset($context["decorator"]) ? $context["decorator"] : $this->getContext($context, "decorator"))) {
            echo $this->getAttribute((isset($context["decorator"]) ? $context["decorator"] : $this->getContext($context, "decorator")), "post", array());
        }
        
        $__internal_ba0f062bd5d609beeb96d575530e4eb5ea1c6c8dd70a0cb6fa2c25d4981eebf1->leave($__internal_ba0f062bd5d609beeb96d575530e4eb5ea1c6c8dd70a0cb6fa2c25d4981eebf1_prof);

    }

    // line 24
    public function block_block_child_render($context, array $blocks = array())
    {
        $__internal_a5cfbb9cf48d2e276c155af6ec82e5574acac4002c8c9362091e4e035db228c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5cfbb9cf48d2e276c155af6ec82e5574acac4002c8c9362091e4e035db228c8->enter($__internal_a5cfbb9cf48d2e276c155af6ec82e5574acac4002c8c9362091e4e035db228c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_child_render"));

        // line 25
        echo "            ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child"))));
        echo "
        ";
        
        $__internal_a5cfbb9cf48d2e276c155af6ec82e5574acac4002c8c9362091e4e035db228c8->leave($__internal_a5cfbb9cf48d2e276c155af6ec82e5574acac4002c8c9362091e4e035db228c8_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_container.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 25,  123 => 24,  113 => 28,  99 => 27,  96 => 24,  78 => 23,  73 => 22,  67 => 21,  55 => 18,  36 => 15,  21 => 12,);
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

{# block classes are prepended with a container class #}
{% block block_class %} cms-container{% if not block.hasParent() %} cms-container-root{%endif%}{% if settings.class %} {{ settings.class }}{% endif %}{% endblock %}

{# identify a block role used by the page editor #}
{% block block_role %}container{% endblock %}

{# render container block #}
{% block block %}
    {% if decorator %}{{ decorator.pre|raw }}{% endif %}
    {% for child in block.children %}
        {% block block_child_render %}
            {{ sonata_block_render(child) }}
        {% endblock %}
    {% endfor %}
    {% if decorator %}{{ decorator.post|raw }}{% endif %}
{% endblock %}
", "SonataBlockBundle:Block:block_container.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\vendor\\sonata-project\\block-bundle/Resources/views/Block/block_container.html.twig");
    }
}
