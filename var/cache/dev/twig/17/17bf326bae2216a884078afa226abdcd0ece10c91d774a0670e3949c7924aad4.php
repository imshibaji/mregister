<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_e706bff214f875b1cfb2d311da94208639b9b3dea2634757ea6ef03cba86968a extends Twig_Template
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
        $__internal_655fe71bd1c522e505e052e31524686e58effd0e3cf915fa9148cc380acb9a04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_655fe71bd1c522e505e052e31524686e58effd0e3cf915fa9148cc380acb9a04->enter($__internal_655fe71bd1c522e505e052e31524686e58effd0e3cf915fa9148cc380acb9a04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_0353ee852b88cb737d8e4f56b46bdfcf384ef96ba789e6431d04b3ff501c49df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0353ee852b88cb737d8e4f56b46bdfcf384ef96ba789e6431d04b3ff501c49df->enter($__internal_0353ee852b88cb737d8e4f56b46bdfcf384ef96ba789e6431d04b3ff501c49df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_655fe71bd1c522e505e052e31524686e58effd0e3cf915fa9148cc380acb9a04->leave($__internal_655fe71bd1c522e505e052e31524686e58effd0e3cf915fa9148cc380acb9a04_prof);

        
        $__internal_0353ee852b88cb737d8e4f56b46bdfcf384ef96ba789e6431d04b3ff501c49df->leave($__internal_0353ee852b88cb737d8e4f56b46bdfcf384ef96ba789e6431d04b3ff501c49df_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/Users/shibaji/Documents/GitHub/mregister/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
