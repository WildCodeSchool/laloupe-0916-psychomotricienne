<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_978e019150cae4dc8cc5a460aa332e4538e414be2485f9b82013e6b75a262c9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_62e9bdda5b71a2c81a95315e2caaeab30db99a7b94cbb257cb0857123378431d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62e9bdda5b71a2c81a95315e2caaeab30db99a7b94cbb257cb0857123378431d->enter($__internal_62e9bdda5b71a2c81a95315e2caaeab30db99a7b94cbb257cb0857123378431d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62e9bdda5b71a2c81a95315e2caaeab30db99a7b94cbb257cb0857123378431d->leave($__internal_62e9bdda5b71a2c81a95315e2caaeab30db99a7b94cbb257cb0857123378431d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bbd4645d735edb67ce4b47d8ecb7d307b6f1ea71d27de33327b68b9220295231 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbd4645d735edb67ce4b47d8ecb7d307b6f1ea71d27de33327b68b9220295231->enter($__internal_bbd4645d735edb67ce4b47d8ecb7d307b6f1ea71d27de33327b68b9220295231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        
        $__internal_bbd4645d735edb67ce4b47d8ecb7d307b6f1ea71d27de33327b68b9220295231->leave($__internal_bbd4645d735edb67ce4b47d8ecb7d307b6f1ea71d27de33327b68b9220295231_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_46f0e0e8ed52a4321f6de6feb16da8eb012a3dc27ce4e196c23b7399cfe13637 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46f0e0e8ed52a4321f6de6feb16da8eb012a3dc27ce4e196c23b7399cfe13637->enter($__internal_46f0e0e8ed52a4321f6de6feb16da8eb012a3dc27ce4e196c23b7399cfe13637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_46f0e0e8ed52a4321f6de6feb16da8eb012a3dc27ce4e196c23b7399cfe13637->leave($__internal_46f0e0e8ed52a4321f6de6feb16da8eb012a3dc27ce4e196c23b7399cfe13637_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_dd0be86be8133c8e8c6609dfed47ac801149665901a587afad02886cf2ed3e6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd0be86be8133c8e8c6609dfed47ac801149665901a587afad02886cf2ed3e6a->enter($__internal_dd0be86be8133c8e8c6609dfed47ac801149665901a587afad02886cf2ed3e6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_dd0be86be8133c8e8c6609dfed47ac801149665901a587afad02886cf2ed3e6a->leave($__internal_dd0be86be8133c8e8c6609dfed47ac801149665901a587afad02886cf2ed3e6a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/html/Psychomot/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
