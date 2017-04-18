<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_5d755dab87d84931d41610a6ee25d5665cade0cc37d7b3cbf8e5c4edf82b9428 extends Twig_Template
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
        $__internal_c73cd7ee2e8fdd3d754e4683f76d78f8a9ba9d5b0824a7ab7c5a03b603d80967 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c73cd7ee2e8fdd3d754e4683f76d78f8a9ba9d5b0824a7ab7c5a03b603d80967->enter($__internal_c73cd7ee2e8fdd3d754e4683f76d78f8a9ba9d5b0824a7ab7c5a03b603d80967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_08a70ad113f11435305e0def3953311ee2660558edb73ef20a7860b23670b5ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08a70ad113f11435305e0def3953311ee2660558edb73ef20a7860b23670b5ae->enter($__internal_08a70ad113f11435305e0def3953311ee2660558edb73ef20a7860b23670b5ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_c73cd7ee2e8fdd3d754e4683f76d78f8a9ba9d5b0824a7ab7c5a03b603d80967->leave($__internal_c73cd7ee2e8fdd3d754e4683f76d78f8a9ba9d5b0824a7ab7c5a03b603d80967_prof);

        
        $__internal_08a70ad113f11435305e0def3953311ee2660558edb73ef20a7860b23670b5ae->leave($__internal_08a70ad113f11435305e0def3953311ee2660558edb73ef20a7860b23670b5ae_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/Users/shibaji/Documents/GitHub/mregister/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
