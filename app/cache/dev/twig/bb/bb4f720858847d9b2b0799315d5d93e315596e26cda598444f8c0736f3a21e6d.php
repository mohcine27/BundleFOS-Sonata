<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_002df237b404ba7dc706e470ffe7852faa197bd9794d219f23954a9943db3309 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eb1e8d96dceb3a0fb263a35e9409829e78af0127a1fc524e05afadcaf2f4cc75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb1e8d96dceb3a0fb263a35e9409829e78af0127a1fc524e05afadcaf2f4cc75->enter($__internal_eb1e8d96dceb3a0fb263a35e9409829e78af0127a1fc524e05afadcaf2f4cc75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_eb1e8d96dceb3a0fb263a35e9409829e78af0127a1fc524e05afadcaf2f4cc75->leave($__internal_eb1e8d96dceb3a0fb263a35e9409829e78af0127a1fc524e05afadcaf2f4cc75_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
