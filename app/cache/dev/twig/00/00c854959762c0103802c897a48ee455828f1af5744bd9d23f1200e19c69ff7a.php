<?php

/* FOSUserBundle:Security:login_content.html.twig */
class __TwigTemplate_2be752e088bcfb993e0c50b946277dbc4874d9acce32397a8624bae6e66d1296 extends Twig_Template
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
        $__internal_69c76d2494a3557ed3bd9ed995c6540fd9350d129ccfe036e57de45eab2567a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69c76d2494a3557ed3bd9ed995c6540fd9350d129ccfe036e57de45eab2567a5->enter($__internal_69c76d2494a3557ed3bd9ed995c6540fd9350d129ccfe036e57de45eab2567a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login_content.html.twig"));

        // line 2
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "
";
        // line 11
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 12
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 14
        echo "<div class=\"card col-xs-offset-4 col-xs-4\">
    <img class=\"card-img-top col-xs-5\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/psychomot/img/logo250.jpg"), "html", null, true);
        echo "\" alt=\"Card image cap\">
    <div class=\"card-block col-xs-12\">
        <form action=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
            ";
        // line 18
        if ((isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token"))) {
            // line 19
            echo "                <input type=\"hidden\" nameclass=\"btn btn-success\"=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
            ";
        }
        // line 21
        echo "            <div class=\"form-group row\">
                <label for=\"username\" class=\"col-xs-4 col-form-label\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Nom", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                <div class=\"col-xs-8\">
                    <input class=\"form-control\" type=\"text\" name=\"_username\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" id=\"example-text-input\"/>
                </div>
            </div>
            <div class=\"form-group row\">
                <label for=\"example-password-input\" class=\"col-xs-4 col-form-label\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mot de passe", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                <div class=\"col-xs-8\">
                    <input class=\"form-control\" type=\"password\" name=\"_password\" required=\"required\" value=\"hunter2\" id=\"example-password-input\"/>
                </div>
            </div>
            <div class=\"col-xs-6\">
                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                <label for=\"remember_me\">";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("se souvenir de moi", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
            </div>
            <div class-xs-offset-2>
                <input type=\"submit\" class=\"btn btn-success\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
            </div>
        </form>
    </div>
</div>";
        
        $__internal_69c76d2494a3557ed3bd9ed995c6540fd9350d129ccfe036e57de45eab2567a5->leave($__internal_69c76d2494a3557ed3bd9ed995c6540fd9350d129ccfe036e57de45eab2567a5_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c7a3aec04a5810a12ac062fbce58c3d2916716b00cc44d9b57b2fd50b6d9daf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7a3aec04a5810a12ac062fbce58c3d2916716b00cc44d9b57b2fd50b6d9daf0->enter($__internal_c7a3aec04a5810a12ac062fbce58c3d2916716b00cc44d9b57b2fd50b6d9daf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Security:login_content.html.twig"));

        // line 3
        echo "    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
    <style>
        .btn-success{
            background-color: #82bdb5;
        }
    </style>
";
        
        $__internal_c7a3aec04a5810a12ac062fbce58c3d2916716b00cc44d9b57b2fd50b6d9daf0->leave($__internal_c7a3aec04a5810a12ac062fbce58c3d2916716b00cc44d9b57b2fd50b6d9daf0_prof);

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
        return array (  105 => 3,  99 => 2,  87 => 38,  81 => 35,  71 => 28,  64 => 24,  59 => 22,  56 => 21,  50 => 19,  48 => 18,  44 => 17,  39 => 15,  36 => 14,  30 => 12,  28 => 11,  25 => 10,  23 => 2,);
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
    <style>
        .btn-success{
            background-color: #82bdb5;
        }
    </style>
{% endblock %}

{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}
<div class=\"card col-xs-offset-4 col-xs-4\">
    <img class=\"card-img-top col-xs-5\" src=\"{{ asset('bundles/psychomot/img/logo250.jpg') }}\" alt=\"Card image cap\">
    <div class=\"card-block col-xs-12\">
        <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
            {% if csrf_token %}
                <input type=\"hidden\" nameclass=\"btn btn-success\"=\"_csrf_token\" value=\"{{ csrf_token }}\" />
            {% endif %}
            <div class=\"form-group row\">
                <label for=\"username\" class=\"col-xs-4 col-form-label\">{{ 'Nom'|trans }}</label>
                <div class=\"col-xs-8\">
                    <input class=\"form-control\" type=\"text\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" id=\"example-text-input\"/>
                </div>
            </div>
            <div class=\"form-group row\">
                <label for=\"example-password-input\" class=\"col-xs-4 col-form-label\">{{ 'Mot de passe'|trans }}</label>
                <div class=\"col-xs-8\">
                    <input class=\"form-control\" type=\"password\" name=\"_password\" required=\"required\" value=\"hunter2\" id=\"example-password-input\"/>
                </div>
            </div>
            <div class=\"col-xs-6\">
                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                <label for=\"remember_me\">{{ 'se souvenir de moi'|trans }}</label>
            </div>
            <div class-xs-offset-2>
                <input type=\"submit\" class=\"btn btn-success\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\" />
            </div>
        </form>
    </div>
</div>", "FOSUserBundle:Security:login_content.html.twig", "/var/www/html/Psychomot/app/Resources/FOSUserBundle/views/Security/login_content.html.twig");
    }
}
