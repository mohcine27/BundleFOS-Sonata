<?php

/* @SonataAdmin/empty_layout.html.twig */
class __TwigTemplate_3e9c0cfbedb3fac843fdc7ca3f3d1c8e559a91ddebd505478b1b4ed6c4a192d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'sonata_header' => array($this, 'block_sonata_header'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "layout"), "method"), "@SonataAdmin/empty_layout.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_582f0524216f2d48187ac5209dfbb1b67e0db3fac2701d1d2ed774afd3ebb898 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_582f0524216f2d48187ac5209dfbb1b67e0db3fac2701d1d2ed774afd3ebb898->enter($__internal_582f0524216f2d48187ac5209dfbb1b67e0db3fac2701d1d2ed774afd3ebb898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_582f0524216f2d48187ac5209dfbb1b67e0db3fac2701d1d2ed774afd3ebb898->leave($__internal_582f0524216f2d48187ac5209dfbb1b67e0db3fac2701d1d2ed774afd3ebb898_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_578f1843584eb39dabad3f5c3f22949808460cc1a9925fd3b5029b201a62ba88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_578f1843584eb39dabad3f5c3f22949808460cc1a9925fd3b5029b201a62ba88->enter($__internal_578f1843584eb39dabad3f5c3f22949808460cc1a9925fd3b5029b201a62ba88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_578f1843584eb39dabad3f5c3f22949808460cc1a9925fd3b5029b201a62ba88->leave($__internal_578f1843584eb39dabad3f5c3f22949808460cc1a9925fd3b5029b201a62ba88_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_473586a1f67e77df4acaacd39038975965cfbfbc51e3ed9d488cf20268d62176 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_473586a1f67e77df4acaacd39038975965cfbfbc51e3ed9d488cf20268d62176->enter($__internal_473586a1f67e77df4acaacd39038975965cfbfbc51e3ed9d488cf20268d62176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_473586a1f67e77df4acaacd39038975965cfbfbc51e3ed9d488cf20268d62176->leave($__internal_473586a1f67e77df4acaacd39038975965cfbfbc51e3ed9d488cf20268d62176_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_1315fdd658ea3044492ae688e610348076e27b59b50d65279e1d7728dc3a0492 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1315fdd658ea3044492ae688e610348076e27b59b50d65279e1d7728dc3a0492->enter($__internal_1315fdd658ea3044492ae688e610348076e27b59b50d65279e1d7728dc3a0492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_1315fdd658ea3044492ae688e610348076e27b59b50d65279e1d7728dc3a0492->leave($__internal_1315fdd658ea3044492ae688e610348076e27b59b50d65279e1d7728dc3a0492_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_4fa1094fae98b20d3e578f8b9e14fc7b044c36e278f7c8a2a69ef147d49c013c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fa1094fae98b20d3e578f8b9e14fc7b044c36e278f7c8a2a69ef147d49c013c->enter($__internal_4fa1094fae98b20d3e578f8b9e14fc7b044c36e278f7c8a2a69ef147d49c013c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_4fa1094fae98b20d3e578f8b9e14fc7b044c36e278f7c8a2a69ef147d49c013c->leave($__internal_4fa1094fae98b20d3e578f8b9e14fc7b044c36e278f7c8a2a69ef147d49c013c_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0df576a8765867f9e2097648383129b6b55eb70e7b2c1b116ba3f7ad9e44e393 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0df576a8765867f9e2097648383129b6b55eb70e7b2c1b116ba3f7ad9e44e393->enter($__internal_0df576a8765867f9e2097648383129b6b55eb70e7b2c1b116ba3f7ad9e44e393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 20
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <style>
        .content {
            margin: 0px;
            padding: 0px;
        }
    </style>

";
        
        $__internal_0df576a8765867f9e2097648383129b6b55eb70e7b2c1b116ba3f7ad9e44e393->leave($__internal_0df576a8765867f9e2097648383129b6b55eb70e7b2c1b116ba3f7ad9e44e393_prof);

    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_553ea5b54fb205e9b42e6e257e6107e157f35011df02abdfe79a668e9a95a080 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_553ea5b54fb205e9b42e6e257e6107e157f35011df02abdfe79a668e9a95a080->enter($__internal_553ea5b54fb205e9b42e6e257e6107e157f35011df02abdfe79a668e9a95a080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_553ea5b54fb205e9b42e6e257e6107e157f35011df02abdfe79a668e9a95a080->leave($__internal_553ea5b54fb205e9b42e6e257e6107e157f35011df02abdfe79a668e9a95a080_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_257388f43ea0cfc758fb0887cc956e7581fcc4fc6752b500361d7d29cc296a18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_257388f43ea0cfc758fb0887cc956e7581fcc4fc6752b500361d7d29cc296a18->enter($__internal_257388f43ea0cfc758fb0887cc956e7581fcc4fc6752b500361d7d29cc296a18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_257388f43ea0cfc758fb0887cc956e7581fcc4fc6752b500361d7d29cc296a18->leave($__internal_257388f43ea0cfc758fb0887cc956e7581fcc4fc6752b500361d7d29cc296a18_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/empty_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 33,  113 => 32,  107 => 31,  89 => 20,  83 => 19,  72 => 17,  61 => 16,  50 => 15,  39 => 14,  24 => 12,);
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

{% extends admin_pool.getTemplate('layout') %}

{% block sonata_header %}{% endblock %}
{% block sonata_left_side %}{% endblock %}
{% block sonata_nav %}{% endblock %}
{% block sonata_breadcrumb %}{% endblock %}

{% block stylesheets %}
    {{ parent() }}

    <style>
        .content {
            margin: 0px;
            padding: 0px;
        }
    </style>

{% endblock %}

{% block sonata_wrapper %}
    {% block sonata_page_content %}
        {{ parent() }}
    {% endblock %}
{% endblock %}
", "@SonataAdmin/empty_layout.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\empty_layout.html.twig");
    }
}
