<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_8de30a62eada5880cf369c96bd586e7e6438c58c8a3873c5da4c9b8660586a1d extends Twig_Template
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
        $__internal_ea4b3c13d93a68c714e3240ae3d186cb803ea13654095da4b2b7a7b68c04fce7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea4b3c13d93a68c714e3240ae3d186cb803ea13654095da4b2b7a7b68c04fce7->enter($__internal_ea4b3c13d93a68c714e3240ae3d186cb803ea13654095da4b2b7a7b68c04fce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_ea4b3c13d93a68c714e3240ae3d186cb803ea13654095da4b2b7a7b68c04fce7->leave($__internal_ea4b3c13d93a68c714e3240ae3d186cb803ea13654095da4b2b7a7b68c04fce7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}