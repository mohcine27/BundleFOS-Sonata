<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_9839f5b323d67626dcb24c3a29ea13dd78e07aaa929d925590b0a4d2c4a209c0 extends Twig_Template
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
        $__internal_fda4502f9b843d104e15c7a6f5563838d344a22f7a31706d4a3bdf7ad3cefe0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fda4502f9b843d104e15c7a6f5563838d344a22f7a31706d4a3bdf7ad3cefe0f->enter($__internal_fda4502f9b843d104e15c7a6f5563838d344a22f7a31706d4a3bdf7ad3cefe0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_fda4502f9b843d104e15c7a6f5563838d344a22f7a31706d4a3bdf7ad3cefe0f->leave($__internal_fda4502f9b843d104e15c7a6f5563838d344a22f7a31706d4a3bdf7ad3cefe0f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
