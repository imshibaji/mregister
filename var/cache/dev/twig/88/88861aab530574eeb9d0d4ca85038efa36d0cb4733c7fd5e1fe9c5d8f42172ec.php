<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_020219229c202b7111ec2da2b4d5f5c008e9fcd59b3db5c28d2a25eb31008454 extends Twig_Template
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
        $__internal_405a65d5c753d3a3beb90573c534cc7433402511a13295ca758fae8fb40346ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_405a65d5c753d3a3beb90573c534cc7433402511a13295ca758fae8fb40346ff->enter($__internal_405a65d5c753d3a3beb90573c534cc7433402511a13295ca758fae8fb40346ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_53ac01574650876de1542678bb58b1b029b6b2e924e5a1c24ddadc2c5e4de75f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53ac01574650876de1542678bb58b1b029b6b2e924e5a1c24ddadc2c5e4de75f->enter($__internal_53ac01574650876de1542678bb58b1b029b6b2e924e5a1c24ddadc2c5e4de75f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_405a65d5c753d3a3beb90573c534cc7433402511a13295ca758fae8fb40346ff->leave($__internal_405a65d5c753d3a3beb90573c534cc7433402511a13295ca758fae8fb40346ff_prof);

        
        $__internal_53ac01574650876de1542678bb58b1b029b6b2e924e5a1c24ddadc2c5e4de75f->leave($__internal_53ac01574650876de1542678bb58b1b029b6b2e924e5a1c24ddadc2c5e4de75f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Users/shibaji/Documents/GitHub/mregister/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
