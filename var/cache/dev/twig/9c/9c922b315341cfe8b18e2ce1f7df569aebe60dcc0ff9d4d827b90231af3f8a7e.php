<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_a5ec9a71ca8e2a7d9768ee42a25ec1946dcd8445f05854529146cb4bb90bd98e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c92a62ee290e5f423500fd6ff4e0935571d050d469f2a792a8c67be2d4770833 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c92a62ee290e5f423500fd6ff4e0935571d050d469f2a792a8c67be2d4770833->enter($__internal_c92a62ee290e5f423500fd6ff4e0935571d050d469f2a792a8c67be2d4770833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_7e0eae8f654106f2e66cca7ab7ef6a8fe42272adcc909aaca2959c4bff8eb29f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e0eae8f654106f2e66cca7ab7ef6a8fe42272adcc909aaca2959c4bff8eb29f->enter($__internal_7e0eae8f654106f2e66cca7ab7ef6a8fe42272adcc909aaca2959c4bff8eb29f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_c92a62ee290e5f423500fd6ff4e0935571d050d469f2a792a8c67be2d4770833->leave($__internal_c92a62ee290e5f423500fd6ff4e0935571d050d469f2a792a8c67be2d4770833_prof);

        
        $__internal_7e0eae8f654106f2e66cca7ab7ef6a8fe42272adcc909aaca2959c4bff8eb29f->leave($__internal_7e0eae8f654106f2e66cca7ab7ef6a8fe42272adcc909aaca2959c4bff8eb29f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "/Users/shibaji/Documents/GitHub/mregister/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
