<?php

/* PageBundle:Admin:ajouter_image_carousel_page.html.twig */
class __TwigTemplate_792ca4ad595d6aee795136972ec1424c0d00866a388f0e39d1f740b33d1e7e9e extends Twig_Template
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
        echo "\t<h2>Ajout image carousel : <strong>Page \"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "page"), "nom"), "html", null, true);
        echo "\" </strong></h2>
\t
\t<div class=\"well\">
\t  <form action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Page_admin_ajouter_image_carousel_page", array("idpage" => $this->getAttribute($this->getContext($context, "page"), "id"))), "html", null, true);
        echo " \" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo ">
\t  \t\t";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "
\t    <input type=\"submit\" class=\"btn btn-primary\" value=\"Envoyer\"/>
\t  </form>
\t</div>

";
    }

    public function getTemplateName()
    {
        return "PageBundle:Admin:ajouter_image_carousel_page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 8,  38 => 7,  31 => 4,  28 => 3,);
    }
}
