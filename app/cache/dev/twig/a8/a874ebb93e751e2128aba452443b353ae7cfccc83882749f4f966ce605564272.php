<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_ca6917b719a90f5512284a82c1db61d83591ecccf2881eb7427f7e1f2e16f2e1 extends Twig_Template
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
        $__internal_cb8bb85127eff4e669e2dea0cae918bbc019b54e58d92837ea0e62065fdc76e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb8bb85127eff4e669e2dea0cae918bbc019b54e58d92837ea0e62065fdc76e0->enter($__internal_cb8bb85127eff4e669e2dea0cae918bbc019b54e58d92837ea0e62065fdc76e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb8bb85127eff4e669e2dea0cae918bbc019b54e58d92837ea0e62065fdc76e0->leave($__internal_cb8bb85127eff4e669e2dea0cae918bbc019b54e58d92837ea0e62065fdc76e0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_86f45d539c3f5fcba9f9c54f79b1289bd07dd0b3c987709f808ea3c35807d656 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86f45d539c3f5fcba9f9c54f79b1289bd07dd0b3c987709f808ea3c35807d656->enter($__internal_86f45d539c3f5fcba9f9c54f79b1289bd07dd0b3c987709f808ea3c35807d656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Security:login.html.twig"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_86f45d539c3f5fcba9f9c54f79b1289bd07dd0b3c987709f808ea3c35807d656->leave($__internal_86f45d539c3f5fcba9f9c54f79b1289bd07dd0b3c987709f808ea3c35807d656_prof);

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
", "FOSUserBundle:Security:login.html.twig", "/var/www/html/Psychomot/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
