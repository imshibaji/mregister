<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_248c1ca6d692481887f3c30205f86077bc39ded38f07cdc7b3dca13ebb5b09a3 extends Twig_Template
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
        $__internal_0b97a159329dbc0178093723b5453f158aaa6a6af03116142774e1f5229b96c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b97a159329dbc0178093723b5453f158aaa6a6af03116142774e1f5229b96c3->enter($__internal_0b97a159329dbc0178093723b5453f158aaa6a6af03116142774e1f5229b96c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_50c71781b3799bdbcda8ff0cc61d26d647a7315f1ebb233f2a70189eeb5deee5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50c71781b3799bdbcda8ff0cc61d26d647a7315f1ebb233f2a70189eeb5deee5->enter($__internal_50c71781b3799bdbcda8ff0cc61d26d647a7315f1ebb233f2a70189eeb5deee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_0b97a159329dbc0178093723b5453f158aaa6a6af03116142774e1f5229b96c3->leave($__internal_0b97a159329dbc0178093723b5453f158aaa6a6af03116142774e1f5229b96c3_prof);

        
        $__internal_50c71781b3799bdbcda8ff0cc61d26d647a7315f1ebb233f2a70189eeb5deee5->leave($__internal_50c71781b3799bdbcda8ff0cc61d26d647a7315f1ebb233f2a70189eeb5deee5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/Users/shibaji/Documents/GitHub/mregister/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
