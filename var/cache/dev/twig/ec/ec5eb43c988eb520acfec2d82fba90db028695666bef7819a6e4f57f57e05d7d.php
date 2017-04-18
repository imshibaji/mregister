<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_167f47b2ff8688e80642cb2195fe213fea473818f691a269984a802b9c6b799f extends Twig_Template
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
        $__internal_78443648ab70a96728d22a4f1ac17ca452b58bd73ea7b218dca3be561ef5a87d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78443648ab70a96728d22a4f1ac17ca452b58bd73ea7b218dca3be561ef5a87d->enter($__internal_78443648ab70a96728d22a4f1ac17ca452b58bd73ea7b218dca3be561ef5a87d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_9551580112764533104d530b0a9249a8c6a27707fad19555d2673c4ed72c51bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9551580112764533104d530b0a9249a8c6a27707fad19555d2673c4ed72c51bd->enter($__internal_9551580112764533104d530b0a9249a8c6a27707fad19555d2673c4ed72c51bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_78443648ab70a96728d22a4f1ac17ca452b58bd73ea7b218dca3be561ef5a87d->leave($__internal_78443648ab70a96728d22a4f1ac17ca452b58bd73ea7b218dca3be561ef5a87d_prof);

        
        $__internal_9551580112764533104d530b0a9249a8c6a27707fad19555d2673c4ed72c51bd->leave($__internal_9551580112764533104d530b0a9249a8c6a27707fad19555d2673c4ed72c51bd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/Users/shibaji/Documents/GitHub/mregister/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
