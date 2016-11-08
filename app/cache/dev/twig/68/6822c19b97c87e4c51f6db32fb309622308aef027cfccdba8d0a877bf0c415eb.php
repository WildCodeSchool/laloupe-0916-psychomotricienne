<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_1c25a2bf1119cd075b21f18716bc3ed2544fde71bf8fd500c67be0fe2ff582e5 extends Twig_Template
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
        $__internal_d7e1a66b73be8ad3e464040cec584b0b9682687bdaa6f48551f23b83aa118606 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7e1a66b73be8ad3e464040cec584b0b9682687bdaa6f48551f23b83aa118606->enter($__internal_d7e1a66b73be8ad3e464040cec584b0b9682687bdaa6f48551f23b83aa118606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_d7e1a66b73be8ad3e464040cec584b0b9682687bdaa6f48551f23b83aa118606->leave($__internal_d7e1a66b73be8ad3e464040cec584b0b9682687bdaa6f48551f23b83aa118606_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_cd64422c7936c01c18d9194c065aedd611d66fa641acc00db336d5209e960cdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd64422c7936c01c18d9194c065aedd611d66fa641acc00db336d5209e960cdb->enter($__internal_cd64422c7936c01c18d9194c065aedd611d66fa641acc00db336d5209e960cdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        echo "";
        
        $__internal_cd64422c7936c01c18d9194c065aedd611d66fa641acc00db336d5209e960cdb->leave($__internal_cd64422c7936c01c18d9194c065aedd611d66fa641acc00db336d5209e960cdb_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/Users/Cendrillon/Sites/Psychomot/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
