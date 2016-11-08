<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_e4298c2d0b374a8e5607827063a9bde105e8e2e62a6e2ddc1fbe5174e6443415 extends Twig_Template
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
        $__internal_fe46b729993f5dc0c59b3ef9fb1d65e212fd3fcfee598e7effd3ac8fdf3cf176 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe46b729993f5dc0c59b3ef9fb1d65e212fd3fcfee598e7effd3ac8fdf3cf176->enter($__internal_fe46b729993f5dc0c59b3ef9fb1d65e212fd3fcfee598e7effd3ac8fdf3cf176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_fe46b729993f5dc0c59b3ef9fb1d65e212fd3fcfee598e7effd3ac8fdf3cf176->leave($__internal_fe46b729993f5dc0c59b3ef9fb1d65e212fd3fcfee598e7effd3ac8fdf3cf176_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Users/Cendrillon/Sites/Psychomot/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
