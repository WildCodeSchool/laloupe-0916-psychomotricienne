<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_5eda9395ca239ba96e9b6c5cc67eaf0888666c1763ecdc5f5feb7624bd4a47bd extends Twig_Template
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
        $__internal_c2b1b8637087c56f1f951501853fc777bb3a3953051374aabac33ab032f564d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2b1b8637087c56f1f951501853fc777bb3a3953051374aabac33ab032f564d1->enter($__internal_c2b1b8637087c56f1f951501853fc777bb3a3953051374aabac33ab032f564d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_c2b1b8637087c56f1f951501853fc777bb3a3953051374aabac33ab032f564d1->leave($__internal_c2b1b8637087c56f1f951501853fc777bb3a3953051374aabac33ab032f564d1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/Users/Cendrillon/Sites/Psychomot/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
