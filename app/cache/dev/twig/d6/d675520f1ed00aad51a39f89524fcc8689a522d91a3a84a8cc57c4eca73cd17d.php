<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_1e59fb89f3cfccfdbd1fd42c80b6de8af88b471cc376d8f8a9ebf2b3164a7bf8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_6532b58af169f2b8aac10bf660e707b140d18ebe767abef78479d3aa264c33b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6532b58af169f2b8aac10bf660e707b140d18ebe767abef78479d3aa264c33b9->enter($__internal_6532b58af169f2b8aac10bf660e707b140d18ebe767abef78479d3aa264c33b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6532b58af169f2b8aac10bf660e707b140d18ebe767abef78479d3aa264c33b9->leave($__internal_6532b58af169f2b8aac10bf660e707b140d18ebe767abef78479d3aa264c33b9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c9bb86280290619d9a332ea73c2d50d2ab4acc87c939e9258708f781ee274a92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9bb86280290619d9a332ea73c2d50d2ab4acc87c939e9258708f781ee274a92->enter($__internal_c9bb86280290619d9a332ea73c2d50d2ab4acc87c939e9258708f781ee274a92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Profile:edit.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_c9bb86280290619d9a332ea73c2d50d2ab4acc87c939e9258708f781ee274a92->leave($__internal_c9bb86280290619d9a332ea73c2d50d2ab4acc87c939e9258708f781ee274a92_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/var/www/html/Psychomot/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
