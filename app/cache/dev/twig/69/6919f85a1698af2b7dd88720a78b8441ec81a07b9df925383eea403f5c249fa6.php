<?php

/* AppBundle:Registration:base1.html.twig */
class __TwigTemplate_ee22fcf507781041c791a23e3e6f77f85e2ea624307dea9641866c8b43cfb632 extends Twig_Template
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
        $__internal_f273cabfd3a59d815dc6c2ac4e51cbc6f5fd7e7eaae57e882fc812e1a163b6e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f273cabfd3a59d815dc6c2ac4e51cbc6f5fd7e7eaae57e882fc812e1a163b6e5->enter($__internal_f273cabfd3a59d815dc6c2ac4e51cbc6f5fd7e7eaae57e882fc812e1a163b6e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Registration:base1.html.twig"));

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
        
        $__internal_f273cabfd3a59d815dc6c2ac4e51cbc6f5fd7e7eaae57e882fc812e1a163b6e5->leave($__internal_f273cabfd3a59d815dc6c2ac4e51cbc6f5fd7e7eaae57e882fc812e1a163b6e5_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_6e92bc922c8af97d0fd21a8935124bef5cf97c7fd9cbbd208ae243ee071bd605 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e92bc922c8af97d0fd21a8935124bef5cf97c7fd9cbbd208ae243ee071bd605->enter($__internal_6e92bc922c8af97d0fd21a8935124bef5cf97c7fd9cbbd208ae243ee071bd605_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6e92bc922c8af97d0fd21a8935124bef5cf97c7fd9cbbd208ae243ee071bd605->leave($__internal_6e92bc922c8af97d0fd21a8935124bef5cf97c7fd9cbbd208ae243ee071bd605_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_35eae33fa15cc97b3604128f3c35af02b2848b2a5f38e2c45cc0fc5af458e638 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35eae33fa15cc97b3604128f3c35af02b2848b2a5f38e2c45cc0fc5af458e638->enter($__internal_35eae33fa15cc97b3604128f3c35af02b2848b2a5f38e2c45cc0fc5af458e638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_35eae33fa15cc97b3604128f3c35af02b2848b2a5f38e2c45cc0fc5af458e638->leave($__internal_35eae33fa15cc97b3604128f3c35af02b2848b2a5f38e2c45cc0fc5af458e638_prof);

    }

    // line 29
    public function block_body($context, array $blocks = array())
    {
        $__internal_c4ec161e0280a244da3b0aea57fac2b48092094b9c1dce9e2823320517fcb29f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4ec161e0280a244da3b0aea57fac2b48092094b9c1dce9e2823320517fcb29f->enter($__internal_c4ec161e0280a244da3b0aea57fac2b48092094b9c1dce9e2823320517fcb29f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c4ec161e0280a244da3b0aea57fac2b48092094b9c1dce9e2823320517fcb29f->leave($__internal_c4ec161e0280a244da3b0aea57fac2b48092094b9c1dce9e2823320517fcb29f_prof);

    }

    // line 43
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_057cdccc8a143fd376d26b2d1f7732c2da073fe8f363a72c53de1e4eae1eb6e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_057cdccc8a143fd376d26b2d1f7732c2da073fe8f363a72c53de1e4eae1eb6e9->enter($__internal_057cdccc8a143fd376d26b2d1f7732c2da073fe8f363a72c53de1e4eae1eb6e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_057cdccc8a143fd376d26b2d1f7732c2da073fe8f363a72c53de1e4eae1eb6e9->leave($__internal_057cdccc8a143fd376d26b2d1f7732c2da073fe8f363a72c53de1e4eae1eb6e9_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Registration:base1.html.twig";
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
", "AppBundle:Registration:base1.html.twig", "D:\\wamp64\\www\\SiteSymfony\\BundleFOS\\src\\AppBundle/Resources/views/Registration/base1.html.twig");
    }
}
