<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_03797d41a10517d876d4c1acdfd395958a439f4f9f437bb2c0a1c232f31034c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5c12f3607a767ff0b39f20a5e2a7cd6eb1fea792ba157a64edb5948dac08e8e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c12f3607a767ff0b39f20a5e2a7cd6eb1fea792ba157a64edb5948dac08e8e0->enter($__internal_5c12f3607a767ff0b39f20a5e2a7cd6eb1fea792ba157a64edb5948dac08e8e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c12f3607a767ff0b39f20a5e2a7cd6eb1fea792ba157a64edb5948dac08e8e0->leave($__internal_5c12f3607a767ff0b39f20a5e2a7cd6eb1fea792ba157a64edb5948dac08e8e0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_29fe56807aa2709d9958312ccd68f856c9679438f02c3d6eb84919425c7d74e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29fe56807aa2709d9958312ccd68f856c9679438f02c3d6eb84919425c7d74e5->enter($__internal_29fe56807aa2709d9958312ccd68f856c9679438f02c3d6eb84919425c7d74e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        echo "Redirection Intercepted";
        
        $__internal_29fe56807aa2709d9958312ccd68f856c9679438f02c3d6eb84919425c7d74e5->leave($__internal_29fe56807aa2709d9958312ccd68f856c9679438f02c3d6eb84919425c7d74e5_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8076cdbc29a8ac5ef10b42cff5191ed0ac92d0df50dbd526965eb6878e41a884 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8076cdbc29a8ac5ef10b42cff5191ed0ac92d0df50dbd526965eb6878e41a884->enter($__internal_8076cdbc29a8ac5ef10b42cff5191ed0ac92d0df50dbd526965eb6878e41a884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_8076cdbc29a8ac5ef10b42cff5191ed0ac92d0df50dbd526965eb6878e41a884->leave($__internal_8076cdbc29a8ac5ef10b42cff5191ed0ac92d0df50dbd526965eb6878e41a884_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/Users/Cendrillon/Sites/Psychomot/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
