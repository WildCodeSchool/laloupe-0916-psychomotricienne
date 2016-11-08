<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_d0c40a49a1c18cc5d2e0998c0ab405b9e8cf3337ed630cbb3adb91d571608de2 extends Twig_Template
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
        $__internal_4a9add4139a98c1fc24fe3772dac967691e90760b6ecf92fa95e6fa6c3255dac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a9add4139a98c1fc24fe3772dac967691e90760b6ecf92fa95e6fa6c3255dac->enter($__internal_4a9add4139a98c1fc24fe3772dac967691e90760b6ecf92fa95e6fa6c3255dac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_4a9add4139a98c1fc24fe3772dac967691e90760b6ecf92fa95e6fa6c3255dac->leave($__internal_4a9add4139a98c1fc24fe3772dac967691e90760b6ecf92fa95e6fa6c3255dac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "/Users/Cendrillon/Sites/Psychomot/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/range_widget.html.php");
    }
}
