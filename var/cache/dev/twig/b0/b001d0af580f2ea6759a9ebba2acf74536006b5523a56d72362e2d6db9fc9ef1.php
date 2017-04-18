<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_93b02919ed769b3264555e8fa428ea7b9fbbba538c92da549f3c9e6056fb22fb extends Twig_Template
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
        $__internal_6dfc9b17ba66d2a28f878bf7f3258dd8d6122669d34052efffe66e9b500caac1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6dfc9b17ba66d2a28f878bf7f3258dd8d6122669d34052efffe66e9b500caac1->enter($__internal_6dfc9b17ba66d2a28f878bf7f3258dd8d6122669d34052efffe66e9b500caac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_4043df1aa8569f1ba90bfe1a8913680268832cdd12851c2c83a4110cb9e3fd27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4043df1aa8569f1ba90bfe1a8913680268832cdd12851c2c83a4110cb9e3fd27->enter($__internal_4043df1aa8569f1ba90bfe1a8913680268832cdd12851c2c83a4110cb9e3fd27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_6dfc9b17ba66d2a28f878bf7f3258dd8d6122669d34052efffe66e9b500caac1->leave($__internal_6dfc9b17ba66d2a28f878bf7f3258dd8d6122669d34052efffe66e9b500caac1_prof);

        
        $__internal_4043df1aa8569f1ba90bfe1a8913680268832cdd12851c2c83a4110cb9e3fd27->leave($__internal_4043df1aa8569f1ba90bfe1a8913680268832cdd12851c2c83a4110cb9e3fd27_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.js.twig", "/Users/shibaji/Documents/GitHub/mregister/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
