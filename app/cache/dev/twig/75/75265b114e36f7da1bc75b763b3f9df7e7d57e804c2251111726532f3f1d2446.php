<?php

/* @App/Security/login.html.twig */
class __TwigTemplate_bf0c7384c95600eac1e67d40169d6d9e6ba6e9274b3f4d9b6fd1d9996e097e78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "@App/Security/login.html.twig", 2);
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
        $__internal_a4ad26f3df32fc97f7f4933df4a11cb87c12bceb75b65154b89569d9d4ae6f92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4ad26f3df32fc97f7f4933df4a11cb87c12bceb75b65154b89569d9d4ae6f92->enter($__internal_a4ad26f3df32fc97f7f4933df4a11cb87c12bceb75b65154b89569d9d4ae6f92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4ad26f3df32fc97f7f4933df4a11cb87c12bceb75b65154b89569d9d4ae6f92->leave($__internal_a4ad26f3df32fc97f7f4933df4a11cb87c12bceb75b65154b89569d9d4ae6f92_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e492122edd8c90668bc98f0c1eaec0be396972fbdf9b69cdcbd72889da2f7cec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e492122edd8c90668bc98f0c1eaec0be396972fbdf9b69cdcbd72889da2f7cec->enter($__internal_e492122edd8c90668bc98f0c1eaec0be396972fbdf9b69cdcbd72889da2f7cec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"row\">
        <div class=\"col s12 m8 offset-m2\">
            <h2>Se connecter</h2>
        </div>
    </div>
    <div class=\"row\">
        ";
        // line 10
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 11
            echo "             <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
        ";
        }
        // line 13
        echo "        <div class=\"col s12 m8 offset-m2\">
            <form action=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\" class=\"form-horizontal\" >
                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

";
        // line 18
        echo "                <div class=\"form-group\">
                        <label for=\"username\" class=\"col-sm-2 control-label\">Login/Email</label>
\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"username\" class=\"form-control\" name=\"_username\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
\t\t\t\t\t\t</div>
                </div>
\t\t\t\t
                <div class=\"form-group\">
                        <label for=\"password\" class=\"col-sm-2 control-label\">Mot de passe</label>
\t\t\t\t\t<div class=\"col-sm-4\">
                        <input type=\"password\" id=\"password\" class=\"form-control\" name=\"_password\" required=\"required\" />
                    </div>
                </div>
\t\t\t\t
                <div class=\"form-group\">
\t\t\t\t\t<label for=\"remember_me\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>\t\t\t\t\t                 
                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
\t\t\t\t\t <div class=\"reset-wrap\"><a href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_request");
        echo "\" class=\"\">Mot de passe oublié?</a></div>                                       
                </div>\t\t\t\t    
\t\t\t\t
                <div class=\"form-group\">
\t\t\t\t\t<button class=\"btn btn-primary\" id=\"_submit\" type=\"submit\" name=\"_submit\">
                      ";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "
                      ";
        // line 42
        echo "                    </button>   
\t\t\t\t
                  </div>
            </form>
        </div>
    </div>
";
        
        $__internal_e492122edd8c90668bc98f0c1eaec0be396972fbdf9b69cdcbd72889da2f7cec->leave($__internal_e492122edd8c90668bc98f0c1eaec0be396972fbdf9b69cdcbd72889da2f7cec_prof);

    }

    public function getTemplateName()
    {
        return "@App/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 42,  101 => 40,  93 => 35,  88 => 33,  73 => 21,  68 => 18,  63 => 15,  59 => 14,  56 => 13,  50 => 11,  48 => 10,  40 => 4,  34 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% extends \"base.html.twig\" %}
{% block body %}
    <div class=\"row\">
        <div class=\"col s12 m8 offset-m2\">
            <h2>Se connecter</h2>
        </div>
    </div>
    <div class=\"row\">
        {% if error %}
             <div>{{ error|trans({}, 'FOSUserBundle') }}</div>
        {% endif %}
        <div class=\"col s12 m8 offset-m2\">
            <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\" class=\"form-horizontal\" >
                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />

{# j'ai enleve ça {{ 'security.login.password'|trans }} #}
                <div class=\"form-group\">
                        <label for=\"username\" class=\"col-sm-2 control-label\">Login/Email</label>
\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"username\" class=\"form-control\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" />
\t\t\t\t\t\t</div>
                </div>
\t\t\t\t
                <div class=\"form-group\">
                        <label for=\"password\" class=\"col-sm-2 control-label\">Mot de passe</label>
\t\t\t\t\t<div class=\"col-sm-4\">
                        <input type=\"password\" id=\"password\" class=\"form-control\" name=\"_password\" required=\"required\" />
                    </div>
                </div>
\t\t\t\t
                <div class=\"form-group\">
\t\t\t\t\t<label for=\"remember_me\">{{ 'security.login.remember_me'|trans }}</label>\t\t\t\t\t                 
                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
\t\t\t\t\t <div class=\"reset-wrap\"><a href=\"{{ path('fos_user_resetting_request') }}\" class=\"\">Mot de passe oublié?</a></div>                                       
                </div>\t\t\t\t    
\t\t\t\t
                <div class=\"form-group\">
\t\t\t\t\t<button class=\"btn btn-primary\" id=\"_submit\" type=\"submit\" name=\"_submit\">
                      {{ 'security.login.submit'|trans }}
                      {# <i class=\"material-icons\">send</i> #}
                    </button>   
\t\t\t\t
                  </div>
            </form>
        </div>
    </div>
{% endblock body %}", "@App/Security/login.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\src\\AppBundle\\Resources\\views\\Security\\login.html.twig");
    }
}
