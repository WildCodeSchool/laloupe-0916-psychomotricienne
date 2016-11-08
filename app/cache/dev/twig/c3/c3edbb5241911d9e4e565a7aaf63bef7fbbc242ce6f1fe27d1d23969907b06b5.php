<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_9c5ec454f7577e7090641c90f0bc44d5d18194932105e56915fca45510521922 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_389b80eaa57bb4c7419ee26ad64d20db381d160a067454c297071a9a49627d87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_389b80eaa57bb4c7419ee26ad64d20db381d160a067454c297071a9a49627d87->enter($__internal_389b80eaa57bb4c7419ee26ad64d20db381d160a067454c297071a9a49627d87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_389b80eaa57bb4c7419ee26ad64d20db381d160a067454c297071a9a49627d87->leave($__internal_389b80eaa57bb4c7419ee26ad64d20db381d160a067454c297071a9a49627d87_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_09153ebeef075cc50ba973626839c803fecd9af6c390c612971c4e10a9242f1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09153ebeef075cc50ba973626839c803fecd9af6c390c612971c4e10a9242f1b->enter($__internal_09153ebeef075cc50ba973626839c803fecd9af6c390c612971c4e10a9242f1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_09153ebeef075cc50ba973626839c803fecd9af6c390c612971c4e10a9242f1b->leave($__internal_09153ebeef075cc50ba973626839c803fecd9af6c390c612971c4e10a9242f1b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a6b071141bf7f50a174e9cc1281cfc5a661fd155cd2f78ea901f2594e1828421 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6b071141bf7f50a174e9cc1281cfc5a661fd155cd2f78ea901f2594e1828421->enter($__internal_a6b071141bf7f50a174e9cc1281cfc5a661fd155cd2f78ea901f2594e1828421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a6b071141bf7f50a174e9cc1281cfc5a661fd155cd2f78ea901f2594e1828421->leave($__internal_a6b071141bf7f50a174e9cc1281cfc5a661fd155cd2f78ea901f2594e1828421_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_cf27f1b95bf47fa74e161cce3182f6941a6787182d137d844a3119584816fa7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf27f1b95bf47fa74e161cce3182f6941a6787182d137d844a3119584816fa7c->enter($__internal_cf27f1b95bf47fa74e161cce3182f6941a6787182d137d844a3119584816fa7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_cf27f1b95bf47fa74e161cce3182f6941a6787182d137d844a3119584816fa7c->leave($__internal_cf27f1b95bf47fa74e161cce3182f6941a6787182d137d844a3119584816fa7c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/Users/Cendrillon/Sites/Psychomot/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
