<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_45f1751b21f9dffbdaea40c31cb5289fa35f3f799595a37ffe424840d239d5aa extends Twig_Template
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
        $__internal_db44207288d970be794742cbfadc2767d10884b46ecddd161727f7e57fb1bd46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db44207288d970be794742cbfadc2767d10884b46ecddd161727f7e57fb1bd46->enter($__internal_db44207288d970be794742cbfadc2767d10884b46ecddd161727f7e57fb1bd46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_67474f77071f3357700484700f75baf4e95928b96ad8abff8e3ab4000de8dd1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67474f77071f3357700484700f75baf4e95928b96ad8abff8e3ab4000de8dd1a->enter($__internal_67474f77071f3357700484700f75baf4e95928b96ad8abff8e3ab4000de8dd1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_db44207288d970be794742cbfadc2767d10884b46ecddd161727f7e57fb1bd46->leave($__internal_db44207288d970be794742cbfadc2767d10884b46ecddd161727f7e57fb1bd46_prof);

        
        $__internal_67474f77071f3357700484700f75baf4e95928b96ad8abff8e3ab4000de8dd1a->leave($__internal_67474f77071f3357700484700f75baf4e95928b96ad8abff8e3ab4000de8dd1a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/Users/shibaji/Documents/GitHub/mregister/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
