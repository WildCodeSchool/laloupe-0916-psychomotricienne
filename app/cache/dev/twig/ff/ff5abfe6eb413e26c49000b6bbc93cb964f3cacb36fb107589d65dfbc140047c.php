<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_4978887af319973fc04cf88a0a410f3c3c7a26b174de8739764038b16233f9ff extends Twig_Template
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
        $__internal_6ef1e00c920757df88ad389ebe27660a9593a24927f89f6850938e19ac92278f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ef1e00c920757df88ad389ebe27660a9593a24927f89f6850938e19ac92278f->enter($__internal_6ef1e00c920757df88ad389ebe27660a9593a24927f89f6850938e19ac92278f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_6ef1e00c920757df88ad389ebe27660a9593a24927f89f6850938e19ac92278f->leave($__internal_6ef1e00c920757df88ad389ebe27660a9593a24927f89f6850938e19ac92278f_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_553967305fd1291dc5e4edfed4d72a612e6d829beb043bf4e1bacf538988e5f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_553967305fd1291dc5e4edfed4d72a612e6d829beb043bf4e1bacf538988e5f1->enter($__internal_553967305fd1291dc5e4edfed4d72a612e6d829beb043bf4e1bacf538988e5f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        echo "";
        
        $__internal_553967305fd1291dc5e4edfed4d72a612e6d829beb043bf4e1bacf538988e5f1->leave($__internal_553967305fd1291dc5e4edfed4d72a612e6d829beb043bf4e1bacf538988e5f1_prof);

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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/html/Psychomot/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
