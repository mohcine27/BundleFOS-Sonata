<?php

/* AppBundle:Profile:edit.html.twig */
class __TwigTemplate_17f6e6e9e657cbaf016d4d1ff5aa27144893a84bc291c03f66ca133d8f8ca719 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:Profile:edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0884ba9a8d99753e30aadb5770c3dbf9407f8dbcbce35db577fc11f632870654 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0884ba9a8d99753e30aadb5770c3dbf9407f8dbcbce35db577fc11f632870654->enter($__internal_0884ba9a8d99753e30aadb5770c3dbf9407f8dbcbce35db577fc11f632870654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0884ba9a8d99753e30aadb5770c3dbf9407f8dbcbce35db577fc11f632870654->leave($__internal_0884ba9a8d99753e30aadb5770c3dbf9407f8dbcbce35db577fc11f632870654_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_c91d78db7fdd595105838669312556577c5dd5796a2c16c9176a0df7606c2055 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c91d78db7fdd595105838669312556577c5dd5796a2c16c9176a0df7606c2055->enter($__internal_c91d78db7fdd595105838669312556577c5dd5796a2c16c9176a0df7606c2055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"row\">
        <div class=\"col s12 m8 offset-m2\">
            <h4 class=\"card-panel teal lighten-2 white-head\">Modifier votre profile</h4>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col s12 m8 offset-m2\">
\t\t";
        // line 10
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "AppBundle:Profile:edit.html.twig", 10)->display($context);
        // line 11
        echo "\t\t</div>
    </div>
";
        
        $__internal_c91d78db7fdd595105838669312556577c5dd5796a2c16c9176a0df7606c2055->leave($__internal_c91d78db7fdd595105838669312556577c5dd5796a2c16c9176a0df7606c2055_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 11,  49 => 10,  40 => 3,  34 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}
{% block body %}
    <div class=\"row\">
        <div class=\"col s12 m8 offset-m2\">
            <h4 class=\"card-panel teal lighten-2 white-head\">Modifier votre profile</h4>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col s12 m8 offset-m2\">
\t\t{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
\t\t</div>
    </div>
{% endblock body %}
", "AppBundle:Profile:edit.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\src\\AppBundle/Resources/views/Profile/edit.html.twig");
    }
}
