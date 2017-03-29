<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_e4e86873b8f09d4e7683f9e0a8dcc361d840c014cff112541e2ef857ec833380 extends Twig_Template
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
        $__internal_1f5d0fa33ab21aeba8ab481bafc03a5ab2f0ccb5f179640150f25acb496fa3ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f5d0fa33ab21aeba8ab481bafc03a5ab2f0ccb5f179640150f25acb496fa3ef->enter($__internal_1f5d0fa33ab21aeba8ab481bafc03a5ab2f0ccb5f179640150f25acb496fa3ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_1f5d0fa33ab21aeba8ab481bafc03a5ab2f0ccb5f179640150f25acb496fa3ef->leave($__internal_1f5d0fa33ab21aeba8ab481bafc03a5ab2f0ccb5f179640150f25acb496fa3ef_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
