<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d42dc1e11c2f33e40b1f8fece4f549fa36ed1d55bee13cbef8043b479b6238e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_4a2a738a0e72556e0d7b2ffa512b4bbc1818d9afa34e2ac51fa7c20c04c94ed4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a2a738a0e72556e0d7b2ffa512b4bbc1818d9afa34e2ac51fa7c20c04c94ed4->enter($__internal_4a2a738a0e72556e0d7b2ffa512b4bbc1818d9afa34e2ac51fa7c20c04c94ed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a2a738a0e72556e0d7b2ffa512b4bbc1818d9afa34e2ac51fa7c20c04c94ed4->leave($__internal_4a2a738a0e72556e0d7b2ffa512b4bbc1818d9afa34e2ac51fa7c20c04c94ed4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fec37d30a64bb2373f303b679125310062fe8f328f4d2d2f32bd31547e5bfb94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fec37d30a64bb2373f303b679125310062fe8f328f4d2d2f32bd31547e5bfb94->enter($__internal_fec37d30a64bb2373f303b679125310062fe8f328f4d2d2f32bd31547e5bfb94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_fec37d30a64bb2373f303b679125310062fe8f328f4d2d2f32bd31547e5bfb94->leave($__internal_fec37d30a64bb2373f303b679125310062fe8f328f4d2d2f32bd31547e5bfb94_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ff95ce2ac0da8cd3813873c3765c52e8d79e45eda7a177ea71eafa95e0455457 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff95ce2ac0da8cd3813873c3765c52e8d79e45eda7a177ea71eafa95e0455457->enter($__internal_ff95ce2ac0da8cd3813873c3765c52e8d79e45eda7a177ea71eafa95e0455457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ff95ce2ac0da8cd3813873c3765c52e8d79e45eda7a177ea71eafa95e0455457->leave($__internal_ff95ce2ac0da8cd3813873c3765c52e8d79e45eda7a177ea71eafa95e0455457_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d1c97ecdddf73f99b31667674447add1f0cdf63f91ca27d2a222eb75dad7bf10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1c97ecdddf73f99b31667674447add1f0cdf63f91ca27d2a222eb75dad7bf10->enter($__internal_d1c97ecdddf73f99b31667674447add1f0cdf63f91ca27d2a222eb75dad7bf10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d1c97ecdddf73f99b31667674447add1f0cdf63f91ca27d2a222eb75dad7bf10->leave($__internal_d1c97ecdddf73f99b31667674447add1f0cdf63f91ca27d2a222eb75dad7bf10_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "/Users/Cendrillon/Sites/Psychomot/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
