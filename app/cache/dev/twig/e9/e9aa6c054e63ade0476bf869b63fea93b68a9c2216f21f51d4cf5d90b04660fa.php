<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_a265bd305e115464366d202f6654d9432d3dfbbcecaea7b2368438f044f7034e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f4c81f446e2b84264b3d69df63cd99d4679ecf880d8320f43735e6fdb3fdb230 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4c81f446e2b84264b3d69df63cd99d4679ecf880d8320f43735e6fdb3fdb230->enter($__internal_f4c81f446e2b84264b3d69df63cd99d4679ecf880d8320f43735e6fdb3fdb230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f4c81f446e2b84264b3d69df63cd99d4679ecf880d8320f43735e6fdb3fdb230->leave($__internal_f4c81f446e2b84264b3d69df63cd99d4679ecf880d8320f43735e6fdb3fdb230_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_43e820be24c87e369bcb5ed88b807d9f30f94b4f449c56d9282917568ccb88a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43e820be24c87e369bcb5ed88b807d9f30f94b4f449c56d9282917568ccb88a4->enter($__internal_43e820be24c87e369bcb5ed88b807d9f30f94b4f449c56d9282917568ccb88a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_43e820be24c87e369bcb5ed88b807d9f30f94b4f449c56d9282917568ccb88a4->leave($__internal_43e820be24c87e369bcb5ed88b807d9f30f94b4f449c56d9282917568ccb88a4_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
