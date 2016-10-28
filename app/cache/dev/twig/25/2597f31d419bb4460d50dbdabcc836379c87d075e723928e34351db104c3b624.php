<?php

/* PsychoBundle:Default:index.html.twig */
class __TwigTemplate_09dc2c618a714785881c881f5ae907cbc2a6504d8d5e9f664fb7760250af8d1b extends Twig_Template
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
        $__internal_3380c2d984309c03ec2527d89fcf6daed6e36e373a20c675d995eee4409cd4a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3380c2d984309c03ec2527d89fcf6daed6e36e373a20c675d995eee4409cd4a3->enter($__internal_3380c2d984309c03ec2527d89fcf6daed6e36e373a20c675d995eee4409cd4a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PsychoBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_3380c2d984309c03ec2527d89fcf6daed6e36e373a20c675d995eee4409cd4a3->leave($__internal_3380c2d984309c03ec2527d89fcf6daed6e36e373a20c675d995eee4409cd4a3_prof);

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
