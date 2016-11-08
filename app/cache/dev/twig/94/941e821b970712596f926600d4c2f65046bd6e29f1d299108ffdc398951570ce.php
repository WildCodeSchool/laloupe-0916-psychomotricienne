<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_ffd8e515deda2e91de26c73bb0abd15146d883576486b44bb30c9023610e7b63 extends Twig_Template
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
        $__internal_63a84cd48e0b591013f1273636e69e956b96eb50e2b2cac02aef3d22fab20072 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63a84cd48e0b591013f1273636e69e956b96eb50e2b2cac02aef3d22fab20072->enter($__internal_63a84cd48e0b591013f1273636e69e956b96eb50e2b2cac02aef3d22fab20072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_63a84cd48e0b591013f1273636e69e956b96eb50e2b2cac02aef3d22fab20072->leave($__internal_63a84cd48e0b591013f1273636e69e956b96eb50e2b2cac02aef3d22fab20072_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Users/Cendrillon/Sites/Psychomot/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
