<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_92af9a4ae93652fbe5068228f8d12387d5b7da06e4711d6702b2c9587ffe59d3 extends Twig_Template
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
        $__internal_5ec1587d88f0f2598e2596cea9572168ca4be623668f028227761dcfff0e439a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ec1587d88f0f2598e2596cea9572168ca4be623668f028227761dcfff0e439a->enter($__internal_5ec1587d88f0f2598e2596cea9572168ca4be623668f028227761dcfff0e439a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ec1587d88f0f2598e2596cea9572168ca4be623668f028227761dcfff0e439a->leave($__internal_5ec1587d88f0f2598e2596cea9572168ca4be623668f028227761dcfff0e439a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2f2e2953f13c2bb23c0db35bd0eb44dd58360dcead1e81bf751e464204fde7e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f2e2953f13c2bb23c0db35bd0eb44dd58360dcead1e81bf751e464204fde7e1->enter($__internal_2f2e2953f13c2bb23c0db35bd0eb44dd58360dcead1e81bf751e464204fde7e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Security:login.html.twig"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_2f2e2953f13c2bb23c0db35bd0eb44dd58360dcead1e81bf751e464204fde7e1->leave($__internal_2f2e2953f13c2bb23c0db35bd0eb44dd58360dcead1e81bf751e464204fde7e1_prof);

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
", "FOSUserBundle:Security:login.html.twig", "/Users/Cendrillon/Sites/Psychomot/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
