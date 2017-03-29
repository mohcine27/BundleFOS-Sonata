<?php

/* @SonataBlock/Block/block_exception.html.twig */
class __TwigTemplate_a2d5c490b04ddf228598551c048cdce5b3531c0d1cf2d4a5bb93084bb0d46a00 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataBlock/Block/block_exception.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_00c9b2d397caab5046bc2102350600209c993f535bd4bc38bcc9e5db09aa5c15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00c9b2d397caab5046bc2102350600209c993f535bd4bc38bcc9e5db09aa5c15->enter($__internal_00c9b2d397caab5046bc2102350600209c993f535bd4bc38bcc9e5db09aa5c15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_exception.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00c9b2d397caab5046bc2102350600209c993f535bd4bc38bcc9e5db09aa5c15->leave($__internal_00c9b2d397caab5046bc2102350600209c993f535bd4bc38bcc9e5db09aa5c15_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_5ae6f274d44f9abfd6b9f4e4c498efafb7d63c4d0f8d889cbaf45e527ac6d192 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ae6f274d44f9abfd6b9f4e4c498efafb7d63c4d0f8d889cbaf45e527ac6d192->enter($__internal_5ae6f274d44f9abfd6b9f4e4c498efafb7d63c4d0f8d889cbaf45e527ac6d192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <div class=\"cms-block-exception\">
        <h2>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "name", array()), "html", null, true);
        echo "</h2>
        <h3>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo "</h3>
    </div>
";
        
        $__internal_5ae6f274d44f9abfd6b9f4e4c498efafb7d63c4d0f8d889cbaf45e527ac6d192->leave($__internal_5ae6f274d44f9abfd6b9f4e4c498efafb7d63c4d0f8d889cbaf45e527ac6d192_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 17,  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
    <div class=\"cms-block-exception\">
        <h2>{{ block.name }}</h2>
        <h3>{{ exception.message }}</h3>
    </div>
{% endblock %}
", "@SonataBlock/Block/block_exception.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\vendor\\sonata-project\\block-bundle\\Resources\\views\\Block\\block_exception.html.twig");
    }
}
