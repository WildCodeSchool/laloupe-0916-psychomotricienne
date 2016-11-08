<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_7344ea464a8203f442582b67e494782bd3f162722cda4363e9d563679605a200 extends Twig_Template
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
        $__internal_566c277b73fbca2b950df4ae02492abf7cfb8203a6b4e46d3916c870bd853021 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_566c277b73fbca2b950df4ae02492abf7cfb8203a6b4e46d3916c870bd853021->enter($__internal_566c277b73fbca2b950df4ae02492abf7cfb8203a6b4e46d3916c870bd853021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_566c277b73fbca2b950df4ae02492abf7cfb8203a6b4e46d3916c870bd853021->leave($__internal_566c277b73fbca2b950df4ae02492abf7cfb8203a6b4e46d3916c870bd853021_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_d568711293ebe7dc5911ad6af9448dc0738a9edb9cb0eaef962c4f0cea7eda24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d568711293ebe7dc5911ad6af9448dc0738a9edb9cb0eaef962c4f0cea7eda24->enter($__internal_d568711293ebe7dc5911ad6af9448dc0738a9edb9cb0eaef962c4f0cea7eda24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_d568711293ebe7dc5911ad6af9448dc0738a9edb9cb0eaef962c4f0cea7eda24->leave($__internal_d568711293ebe7dc5911ad6af9448dc0738a9edb9cb0eaef962c4f0cea7eda24_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_6437f8a3636b6f20a3fb7a32774b3357bb758e60924c4184735202824e3c4fd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6437f8a3636b6f20a3fb7a32774b3357bb758e60924c4184735202824e3c4fd7->enter($__internal_6437f8a3636b6f20a3fb7a32774b3357bb758e60924c4184735202824e3c4fd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_6437f8a3636b6f20a3fb7a32774b3357bb758e60924c4184735202824e3c4fd7->leave($__internal_6437f8a3636b6f20a3fb7a32774b3357bb758e60924c4184735202824e3c4fd7_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_0d94216df0a1c16649cf63d3bb86ace3ac5936e3958a03479060db3619a09d2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d94216df0a1c16649cf63d3bb86ace3ac5936e3958a03479060db3619a09d2f->enter($__internal_0d94216df0a1c16649cf63d3bb86ace3ac5936e3958a03479060db3619a09d2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:email.txt.twig"));

        
        $__internal_0d94216df0a1c16649cf63d3bb86ace3ac5936e3958a03479060db3619a09d2f->leave($__internal_0d94216df0a1c16649cf63d3bb86ace3ac5936e3958a03479060db3619a09d2f_prof);

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
", "FOSUserBundle:Resetting:email.txt.twig", "/Users/Cendrillon/Sites/Psychomot/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
