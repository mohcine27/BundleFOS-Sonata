<?php

/* SonataAdminBundle:CRUD:list_email.html.twig */
class __TwigTemplate_9b68f187d8570eab3a15876245445d57717841e4f06404b8ebb575447e096fef extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_email.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a191f93011ec026ea5b296b1a67f4f78e72155ca10a3729f69412f8611252d54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a191f93011ec026ea5b296b1a67f4f78e72155ca10a3729f69412f8611252d54->enter($__internal_a191f93011ec026ea5b296b1a67f4f78e72155ca10a3729f69412f8611252d54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_email.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a191f93011ec026ea5b296b1a67f4f78e72155ca10a3729f69412f8611252d54->leave($__internal_a191f93011ec026ea5b296b1a67f4f78e72155ca10a3729f69412f8611252d54_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_ce2666146f33384204f07da19562d74bea3e00ffb76c68fa8d5f8c782463982f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce2666146f33384204f07da19562d74bea3e00ffb76c68fa8d5f8c782463982f->enter($__internal_ce2666146f33384204f07da19562d74bea3e00ffb76c68fa8d5f8c782463982f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "SonataAdminBundle:CRUD:list_email.html.twig", 15)->display($context);
        
        $__internal_ce2666146f33384204f07da19562d74bea3e00ffb76c68fa8d5f8c782463982f->leave($__internal_ce2666146f33384204f07da19562d74bea3e00ffb76c68fa8d5f8c782463982f_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_email.html.twig";
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
    {% include 'SonataAdminBundle:CRUD:_email_link.html.twig' %}
{% endblock %}
", "SonataAdminBundle:CRUD:list_email.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/list_email.html.twig");
    }
}
