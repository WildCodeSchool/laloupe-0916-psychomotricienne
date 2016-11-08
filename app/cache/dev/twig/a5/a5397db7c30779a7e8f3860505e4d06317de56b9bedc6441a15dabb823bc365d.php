<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_71584c9f6f369b8ec8bbe7584cd302f755bb53f5023b59ef73fa51a4957d1e73 extends Twig_Template
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
        $__internal_4303e4719ba2fbe791f80680d9122246d4654a18d9c04f5fd2e590e584b54d5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4303e4719ba2fbe791f80680d9122246d4654a18d9c04f5fd2e590e584b54d5b->enter($__internal_4303e4719ba2fbe791f80680d9122246d4654a18d9c04f5fd2e590e584b54d5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_4303e4719ba2fbe791f80680d9122246d4654a18d9c04f5fd2e590e584b54d5b->leave($__internal_4303e4719ba2fbe791f80680d9122246d4654a18d9c04f5fd2e590e584b54d5b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Users/Cendrillon/Sites/Psychomot/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
