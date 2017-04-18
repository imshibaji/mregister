<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_55cff5637968589fd0b1d5b9907ccb275f2ad788e45021ec4941dfadd8e85c42 extends Twig_Template
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
        $__internal_13426a0e476db9db9e7b6e9abd9320d798c7e8fcf2a7a142c8e90fc75a3ff944 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13426a0e476db9db9e7b6e9abd9320d798c7e8fcf2a7a142c8e90fc75a3ff944->enter($__internal_13426a0e476db9db9e7b6e9abd9320d798c7e8fcf2a7a142c8e90fc75a3ff944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_0af50fff94c5b38f394f658c7eca0a96acc814ba4f0853457857750eb8963a4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0af50fff94c5b38f394f658c7eca0a96acc814ba4f0853457857750eb8963a4f->enter($__internal_0af50fff94c5b38f394f658c7eca0a96acc814ba4f0853457857750eb8963a4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13426a0e476db9db9e7b6e9abd9320d798c7e8fcf2a7a142c8e90fc75a3ff944->leave($__internal_13426a0e476db9db9e7b6e9abd9320d798c7e8fcf2a7a142c8e90fc75a3ff944_prof);

        
        $__internal_0af50fff94c5b38f394f658c7eca0a96acc814ba4f0853457857750eb8963a4f->leave($__internal_0af50fff94c5b38f394f658c7eca0a96acc814ba4f0853457857750eb8963a4f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f7805d716d79268283c2c82cf4106cb557f940a0fc84dbe3dc17799aa4900953 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7805d716d79268283c2c82cf4106cb557f940a0fc84dbe3dc17799aa4900953->enter($__internal_f7805d716d79268283c2c82cf4106cb557f940a0fc84dbe3dc17799aa4900953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_57963db8832509ab75d8e203ffcffa5c672acbb60e1354fdc97e8745f7d1dc83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57963db8832509ab75d8e203ffcffa5c672acbb60e1354fdc97e8745f7d1dc83->enter($__internal_57963db8832509ab75d8e203ffcffa5c672acbb60e1354fdc97e8745f7d1dc83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_57963db8832509ab75d8e203ffcffa5c672acbb60e1354fdc97e8745f7d1dc83->leave($__internal_57963db8832509ab75d8e203ffcffa5c672acbb60e1354fdc97e8745f7d1dc83_prof);

        
        $__internal_f7805d716d79268283c2c82cf4106cb557f940a0fc84dbe3dc17799aa4900953->leave($__internal_f7805d716d79268283c2c82cf4106cb557f940a0fc84dbe3dc17799aa4900953_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1b65649ac896bde3cc75a4110edcc04c22cb023049653a698cd025938cdeea87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b65649ac896bde3cc75a4110edcc04c22cb023049653a698cd025938cdeea87->enter($__internal_1b65649ac896bde3cc75a4110edcc04c22cb023049653a698cd025938cdeea87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ddabfd98176af10a070d1834dff559e260a0c5c0b64c79bbb887e81bb575cc53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddabfd98176af10a070d1834dff559e260a0c5c0b64c79bbb887e81bb575cc53->enter($__internal_ddabfd98176af10a070d1834dff559e260a0c5c0b64c79bbb887e81bb575cc53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ddabfd98176af10a070d1834dff559e260a0c5c0b64c79bbb887e81bb575cc53->leave($__internal_ddabfd98176af10a070d1834dff559e260a0c5c0b64c79bbb887e81bb575cc53_prof);

        
        $__internal_1b65649ac896bde3cc75a4110edcc04c22cb023049653a698cd025938cdeea87->leave($__internal_1b65649ac896bde3cc75a4110edcc04c22cb023049653a698cd025938cdeea87_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f20dbc0deef992607ad6f04b127be38e714cf34103cc77fc14bb45cb844c0d5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f20dbc0deef992607ad6f04b127be38e714cf34103cc77fc14bb45cb844c0d5c->enter($__internal_f20dbc0deef992607ad6f04b127be38e714cf34103cc77fc14bb45cb844c0d5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4ef188a399a478840469f42f442ad1d632d6438ec1d47fc0d8d0631a89a65658 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ef188a399a478840469f42f442ad1d632d6438ec1d47fc0d8d0631a89a65658->enter($__internal_4ef188a399a478840469f42f442ad1d632d6438ec1d47fc0d8d0631a89a65658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4ef188a399a478840469f42f442ad1d632d6438ec1d47fc0d8d0631a89a65658->leave($__internal_4ef188a399a478840469f42f442ad1d632d6438ec1d47fc0d8d0631a89a65658_prof);

        
        $__internal_f20dbc0deef992607ad6f04b127be38e714cf34103cc77fc14bb45cb844c0d5c->leave($__internal_f20dbc0deef992607ad6f04b127be38e714cf34103cc77fc14bb45cb844c0d5c_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/Users/shibaji/Documents/GitHub/mregister/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
