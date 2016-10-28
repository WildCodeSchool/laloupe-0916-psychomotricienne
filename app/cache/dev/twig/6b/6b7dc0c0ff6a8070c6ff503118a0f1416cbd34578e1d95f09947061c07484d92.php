<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_1a81ea5cbc614de757a7b0625961328c2d9ac1fdf886ee9c11755774b4dbfc85 extends Twig_Template
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
        $__internal_2a6b26a0c50dae7f61b5e893eca399da6d799fa951e75a779db8d4e7e91a6040 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a6b26a0c50dae7f61b5e893eca399da6d799fa951e75a779db8d4e7e91a6040->enter($__internal_2a6b26a0c50dae7f61b5e893eca399da6d799fa951e75a779db8d4e7e91a6040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_2a6b26a0c50dae7f61b5e893eca399da6d799fa951e75a779db8d4e7e91a6040->leave($__internal_2a6b26a0c50dae7f61b5e893eca399da6d799fa951e75a779db8d4e7e91a6040_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/var/www/html/Psychomot/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
