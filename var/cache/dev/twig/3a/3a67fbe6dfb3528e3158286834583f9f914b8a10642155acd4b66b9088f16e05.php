<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_38c66b8a4369fbead19461e39ded8ed3bd2f69f7df94e76705f4616675b365de extends Twig_Template
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
        $__internal_1527fbb3d5370fdedb5e3248823b0a2d0d643a7b974f34e646d6c6ca5657ccd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1527fbb3d5370fdedb5e3248823b0a2d0d643a7b974f34e646d6c6ca5657ccd7->enter($__internal_1527fbb3d5370fdedb5e3248823b0a2d0d643a7b974f34e646d6c6ca5657ccd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_5852bdd4c3eeabdba673dd744238556b7521121159d7a14e98a3a80148465e78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5852bdd4c3eeabdba673dd744238556b7521121159d7a14e98a3a80148465e78->enter($__internal_5852bdd4c3eeabdba673dd744238556b7521121159d7a14e98a3a80148465e78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_1527fbb3d5370fdedb5e3248823b0a2d0d643a7b974f34e646d6c6ca5657ccd7->leave($__internal_1527fbb3d5370fdedb5e3248823b0a2d0d643a7b974f34e646d6c6ca5657ccd7_prof);

        
        $__internal_5852bdd4c3eeabdba673dd744238556b7521121159d7a14e98a3a80148465e78->leave($__internal_5852bdd4c3eeabdba673dd744238556b7521121159d7a14e98a3a80148465e78_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/Users/shibaji/Documents/GitHub/mregister/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
