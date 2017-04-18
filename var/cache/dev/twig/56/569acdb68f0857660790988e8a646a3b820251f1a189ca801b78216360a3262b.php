<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_37b174d1b67f7c620c2913ab1bf484d4ab57e567ed0a3904a633755e97e6fe96 extends Twig_Template
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
        $__internal_9c42a70a82ff9022822a0e12220247ae8d21f15b73a00ba7fdc91659ce453626 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c42a70a82ff9022822a0e12220247ae8d21f15b73a00ba7fdc91659ce453626->enter($__internal_9c42a70a82ff9022822a0e12220247ae8d21f15b73a00ba7fdc91659ce453626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_357efd92f36e4ca3494c728c5a323133e62f930cfc8824aa57c341f37c528913 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_357efd92f36e4ca3494c728c5a323133e62f930cfc8824aa57c341f37c528913->enter($__internal_357efd92f36e4ca3494c728c5a323133e62f930cfc8824aa57c341f37c528913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_9c42a70a82ff9022822a0e12220247ae8d21f15b73a00ba7fdc91659ce453626->leave($__internal_9c42a70a82ff9022822a0e12220247ae8d21f15b73a00ba7fdc91659ce453626_prof);

        
        $__internal_357efd92f36e4ca3494c728c5a323133e62f930cfc8824aa57c341f37c528913->leave($__internal_357efd92f36e4ca3494c728c5a323133e62f930cfc8824aa57c341f37c528913_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/Users/shibaji/Documents/GitHub/mregister/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
