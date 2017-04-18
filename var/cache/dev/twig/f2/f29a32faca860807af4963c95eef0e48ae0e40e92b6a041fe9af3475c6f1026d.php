<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_99a2e0611dd29d07580b7ac27b07e287973ac598af6a623a17ce42196a2c92c2 extends Twig_Template
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
        $__internal_4b22b3a491273dbbddff58e062646981c1093513438d537aa01870636dede823 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b22b3a491273dbbddff58e062646981c1093513438d537aa01870636dede823->enter($__internal_4b22b3a491273dbbddff58e062646981c1093513438d537aa01870636dede823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_71fcb7222e8351300f5ba037c91ba43d91774be2ca4560c1993d764eda1c02cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71fcb7222e8351300f5ba037c91ba43d91774be2ca4560c1993d764eda1c02cc->enter($__internal_71fcb7222e8351300f5ba037c91ba43d91774be2ca4560c1993d764eda1c02cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_4b22b3a491273dbbddff58e062646981c1093513438d537aa01870636dede823->leave($__internal_4b22b3a491273dbbddff58e062646981c1093513438d537aa01870636dede823_prof);

        
        $__internal_71fcb7222e8351300f5ba037c91ba43d91774be2ca4560c1993d764eda1c02cc->leave($__internal_71fcb7222e8351300f5ba037c91ba43d91774be2ca4560c1993d764eda1c02cc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Users/shibaji/Documents/GitHub/mregister/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
