<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_b5b3fb3960e9e2c4069a7aa25d716c6df6af4ef7f78e3080803b830817167743 extends Twig_Template
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
        $__internal_6bb38a91897783bf64f81a612a0d639d069f96b1f8177a70ead8609a9b529c6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bb38a91897783bf64f81a612a0d639d069f96b1f8177a70ead8609a9b529c6a->enter($__internal_6bb38a91897783bf64f81a612a0d639d069f96b1f8177a70ead8609a9b529c6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_fe585a2b4738b9369f9e00ad1b0412e92af6d6faec54443a9dc10e5663a7b8b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe585a2b4738b9369f9e00ad1b0412e92af6d6faec54443a9dc10e5663a7b8b3->enter($__internal_fe585a2b4738b9369f9e00ad1b0412e92af6d6faec54443a9dc10e5663a7b8b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_6bb38a91897783bf64f81a612a0d639d069f96b1f8177a70ead8609a9b529c6a->leave($__internal_6bb38a91897783bf64f81a612a0d639d069f96b1f8177a70ead8609a9b529c6a_prof);

        
        $__internal_fe585a2b4738b9369f9e00ad1b0412e92af6d6faec54443a9dc10e5663a7b8b3->leave($__internal_fe585a2b4738b9369f9e00ad1b0412e92af6d6faec54443a9dc10e5663a7b8b3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Users/shibaji/Documents/GitHub/mregister/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
