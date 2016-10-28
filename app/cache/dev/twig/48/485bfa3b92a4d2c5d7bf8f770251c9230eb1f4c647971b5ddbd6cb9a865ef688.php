<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_4f247dd0d87eb58aa4e822f3e8a44ed877a58a49a4e0a6496e80c5db684c7695 extends Twig_Template
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
        $__internal_2305afb6d411350279e19d8f6d03d22a157e0841a8aee1b3690dda79467e4f36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2305afb6d411350279e19d8f6d03d22a157e0841a8aee1b3690dda79467e4f36->enter($__internal_2305afb6d411350279e19d8f6d03d22a157e0841a8aee1b3690dda79467e4f36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_2305afb6d411350279e19d8f6d03d22a157e0841a8aee1b3690dda79467e4f36->leave($__internal_2305afb6d411350279e19d8f6d03d22a157e0841a8aee1b3690dda79467e4f36_prof);

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
", "@Framework/Form/reset_widget.html.php", "/var/www/html/Psychomot/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
