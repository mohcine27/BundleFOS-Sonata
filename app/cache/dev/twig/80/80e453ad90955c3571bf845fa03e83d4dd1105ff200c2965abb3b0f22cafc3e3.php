<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_8a8ae9650dfed3fa55eb42b4288a87bb17e674f3778c8677ca7833a3d88e42e1 extends Twig_Template
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
        $__internal_5f52ad704311c8614c7a48af4f70e6c2a2f992843fcee74fbb747e8c72b92cec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f52ad704311c8614c7a48af4f70e6c2a2f992843fcee74fbb747e8c72b92cec->enter($__internal_5f52ad704311c8614c7a48af4f70e6c2a2f992843fcee74fbb747e8c72b92cec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_5f52ad704311c8614c7a48af4f70e6c2a2f992843fcee74fbb747e8c72b92cec->leave($__internal_5f52ad704311c8614c7a48af4f70e6c2a2f992843fcee74fbb747e8c72b92cec_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
