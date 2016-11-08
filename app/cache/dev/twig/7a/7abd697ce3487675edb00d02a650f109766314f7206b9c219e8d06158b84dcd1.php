<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_c9c4f9acde2c4128bbc455b2ce1da883bfeba7ba192bdff9dd614cca52f54724 extends Twig_Template
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
        $__internal_424dcbae3e8b7456bbba982330348563956fbf57e66227a2a341880f843b838e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_424dcbae3e8b7456bbba982330348563956fbf57e66227a2a341880f843b838e->enter($__internal_424dcbae3e8b7456bbba982330348563956fbf57e66227a2a341880f843b838e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_424dcbae3e8b7456bbba982330348563956fbf57e66227a2a341880f843b838e->leave($__internal_424dcbae3e8b7456bbba982330348563956fbf57e66227a2a341880f843b838e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bb929d5983168656b50500890340de7825d0e65e38c83123a28ac0f58a319658 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb929d5983168656b50500890340de7825d0e65e38c83123a28ac0f58a319658->enter($__internal_bb929d5983168656b50500890340de7825d0e65e38c83123a28ac0f58a319658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Security:login.html.twig"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_bb929d5983168656b50500890340de7825d0e65e38c83123a28ac0f58a319658->leave($__internal_bb929d5983168656b50500890340de7825d0e65e38c83123a28ac0f58a319658_prof);

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
