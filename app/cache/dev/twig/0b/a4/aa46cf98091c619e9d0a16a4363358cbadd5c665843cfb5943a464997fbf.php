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
    <h4>Page : <em> ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "page"), "nom"), "html", null, true);
        echo " </em></h4>
    <div class=\"col-md-12\">
        <div class=\"row\">

            <div class=\"col-md-2\">
                <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Page_admin_ajouter_image_carousel_page", array("idpage" => $this->getAttribute($this->getContext($context, "page"), "id"))), "html", null, true);
        echo " \"><span class=\"glyphicon glyphicon-plus\"></span> Ajouter slider</a>
            </div>
            <div class=\"col-md-3\">
                <a href=\"#\"><span class=\"glyphicon glyphicon-plus\"></span> Ajouter sous-menu</a>
            </div>
            <div class=\"col-md-3\">
                <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Page_admin_ajouter_section_page", array("idpage" => $this->getAttribute($this->getContext($context, "page"), "id"))), "html", null, true);
        echo " \"><span class=\"glyphicon glyphicon-plus\"></span> Ajouter section</a>
            </div>
        </div>
        <div class=\"col-md-12\">
        ";
        // line 21
        if ((!twig_test_empty($this->getContext($context, "photo_carousel")))) {
            // line 22
            echo "        <h4>Photos slider : </h4>
            ";
            // line 23
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "photo_carousel"));
            foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
                // line 24
                echo "                <div class=\"col-md-6\">
                    <img class=\"col-lg-12\" src=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getContext($context, "photo"), "webPath")), "html", null, true);
                echo " \">
                    <a href=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Page_admin_modifier_image_carousel_page", array("idphoto" => $this->getAttribute($this->getContext($context, "photo"), "id"), "idpage" => $this->getAttribute($this->getContext($context, "page"), "id"))), "html", null, true);
                echo " \" class=\"btn-success\"> Modifier slider</a> 

                    <a href=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Page_admin_supprimer_image_carousel_page", array("idphoto" => $this->getAttribute($this->getContext($context, "photo"), "id"), "idpage" => $this->getAttribute($this->getContext($context, "page"), "id"))), "html", null, true);
                echo " \" class=\"btn-danger\"> Supprimer slider</a>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "        ";
        }
        // line 32
        echo "        </div>
        <hr>
        <div class=\"col-md-12\">
            <p><strong>Contenu :</strong> <br>
                ";
        // line 36
        echo $this->getAttribute($this->getContext($context, "page"), "contenu");
        echo "
            </p>
            <p>
                <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Page_admin_modifier_une_page", array("idpage" => $this->getAttribute($this->getContext($context, "page"), "id"))), "html", null, true);
        echo " \" class=\"btn btn-success\">Modifier</a>
            </p>
        </div>
    </div>

    <div class=\"col-lg-12\">
        
        ";
        // line 46
        if (array_key_exists("sections", $context)) {
            // line 47
            echo "        ";
            if ((!twig_test_empty($this->getContext($context, "sections")))) {
                // line 48
                echo "        
        <table class=\"table responsive\">
            <thead>
                <th>Nom</th>
                <th>Contenu</th>
                <th>Position</th>
            </thead>
            <tbody>
                ";
                // line 56
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "sections"));
                foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
                    // line 57
                    echo "                <tr> 
                    <td>";
                    // line 58
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "section"), "nom"), "html", null, true);
                    echo " <a href=\"\"><span class=\"glyphicon glyphicon-pencil\"></span></a></td>
                    <td>
                        ";
                    // line 60
                    if ((!twig_test_empty($this->getAttribute($this->getContext($context, "section"), "contenus")))) {
                        // line 61
                        echo "                            <ul>
                            ";
                        // line 62
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "section"), "contenus"));
                        foreach ($context['_seq'] as $context["_key"] => $context["contenu"]) {
                            // line 63
                            echo "                                <li> ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "contenu"), "titre"), "html", null, true);
                            echo " 
                                    <a href=\"#\"> 
                                        <span class=\"glyphicon glyphicon-remove\"></span>
                                    </a>
                                </li>
                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contenu'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 69
                        echo "                            </ul>
                        ";
                    }
                    // line 71
                    echo "                    </td>
                    <td>
                        ";
                    // line 73
                    if (($this->getAttribute($this->getContext($context, "section"), "numero") == 0)) {
                        // line 74
                        echo "                            A droite
                        ";
                    }
                    // line 76
                    echo "                        ";
                    if (($this->getAttribute($this->getContext($context, "section"), "numero") == 1)) {
                        // line 77
                        echo "                            Au milieu
                        ";
                    }
                    // line 79
                    echo "                        ";
                    if (($this->getAttribute($this->getContext($context, "section"), "numero") == 2)) {
                        // line 80
                        echo "                            A gauche
                        ";
                    }
                    // line 82
                    echo "                </tr>
                    
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 85
                echo "            </tbody>
        </table>
        ";
            }
            // line 88
            echo "
        ";
        }
        // line 90
        echo "    </div>

\t<div class=\"col-lg-12\">
        
        ";
        // line 94
        if (array_key_exists("sousmenus", $context)) {
            // line 95
            echo "        ";
            if ((!twig_test_empty($this->getContext($context, "sousmenus")))) {
                // line 96
                echo "        
        <table class=\"table responsive\">
            <thead>
                <th>Nom</th>
                <th>Détails</th>
                <th>Modifier</th>
            </thead>
            <tbody>
        \t\t";
                // line 104
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "sousmenus"));
                foreach ($context['_seq'] as $context["_key"] => $context["sousmenu"]) {
                    // line 105
                    echo "                <tr> 
                    <td>";
                    // line 106
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "sousmenu"), "nom"), "html", null, true);
                    echo "</td>
                    <td><a href=\"\"><span class=\"glyphicon glyphicon-eye-open\"></span></a></td>
                    <td><a href=\"\"><span class=\"glyphicon glyphicon-pencil\"></span></a></td>
                </tr>
                    
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sousmenu'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 112
                echo "            </tbody>
        </table>
        ";
            }
            // line 115
            echo "
        ";
        }
        // line 117
        echo "\t</div>



<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js\"></script>
<script src=\"";
        // line 122
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
        return array (  264 => 122,  257 => 117,  253 => 115,  248 => 112,  236 => 106,  233 => 105,  229 => 104,  219 => 96,  216 => 95,  214 => 94,  208 => 90,  204 => 88,  199 => 85,  191 => 82,  187 => 80,  184 => 79,  180 => 77,  177 => 76,  173 => 74,  171 => 73,  167 => 71,  163 => 69,  150 => 63,  146 => 62,  143 => 61,  141 => 60,  136 => 58,  133 => 57,  129 => 56,  119 => 48,  116 => 47,  114 => 46,  104 => 39,  98 => 36,  92 => 32,  89 => 31,  80 => 28,  75 => 26,  71 => 25,  68 => 24,  64 => 23,  61 => 22,  59 => 21,  52 => 17,  43 => 11,  35 => 6,  31 => 4,  28 => 3,);
    }
}
