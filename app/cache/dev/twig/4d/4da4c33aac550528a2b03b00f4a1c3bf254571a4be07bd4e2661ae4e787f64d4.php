<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_2e53f46ff319246053fc7161f4187d7348adee9a80e54590133b9676dc10f127 extends Twig_Template
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
        $__internal_682e2a661653c6c2f36fcf8621ba4b66a95dee8e7a258a0969ed6093b51f7dc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_682e2a661653c6c2f36fcf8621ba4b66a95dee8e7a258a0969ed6093b51f7dc1->enter($__internal_682e2a661653c6c2f36fcf8621ba4b66a95dee8e7a258a0969ed6093b51f7dc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_682e2a661653c6c2f36fcf8621ba4b66a95dee8e7a258a0969ed6093b51f7dc1->leave($__internal_682e2a661653c6c2f36fcf8621ba4b66a95dee8e7a258a0969ed6093b51f7dc1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/Users/Cendrillon/Sites/Psychomot/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
