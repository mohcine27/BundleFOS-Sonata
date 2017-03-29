<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_c1f9e30aa40047acde57398c59e5cf7914c7716fd26abd1d29f51ecd0f3b29b5 extends Twig_Template
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
        $__internal_6e3cf996a08d02f0cfef30e352d054c7f1cc16ea02392c0ba6e1bd63d8c648e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e3cf996a08d02f0cfef30e352d054c7f1cc16ea02392c0ba6e1bd63d8c648e3->enter($__internal_6e3cf996a08d02f0cfef30e352d054c7f1cc16ea02392c0ba6e1bd63d8c648e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_6e3cf996a08d02f0cfef30e352d054c7f1cc16ea02392c0ba6e1bd63d8c648e3->leave($__internal_6e3cf996a08d02f0cfef30e352d054c7f1cc16ea02392c0ba6e1bd63d8c648e3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
