<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_1e322bab492b0e3fb6c66490bc4c89e1209dc074a333d2cf78005a89b1a6d39b extends Twig_Template
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
        $__internal_51e01bef46feb100878198e712f45bab26c5d452588208bcd303dcb6372bf8cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51e01bef46feb100878198e712f45bab26c5d452588208bcd303dcb6372bf8cf->enter($__internal_51e01bef46feb100878198e712f45bab26c5d452588208bcd303dcb6372bf8cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        $__internal_9b71a38b3c03461413453befdb35d4940c6eb4a551f25c3afe86bc839ee57f9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b71a38b3c03461413453befdb35d4940c6eb4a551f25c3afe86bc839ee57f9c->enter($__internal_9b71a38b3c03461413453befdb35d4940c6eb4a551f25c3afe86bc839ee57f9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_51e01bef46feb100878198e712f45bab26c5d452588208bcd303dcb6372bf8cf->leave($__internal_51e01bef46feb100878198e712f45bab26c5d452588208bcd303dcb6372bf8cf_prof);

        
        $__internal_9b71a38b3c03461413453befdb35d4940c6eb4a551f25c3afe86bc839ee57f9c->leave($__internal_9b71a38b3c03461413453befdb35d4940c6eb4a551f25c3afe86bc839ee57f9c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "/Users/shibaji/Documents/GitHub/mregister/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/range_widget.html.php");
    }
}
