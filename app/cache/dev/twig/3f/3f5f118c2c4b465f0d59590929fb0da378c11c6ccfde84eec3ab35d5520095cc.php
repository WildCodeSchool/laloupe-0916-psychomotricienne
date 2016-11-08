<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_9bd356ef3f7d9c12fbf7fa4ece7343e9d0f9d11780e49d8cbd673826321180d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_36e81850ca68755bc842d9a49fd93250bb2cea6b21992cd5298f80311317593d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36e81850ca68755bc842d9a49fd93250bb2cea6b21992cd5298f80311317593d->enter($__internal_36e81850ca68755bc842d9a49fd93250bb2cea6b21992cd5298f80311317593d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36e81850ca68755bc842d9a49fd93250bb2cea6b21992cd5298f80311317593d->leave($__internal_36e81850ca68755bc842d9a49fd93250bb2cea6b21992cd5298f80311317593d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_410749e035f84563d30b14574ebc6df397a09b5041b4615695dc80b8a3316585 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_410749e035f84563d30b14574ebc6df397a09b5041b4615695dc80b8a3316585->enter($__internal_410749e035f84563d30b14574ebc6df397a09b5041b4615695dc80b8a3316585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:reset.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_410749e035f84563d30b14574ebc6df397a09b5041b4615695dc80b8a3316585->leave($__internal_410749e035f84563d30b14574ebc6df397a09b5041b4615695dc80b8a3316585_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"FOSUserBundle:Resetting:reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/Users/Cendrillon/Sites/Psychomot/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
