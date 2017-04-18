<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_dc7e01cb195c712c366879f883c895ace3fc24e0f7e9eaf028cd4b98f4abfff1 extends Twig_Template
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
        $__internal_8580f39b38d929082d2a3215bdf805cf5e60aabee0840547f75bf633e9546597 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8580f39b38d929082d2a3215bdf805cf5e60aabee0840547f75bf633e9546597->enter($__internal_8580f39b38d929082d2a3215bdf805cf5e60aabee0840547f75bf633e9546597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_3d7c04ac16318ce11e87602e001be04b34eee49eaea990e658987b686fe1d007 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d7c04ac16318ce11e87602e001be04b34eee49eaea990e658987b686fe1d007->enter($__internal_3d7c04ac16318ce11e87602e001be04b34eee49eaea990e658987b686fe1d007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_8580f39b38d929082d2a3215bdf805cf5e60aabee0840547f75bf633e9546597->leave($__internal_8580f39b38d929082d2a3215bdf805cf5e60aabee0840547f75bf633e9546597_prof);

        
        $__internal_3d7c04ac16318ce11e87602e001be04b34eee49eaea990e658987b686fe1d007->leave($__internal_3d7c04ac16318ce11e87602e001be04b34eee49eaea990e658987b686fe1d007_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/Users/shibaji/Documents/GitHub/mregister/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
