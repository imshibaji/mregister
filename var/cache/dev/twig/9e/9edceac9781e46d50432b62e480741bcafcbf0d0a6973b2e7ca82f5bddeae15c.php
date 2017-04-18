<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_b13c66256e1bd7999a9daefcc55a75ebd607ca304b921b3b3e57cc64abcf13c6 extends Twig_Template
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
        $__internal_4a824e12198bf4cd5733853d11add751d982733a21c87ab09bff7a7e8b817050 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a824e12198bf4cd5733853d11add751d982733a21c87ab09bff7a7e8b817050->enter($__internal_4a824e12198bf4cd5733853d11add751d982733a21c87ab09bff7a7e8b817050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_4193600611465d5347c3259587ca0ac6ac64d99f23f6accb7bf693dad7d3e5d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4193600611465d5347c3259587ca0ac6ac64d99f23f6accb7bf693dad7d3e5d6->enter($__internal_4193600611465d5347c3259587ca0ac6ac64d99f23f6accb7bf693dad7d3e5d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_4a824e12198bf4cd5733853d11add751d982733a21c87ab09bff7a7e8b817050->leave($__internal_4a824e12198bf4cd5733853d11add751d982733a21c87ab09bff7a7e8b817050_prof);

        
        $__internal_4193600611465d5347c3259587ca0ac6ac64d99f23f6accb7bf693dad7d3e5d6->leave($__internal_4193600611465d5347c3259587ca0ac6ac64d99f23f6accb7bf693dad7d3e5d6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/Users/shibaji/Documents/GitHub/mregister/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
