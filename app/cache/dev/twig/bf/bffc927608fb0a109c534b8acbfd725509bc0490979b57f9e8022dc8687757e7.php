<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_60be4952662c23cdf5ca60a6588be7acf099bb4c667a81259cc22eee0d00a2d3 extends Twig_Template
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
        $__internal_15b69eaf6f278b39448773ffcc8a29e0fad53b917e665ed36d96bf999a345fed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15b69eaf6f278b39448773ffcc8a29e0fad53b917e665ed36d96bf999a345fed->enter($__internal_15b69eaf6f278b39448773ffcc8a29e0fad53b917e665ed36d96bf999a345fed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15b69eaf6f278b39448773ffcc8a29e0fad53b917e665ed36d96bf999a345fed->leave($__internal_15b69eaf6f278b39448773ffcc8a29e0fad53b917e665ed36d96bf999a345fed_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_60ff399db04120a312b27cc762a81ea02509c5a12ee71da660fdd725db8ca1bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60ff399db04120a312b27cc762a81ea02509c5a12ee71da660fdd725db8ca1bb->enter($__internal_60ff399db04120a312b27cc762a81ea02509c5a12ee71da660fdd725db8ca1bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Group:edit.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_60ff399db04120a312b27cc762a81ea02509c5a12ee71da660fdd725db8ca1bb->leave($__internal_60ff399db04120a312b27cc762a81ea02509c5a12ee71da660fdd725db8ca1bb_prof);

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
", "FOSUserBundle:Group:edit.html.twig", "/Users/Cendrillon/Sites/Psychomot/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit.html.twig");
    }
}
