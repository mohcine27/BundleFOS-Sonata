<?php

/* @SonataAdmin/Core/create_button.html.twig */
class __TwigTemplate_ecfa0786709d897b48dae46d908ca15e3598222024b5121a57559203b249a9a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 15
        $this->parent = $this->loadTemplate("SonataAdminBundle:Button:create_button.html.twig", "@SonataAdmin/Core/create_button.html.twig", 15);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Button:create_button.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7885974e24ca70fbc917f016cb9a2fbebd11a35f3350836ac9e5145edf808acf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7885974e24ca70fbc917f016cb9a2fbebd11a35f3350836ac9e5145edf808acf->enter($__internal_7885974e24ca70fbc917f016cb9a2fbebd11a35f3350836ac9e5145edf808acf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Core/create_button.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7885974e24ca70fbc917f016cb9a2fbebd11a35f3350836ac9e5145edf808acf->leave($__internal_7885974e24ca70fbc917f016cb9a2fbebd11a35f3350836ac9e5145edf808acf_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Core/create_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 15,);
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

{# DEPRECATED #}
{# This file is kept here for backward compatibility - Rather use SonataAdminBundle:Button:create_button.html.twig #}

{% extends 'SonataAdminBundle:Button:create_button.html.twig' %}
", "@SonataAdmin/Core/create_button.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\Core\\create_button.html.twig");
    }
}
