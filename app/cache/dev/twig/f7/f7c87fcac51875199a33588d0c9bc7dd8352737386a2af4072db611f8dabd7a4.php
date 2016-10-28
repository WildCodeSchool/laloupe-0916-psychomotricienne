<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_34881d3fde93b04c1d03657753f6a20c4dd932c4b264624b78ccb9818a90ebf1 extends Twig_Template
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
        $__internal_e75310053d65758fe2094242b52b53ce1be34843503e24ebdd16f4f53ab07f77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e75310053d65758fe2094242b52b53ce1be34843503e24ebdd16f4f53ab07f77->enter($__internal_e75310053d65758fe2094242b52b53ce1be34843503e24ebdd16f4f53ab07f77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_e75310053d65758fe2094242b52b53ce1be34843503e24ebdd16f4f53ab07f77->leave($__internal_e75310053d65758fe2094242b52b53ce1be34843503e24ebdd16f4f53ab07f77_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_84b93f6dde87afc5e30f7a73db7d44dd539f822792ca924f0abb4ff56a76e2ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84b93f6dde87afc5e30f7a73db7d44dd539f822792ca924f0abb4ff56a76e2ec->enter($__internal_84b93f6dde87afc5e30f7a73db7d44dd539f822792ca924f0abb4ff56a76e2ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:email.txt.twig"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_84b93f6dde87afc5e30f7a73db7d44dd539f822792ca924f0abb4ff56a76e2ec->leave($__internal_84b93f6dde87afc5e30f7a73db7d44dd539f822792ca924f0abb4ff56a76e2ec_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_b7240bddb5119a49f2345d681bb3e232507fed4abe231ed28c2d825b09922e09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7240bddb5119a49f2345d681bb3e232507fed4abe231ed28c2d825b09922e09->enter($__internal_b7240bddb5119a49f2345d681bb3e232507fed4abe231ed28c2d825b09922e09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:email.txt.twig"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_b7240bddb5119a49f2345d681bb3e232507fed4abe231ed28c2d825b09922e09->leave($__internal_b7240bddb5119a49f2345d681bb3e232507fed4abe231ed28c2d825b09922e09_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_df1034fec0c8b2a3f6e3850b593b58894691539ec3f07ae3dd63e87b67bb8355 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df1034fec0c8b2a3f6e3850b593b58894691539ec3f07ae3dd63e87b67bb8355->enter($__internal_df1034fec0c8b2a3f6e3850b593b58894691539ec3f07ae3dd63e87b67bb8355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:email.txt.twig"));

        
        $__internal_df1034fec0c8b2a3f6e3850b593b58894691539ec3f07ae3dd63e87b67bb8355->leave($__internal_df1034fec0c8b2a3f6e3850b593b58894691539ec3f07ae3dd63e87b67bb8355_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/var/www/html/Psychomot/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
