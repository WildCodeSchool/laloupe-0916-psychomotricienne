<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_b39e4c850f8e76c6bb24973861508fb85a5823c0945933b119492624332c6aa2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_7ea7964bb289c7b4f99cc342dcb7a580a591f02a2645593e2d02b62e62460f7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ea7964bb289c7b4f99cc342dcb7a580a591f02a2645593e2d02b62e62460f7f->enter($__internal_7ea7964bb289c7b4f99cc342dcb7a580a591f02a2645593e2d02b62e62460f7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ea7964bb289c7b4f99cc342dcb7a580a591f02a2645593e2d02b62e62460f7f->leave($__internal_7ea7964bb289c7b4f99cc342dcb7a580a591f02a2645593e2d02b62e62460f7f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_40534e2d65b06f754fd6742aff05dc899172dbf5c541456e03935946f8cee0bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40534e2d65b06f754fd6742aff05dc899172dbf5c541456e03935946f8cee0bb->enter($__internal_40534e2d65b06f754fd6742aff05dc899172dbf5c541456e03935946f8cee0bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Security:login.html.twig"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_40534e2d65b06f754fd6742aff05dc899172dbf5c541456e03935946f8cee0bb->leave($__internal_40534e2d65b06f754fd6742aff05dc899172dbf5c541456e03935946f8cee0bb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
    {{ include('FOSUserBundle:Security:login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "/var/www/html/Psychomot/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
