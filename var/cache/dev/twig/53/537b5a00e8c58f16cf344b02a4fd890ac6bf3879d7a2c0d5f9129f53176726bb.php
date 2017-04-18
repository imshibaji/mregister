<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_4c2030f120ad552517e6ce2879206bf84adc16a780f34cf3fcce821258289191 extends Twig_Template
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
        $__internal_84f51b474773ac7232fadd5af4ae6446bfed3b0c1bc8d34058afb85cbdb509ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84f51b474773ac7232fadd5af4ae6446bfed3b0c1bc8d34058afb85cbdb509ec->enter($__internal_84f51b474773ac7232fadd5af4ae6446bfed3b0c1bc8d34058afb85cbdb509ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_19892791bd5371e85d068522acd9fa16ac6eef4a928fa970da088aeccbd0f9c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19892791bd5371e85d068522acd9fa16ac6eef4a928fa970da088aeccbd0f9c9->enter($__internal_19892791bd5371e85d068522acd9fa16ac6eef4a928fa970da088aeccbd0f9c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_84f51b474773ac7232fadd5af4ae6446bfed3b0c1bc8d34058afb85cbdb509ec->leave($__internal_84f51b474773ac7232fadd5af4ae6446bfed3b0c1bc8d34058afb85cbdb509ec_prof);

        
        $__internal_19892791bd5371e85d068522acd9fa16ac6eef4a928fa970da088aeccbd0f9c9->leave($__internal_19892791bd5371e85d068522acd9fa16ac6eef4a928fa970da088aeccbd0f9c9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/Users/shibaji/Documents/GitHub/mregister/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
