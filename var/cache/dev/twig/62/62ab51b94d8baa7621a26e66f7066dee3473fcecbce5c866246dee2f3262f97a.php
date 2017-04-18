<?php

/* AppBundle:Home:index.html.twig */
class __TwigTemplate_6f29e4993089666c8fbbb044ec2566a37501fa8ccaf95e1f27e1b856aabd7985 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:Home:base.html.twig", "AppBundle:Home:index.html.twig", 1);
        $this->blocks = array(
            'styles' => array($this, 'block_styles'),
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle:Home:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2b3a319a57d5c0d8b2525b9e92581381174bbdbd947204a2e76bc2036dfc001b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b3a319a57d5c0d8b2525b9e92581381174bbdbd947204a2e76bc2036dfc001b->enter($__internal_2b3a319a57d5c0d8b2525b9e92581381174bbdbd947204a2e76bc2036dfc001b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Home:index.html.twig"));

        $__internal_33248746db04edf360a00e90164fc7abdf7df8a858430a92b8244af81209b7f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33248746db04edf360a00e90164fc7abdf7df8a858430a92b8244af81209b7f5->enter($__internal_33248746db04edf360a00e90164fc7abdf7df8a858430a92b8244af81209b7f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Home:index.html.twig"));

        // line 4
        $context["name"] = "Shibaji";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b3a319a57d5c0d8b2525b9e92581381174bbdbd947204a2e76bc2036dfc001b->leave($__internal_2b3a319a57d5c0d8b2525b9e92581381174bbdbd947204a2e76bc2036dfc001b_prof);

        
        $__internal_33248746db04edf360a00e90164fc7abdf7df8a858430a92b8244af81209b7f5->leave($__internal_33248746db04edf360a00e90164fc7abdf7df8a858430a92b8244af81209b7f5_prof);

    }

    // line 8
    public function block_styles($context, array $blocks = array())
    {
        $__internal_c160277815cd8f8d98b4731220148e12d809b16c40c324ff955592d5cd7c5ab4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c160277815cd8f8d98b4731220148e12d809b16c40c324ff955592d5cd7c5ab4->enter($__internal_c160277815cd8f8d98b4731220148e12d809b16c40c324ff955592d5cd7c5ab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        $__internal_22671bd46ed003e68437fd1302ac80e9949737472dfa86bb93b81c68fbd300e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22671bd46ed003e68437fd1302ac80e9949737472dfa86bb93b81c68fbd300e3->enter($__internal_22671bd46ed003e68437fd1302ac80e9949737472dfa86bb93b81c68fbd300e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        // line 9
        echo "<link href=\"";
        echo twig_escape_filter($this->env, (isset($context["basepath"]) ? $context["basepath"] : $this->getContext($context, "basepath")), "html", null, true);
        echo "/assets/css/frontend.css\" rel=\"stylesheet\" />
";
        
        $__internal_22671bd46ed003e68437fd1302ac80e9949737472dfa86bb93b81c68fbd300e3->leave($__internal_22671bd46ed003e68437fd1302ac80e9949737472dfa86bb93b81c68fbd300e3_prof);

        
        $__internal_c160277815cd8f8d98b4731220148e12d809b16c40c324ff955592d5cd7c5ab4->leave($__internal_c160277815cd8f8d98b4731220148e12d809b16c40c324ff955592d5cd7c5ab4_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_751d593db4ab26075c4bb39bbbd27da59af16696ecabae87d5321f0ad99cbffb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_751d593db4ab26075c4bb39bbbd27da59af16696ecabae87d5321f0ad99cbffb->enter($__internal_751d593db4ab26075c4bb39bbbd27da59af16696ecabae87d5321f0ad99cbffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c0663eb1bb9a65e08772af73285602adcbcc1d43c8735976fc668a95aad7e26b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0663eb1bb9a65e08772af73285602adcbcc1d43c8735976fc668a95aad7e26b->enter($__internal_c0663eb1bb9a65e08772af73285602adcbcc1d43c8735976fc668a95aad7e26b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Home Page";
        
        $__internal_c0663eb1bb9a65e08772af73285602adcbcc1d43c8735976fc668a95aad7e26b->leave($__internal_c0663eb1bb9a65e08772af73285602adcbcc1d43c8735976fc668a95aad7e26b_prof);

        
        $__internal_751d593db4ab26075c4bb39bbbd27da59af16696ecabae87d5321f0ad99cbffb->leave($__internal_751d593db4ab26075c4bb39bbbd27da59af16696ecabae87d5321f0ad99cbffb_prof);

    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        $__internal_6f081f48f1ba68566f2dd88e2d7823f716559761387b61bde722e0638ff70403 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f081f48f1ba68566f2dd88e2d7823f716559761387b61bde722e0638ff70403->enter($__internal_6f081f48f1ba68566f2dd88e2d7823f716559761387b61bde722e0638ff70403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_db4e693235c14c2013a0f92460897093f7b432d2c6caa33704552953befd0a1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db4e693235c14c2013a0f92460897093f7b432d2c6caa33704552953befd0a1b->enter($__internal_db4e693235c14c2013a0f92460897093f7b432d2c6caa33704552953befd0a1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 16
        echo "
<div class=\"container\">
  <header>
    <h2>This is my page Header ";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "</h2>
  </header>

  <div class=\"content\">
    <h3>This is my Page Contents</h3>
  </div>

  <footer>
    <p>
      &copy; Copyright Page Content
    </p>
  </footer>
</div>
";
        
        $__internal_db4e693235c14c2013a0f92460897093f7b432d2c6caa33704552953befd0a1b->leave($__internal_db4e693235c14c2013a0f92460897093f7b432d2c6caa33704552953befd0a1b_prof);

        
        $__internal_6f081f48f1ba68566f2dd88e2d7823f716559761387b61bde722e0638ff70403->leave($__internal_6f081f48f1ba68566f2dd88e2d7823f716559761387b61bde722e0638ff70403_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Home:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 19,  94 => 16,  85 => 15,  67 => 12,  54 => 9,  45 => 8,  35 => 1,  33 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"AppBundle:Home:base.html.twig\" %}

{%
 set name= 'Shibaji'
%}


{% block styles %}
<link href=\"{{ basepath }}/assets/css/frontend.css\" rel=\"stylesheet\" />
{% endblock %}

{% block title %}Home Page{% endblock %}


{% block content %}

<div class=\"container\">
  <header>
    <h2>This is my page Header {{title}}</h2>
  </header>

  <div class=\"content\">
    <h3>This is my Page Contents</h3>
  </div>

  <footer>
    <p>
      &copy; Copyright Page Content
    </p>
  </footer>
</div>
{% endblock %}
", "AppBundle:Home:index.html.twig", "/Users/shibaji/Documents/GitHub/mregister/src/AppBundle/Resources/views/Home/index.html.twig");
    }
}
