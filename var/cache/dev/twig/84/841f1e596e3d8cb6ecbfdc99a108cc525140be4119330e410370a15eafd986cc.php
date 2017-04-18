<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_161e4e1c69bc54a9de795bc96128578d7297b5586c6979dfe1f8e56f230435e3 extends Twig_Template
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
        $__internal_3af2208690afd25194437cb1e2ee4f817fe2f2dc2d11e7a35344d15375b1ea62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3af2208690afd25194437cb1e2ee4f817fe2f2dc2d11e7a35344d15375b1ea62->enter($__internal_3af2208690afd25194437cb1e2ee4f817fe2f2dc2d11e7a35344d15375b1ea62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_93bb1f84802b529d5484a21f6af10274db427534d366a5eec55143b2e7035dd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93bb1f84802b529d5484a21f6af10274db427534d366a5eec55143b2e7035dd5->enter($__internal_93bb1f84802b529d5484a21f6af10274db427534d366a5eec55143b2e7035dd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_3af2208690afd25194437cb1e2ee4f817fe2f2dc2d11e7a35344d15375b1ea62->leave($__internal_3af2208690afd25194437cb1e2ee4f817fe2f2dc2d11e7a35344d15375b1ea62_prof);

        
        $__internal_93bb1f84802b529d5484a21f6af10274db427534d366a5eec55143b2e7035dd5->leave($__internal_93bb1f84802b529d5484a21f6af10274db427534d366a5eec55143b2e7035dd5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/Users/shibaji/Documents/GitHub/mregister/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
