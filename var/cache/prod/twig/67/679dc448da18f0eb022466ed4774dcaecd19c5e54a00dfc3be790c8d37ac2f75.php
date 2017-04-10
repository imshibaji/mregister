<?php

/* AppBundle:Home:base.html.twig */
class __TwigTemplate_c800d81c920e94a4f116d66d6c8629a25c42009e896636789c2863782eb889eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'styles' => array($this, 'block_styles'),
            'nav' => array($this, 'block_nav'),
            'banner' => array($this, 'block_banner'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1d7894bea2222b3bfe427b923540d17c1702aa75e65b576bf151cc39d6fe84c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d7894bea2222b3bfe427b923540d17c1702aa75e65b576bf151cc39d6fe84c3->enter($__internal_1d7894bea2222b3bfe427b923540d17c1702aa75e65b576bf151cc39d6fe84c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Home:base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["basepath"]) ? $context["basepath"] : $this->getContext($context, "basepath")), "html", null, true);
        echo "/assets/css/bootstrap.min.css\" rel=\"stylesheet\">
    ";
        // line 9
        $this->displayBlock('styles', $context, $blocks);
        // line 10
        echo "
  </head>
  <body>
    ";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["basepath"]) ? $context["basepath"] : $this->getContext($context, "basepath")), "html", null, true);
        echo "
    ";
        // line 14
        $this->displayBlock('nav', $context, $blocks);
        // line 58
        echo "
    ";
        // line 59
        $this->displayBlock('banner', $context, $blocks);
        // line 69
        echo "
    <div class=\"container\">
      <!-- Example row of columns -->
      <div class=\"row\">
        ";
        // line 73
        $this->displayBlock('content', $context, $blocks);
        // line 90
        echo "      </div>

      <hr>

      <footer>
        ";
        // line 95
        $this->displayBlock('footer', $context, $blocks);
        // line 98
        echo "      </footer>
    </div> <!-- /container -->

    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
    <script src=\"";
        // line 102
        echo twig_escape_filter($this->env, (isset($context["basepath"]) ? $context["basepath"] : $this->getContext($context, "basepath")), "html", null, true);
        echo "/assets/js/bootstrap.min.js\"></script>
    ";
        // line 103
        $this->displayBlock('scripts', $context, $blocks);
        // line 104
        echo "  </body>
</html>
";
        
        $__internal_1d7894bea2222b3bfe427b923540d17c1702aa75e65b576bf151cc39d6fe84c3->leave($__internal_1d7894bea2222b3bfe427b923540d17c1702aa75e65b576bf151cc39d6fe84c3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e2552ad618ccd51aea20b5b60e6da32ccd54f71fb3290d8e577e105b024e32b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2552ad618ccd51aea20b5b60e6da32ccd54f71fb3290d8e577e105b024e32b1->enter($__internal_e2552ad618ccd51aea20b5b60e6da32ccd54f71fb3290d8e577e105b024e32b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Bootstrap 101 Template";
        
        $__internal_e2552ad618ccd51aea20b5b60e6da32ccd54f71fb3290d8e577e105b024e32b1->leave($__internal_e2552ad618ccd51aea20b5b60e6da32ccd54f71fb3290d8e577e105b024e32b1_prof);

    }

    // line 9
    public function block_styles($context, array $blocks = array())
    {
        $__internal_a7ae46f39ce6dda366c6f38ba222e39567e94e68624a93578a1d18906231bc36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7ae46f39ce6dda366c6f38ba222e39567e94e68624a93578a1d18906231bc36->enter($__internal_a7ae46f39ce6dda366c6f38ba222e39567e94e68624a93578a1d18906231bc36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        
        $__internal_a7ae46f39ce6dda366c6f38ba222e39567e94e68624a93578a1d18906231bc36->leave($__internal_a7ae46f39ce6dda366c6f38ba222e39567e94e68624a93578a1d18906231bc36_prof);

    }

    // line 14
    public function block_nav($context, array $blocks = array())
    {
        $__internal_d3cd1f67ea17f0f757b74a720d826688d535cb781c24250ebb90868e525401b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3cd1f67ea17f0f757b74a720d826688d535cb781c24250ebb90868e525401b5->enter($__internal_d3cd1f67ea17f0f757b74a720d826688d535cb781c24250ebb90868e525401b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 15
        echo "    <nav class=\"navbar navbar-inverse navbar-fixed-top\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"./\">Demo</a>
        </div>
        <div id=\"navbar\" class=\"navbar-collapse collapse\">
        <ul class=\"nav navbar-nav\">
          <li class=\"active\"><a href=\"./\">Home <span class=\"sr-only\">(current)</span></a></li>
          <li><a href=\"./about\">About Us</a></li>
          <li class=\"dropdown\">
            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Gallery <span class=\"caret\"></span></a>
            <ul class=\"dropdown-menu\">
              <li><a href=\"#\">Photos</a></li>
              <li><a href=\"#\">Audios</a></li>
              <li><a href=\"#\">Videos</a></li>
              <li role=\"separator\" class=\"divider\"></li>
              <li><a href=\"#\">Sponsored</a></li>
              <li role=\"separator\" class=\"divider\"></li>
              <li><a href=\"#\">Premium</a></li>
            </ul>
          </li>
          <li><a href=\"./contact\">Contact Us</a></li>
        </ul>

          <form class=\"navbar-form navbar-right\">
            <div class=\"form-group\">
              <input type=\"text\" placeholder=\"Email\" class=\"form-control\">
            </div>
            <div class=\"form-group\">
              <input type=\"password\" placeholder=\"Password\" class=\"form-control\">
            </div>
            <button type=\"submit\" class=\"btn btn-success\">Sign in</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
    ";
        
        $__internal_d3cd1f67ea17f0f757b74a720d826688d535cb781c24250ebb90868e525401b5->leave($__internal_d3cd1f67ea17f0f757b74a720d826688d535cb781c24250ebb90868e525401b5_prof);

    }

    // line 59
    public function block_banner($context, array $blocks = array())
    {
        $__internal_e8eaf2afd306406c8dd325edc564f5a4e8d22bca8d6ea68845bcda8ee464a70d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8eaf2afd306406c8dd325edc564f5a4e8d22bca8d6ea68845bcda8ee464a70d->enter($__internal_e8eaf2afd306406c8dd325edc564f5a4e8d22bca8d6ea68845bcda8ee464a70d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "banner"));

        // line 60
        echo "    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class=\"jumbotron\">
      <div class=\"container\">
        <h1>Hello, world!</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a class=\"btn btn-primary btn-lg\" href=\"#\" role=\"button\">Learn more &raquo;</a></p>
      </div>
    </div>
    ";
        
        $__internal_e8eaf2afd306406c8dd325edc564f5a4e8d22bca8d6ea68845bcda8ee464a70d->leave($__internal_e8eaf2afd306406c8dd325edc564f5a4e8d22bca8d6ea68845bcda8ee464a70d_prof);

    }

    // line 73
    public function block_content($context, array $blocks = array())
    {
        $__internal_d65202e9d1115d048cada27ac3605a837f4709dbe9269c98aaf5b6a0fcefcffb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d65202e9d1115d048cada27ac3605a837f4709dbe9269c98aaf5b6a0fcefcffb->enter($__internal_d65202e9d1115d048cada27ac3605a837f4709dbe9269c98aaf5b6a0fcefcffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 74
        echo "        <div class=\"col-md-4\">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">View details &raquo;</a></p>
        </div>
        <div class=\"col-md-4\">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">View details &raquo;</a></p>
       </div>
        <div class=\"col-md-4\">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">View details &raquo;</a></p>
        </div>
        ";
        
        $__internal_d65202e9d1115d048cada27ac3605a837f4709dbe9269c98aaf5b6a0fcefcffb->leave($__internal_d65202e9d1115d048cada27ac3605a837f4709dbe9269c98aaf5b6a0fcefcffb_prof);

    }

    // line 95
    public function block_footer($context, array $blocks = array())
    {
        $__internal_9be381cc0633aa70bbea971d656fa7c38ef6e7d89b48e4b3fdd5208d4401fa74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9be381cc0633aa70bbea971d656fa7c38ef6e7d89b48e4b3fdd5208d4401fa74->enter($__internal_9be381cc0633aa70bbea971d656fa7c38ef6e7d89b48e4b3fdd5208d4401fa74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 96
        echo "        <p>&copy; 2016 Company, Inc.</p>
        ";
        
        $__internal_9be381cc0633aa70bbea971d656fa7c38ef6e7d89b48e4b3fdd5208d4401fa74->leave($__internal_9be381cc0633aa70bbea971d656fa7c38ef6e7d89b48e4b3fdd5208d4401fa74_prof);

    }

    // line 103
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_239df3cabe60826947f596445673b951f8efc681b1a9a0f26e1f78269ddec011 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_239df3cabe60826947f596445673b951f8efc681b1a9a0f26e1f78269ddec011->enter($__internal_239df3cabe60826947f596445673b951f8efc681b1a9a0f26e1f78269ddec011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        
        $__internal_239df3cabe60826947f596445673b951f8efc681b1a9a0f26e1f78269ddec011->leave($__internal_239df3cabe60826947f596445673b951f8efc681b1a9a0f26e1f78269ddec011_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Home:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 103,  234 => 96,  228 => 95,  206 => 74,  200 => 73,  185 => 60,  179 => 59,  130 => 15,  124 => 14,  113 => 9,  101 => 7,  92 => 104,  90 => 103,  86 => 102,  80 => 98,  78 => 95,  71 => 90,  69 => 73,  63 => 69,  61 => 59,  58 => 58,  56 => 14,  52 => 13,  47 => 10,  45 => 9,  41 => 8,  37 => 7,  29 => 1,);
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
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>{% block title %}Bootstrap 101 Template{% endblock %}</title>
    <link href=\"{{ basepath }}/assets/css/bootstrap.min.css\" rel=\"stylesheet\">
    {% block styles %}{% endblock %}

  </head>
  <body>
    {{ basepath }}
    {% block nav %}
    <nav class=\"navbar navbar-inverse navbar-fixed-top\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"./\">Demo</a>
        </div>
        <div id=\"navbar\" class=\"navbar-collapse collapse\">
        <ul class=\"nav navbar-nav\">
          <li class=\"active\"><a href=\"./\">Home <span class=\"sr-only\">(current)</span></a></li>
          <li><a href=\"./about\">About Us</a></li>
          <li class=\"dropdown\">
            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Gallery <span class=\"caret\"></span></a>
            <ul class=\"dropdown-menu\">
              <li><a href=\"#\">Photos</a></li>
              <li><a href=\"#\">Audios</a></li>
              <li><a href=\"#\">Videos</a></li>
              <li role=\"separator\" class=\"divider\"></li>
              <li><a href=\"#\">Sponsored</a></li>
              <li role=\"separator\" class=\"divider\"></li>
              <li><a href=\"#\">Premium</a></li>
            </ul>
          </li>
          <li><a href=\"./contact\">Contact Us</a></li>
        </ul>

          <form class=\"navbar-form navbar-right\">
            <div class=\"form-group\">
              <input type=\"text\" placeholder=\"Email\" class=\"form-control\">
            </div>
            <div class=\"form-group\">
              <input type=\"password\" placeholder=\"Password\" class=\"form-control\">
            </div>
            <button type=\"submit\" class=\"btn btn-success\">Sign in</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
    {% endblock %}

    {% block banner %}
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class=\"jumbotron\">
      <div class=\"container\">
        <h1>Hello, world!</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a class=\"btn btn-primary btn-lg\" href=\"#\" role=\"button\">Learn more &raquo;</a></p>
      </div>
    </div>
    {% endblock %}

    <div class=\"container\">
      <!-- Example row of columns -->
      <div class=\"row\">
        {% block content %}
        <div class=\"col-md-4\">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">View details &raquo;</a></p>
        </div>
        <div class=\"col-md-4\">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">View details &raquo;</a></p>
       </div>
        <div class=\"col-md-4\">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">View details &raquo;</a></p>
        </div>
        {% endblock %}
      </div>

      <hr>

      <footer>
        {% block footer %}
        <p>&copy; 2016 Company, Inc.</p>
        {% endblock %}
      </footer>
    </div> <!-- /container -->

    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
    <script src=\"{{ basepath }}/assets/js/bootstrap.min.js\"></script>
    {% block scripts %}{% endblock %}
  </body>
</html>
", "AppBundle:Home:base.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/cms1/src/AppBundle/Resources/views/Home/base.html.twig");
    }
}
