<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_16f81aababb64102ebf223bc3f88038d70b8a167117a46a86fee760c718016dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ef1c60e4853bae0e84d6711fcc507d6ba5ee2ec698b58a9d67c473f07cc96edd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef1c60e4853bae0e84d6711fcc507d6ba5ee2ec698b58a9d67c473f07cc96edd->enter($__internal_ef1c60e4853bae0e84d6711fcc507d6ba5ee2ec698b58a9d67c473f07cc96edd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_9373d9f92a2ca0ac6c3aaab9e64bfc29f9db082cf613af9aaece1a6665feb33b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9373d9f92a2ca0ac6c3aaab9e64bfc29f9db082cf613af9aaece1a6665feb33b->enter($__internal_9373d9f92a2ca0ac6c3aaab9e64bfc29f9db082cf613af9aaece1a6665feb33b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef1c60e4853bae0e84d6711fcc507d6ba5ee2ec698b58a9d67c473f07cc96edd->leave($__internal_ef1c60e4853bae0e84d6711fcc507d6ba5ee2ec698b58a9d67c473f07cc96edd_prof);

        
        $__internal_9373d9f92a2ca0ac6c3aaab9e64bfc29f9db082cf613af9aaece1a6665feb33b->leave($__internal_9373d9f92a2ca0ac6c3aaab9e64bfc29f9db082cf613af9aaece1a6665feb33b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8a82337878e2aa4ef6f32bb56eb2354c67028903552e7d8c33720b3058349d10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a82337878e2aa4ef6f32bb56eb2354c67028903552e7d8c33720b3058349d10->enter($__internal_8a82337878e2aa4ef6f32bb56eb2354c67028903552e7d8c33720b3058349d10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_29404eb787513a9efca477a6078f706860402d218fb99ab6c92a26abfcaeb09e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29404eb787513a9efca477a6078f706860402d218fb99ab6c92a26abfcaeb09e->enter($__internal_29404eb787513a9efca477a6078f706860402d218fb99ab6c92a26abfcaeb09e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_29404eb787513a9efca477a6078f706860402d218fb99ab6c92a26abfcaeb09e->leave($__internal_29404eb787513a9efca477a6078f706860402d218fb99ab6c92a26abfcaeb09e_prof);

        
        $__internal_8a82337878e2aa4ef6f32bb56eb2354c67028903552e7d8c33720b3058349d10->leave($__internal_8a82337878e2aa4ef6f32bb56eb2354c67028903552e7d8c33720b3058349d10_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fbcc6c59d6aa0c1ec44e0950d9dce92b1bc73a443adc08f5cc52a1255e610e69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbcc6c59d6aa0c1ec44e0950d9dce92b1bc73a443adc08f5cc52a1255e610e69->enter($__internal_fbcc6c59d6aa0c1ec44e0950d9dce92b1bc73a443adc08f5cc52a1255e610e69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c8cd7fb92172c3c008999c821e04accdda470c84b0bbbe73f6c52225e4dada96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8cd7fb92172c3c008999c821e04accdda470c84b0bbbe73f6c52225e4dada96->enter($__internal_c8cd7fb92172c3c008999c821e04accdda470c84b0bbbe73f6c52225e4dada96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_c8cd7fb92172c3c008999c821e04accdda470c84b0bbbe73f6c52225e4dada96->leave($__internal_c8cd7fb92172c3c008999c821e04accdda470c84b0bbbe73f6c52225e4dada96_prof);

        
        $__internal_fbcc6c59d6aa0c1ec44e0950d9dce92b1bc73a443adc08f5cc52a1255e610e69->leave($__internal_fbcc6c59d6aa0c1ec44e0950d9dce92b1bc73a443adc08f5cc52a1255e610e69_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_412abca33480ef912500c42b38d7e837cdde5a7d206829bb5710c1ae572b1b5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_412abca33480ef912500c42b38d7e837cdde5a7d206829bb5710c1ae572b1b5c->enter($__internal_412abca33480ef912500c42b38d7e837cdde5a7d206829bb5710c1ae572b1b5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5fb3b3e9ee9c9220b5562725bf6e18000c5e601c9ab2eb63451cefbba0c23269 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fb3b3e9ee9c9220b5562725bf6e18000c5e601c9ab2eb63451cefbba0c23269->enter($__internal_5fb3b3e9ee9c9220b5562725bf6e18000c5e601c9ab2eb63451cefbba0c23269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_5fb3b3e9ee9c9220b5562725bf6e18000c5e601c9ab2eb63451cefbba0c23269->leave($__internal_5fb3b3e9ee9c9220b5562725bf6e18000c5e601c9ab2eb63451cefbba0c23269_prof);

        
        $__internal_412abca33480ef912500c42b38d7e837cdde5a7d206829bb5710c1ae572b1b5c->leave($__internal_412abca33480ef912500c42b38d7e837cdde5a7d206829bb5710c1ae572b1b5c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Users/shibaji/Desktop/class/cms/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
