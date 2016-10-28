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
        $__internal_ee28e44350314859232add02e4f1d4a8c90627f15b1c7cc67f7b0bf69e2a779c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee28e44350314859232add02e4f1d4a8c90627f15b1c7cc67f7b0bf69e2a779c->enter($__internal_ee28e44350314859232add02e4f1d4a8c90627f15b1c7cc67f7b0bf69e2a779c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_ee28e44350314859232add02e4f1d4a8c90627f15b1c7cc67f7b0bf69e2a779c->leave($__internal_ee28e44350314859232add02e4f1d4a8c90627f15b1c7cc67f7b0bf69e2a779c_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_430dd5c8b7facd26441cac3b0b62a6fa1df148dffaeb51af3e0add8a22eedeb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_430dd5c8b7facd26441cac3b0b62a6fa1df148dffaeb51af3e0add8a22eedeb8->enter($__internal_430dd5c8b7facd26441cac3b0b62a6fa1df148dffaeb51af3e0add8a22eedeb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:email.txt.twig"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_430dd5c8b7facd26441cac3b0b62a6fa1df148dffaeb51af3e0add8a22eedeb8->leave($__internal_430dd5c8b7facd26441cac3b0b62a6fa1df148dffaeb51af3e0add8a22eedeb8_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_de54ade0bec664f7ef3ea2aa3b0945736ee1df5b5cbc6e8776dbe739f6817164 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de54ade0bec664f7ef3ea2aa3b0945736ee1df5b5cbc6e8776dbe739f6817164->enter($__internal_de54ade0bec664f7ef3ea2aa3b0945736ee1df5b5cbc6e8776dbe739f6817164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:email.txt.twig"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_de54ade0bec664f7ef3ea2aa3b0945736ee1df5b5cbc6e8776dbe739f6817164->leave($__internal_de54ade0bec664f7ef3ea2aa3b0945736ee1df5b5cbc6e8776dbe739f6817164_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_4f2cbdbc10a723476c475d634baf7ed46f869b4ebf3746ed61ddc11fe58933ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f2cbdbc10a723476c475d634baf7ed46f869b4ebf3746ed61ddc11fe58933ec->enter($__internal_4f2cbdbc10a723476c475d634baf7ed46f869b4ebf3746ed61ddc11fe58933ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:email.txt.twig"));

        
        $__internal_4f2cbdbc10a723476c475d634baf7ed46f869b4ebf3746ed61ddc11fe58933ec->leave($__internal_4f2cbdbc10a723476c475d634baf7ed46f869b4ebf3746ed61ddc11fe58933ec_prof);

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
