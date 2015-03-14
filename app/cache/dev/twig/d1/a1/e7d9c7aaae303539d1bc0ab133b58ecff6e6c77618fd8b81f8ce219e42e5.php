<?php

/* PageBundle:Admin:ajouter_sous_menu_page.html.twig */
class __TwigTemplate_d1a1e7d9c7aaae303539d1bc0ab133b58ecff6e6c77618fd8b81f8ce219e42e5 extends Twig_Template
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
        // line 3
        $this->env->getExtension('form')->renderer->setTheme($this->getContext($context, "form"), array(0 => "DomaineBundle:Form:fields.html.twig"));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_section($context, array $blocks = array())
    {
        // line 7
        echo "<h1>Créer un sous-menu : pour la page <strong>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "page"), "nom"), "html", null, true);
        echo " </strong></h1>
<div class=\"well\">
  <form action=\"#\" method=\"post\" ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo ">
  \t<table class=\"table responsive\">
  \t\t<tbody>
  \t\t\t";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form');
        echo "
  \t\t</tbody>
  \t</table>
   
    <input type=\"submit\" class=\"btn btn-success\" />
  </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "PageBundle:Admin:ajouter_sous_menu_page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 12,  39 => 9,  33 => 7,  30 => 6,  25 => 3,);
    }
}
