<?php

/* @SonataAdmin/CRUD/base_list_flat_inner_row.html.twig */
class __TwigTemplate_a539bbc68479a39543d5682c569f640d2f44fe1d79223a56ec91a440145f0e9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'row' => array($this, 'block_row'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4ea98d5e232d5ed1a4a8aa05424ee27473afa473ace4a8e00377e2125e2957cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ea98d5e232d5ed1a4a8aa05424ee27473afa473ace4a8e00377e2125e2957cd->enter($__internal_4ea98d5e232d5ed1a4a8aa05424ee27473afa473ace4a8e00377e2125e2957cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_list_flat_inner_row.html.twig"));

        // line 11
        echo "
";
        // line 12
        if (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "has", array(0 => "batch"), "method") &&  !$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array()))) {
            // line 13
            echo "    <td class=\"sonata-ba-list-field sonata-ba-list-field-batch\">
        ";
            // line 14
            echo $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderListElement($this->env, (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "batch", array(), "array"));
            echo "
    </td>
";
        }
        // line 17
        echo "
<td class=\"sonata-ba-list-field sonata-ba-list-field-inline-fields\" colspan=\"";
        // line 18
        echo twig_escape_filter($this->env, (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "elements", array())) - ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "has", array(0 => "_action"), "method") + $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "has", array(0 => "batch"), "method"))), "html", null, true);
        echo "\" objectId=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
    ";
        // line 19
        $this->displayBlock('row', $context, $blocks);
        // line 20
        echo "</td>

";
        // line 22
        if (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "has", array(0 => "_action"), "method") &&  !$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array()))) {
            // line 23
            echo "    <td class=\"sonata-ba-list-field sonata-ba-list-field-_action\" objectId=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\">
        ";
            // line 24
            echo $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderListElement($this->env, (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "_action", array(), "array"));
            echo "
    </td>
";
        }
        
        $__internal_4ea98d5e232d5ed1a4a8aa05424ee27473afa473ace4a8e00377e2125e2957cd->leave($__internal_4ea98d5e232d5ed1a4a8aa05424ee27473afa473ace4a8e00377e2125e2957cd_prof);

    }

    // line 19
    public function block_row($context, array $blocks = array())
    {
        $__internal_f70a054fd1cc95af4f6150e31a523cb5483535a9a93aad5dbe6ea17bf20801d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f70a054fd1cc95af4f6150e31a523cb5483535a9a93aad5dbe6ea17bf20801d6->enter($__internal_f70a054fd1cc95af4f6150e31a523cb5483535a9a93aad5dbe6ea17bf20801d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "row"));

        
        $__internal_f70a054fd1cc95af4f6150e31a523cb5483535a9a93aad5dbe6ea17bf20801d6->leave($__internal_f70a054fd1cc95af4f6150e31a523cb5483535a9a93aad5dbe6ea17bf20801d6_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_list_flat_inner_row.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 19,  59 => 24,  54 => 23,  52 => 22,  48 => 20,  46 => 19,  40 => 18,  37 => 17,  31 => 14,  28 => 13,  26 => 12,  23 => 11,);
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

{% if admin.list.has('batch') and not app.request.isXmlHttpRequest %}
    <td class=\"sonata-ba-list-field sonata-ba-list-field-batch\">
        {{ object|render_list_element(admin.list['batch']) }}
    </td>
{% endif %}

<td class=\"sonata-ba-list-field sonata-ba-list-field-inline-fields\" colspan=\"{{ admin.list.elements|length - (admin.list.has('_action') + admin.list.has('batch')) }}\" objectId=\"{{ admin.id(object) }}\">
    {% block row %}{% endblock %}
</td>

{% if admin.list.has('_action') and not app.request.isXmlHttpRequest %}
    <td class=\"sonata-ba-list-field sonata-ba-list-field-_action\" objectId=\"{{ admin.id(object) }}\">
        {{ object|render_list_element(admin.list['_action']) }}
    </td>
{% endif %}
", "@SonataAdmin/CRUD/base_list_flat_inner_row.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\base_list_flat_inner_row.html.twig");
    }
}
