<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_0a1808e341cb70d817d591639b7f0c5aa3286fa00e807f095f17f00734516275 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_00d25faf59ab999a6ca1a3828d880cd081664dafa2d375aece91bc380008309b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00d25faf59ab999a6ca1a3828d880cd081664dafa2d375aece91bc380008309b->enter($__internal_00d25faf59ab999a6ca1a3828d880cd081664dafa2d375aece91bc380008309b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00d25faf59ab999a6ca1a3828d880cd081664dafa2d375aece91bc380008309b->leave($__internal_00d25faf59ab999a6ca1a3828d880cd081664dafa2d375aece91bc380008309b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8eb29747f4667c929c11af019e8236af715365053e14bc1e5b4063c93c759d5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8eb29747f4667c929c11af019e8236af715365053e14bc1e5b4063c93c759d5d->enter($__internal_8eb29747f4667c929c11af019e8236af715365053e14bc1e5b4063c93c759d5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Security:login.html.twig"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_8eb29747f4667c929c11af019e8236af715365053e14bc1e5b4063c93c759d5d->leave($__internal_8eb29747f4667c929c11af019e8236af715365053e14bc1e5b4063c93c759d5d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
    {{ include('FOSUserBundle:Security:login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "/var/www/html/Psychomot/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
