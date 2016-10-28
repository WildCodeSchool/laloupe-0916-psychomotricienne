<?php

/* PsychoBundle:Default:index.html.twig */
class __TwigTemplate_ce3b764b16a7c7eb99ee61313123778fe4c8da2adc33db1c0d16d717b5089c0f extends Twig_Template
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
        $__internal_ec29e71db3b228d23b5ff980ad6bd0f73a0a1a4e7ab6e7aac48889836f29ec3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec29e71db3b228d23b5ff980ad6bd0f73a0a1a4e7ab6e7aac48889836f29ec3f->enter($__internal_ec29e71db3b228d23b5ff980ad6bd0f73a0a1a4e7ab6e7aac48889836f29ec3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PsychoBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_ec29e71db3b228d23b5ff980ad6bd0f73a0a1a4e7ab6e7aac48889836f29ec3f->leave($__internal_ec29e71db3b228d23b5ff980ad6bd0f73a0a1a4e7ab6e7aac48889836f29ec3f_prof);

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
", "PsychoBundle:Default:index.html.twig", "/var/www/html/Psychomot/src/PsychoBundle/Resources/views/Default/index.html.twig");
    }
}
