<?php

/* ::layoutDomaineLerabot.html.twig */
class __TwigTemplate_ddb11ce50d54bfde2149304f72c671efe1c234233365cf3290b0786195b53951 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
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

    <title>Le Domaine du RABOT</title>
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/domaine/css/domaine.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class=\"row-fluid\">
      <div class=\"container\">
        <div class=\"row-fluid\" id=\"titre\">
          <h1>DOMAINE DU RABOT</h1>
        </div>
      </div>
    </div>


    <!-- Carousel
    ================================================== -->
    <div class=\"row-fluid\" id=\"activites\">

      <div class=\"col-lg-3\">
        <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
        <!-- Indicators -->
        <ol class=\"carousel-indicators\">
          <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
          <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
          <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
        </ol>
        <div class=\"carousel-inner\" role=\"listbox\">
          <div class=\"item active\">
            <img src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/domaine/images/ball-trap-du-rabot-vouzon.jpg"), "html", null, true);
        echo " \" alt=\"ball trap du rabot\" title=\"evenement le rabot balltrap\">
            <div class=\"container\">
              <div class=\"carousel-caption\">
                <h1>BALL TRAP</h1>
                <p></p>
                <p><a class=\"btn btn-lg btn-primary\" href=\"http://www.balltrap-du-rabot.fr/\" target=\"_blank\" role=\"button\">Visiter</a></p>
              </div>
            </div>
          </div>

          <div class=\"item\">
            <img src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/domaine/images/ball-trap-rabot-vouzon.jpg"), "html", null, true);
        echo " \" alt=\"ball trap du rabot\" title=\"evenement le rabot balltrap\">
            <div class=\"container\">
              <div class=\"carousel-caption\">
                <h1>BALL TRAP</h1>
                <p></p>
                <p><a class=\"btn btn-lg btn-primary\" href=\"http://www.balltrap-du-rabot.fr/\" target=\"_blank\" role=\"button\">Visiter</a></p>
              </div>
            </div>
          </div>

        </div>
        <a class=\"left carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
          <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
          <span class=\"sr-only\">Previous</span>
        </a>
        <a class=\"right carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
          <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
          <span class=\"sr-only\">Next</span>
        </a>
        </div><!-- /.carousel -->
      </div>

      <div class=\"col-lg-3\">
        <div id=\"myCarousel_2\" class=\"carousel slide\" data-ride=\"carousel\">
        <!-- Indicators -->
        <ol class=\"carousel-indicators\">
          <li data-target=\"#myCarousel_2\" data-slide-to=\"0\" class=\"active\"></li>
          <li data-target=\"#myCarousel_2\" data-slide-to=\"1\"></li>
          <li data-target=\"#myCarousel_2\" data-slide-to=\"2\"></li>
        </ol>
        <div class=\"carousel-inner\" role=\"listbox\">
          <div class=\"item active\">
            <img src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/domaine/images/paintball-du-rabot-vouzon.jpg"), "html", null, true);
        echo " \" alt=\"First slide\">
            <div class=\"container\">
              <div class=\"carousel-caption\">
                <h1>PAINT BALL<br>AIRSOFT</h1>
                <p>En Construction</p>
                <p><a class=\"btn btn-lg btn-primary\" href=\"http://www.paintball-du-rabot.com/\" target=\"_blank\" role=\"button\">Visiter</a></p>
              </div>
            </div>
          </div>

          <div class=\"item\">
            <img src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/domaine/images/le-rabot-paintball-vouzon.jpg"), "html", null, true);
        echo " \" alt=\"First slide\">
            <div class=\"container\">
              <div class=\"carousel-caption\">
                <h1>PAINT BALL<br>AIRSOFT</h1>
                <p>En Construction</p>
                <p><a class=\"btn btn-lg btn-primary\" href=\"http://www.paintball-du-rabot.com/\" target=\"_blank\" role=\"button\">Visiter</a></p>
              </div>
            </div>
          </div>
        </div>
        <a class=\"left carousel-control\" href=\"#myCarousel_2\" role=\"button\" data-slide=\"prev\">
          <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
          <span class=\"sr-only\">Previous</span>
        </a>
        <a class=\"right carousel-control\" href=\"#myCarousel_2\" role=\"button\" data-slide=\"next\">
          <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
          <span class=\"sr-only\">Next</span>
        </a>
        </div><!-- /.carousel -->
      </div>

      <div class=\"col-lg-3\">
        <div id=\"myCarousel_3\" class=\"carousel slide\" data-ride=\"carousel\">
        <!-- Indicators -->
        <ol class=\"carousel-indicators\">
          <li data-target=\"#myCarousel_3\" data-slide-to=\"0\" class=\"active\"></li>
          <li data-target=\"#myCarousel_3\" data-slide-to=\"1\"></li>
          <li data-target=\"#myCarousel_3\" data-slide-to=\"2\"></li>
        </ol>
        <div class=\"carousel-inner\" role=\"listbox\">
          <div class=\"item active\">
            <img src=\"data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==\" alt=\"First slide\">
            <div class=\"container\">
              <div class=\"carousel-caption\">
                <h1>ESPACE LOISIR</h1>
                <p>En Construction</p>
              </div>
            </div>
          </div>
          
        </div>
        <a class=\"left carousel-control\" href=\"#myCarousel_3\" role=\"button\" data-slide=\"prev\">
          <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
          <span class=\"sr-only\">Previous</span>
        </a>
        <a class=\"right carousel-control\" href=\"#myCarousel_3\" role=\"button\" data-slide=\"next\">
          <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
          <span class=\"sr-only\">Next</span>
        </a>
        </div><!-- /.carousel -->
      </div>

      <div class=\"col-lg-3\">
        <div id=\"myCarousel_4\" class=\"carousel slide\" data-ride=\"carousel\">
        <!-- Indicators -->
        <ol class=\"carousel-indicators\">
          <li data-target=\"#myCarousel_4\" data-slide-to=\"0\" class=\"active\"></li>
          <li data-target=\"#myCarousel_4\" data-slide-to=\"1\"></li>
          <li data-target=\"#myCarousel_4\" data-slide-to=\"2\"></li>
        </ol>
        <div class=\"carousel-inner\" role=\"listbox\">
          <div class=\"item active\">
            <img src=\"data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==\" alt=\"First slide\">
            <div class=\"container\">
              <div class=\"carousel-caption\">
                <h1>PADDOCKOTELS</h1>
                <p>En Construction</p>
                
              </div>
            </div>
          </div>
        </div>
        <a class=\"left carousel-control\" href=\"#myCarousel_4\" role=\"button\" data-slide=\"prev\">
          <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
          <span class=\"sr-only\">Previous</span>
        </a>
        <a class=\"right carousel-control\" href=\"#myCarousel_4\" role=\"button\" data-slide=\"next\">
          <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
          <span class=\"sr-only\">Next</span>
        </a>
        </div><!-- /.carousel -->
      </div>

    </div>
    

    <!-- ================================================== -->
    <div class=\"container\" id=\"reseau_sociaux\">
      <div class=\"row\" style=\"text-align:center; font-size: 150%;\" >
        <li class=\"glyphicon glyphicon-phone-alt\"></li>
          <a href=\"\"><strong>Contact</strong></a> 
        <hr>
      </div>

      <div class=\"row-fluid\">
        <div class=\"col-md-offset-4\">
          <a class=\"col-lg-1\" href=\"#\">
            <img src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/domaine/images/facebook.jpg"), "html", null, true);
        echo " \" alt=\"logo facebook\" title=\"logo facebook\">
          </a>

          <a class=\"col-lg-1\" href=\"#\">
            <img src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/domaine/images/youtube.jpg"), "html", null, true);
        echo " \" alt=\"logo youtube\" title=\"logo youtube\">
          </a>
        </div>
      </div>
    </div>

    <hr>

    <div class=\"container\">
      <div class=\"row-fluid\">
        ";
        // line 227
        $this->displayBlock('section', $context, $blocks);
        // line 230
        echo "      </div>

      <div class=\"row-fluid\">
        ";
        // line 233
        $this->displayBlock('section2', $context, $blocks);
        // line 236
        echo "      </div>
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
        // line 255
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/domaine/js/doc-min.js"), "html", null, true);
        echo "\"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/domaine/js/bug-workaround.js"), "html", null, true);
        echo "\"></script>
  </body>
</html>
";
    }

    // line 227
    public function block_section($context, array $blocks = array())
    {
        // line 228
        echo "
        ";
    }

    // line 233
    public function block_section2($context, array $blocks = array())
    {
        // line 234
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "::layoutDomaineLerabot.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  338 => 234,  335 => 233,  330 => 228,  327 => 227,  319 => 259,  314 => 257,  309 => 255,  288 => 236,  286 => 233,  281 => 230,  279 => 227,  266 => 217,  259 => 213,  159 => 116,  145 => 105,  110 => 73,  96 => 62,  64 => 33,  60 => 32,  46 => 21,  39 => 17,  21 => 1,  31 => 4,  28 => 3,);
    }
}
