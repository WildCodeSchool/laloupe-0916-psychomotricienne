<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_27ce16a8abc87666d28ac3aa64189293a5d40bcf8e0bcedfd1aed0971064bd66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_795cc093887a021acd2983059a12ef7a4cd776f041a1983811ceb256c8f6ccc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_795cc093887a021acd2983059a12ef7a4cd776f041a1983811ceb256c8f6ccc1->enter($__internal_795cc093887a021acd2983059a12ef7a4cd776f041a1983811ceb256c8f6ccc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_795cc093887a021acd2983059a12ef7a4cd776f041a1983811ceb256c8f6ccc1->leave($__internal_795cc093887a021acd2983059a12ef7a4cd776f041a1983811ceb256c8f6ccc1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3950a2cd579ad46e9a485016b2b687406c0a65feadc755737d501b274d03a327 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3950a2cd579ad46e9a485016b2b687406c0a65feadc755737d501b274d03a327->enter($__internal_3950a2cd579ad46e9a485016b2b687406c0a65feadc755737d501b274d03a327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:reset.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_3950a2cd579ad46e9a485016b2b687406c0a65feadc755737d501b274d03a327->leave($__internal_3950a2cd579ad46e9a485016b2b687406c0a65feadc755737d501b274d03a327_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"FOSUserBundle:Resetting:reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/var/www/html/Psychomot/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
