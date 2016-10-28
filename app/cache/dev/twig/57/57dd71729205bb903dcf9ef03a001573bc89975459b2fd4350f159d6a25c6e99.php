<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_66916f7b231bd839f6fbd1f8fcb61af38f97c36c1eff3cb34f0f472f56b1484d extends Twig_Template
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
        $__internal_718d9f4715f8980dee47605d2498b23cdef436cd02eb1a725aa3313853429597 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_718d9f4715f8980dee47605d2498b23cdef436cd02eb1a725aa3313853429597->enter($__internal_718d9f4715f8980dee47605d2498b23cdef436cd02eb1a725aa3313853429597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_718d9f4715f8980dee47605d2498b23cdef436cd02eb1a725aa3313853429597->leave($__internal_718d9f4715f8980dee47605d2498b23cdef436cd02eb1a725aa3313853429597_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ec980d5bf8f17429c1474459f69810dbe223df10ea1626f317544f0fbfb3b8f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec980d5bf8f17429c1474459f69810dbe223df10ea1626f317544f0fbfb3b8f6->enter($__internal_ec980d5bf8f17429c1474459f69810dbe223df10ea1626f317544f0fbfb3b8f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_ec980d5bf8f17429c1474459f69810dbe223df10ea1626f317544f0fbfb3b8f6->leave($__internal_ec980d5bf8f17429c1474459f69810dbe223df10ea1626f317544f0fbfb3b8f6_prof);

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
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/var/www/html/Psychomot/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
