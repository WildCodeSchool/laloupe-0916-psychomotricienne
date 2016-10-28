<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_4a8e66e26b8ba8382ecfa20b544fb7ac981b4cd312c82ce9f4670c4dd6d2b563 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_ac3ca1acbab01cb44ef10e62cfc109edfe9bd60f12e337189856c54f59e9b9cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac3ca1acbab01cb44ef10e62cfc109edfe9bd60f12e337189856c54f59e9b9cf->enter($__internal_ac3ca1acbab01cb44ef10e62cfc109edfe9bd60f12e337189856c54f59e9b9cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac3ca1acbab01cb44ef10e62cfc109edfe9bd60f12e337189856c54f59e9b9cf->leave($__internal_ac3ca1acbab01cb44ef10e62cfc109edfe9bd60f12e337189856c54f59e9b9cf_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_52879fc3c86c066be0b93fc1f3523cfa2758236c63fe03c324860a1346ce275d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52879fc3c86c066be0b93fc1f3523cfa2758236c63fe03c324860a1346ce275d->enter($__internal_52879fc3c86c066be0b93fc1f3523cfa2758236c63fe03c324860a1346ce275d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Group:edit.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_52879fc3c86c066be0b93fc1f3523cfa2758236c63fe03c324860a1346ce275d->leave($__internal_52879fc3c86c066be0b93fc1f3523cfa2758236c63fe03c324860a1346ce275d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"FOSUserBundle:Group:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/var/www/html/Psychomot/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit.html.twig");
    }
}
