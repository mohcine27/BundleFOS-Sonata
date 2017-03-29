<?php

/* @App/Registration/base1.html.twig */
class __TwigTemplate_fd2849f1b43d6065e33a67a7a63692e8aa7b351ca5ed7b4fe1771f0215398120 extends Twig_Template
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
        $__internal_cea2585948cac79db7392cf9c4613e81edafaf9d22002618df73662a16bca878 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cea2585948cac79db7392cf9c4613e81edafaf9d22002618df73662a16bca878->enter($__internal_cea2585948cac79db7392cf9c4613e81edafaf9d22002618df73662a16bca878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Registration/base1.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\"/>
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1.0\"/>
  <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

  <!-- CSS  -->
  <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
  <link href=\"/css/materialize.min.css\" type=\"text/css\" rel=\"stylesheet\" media=\"screen,projection\"/>
  <link href=\"/css/styles.css\" type=\"text/css\" rel=\"stylesheet\" media=\"screen,projection\"/>
  ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "  <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>
  <nav class=\"\" role=\"navigation\">
    <div class=\"nav-wrapper container\"><a id=\"logo-container\" href=\"#\" class=\"brand-logo\">Logo</a>
      <ul class=\"right hide-on-med-and-down\">
        <li><a href=\"/register\">Register</a></li>
      </ul>

      <ul id=\"nav-mobile\" class=\"side-nav\">
        <li><a href=\"/register\">Register</a></li>
      </ul>
      <a href=\"#\" data-activates=\"nav-mobile\" class=\"button-collapse\"><i class=\"material-icons\">menu</i></a>
    </div>
  </nav>
  <div class=\"container\">
  ";
        // line 29
        $this->displayBlock('body', $context, $blocks);
        // line 30
        echo "  </div>
  <footer class=\"page-footer\">
    <div class=\"footer-copyright\">
      <div class=\"container\">
      Made by <a class=\"orange-text text-lighten-3\" href=\"http://materializecss.com\">Materialize</a>
      </div>
    </div>
  </footer>

  <!--  Scripts-->
  <script src=\"https://code.jquery.com/jquery-2.1.1.min.js\"></script>
  <script src=\"/js/materialize.js\"></script>
  <script src=\"/js/script.js\"></script>
  ";
        // line 43
        $this->displayBlock('javascripts', $context, $blocks);
        // line 44
        echo "  </body>
</html>
";
        
        $__internal_cea2585948cac79db7392cf9c4613e81edafaf9d22002618df73662a16bca878->leave($__internal_cea2585948cac79db7392cf9c4613e81edafaf9d22002618df73662a16bca878_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_b94e2033158fabc7176e8614970ebc44049b41babe40207935d49643003558b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b94e2033158fabc7176e8614970ebc44049b41babe40207935d49643003558b4->enter($__internal_b94e2033158fabc7176e8614970ebc44049b41babe40207935d49643003558b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b94e2033158fabc7176e8614970ebc44049b41babe40207935d49643003558b4->leave($__internal_b94e2033158fabc7176e8614970ebc44049b41babe40207935d49643003558b4_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_89580dd1cf13db7a850a0992b50c00f9200593e66089f9337a17966ab8576548 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89580dd1cf13db7a850a0992b50c00f9200593e66089f9337a17966ab8576548->enter($__internal_89580dd1cf13db7a850a0992b50c00f9200593e66089f9337a17966ab8576548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_89580dd1cf13db7a850a0992b50c00f9200593e66089f9337a17966ab8576548->leave($__internal_89580dd1cf13db7a850a0992b50c00f9200593e66089f9337a17966ab8576548_prof);

    }

    // line 29
    public function block_body($context, array $blocks = array())
    {
        $__internal_f4f78e70a9d71c79e4e77aa68f697895af88d1a174469b97bd62238095664c1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4f78e70a9d71c79e4e77aa68f697895af88d1a174469b97bd62238095664c1e->enter($__internal_f4f78e70a9d71c79e4e77aa68f697895af88d1a174469b97bd62238095664c1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f4f78e70a9d71c79e4e77aa68f697895af88d1a174469b97bd62238095664c1e->leave($__internal_f4f78e70a9d71c79e4e77aa68f697895af88d1a174469b97bd62238095664c1e_prof);

    }

    // line 43
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7f610e39dcc7800c0cc65dafc7a97d7009a2cba9765565c1a73c7ae978c30e9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f610e39dcc7800c0cc65dafc7a97d7009a2cba9765565c1a73c7ae978c30e9a->enter($__internal_7f610e39dcc7800c0cc65dafc7a97d7009a2cba9765565c1a73c7ae978c30e9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7f610e39dcc7800c0cc65dafc7a97d7009a2cba9765565c1a73c7ae978c30e9a->leave($__internal_7f610e39dcc7800c0cc65dafc7a97d7009a2cba9765565c1a73c7ae978c30e9a_prof);

    }

    public function getTemplateName()
    {
        return "@App/Registration/base1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 43,  115 => 29,  104 => 12,  92 => 6,  83 => 44,  81 => 43,  66 => 30,  64 => 29,  44 => 13,  42 => 12,  33 => 6,  26 => 1,);
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
<html lang=\"en\">
<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\"/>
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1.0\"/>
  <title>{% block title %}Welcome!{% endblock %}</title>

  <!-- CSS  -->
  <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
  <link href=\"/css/materialize.min.css\" type=\"text/css\" rel=\"stylesheet\" media=\"screen,projection\"/>
  <link href=\"/css/styles.css\" type=\"text/css\" rel=\"stylesheet\" media=\"screen,projection\"/>
  {% block stylesheets %}{% endblock %}
  <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
</head>
<body>
  <nav class=\"\" role=\"navigation\">
    <div class=\"nav-wrapper container\"><a id=\"logo-container\" href=\"#\" class=\"brand-logo\">Logo</a>
      <ul class=\"right hide-on-med-and-down\">
        <li><a href=\"/register\">Register</a></li>
      </ul>

      <ul id=\"nav-mobile\" class=\"side-nav\">
        <li><a href=\"/register\">Register</a></li>
      </ul>
      <a href=\"#\" data-activates=\"nav-mobile\" class=\"button-collapse\"><i class=\"material-icons\">menu</i></a>
    </div>
  </nav>
  <div class=\"container\">
  {% block body %}{% endblock %}
  </div>
  <footer class=\"page-footer\">
    <div class=\"footer-copyright\">
      <div class=\"container\">
      Made by <a class=\"orange-text text-lighten-3\" href=\"http://materializecss.com\">Materialize</a>
      </div>
    </div>
  </footer>

  <!--  Scripts-->
  <script src=\"https://code.jquery.com/jquery-2.1.1.min.js\"></script>
  <script src=\"/js/materialize.js\"></script>
  <script src=\"/js/script.js\"></script>
  {% block javascripts %}{% endblock %}
  </body>
</html>
", "@App/Registration/base1.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\src\\AppBundle\\Resources\\views\\Registration\\base1.html.twig");
    }
}
