<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_5f5d04a7ffd6057e9872fda8c63661128add8c5e271c73f69e1088ff2ea4e351 extends Twig_Template
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
        $__internal_f430751af6315e5f4b83f3ba0491d0444db9f29d98b4a2ee06733bbd2e3a1373 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f430751af6315e5f4b83f3ba0491d0444db9f29d98b4a2ee06733bbd2e3a1373->enter($__internal_f430751af6315e5f4b83f3ba0491d0444db9f29d98b4a2ee06733bbd2e3a1373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_4c3a392f7f9fe9de7d0b2f7d78e759777238ab64948dac2c5c91775f164b52bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c3a392f7f9fe9de7d0b2f7d78e759777238ab64948dac2c5c91775f164b52bb->enter($__internal_4c3a392f7f9fe9de7d0b2f7d78e759777238ab64948dac2c5c91775f164b52bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_f430751af6315e5f4b83f3ba0491d0444db9f29d98b4a2ee06733bbd2e3a1373->leave($__internal_f430751af6315e5f4b83f3ba0491d0444db9f29d98b4a2ee06733bbd2e3a1373_prof);

        
        $__internal_4c3a392f7f9fe9de7d0b2f7d78e759777238ab64948dac2c5c91775f164b52bb->leave($__internal_4c3a392f7f9fe9de7d0b2f7d78e759777238ab64948dac2c5c91775f164b52bb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Users/shibaji/Documents/GitHub/mregister/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
