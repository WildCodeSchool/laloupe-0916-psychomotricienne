<?php

/* PsychoBundle:psycho:mail.html.twig */
class __TwigTemplate_58f336cf77cb138320b4f7786a91963c0e8256c88662f4d0254cd504bc2ed96c extends Twig_Template
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
        $__internal_f79615a2c7c0b1fe2dc7aac21526fc4fee5c7019057cc746b9fafbbee66fb8f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f79615a2c7c0b1fe2dc7aac21526fc4fee5c7019057cc746b9fafbbee66fb8f8->enter($__internal_f79615a2c7c0b1fe2dc7aac21526fc4fee5c7019057cc746b9fafbbee66fb8f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PsychoBundle:psycho:mail.html.twig"));

        // line 1
        echo "<h1>Mail envoyé !</h1>";
        
        $__internal_f79615a2c7c0b1fe2dc7aac21526fc4fee5c7019057cc746b9fafbbee66fb8f8->leave($__internal_f79615a2c7c0b1fe2dc7aac21526fc4fee5c7019057cc746b9fafbbee66fb8f8_prof);

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
