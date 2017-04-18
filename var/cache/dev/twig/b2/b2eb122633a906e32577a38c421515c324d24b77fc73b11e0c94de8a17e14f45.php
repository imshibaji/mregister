<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_03820d6ec739054d175762196d3c86ef54845d8b6fe27a1e56fdf87fabd77926 extends Twig_Template
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
        $__internal_8d969a2ae05d24b3d046f814c8a78969d7d2fbf2bd0aadf86f61f6b04188d037 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d969a2ae05d24b3d046f814c8a78969d7d2fbf2bd0aadf86f61f6b04188d037->enter($__internal_8d969a2ae05d24b3d046f814c8a78969d7d2fbf2bd0aadf86f61f6b04188d037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_54f2e5870218f3ceed6e164a5bab431871903f50e773119f90664fbf238be235 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54f2e5870218f3ceed6e164a5bab431871903f50e773119f90664fbf238be235->enter($__internal_54f2e5870218f3ceed6e164a5bab431871903f50e773119f90664fbf238be235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_8d969a2ae05d24b3d046f814c8a78969d7d2fbf2bd0aadf86f61f6b04188d037->leave($__internal_8d969a2ae05d24b3d046f814c8a78969d7d2fbf2bd0aadf86f61f6b04188d037_prof);

        
        $__internal_54f2e5870218f3ceed6e164a5bab431871903f50e773119f90664fbf238be235->leave($__internal_54f2e5870218f3ceed6e164a5bab431871903f50e773119f90664fbf238be235_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/Users/shibaji/Documents/GitHub/mregister/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
