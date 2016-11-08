<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_70ec67d658527442528f8894040bc4f7e80bdc052102d65d5356869ec71cdc34 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_67ef995ef86ea355d4c8e96eaccd95de6e41976d87ac657c240e8834c6cffc31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67ef995ef86ea355d4c8e96eaccd95de6e41976d87ac657c240e8834c6cffc31->enter($__internal_67ef995ef86ea355d4c8e96eaccd95de6e41976d87ac657c240e8834c6cffc31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67ef995ef86ea355d4c8e96eaccd95de6e41976d87ac657c240e8834c6cffc31->leave($__internal_67ef995ef86ea355d4c8e96eaccd95de6e41976d87ac657c240e8834c6cffc31_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0852b4108ed4218e284a85e525ba4e469e762b16b0f49eed124387ae55781609 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0852b4108ed4218e284a85e525ba4e469e762b16b0f49eed124387ae55781609->enter($__internal_0852b4108ed4218e284a85e525ba4e469e762b16b0f49eed124387ae55781609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Profile:edit.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_0852b4108ed4218e284a85e525ba4e469e762b16b0f49eed124387ae55781609->leave($__internal_0852b4108ed4218e284a85e525ba4e469e762b16b0f49eed124387ae55781609_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/Users/Cendrillon/Sites/Psychomot/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
