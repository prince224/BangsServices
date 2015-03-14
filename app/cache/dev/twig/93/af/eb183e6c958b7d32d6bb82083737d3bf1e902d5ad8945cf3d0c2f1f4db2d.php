<?php

/* PageBundle:Admin:page_homepage.html.twig */
class __TwigTemplate_93afeb183e6c958b7d32d6bb82083737d3bf1e902d5ad8945cf3d0c2f1f4db2d extends Twig_Template
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
        echo "<h1>Gestion des pages du site </h1>
<hr>
<div id=\"menu_balltrap\" class=\"col-md-12\">
    <div class=\"col-md-12\">
        <a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("Page_admin_ajouter_une_page");
        echo " \"><span class=\"glyphicon glyphicon-plus\"></span> Ajouter</a>
    </div>
  
\t<div class=\"col-lg-12\">
        ";
        // line 12
        if (array_key_exists("pages", $context)) {
            // line 13
            echo "        ";
            if ((!twig_test_empty($this->getContext($context, "pages")))) {
                // line 14
                echo "        <table class=\"table responsive\">
            <thead>
                <th>Nom</th>
                <th>Détails</th>
                <th>Modifier</th>
            </thead>
            <tbody>
        \t\t";
                // line 21
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "pages"));
                foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                    // line 22
                    echo "                <tr> 
                    <td>";
                    // line 23
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "page"), "nom"), "html", null, true);
                    echo "</td>
                    <td><a href=\"";
                    // line 24
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Page_admin_voir_une_page", array("idpage" => $this->getAttribute($this->getContext($context, "page"), "id"))), "html", null, true);
                    echo " \"><span class=\"glyphicon glyphicon-eye-open\"></span></a></td>
                    <td><a href=\"";
                    // line 25
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Page_admin_modifier_une_page", array("idpage" => $this->getAttribute($this->getContext($context, "page"), "id"))), "html", null, true);
                    echo " \"><span class=\"glyphicon glyphicon-pencil\"></span></a></td>
                </tr>
                    
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 29
                echo "            </tbody>
        </table>
        ";
            }
            // line 32
            echo "        ";
        }
        // line 33
        echo "\t</div>

</div>

<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js\"></script>
<script src=\"";
        // line 38
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
        return "PageBundle:Admin:page_homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 38,  91 => 33,  88 => 32,  83 => 29,  73 => 25,  69 => 24,  65 => 23,  62 => 22,  58 => 21,  49 => 14,  46 => 13,  44 => 12,  37 => 8,  31 => 4,  28 => 3,);
    }
}
