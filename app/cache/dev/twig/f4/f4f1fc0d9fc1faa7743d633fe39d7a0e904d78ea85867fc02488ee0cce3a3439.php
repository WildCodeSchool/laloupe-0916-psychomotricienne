<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_f4c6d793d3681c54441abc9c76caa871004f3f5feb303ebeed55f349ea972035 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_3f177b23dcfcb2206a35e9faeb63747bdd04f9fb255305e2e65cf4f3580eac93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f177b23dcfcb2206a35e9faeb63747bdd04f9fb255305e2e65cf4f3580eac93->enter($__internal_3f177b23dcfcb2206a35e9faeb63747bdd04f9fb255305e2e65cf4f3580eac93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f177b23dcfcb2206a35e9faeb63747bdd04f9fb255305e2e65cf4f3580eac93->leave($__internal_3f177b23dcfcb2206a35e9faeb63747bdd04f9fb255305e2e65cf4f3580eac93_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_78ee6bc62e639dfdebd6c3a01d25199ced1339d82d01382b02d31a6a2f8816e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78ee6bc62e639dfdebd6c3a01d25199ced1339d82d01382b02d31a6a2f8816e4->enter($__internal_78ee6bc62e639dfdebd6c3a01d25199ced1339d82d01382b02d31a6a2f8816e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Group:list.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_78ee6bc62e639dfdebd6c3a01d25199ced1339d82d01382b02d31a6a2f8816e4->leave($__internal_78ee6bc62e639dfdebd6c3a01d25199ced1339d82d01382b02d31a6a2f8816e4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"FOSUserBundle:Group:list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/Users/Cendrillon/Sites/Psychomot/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list.html.twig");
    }
}
