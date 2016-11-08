<?php

/* PsychoBundle:psycho:mail.html.twig */
class __TwigTemplate_4b907b560e268cdb5ceeff813b92c771b7da5c19ede993bf97eebc922b9c2681 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9795a7fa51e63571c7b0026ab6e43c29c236677b62ff9f41ccdbcb1de8ff9228 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9795a7fa51e63571c7b0026ab6e43c29c236677b62ff9f41ccdbcb1de8ff9228->enter($__internal_9795a7fa51e63571c7b0026ab6e43c29c236677b62ff9f41ccdbcb1de8ff9228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PsychoBundle:psycho:mail.html.twig"));

        // line 1
        echo "<html>
<head>
    <meta charset=\"utf-8\">
    <title>Mail envoyé</title>
    ";
        // line 5
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "
</head>

<body>

    <div class=\"alert alert-success\" role=\"alert\">
        <strong>Votre email a bien été envoyé</strong>
    </div>

</body>
</html>";
        
        $__internal_9795a7fa51e63571c7b0026ab6e43c29c236677b62ff9f41ccdbcb1de8ff9228->leave($__internal_9795a7fa51e63571c7b0026ab6e43c29c236677b62ff9f41ccdbcb1de8ff9228_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_20dce37b414c6677672fb5179b6b5e2a85ef8253918f2f2d1d37380d875b1914 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20dce37b414c6677672fb5179b6b5e2a85ef8253918f2f2d1d37380d875b1914->enter($__internal_20dce37b414c6677672fb5179b6b5e2a85ef8253918f2f2d1d37380d875b1914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "PsychoBundle:psycho:mail.html.twig"));

        // line 6
        echo "        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
        <link href=\"http://www.cssscript.com/wp-includes/css/sticky.css\" rel=\"stylesheet\" type=\"text/css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/psycho/css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    ";
        
        $__internal_20dce37b414c6677672fb5179b6b5e2a85ef8253918f2f2d1d37380d875b1914->leave($__internal_20dce37b414c6677672fb5179b6b5e2a85ef8253918f2f2d1d37380d875b1914_prof);

    }

    public function getTemplateName()
    {
        return "PsychoBundle:psycho:mail.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  62 => 9,  58 => 8,  54 => 6,  48 => 5,  31 => 11,  29 => 5,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
<head>
    <meta charset=\"utf-8\">
    <title>Mail envoyé</title>
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
        <link href=\"http://www.cssscript.com/wp-includes/css/sticky.css\" rel=\"stylesheet\" type=\"text/css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/psycho/css/style.css') }}\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    {% endblock %}

</head>

<body>

    <div class=\"alert alert-success\" role=\"alert\">
        <strong>Votre email a bien été envoyé</strong>
    </div>

</body>
</html>", "PsychoBundle:psycho:mail.html.twig", "/Users/Cendrillon/Sites/Psychomot/src/PsychoBundle/Resources/views/psycho/mail.html.twig");
    }
}
