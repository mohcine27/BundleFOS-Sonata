<?php

/* @SonataAdmin/CRUD/list__action_show.html.twig */
class __TwigTemplate_8e4bca081599e77ed515adc902c6415eddc8abed3fee19e9797c3386467e1612 extends Twig_Template
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
        $__internal_b3a9082ee35448bc0e7c9d2bb904e281561efe5689ac927ded46245d4e4955c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3a9082ee35448bc0e7c9d2bb904e281561efe5689ac927ded46245d4e4955c7->enter($__internal_b3a9082ee35448bc0e7c9d2bb904e281561efe5689ac927ded46245d4e4955c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list__action_show.html.twig"));

        // line 11
        echo "
";
        // line 12
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasAccess", array(0 => "show", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "show"), "method"))) {
            // line 13
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "show", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\" class=\"btn btn-sm btn-default view_link\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action_show", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">
        <i class=\"fa fa-search-plus\" aria-hidden=\"true\"></i>
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action_show", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    </a>
";
        }
        
        $__internal_b3a9082ee35448bc0e7c9d2bb904e281561efe5689ac927ded46245d4e4955c7->leave($__internal_b3a9082ee35448bc0e7c9d2bb904e281561efe5689ac927ded46245d4e4955c7_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list__action_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 15,  27 => 13,  25 => 12,  22 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% if admin.hasAccess('show', object) and admin.hasRoute('show') %}
    <a href=\"{{ admin.generateObjectUrl('show', object) }}\" class=\"btn btn-sm btn-default view_link\" title=\"{{ 'action_show'|trans({}, 'SonataAdminBundle') }}\">
        <i class=\"fa fa-search-plus\" aria-hidden=\"true\"></i>
        {{ 'action_show'|trans({}, 'SonataAdminBundle') }}
    </a>
{% endif %}
", "@SonataAdmin/CRUD/list__action_show.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\list__action_show.html.twig");
    }
}
