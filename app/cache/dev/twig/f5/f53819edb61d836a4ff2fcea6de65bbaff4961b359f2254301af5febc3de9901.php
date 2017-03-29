<?php

/* EasyAdminBundle:default:label_empty.html.twig */
class __TwigTemplate_dd4d70da14af93d6b4bba1877cb23b565580100cd12de3c251978da7f760122c extends Twig_Template
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
        $__internal_11534954f0de3bfe987cfd214be4e3598a3f86eb4f9d59d34b58dbdc1eefe8d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11534954f0de3bfe987cfd214be4e3598a3f86eb4f9d59d34b58dbdc1eefe8d2->enter($__internal_11534954f0de3bfe987cfd214be4e3598a3f86eb4f9d59d34b58dbdc1eefe8d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_empty.html.twig"));

        // line 1
        echo "<span class=\"label label-empty\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.empty", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_11534954f0de3bfe987cfd214be4e3598a3f86eb4f9d59d34b58dbdc1eefe8d2->leave($__internal_11534954f0de3bfe987cfd214be4e3598a3f86eb4f9d59d34b58dbdc1eefe8d2_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:label_empty.html.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<span class=\"label label-empty\">{{ 'label.empty'|trans(domain = 'EasyAdminBundle') }}</span>
", "EasyAdminBundle:default:label_empty.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\vendor\\javiereguiluz\\easyadmin-bundle/Resources/views/default/label_empty.html.twig");
    }
}
