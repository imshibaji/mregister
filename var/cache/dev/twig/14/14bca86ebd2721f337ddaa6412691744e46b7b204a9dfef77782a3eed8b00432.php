<?php

/* AppBundle:Home:index.html.twig */
class __TwigTemplate_3f9d3b228b75543ea3461798f508498d93b6df568070d1d3dd4d40935b046e18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:Home:base.html.twig", "AppBundle:Home:index.html.twig", 1);
        $this->blocks = array(
            'styles' => array($this, 'block_styles'),
            'title' => array($this, 'block_title'),
            'banner' => array($this, 'block_banner'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle:Home:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a89281af873cf2effca636a036a0718436151aaee27f2b2e41c008ef8dd86031 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a89281af873cf2effca636a036a0718436151aaee27f2b2e41c008ef8dd86031->enter($__internal_a89281af873cf2effca636a036a0718436151aaee27f2b2e41c008ef8dd86031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Home:index.html.twig"));

        $__internal_316b408225e76cd3eb173fb17ad3799e1c95cdaa9daf5a41510b5ead6fbbef61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_316b408225e76cd3eb173fb17ad3799e1c95cdaa9daf5a41510b5ead6fbbef61->enter($__internal_316b408225e76cd3eb173fb17ad3799e1c95cdaa9daf5a41510b5ead6fbbef61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Home:index.html.twig"));

        // line 4
        $context["name"] = "Shibaji";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a89281af873cf2effca636a036a0718436151aaee27f2b2e41c008ef8dd86031->leave($__internal_a89281af873cf2effca636a036a0718436151aaee27f2b2e41c008ef8dd86031_prof);

        
        $__internal_316b408225e76cd3eb173fb17ad3799e1c95cdaa9daf5a41510b5ead6fbbef61->leave($__internal_316b408225e76cd3eb173fb17ad3799e1c95cdaa9daf5a41510b5ead6fbbef61_prof);

    }

    // line 8
    public function block_styles($context, array $blocks = array())
    {
        $__internal_c18eab4a1815d2d4ec6020bd35d256bf6ca0fa86c08a1ea6f086fa497224064a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c18eab4a1815d2d4ec6020bd35d256bf6ca0fa86c08a1ea6f086fa497224064a->enter($__internal_c18eab4a1815d2d4ec6020bd35d256bf6ca0fa86c08a1ea6f086fa497224064a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        $__internal_93f1e2036710288d9abbae7ff8d3a45351bacdba7cedde55d01df45cf049985b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93f1e2036710288d9abbae7ff8d3a45351bacdba7cedde55d01df45cf049985b->enter($__internal_93f1e2036710288d9abbae7ff8d3a45351bacdba7cedde55d01df45cf049985b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        // line 9
        echo "<link href=\"assets/css/frontend.css\" rel=\"stylesheet\" />
";
        
        $__internal_93f1e2036710288d9abbae7ff8d3a45351bacdba7cedde55d01df45cf049985b->leave($__internal_93f1e2036710288d9abbae7ff8d3a45351bacdba7cedde55d01df45cf049985b_prof);

        
        $__internal_c18eab4a1815d2d4ec6020bd35d256bf6ca0fa86c08a1ea6f086fa497224064a->leave($__internal_c18eab4a1815d2d4ec6020bd35d256bf6ca0fa86c08a1ea6f086fa497224064a_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_d9878fcd0fa96a7808ad9bc1b0c942993e7bee27ef1ca36096524d5ced1b3146 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9878fcd0fa96a7808ad9bc1b0c942993e7bee27ef1ca36096524d5ced1b3146->enter($__internal_d9878fcd0fa96a7808ad9bc1b0c942993e7bee27ef1ca36096524d5ced1b3146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1eeacc32a8771f84d36cc5cc55d5a46a97ab45ba136fe7a779576ef53b288f53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1eeacc32a8771f84d36cc5cc55d5a46a97ab45ba136fe7a779576ef53b288f53->enter($__internal_1eeacc32a8771f84d36cc5cc55d5a46a97ab45ba136fe7a779576ef53b288f53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Home Page";
        
        $__internal_1eeacc32a8771f84d36cc5cc55d5a46a97ab45ba136fe7a779576ef53b288f53->leave($__internal_1eeacc32a8771f84d36cc5cc55d5a46a97ab45ba136fe7a779576ef53b288f53_prof);

        
        $__internal_d9878fcd0fa96a7808ad9bc1b0c942993e7bee27ef1ca36096524d5ced1b3146->leave($__internal_d9878fcd0fa96a7808ad9bc1b0c942993e7bee27ef1ca36096524d5ced1b3146_prof);

    }

    // line 13
    public function block_banner($context, array $blocks = array())
    {
        $__internal_90a28d76b0eb3726f029b2b4c8fcf2004d69b796064fd62dae116745cbe6e8f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90a28d76b0eb3726f029b2b4c8fcf2004d69b796064fd62dae116745cbe6e8f1->enter($__internal_90a28d76b0eb3726f029b2b4c8fcf2004d69b796064fd62dae116745cbe6e8f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "banner"));

        $__internal_1a2630640561dcedb2590d8b68f7d51ba9807c9bcaa3f7743dc541b911899af9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a2630640561dcedb2590d8b68f7d51ba9807c9bcaa3f7743dc541b911899af9->enter($__internal_1a2630640561dcedb2590d8b68f7d51ba9807c9bcaa3f7743dc541b911899af9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "banner"));

        
        $__internal_1a2630640561dcedb2590d8b68f7d51ba9807c9bcaa3f7743dc541b911899af9->leave($__internal_1a2630640561dcedb2590d8b68f7d51ba9807c9bcaa3f7743dc541b911899af9_prof);

        
        $__internal_90a28d76b0eb3726f029b2b4c8fcf2004d69b796064fd62dae116745cbe6e8f1->leave($__internal_90a28d76b0eb3726f029b2b4c8fcf2004d69b796064fd62dae116745cbe6e8f1_prof);

    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        $__internal_fa3653c25a2f4df95469cd8b38c114bbf7df7217efa11f0bf5936a44a3d764c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa3653c25a2f4df95469cd8b38c114bbf7df7217efa11f0bf5936a44a3d764c6->enter($__internal_fa3653c25a2f4df95469cd8b38c114bbf7df7217efa11f0bf5936a44a3d764c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_70966d1d45e0bc5ce7a20b5fa0af8d4d7f5cd6eead893657c12e6739f655d75f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70966d1d45e0bc5ce7a20b5fa0af8d4d7f5cd6eead893657c12e6739f655d75f->enter($__internal_70966d1d45e0bc5ce7a20b5fa0af8d4d7f5cd6eead893657c12e6739f655d75f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 16
        echo "<div class=\"container\">
  <header>
    <h2>This is my page Header</h2>
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
        
        $__internal_70966d1d45e0bc5ce7a20b5fa0af8d4d7f5cd6eead893657c12e6739f655d75f->leave($__internal_70966d1d45e0bc5ce7a20b5fa0af8d4d7f5cd6eead893657c12e6739f655d75f_prof);

        
        $__internal_fa3653c25a2f4df95469cd8b38c114bbf7df7217efa11f0bf5936a44a3d764c6->leave($__internal_fa3653c25a2f4df95469cd8b38c114bbf7df7217efa11f0bf5936a44a3d764c6_prof);

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
        return array (  110 => 16,  101 => 15,  84 => 13,  66 => 12,  55 => 9,  46 => 8,  36 => 1,  34 => 4,  11 => 1,);
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
<link href=\"assets/css/frontend.css\" rel=\"stylesheet\" />
{% endblock %}

{% block title %}Home Page{% endblock %}
{% block banner %}{% endblock %}

{% block content %}
<div class=\"container\">
  <header>
    <h2>This is my page Header</h2>
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
", "AppBundle:Home:index.html.twig", "/Users/shibaji/Desktop/class/cms/src/AppBundle/Resources/views/Home/index.html.twig");
    }
}
