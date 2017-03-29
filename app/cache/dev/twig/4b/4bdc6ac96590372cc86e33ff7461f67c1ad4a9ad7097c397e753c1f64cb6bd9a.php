<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_3d3726076ffc950079f2718dfddc3915ba76c811fe2d9d684af0900034f95ae0 extends Twig_Template
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
        $__internal_be0c4c8a61d6e9c8caea9521090bb40d5fa234cfdd939b188b43ebe614c6a66c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be0c4c8a61d6e9c8caea9521090bb40d5fa234cfdd939b188b43ebe614c6a66c->enter($__internal_be0c4c8a61d6e9c8caea9521090bb40d5fa234cfdd939b188b43ebe614c6a66c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_be0c4c8a61d6e9c8caea9521090bb40d5fa234cfdd939b188b43ebe614c6a66c->leave($__internal_be0c4c8a61d6e9c8caea9521090bb40d5fa234cfdd939b188b43ebe614c6a66c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
