<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_fa112a04ae3b2ec0913b48145b68baf0e5cb7b575881f936de0e16df1d24e60f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_84b07c6f905faa00dbaa936411cb1a4b1c1a3b69e666ec7240ef5ae0e9df283a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84b07c6f905faa00dbaa936411cb1a4b1c1a3b69e666ec7240ef5ae0e9df283a->enter($__internal_84b07c6f905faa00dbaa936411cb1a4b1c1a3b69e666ec7240ef5ae0e9df283a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84b07c6f905faa00dbaa936411cb1a4b1c1a3b69e666ec7240ef5ae0e9df283a->leave($__internal_84b07c6f905faa00dbaa936411cb1a4b1c1a3b69e666ec7240ef5ae0e9df283a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c379c4345b8418ed9b0b70d95480cbf5cf16e5fe0b32c5e5f014ce9ff27eb817 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c379c4345b8418ed9b0b70d95480cbf5cf16e5fe0b32c5e5f014ce9ff27eb817->enter($__internal_c379c4345b8418ed9b0b70d95480cbf5cf16e5fe0b32c5e5f014ce9ff27eb817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Group:new.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_c379c4345b8418ed9b0b70d95480cbf5cf16e5fe0b32c5e5f014ce9ff27eb817->leave($__internal_c379c4345b8418ed9b0b70d95480cbf5cf16e5fe0b32c5e5f014ce9ff27eb817_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"FOSUserBundle:Group:new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/var/www/html/Psychomot/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new.html.twig");
    }
}
