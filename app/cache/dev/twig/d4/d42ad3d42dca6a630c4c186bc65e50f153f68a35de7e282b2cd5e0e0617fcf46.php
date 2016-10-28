<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_dbc1b8e3f55108aa4d802d6ecc716c37712769e3c48aab2330e5b246aa123230 extends Twig_Template
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
        $__internal_6b8fa431d9ae3b5d3731ff500d4a063a19db4d78f162c9470225646058ed6655 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b8fa431d9ae3b5d3731ff500d4a063a19db4d78f162c9470225646058ed6655->enter($__internal_6b8fa431d9ae3b5d3731ff500d4a063a19db4d78f162c9470225646058ed6655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b8fa431d9ae3b5d3731ff500d4a063a19db4d78f162c9470225646058ed6655->leave($__internal_6b8fa431d9ae3b5d3731ff500d4a063a19db4d78f162c9470225646058ed6655_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0a9b388e34587176fe383c9568b5a7e36e43c93c7062b5806095615dc00ed2ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a9b388e34587176fe383c9568b5a7e36e43c93c7062b5806095615dc00ed2ac->enter($__internal_0a9b388e34587176fe383c9568b5a7e36e43c93c7062b5806095615dc00ed2ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_0a9b388e34587176fe383c9568b5a7e36e43c93c7062b5806095615dc00ed2ac->leave($__internal_0a9b388e34587176fe383c9568b5a7e36e43c93c7062b5806095615dc00ed2ac_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6b8a151e54aa909858f617b03b715caa503550e367a07bd06d45c8211550f1db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b8a151e54aa909858f617b03b715caa503550e367a07bd06d45c8211550f1db->enter($__internal_6b8a151e54aa909858f617b03b715caa503550e367a07bd06d45c8211550f1db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6b8a151e54aa909858f617b03b715caa503550e367a07bd06d45c8211550f1db->leave($__internal_6b8a151e54aa909858f617b03b715caa503550e367a07bd06d45c8211550f1db_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_39dddb7d2e1c1edeeacd140275fbf938bf4fc5d523d820ae8196e80ac9f124e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39dddb7d2e1c1edeeacd140275fbf938bf4fc5d523d820ae8196e80ac9f124e8->enter($__internal_39dddb7d2e1c1edeeacd140275fbf938bf4fc5d523d820ae8196e80ac9f124e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_39dddb7d2e1c1edeeacd140275fbf938bf4fc5d523d820ae8196e80ac9f124e8->leave($__internal_39dddb7d2e1c1edeeacd140275fbf938bf4fc5d523d820ae8196e80ac9f124e8_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/laloupe-0916-psychomotricienne/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
