<?php

/* PsychoBundle:psycho:show.html.twig */
class __TwigTemplate_2d1f3319ba201ad311368016f11d9b459658440badfdb4126def9e1c49713e68 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "PsychoBundle:psycho:show.html.twig", 1);
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
        $__internal_e9595e4c646e0d4a88ad2a572034e5be57379f55265a464de2188ee0d759c8a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9595e4c646e0d4a88ad2a572034e5be57379f55265a464de2188ee0d759c8a8->enter($__internal_e9595e4c646e0d4a88ad2a572034e5be57379f55265a464de2188ee0d759c8a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PsychoBundle:psycho:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9595e4c646e0d4a88ad2a572034e5be57379f55265a464de2188ee0d759c8a8->leave($__internal_e9595e4c646e0d4a88ad2a572034e5be57379f55265a464de2188ee0d759c8a8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_66824c3d8e0cff78ac27c878a8cf8dc39200b5d225cf4602d0e448cd1d211c83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66824c3d8e0cff78ac27c878a8cf8dc39200b5d225cf4602d0e448cd1d211c83->enter($__internal_66824c3d8e0cff78ac27c878a8cf8dc39200b5d225cf4602d0e448cd1d211c83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "PsychoBundle:psycho:show.html.twig"));

        // line 4
        echo "    <h1>Psycho</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psycho"]) ? $context["psycho"] : $this->getContext($context, "psycho")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Tel</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psycho"]) ? $context["psycho"] : $this->getContext($context, "psycho")), "tel", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Titledef</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psycho"]) ? $context["psycho"] : $this->getContext($context, "psycho")), "titledef", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Txtdef</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psycho"]) ? $context["psycho"] : $this->getContext($context, "psycho")), "txtdef", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Titlewho</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psycho"]) ? $context["psycho"] : $this->getContext($context, "psycho")), "titleWho", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Txtwho</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psycho"]) ? $context["psycho"] : $this->getContext($context, "psycho")), "txtWho", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Titlewhy</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psycho"]) ? $context["psycho"] : $this->getContext($context, "psycho")), "titleWhy", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Txtwhy</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psycho"]) ? $context["psycho"] : $this->getContext($context, "psycho")), "txtWhy", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Titlepsy</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psycho"]) ? $context["psycho"] : $this->getContext($context, "psycho")), "titlePsy", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Txtpsy1</th>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psycho"]) ? $context["psycho"] : $this->getContext($context, "psycho")), "txtPsy1", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Txtpsy2</th>
                <td>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psycho"]) ? $context["psycho"] : $this->getContext($context, "psycho")), "txtPsy2", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Titleconsult</th>
                <td>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psycho"]) ? $context["psycho"] : $this->getContext($context, "psycho")), "titleConsult", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Txtconsult</th>
                <td>";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psycho"]) ? $context["psycho"] : $this->getContext($context, "psycho")), "txtConsult", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Titleinterv</th>
                <td>";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psycho"]) ? $context["psycho"] : $this->getContext($context, "psycho")), "titleInterv", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Txtinterv</th>
                <td>";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psycho"]) ? $context["psycho"] : $this->getContext($context, "psycho")), "txtInterv", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Titlebilan</th>
                <td>";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psycho"]) ? $context["psycho"] : $this->getContext($context, "psycho")), "titleBilan", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Txtbilan</th>
                <td>";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psycho"]) ? $context["psycho"] : $this->getContext($context, "psycho")), "txtBilan", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Namepsy1</th>
                <td>";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psycho"]) ? $context["psycho"] : $this->getContext($context, "psycho")), "namePsy1", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Namepsy2</th>
                <td>";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psycho"]) ? $context["psycho"] : $this->getContext($context, "psycho")), "namePsy2", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Contactadr</th>
                <td>";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psycho"]) ? $context["psycho"] : $this->getContext($context, "psycho")), "contactAdr", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Contactaddress</th>
                <td>";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psycho"]) ? $context["psycho"] : $this->getContext($context, "psycho")), "contactAddress", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Contactmail</th>
                <td>";
        // line 94
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psycho"]) ? $context["psycho"] : $this->getContext($context, "psycho")), "contactMail", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Contacttel</th>
                <td>";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psycho"]) ? $context["psycho"] : $this->getContext($context, "psycho")), "contactTel", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Contactname</th>
                <td>";
        // line 102
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["psycho"]) ? $context["psycho"] : $this->getContext($context, "psycho")), "contactName", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 109
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("psycho_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("psycho_edit", array("id" => $this->getAttribute((isset($context["psycho"]) ? $context["psycho"] : $this->getContext($context, "psycho")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 115
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 117
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_66824c3d8e0cff78ac27c878a8cf8dc39200b5d225cf4602d0e448cd1d211c83->leave($__internal_66824c3d8e0cff78ac27c878a8cf8dc39200b5d225cf4602d0e448cd1d211c83_prof);

    }

    public function getTemplateName()
    {
        return "PsychoBundle:psycho:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 117,  231 => 115,  225 => 112,  219 => 109,  209 => 102,  202 => 98,  195 => 94,  188 => 90,  181 => 86,  174 => 82,  167 => 78,  160 => 74,  153 => 70,  146 => 66,  139 => 62,  132 => 58,  125 => 54,  118 => 50,  111 => 46,  104 => 42,  97 => 38,  90 => 34,  83 => 30,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Psycho</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ psycho.id }}</td>
            </tr>
            <tr>
                <th>Tel</th>
                <td>{{ psycho.tel }}</td>
            </tr>
            <tr>
                <th>Titledef</th>
                <td>{{ psycho.titledef }}</td>
            </tr>
            <tr>
                <th>Txtdef</th>
                <td>{{ psycho.txtdef }}</td>
            </tr>
            <tr>
                <th>Titlewho</th>
                <td>{{ psycho.titleWho }}</td>
            </tr>
            <tr>
                <th>Txtwho</th>
                <td>{{ psycho.txtWho }}</td>
            </tr>
            <tr>
                <th>Titlewhy</th>
                <td>{{ psycho.titleWhy }}</td>
            </tr>
            <tr>
                <th>Txtwhy</th>
                <td>{{ psycho.txtWhy }}</td>
            </tr>
            <tr>
                <th>Titlepsy</th>
                <td>{{ psycho.titlePsy }}</td>
            </tr>
            <tr>
                <th>Txtpsy1</th>
                <td>{{ psycho.txtPsy1 }}</td>
            </tr>
            <tr>
                <th>Txtpsy2</th>
                <td>{{ psycho.txtPsy2 }}</td>
            </tr>
            <tr>
                <th>Titleconsult</th>
                <td>{{ psycho.titleConsult }}</td>
            </tr>
            <tr>
                <th>Txtconsult</th>
                <td>{{ psycho.txtConsult }}</td>
            </tr>
            <tr>
                <th>Titleinterv</th>
                <td>{{ psycho.titleInterv }}</td>
            </tr>
            <tr>
                <th>Txtinterv</th>
                <td>{{ psycho.txtInterv }}</td>
            </tr>
            <tr>
                <th>Titlebilan</th>
                <td>{{ psycho.titleBilan }}</td>
            </tr>
            <tr>
                <th>Txtbilan</th>
                <td>{{ psycho.txtBilan }}</td>
            </tr>
            <tr>
                <th>Namepsy1</th>
                <td>{{ psycho.namePsy1 }}</td>
            </tr>
            <tr>
                <th>Namepsy2</th>
                <td>{{ psycho.namePsy2 }}</td>
            </tr>
            <tr>
                <th>Contactadr</th>
                <td>{{ psycho.contactAdr }}</td>
            </tr>
            <tr>
                <th>Contactaddress</th>
                <td>{{ psycho.contactAddress }}</td>
            </tr>
            <tr>
                <th>Contactmail</th>
                <td>{{ psycho.contactMail }}</td>
            </tr>
            <tr>
                <th>Contacttel</th>
                <td>{{ psycho.contactTel }}</td>
            </tr>
            <tr>
                <th>Contactname</th>
                <td>{{ psycho.contactName }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('psycho_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('psycho_edit', { 'id': psycho.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "PsychoBundle:psycho:show.html.twig", "/var/www/html/Psychomot/src/PsychoBundle/Resources/views/psycho/show.html.twig");
    }
}
