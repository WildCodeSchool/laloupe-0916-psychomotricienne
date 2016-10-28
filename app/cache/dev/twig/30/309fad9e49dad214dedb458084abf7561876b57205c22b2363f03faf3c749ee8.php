<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_731f4a2adb0722f61b89628a0257c6a50320873f304f64c5812bacb6078d22c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_d1cfb24e1e9c4412567188a44150f5891c4cac96df1d1b4a4d26d6bc63be1b37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1cfb24e1e9c4412567188a44150f5891c4cac96df1d1b4a4d26d6bc63be1b37->enter($__internal_d1cfb24e1e9c4412567188a44150f5891c4cac96df1d1b4a4d26d6bc63be1b37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1cfb24e1e9c4412567188a44150f5891c4cac96df1d1b4a4d26d6bc63be1b37->leave($__internal_d1cfb24e1e9c4412567188a44150f5891c4cac96df1d1b4a4d26d6bc63be1b37_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_660b38acc4a8c84a106b36ab4d14616367c932e9388c5e226f75a7be93fe2c33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_660b38acc4a8c84a106b36ab4d14616367c932e9388c5e226f75a7be93fe2c33->enter($__internal_660b38acc4a8c84a106b36ab4d14616367c932e9388c5e226f75a7be93fe2c33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_660b38acc4a8c84a106b36ab4d14616367c932e9388c5e226f75a7be93fe2c33->leave($__internal_660b38acc4a8c84a106b36ab4d14616367c932e9388c5e226f75a7be93fe2c33_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d928205179f087b886e4ff3d3a816c725544ab39849d32496db8d191055ef3bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d928205179f087b886e4ff3d3a816c725544ab39849d32496db8d191055ef3bd->enter($__internal_d928205179f087b886e4ff3d3a816c725544ab39849d32496db8d191055ef3bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d928205179f087b886e4ff3d3a816c725544ab39849d32496db8d191055ef3bd->leave($__internal_d928205179f087b886e4ff3d3a816c725544ab39849d32496db8d191055ef3bd_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_84fe13f56125f423c0eb94bf239d869ecd4a1191545fe70748e21e77c4f8a178 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84fe13f56125f423c0eb94bf239d869ecd4a1191545fe70748e21e77c4f8a178->enter($__internal_84fe13f56125f423c0eb94bf239d869ecd4a1191545fe70748e21e77c4f8a178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_84fe13f56125f423c0eb94bf239d869ecd4a1191545fe70748e21e77c4f8a178->leave($__internal_84fe13f56125f423c0eb94bf239d869ecd4a1191545fe70748e21e77c4f8a178_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
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

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/Psychomot/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
