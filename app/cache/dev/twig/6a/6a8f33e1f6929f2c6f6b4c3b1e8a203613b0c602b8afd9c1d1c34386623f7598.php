<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_ea3a01f2bf1bfbc7316b84920e0fe08f1494bd81222b497c701d2be3094857f0 extends Twig_Template
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
        $__internal_f1754ad4bc4429813c8d8e358cdf79b40e16cf365f53c8e1bcbc3d9d9a3105c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1754ad4bc4429813c8d8e358cdf79b40e16cf365f53c8e1bcbc3d9d9a3105c6->enter($__internal_f1754ad4bc4429813c8d8e358cdf79b40e16cf365f53c8e1bcbc3d9d9a3105c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_f1754ad4bc4429813c8d8e358cdf79b40e16cf365f53c8e1bcbc3d9d9a3105c6->leave($__internal_f1754ad4bc4429813c8d8e358cdf79b40e16cf365f53c8e1bcbc3d9d9a3105c6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/Users/Cendrillon/Sites/Psychomot/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
