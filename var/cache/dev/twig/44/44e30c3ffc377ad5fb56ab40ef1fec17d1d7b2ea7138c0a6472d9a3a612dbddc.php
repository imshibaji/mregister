<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_62bd63f9b177ddc924717f9cbd520cb6492501cffd8d08fcfacd4b4320b5f4aa extends Twig_Template
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
        $__internal_f2982da54226227b3e6730b4051a62a9f0c9df19e605c924e09dcbf258a3fe1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2982da54226227b3e6730b4051a62a9f0c9df19e605c924e09dcbf258a3fe1e->enter($__internal_f2982da54226227b3e6730b4051a62a9f0c9df19e605c924e09dcbf258a3fe1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_b41a6daf9d76ddcea7a6cf2290775f2240d7021fa826ca3cb1c55d62a5dde951 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b41a6daf9d76ddcea7a6cf2290775f2240d7021fa826ca3cb1c55d62a5dde951->enter($__internal_b41a6daf9d76ddcea7a6cf2290775f2240d7021fa826ca3cb1c55d62a5dde951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_f2982da54226227b3e6730b4051a62a9f0c9df19e605c924e09dcbf258a3fe1e->leave($__internal_f2982da54226227b3e6730b4051a62a9f0c9df19e605c924e09dcbf258a3fe1e_prof);

        
        $__internal_b41a6daf9d76ddcea7a6cf2290775f2240d7021fa826ca3cb1c55d62a5dde951->leave($__internal_b41a6daf9d76ddcea7a6cf2290775f2240d7021fa826ca3cb1c55d62a5dde951_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/Users/shibaji/Documents/GitHub/mregister/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
