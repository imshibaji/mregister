<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_8875b3f0a7c8b97f0d98ac2d6af31bb5024729266a3d82be3fc8c5b0708abc29 extends Twig_Template
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
        $__internal_b7e80bf6df04cdb1af4157a99266bf3ad32449cd9c9f3b8667d1142fbb42f98a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7e80bf6df04cdb1af4157a99266bf3ad32449cd9c9f3b8667d1142fbb42f98a->enter($__internal_b7e80bf6df04cdb1af4157a99266bf3ad32449cd9c9f3b8667d1142fbb42f98a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_80c4f47724012f0c9b0b6e984d5c5b3874965343cba3bec754fc0d6ec1482f6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80c4f47724012f0c9b0b6e984d5c5b3874965343cba3bec754fc0d6ec1482f6f->enter($__internal_80c4f47724012f0c9b0b6e984d5c5b3874965343cba3bec754fc0d6ec1482f6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_b7e80bf6df04cdb1af4157a99266bf3ad32449cd9c9f3b8667d1142fbb42f98a->leave($__internal_b7e80bf6df04cdb1af4157a99266bf3ad32449cd9c9f3b8667d1142fbb42f98a_prof);

        
        $__internal_80c4f47724012f0c9b0b6e984d5c5b3874965343cba3bec754fc0d6ec1482f6f->leave($__internal_80c4f47724012f0c9b0b6e984d5c5b3874965343cba3bec754fc0d6ec1482f6f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/Users/shibaji/Documents/GitHub/mregister/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
