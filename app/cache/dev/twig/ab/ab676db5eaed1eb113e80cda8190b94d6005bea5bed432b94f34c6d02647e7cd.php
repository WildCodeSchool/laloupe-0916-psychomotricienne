<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_64eaf26e3aff30578dd60541006f25e7d88cfa18f197f023be3c826c4ae24adf extends Twig_Template
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
        $__internal_6d65e4e1b8f20f605c28d29ec31fda2a7b3dc996ee411ed2e208c94b448a4b78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d65e4e1b8f20f605c28d29ec31fda2a7b3dc996ee411ed2e208c94b448a4b78->enter($__internal_6d65e4e1b8f20f605c28d29ec31fda2a7b3dc996ee411ed2e208c94b448a4b78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_6d65e4e1b8f20f605c28d29ec31fda2a7b3dc996ee411ed2e208c94b448a4b78->leave($__internal_6d65e4e1b8f20f605c28d29ec31fda2a7b3dc996ee411ed2e208c94b448a4b78_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/html/Psychomot/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
