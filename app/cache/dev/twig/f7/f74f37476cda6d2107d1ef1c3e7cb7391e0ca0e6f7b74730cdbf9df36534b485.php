<?php

/* @SonataBlock/Block/block_base.html.twig */
class __TwigTemplate_7652e01e619631af96092dfe26a88449e2614dcfb526f0bb7feaaf6cedc62e68 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a3f9f2c9eefa7265b901fba459174fc475b8a2f2acd40256a60268fa660e4e0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3f9f2c9eefa7265b901fba459174fc475b8a2f2acd40256a60268fa660e4e0e->enter($__internal_a3f9f2c9eefa7265b901fba459174fc475b8a2f2acd40256a60268fa660e4e0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_base.html.twig"));

        // line 11
        echo "<div id=\"cms-block-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "id", array()), "html", null, true);
        echo "\" class=\"cms-block cms-block-element\">
    ";
        // line 12
        $this->displayBlock('block', $context, $blocks);
        // line 13
        echo "</div>
";
        
        $__internal_a3f9f2c9eefa7265b901fba459174fc475b8a2f2acd40256a60268fa660e4e0e->leave($__internal_a3f9f2c9eefa7265b901fba459174fc475b8a2f2acd40256a60268fa660e4e0e_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_186ba60d0216a70d97ed66bb2214ec1e258ae8aff89e19968cb19667ad4ac1fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_186ba60d0216a70d97ed66bb2214ec1e258ae8aff89e19968cb19667ad4ac1fa->enter($__internal_186ba60d0216a70d97ed66bb2214ec1e258ae8aff89e19968cb19667ad4ac1fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_186ba60d0216a70d97ed66bb2214ec1e258ae8aff89e19968cb19667ad4ac1fa->leave($__internal_186ba60d0216a70d97ed66bb2214ec1e258ae8aff89e19968cb19667ad4ac1fa_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 12,  30 => 13,  28 => 12,  23 => 11,);
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
<div id=\"cms-block-{{ block.id }}\" class=\"cms-block cms-block-element\">
    {% block block %}EMPTY CONTENT{% endblock %}
</div>
", "@SonataBlock/Block/block_base.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\vendor\\sonata-project\\block-bundle\\Resources\\views\\Block\\block_base.html.twig");
    }
}
