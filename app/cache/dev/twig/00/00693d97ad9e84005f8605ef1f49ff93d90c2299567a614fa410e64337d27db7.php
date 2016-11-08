<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_bf9389cc98fa4674e67548044eb2d3d51ea7ccc222a107f9e89bcdcb4cfe8343 extends Twig_Template
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
        $__internal_8865c7be0d295db9453abd2fd33046d4089547e1726d4a395f8bb6a3d85c682a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8865c7be0d295db9453abd2fd33046d4089547e1726d4a395f8bb6a3d85c682a->enter($__internal_8865c7be0d295db9453abd2fd33046d4089547e1726d4a395f8bb6a3d85c682a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_8865c7be0d295db9453abd2fd33046d4089547e1726d4a395f8bb6a3d85c682a->leave($__internal_8865c7be0d295db9453abd2fd33046d4089547e1726d4a395f8bb6a3d85c682a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Users/Cendrillon/Sites/Psychomot/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
