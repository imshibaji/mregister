<?php

/* ::base.html.twig */
class __TwigTemplate_b318b011fc42e02e6614816c3a460d7199263361b64f1587eedfe593372e62b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_83e5864a951170fa3499503f98fa0e142b34e479011cf4e382fbf61d6f98cf2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83e5864a951170fa3499503f98fa0e142b34e479011cf4e382fbf61d6f98cf2d->enter($__internal_83e5864a951170fa3499503f98fa0e142b34e479011cf4e382fbf61d6f98cf2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_bcb22b0b265f7008abb0dbb7c09ed13c9cc667545eec664078b0a23a55228c8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcb22b0b265f7008abb0dbb7c09ed13c9cc667545eec664078b0a23a55228c8a->enter($__internal_bcb22b0b265f7008abb0dbb7c09ed13c9cc667545eec664078b0a23a55228c8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_83e5864a951170fa3499503f98fa0e142b34e479011cf4e382fbf61d6f98cf2d->leave($__internal_83e5864a951170fa3499503f98fa0e142b34e479011cf4e382fbf61d6f98cf2d_prof);

        
        $__internal_bcb22b0b265f7008abb0dbb7c09ed13c9cc667545eec664078b0a23a55228c8a->leave($__internal_bcb22b0b265f7008abb0dbb7c09ed13c9cc667545eec664078b0a23a55228c8a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4eb802207f0fb6053e050d79df2cf73c4a6bc88354472741b20a2a7ea5d10ea5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4eb802207f0fb6053e050d79df2cf73c4a6bc88354472741b20a2a7ea5d10ea5->enter($__internal_4eb802207f0fb6053e050d79df2cf73c4a6bc88354472741b20a2a7ea5d10ea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_abee23e224b4977a7c48acbc0b3b2be3127b5f8f278b7ba40414c3f1f7ed9f49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abee23e224b4977a7c48acbc0b3b2be3127b5f8f278b7ba40414c3f1f7ed9f49->enter($__internal_abee23e224b4977a7c48acbc0b3b2be3127b5f8f278b7ba40414c3f1f7ed9f49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_abee23e224b4977a7c48acbc0b3b2be3127b5f8f278b7ba40414c3f1f7ed9f49->leave($__internal_abee23e224b4977a7c48acbc0b3b2be3127b5f8f278b7ba40414c3f1f7ed9f49_prof);

        
        $__internal_4eb802207f0fb6053e050d79df2cf73c4a6bc88354472741b20a2a7ea5d10ea5->leave($__internal_4eb802207f0fb6053e050d79df2cf73c4a6bc88354472741b20a2a7ea5d10ea5_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f1032f81ef3e0d20ac19ecbee779fd6093dde3f992bd19fee19cdaae7214990d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1032f81ef3e0d20ac19ecbee779fd6093dde3f992bd19fee19cdaae7214990d->enter($__internal_f1032f81ef3e0d20ac19ecbee779fd6093dde3f992bd19fee19cdaae7214990d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0dd80c000ae6bcc7f6a5dbc1088f06651fd76d73b50f51ffe97f4b799a2523eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dd80c000ae6bcc7f6a5dbc1088f06651fd76d73b50f51ffe97f4b799a2523eb->enter($__internal_0dd80c000ae6bcc7f6a5dbc1088f06651fd76d73b50f51ffe97f4b799a2523eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0dd80c000ae6bcc7f6a5dbc1088f06651fd76d73b50f51ffe97f4b799a2523eb->leave($__internal_0dd80c000ae6bcc7f6a5dbc1088f06651fd76d73b50f51ffe97f4b799a2523eb_prof);

        
        $__internal_f1032f81ef3e0d20ac19ecbee779fd6093dde3f992bd19fee19cdaae7214990d->leave($__internal_f1032f81ef3e0d20ac19ecbee779fd6093dde3f992bd19fee19cdaae7214990d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_797cbe338579c5d30588f1e45f060303d8dfdf6acffeee38537ee3827d648f5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_797cbe338579c5d30588f1e45f060303d8dfdf6acffeee38537ee3827d648f5a->enter($__internal_797cbe338579c5d30588f1e45f060303d8dfdf6acffeee38537ee3827d648f5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f3f9e384169a62571750abddd6e2c0c8764ddd6d5518502741dfb3e28be4af17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3f9e384169a62571750abddd6e2c0c8764ddd6d5518502741dfb3e28be4af17->enter($__internal_f3f9e384169a62571750abddd6e2c0c8764ddd6d5518502741dfb3e28be4af17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f3f9e384169a62571750abddd6e2c0c8764ddd6d5518502741dfb3e28be4af17->leave($__internal_f3f9e384169a62571750abddd6e2c0c8764ddd6d5518502741dfb3e28be4af17_prof);

        
        $__internal_797cbe338579c5d30588f1e45f060303d8dfdf6acffeee38537ee3827d648f5a->leave($__internal_797cbe338579c5d30588f1e45f060303d8dfdf6acffeee38537ee3827d648f5a_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_578c17cc97c31d991d2b15b905f79c6865e07ce8b50db0d68effd6c3cc4945d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_578c17cc97c31d991d2b15b905f79c6865e07ce8b50db0d68effd6c3cc4945d8->enter($__internal_578c17cc97c31d991d2b15b905f79c6865e07ce8b50db0d68effd6c3cc4945d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_29c5fe7c8b1a2581b753fadededdc462b705069e3b5f1ee00b4d3a9f774c225a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29c5fe7c8b1a2581b753fadededdc462b705069e3b5f1ee00b4d3a9f774c225a->enter($__internal_29c5fe7c8b1a2581b753fadededdc462b705069e3b5f1ee00b4d3a9f774c225a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_29c5fe7c8b1a2581b753fadededdc462b705069e3b5f1ee00b4d3a9f774c225a->leave($__internal_29c5fe7c8b1a2581b753fadededdc462b705069e3b5f1ee00b4d3a9f774c225a_prof);

        
        $__internal_578c17cc97c31d991d2b15b905f79c6865e07ce8b50db0d68effd6c3cc4945d8->leave($__internal_578c17cc97c31d991d2b15b905f79c6865e07ce8b50db0d68effd6c3cc4945d8_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/Users/shibaji/Documents/GitHub/mregister/app/Resources/views/base.html.twig");
    }
}
