<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_474c9283eebf18a0f0057797ffcfc71a61b4646a18b19de26ce9390dcc54bad6 extends Twig_Template
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
        $__internal_1ad2b8d704b5450d41548259c88324594b229ef4d57314f0340b849a90677c3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ad2b8d704b5450d41548259c88324594b229ef4d57314f0340b849a90677c3f->enter($__internal_1ad2b8d704b5450d41548259c88324594b229ef4d57314f0340b849a90677c3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_1ad2b8d704b5450d41548259c88324594b229ef4d57314f0340b849a90677c3f->leave($__internal_1ad2b8d704b5450d41548259c88324594b229ef4d57314f0340b849a90677c3f_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_f89445fa49b78f85d30eb47ee18d6758f04899fb553b0edeb54fc00881b9621b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f89445fa49b78f85d30eb47ee18d6758f04899fb553b0edeb54fc00881b9621b->enter($__internal_f89445fa49b78f85d30eb47ee18d6758f04899fb553b0edeb54fc00881b9621b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:email.txt.twig"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_f89445fa49b78f85d30eb47ee18d6758f04899fb553b0edeb54fc00881b9621b->leave($__internal_f89445fa49b78f85d30eb47ee18d6758f04899fb553b0edeb54fc00881b9621b_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_a9b1904b121758e15480ae0e07e23cdf3f321d546f647b8a38ff9cd6c5adce60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9b1904b121758e15480ae0e07e23cdf3f321d546f647b8a38ff9cd6c5adce60->enter($__internal_a9b1904b121758e15480ae0e07e23cdf3f321d546f647b8a38ff9cd6c5adce60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:email.txt.twig"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a9b1904b121758e15480ae0e07e23cdf3f321d546f647b8a38ff9cd6c5adce60->leave($__internal_a9b1904b121758e15480ae0e07e23cdf3f321d546f647b8a38ff9cd6c5adce60_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_ff97528f24239705b58a127b32420a25849ec9bde7550ce7e5d14aefdb08cd27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff97528f24239705b58a127b32420a25849ec9bde7550ce7e5d14aefdb08cd27->enter($__internal_ff97528f24239705b58a127b32420a25849ec9bde7550ce7e5d14aefdb08cd27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:email.txt.twig"));

        
        $__internal_ff97528f24239705b58a127b32420a25849ec9bde7550ce7e5d14aefdb08cd27->leave($__internal_ff97528f24239705b58a127b32420a25849ec9bde7550ce7e5d14aefdb08cd27_prof);

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
", "FOSUserBundle:Registration:email.txt.twig", "/Users/Cendrillon/Sites/Psychomot/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
