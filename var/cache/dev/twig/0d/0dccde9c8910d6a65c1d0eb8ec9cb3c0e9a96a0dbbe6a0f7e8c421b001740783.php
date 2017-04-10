<?php

/* AppBundle:Home:base.html.twig */
class __TwigTemplate_81853dc04a373a9802c477968348c387988535dcd021b18843cf0fae22940ad9 extends Twig_Template
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
        $__internal_6b5d54b70d367a70c69c95be6bebc5b18cb4871f924970901f47c229d09e0867 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b5d54b70d367a70c69c95be6bebc5b18cb4871f924970901f47c229d09e0867->enter($__internal_6b5d54b70d367a70c69c95be6bebc5b18cb4871f924970901f47c229d09e0867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Home:base.html.twig"));

        $__internal_95b95e8049b715078cab20510943aa07134b72131facc45d3ae461794cc5df2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95b95e8049b715078cab20510943aa07134b72131facc45d3ae461794cc5df2f->enter($__internal_95b95e8049b715078cab20510943aa07134b72131facc45d3ae461794cc5df2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Home:base.html.twig"));

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
        
        $__internal_6b5d54b70d367a70c69c95be6bebc5b18cb4871f924970901f47c229d09e0867->leave($__internal_6b5d54b70d367a70c69c95be6bebc5b18cb4871f924970901f47c229d09e0867_prof);

        
        $__internal_95b95e8049b715078cab20510943aa07134b72131facc45d3ae461794cc5df2f->leave($__internal_95b95e8049b715078cab20510943aa07134b72131facc45d3ae461794cc5df2f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_cae6d59042048db25a82bcf5f07bbeb169bf67f9f6a803c179d90abea72eae15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cae6d59042048db25a82bcf5f07bbeb169bf67f9f6a803c179d90abea72eae15->enter($__internal_cae6d59042048db25a82bcf5f07bbeb169bf67f9f6a803c179d90abea72eae15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d73e94a47db053ecdf54963ff4a84697042b100d9e6dc1d3af63ec99bb17dfb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d73e94a47db053ecdf54963ff4a84697042b100d9e6dc1d3af63ec99bb17dfb6->enter($__internal_d73e94a47db053ecdf54963ff4a84697042b100d9e6dc1d3af63ec99bb17dfb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Bootstrap 101 Template";
        
        $__internal_d73e94a47db053ecdf54963ff4a84697042b100d9e6dc1d3af63ec99bb17dfb6->leave($__internal_d73e94a47db053ecdf54963ff4a84697042b100d9e6dc1d3af63ec99bb17dfb6_prof);

        
        $__internal_cae6d59042048db25a82bcf5f07bbeb169bf67f9f6a803c179d90abea72eae15->leave($__internal_cae6d59042048db25a82bcf5f07bbeb169bf67f9f6a803c179d90abea72eae15_prof);

    }

    // line 9
    public function block_styles($context, array $blocks = array())
    {
        $__internal_854b1801b084723e2f2ff41c5c90ad360c9693b4261c0ae01878ae90057b3d47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_854b1801b084723e2f2ff41c5c90ad360c9693b4261c0ae01878ae90057b3d47->enter($__internal_854b1801b084723e2f2ff41c5c90ad360c9693b4261c0ae01878ae90057b3d47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        $__internal_dfea0e8f2e563743bcfbad6a0d8e58c819a1e4d54a07590669a18f33b521d952 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfea0e8f2e563743bcfbad6a0d8e58c819a1e4d54a07590669a18f33b521d952->enter($__internal_dfea0e8f2e563743bcfbad6a0d8e58c819a1e4d54a07590669a18f33b521d952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        
        $__internal_dfea0e8f2e563743bcfbad6a0d8e58c819a1e4d54a07590669a18f33b521d952->leave($__internal_dfea0e8f2e563743bcfbad6a0d8e58c819a1e4d54a07590669a18f33b521d952_prof);

        
        $__internal_854b1801b084723e2f2ff41c5c90ad360c9693b4261c0ae01878ae90057b3d47->leave($__internal_854b1801b084723e2f2ff41c5c90ad360c9693b4261c0ae01878ae90057b3d47_prof);

    }

    // line 14
    public function block_nav($context, array $blocks = array())
    {
        $__internal_410b974b99380146c9af6c867c4d7e8b36808719aa72f61e4ec016131d863f24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_410b974b99380146c9af6c867c4d7e8b36808719aa72f61e4ec016131d863f24->enter($__internal_410b974b99380146c9af6c867c4d7e8b36808719aa72f61e4ec016131d863f24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_d4c31375f7f555d611fd9c54ad9bef5f70e9178abbfeb87d016795bf2f0aeffd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4c31375f7f555d611fd9c54ad9bef5f70e9178abbfeb87d016795bf2f0aeffd->enter($__internal_d4c31375f7f555d611fd9c54ad9bef5f70e9178abbfeb87d016795bf2f0aeffd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

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
        
        $__internal_d4c31375f7f555d611fd9c54ad9bef5f70e9178abbfeb87d016795bf2f0aeffd->leave($__internal_d4c31375f7f555d611fd9c54ad9bef5f70e9178abbfeb87d016795bf2f0aeffd_prof);

        
        $__internal_410b974b99380146c9af6c867c4d7e8b36808719aa72f61e4ec016131d863f24->leave($__internal_410b974b99380146c9af6c867c4d7e8b36808719aa72f61e4ec016131d863f24_prof);

    }

    // line 59
    public function block_banner($context, array $blocks = array())
    {
        $__internal_18a8a2c37c57b3b512746246d31c9c46f046cd2c5c12131b04da0434176c6d5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18a8a2c37c57b3b512746246d31c9c46f046cd2c5c12131b04da0434176c6d5c->enter($__internal_18a8a2c37c57b3b512746246d31c9c46f046cd2c5c12131b04da0434176c6d5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "banner"));

        $__internal_958af9bb8c7790a089f8dab526674d9e9727f0beb05652378784c906157a06a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_958af9bb8c7790a089f8dab526674d9e9727f0beb05652378784c906157a06a4->enter($__internal_958af9bb8c7790a089f8dab526674d9e9727f0beb05652378784c906157a06a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "banner"));

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
        
        $__internal_958af9bb8c7790a089f8dab526674d9e9727f0beb05652378784c906157a06a4->leave($__internal_958af9bb8c7790a089f8dab526674d9e9727f0beb05652378784c906157a06a4_prof);

        
        $__internal_18a8a2c37c57b3b512746246d31c9c46f046cd2c5c12131b04da0434176c6d5c->leave($__internal_18a8a2c37c57b3b512746246d31c9c46f046cd2c5c12131b04da0434176c6d5c_prof);

    }

    // line 73
    public function block_content($context, array $blocks = array())
    {
        $__internal_4571a236221a02f9aafe06f7d7043414ca2e80cec32df08a2e1056f1df26ab16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4571a236221a02f9aafe06f7d7043414ca2e80cec32df08a2e1056f1df26ab16->enter($__internal_4571a236221a02f9aafe06f7d7043414ca2e80cec32df08a2e1056f1df26ab16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_0839d11511c8745128873aba40ee45b48e5ed146912541c3fc3e084443880631 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0839d11511c8745128873aba40ee45b48e5ed146912541c3fc3e084443880631->enter($__internal_0839d11511c8745128873aba40ee45b48e5ed146912541c3fc3e084443880631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_0839d11511c8745128873aba40ee45b48e5ed146912541c3fc3e084443880631->leave($__internal_0839d11511c8745128873aba40ee45b48e5ed146912541c3fc3e084443880631_prof);

        
        $__internal_4571a236221a02f9aafe06f7d7043414ca2e80cec32df08a2e1056f1df26ab16->leave($__internal_4571a236221a02f9aafe06f7d7043414ca2e80cec32df08a2e1056f1df26ab16_prof);

    }

    // line 95
    public function block_footer($context, array $blocks = array())
    {
        $__internal_91f8747421cda7a7c6e3a086fbc119f02a6e3a3b0b927bee8edab2f8dd2f3e9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91f8747421cda7a7c6e3a086fbc119f02a6e3a3b0b927bee8edab2f8dd2f3e9d->enter($__internal_91f8747421cda7a7c6e3a086fbc119f02a6e3a3b0b927bee8edab2f8dd2f3e9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_ee91d93945895f3f60d0a1d01173631746369f1f11080fb76048821550a09240 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee91d93945895f3f60d0a1d01173631746369f1f11080fb76048821550a09240->enter($__internal_ee91d93945895f3f60d0a1d01173631746369f1f11080fb76048821550a09240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 96
        echo "        <p>&copy; 2016 Company, Inc.</p>
        ";
        
        $__internal_ee91d93945895f3f60d0a1d01173631746369f1f11080fb76048821550a09240->leave($__internal_ee91d93945895f3f60d0a1d01173631746369f1f11080fb76048821550a09240_prof);

        
        $__internal_91f8747421cda7a7c6e3a086fbc119f02a6e3a3b0b927bee8edab2f8dd2f3e9d->leave($__internal_91f8747421cda7a7c6e3a086fbc119f02a6e3a3b0b927bee8edab2f8dd2f3e9d_prof);

    }

    // line 103
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_1c4fb695fe0f36129744b2d75f9d80244b2f273cd15beb40bac3fe932471a63d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c4fb695fe0f36129744b2d75f9d80244b2f273cd15beb40bac3fe932471a63d->enter($__internal_1c4fb695fe0f36129744b2d75f9d80244b2f273cd15beb40bac3fe932471a63d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_3269a4f77a17223543ce6f94b3844adb01f3730a298b86a9d6314ca9abbe569c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3269a4f77a17223543ce6f94b3844adb01f3730a298b86a9d6314ca9abbe569c->enter($__internal_3269a4f77a17223543ce6f94b3844adb01f3730a298b86a9d6314ca9abbe569c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        
        $__internal_3269a4f77a17223543ce6f94b3844adb01f3730a298b86a9d6314ca9abbe569c->leave($__internal_3269a4f77a17223543ce6f94b3844adb01f3730a298b86a9d6314ca9abbe569c_prof);

        
        $__internal_1c4fb695fe0f36129744b2d75f9d80244b2f273cd15beb40bac3fe932471a63d->leave($__internal_1c4fb695fe0f36129744b2d75f9d80244b2f273cd15beb40bac3fe932471a63d_prof);

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
", "AppBundle:Home:base.html.twig", "/Users/shibaji/Desktop/class/cms/src/AppBundle/Resources/views/Home/base.html.twig");
    }
}
