<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_a86149309aee53594bc6f272a05db82e030aaaea2b0c4e70a731c4eb45b2472c extends Twig_Template
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
        $__internal_4d02815e465e923970e6c98abcb93ae65d993704a3b5ed21bbed7f64da81c4ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d02815e465e923970e6c98abcb93ae65d993704a3b5ed21bbed7f64da81c4ca->enter($__internal_4d02815e465e923970e6c98abcb93ae65d993704a3b5ed21bbed7f64da81c4ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

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
        
        $__internal_4d02815e465e923970e6c98abcb93ae65d993704a3b5ed21bbed7f64da81c4ca->leave($__internal_4d02815e465e923970e6c98abcb93ae65d993704a3b5ed21bbed7f64da81c4ca_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_aee07e382a602dd7ffaf3383d46047ed14ccc5ee93871e34bc67c816e91b572e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aee07e382a602dd7ffaf3383d46047ed14ccc5ee93871e34bc67c816e91b572e->enter($__internal_aee07e382a602dd7ffaf3383d46047ed14ccc5ee93871e34bc67c816e91b572e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_aee07e382a602dd7ffaf3383d46047ed14ccc5ee93871e34bc67c816e91b572e->leave($__internal_aee07e382a602dd7ffaf3383d46047ed14ccc5ee93871e34bc67c816e91b572e_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
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
", "SonataBlockBundle:Block:block_base.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\vendor\\sonata-project\\block-bundle\\Resources\\views\\Block\\block_base.html.twig");
    }
}
