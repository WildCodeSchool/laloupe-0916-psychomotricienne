<?php

/* PsychoBundle:psycho:new.html.twig */
class __TwigTemplate_a423aed56e305f7bc35dc994741fdcffebfbeb509e09deccb3fb80c820135564 extends Twig_Template
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
        $__internal_5f12af49eef308ab303d51a9bc60b1bf544ca0ff123e8e339df2338444846444 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f12af49eef308ab303d51a9bc60b1bf544ca0ff123e8e339df2338444846444->enter($__internal_5f12af49eef308ab303d51a9bc60b1bf544ca0ff123e8e339df2338444846444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PsychoBundle:psycho:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f12af49eef308ab303d51a9bc60b1bf544ca0ff123e8e339df2338444846444->leave($__internal_5f12af49eef308ab303d51a9bc60b1bf544ca0ff123e8e339df2338444846444_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8eec37ddde94bf2a01914c5018b56beca7af876ecc643b44243ebe23e9728014 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8eec37ddde94bf2a01914c5018b56beca7af876ecc643b44243ebe23e9728014->enter($__internal_8eec37ddde94bf2a01914c5018b56beca7af876ecc643b44243ebe23e9728014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "PsychoBundle:psycho:new.html.twig"));

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
        
        $__internal_8eec37ddde94bf2a01914c5018b56beca7af876ecc643b44243ebe23e9728014->leave($__internal_8eec37ddde94bf2a01914c5018b56beca7af876ecc643b44243ebe23e9728014_prof);

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
