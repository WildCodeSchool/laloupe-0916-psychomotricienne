<?php

/* :FOSUserBundle/views/Security:login_content.html.twig */
class __TwigTemplate_c5d8150e4e581e37fe466a65d49d78e9f38e00cc478f24e155e58266ef9ee541 extends Twig_Template
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
        $__internal_ecb5e4e876ea9dfc4c2bbf96334aac02d3f60e68a5a9a12b31b8f016f43c2e19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecb5e4e876ea9dfc4c2bbf96334aac02d3f60e68a5a9a12b31b8f016f43c2e19->enter($__internal_ecb5e4e876ea9dfc4c2bbf96334aac02d3f60e68a5a9a12b31b8f016f43c2e19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":FOSUserBundle/views/Security:login_content.html.twig"));

        // line 2
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "
";
        // line 16
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 17
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 19
        echo "<div class=\"card col-xs-offset-4 col-xs-4\">
    <img class=\"card-img-top col-xs-offset-2\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/psycho/img/Logo250.png"), "html", null, true);
        echo "\" alt=\"Card image cap\">
    <div class=\"card-block\">
        <form action=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
            ";
        // line 23
        if ((isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token"))) {
            // line 24
            echo "                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
            ";
        }
        // line 26
        echo "
            <div class=\"form-group row\">
                <label for=\"username\" class=\"col-xs-5 col-form-label\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Votre nom d'utilisateur", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                <div class=\"col-xs-7\">
                    <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
                </div>
            </div>


            <div class=\"form-group row\">
                <label for=\"password\" class=\"col-xs-5 col-form-label\">";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Votre mot de passe", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                <div class=\"col-xs-7\">
                    <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\">
                </div>
            </div>

            <div class=\"col-xs-12\">
                <input type=\"checkbox\"  id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                <label for=\"remember_me\">";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("se rappeller de moi", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                <button type=\"submit\" class=\"btn btn-primary col-xs-offset-3\" id=\"_submit\" name=\"_submit\" >";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("se connecter", array(), "FOSUserBundle"), "html", null, true);
        echo "</button>

            </div>
        </form>
    </div>
</div>
";
        
        $__internal_ecb5e4e876ea9dfc4c2bbf96334aac02d3f60e68a5a9a12b31b8f016f43c2e19->leave($__internal_ecb5e4e876ea9dfc4c2bbf96334aac02d3f60e68a5a9a12b31b8f016f43c2e19_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9fc58edaecdc687fd7fe4d9de37a6aaa1e30afe74b79afb22a31040c7e9389b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fc58edaecdc687fd7fe4d9de37a6aaa1e30afe74b79afb22a31040c7e9389b5->enter($__internal_9fc58edaecdc687fd7fe4d9de37a6aaa1e30afe74b79afb22a31040c7e9389b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", ":FOSUserBundle/views/Security:login_content.html.twig"));

        // line 3
        echo "    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/psycho/css/style.css"), "html", null, true);
        echo "\">
    <style>
        .btn-primary {
            background-color: #82bdb5 ;
            color: lightblue;
        }
        .card-img-top{
            margin-bottom: 25px;
        }
    </style>
";
        
        $__internal_9fc58edaecdc687fd7fe4d9de37a6aaa1e30afe74b79afb22a31040c7e9389b5->leave($__internal_9fc58edaecdc687fd7fe4d9de37a6aaa1e30afe74b79afb22a31040c7e9389b5_prof);

    }

    public function getTemplateName()
    {
        return ":FOSUserBundle/views/Security:login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 4,  109 => 3,  103 => 2,  89 => 45,  85 => 44,  74 => 36,  65 => 30,  60 => 28,  56 => 26,  50 => 24,  48 => 23,  44 => 22,  39 => 20,  36 => 19,  30 => 17,  28 => 16,  25 => 15,  23 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/psycho/css/style.css') }}\">
    <style>
        .btn-primary {
            background-color: #82bdb5 ;
            color: lightblue;
        }
        .card-img-top{
            margin-bottom: 25px;
        }
    </style>
{% endblock %}

{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}
<div class=\"card col-xs-offset-4 col-xs-4\">
    <img class=\"card-img-top col-xs-offset-2\" src=\"{{ asset('bundles/psycho/img/Logo250.png') }}\" alt=\"Card image cap\">
    <div class=\"card-block\">
        <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
            {% if csrf_token %}
                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
            {% endif %}

            <div class=\"form-group row\">
                <label for=\"username\" class=\"col-xs-5 col-form-label\">{{ 'Votre nom d\\'utilisateur'|trans }}</label>
                <div class=\"col-xs-7\">
                    <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" />
                </div>
            </div>


            <div class=\"form-group row\">
                <label for=\"password\" class=\"col-xs-5 col-form-label\">{{ 'Votre mot de passe'|trans }}</label>
                <div class=\"col-xs-7\">
                    <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\">
                </div>
            </div>

            <div class=\"col-xs-12\">
                <input type=\"checkbox\"  id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                <label for=\"remember_me\">{{ 'se rappeller de moi'|trans }}</label>
                <button type=\"submit\" class=\"btn btn-primary col-xs-offset-3\" id=\"_submit\" name=\"_submit\" >{{ 'se connecter'|trans }}</button>

            </div>
        </form>
    </div>
</div>
", ":FOSUserBundle/views/Security:login_content.html.twig", "/var/www/html/Psychomot/app/Resources/views/FOSUserBundle/views/Security/login_content.html.twig");
    }
}
