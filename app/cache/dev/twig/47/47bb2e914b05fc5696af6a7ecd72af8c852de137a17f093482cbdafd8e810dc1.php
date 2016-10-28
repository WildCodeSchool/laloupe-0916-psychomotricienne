<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_7ecbaa699cf141484740623b0b629d0cc03673e153610aecb9606163fb0a17d2 extends Twig_Template
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
        $__internal_7fd43d8b6fa6accaa0b3a18b574dbef4fae3086276d45b1f459a8d05bda08513 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fd43d8b6fa6accaa0b3a18b574dbef4fae3086276d45b1f459a8d05bda08513->enter($__internal_7fd43d8b6fa6accaa0b3a18b574dbef4fae3086276d45b1f459a8d05bda08513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_7fd43d8b6fa6accaa0b3a18b574dbef4fae3086276d45b1f459a8d05bda08513->leave($__internal_7fd43d8b6fa6accaa0b3a18b574dbef4fae3086276d45b1f459a8d05bda08513_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/html/Psychomot/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
