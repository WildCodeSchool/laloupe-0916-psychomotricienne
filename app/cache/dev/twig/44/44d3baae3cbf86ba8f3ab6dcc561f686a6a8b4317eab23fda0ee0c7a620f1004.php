<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_713e3a5ca39521845b1d186ee1c95dbdf49ccdc114bee72be6ce6f2b694be336 extends Twig_Template
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
        $__internal_f8e4d5b56d16fc85e144fd71812142c606dd14382e3febba4b59c4f045dd82ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8e4d5b56d16fc85e144fd71812142c606dd14382e3febba4b59c4f045dd82ce->enter($__internal_f8e4d5b56d16fc85e144fd71812142c606dd14382e3febba4b59c4f045dd82ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8e4d5b56d16fc85e144fd71812142c606dd14382e3febba4b59c4f045dd82ce->leave($__internal_f8e4d5b56d16fc85e144fd71812142c606dd14382e3febba4b59c4f045dd82ce_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c1628acf76a5ba65c4a3dbeed606ed7dee8164eac2b40b71b7431f1bd5e6b520 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1628acf76a5ba65c4a3dbeed606ed7dee8164eac2b40b71b7431f1bd5e6b520->enter($__internal_c1628acf76a5ba65c4a3dbeed606ed7dee8164eac2b40b71b7431f1bd5e6b520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c1628acf76a5ba65c4a3dbeed606ed7dee8164eac2b40b71b7431f1bd5e6b520->leave($__internal_c1628acf76a5ba65c4a3dbeed606ed7dee8164eac2b40b71b7431f1bd5e6b520_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6c0c29695d8ee515a70fc92c012211d33b95f1b23331357be4f1e55ab80654e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c0c29695d8ee515a70fc92c012211d33b95f1b23331357be4f1e55ab80654e4->enter($__internal_6c0c29695d8ee515a70fc92c012211d33b95f1b23331357be4f1e55ab80654e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6c0c29695d8ee515a70fc92c012211d33b95f1b23331357be4f1e55ab80654e4->leave($__internal_6c0c29695d8ee515a70fc92c012211d33b95f1b23331357be4f1e55ab80654e4_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3650188f7c148d0904e1b4531646ba4e48af20664dc224b5db3611396156144d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3650188f7c148d0904e1b4531646ba4e48af20664dc224b5db3611396156144d->enter($__internal_3650188f7c148d0904e1b4531646ba4e48af20664dc224b5db3611396156144d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_3650188f7c148d0904e1b4531646ba4e48af20664dc224b5db3611396156144d->leave($__internal_3650188f7c148d0904e1b4531646ba4e48af20664dc224b5db3611396156144d_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/Users/Cendrillon/Sites/Psychomot/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
