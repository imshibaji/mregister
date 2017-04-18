<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_cf2fce51f09dfc6246c5946697a7fd95d70e3f85c9624b52ed0739be51eb5d4c extends Twig_Template
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
        $__internal_20ca693fcd1bff2a625631c0836b3effed8a66fc38948ae5a4693dbce02bc426 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20ca693fcd1bff2a625631c0836b3effed8a66fc38948ae5a4693dbce02bc426->enter($__internal_20ca693fcd1bff2a625631c0836b3effed8a66fc38948ae5a4693dbce02bc426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_d97573af3a8a3de1fda56d1b3cdab49cc91715bfcd76294a7bcb4fc95d9ca266 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d97573af3a8a3de1fda56d1b3cdab49cc91715bfcd76294a7bcb4fc95d9ca266->enter($__internal_d97573af3a8a3de1fda56d1b3cdab49cc91715bfcd76294a7bcb4fc95d9ca266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_20ca693fcd1bff2a625631c0836b3effed8a66fc38948ae5a4693dbce02bc426->leave($__internal_20ca693fcd1bff2a625631c0836b3effed8a66fc38948ae5a4693dbce02bc426_prof);

        
        $__internal_d97573af3a8a3de1fda56d1b3cdab49cc91715bfcd76294a7bcb4fc95d9ca266->leave($__internal_d97573af3a8a3de1fda56d1b3cdab49cc91715bfcd76294a7bcb4fc95d9ca266_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/Users/shibaji/Documents/GitHub/mregister/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
