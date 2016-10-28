<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_43ad7dfdbc9986b79e3f84bed3612df44a1d418b2d6fc1447de3f721bfb6d779 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_274861de4074aba37c5cfaf267a0ab5b9187b96ed0f93823348e1c2ba0880f7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_274861de4074aba37c5cfaf267a0ab5b9187b96ed0f93823348e1c2ba0880f7b->enter($__internal_274861de4074aba37c5cfaf267a0ab5b9187b96ed0f93823348e1c2ba0880f7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_274861de4074aba37c5cfaf267a0ab5b9187b96ed0f93823348e1c2ba0880f7b->leave($__internal_274861de4074aba37c5cfaf267a0ab5b9187b96ed0f93823348e1c2ba0880f7b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c0b9dc47f0700447aed11b17f2aab35c413ff99a3c2f19553c4558310a52d4e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0b9dc47f0700447aed11b17f2aab35c413ff99a3c2f19553c4558310a52d4e1->enter($__internal_c0b9dc47f0700447aed11b17f2aab35c413ff99a3c2f19553c4558310a52d4e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:request.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_c0b9dc47f0700447aed11b17f2aab35c413ff99a3c2f19553c4558310a52d4e1->leave($__internal_c0b9dc47f0700447aed11b17f2aab35c413ff99a3c2f19553c4558310a52d4e1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/var/www/html/Psychomot/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
