<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_5079e004cb6a665d60767b9d94f441fb44e420c0ac475da70c63605b806c99d7 extends Twig_Template
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
        $__internal_dfd1f0cd384270538a0558f460a2a2c03b53d5a568622e6a741c616022e2d596 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfd1f0cd384270538a0558f460a2a2c03b53d5a568622e6a741c616022e2d596->enter($__internal_dfd1f0cd384270538a0558f460a2a2c03b53d5a568622e6a741c616022e2d596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_ee2ec09687ae9954140f359666fabaa3c832d26b5cd38d296eb6d17fbb0be15b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee2ec09687ae9954140f359666fabaa3c832d26b5cd38d296eb6d17fbb0be15b->enter($__internal_ee2ec09687ae9954140f359666fabaa3c832d26b5cd38d296eb6d17fbb0be15b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_dfd1f0cd384270538a0558f460a2a2c03b53d5a568622e6a741c616022e2d596->leave($__internal_dfd1f0cd384270538a0558f460a2a2c03b53d5a568622e6a741c616022e2d596_prof);

        
        $__internal_ee2ec09687ae9954140f359666fabaa3c832d26b5cd38d296eb6d17fbb0be15b->leave($__internal_ee2ec09687ae9954140f359666fabaa3c832d26b5cd38d296eb6d17fbb0be15b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Users/shibaji/Documents/GitHub/mregister/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
