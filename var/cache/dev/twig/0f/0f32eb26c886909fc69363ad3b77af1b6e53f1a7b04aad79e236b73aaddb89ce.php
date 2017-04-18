<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_9f8211099c9a0c0fc4794a9f9cbae3c3853850a53804769faa398b0742d5ba5a extends Twig_Template
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
        $__internal_79ff07ad2603a7aae7092a2ffeeec0293373231a2b08efaa7e36e973dc9f8741 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79ff07ad2603a7aae7092a2ffeeec0293373231a2b08efaa7e36e973dc9f8741->enter($__internal_79ff07ad2603a7aae7092a2ffeeec0293373231a2b08efaa7e36e973dc9f8741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_c4a43194ce24e92775994f3a30e8688a11fa93ee04740e105e7dd80973eead2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4a43194ce24e92775994f3a30e8688a11fa93ee04740e105e7dd80973eead2e->enter($__internal_c4a43194ce24e92775994f3a30e8688a11fa93ee04740e105e7dd80973eead2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_79ff07ad2603a7aae7092a2ffeeec0293373231a2b08efaa7e36e973dc9f8741->leave($__internal_79ff07ad2603a7aae7092a2ffeeec0293373231a2b08efaa7e36e973dc9f8741_prof);

        
        $__internal_c4a43194ce24e92775994f3a30e8688a11fa93ee04740e105e7dd80973eead2e->leave($__internal_c4a43194ce24e92775994f3a30e8688a11fa93ee04740e105e7dd80973eead2e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  37 => 5,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "/Users/shibaji/Documents/GitHub/mregister/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
