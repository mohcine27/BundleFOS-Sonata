<?php

/* SonataBlockBundle:Block:block_core_text.html.twig */
class __TwigTemplate_f713dbe8b47a243599bde7851a921d28f267fde48471dcc45590e2243716b651 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4c0109f63e3a4fe140afc004a10eaef50a495110f307a7983ecef6caabb33498 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c0109f63e3a4fe140afc004a10eaef50a495110f307a7983ecef6caabb33498->enter($__internal_4c0109f63e3a4fe140afc004a10eaef50a495110f307a7983ecef6caabb33498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c0109f63e3a4fe140afc004a10eaef50a495110f307a7983ecef6caabb33498->leave($__internal_4c0109f63e3a4fe140afc004a10eaef50a495110f307a7983ecef6caabb33498_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_bf914a42cbf71b53ab6033ec4d3801e5cbbbd3670d767e7c7d7a649630e8ec04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf914a42cbf71b53ab6033ec4d3801e5cbbbd3670d767e7c7d7a649630e8ec04->enter($__internal_bf914a42cbf71b53ab6033ec4d3801e5cbbbd3670d767e7c7d7a649630e8ec04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "content", array());
        echo "
";
        
        $__internal_bf914a42cbf71b53ab6033ec4d3801e5cbbbd3670d767e7c7d7a649630e8ec04->leave($__internal_bf914a42cbf71b53ab6033ec4d3801e5cbbbd3670d767e7c7d7a649630e8ec04_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_text.html.twig";
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
", "SonataBlockBundle:Block:block_core_text.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\vendor\\sonata-project\\block-bundle\\Resources\\views\\Block\\block_core_text.html.twig");
    }
}
