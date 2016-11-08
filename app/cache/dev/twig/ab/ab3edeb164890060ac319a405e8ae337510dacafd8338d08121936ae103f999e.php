<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_9a40d167c21bc76a2ff990d31fca08259caf4ddac0725c76ab36ea906ad1bf00 extends Twig_Template
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
        $__internal_bb70944ea19132e1f5fb9139b6c1655cc418563b5d1ce45ab1a3a5d259f8752d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb70944ea19132e1f5fb9139b6c1655cc418563b5d1ce45ab1a3a5d259f8752d->enter($__internal_bb70944ea19132e1f5fb9139b6c1655cc418563b5d1ce45ab1a3a5d259f8752d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_bb70944ea19132e1f5fb9139b6c1655cc418563b5d1ce45ab1a3a5d259f8752d->leave($__internal_bb70944ea19132e1f5fb9139b6c1655cc418563b5d1ce45ab1a3a5d259f8752d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Users/Cendrillon/Sites/Psychomot/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
