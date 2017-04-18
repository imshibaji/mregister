<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_b6719bafbe31d730db54b70f43086401d35106a018aa6ecc88f55236e522dd40 extends Twig_Template
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
        $__internal_700c30662c015ccbb49692c0c2eb36512a7e41285de560031b2f166b8430d7c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_700c30662c015ccbb49692c0c2eb36512a7e41285de560031b2f166b8430d7c2->enter($__internal_700c30662c015ccbb49692c0c2eb36512a7e41285de560031b2f166b8430d7c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_a6675472884b9309510499b5228c97e30aff4b6799e87e31270762d9055c2eb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6675472884b9309510499b5228c97e30aff4b6799e87e31270762d9055c2eb7->enter($__internal_a6675472884b9309510499b5228c97e30aff4b6799e87e31270762d9055c2eb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_700c30662c015ccbb49692c0c2eb36512a7e41285de560031b2f166b8430d7c2->leave($__internal_700c30662c015ccbb49692c0c2eb36512a7e41285de560031b2f166b8430d7c2_prof);

        
        $__internal_a6675472884b9309510499b5228c97e30aff4b6799e87e31270762d9055c2eb7->leave($__internal_a6675472884b9309510499b5228c97e30aff4b6799e87e31270762d9055c2eb7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/Users/shibaji/Documents/GitHub/mregister/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
