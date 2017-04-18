<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_f4bbdbfda7e31485ba9b7db75fdf0976acca231b063b0dab167ea6f772907d0b extends Twig_Template
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
        $__internal_f0d3bc8d10704cec16fa48d569527a8a89111e82e22f91844d67862c408bc702 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0d3bc8d10704cec16fa48d569527a8a89111e82e22f91844d67862c408bc702->enter($__internal_f0d3bc8d10704cec16fa48d569527a8a89111e82e22f91844d67862c408bc702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_fc5e3e72bc00003fa1a4002328778fbd19adb732af3be00f51760a2edb120724 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc5e3e72bc00003fa1a4002328778fbd19adb732af3be00f51760a2edb120724->enter($__internal_fc5e3e72bc00003fa1a4002328778fbd19adb732af3be00f51760a2edb120724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_f0d3bc8d10704cec16fa48d569527a8a89111e82e22f91844d67862c408bc702->leave($__internal_f0d3bc8d10704cec16fa48d569527a8a89111e82e22f91844d67862c408bc702_prof);

        
        $__internal_fc5e3e72bc00003fa1a4002328778fbd19adb732af3be00f51760a2edb120724->leave($__internal_fc5e3e72bc00003fa1a4002328778fbd19adb732af3be00f51760a2edb120724_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/Users/shibaji/Documents/GitHub/mregister/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
