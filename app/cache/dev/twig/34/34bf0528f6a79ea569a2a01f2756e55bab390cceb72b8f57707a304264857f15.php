<?php

/* PsychoBundle:Default:index.html.twig */
class __TwigTemplate_9980031c9efc3c89c80c1169e2e0e71e7234dc03908979caa56e306b68a3f8d1 extends Twig_Template
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
        $__internal_b2939685cf30703851e30eb7cad2d1a7025c3b39d3f98e4e82e5e5f1894ac017 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2939685cf30703851e30eb7cad2d1a7025c3b39d3f98e4e82e5e5f1894ac017->enter($__internal_b2939685cf30703851e30eb7cad2d1a7025c3b39d3f98e4e82e5e5f1894ac017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PsychoBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_b2939685cf30703851e30eb7cad2d1a7025c3b39d3f98e4e82e5e5f1894ac017->leave($__internal_b2939685cf30703851e30eb7cad2d1a7025c3b39d3f98e4e82e5e5f1894ac017_prof);

    }

    public function getTemplateName()
    {
        return "PsychoBundle:Default:index.html.twig";
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
        return new Twig_Source("Hello World!
", "PsychoBundle:Default:index.html.twig", "/Users/Cendrillon/Sites/Psychomot/src/PsychoBundle/Resources/views/Default/index.html.twig");
    }
}
