<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_ba15702ad9a7ffba1791ee839be85f329c130ae7acac5b70a2e77b5daedaee3a extends Twig_Template
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
        $__internal_ae6eda1de66a29812f5cf2f5fcaabb1cb93a6f1df775a144a3d8a39609f9257b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae6eda1de66a29812f5cf2f5fcaabb1cb93a6f1df775a144a3d8a39609f9257b->enter($__internal_ae6eda1de66a29812f5cf2f5fcaabb1cb93a6f1df775a144a3d8a39609f9257b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_ae6eda1de66a29812f5cf2f5fcaabb1cb93a6f1df775a144a3d8a39609f9257b->leave($__internal_ae6eda1de66a29812f5cf2f5fcaabb1cb93a6f1df775a144a3d8a39609f9257b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
