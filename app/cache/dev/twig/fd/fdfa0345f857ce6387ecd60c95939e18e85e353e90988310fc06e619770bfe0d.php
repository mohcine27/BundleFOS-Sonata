<?php

/* @SonataBlock/Block/block_core_text.html.twig */
class __TwigTemplate_cfa8a0218ffc660a10e3988aac310460f1cfa1264f8bcf7dceabf41e2242b990 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataBlock/Block/block_core_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_859e5dc2d566efd51a036fd48859f541abcaff73d5fd5fbc1d085f99e5944c6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_859e5dc2d566efd51a036fd48859f541abcaff73d5fd5fbc1d085f99e5944c6e->enter($__internal_859e5dc2d566efd51a036fd48859f541abcaff73d5fd5fbc1d085f99e5944c6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_core_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_859e5dc2d566efd51a036fd48859f541abcaff73d5fd5fbc1d085f99e5944c6e->leave($__internal_859e5dc2d566efd51a036fd48859f541abcaff73d5fd5fbc1d085f99e5944c6e_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_b37952dbce2180e9bef33f86162c9a4562e1c82dcb8a419ddd6854ab1dab4d36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b37952dbce2180e9bef33f86162c9a4562e1c82dcb8a419ddd6854ab1dab4d36->enter($__internal_b37952dbce2180e9bef33f86162c9a4562e1c82dcb8a419ddd6854ab1dab4d36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "content", array());
        echo "
";
        
        $__internal_b37952dbce2180e9bef33f86162c9a4562e1c82dcb8a419ddd6854ab1dab4d36->leave($__internal_b37952dbce2180e9bef33f86162c9a4562e1c82dcb8a419ddd6854ab1dab4d36_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_core_text.html.twig";
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
    {{ settings.content|raw }}
{% endblock %}
", "@SonataBlock/Block/block_core_text.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\vendor\\sonata-project\\block-bundle\\Resources\\views\\Block\\block_core_text.html.twig");
    }
}
