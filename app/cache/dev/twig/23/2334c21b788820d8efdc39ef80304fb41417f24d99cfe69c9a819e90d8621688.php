<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_048d0139130560c1b1c3cd4cfb7c8d004a1defb13489b4446cfd7d70f31568f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_cddf6b88f2c9a8cf97894b67c6becdaac5e30a6f81e44aa9e168730c1f685d7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cddf6b88f2c9a8cf97894b67c6becdaac5e30a6f81e44aa9e168730c1f685d7a->enter($__internal_cddf6b88f2c9a8cf97894b67c6becdaac5e30a6f81e44aa9e168730c1f685d7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cddf6b88f2c9a8cf97894b67c6becdaac5e30a6f81e44aa9e168730c1f685d7a->leave($__internal_cddf6b88f2c9a8cf97894b67c6becdaac5e30a6f81e44aa9e168730c1f685d7a_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_615e3e8fd9a66f7f2fad04c356bc5f8b6841f2758786c607631fa7760247dd79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_615e3e8fd9a66f7f2fad04c356bc5f8b6841f2758786c607631fa7760247dd79->enter($__internal_615e3e8fd9a66f7f2fad04c356bc5f8b6841f2758786c607631fa7760247dd79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:check_email.html.twig"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_615e3e8fd9a66f7f2fad04c356bc5f8b6841f2758786c607631fa7760247dd79->leave($__internal_615e3e8fd9a66f7f2fad04c356bc5f8b6841f2758786c607631fa7760247dd79_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/Users/Cendrillon/Sites/Psychomot/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
