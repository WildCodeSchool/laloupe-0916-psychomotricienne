<?php

/* PsychoBundle:psycho:mail.html.twig */
class __TwigTemplate_50935ec27d85218eb74047f05074f0ccc57c309d2222926f2bc8316d6064f5b4 extends Twig_Template
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
        $__internal_0fa08a1b528cb17aae71b520b9290660a04f181cfbd55d12dc664dd0a75c7ce0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fa08a1b528cb17aae71b520b9290660a04f181cfbd55d12dc664dd0a75c7ce0->enter($__internal_0fa08a1b528cb17aae71b520b9290660a04f181cfbd55d12dc664dd0a75c7ce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PsychoBundle:psycho:mail.html.twig"));

        // line 1
        echo "<h1>Mail envoyé !</h1>";
        
        $__internal_0fa08a1b528cb17aae71b520b9290660a04f181cfbd55d12dc664dd0a75c7ce0->leave($__internal_0fa08a1b528cb17aae71b520b9290660a04f181cfbd55d12dc664dd0a75c7ce0_prof);

    }

    public function getTemplateName()
    {
        return "PsychoBundle:psycho:mail.html.twig";
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
        return new Twig_Source("<h1>Mail envoyé !</h1>", "PsychoBundle:psycho:mail.html.twig", "/var/www/html/Psychomot/src/PsychoBundle/Resources/views/psycho/mail.html.twig");
    }
}
