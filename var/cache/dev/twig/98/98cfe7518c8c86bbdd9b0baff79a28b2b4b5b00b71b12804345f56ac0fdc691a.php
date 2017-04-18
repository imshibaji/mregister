<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_4cada4ff4dd14fc8c99b77c6e3b83a9780e00c5f491deadbd01a09865153b437 extends Twig_Template
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
        $__internal_6053894a04386d72afebe323bd428c37e7f17eebdcec0cc2b65bbd0648fb788a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6053894a04386d72afebe323bd428c37e7f17eebdcec0cc2b65bbd0648fb788a->enter($__internal_6053894a04386d72afebe323bd428c37e7f17eebdcec0cc2b65bbd0648fb788a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_11889174af48678b5defa0abd41a492c1d2c2b01597758cdb18b2e070094aed1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11889174af48678b5defa0abd41a492c1d2c2b01597758cdb18b2e070094aed1->enter($__internal_11889174af48678b5defa0abd41a492c1d2c2b01597758cdb18b2e070094aed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_6053894a04386d72afebe323bd428c37e7f17eebdcec0cc2b65bbd0648fb788a->leave($__internal_6053894a04386d72afebe323bd428c37e7f17eebdcec0cc2b65bbd0648fb788a_prof);

        
        $__internal_11889174af48678b5defa0abd41a492c1d2c2b01597758cdb18b2e070094aed1->leave($__internal_11889174af48678b5defa0abd41a492c1d2c2b01597758cdb18b2e070094aed1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/Users/shibaji/Documents/GitHub/mregister/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
