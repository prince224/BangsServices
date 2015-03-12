<?php

/* ::layout_admin.html.twig */
class __TwigTemplate_bed9f577d8b523cd9745811bcc194c50a50597c5603f6be353df72a016c1eaea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'menu_gestion' => array($this, 'block_menu_gestion'),
            'section' => array($this, 'block_section'),
            'section2' => array($this, 'block_section2'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"../../favicon.ico\">

    <title>Administration B-S Cms </title>
    <meta http-equiv=\"Pragma\" content=\"no-cache\">
    <meta http-equiv=\"Expires\" content=\"-1\">

    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src=\"../../assets/js/ie8-responsive-file-warning.js\"></script><![endif]-->
    <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/domaine/js/emulated.js"), "html", null, true);
        echo "\"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
      <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->

    <!-- Custom styles for this template -->

    
    <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/domaine/css/carousel.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/domaine/css/domaine_admin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class=\"row-fluid\">
      <div class=\"container\">
        <div class=\"row-fluid\" id=\"titre\">
          <h1>ADMINISTRATION BANGS-SERVICES CMS</h1>
        </div>
      </div>
    </div>


    <!-- ================================================== -->
    <hr>

    <div>
      <div class=\"col-md-3\" id=\"gestion_activites\">
        <h2> <a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("domaine_admin_homepage");
        echo " \">Gestions</a> </h2>
        ";
        // line 54
        $this->displayBlock('menu_gestion', $context, $blocks);
        // line 61
        echo "        

      </div>
      <div class=\"col-lg-8 col-lg-offset-1\" id=\"section\">
        <div class=\"row\">
          ";
        // line 66
        $this->displayBlock('section', $context, $blocks);
        // line 69
        echo "        </div>
        <div class=\"row\">
          ";
        // line 71
        $this->displayBlock('section2', $context, $blocks);
        // line 74
        echo "        </div>
      </div>
    </div>

    <div class=\"col-lg-12\" id=\"footer\">
      <!-- FOOTER -->
      <footer>
        <p class=\"pull-right\"><a href=\"#\">Back to top</a></p>
        <p>&copy; 2014 Bangs-services, Inc. &middot; <a href=\"#\">Privacy</a> &middot; <a href=\"#\">Terms</a>
          &middot; <a href=\"#\">Mentions Légales</a> &middot; <a href=\"#\">Règlements intérieurs</a>
        </p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js\"></script>
    <script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/page/ckeditor/ckeditor.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\">
      \$(document).ready(function(){

        \$('#balltrap').removeClass('active');
        \$('#paintball').removeClass('active');

        // Initialisation des variables pour la taille de la fenêtre
            var navWidth, navHeight;
            if (self.innerWidth != undefined)
            {
                navWidth = self.innerWidth;
                navHeight = self.innerHeight;
                //alert(navHeight);
                //alert(navWidth);
            }
            else 
            {
                navWidth = document.documentElement.clientWidth;
                navHeight = document.documentElement.clientHeight;
                //alert(navHeight);
                //alert(navWidth);
            };

        \$('#gestion_activites').css({
              height : navHeight
            });
      });
    </script>
  </body>
</html>
";
    }

    // line 54
    public function block_menu_gestion($context, array $blocks = array())
    {
        // line 55
        echo "          <div><p><a href=\"\"><strong>Pages</strong></a></p></div>
          <div><p><a href=\"\"><strong>Articles</strong></a></p></div>
          <div><p><a href=\"\"><strong>Categories</strong></a></p></div>
          <hr>
          <div><p><a href=\"\"><strong>Utilisateurs</strong></a></p></div>
        ";
    }

    // line 66
    public function block_section($context, array $blocks = array())
    {
        // line 67
        echo "
          ";
    }

    // line 71
    public function block_section2($context, array $blocks = array())
    {
        // line 72
        echo "
          ";
    }

    public function getTemplateName()
    {
        return "::layout_admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 72,  192 => 71,  187 => 67,  184 => 66,  175 => 55,  172 => 54,  135 => 95,  131 => 94,  109 => 74,  107 => 71,  103 => 69,  101 => 66,  94 => 61,  92 => 54,  88 => 53,  65 => 33,  61 => 32,  47 => 21,  40 => 17,  22 => 1,  37 => 9,  31 => 5,  28 => 4,);
    }
}
