<?php

/* AppBundle:Home:base.html.twig */
class __TwigTemplate_d626a744a2822a717f7ffadae133a8d1a8584d368e16dc8f42df0a34a21df3ae extends Twig_Template
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
    <link href=\"assets/css/bootstrap.min.css\" rel=\"stylesheet\">
    ";
        // line 9
        $this->displayBlock('styles', $context, $blocks);
        // line 10
        echo "
  </head>
  <body>
    ";
        // line 13
        $this->displayBlock('nav', $context, $blocks);
        // line 57
        echo "
    ";
        // line 58
        $this->displayBlock('banner', $context, $blocks);
        // line 68
        echo "
    <div class=\"container\">
      <!-- Example row of columns -->
      <div class=\"row\">
        ";
        // line 72
        $this->displayBlock('content', $context, $blocks);
        // line 89
        echo "      </div>

      <hr>

      <footer>
        ";
        // line 94
        $this->displayBlock('footer', $context, $blocks);
        // line 97
        echo "      </footer>
    </div> <!-- /container -->

    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
    <script src=\"assets/js/bootstrap.min.js\"></script>
    ";
        // line 102
        $this->displayBlock('scripts', $context, $blocks);
        // line 103
        echo "  </body>
</html>
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "Bootstrap 101 Template";
    }

    // line 9
    public function block_styles($context, array $blocks = array())
    {
    }

    // line 13
    public function block_nav($context, array $blocks = array())
    {
        // line 14
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
    }

    // line 58
    public function block_banner($context, array $blocks = array())
    {
        // line 59
        echo "    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class=\"jumbotron\">
      <div class=\"container\">
        <h1>Hello, world!</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a class=\"btn btn-primary btn-lg\" href=\"#\" role=\"button\">Learn more &raquo;</a></p>
      </div>
    </div>
    ";
    }

    // line 72
    public function block_content($context, array $blocks = array())
    {
        // line 73
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
    }

    // line 94
    public function block_footer($context, array $blocks = array())
    {
        // line 95
        echo "        <p>&copy; 2016 Company, Inc.</p>
        ";
    }

    // line 102
    public function block_scripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "AppBundle:Home:base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  190 => 102,  185 => 95,  182 => 94,  163 => 73,  160 => 72,  148 => 59,  145 => 58,  99 => 14,  96 => 13,  91 => 9,  85 => 7,  79 => 103,  77 => 102,  70 => 97,  68 => 94,  61 => 89,  59 => 72,  53 => 68,  51 => 58,  48 => 57,  46 => 13,  41 => 10,  39 => 9,  34 => 7,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:Home:base.html.twig", "/Users/shibaji/Desktop/class/cms/src/AppBundle/Resources/views/Home/base.html.twig");
    }
}
