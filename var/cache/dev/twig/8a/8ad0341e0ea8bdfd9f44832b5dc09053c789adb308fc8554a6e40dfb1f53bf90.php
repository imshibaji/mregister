<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_9a1593cd492bb56fb5435427838aeb22d9693449c22026a48971f06e8400886c extends Twig_Template
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
        $__internal_c65902f2df926b4b3b2516e106174ab106f44d708372a62c49f97d468da59372 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c65902f2df926b4b3b2516e106174ab106f44d708372a62c49f97d468da59372->enter($__internal_c65902f2df926b4b3b2516e106174ab106f44d708372a62c49f97d468da59372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_7292c3738e0d17dcb98dff178de3ed0f7b20894ad927fdfd20531ff4513d4c26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7292c3738e0d17dcb98dff178de3ed0f7b20894ad927fdfd20531ff4513d4c26->enter($__internal_7292c3738e0d17dcb98dff178de3ed0f7b20894ad927fdfd20531ff4513d4c26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_c65902f2df926b4b3b2516e106174ab106f44d708372a62c49f97d468da59372->leave($__internal_c65902f2df926b4b3b2516e106174ab106f44d708372a62c49f97d468da59372_prof);

        
        $__internal_7292c3738e0d17dcb98dff178de3ed0f7b20894ad927fdfd20531ff4513d4c26->leave($__internal_7292c3738e0d17dcb98dff178de3ed0f7b20894ad927fdfd20531ff4513d4c26_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Users/shibaji/Documents/GitHub/mregister/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
