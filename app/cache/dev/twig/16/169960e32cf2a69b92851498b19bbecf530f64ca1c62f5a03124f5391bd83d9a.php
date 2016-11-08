<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_832a03b132ef7e41c5ebfadddaaafe8a7cad98f957bfca1668addb43759ea95f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_95253ba3400f4f2244ec050582e8a78040924d3b7d4978058a435995ca0224d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95253ba3400f4f2244ec050582e8a78040924d3b7d4978058a435995ca0224d2->enter($__internal_95253ba3400f4f2244ec050582e8a78040924d3b7d4978058a435995ca0224d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95253ba3400f4f2244ec050582e8a78040924d3b7d4978058a435995ca0224d2->leave($__internal_95253ba3400f4f2244ec050582e8a78040924d3b7d4978058a435995ca0224d2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b29285ccaacefa109878bc4b8a7e959ba1bffb39e3f576e42bc2c82287a686a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b29285ccaacefa109878bc4b8a7e959ba1bffb39e3f576e42bc2c82287a686a1->enter($__internal_b29285ccaacefa109878bc4b8a7e959ba1bffb39e3f576e42bc2c82287a686a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Profile:show.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_b29285ccaacefa109878bc4b8a7e959ba1bffb39e3f576e42bc2c82287a686a1->leave($__internal_b29285ccaacefa109878bc4b8a7e959ba1bffb39e3f576e42bc2c82287a686a1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/Users/Cendrillon/Sites/Psychomot/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
