<?php

/* @SonataBlock/Block/block_container.html.twig */
class __TwigTemplate_ab969f7c9fddf9c6e20c0c5a0cc3862bf3a7142407a9bb43c9724f2f9e0505f3 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataBlock/Block/block_container.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ff2b3aff276d9d198a072d43907894d6d5dbb5177fd857d4131f24fe65254167 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff2b3aff276d9d198a072d43907894d6d5dbb5177fd857d4131f24fe65254167->enter($__internal_ff2b3aff276d9d198a072d43907894d6d5dbb5177fd857d4131f24fe65254167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_container.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff2b3aff276d9d198a072d43907894d6d5dbb5177fd857d4131f24fe65254167->leave($__internal_ff2b3aff276d9d198a072d43907894d6d5dbb5177fd857d4131f24fe65254167_prof);

    }

    // line 15
    public function block_block_class($context, array $blocks = array())
    {
        $__internal_24ea0bd239b0e78fedbd9d85a01106db1ff029db016ef95638560ac13a4b396f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24ea0bd239b0e78fedbd9d85a01106db1ff029db016ef95638560ac13a4b396f->enter($__internal_24ea0bd239b0e78fedbd9d85a01106db1ff029db016ef95638560ac13a4b396f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_class"));

        echo " cms-container";
        if ( !$this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "hasParent", array(), "method")) {
            echo " cms-container-root";
        }
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "class", array())) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "class", array()), "html", null, true);
        }
        
        $__internal_24ea0bd239b0e78fedbd9d85a01106db1ff029db016ef95638560ac13a4b396f->leave($__internal_24ea0bd239b0e78fedbd9d85a01106db1ff029db016ef95638560ac13a4b396f_prof);

    }

    // line 18
    public function block_block_role($context, array $blocks = array())
    {
        $__internal_2ef976f65fbdbecf0357fc35bbbd644b81e8ce117846743a7b0ee871241364a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ef976f65fbdbecf0357fc35bbbd644b81e8ce117846743a7b0ee871241364a2->enter($__internal_2ef976f65fbdbecf0357fc35bbbd644b81e8ce117846743a7b0ee871241364a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_role"));

        echo "container";
        
        $__internal_2ef976f65fbdbecf0357fc35bbbd644b81e8ce117846743a7b0ee871241364a2->leave($__internal_2ef976f65fbdbecf0357fc35bbbd644b81e8ce117846743a7b0ee871241364a2_prof);

    }

    // line 21
    public function block_block($context, array $blocks = array())
    {
        $__internal_f01946acb1d08963b9e17b66f9978642089774479bb2eb2f0fa3f38c5b376f5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f01946acb1d08963b9e17b66f9978642089774479bb2eb2f0fa3f38c5b376f5f->enter($__internal_f01946acb1d08963b9e17b66f9978642089774479bb2eb2f0fa3f38c5b376f5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

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
        
        $__internal_f01946acb1d08963b9e17b66f9978642089774479bb2eb2f0fa3f38c5b376f5f->leave($__internal_f01946acb1d08963b9e17b66f9978642089774479bb2eb2f0fa3f38c5b376f5f_prof);

    }

    // line 24
    public function block_block_child_render($context, array $blocks = array())
    {
        $__internal_55d7e3aa2654abede9527ac97fedb3edc43facbd4e00d335aa6f050be7ab4e94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55d7e3aa2654abede9527ac97fedb3edc43facbd4e00d335aa6f050be7ab4e94->enter($__internal_55d7e3aa2654abede9527ac97fedb3edc43facbd4e00d335aa6f050be7ab4e94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_child_render"));

        // line 25
        echo "            ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child"))));
        echo "
        ";
        
        $__internal_55d7e3aa2654abede9527ac97fedb3edc43facbd4e00d335aa6f050be7ab4e94->leave($__internal_55d7e3aa2654abede9527ac97fedb3edc43facbd4e00d335aa6f050be7ab4e94_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_container.html.twig";
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
", "@SonataBlock/Block/block_container.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\vendor\\sonata-project\\block-bundle\\Resources\\views\\Block\\block_container.html.twig");
    }
}
