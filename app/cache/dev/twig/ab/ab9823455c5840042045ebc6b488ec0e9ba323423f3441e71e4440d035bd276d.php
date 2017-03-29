<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_bac35a08b616832bea1c50a6c1db61e11216fd7e5c052c4f3e3a358106b361e4 extends Twig_Template
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
        $__internal_40e0af9cb9566368b48ac1d3520aa104b4ccf321313fd58b731e2f048df6fb29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40e0af9cb9566368b48ac1d3520aa104b4ccf321313fd58b731e2f048df6fb29->enter($__internal_40e0af9cb9566368b48ac1d3520aa104b4ccf321313fd58b731e2f048df6fb29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_40e0af9cb9566368b48ac1d3520aa104b4ccf321313fd58b731e2f048df6fb29->leave($__internal_40e0af9cb9566368b48ac1d3520aa104b4ccf321313fd58b731e2f048df6fb29_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
