<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_4bb075d13115ffb7ef802b8b4d48e67bd8ea24ce7090567744cf08cf99dbfc77 extends Twig_Template
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
        $__internal_8ff7e4b25499c2d062916c9bc0efa407deb7436f121da2332a9c3f75a6e75b11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ff7e4b25499c2d062916c9bc0efa407deb7436f121da2332a9c3f75a6e75b11->enter($__internal_8ff7e4b25499c2d062916c9bc0efa407deb7436f121da2332a9c3f75a6e75b11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ff7e4b25499c2d062916c9bc0efa407deb7436f121da2332a9c3f75a6e75b11->leave($__internal_8ff7e4b25499c2d062916c9bc0efa407deb7436f121da2332a9c3f75a6e75b11_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2b1a119453733cb3ca937722d3584c8270a2dc4d6438a6cc0352d2b28977f836 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b1a119453733cb3ca937722d3584c8270a2dc4d6438a6cc0352d2b28977f836->enter($__internal_2b1a119453733cb3ca937722d3584c8270a2dc4d6438a6cc0352d2b28977f836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Group:new.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_2b1a119453733cb3ca937722d3584c8270a2dc4d6438a6cc0352d2b28977f836->leave($__internal_2b1a119453733cb3ca937722d3584c8270a2dc4d6438a6cc0352d2b28977f836_prof);

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
", "FOSUserBundle:Group:new.html.twig", "/Users/Cendrillon/Sites/Psychomot/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new.html.twig");
    }
}
