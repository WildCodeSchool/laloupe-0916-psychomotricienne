<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_774d023f16c2e641d4553c90eec3a293fc8def20b484ea827c71d0a2fb4c88c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_734c304d30b4a16b9b4b4f5e471b302fb874d8c16e40ccd3550ab7ea67726ca2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_734c304d30b4a16b9b4b4f5e471b302fb874d8c16e40ccd3550ab7ea67726ca2->enter($__internal_734c304d30b4a16b9b4b4f5e471b302fb874d8c16e40ccd3550ab7ea67726ca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_734c304d30b4a16b9b4b4f5e471b302fb874d8c16e40ccd3550ab7ea67726ca2->leave($__internal_734c304d30b4a16b9b4b4f5e471b302fb874d8c16e40ccd3550ab7ea67726ca2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.atom.twig", "/Users/Cendrillon/Sites/Psychomot/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
