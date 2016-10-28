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
        $__internal_d0ebc07deda435208419bb5ea3e315a4e16eee34ea6f7535d0088de736ec34a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0ebc07deda435208419bb5ea3e315a4e16eee34ea6f7535d0088de736ec34a3->enter($__internal_d0ebc07deda435208419bb5ea3e315a4e16eee34ea6f7535d0088de736ec34a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0ebc07deda435208419bb5ea3e315a4e16eee34ea6f7535d0088de736ec34a3->leave($__internal_d0ebc07deda435208419bb5ea3e315a4e16eee34ea6f7535d0088de736ec34a3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6ae02730b2d286364f8bed411371a62617b70bab55da1928655038555b38ef9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ae02730b2d286364f8bed411371a62617b70bab55da1928655038555b38ef9f->enter($__internal_6ae02730b2d286364f8bed411371a62617b70bab55da1928655038555b38ef9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:reset.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_6ae02730b2d286364f8bed411371a62617b70bab55da1928655038555b38ef9f->leave($__internal_6ae02730b2d286364f8bed411371a62617b70bab55da1928655038555b38ef9f_prof);

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
