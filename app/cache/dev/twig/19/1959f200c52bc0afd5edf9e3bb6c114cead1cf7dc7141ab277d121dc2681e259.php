<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_4dede7bcc1dcfd4969b851e69bdd3ceb132f6225e10325868f8af79bc03514ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_f93f8407dc7004282b806f4f7fa2239e1dfa35a6ec68e700344c408df59198d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f93f8407dc7004282b806f4f7fa2239e1dfa35a6ec68e700344c408df59198d7->enter($__internal_f93f8407dc7004282b806f4f7fa2239e1dfa35a6ec68e700344c408df59198d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f93f8407dc7004282b806f4f7fa2239e1dfa35a6ec68e700344c408df59198d7->leave($__internal_f93f8407dc7004282b806f4f7fa2239e1dfa35a6ec68e700344c408df59198d7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d2e6358e0415d6d09ad0961c070b3b2553b4f4e160bcea0cdc7fdf5f6c0ac28f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2e6358e0415d6d09ad0961c070b3b2553b4f4e160bcea0cdc7fdf5f6c0ac28f->enter($__internal_d2e6358e0415d6d09ad0961c070b3b2553b4f4e160bcea0cdc7fdf5f6c0ac28f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Group:list.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_d2e6358e0415d6d09ad0961c070b3b2553b4f4e160bcea0cdc7fdf5f6c0ac28f->leave($__internal_d2e6358e0415d6d09ad0961c070b3b2553b4f4e160bcea0cdc7fdf5f6c0ac28f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"FOSUserBundle:Group:list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/var/www/html/Psychomot/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list.html.twig");
    }
}
