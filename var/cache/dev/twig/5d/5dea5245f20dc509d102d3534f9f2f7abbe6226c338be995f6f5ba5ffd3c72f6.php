<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_344b7906aa6a48a41a7a16eae52d89348ce2b41fad364a5bcaa0a54e7f7d0674 extends Twig_Template
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
        $__internal_15ad1b19d3edf2175c640337b0c69acae1d45d3845dc9b589672efa31c8993b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15ad1b19d3edf2175c640337b0c69acae1d45d3845dc9b589672efa31c8993b5->enter($__internal_15ad1b19d3edf2175c640337b0c69acae1d45d3845dc9b589672efa31c8993b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_4ca5f2437061124fc373d0636ca1d2c79d74b27c54c1d6f0452d23e462f113ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ca5f2437061124fc373d0636ca1d2c79d74b27c54c1d6f0452d23e462f113ed->enter($__internal_4ca5f2437061124fc373d0636ca1d2c79d74b27c54c1d6f0452d23e462f113ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_15ad1b19d3edf2175c640337b0c69acae1d45d3845dc9b589672efa31c8993b5->leave($__internal_15ad1b19d3edf2175c640337b0c69acae1d45d3845dc9b589672efa31c8993b5_prof);

        
        $__internal_4ca5f2437061124fc373d0636ca1d2c79d74b27c54c1d6f0452d23e462f113ed->leave($__internal_4ca5f2437061124fc373d0636ca1d2c79d74b27c54c1d6f0452d23e462f113ed_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/Users/shibaji/Documents/GitHub/mregister/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
