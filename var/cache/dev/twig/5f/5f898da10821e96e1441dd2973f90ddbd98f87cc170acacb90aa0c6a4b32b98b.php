<?php

/* AdminBundle:xyz:index.html.twig */
class __TwigTemplate_59ecaa54ab7e4643227970f901b70fcf8146d844e66d9d9ddd595865329e6e6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_73a5b9b9f6b1b5549322bdacef2ef38532f7e82949fa4dae366f50f750fc00a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73a5b9b9f6b1b5549322bdacef2ef38532f7e82949fa4dae366f50f750fc00a3->enter($__internal_73a5b9b9f6b1b5549322bdacef2ef38532f7e82949fa4dae366f50f750fc00a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:xyz:index.html.twig"));

        $__internal_b4156f00893a61a1748070ca7aedde0a9f1e587e4b9d6fe5b2b575393d7a724b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4156f00893a61a1748070ca7aedde0a9f1e587e4b9d6fe5b2b575393d7a724b->enter($__internal_b4156f00893a61a1748070ca7aedde0a9f1e587e4b9d6fe5b2b575393d7a724b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:xyz:index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
  <title>Admin Area</title>
  ";
        // line 5
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "fcf8523_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_fcf8523_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/fcf8523_part_1_style_1.css");
            // line 6
            echo "  <!-- Latest compiled and minified CSS -->
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">

<!-- Optional theme -->
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css\" integrity=\"sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp\" crossorigin=\"anonymous\">

      <link rel=\"stylesheet\" href=\"";
            // line 12
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
  ";
        } else {
            // asset "fcf8523"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_fcf8523") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/fcf8523.css");
            // line 6
            echo "  <!-- Latest compiled and minified CSS -->
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">

<!-- Optional theme -->
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css\" integrity=\"sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp\" crossorigin=\"anonymous\">

      <link rel=\"stylesheet\" href=\"";
            // line 12
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
  ";
        }
        unset($context["asset_url"]);
        // line 14
        echo "</head>
<body>
  <h1>Hello Admin</h1>
  ";
        // line 17
        echo (isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator"));
        echo "
  ";
        // line 18
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "26319e4_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_26319e4_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/26319e4_part_1_script_1.js");
            // line 19
            echo "      <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
  ";
        } else {
            // asset "26319e4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_26319e4") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/26319e4.js");
            echo "      <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
  ";
        }
        unset($context["asset_url"]);
        // line 21
        echo "</body>
</html>
";
        
        $__internal_73a5b9b9f6b1b5549322bdacef2ef38532f7e82949fa4dae366f50f750fc00a3->leave($__internal_73a5b9b9f6b1b5549322bdacef2ef38532f7e82949fa4dae366f50f750fc00a3_prof);

        
        $__internal_b4156f00893a61a1748070ca7aedde0a9f1e587e4b9d6fe5b2b575393d7a724b->leave($__internal_b4156f00893a61a1748070ca7aedde0a9f1e587e4b9d6fe5b2b575393d7a724b_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:xyz:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 21,  77 => 19,  73 => 18,  69 => 17,  64 => 14,  58 => 12,  50 => 6,  43 => 12,  35 => 6,  31 => 5,  25 => 1,);
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
  <title>Admin Area</title>
  {% stylesheets '@AdminBundle/Resources/Public/xyz/css/*' filter='cssrewrite' %}
  <!-- Latest compiled and minified CSS -->
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">

<!-- Optional theme -->
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css\" integrity=\"sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp\" crossorigin=\"anonymous\">

      <link rel=\"stylesheet\" href=\"{{ asset_url }}\" />
  {% endstylesheets %}
</head>
<body>
  <h1>Hello Admin</h1>
  {{ paginator | raw }}
  {% javascripts '@AdminBundle/Resources/Public/xyz/js/*' %}
      <script src=\"{{ asset_url }}\"></script>
  {% endjavascripts %}
</body>
</html>
", "AdminBundle:xyz:index.html.twig", "/Users/shibaji/Documents/GitHub/mregister/modules/Medust/AdminBundle/Resources/views/xyz/index.html.twig");
    }
}
