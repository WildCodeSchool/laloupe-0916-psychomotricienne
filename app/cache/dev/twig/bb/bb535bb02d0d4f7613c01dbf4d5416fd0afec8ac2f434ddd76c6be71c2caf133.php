<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_315bc5883cbccb7ae09e42e85343c4b2897e953f5cc7785f8919d63882d3f109 extends Twig_Template
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
        $__internal_2382f7e1a03bc2979e5a27459f8652cdf3cdaa4a214b0b703cd666c9f9d9eed7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2382f7e1a03bc2979e5a27459f8652cdf3cdaa4a214b0b703cd666c9f9d9eed7->enter($__internal_2382f7e1a03bc2979e5a27459f8652cdf3cdaa4a214b0b703cd666c9f9d9eed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_2382f7e1a03bc2979e5a27459f8652cdf3cdaa4a214b0b703cd666c9f9d9eed7->leave($__internal_2382f7e1a03bc2979e5a27459f8652cdf3cdaa4a214b0b703cd666c9f9d9eed7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Users/Cendrillon/Sites/Psychomot/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
