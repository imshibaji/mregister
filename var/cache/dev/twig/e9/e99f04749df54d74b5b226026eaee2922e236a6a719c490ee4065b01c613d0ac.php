<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_ddb57b24ffc4b7134c3e58811322d0dd30606d361cd342dab1f0f958eb68089f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_54d53c317cca316d84013220d8ed04c32e6c708472bd1f559e623975d213b9f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54d53c317cca316d84013220d8ed04c32e6c708472bd1f559e623975d213b9f6->enter($__internal_54d53c317cca316d84013220d8ed04c32e6c708472bd1f559e623975d213b9f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_8105ec35fbd3dc5ab44a8ae7fa26e7ad656e715f39cd39cee3964f53313dba4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8105ec35fbd3dc5ab44a8ae7fa26e7ad656e715f39cd39cee3964f53313dba4f->enter($__internal_8105ec35fbd3dc5ab44a8ae7fa26e7ad656e715f39cd39cee3964f53313dba4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54d53c317cca316d84013220d8ed04c32e6c708472bd1f559e623975d213b9f6->leave($__internal_54d53c317cca316d84013220d8ed04c32e6c708472bd1f559e623975d213b9f6_prof);

        
        $__internal_8105ec35fbd3dc5ab44a8ae7fa26e7ad656e715f39cd39cee3964f53313dba4f->leave($__internal_8105ec35fbd3dc5ab44a8ae7fa26e7ad656e715f39cd39cee3964f53313dba4f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ed2862137e0a949d0154f6900e6e11ce350b0d7128fc2655cadf7d81656fcbd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed2862137e0a949d0154f6900e6e11ce350b0d7128fc2655cadf7d81656fcbd5->enter($__internal_ed2862137e0a949d0154f6900e6e11ce350b0d7128fc2655cadf7d81656fcbd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_bcc1dbe16ef484e015d5ccaa94996cfbe95a691f3a66a4c894936e7e1c4111f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcc1dbe16ef484e015d5ccaa94996cfbe95a691f3a66a4c894936e7e1c4111f6->enter($__internal_bcc1dbe16ef484e015d5ccaa94996cfbe95a691f3a66a4c894936e7e1c4111f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_bcc1dbe16ef484e015d5ccaa94996cfbe95a691f3a66a4c894936e7e1c4111f6->leave($__internal_bcc1dbe16ef484e015d5ccaa94996cfbe95a691f3a66a4c894936e7e1c4111f6_prof);

        
        $__internal_ed2862137e0a949d0154f6900e6e11ce350b0d7128fc2655cadf7d81656fcbd5->leave($__internal_ed2862137e0a949d0154f6900e6e11ce350b0d7128fc2655cadf7d81656fcbd5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Users/shibaji/Documents/GitHub/mregister/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
