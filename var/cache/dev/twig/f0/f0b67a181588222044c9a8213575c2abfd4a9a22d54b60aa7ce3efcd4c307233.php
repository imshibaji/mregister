<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_9bf9ae229b5d7301bf67da0cba28e1b06b6be1032cad550d7e65e99722bb4ed3 extends Twig_Template
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
        $__internal_616cbe89823cd368c891a7946fc68b7647949c9ad348958fbadf2a89be280398 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_616cbe89823cd368c891a7946fc68b7647949c9ad348958fbadf2a89be280398->enter($__internal_616cbe89823cd368c891a7946fc68b7647949c9ad348958fbadf2a89be280398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_24da2d36f17597539031ab7ecd4c541ec1d7348ff836f9cf97d0b6e5a35ebf5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24da2d36f17597539031ab7ecd4c541ec1d7348ff836f9cf97d0b6e5a35ebf5f->enter($__internal_24da2d36f17597539031ab7ecd4c541ec1d7348ff836f9cf97d0b6e5a35ebf5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_616cbe89823cd368c891a7946fc68b7647949c9ad348958fbadf2a89be280398->leave($__internal_616cbe89823cd368c891a7946fc68b7647949c9ad348958fbadf2a89be280398_prof);

        
        $__internal_24da2d36f17597539031ab7ecd4c541ec1d7348ff836f9cf97d0b6e5a35ebf5f->leave($__internal_24da2d36f17597539031ab7ecd4c541ec1d7348ff836f9cf97d0b6e5a35ebf5f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Users/shibaji/Documents/GitHub/mregister/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
