<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_f14dced9b358f83a3a8c3b81e9adbb3ee6bdbeda6d2c043d2bb4d07439bce94a extends Twig_Template
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
        $__internal_5fd1a98bb9ed6d5a80321e57e26b5e87aa0a5132c5a39f6c64fc9d20e20ba6be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fd1a98bb9ed6d5a80321e57e26b5e87aa0a5132c5a39f6c64fc9d20e20ba6be->enter($__internal_5fd1a98bb9ed6d5a80321e57e26b5e87aa0a5132c5a39f6c64fc9d20e20ba6be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_5fd1a98bb9ed6d5a80321e57e26b5e87aa0a5132c5a39f6c64fc9d20e20ba6be->leave($__internal_5fd1a98bb9ed6d5a80321e57e26b5e87aa0a5132c5a39f6c64fc9d20e20ba6be_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/Users/Cendrillon/Sites/Psychomot/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
