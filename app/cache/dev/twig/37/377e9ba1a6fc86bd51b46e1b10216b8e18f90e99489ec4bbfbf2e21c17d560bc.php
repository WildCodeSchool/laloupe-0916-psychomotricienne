<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_6f1a14668b216211a2fc844e5918101537da196d8cf0079d42a2aadb41f15f2d extends Twig_Template
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
        $__internal_e5642bdb526aa8f1aac90015d3c56d4fa4120075621210f772649e1d320c68c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5642bdb526aa8f1aac90015d3c56d4fa4120075621210f772649e1d320c68c8->enter($__internal_e5642bdb526aa8f1aac90015d3c56d4fa4120075621210f772649e1d320c68c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_e5642bdb526aa8f1aac90015d3c56d4fa4120075621210f772649e1d320c68c8->leave($__internal_e5642bdb526aa8f1aac90015d3c56d4fa4120075621210f772649e1d320c68c8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/Users/Cendrillon/Sites/Psychomot/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
