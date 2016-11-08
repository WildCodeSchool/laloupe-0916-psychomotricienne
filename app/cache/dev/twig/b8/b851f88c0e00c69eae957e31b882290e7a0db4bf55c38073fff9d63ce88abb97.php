<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_bde941895c4e6e0a0ea3cd5847fe6a291436edf99b2c77f30adfcdaea58d495b extends Twig_Template
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
        $__internal_9229e620a359fb4f5ec7bb2e72e5989fd51abae65d100f7f733d29886c5c64b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9229e620a359fb4f5ec7bb2e72e5989fd51abae65d100f7f733d29886c5c64b4->enter($__internal_9229e620a359fb4f5ec7bb2e72e5989fd51abae65d100f7f733d29886c5c64b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_9229e620a359fb4f5ec7bb2e72e5989fd51abae65d100f7f733d29886c5c64b4->leave($__internal_9229e620a359fb4f5ec7bb2e72e5989fd51abae65d100f7f733d29886c5c64b4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Users/Cendrillon/Sites/Psychomot/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
