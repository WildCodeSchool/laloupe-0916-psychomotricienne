<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_0dc6f4e31c2ad387163584951b0c28641291edfc80b34214a6c5ebd347d6b93f extends Twig_Template
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
        $__internal_1617c60eeaeca0e655cf6c6144e07debda7a292b6522dd78583108baa59d43ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1617c60eeaeca0e655cf6c6144e07debda7a292b6522dd78583108baa59d43ab->enter($__internal_1617c60eeaeca0e655cf6c6144e07debda7a292b6522dd78583108baa59d43ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1617c60eeaeca0e655cf6c6144e07debda7a292b6522dd78583108baa59d43ab->leave($__internal_1617c60eeaeca0e655cf6c6144e07debda7a292b6522dd78583108baa59d43ab_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cb5428a0553c7f145aded6f73677f556ca72b9a57c9616ebc94569cea1875fce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb5428a0553c7f145aded6f73677f556ca72b9a57c9616ebc94569cea1875fce->enter($__internal_cb5428a0553c7f145aded6f73677f556ca72b9a57c9616ebc94569cea1875fce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:request.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_cb5428a0553c7f145aded6f73677f556ca72b9a57c9616ebc94569cea1875fce->leave($__internal_cb5428a0553c7f145aded6f73677f556ca72b9a57c9616ebc94569cea1875fce_prof);

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
", "FOSUserBundle:Resetting:request.html.twig", "/Users/Cendrillon/Sites/Psychomot/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
