<?php

/* PsychoBundle:psycho:edit.html.twig */
class __TwigTemplate_2b6fa0d830d2e9df21517146961b0394a77f41ce35c5327c7251900819fddc3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "PsychoBundle:psycho:edit.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b5bbec40c1ea2d047dd891a106dadc8c805a303706d14f2b97160a7c2aa52588 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5bbec40c1ea2d047dd891a106dadc8c805a303706d14f2b97160a7c2aa52588->enter($__internal_b5bbec40c1ea2d047dd891a106dadc8c805a303706d14f2b97160a7c2aa52588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PsychoBundle:psycho:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5bbec40c1ea2d047dd891a106dadc8c805a303706d14f2b97160a7c2aa52588->leave($__internal_b5bbec40c1ea2d047dd891a106dadc8c805a303706d14f2b97160a7c2aa52588_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2885cf09a364b8ad6a1bfca0bbe90c495b8c549a53a5fd4725be8f9a9b332974 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2885cf09a364b8ad6a1bfca0bbe90c495b8c549a53a5fd4725be8f9a9b332974->enter($__internal_2885cf09a364b8ad6a1bfca0bbe90c495b8c549a53a5fd4725be8f9a9b332974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "PsychoBundle:psycho:edit.html.twig"));

        // line 3
        echo "    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
    <link href=\"http://www.cssscript.com/wp-includes/css/sticky.css\" rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/psycho/css/style-edit.css"), "html", null, true);
        echo "\">

";
        
        $__internal_2885cf09a364b8ad6a1bfca0bbe90c495b8c549a53a5fd4725be8f9a9b332974->leave($__internal_2885cf09a364b8ad6a1bfca0bbe90c495b8c549a53a5fd4725be8f9a9b332974_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_bcbd5ee47176288bfa6c6997bea7c19ca472105f3427b8658bd61e27263ba64d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcbd5ee47176288bfa6c6997bea7c19ca472105f3427b8658bd61e27263ba64d->enter($__internal_bcbd5ee47176288bfa6c6997bea7c19ca472105f3427b8658bd61e27263ba64d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "PsychoBundle:psycho:edit.html.twig"));

        // line 10
        echo "
    ";
        // line 11
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "



    <!-- Début Nav Bar -->

    <nav class=\"navbar navbar-default navbar-fixed-top\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\"><img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/psycho/img/logo.png"), "html", null, true);
        echo "\" class= \"\" alt=\"Logo psychomotricienne\"/> </a>

        </div>
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav \">
                <li class=\"active\"><a class=\"js-scrollTo\" href=\"#page-home\">Accueil <span class=\"sr-only\">(current)</span></a></li>
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Psychomotricité<span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                        <li><a class=\"js-scrollTo\" href=\"#Psychomotricité\">La psychomotricité</a></li>
                        <li><a class=\"js-scrollTo\" href=\"#who\">Pour Qui?</a></li>
                        <li><a class=\"js-scrollTo\" href=\"#why\">Pour Quoi?</a></li>
                    </ul>
                </li>
                <li><a class=\"js-scrollTo\" href=\"#psychomot\">Les psychomotriciennes</a></li>
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Consultations<span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                        <li><a class=\"js-scrollTo\" href=\"#consultation\">Les consultations</a></li>
                        <li><a class=\"js-scrollTo\" href=\"#atelier\">Atelier de prevention</a></li>
                        <li><a class=\"js-scrollTo\" href=\"#bilan\">Bilan et tarifs</a></li>
                    </ul>
                </li>
                <li><a class=\"js-scrollTo\" href=\"#page-contact\">Contact</a></li>
                <li><input type=\"submit\" value=\"Mise à jour\" class=\"MiseAJour\"/></li>
                <a class=\"telephone\" >";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psycho"]) ? $context["psycho"] : $this->getContext($context, "psycho")), "tel", array()), "html", null, true);
        echo "</a>
            </ul>
            <div>
                ";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tel", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                ";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tel", array()), 'errors');
        echo "
            </div>
        </div>
    </nav>

    <!-- Fin Nav Bar -->

    <br/><br/>
    <br/><br/>

    <!--Début Psychomotricité-->

    <div id=\"Psychomotricité\">
        <div class=\"accordion1\">
            <ul>
                <li>
                    <div id=\"Psychomotricité\">
                        <h2 class=\"psyco_titre1\">";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psycho"]) ? $context["psycho"] : $this->getContext($context, "psycho")), "titledef", array()), "html", null, true);
        echo "</h2>
                        ";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titledef", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titledef", array()), 'errors');
        echo "

                        <p class=\"psyco_texte1\">";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psycho"]) ? $context["psycho"] : $this->getContext($context, "psycho")), "txtdef", array()), "html", null, true);
        echo " </p>
                        ";
        // line 76
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "txtdef", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "txtdef", array()), 'errors');
        echo "
                    </div>
                    <div>
                        <img src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/uploads/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psycho"]) ? $context["psycho"] : $this->getContext($context, "psycho")), "image1", array()), "html", null, true);
        echo "\">
                        ";
        // line 82
        echo "                        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file1", array()), 'widget');
        echo "
                        ";
        // line 83
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file1", array()), 'errors');
        echo "
                        ";
        // line 84
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image1", array()), 'widget');
        echo "
                        ";
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image1", array()), 'errors');
        echo "
                    </div>
                </li>
                <li id=\"who\">
                    <div>
                        <h2>";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psycho"]) ? $context["psycho"] : $this->getContext($context, "psycho")), "titleWho", array()), "html", null, true);
        echo "</h2>
                        ";
        // line 91
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titleWho", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 92
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titleWho", array()), 'errors');
        echo "

                        <p>";
        // line 94
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psycho"]) ? $context["psycho"] : $this->getContext($context, "psycho")), "txtWho", array()), "html", null, true);
        echo "</p>
                        ";
        // line 95
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "txtWho", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 96
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "txtWho", array()), 'errors');
        echo "
                    </div>
                    <img src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/uploads/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psycho"]) ? $context["psycho"] : $this->getContext($context, "psycho")), "image2", array()), "html", null, true);
        echo "\">
                    ";
        // line 99
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), "file2", array()), "vars", array()), "label", array()), "html", null, true);
        echo "
                    ";
        // line 100
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file2", array()), 'widget');
        echo "
                    ";
        // line 101
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file2", array()), 'errors');
        echo "
                    ";
        // line 102
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image2", array()), 'widget');
        echo "
                    ";
        // line 103
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image2", array()), 'errors');
        echo "
                </li>
                <li id=\"why\">
                    <div>
                        <h2>";
        // line 107
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psycho"]) ? $context["psycho"] : $this->getContext($context, "psycho")), "titleWhy", array()), "html", null, true);
        echo "</h2>
                        ";
        // line 108
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titleWhy", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 109
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titleWhy", array()), 'errors');
        echo "

                        <p>";
        // line 111
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psycho"]) ? $context["psycho"] : $this->getContext($context, "psycho")), "txtWhy", array()), "html", null, true);
        echo "</p>
                        ";
        // line 112
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "txtWhy", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 113
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "txtWhy", array()), 'errors');
        echo "
                    </div>
                    <div>
                        <img src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/uploads/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psycho"]) ? $context["psycho"] : $this->getContext($context, "psycho")), "image3", array()), "html", null, true);
        echo "\">
                        ";
        // line 117
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), "file3", array()), "vars", array()), "label", array()), "html", null, true);
        echo "
                        ";
        // line 118
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file3", array()), 'widget');
        echo "
                        ";
        // line 119
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file3", array()), 'errors');
        echo "
                        ";
        // line 120
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image3", array()), 'widget');
        echo "
                        ";
        // line 121
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image3", array()), 'errors');
        echo "
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <br/>
    <br/>

    <!--Fin Psychomotricité-->




    <!--Début Psychomotriciennes-->

    <div class=\"row\">
        <div id=\"psychomot\">
            <H3>";
        // line 139
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psycho"]) ? $context["psycho"] : $this->getContext($context, "psycho")), "titlePsy", array()), "html", null, true);
        echo "</H3>
            <div class=\"titrePsycholog\">
                ";
        // line 141
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titlePsy", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                ";
        // line 142
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titlePsy", array()), 'errors');
        echo "
            </div>
            <div class=\"fond\">
                <div class=\"left col-xs-12 col-sm-6 col-md-6\">
                    <div class=\"col-xs-12\">
                        <div>
                            <img src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/uploads/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psycho"]) ? $context["psycho"] : $this->getContext($context, "psycho")), "image4", array()), "html", null, true);
        echo "\">
                            ";
        // line 149
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), "file4", array()), "vars", array()), "label", array()), "html", null, true);
        echo "
                            ";
        // line 150
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file4", array()), 'widget');
        echo "
                            ";
        // line 151
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file4", array()), 'errors');
        echo "
                            ";
        // line 152
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image4", array()), 'widget');
        echo "
                            ";
        // line 153
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image4", array()), 'errors');
        echo "
                        </div>
                        <div class=\"border\">
                            <h3>";
        // line 156
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psycho"]) ? $context["psycho"] : $this->getContext($context, "psycho")), "namePsy1", array()), "html", null, true);
        echo "</h3>
                            <div>
                                ";
        // line 158
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "namePsy1", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                ";
        // line 159
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "namePsy1", array()), 'errors');
        echo "
                            </div>
                            <h5>Psychomotricienne diplomée</h5>
                            <p>";
        // line 162
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psycho"]) ? $context["psycho"] : $this->getContext($context, "psycho")), "txtPsy1", array()), "html", null, true);
        echo "</p>
                            <div>
                                ";
        // line 164
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "txtPsy1", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                ";
        // line 165
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "txtPsy1", array()), 'errors');
        echo "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"right col-xs-12 col-sm-6 col-md-6\">
                    <div class=\"col-xs-12\">
                        <div>
                            <img src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/uploads/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psycho"]) ? $context["psycho"] : $this->getContext($context, "psycho")), "image5", array()), "html", null, true);
        echo "\">
                            ";
        // line 174
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), "file5", array()), "vars", array()), "label", array()), "html", null, true);
        echo "
                            ";
        // line 175
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file5", array()), 'widget');
        echo "
                            ";
        // line 176
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file5", array()), 'errors');
        echo "
                            ";
        // line 177
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image5", array()), 'widget');
        echo "
                            ";
        // line 178
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image5", array()), 'errors');
        echo "
                        </div>
                        <div class=\"border\">
                            <h3>";
        // line 181
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psycho"]) ? $context["psycho"] : $this->getContext($context, "psycho")), "namePsy2", array()), "html", null, true);
        echo "</h3>
                            <div>
                                ";
        // line 183
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "namePsy2", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                ";
        // line 184
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "namePsy2", array()), 'errors');
        echo "
                            </div>
                            <h5>Psychomotricienne diplomée</h5>
                            <p>";
        // line 187
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psycho"]) ? $context["psycho"] : $this->getContext($context, "psycho")), "txtPsy2", array()), "html", null, true);
        echo "</p>
                            <div>
                                ";
        // line 189
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "txtPsy2", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                ";
        // line 190
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "txtPsy2", array()), 'errors');
        echo "
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Fin Psychomotriciennes-->




    <!--Début Intervention-->

        <div id=\"consultation\">
            <div class=\"accordion\">
                <ul>
                    <li>
                        <div>
                            <h2>";
        // line 211
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psycho"]) ? $context["psycho"] : $this->getContext($context, "psycho")), "titleConsult", array()), "html", null, true);
        echo "</h2>
                            ";
        // line 212
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titleConsult", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            ";
        // line 213
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titleConsult", array()), 'errors');
        echo "
                            <p>";
        // line 214
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psycho"]) ? $context["psycho"] : $this->getContext($context, "psycho")), "txtConsult", array()), "html", null, true);
        echo "</p>
                            ";
        // line 215
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "txtConsult", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            ";
        // line 216
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "txtConsult", array()), 'errors');
        echo "
                        </div>
                    </li>
                    <li id=\"atelier\">
                        <div>
                            <h2>";
        // line 221
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psycho"]) ? $context["psycho"] : $this->getContext($context, "psycho")), "titleInterv", array()), "html", null, true);
        echo "</h2>
                            ";
        // line 222
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titleInterv", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            ";
        // line 223
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titleInterv", array()), 'errors');
        echo "
                            <p>";
        // line 224
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psycho"]) ? $context["psycho"] : $this->getContext($context, "psycho")), "txtInterv", array()), "html", null, true);
        echo "</p>
                            ";
        // line 225
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "txtInterv", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            ";
        // line 226
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "txtInterv", array()), 'errors');
        echo "
                        </div>
                    </li>
                    <li id=\"bilan\">
                       <div>
                           <h2>";
        // line 231
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psycho"]) ? $context["psycho"] : $this->getContext($context, "psycho")), "titleBilan", array()), "html", null, true);
        echo "</h2>
                           ";
        // line 232
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titleBilan", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                           ";
        // line 233
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titleBilan", array()), 'errors');
        echo "
                           <p>";
        // line 234
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psycho"]) ? $context["psycho"] : $this->getContext($context, "psycho")), "txtBilan", array()), "html", null, true);
        echo "</p>
                           ";
        // line 235
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "txtBilan", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                           ";
        // line 236
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "txtBilan", array()), 'errors');
        echo "
                        </div>
                    </li>
                </ul>
            </div>
        </div>

    <!--Fin Intervention-->




    <!--Début Contact-->

    <div class=\"row\">
        <div id=\"page-contact\">
            <div class=\"essai1 border col-xs-12 col-sm-5\">
                <h3>Nous contacter</h3>
                <div class=\"adress\">
                    <p>";
        // line 255
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psycho"]) ? $context["psycho"] : $this->getContext($context, "psycho")), "contactName", array()), "html", null, true);
        echo "</p>
                    <div>
                        ";
        // line 257
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contactName", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 258
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contactName", array()), 'errors');
        echo "
                    </div>
                    <p>";
        // line 260
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psycho"]) ? $context["psycho"] : $this->getContext($context, "psycho")), "contactAddress", array()), "html", null, true);
        echo "</p>
                    <div>
                        ";
        // line 262
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contactAddress", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 263
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contactAddress", array()), 'errors');
        echo "
                    </div>
                    <p>";
        // line 265
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psycho"]) ? $context["psycho"] : $this->getContext($context, "psycho")), "contactTel", array()), "html", null, true);
        echo "</p>
                    <div>
                        ";
        // line 267
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contactTel", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 268
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contactTel", array()), 'errors');
        echo "
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br/>
    <br/>
    <!--Fin Contact-->




    <div class=\"row\">
        <div class=\"col-xs-2\">
            <li>
                <a href=\"";
        // line 284
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("psycho_index");
        echo "\">Back to the list</a>
            </li>
        </div>

        <div class=\"col-xs-1\">
            ";
        // line 289
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psycho"]) ? $context["psycho"] : $this->getContext($context, "psycho")), "image", array()), "html", null, true);
        echo "
            <input type=\"submit\" value=\"Edit\" />
            ";
        // line 291
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        </div>

        <div class=\"col-xs-1\">
            ";
        // line 295
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
            <input type=\"submit\" value=\"Delete\">
            ";
        // line 297
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </div>
    </div>



";
        
        $__internal_bcbd5ee47176288bfa6c6997bea7c19ca472105f3427b8658bd61e27263ba64d->leave($__internal_bcbd5ee47176288bfa6c6997bea7c19ca472105f3427b8658bd61e27263ba64d_prof);

    }

    public function getTemplateName()
    {
        return "PsychoBundle:psycho:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  654 => 297,  649 => 295,  642 => 291,  637 => 289,  629 => 284,  610 => 268,  606 => 267,  601 => 265,  596 => 263,  592 => 262,  587 => 260,  582 => 258,  578 => 257,  573 => 255,  551 => 236,  547 => 235,  543 => 234,  539 => 233,  535 => 232,  531 => 231,  523 => 226,  519 => 225,  515 => 224,  511 => 223,  507 => 222,  503 => 221,  495 => 216,  491 => 215,  487 => 214,  483 => 213,  479 => 212,  475 => 211,  451 => 190,  447 => 189,  442 => 187,  436 => 184,  432 => 183,  427 => 181,  421 => 178,  417 => 177,  413 => 176,  409 => 175,  405 => 174,  399 => 173,  388 => 165,  384 => 164,  379 => 162,  373 => 159,  369 => 158,  364 => 156,  358 => 153,  354 => 152,  350 => 151,  346 => 150,  342 => 149,  336 => 148,  327 => 142,  323 => 141,  318 => 139,  297 => 121,  293 => 120,  289 => 119,  285 => 118,  281 => 117,  275 => 116,  269 => 113,  265 => 112,  261 => 111,  256 => 109,  252 => 108,  248 => 107,  241 => 103,  237 => 102,  233 => 101,  229 => 100,  225 => 99,  219 => 98,  214 => 96,  210 => 95,  206 => 94,  201 => 92,  197 => 91,  193 => 90,  185 => 85,  181 => 84,  177 => 83,  172 => 82,  166 => 80,  160 => 77,  156 => 76,  152 => 75,  147 => 73,  143 => 72,  139 => 71,  119 => 54,  115 => 53,  109 => 50,  81 => 25,  64 => 11,  61 => 10,  55 => 9,  45 => 5,  41 => 3,  35 => 2,  11 => 1,);
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
{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
    <link href=\"http://www.cssscript.com/wp-includes/css/sticky.css\" rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/psycho/css/style-edit.css') }}\">

{% endblock %}

{% block body %}

    {{ form_start(form) }}



    <!-- Début Nav Bar -->

    <nav class=\"navbar navbar-default navbar-fixed-top\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\"><img src=\"{{ asset('bundles/psycho/img/logo.png') }}\" class= \"\" alt=\"Logo psychomotricienne\"/> </a>

        </div>
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav \">
                <li class=\"active\"><a class=\"js-scrollTo\" href=\"#page-home\">Accueil <span class=\"sr-only\">(current)</span></a></li>
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Psychomotricité<span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                        <li><a class=\"js-scrollTo\" href=\"#Psychomotricité\">La psychomotricité</a></li>
                        <li><a class=\"js-scrollTo\" href=\"#who\">Pour Qui?</a></li>
                        <li><a class=\"js-scrollTo\" href=\"#why\">Pour Quoi?</a></li>
                    </ul>
                </li>
                <li><a class=\"js-scrollTo\" href=\"#psychomot\">Les psychomotriciennes</a></li>
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Consultations<span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                        <li><a class=\"js-scrollTo\" href=\"#consultation\">Les consultations</a></li>
                        <li><a class=\"js-scrollTo\" href=\"#atelier\">Atelier de prevention</a></li>
                        <li><a class=\"js-scrollTo\" href=\"#bilan\">Bilan et tarifs</a></li>
                    </ul>
                </li>
                <li><a class=\"js-scrollTo\" href=\"#page-contact\">Contact</a></li>
                <li><input type=\"submit\" value=\"Mise à jour\" class=\"MiseAJour\"/></li>
                <a class=\"telephone\" >{{ psycho.tel }}</a>
            </ul>
            <div>
                {{ form_widget(form.tel, {'attr': {'class': 'form-control'}}) }}
                {{ form_errors(form.tel) }}
            </div>
        </div>
    </nav>

    <!-- Fin Nav Bar -->

    <br/><br/>
    <br/><br/>

    <!--Début Psychomotricité-->

    <div id=\"Psychomotricité\">
        <div class=\"accordion1\">
            <ul>
                <li>
                    <div id=\"Psychomotricité\">
                        <h2 class=\"psyco_titre1\">{{ psycho.titledef }}</h2>
                        {{ form_widget(form.titledef, {'attr': {'class': 'form-control'}}) }}
                        {{ form_errors(form.titledef) }}

                        <p class=\"psyco_texte1\">{{ psycho.txtdef }} </p>
                        {{ form_widget(form.txtdef, {'attr': {'class': 'form-control'}}) }}
                        {{ form_errors(form.txtdef) }}
                    </div>
                    <div>
                        <img src=\"{{ app.request.basepath }}/uploads/{{ psycho.image1 }}\">
                        {#{{form.children.file1.vars.label}}#}
                        {{ form_widget(form.file1) }}
                        {{ form_errors(form.file1) }}
                        {{ form_widget(form.image1) }}
                        {{ form_errors(form.image1) }}
                    </div>
                </li>
                <li id=\"who\">
                    <div>
                        <h2>{{ psycho.titleWho }}</h2>
                        {{ form_widget(form.titleWho, {'attr': {'class': 'form-control'}}) }}
                        {{ form_errors(form.titleWho) }}

                        <p>{{ psycho.txtWho }}</p>
                        {{ form_widget(form.txtWho, {'attr': {'class': 'form-control'}}) }}
                        {{ form_errors(form.txtWho) }}
                    </div>
                    <img src=\"{{ app.request.basepath }}/uploads/{{ psycho.image2 }}\">
                    {{form.children.file2.vars.label}}
                    {{ form_widget(form.file2) }}
                    {{ form_errors(form.file2) }}
                    {{ form_widget(form.image2) }}
                    {{ form_errors(form.image2) }}
                </li>
                <li id=\"why\">
                    <div>
                        <h2>{{ psycho.titleWhy }}</h2>
                        {{ form_widget(form.titleWhy, {'attr': {'class': 'form-control'}}) }}
                        {{ form_errors(form.titleWhy) }}

                        <p>{{ psycho.txtWhy }}</p>
                        {{ form_widget(form.txtWhy, {'attr': {'class': 'form-control'}}) }}
                        {{ form_errors(form.txtWhy) }}
                    </div>
                    <div>
                        <img src=\"{{ app.request.basepath }}/uploads/{{ psycho.image3 }}\">
                        {{form.children.file3.vars.label}}
                        {{ form_widget(form.file3) }}
                        {{ form_errors(form.file3) }}
                        {{ form_widget(form.image3) }}
                        {{ form_errors(form.image3) }}
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <br/>
    <br/>

    <!--Fin Psychomotricité-->




    <!--Début Psychomotriciennes-->

    <div class=\"row\">
        <div id=\"psychomot\">
            <H3>{{ psycho.titlePsy }}</H3>
            <div class=\"titrePsycholog\">
                {{ form_widget(form.titlePsy, {'attr': {'class': 'form-control'}}) }}
                {{ form_errors(form.titlePsy) }}
            </div>
            <div class=\"fond\">
                <div class=\"left col-xs-12 col-sm-6 col-md-6\">
                    <div class=\"col-xs-12\">
                        <div>
                            <img src=\"{{ app.request.basepath }}/uploads/{{ psycho.image4 }}\">
                            {{form.children.file4.vars.label}}
                            {{ form_widget(form.file4) }}
                            {{ form_errors(form.file4) }}
                            {{ form_widget(form.image4) }}
                            {{ form_errors(form.image4) }}
                        </div>
                        <div class=\"border\">
                            <h3>{{ psycho.namePsy1 }}</h3>
                            <div>
                                {{ form_widget(form.namePsy1, {'attr': {'class': 'form-control'}}) }}
                                {{ form_errors(form.namePsy1) }}
                            </div>
                            <h5>Psychomotricienne diplomée</h5>
                            <p>{{ psycho.txtPsy1 }}</p>
                            <div>
                                {{ form_widget(form.txtPsy1, {'attr': {'class': 'form-control'}}) }}
                                {{ form_errors(form.txtPsy1) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"right col-xs-12 col-sm-6 col-md-6\">
                    <div class=\"col-xs-12\">
                        <div>
                            <img src=\"{{ app.request.basepath }}/uploads/{{ psycho.image5 }}\">
                            {{form.children.file5.vars.label}}
                            {{ form_widget(form.file5) }}
                            {{ form_errors(form.file5) }}
                            {{ form_widget(form.image5) }}
                            {{ form_errors(form.image5) }}
                        </div>
                        <div class=\"border\">
                            <h3>{{ psycho.namePsy2 }}</h3>
                            <div>
                                {{ form_widget(form.namePsy2, {'attr': {'class': 'form-control'}}) }}
                                {{ form_errors(form.namePsy2) }}
                            </div>
                            <h5>Psychomotricienne diplomée</h5>
                            <p>{{ psycho.txtPsy2 }}</p>
                            <div>
                                {{ form_widget(form.txtPsy2, {'attr': {'class': 'form-control'}}) }}
                                {{ form_errors(form.txtPsy2) }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Fin Psychomotriciennes-->




    <!--Début Intervention-->

        <div id=\"consultation\">
            <div class=\"accordion\">
                <ul>
                    <li>
                        <div>
                            <h2>{{ psycho.titleConsult }}</h2>
                            {{ form_widget(form.titleConsult, {'attr': {'class': 'form-control'}}) }}
                            {{ form_errors(form.titleConsult) }}
                            <p>{{ psycho.txtConsult }}</p>
                            {{ form_widget(form.txtConsult, {'attr': {'class': 'form-control'}}) }}
                            {{ form_errors(form.txtConsult) }}
                        </div>
                    </li>
                    <li id=\"atelier\">
                        <div>
                            <h2>{{ psycho.titleInterv }}</h2>
                            {{ form_widget(form.titleInterv, {'attr': {'class': 'form-control'}}) }}
                            {{ form_errors(form.titleInterv) }}
                            <p>{{ psycho.txtInterv }}</p>
                            {{ form_widget(form.txtInterv, {'attr': {'class': 'form-control'}}) }}
                            {{ form_errors(form.txtInterv) }}
                        </div>
                    </li>
                    <li id=\"bilan\">
                       <div>
                           <h2>{{ psycho.titleBilan }}</h2>
                           {{ form_widget(form.titleBilan, {'attr': {'class': 'form-control'}}) }}
                           {{ form_errors(form.titleBilan) }}
                           <p>{{ psycho.txtBilan }}</p>
                           {{ form_widget(form.txtBilan, {'attr': {'class': 'form-control'}}) }}
                           {{ form_errors(form.txtBilan) }}
                        </div>
                    </li>
                </ul>
            </div>
        </div>

    <!--Fin Intervention-->




    <!--Début Contact-->

    <div class=\"row\">
        <div id=\"page-contact\">
            <div class=\"essai1 border col-xs-12 col-sm-5\">
                <h3>Nous contacter</h3>
                <div class=\"adress\">
                    <p>{{ psycho.contactName }}</p>
                    <div>
                        {{ form_widget(form.contactName, {'attr': {'class': 'form-control'}}) }}
                        {{ form_errors(form.contactName) }}
                    </div>
                    <p>{{ psycho.contactAddress }}</p>
                    <div>
                        {{ form_widget(form.contactAddress, {'attr': {'class': 'form-control'}}) }}
                        {{ form_errors(form.contactAddress) }}
                    </div>
                    <p>{{ psycho.contactTel }}</p>
                    <div>
                        {{ form_widget(form.contactTel, {'attr': {'class': 'form-control'}}) }}
                        {{ form_errors(form.contactTel) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br/>
    <br/>
    <!--Fin Contact-->




    <div class=\"row\">
        <div class=\"col-xs-2\">
            <li>
                <a href=\"{{ path('psycho_index') }}\">Back to the list</a>
            </li>
        </div>

        <div class=\"col-xs-1\">
            {{ psycho.image }}
            <input type=\"submit\" value=\"Edit\" />
            {{ form_end(form) }}
        </div>

        <div class=\"col-xs-1\">
            {{ form_start(delete_form) }}
            <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </div>
    </div>



{% endblock %}
", "PsychoBundle:psycho:edit.html.twig", "/Users/Cendrillon/Sites/Psychomot/src/PsychoBundle/Resources/views/psycho/edit.html.twig");
    }
}
