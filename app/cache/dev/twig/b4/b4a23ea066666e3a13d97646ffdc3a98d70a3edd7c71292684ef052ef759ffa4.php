<?php

/* PsychoBundle:psycho:new.html.twig */
class __TwigTemplate_79f46e8fb5e077ab33e6339651aabb92ca6d8d97e643e74b9b3b8b3821588d7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "PsychoBundle:psycho:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8968fa5d1b8a5e1f08e4ebdfa6f3851617fa1a7bc96ae049829d9a274f926e6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8968fa5d1b8a5e1f08e4ebdfa6f3851617fa1a7bc96ae049829d9a274f926e6a->enter($__internal_8968fa5d1b8a5e1f08e4ebdfa6f3851617fa1a7bc96ae049829d9a274f926e6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PsychoBundle:psycho:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8968fa5d1b8a5e1f08e4ebdfa6f3851617fa1a7bc96ae049829d9a274f926e6a->leave($__internal_8968fa5d1b8a5e1f08e4ebdfa6f3851617fa1a7bc96ae049829d9a274f926e6a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_af838c0649afb7cc89891fe73cbff1feaf38204019aa36aa2d0b6a987ff76c57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af838c0649afb7cc89891fe73cbff1feaf38204019aa36aa2d0b6a987ff76c57->enter($__internal_af838c0649afb7cc89891fe73cbff1feaf38204019aa36aa2d0b6a987ff76c57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "PsychoBundle:psycho:new.html.twig"));

        // line 4
        echo "    <h1>Psycho creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("psycho_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_af838c0649afb7cc89891fe73cbff1feaf38204019aa36aa2d0b6a987ff76c57->leave($__internal_af838c0649afb7cc89891fe73cbff1feaf38204019aa36aa2d0b6a987ff76c57_prof);

    }

    public function getTemplateName()
    {
        return "PsychoBundle:psycho:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Psycho creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('psycho_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "PsychoBundle:psycho:new.html.twig", "/Users/Cendrillon/Sites/Psychomot/src/PsychoBundle/Resources/views/psycho/new.html.twig");
    }
}
