<?php

/* @SonataAdmin/Core/user_block.html.twig */
class __TwigTemplate_b630db3749d1a579871390f661b1846b184ca44dac2c43f20125e6e739e5351b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_762bdaad74127d08639ea7d42ef7d13d861561e3575564d40c3cc28ec8c66877 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_762bdaad74127d08639ea7d42ef7d13d861561e3575564d40c3cc28ec8c66877->enter($__internal_762bdaad74127d08639ea7d42ef7d13d861561e3575564d40c3cc28ec8c66877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Core/user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_762bdaad74127d08639ea7d42ef7d13d861561e3575564d40c3cc28ec8c66877->leave($__internal_762bdaad74127d08639ea7d42ef7d13d861561e3575564d40c3cc28ec8c66877_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_01c2ff69ee9bd144032b2d11dc43bab5f6d18dc88b449b8bd8b0d492a52d941f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01c2ff69ee9bd144032b2d11dc43bab5f6d18dc88b449b8bd8b0d492a52d941f->enter($__internal_01c2ff69ee9bd144032b2d11dc43bab5f6d18dc88b449b8bd8b0d492a52d941f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_01c2ff69ee9bd144032b2d11dc43bab5f6d18dc88b449b8bd8b0d492a52d941f->leave($__internal_01c2ff69ee9bd144032b2d11dc43bab5f6d18dc88b449b8bd8b0d492a52d941f_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Core/user_block.html.twig";
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
        return new Twig_Source("{% block user_block %}{# Customize this value #}{% endblock %}
", "@SonataAdmin/Core/user_block.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\Core\\user_block.html.twig");
    }
}
