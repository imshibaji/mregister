<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_3b9f4d67029a54503a1820ceaf3a937a99f09faf9de8f950d53f2eee9fde50f4 extends Twig_Template
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
        $__internal_ac9cee27c01f9451792b86df7c59f6d7db18b3f4597f33b6b59d487b882216f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac9cee27c01f9451792b86df7c59f6d7db18b3f4597f33b6b59d487b882216f4->enter($__internal_ac9cee27c01f9451792b86df7c59f6d7db18b3f4597f33b6b59d487b882216f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_110736f4bc7acbc9bf0d8668481217c47e8fdad51b4e0071383076acfe99a292 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_110736f4bc7acbc9bf0d8668481217c47e8fdad51b4e0071383076acfe99a292->enter($__internal_110736f4bc7acbc9bf0d8668481217c47e8fdad51b4e0071383076acfe99a292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_ac9cee27c01f9451792b86df7c59f6d7db18b3f4597f33b6b59d487b882216f4->leave($__internal_ac9cee27c01f9451792b86df7c59f6d7db18b3f4597f33b6b59d487b882216f4_prof);

        
        $__internal_110736f4bc7acbc9bf0d8668481217c47e8fdad51b4e0071383076acfe99a292->leave($__internal_110736f4bc7acbc9bf0d8668481217c47e8fdad51b4e0071383076acfe99a292_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Users/shibaji/Documents/GitHub/mregister/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
