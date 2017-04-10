<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c04aae403a0f20b772cf8876df3d12a345a6f2d0fc4211b26c942dd4104714b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_9a76ff419d9083b6609dbf17e7ff419cb8346fd04b9620e94ec5e09359359c51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a76ff419d9083b6609dbf17e7ff419cb8346fd04b9620e94ec5e09359359c51->enter($__internal_9a76ff419d9083b6609dbf17e7ff419cb8346fd04b9620e94ec5e09359359c51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_eeed119ee2cbd3f71585d1f8ca552adba02f4d9d06f193c003e255a6a04be480 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eeed119ee2cbd3f71585d1f8ca552adba02f4d9d06f193c003e255a6a04be480->enter($__internal_eeed119ee2cbd3f71585d1f8ca552adba02f4d9d06f193c003e255a6a04be480_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a76ff419d9083b6609dbf17e7ff419cb8346fd04b9620e94ec5e09359359c51->leave($__internal_9a76ff419d9083b6609dbf17e7ff419cb8346fd04b9620e94ec5e09359359c51_prof);

        
        $__internal_eeed119ee2cbd3f71585d1f8ca552adba02f4d9d06f193c003e255a6a04be480->leave($__internal_eeed119ee2cbd3f71585d1f8ca552adba02f4d9d06f193c003e255a6a04be480_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_af9ebbf676e962db939038387a42f37a22b7358f1544cc3372ed2d2d781c8f19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af9ebbf676e962db939038387a42f37a22b7358f1544cc3372ed2d2d781c8f19->enter($__internal_af9ebbf676e962db939038387a42f37a22b7358f1544cc3372ed2d2d781c8f19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_816046f9f6960eafa7c3f726b47b9d52fc15e75bb671477db9d11748ea2efd6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_816046f9f6960eafa7c3f726b47b9d52fc15e75bb671477db9d11748ea2efd6e->enter($__internal_816046f9f6960eafa7c3f726b47b9d52fc15e75bb671477db9d11748ea2efd6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_816046f9f6960eafa7c3f726b47b9d52fc15e75bb671477db9d11748ea2efd6e->leave($__internal_816046f9f6960eafa7c3f726b47b9d52fc15e75bb671477db9d11748ea2efd6e_prof);

        
        $__internal_af9ebbf676e962db939038387a42f37a22b7358f1544cc3372ed2d2d781c8f19->leave($__internal_af9ebbf676e962db939038387a42f37a22b7358f1544cc3372ed2d2d781c8f19_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2e024894c4aa846d6a8eceff9bba41769556bd8014b47021dcc4ffef4e12a576 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e024894c4aa846d6a8eceff9bba41769556bd8014b47021dcc4ffef4e12a576->enter($__internal_2e024894c4aa846d6a8eceff9bba41769556bd8014b47021dcc4ffef4e12a576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_20174722f71cc39e4839d2e35d61cf999eb56797af26c8e9f2e0f2ca26c295de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20174722f71cc39e4839d2e35d61cf999eb56797af26c8e9f2e0f2ca26c295de->enter($__internal_20174722f71cc39e4839d2e35d61cf999eb56797af26c8e9f2e0f2ca26c295de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_20174722f71cc39e4839d2e35d61cf999eb56797af26c8e9f2e0f2ca26c295de->leave($__internal_20174722f71cc39e4839d2e35d61cf999eb56797af26c8e9f2e0f2ca26c295de_prof);

        
        $__internal_2e024894c4aa846d6a8eceff9bba41769556bd8014b47021dcc4ffef4e12a576->leave($__internal_2e024894c4aa846d6a8eceff9bba41769556bd8014b47021dcc4ffef4e12a576_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fb6a5cbd2f60ec4999cd34feaf0aad08b7f155823751eac98d795fa7d54bde70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb6a5cbd2f60ec4999cd34feaf0aad08b7f155823751eac98d795fa7d54bde70->enter($__internal_fb6a5cbd2f60ec4999cd34feaf0aad08b7f155823751eac98d795fa7d54bde70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_62fb0302e7a9721e4756957751592d353366fc3c120329b75345cc25f92a2cf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62fb0302e7a9721e4756957751592d353366fc3c120329b75345cc25f92a2cf0->enter($__internal_62fb0302e7a9721e4756957751592d353366fc3c120329b75345cc25f92a2cf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_62fb0302e7a9721e4756957751592d353366fc3c120329b75345cc25f92a2cf0->leave($__internal_62fb0302e7a9721e4756957751592d353366fc3c120329b75345cc25f92a2cf0_prof);

        
        $__internal_fb6a5cbd2f60ec4999cd34feaf0aad08b7f155823751eac98d795fa7d54bde70->leave($__internal_fb6a5cbd2f60ec4999cd34feaf0aad08b7f155823751eac98d795fa7d54bde70_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/shibaji/Desktop/class/cms/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
