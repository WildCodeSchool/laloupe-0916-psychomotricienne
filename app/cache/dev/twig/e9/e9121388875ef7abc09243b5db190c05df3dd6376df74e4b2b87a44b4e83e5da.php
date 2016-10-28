<?php

/* :FOSUserBundle/views/Security:login.html.twig */
class __TwigTemplate_ecfce25b52183a87cdc3ae02d9f64532badd8df2cb59af41d24ac1430e42009e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", ":FOSUserBundle/views/Security:login.html.twig", 1);
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
        $__internal_7705725d5e805438a471d21c525f375d7f5eca9e28c9947a94499015c0c24aa1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7705725d5e805438a471d21c525f375d7f5eca9e28c9947a94499015c0c24aa1->enter($__internal_7705725d5e805438a471d21c525f375d7f5eca9e28c9947a94499015c0c24aa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":FOSUserBundle/views/Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7705725d5e805438a471d21c525f375d7f5eca9e28c9947a94499015c0c24aa1->leave($__internal_7705725d5e805438a471d21c525f375d7f5eca9e28c9947a94499015c0c24aa1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7fd0412899e68555009e31c84af85e163bc1c730fcf3656442faa7f7e306b687 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fd0412899e68555009e31c84af85e163bc1c730fcf3656442faa7f7e306b687->enter($__internal_7fd0412899e68555009e31c84af85e163bc1c730fcf3656442faa7f7e306b687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", ":FOSUserBundle/views/Security:login.html.twig"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_7fd0412899e68555009e31c84af85e163bc1c730fcf3656442faa7f7e306b687->leave($__internal_7fd0412899e68555009e31c84af85e163bc1c730fcf3656442faa7f7e306b687_prof);

    }

    public function getTemplateName()
    {
        return ":FOSUserBundle/views/Security:login.html.twig";
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
", ":FOSUserBundle/views/Security:login.html.twig", "/var/www/html/Psychomot/app/Resources/views/FOSUserBundle/views/Security/login.html.twig");
    }
}
