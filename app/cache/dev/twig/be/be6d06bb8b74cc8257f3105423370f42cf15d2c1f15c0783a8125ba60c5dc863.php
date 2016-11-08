<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_01d599ab92a02be1f7c9380b979efa9d2dc3e00de7630f7ad2d9c9af166b1c24 extends Twig_Template
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
        $__internal_1d1f0ce61bcb3c71f8c35843d3348f432d7ade01185d8da197bffae2434310a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d1f0ce61bcb3c71f8c35843d3348f432d7ade01185d8da197bffae2434310a1->enter($__internal_1d1f0ce61bcb3c71f8c35843d3348f432d7ade01185d8da197bffae2434310a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_1d1f0ce61bcb3c71f8c35843d3348f432d7ade01185d8da197bffae2434310a1->leave($__internal_1d1f0ce61bcb3c71f8c35843d3348f432d7ade01185d8da197bffae2434310a1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/Users/Cendrillon/Sites/Psychomot/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
