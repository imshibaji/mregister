<?php

/* AdminBundle:Default:index.html.twig */
class __TwigTemplate_52ea05722052bc04b569be72d5873990032218f67e106874ebd413e645981c6f extends Twig_Template
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
        $__internal_7595541c89c0a8aaaf337f90f3f89a918ae233825a1b707b34e49dee89abc7e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7595541c89c0a8aaaf337f90f3f89a918ae233825a1b707b34e49dee89abc7e4->enter($__internal_7595541c89c0a8aaaf337f90f3f89a918ae233825a1b707b34e49dee89abc7e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Default:index.html.twig"));

        $__internal_23bba9bb781ece717a8b0039c90019c691c473acc65959814c37f4662fb2eec9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23bba9bb781ece717a8b0039c90019c691c473acc65959814c37f4662fb2eec9->enter($__internal_23bba9bb781ece717a8b0039c90019c691c473acc65959814c37f4662fb2eec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Default:index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
  <title>Admin Area</title>
  ";
        // line 5
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "aa7d62c_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_aa7d62c_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/aa7d62c_part_1_style_1.css");
            // line 6
            echo "      <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
  ";
        } else {
            // asset "aa7d62c"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_aa7d62c") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/aa7d62c.css");
            echo "      <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
  ";
        }
        unset($context["asset_url"]);
        // line 8
        echo "</head>
<body>
  <h1>Hello Admin</h1>

  ";
        // line 12
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "8160aab_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_8160aab_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/8160aab_part_1_script_1.js");
            // line 13
            echo "      <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
  ";
        } else {
            // asset "8160aab"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_8160aab") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/8160aab.js");
            echo "      <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
  ";
        }
        unset($context["asset_url"]);
        // line 15
        echo "</body>
</html>
";
        
        $__internal_7595541c89c0a8aaaf337f90f3f89a918ae233825a1b707b34e49dee89abc7e4->leave($__internal_7595541c89c0a8aaaf337f90f3f89a918ae233825a1b707b34e49dee89abc7e4_prof);

        
        $__internal_23bba9bb781ece717a8b0039c90019c691c473acc65959814c37f4662fb2eec9->leave($__internal_23bba9bb781ece717a8b0039c90019c691c473acc65959814c37f4662fb2eec9_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 15,  59 => 13,  55 => 12,  49 => 8,  35 => 6,  31 => 5,  25 => 1,);
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
  {% stylesheets '@AdminBundle/Resources/Public/Default/css/*' filter='cssrewrite' %}
      <link rel=\"stylesheet\" href=\"{{ asset_url }}\" />
  {% endstylesheets %}
</head>
<body>
  <h1>Hello Admin</h1>

  {% javascripts '@AdminBundle/Resources/Public/Default/js/*' %}
      <script src=\"{{ asset_url }}\"></script>
  {% endjavascripts %}
</body>
</html>
", "AdminBundle:Default:index.html.twig", "/Users/shibaji/Documents/GitHub/mregister/modules/Medust/AdminBundle/Resources/views/Default/index.html.twig");
    }
}
