<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_4a25da56ab9f23f38873f62ee59ca9ede1653ad227880d51f41263b97dbb5956 extends Twig_Template
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
        $__internal_493848182ed21f6dad0b4e66fd0ca0696c6d95b5d69769ea35a8ae4f1d99a409 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_493848182ed21f6dad0b4e66fd0ca0696c6d95b5d69769ea35a8ae4f1d99a409->enter($__internal_493848182ed21f6dad0b4e66fd0ca0696c6d95b5d69769ea35a8ae4f1d99a409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_4e602579c75b019f56b3d8d21afe3d38ef3fcd4383457e916f5ab7347c7f5e34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e602579c75b019f56b3d8d21afe3d38ef3fcd4383457e916f5ab7347c7f5e34->enter($__internal_4e602579c75b019f56b3d8d21afe3d38ef3fcd4383457e916f5ab7347c7f5e34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_493848182ed21f6dad0b4e66fd0ca0696c6d95b5d69769ea35a8ae4f1d99a409->leave($__internal_493848182ed21f6dad0b4e66fd0ca0696c6d95b5d69769ea35a8ae4f1d99a409_prof);

        
        $__internal_4e602579c75b019f56b3d8d21afe3d38ef3fcd4383457e916f5ab7347c7f5e34->leave($__internal_4e602579c75b019f56b3d8d21afe3d38ef3fcd4383457e916f5ab7347c7f5e34_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Users/shibaji/Documents/GitHub/mregister/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
