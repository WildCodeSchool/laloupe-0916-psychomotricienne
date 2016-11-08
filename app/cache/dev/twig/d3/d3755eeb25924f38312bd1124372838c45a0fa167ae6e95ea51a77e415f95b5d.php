<?php

/* PsychoBundle:psycho:index.html.twig */
class __TwigTemplate_891478af2f107c14c4e4acb97261ee8a2d762243b74f39b1f423c19c742983e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "PsychoBundle:psycho:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3fcab30eed4833f1007f7e39d842096c88903a72d40adb6b55adfb184701ae29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fcab30eed4833f1007f7e39d842096c88903a72d40adb6b55adfb184701ae29->enter($__internal_3fcab30eed4833f1007f7e39d842096c88903a72d40adb6b55adfb184701ae29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PsychoBundle:psycho:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3fcab30eed4833f1007f7e39d842096c88903a72d40adb6b55adfb184701ae29->leave($__internal_3fcab30eed4833f1007f7e39d842096c88903a72d40adb6b55adfb184701ae29_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c09b62424484dc9f0311dacafa29c1b58faa6e94a9cb144328e8878f9736c94e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c09b62424484dc9f0311dacafa29c1b58faa6e94a9cb144328e8878f9736c94e->enter($__internal_c09b62424484dc9f0311dacafa29c1b58faa6e94a9cb144328e8878f9736c94e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "PsychoBundle:psycho:index.html.twig"));

        // line 4
        echo "
    <tbody>
";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["psychos"]) ? $context["psychos"] : $this->getContext($context, "psychos")));
        foreach ($context['_seq'] as $context["_key"] => $context["psycho"]) {
            // line 7
            echo "

    <!-- Début Nav Bar -->

    <nav class=\"navbar navbar-default navbar-fixed-top\">
        <!--<div class=\"container\">-->
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"#\"><img src=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/psycho/img/logo.png"), "html", null, true);
            echo "\" alt=\"Logo psychomotricienne\" class=\"logo-navbar\"/> </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav \">
                <li class=\"active\"><a class=\"js-scrollTo\" href=\"#page-home\">Accueil <span class=\"sr-only\">(current)</span></a></li>
                <li><a class=\"js-scrollTo\" href=\"#Psychomotricité\">Psychomotricité</a></li>
                <li><a class=\"js-scrollTo\" href=\"#psychomot\">Les psychomotriciennes</a></li>
                <li><a class=\"js-scrollTo\" href=\"#consultation\">Interventions</a></li>
                <li><a class=\"js-scrollTo\" href=\"#page-contact\">Contact</a></li>

            </ul>
            <ul class=\"nav navbar-nav navbar-right tel\">
                <li><a><b>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["psycho"], "tel", array()), "html", null, true);
            echo "</b></a></li>
            </ul>


        </div>
    </nav>

<!-- Fin Nav Bar --


<!--Accueil-->

    <div id=\"page-home\">
        <div id=\"title\">
            <hr/>
            <h1>CABINET DE PSYCHOMOTRICITE
                <br/><span class=\"home-adresse\">38 rue Arnold Dolmetsch - 72000 Le Mans</span>
            </h1>
            <hr/>
        </div>
    </div>

<!--Fin Accueil-->



<!--Début Psychomotricité-->

    <div id=\"Psychomotricité\">
        <div class=\"accordion1\">
            <ul>
                <li>
                    <div>
                        <a>
                            <h2 class=\"psyco_titre1\"> ";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["psycho"], "titledef", array()), "html", null, true);
            echo "</h2>
                            <img src=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
            echo "/uploads/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["psycho"], "image1", array()), "html", null, true);
            echo "\">
                            <p class=\"psyco_texte1\"> ";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["psycho"], "txtdef", array()), "html", null, true);
            echo " </p>

                        </a>
                    </div>
                </li>
                <li>
                    <div>
                        <a>
                            <h2>";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($context["psycho"], "titleWho", array()), "html", null, true);
            echo "</h2>
                            <img src=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
            echo "/uploads/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["psycho"], "image2", array()), "html", null, true);
            echo "\" class=\"toto\">
                            <p>";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($context["psycho"], "txtWho", array()), "html", null, true);
            echo "</p>
                        </a>
                    </div>
                </li>
                <li>
                    <div>
                        <a>
                            <h2>";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($context["psycho"], "titleWhy", array()), "html", null, true);
            echo "</h2>
                            <img src=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
            echo "/uploads/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["psycho"], "image3", array()), "html", null, true);
            echo "\">
                            <p>";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute($context["psycho"], "txtWhy", array()), "html", null, true);
            echo "</p>
                        </a>
                    </div>

                </li>
            </ul>
        </div>
    </div>

<!--Fin Psychomotricité-->




<!--Début Psychomotriciennes-->

    <div class=\"row\">
        <div id=\"psychomot\" class=\"fond\">
            <div class=\"left col-xs-12 col-sm-6 col-md-6\">
                <div class=\"col-xs-12\">
                    <img src=\"";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
            echo "/uploads/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["psycho"], "image4", array()), "html", null, true);
            echo "\">
                    <div class=\"border\">
                        <h3>";
            // line 111
            echo twig_escape_filter($this->env, $this->getAttribute($context["psycho"], "namePsy1", array()), "html", null, true);
            echo "</h3>
                        <h5>Psychomotricienne diplomée</h5>
                        <p>";
            // line 113
            echo twig_escape_filter($this->env, $this->getAttribute($context["psycho"], "txtPsy1", array()), "html", null, true);
            echo "</p>
                    </div>
                </div>
            </div>
            <div class=\"right col-xs-12 col-sm-6 col-md-6\">
                <div class=\"col-xs-12\">
                    <img src=\"";
            // line 119
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
            echo "/uploads/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["psycho"], "image5", array()), "html", null, true);
            echo "\">
                    <div class=\"border\">
                        <h3>";
            // line 121
            echo twig_escape_filter($this->env, $this->getAttribute($context["psycho"], "namePsy2", array()), "html", null, true);
            echo "</h3>
                        <h5>Psychomotricienne diplomée</h5>
                        <p>";
            // line 123
            echo twig_escape_filter($this->env, $this->getAttribute($context["psycho"], "txtPsy2", array()), "html", null, true);
            echo "</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!--Fin Psychomotriciennes-->




<!--Début Intervention-->

    <div class=\"row\" id=\"consultation\">
        <div class=\"accordion col-xs-12\">
            <ul>
                <li>
                    <div>
                        <a>
                            <div class=\"row\">
                                <div class=\"accordion col-xs-4\">
                                    <h2>";
            // line 145
            echo twig_escape_filter($this->env, $this->getAttribute($context["psycho"], "titleConsult", array()), "html", null, true);
            echo "</h2>
                                    <p>";
            // line 146
            echo twig_escape_filter($this->env, $this->getAttribute($context["psycho"], "txtConsult", array()), "html", null, true);
            echo "</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </li>
                <li>
                    <div>
                        <a>
                            <div class=\"row\">
                                <div class=\"accordion col-xs-4\">
                                    <h2>";
            // line 157
            echo twig_escape_filter($this->env, $this->getAttribute($context["psycho"], "titleInterv", array()), "html", null, true);
            echo "</h2>
                                    <p>";
            // line 158
            echo twig_escape_filter($this->env, $this->getAttribute($context["psycho"], "txtInterv", array()), "html", null, true);
            echo "</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </li>
                <li>
                    <div>
                        <a>
                            <div class=\"row\">
                                <div class=\"accordion col-xs-4\">
                                    <h2>";
            // line 169
            echo twig_escape_filter($this->env, $this->getAttribute($context["psycho"], "titleBilan", array()), "html", null, true);
            echo "</h2>
                                    <p>";
            // line 170
            echo twig_escape_filter($this->env, $this->getAttribute($context["psycho"], "txtBilan", array()), "html", null, true);
            echo "</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>

<!--Fin Interventions-->



<!--Début Contact-->

<div class=\"row\">
    <div id=\"page-contact\">
        <div class=\"essai1 border col-xs-12 col-sm-5\">
            <h3>Nous contacter</h3>
            <div class=\"adress\">
                <p>";
            // line 191
            echo twig_escape_filter($this->env, $this->getAttribute($context["psycho"], "contactName", array()), "html", null, true);
            echo "</p>
                <p>";
            // line 192
            echo twig_escape_filter($this->env, $this->getAttribute($context["psycho"], "contactAddress", array()), "html", null, true);
            echo "</p>
                <p>";
            // line 193
            echo twig_escape_filter($this->env, $this->getAttribute($context["psycho"], "contactTel", array()), "html", null, true);
            echo "</p>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['psycho'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 196
        echo "
            <form action=\"";
        // line 197
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("psycho_mail");
        echo "\" method=\"post\">
                <div class=\"form-group row\">
                    <label for=\"example-text-input\" class=\"col-xs-3 col-form-label\">Prénom :</label>
                    <div class=\"col-xs-9\">
                        <input class=\"form-control\" type=\"text\" value=\"ex : John\" name=\"firstname\" id=\"example-text-input\">
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label for=\"example-text-input\" class=\"col-xs-3 col-form-label\">Nom :</label>
                    <div class=\"col-xs-9\">
                        <input class=\"form-control\" type=\"text\" value=\"ex : Doe\" name=\"lastname\" id=\"example-text-input\">
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label for=\"example-email-input\" class=\"col-xs-3 col-form-label\">Email :</label>
                    <div class=\"col-xs-9\">
                        <input class=\"form-control\" type=\"email\" value=\"john.doe@free.fr\" name=\"email\" id=\"example-email-input\">
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label for=\"example-text-input\" class=\"col-xs-3 col-form-label\">Objet :</label>
                    <div class=\"col-xs-9\">
                        <input class=\"form-control\" type=\"text\" value=\"ex : Prise de rendez-vous\" name=\"object\" id=\"example-text-input\">
                    </div>
                </div>
                <div class=\"form-group \">
                    <label for=\"exampleTextarea\" >Votre message :</label>
                    <textarea class=\"form-control\" id=\"exampleTextarea\" rows=\"10\" name=\"message\"></textarea>
                </div>
                <div class=\"col-xs-offset-5 col-xs-2 send\">
                    <input type=\"submit\" value=\"Envoyer\" class=\"btn btn-succcess\">
                </div>
            </form>
        </div>


        <div class=\"map col-xs-12 col-sm-6\">
            <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2668.900152456399!2d0.1456287153106367!3d48.015638879213896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e286137f09c6d3%3A0x2ebd30be841e5f73!2s38+Rue+Arnold+Dolmetsch%2C+72000+Le+Mans!5e0!3m2!1sfr!2sfr!4v1476182827751\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
        </div>
    </div>
</div>

<!-- Fin Contact -->

<br/>
<br/>
";
        // line 244
        echo "



<!--<ul>
        <li>
            <a href=\"";
        // line 250
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("psycho_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>-->
";
        
        $__internal_c09b62424484dc9f0311dacafa29c1b58faa6e94a9cb144328e8878f9736c94e->leave($__internal_c09b62424484dc9f0311dacafa29c1b58faa6e94a9cb144328e8878f9736c94e_prof);

    }

    public function getTemplateName()
    {
        return "PsychoBundle:psycho:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  390 => 250,  382 => 244,  333 => 197,  330 => 196,  321 => 193,  317 => 192,  313 => 191,  289 => 170,  285 => 169,  271 => 158,  267 => 157,  253 => 146,  249 => 145,  224 => 123,  219 => 121,  212 => 119,  203 => 113,  198 => 111,  191 => 109,  168 => 89,  162 => 88,  158 => 87,  148 => 80,  142 => 79,  138 => 78,  127 => 70,  121 => 69,  117 => 68,  80 => 34,  64 => 21,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

    <tbody>
{% for psycho in psychos %}


    <!-- Début Nav Bar -->

    <nav class=\"navbar navbar-default navbar-fixed-top\">
        <!--<div class=\"container\">-->
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"#\"><img src=\"{{ asset('bundles/psycho/img/logo.png') }}\" alt=\"Logo psychomotricienne\" class=\"logo-navbar\"/> </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav \">
                <li class=\"active\"><a class=\"js-scrollTo\" href=\"#page-home\">Accueil <span class=\"sr-only\">(current)</span></a></li>
                <li><a class=\"js-scrollTo\" href=\"#Psychomotricité\">Psychomotricité</a></li>
                <li><a class=\"js-scrollTo\" href=\"#psychomot\">Les psychomotriciennes</a></li>
                <li><a class=\"js-scrollTo\" href=\"#consultation\">Interventions</a></li>
                <li><a class=\"js-scrollTo\" href=\"#page-contact\">Contact</a></li>

            </ul>
            <ul class=\"nav navbar-nav navbar-right tel\">
                <li><a><b>{{ psycho.tel }}</b></a></li>
            </ul>


        </div>
    </nav>

<!-- Fin Nav Bar --


<!--Accueil-->

    <div id=\"page-home\">
        <div id=\"title\">
            <hr/>
            <h1>CABINET DE PSYCHOMOTRICITE
                <br/><span class=\"home-adresse\">38 rue Arnold Dolmetsch - 72000 Le Mans</span>
            </h1>
            <hr/>
        </div>
    </div>

<!--Fin Accueil-->



<!--Début Psychomotricité-->

    <div id=\"Psychomotricité\">
        <div class=\"accordion1\">
            <ul>
                <li>
                    <div>
                        <a>
                            <h2 class=\"psyco_titre1\"> {{ psycho.titledef }}</h2>
                            <img src=\"{{ app.request.basepath }}/uploads/{{ psycho.image1 }}\">
                            <p class=\"psyco_texte1\"> {{ psycho.txtdef }} </p>

                        </a>
                    </div>
                </li>
                <li>
                    <div>
                        <a>
                            <h2>{{ psycho.titleWho }}</h2>
                            <img src=\"{{ app.request.basepath }}/uploads/{{ psycho.image2 }}\" class=\"toto\">
                            <p>{{ psycho.txtWho }}</p>
                        </a>
                    </div>
                </li>
                <li>
                    <div>
                        <a>
                            <h2>{{ psycho.titleWhy }}</h2>
                            <img src=\"{{ app.request.basepath }}/uploads/{{ psycho.image3 }}\">
                            <p>{{ psycho.txtWhy }}</p>
                        </a>
                    </div>

                </li>
            </ul>
        </div>
    </div>

<!--Fin Psychomotricité-->




<!--Début Psychomotriciennes-->

    <div class=\"row\">
        <div id=\"psychomot\" class=\"fond\">
            <div class=\"left col-xs-12 col-sm-6 col-md-6\">
                <div class=\"col-xs-12\">
                    <img src=\"{{ app.request.basepath }}/uploads/{{ psycho.image4 }}\">
                    <div class=\"border\">
                        <h3>{{ psycho.namePsy1 }}</h3>
                        <h5>Psychomotricienne diplomée</h5>
                        <p>{{ psycho.txtPsy1 }}</p>
                    </div>
                </div>
            </div>
            <div class=\"right col-xs-12 col-sm-6 col-md-6\">
                <div class=\"col-xs-12\">
                    <img src=\"{{ app.request.basepath }}/uploads/{{ psycho.image5 }}\">
                    <div class=\"border\">
                        <h3>{{ psycho.namePsy2 }}</h3>
                        <h5>Psychomotricienne diplomée</h5>
                        <p>{{ psycho.txtPsy2 }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!--Fin Psychomotriciennes-->




<!--Début Intervention-->

    <div class=\"row\" id=\"consultation\">
        <div class=\"accordion col-xs-12\">
            <ul>
                <li>
                    <div>
                        <a>
                            <div class=\"row\">
                                <div class=\"accordion col-xs-4\">
                                    <h2>{{ psycho.titleConsult }}</h2>
                                    <p>{{ psycho.txtConsult }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </li>
                <li>
                    <div>
                        <a>
                            <div class=\"row\">
                                <div class=\"accordion col-xs-4\">
                                    <h2>{{ psycho.titleInterv }}</h2>
                                    <p>{{ psycho.txtInterv }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </li>
                <li>
                    <div>
                        <a>
                            <div class=\"row\">
                                <div class=\"accordion col-xs-4\">
                                    <h2>{{ psycho.titleBilan }}</h2>
                                    <p>{{ psycho.txtBilan }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>

<!--Fin Interventions-->



<!--Début Contact-->

<div class=\"row\">
    <div id=\"page-contact\">
        <div class=\"essai1 border col-xs-12 col-sm-5\">
            <h3>Nous contacter</h3>
            <div class=\"adress\">
                <p>{{ psycho.contactName }}</p>
                <p>{{ psycho.contactAddress }}</p>
                <p>{{ psycho.contactTel }}</p>
            </div>
            {% endfor %}

            <form action=\"{{  path('psycho_mail') }}\" method=\"post\">
                <div class=\"form-group row\">
                    <label for=\"example-text-input\" class=\"col-xs-3 col-form-label\">Prénom :</label>
                    <div class=\"col-xs-9\">
                        <input class=\"form-control\" type=\"text\" value=\"ex : John\" name=\"firstname\" id=\"example-text-input\">
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label for=\"example-text-input\" class=\"col-xs-3 col-form-label\">Nom :</label>
                    <div class=\"col-xs-9\">
                        <input class=\"form-control\" type=\"text\" value=\"ex : Doe\" name=\"lastname\" id=\"example-text-input\">
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label for=\"example-email-input\" class=\"col-xs-3 col-form-label\">Email :</label>
                    <div class=\"col-xs-9\">
                        <input class=\"form-control\" type=\"email\" value=\"john.doe@free.fr\" name=\"email\" id=\"example-email-input\">
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label for=\"example-text-input\" class=\"col-xs-3 col-form-label\">Objet :</label>
                    <div class=\"col-xs-9\">
                        <input class=\"form-control\" type=\"text\" value=\"ex : Prise de rendez-vous\" name=\"object\" id=\"example-text-input\">
                    </div>
                </div>
                <div class=\"form-group \">
                    <label for=\"exampleTextarea\" >Votre message :</label>
                    <textarea class=\"form-control\" id=\"exampleTextarea\" rows=\"10\" name=\"message\"></textarea>
                </div>
                <div class=\"col-xs-offset-5 col-xs-2 send\">
                    <input type=\"submit\" value=\"Envoyer\" class=\"btn btn-succcess\">
                </div>
            </form>
        </div>


        <div class=\"map col-xs-12 col-sm-6\">
            <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2668.900152456399!2d0.1456287153106367!3d48.015638879213896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e286137f09c6d3%3A0x2ebd30be841e5f73!2s38+Rue+Arnold+Dolmetsch%2C+72000+Le+Mans!5e0!3m2!1sfr!2sfr!4v1476182827751\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
        </div>
    </div>
</div>

<!-- Fin Contact -->

<br/>
<br/>
{#<img src=\"{{ app.request.basepath }}/uploads/{{ psychomot.image }}\">#}




<!--<ul>
        <li>
            <a href=\"{{ path('psycho_new') }}\">Create a new entry</a>
        </li>
    </ul>-->
{% endblock %}", "PsychoBundle:psycho:index.html.twig", "/Users/Cendrillon/Sites/Psychomot/src/PsychoBundle/Resources/views/psycho/index.html.twig");
    }
}
