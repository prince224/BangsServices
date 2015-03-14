<?php

/* PageBundle:Admin:voir_une_page.html.twig */
class __TwigTemplate_0ba4aa46cf98091c619e9d0a16a4363358cbadd5c665843cfb5943a464997fbf extends Twig_Template
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
    <hr>
    <div class=\"col-md-12\">
        <div class=\"row\">
            <div class=\"col-md-2\"><h4>Page : <em> ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "page"), "nom"), "html", null, true);
        echo " </em></h4></div>
            <div class=\"col-md-2\">
                <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Page_admin_ajouter_image_carousel_page", array("idpage" => $this->getAttribute($this->getContext($context, "page"), "id"))), "html", null, true);
        echo " \"><span class=\"glyphicon glyphicon-plus\"></span> Ajouter slider</a>
            </div>
            <div class=\"col-md-3\">
                <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Page_admin_ajouter_sous_menu_page", array("idpage" => $this->getAttribute($this->getContext($context, "page"), "id"))), "html", null, true);
        echo " \"><span class=\"glyphicon glyphicon-plus\"></span> Ajouter sous-menu</a>
            </div>
            <div class=\"col-md-3\">
                <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Page_admin_ajouter_section_page", array("idpage" => $this->getAttribute($this->getContext($context, "page"), "id"))), "html", null, true);
        echo " \"><span class=\"glyphicon glyphicon-plus\"></span> Ajouter section</a>
            </div>
        </div>
        <hr>
        <div class=\"col-lg-12\">
            ";
        // line 21
        if (array_key_exists("sousmenus", $context)) {
            // line 22
            echo "            ";
            if ((!twig_test_empty($this->getContext($context, "sousmenus")))) {
                // line 23
                echo "                <h4>Sous-menu</h4>
                ";
                // line 24
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "sousmenus"));
                foreach ($context['_seq'] as $context["_key"] => $context["sousmenu"]) {
                    // line 25
                    echo "                    <div class=\"col-lg-2\">
                       <a href=\"";
                    // line 26
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Page_admin_voir_sous_menu_page", array("idsousmenu" => $this->getAttribute($this->getContext($context, "sousmenu"), "id"))), "html", null, true);
                    echo " \"><strong>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "sousmenu"), "nom"), "html", null, true);
                    echo "</strong> </a> 
                    </div>
                        
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sousmenu'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 30
                echo "            ";
            }
            // line 31
            echo "            ";
        }
        // line 32
        echo "        </div>
        <br>
        <div class=\"col-md-12\">
        ";
        // line 35
        if ((!twig_test_empty($this->getContext($context, "photo_carousel")))) {
            // line 36
            echo "        <h4>Photos slider : </h4>
            ";
            // line 37
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "photo_carousel"));
            foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
                // line 38
                echo "                <div class=\"col-md-6\">
                    <img class=\"col-lg-12\" src=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getContext($context, "photo"), "webPath")), "html", null, true);
                echo " \">
                    <a href=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Page_admin_modifier_image_carousel_page", array("idphoto" => $this->getAttribute($this->getContext($context, "photo"), "id"), "idpage" => $this->getAttribute($this->getContext($context, "page"), "id"))), "html", null, true);
                echo " \" class=\"btn-success\"> Modifier slider</a> 

                    <a href=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Page_admin_supprimer_image_carousel_page", array("idphoto" => $this->getAttribute($this->getContext($context, "photo"), "id"), "idpage" => $this->getAttribute($this->getContext($context, "page"), "id"))), "html", null, true);
                echo " \" class=\"btn-danger\"> Supprimer slider</a>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "        ";
        }
        // line 46
        echo "        </div>
        <div class=\"col-md-12\">
            <p><strong>Contenu :</strong> <br>
                ";
        // line 49
        echo $this->getAttribute($this->getContext($context, "page"), "contenu");
        echo "
            </p>
            <p>
                <a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Page_admin_modifier_une_page", array("idpage" => $this->getAttribute($this->getContext($context, "page"), "id"))), "html", null, true);
        echo " \" class=\"btn btn-success\">Modifier</a>
            </p>
        </div>
    </div>

    <div class=\"col-lg-12\">
        
        ";
        // line 59
        if (array_key_exists("sections", $context)) {
            // line 60
            echo "        ";
            if ((!twig_test_empty($this->getContext($context, "sections")))) {
                // line 61
                echo "        
        <table class=\"table responsive\">
            <thead>
                <th>Nom</th>
                <th>Catégories contenu</th>
                <th>Position</th>
            </thead>
            <tbody>
                ";
                // line 69
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "sections"));
                foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
                    // line 70
                    echo "                <tr> 
                    <td><strong class=\"col-md-2\">";
                    // line 71
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "section"), "nom"), "html", null, true);
                    echo " </strong>
                        <a class=\"col-md-2\" href=\"";
                    // line 72
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Page_admin_modifier_section_page", array("idsection" => $this->getAttribute($this->getContext($context, "section"), "id"))), "html", null, true);
                    echo " \">
                            <span class=\"glyphicon glyphicon-pencil\"></span>
                        </a>
                        <a class=\"col-md-2\" href=\"";
                    // line 75
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Page_admin_supprimer_section_page", array("idsection" => $this->getAttribute($this->getContext($context, "section"), "id"))), "html", null, true);
                    echo " \"> 
                            <span class=\"glyphicon glyphicon-remove\"></span>
                        </a>
                    </td>
                    <td>
                        ";
                    // line 80
                    if ((!twig_test_empty($this->getAttribute($this->getContext($context, "section"), "categories")))) {
                        // line 81
                        echo "                            <ul>
                            ";
                        // line 82
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "section"), "categories"));
                        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
                            // line 83
                            echo "                                <li> ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "categorie"), "nom"), "html", null, true);
                            echo " 
                                    <a href=\"";
                            // line 84
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
                        // line 89
                        echo "                            </ul>
                        ";
                    }
                    // line 91
                    echo "                    </td>
                    <td>
                        ";
                    // line 93
                    if (($this->getAttribute($this->getContext($context, "section"), "numero") == 0)) {
                        // line 94
                        echo "                            A droite
                        ";
                    }
                    // line 96
                    echo "                        ";
                    if (($this->getAttribute($this->getContext($context, "section"), "numero") == 1)) {
                        // line 97
                        echo "                            Au milieu
                        ";
                    }
                    // line 99
                    echo "                        ";
                    if (($this->getAttribute($this->getContext($context, "section"), "numero") == 2)) {
                        // line 100
                        echo "                            A gauche
                        ";
                    }
                    // line 102
                    echo "                </tr>
                    
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 105
                echo "            </tbody>
        </table>
        ";
            }
            // line 108
            echo "
        ";
        }
        // line 110
        echo "    </div>

\t



<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js\"></script>
<script src=\"";
        // line 117
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
        return "PageBundle:Admin:voir_une_page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 117,  264 => 110,  260 => 108,  255 => 105,  247 => 102,  243 => 100,  240 => 99,  236 => 97,  233 => 96,  229 => 94,  227 => 93,  223 => 91,  219 => 89,  208 => 84,  203 => 83,  199 => 82,  196 => 81,  194 => 80,  186 => 75,  180 => 72,  176 => 71,  173 => 70,  169 => 69,  159 => 61,  156 => 60,  154 => 59,  144 => 52,  138 => 49,  133 => 46,  130 => 45,  121 => 42,  116 => 40,  112 => 39,  109 => 38,  105 => 37,  102 => 36,  100 => 35,  95 => 32,  92 => 31,  89 => 30,  77 => 26,  74 => 25,  70 => 24,  67 => 23,  64 => 22,  62 => 21,  54 => 16,  48 => 13,  42 => 10,  37 => 8,  31 => 4,  28 => 3,);
    }
}
