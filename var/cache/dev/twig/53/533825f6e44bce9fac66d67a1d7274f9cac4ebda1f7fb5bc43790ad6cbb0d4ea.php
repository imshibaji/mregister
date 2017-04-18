<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_38f2661f3058f2cdd5924f10314cb80e00e42f7281fbf28a26a5ef1d0912a5cf extends Twig_Template
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
        $__internal_455dc5546b89caac3d6e3f9f9b74de6a4f4c130b094cdadc21bc104ba6469137 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_455dc5546b89caac3d6e3f9f9b74de6a4f4c130b094cdadc21bc104ba6469137->enter($__internal_455dc5546b89caac3d6e3f9f9b74de6a4f4c130b094cdadc21bc104ba6469137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_920c300c659903a3b3ef6e94ace8c6bfd166f555028c9949edb32898693698ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_920c300c659903a3b3ef6e94ace8c6bfd166f555028c9949edb32898693698ca->enter($__internal_920c300c659903a3b3ef6e94ace8c6bfd166f555028c9949edb32898693698ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_455dc5546b89caac3d6e3f9f9b74de6a4f4c130b094cdadc21bc104ba6469137->leave($__internal_455dc5546b89caac3d6e3f9f9b74de6a4f4c130b094cdadc21bc104ba6469137_prof);

        
        $__internal_920c300c659903a3b3ef6e94ace8c6bfd166f555028c9949edb32898693698ca->leave($__internal_920c300c659903a3b3ef6e94ace8c6bfd166f555028c9949edb32898693698ca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Users/shibaji/Documents/GitHub/mregister/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
