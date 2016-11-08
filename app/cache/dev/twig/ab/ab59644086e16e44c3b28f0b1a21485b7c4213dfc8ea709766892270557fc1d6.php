<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_623ddaa4007da9427ea36dfbfeb54f40bab2d33fe4c608e6c6aac49e5cd8adfd extends Twig_Template
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
        $__internal_5cc771263802a68fe7fb8a5933761a90a4403e7ef95d7de81e061ada0b3c6ef7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cc771263802a68fe7fb8a5933761a90a4403e7ef95d7de81e061ada0b3c6ef7->enter($__internal_5cc771263802a68fe7fb8a5933761a90a4403e7ef95d7de81e061ada0b3c6ef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_5cc771263802a68fe7fb8a5933761a90a4403e7ef95d7de81e061ada0b3c6ef7->leave($__internal_5cc771263802a68fe7fb8a5933761a90a4403e7ef95d7de81e061ada0b3c6ef7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/Users/Cendrillon/Sites/Psychomot/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
