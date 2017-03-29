<?php

/* SonataAdminBundle:CRUD:list__select.html.twig */
class __TwigTemplate_ccd79f4657d8f92d405c1e232484a4794a277049198bba5569a9fab8b6161907 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__select.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fa45e94c1043d87f8471b206066640172fe018f630c6bb889faac18960915a78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa45e94c1043d87f8471b206066640172fe018f630c6bb889faac18960915a78->enter($__internal_fa45e94c1043d87f8471b206066640172fe018f630c6bb889faac18960915a78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__select.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa45e94c1043d87f8471b206066640172fe018f630c6bb889faac18960915a78->leave($__internal_fa45e94c1043d87f8471b206066640172fe018f630c6bb889faac18960915a78_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_649e82434efd49556142fbb67bc30264d064f3769f1562636cd9b34db65c4c78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_649e82434efd49556142fbb67bc30264d064f3769f1562636cd9b34db65c4c78->enter($__internal_649e82434efd49556142fbb67bc30264d064f3769f1562636cd9b34db65c4c78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <a class=\"btn btn-primary\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
        echo "\">
        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
        ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list_select", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_649e82434efd49556142fbb67bc30264d064f3769f1562636cd9b34db65c4c78->leave($__internal_649e82434efd49556142fbb67bc30264d064f3769f1562636cd9b34db65c4c78_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 17,  39 => 15,  33 => 14,  18 => 12,);
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
    <a class=\"btn btn-primary\" href=\"{{ admin.generateUrl('list') }}\">
        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
        {{ 'list_select'|trans({}, 'SonataAdminBundle') }}
    </a>
{% endblock %}
", "SonataAdminBundle:CRUD:list__select.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/list__select.html.twig");
    }
}
