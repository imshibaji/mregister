<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_37ccc9928367c230ff643406d6f0c14f711722f43fce364b4abeac7b93f50a79 extends Twig_Template
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
        $__internal_5c127c2e5d075034c9a7971479fd41542beff776f703a0ed4d95519ea5b037b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c127c2e5d075034c9a7971479fd41542beff776f703a0ed4d95519ea5b037b3->enter($__internal_5c127c2e5d075034c9a7971479fd41542beff776f703a0ed4d95519ea5b037b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_fc27ad4696bdd7c3f2e32fd7ae023691a853b95f37772ed71a111ceb095f7232 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc27ad4696bdd7c3f2e32fd7ae023691a853b95f37772ed71a111ceb095f7232->enter($__internal_fc27ad4696bdd7c3f2e32fd7ae023691a853b95f37772ed71a111ceb095f7232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_5c127c2e5d075034c9a7971479fd41542beff776f703a0ed4d95519ea5b037b3->leave($__internal_5c127c2e5d075034c9a7971479fd41542beff776f703a0ed4d95519ea5b037b3_prof);

        
        $__internal_fc27ad4696bdd7c3f2e32fd7ae023691a853b95f37772ed71a111ceb095f7232->leave($__internal_fc27ad4696bdd7c3f2e32fd7ae023691a853b95f37772ed71a111ceb095f7232_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/Users/shibaji/Documents/GitHub/mregister/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
