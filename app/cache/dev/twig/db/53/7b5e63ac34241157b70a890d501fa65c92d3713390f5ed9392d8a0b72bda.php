<?php

/* PageBundle:Admin:voir_sous_menu_page.html.twig */
class __TwigTemplate_db537b5e63ac34241157b70a890d501fa65c92d3713390f5ed9392d8a0b72bda extends Twig_Template
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
        echo "    <h1>Gestion des pages du site </h1>
    <h3>Page : <em> ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "page"), "nom"), "html", null, true);
        echo " </em></h3>
    <hr>
    <div class=\"col-md-12\">
        <div class=\"row\">
            <div class=\"col-md-5\"><h4>Sous-menu : <strong> ";
        // line 9
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getContext($context, "sousmenu"), "nom")), "html", null, true);
        echo " </strong></h4></div>
            <div class=\"col-md-2\">
                <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Page_admin_ajouter_image_carousel_page", array("idpage" => $this->getAttribute($this->getContext($context, "page"), "id"))), "html", null, true);
        echo " \"><span class=\"glyphicon glyphicon-plus\"></span> Ajouter slider</a>
            </div>
            <div class=\"col-md-3\">
                <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Page_admin_ajouter_section_page", array("idpage" => $this->getAttribute($this->getContext($context, "page"), "id"))), "html", null, true);
        echo " \"><span class=\"glyphicon glyphicon-plus\"></span> Ajouter section</a>
            </div>
        </div>
        <hr>
        <br>
        <div class=\"col-md-12\">
        ";
        // line 20
        if ((!twig_test_empty($this->getContext($context, "photo_carousel")))) {
            // line 21
            echo "        <h4>Photos slider : </h4>
            ";
            // line 22
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "photo_carousel"));
            foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
                // line 23
                echo "                <div class=\"col-md-6\">
                    <img class=\"col-lg-12\" src=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getContext($context, "photo"), "webPath")), "html", null, true);
                echo " \">
                    <a href=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Page_admin_modifier_image_carousel_page", array("idphoto" => $this->getAttribute($this->getContext($context, "photo"), "id"), "idpage" => $this->getAttribute($this->getContext($context, "page"), "id"))), "html", null, true);
                echo " \" class=\"btn-success\"> Modifier slider</a> 

                    <a href=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Page_admin_supprimer_image_carousel_page", array("idphoto" => $this->getAttribute($this->getContext($context, "photo"), "id"), "idpage" => $this->getAttribute($this->getContext($context, "page"), "id"))), "html", null, true);
                echo " \" class=\"btn-danger\"> Supprimer slider</a>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "        ";
        }
        // line 31
        echo "        </div>
        <div class=\"col-md-12\">
            <p><strong>Contenu :</strong> <br>
                ";
        // line 34
        echo $this->getAttribute($this->getContext($context, "sousmenu"), "contenu");
        echo "
            </p>
            <p>
                <a href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Page_admin_modifier_une_page", array("idpage" => $this->getAttribute($this->getContext($context, "page"), "id"))), "html", null, true);
        echo " \" class=\"btn btn-success\">Modifier</a>
            </p>
        </div>
    </div>

    <div class=\"col-lg-12\">
        
        ";
        // line 44
        if (array_key_exists("sections", $context)) {
            // line 45
            echo "        ";
            if ((!twig_test_empty($this->getContext($context, "sections")))) {
                // line 46
                echo "        
        <table class=\"table responsive\">
            <thead>
                <th>Nom</th>
                <th>Catégories contenu</th>
                <th>Position</th>
            </thead>
            <tbody>
                ";
                // line 54
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "sections"));
                foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
                    // line 55
                    echo "                <tr> 
                    <td><strong class=\"col-md-2\">";
                    // line 56
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "section"), "nom"), "html", null, true);
                    echo " </strong>
                        <a class=\"col-md-2\" href=\"";
                    // line 57
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Page_admin_modifier_section_page", array("idsection" => $this->getAttribute($this->getContext($context, "section"), "id"))), "html", null, true);
                    echo " \">
                            <span class=\"glyphicon glyphicon-pencil\"></span>
                        </a>
                        <a class=\"col-md-2\" href=\"";
                    // line 60
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Page_admin_supprimer_section_page", array("idsection" => $this->getAttribute($this->getContext($context, "section"), "id"))), "html", null, true);
                    echo " \"> 
                            <span class=\"glyphicon glyphicon-remove\"></span>
                        </a>
                    </td>
                    <td>
                        ";
                    // line 65
                    if ((!twig_test_empty($this->getAttribute($this->getContext($context, "section"), "categories")))) {
                        // line 66
                        echo "                            <ul>
                            ";
                        // line 67
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "section"), "categories"));
                        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
                            // line 68
                            echo "                                <li> ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "categorie"), "nom"), "html", null, true);
                            echo " 
                                    <a href=\"";
                            // line 69
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Page_admin_supprimer_categories_section_page", array("idsection" => $this->getAttribute($this->getContext($context, "section"), "id"), "categorie" => $this->getAttribute($this->getContext($context, "categorie"), "id"))), "html", null, true);
                            echo " \"> 
                                        <span class=\"glyphicon glyphicon-remove\"></span>
                                    </a>
                                </li>
                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 74
                        echo "                            </ul>
                        ";
                    }
                    // line 76
                    echo "                    </td>
                    <td>
                        ";
                    // line 78
                    if (($this->getAttribute($this->getContext($context, "section"), "numero") == 0)) {
                        // line 79
                        echo "                            A droite
                        ";
                    }
                    // line 81
                    echo "                        ";
                    if (($this->getAttribute($this->getContext($context, "section"), "numero") == 1)) {
                        // line 82
                        echo "                            Au milieu
                        ";
                    }
                    // line 84
                    echo "                        ";
                    if (($this->getAttribute($this->getContext($context, "section"), "numero") == 2)) {
                        // line 85
                        echo "                            A gauche
                        ";
                    }
                    // line 87
                    echo "                </tr>
                    
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 90
                echo "            </tbody>
        </table>
        ";
            }
            // line 93
            echo "
        ";
        }
        // line 95
        echo "    </div>

\t



<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js\"></script>
<script src=\"";
        // line 102
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
        return "PageBundle:Admin:voir_sous_menu_page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 102,  225 => 95,  221 => 93,  216 => 90,  208 => 87,  204 => 85,  201 => 84,  197 => 82,  194 => 81,  190 => 79,  188 => 78,  184 => 76,  180 => 74,  169 => 69,  164 => 68,  160 => 67,  157 => 66,  155 => 65,  147 => 60,  141 => 57,  137 => 56,  134 => 55,  130 => 54,  120 => 46,  117 => 45,  115 => 44,  105 => 37,  99 => 34,  94 => 31,  91 => 30,  82 => 27,  77 => 25,  73 => 24,  70 => 23,  66 => 22,  63 => 21,  61 => 20,  52 => 14,  46 => 11,  41 => 9,  34 => 5,  31 => 4,  28 => 3,);
    }
}
