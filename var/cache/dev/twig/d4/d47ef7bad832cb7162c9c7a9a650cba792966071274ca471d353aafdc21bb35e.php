<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_792de00ebc9ee2f22ce36c14656e9113379be486df6167dcca99c0c17e53ed69 extends Twig_Template
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
        $__internal_8098e0eeb16964e4be1c50ee03382fd691fb344d4d3cdd8ea35a890823fb912f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8098e0eeb16964e4be1c50ee03382fd691fb344d4d3cdd8ea35a890823fb912f->enter($__internal_8098e0eeb16964e4be1c50ee03382fd691fb344d4d3cdd8ea35a890823fb912f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_b2dd16cbb5e8fa6eb533617e5acbffcb7d587688d9cd5781d4cff5f8553bf2f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2dd16cbb5e8fa6eb533617e5acbffcb7d587688d9cd5781d4cff5f8553bf2f4->enter($__internal_b2dd16cbb5e8fa6eb533617e5acbffcb7d587688d9cd5781d4cff5f8553bf2f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8098e0eeb16964e4be1c50ee03382fd691fb344d4d3cdd8ea35a890823fb912f->leave($__internal_8098e0eeb16964e4be1c50ee03382fd691fb344d4d3cdd8ea35a890823fb912f_prof);

        
        $__internal_b2dd16cbb5e8fa6eb533617e5acbffcb7d587688d9cd5781d4cff5f8553bf2f4->leave($__internal_b2dd16cbb5e8fa6eb533617e5acbffcb7d587688d9cd5781d4cff5f8553bf2f4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a89df6a0a081f2b73610b883f3b00ee8347a026413de3f221b0ddbbcb44eb9cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a89df6a0a081f2b73610b883f3b00ee8347a026413de3f221b0ddbbcb44eb9cf->enter($__internal_a89df6a0a081f2b73610b883f3b00ee8347a026413de3f221b0ddbbcb44eb9cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7054e5aa577249c599091b4885879f979337ad6110148f5ffbf5e39295cd015d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7054e5aa577249c599091b4885879f979337ad6110148f5ffbf5e39295cd015d->enter($__internal_7054e5aa577249c599091b4885879f979337ad6110148f5ffbf5e39295cd015d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_7054e5aa577249c599091b4885879f979337ad6110148f5ffbf5e39295cd015d->leave($__internal_7054e5aa577249c599091b4885879f979337ad6110148f5ffbf5e39295cd015d_prof);

        
        $__internal_a89df6a0a081f2b73610b883f3b00ee8347a026413de3f221b0ddbbcb44eb9cf->leave($__internal_a89df6a0a081f2b73610b883f3b00ee8347a026413de3f221b0ddbbcb44eb9cf_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_bd94b5415e387ebc8793b5a0f1df2e9167bae006013fea6190799dbeef1ae788 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd94b5415e387ebc8793b5a0f1df2e9167bae006013fea6190799dbeef1ae788->enter($__internal_bd94b5415e387ebc8793b5a0f1df2e9167bae006013fea6190799dbeef1ae788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_27786a0a6d60adb4a2c4a57d8df8a822e0542cbb029c1cb60f07fe1767e6d191 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27786a0a6d60adb4a2c4a57d8df8a822e0542cbb029c1cb60f07fe1767e6d191->enter($__internal_27786a0a6d60adb4a2c4a57d8df8a822e0542cbb029c1cb60f07fe1767e6d191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_27786a0a6d60adb4a2c4a57d8df8a822e0542cbb029c1cb60f07fe1767e6d191->leave($__internal_27786a0a6d60adb4a2c4a57d8df8a822e0542cbb029c1cb60f07fe1767e6d191_prof);

        
        $__internal_bd94b5415e387ebc8793b5a0f1df2e9167bae006013fea6190799dbeef1ae788->leave($__internal_bd94b5415e387ebc8793b5a0f1df2e9167bae006013fea6190799dbeef1ae788_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_2a4d88b7a444b1d6bb8cda63a0d9f954d9f7efef31d478b2ae82f96f7f5d0ba7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a4d88b7a444b1d6bb8cda63a0d9f954d9f7efef31d478b2ae82f96f7f5d0ba7->enter($__internal_2a4d88b7a444b1d6bb8cda63a0d9f954d9f7efef31d478b2ae82f96f7f5d0ba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d68171a7973f081faa318c81058f1ef8d0a04a981b6cedee8f6b73e1f7dc4d57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d68171a7973f081faa318c81058f1ef8d0a04a981b6cedee8f6b73e1f7dc4d57->enter($__internal_d68171a7973f081faa318c81058f1ef8d0a04a981b6cedee8f6b73e1f7dc4d57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_d68171a7973f081faa318c81058f1ef8d0a04a981b6cedee8f6b73e1f7dc4d57->leave($__internal_d68171a7973f081faa318c81058f1ef8d0a04a981b6cedee8f6b73e1f7dc4d57_prof);

        
        $__internal_2a4d88b7a444b1d6bb8cda63a0d9f954d9f7efef31d478b2ae82f96f7f5d0ba7->leave($__internal_2a4d88b7a444b1d6bb8cda63a0d9f954d9f7efef31d478b2ae82f96f7f5d0ba7_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/Users/shibaji/Documents/GitHub/mregister/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
