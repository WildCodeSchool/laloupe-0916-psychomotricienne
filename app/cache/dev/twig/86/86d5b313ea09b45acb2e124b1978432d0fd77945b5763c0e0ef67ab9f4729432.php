<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_e9e6dccefafcb91a502d35ea8758fec2a93d3b8d233b010bb8ac7a95cc1bd271 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a6fe8dc70a6a8d81e96e987b7920e90926b919fe7c79a7a64006fadfe308f581 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6fe8dc70a6a8d81e96e987b7920e90926b919fe7c79a7a64006fadfe308f581->enter($__internal_a6fe8dc70a6a8d81e96e987b7920e90926b919fe7c79a7a64006fadfe308f581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6fe8dc70a6a8d81e96e987b7920e90926b919fe7c79a7a64006fadfe308f581->leave($__internal_a6fe8dc70a6a8d81e96e987b7920e90926b919fe7c79a7a64006fadfe308f581_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bf0d835607a0d812198be1ab85b6ae5cfa44de5bb7f496cdd930a502b2230785 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf0d835607a0d812198be1ab85b6ae5cfa44de5bb7f496cdd930a502b2230785->enter($__internal_bf0d835607a0d812198be1ab85b6ae5cfa44de5bb7f496cdd930a502b2230785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:register.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_bf0d835607a0d812198be1ab85b6ae5cfa44de5bb7f496cdd930a502b2230785->leave($__internal_bf0d835607a0d812198be1ab85b6ae5cfa44de5bb7f496cdd930a502b2230785_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/var/www/html/Psychomot/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
