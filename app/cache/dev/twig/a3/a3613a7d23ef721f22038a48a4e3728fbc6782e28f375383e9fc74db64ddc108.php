<?php

/* FOSUserBundle:Security:login_content.html.twig */
class __TwigTemplate_1eb931797ef3ce6b77bbda51f437591c446344f4de9a6573a1d5bc4a33bdb043 extends Twig_Template
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
        $__internal_a9fe3ab4493cd72084184721e153e6a493f73e1032a41b8aa0805efe0449fbe5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9fe3ab4493cd72084184721e153e6a493f73e1032a41b8aa0805efe0449fbe5->enter($__internal_a9fe3ab4493cd72084184721e153e6a493f73e1032a41b8aa0805efe0449fbe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login_content.html.twig"));

        // line 2
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "
";
        // line 14
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 15
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
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
        if ((isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token"))) {
            // line 22
            echo "                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
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
        
        $__internal_a9fe3ab4493cd72084184721e153e6a493f73e1032a41b8aa0805efe0449fbe5->leave($__internal_a9fe3ab4493cd72084184721e153e6a493f73e1032a41b8aa0805efe0449fbe5_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_599a9abb147e0afb79443b4ac80c4afef03e4629be67c82bf55c93fa9763e950 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_599a9abb147e0afb79443b4ac80c4afef03e4629be67c82bf55c93fa9763e950->enter($__internal_599a9abb147e0afb79443b4ac80c4afef03e4629be67c82bf55c93fa9763e950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Security:login_content.html.twig"));

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
        
        $__internal_599a9abb147e0afb79443b4ac80c4afef03e4629be67c82bf55c93fa9763e950->leave($__internal_599a9abb147e0afb79443b4ac80c4afef03e4629be67c82bf55c93fa9763e950_prof);

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
        return array (  105 => 3,  99 => 2,  87 => 41,  81 => 38,  71 => 31,  64 => 27,  59 => 25,  56 => 24,  50 => 22,  48 => 21,  44 => 20,  39 => 18,  36 => 17,  30 => 15,  28 => 14,  25 => 13,  23 => 2,);
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
        .card-img-top{
            margin-bottom: 25px;
        }
    </style>
{% endblock %}

{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}
<div class=\"card col-xs-offset-4 col-xs-4\">
    <img class=\"card-img-top col-xs-offset-2 col-xs-8\" src=\"{{ asset('bundles/psycho/img/logo250.png') }}\" alt=\"Card image cap\">
    <div class=\"card-block col-xs-12\">
        <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
            {% if csrf_token %}
                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
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
                <input type=\"submit\" class=\"btn btn-success\" id=\"_submit\" name=\"_submit\" value=\"{{ 'Se connecter'|trans }}\" />
            </div>
        </form>
    </div>
</div>", "FOSUserBundle:Security:login_content.html.twig", "/Users/Cendrillon/Sites/Psychomot/app/Resources/FOSUserBundle/views/Security/login_content.html.twig");
    }
}
