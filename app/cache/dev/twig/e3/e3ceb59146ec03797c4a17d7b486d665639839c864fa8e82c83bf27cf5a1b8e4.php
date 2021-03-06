<?php

/* @SonataAdmin/CRUD/list__batch.html.twig */
class __TwigTemplate_98a0760f6153ea6fc77fb4e2a39f160d7f1045ea14f824a698948431e48f2e92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list__batch.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c689973c0bd632cfeb371db59d96c41ab7677873402ec5884999d985c56d5fb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c689973c0bd632cfeb371db59d96c41ab7677873402ec5884999d985c56d5fb3->enter($__internal_c689973c0bd632cfeb371db59d96c41ab7677873402ec5884999d985c56d5fb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c689973c0bd632cfeb371db59d96c41ab7677873402ec5884999d985c56d5fb3->leave($__internal_c689973c0bd632cfeb371db59d96c41ab7677873402ec5884999d985c56d5fb3_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_4676a84a3bcb5d2d17b90b62c608851953a2e78acdb84787b976b387d312036a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4676a84a3bcb5d2d17b90b62c608851953a2e78acdb84787b976b387d312036a->enter($__internal_4676a84a3bcb5d2d17b90b62c608851953a2e78acdb84787b976b387d312036a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_4676a84a3bcb5d2d17b90b62c608851953a2e78acdb84787b976b387d312036a->leave($__internal_4676a84a3bcb5d2d17b90b62c608851953a2e78acdb84787b976b387d312036a_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list__batch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
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

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    <input type=\"checkbox\" name=\"idx[]\" value=\"{{ admin.id(object) }}\">
{% endblock %}
", "@SonataAdmin/CRUD/list__batch.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\list__batch.html.twig");
    }
}
