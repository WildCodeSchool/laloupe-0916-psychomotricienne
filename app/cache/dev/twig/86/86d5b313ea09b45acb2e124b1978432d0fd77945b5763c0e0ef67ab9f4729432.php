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
        $__internal_9f63846454fbad21f84f4117f9ba14b07aaf6283da7032bb02a8d69191670c52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f63846454fbad21f84f4117f9ba14b07aaf6283da7032bb02a8d69191670c52->enter($__internal_9f63846454fbad21f84f4117f9ba14b07aaf6283da7032bb02a8d69191670c52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f63846454fbad21f84f4117f9ba14b07aaf6283da7032bb02a8d69191670c52->leave($__internal_9f63846454fbad21f84f4117f9ba14b07aaf6283da7032bb02a8d69191670c52_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e706bbc1035e30c93469b02aa5b8be4eb297e5e366bdb535861a30f92fd4213d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e706bbc1035e30c93469b02aa5b8be4eb297e5e366bdb535861a30f92fd4213d->enter($__internal_e706bbc1035e30c93469b02aa5b8be4eb297e5e366bdb535861a30f92fd4213d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:register.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_e706bbc1035e30c93469b02aa5b8be4eb297e5e366bdb535861a30f92fd4213d->leave($__internal_e706bbc1035e30c93469b02aa5b8be4eb297e5e366bdb535861a30f92fd4213d_prof);

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
