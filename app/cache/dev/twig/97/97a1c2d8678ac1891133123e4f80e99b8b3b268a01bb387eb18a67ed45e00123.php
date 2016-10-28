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
        $__internal_42acea7cad70aaac966ef9e194efc297864461588a5943486124ceff86d1955c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42acea7cad70aaac966ef9e194efc297864461588a5943486124ceff86d1955c->enter($__internal_42acea7cad70aaac966ef9e194efc297864461588a5943486124ceff86d1955c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42acea7cad70aaac966ef9e194efc297864461588a5943486124ceff86d1955c->leave($__internal_42acea7cad70aaac966ef9e194efc297864461588a5943486124ceff86d1955c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e0a631e80c639d7a51e7499aadc68800e8eb6f11338b292fb5114d266801b22e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0a631e80c639d7a51e7499aadc68800e8eb6f11338b292fb5114d266801b22e->enter($__internal_e0a631e80c639d7a51e7499aadc68800e8eb6f11338b292fb5114d266801b22e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        
        $__internal_e0a631e80c639d7a51e7499aadc68800e8eb6f11338b292fb5114d266801b22e->leave($__internal_e0a631e80c639d7a51e7499aadc68800e8eb6f11338b292fb5114d266801b22e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ca416a4e4ec1de0611d0c5cc19298e45d09a4aca9bbabc0563debcd1f15db3c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca416a4e4ec1de0611d0c5cc19298e45d09a4aca9bbabc0563debcd1f15db3c3->enter($__internal_ca416a4e4ec1de0611d0c5cc19298e45d09a4aca9bbabc0563debcd1f15db3c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ca416a4e4ec1de0611d0c5cc19298e45d09a4aca9bbabc0563debcd1f15db3c3->leave($__internal_ca416a4e4ec1de0611d0c5cc19298e45d09a4aca9bbabc0563debcd1f15db3c3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bc220bdee568d6610e9b2327390369da2f24f477d483f6e0579fcbc686514577 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc220bdee568d6610e9b2327390369da2f24f477d483f6e0579fcbc686514577->enter($__internal_bc220bdee568d6610e9b2327390369da2f24f477d483f6e0579fcbc686514577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_bc220bdee568d6610e9b2327390369da2f24f477d483f6e0579fcbc686514577->leave($__internal_bc220bdee568d6610e9b2327390369da2f24f477d483f6e0579fcbc686514577_prof);

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
