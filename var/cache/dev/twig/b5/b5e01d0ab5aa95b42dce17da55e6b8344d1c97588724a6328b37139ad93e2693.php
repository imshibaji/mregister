<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_1100a66a2df286209b7124f93d8a8c209875153d38226161b7dc2991e8254f25 extends Twig_Template
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
        $__internal_7de97e44a85567447d4f2f8fb26d94035e4e715d8fa8cecda766405c2ca24901 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7de97e44a85567447d4f2f8fb26d94035e4e715d8fa8cecda766405c2ca24901->enter($__internal_7de97e44a85567447d4f2f8fb26d94035e4e715d8fa8cecda766405c2ca24901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_254237d2b33319a0593c2ca3c01b97b8eccd6094f411b70178128b32b087fd1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_254237d2b33319a0593c2ca3c01b97b8eccd6094f411b70178128b32b087fd1a->enter($__internal_254237d2b33319a0593c2ca3c01b97b8eccd6094f411b70178128b32b087fd1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_7de97e44a85567447d4f2f8fb26d94035e4e715d8fa8cecda766405c2ca24901->leave($__internal_7de97e44a85567447d4f2f8fb26d94035e4e715d8fa8cecda766405c2ca24901_prof);

        
        $__internal_254237d2b33319a0593c2ca3c01b97b8eccd6094f411b70178128b32b087fd1a->leave($__internal_254237d2b33319a0593c2ca3c01b97b8eccd6094f411b70178128b32b087fd1a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Users/shibaji/Documents/GitHub/mregister/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
