<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_c52fbfbf125e35666d73e53ffc1b793009d38f0533637f542f606cd9276ef603 extends Twig_Template
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
        $__internal_fc9ddc9e75f51530d2e40ef5ba36e746a56c3ff1cdbae4d3f2c1222574edf998 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc9ddc9e75f51530d2e40ef5ba36e746a56c3ff1cdbae4d3f2c1222574edf998->enter($__internal_fc9ddc9e75f51530d2e40ef5ba36e746a56c3ff1cdbae4d3f2c1222574edf998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc9ddc9e75f51530d2e40ef5ba36e746a56c3ff1cdbae4d3f2c1222574edf998->leave($__internal_fc9ddc9e75f51530d2e40ef5ba36e746a56c3ff1cdbae4d3f2c1222574edf998_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b44cd7029839f37bf4b8fd2c75b03dacb0752678cceb801b30ed1f9ad30f2392 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b44cd7029839f37bf4b8fd2c75b03dacb0752678cceb801b30ed1f9ad30f2392->enter($__internal_b44cd7029839f37bf4b8fd2c75b03dacb0752678cceb801b30ed1f9ad30f2392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        
        $__internal_b44cd7029839f37bf4b8fd2c75b03dacb0752678cceb801b30ed1f9ad30f2392->leave($__internal_b44cd7029839f37bf4b8fd2c75b03dacb0752678cceb801b30ed1f9ad30f2392_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_557cf9a941055511bce4170436ed1a1733eb0954b6b8442b432de3b3f91f0c4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_557cf9a941055511bce4170436ed1a1733eb0954b6b8442b432de3b3f91f0c4a->enter($__internal_557cf9a941055511bce4170436ed1a1733eb0954b6b8442b432de3b3f91f0c4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_557cf9a941055511bce4170436ed1a1733eb0954b6b8442b432de3b3f91f0c4a->leave($__internal_557cf9a941055511bce4170436ed1a1733eb0954b6b8442b432de3b3f91f0c4a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2972a6057fa304ecefd5e4852ec9bf970ae1d7f57db13dac876f7690d52a8883 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2972a6057fa304ecefd5e4852ec9bf970ae1d7f57db13dac876f7690d52a8883->enter($__internal_2972a6057fa304ecefd5e4852ec9bf970ae1d7f57db13dac876f7690d52a8883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2972a6057fa304ecefd5e4852ec9bf970ae1d7f57db13dac876f7690d52a8883->leave($__internal_2972a6057fa304ecefd5e4852ec9bf970ae1d7f57db13dac876f7690d52a8883_prof);

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
", "WebProfilerBundle:Collector:router.html.twig", "/Users/Cendrillon/Sites/Psychomot/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
