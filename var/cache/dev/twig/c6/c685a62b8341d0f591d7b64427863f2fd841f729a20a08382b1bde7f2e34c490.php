<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_8c35172f34790c67924bff5e85f675ade03928c77d93e4c56f179aecf0c4873d extends Twig_Template
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
        $__internal_2fe82be4fc401cd1600419696a0d4c3a0e11a2a7f1e479a3493e8b92b2954c07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fe82be4fc401cd1600419696a0d4c3a0e11a2a7f1e479a3493e8b92b2954c07->enter($__internal_2fe82be4fc401cd1600419696a0d4c3a0e11a2a7f1e479a3493e8b92b2954c07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_292052c7de6f2ac0bf1f873aa0684941362729778720d2a02d85debe279a09bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_292052c7de6f2ac0bf1f873aa0684941362729778720d2a02d85debe279a09bd->enter($__internal_292052c7de6f2ac0bf1f873aa0684941362729778720d2a02d85debe279a09bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2fe82be4fc401cd1600419696a0d4c3a0e11a2a7f1e479a3493e8b92b2954c07->leave($__internal_2fe82be4fc401cd1600419696a0d4c3a0e11a2a7f1e479a3493e8b92b2954c07_prof);

        
        $__internal_292052c7de6f2ac0bf1f873aa0684941362729778720d2a02d85debe279a09bd->leave($__internal_292052c7de6f2ac0bf1f873aa0684941362729778720d2a02d85debe279a09bd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cee96ea11fd9e23db9e3eb9a042eaca7eb8a69a14e13131ecbcfd16e67322168 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cee96ea11fd9e23db9e3eb9a042eaca7eb8a69a14e13131ecbcfd16e67322168->enter($__internal_cee96ea11fd9e23db9e3eb9a042eaca7eb8a69a14e13131ecbcfd16e67322168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_60b88d9f9cb22687d5a0de07a31843e04eb7829a0a11a152f3ea121996671ff6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60b88d9f9cb22687d5a0de07a31843e04eb7829a0a11a152f3ea121996671ff6->enter($__internal_60b88d9f9cb22687d5a0de07a31843e04eb7829a0a11a152f3ea121996671ff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_60b88d9f9cb22687d5a0de07a31843e04eb7829a0a11a152f3ea121996671ff6->leave($__internal_60b88d9f9cb22687d5a0de07a31843e04eb7829a0a11a152f3ea121996671ff6_prof);

        
        $__internal_cee96ea11fd9e23db9e3eb9a042eaca7eb8a69a14e13131ecbcfd16e67322168->leave($__internal_cee96ea11fd9e23db9e3eb9a042eaca7eb8a69a14e13131ecbcfd16e67322168_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f419bccf25c59f15848bcaf709a8551adaa9d00ea34e83f065d4a96a69827b88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f419bccf25c59f15848bcaf709a8551adaa9d00ea34e83f065d4a96a69827b88->enter($__internal_f419bccf25c59f15848bcaf709a8551adaa9d00ea34e83f065d4a96a69827b88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4e036744e66d8230eacf8e686833a6c968d01dfc5182492e013eeac5d7745ee8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e036744e66d8230eacf8e686833a6c968d01dfc5182492e013eeac5d7745ee8->enter($__internal_4e036744e66d8230eacf8e686833a6c968d01dfc5182492e013eeac5d7745ee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_4e036744e66d8230eacf8e686833a6c968d01dfc5182492e013eeac5d7745ee8->leave($__internal_4e036744e66d8230eacf8e686833a6c968d01dfc5182492e013eeac5d7745ee8_prof);

        
        $__internal_f419bccf25c59f15848bcaf709a8551adaa9d00ea34e83f065d4a96a69827b88->leave($__internal_f419bccf25c59f15848bcaf709a8551adaa9d00ea34e83f065d4a96a69827b88_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cadec08054d4a6689fc0f6d00e6613ed886c647a6a16c74c1fb50f15b38af3f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cadec08054d4a6689fc0f6d00e6613ed886c647a6a16c74c1fb50f15b38af3f8->enter($__internal_cadec08054d4a6689fc0f6d00e6613ed886c647a6a16c74c1fb50f15b38af3f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f418049232416e66fb1290e34870a6020daa009ec1e86a43eff6001e8687136d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f418049232416e66fb1290e34870a6020daa009ec1e86a43eff6001e8687136d->enter($__internal_f418049232416e66fb1290e34870a6020daa009ec1e86a43eff6001e8687136d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_f418049232416e66fb1290e34870a6020daa009ec1e86a43eff6001e8687136d->leave($__internal_f418049232416e66fb1290e34870a6020daa009ec1e86a43eff6001e8687136d_prof);

        
        $__internal_cadec08054d4a6689fc0f6d00e6613ed886c647a6a16c74c1fb50f15b38af3f8->leave($__internal_cadec08054d4a6689fc0f6d00e6613ed886c647a6a16c74c1fb50f15b38af3f8_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/Users/shibaji/Documents/GitHub/mregister/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
