<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_824655f643ea82457c1a7075a8768170b92b7f0a33cd8fd85a00e085d6eb4c0c extends Twig_Template
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
        $__internal_64743d8dbcb0ec7a10c9b52c8b72ba0c229cf87eb47c4219d0956095b368039c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64743d8dbcb0ec7a10c9b52c8b72ba0c229cf87eb47c4219d0956095b368039c->enter($__internal_64743d8dbcb0ec7a10c9b52c8b72ba0c229cf87eb47c4219d0956095b368039c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64743d8dbcb0ec7a10c9b52c8b72ba0c229cf87eb47c4219d0956095b368039c->leave($__internal_64743d8dbcb0ec7a10c9b52c8b72ba0c229cf87eb47c4219d0956095b368039c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1b6321ed881bb093a94e56c606db6f9000a15cd6ab26d1293b9921ed646fa593 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b6321ed881bb093a94e56c606db6f9000a15cd6ab26d1293b9921ed646fa593->enter($__internal_1b6321ed881bb093a94e56c606db6f9000a15cd6ab26d1293b9921ed646fa593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Security:login.html.twig"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_1b6321ed881bb093a94e56c606db6f9000a15cd6ab26d1293b9921ed646fa593->leave($__internal_1b6321ed881bb093a94e56c606db6f9000a15cd6ab26d1293b9921ed646fa593_prof);

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
