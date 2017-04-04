<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_3fb27f5e9ef4a84442211cf7338302146adb256ef8a175298ef4aacec4ff8c8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_e82ab5b6fa846b5ce76e381e24601c640f36f8b468b5f16d754ac55d2d2e5c6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e82ab5b6fa846b5ce76e381e24601c640f36f8b468b5f16d754ac55d2d2e5c6f->enter($__internal_e82ab5b6fa846b5ce76e381e24601c640f36f8b468b5f16d754ac55d2d2e5c6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_1bac8da35e05a2a8984827a1f94fbb11bf94b9be391dbd47674343760811d428 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bac8da35e05a2a8984827a1f94fbb11bf94b9be391dbd47674343760811d428->enter($__internal_1bac8da35e05a2a8984827a1f94fbb11bf94b9be391dbd47674343760811d428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e82ab5b6fa846b5ce76e381e24601c640f36f8b468b5f16d754ac55d2d2e5c6f->leave($__internal_e82ab5b6fa846b5ce76e381e24601c640f36f8b468b5f16d754ac55d2d2e5c6f_prof);

        
        $__internal_1bac8da35e05a2a8984827a1f94fbb11bf94b9be391dbd47674343760811d428->leave($__internal_1bac8da35e05a2a8984827a1f94fbb11bf94b9be391dbd47674343760811d428_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4ae21db82e26d7fabae7912e6707dee58dcbd4dc7e14c91a0c75f1b6706c98df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ae21db82e26d7fabae7912e6707dee58dcbd4dc7e14c91a0c75f1b6706c98df->enter($__internal_4ae21db82e26d7fabae7912e6707dee58dcbd4dc7e14c91a0c75f1b6706c98df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6ded02eb48b1ce477441f3780fa7b6f49f0271dd8631ad917e7dd3255cd95d13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ded02eb48b1ce477441f3780fa7b6f49f0271dd8631ad917e7dd3255cd95d13->enter($__internal_6ded02eb48b1ce477441f3780fa7b6f49f0271dd8631ad917e7dd3255cd95d13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_6ded02eb48b1ce477441f3780fa7b6f49f0271dd8631ad917e7dd3255cd95d13->leave($__internal_6ded02eb48b1ce477441f3780fa7b6f49f0271dd8631ad917e7dd3255cd95d13_prof);

        
        $__internal_4ae21db82e26d7fabae7912e6707dee58dcbd4dc7e14c91a0c75f1b6706c98df->leave($__internal_4ae21db82e26d7fabae7912e6707dee58dcbd4dc7e14c91a0c75f1b6706c98df_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_0aef1ee97cb84d34f36701d9f9e9563c4b48eb4996b50f84c6a41ca97419af6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0aef1ee97cb84d34f36701d9f9e9563c4b48eb4996b50f84c6a41ca97419af6c->enter($__internal_0aef1ee97cb84d34f36701d9f9e9563c4b48eb4996b50f84c6a41ca97419af6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3883b2ef8d3f120b0a91242b3a931ce459cdbcd27d39d46402f410eb3a34d879 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3883b2ef8d3f120b0a91242b3a931ce459cdbcd27d39d46402f410eb3a34d879->enter($__internal_3883b2ef8d3f120b0a91242b3a931ce459cdbcd27d39d46402f410eb3a34d879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3883b2ef8d3f120b0a91242b3a931ce459cdbcd27d39d46402f410eb3a34d879->leave($__internal_3883b2ef8d3f120b0a91242b3a931ce459cdbcd27d39d46402f410eb3a34d879_prof);

        
        $__internal_0aef1ee97cb84d34f36701d9f9e9563c4b48eb4996b50f84c6a41ca97419af6c->leave($__internal_0aef1ee97cb84d34f36701d9f9e9563c4b48eb4996b50f84c6a41ca97419af6c_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_2e30e4b247975401101217821be577d9dad5d0c35991c82b41d234e976e225f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e30e4b247975401101217821be577d9dad5d0c35991c82b41d234e976e225f2->enter($__internal_2e30e4b247975401101217821be577d9dad5d0c35991c82b41d234e976e225f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_31f5d68f4a5af4a5c2152d2d863a264f05442751f5b8dc13ac8a8c15afa84f7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31f5d68f4a5af4a5c2152d2d863a264f05442751f5b8dc13ac8a8c15afa84f7f->enter($__internal_31f5d68f4a5af4a5c2152d2d863a264f05442751f5b8dc13ac8a8c15afa84f7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_31f5d68f4a5af4a5c2152d2d863a264f05442751f5b8dc13ac8a8c15afa84f7f->leave($__internal_31f5d68f4a5af4a5c2152d2d863a264f05442751f5b8dc13ac8a8c15afa84f7f_prof);

        
        $__internal_2e30e4b247975401101217821be577d9dad5d0c35991c82b41d234e976e225f2->leave($__internal_2e30e4b247975401101217821be577d9dad5d0c35991c82b41d234e976e225f2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Users/shibaji/Desktop/class/cms/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
