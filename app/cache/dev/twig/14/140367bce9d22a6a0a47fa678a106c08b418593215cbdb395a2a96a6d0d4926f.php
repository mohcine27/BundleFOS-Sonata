<?php

/* AppBundle:Profile:edit_content.html.twig */
class __TwigTemplate_b1218ae749d8bd8cf3f504dc64df28e50e66436f9cc942be6c6e1beef4e3035b extends Twig_Template
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
        $__internal_0a267eabdf9043ce574dc8934bec5327eacae68166ae75e49d8ac22b8b4bc0e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a267eabdf9043ce574dc8934bec5327eacae68166ae75e49d8ac22b8b4bc0e9->enter($__internal_0a267eabdf9043ce574dc8934bec5327eacae68166ae75e49d8ac22b8b4bc0e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Profile:edit_content.html.twig"));

        // line 2
        echo "
<form action=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
        echo "\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"form-horizontal\">
    ";
        // line 5
        echo "\t
\t<div class=\"form-group\">
      ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Nom"));
        echo "
\t   <div class=\"col-sm-4\">
\t\t  ";
        // line 10
        echo "\t\t  ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t</div>
    ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
        echo "
  </div>
  
  <div class=\"form-group\">
      ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Email"));
        echo "
   <div class=\"col-sm-4\">
      ";
        // line 19
        echo "      ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
    ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
  </div>
  
    <div class=\"form-group\">
      ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "current_password", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Mot de passe actuel"));
        echo "
   <div class=\"col-sm-4\">
      ";
        // line 28
        echo "      ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "current_password", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
    ";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "current_password", array()), 'errors');
        echo "
  </div>
  
  ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo " 
  
    <div>
        <input type=\"submit\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_0a267eabdf9043ce574dc8934bec5327eacae68166ae75e49d8ac22b8b4bc0e9->leave($__internal_0a267eabdf9043ce574dc8934bec5327eacae68166ae75e49d8ac22b8b4bc0e9_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Profile:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 36,  88 => 33,  82 => 30,  76 => 28,  71 => 25,  64 => 21,  58 => 19,  53 => 16,  46 => 12,  40 => 10,  35 => 7,  31 => 5,  25 => 3,  22 => 2,);
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

<form action=\"{{ path('fos_user_profile_edit') }}\" {{ form_enctype(form) }} method=\"POST\" class=\"form-horizontal\">
    {# {{ form_widget(form) }} #}
\t
\t<div class=\"form-group\">
      {{ form_label(form.username,\"Nom\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
\t   <div class=\"col-sm-4\">
\t\t  {# Génération de l'input. #}
\t\t  {{ form_widget(form.username, {'attr': {'class': 'form-control'}}) }}
\t\t</div>
    {{ form_errors(form.username) }}
  </div>
  
  <div class=\"form-group\">
      {{ form_label(form.email,\"Email\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
   <div class=\"col-sm-4\">
      {# Génération de l'input. #}
      {{ form_widget(form.email, {'attr': {'class': 'form-control'}}) }}
    </div>
    {{ form_errors(form.email) }}
  </div>
  
    <div class=\"form-group\">
      {{ form_label(form.current_password,\"Mot de passe actuel\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
   <div class=\"col-sm-4\">
      {# Génération de l'input. #}
      {{ form_widget(form.current_password, {'attr': {'class': 'form-control'}}) }}
    </div>
    {{ form_errors(form.current_password) }}
  </div>
  
  {{ form_rest(form) }} 
  
    <div>
        <input type=\"submit\" value=\"{{ 'profile.edit.submit'|trans }}\" />
    </div>
</form>
", "AppBundle:Profile:edit_content.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\src\\AppBundle/Resources/views/Profile/edit_content.html.twig");
    }
}
