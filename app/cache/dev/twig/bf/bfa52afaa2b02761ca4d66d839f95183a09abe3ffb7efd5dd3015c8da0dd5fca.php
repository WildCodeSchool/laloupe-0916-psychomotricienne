<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_19c1fc1ae4b1f5a89268e1f4a09746c0ebf968e76bf6ed66a6f8b18b54ff34f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_b55c5cce8a6fc9f63294fb0c44b010c298771b02e3a1d3b3ee3a7d483d310769 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b55c5cce8a6fc9f63294fb0c44b010c298771b02e3a1d3b3ee3a7d483d310769->enter($__internal_b55c5cce8a6fc9f63294fb0c44b010c298771b02e3a1d3b3ee3a7d483d310769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b55c5cce8a6fc9f63294fb0c44b010c298771b02e3a1d3b3ee3a7d483d310769->leave($__internal_b55c5cce8a6fc9f63294fb0c44b010c298771b02e3a1d3b3ee3a7d483d310769_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e7d75628032aca8ece7120288f99c7e518ad1b506a9a1da06b65cdc529592ae1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7d75628032aca8ece7120288f99c7e518ad1b506a9a1da06b65cdc529592ae1->enter($__internal_e7d75628032aca8ece7120288f99c7e518ad1b506a9a1da06b65cdc529592ae1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Profile:show.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_e7d75628032aca8ece7120288f99c7e518ad1b506a9a1da06b65cdc529592ae1->leave($__internal_e7d75628032aca8ece7120288f99c7e518ad1b506a9a1da06b65cdc529592ae1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/var/www/html/Psychomot/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
