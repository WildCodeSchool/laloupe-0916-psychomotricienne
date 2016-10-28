<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_bdb272884df4f77eca74077e4d91328b8dc2bf5d520f85a07418a010154d00d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_30299bf8734782d8b74a9d1cc32be4b03af7b9416fade1524b6c3e8e12a3a1a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30299bf8734782d8b74a9d1cc32be4b03af7b9416fade1524b6c3e8e12a3a1a4->enter($__internal_30299bf8734782d8b74a9d1cc32be4b03af7b9416fade1524b6c3e8e12a3a1a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_30299bf8734782d8b74a9d1cc32be4b03af7b9416fade1524b6c3e8e12a3a1a4->leave($__internal_30299bf8734782d8b74a9d1cc32be4b03af7b9416fade1524b6c3e8e12a3a1a4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "/var/www/html/Psychomot/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
