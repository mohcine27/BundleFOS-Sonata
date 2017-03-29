<?php

/* SonataAdminBundle:Core:user_block.html.twig */
class __TwigTemplate_664baae451f1366e4dffd8759204c994458712f217d8ea8c425af815e4682bf4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f9807b0540f26f4d2569db8e79c4e97913d3de353a263490c5daa0397301c862 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9807b0540f26f4d2569db8e79c4e97913d3de353a263490c5daa0397301c862->enter($__internal_f9807b0540f26f4d2569db8e79c4e97913d3de353a263490c5daa0397301c862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_f9807b0540f26f4d2569db8e79c4e97913d3de353a263490c5daa0397301c862->leave($__internal_f9807b0540f26f4d2569db8e79c4e97913d3de353a263490c5daa0397301c862_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_85f9690bd1bbb9ea41f205849db4f96dd5d67df6c7387fc328a9dd7a2963c7fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85f9690bd1bbb9ea41f205849db4f96dd5d67df6c7387fc328a9dd7a2963c7fe->enter($__internal_85f9690bd1bbb9ea41f205849db4f96dd5d67df6c7387fc328a9dd7a2963c7fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_85f9690bd1bbb9ea41f205849db4f96dd5d67df6c7387fc328a9dd7a2963c7fe->leave($__internal_85f9690bd1bbb9ea41f205849db4f96dd5d67df6c7387fc328a9dd7a2963c7fe_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block user_block %}{# Customize this value #}{% endblock %}
", "SonataAdminBundle:Core:user_block.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\vendor\\sonata-project\\admin-bundle/Resources/views/Core/user_block.html.twig");
    }
}
