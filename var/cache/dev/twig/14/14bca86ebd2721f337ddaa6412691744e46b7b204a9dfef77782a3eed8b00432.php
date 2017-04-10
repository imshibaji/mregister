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
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle:Home:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_46ebe6425c0668820ceb5a88b1bea05a6cddb47562b1ee70b62fcd721a3c0018 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46ebe6425c0668820ceb5a88b1bea05a6cddb47562b1ee70b62fcd721a3c0018->enter($__internal_46ebe6425c0668820ceb5a88b1bea05a6cddb47562b1ee70b62fcd721a3c0018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Home:index.html.twig"));

        $__internal_f4272702f1cba85a19677756c2f6416c18cac61b06261d76b42b32d04a5b0df1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4272702f1cba85a19677756c2f6416c18cac61b06261d76b42b32d04a5b0df1->enter($__internal_f4272702f1cba85a19677756c2f6416c18cac61b06261d76b42b32d04a5b0df1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Home:index.html.twig"));

        // line 4
        $context["name"] = "Shibaji";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46ebe6425c0668820ceb5a88b1bea05a6cddb47562b1ee70b62fcd721a3c0018->leave($__internal_46ebe6425c0668820ceb5a88b1bea05a6cddb47562b1ee70b62fcd721a3c0018_prof);

        
        $__internal_f4272702f1cba85a19677756c2f6416c18cac61b06261d76b42b32d04a5b0df1->leave($__internal_f4272702f1cba85a19677756c2f6416c18cac61b06261d76b42b32d04a5b0df1_prof);

    }

    // line 8
    public function block_styles($context, array $blocks = array())
    {
        $__internal_7d985f30a7ae703fa5c28849d47f996d0a318ac8c1e6bb6171b576125cadea23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d985f30a7ae703fa5c28849d47f996d0a318ac8c1e6bb6171b576125cadea23->enter($__internal_7d985f30a7ae703fa5c28849d47f996d0a318ac8c1e6bb6171b576125cadea23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        $__internal_1d825c9c9ef2704a25f1ed35404a3b3cfd6623bcd5677e3c4a19413c29d9334c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d825c9c9ef2704a25f1ed35404a3b3cfd6623bcd5677e3c4a19413c29d9334c->enter($__internal_1d825c9c9ef2704a25f1ed35404a3b3cfd6623bcd5677e3c4a19413c29d9334c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        // line 9
        echo "<link href=\"";
        echo twig_escape_filter($this->env, (isset($context["basepath"]) ? $context["basepath"] : $this->getContext($context, "basepath")), "html", null, true);
        echo "/assets/css/frontend.css\" rel=\"stylesheet\" />
";
        
        $__internal_1d825c9c9ef2704a25f1ed35404a3b3cfd6623bcd5677e3c4a19413c29d9334c->leave($__internal_1d825c9c9ef2704a25f1ed35404a3b3cfd6623bcd5677e3c4a19413c29d9334c_prof);

        
        $__internal_7d985f30a7ae703fa5c28849d47f996d0a318ac8c1e6bb6171b576125cadea23->leave($__internal_7d985f30a7ae703fa5c28849d47f996d0a318ac8c1e6bb6171b576125cadea23_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_ed466f5c83ba6edf9e47198507c87aea173864ebee753d948340b896df9455b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed466f5c83ba6edf9e47198507c87aea173864ebee753d948340b896df9455b3->enter($__internal_ed466f5c83ba6edf9e47198507c87aea173864ebee753d948340b896df9455b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a2e26cd489f00206d760c44cf0d6a9feb4716dd1a2513aab85caf0c9703e9e09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2e26cd489f00206d760c44cf0d6a9feb4716dd1a2513aab85caf0c9703e9e09->enter($__internal_a2e26cd489f00206d760c44cf0d6a9feb4716dd1a2513aab85caf0c9703e9e09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Home Page";
        
        $__internal_a2e26cd489f00206d760c44cf0d6a9feb4716dd1a2513aab85caf0c9703e9e09->leave($__internal_a2e26cd489f00206d760c44cf0d6a9feb4716dd1a2513aab85caf0c9703e9e09_prof);

        
        $__internal_ed466f5c83ba6edf9e47198507c87aea173864ebee753d948340b896df9455b3->leave($__internal_ed466f5c83ba6edf9e47198507c87aea173864ebee753d948340b896df9455b3_prof);

    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        $__internal_5b90880bb39c517e98fdcdde27c2df3822d5398102f0bdd13c99f496a78c7081 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b90880bb39c517e98fdcdde27c2df3822d5398102f0bdd13c99f496a78c7081->enter($__internal_5b90880bb39c517e98fdcdde27c2df3822d5398102f0bdd13c99f496a78c7081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_089f10ba953f931b520e34fad1066944a5891174bc50c9f1de97dcc4724cec45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_089f10ba953f931b520e34fad1066944a5891174bc50c9f1de97dcc4724cec45->enter($__internal_089f10ba953f931b520e34fad1066944a5891174bc50c9f1de97dcc4724cec45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_089f10ba953f931b520e34fad1066944a5891174bc50c9f1de97dcc4724cec45->leave($__internal_089f10ba953f931b520e34fad1066944a5891174bc50c9f1de97dcc4724cec45_prof);

        
        $__internal_5b90880bb39c517e98fdcdde27c2df3822d5398102f0bdd13c99f496a78c7081->leave($__internal_5b90880bb39c517e98fdcdde27c2df3822d5398102f0bdd13c99f496a78c7081_prof);

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
", "AppBundle:Home:index.html.twig", "/Users/shibaji/Desktop/class/cms/src/AppBundle/Resources/views/Home/index.html.twig");
    }
}
