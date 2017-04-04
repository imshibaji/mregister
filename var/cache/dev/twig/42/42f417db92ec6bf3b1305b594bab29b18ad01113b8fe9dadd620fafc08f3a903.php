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
        $__internal_8b54f676354fd4790c25b66380fa71a5690a7c87b05529b59007a80cbf03c073 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b54f676354fd4790c25b66380fa71a5690a7c87b05529b59007a80cbf03c073->enter($__internal_8b54f676354fd4790c25b66380fa71a5690a7c87b05529b59007a80cbf03c073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_925e9fc1a9bb5a863bae42a28e0599e05392c380e1f4db211f5090c2199ceb18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_925e9fc1a9bb5a863bae42a28e0599e05392c380e1f4db211f5090c2199ceb18->enter($__internal_925e9fc1a9bb5a863bae42a28e0599e05392c380e1f4db211f5090c2199ceb18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b54f676354fd4790c25b66380fa71a5690a7c87b05529b59007a80cbf03c073->leave($__internal_8b54f676354fd4790c25b66380fa71a5690a7c87b05529b59007a80cbf03c073_prof);

        
        $__internal_925e9fc1a9bb5a863bae42a28e0599e05392c380e1f4db211f5090c2199ceb18->leave($__internal_925e9fc1a9bb5a863bae42a28e0599e05392c380e1f4db211f5090c2199ceb18_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_124ce1a250a5e186bf89ab97fbba6927515f0bf35c2002b5e95feb793b349a36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_124ce1a250a5e186bf89ab97fbba6927515f0bf35c2002b5e95feb793b349a36->enter($__internal_124ce1a250a5e186bf89ab97fbba6927515f0bf35c2002b5e95feb793b349a36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d3e32a92c2d1040fc92ef2d399eaa6ed1243cd3e4b56f16dacf6250d78d2b618 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3e32a92c2d1040fc92ef2d399eaa6ed1243cd3e4b56f16dacf6250d78d2b618->enter($__internal_d3e32a92c2d1040fc92ef2d399eaa6ed1243cd3e4b56f16dacf6250d78d2b618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d3e32a92c2d1040fc92ef2d399eaa6ed1243cd3e4b56f16dacf6250d78d2b618->leave($__internal_d3e32a92c2d1040fc92ef2d399eaa6ed1243cd3e4b56f16dacf6250d78d2b618_prof);

        
        $__internal_124ce1a250a5e186bf89ab97fbba6927515f0bf35c2002b5e95feb793b349a36->leave($__internal_124ce1a250a5e186bf89ab97fbba6927515f0bf35c2002b5e95feb793b349a36_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_add327923967f89b4014bf147d242a2fd43b114396dbf9ded7c3af2094029f97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_add327923967f89b4014bf147d242a2fd43b114396dbf9ded7c3af2094029f97->enter($__internal_add327923967f89b4014bf147d242a2fd43b114396dbf9ded7c3af2094029f97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ec1f7d1d149fe51445a7f6516620f94f6bb48abcd2cbb61f8ef48ea95d59aed6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec1f7d1d149fe51445a7f6516620f94f6bb48abcd2cbb61f8ef48ea95d59aed6->enter($__internal_ec1f7d1d149fe51445a7f6516620f94f6bb48abcd2cbb61f8ef48ea95d59aed6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ec1f7d1d149fe51445a7f6516620f94f6bb48abcd2cbb61f8ef48ea95d59aed6->leave($__internal_ec1f7d1d149fe51445a7f6516620f94f6bb48abcd2cbb61f8ef48ea95d59aed6_prof);

        
        $__internal_add327923967f89b4014bf147d242a2fd43b114396dbf9ded7c3af2094029f97->leave($__internal_add327923967f89b4014bf147d242a2fd43b114396dbf9ded7c3af2094029f97_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c6cc48f780ca7f127eb112cd95fa83c2ac3bfd1643be0fe4135355e5b4e47518 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6cc48f780ca7f127eb112cd95fa83c2ac3bfd1643be0fe4135355e5b4e47518->enter($__internal_c6cc48f780ca7f127eb112cd95fa83c2ac3bfd1643be0fe4135355e5b4e47518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_78ea43b91c4de69456781ff51afdf5ff74012bf26ced3921800c74147884cd43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78ea43b91c4de69456781ff51afdf5ff74012bf26ced3921800c74147884cd43->enter($__internal_78ea43b91c4de69456781ff51afdf5ff74012bf26ced3921800c74147884cd43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_78ea43b91c4de69456781ff51afdf5ff74012bf26ced3921800c74147884cd43->leave($__internal_78ea43b91c4de69456781ff51afdf5ff74012bf26ced3921800c74147884cd43_prof);

        
        $__internal_c6cc48f780ca7f127eb112cd95fa83c2ac3bfd1643be0fe4135355e5b4e47518->leave($__internal_c6cc48f780ca7f127eb112cd95fa83c2ac3bfd1643be0fe4135355e5b4e47518_prof);

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
