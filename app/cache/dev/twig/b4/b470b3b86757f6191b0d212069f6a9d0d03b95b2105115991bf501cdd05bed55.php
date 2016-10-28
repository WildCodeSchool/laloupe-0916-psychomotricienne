<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_67c00816b442f5e74946b0cf0be8e74fd39de7dd00d6cdeab11435a121663342 extends Twig_Template
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
        $__internal_f3754b47fdff806798438062dee5d4e8428fc40de49acb48699580401a19caa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3754b47fdff806798438062dee5d4e8428fc40de49acb48699580401a19caa7->enter($__internal_f3754b47fdff806798438062dee5d4e8428fc40de49acb48699580401a19caa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3754b47fdff806798438062dee5d4e8428fc40de49acb48699580401a19caa7->leave($__internal_f3754b47fdff806798438062dee5d4e8428fc40de49acb48699580401a19caa7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0887b8d20a1f42b9cf2eabf62a51a8c7c94ac52ad8dd6f2c9837922912376c13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0887b8d20a1f42b9cf2eabf62a51a8c7c94ac52ad8dd6f2c9837922912376c13->enter($__internal_0887b8d20a1f42b9cf2eabf62a51a8c7c94ac52ad8dd6f2c9837922912376c13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Group:show.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_0887b8d20a1f42b9cf2eabf62a51a8c7c94ac52ad8dd6f2c9837922912376c13->leave($__internal_0887b8d20a1f42b9cf2eabf62a51a8c7c94ac52ad8dd6f2c9837922912376c13_prof);

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
", "FOSUserBundle:Group:show.html.twig", "/var/www/html/Psychomot/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show.html.twig");
    }
}
