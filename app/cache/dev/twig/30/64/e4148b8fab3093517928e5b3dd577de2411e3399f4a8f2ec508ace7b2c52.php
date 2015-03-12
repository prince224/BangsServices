<?php

/* DomaineBundle:Admin:modifier_nom_menu.html.twig */
class __TwigTemplate_3064e4148b8fab3093517928e5b3dd577de2411e3399f4a8f2ec508ace7b2c52 extends Twig_Template
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
        // line 2
        $this->env->getExtension('form')->renderer->setTheme($this->getContext($context, "form"), array(0 => "DomaineBundle:Form:fields.html.twig"));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_section($context, array $blocks = array())
    {
        // line 5
        echo "
<h1>Personnalier votre menu  : </h1>
<div class=\"col-md-6\">
\t<p>Définissez un nom pour votre menu.</p>
\t<p>Définissez la position pour votre menu sur le site, en indiquant un numéro de 0 à 3.</p>
\t<p>
\t\t<ul>
\t\t\t<li>- 0  : En haut</li>
\t\t\t<li>- 1 : En bas</li>
\t\t\t<li>- 2 : A gauche</li>
\t\t\t<li>- 3 : A droite</li>
\t\t</ul>
\t\t<strong>Par défaut, tous les menus ont la position 0 </strong>
\t</p>
\t<div class=\"col-md-3 well\">
\t\t<form action=\"#\" method=\"post\" ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo ">
\t  \t\t<table class=\"table responsive\">
\t\t  \t\t<tbody>
\t\t  \t\t\t";
        // line 23
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form');
        echo "
\t\t  \t\t</tbody>
\t  \t\t</table>
\t    <input type=\"submit\" class=\"btn btn-success\" />
\t  </form>
\t</div>

</div>

";
    }

    public function getTemplateName()
    {
        return "DomaineBundle:Admin:modifier_nom_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 23,  50 => 20,  33 => 5,  30 => 4,  25 => 2,);
    }
}
