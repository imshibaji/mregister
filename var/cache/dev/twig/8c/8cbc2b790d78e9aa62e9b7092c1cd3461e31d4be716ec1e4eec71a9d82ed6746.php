<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_44980a8b851b6374722e0c1ed04496a2bf02ddf94e54813a50f4dcb314504f1e extends Twig_Template
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
        $__internal_5dc92d50331108fa14713959d78939e36407fb2498d560f873b00e26ed370ea9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dc92d50331108fa14713959d78939e36407fb2498d560f873b00e26ed370ea9->enter($__internal_5dc92d50331108fa14713959d78939e36407fb2498d560f873b00e26ed370ea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_11b29d36965fa2d37d6a92880ab2c0b0725a6a640882bd698beb162a9984dca5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11b29d36965fa2d37d6a92880ab2c0b0725a6a640882bd698beb162a9984dca5->enter($__internal_11b29d36965fa2d37d6a92880ab2c0b0725a6a640882bd698beb162a9984dca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_5dc92d50331108fa14713959d78939e36407fb2498d560f873b00e26ed370ea9->leave($__internal_5dc92d50331108fa14713959d78939e36407fb2498d560f873b00e26ed370ea9_prof);

        
        $__internal_11b29d36965fa2d37d6a92880ab2c0b0725a6a640882bd698beb162a9984dca5->leave($__internal_11b29d36965fa2d37d6a92880ab2c0b0725a6a640882bd698beb162a9984dca5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/Users/shibaji/Documents/GitHub/mregister/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
