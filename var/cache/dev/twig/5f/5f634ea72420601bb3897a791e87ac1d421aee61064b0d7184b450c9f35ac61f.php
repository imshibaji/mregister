<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_004e54f1c97b2bab5ec4b1737913ef5ba1349e850792bbfd0ebc4c0b276e7c64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_39fc016998df478cc74e16e558eaae55859399e512515d9be22bc6d894bb40a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39fc016998df478cc74e16e558eaae55859399e512515d9be22bc6d894bb40a0->enter($__internal_39fc016998df478cc74e16e558eaae55859399e512515d9be22bc6d894bb40a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_4519195e97f803036e3f3ee624e273b3e62c73e089220670effb01d71cd8449d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4519195e97f803036e3f3ee624e273b3e62c73e089220670effb01d71cd8449d->enter($__internal_4519195e97f803036e3f3ee624e273b3e62c73e089220670effb01d71cd8449d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_39fc016998df478cc74e16e558eaae55859399e512515d9be22bc6d894bb40a0->leave($__internal_39fc016998df478cc74e16e558eaae55859399e512515d9be22bc6d894bb40a0_prof);

        
        $__internal_4519195e97f803036e3f3ee624e273b3e62c73e089220670effb01d71cd8449d->leave($__internal_4519195e97f803036e3f3ee624e273b3e62c73e089220670effb01d71cd8449d_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_bac37fed71b8fa269711414e6f49c6133b6981b4a05b2346084c7c6772d5501e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bac37fed71b8fa269711414e6f49c6133b6981b4a05b2346084c7c6772d5501e->enter($__internal_bac37fed71b8fa269711414e6f49c6133b6981b4a05b2346084c7c6772d5501e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3930dbb49fa20986f111dd931fdb90a17e7f03f7188c2487ccad62e24be01f70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3930dbb49fa20986f111dd931fdb90a17e7f03f7188c2487ccad62e24be01f70->enter($__internal_3930dbb49fa20986f111dd931fdb90a17e7f03f7188c2487ccad62e24be01f70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_3930dbb49fa20986f111dd931fdb90a17e7f03f7188c2487ccad62e24be01f70->leave($__internal_3930dbb49fa20986f111dd931fdb90a17e7f03f7188c2487ccad62e24be01f70_prof);

        
        $__internal_bac37fed71b8fa269711414e6f49c6133b6981b4a05b2346084c7c6772d5501e->leave($__internal_bac37fed71b8fa269711414e6f49c6133b6981b4a05b2346084c7c6772d5501e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/Users/shibaji/Documents/GitHub/mregister/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
