<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_43ad7dfdbc9986b79e3f84bed3612df44a1d418b2d6fc1447de3f721bfb6d779 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_30ff49f49911e83afda615d1e538ec632eb9af525ed62a3c35de32fb421568a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30ff49f49911e83afda615d1e538ec632eb9af525ed62a3c35de32fb421568a7->enter($__internal_30ff49f49911e83afda615d1e538ec632eb9af525ed62a3c35de32fb421568a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30ff49f49911e83afda615d1e538ec632eb9af525ed62a3c35de32fb421568a7->leave($__internal_30ff49f49911e83afda615d1e538ec632eb9af525ed62a3c35de32fb421568a7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cf4225148d28af3b79002599b60601670e26c362d0c541cbcbc00e2a8a9774be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf4225148d28af3b79002599b60601670e26c362d0c541cbcbc00e2a8a9774be->enter($__internal_cf4225148d28af3b79002599b60601670e26c362d0c541cbcbc00e2a8a9774be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:request.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_cf4225148d28af3b79002599b60601670e26c362d0c541cbcbc00e2a8a9774be->leave($__internal_cf4225148d28af3b79002599b60601670e26c362d0c541cbcbc00e2a8a9774be_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/var/www/html/Psychomot/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
