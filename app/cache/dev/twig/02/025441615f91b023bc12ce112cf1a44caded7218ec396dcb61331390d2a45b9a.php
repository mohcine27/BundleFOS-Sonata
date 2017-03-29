<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_9f9d03250afc2b50fdd98a6cad425693c5beb82c95b8e28029107eded84f9ea6 extends Twig_Template
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
        $__internal_86117b2765b41f745e0c6d8de0a7721eaa071642eaee5f956677dba0c0e5f3ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86117b2765b41f745e0c6d8de0a7721eaa071642eaee5f956677dba0c0e5f3ee->enter($__internal_86117b2765b41f745e0c6d8de0a7721eaa071642eaee5f956677dba0c0e5f3ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

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
        
        $__internal_86117b2765b41f745e0c6d8de0a7721eaa071642eaee5f956677dba0c0e5f3ee->leave($__internal_86117b2765b41f745e0c6d8de0a7721eaa071642eaee5f956677dba0c0e5f3ee_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_118d08c4aaaa4619f7ee32d032423ad84d9cbba75e9da55b34195ee0414e0481 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_118d08c4aaaa4619f7ee32d032423ad84d9cbba75e9da55b34195ee0414e0481->enter($__internal_118d08c4aaaa4619f7ee32d032423ad84d9cbba75e9da55b34195ee0414e0481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_118d08c4aaaa4619f7ee32d032423ad84d9cbba75e9da55b34195ee0414e0481->leave($__internal_118d08c4aaaa4619f7ee32d032423ad84d9cbba75e9da55b34195ee0414e0481_prof);

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
", "SonataBlockBundle:Block:block_base.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\vendor\\sonata-project\\block-bundle/Resources/views/Block/block_base.html.twig");
    }
}
