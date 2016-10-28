<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_4e0092c742672ce2946d2ca6774a40309d4c92cdb0aef09c22dc2b97fef9677c extends Twig_Template
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
        $__internal_b363dfde38b35d35745dfe7519607fc17ac12e7e197a1a3541b1d8c548163102 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b363dfde38b35d35745dfe7519607fc17ac12e7e197a1a3541b1d8c548163102->enter($__internal_b363dfde38b35d35745dfe7519607fc17ac12e7e197a1a3541b1d8c548163102_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b363dfde38b35d35745dfe7519607fc17ac12e7e197a1a3541b1d8c548163102->leave($__internal_b363dfde38b35d35745dfe7519607fc17ac12e7e197a1a3541b1d8c548163102_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b22458c345c85f22720ac6205fc86f51fc9821e933047fddfa8f659a219da92d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b22458c345c85f22720ac6205fc86f51fc9821e933047fddfa8f659a219da92d->enter($__internal_b22458c345c85f22720ac6205fc86f51fc9821e933047fddfa8f659a219da92d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_b22458c345c85f22720ac6205fc86f51fc9821e933047fddfa8f659a219da92d->leave($__internal_b22458c345c85f22720ac6205fc86f51fc9821e933047fddfa8f659a219da92d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0d4f82d3216bbc0a5fa81bb62615236c7a87bdb64b87a9d360ee566d4bbf8080 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d4f82d3216bbc0a5fa81bb62615236c7a87bdb64b87a9d360ee566d4bbf8080->enter($__internal_0d4f82d3216bbc0a5fa81bb62615236c7a87bdb64b87a9d360ee566d4bbf8080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0d4f82d3216bbc0a5fa81bb62615236c7a87bdb64b87a9d360ee566d4bbf8080->leave($__internal_0d4f82d3216bbc0a5fa81bb62615236c7a87bdb64b87a9d360ee566d4bbf8080_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5e9f91f301c86ab60da2a0406c660ad8f8efbbc440ae606dec3bebdb026a80e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e9f91f301c86ab60da2a0406c660ad8f8efbbc440ae606dec3bebdb026a80e3->enter($__internal_5e9f91f301c86ab60da2a0406c660ad8f8efbbc440ae606dec3bebdb026a80e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5e9f91f301c86ab60da2a0406c660ad8f8efbbc440ae606dec3bebdb026a80e3->leave($__internal_5e9f91f301c86ab60da2a0406c660ad8f8efbbc440ae606dec3bebdb026a80e3_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/Psychomot/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
