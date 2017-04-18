<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_111aad30f5663480e3a83685fe5f13e5c4349308cb818210ac45894d9812d703 extends Twig_Template
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
        $__internal_aa955b9fc1c89acfb8ab871eff21223b04545dd10c47ede49ba5e0fdaafa082e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa955b9fc1c89acfb8ab871eff21223b04545dd10c47ede49ba5e0fdaafa082e->enter($__internal_aa955b9fc1c89acfb8ab871eff21223b04545dd10c47ede49ba5e0fdaafa082e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_ba7e807af540bf48e314042dd34ad068ce89ff47052efa3b5be9caf4307d2b1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba7e807af540bf48e314042dd34ad068ce89ff47052efa3b5be9caf4307d2b1b->enter($__internal_ba7e807af540bf48e314042dd34ad068ce89ff47052efa3b5be9caf4307d2b1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_aa955b9fc1c89acfb8ab871eff21223b04545dd10c47ede49ba5e0fdaafa082e->leave($__internal_aa955b9fc1c89acfb8ab871eff21223b04545dd10c47ede49ba5e0fdaafa082e_prof);

        
        $__internal_ba7e807af540bf48e314042dd34ad068ce89ff47052efa3b5be9caf4307d2b1b->leave($__internal_ba7e807af540bf48e314042dd34ad068ce89ff47052efa3b5be9caf4307d2b1b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/Users/shibaji/Documents/GitHub/mregister/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
