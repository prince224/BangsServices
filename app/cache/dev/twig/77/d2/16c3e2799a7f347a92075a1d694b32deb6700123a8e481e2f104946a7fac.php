<?php

/* ArticleBundle:Admin:contenu_homepage.html.twig */
class __TwigTemplate_77d216c3e2799a7f347a92075a1d694b32deb6700123a8e481e2f104946a7fac extends Twig_Template
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
        echo "<h1>Gestion d'autres contenus <em>Articles - Produits - Services ...</em> </h1>
<hr>
<div id=\"menu_balltrap\" class=\"col-md-12\">
    <div class=\"col-md-12\">
        <a href=\"#\" data-toggle=\"modal\" data-target=\"#myModal\"><span class=\"glyphicon glyphicon-plus\"></span> Ajouter</a>
    </div>
  \t
  \t<hr>
\t<div class=\"col-lg-12\">
        ";
        // line 13
        if (array_key_exists("contenus", $context)) {
            // line 14
            echo "        ";
            if ((!twig_test_empty($this->getContext($context, "contenus")))) {
                // line 15
                echo "        <table class=\"table responsive alert alert-success\">
            <thead>
                <th>Nom</th>
                <th>Categorie</th>
                <th>Auteur</th>
                <th>Date de création</th>
                <th>Détails</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </thead>
            <tbody>
        \t\t";
                // line 26
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "contenus"));
                foreach ($context['_seq'] as $context["_key"] => $context["contenu"]) {
                    // line 27
                    echo "                <tr> 
                    <td>";
                    // line 28
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "contenu"), "titre"), "html", null, true);
                    echo "</td>
                    <td>";
                    // line 29
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "contenu"), "categorie"), "nom"), "html", null, true);
                    echo " </td>
                    <td>";
                    // line 30
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "contenu"), "auteur"), "html", null, true);
                    echo " </td>
                    <td>";
                    // line 31
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "contenu"), "dateCreation"), "d/m/y"), "html", null, true);
                    echo " </td>
                    <td><a href=\"";
                    // line 32
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_admin_voir_un_contenu", array("idcontenu" => $this->getAttribute($this->getContext($context, "contenu"), "id"))), "html", null, true);
                    echo " \"><span class=\"glyphicon glyphicon-eye-open\"></span></a></td>

                    <td><a href=\"";
                    // line 34
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_admin_modifier_un_contenu", array("idcontenu" => $this->getAttribute($this->getContext($context, "contenu"), "id"), "idcategorie" => $this->getAttribute($this->getAttribute($this->getContext($context, "contenu"), "categorie"), "id"))), "html", null, true);
                    echo " \"><span class=\"glyphicon glyphicon-pencil\"></span></a></td>

                    <td><a href=\"";
                    // line 36
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_admin_supprimer_un_contenu", array("idcontenu" => $this->getAttribute($this->getContext($context, "contenu"), "id"))), "html", null, true);
                    echo " \"><span class=\"glyphicon glyphicon-remove\"></span></a></td>
                </tr>
                    
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contenu'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 40
                echo "            </tbody>
        </table>
        ";
            }
            // line 43
            echo "        ";
        }
        // line 44
        echo "\t</div>


\t<!-- Modal -->
\t<div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
\t  <div class=\"modal-dialog\">
\t    <div class=\"modal-content\">
\t      <div class=\"modal-header\">
\t        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t        <h3 class=\"modal-title\" id=\"myModalLabel\" style=\"text-align:center\">Choisir le type de contenu</h3>
\t      </div>
\t      <div class=\"modal-body\">
\t        \t<form method=\"post\" action=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("article_admin_choix_categorie");
        echo " \" class=\"alert alert-success\" role=\"alert\">
\t        \t\t<table class=\"responsive\">
\t        \t\t\t";
        // line 58
        if (array_key_exists("categories", $context)) {
            // line 59
            echo "\t        \t\t\t";
            if ((!twig_test_empty($this->getContext($context, "categories")))) {
                // line 60
                echo "\t        \t\t\t";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "categories"));
                foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
                    // line 61
                    echo "\t        \t\t\t\t<tr>
\t        \t\t\t\t\t<td>
\t        \t\t\t\t\t\t<label for=\"";
                    // line 63
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "categorie"), "nom"), "html", null, true);
                    echo " \">";
                    echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getContext($context, "categorie"), "nom")), "html", null, true);
                    echo "</label>
\t        \t\t\t\t\t</td>
\t        \t\t\t\t\t<td>
\t        \t\t\t\t\t\t<input type=\"radio\" name=\"categorie\"  value=";
                    // line 66
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "categorie"), "id"), "html", null, true);
                    echo ">
\t        \t\t\t\t\t</td>
\t        \t\t\t\t</tr>
\t        \t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 70
                echo "\t        \t\t\t";
            } else {
                // line 71
                echo "\t        \t\t\t\tAucune categorie existante
\t        \t\t\t";
            }
            // line 73
            echo "\t        \t\t\t";
        }
        // line 74
        echo "\t        \t\t\t<tr><td></td></tr>
\t        \t\t\t<hr>
\t        \t\t\t<tr><td><input type=\"submit\" value=\"valider\" class=\"btn btn-primary\"></td></tr>
\t        \t\t</table>
\t        \t</form>
\t      </div>
\t      <div class=\"modal-footer\">
\t        <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Close</button>
\t       </div>
\t    </div>
\t  </div>
\t</div>

</div>

<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js\"></script>
<script src=\"";
        // line 90
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
        return "ArticleBundle:Admin:contenu_homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 90,  172 => 74,  169 => 73,  165 => 71,  162 => 70,  152 => 66,  144 => 63,  140 => 61,  135 => 60,  132 => 59,  130 => 58,  125 => 56,  111 => 44,  108 => 43,  103 => 40,  93 => 36,  88 => 34,  83 => 32,  79 => 31,  75 => 30,  71 => 29,  67 => 28,  64 => 27,  60 => 26,  47 => 15,  44 => 14,  42 => 13,  31 => 4,  28 => 3,);
    }
}
