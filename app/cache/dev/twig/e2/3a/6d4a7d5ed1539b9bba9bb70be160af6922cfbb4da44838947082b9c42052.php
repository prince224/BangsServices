<?php

/* DomaineBundle:Admin:menu_homepage.html.twig */
class __TwigTemplate_e23a6d4a7d5ed1539b9bba9bb70be160af6922cfbb4da44838947082b9c42052 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout_admin.html.twig");

        $this->blocks = array(
            'section' => array($this, 'block_section'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_section($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Gestion des menus du site </h1>
<hr>
<div class=\"col-md-12\">
    <div class=\"col-md-12\">
       <p>Pour créer votre menu, veuillez sélectioner les pageq que vous souhaitez faire apparaitre.</p>
    </div>
    <hr>
    <div class=\"col-md-2\">
        ";
        // line 12
        if (array_key_exists("pages", $context)) {
            // line 13
            echo "        ";
            if ((!twig_test_empty($this->getContext($context, "pages")))) {
                // line 14
                echo "            <table class=\"table responsive\">
                <form method=\"post\" action=\"";
                // line 15
                echo $this->env->getExtension('routing')->getPath("domaine_admin_ajouter_menu");
                echo " \">
                    ";
                // line 16
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "pages"));
                foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                    // line 17
                    echo "                    <tr>
                        <td><label for=\"page\">";
                    // line 18
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "page"), "nom"), "html", null, true);
                    echo " </label></td>
                        <td><input type=\"checkbox\" class=\"choix\" value=";
                    // line 19
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "page"), "id"), "html", null, true);
                    echo " name=\"choix[]\"> </td>
                    </tr>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 22
                echo "                    <tr><td><input type=\"submit\" value=\"créer menu\"></td></tr>
                </form>
            </table>
        ";
            } else {
                // line 26
                echo "            <p>Aucune page existante</p>
        ";
            }
            // line 28
            echo "        ";
        }
        // line 29
        echo "    </div>
\t
    <div class=\"col-md-8 col-md-offset-2\" id=\"liste_menu\">
        ";
        // line 32
        if (array_key_exists("menus", $context)) {
            // line 33
            echo "        ";
            if ((!twig_test_empty($this->getContext($context, "menus")))) {
                // line 34
                echo "            <h4>Liste des menus déjà crées :</h4>
            <div class=\"alert alert-success\">
                ";
                // line 36
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "menus"));
                foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                    // line 37
                    echo "                    <div class=\"col-md-12\"> 
                        <div class=\"col-md-3\">
                           <p><strong>Nom</strong></p>
                         ";
                    // line 40
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "menu"), "nom"), "html", null, true);
                    echo " 
                            <a href=\"";
                    // line 41
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("domaine_admin_modifier_nom_menu", array("idmenu" => $this->getAttribute($this->getContext($context, "menu"), "id"))), "html", null, true);
                    echo " \"> 
                                <span class=\"glyphicon glyphicon-pencil\"></span>
                            </a>
                            
                        </div>
                        <div class=\"col-md-2\">
                           <p><strong>Position</strong></p>
                            ";
                    // line 48
                    if (($this->getAttribute($this->getContext($context, "menu"), "position") == 0)) {
                        // line 49
                        echo "                                En haut
                            ";
                    }
                    // line 51
                    echo "                            ";
                    if (($this->getAttribute($this->getContext($context, "menu"), "position") == 1)) {
                        // line 52
                        echo "                                En Bas
                            ";
                    }
                    // line 54
                    echo "                            ";
                    if (($this->getAttribute($this->getContext($context, "menu"), "position") == 2)) {
                        // line 55
                        echo "                                A gauche
                            ";
                    }
                    // line 57
                    echo "                            ";
                    if (($this->getAttribute($this->getContext($context, "menu"), "position") == 3)) {
                        // line 58
                        echo "                                A droite
                            ";
                    }
                    // line 59
                    echo " 
                            <a href=\"";
                    // line 60
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("domaine_admin_modifier_nom_menu", array("idmenu" => $this->getAttribute($this->getContext($context, "menu"), "id"))), "html", null, true);
                    echo " \"> 
                                <span class=\"glyphicon glyphicon-pencil\"></span>
                            </a>
                            
                        </div>
                        <div class=\"col-md-7\">
                            <p><strong>Contenu</strong></p>
                            ";
                    // line 67
                    if ((!twig_test_empty($this->getAttribute($this->getContext($context, "menu"), "pages")))) {
                        // line 68
                        echo "                                <ul>
                                ";
                        // line 69
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "menu"), "pages"));
                        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                            // line 70
                            echo "                                   <li> ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "page"), "nom"), "html", null, true);
                            echo " 
                                        <a href=\"";
                            // line 71
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("domaine_admin_supprimer_page_menu", array("idmenu" => $this->getAttribute($this->getContext($context, "menu"), "id"), "page" => $this->getAttribute($this->getContext($context, "page"), "id"))), "html", null, true);
                            echo " \"> 
                                            <span class=\"glyphicon glyphicon-remove\"></span>
                                        </a>
                                    </li>
                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 76
                        echo "                                </ul>
                            ";
                    }
                    // line 78
                    echo "                        </div>
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 81
                echo "            </div>
        ";
            } else {
                // line 83
                echo "            <p><strong><em>Aucun menu existant !!!</em></strong></p>
        ";
            }
            // line 85
            echo "        
        ";
        }
        // line 87
        echo "\t</div>



</div>

<script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo " \"></script>

    <script type=\"text/javascript\">
      \$(document).ready(function(){

        \$('#accueil').addClass('en_cour');
        \$('#paintball').removeClass('active');
        \$('#espaceloisirs').removeClass('active');
        \$('#paddockotels').removeClass('active');
       
      });
    </script>
";
    }

    public function getTemplateName()
    {
        return "DomaineBundle:Admin:menu_homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 93,  212 => 87,  208 => 85,  204 => 83,  200 => 81,  192 => 78,  188 => 76,  177 => 71,  172 => 70,  168 => 69,  165 => 68,  163 => 67,  153 => 60,  150 => 59,  146 => 58,  143 => 57,  139 => 55,  136 => 54,  132 => 52,  129 => 51,  125 => 49,  123 => 48,  113 => 41,  109 => 40,  104 => 37,  100 => 36,  96 => 34,  93 => 33,  91 => 32,  86 => 29,  83 => 28,  79 => 26,  73 => 22,  64 => 19,  60 => 18,  57 => 17,  53 => 16,  49 => 15,  46 => 14,  43 => 13,  41 => 12,  31 => 4,  28 => 3,);
    }
}
