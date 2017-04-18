<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_eca157393955ec862c3ae0d03d6366c03d8ae09ad78f131f611292acdee89cb5 extends Twig_Template
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
        $__internal_303049b05775c8d704f67b70803b5c8a3986a094519083b7eb316e9a450aa8d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_303049b05775c8d704f67b70803b5c8a3986a094519083b7eb316e9a450aa8d3->enter($__internal_303049b05775c8d704f67b70803b5c8a3986a094519083b7eb316e9a450aa8d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_0db1cf09e9b100a21d05a1059cf6678a1502c8eb6e2676c242bc973cbaae951e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0db1cf09e9b100a21d05a1059cf6678a1502c8eb6e2676c242bc973cbaae951e->enter($__internal_0db1cf09e9b100a21d05a1059cf6678a1502c8eb6e2676c242bc973cbaae951e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_303049b05775c8d704f67b70803b5c8a3986a094519083b7eb316e9a450aa8d3->leave($__internal_303049b05775c8d704f67b70803b5c8a3986a094519083b7eb316e9a450aa8d3_prof);

        
        $__internal_0db1cf09e9b100a21d05a1059cf6678a1502c8eb6e2676c242bc973cbaae951e->leave($__internal_0db1cf09e9b100a21d05a1059cf6678a1502c8eb6e2676c242bc973cbaae951e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.rdf.twig", "/Users/shibaji/Documents/GitHub/mregister/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
