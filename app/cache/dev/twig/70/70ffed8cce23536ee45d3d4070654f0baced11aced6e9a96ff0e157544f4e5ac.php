<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_76c023e7fab400a789d2be59c2358f84b8666e78c110ff8e60f7dfb671ccbe0f extends Twig_Template
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
        $__internal_f7205e267161f33a1ae4eebcfb9c4e4248f648a60825866dae679b1385e8fdd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7205e267161f33a1ae4eebcfb9c4e4248f648a60825866dae679b1385e8fdd3->enter($__internal_f7205e267161f33a1ae4eebcfb9c4e4248f648a60825866dae679b1385e8fdd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_f7205e267161f33a1ae4eebcfb9c4e4248f648a60825866dae679b1385e8fdd3->leave($__internal_f7205e267161f33a1ae4eebcfb9c4e4248f648a60825866dae679b1385e8fdd3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/html/Psychomot/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
