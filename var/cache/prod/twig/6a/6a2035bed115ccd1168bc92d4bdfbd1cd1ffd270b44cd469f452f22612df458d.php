<?php

/* AppBundle:Home:index.html.twig */
class __TwigTemplate_0117417628846dc530691943c939b16f543a4ba05bef331158477a743af602e6 extends Twig_Template
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
        // line 4
        $context["name"] = "Shibaji";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_styles($context, array $blocks = array())
    {
        // line 9
        echo "<link href=\"assets/css/frontend.css\" rel=\"stylesheet\" />
";
    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        echo "Home Page";
    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
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
        return array (  50 => 16,  47 => 15,  41 => 12,  36 => 9,  33 => 8,  29 => 1,  27 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:Home:index.html.twig", "/Users/shibaji/Desktop/class/cms/src/AppBundle/Resources/views/Home/index.html.twig");
    }
}
