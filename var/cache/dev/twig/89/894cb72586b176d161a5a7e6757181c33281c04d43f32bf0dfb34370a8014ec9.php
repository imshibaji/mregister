<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_101c5b7e63b80961e34a97baa8496bdee20c7cc196758834b2f066090e1f0049 extends Twig_Template
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
        $__internal_19bf82c886b6175c2e88f458ac12d82019bbf9f796c39d7064a9651f0cb9ac02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19bf82c886b6175c2e88f458ac12d82019bbf9f796c39d7064a9651f0cb9ac02->enter($__internal_19bf82c886b6175c2e88f458ac12d82019bbf9f796c39d7064a9651f0cb9ac02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_22041bbcef6d977686fdd6305aa20d275f2cfc3a332b93be5a60564b50a48d76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22041bbcef6d977686fdd6305aa20d275f2cfc3a332b93be5a60564b50a48d76->enter($__internal_22041bbcef6d977686fdd6305aa20d275f2cfc3a332b93be5a60564b50a48d76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_19bf82c886b6175c2e88f458ac12d82019bbf9f796c39d7064a9651f0cb9ac02->leave($__internal_19bf82c886b6175c2e88f458ac12d82019bbf9f796c39d7064a9651f0cb9ac02_prof);

        
        $__internal_22041bbcef6d977686fdd6305aa20d275f2cfc3a332b93be5a60564b50a48d76->leave($__internal_22041bbcef6d977686fdd6305aa20d275f2cfc3a332b93be5a60564b50a48d76_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/Users/shibaji/Documents/GitHub/mregister/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
