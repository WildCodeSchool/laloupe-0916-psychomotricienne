<?php

/* FOSUserBundle:Security:login_content.html.twig */
class __TwigTemplate_5f99c18fd00d459655c0ad7bb3cbdc42721236cee780a73cd22a3e77ea4ee980 extends Twig_Template
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
        // line 2
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "
";
        // line 14
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 15
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 17
        echo "<div class=\"card col-xs-offset-4 col-xs-4\">
    <img class=\"card-img-top col-xs-offset-2 col-xs-8\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/psycho/img/logo250.png"), "html", null, true);
        echo "\" alt=\"Card image cap\">
    <div class=\"card-block col-xs-12\">
        <form action=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
            ";
        // line 21
        if ((isset($context["csrf_token"]) ? $context["csrf_token"] : null)) {
            // line 22
            echo "                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
            echo "\" />
            ";
        }
        // line 24
        echo "            <div class=\"form-group row\">
                <label for=\"username\" class=\"col-xs-4 col-form-label\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Nom", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                <div class=\"col-xs-8\">
                    <input class=\"form-control\" type=\"text\" name=\"_username\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\" required=\"required\" id=\"example-text-input\"/>
                </div>
            </div>
            <div class=\"form-group row\">
                <label for=\"example-password-input\" class=\"col-xs-4 col-form-label\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mot de passe", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                <div class=\"col-xs-8\">
                    <input class=\"form-control\" type=\"password\" name=\"_password\" required=\"required\" value=\"hunter2\" id=\"example-password-input\"/>
                </div>
            </div>
            <div class=\"col-xs-6\">
                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                <label for=\"remember_me\">";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("se souvenir de moi", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
            </div>
            <div class-xs-offset-2>
                <input type=\"submit\" class=\"btn btn-success\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Se connecter", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
            </div>
        </form>
    </div>
</div>";
    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 3
        echo "    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
    <style>
        .btn-success{
            background-color: #82bdb5;
        }
        .card-img-top{
            margin-bottom: 25px;
        }
    </style>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 3,  93 => 2,  84 => 41,  78 => 38,  68 => 31,  61 => 27,  56 => 25,  53 => 24,  47 => 22,  45 => 21,  41 => 20,  36 => 18,  33 => 17,  27 => 15,  25 => 14,  22 => 13,  20 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FOSUserBundle:Security:login_content.html.twig", "/Users/Cendrillon/Sites/Psychomot/app/Resources/FOSUserBundle/views/Security/login_content.html.twig");
    }
}
