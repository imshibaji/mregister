<?php

/* AppBundle:Home:index.html.twig */
class __TwigTemplate_3f55222a2fede8cc297918654119c0730e08578986b10ab2f042430d62c78f6f extends Twig_Template
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
        $__internal_8221961c16c11fea77abbaf0bba19ab50717752857cea65b384da115cc515299 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8221961c16c11fea77abbaf0bba19ab50717752857cea65b384da115cc515299->enter($__internal_8221961c16c11fea77abbaf0bba19ab50717752857cea65b384da115cc515299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Home:index.html.twig"));

        // line 4
        $context["name"] = "Shibaji";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8221961c16c11fea77abbaf0bba19ab50717752857cea65b384da115cc515299->leave($__internal_8221961c16c11fea77abbaf0bba19ab50717752857cea65b384da115cc515299_prof);

    }

    // line 8
    public function block_styles($context, array $blocks = array())
    {
        $__internal_8488571aa6115b50125ef8ee7607b85423d331a8adc91fc26fadd9a4de757d4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8488571aa6115b50125ef8ee7607b85423d331a8adc91fc26fadd9a4de757d4d->enter($__internal_8488571aa6115b50125ef8ee7607b85423d331a8adc91fc26fadd9a4de757d4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        // line 9
        echo "<link href=\"";
        echo twig_escape_filter($this->env, (isset($context["basepath"]) ? $context["basepath"] : $this->getContext($context, "basepath")), "html", null, true);
        echo "/assets/css/frontend.css\" rel=\"stylesheet\" />
";
        
        $__internal_8488571aa6115b50125ef8ee7607b85423d331a8adc91fc26fadd9a4de757d4d->leave($__internal_8488571aa6115b50125ef8ee7607b85423d331a8adc91fc26fadd9a4de757d4d_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_e35cea8ecb58ef61de3cba365d00b3ff88754c15a6aaa6a0f611920983d5ab27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e35cea8ecb58ef61de3cba365d00b3ff88754c15a6aaa6a0f611920983d5ab27->enter($__internal_e35cea8ecb58ef61de3cba365d00b3ff88754c15a6aaa6a0f611920983d5ab27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Home Page";
        
        $__internal_e35cea8ecb58ef61de3cba365d00b3ff88754c15a6aaa6a0f611920983d5ab27->leave($__internal_e35cea8ecb58ef61de3cba365d00b3ff88754c15a6aaa6a0f611920983d5ab27_prof);

    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        $__internal_8c2a95431ecf66dcc6783ce3a8c7307a005a97e4473a9712c89380611f632b4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c2a95431ecf66dcc6783ce3a8c7307a005a97e4473a9712c89380611f632b4f->enter($__internal_8c2a95431ecf66dcc6783ce3a8c7307a005a97e4473a9712c89380611f632b4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_8c2a95431ecf66dcc6783ce3a8c7307a005a97e4473a9712c89380611f632b4f->leave($__internal_8c2a95431ecf66dcc6783ce3a8c7307a005a97e4473a9712c89380611f632b4f_prof);

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
        return array (  78 => 19,  73 => 16,  67 => 15,  55 => 12,  45 => 9,  39 => 8,  32 => 1,  30 => 4,  11 => 1,);
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
", "AppBundle:Home:index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/cms1/src/AppBundle/Resources/views/Home/index.html.twig");
    }
}
