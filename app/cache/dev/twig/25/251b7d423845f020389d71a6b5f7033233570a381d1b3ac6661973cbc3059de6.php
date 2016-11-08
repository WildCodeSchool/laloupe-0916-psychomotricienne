<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_c17dcbbcb2e496c5131a214073d79bddbb56086b432591faaec637a10ec5cf74 extends Twig_Template
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
        $__internal_36189448c78be335673a704159eee9dc9021c3a3dbc9932d8b4478fa4b11e3ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36189448c78be335673a704159eee9dc9021c3a3dbc9932d8b4478fa4b11e3ce->enter($__internal_36189448c78be335673a704159eee9dc9021c3a3dbc9932d8b4478fa4b11e3ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_36189448c78be335673a704159eee9dc9021c3a3dbc9932d8b4478fa4b11e3ce->leave($__internal_36189448c78be335673a704159eee9dc9021c3a3dbc9932d8b4478fa4b11e3ce_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/Users/Cendrillon/Sites/Psychomot/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
