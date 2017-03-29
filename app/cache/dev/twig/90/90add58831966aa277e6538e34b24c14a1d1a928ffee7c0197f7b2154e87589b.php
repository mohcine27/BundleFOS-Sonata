<?php

/* base.html.twig */
class __TwigTemplate_48c13053b4f46aa7f6b545807188876e2ad08de8c27e27110019129e0bfecdf4 extends Twig_Template
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
        $__internal_01d5ed1cef8c6ef3bea2aab5f964073fea200816803335efcec3aa650044c5e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01d5ed1cef8c6ef3bea2aab5f964073fea200816803335efcec3aa650044c5e1->enter($__internal_01d5ed1cef8c6ef3bea2aab5f964073fea200816803335efcec3aa650044c5e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_01d5ed1cef8c6ef3bea2aab5f964073fea200816803335efcec3aa650044c5e1->leave($__internal_01d5ed1cef8c6ef3bea2aab5f964073fea200816803335efcec3aa650044c5e1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f911630307e7c5742cc34bcc15d77af6e3f50c9a3d74eb4a4300884367014667 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f911630307e7c5742cc34bcc15d77af6e3f50c9a3d74eb4a4300884367014667->enter($__internal_f911630307e7c5742cc34bcc15d77af6e3f50c9a3d74eb4a4300884367014667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Authentification";
        
        $__internal_f911630307e7c5742cc34bcc15d77af6e3f50c9a3d74eb4a4300884367014667->leave($__internal_f911630307e7c5742cc34bcc15d77af6e3f50c9a3d74eb4a4300884367014667_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d0e9e5fb127a3c3c0d34dde065fe801b4c10ba9a2d01d4bbe9cc9b571102256e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0e9e5fb127a3c3c0d34dde065fe801b4c10ba9a2d01d4bbe9cc9b571102256e->enter($__internal_d0e9e5fb127a3c3c0d34dde065fe801b4c10ba9a2d01d4bbe9cc9b571102256e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "                   <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"), "html", null, true);
        echo "\">                           
                ";
        
        $__internal_d0e9e5fb127a3c3c0d34dde065fe801b4c10ba9a2d01d4bbe9cc9b571102256e->leave($__internal_d0e9e5fb127a3c3c0d34dde065fe801b4c10ba9a2d01d4bbe9cc9b571102256e_prof);

    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        $__internal_2dda89cbf99978a2261bbb35f4f122ddaef673b3d6350f89fefc641d538bda78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dda89cbf99978a2261bbb35f4f122ddaef673b3d6350f89fefc641d538bda78->enter($__internal_2dda89cbf99978a2261bbb35f4f122ddaef673b3d6350f89fefc641d538bda78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 41
        echo "        ";
        
        $__internal_2dda89cbf99978a2261bbb35f4f122ddaef673b3d6350f89fefc641d538bda78->leave($__internal_2dda89cbf99978a2261bbb35f4f122ddaef673b3d6350f89fefc641d538bda78_prof);

    }

    // line 52
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c37cf230fdc056274ba2e723b3415e028bb3e8184be4936c091d31565bbcd4f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c37cf230fdc056274ba2e723b3415e028bb3e8184be4936c091d31565bbcd4f2->enter($__internal_c37cf230fdc056274ba2e723b3415e028bb3e8184be4936c091d31565bbcd4f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 53
        echo "    ";
        // line 54
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  ";
        
        $__internal_c37cf230fdc056274ba2e723b3415e028bb3e8184be4936c091d31565bbcd4f2->leave($__internal_c37cf230fdc056274ba2e723b3415e028bb3e8184be4936c091d31565bbcd4f2_prof);

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
