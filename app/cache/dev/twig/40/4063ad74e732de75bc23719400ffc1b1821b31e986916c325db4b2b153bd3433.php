<?php

/* PsychoBundle:psycho:index.html.twig */
class __TwigTemplate_b61871c009e5aa61f985bdc8b0b5203649f182853aa243051add2901adc91d1d extends Twig_Template
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
        $__internal_764692a9c4f64be29158200759d3bb857e983db7b5c4ff1ba1536d734937732e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_764692a9c4f64be29158200759d3bb857e983db7b5c4ff1ba1536d734937732e->enter($__internal_764692a9c4f64be29158200759d3bb857e983db7b5c4ff1ba1536d734937732e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PsychoBundle:psycho:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_764692a9c4f64be29158200759d3bb857e983db7b5c4ff1ba1536d734937732e->leave($__internal_764692a9c4f64be29158200759d3bb857e983db7b5c4ff1ba1536d734937732e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fd5021f5ea30406daee6b3d7b276c0ff7bfddd12ba61dcd3bbc81e6f73107f3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd5021f5ea30406daee6b3d7b276c0ff7bfddd12ba61dcd3bbc81e6f73107f3b->enter($__internal_fd5021f5ea30406daee6b3d7b276c0ff7bfddd12ba61dcd3bbc81e6f73107f3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "PsychoBundle:psycho:index.html.twig"));

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
            <a class=\"navbar-brand\" href=\"#\">Logo</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav \">
                <li class=\"active\"><a class=\"js-scrollTo\" href=\"#page-home\">Accueil <span class=\"sr-only\">(current)</span></a></li>
                <li><a class=\"js-scrollTo\" href=\"#Psychomotricité\">Psychomotricité</a></li>
                <li><a class=\"js-scrollTo\" href=\"#psychomot\">Les psychomotriciennes</a></li>
                <li><a class=\"js-scrollTo\" href=\"#consultation\">Interventions</a></li>
                <li><a class=\"js-scrollTo\" href=\"#page-contact\">Contact</a></li>
                <li><a>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["psycho"], "tel", array()), "html", null, true);
            echo "</a></li>
            </ul>
        </div>
    </nav>

<!-- Fin Nav Bar -->


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
                        <a href=\"#Psychomotricité\">
                            <!-- <img src=\"http://www.designchemical.com/lab/jquery/demo/images/section_1.png\"></img>
                <h2>Lorem Ipsum</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p> -->
                            <div>
                                <h2 class=\"psyco_titre1\"> ";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["psycho"], "titledef", array()), "html", null, true);
            echo "</h2>
                                <img class=\"psyco_img1\" src=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/psychomot/img/2Psychomotricite.jpg"), "html", null, true);
            echo "\">
                                <p class=\"psyco_texte1\"> ";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["psycho"], "txtdef", array()), "html", null, true);
            echo " </p>
                            </div>
                            <div>
                                <!-- <img class=\"psyco_img1\" src=\"./img/SAM_2242-500_375.JPG\"> -->

                                <!-- <img class=\"psyco_img1\" src=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/psychomot/img/2Psychomotricite.jpg"), "html", null, true);
            echo "\"> -->
                            </div>
                        </a>
                    </div>
                </li>
                <li>
                    <div>
                        <a href=\"#Psychomotricité\">
                            <h2>";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($context["psycho"], "titleWho", array()), "html", null, true);
            echo "</h2>
                            <img class=\"psyco_img1\" src=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/psychomot/img/3Pourqui.jpg"), "html", null, true);
            echo "\">
                            <p>";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($context["psycho"], "txtWho", array()), "html", null, true);
            echo "</p>
                        </a>
                    </div>
                </li>
                <li>
                    <div>
                        <a href=\"#Psychomotricité\">
                            <h2>";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($context["psycho"], "titleWhy", array()), "html", null, true);
            echo "</h2>
                            <img class=\"psyco_img1\" src=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/psychomot/img/4Pourquoi.jpg"), "html", null, true);
            echo "\">
                            <p>";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute($context["psycho"], "txtWhy", array()), "html", null, true);
            echo "
                            </p>
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
            // line 113
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/psychomot/img/Psy2.jpg"), "html", null, true);
            echo "\" alt=\"Margaux Charrier\" />
                    <div class=\"border\">
                        <h3>";
            // line 115
            echo twig_escape_filter($this->env, $this->getAttribute($context["psycho"], "namePsy1", array()), "html", null, true);
            echo "</h3>
                        <h5>Psychomotricienne diplomée</h5>
                        <p>";
            // line 117
            echo twig_escape_filter($this->env, $this->getAttribute($context["psycho"], "txtPsy1", array()), "html", null, true);
            echo "</p>
                    </div>
                </div>
            </div>
            <div class=\"right col-xs-12 col-sm-6 col-md-6\">
                <div class=\"col-xs-12\">
                    <img src=\"";
            // line 123
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/psychomot/img/Psy1.jpg"), "html", null, true);
            echo "\" alt=\"Adeline Florentin\" />
                    <div class=\"border\">
                        <h3>";
            // line 125
            echo twig_escape_filter($this->env, $this->getAttribute($context["psycho"], "namePsy2", array()), "html", null, true);
            echo "</h3>
                        <h5>Psychomotricienne diplomée</h5>
                        <p>";
            // line 127
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
            // line 149
            echo twig_escape_filter($this->env, $this->getAttribute($context["psycho"], "titleConsult", array()), "html", null, true);
            echo "</h2>
                                    <p>";
            // line 150
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
            // line 161
            echo twig_escape_filter($this->env, $this->getAttribute($context["psycho"], "titleInterv", array()), "html", null, true);
            echo "</h2>
                                    <p>";
            // line 162
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
            // line 173
            echo twig_escape_filter($this->env, $this->getAttribute($context["psycho"], "titleBilan", array()), "html", null, true);
            echo "</h2>
                                    <p>";
            // line 174
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
            // line 195
            echo twig_escape_filter($this->env, $this->getAttribute($context["psycho"], "contactName", array()), "html", null, true);
            echo "</p>
                <p>";
            // line 196
            echo twig_escape_filter($this->env, $this->getAttribute($context["psycho"], "contactAddress", array()), "html", null, true);
            echo "</p>
                <p>";
            // line 197
            echo twig_escape_filter($this->env, $this->getAttribute($context["psycho"], "contactMail", array()), "html", null, true);
            echo "</p>
                <p>";
            // line 198
            echo twig_escape_filter($this->env, $this->getAttribute($context["psycho"], "contactTel", array()), "html", null, true);
            echo "</p>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['psycho'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 201
        echo "            <form action=\"";
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
                        <input class=\"form-control\" type=\"text\" value=\"ex : Prise de rendez-vous\" name=\"email\" id=\"example-text-input\">
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
        // line 248
        echo "



<!--<ul>
        <li>
            <a href=\"";
        // line 254
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("psycho_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>-->
";
        
        $__internal_fd5021f5ea30406daee6b3d7b276c0ff7bfddd12ba61dcd3bbc81e6f73107f3b->leave($__internal_fd5021f5ea30406daee6b3d7b276c0ff7bfddd12ba61dcd3bbc81e6f73107f3b_prof);

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
        return array (  386 => 254,  378 => 248,  328 => 201,  319 => 198,  315 => 197,  311 => 196,  307 => 195,  283 => 174,  279 => 173,  265 => 162,  261 => 161,  247 => 150,  243 => 149,  218 => 127,  213 => 125,  208 => 123,  199 => 117,  194 => 115,  189 => 113,  166 => 93,  162 => 92,  158 => 91,  148 => 84,  144 => 83,  140 => 82,  129 => 74,  121 => 69,  117 => 68,  113 => 67,  74 => 31,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
            <a class=\"navbar-brand\" href=\"#\">Logo</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav \">
                <li class=\"active\"><a class=\"js-scrollTo\" href=\"#page-home\">Accueil <span class=\"sr-only\">(current)</span></a></li>
                <li><a class=\"js-scrollTo\" href=\"#Psychomotricité\">Psychomotricité</a></li>
                <li><a class=\"js-scrollTo\" href=\"#psychomot\">Les psychomotriciennes</a></li>
                <li><a class=\"js-scrollTo\" href=\"#consultation\">Interventions</a></li>
                <li><a class=\"js-scrollTo\" href=\"#page-contact\">Contact</a></li>
                <li><a>{{ psycho.tel }}</a></li>
            </ul>
        </div>
    </nav>

<!-- Fin Nav Bar -->


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
                        <a href=\"#Psychomotricité\">
                            <!-- <img src=\"http://www.designchemical.com/lab/jquery/demo/images/section_1.png\"></img>
                <h2>Lorem Ipsum</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p> -->
                            <div>
                                <h2 class=\"psyco_titre1\"> {{ psycho.titledef }}</h2>
                                <img class=\"psyco_img1\" src=\"{{asset('bundles/psychomot/img/2Psychomotricite.jpg')}}\">
                                <p class=\"psyco_texte1\"> {{ psycho.txtdef }} </p>
                            </div>
                            <div>
                                <!-- <img class=\"psyco_img1\" src=\"./img/SAM_2242-500_375.JPG\"> -->

                                <!-- <img class=\"psyco_img1\" src=\"{{asset('bundles/psychomot/img/2Psychomotricite.jpg')}}\"> -->
                            </div>
                        </a>
                    </div>
                </li>
                <li>
                    <div>
                        <a href=\"#Psychomotricité\">
                            <h2>{{ psycho.titleWho }}</h2>
                            <img class=\"psyco_img1\" src=\"{{asset('bundles/psychomot/img/3Pourqui.jpg')}}\">
                            <p>{{ psycho.txtWho }}</p>
                        </a>
                    </div>
                </li>
                <li>
                    <div>
                        <a href=\"#Psychomotricité\">
                            <h2>{{ psycho.titleWhy }}</h2>
                            <img class=\"psyco_img1\" src=\"{{asset('bundles/psychomot/img/4Pourquoi.jpg')}}\">
                            <p>{{ psycho.txtWhy }}
                            </p>
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
                    <img src=\"{{asset('bundles/psychomot/img/Psy2.jpg') }}\" alt=\"Margaux Charrier\" />
                    <div class=\"border\">
                        <h3>{{ psycho.namePsy1 }}</h3>
                        <h5>Psychomotricienne diplomée</h5>
                        <p>{{ psycho.txtPsy1 }}</p>
                    </div>
                </div>
            </div>
            <div class=\"right col-xs-12 col-sm-6 col-md-6\">
                <div class=\"col-xs-12\">
                    <img src=\"{{asset('bundles/psychomot/img/Psy1.jpg') }}\" alt=\"Adeline Florentin\" />
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
                <p>{{ psycho.contactMail }}</p>
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
                        <input class=\"form-control\" type=\"text\" value=\"ex : Prise de rendez-vous\" name=\"email\" id=\"example-text-input\">
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
{% endblock %}", "PsychoBundle:psycho:index.html.twig", "/var/www/html/Psychomot/src/PsychoBundle/Resources/views/psycho/index.html.twig");
    }
}
