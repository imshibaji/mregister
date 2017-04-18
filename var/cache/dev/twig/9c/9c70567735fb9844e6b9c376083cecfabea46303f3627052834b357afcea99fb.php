<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_3df992ca7b03fc5c13a196217375a2bcc77bf56ec0a48ae9b41cf3eb6a1272ff extends Twig_Template
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
        $__internal_79b396582cf6083e16fa0d1a97ed789a0773f1247b2c427b168f41380d0995e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79b396582cf6083e16fa0d1a97ed789a0773f1247b2c427b168f41380d0995e4->enter($__internal_79b396582cf6083e16fa0d1a97ed789a0773f1247b2c427b168f41380d0995e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_9fb7dbd8348779af66e9b9f448a521fa7eae4f29db3e0036badafa9efde6711d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fb7dbd8348779af66e9b9f448a521fa7eae4f29db3e0036badafa9efde6711d->enter($__internal_9fb7dbd8348779af66e9b9f448a521fa7eae4f29db3e0036badafa9efde6711d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_79b396582cf6083e16fa0d1a97ed789a0773f1247b2c427b168f41380d0995e4->leave($__internal_79b396582cf6083e16fa0d1a97ed789a0773f1247b2c427b168f41380d0995e4_prof);

        
        $__internal_9fb7dbd8348779af66e9b9f448a521fa7eae4f29db3e0036badafa9efde6711d->leave($__internal_9fb7dbd8348779af66e9b9f448a521fa7eae4f29db3e0036badafa9efde6711d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/Users/shibaji/Documents/GitHub/mregister/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
