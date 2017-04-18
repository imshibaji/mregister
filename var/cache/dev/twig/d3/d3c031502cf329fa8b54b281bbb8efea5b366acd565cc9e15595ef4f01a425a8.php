<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_b5df0a62a168978c05ab0966b847506e5629e800d8ea83a887fe1154220d6b6e extends Twig_Template
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
        $__internal_52131c824c3eeccd7e988a2d88f179bba3e0af57311b8a53220707cff5a4360d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52131c824c3eeccd7e988a2d88f179bba3e0af57311b8a53220707cff5a4360d->enter($__internal_52131c824c3eeccd7e988a2d88f179bba3e0af57311b8a53220707cff5a4360d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_96529e9f4f3ca9b626e4bd0b67399303b88bcf9dae5f3a42b8c69c176cf306f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96529e9f4f3ca9b626e4bd0b67399303b88bcf9dae5f3a42b8c69c176cf306f4->enter($__internal_96529e9f4f3ca9b626e4bd0b67399303b88bcf9dae5f3a42b8c69c176cf306f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_52131c824c3eeccd7e988a2d88f179bba3e0af57311b8a53220707cff5a4360d->leave($__internal_52131c824c3eeccd7e988a2d88f179bba3e0af57311b8a53220707cff5a4360d_prof);

        
        $__internal_96529e9f4f3ca9b626e4bd0b67399303b88bcf9dae5f3a42b8c69c176cf306f4->leave($__internal_96529e9f4f3ca9b626e4bd0b67399303b88bcf9dae5f3a42b8c69c176cf306f4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Users/shibaji/Documents/GitHub/mregister/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
