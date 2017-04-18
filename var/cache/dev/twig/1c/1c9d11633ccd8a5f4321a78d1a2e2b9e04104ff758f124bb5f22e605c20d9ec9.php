<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_cbf798fc5b556fe5625de51ad1548807479789f811650b2c8cf682d42f6a893e extends Twig_Template
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
        $__internal_ed1e62a0e0cd82a2cb9d698925f3885737f1ff450cb56d4d7b9d2b15a1720970 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed1e62a0e0cd82a2cb9d698925f3885737f1ff450cb56d4d7b9d2b15a1720970->enter($__internal_ed1e62a0e0cd82a2cb9d698925f3885737f1ff450cb56d4d7b9d2b15a1720970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_766821dac699ddfc27e2b7e5b313659e78e28c02cf5b367da9bb9bd741ee9cfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_766821dac699ddfc27e2b7e5b313659e78e28c02cf5b367da9bb9bd741ee9cfb->enter($__internal_766821dac699ddfc27e2b7e5b313659e78e28c02cf5b367da9bb9bd741ee9cfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_ed1e62a0e0cd82a2cb9d698925f3885737f1ff450cb56d4d7b9d2b15a1720970->leave($__internal_ed1e62a0e0cd82a2cb9d698925f3885737f1ff450cb56d4d7b9d2b15a1720970_prof);

        
        $__internal_766821dac699ddfc27e2b7e5b313659e78e28c02cf5b367da9bb9bd741ee9cfb->leave($__internal_766821dac699ddfc27e2b7e5b313659e78e28c02cf5b367da9bb9bd741ee9cfb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/Users/shibaji/Documents/GitHub/mregister/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
