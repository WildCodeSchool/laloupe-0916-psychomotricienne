<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_0e00b42a38f27509467ee424f180ee0a24972b9347fd487772f3214317359a2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_fe924ff017135c6828dfae2f28c0c37f9b42233f8df6d4141751c5d799f17885 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe924ff017135c6828dfae2f28c0c37f9b42233f8df6d4141751c5d799f17885->enter($__internal_fe924ff017135c6828dfae2f28c0c37f9b42233f8df6d4141751c5d799f17885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe924ff017135c6828dfae2f28c0c37f9b42233f8df6d4141751c5d799f17885->leave($__internal_fe924ff017135c6828dfae2f28c0c37f9b42233f8df6d4141751c5d799f17885_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f317259aba975dd0944b80f538def0f307f9c8bdf85b6e89053bdec1fdb6f17d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f317259aba975dd0944b80f538def0f307f9c8bdf85b6e89053bdec1fdb6f17d->enter($__internal_f317259aba975dd0944b80f538def0f307f9c8bdf85b6e89053bdec1fdb6f17d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Group:show.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_f317259aba975dd0944b80f538def0f307f9c8bdf85b6e89053bdec1fdb6f17d->leave($__internal_f317259aba975dd0944b80f538def0f307f9c8bdf85b6e89053bdec1fdb6f17d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"FOSUserBundle:Group:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/Users/Cendrillon/Sites/Psychomot/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show.html.twig");
    }
}
