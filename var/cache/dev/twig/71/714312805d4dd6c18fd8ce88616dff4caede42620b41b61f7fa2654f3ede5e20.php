<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_192b220c228dd6985918e68b1d64210bbd1bd65118b6332bb011a9421428a653 extends Twig_Template
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
        $__internal_82283ffa67aa0f175b33521f119243a012036acd898ddcbe319b61b201299a62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82283ffa67aa0f175b33521f119243a012036acd898ddcbe319b61b201299a62->enter($__internal_82283ffa67aa0f175b33521f119243a012036acd898ddcbe319b61b201299a62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_edf93a820809c951074d177aa513fcc4e9ba6a35f675425df9f9470ea53f6b27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edf93a820809c951074d177aa513fcc4e9ba6a35f675425df9f9470ea53f6b27->enter($__internal_edf93a820809c951074d177aa513fcc4e9ba6a35f675425df9f9470ea53f6b27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_82283ffa67aa0f175b33521f119243a012036acd898ddcbe319b61b201299a62->leave($__internal_82283ffa67aa0f175b33521f119243a012036acd898ddcbe319b61b201299a62_prof);

        
        $__internal_edf93a820809c951074d177aa513fcc4e9ba6a35f675425df9f9470ea53f6b27->leave($__internal_edf93a820809c951074d177aa513fcc4e9ba6a35f675425df9f9470ea53f6b27_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/Users/shibaji/Documents/GitHub/mregister/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
