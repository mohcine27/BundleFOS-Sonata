<?php

/* EasyAdminBundle:default:field_string.html.twig */
class __TwigTemplate_5d9d34702979b18d66dd0aae13176e411d4ddd1e474f981a2e89558f24eab34a extends Twig_Template
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
        $__internal_7ebeae62c4c39142cabd9e9edef8f9bffed2f7e5325f94cb7391999fc7e63fea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ebeae62c4c39142cabd9e9edef8f9bffed2f7e5325f94cb7391999fc7e63fea->enter($__internal_7ebeae62c4c39142cabd9e9edef8f9bffed2f7e5325f94cb7391999fc7e63fea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_string.html.twig"));

        // line 1
        if (((isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")) == "show")) {
            // line 2
            echo "    ";
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true));
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->truncateText($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        }
        
        $__internal_7ebeae62c4c39142cabd9e9edef8f9bffed2f7e5325f94cb7391999fc7e63fea->leave($__internal_7ebeae62c4c39142cabd9e9edef8f9bffed2f7e5325f94cb7391999fc7e63fea_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if view == 'show' %}
    {{ value|nl2br }}
{% else %}
    {{ value|easyadmin_truncate }}
{% endif %}
", "EasyAdminBundle:default:field_string.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\vendor\\javiereguiluz\\easyadmin-bundle/Resources/views/default/field_string.html.twig");
    }
}
