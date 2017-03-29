<?php

/* base.html.twig */
class __TwigTemplate_295c4dde9d022ec97ac2d018179d4322891b72cb5e7b825825c29ad77e861cb5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_049f6f54c8f12962b745551295dc00457c8396535d5ccf38857eaa75e3a36793 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_049f6f54c8f12962b745551295dc00457c8396535d5ccf38857eaa75e3a36793->enter($__internal_049f6f54c8f12962b745551295dc00457c8396535d5ccf38857eaa75e3a36793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
   <head>
       <meta charset=\"UTF-8\" />
       <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
                ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "       
       <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
   </head>
   
   <body>
  <div class=\"container\">
    <div id=\"header\" class=\"jumbotron\">
      <h1>Ma plateforme d'annonces</h1>
      <p>
        Ce projet est propulsé par Symfony,
        et construit grâce au MOOC OpenClassrooms et Mohcine Assou.
      </p>
      <p>
        <a class=\"btn btn-primary btn-lg\" href=\"https://openclassrooms.com/courses/developpez-votre-site-web-avec-le-framework-symfony2\">
          Participer au MOOC »
        </a>
      </p>
    </div>

    <div class=\"row\">
      <div id=\"menu\" class=\"col-md-3\">
        <h3>Les annonces</h3>
        <ul class=\"nav nav-pills nav-stacked\">
          ";
        // line 33
        echo "          ";
        // line 34
        echo "        </ul>

        <h4>Dernières annonces</h4>
        ";
        // line 38
        echo "      </div>
      <div id=\"content\" class=\"col-md-9\">
        ";
        // line 40
        $this->displayBlock('body', $context, $blocks);
        // line 42
        echo "      </div>
    </div>

    <hr>

    <footer>
      <p>The sky's the limit © ";
        // line 48
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " and beyond.</p>
    </footer>
  </div>

  ";
        // line 52
        $this->displayBlock('javascripts', $context, $blocks);
        // line 57
        echo "
</body>
</html>";
        
        $__internal_049f6f54c8f12962b745551295dc00457c8396535d5ccf38857eaa75e3a36793->leave($__internal_049f6f54c8f12962b745551295dc00457c8396535d5ccf38857eaa75e3a36793_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_77b70d345367874ed66f46561b4529fa9aa9d430b4d42e76d9e11dfb18a23e00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77b70d345367874ed66f46561b4529fa9aa9d430b4d42e76d9e11dfb18a23e00->enter($__internal_77b70d345367874ed66f46561b4529fa9aa9d430b4d42e76d9e11dfb18a23e00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Authentification";
        
        $__internal_77b70d345367874ed66f46561b4529fa9aa9d430b4d42e76d9e11dfb18a23e00->leave($__internal_77b70d345367874ed66f46561b4529fa9aa9d430b4d42e76d9e11dfb18a23e00_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_933ca7dbe4efa7a8e916bef6422806d10a73741d148c07a09f786a1274344f32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_933ca7dbe4efa7a8e916bef6422806d10a73741d148c07a09f786a1274344f32->enter($__internal_933ca7dbe4efa7a8e916bef6422806d10a73741d148c07a09f786a1274344f32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "                   <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"), "html", null, true);
        echo "\">                           
                ";
        
        $__internal_933ca7dbe4efa7a8e916bef6422806d10a73741d148c07a09f786a1274344f32->leave($__internal_933ca7dbe4efa7a8e916bef6422806d10a73741d148c07a09f786a1274344f32_prof);

    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        $__internal_df28e51a4ab5b8181bac65c3d739ccbb19906c9774a2535b4b9fa1dcb22bcfcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df28e51a4ab5b8181bac65c3d739ccbb19906c9774a2535b4b9fa1dcb22bcfcf->enter($__internal_df28e51a4ab5b8181bac65c3d739ccbb19906c9774a2535b4b9fa1dcb22bcfcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 41
        echo "        ";
        
        $__internal_df28e51a4ab5b8181bac65c3d739ccbb19906c9774a2535b4b9fa1dcb22bcfcf->leave($__internal_df28e51a4ab5b8181bac65c3d739ccbb19906c9774a2535b4b9fa1dcb22bcfcf_prof);

    }

    // line 52
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_eb39240eea954a18522ccfebe32ab33172260eef8de98ff8963ab34da88b4ab1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb39240eea954a18522ccfebe32ab33172260eef8de98ff8963ab34da88b4ab1->enter($__internal_eb39240eea954a18522ccfebe32ab33172260eef8de98ff8963ab34da88b4ab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 53
        echo "    ";
        // line 54
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  ";
        
        $__internal_eb39240eea954a18522ccfebe32ab33172260eef8de98ff8963ab34da88b4ab1->leave($__internal_eb39240eea954a18522ccfebe32ab33172260eef8de98ff8963ab34da88b4ab1_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 54,  152 => 53,  146 => 52,  139 => 41,  133 => 40,  123 => 7,  117 => 6,  105 => 5,  96 => 57,  94 => 52,  87 => 48,  79 => 42,  77 => 40,  73 => 38,  68 => 34,  66 => 33,  41 => 10,  38 => 9,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
   <head>
       <meta charset=\"UTF-8\" />
       <title>{% block title %}Authentification{% endblock %}</title>
                {% block stylesheets %}
                   <link rel=\"stylesheet\" href=\"{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css') }}\">                           
                {% endblock %}
       
       <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
   </head>
   
   <body>
  <div class=\"container\">
    <div id=\"header\" class=\"jumbotron\">
      <h1>Ma plateforme d'annonces</h1>
      <p>
        Ce projet est propulsé par Symfony,
        et construit grâce au MOOC OpenClassrooms et Mohcine Assou.
      </p>
      <p>
        <a class=\"btn btn-primary btn-lg\" href=\"https://openclassrooms.com/courses/developpez-votre-site-web-avec-le-framework-symfony2\">
          Participer au MOOC »
        </a>
      </p>
    </div>

    <div class=\"row\">
      <div id=\"menu\" class=\"col-md-3\">
        <h3>Les annonces</h3>
        <ul class=\"nav nav-pills nav-stacked\">
          {#<li><a href=\"{{ path('oc_backend_home') }}\">Accueil</a></li> #}
          {# <li><a href=\"{{ path('oc_backend_add') }}\">Ajouter une annonce</a></li> #}
        </ul>

        <h4>Dernières annonces</h4>
        {# {{ render(controller(\"OCBackEndBundle:Advert:menu\", {'limit': 9})) }} #}
      </div>
      <div id=\"content\" class=\"col-md-9\">
        {% block body %}
        {% endblock %}
      </div>
    </div>

    <hr>

    <footer>
      <p>The sky's the limit © {{ 'now'|date('Y') }} and beyond.</p>
    </footer>
  </div>

  {% block javascripts %}
    {# Ajoutez ces lignes JavaScript si vous comptez vous servir des fonctionnalités du bootstrap Twitter #}
    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  {% endblock %}

</body>
</html>", "base.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\app\\Resources\\views\\base.html.twig");
    }
}
