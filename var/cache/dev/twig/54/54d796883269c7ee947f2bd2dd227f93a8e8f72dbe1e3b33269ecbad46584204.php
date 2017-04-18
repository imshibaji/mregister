<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_418f10b69c4b9949180ac7ac132e6ffa56eb0ddd5d942998e92feef3dde409d3 extends Twig_Template
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
        $__internal_bea69d4b422902b39a644d7b639db1bac5277ce993665a1007390ede94c90ae2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bea69d4b422902b39a644d7b639db1bac5277ce993665a1007390ede94c90ae2->enter($__internal_bea69d4b422902b39a644d7b639db1bac5277ce993665a1007390ede94c90ae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_e857402e6dc16c6b212433824560ab4eab8ecce5b177d27355487ed0b9502d7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e857402e6dc16c6b212433824560ab4eab8ecce5b177d27355487ed0b9502d7f->enter($__internal_e857402e6dc16c6b212433824560ab4eab8ecce5b177d27355487ed0b9502d7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_bea69d4b422902b39a644d7b639db1bac5277ce993665a1007390ede94c90ae2->leave($__internal_bea69d4b422902b39a644d7b639db1bac5277ce993665a1007390ede94c90ae2_prof);

        
        $__internal_e857402e6dc16c6b212433824560ab4eab8ecce5b177d27355487ed0b9502d7f->leave($__internal_e857402e6dc16c6b212433824560ab4eab8ecce5b177d27355487ed0b9502d7f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "/Users/shibaji/Documents/GitHub/mregister/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
