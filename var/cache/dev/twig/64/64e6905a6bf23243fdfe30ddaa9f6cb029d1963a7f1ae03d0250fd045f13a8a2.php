<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_bdd5d2c679af4e0d00c53aec7007199428c21cefbc96619768191513b26c80ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2ff95054efe6ab160182c48165b3e11f179b15ef9c522bcaf819108b50b1b422 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ff95054efe6ab160182c48165b3e11f179b15ef9c522bcaf819108b50b1b422->enter($__internal_2ff95054efe6ab160182c48165b3e11f179b15ef9c522bcaf819108b50b1b422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_f79deb64ebf629764d8bdd0548d0ae38a69d5aebd616940c89fcbf31a6614b32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f79deb64ebf629764d8bdd0548d0ae38a69d5aebd616940c89fcbf31a6614b32->enter($__internal_f79deb64ebf629764d8bdd0548d0ae38a69d5aebd616940c89fcbf31a6614b32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ff95054efe6ab160182c48165b3e11f179b15ef9c522bcaf819108b50b1b422->leave($__internal_2ff95054efe6ab160182c48165b3e11f179b15ef9c522bcaf819108b50b1b422_prof);

        
        $__internal_f79deb64ebf629764d8bdd0548d0ae38a69d5aebd616940c89fcbf31a6614b32->leave($__internal_f79deb64ebf629764d8bdd0548d0ae38a69d5aebd616940c89fcbf31a6614b32_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_4af9c65f4e6a313e062bea5859dbcf467269cf1060cb5ecc07625bcf3429a854 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4af9c65f4e6a313e062bea5859dbcf467269cf1060cb5ecc07625bcf3429a854->enter($__internal_4af9c65f4e6a313e062bea5859dbcf467269cf1060cb5ecc07625bcf3429a854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_aa7faaf3b7e47343f9c4eb0276692b1fb8fe29496bc92987d386912f623bfa76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa7faaf3b7e47343f9c4eb0276692b1fb8fe29496bc92987d386912f623bfa76->enter($__internal_aa7faaf3b7e47343f9c4eb0276692b1fb8fe29496bc92987d386912f623bfa76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_aa7faaf3b7e47343f9c4eb0276692b1fb8fe29496bc92987d386912f623bfa76->leave($__internal_aa7faaf3b7e47343f9c4eb0276692b1fb8fe29496bc92987d386912f623bfa76_prof);

        
        $__internal_4af9c65f4e6a313e062bea5859dbcf467269cf1060cb5ecc07625bcf3429a854->leave($__internal_4af9c65f4e6a313e062bea5859dbcf467269cf1060cb5ecc07625bcf3429a854_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_646f6b0dd5a0e91f7fee612b7a3663d9d50d90a46f98387834c93d82a9b974ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_646f6b0dd5a0e91f7fee612b7a3663d9d50d90a46f98387834c93d82a9b974ca->enter($__internal_646f6b0dd5a0e91f7fee612b7a3663d9d50d90a46f98387834c93d82a9b974ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_852be48fa522d321d5638f4c239407bf9760c072a6567f855f7f4d6e73f49877 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_852be48fa522d321d5638f4c239407bf9760c072a6567f855f7f4d6e73f49877->enter($__internal_852be48fa522d321d5638f4c239407bf9760c072a6567f855f7f4d6e73f49877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_852be48fa522d321d5638f4c239407bf9760c072a6567f855f7f4d6e73f49877->leave($__internal_852be48fa522d321d5638f4c239407bf9760c072a6567f855f7f4d6e73f49877_prof);

        
        $__internal_646f6b0dd5a0e91f7fee612b7a3663d9d50d90a46f98387834c93d82a9b974ca->leave($__internal_646f6b0dd5a0e91f7fee612b7a3663d9d50d90a46f98387834c93d82a9b974ca_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
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

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/Users/shibaji/Documents/GitHub/mregister/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
