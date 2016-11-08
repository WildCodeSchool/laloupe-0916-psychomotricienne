<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_f52fe7b2fc62f43124bae405050ff5f5d6f3f3aadb2dc6cb57f988d66141f30f extends Twig_Template
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
        $__internal_f08aac8b528cec05a39b59063b98675d6beb2df081893d8f847df81fb1002142 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f08aac8b528cec05a39b59063b98675d6beb2df081893d8f847df81fb1002142->enter($__internal_f08aac8b528cec05a39b59063b98675d6beb2df081893d8f847df81fb1002142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_f08aac8b528cec05a39b59063b98675d6beb2df081893d8f847df81fb1002142->leave($__internal_f08aac8b528cec05a39b59063b98675d6beb2df081893d8f847df81fb1002142_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/Users/Cendrillon/Sites/Psychomot/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
