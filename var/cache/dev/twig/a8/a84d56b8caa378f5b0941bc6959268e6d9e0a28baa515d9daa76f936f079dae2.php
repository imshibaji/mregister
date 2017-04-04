<?php

/* base.html.twig */
class __TwigTemplate_46ec375f9412574a4b1648f4d27c7e0c4c3693fb4dba3003e23cdbf45b02ddb7 extends Twig_Template
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
        $__internal_0050058ed0a481df116ee519a0f38a7e65cc0db61d88100a1dab6f1499f51434 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0050058ed0a481df116ee519a0f38a7e65cc0db61d88100a1dab6f1499f51434->enter($__internal_0050058ed0a481df116ee519a0f38a7e65cc0db61d88100a1dab6f1499f51434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_a691c405dd6d8623b4b594fe0fc444bdecee2aa193bd4d4e256ceabdcae1cc67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a691c405dd6d8623b4b594fe0fc444bdecee2aa193bd4d4e256ceabdcae1cc67->enter($__internal_a691c405dd6d8623b4b594fe0fc444bdecee2aa193bd4d4e256ceabdcae1cc67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_0050058ed0a481df116ee519a0f38a7e65cc0db61d88100a1dab6f1499f51434->leave($__internal_0050058ed0a481df116ee519a0f38a7e65cc0db61d88100a1dab6f1499f51434_prof);

        
        $__internal_a691c405dd6d8623b4b594fe0fc444bdecee2aa193bd4d4e256ceabdcae1cc67->leave($__internal_a691c405dd6d8623b4b594fe0fc444bdecee2aa193bd4d4e256ceabdcae1cc67_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_091b62d2a2b9bf24a86be429177e381a6edb3da525bfe307589aa9403770c82e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_091b62d2a2b9bf24a86be429177e381a6edb3da525bfe307589aa9403770c82e->enter($__internal_091b62d2a2b9bf24a86be429177e381a6edb3da525bfe307589aa9403770c82e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_31b2b9652e52ceecd0d6ae54ba191ed8a011cb1626945245f7dff313a493869b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31b2b9652e52ceecd0d6ae54ba191ed8a011cb1626945245f7dff313a493869b->enter($__internal_31b2b9652e52ceecd0d6ae54ba191ed8a011cb1626945245f7dff313a493869b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_31b2b9652e52ceecd0d6ae54ba191ed8a011cb1626945245f7dff313a493869b->leave($__internal_31b2b9652e52ceecd0d6ae54ba191ed8a011cb1626945245f7dff313a493869b_prof);

        
        $__internal_091b62d2a2b9bf24a86be429177e381a6edb3da525bfe307589aa9403770c82e->leave($__internal_091b62d2a2b9bf24a86be429177e381a6edb3da525bfe307589aa9403770c82e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_abb80c80b3d1c387cd875d535108a80c454ea61bc73f790a74e21d7fb5f4778d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abb80c80b3d1c387cd875d535108a80c454ea61bc73f790a74e21d7fb5f4778d->enter($__internal_abb80c80b3d1c387cd875d535108a80c454ea61bc73f790a74e21d7fb5f4778d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_21da1867ab09b4b81a13dd944c00cee2cf99c8065c8764ff483350470dc2d758 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21da1867ab09b4b81a13dd944c00cee2cf99c8065c8764ff483350470dc2d758->enter($__internal_21da1867ab09b4b81a13dd944c00cee2cf99c8065c8764ff483350470dc2d758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_21da1867ab09b4b81a13dd944c00cee2cf99c8065c8764ff483350470dc2d758->leave($__internal_21da1867ab09b4b81a13dd944c00cee2cf99c8065c8764ff483350470dc2d758_prof);

        
        $__internal_abb80c80b3d1c387cd875d535108a80c454ea61bc73f790a74e21d7fb5f4778d->leave($__internal_abb80c80b3d1c387cd875d535108a80c454ea61bc73f790a74e21d7fb5f4778d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_3c6b8d3067fed5a61beefcd583193b788c4cd9a33dde6f865870397647d42766 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c6b8d3067fed5a61beefcd583193b788c4cd9a33dde6f865870397647d42766->enter($__internal_3c6b8d3067fed5a61beefcd583193b788c4cd9a33dde6f865870397647d42766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_68a93392fa1c7369be5940c218d998f633c6d1ec8816d532f54e6e2c4399d606 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68a93392fa1c7369be5940c218d998f633c6d1ec8816d532f54e6e2c4399d606->enter($__internal_68a93392fa1c7369be5940c218d998f633c6d1ec8816d532f54e6e2c4399d606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_68a93392fa1c7369be5940c218d998f633c6d1ec8816d532f54e6e2c4399d606->leave($__internal_68a93392fa1c7369be5940c218d998f633c6d1ec8816d532f54e6e2c4399d606_prof);

        
        $__internal_3c6b8d3067fed5a61beefcd583193b788c4cd9a33dde6f865870397647d42766->leave($__internal_3c6b8d3067fed5a61beefcd583193b788c4cd9a33dde6f865870397647d42766_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7dacef5c5032e56586972e7110e1db468bb48bc579488cfa0e29278ffe14acb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dacef5c5032e56586972e7110e1db468bb48bc579488cfa0e29278ffe14acb0->enter($__internal_7dacef5c5032e56586972e7110e1db468bb48bc579488cfa0e29278ffe14acb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_1732e2c7afaa86bed711ed033db17bacee3568342733289d88a0a19db9981843 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1732e2c7afaa86bed711ed033db17bacee3568342733289d88a0a19db9981843->enter($__internal_1732e2c7afaa86bed711ed033db17bacee3568342733289d88a0a19db9981843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_1732e2c7afaa86bed711ed033db17bacee3568342733289d88a0a19db9981843->leave($__internal_1732e2c7afaa86bed711ed033db17bacee3568342733289d88a0a19db9981843_prof);

        
        $__internal_7dacef5c5032e56586972e7110e1db468bb48bc579488cfa0e29278ffe14acb0->leave($__internal_7dacef5c5032e56586972e7110e1db468bb48bc579488cfa0e29278ffe14acb0_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
", "base.html.twig", "/Users/shibaji/Desktop/class/cms/app/Resources/views/base.html.twig");
    }
}
