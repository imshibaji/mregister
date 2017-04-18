<?php

/* AppBundle:Home:base.html.twig */
class __TwigTemplate_0ee1e71d0c941a8d037c53313f22da0c5083ef5aa42953fe723d2651bdcf32c1 extends Twig_Template
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
        $__internal_d0ee96445760873deb69030e1086ff78d516527777a7dd2e2dbc48a258066dd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0ee96445760873deb69030e1086ff78d516527777a7dd2e2dbc48a258066dd9->enter($__internal_d0ee96445760873deb69030e1086ff78d516527777a7dd2e2dbc48a258066dd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Home:base.html.twig"));

        $__internal_043f08dd8936f27cbe16d29b941498d5211976621482097d4d9337a2d0b23c29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_043f08dd8936f27cbe16d29b941498d5211976621482097d4d9337a2d0b23c29->enter($__internal_043f08dd8936f27cbe16d29b941498d5211976621482097d4d9337a2d0b23c29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Home:base.html.twig"));

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
        
        $__internal_d0ee96445760873deb69030e1086ff78d516527777a7dd2e2dbc48a258066dd9->leave($__internal_d0ee96445760873deb69030e1086ff78d516527777a7dd2e2dbc48a258066dd9_prof);

        
        $__internal_043f08dd8936f27cbe16d29b941498d5211976621482097d4d9337a2d0b23c29->leave($__internal_043f08dd8936f27cbe16d29b941498d5211976621482097d4d9337a2d0b23c29_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_15e73aca6a23119ddb926f3dfdccb6197dcb6745f16e1cc16968a2692907c77b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15e73aca6a23119ddb926f3dfdccb6197dcb6745f16e1cc16968a2692907c77b->enter($__internal_15e73aca6a23119ddb926f3dfdccb6197dcb6745f16e1cc16968a2692907c77b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d889818c75ccdbe4861db4723851f8cf2cab7bd0df715487d06063b25cf38617 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d889818c75ccdbe4861db4723851f8cf2cab7bd0df715487d06063b25cf38617->enter($__internal_d889818c75ccdbe4861db4723851f8cf2cab7bd0df715487d06063b25cf38617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Bootstrap 101 Template";
        
        $__internal_d889818c75ccdbe4861db4723851f8cf2cab7bd0df715487d06063b25cf38617->leave($__internal_d889818c75ccdbe4861db4723851f8cf2cab7bd0df715487d06063b25cf38617_prof);

        
        $__internal_15e73aca6a23119ddb926f3dfdccb6197dcb6745f16e1cc16968a2692907c77b->leave($__internal_15e73aca6a23119ddb926f3dfdccb6197dcb6745f16e1cc16968a2692907c77b_prof);

    }

    // line 9
    public function block_styles($context, array $blocks = array())
    {
        $__internal_6fbcbee0590cddc00d50138ea4c78675313f7b463a98a22ca1cc971a0a8128cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fbcbee0590cddc00d50138ea4c78675313f7b463a98a22ca1cc971a0a8128cf->enter($__internal_6fbcbee0590cddc00d50138ea4c78675313f7b463a98a22ca1cc971a0a8128cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        $__internal_ca37b076391b3860527a5ff3291512590846eaf857d2fa19df5eed928f7724ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca37b076391b3860527a5ff3291512590846eaf857d2fa19df5eed928f7724ab->enter($__internal_ca37b076391b3860527a5ff3291512590846eaf857d2fa19df5eed928f7724ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        
        $__internal_ca37b076391b3860527a5ff3291512590846eaf857d2fa19df5eed928f7724ab->leave($__internal_ca37b076391b3860527a5ff3291512590846eaf857d2fa19df5eed928f7724ab_prof);

        
        $__internal_6fbcbee0590cddc00d50138ea4c78675313f7b463a98a22ca1cc971a0a8128cf->leave($__internal_6fbcbee0590cddc00d50138ea4c78675313f7b463a98a22ca1cc971a0a8128cf_prof);

    }

    // line 14
    public function block_nav($context, array $blocks = array())
    {
        $__internal_fe83e8aeacd16eaf117f54297fdac316245d12fb0e138fafe5eecdbad04b00ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe83e8aeacd16eaf117f54297fdac316245d12fb0e138fafe5eecdbad04b00ba->enter($__internal_fe83e8aeacd16eaf117f54297fdac316245d12fb0e138fafe5eecdbad04b00ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_88b4c37a617a7b211e416e52ddb5845cce3a5b38de6d345aa872a3fa50796891 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88b4c37a617a7b211e416e52ddb5845cce3a5b38de6d345aa872a3fa50796891->enter($__internal_88b4c37a617a7b211e416e52ddb5845cce3a5b38de6d345aa872a3fa50796891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

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
        
        $__internal_88b4c37a617a7b211e416e52ddb5845cce3a5b38de6d345aa872a3fa50796891->leave($__internal_88b4c37a617a7b211e416e52ddb5845cce3a5b38de6d345aa872a3fa50796891_prof);

        
        $__internal_fe83e8aeacd16eaf117f54297fdac316245d12fb0e138fafe5eecdbad04b00ba->leave($__internal_fe83e8aeacd16eaf117f54297fdac316245d12fb0e138fafe5eecdbad04b00ba_prof);

    }

    // line 59
    public function block_banner($context, array $blocks = array())
    {
        $__internal_ea2281eb3096c75fb3c78d72389c55c1b2f6410f323adcfdc62a8107721eb913 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea2281eb3096c75fb3c78d72389c55c1b2f6410f323adcfdc62a8107721eb913->enter($__internal_ea2281eb3096c75fb3c78d72389c55c1b2f6410f323adcfdc62a8107721eb913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "banner"));

        $__internal_1939d0b8bbc51d58751e65115337b1aed791839d1a128e81671fdebef99153fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1939d0b8bbc51d58751e65115337b1aed791839d1a128e81671fdebef99153fa->enter($__internal_1939d0b8bbc51d58751e65115337b1aed791839d1a128e81671fdebef99153fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "banner"));

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
        
        $__internal_1939d0b8bbc51d58751e65115337b1aed791839d1a128e81671fdebef99153fa->leave($__internal_1939d0b8bbc51d58751e65115337b1aed791839d1a128e81671fdebef99153fa_prof);

        
        $__internal_ea2281eb3096c75fb3c78d72389c55c1b2f6410f323adcfdc62a8107721eb913->leave($__internal_ea2281eb3096c75fb3c78d72389c55c1b2f6410f323adcfdc62a8107721eb913_prof);

    }

    // line 73
    public function block_content($context, array $blocks = array())
    {
        $__internal_daa862d7777ac5e5859bf3f0b236ae0c9135c44d6e5a6a63a78d3efe658ef014 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_daa862d7777ac5e5859bf3f0b236ae0c9135c44d6e5a6a63a78d3efe658ef014->enter($__internal_daa862d7777ac5e5859bf3f0b236ae0c9135c44d6e5a6a63a78d3efe658ef014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_faef9d6c23bf89032d221c90abd4c4abcf2d750733963571b8722699e7c655cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faef9d6c23bf89032d221c90abd4c4abcf2d750733963571b8722699e7c655cd->enter($__internal_faef9d6c23bf89032d221c90abd4c4abcf2d750733963571b8722699e7c655cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_faef9d6c23bf89032d221c90abd4c4abcf2d750733963571b8722699e7c655cd->leave($__internal_faef9d6c23bf89032d221c90abd4c4abcf2d750733963571b8722699e7c655cd_prof);

        
        $__internal_daa862d7777ac5e5859bf3f0b236ae0c9135c44d6e5a6a63a78d3efe658ef014->leave($__internal_daa862d7777ac5e5859bf3f0b236ae0c9135c44d6e5a6a63a78d3efe658ef014_prof);

    }

    // line 95
    public function block_footer($context, array $blocks = array())
    {
        $__internal_801146148c5283f9ad410fc94c58e1981570ef71dde0d59aa9c5890f6207b9bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_801146148c5283f9ad410fc94c58e1981570ef71dde0d59aa9c5890f6207b9bf->enter($__internal_801146148c5283f9ad410fc94c58e1981570ef71dde0d59aa9c5890f6207b9bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_23eaf988c5c94dccba349a3682f9f184a7fae779b94601733300ae4308584e87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23eaf988c5c94dccba349a3682f9f184a7fae779b94601733300ae4308584e87->enter($__internal_23eaf988c5c94dccba349a3682f9f184a7fae779b94601733300ae4308584e87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 96
        echo "        <p>&copy; 2016 Company, Inc.</p>
        ";
        
        $__internal_23eaf988c5c94dccba349a3682f9f184a7fae779b94601733300ae4308584e87->leave($__internal_23eaf988c5c94dccba349a3682f9f184a7fae779b94601733300ae4308584e87_prof);

        
        $__internal_801146148c5283f9ad410fc94c58e1981570ef71dde0d59aa9c5890f6207b9bf->leave($__internal_801146148c5283f9ad410fc94c58e1981570ef71dde0d59aa9c5890f6207b9bf_prof);

    }

    // line 103
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_391e53889902db217acb16b22c70b4f8096aec241447be29aa73bee6f30a2c7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_391e53889902db217acb16b22c70b4f8096aec241447be29aa73bee6f30a2c7e->enter($__internal_391e53889902db217acb16b22c70b4f8096aec241447be29aa73bee6f30a2c7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_7334b128dd2b02a0d8c437031046964dfc01da76db8daabf1f500580c5d4bc37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7334b128dd2b02a0d8c437031046964dfc01da76db8daabf1f500580c5d4bc37->enter($__internal_7334b128dd2b02a0d8c437031046964dfc01da76db8daabf1f500580c5d4bc37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        
        $__internal_7334b128dd2b02a0d8c437031046964dfc01da76db8daabf1f500580c5d4bc37->leave($__internal_7334b128dd2b02a0d8c437031046964dfc01da76db8daabf1f500580c5d4bc37_prof);

        
        $__internal_391e53889902db217acb16b22c70b4f8096aec241447be29aa73bee6f30a2c7e->leave($__internal_391e53889902db217acb16b22c70b4f8096aec241447be29aa73bee6f30a2c7e_prof);

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
        return array (  284 => 103,  273 => 96,  264 => 95,  239 => 74,  230 => 73,  212 => 60,  203 => 59,  151 => 15,  142 => 14,  125 => 9,  107 => 7,  95 => 104,  93 => 103,  89 => 102,  83 => 98,  81 => 95,  74 => 90,  72 => 73,  66 => 69,  64 => 59,  61 => 58,  59 => 14,  55 => 13,  50 => 10,  48 => 9,  44 => 8,  40 => 7,  32 => 1,);
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
", "AppBundle:Home:base.html.twig", "/Users/shibaji/Documents/GitHub/mregister/src/AppBundle/Resources/views/Home/base.html.twig");
    }
}
