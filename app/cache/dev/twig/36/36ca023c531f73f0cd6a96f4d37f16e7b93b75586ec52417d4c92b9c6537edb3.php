<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_16034429c2e22b14b860bd4a3e7a6b0fb1d0be142d6a0eee89b14d36c944be4d extends Twig_Template
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
        $__internal_3993ab05f154bcbab78fd7d8937278993db550ab0fa4fdfa957886d1179a3f26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3993ab05f154bcbab78fd7d8937278993db550ab0fa4fdfa957886d1179a3f26->enter($__internal_3993ab05f154bcbab78fd7d8937278993db550ab0fa4fdfa957886d1179a3f26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_3993ab05f154bcbab78fd7d8937278993db550ab0fa4fdfa957886d1179a3f26->leave($__internal_3993ab05f154bcbab78fd7d8937278993db550ab0fa4fdfa957886d1179a3f26_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Users/Cendrillon/Sites/Psychomot/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
