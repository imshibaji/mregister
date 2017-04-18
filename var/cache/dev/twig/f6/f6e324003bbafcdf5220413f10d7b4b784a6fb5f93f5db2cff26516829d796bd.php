<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_cbb2cf5f088e4ee0d1b1cc9f698a689b3adc949ae0ef6af8bc25f4377d9316b4 extends Twig_Template
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
        $__internal_d3284c5208254a685c711c62388c4d79d2753c22932de19f613e7cd2feb740d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3284c5208254a685c711c62388c4d79d2753c22932de19f613e7cd2feb740d3->enter($__internal_d3284c5208254a685c711c62388c4d79d2753c22932de19f613e7cd2feb740d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_7147dfce2195aa4d55f5583c0474c5fad207fe6049054b25b5ceaa6b8065185b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7147dfce2195aa4d55f5583c0474c5fad207fe6049054b25b5ceaa6b8065185b->enter($__internal_7147dfce2195aa4d55f5583c0474c5fad207fe6049054b25b5ceaa6b8065185b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_d3284c5208254a685c711c62388c4d79d2753c22932de19f613e7cd2feb740d3->leave($__internal_d3284c5208254a685c711c62388c4d79d2753c22932de19f613e7cd2feb740d3_prof);

        
        $__internal_7147dfce2195aa4d55f5583c0474c5fad207fe6049054b25b5ceaa6b8065185b->leave($__internal_7147dfce2195aa4d55f5583c0474c5fad207fe6049054b25b5ceaa6b8065185b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/Users/shibaji/Documents/GitHub/mregister/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
