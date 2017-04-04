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
            'style' => array($this, 'block_style'),
            'nav' => array($this, 'block_nav'),
            'banner' => array($this, 'block_banner'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bd375e878126c14b2e07b4dd6e0364c2678cf3f6151181e528423d0c4f06e26b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd375e878126c14b2e07b4dd6e0364c2678cf3f6151181e528423d0c4f06e26b->enter($__internal_bd375e878126c14b2e07b4dd6e0364c2678cf3f6151181e528423d0c4f06e26b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Home:base.html.twig"));

        $__internal_8c1f80506702bb7e589e67a37bb475f752e8d737bb6cf1a33ebc3084704dc44a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c1f80506702bb7e589e67a37bb475f752e8d737bb6cf1a33ebc3084704dc44a->enter($__internal_8c1f80506702bb7e589e67a37bb475f752e8d737bb6cf1a33ebc3084704dc44a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Home:base.html.twig"));

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
        $this->displayBlock('style', $context, $blocks);
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
        $this->displayBlock('script', $context, $blocks);
        // line 103
        echo "  </body>
</html>
";
        
        $__internal_bd375e878126c14b2e07b4dd6e0364c2678cf3f6151181e528423d0c4f06e26b->leave($__internal_bd375e878126c14b2e07b4dd6e0364c2678cf3f6151181e528423d0c4f06e26b_prof);

        
        $__internal_8c1f80506702bb7e589e67a37bb475f752e8d737bb6cf1a33ebc3084704dc44a->leave($__internal_8c1f80506702bb7e589e67a37bb475f752e8d737bb6cf1a33ebc3084704dc44a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_de0b166b445a1ee7b553361c9d5d3a9a3bea2adf0d5e44764094dc37a8e7e46b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de0b166b445a1ee7b553361c9d5d3a9a3bea2adf0d5e44764094dc37a8e7e46b->enter($__internal_de0b166b445a1ee7b553361c9d5d3a9a3bea2adf0d5e44764094dc37a8e7e46b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9066e8adc28446178bceed14be2d4a5654ed07b67a22bcf477fe5310978f524f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9066e8adc28446178bceed14be2d4a5654ed07b67a22bcf477fe5310978f524f->enter($__internal_9066e8adc28446178bceed14be2d4a5654ed07b67a22bcf477fe5310978f524f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Bootstrap 101 Template";
        
        $__internal_9066e8adc28446178bceed14be2d4a5654ed07b67a22bcf477fe5310978f524f->leave($__internal_9066e8adc28446178bceed14be2d4a5654ed07b67a22bcf477fe5310978f524f_prof);

        
        $__internal_de0b166b445a1ee7b553361c9d5d3a9a3bea2adf0d5e44764094dc37a8e7e46b->leave($__internal_de0b166b445a1ee7b553361c9d5d3a9a3bea2adf0d5e44764094dc37a8e7e46b_prof);

    }

    // line 9
    public function block_style($context, array $blocks = array())
    {
        $__internal_b1a98bb33381305c67c321027f2ce0b0f8fb7b90d35356aecb38cdafab3bebc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1a98bb33381305c67c321027f2ce0b0f8fb7b90d35356aecb38cdafab3bebc8->enter($__internal_b1a98bb33381305c67c321027f2ce0b0f8fb7b90d35356aecb38cdafab3bebc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_f7d4321b857ddbd1840f3c489f1611d4fb4df9c395818dbd3a7aef87d1a20a4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7d4321b857ddbd1840f3c489f1611d4fb4df9c395818dbd3a7aef87d1a20a4d->enter($__internal_f7d4321b857ddbd1840f3c489f1611d4fb4df9c395818dbd3a7aef87d1a20a4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        
        $__internal_f7d4321b857ddbd1840f3c489f1611d4fb4df9c395818dbd3a7aef87d1a20a4d->leave($__internal_f7d4321b857ddbd1840f3c489f1611d4fb4df9c395818dbd3a7aef87d1a20a4d_prof);

        
        $__internal_b1a98bb33381305c67c321027f2ce0b0f8fb7b90d35356aecb38cdafab3bebc8->leave($__internal_b1a98bb33381305c67c321027f2ce0b0f8fb7b90d35356aecb38cdafab3bebc8_prof);

    }

    // line 13
    public function block_nav($context, array $blocks = array())
    {
        $__internal_26798ad55ffdf7881430576ec1723f4d21b3875eb4766725bfcabdcf36efc550 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26798ad55ffdf7881430576ec1723f4d21b3875eb4766725bfcabdcf36efc550->enter($__internal_26798ad55ffdf7881430576ec1723f4d21b3875eb4766725bfcabdcf36efc550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_28b7aad4c0bd5d2d1c2ac53fe251ff8af0ee51e8e02b67bd084116510730f9d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28b7aad4c0bd5d2d1c2ac53fe251ff8af0ee51e8e02b67bd084116510730f9d8->enter($__internal_28b7aad4c0bd5d2d1c2ac53fe251ff8af0ee51e8e02b67bd084116510730f9d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

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
        
        $__internal_28b7aad4c0bd5d2d1c2ac53fe251ff8af0ee51e8e02b67bd084116510730f9d8->leave($__internal_28b7aad4c0bd5d2d1c2ac53fe251ff8af0ee51e8e02b67bd084116510730f9d8_prof);

        
        $__internal_26798ad55ffdf7881430576ec1723f4d21b3875eb4766725bfcabdcf36efc550->leave($__internal_26798ad55ffdf7881430576ec1723f4d21b3875eb4766725bfcabdcf36efc550_prof);

    }

    // line 58
    public function block_banner($context, array $blocks = array())
    {
        $__internal_b2895821e37473d4267ce01b9352314f46fa26894cf12bf143182c80e0e98364 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2895821e37473d4267ce01b9352314f46fa26894cf12bf143182c80e0e98364->enter($__internal_b2895821e37473d4267ce01b9352314f46fa26894cf12bf143182c80e0e98364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "banner"));

        $__internal_62c9e4f0f9c4677fb49509018268b5d058ef2635fb774970f14148069fcc372b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62c9e4f0f9c4677fb49509018268b5d058ef2635fb774970f14148069fcc372b->enter($__internal_62c9e4f0f9c4677fb49509018268b5d058ef2635fb774970f14148069fcc372b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "banner"));

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
        
        $__internal_62c9e4f0f9c4677fb49509018268b5d058ef2635fb774970f14148069fcc372b->leave($__internal_62c9e4f0f9c4677fb49509018268b5d058ef2635fb774970f14148069fcc372b_prof);

        
        $__internal_b2895821e37473d4267ce01b9352314f46fa26894cf12bf143182c80e0e98364->leave($__internal_b2895821e37473d4267ce01b9352314f46fa26894cf12bf143182c80e0e98364_prof);

    }

    // line 72
    public function block_content($context, array $blocks = array())
    {
        $__internal_17fcbea3e40e99f8f76a3d42a8716a2f01b4411c8282fdf304f16026cc3cd389 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17fcbea3e40e99f8f76a3d42a8716a2f01b4411c8282fdf304f16026cc3cd389->enter($__internal_17fcbea3e40e99f8f76a3d42a8716a2f01b4411c8282fdf304f16026cc3cd389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_b686fdb8ca2ea39e129a010380f7951a56222476fed931f3423ea90f206d8226 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b686fdb8ca2ea39e129a010380f7951a56222476fed931f3423ea90f206d8226->enter($__internal_b686fdb8ca2ea39e129a010380f7951a56222476fed931f3423ea90f206d8226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_b686fdb8ca2ea39e129a010380f7951a56222476fed931f3423ea90f206d8226->leave($__internal_b686fdb8ca2ea39e129a010380f7951a56222476fed931f3423ea90f206d8226_prof);

        
        $__internal_17fcbea3e40e99f8f76a3d42a8716a2f01b4411c8282fdf304f16026cc3cd389->leave($__internal_17fcbea3e40e99f8f76a3d42a8716a2f01b4411c8282fdf304f16026cc3cd389_prof);

    }

    // line 94
    public function block_footer($context, array $blocks = array())
    {
        $__internal_c260fd7ef076f8775c1e173a4a7e50e225bb12bfe4ab355e87e96f86a3aec0da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c260fd7ef076f8775c1e173a4a7e50e225bb12bfe4ab355e87e96f86a3aec0da->enter($__internal_c260fd7ef076f8775c1e173a4a7e50e225bb12bfe4ab355e87e96f86a3aec0da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_e5a33bf2fe5aa44655ae9fee3c09a1fc3195b9d44a28578fabe5bc7c101f27e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5a33bf2fe5aa44655ae9fee3c09a1fc3195b9d44a28578fabe5bc7c101f27e3->enter($__internal_e5a33bf2fe5aa44655ae9fee3c09a1fc3195b9d44a28578fabe5bc7c101f27e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 95
        echo "        <p>&copy; 2016 Company, Inc.</p>
        ";
        
        $__internal_e5a33bf2fe5aa44655ae9fee3c09a1fc3195b9d44a28578fabe5bc7c101f27e3->leave($__internal_e5a33bf2fe5aa44655ae9fee3c09a1fc3195b9d44a28578fabe5bc7c101f27e3_prof);

        
        $__internal_c260fd7ef076f8775c1e173a4a7e50e225bb12bfe4ab355e87e96f86a3aec0da->leave($__internal_c260fd7ef076f8775c1e173a4a7e50e225bb12bfe4ab355e87e96f86a3aec0da_prof);

    }

    // line 102
    public function block_script($context, array $blocks = array())
    {
        $__internal_a38a009ff6647a1c8c046054fc64f1e6c9ba5911924d3de6430dc1f7dabc4d54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a38a009ff6647a1c8c046054fc64f1e6c9ba5911924d3de6430dc1f7dabc4d54->enter($__internal_a38a009ff6647a1c8c046054fc64f1e6c9ba5911924d3de6430dc1f7dabc4d54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        $__internal_5c46549a1e774f80ced9f3c35ccf6956e4acba89cc83077f2a3b15221bc5ba4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c46549a1e774f80ced9f3c35ccf6956e4acba89cc83077f2a3b15221bc5ba4b->enter($__internal_5c46549a1e774f80ced9f3c35ccf6956e4acba89cc83077f2a3b15221bc5ba4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        
        $__internal_5c46549a1e774f80ced9f3c35ccf6956e4acba89cc83077f2a3b15221bc5ba4b->leave($__internal_5c46549a1e774f80ced9f3c35ccf6956e4acba89cc83077f2a3b15221bc5ba4b_prof);

        
        $__internal_a38a009ff6647a1c8c046054fc64f1e6c9ba5911924d3de6430dc1f7dabc4d54->leave($__internal_a38a009ff6647a1c8c046054fc64f1e6c9ba5911924d3de6430dc1f7dabc4d54_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Home:base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  274 => 102,  263 => 95,  254 => 94,  229 => 73,  220 => 72,  202 => 59,  193 => 58,  141 => 14,  132 => 13,  115 => 9,  97 => 7,  85 => 103,  83 => 102,  76 => 97,  74 => 94,  67 => 89,  65 => 72,  59 => 68,  57 => 58,  54 => 57,  52 => 13,  47 => 10,  45 => 9,  40 => 7,  32 => 1,);
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
    <link href=\"assets/css/bootstrap.min.css\" rel=\"stylesheet\">
    {% block style %}{% endblock %}

  </head>
  <body>
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
    <script src=\"assets/js/bootstrap.min.js\"></script>
    {% block script %}{% endblock %}
  </body>
</html>
", "AppBundle:Home:base.html.twig", "/Users/shibaji/Desktop/class/cms/src/AppBundle/Resources/views/Home/base.html.twig");
    }
}
