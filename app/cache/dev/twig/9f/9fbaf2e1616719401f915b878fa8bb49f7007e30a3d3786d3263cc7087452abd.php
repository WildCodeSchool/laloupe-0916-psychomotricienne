<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_558c438045ee82f5694f00a333010243eada38c1a46d581f2132d5bd0dcc2a64 extends Twig_Template
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
        $__internal_2c89e26c3b070e44ce710148ee9d3f0e4b9caf9532cfd274ec8f5e77eecbbffb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c89e26c3b070e44ce710148ee9d3f0e4b9caf9532cfd274ec8f5e77eecbbffb->enter($__internal_2c89e26c3b070e44ce710148ee9d3f0e4b9caf9532cfd274ec8f5e77eecbbffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c89e26c3b070e44ce710148ee9d3f0e4b9caf9532cfd274ec8f5e77eecbbffb->leave($__internal_2c89e26c3b070e44ce710148ee9d3f0e4b9caf9532cfd274ec8f5e77eecbbffb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d2e276fdc4c7c6d0091a641ccfbd6d785a9e01d22ccf358dbfc101651999f06d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2e276fdc4c7c6d0091a641ccfbd6d785a9e01d22ccf358dbfc101651999f06d->enter($__internal_d2e276fdc4c7c6d0091a641ccfbd6d785a9e01d22ccf358dbfc101651999f06d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        echo "Redirection Intercepted";
        
        $__internal_d2e276fdc4c7c6d0091a641ccfbd6d785a9e01d22ccf358dbfc101651999f06d->leave($__internal_d2e276fdc4c7c6d0091a641ccfbd6d785a9e01d22ccf358dbfc101651999f06d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd5d81fc906bd6e7c3fb36009625a0641c6c5dcd6f43121bf3a7b799e28dead6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd5d81fc906bd6e7c3fb36009625a0641c6c5dcd6f43121bf3a7b799e28dead6->enter($__internal_cd5d81fc906bd6e7c3fb36009625a0641c6c5dcd6f43121bf3a7b799e28dead6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

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
        
        $__internal_cd5d81fc906bd6e7c3fb36009625a0641c6c5dcd6f43121bf3a7b799e28dead6->leave($__internal_cd5d81fc906bd6e7c3fb36009625a0641c6c5dcd6f43121bf3a7b799e28dead6_prof);

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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/html/Psychomot/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
