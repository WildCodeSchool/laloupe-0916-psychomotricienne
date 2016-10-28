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
        $__internal_c825a1d155bda1654fa7d59f032239f98a3ec66cc9fcb72a508790f7dda60571 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c825a1d155bda1654fa7d59f032239f98a3ec66cc9fcb72a508790f7dda60571->enter($__internal_c825a1d155bda1654fa7d59f032239f98a3ec66cc9fcb72a508790f7dda60571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_c825a1d155bda1654fa7d59f032239f98a3ec66cc9fcb72a508790f7dda60571->leave($__internal_c825a1d155bda1654fa7d59f032239f98a3ec66cc9fcb72a508790f7dda60571_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_255ad1dd3608436d414fd14508a960e9c68665ab356262899f608eddadd55463 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_255ad1dd3608436d414fd14508a960e9c68665ab356262899f608eddadd55463->enter($__internal_255ad1dd3608436d414fd14508a960e9c68665ab356262899f608eddadd55463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        echo "";
        
        $__internal_255ad1dd3608436d414fd14508a960e9c68665ab356262899f608eddadd55463->leave($__internal_255ad1dd3608436d414fd14508a960e9c68665ab356262899f608eddadd55463_prof);

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
