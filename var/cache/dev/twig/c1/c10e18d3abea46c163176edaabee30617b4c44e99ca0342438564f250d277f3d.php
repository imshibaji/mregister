<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_34b826ae63a081648139931c48df75e6a709017cdbff06531a30f963b21fc333 extends Twig_Template
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
        $__internal_7607a8ed812a471d88903de9ca58e50bc2edc3e5954e99d2df45eabc02a6372e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7607a8ed812a471d88903de9ca58e50bc2edc3e5954e99d2df45eabc02a6372e->enter($__internal_7607a8ed812a471d88903de9ca58e50bc2edc3e5954e99d2df45eabc02a6372e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_3e19db091da9e69ec8ee1c735ab1627ae4f4c46690ff85e29c1f19b6a0d7bb64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e19db091da9e69ec8ee1c735ab1627ae4f4c46690ff85e29c1f19b6a0d7bb64->enter($__internal_3e19db091da9e69ec8ee1c735ab1627ae4f4c46690ff85e29c1f19b6a0d7bb64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_7607a8ed812a471d88903de9ca58e50bc2edc3e5954e99d2df45eabc02a6372e->leave($__internal_7607a8ed812a471d88903de9ca58e50bc2edc3e5954e99d2df45eabc02a6372e_prof);

        
        $__internal_3e19db091da9e69ec8ee1c735ab1627ae4f4c46690ff85e29c1f19b6a0d7bb64->leave($__internal_3e19db091da9e69ec8ee1c735ab1627ae4f4c46690ff85e29c1f19b6a0d7bb64_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/Users/shibaji/Documents/GitHub/mregister/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
