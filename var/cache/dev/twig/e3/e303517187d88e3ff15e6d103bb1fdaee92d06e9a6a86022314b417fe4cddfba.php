<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_900fd6df4cca75dc4721cb8385a0326bfb927fd16257686c68fd983bfcf3a2dd extends Twig_Template
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
        $__internal_c1e9310ad2520b30835a7c008a88cbca13473c2dc46b9cd63c6f6b930263ae1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1e9310ad2520b30835a7c008a88cbca13473c2dc46b9cd63c6f6b930263ae1c->enter($__internal_c1e9310ad2520b30835a7c008a88cbca13473c2dc46b9cd63c6f6b930263ae1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_09d737a05c9b65ef6bc19757916116de627722b309f1bd9275b4a1a2768b988e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09d737a05c9b65ef6bc19757916116de627722b309f1bd9275b4a1a2768b988e->enter($__internal_09d737a05c9b65ef6bc19757916116de627722b309f1bd9275b4a1a2768b988e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_c1e9310ad2520b30835a7c008a88cbca13473c2dc46b9cd63c6f6b930263ae1c->leave($__internal_c1e9310ad2520b30835a7c008a88cbca13473c2dc46b9cd63c6f6b930263ae1c_prof);

        
        $__internal_09d737a05c9b65ef6bc19757916116de627722b309f1bd9275b4a1a2768b988e->leave($__internal_09d737a05c9b65ef6bc19757916116de627722b309f1bd9275b4a1a2768b988e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/Users/shibaji/Documents/GitHub/mregister/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
