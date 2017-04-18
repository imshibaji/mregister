<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_437a483ab7957b87cfc43c56a234eea7cfbcff153a39b7eb35b5b57ecf821329 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_25d1aaa545ac16c4b127bc6a9768cd14fe241183bd4daba916cb66ed3ca6efcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25d1aaa545ac16c4b127bc6a9768cd14fe241183bd4daba916cb66ed3ca6efcf->enter($__internal_25d1aaa545ac16c4b127bc6a9768cd14fe241183bd4daba916cb66ed3ca6efcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_a8b83b31c33495ca8177a7752adccfc8a5f172d49a6f8ff48432ce6b9c98d3cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8b83b31c33495ca8177a7752adccfc8a5f172d49a6f8ff48432ce6b9c98d3cf->enter($__internal_a8b83b31c33495ca8177a7752adccfc8a5f172d49a6f8ff48432ce6b9c98d3cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25d1aaa545ac16c4b127bc6a9768cd14fe241183bd4daba916cb66ed3ca6efcf->leave($__internal_25d1aaa545ac16c4b127bc6a9768cd14fe241183bd4daba916cb66ed3ca6efcf_prof);

        
        $__internal_a8b83b31c33495ca8177a7752adccfc8a5f172d49a6f8ff48432ce6b9c98d3cf->leave($__internal_a8b83b31c33495ca8177a7752adccfc8a5f172d49a6f8ff48432ce6b9c98d3cf_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c55e3e3a6fa1e877f6268c67b13f70c18097565423b92ef47623f1b69f727337 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c55e3e3a6fa1e877f6268c67b13f70c18097565423b92ef47623f1b69f727337->enter($__internal_c55e3e3a6fa1e877f6268c67b13f70c18097565423b92ef47623f1b69f727337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_eda905076d281fe73ee64534d0f4b25bc6fb9df6faafe235964b1147f1d46ca3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eda905076d281fe73ee64534d0f4b25bc6fb9df6faafe235964b1147f1d46ca3->enter($__internal_eda905076d281fe73ee64534d0f4b25bc6fb9df6faafe235964b1147f1d46ca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_eda905076d281fe73ee64534d0f4b25bc6fb9df6faafe235964b1147f1d46ca3->leave($__internal_eda905076d281fe73ee64534d0f4b25bc6fb9df6faafe235964b1147f1d46ca3_prof);

        
        $__internal_c55e3e3a6fa1e877f6268c67b13f70c18097565423b92ef47623f1b69f727337->leave($__internal_c55e3e3a6fa1e877f6268c67b13f70c18097565423b92ef47623f1b69f727337_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_46fe95e192dfc17018cb5d6b36fa9af09890d3e8a013bca32d46bd0b1a16b4f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46fe95e192dfc17018cb5d6b36fa9af09890d3e8a013bca32d46bd0b1a16b4f2->enter($__internal_46fe95e192dfc17018cb5d6b36fa9af09890d3e8a013bca32d46bd0b1a16b4f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8893fbc574d635e7450b9fbe6b24b2e7b7792ba1bf932a6a420ba0d72479c690 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8893fbc574d635e7450b9fbe6b24b2e7b7792ba1bf932a6a420ba0d72479c690->enter($__internal_8893fbc574d635e7450b9fbe6b24b2e7b7792ba1bf932a6a420ba0d72479c690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_8893fbc574d635e7450b9fbe6b24b2e7b7792ba1bf932a6a420ba0d72479c690->leave($__internal_8893fbc574d635e7450b9fbe6b24b2e7b7792ba1bf932a6a420ba0d72479c690_prof);

        
        $__internal_46fe95e192dfc17018cb5d6b36fa9af09890d3e8a013bca32d46bd0b1a16b4f2->leave($__internal_46fe95e192dfc17018cb5d6b36fa9af09890d3e8a013bca32d46bd0b1a16b4f2_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/Users/shibaji/Documents/GitHub/mregister/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
