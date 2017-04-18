<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_a1bdceb8e44e4217807186f42c0c7cdac6c6c3157ddc809bdc3b61ee60fa175c extends Twig_Template
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
        $__internal_ae00764cd293362482a53e0197b8309cf59a3a6c506dbfdda6b5266d9164bf1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae00764cd293362482a53e0197b8309cf59a3a6c506dbfdda6b5266d9164bf1a->enter($__internal_ae00764cd293362482a53e0197b8309cf59a3a6c506dbfdda6b5266d9164bf1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_fb7aaca2e23187480c5ee41212f7615156af093824128fba3a3cb1a7a5e20ed7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb7aaca2e23187480c5ee41212f7615156af093824128fba3a3cb1a7a5e20ed7->enter($__internal_fb7aaca2e23187480c5ee41212f7615156af093824128fba3a3cb1a7a5e20ed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_ae00764cd293362482a53e0197b8309cf59a3a6c506dbfdda6b5266d9164bf1a->leave($__internal_ae00764cd293362482a53e0197b8309cf59a3a6c506dbfdda6b5266d9164bf1a_prof);

        
        $__internal_fb7aaca2e23187480c5ee41212f7615156af093824128fba3a3cb1a7a5e20ed7->leave($__internal_fb7aaca2e23187480c5ee41212f7615156af093824128fba3a3cb1a7a5e20ed7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/Users/shibaji/Documents/GitHub/mregister/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
