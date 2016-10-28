<?php

/* PsychoBundle:psycho:new.html.twig */
class __TwigTemplate_2ea4fe95ba2559efb636b3f29776f6aeb3676836069b40d0d46f07ddf0de88be extends Twig_Template
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
        $__internal_b94d341456cff913db4df695945674699431eb9a8841dc859ece7216f0bcd9af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b94d341456cff913db4df695945674699431eb9a8841dc859ece7216f0bcd9af->enter($__internal_b94d341456cff913db4df695945674699431eb9a8841dc859ece7216f0bcd9af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PsychoBundle:psycho:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b94d341456cff913db4df695945674699431eb9a8841dc859ece7216f0bcd9af->leave($__internal_b94d341456cff913db4df695945674699431eb9a8841dc859ece7216f0bcd9af_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8881b0dc47c4735ce806302a0aa5a1ab488c0eed5c31357721c40ea272df3e1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8881b0dc47c4735ce806302a0aa5a1ab488c0eed5c31357721c40ea272df3e1c->enter($__internal_8881b0dc47c4735ce806302a0aa5a1ab488c0eed5c31357721c40ea272df3e1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "PsychoBundle:psycho:new.html.twig"));

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
        
        $__internal_8881b0dc47c4735ce806302a0aa5a1ab488c0eed5c31357721c40ea272df3e1c->leave($__internal_8881b0dc47c4735ce806302a0aa5a1ab488c0eed5c31357721c40ea272df3e1c_prof);

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
", "PsychoBundle:psycho:new.html.twig", "/var/www/html/Psychomot/src/PsychoBundle/Resources/views/psycho/new.html.twig");
    }
}
