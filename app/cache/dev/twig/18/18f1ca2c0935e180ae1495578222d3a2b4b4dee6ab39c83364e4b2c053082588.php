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
        $__internal_dcfec4830de0671e2d347da03ae4952f78bac18f8ad0ea71b3c286b071541d51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcfec4830de0671e2d347da03ae4952f78bac18f8ad0ea71b3c286b071541d51->enter($__internal_dcfec4830de0671e2d347da03ae4952f78bac18f8ad0ea71b3c286b071541d51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dcfec4830de0671e2d347da03ae4952f78bac18f8ad0ea71b3c286b071541d51->leave($__internal_dcfec4830de0671e2d347da03ae4952f78bac18f8ad0ea71b3c286b071541d51_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_37fd9c668b55e1b6efd788e493f17c86712a536d8f8d30dcdbfac8c81b6d44ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37fd9c668b55e1b6efd788e493f17c86712a536d8f8d30dcdbfac8c81b6d44ca->enter($__internal_37fd9c668b55e1b6efd788e493f17c86712a536d8f8d30dcdbfac8c81b6d44ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_37fd9c668b55e1b6efd788e493f17c86712a536d8f8d30dcdbfac8c81b6d44ca->leave($__internal_37fd9c668b55e1b6efd788e493f17c86712a536d8f8d30dcdbfac8c81b6d44ca_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_df43c9b3695de599be4945f6f85a66fefc697248ed66bdc280f0d864c2bdf452 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df43c9b3695de599be4945f6f85a66fefc697248ed66bdc280f0d864c2bdf452->enter($__internal_df43c9b3695de599be4945f6f85a66fefc697248ed66bdc280f0d864c2bdf452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_df43c9b3695de599be4945f6f85a66fefc697248ed66bdc280f0d864c2bdf452->leave($__internal_df43c9b3695de599be4945f6f85a66fefc697248ed66bdc280f0d864c2bdf452_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_eeebadfcc706cadef58dcc043752f397e836a1ffcc0dfe15fa1a2e3c53578510 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eeebadfcc706cadef58dcc043752f397e836a1ffcc0dfe15fa1a2e3c53578510->enter($__internal_eeebadfcc706cadef58dcc043752f397e836a1ffcc0dfe15fa1a2e3c53578510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_eeebadfcc706cadef58dcc043752f397e836a1ffcc0dfe15fa1a2e3c53578510->leave($__internal_eeebadfcc706cadef58dcc043752f397e836a1ffcc0dfe15fa1a2e3c53578510_prof);

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
