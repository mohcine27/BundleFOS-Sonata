<?php

/* SonataBlockBundle:Block:block_core_text.html.twig */
class __TwigTemplate_7ddca5b9dbb2d9429297e697eb1e1422fe53dae661a7863b78f105f46e4ef8ff extends Twig_Template
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
        $__internal_c58c5d6c1a2a2ec43f584506cfe08096e5b4da1e86764d4621812e89dc489bb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c58c5d6c1a2a2ec43f584506cfe08096e5b4da1e86764d4621812e89dc489bb7->enter($__internal_c58c5d6c1a2a2ec43f584506cfe08096e5b4da1e86764d4621812e89dc489bb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c58c5d6c1a2a2ec43f584506cfe08096e5b4da1e86764d4621812e89dc489bb7->leave($__internal_c58c5d6c1a2a2ec43f584506cfe08096e5b4da1e86764d4621812e89dc489bb7_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_e8ebd58a427a9246a299872cc3c03237d6b2a3cce3cd20dc53fbc1ae08b16778 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8ebd58a427a9246a299872cc3c03237d6b2a3cce3cd20dc53fbc1ae08b16778->enter($__internal_e8ebd58a427a9246a299872cc3c03237d6b2a3cce3cd20dc53fbc1ae08b16778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "content", array());
        echo "
";
        
        $__internal_e8ebd58a427a9246a299872cc3c03237d6b2a3cce3cd20dc53fbc1ae08b16778->leave($__internal_e8ebd58a427a9246a299872cc3c03237d6b2a3cce3cd20dc53fbc1ae08b16778_prof);

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
", "SonataBlockBundle:Block:block_core_text.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\vendor\\sonata-project\\block-bundle/Resources/views/Block/block_core_text.html.twig");
    }
}
