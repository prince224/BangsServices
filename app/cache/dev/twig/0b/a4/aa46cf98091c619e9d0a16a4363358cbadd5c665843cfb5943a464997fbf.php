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
        </div>
        <div class=\"col-md-12\">
        ";
        // line 18
        if ((!twig_test_empty($this->getContext($context, "photo_carousel")))) {
            // line 19
            echo "        <h4>Photos slider : </h4>
            ";
            // line 20
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "photo_carousel"));
            foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
                // line 21
                echo "                <div class=\"col-md-6\">
                    <img class=\"col-lg-12\" src=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getContext($context, "photo"), "webPath")), "html", null, true);
                echo " \">
                    <a href=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Page_admin_modifier_image_carousel_page", array("idphoto" => $this->getAttribute($this->getContext($context, "photo"), "id"), "idpage" => $this->getAttribute($this->getContext($context, "page"), "id"))), "html", null, true);
                echo " \" class=\"btn-success\"> Modifier slider</a> <br>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "        ";
        }
        // line 27
        echo "        </div>
        <hr>
        <div class=\"col-md-12\">
            <p><strong>Contenu :</strong> <br>
                ";
        // line 31
        echo $this->getAttribute($this->getContext($context, "page"), "contenu");
        echo "
            </p>
            <p>
                <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Page_admin_modifier_une_page", array("idpage" => $this->getAttribute($this->getContext($context, "page"), "id"))), "html", null, true);
        echo " \" class=\"btn btn-success\">Modifier</a>
            </p>
        </div>
    </div>
\t<div class=\"col-lg-12\">
        
        ";
        // line 40
        if (array_key_exists("sousmenus", $context)) {
            // line 41
            echo "        ";
            if ((!twig_test_empty($this->getContext($context, "sousmenus")))) {
                // line 42
                echo "        
        <table class=\"table responsive\">
            <thead>
                <th>Nom</th>
                <th>Détails</th>
                <th>Modifier</th>
            </thead>
            <tbody>
        \t\t";
                // line 50
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "sousmenus"));
                foreach ($context['_seq'] as $context["_key"] => $context["sousmenu"]) {
                    // line 51
                    echo "                <tr> 
                    <td>";
                    // line 52
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
                // line 58
                echo "            </tbody>
        </table>
        ";
            }
            // line 61
            echo "
        ";
        }
        // line 63
        echo "\t</div>



<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js\"></script>
<script src=\"";
        // line 68
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
        return array (  152 => 68,  145 => 63,  141 => 61,  136 => 58,  124 => 52,  121 => 51,  117 => 50,  107 => 42,  104 => 41,  102 => 40,  93 => 34,  87 => 31,  81 => 27,  78 => 26,  69 => 23,  65 => 22,  62 => 21,  58 => 20,  55 => 19,  53 => 18,  43 => 11,  35 => 6,  31 => 4,  28 => 3,);
    }
}
