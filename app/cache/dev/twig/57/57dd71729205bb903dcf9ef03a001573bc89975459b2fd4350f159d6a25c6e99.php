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
        $__internal_c21563187fcc2d2435ed2d74a6ddcbf1de167f39a992c35b3faa2023ffdd17e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c21563187fcc2d2435ed2d74a6ddcbf1de167f39a992c35b3faa2023ffdd17e8->enter($__internal_c21563187fcc2d2435ed2d74a6ddcbf1de167f39a992c35b3faa2023ffdd17e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c21563187fcc2d2435ed2d74a6ddcbf1de167f39a992c35b3faa2023ffdd17e8->leave($__internal_c21563187fcc2d2435ed2d74a6ddcbf1de167f39a992c35b3faa2023ffdd17e8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8f00135acd7ab3ef75520b2b278bf7caa62c5d6d7d10ca54196f34f306a18fa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f00135acd7ab3ef75520b2b278bf7caa62c5d6d7d10ca54196f34f306a18fa5->enter($__internal_8f00135acd7ab3ef75520b2b278bf7caa62c5d6d7d10ca54196f34f306a18fa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_8f00135acd7ab3ef75520b2b278bf7caa62c5d6d7d10ca54196f34f306a18fa5->leave($__internal_8f00135acd7ab3ef75520b2b278bf7caa62c5d6d7d10ca54196f34f306a18fa5_prof);

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
