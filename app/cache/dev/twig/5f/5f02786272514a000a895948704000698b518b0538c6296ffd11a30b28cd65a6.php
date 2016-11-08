<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_312d1992150fcc4d00fcc752d03596c9424d4c5ecfbd2fbfe76c9f2991307288 extends Twig_Template
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
        $__internal_94abd46a69d6c0e4513bdbc9641770490659acbf5040ae1838c94a2bd44d88ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94abd46a69d6c0e4513bdbc9641770490659acbf5040ae1838c94a2bd44d88ad->enter($__internal_94abd46a69d6c0e4513bdbc9641770490659acbf5040ae1838c94a2bd44d88ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_94abd46a69d6c0e4513bdbc9641770490659acbf5040ae1838c94a2bd44d88ad->leave($__internal_94abd46a69d6c0e4513bdbc9641770490659acbf5040ae1838c94a2bd44d88ad_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/Users/Cendrillon/Sites/Psychomot/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
