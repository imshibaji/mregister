<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_54bd245cc5719232309fa95066d0a6ee65fe409757f3b24057cd0cfade75d93f extends Twig_Template
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
        $__internal_9d6a2d844ca186e8ede3866565a4f99e46b9d6ee0faf096cda0606b1356c161a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d6a2d844ca186e8ede3866565a4f99e46b9d6ee0faf096cda0606b1356c161a->enter($__internal_9d6a2d844ca186e8ede3866565a4f99e46b9d6ee0faf096cda0606b1356c161a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_1be31e0c8854ecd82a0c782bb082f9b8564d3a3e3fb96e1695b05c18173f2710 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1be31e0c8854ecd82a0c782bb082f9b8564d3a3e3fb96e1695b05c18173f2710->enter($__internal_1be31e0c8854ecd82a0c782bb082f9b8564d3a3e3fb96e1695b05c18173f2710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_9d6a2d844ca186e8ede3866565a4f99e46b9d6ee0faf096cda0606b1356c161a->leave($__internal_9d6a2d844ca186e8ede3866565a4f99e46b9d6ee0faf096cda0606b1356c161a_prof);

        
        $__internal_1be31e0c8854ecd82a0c782bb082f9b8564d3a3e3fb96e1695b05c18173f2710->leave($__internal_1be31e0c8854ecd82a0c782bb082f9b8564d3a3e3fb96e1695b05c18173f2710_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/Users/shibaji/Documents/GitHub/mregister/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
