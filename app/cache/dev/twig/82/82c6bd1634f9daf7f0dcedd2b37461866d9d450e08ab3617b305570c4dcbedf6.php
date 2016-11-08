<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_3fba75850376059d258a46c2946d5eb1000d4cd1ee97d0a7d31bae561aeb9315 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_cb0c652d298d122aac3619953a8d83bb4220b52a31cf9748c590e18bfc6100bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb0c652d298d122aac3619953a8d83bb4220b52a31cf9748c590e18bfc6100bd->enter($__internal_cb0c652d298d122aac3619953a8d83bb4220b52a31cf9748c590e18bfc6100bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb0c652d298d122aac3619953a8d83bb4220b52a31cf9748c590e18bfc6100bd->leave($__internal_cb0c652d298d122aac3619953a8d83bb4220b52a31cf9748c590e18bfc6100bd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6b31e749776dbf898024da836cb91b7c19f0295e344866497140ce4ad85b7858 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b31e749776dbf898024da836cb91b7c19f0295e344866497140ce4ad85b7858->enter($__internal_6b31e749776dbf898024da836cb91b7c19f0295e344866497140ce4ad85b7858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_6b31e749776dbf898024da836cb91b7c19f0295e344866497140ce4ad85b7858->leave($__internal_6b31e749776dbf898024da836cb91b7c19f0295e344866497140ce4ad85b7858_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"FOSUserBundle:ChangePassword:change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/Users/Cendrillon/Sites/Psychomot/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
