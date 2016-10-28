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
        $__internal_145ba61e72bbdb7a753427c43696f654b33b4c6d8cc86072a871132854546ea6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_145ba61e72bbdb7a753427c43696f654b33b4c6d8cc86072a871132854546ea6->enter($__internal_145ba61e72bbdb7a753427c43696f654b33b4c6d8cc86072a871132854546ea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_145ba61e72bbdb7a753427c43696f654b33b4c6d8cc86072a871132854546ea6->leave($__internal_145ba61e72bbdb7a753427c43696f654b33b4c6d8cc86072a871132854546ea6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_058a34862e29a904842696868f10218a6d0400e79e17dbfd9f11d258420c2747 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_058a34862e29a904842696868f10218a6d0400e79e17dbfd9f11d258420c2747->enter($__internal_058a34862e29a904842696868f10218a6d0400e79e17dbfd9f11d258420c2747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Group:new.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_058a34862e29a904842696868f10218a6d0400e79e17dbfd9f11d258420c2747->leave($__internal_058a34862e29a904842696868f10218a6d0400e79e17dbfd9f11d258420c2747_prof);

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
