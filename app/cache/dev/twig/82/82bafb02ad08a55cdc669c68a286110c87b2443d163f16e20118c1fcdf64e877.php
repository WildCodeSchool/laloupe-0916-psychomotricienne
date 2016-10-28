<?php

/* base.html.twig */
class __TwigTemplate_8a57e5fab2848250b9aa2ff65dedc11f5ad80d484f387ab5f0fa8bcd89be8d9a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fd11a64b48e54de19dd9b0f75febfa6988b7a0252ef8b44dd1eb37d026591d5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd11a64b48e54de19dd9b0f75febfa6988b7a0252ef8b44dd1eb37d026591d5e->enter($__internal_fd11a64b48e54de19dd9b0f75febfa6988b7a0252ef8b44dd1eb37d026591d5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

<head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "</head>


";
        // line 17
        $this->displayBlock('body', $context, $blocks);
        // line 68
        echo "

";
        // line 70
        $this->displayBlock('javascripts', $context, $blocks);
        // line 86
        echo "
</body>

</html>
";
        
        $__internal_fd11a64b48e54de19dd9b0f75febfa6988b7a0252ef8b44dd1eb37d026591d5e->leave($__internal_fd11a64b48e54de19dd9b0f75febfa6988b7a0252ef8b44dd1eb37d026591d5e_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_0a34c5f2978ffa4f5cc747012c2d08db4925e6b00b782204053975f9395a5b0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a34c5f2978ffa4f5cc747012c2d08db4925e6b00b782204053975f9395a5b0d->enter($__internal_0a34c5f2978ffa4f5cc747012c2d08db4925e6b00b782204053975f9395a5b0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        echo "Psychomotriciennes_Le_Mans";
        
        $__internal_0a34c5f2978ffa4f5cc747012c2d08db4925e6b00b782204053975f9395a5b0d->leave($__internal_0a34c5f2978ffa4f5cc747012c2d08db4925e6b00b782204053975f9395a5b0d_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4e2f24e00ec594ab6e5181494308fe1e589ae5feae2afe9fe8f572c177c0b692 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e2f24e00ec594ab6e5181494308fe1e589ae5feae2afe9fe8f572c177c0b692->enter($__internal_4e2f24e00ec594ab6e5181494308fe1e589ae5feae2afe9fe8f572c177c0b692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        // line 9
        echo "    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
    <link href=\"http://www.cssscript.com/wp-includes/css/sticky.css\" rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/psycho/css/style.css"), "html", null, true);
        echo "\">
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    ";
        
        $__internal_4e2f24e00ec594ab6e5181494308fe1e589ae5feae2afe9fe8f572c177c0b692->leave($__internal_4e2f24e00ec594ab6e5181494308fe1e589ae5feae2afe9fe8f572c177c0b692_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_806d4366c8b2e80b98f7d2d265ce6b56d9af1fed768f134acdbd273df8dd5633 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_806d4366c8b2e80b98f7d2d265ce6b56d9af1fed768f134acdbd273df8dd5633->enter($__internal_806d4366c8b2e80b98f7d2d265ce6b56d9af1fed768f134acdbd273df8dd5633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        // line 18
        echo "<body data-spy=\"scroll\" data-target=\".navbar\" data-offset=\"150\">



<!--Début footer-->

<footer>
    <p>
        <a data-toggle=\"modal\" data-target=\"#mentionsLeg\" class=\"ml\">Mentions Légales</a> -
        <a data-toggle=\"modal\" data-target=\"#eleves\" class=\"ml\">Site créé par les élèves de la Wild Code School</a>
    </p>
    <div id=\"mentionsLeg\" class=\"modal fade\" role=\"dialog\">
        <div class=\"modal-dialog\">
            <!-- Modal content-->
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    <h4 class=\"modal-title\">Mentions Légales</h4>
                </div>
                <div class=\"modal-body1\">
                    <p>Pour une société : raison sociale, forme juridique, adresse de l'établissement ou du siège social (et non pas une simple boîte postale), montant du capital social adresse de courrier électronique et numéro de téléphone</p>
                    <p>Pour une profession réglementée : référence aux règles professionnelles applicables et au titre professionnel nom et adresse de l'autorité ayant délivré l'autorisation d'exercer quand celle-ci est nécessaire nom du responsable de la publication coordonnées de l'hébergeur du site : nom, dénomination ou raison sociale, adresse et numéro de téléphone pour un site marchand, conditions générales de vente (CGV) : prix (exprimé en euros et TTC), frais et date de livraison, modalité de paiement, service après-vente, droit de rétractation, durée de l'offre, coût de la technique de communication à distance numéro de déclaration simplifiée Cnil, dans le cas de collecte de données sur les clients (non obligatoire, mais recommandé).</p>
                    <p>Avant de déposer ou lire un cookie, les éditeurs de sites ou d'applications doivent : informer les internautes de la finalité des cookies, obtenir leur consentement, fournir aux internautes un moyen de les refuser.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div id=\"eleves\" class=\"modal fade\" role=\"dialog\">
        <div class=\"modal-dialog\">
            <!-- Modal content-->
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    <img src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/psycho/img/logoWCS.jpg"), "html", null, true);
        echo "\" alt=\"Logo Wild Code School\" class=\"wcs\" >
                </div>
                <div class=\"modal-body\">
                    <p class=\"alert alert-info\">Site créé par les élèves de la Wild Code School</p>
                    <p>Ludovic QUOUILLAULT - <a href=\"https://www.linkedin.com/in/ludovic-quouillault-787914125?authType=NAME_SEARCH&authToken=GvDH&locale=fr_FR&trk=tyah&trkInfo=clickedVertical%3Amynetwork%2CclickedEntityId%3A518843479%2CauthType%3ANAME_SEARCH%2Cidx%3A1-1-1%2CtarId%3A1475741721460%2Ctas%3Alu\" class=\"lienLink\">Lien Linkedin</a></p>
                    <p>Florian GALERNE - <a href=\"https://www.linkedin.com/in/florian-galerne-610525114?authType=NAME_SEARCH&authToken=inXW&locale=fr_FR&trk=tyah&trkInfo=clickedVertical%3Amynetwork%2CclickedEntityId%3A479052588%2CauthType%3ANAME_SEARCH%2Cidx%3A1-1-1%2CtarId%3A1475741876604%2Ctas%3AFlori\" class=\"lienLink\">Lien Linkedin</a></p>
                    <p>Sylvie RETAT - <a href=\"https://fr.linkedin.com/in/sylvie-rétat-66724bb0\" class=\"lienLink\">Lien Linkedin</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>

<!--Fin footer-->

";
        
        $__internal_806d4366c8b2e80b98f7d2d265ce6b56d9af1fed768f134acdbd273df8dd5633->leave($__internal_806d4366c8b2e80b98f7d2d265ce6b56d9af1fed768f134acdbd273df8dd5633_prof);

    }

    // line 70
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e9ce809ac8f573e3fb3929c54b05b43b091e080c5d1c27ebc065dd07dcf7c198 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9ce809ac8f573e3fb3929c54b05b43b091e080c5d1c27ebc065dd07dcf7c198->enter($__internal_e9ce809ac8f573e3fb3929c54b05b43b091e080c5d1c27ebc065dd07dcf7c198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        // line 71
        echo "<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
<script src=\"https://use.fontawesome.com/fafce886a9.js\"></script>

<script>
    \$(document).ready(function() {
        \$('.js-scrollTo').on('click', function() { // Au clic sur un élément
            var page = \$(this).attr('href'); // Page cible
            var speed = 1000; // Durée de l'animation (en ms)
            \$('html, body').animate( { scrollTop: \$(page).offset().top }, speed ); // Go
            return false;
        });
    });
</script>
";
        
        $__internal_e9ce809ac8f573e3fb3929c54b05b43b091e080c5d1c27ebc065dd07dcf7c198->leave($__internal_e9ce809ac8f573e3fb3929c54b05b43b091e080c5d1c27ebc065dd07dcf7c198_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  170 => 71,  164 => 70,  141 => 52,  105 => 18,  99 => 17,  90 => 12,  86 => 11,  82 => 9,  76 => 8,  64 => 6,  53 => 86,  51 => 70,  47 => 68,  45 => 17,  40 => 14,  38 => 8,  33 => 6,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>

<head>
    <meta charset=\"UTF-8\" />
    <title>{% block title %}Psychomotriciennes_Le_Mans{% endblock %}</title>

    {% block stylesheets %}
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
    <link href=\"http://www.cssscript.com/wp-includes/css/sticky.css\" rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/psycho/css/style.css') }}\">
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    {% endblock %}
</head>


{% block body %}
<body data-spy=\"scroll\" data-target=\".navbar\" data-offset=\"150\">



<!--Début footer-->

<footer>
    <p>
        <a data-toggle=\"modal\" data-target=\"#mentionsLeg\" class=\"ml\">Mentions Légales</a> -
        <a data-toggle=\"modal\" data-target=\"#eleves\" class=\"ml\">Site créé par les élèves de la Wild Code School</a>
    </p>
    <div id=\"mentionsLeg\" class=\"modal fade\" role=\"dialog\">
        <div class=\"modal-dialog\">
            <!-- Modal content-->
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    <h4 class=\"modal-title\">Mentions Légales</h4>
                </div>
                <div class=\"modal-body1\">
                    <p>Pour une société : raison sociale, forme juridique, adresse de l'établissement ou du siège social (et non pas une simple boîte postale), montant du capital social adresse de courrier électronique et numéro de téléphone</p>
                    <p>Pour une profession réglementée : référence aux règles professionnelles applicables et au titre professionnel nom et adresse de l'autorité ayant délivré l'autorisation d'exercer quand celle-ci est nécessaire nom du responsable de la publication coordonnées de l'hébergeur du site : nom, dénomination ou raison sociale, adresse et numéro de téléphone pour un site marchand, conditions générales de vente (CGV) : prix (exprimé en euros et TTC), frais et date de livraison, modalité de paiement, service après-vente, droit de rétractation, durée de l'offre, coût de la technique de communication à distance numéro de déclaration simplifiée Cnil, dans le cas de collecte de données sur les clients (non obligatoire, mais recommandé).</p>
                    <p>Avant de déposer ou lire un cookie, les éditeurs de sites ou d'applications doivent : informer les internautes de la finalité des cookies, obtenir leur consentement, fournir aux internautes un moyen de les refuser.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div id=\"eleves\" class=\"modal fade\" role=\"dialog\">
        <div class=\"modal-dialog\">
            <!-- Modal content-->
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    <img src=\"{{ asset('bundles/psycho/img/logoWCS.jpg') }}\" alt=\"Logo Wild Code School\" class=\"wcs\" >
                </div>
                <div class=\"modal-body\">
                    <p class=\"alert alert-info\">Site créé par les élèves de la Wild Code School</p>
                    <p>Ludovic QUOUILLAULT - <a href=\"https://www.linkedin.com/in/ludovic-quouillault-787914125?authType=NAME_SEARCH&authToken=GvDH&locale=fr_FR&trk=tyah&trkInfo=clickedVertical%3Amynetwork%2CclickedEntityId%3A518843479%2CauthType%3ANAME_SEARCH%2Cidx%3A1-1-1%2CtarId%3A1475741721460%2Ctas%3Alu\" class=\"lienLink\">Lien Linkedin</a></p>
                    <p>Florian GALERNE - <a href=\"https://www.linkedin.com/in/florian-galerne-610525114?authType=NAME_SEARCH&authToken=inXW&locale=fr_FR&trk=tyah&trkInfo=clickedVertical%3Amynetwork%2CclickedEntityId%3A479052588%2CauthType%3ANAME_SEARCH%2Cidx%3A1-1-1%2CtarId%3A1475741876604%2Ctas%3AFlori\" class=\"lienLink\">Lien Linkedin</a></p>
                    <p>Sylvie RETAT - <a href=\"https://fr.linkedin.com/in/sylvie-rétat-66724bb0\" class=\"lienLink\">Lien Linkedin</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>

<!--Fin footer-->

{% endblock %}


{% block javascripts %}
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
<script src=\"https://use.fontawesome.com/fafce886a9.js\"></script>

<script>
    \$(document).ready(function() {
        \$('.js-scrollTo').on('click', function() { // Au clic sur un élément
            var page = \$(this).attr('href'); // Page cible
            var speed = 1000; // Durée de l'animation (en ms)
            \$('html, body').animate( { scrollTop: \$(page).offset().top }, speed ); // Go
            return false;
        });
    });
</script>
{% endblock %}

</body>

</html>
", "base.html.twig", "/var/www/html/Psychomot/app/Resources/views/base.html.twig");
    }
}
