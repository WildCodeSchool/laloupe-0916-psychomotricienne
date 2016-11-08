<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_16c22d29fd70b8ad2ff5eae97299867d073bdc706fa6e4babd047506bfdf669f extends Twig_Template
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
        $__internal_688d7f1250d0f73c4b83efa9d42f37806a4e358f8920be1d5b08f940ad510258 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_688d7f1250d0f73c4b83efa9d42f37806a4e358f8920be1d5b08f940ad510258->enter($__internal_688d7f1250d0f73c4b83efa9d42f37806a4e358f8920be1d5b08f940ad510258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_688d7f1250d0f73c4b83efa9d42f37806a4e358f8920be1d5b08f940ad510258->leave($__internal_688d7f1250d0f73c4b83efa9d42f37806a4e358f8920be1d5b08f940ad510258_prof);

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
", "@Framework/FormTable/button_row.html.php", "/Users/Cendrillon/Sites/Psychomot/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
