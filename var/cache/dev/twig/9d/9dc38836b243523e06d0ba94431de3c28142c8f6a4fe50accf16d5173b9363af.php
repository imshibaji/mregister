<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_f0d99355ed47a50f98057f95af7914b2c4427e83830db85cfc787aaf735fdaa6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_da13144cb5dc68dbe1d028c58752091c9b7931cb9cd390784618d576adc4d1dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da13144cb5dc68dbe1d028c58752091c9b7931cb9cd390784618d576adc4d1dd->enter($__internal_da13144cb5dc68dbe1d028c58752091c9b7931cb9cd390784618d576adc4d1dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_e66d70de61b296610f14072f8b8c8d02f9d550ffd9c3be189af47b304e67b6e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e66d70de61b296610f14072f8b8c8d02f9d550ffd9c3be189af47b304e67b6e0->enter($__internal_e66d70de61b296610f14072f8b8c8d02f9d550ffd9c3be189af47b304e67b6e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da13144cb5dc68dbe1d028c58752091c9b7931cb9cd390784618d576adc4d1dd->leave($__internal_da13144cb5dc68dbe1d028c58752091c9b7931cb9cd390784618d576adc4d1dd_prof);

        
        $__internal_e66d70de61b296610f14072f8b8c8d02f9d550ffd9c3be189af47b304e67b6e0->leave($__internal_e66d70de61b296610f14072f8b8c8d02f9d550ffd9c3be189af47b304e67b6e0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9f4d7085eefb87c077b4e9be05cb68ea7c82daad6863400e9e89ab3f3f20abb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f4d7085eefb87c077b4e9be05cb68ea7c82daad6863400e9e89ab3f3f20abb4->enter($__internal_9f4d7085eefb87c077b4e9be05cb68ea7c82daad6863400e9e89ab3f3f20abb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2dcac6381f56262ae4e1a728fcb67255be346edb42d94a4abfcddb76b21b1d11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dcac6381f56262ae4e1a728fcb67255be346edb42d94a4abfcddb76b21b1d11->enter($__internal_2dcac6381f56262ae4e1a728fcb67255be346edb42d94a4abfcddb76b21b1d11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_2dcac6381f56262ae4e1a728fcb67255be346edb42d94a4abfcddb76b21b1d11->leave($__internal_2dcac6381f56262ae4e1a728fcb67255be346edb42d94a4abfcddb76b21b1d11_prof);

        
        $__internal_9f4d7085eefb87c077b4e9be05cb68ea7c82daad6863400e9e89ab3f3f20abb4->leave($__internal_9f4d7085eefb87c077b4e9be05cb68ea7c82daad6863400e9e89ab3f3f20abb4_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_7808519a61687902dcfcd2765299380fc0985af353c1cd4c6acfaf5336401dd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7808519a61687902dcfcd2765299380fc0985af353c1cd4c6acfaf5336401dd5->enter($__internal_7808519a61687902dcfcd2765299380fc0985af353c1cd4c6acfaf5336401dd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_88f720b4c9d9f76cc0409806f4c0b3665d6655fede5a326531eb73ca442632c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88f720b4c9d9f76cc0409806f4c0b3665d6655fede5a326531eb73ca442632c6->enter($__internal_88f720b4c9d9f76cc0409806f4c0b3665d6655fede5a326531eb73ca442632c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_88f720b4c9d9f76cc0409806f4c0b3665d6655fede5a326531eb73ca442632c6->leave($__internal_88f720b4c9d9f76cc0409806f4c0b3665d6655fede5a326531eb73ca442632c6_prof);

        
        $__internal_7808519a61687902dcfcd2765299380fc0985af353c1cd4c6acfaf5336401dd5->leave($__internal_7808519a61687902dcfcd2765299380fc0985af353c1cd4c6acfaf5336401dd5_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/Users/shibaji/Documents/GitHub/mregister/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
