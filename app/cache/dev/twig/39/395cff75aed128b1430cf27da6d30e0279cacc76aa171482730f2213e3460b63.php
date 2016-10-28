<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_f8446dc5c7f538b45efee18fc80fc79910f57a3c7dc2e0340eaf5e0e09ed10a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_84b8e96a58af3297492e7c4ed3e7734200ab2c862313047f349748541fdb8ee1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84b8e96a58af3297492e7c4ed3e7734200ab2c862313047f349748541fdb8ee1->enter($__internal_84b8e96a58af3297492e7c4ed3e7734200ab2c862313047f349748541fdb8ee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_84b8e96a58af3297492e7c4ed3e7734200ab2c862313047f349748541fdb8ee1->leave($__internal_84b8e96a58af3297492e7c4ed3e7734200ab2c862313047f349748541fdb8ee1_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_6fe29964c3ef6db644a80e00226f0f418b0528d2d42e394791c3694521180b37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fe29964c3ef6db644a80e00226f0f418b0528d2d42e394791c3694521180b37->enter($__internal_6fe29964c3ef6db644a80e00226f0f418b0528d2d42e394791c3694521180b37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_6fe29964c3ef6db644a80e00226f0f418b0528d2d42e394791c3694521180b37->leave($__internal_6fe29964c3ef6db644a80e00226f0f418b0528d2d42e394791c3694521180b37_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_a956c9de6c144e3cfe207a0ba8f05f7bc444b75ac14cb396e44c9f28a1cf5b42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a956c9de6c144e3cfe207a0ba8f05f7bc444b75ac14cb396e44c9f28a1cf5b42->enter($__internal_a956c9de6c144e3cfe207a0ba8f05f7bc444b75ac14cb396e44c9f28a1cf5b42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a956c9de6c144e3cfe207a0ba8f05f7bc444b75ac14cb396e44c9f28a1cf5b42->leave($__internal_a956c9de6c144e3cfe207a0ba8f05f7bc444b75ac14cb396e44c9f28a1cf5b42_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_e327fd1041136c869be534fba5cb2c52e1a46b5447c0456421d0cccbadefef96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e327fd1041136c869be534fba5cb2c52e1a46b5447c0456421d0cccbadefef96->enter($__internal_e327fd1041136c869be534fba5cb2c52e1a46b5447c0456421d0cccbadefef96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:email.txt.twig"));

        
        $__internal_e327fd1041136c869be534fba5cb2c52e1a46b5447c0456421d0cccbadefef96->leave($__internal_e327fd1041136c869be534fba5cb2c52e1a46b5447c0456421d0cccbadefef96_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{% autoescape false %}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/var/www/html/Psychomot/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
