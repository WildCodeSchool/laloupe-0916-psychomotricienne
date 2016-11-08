<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_195b89a2691ee4a2f35060a0a6c15e8bd32261c8054e28b2d337c04d4898fa9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_74cf27c0065b5008582e96f264e03733d23fb9b63261b7da5efb99fa6c55ed69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74cf27c0065b5008582e96f264e03733d23fb9b63261b7da5efb99fa6c55ed69->enter($__internal_74cf27c0065b5008582e96f264e03733d23fb9b63261b7da5efb99fa6c55ed69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74cf27c0065b5008582e96f264e03733d23fb9b63261b7da5efb99fa6c55ed69->leave($__internal_74cf27c0065b5008582e96f264e03733d23fb9b63261b7da5efb99fa6c55ed69_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f5124659068565adc30208a0307e192aec2cae60d5f49f044188ca72deeb3f72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5124659068565adc30208a0307e192aec2cae60d5f49f044188ca72deeb3f72->enter($__internal_f5124659068565adc30208a0307e192aec2cae60d5f49f044188ca72deeb3f72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:register.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_f5124659068565adc30208a0307e192aec2cae60d5f49f044188ca72deeb3f72->leave($__internal_f5124659068565adc30208a0307e192aec2cae60d5f49f044188ca72deeb3f72_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/Users/Cendrillon/Sites/Psychomot/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
