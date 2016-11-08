<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_b963a1e7230689f409a87ba54cacab76b87d74a479de363ac7aa1d1df4be7103 extends Twig_Template
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
        $__internal_9211c4f60fec7f28f0cc221ed576c35373444c86ce77a0ad468f2bdee4aea488 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9211c4f60fec7f28f0cc221ed576c35373444c86ce77a0ad468f2bdee4aea488->enter($__internal_9211c4f60fec7f28f0cc221ed576c35373444c86ce77a0ad468f2bdee4aea488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_9211c4f60fec7f28f0cc221ed576c35373444c86ce77a0ad468f2bdee4aea488->leave($__internal_9211c4f60fec7f28f0cc221ed576c35373444c86ce77a0ad468f2bdee4aea488_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "/Users/Cendrillon/Sites/Psychomot/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
