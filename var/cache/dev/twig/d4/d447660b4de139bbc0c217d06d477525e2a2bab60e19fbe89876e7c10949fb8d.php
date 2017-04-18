<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_9fe4a75f19231574ca3de3980b507bfcc86eeefec5bab6314d1727a85d7a53d7 extends Twig_Template
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
        $__internal_f10c31fe8044a94c93170939a4271f3dd09ba215b494fdfdd1e3cf40c8b8290b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f10c31fe8044a94c93170939a4271f3dd09ba215b494fdfdd1e3cf40c8b8290b->enter($__internal_f10c31fe8044a94c93170939a4271f3dd09ba215b494fdfdd1e3cf40c8b8290b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_6a2e7e1c753198ec768d64192c8819edd2e850fef8609a9aeddd2ec5c30fe0d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a2e7e1c753198ec768d64192c8819edd2e850fef8609a9aeddd2ec5c30fe0d1->enter($__internal_6a2e7e1c753198ec768d64192c8819edd2e850fef8609a9aeddd2ec5c30fe0d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_f10c31fe8044a94c93170939a4271f3dd09ba215b494fdfdd1e3cf40c8b8290b->leave($__internal_f10c31fe8044a94c93170939a4271f3dd09ba215b494fdfdd1e3cf40c8b8290b_prof);

        
        $__internal_6a2e7e1c753198ec768d64192c8819edd2e850fef8609a9aeddd2ec5c30fe0d1->leave($__internal_6a2e7e1c753198ec768d64192c8819edd2e850fef8609a9aeddd2ec5c30fe0d1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/Users/shibaji/Documents/GitHub/mregister/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
