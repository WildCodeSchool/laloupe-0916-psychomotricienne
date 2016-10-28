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
        $__internal_70ca06026087fb3b643418316f18024ac3b6b7e8e512ace0c301dae80b6fa528 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70ca06026087fb3b643418316f18024ac3b6b7e8e512ace0c301dae80b6fa528->enter($__internal_70ca06026087fb3b643418316f18024ac3b6b7e8e512ace0c301dae80b6fa528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_70ca06026087fb3b643418316f18024ac3b6b7e8e512ace0c301dae80b6fa528->leave($__internal_70ca06026087fb3b643418316f18024ac3b6b7e8e512ace0c301dae80b6fa528_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_5f9f1f735a16422b1c6c48c445050b1cfc779ab3efb3251df708df75493afc2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f9f1f735a16422b1c6c48c445050b1cfc779ab3efb3251df708df75493afc2d->enter($__internal_5f9f1f735a16422b1c6c48c445050b1cfc779ab3efb3251df708df75493afc2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_5f9f1f735a16422b1c6c48c445050b1cfc779ab3efb3251df708df75493afc2d->leave($__internal_5f9f1f735a16422b1c6c48c445050b1cfc779ab3efb3251df708df75493afc2d_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_6b6182ee06fdbf1f1f933320b361ccda0c6bccba41c9dd25d1aa4e31f49a8993 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b6182ee06fdbf1f1f933320b361ccda0c6bccba41c9dd25d1aa4e31f49a8993->enter($__internal_6b6182ee06fdbf1f1f933320b361ccda0c6bccba41c9dd25d1aa4e31f49a8993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_6b6182ee06fdbf1f1f933320b361ccda0c6bccba41c9dd25d1aa4e31f49a8993->leave($__internal_6b6182ee06fdbf1f1f933320b361ccda0c6bccba41c9dd25d1aa4e31f49a8993_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_f2d09af38a008d8cf0eefeda17f0a769f5854ded06bcbf2983a1dda686074186 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2d09af38a008d8cf0eefeda17f0a769f5854ded06bcbf2983a1dda686074186->enter($__internal_f2d09af38a008d8cf0eefeda17f0a769f5854ded06bcbf2983a1dda686074186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:email.txt.twig"));

        
        $__internal_f2d09af38a008d8cf0eefeda17f0a769f5854ded06bcbf2983a1dda686074186->leave($__internal_f2d09af38a008d8cf0eefeda17f0a769f5854ded06bcbf2983a1dda686074186_prof);

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
