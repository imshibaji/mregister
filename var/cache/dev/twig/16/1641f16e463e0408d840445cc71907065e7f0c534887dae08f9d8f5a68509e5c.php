<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_2f7f754b375d0e3c3b1fc2bb10bfa9088b1436e3d0f23d7c434a249f42f99da7 extends Twig_Template
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
        $__internal_7067e43519e69d6322fbb666f6b63bd3743754952081690fb4894e04398d42c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7067e43519e69d6322fbb666f6b63bd3743754952081690fb4894e04398d42c6->enter($__internal_7067e43519e69d6322fbb666f6b63bd3743754952081690fb4894e04398d42c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_09b8bd9054513594f3a7b082b501c2d830b4ded74842febfbb6a49b508473690 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09b8bd9054513594f3a7b082b501c2d830b4ded74842febfbb6a49b508473690->enter($__internal_09b8bd9054513594f3a7b082b501c2d830b4ded74842febfbb6a49b508473690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_7067e43519e69d6322fbb666f6b63bd3743754952081690fb4894e04398d42c6->leave($__internal_7067e43519e69d6322fbb666f6b63bd3743754952081690fb4894e04398d42c6_prof);

        
        $__internal_09b8bd9054513594f3a7b082b501c2d830b4ded74842febfbb6a49b508473690->leave($__internal_09b8bd9054513594f3a7b082b501c2d830b4ded74842febfbb6a49b508473690_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "/Users/shibaji/Documents/GitHub/mregister/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
