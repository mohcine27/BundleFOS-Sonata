<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_0020c801d65b196ad574eb877ec6cb5e23d78d428ecfc7054089760c5dd8fb70 extends Twig_Template
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
        $__internal_1a9484ca9e3b9f15a7a00fae0d667632d9d4d6d7269ba04f1c24fe5afc652d6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a9484ca9e3b9f15a7a00fae0d667632d9d4d6d7269ba04f1c24fe5afc652d6c->enter($__internal_1a9484ca9e3b9f15a7a00fae0d667632d9d4d6d7269ba04f1c24fe5afc652d6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_1a9484ca9e3b9f15a7a00fae0d667632d9d4d6d7269ba04f1c24fe5afc652d6c->leave($__internal_1a9484ca9e3b9f15a7a00fae0d667632d9d4d6d7269ba04f1c24fe5afc652d6c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
