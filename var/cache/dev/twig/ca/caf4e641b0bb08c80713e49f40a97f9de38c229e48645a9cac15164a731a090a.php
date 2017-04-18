<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_825bbb477e6aa7002e07538daf09ed31ba6cf743bd0e9373b0482ed3bc6101b6 extends Twig_Template
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
        $__internal_4d3597a69268417f77ccc33daab0095c633251b1ade78a23f8e8c6345b633c3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d3597a69268417f77ccc33daab0095c633251b1ade78a23f8e8c6345b633c3c->enter($__internal_4d3597a69268417f77ccc33daab0095c633251b1ade78a23f8e8c6345b633c3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_7a60a84d2d3923f11305faad5703b54fd0cd816c586a6568d54d1c9b004e75f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a60a84d2d3923f11305faad5703b54fd0cd816c586a6568d54d1c9b004e75f0->enter($__internal_7a60a84d2d3923f11305faad5703b54fd0cd816c586a6568d54d1c9b004e75f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_4d3597a69268417f77ccc33daab0095c633251b1ade78a23f8e8c6345b633c3c->leave($__internal_4d3597a69268417f77ccc33daab0095c633251b1ade78a23f8e8c6345b633c3c_prof);

        
        $__internal_7a60a84d2d3923f11305faad5703b54fd0cd816c586a6568d54d1c9b004e75f0->leave($__internal_7a60a84d2d3923f11305faad5703b54fd0cd816c586a6568d54d1c9b004e75f0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/Users/shibaji/Documents/GitHub/mregister/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
