<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_ced8ead91144f695e33b64dcf6cdd0022668c84d9a9943020bcd37f9dbd9dc76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_527c11d5c77686e2df3edcfac9d8b7d3e2f9ffad89b59c582b951374e2553b9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_527c11d5c77686e2df3edcfac9d8b7d3e2f9ffad89b59c582b951374e2553b9c->enter($__internal_527c11d5c77686e2df3edcfac9d8b7d3e2f9ffad89b59c582b951374e2553b9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_527c11d5c77686e2df3edcfac9d8b7d3e2f9ffad89b59c582b951374e2553b9c->leave($__internal_527c11d5c77686e2df3edcfac9d8b7d3e2f9ffad89b59c582b951374e2553b9c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_25c0f18d621a6ceaa2d670da9b46a30212004b501145c204ec7b259b03cf41d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25c0f18d621a6ceaa2d670da9b46a30212004b501145c204ec7b259b03cf41d7->enter($__internal_25c0f18d621a6ceaa2d670da9b46a30212004b501145c204ec7b259b03cf41d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_25c0f18d621a6ceaa2d670da9b46a30212004b501145c204ec7b259b03cf41d7->leave($__internal_25c0f18d621a6ceaa2d670da9b46a30212004b501145c204ec7b259b03cf41d7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0920a680d8bdc364d0198fb46f7744d361bef27145d72e6d524106afe4bf40df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0920a680d8bdc364d0198fb46f7744d361bef27145d72e6d524106afe4bf40df->enter($__internal_0920a680d8bdc364d0198fb46f7744d361bef27145d72e6d524106afe4bf40df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0920a680d8bdc364d0198fb46f7744d361bef27145d72e6d524106afe4bf40df->leave($__internal_0920a680d8bdc364d0198fb46f7744d361bef27145d72e6d524106afe4bf40df_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2632d1b572d9cac6d25dce4f2a915fdc9bc91c908d010286bb4ce56265968152 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2632d1b572d9cac6d25dce4f2a915fdc9bc91c908d010286bb4ce56265968152->enter($__internal_2632d1b572d9cac6d25dce4f2a915fdc9bc91c908d010286bb4ce56265968152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_2632d1b572d9cac6d25dce4f2a915fdc9bc91c908d010286bb4ce56265968152->leave($__internal_2632d1b572d9cac6d25dce4f2a915fdc9bc91c908d010286bb4ce56265968152_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "/var/www/html/Psychomot/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
